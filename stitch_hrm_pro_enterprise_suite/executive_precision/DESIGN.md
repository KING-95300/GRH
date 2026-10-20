---
name: Executive Precision
colors:
  surface: '#faf8ff'
  surface-dim: '#d2d9f4'
  surface-bright: '#faf8ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f2f3ff'
  surface-container: '#eaedff'
  surface-container-high: '#e2e7ff'
  surface-container-highest: '#dae2fd'
  on-surface: '#131b2e'
  on-surface-variant: '#464555'
  inverse-surface: '#283044'
  inverse-on-surface: '#eef0ff'
  outline: '#777587'
  outline-variant: '#c7c4d8'
  surface-tint: '#4d44e3'
  primary: '#3525cd'
  on-primary: '#ffffff'
  primary-container: '#4f46e5'
  on-primary-container: '#dad7ff'
  inverse-primary: '#c3c0ff'
  secondary: '#505f76'
  on-secondary: '#ffffff'
  secondary-container: '#d0e1fb'
  on-secondary-container: '#54647a'
  tertiary: '#005338'
  on-tertiary: '#ffffff'
  tertiary-container: '#006e4b'
  on-tertiary-container: '#67f4b7'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#e2dfff'
  primary-fixed-dim: '#c3c0ff'
  on-primary-fixed: '#0f0069'
  on-primary-fixed-variant: '#3323cc'
  secondary-fixed: '#d3e4fe'
  secondary-fixed-dim: '#b7c8e1'
  on-secondary-fixed: '#0b1c30'
  on-secondary-fixed-variant: '#38485d'
  tertiary-fixed: '#6ffbbe'
  tertiary-fixed-dim: '#4edea3'
  on-tertiary-fixed: '#002113'
  on-tertiary-fixed-variant: '#005236'
  background: '#faf8ff'
  on-background: '#131b2e'
  surface-variant: '#dae2fd'
typography:
  display-lg:
    fontFamily: Inter
    fontSize: 32px
    fontWeight: '700'
    lineHeight: 40px
    letterSpacing: -0.025em
  display-lg-mobile:
    fontFamily: Inter
    fontSize: 26px
    fontWeight: '700'
    lineHeight: 34px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
    letterSpacing: -0.02em
  headline-md:
    fontFamily: Inter
    fontSize: 20px
    fontWeight: '600'
    lineHeight: 28px
    letterSpacing: -0.015em
  headline-sm:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '600'
    lineHeight: 24px
    letterSpacing: -0.01em
  body-lg:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  body-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
  body-sm:
    fontFamily: Inter
    fontSize: 13px
    fontWeight: '400'
    lineHeight: 18px
  label-lg:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '500'
    lineHeight: 20px
  label-md:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '500'
    lineHeight: 16px
    letterSpacing: 0.01em
  label-sm:
    fontFamily: Inter
    fontSize: 11px
    fontWeight: '600'
    lineHeight: 14px
    letterSpacing: 0.04em
  numeric-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '500'
    lineHeight: 20px
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  gutter: 1.25rem
  gutter-mobile: 0.75rem
  margin: 2rem
  margin-mobile: 1rem
  space-xs: 0.25rem
  space-sm: 0.5rem
  space-md: 0.75rem
  space-lg: 1rem
  space-xl: 1.5rem
---

## Brand & Style

The brand visualizes institutional reliability, clarity, and rapid execution for human capital management. Targeted at HR directors, operations heads, and corporate leadership within modern Tunisian enterprises, the interface must instill uncompromising trust, compliance assurance, and operational velocity.

The aesthetic synthesizes modern corporate minimalism with the disciplined utility of developer tools (Linear) and high-trust financial interfaces (Stripe). Structural discipline reigns over decoration: generous whitespace, high-density legible typography, crisp content partitioning, and contextual micro-feedback.

The emotional signature is poised, administrative, and frictionless. Complex labor regulatory records (e.g., CNSS, CIN, localized contracts) feel structured and effortless, while executive-level analytics project technical polish and contemporary standard.

## Colors

The palette establishes a high-clarity enterprise work surface balanced with purpose-driven semantic indicators.

