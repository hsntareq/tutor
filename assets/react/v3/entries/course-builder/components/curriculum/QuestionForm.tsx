import { __ } from '@wordpress/i18n';
import { Controller, useFormContext } from 'react-hook-form';
import { css } from '@emotion/react';

import FormAnswerExplanation from '@Components/fields/FormAnswerExplanation';
import FormQuestionDescription from '@Components/fields/FormQuestionDescription';
import FormQuestionTitle from '@Components/fields/FormQuestionTitle';

import type { QuizForm } from '@CourseBuilderComponents/modals/QuizModal';
import { useQuizModalContext } from '@CourseBuilderContexts/QuizModalContext';
import TrueFalse from '@CourseBuilderComponents/curriculum/question-types/TrueFalse';
import MultipleChoiceAndOrdering from '@CourseBuilderComponents/curriculum/question-types/MultipleChoiceAndOrdering';
import OpenEndedAndShortAnswer from '@CourseBuilderComponents/curriculum/question-types/OpenEndedAndShortAnswer';
import FillinTheBlanks from '@CourseBuilderComponents/curriculum/question-types/FillinTheBlanks';
import Matching from '@CourseBuilderComponents/curriculum/question-types/Matching';
import ImageAnswering from '@CourseBuilderComponents/curriculum/question-types/ImageAnswering';

import { styleUtils } from '@Utils/style-utils';
import { colorTokens, spacing } from '@Config/styles';
import { typography } from '@Config/typography';
import EmptyState from '@Molecules/EmptyState';

import emptyStateImage from '@CourseBuilderPublic/images/empty-state-illustration.webp';
import emptyStateImage2x from '@CourseBuilderPublic/images/empty-state-illustration-2x.webp';

const QuestionForm = () => {
  const { activeQuestionIndex, activeQuestionId } = useQuizModalContext();
  const form = useFormContext<QuizForm>();

  const activeQuestionType = form.watch(`questions.${activeQuestionIndex}.type`);
  const questions = form.watch('questions');

  const questionTypeForm = {
    'true-false': <TrueFalse key={activeQuestionId} activeQuestionIndex={activeQuestionIndex} />,
    'multiple-choice': <MultipleChoiceAndOrdering key={activeQuestionId} />,
    'open-ended': <OpenEndedAndShortAnswer key={activeQuestionId} />,
    'fill-in-the-blanks': <FillinTheBlanks key={activeQuestionId} />,
    'short-answer': <OpenEndedAndShortAnswer key={activeQuestionId} />,
    matching: <Matching key={activeQuestionId} />,
    'image-answering': <ImageAnswering key={activeQuestionId} />,
    ordering: <MultipleChoiceAndOrdering key={activeQuestionId} />,
  } as const;

  if (!activeQuestionId && questions.length === 0) {
    return (
      <div css={styles.emptyState}>
        <EmptyState
          emptyStateImage={emptyStateImage}
          emptyStateImage2x={emptyStateImage2x}
          title={__('Write the quiz name to start creating questions', 'tutor')}
          description={__('You can add questions to the quiz once you have written the quiz name.', 'tutor')}
          imageAltText={__('No Question Image', 'tutor')}
          size="small"
        />
      </div>
    );
  }

  return (
    <div key={activeQuestionId} css={styles.questionForm}>
      <div css={styles.questionWithIndex}>
        <div css={styles.questionIndex}>{activeQuestionIndex + 1}.</div>
        <div css={styles.questionTitleAndDesc}>
          <Controller
            control={form.control}
            name={`questions.${activeQuestionIndex}.title` as 'questions.0.title'}
            render={(controllerProps) => (
              <FormQuestionTitle {...controllerProps} placeholder={__('Write your question here..', 'tutor')} />
            )}
          />

          <Controller
            control={form.control}
            name={`questions.${activeQuestionIndex}.description` as 'questions.0.description'}
            render={(controllerProps) => (
              <FormQuestionDescription
                {...controllerProps}
                placeholder={__('Description (optional)', 'tutor')}
                enableResize
                rows={2}
              />
            )}
          />
        </div>
      </div>

      {questionTypeForm[activeQuestionType]}

      <div css={styles.questionAnswer}>
        <Controller
          control={form.control}
          name={`questions.${activeQuestionIndex}.answerExplanation` as 'questions.0.answerExplanation'}
          render={(controllerProps) => (
            <FormAnswerExplanation {...controllerProps} placeholder={__('Write answer explanation...', 'tutor')} />
          )}
        />
      </div>
    </div>
  );
};

export default QuestionForm;

const styles = {
  questionForm: css`
    ${styleUtils.display.flex('column')};
    gap: ${spacing[16]};
    animation: fadeIn 0.25s ease-in-out;

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  `,
  questionWithIndex: css`
    ${styleUtils.display.flex('row')};
    align-items: flex-start;
    padding-left: ${spacing[40]};
    gap: ${spacing[4]};
  `,
  questionIndex: css`
    margin-top: ${spacing[8]};
    ${typography.heading6()};
    color: ${colorTokens.text.hints};
  `,
  questionTitleAndDesc: css`
    ${styleUtils.display.flex('column')};
    gap: ${spacing[8]};
    width: 100%;
  `,
  questionAnswer: css`
    padding-left: ${spacing[40]};
  `,
  emptyState: css`
    padding-left: ${spacing[40]}; 
  `,
};
