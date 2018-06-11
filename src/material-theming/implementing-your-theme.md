<div class="article__intro">

[en]: <> (Implementing your theme)
# 译文

[en]: <> (The following techniques can be used to customize and apply color, typography, and shape. Iconography is provided with five unique sets to choose from.)
译文

<nav>

[en]: <> (Color)
[en]: <> (Typography)
[en]: <> (Shape)
[en]: <> (Icons)
* [译文](#color)
* [译文](#typography)
* [译文](#shape)
* [译文](#icons)

</nav></div><div class="article__body">

[en]: <> (Color)
<h2 id="color">译文</h2>

[en]: <> (The color system supports 13 categories of color that can be applied to components, text, icons, and surfaces.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-color-chart-1.png)

<figcaption>

[en]: <> (Primary)
[en]: <> (Primary Variant)
[en]: <> (Primary Variant 2)
[en]: <> (Secondary)
[en]: <> (Secondary Variant)
[en]: <> (Background)
[en]: <> (Surface)
[en]: <> (Error)
[en]: <> (On Primary)
[en]: <> (On Secondary)
[en]: <> (On Background)
[en]: <> (On Surface)
[en]: <> (On Error)
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文
6. 译文
7. 译文
8. 译文
9. 译文
10. 译文
11. 译文
12. 译文
13. 译文

</figcaption></figure>

[en]: <> (Theming with color)
### 译文

[en]: <> (To use Material Theming with color, start by choosing suitable colors to apply to your UI.)
译文

[en]: <> (Color can be selected in several ways:)
译文

[en]: <> (Apply colors generated with the [Material Theme Editor]\(https://material.io/tools/theme-editor/\) across your stickersheet)
[en]: <> (Generate colors with the [inline tool in the Color section]\(https://material.io/design/color/the-color-system.html#tools-for-picking-colors\))
[en]: <> (Select colors from the [Material Palettes’]\(https://material.io/design/color/the-color-system.html#tools-for-picking-colors\) harmonious colors schemes)
* 译文
* 译文
* 译文

[en]: <> (Primary and secondary colors)
### 译文

[en]: <> (Primary and secondary colors are applied sparingly to strategic parts of your UI. They are typically chosen for their ability to represent your brand.)
译文

[en]: <> (Primary colors map to components and elements, like app bars and buttons. Secondary colors are most often used as accents on components, such as FABS and selection controls.)
译文

[en]: <> (Finally, color variants can also be used to complement and provide accessible options for your primary and secondary colors.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-color-primarysecondary.png)

</figure>

[en]: <> (Surface, background, and error colors)
### 译文

[en]: <> (Surface, background, and error colors typically don’t represent brand.)
译文

[en]: <> (In general, they occupy the following areas of the UI:)
译文

[en]: <> (*Surface colors* map to components such as cards, sheets, and menus)
[en]: <> (*Background color* is found behind scrollable content)
[en]: <> (*Error color* indicates errors in components, such as text fields)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-color-surfacesbgs.png)

</figure>

[en]: <> (“On” colors)
#### 译文

[en]: <> (The elements in an app use colors from specific categories in your color palette, such as a primary color. Whenever other screen elements, such as text or icons, appear in front of surfaces using those colors, those elements should use colors specifically designed to appear clearly and legibly against the colors behind them.)
译文

[en]: <> (This category of colors is called “on” colors, referring to the fact that they color elements that are sometimes placed “on” top of key surfaces that use a primary color, secondary color, surface color, background color, or error color. These are labelled using the original category name \(such as primary color\) with the prefix “on”.)
译文

[en]: <> (“On” colors are primarily applied to text, iconography, and strokes. Sometimes, they are also applied to surfaces.)
译文

[en]: <> (*“On” color naming*)
译文

[en]: <> (Category      | “On” category)
[en]: <> (---------     |----------)
[en]: <> (Primary       | On Primary)
[en]: <> (Secondary     | On Secondary)
[en]: <> (Surface       | On Surface)
[en]: <> (Background    | On Error)
[en]: <> (Error         | On Background)

译文     | 译文
--------|----------
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文

[en]: <> (The colors in the “on” category are applied to text and icons \(and sometimes surfaces\) that appear in front of areas colored using: a primary color, secondary color, surface color, background color, or error color.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-color-oncolors.png)

</figure>

[en]: <> (Typography)
<h2 id="typography">译文</h2>

[en]: <> (The type system supports 13 categories that, when combined, form the typescale. This typescale is evident in the variety of text styles and sizes that appear on screen, ranging from body copy to buttons. Type appears across the UI, in places such as in components and on surfaces.)
译文

[en]: <> (Type attributes are controlled by values that can be customized for the type family, font, case, size, and tracking.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-typography-typescale.png)

</figure>

[en]: <> (Theming methods)
### 译文

[en]: <> (Customize and apply typography)
#### 译文

[en]: <> (There are multiple ways to choose typography:)
译文

[en]: <> (Generate typescales from your local system’s fonts using the Material Theme Editor, and then apply them across your stickersheet)
[en]: <> (Pick a typeface from [Google Fonts]\(https://material.io/design/fonts.google.com.html\) that reflects your product)
* 译文
* 译文

[en]: <> (Headings)
### 译文

[en]: <> (Headlines 1-6 are the largest sizes in the typescale. They are reserved for short, but impactful, moments of text. They are also used for numerals.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-typography-headlines.png)

</figure>

[en]: <> (Subtitles are smaller than headlines. They are typically reserved for medium-emphasis text used in shorter text strings.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-typography-subtitles.png)

</figure>

[en]: <> (Body and smaller text)
### 译文

[en]: <> (Body text 1-2 is typically used for longform writing. It should be optimized for small text sizes.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-typography-body.png)

</figure>

[en]: <> (Caption and overline text are the smallest font sizes. They are used sparingly to annotate imagery or to provide a brief introduction to a headline.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-typography-captions.png)

</figure>

[en]: <> (Button text is typically used in text buttons, outlined buttons, and contained buttons.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-typography-button.png)

</figure>

[en]: <> (Shape)
<h2 id="shape">译文</h2>

[en]: <> (The shape system is currently defined by a series of baseline radii. These radii can be customized for specific components, such as changing shapes from sharp to round, and can additionally include cuts. Component radii variations and cuts can be symmetric or asymmetric.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-shape-hero.png)

<figcaption>

[en]: <> (Sharp \(0dp\))
[en]: <> (Round \(4dp\))
[en]: <> (Round \(16dp\))
[en]: <> (Round \(24dp\))
1. 译文
2. 译文
3. 译文
4. 译文

[en]: <> (Scaled to 500%)
译文

</figcaption></figure>

[en]: <> (Theming with shape)
### 译文

[en]: <> (Alter the shape of UI components using the Material Theme Editor. Shapes can be modified to suit your brand and app, such as adjusting shapes from sharp to round, and applying cuts.)
译文

[en]: <> (Sharp components)
### 译文

[en]: <> (Components that traditionally have 4dp radii \(such as cards, buttons, menus, snackbars, tooltips, and dialogs\) can be adjusted to have sharp corners, such as 0dp radii.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-shape-s1-sharp.png)

<figcaption>

[en]: <> (Zoomed at 2000%)
[en]: <> (Zoomed at 400%)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Round components)
### 译文

[en]: <> (Components such as cards, menus, snackbars, tooltips, and dialogs, and buttons map to 4dp radii.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-shape-s2-round.png)

<figcaption>

[en]: <> (Zoomed at 2000%)
[en]: <> (Zoomed at 400%)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (The roundest components – pill and circular shaped components, such as chips and FABs – have a baseline radii of 16dp and 24dp, respectively.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-shape-s3-round.png)

<figcaption>

[en]: <> (Zoomed at 2000%)
[en]: <> (Zoomed at 400%)
1. 译文
2. 译文

</figcaption></figure><figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-shape-s4-round.png)

<figcaption>

[en]: <> (Zoomed at 1200%)
[en]: <> (Zoomed at 400%)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Cut components)
### 译文

[en]: <> (Components can be cut at 45 degree angles. Cuts can be different lengths, depending on the component and the style.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-shape-cut.png)

<figcaption>

[en]: <> (Zoomed at 2000%)
[en]: <> (Zoomed at 400%)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (For example, sheets might have larger cuts, while buttons might contain smaller cuts. The amount of surface area, and the need to protect legibility, helps determine the best cut size for each element.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-shape-cut-compare.png)

<figcaption>

[en]: <> (Zoomed at 2000%)
[en]: <> (Zoomed at 2000%)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Icons)
<h2 id="icons">译文</h2>

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-icons-hero.png)

<figcaption>

[en]: <> (Filled)
[en]: <> (Sharp)
[en]: <> (Rounded)
[en]: <> (Outlined)
[en]: <> (Two-Tone)
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文

</figcaption></figure>

[en]: <> (In addition to the original filled Material Design Icons, four additional icon themes are available. Each icon set should be used consistently across an app to maintain visual consistency, without mixing multiple icon sets in a single UI.)
译文

[en]: <> (Theming with icons)
### 译文

[en]: <> (Select an icon set from five different themes:)
译文

[en]: <> (Filled icons)
[en]: <> (Sharp icons)
[en]: <> (Rounded icons)
[en]: <> (Outlined icons)
[en]: <> (Two-tone icons)
* 译文
* 译文
* 译文
* 译文
* 译文

[en]: <> (Icon types)
### 译文

[en]: <> (Filled icons)
#### 译文

[en]: <> (The filled icon set is the original set of Material icons.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-icons-filled.png)

<figcaption>

[en]: <> (Grid structure)
[en]: <> (Filled set samples)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Sharp icons)
#### 译文

[en]: <> (The sharp icon set has eliminated the corner radius from the filled icons.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-icons-sharp.png)

<figcaption>

[en]: <> (Grid structure)
[en]: <> (Sharp set samples)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Rounded icons)
#### 译文

[en]: <> (The rounded icon set shares the same 2dp radii with the filled set for its exterior corners. There is an additional 1dp radii for strokes, the interior corners, and counter area.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-icons-rounded.png)

<figcaption>

[en]: <> (Grid structure)
[en]: <> (Rounded set samples)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Outlined icons)
#### 译文

[en]: <> (The outlined icon set eliminates a majority of fills, converting most icons to 2dp strokes, reducing their visual weight. These can also be used to represent state, such as combining them with filled icons to show a selected state.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-icons-outlined.png)

<figcaption>

[en]: <> (Grid structure)
[en]: <> (Outlined set samples)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Two-tone icons)
#### 译文

[en]: <> (The two-tone icon set uses the same color at varying opacities for the stroke and fill.)
译文

<figure>

![]({assets_path}/material-theming/implementing-your-theme/theming-icons-twotone.png)

<figcaption>

[en]: <> (Grid structure)
[en]: <> (Two-Tone set samples)
1. 译文
2. 译文

</figcaption></figure></div>