- **Canvas & Base**: The root surface sits on `#F8FAFC` (Slate 50), providing a cool, glare-free foundation. Elevated surfaces and primary card containers use pure `#FFFFFF` with boundary borders in `#E2E8F0` (Slate 200).
- **Primary Brand**: `#4F46E5` (Indigo 600) drives key focal points, active navigation tiers, primary interactive buttons, and focused component rings. For hover and pressed states, use `#4338CA` (Indigo 700) and `#3730A3` (Indigo 800) respectively.
- **Secondary / Supporting Neutral**: `#64748B` (Slate 500) supplies contextual metadata, system labels, secondary buttons, and dormant iconography.
- **Deep Neutral / Typography**: Text rendering is anchored by `#0F172A` (Slate 900) for primary headings and data points, stepped down to `#334155` (Slate 700) for body narrative and table values.
- **Operational Status Roles**:
  - **Success / Active / Approved**: `#10B981` (Emerald 500), paired with `#ECFDF5` (Emerald 50) fill.
  - **Warning / Pending Review**: `#F59E0B` (Amber 500), paired with `#FFFBEB` (Amber 50) fill.
  - **Critical / Rejected / Absent**: `#F43F5E` (Rose 500), paired with `#FFF1F2` (Rose 50) fill.
  - **Neutral / Draft / Archived**: `#64748B` (Slate 500), paired with `#F1F5F9` (Slate 100) fill.

## Typography

The design system exclusively implements `Inter`, utilizing its specialized variable design metrics for high-density tabular and enterprise form contexts.

- **Tabular Alignment**: All numerical values representing metrics, currency (`TND`), employee IDs, CIN numbers, and CNSS affiliations must be styled with the OpenType feature `font-feature-settings: "tnum" 1` to ensure vertical column stability.
- **Hierarchy Rules**: Top-level dashboard KPIs utilize `display-lg` with tight negative tracking (`-0.025em`) for visual authority. Section and module titles use `headline-lg` and `headline-md`. Data entry forms, tabular grids, and administrative workflows standardize on `body-md` and `label-md`.
- **Labels & Micro-copy**: Subtitles, status badges, and table header cells enforce uppercase or sentence-cased `label-sm` with slight positive tracking (`0.04em`) to maintain legibility when rendered at small scale.

## Layout & Spacing

The system enforces a structured 12-column responsive fluid grid inside a bounded desktop canvas (maximum layout boundary: 1536px), paired with an invariant vertical 4px base rhythm.

- **Desktop Framework (>= 1280px)**: The navigation shell relies on a persistent 260px condensed sidebar on the left, an 80px dynamic utility bar, and a content section bound by `margin` (2rem) and `gutter` (1.25rem). Complex dashboard widgets and analytical tables span modular column groupings: full (12), halves (6), or thirds (4).
- **Tablet / Mid-Viewports (768px - 1279px)**: The left sidebar collapses into an icon-rail (64px), column structures flex into 6-column arrangements, and card containers collapse 4-column widgets into 2-up rows.
- **Mobile Viewports (< 768px)**: Single column flow (100% width) with the master sidebar converting to an off-canvas drawer. Spacers scale down to `margin-mobile` (1rem) and `gutter-mobile` (0.75rem).
- **Internal Spacing Rules**: Cards and surface panels utilize `space-xl` (1.5rem) internal padding for high-level summary cards, stepped down to `space-lg` (1rem) for tight table containers and compact modal panels. Form field input groups use strict `space-xs` (0.25rem) gaps between label and input control.

## Elevation & Depth

Visual separation relies on a hybrid framework combining flat, low-contrast hairline borders (`#E2E8F0`) with subtle, ambient drop-shadows inspired by Stripe. 

- **Level 0 (Flat Canvas)**: Canvas background `#F8FAFC`. Zero elevation, zero shadow.
- **Level 1 (Resting Cards & Tables)**: Standard surface elements (KPI tiles, employee roster cards, data table containers). Surface `#FFFFFF`, border `1px solid #E2E8F0`. Shadow: `0 1px 3px 0 rgba(15, 23, 42, 0.05), 0 1px 2px -1px rgba(15, 23, 42, 0.05)`.
- **Level 2 (Dropdowns, Popovers, & Hover)**: Interactive cards on mouse hover and contextual popovers. Border `1px solid #CBD5E1`. Shadow: `0 4px 6px -1px rgba(15, 23, 42, 0.07), 0 2px 4px -2px rgba(15, 23, 42, 0.05)`.
- **Level 3 (Modals & Slide-over Drawers)**: Heavy focal surfaces (e.g., employee contract editing modal, leave approval drawer). Border `1px solid #E2E8F0`. Shadow: `0 20px 25px -5px rgba(15, 23, 42, 0.08), 0 8px 10px -6px rgba(15, 23, 42, 0.04)`.
- **Backdrop Overlay**: Modals must be paired with an ambient backdrop overlay: `rgba(15, 23, 42, 0.4)` overlaid with a subtle 2px backdrop blur.

