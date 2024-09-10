import { css } from '@emotion/react';
import { useIsFetching, useQueryClient } from '@tanstack/react-query';
import { __ } from '@wordpress/i18n';
import { useEffect } from 'react';
import { Controller, useFormContext } from 'react-hook-form';
import { useNavigate } from 'react-router-dom';

import FormCoursePrerequisites from '@Components/fields/FormCoursePrerequisites';
import FormFileUploader from '@Components/fields/FormFileUploader';
import FormInputWithContent from '@Components/fields/FormInputWithContent';
import FormTextareaInput from '@Components/fields/FormTextareaInput';

import LiveClass from '@CourseBuilderComponents/additional/LiveClass';
import CanvasHead from '@CourseBuilderComponents/layouts/CanvasHead';
import {
  type CourseDetailsResponse,
  type CourseFormData,
  usePrerequisiteCoursesQuery,
} from '@CourseBuilderServices/course';

import { Addons } from '@Config/constants';
import { borderRadius, colorTokens, footerHeight, headerHeight, spacing } from '@Config/styles';
import { typography } from '@Config/typography';
import Show from '@Controls/Show';
import Navigator from '@CourseBuilderComponents/layouts/Navigator';
import { getCourseId, isAddonEnabled } from '@CourseBuilderUtils/utils';
import { styleUtils } from '@Utils/style-utils';
import Certificate from '../components/additional/Certificate';

const courseId = getCourseId();
const isPrerequisiteAddonEnabled = isAddonEnabled(Addons.TUTOR_PREREQUISITES);

const Additional = () => {
  const navigate = useNavigate();

  useEffect(() => {
    if (!courseId) {
      navigate('/', {
        replace: true,
      });
    }
  }, [navigate]);

  if (!courseId) {
    return null;
  }

  const form = useFormContext<CourseFormData>();
  const queryClient = useQueryClient();
  const isCourseDetailsFetching = useIsFetching({
    queryKey: ['CourseDetails', courseId],
  });

  const courseDetails = queryClient.getQueryData(['CourseDetails', courseId]) as CourseDetailsResponse;
  const prerequisiteCourses = (courseDetails?.course_prerequisites || []).map((prerequisite) =>
    String(prerequisite.id),
  );

  const prerequisiteCoursesQuery = usePrerequisiteCoursesQuery(
    String(courseId) ? [String(courseId), ...prerequisiteCourses] : prerequisiteCourses,
    !!isPrerequisiteAddonEnabled && !isCourseDetailsFetching,
  );

  return (
    <div css={styles.wrapper}>
      <div css={styles.leftSide}>
        <CanvasHead title={__('Additional', 'tutor')} backUrl="/curriculum" />
        <div css={styles.formSection}>
          <div css={styles.titleAndSub}>
            <div css={styles.title}>{__('Information', 'tutor')}</div>
            <div css={styles.subtitle}>
              {__('Add Topics in the Course Builder section to create lessons, quizzes, and assignments.', 'tutor')}
            </div>
          </div>
          <div css={styles.fieldsWrapper}>
            <Controller
              name="course_benefits"
              control={form.control}
              render={(controllerProps) => (
                <FormTextareaInput
                  {...controllerProps}
                  label={__('What Will I Learn?', 'tutor')}
                  placeholder={__('Write here the course benefits (One Per Line)', 'tutor')}
                  rows={2}
                  enableResize
                  loading={!!isCourseDetailsFetching && !controllerProps.field.value}
                />
              )}
            />

            <Controller
              name="course_target_audience"
              control={form.control}
              render={(controllerProps) => (
                <FormTextareaInput
                  {...controllerProps}
                  label={__('Targeted Audience', 'tutor')}
                  placeholder={__(
                    'Specify the target audience that will benefit the most from the course.(One Line Per target audience)',
                    'tutor',
                  )}
                  rows={2}
                  enableResize
                  loading={!!isCourseDetailsFetching && !controllerProps.field.value}
                />
              )}
            />

            <div css={styles.totalCourseDuration}>
              <Controller
                name="course_duration_hours"
                control={form.control}
                render={(controllerProps) => (
                  <FormInputWithContent
                    {...controllerProps}
                    type="number"
                    label={__('Total Course Duration', 'tutor')}
                    placeholder="0"
                    contentPosition="right"
                    content={__('hour', 'tutor')}
                    loading={!!isCourseDetailsFetching && !controllerProps.field.value}
                  />
                )}
              />
              <Controller
                name="course_duration_minutes"
                control={form.control}
                render={(controllerProps) => (
                  <FormInputWithContent
                    {...controllerProps}
                    type="number"
                    placeholder="0"
                    contentPosition="right"
                    content={__('min', 'tutor')}
                    loading={!!isCourseDetailsFetching && !controllerProps.field.value}
                  />
                )}
              />
            </div>

            <Controller
              name="course_material_includes"
              control={form.control}
              render={(controllerProps) => (
                <FormTextareaInput
                  {...controllerProps}
                  label={__('Materials Included', 'tutor')}
                  placeholder={__(
                    'A list of assets you will be providing for the students in this course (One Per Line)',
                    'tutor',
                  )}
                  rows={4}
                  enableResize
                  loading={!!isCourseDetailsFetching && !controllerProps.field.value}
                />
              )}
            />

            <Controller
              name="course_requirements"
              control={form.control}
              render={(controllerProps) => (
                <FormTextareaInput
                  {...controllerProps}
                  label={__('Requirements/Instructions', 'tutor')}
                  placeholder={__(
                    'Additional requirements or special instructions for the students (One Per Line)',
                    'tutor',
                  )}
                  rows={2}
                  enableResize
                  loading={!!isCourseDetailsFetching && !controllerProps.field.value}
                />
              )}
            />
          </div>
        </div>

        <Show when={isAddonEnabled(Addons.TUTOR_CERTIFICATE)}>
          <div css={styles.formSection}>
            <div css={styles.titleAndSub}>
              <div css={styles.title}>{__('Certificate', 'tutor')}</div>
              <div css={styles.subtitle}>{__('Select certificate to inspire your students', 'tutor')}</div>

              <Certificate />
            </div>
          </div>
        </Show>
        <Navigator styleModifier={styles.navigator} />
      </div>

      <div css={styles.sidebar}>
        {isPrerequisiteAddonEnabled && (
          <Controller
            name="course_prerequisites"
            control={form.control}
            render={(controllerProps) => (
              <FormCoursePrerequisites
                {...controllerProps}
                label={__('Course prerequisites', 'tutor')}
                placeholder={__('Search to add course prerequisites', 'tutor')}
                options={prerequisiteCoursesQuery.data || []}
                isSearchable
                loading={
                  prerequisiteCoursesQuery.isLoading || (!!isCourseDetailsFetching && !controllerProps.field.value)
                }
              />
            )}
          />
        )}
        <div css={styles.uploadAttachment}>
          <Controller
            name="course_attachments"
            control={form.control}
            render={(controllerProps) => (
              <FormFileUploader
                {...controllerProps}
                label={__('Attachments', 'tutor')}
                buttonText={__('Upload Attachment', 'tutor')}
                selectMultiple
              />
            )}
          />
        </div>
        <LiveClass />
      </div>
    </div>
  );
};

