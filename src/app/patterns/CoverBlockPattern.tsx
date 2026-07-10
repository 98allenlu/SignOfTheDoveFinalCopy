import React from "react";
import { cn } from "@/lib/utils";
import svgPaths from "@/imports/svg-v4pyj02hk3";

interface PageHeaderShapeProps extends React.HTMLAttributes<HTMLDivElement> {
  children?: React.ReactNode;
  fillColor?: string;
}

export function PageHeaderShape({
  children,
  className,
  fillColor = "#00416A",
  ...props
}: PageHeaderShapeProps) {
  return (
    <div className={cn("relative w-full h-[370px] flex items-start pt-10 justify-center text-white", className)} {...props}>
      <div className="absolute top-0 left-0 w-full h-full overflow-hidden">
        <svg
          className="w-full h-auto block min-h-[170px]"
          width="100%"
          height="100%"
          fill="none"
          preserveAspectRatio="xMidYMid slice"
          viewBox="0 0 1341.67 153.48"
        >
          <path d={svgPaths.p1cbb9000} fill={fillColor} />
        </svg>
      </div>
      <div className="relative z-10 w-full px-4 text-center mt-[15px]">
        {children}
      </div>
    </div>
  );
}
