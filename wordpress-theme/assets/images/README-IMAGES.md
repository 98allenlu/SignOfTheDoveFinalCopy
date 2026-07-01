# Required Image Assets

Export these three images from Figma and place them here.
They are referenced as CSS variables in functions.php via wp_add_inline_style().

## header-bg.png
**Source:** Figma asset `e3b6eecc0d2310357d508011639007ba5941d4de`  
**Used by:** `.site-header` background + mobile menu + dropdown backgrounds  
**Export size:** 1920×200px recommended (or whatever the original canvas dimensions are)  
**Format:** PNG or JPG

## footer-edge.png
**Source:** Figma asset `51b9f4288acfbdb6d7ca9e02a2a026b7ca18941e`  
**Used by:** The decorative image that sits at the top of the footer  
**Export size:** 1920×60–100px recommended  
**Format:** PNG (needs transparency)

> Note: The theme already generates the torn-paper edge via SVG (`torn-paper-edge.svg`).
> Only use `footer-edge.png` if you want the original raster version.
> To switch, edit `theme.css` and uncomment the `background-image: var(--rd-footer-edge)` rule
> inside `.site-footer::before` and comment out the SVG/filter version.

## section-texture.png
**Source:** Figma asset `04bf5cb42a5739eaf380966456c9033eb8af5779`  
**Used by:** `.rd-separator-pattern` background (the linen/paper section texture)  
**Export size:** At least 1200×800px (it tiles/covers)  
**Format:** JPG or PNG

## How to export from Figma
1. In the Figma file, select the frame/layer with the texture
2. Right-click → Export
3. Choose PNG (or JPG for opaque textures)
4. Set scale to 2x for retina
5. Save to this folder with the filenames listed above

Once images are placed here, the CSS variables are automatically injected
by functions.php and everything will render correctly.
