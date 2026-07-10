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
    <div className={cn("relative w-full h-[370px] text-white overflow-hidden", className)} {...props}>
      {/* Full-bleed background shape — object-cover fills the container */}
      <div className="absolute inset-0 w-full h-full">
        <svg
          className="w-full h-full"
          width="100%"
          height="100%"
          fill="none"
          preserveAspectRatio="xMidYMid slice"
          viewBox="0 0 1341.67 153.48"
        >
          <path d={svgPaths.p1cbb9000} fill={fillColor} />
        </svg>
      </div>
      {/* Title centered over the image — absolute inset-0 flex items-center justify-center */}
      <div className="absolute inset-0 flex flex-col items-center justify-center text-center z-10 px-4 container mx-auto max-w-7xl">
        {children}
      </div>
    </div>
  );
}