export default Additional;

const styles = {
  wrapper: css`
    display: grid;
    grid-template-columns: 1fr 338px;
  `,
  leftSide: css`
    padding: ${spacing[24]} ${spacing[36]} ${spacing[24]} 0;
		${styleUtils.display.flex('column')}
		gap: ${spacing[24]};
  `,
  formSection: css`
		${styleUtils.display.flex('column')}
		gap: ${spacing[20]};
		border: 1px solid ${colorTokens.stroke.default};
		border-radius: ${borderRadius.card};
		background-color: ${colorTokens.background.white};
		padding: ${spacing[12]} ${spacing[20]} ${spacing[20]} ${spacing[20]};
	`,
  titleAndSub: css`
		${styleUtils.display.flex('column')}
		gap: ${spacing[4]};
	`,
  title: css`
		${typography.body('medium')};
		color: ${colorTokens.text.primary};
	`,
  subtitle: css`
		${typography.caption()};
		color: ${colorTokens.text.hints};
	`,
  fieldsWrapper: css`
    position: sticky;
    top: 0;
    ${styleUtils.display.flex('column')}
    gap: ${spacing[24]};
  `,
  totalCourseDuration: css`
    ${styleUtils.display.flex()}
    align-items: end;
    gap: ${spacing[8]};

    & > div {
      flex: 1;
    }
  `,
  sidebar: css`
    ${styleUtils.display.flex('column')}
    padding: ${spacing[24]} 0 ${spacing[24]} ${spacing[32]};
    border-left: 1px solid ${colorTokens.stroke.divider};
    min-height: calc(100vh - (${headerHeight}px + ${footerHeight}px));
    gap: ${spacing[16]};
  `,
  coursePrerequisite: css`
    ${styleUtils.display.flex('column')}
    gap: ${spacing[8]};
  `,
  courses: css`
    ${styleUtils.display.flex('column')}
    gap: ${spacing[8]};
    max-height: 256px;
    height: 100%;
    overflow-y: auto;
  `,
  uploadAttachment: css`
    padding-top: ${spacing[8]};
  `,
  liveClass: css`
    ${styleUtils.display.flex('column')}
    gap: ${spacing[8]};
  `,
  navigator: css`
    margin-block: ${spacing[40]};
  `,
  tabs: css`
    position: relative;
  `,
  certificateWrapper: css`
    ${styleUtils.display.flex()}
    gap: ${spacing[16]};
  `,
  orientation: css`
    ${styleUtils.display.flex()}
    gap: ${spacing[8]};
    position: absolute;
    right: 0;
    top: 0;
  `,
  activeOrientation: ({
    isActive,
  }: {
    isActive: boolean;
  }) => css`
    color: ${isActive ? colorTokens.icon.brand : colorTokens.icon.default};
  `,
};