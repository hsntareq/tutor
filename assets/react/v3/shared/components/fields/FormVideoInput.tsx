import Button from '@Atoms/Button';
import SVGIcon from '@Atoms/SVGIcon';
import { borderRadius, colorTokens, fontWeight, shadow, spacing, zIndex } from '@Config/styles';
import { typography } from '@Config/typography';
import Show from '@Controls/Show';
import type { FormControllerProps } from '@Utils/form';
import { __ } from '@wordpress/i18n';
import { rgba } from 'polished';
import FormFieldWrapper from './FormFieldWrapper';
import { styleUtils } from '@Utils/style-utils';
import { useEffect, useRef, useState } from 'react';
import ImageInput from '@Atoms/ImageInput';
import { Portal, usePortalPopover } from '@Hooks/usePortalPopover';
import { AnimationType } from '@Hooks/useAnimation';
import { css } from '@emotion/react';
import config, { tutorConfig } from '@Config/config';
import { useFormWithGlobalError } from '@Hooks/useFormWithGlobalError';
import { Controller } from 'react-hook-form';
import FormSelectInput from './FormSelectInput';
import FormTextareaInput from './FormTextareaInput';
import type { Option } from '@Utils/types';

export interface CourseVideo {
  source: string;
  source_video_id: string;
  poster: string;
  poster_url: string;
  source_external_url: string;
  source_shortcode: string;
  source_youtube: string;
  source_vimeo: string;
  source_embedded: string;
}

interface URLFormData {
  videoSource: string;
  videoUrl: string;
}

type FormVideoInputProps = {
  label?: string;
  onChange?: (video: CourseVideo | null) => void;
  helpText?: string;
  buttonText?: string;
  infoText?: string;
  supportedFormats?: string[];
  onGetDuration?: (duration: {
    hours: number;
    minutes: number;
    seconds: number;
  }) => void;
} & FormControllerProps<CourseVideo | null>;

const videoSources = Array.isArray(tutorConfig.settings.supported_video_sources)
  ? tutorConfig.settings.supported_video_sources
  : [tutorConfig.settings.supported_video_sources];

const videoSourceOptions = videoSources.reduce((options, source) => {
  let option: Option<string> | undefined;
  switch (source) {
    case 'external_url':
      option = { label: __('External URL', 'tutor'), value: 'external_url' };
      break;
    case 'shortcode':
      option = { label: __('Shortcode', 'tutor'), value: 'shortcode' };
      break;
    case 'youtube':
      option = { label: __('YouTube', 'tutor'), value: 'youtube' };
      break;
    case 'vimeo':
      option = { label: __('Vimeo', 'tutor'), value: 'vimeo' };
      break;
    case 'embedded':
      option = { label: __('Embedded', 'tutor'), value: 'embedded' };
      break;
    default:
      option = undefined;
  }
  if (option) options.push(option);
  return options;
}, [] as Option<string>[]);

const updateFieldValue = (fieldValue: CourseVideo | null, update: Partial<CourseVideo>) => {
  const defaultValue = {
    source: '',
    source_video_id: '',
    poster: '',
    poster_url: '',
    source_external_url: '',
    source_shortcode: '',
    source_youtube: '',
    source_vimeo: '',
    source_embedded: '',
  };

  return fieldValue ? { ...fieldValue, ...update } : { ...defaultValue, ...update };
};

