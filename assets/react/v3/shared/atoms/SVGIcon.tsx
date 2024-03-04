/* eslint-disable @typescript-eslint/no-explicit-any */
/* eslint-disable @typescript-eslint/no-unsafe-member-access */
import { css, SerializedStyles } from '@emotion/react';
import { IconCollection } from '@Utils/types';
import { getIcon } from '@Utils/util';

interface SVGIconProps {
  name: IconCollection;
  width?: number;
  height?: number;
  style?: SerializedStyles;
  isColorIcon?: boolean;
}

const SVGIcon = ({ name, width = 16, height = 16, style, isColorIcon = false }: SVGIconProps) => {
  const icon = getIcon(name);

  const additionalAttributes = {
    ...(isColorIcon && { 'data-colorize': true }),
  };

  return (
    <svg
      css={[style, { width, height }, styles.svg({ isColorIcon })]}
      xmlns="http://www.w3.org/2000/svg"
      viewBox={icon.viewBox}
      dangerouslySetInnerHTML={{ __html: icon.icon }}
      {...additionalAttributes}
    />
  );
};

export default SVGIcon;

const styles = {
  svg: ({ isColorIcon = false }) => css`
    transition: filter 0.3s ease-in-out;
    ${isColorIcon &&
    css`
      filter: grayscale(100%);
    `}
  `,
};
