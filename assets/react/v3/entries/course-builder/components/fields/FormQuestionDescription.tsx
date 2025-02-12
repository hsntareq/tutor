import { css } from '@emotion/react';
import { __ } from '@wordpress/i18n';
import { useState } from 'react';

import Button from '@TutorShared/atoms/Button';
import { tutorConfig } from '@TutorShared/config/config';
import { borderRadius, colorTokens, spacing } from '@TutorShared/config/styles';
import { typography } from '@TutorShared/config/typography';
import Show from '@TutorShared/controls/Show';
import type { FormControllerProps } from '@TutorShared/utils/form';

import FormTextareaInput from '@TutorShared/components/fields/FormTextareaInput';
import FormWPEditor from '@TutorShared/components/fields/FormWPEditor';

interface FormQuestionDescriptionProps extends FormControllerProps<string | null> {
  label?: string;
  maxLimit?: number;
  disabled?: boolean;
  readOnly?: boolean;
  loading?: boolean;
  placeholder?: string;
  helpText?: string;
  onChange?: (value: string | number) => void;
}

const isTutorPro = !!tutorConfig.tutor_pro_url;

const FormQuestionDescription = ({
  label,
  field,
  fieldState,
  disabled = false,
  loading,
  placeholder,
  helpText,
  onChange,
}: FormQuestionDescriptionProps) => {
  const inputValue = field.value ?? '';

  const [isEdit, setIsEdit] = useState<boolean>(false);
  const [previousValue, setPreviousValue] = useState<string>(inputValue);

  return (
    <div css={styles.editorWrapper({ isEdit })}>
      <div css={styles.container({ isEdit, isDisabled: disabled })}>
        <Show
          when={!isEdit && (!isTutorPro || !inputValue)}
          fallback={
            <Show
              when={isTutorPro}
              fallback={
                <FormTextareaInput
                  field={field}
                  fieldState={fieldState}
                  label={label}
                  disabled={disabled}
                  helpText={helpText}
                  loading={loading}
                  readOnly={!isEdit}
                  onChange={onChange}
                  placeholder={placeholder}
                  autoResize
                  maxHeight={400}
                />
              }
            >
              <FormWPEditor
                field={field}
                fieldState={fieldState}
                label={label}
                disabled={disabled}
                helpText={helpText}
                loading={loading}
                readOnly={!isEdit}
                onChange={onChange}
                placeholder={placeholder}
                min_height={100}
                max_height={400}
              />
            </Show>
          }
        >
          <div
            css={styles.placeholder}
            dangerouslySetInnerHTML={{
              __html: inputValue || placeholder || '',
            }}
          />
        </Show>
        <Show when={isEdit}>
          <div data-action-buttons css={styles.actionButtonWrapper({ isEdit })}>
            <Button
              variant="text"
              size="small"
              onClick={() => {
                field.onChange(previousValue);
                setIsEdit(false);
              }}
            >
              {__('Cancel', 'tutor')}
            </Button>
            <Button
              variant="secondary"
              size="small"
              onClick={() => {
                setIsEdit(false);
                setPreviousValue(field.value || '');
              }}
              disabled={inputValue === previousValue}
            >
              {__('Ok', 'tutor')}
            </Button>
          </div>
        </Show>
        <Show when={!isEdit}>
          <div
            onClick={() => {
              if (!isEdit && !disabled) {
                setIsEdit(true);
              }
            }}
            onKeyDown={(event) => {
              if ((event.key === 'Enter' || event.key === ' ') && !isEdit) {
                setIsEdit(true);
              }
            }}
            data-overlay
            tabIndex={0}
            role="button"
          />
        </Show>
      </div>
    </div>
  );
};

export default FormQuestionDescription;

const styles = {
  editorWrapper: ({ isEdit }: { isEdit: boolean }) => css`
    position: relative;
    max-height: 400px;
    overflow-y: auto;
    border-radius: ${borderRadius[6]};

    ${isEdit &&
    css`
      padding-inline: 0;
      max-height: unset;
      overflow: unset;
    `}
  `,
  container: ({ isEdit, isDisabled }: { isEdit: boolean; isDisabled: boolean }) => css`
    position: relative;
    display: flex;
    flex-direction: column;
    gap: ${spacing[16]};
    min-height: 64px;
    height: 100%;
    width: 100%;
    inset: 0;
    padding-inline: ${spacing[8]} ${spacing[16]};
    border-radius: ${borderRadius[6]};
    transition: background-color 0.15s ease-in-out;

    [data-overlay] {
      position: absolute;
      inset: 0;
      opacity: 1;

      &:focus-visible {
        outline: 2px solid ${colorTokens.stroke.brand};
        outline-offset: -2px;
        border-radius: ${borderRadius.card};
      }
    }

    & label {
      ${typography.caption()};
      margin-bottom: ${spacing[6]};
      color: ${colorTokens.text.title};
    }

    ${!isDisabled &&
    css`
      &:hover {
        background-color: ${!isEdit && colorTokens.background.white};
        color: ${colorTokens.text.subdued};

        [data-action-buttons] {
          opacity: 1;
        }
      }
    `}

    ${isEdit &&
    css`
      padding-inline: 0;
    `}
  `,
  placeholder: css`
    ${typography.caption()}
    color: ${colorTokens.text.hints};
    height: 100%;
    inset: 0;
    padding-block: ${spacing[8]};
    overflow-x: hidden;
  `,
  actionButtonWrapper: ({ isEdit }: { isEdit: boolean }) => css`
    display: flex;
    justify-content: flex-end;
    gap: ${spacing[8]};
    opacity: 0;
    transition: opacity 0.15s ease-in-out;

    ${isEdit &&
    css`
      opacity: 1;
    `}
  `,
  overlay: css`
    position: absolute;
    inset: 0;
  `,
};