const FormVideoInput = ({
  field,
  fieldState,
  label,
  helpText,
  buttonText = __('Upload Media', 'tutor'),
  infoText,
  onChange,
  supportedFormats,
  onGetDuration,
}: FormVideoInputProps) => {
  const fieldValue = field.value;
  const form = useFormWithGlobalError<URLFormData>({
    defaultValues: {
      videoSource: fieldValue?.source || 'html5',
      videoUrl: fieldValue?.[`source_${fieldValue?.source}` as keyof CourseVideo] || '',
    },
  });

  const videoSource = form.watch('videoSource');

  // biome-ignore lint/correctness/useExhaustiveDependencies: <explanation>
  useEffect(() => {
    if (!fieldValue) {
      return;
    }
    form.setValue('videoSource', fieldValue.source);
    form.setValue('videoUrl', fieldValue[`source_${fieldValue.source}` as keyof CourseVideo] || '');
  }, [fieldValue]);

  // biome-ignore lint/correctness/useExhaustiveDependencies: <explanation>
  useEffect(() => {
    if (!fieldValue?.[`source_${videoSource}` as keyof CourseVideo]) {
      form.setValue('videoUrl', '');
      return;
    }
    form.setValue('videoUrl', fieldValue?.[`source_${videoSource}` as keyof CourseVideo]);
  }, [videoSource]);

  const [isOpen, setIsOpen] = useState(false);
  const triggerRef = useRef<HTMLDivElement>(null);
  const { popoverRef, position } = usePortalPopover<HTMLDivElement, HTMLDivElement>({
    isOpen,
    triggerRef,
    positionModifier: {
      top: -(triggerRef.current?.offsetHeight || 0) - 9, // 9 is the gap between the trigger and the popover
      left: 0,
    },
  });

  const handleUpload = (type: 'video' | 'poster') => {
    const uploader = window.wp.media({
      library: {
        type: type === 'video' ? (supportedFormats || []).map((format) => `video/${format}`).join(',') : 'image',
      },
    });

    uploader.open();
    uploader.on('select', () => {
      const attachment = uploader.state().get('selection').first().toJSON();
      const updateData =
        type === 'video'
          ? { source: 'html5', source_video_id: attachment.id }
          : { poster: attachment.id, poster_url: attachment.url };

      if (type === 'video' && onGetDuration) {
        const video = document.createElement('video');
        video.src = attachment.url;
        video.preload = 'metadata';
        video.onloadedmetadata = () => {
          const duration = Math.floor(video.duration);
          const hours = Math.floor(duration / 3600);
          const minutes = Math.floor((duration % 3600) / 60);
          const seconds = duration % 60;
          onGetDuration({ hours, minutes, seconds });
        };
      }

      field.onChange(updateFieldValue(fieldValue, updateData));
      onChange?.(updateFieldValue(fieldValue, updateData));
    });
  };

  const handleClear = (type: 'video' | 'poster') => {
    const updateData = type === 'video' ? { source: '' } : { poster: '', poster_url: '' };
    field.onChange(updateFieldValue(fieldValue, updateData));
    if (onChange) {
      onChange(updateFieldValue(fieldValue, updateData));
    }
  };

  const isVideoAvailable = () => {
    if (!fieldValue?.source) {
      return false;
    }
    const sourceType = fieldValue?.source;
    const videoIdKey = `source_${sourceType}` as keyof CourseVideo;
    return fieldValue && fieldValue[videoIdKey] !== '';
  };

  const handleDataFromUrl = (data: URLFormData) => {
    const sourceMap: { [key: string]: string } = {
      external: 'external_url',
      shortcode: 'shortcode',
      youtube: 'youtube',
      vimeo: 'vimeo',
      embedded: 'embedded',
    };

    const source = sourceMap[data.videoSource] || 'external_url';
    const updatedValue = {
      source,
      [`source_${source}`]: data.videoUrl,
    };

    field.onChange(updateFieldValue(fieldValue, updatedValue));
    onChange?.(updateFieldValue(fieldValue, updatedValue));
    setIsOpen(false);
  };

  return (
    <>
      <FormFieldWrapper label={label} field={field} fieldState={fieldState} helpText={helpText}>
        {() => {
          return (
            <div>
              <Show
                when={isVideoAvailable()}
                fallback={
                  <div
                    ref={triggerRef}
                    css={styles.emptyMedia({
                      hasVideoSource: videoSources.length > 0,
                    })}
                  >
                    <Show
                      when={videoSources.length > 0}
                      fallback={
                        <>
                          <p css={styles.warningText}>
                            <SVGIcon name="info" height={20} width={20} />
                            {__('No video source selected', 'tutor')}
                          </p>

                          <Button
                            buttonCss={styles.selectFromSettingsButton}
                            variant="secondary"
                            size="small"
                            icon={<SVGIcon name="linkExternal" height={24} width={24} />}
                            onClick={() => {
                              window.open(config.VIDEO_SOURCES_SETTINGS_URL, '_blank');
                            }}
                          >
                            {__('Select from settings', 'tutor')}
                          </Button>
                        </>
                      }
                    >
                      <Show when={videoSources.includes('html5')}>
                        <Button
                          variant="secondary"
                          icon={<SVGIcon name="monitorPlay" height={24} width={24} />}
                          onClick={() => {
                            handleUpload('video');
                          }}
                        >
                          {buttonText}
                        </Button>
                      </Show>
                      <Show when={videoSources.filter((source) => source !== 'html5').length > 0}>
                        <button
                          type="button"
                          css={styles.urlButton}
                          onClick={() => {
                            setIsOpen((previousState) => !previousState);
                          }}
                        >
                          {__('Add from URL', 'tutor')}
                        </button>
                      </Show>

                      <p css={styles.infoTexts}>{infoText}</p>
                    </Show>
                  </div>
                }
              >
                {(media) => {
                  return (
                    <div css={styles.previewWrapper}>
                      <div css={styles.videoInfoWrapper}>
                        <div css={styles.videoInfoCard}>
                          <SVGIcon name="video" height={40} width={40} />

                          <div css={styles.videoInfo}>
                            <div css={styles.videoInfoTitle}>
                              <div css={styleUtils.text.ellipsis(1)}>{__('Video added', 'tutor')}</div>
                            </div>
                          </div>
                        </div>

                        <button
                          type="button"
                          css={styles.removeButton}
                          onClick={() => {
                            handleClear('video');
                          }}
                        >
                          <SVGIcon name="cross" height={24} width={24} />
                        </button>
                      </div>
                      <div css={styles.imagePreview}>
                        <Show
                          when={fieldValue?.source === 'html5'}
                          fallback={
                            <div css={styles.urlData}>
                              <p>
                                <span>{`${__('Source', 'tutor')}: `}</span>
                                {`${
                                  videoSourceOptions.find((option) => option.value === form.watch('videoSource'))
                                    ?.label || ''
                                }`}
                              </p>
                              <p>
                                <span>{`${__('URL', 'tutor')}: `}</span>
                                {`${form.watch('videoUrl')}`}
                              </p>
                            </div>
                          }
                        >
                          <ImageInput
                            value={
                              fieldValue
                                ? {
                                    id: Number(fieldValue.poster),
                                    url: fieldValue.poster_url,
                                    title: '',
                                  }
                                : null
                            }
                            uploadHandler={() => handleUpload('poster')}
                            clearHandler={() => handleClear('poster')}
                            buttonText={__('Upload Poster', 'tutor')}
                            infoText={__('Upload a poster for the video', 'tutor')}
                            emptyImageCss={styles.thumbImage}
                            previewImageCss={styles.thumbImage}
                            overlayCss={styles.thumbImage}
                            replaceButtonText={__('Replace Poster', 'tutor')}
                          />
                        </Show>
                      </div>
                    </div>
                  );
                }}
              </Show>
            </div>
          );
        }}
      </FormFieldWrapper>
      <Portal isOpen={isOpen} onClickOutside={() => setIsOpen(false)} animationType={AnimationType.fadeIn}>
        <div
          ref={popoverRef}
          css={[
            styles.popover,
            {
              left: position.left,
              top: position.top,
              maxWidth: triggerRef.current?.offsetWidth,
            },
          ]}
        >
          <div css={styles.popoverContent}>
            <Controller
              control={form.control}
              name="videoSource"
              rules={{ required: __('This field is required', 'tutor') }}
              render={(controllerProps) => {
                return (
                  <FormSelectInput
                    {...controllerProps}
                    options={videoSourceOptions}
                    placeholder={__('Select source', 'tutor')}
                  />
                );
              }}
            />
            <Controller
              control={form.control}
              name="videoUrl"
              rules={{ required: __('This field is required', 'tutor') }}
              render={(controllerProps) => {
                return <FormTextareaInput {...controllerProps} rows={2} placeholder={__('https://')} />;
              }}
            />

            <div css={styles.popoverButtonWrapper}>
              <Button
                variant="text"
                size="small"
                onClick={() => {
                  setIsOpen(false);
                }}
              >
                {__('Cancel', 'tutor')}
              </Button>
              <Button variant="secondary" size="small" onClick={form.handleSubmit(handleDataFromUrl)}>
                {__('Ok', 'tutor')}
              </Button>
            </div>
          </div>
        </div>
      </Portal>
    </>
  );
};

