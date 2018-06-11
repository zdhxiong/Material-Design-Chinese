<div class="article__intro">

[en]: <> (Applying color to UI)
# 将颜色应用于 UI

[en]: <> (Color is applied to UI elements and components in consistent and meaningful ways.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Top and bottom app bars)
[en]: <> (Backdrop)
[en]: <> (Sheets and surfaces)
[en]: <> (Buttons, chips and selection controls)
[en]: <> (Typography and iconography)
* [译文](#usage)
* [译文](#top-bottom-app-bars)
* [译文](#backdrop)
* [译文](#sheets-surfaces)
* [译文](#buttons-chips-selection-controls)
* [译文](#typography-iconography)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (These guidelines describe a variety of UI components and elements where color application is important.)
译文

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col">

![]({assets_path}/color/applying-color-to-ui/color-illos-08.png)

[en]: <> (Consistent)
#### 译文

[en]: <> (Color should be applied throughout a UI consistently and be compatible with the brand it represents.)
译文

</div><div class="mdui-col">

![]({assets_path}/color/applying-color-to-ui/color-illos-09.png)

[en]: <> (Distinct)
#### 译文

[en]: <> (Color should create distinction between elements, with sufficient contrast between them.)
译文

</div><div class="mdui-col">
    
![]({assets_path}/color/applying-color-to-ui/color-illos-10.png)

[en]: <> (Intentional)
#### 译文

[en]: <> (Color should be applied purposefully as it can convey meaning in multiple ways, such as relationships between elements and degrees of hierarchy.)
译文

</div></div>

[en]: <> (Top and bottom app bars)
<h2 id="top-bottom-app-bars">译文</h2>

[en]: <> (The way color is applied to top and bottom app bars helps users identify them and understand their relationship to surrounding UI elements.)
译文

[en]: <> (Identifying app bars)
### 译文

[en]: <> (Top and bottom app bars use an app’s primary color. System bars can use a dark or light variant of the primary color to separate system content from top app bar content.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-bars-differentiating-baseline.png)

<figcaption>

{do}

[en]: <> (The primary color \(purple 500\) is used on this top app bar, and a dark primary variant \(purple 700\) is used on the system bar.)
译文

</figcaption></figure>

[en]: <> (To emphasize the difference between app bars and other surfaces, use a secondary color on nearby components such as the FAB.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-bars-differentiating-reply.png)

<figcaption>

{do}

[en]: <> (The primary color \(blue 700\) is used on this bottom app bar, and the secondary color \(orange 500\) is used on the floating action button.)
译文

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-bars-differentiating-caution-1.png)

<figcaption>

{caution}

[en]: <> (If the bottom app bar and floating action button are the same color, use shadow or alternate means to create enough distinction between them.)
译文

</figcaption></figure>

[en]: <> (Blending an app bar with the background)
### 译文

[en]: <> (When an app’s top or bottom app bar color is the same color as the background color, they blend together, placing emphasis on an app’s content instead of its structure.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/color/applying-color-to-ui/color-applyingcolorui-blendedbars-fortnightly-1a-v1.mp4" src="{assets_path}/color/applying-color-to-ui/color-applyingcolorui-blendedbars-fortnightly-1a-v1.mp4" type="video/mp4">
</video><figcaption>

[en]: <> (Both this app’s top app bar color and background color is the primary color: white. However, on scroll the top app bar gains a shadow, showing it has an elevation higher than the content that scrolls behind it.)
译文

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-blendedbars-owl.png)

<figcaption>

[en]: <> (This app’s bright, seamless layout uses it’s primary blue \(blue 700\) color for app bars, bottom navigation, and the background color, so individual elements stand out less, and content stands out more. The activation state uses the secondary yellow. It includes a shadow on the bottom navigation to show the elevation division between surfaces.)
译文

</figcaption></figure>

[en]: <> (Backdrop)
<h2 id="backdrop">译文</h2>

[en]: <> (A backdrop has a front and back layer. To distinguish between these two layers, the baseline back layer color is your primary color and the baseline front layer is white.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-surfaceelevations-crane.png)

<figcaption>

[en]: <> (This app uses its primary color \(purple 800\) on the backdrop’s back layer. The text fields are a light primary variant \(purple 700\). A secondary color \(red 700\) is applied as an accent to the flight fares.)
译文

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-surfaceelevations-shrine.png)

<figcaption>

[en]: <> (This app uses the primary color \(pink 100\) for the backdrop’s back layer and the primary dark primary variant \(pink 900\) for typography and iconography. Additionally, the secondary color \(pink 50\) is used for the expanding sheet on the front layer.)
译文

</figcaption></figure>


[en]: <> (Sheets and surfaces)
<h2 id="sheets-surfaces">译文</h2>

[en]: <> (The baseline color for sheets and surfaces, such as bottom sheets, navigation drawers, menus, dialogs, and cards is white. These components can incorporate color to create contrast between other surfaces. Contrast can make surface edges apparent, indicating elevation differences when surfaces overlap.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-baseline-alt.png)

<figcaption>

[en]: <> (This product has changed the default white to a primary color in a bottom sheet and the navigation drawer.)
译文

[en]: <> (This product uses a primary color \(purple 500\) in part of the bottom sheet instead of the baseline white.)
[en]: <> (This product’s navigation drawer uses its primary color \(purple 500\) instead of the baseline white.)
* 译文
* 译文

</figcaption></figure>

[en]: <> (Modal sheets)
### 译文

[en]: <> (Use contrasting colors on surfaces that appear on-screen temporarily, such as navigation drawers and bottom sheets. Usually these surfaces are white, but you can use your app’s primary or secondary color.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-tempsurfaces-reply.png)

<figcaption>

[en]: <> (This app uses its primary color blue \(blue 700\) on the bottom navigation drawer, a primary dark variant \(blue 800\) for the account switcher, and a secondary color \(orange 500\) for selection.)
译文

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-tempsurfaces-fortnightly.png)

<figcaption>

[en]: <> (This app uses its primary color \(white\) for its modal navigation drawer, creating the maximum contrast between the dark typography and the navigation. A white scrim is used to make content behind it less noticeable, as the navigation drawer is the same color as the background.)
译文

</figcaption></figure><figure>
<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/color/applying-color-to-ui/tempsurfaces-owl-1a.mp4" src="{assets_path}/color/applying-color-to-ui/tempsurfaces-owl-1a.mp4" type="video/mp4">
</video><figcaption>

[en]: <> (This app displays a sheet in the bottom right, colored with its primary color \(pink 500\). Upon tap, the sheet expands.)
译文

</figcaption></figure>

[en]: <> (Cards)
### 译文

[en]: <> (The baseline color for cards is white. This color can be customized to express brand or to improve legibility. Card text and icons can also use the color theme to improve legibility.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-cards-baseline.png)

<figcaption>

[en]: <> (The surfaces of these cards use the primary color \(purple 500\). The app’s background color is white. The secondary color \(teal 200\) is used for data visualization.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/color/applying-color-to-ui/interaction-baseline-1a.mp4" src="{assets_path}/color/applying-color-to-ui/interaction-baseline-1a.mp4" type="video/mp4">
</video><figcaption>

[en]: <> (Cards can inherit color to showcase selection or importance.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (When a card’s text and icons appear in front of imagery, they can be difficult to read. To improve legibility, you can use color to create a surface for text and icons.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-cards-legibility-baseline-1a.png)

<figcaption>

[en]: <> (This card uses a colorful scrim to ensure text remains legible.)
译文

</figcaption></figure></div></div>

[en]: <> (Buttons, chips and selection controls)
<h2 id="buttons-chips-selection-controls">译文</h2>

[en]: <> (Buttons, chips and selection controls can be emphasized by applying your primary or secondary color to them.)
译文

[en]: <> (Color categories)
#### 译文

[en]: <> (The baseline color for contained, text and outlined buttons is your *primary color*.)
[en]: <> (The baseline color for floating action buttons and extended floating action buttons is your *secondary color*.)
[en]: <> (The baseline color for selection controls is your *secondary color*.)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-baseline.png)

<figcaption>

[en]: <> (The color theme for this app consists of a primary color \(purple 500\) with a primary dark variant \(purple 600\) and a secondary color \(teal 200\).)
译文

[en]: <> (This product uses the primary color \(purple 500\) for the bottom app bar and the secondary color \(teal 200\) as an accent for the floating action button and selection controls.)
[en]: <> (This product uses the secondary color \(teal 200\) as an accent for selected list items.)
* 译文
* 译文

</figcaption></figure>

[en]: <> (Buttons, chips, and selection controls)
### 译文

[en]: <> (Buttons, chips, and selection controls can be emphasized with your primary or secondary colors.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-buttonschips-shrine.png)

<figcaption>

[en]: <> (This app uses its primary color \(pink 100\) for its extended floating action button and chips. It uses its primary dark variant \(pink 900\) for the slider.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-buttonschips-dont-crane.png)

<figcaption>

{do}

[en]: <> (Selection controls can inherit your app’s secondary color.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-buttonschips-do-crane.png)

<figcaption>

{dont}

[en]: <> (Don’t use one of your brand colors for coloring alerts. This will help it stand out.)
译文

</figcaption></figure></div></div>

[en]: <> (Floating action button \(FAB\))
### 译文

[en]: <> (The floating action button \(FAB\) should be one of the most recognizable items on your screen.)
译文

[en]: <> (Use color to create contrast between the FAB and surrounding elements, such as the app bar. Your secondary color is the baseline color for use on the FAB. If your canvas uses many colors, your FAB can use monochromatic coloring instead, to stand out from the content.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-fab-reply.png)

<figcaption>

[en]: <> (This app’s secondary color \(orange 500\) is applied to the FAB, contrasting it from the surrounding UI.)
译文

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-fab-posivibes.png)

<figcaption>

[en]: <> (This app’s color theme uses a primary white and a secondary black for all buttons, selection controls, and iconography. These components stand out because they contrast with the vivid, multicolor content.)
译文

</figcaption></figure>

[en]: <> (Typography and iconography)
<h2 id="typography-iconography">译文</h2>

[en]: <> (Color can express whether text has greater, or lesser, importance relative to other text. Color also ensures text remains legible when placed above imagery or backgrounds, which can make it difficult to read the text in front of them.)
译文

[en]: <> (Typographic hierarchy)
### 译文

[en]: <> (Color can increase both text’s visibility and its level of importance.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-baseline-alt.png)

<figcaption>

[en]: <> (The color theme for this app consists of a primary color \(purple 500\) and a secondary color \(orange 600\). Orange accents the card’s headlines, and purple appears on tabs and buttons.)
译文

</figcaption></figure>

[en]: <> (Headlines and tabs)
### 译文

[en]: <> (Important text, like tabs and headlines, can use your primary or secondary color.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-headlinetabs-basil-1.png)

<figcaption>

[en]: <> (This app uses its secondary color \(orange 800\) to accent and call attention to the headlines.)
译文

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-headlinetabs-basil-2.png)

<figcaption>

[en]: <> (This app uses its primary color \(green 800\) for tabs, with weight changes indicating selected and unselected states.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-headlinetabs-do-owl-1.png)

<figcaption>

{do}

[en]: <> (Use your primary or secondary color to emphasize shorter text, such as headlines.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-headlinetabs-do-owl-2.png)

<figcaption>

{do}

[en]: <> (You can use your primary or secondary color to accent links.)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-headlinetabs-caution-owl-1.png)

<figcaption>

{caution}

[en]: <> (Avoid using bright primary or secondary colors for body text.)
译文

</figcaption></figure>

[en]: <> (Text legibility)
### 译文

[en]: <> (When text is placed above imagery, it often leads to legibility issues. Creating a colored layer between text and image can ensure text remains legible.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/textlegibility-posivibes-2.png)

<figcaption>

[en]: <> (This app applies a yellow scrim above imagery to ensure text above it is legible.)
译文

</figcaption></figure>

[en]: <> (Icons)
### 译文

[en]: <> (Icons help identify actions and provide information. Their color should contrast against the background to ensure that they are legible and identifiable.)
译文

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-icons-basil.png)

<figcaption>

[en]: <> (This app uses both its primary color \(green 800\) and secondary color \(orange 800\) for its icons.)
译文

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-icons-shrine.png)

<figcaption>

[en]: <> (Shrine uses its primary dark variant \(pink 900\) for icons.)
译文

</figcaption></figure></div>
