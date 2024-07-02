import Button from '@Atoms/Button';
import FormInput from '@Components/fields/FormInput';
import FormInputWithContent from '@Components/fields/FormInputWithContent';
import FormSelectInput from '@Components/fields/FormSelectInput';
import BasicModalWrapper from '@Components/modals/BasicModalWrapper';
import type { ModalProps } from '@Components/modals/Modal';
import { colorTokens, spacing } from '@Config/styles';
import { typography } from '@Config/typography';
import { css } from '@emotion/react';
import { useFormWithGlobalError } from '@Hooks/useFormWithGlobalError';
import type { Discount } from '@OrderServices/order';
import { requiredRule } from '@Utils/validation';
import { __ } from '@wordpress/i18n';
import { useMemo } from 'react';
import { Controller } from 'react-hook-form';

interface DiscountModalProps extends ModalProps {
  closeModal: (props?: { action: 'CONFIRM' | 'CLOSE' }) => void;
  discount: Discount;
  total_price: number;
}

type FormField = Discount;

const discountTypeOptions = [
  {
    label: __('Amount', 'tutor'),
    value: 'fixed',
  },
  {
    label: __('Percentage', 'tutor'),
    value: 'percentage',
  },
];

const calculatePercentage = (total: number, percent: number) => {
  return total * (percent / 100);
};

function DiscountModal({ title, closeModal, actions, discount, total_price }: DiscountModalProps) {
  const form = useFormWithGlobalError<FormField>({
    defaultValues: discount,
  });
  const type = form.watch('type');
  const value = form.watch('value');
  const content = type === 'fixed' ? '$' : '%';
  const priceAfterDiscount = useMemo(() => {
    return type === 'percentage' ? total_price - calculatePercentage(total_price, value) : total_price - value;
  }, [type, value, total_price]);

  return (
    <BasicModalWrapper onClose={() => closeModal({ action: 'CLOSE' })} title={title} actions={actions}>
      <form
        css={styles.form}
        onSubmit={form.handleSubmit((values) => {
          console.log(values);
          alert('@TODO: will be implemented later.');
        })}
      >
        <div css={styles.formContent}>
          <div css={styles.inlineFields}>
            <Controller
              control={form.control}
              name="type"
              rules={{ ...requiredRule() }}
              render={(props) => (
                <FormSelectInput
                  {...props}
                  label={__('Discount Type', 'tutor')}
                  options={discountTypeOptions}
                  placeholder={__('Select discount type', 'tutor')}
                  isSearchable
                />
              )}
            />
            <Controller
              control={form.control}
              name="value"
              rules={{ ...requiredRule() }}
              render={(props) => (
                <FormInputWithContent
                  {...props}
                  label={__('Discount Value', 'tutor')}
                  content={content}
                  type="number"
                />
              )}
            />
          </div>

          <p css={styles.priceMessage}>
            {__('Price after the discount: ', 'tutor')} <strong>${priceAfterDiscount}</strong>
          </p>

          <div css={styles.reason}>
            <Controller
              control={form.control}
              name="reason"
              rules={{ ...requiredRule() }}
              render={(props) => (
                <FormInput
                  {...props}
                  label={__('Discount reason', 'tutor')}
                  placeholder={__('Enter the reason of this discount', 'tutor')}
                />
              )}
            />
          </div>
        </div>
        <div css={styles.footer}>
          <Button size="small" variant="text" onClick={() => closeModal({ action: 'CLOSE' })}>
            {__('Cancel', 'tutor')}
          </Button>
          <Button type="submit" size="small" variant="WP">
            {__('Apply', 'tutor')}
          </Button>
        </div>
      </form>
    </BasicModalWrapper>
  );
}

export default DiscountModal;

const styles = {
  inlineFields: css`
		display: flex;
		gap: ${spacing[16]};
	`,
  priceMessage: css`
		${typography.caption()};
		color: ${colorTokens.text.hints};
		margin-top: ${spacing[12]};

		strong {
			color: ${colorTokens.text.title};
		}
	`,
  reason: css`
		margin-top: ${spacing[12]};
	`,
  form: css`
		width: 480px;
	`,
  formContent: css`
		padding: ${spacing[20]} ${spacing[16]};
	`,
  footer: css`
		box-shadow: 0px 1px 0px 0px #E4E5E7 inset;
		height: 56px;
		display: flex;
		align-items: center;
		justify-content: end;
		gap: ${spacing[16]};
		padding-inline: ${spacing[16]};
	`,
};
