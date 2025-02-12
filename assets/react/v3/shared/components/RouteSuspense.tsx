import { LoadingOverlay } from '@TutorShared/atoms/LoadingSpinner';
import { type ReactNode, Suspense } from 'react';

type RouteSuspenseProps = {
  component: ReactNode;
};

const RouteSuspense = ({ component }: RouteSuspenseProps) => {
  return <Suspense fallback={<LoadingOverlay />}>{component}</Suspense>;
};

export default RouteSuspense;
