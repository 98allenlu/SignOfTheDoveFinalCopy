import React from "react";
import { cn } from "@/lib/utils";
import svgPaths from "@/imports/svg-wb47w8l6ix";
// Explicit bundler import — resolves to a hashed URL at build time so the
// texture renders correctly in both dev and production builds.
import sectionBg from 'figma:asset/04bf5cb42a5739eaf380966456c9033eb8af5779.png';

interface SeparatorPatternProps extends React.HTMLAttributes<HTMLDivElement> {
  children: React.ReactNode;
  className?: string;
  topEdge?: boolean;
  bottomEdge?: boolean;
  backgroundClass?: string;
  showBackgroundTexture?: boolean;
}

export function SeparatorPattern({
  children,
  className,
  topEdge = true,
  bottomEdge = true,
  backgroundClass = "bg-background",
  showBackgroundTexture = true,
  ...props
}: SeparatorPatternProps) {
  return (
    <div
      className={cn("relative w-full", backgroundClass, className)}
      style={showBackgroundTexture ? {
        backgroundImage: `url(${sectionBg})`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat',
      } : undefined}
      {...props}
    >
      {/* Top torn-paper edge — inline SVG so the bundler resolves the path data */}
      {topEdge && (
        <div className="absolute top-0 left-0 w-full overflow-hidden leading-none" aria-hidden="true">
          <svg
            className="w-full h-auto block"
            width="100%"
            viewBox="0 0 1920 90"
            fill="none"
            preserveAspectRatio="none"
          >
            <path d={svgPaths.p258d2630} fill="currentColor" className="text-background" />
          </svg>
        </div>
      )}

      {/* Content */}
      <div className="relative z-10">
        {children}
      </div>

      {/* Bottom torn-paper edge */}
      {bottomEdge && (
        <div className="absolute bottom-0 left-0 w-full overflow-hidden leading-none rotate-180" aria-hidden="true">
          <svg
            className="w-full h-auto block"
            width="100%"
            viewBox="0 0 1920 90"
            fill="none"
            preserveAspectRatio="none"
          >
            <path d={svgPaths.p258d2630} fill="currentColor" className="text-background" />
          </svg>
        </div>
      )}
    </div>
  );
}