export default FormVideoInput;

const styles = {
  emptyMedia: ({
    hasVideoSource,
  }: {
    hasVideoSource: boolean;
  }) => css`
    width: 100%;
    height: 100%;
    min-height: 168px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: ${spacing[8]};
    border: 1px dashed ${colorTokens.stroke.border};
    border-radius: ${borderRadius[8]};
    background-color: ${colorTokens.background.status.warning};

    ${
      hasVideoSource &&
      css`
        background-color: ${colorTokens.bg.white};
      `
    }
  `,
  infoTexts: css`
    ${typography.small()};
    color: ${colorTokens.text.subdued};
  `,
  warningText: css`
    ${styleUtils.display.flex()};
    align-items: center;
    gap: ${spacing[4]};
    ${typography.caption()};
    color: ${colorTokens.text.warning};
  `,
  selectFromSettingsButton: css`
    background: ${colorTokens.bg.white};
  `,
  urlData: css`
    ${typography.caption()};
    ${styleUtils.display.flex('column')};
    padding: ${spacing[8]} ${spacing[12]};
    gap: ${spacing[8]};

    span {
      font-weight: ${fontWeight.semiBold};
      color: ${colorTokens.text.hints};
    }
  `,
  previewWrapper: css`
    width: 100%;
    height: 100%;
    border: 1px solid ${colorTokens.stroke.default};
    border-radius: ${borderRadius[8]};
    overflow: hidden;
  `,
  videoInfoWrapper: css`
    ${styleUtils.display.flex()};
    justify-content: space-between;
    align-items: center;
    gap: ${spacing[20]};
    padding: ${spacing[8]} ${spacing[12]};
  `,
  videoInfoCard: css`
    ${styleUtils.display.flex()};
    align-items: center;
    gap: ${spacing[8]};

    svg {
      color: ${colorTokens.icon.hover};
    }
  `,
  videoInfo: css`
    ${styleUtils.display.flex('column')};
    gap: ${spacing[4]};
  `,
  videoInfoTitle: css`
    ${styleUtils.display.flex()};
    ${typography.caption('medium')}
    word-break: break-all;
  `,
  fileExtension: css`
    flex-shrink: 0;
  `,
  videoInfoSubtitle: css`
    ${typography.tiny('regular')}
    ${styleUtils.display.flex()};
    align-items: center;
    gap: ${spacing[8]};
    color: ${colorTokens.text.hints};

    svg {
      color: ${colorTokens.icon.default};
    }
  `,
  imagePreview: css`
    width: 100%;
    max-height: 168px;
    position: relative;
    overflow: hidden;
    background-color: ${colorTokens.bg.white};

    &:hover {
      [data-hover-buttons-wrapper] {
        opacity: 1;
      }
    }
  `,
  thumbImage: css`
    border-top-right-radius: 0;
    border-top-left-radius: 0;
    border: none;
  `,
  duration: css`
    position: absolute;
    bottom: ${spacing[12]};
    right: ${spacing[12]};
    padding: ${spacing[2]} ${spacing[4]};
    ${typography.tiny('regular')};
    color: ${colorTokens.text.white};
    border-radius: ${borderRadius[2]};
    background-color: ${rgba(colorTokens.color.black.main, 0.5)};
  `,
  hoverPreview: css`
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: ${spacing[8]};
    opacity: 0;
    position: absolute;
    inset: 0;
    background-color: ${rgba(colorTokens.color.black.main, 0.6)};
    border-radius: ${borderRadius[8]};

    button {
      box-shadow: ${shadow.button};
    }
  `,
  urlButton: css`
    ${styleUtils.resetButton};
    ${typography.small('medium')};
    color: ${colorTokens.text.brand};
  `,
  removeButton: css`
    ${styleUtils.resetButton};
    color: ${colorTokens.icon.default};
  `,
  popover: css`
    position: absolute;
    width: 100%;
    z-index: ${zIndex.dropdown};
    background-color: ${colorTokens.bg.white};
    border-radius: ${borderRadius.card};
    box-shadow: ${shadow.popover};
  `,
  popoverContent: css`
    ${styleUtils.display.flex('column')};
    gap: ${spacing[12]};
    padding: ${spacing[16]};
  `,
  popoverButtonWrapper: css`
    ${styleUtils.display.flex()};
    gap: ${spacing[8]};
    justify-content: flex-end;
  `,
};
