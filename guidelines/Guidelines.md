# Design System – CSS Tokens & Styles (Figma Make)

This file defines the complete design system for use in **Figma Make** and development handoff. All values are expressed as CSS custom properties and class-based styles to ensure direct portability.

---

## 1. Design Tokens

### Color Tokens

```css
:root {
  /* Text */
  --text--primary: #000000;

  /* Surfaces */
  --surface--main: #FCFBF1;

  /* Brand */
  --brand--primary: #00416A;
  --brand--secondary: #A799B7;
  --brand--accent: #7EA172;
}
```

---

### Typography Scale Tokens

```css
:root {
  /* Base size reference: headline---accent (24px) */

  --headline---accent: 1rem;            /* 24px */
  --headline---large: 2.33rem;           /* 56px */

  --heading---h1: 1.75rem;               /* 42px */
  --heading---h2: 1.17rem;               /* 28px */

  --title---display: 1.25rem;            /* 30px */
  --title---section: 0.5rem;             /* 12px */

  --body---paragraph: 0.67rem;           /* 16px */
  --body---large---regular: 0.75rem;     /* 18px */
  --body---large---bold: 1.5rem;         /* 36px */
  --body---small: 0.58rem;               /* 14px */
  --body---caption: 0.5rem;              /* 12px */
  --body---caption---metric: 0.5rem;     /* 12px */

  --button---primary: 0.58rem;           /* 14px */
  --label---small: 0.5rem;               /* 12px */
  --tool---label: 0.42rem;               /* 10px */

  --descriptive---accent: 0.83rem;       /* 20px */
  --modal---header: 0.83rem;             /* 20px */
}
```

---

## 2. Color Utility Classes

```css
.BackgroundFill {
  background: var(--surface--main);
}

.text__primary {
  color: var(--text--primary);
}

.surface__main {
  background: var(--surface--main);
}

.brand__primary {
  background: var(--brand--primary);
}

.brand__secondary {
  background: var(--brand--secondary);
}

.brand__accent {
  background: var(--brand--accent);
}
```

---

## 3. Typography Classes

### Headlines & Display

```css
.Headline__Accent {
  font-size: 24px;
  font-family: "Schooner Script", sans-serif;
  font-weight: 400;
}

.Headline__Large {
  font-size: 56px;
  font-family: "P22 Franklin Caslon", sans-serif;
  font-weight: 400;
}

.Heading__H1 {
  font-size: 42px;
  font-family: "P22 Franklin Caslon", sans-serif;
  font-weight: 400;
}

.Heading__H2 {
  font-size: 28px;
  font-family: "Broadsheet", sans-serif;
  font-weight: 400;
}

.Title__Display {
  font-size: 30px;
  font-family: "P22 Franklin Caslon", sans-serif;
  font-weight: 400;
}

.Descriptive__Accent {
  font-size: 20px;
  font-family: "Schooner Script", sans-serif;
  font-weight: 400;
}
```

---

### Body Text

```css
.Body__Paragraph {
  font-size: 16px;
  font-family: "Libre Franklin", sans-serif;
  font-weight: 400;
}

.Body__Large__Regular {
  font-size: 18px;
  font-family: "Libre Franklin", sans-serif;
  font-weight: 400;
}

.Body__Large__Bold {
  font-size: 36px;
  font-family: "Libre Franklin", sans-serif;
  font-weight: 700;
}

.Body__Small {
  font-size: 14px;
  font-family: "Libre Franklin", sans-serif;
  font-weight: 400;
}

.Body__Caption {
  font-size: 12px;
  font-family: "Libre Franklin", sans-serif;
  font-weight: 500;
}

.Body__Caption__Metric {
  font-size: 12px;
  font-family: "Libre Franklin", sans-serif;
  font-weight: 400;
}
```

---

### UI & Utility Text

```css
.Button__Primary {
  font-size: 14px;
  font-family: "Broadsheet", sans-serif;
  font-weight: 400;
}

.Label__Small {
  font-size: 12px;
  font-family: "Libre Franklin", sans-serif;
  font-weight: 700;
}

.Title__Section {
  font-size: 12px;
  font-family: "Broadsheet", sans-serif;
  font-weight: 400;
}

.Modal__Header {
  font-size: 20px;
  font-family: "Broadsheet", sans-serif;
  font-weight: 400;
}

.Tool__Label {
  font-size: 10px;
  font-family: "Libre Franklin", sans-serif;
  font-weight: 700;
}
```

---

## 4. Usage Notes (Figma Make)

* Treat `:root` blocks as the single source of truth for tokens.
* Do not introduce new sizes or colors without updating tokens first.
* Classes are intended to map 1:1 with Figma text styles and color styles.
* Avoid combining multiple decorative styles on a single element.

---

End of file.

<!--

System Guidelines

Use this file to provide the AI with rules and guidelines you want it to follow.
This template outlines a few examples of things you can add. You can add your own sections and format it to suit your needs

TIP: More context isn't always better. It can confuse the LLM. Try and add the most important rules you need

# General guidelines

Any general rules you want the AI to follow.
For example:

* Only use absolute positioning when necessary. Opt for responsive and well structured layouts that use flexbox and grid by default
* Refactor code as you go to keep code clean
* Keep file sizes small and put helper functions and components in their own files.

--------------

# Design system guidelines
Rules for how the AI should make generations look like your company's design system

Additionally, if you select a design system to use in the prompt box, you can reference
your design system's components, tokens, variables and components.
For example:

* Use a base font-size of 14px
* Date formats should always be in the format “Jun 10”
* The bottom toolbar should only ever have a maximum of 4 items
* Never use the floating action button with the bottom toolbar
* Chips should always come in sets of 3 or more
* Don't use a dropdown if there are 2 or fewer options

You can also create sub sections and add more specific details
For example:


## Button
The Button component is a fundamental interactive element in our design system, designed to trigger actions or navigate
users through the application. It provides visual feedback and clear affordances to enhance user experience.

### Usage
Buttons should be used for important actions that users need to take, such as form submissions, confirming choices,
or initiating processes. They communicate interactivity and should have clear, action-oriented labels.

### Variants
* Primary Button
  * Purpose : Used for the main action in a section or page
  * Visual Style : Bold, filled with the primary brand color
  * Usage : One primary button per section to guide users toward the most important action
* Secondary Button
  * Purpose : Used for alternative or supporting actions
  * Visual Style : Outlined with the primary color, transparent background
  * Usage : Can appear alongside a primary button for less important actions
* Tertiary Button
  * Purpose : Used for the least important actions
  * Visual Style : Text-only with no border, using primary color
  * Usage : For actions that should be available but not emphasized
-->
