import { css } from '@emotion/react';
import { Controller, useFormContext } from 'react-hook-form';

import { styleUtils } from '@Utils/style-utils';
import { useQuizModalContext } from '@CourseBuilderContexts/QuizModalContext';
import type { QuizForm } from '@CourseBuilderServices/quiz';
import FormFillInTheBlanks from '@Components/fields/quiz/FormFillInTheBlanks';

const FillInTheBlanks = () => {
  const form = useFormContext<QuizForm>();
  const { activeQuestionIndex } = useQuizModalContext();

  return (
    <div css={styles.optionWrapper}>
      <Controller
        control={form.control}
        name={`questions.${activeQuestionIndex}.question_answers.0` as 'questions.0.question_answers.0'}
        render={({ field, fieldState }) => <FormFillInTheBlanks field={field} fieldState={fieldState} />}
      />
    </div>
  );
};

export default FillInTheBlanks;

const styles = {
  optionWrapper: css`
      ${styleUtils.display.flex('column')};
      padding-left: 42px;
    `,
};
