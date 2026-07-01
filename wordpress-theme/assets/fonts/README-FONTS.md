# Font Setup

## Libre Franklin (open-source, required)
Download from Google Fonts and place here:
- libre-franklin-400.woff2
- libre-franklin-500.woff2
- libre-franklin-700.woff2

Download URL: https://fonts.google.com/specimen/Libre+Franklin

## Premium Fonts (purchase separately)
The theme uses these licensed fonts. Purchase and self-host them here:
- P22 Franklin Caslon  → p22-franklin-caslon-400.woff2   (headlines)
- Broadsheet           → broadsheet-400.woff2             (headings/nav)
- Schooner Script      → schooner-script-400.woff2        (accent/logo)

After adding the woff2 files, create a premium-fonts.css file and
uncomment the enqueue call in functions.php.

Example premium-fonts.css:
  @font-face {
    font-family: "P22 Franklin Caslon";
    src: url("p22-franklin-caslon-400.woff2") format("woff2");
    font-weight: 400;
    font-display: swap;
  }
  @font-face {
    font-family: "Broadsheet";
    src: url("broadsheet-400.woff2") format("woff2");
    font-weight: 400;
    font-display: swap;
  }
  @font-face {
    font-family: "Schooner Script";
    src: url("schooner-script-400.woff2") format("woff2");
    font-weight: 400;
    font-display: swap;
  }