## Shapes

The interface embraces a disciplined soft curvature (`roundedness: 1`), balancing technical exactness with humanized touchpoints:

- **Base Radius (0.25rem / 4px)**: Checkboxes, toggle switches, small button accessories, and inner tag indicators.
- **Medium Radius (0.375rem / 6px)**: Standard form inputs, dropdown selectors, action buttons, and segmented control tabs.
- **Container / Card Radius (0.75rem / 12px - `rounded-xl`)**: Primary structural panels, KPI statistic widgets, table wrapper containers, and system modal boxes.
- **Fully Rounded / Pill (`rounded-full` / 9999px)**: Exclusively reserved for status indicators, operational tags (e.g., "Active", "Congé Payé"), and user profile avatar wrappers.

## Components

### Buttons & Interactive Controls
- **Primary**: Background `#4F46E5`, foreground `#FFFFFF`, height 38px, padding 0 16px, border-radius 6px, font `label-lg`. Subdued hover transition to `#4338CA`. Active state scales to 98% scale.
- **Secondary**: Background `#FFFFFF`, border `1px solid #E2E8F0`, foreground `#334155`. Hover background `#F8FAFC`, hover border `#CBD5E1`.
- **Ghost / Destructive**: Destructive actions use background `#FFF1F2`, text `#F43F5E`, border `1px solid #FECDD3`. Hover uses `#FEE2E2`.

### Status Badges (Pills)
- Rendered with `rounded-full`, height 24px, padding 0 10px, typography `label-sm`.
- **Active / Approved**: Text `#065F46`, background `#ECFDF5`, border `1px solid #A7F3D0`. Includes a 6px leading dot of `#10B981`.
- **Pending Review**: Text `#92400E`, background `#FFFBEB`, border `1px solid #FDE68A`. Leading dot `#F59E0B`.
- **Rejected / Absent**: Text `#9F1239`, background `#FFF1F2`, border `1px solid #FECDD3`. Leading dot `#F43F5E`.
- **Neutral / Draft**: Text `#475569`, background `#F1F5F9`, border `1px solid #E2E8F0`.

### Data Tables
- Encased in a `rounded-xl` (12px) container with background `#FFFFFF` and border `1px solid #E2E8F0`.
- **Header**: Background `#F8FAFC`, border-bottom `1px solid #E2E8F0`, typography `label-md` (`#64748B`), text-transform uppercase, height 40px.
- **Rows**: Height 52px, border-bottom `1px solid #F1F5F9`, hover background `#F8FAFC`.
- **Cells**: Typography `body-md` (`#334155`). Financial values (e.g., `3,450.000 TND`) and identity formats (CIN `09845123`, CNSS `12345678-90`) render in `numeric-md` with monospace tabular digits.

### Input Fields & Selects
- Height 38px, background `#FFFFFF`, border `1px solid #CBD5E1`, border-radius 6px, font `body-md`. Focus state implements `border-color: #4F46E5` accompanied by an indigo focus ring (`box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.15)`).
- Error state replaces border with `#F43F5E` and focus ring with `rgba(244, 63, 94, 0.15)`.

### KPI Metrics Cards
- Styled with `rounded-xl` (12px), background `#FFFFFF`, border `1px solid #E2E8F0`, padding 20px.
- Structure: Icon & Category label on top row; primary metric value (`display-lg`) on second row; comparative trend pill (e.g., `+4.2% vs le mois dernier`) with contextual arrow on bottom row.

### Tabs & Navigation Segments
- Horizontal segmented line or pill bar. Active tab highlights with `#4F46E5` text and an active bottom indicator border (2px) or a white pill container nested within an `#F1F5F9` tray. Text: `label-lg`.