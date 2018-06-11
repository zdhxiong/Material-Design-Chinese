<div class="article__intro">

[en]: <> (Basil)
# Basil

[en]: <> (Basil is a recipe app that uses Material Design components and Material Theming to create an on-brand experience that is exciting and easy to explore.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-main.png)

</figure><nav>

[en]: <> (About Basil)
[en]: <> (Product architecture)
[en]: <> (Layout)
[en]: <> (Color)
[en]: <> (Typography)
[en]: <> (Iconography)
[en]: <> (Components)
[en]: <> (Motion)
* [译文](#about-basil)
* [译文](#product-architecture)
* [译文](#layout)
* [译文](#color)
* [译文](#typography)
* [译文](#iconography)
* [译文](#components)
* [译文](#motion)

</nav></div><div class="article__body">

[en]: <> (About Basil)
<h2 id="about-basil">译文</h2>

[en]: <> (Basil allows users to browse recipes curated by a group of chefs and bartenders. Its brand and app are designed to be approachable, direct, and delightfully surprising. )
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-brandattributes.png)

</figure>

[en]: <> (Funky but functional aesthetic)
### 译文

[en]: <> (Basil’s bold typography and color are paired with a simple approach to content, creating an app that is exciting to explore, and easy to understand.)
译文

[en]: <> (Product architecture)
<h2 id="product-architecture">译文</h2>

[en]: <> (The Basil app’s information architecture has a catalog structure. A catalog contains categorized, hierarchical data, with a top level consisting of peers which may each contain subordinate data.)
译文

[en]: <> (Four top-level sections)
#### 译文

[en]: <> (Basil’s app is divided into four top-level sections that cover different types of recipes: appetizers, entrées, desserts, and cocktails. Each of these contains a number of recipes, which contain two sub-sections: ingredients and directions.)
译文

[en]: <> (A novel approach to navigation)
#### 译文

[en]: <> (While navigation drawers are often used for catalog structures, Basil’s interaction model uses a number of components to create an experience that is novel and sometimes surprising.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-family.png)

<figcaption>

[en]: <> (Basil seen on tablet, mobile, and desktop)
译文

</figcaption></figure>

[en]: <> (Desktop and tablet navigation)
### 译文

[en]: <> (On desktop and tablet, Basil’s main sections are accessible through persistent tabs. Vertically scroll each section to browse recipes on desktop, and horizontally scroll to browse on tablet.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-prodarch-desktop.png)

<figcaption>

[en]: <> (On desktop, Basil’s entrée section scrolls vertically. Scaled down to 50%.)
译文

</figcaption></figure><figure>

![]({assets_path}/material-studies/basil/casestudies-basil-prodarch-tablet.png)

<figcaption>

[en]: <> (On tablet, Basil’s entrée section is browsed by scrolling horizontally. Scaled down to 50%.)
译文

</figcaption></figure>

[en]: <> (When a recipe is selected, tabs are used to toggle between ingredients and directions. Directions are displayed using a customized stepper component.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-prodarch-tablet-tabs.png)

<figcaption>

[en]: <> (On tablet, this Basil detailed recipe screen uses tabs and steppers.)
译文

</figcaption></figure>

[en]: <> (Mobile navigation)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (On mobile, Basil’s main sections can be accessed by swiping down to reveal a navigation drawer.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/01-navdrawer.mp4" src="{assets_path}/material-studies/basil/01-navdrawer.mp4" type="video/mp4"></video></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (After a section is selected, horizontally scroll to browse the recipes within it.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/02-horizontalscroll.mp4" src="{assets_path}/material-studies/basil/02-horizontalscroll.mp4" type="video/mp4"></video></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (When a recipe is selected, tabs at the bottom provide access to ingredients and directions.)
译文

[en]: <> (When one of bottom tabs is selected, a bottom sheet animates up to fill the screen. The sheet’s transparency expresses that users haven’t navigated to a new page, but are instead viewing a sheet that is in front of the recipe summary page.)
译文

[en]: <> (Users can toggle between ingredients and directions on this sheet, or swipe down to move it off-screen.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/03-tabdrawer.mp4" src="{assets_path}/material-studies/basil/03-tabdrawer.mp4" type="video/mp4"></video></figure></div></div>

[en]: <> (Layout)
<h2 id="layout">译文</h2>

[en]: <> (Grid system)
### 译文

[en]: <> (Basil uses a responsive grid system, which has flexible columns and padding that can resize depending on the screen width \(such as mobile, tablet, or desktop\).)
译文

[en]: <> (This grid system informs where typography is placed, because Basil center-aligns type to sections of its layout.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/casestudies-basil-grid.mp4" src="{assets_path}/material-studies/basil/casestudies-basil-grid.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Basil’s grid system, scaled down to 50%)
译文

</figcaption></figure>

[en]: <> (Basil’s headline responsively changes type size to fill the width of the screen on mobile.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/material-studies/basil/casestudies-basil-layout-type-1.png)

<figcaption>

[en]: <> (The type size of the recipe title dynamically changes to fill the width the screen.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/material-studies/basil/casestudies-basil-layout-type-2.png)

<figcaption>

[en]: <> (The type size of the recipe title dynamically changes to fill the width of the screen.)
译文

</figcaption></figure></div></div>

[en]: <> (Elevation)
### 译文

[en]: <> (Basil doesn’t use shadow to show elevation between UI elements. Instead, it places content at different elevations which are distinguished using parallax motion and opacity.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/casestudies-basil-elevation.mp4" src="{assets_path}/material-studies/basil/casestudies-basil-elevation.mp4" type="video/mp4"></video><figcaption>

[en]: <> (These three layers look different from one another, and can be distinguished through parallax motion.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Basil expresses elevation differences by using transparency to show stacked layers of UI elements.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/04-tabdrawer.mp4" src="{assets_path}/material-studies/basil/04-tabdrawer.mp4" type="video/mp4"></video><figcaption>

[en]: <> (This slightly transparent bottom sheet animates on-screen, allowing the user to see the main recipe screen beneath it. This lets the user know they have not navigated to a new screen, but are instead interacting with a sheet above the content they were just viewing.)
译文

</figcaption></figure></div></div>

[en]: <> (When text scrolls above imagery, a duotone image treatment ensures text remains legible.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/casestudies-basil-elevationtransparency-1a.mp4" src="{assets_path}/material-studies/basil/casestudies-basil-elevationtransparency-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Duotone image treatment)
译文

</figcaption></figure>

[en]: <> (Color)
<h2 id="color">译文</h2>

[en]: <> (Color theme)
### 译文

[en]: <> (Basil uses a color theme inspired by the deep and rich colors from fruits and vegetables:)
译文

[en]: <> (Basil’s *primary color* is olive green)
[en]: <> (Basil’s *secondary color* is orange)
* 译文
* 译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-color.png)

</figure>

[en]: <> (Typography)
<h2 id="typography">译文</h2>

[en]: <> (Typefaces)
### 译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-type.png)

<figcaption>

[en]: <> (Montserrat)
[en]: <> (Lekton)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Type scale)
### 译文

[en]: <> (Basil’s type scale uses two typefaces: [Montserrat]\(https://fonts.google.com/specimen/Montserrat\) , and [Lekton]\(https://fonts.google.com/specimen/Lekton\) . The two typefaces make a quirky pair, adding to the character of Basil.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-typescale.png)

<figcaption>

[en]: <> (Basil’s type scale)
译文

</figcaption></figure>

[en]: <> (Montserrat)
### 译文

[en]: <> (Montserrat a sans serif font with a wide letterforms. Basil uses it as a display typeface, as well as for body, caption, and button text.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-type-montserrat-1.png)

<figcaption>

[en]: <> (Montserrat’s letterforms)
译文

</figcaption></figure><figure>

![]({assets_path}/material-studies/basil/casestudies-basil-type-montserrat-2.png)

<figcaption>

[en]: <> (Montserrat compared to Roboto)
译文

</figcaption></figure>

[en]: <> (Lekton)
### 译文

[en]: <> (Lekton is inspired by some of the typefaces used in Olivetti typewriters. The glyphs are ‘trispaced,’ meaning they are all built using the same three modular units. This produces a typeface with a predictable vertical alignment of characters, similar to a monospace font. Lecton is used for Basil’s smaller headlines, and subtitles.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-type-lekton-1.png)

<figcaption>

[en]: <> (Lekton’s letterforms)
译文

</figcaption></figure><figure>

![]({assets_path}/material-studies/basil/casestudies-basil-type-lekton-2.png)

<figcaption>

[en]: <> (Lekton compared to Roboto)
译文

</figcaption></figure>

[en]: <> (Iconography)
<h2 id="iconography">译文</h2>

[en]: <> (Basil’s custom icons are designed with a simple, whimsical quality to help make content feel approachable.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-icons-alt.png)

<figcaption>

[en]: <> (1. Basil’s icons were designed using the same grid structure, 2. A collection of Basil’s icons)
译文

</figcaption></figure>

[en]: <> (Basil’s icons use its primary color \(olive green\). Basil’s secondary color \(orange\) is used on iconography to indicate if a food type is not included \(such as gluten or dairy\).)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-icons-2color.png)

<figcaption>

[en]: <> (Basil’s secondary color \(orange\) is used indicate the recipe is gluten and egg free.)
译文

</figcaption></figure>

[en]: <> (Components)
<h2 id="components">译文</h2>

[en]: <> (Lists)
### 译文

[en]: <> (Basil displays ingredients for each recipe using the list component. Each list uses Basil’s typography and iconography, customized with a line of dots that connect each ingredient to a quantity.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-lists-1.png)

</figure>

[en]: <> (Bottom sheet)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (On mobile, Basil uses an expanding bottom sheet to provide recipe ingredients and directions.)
译文

[en]: <> (Upon tapping a tab, a full-screen sheet appears in front of the content. The user can toggle between recipe ingredients and directions on this sheet.)
译文

[en]: <> (The sheet’s background has a slight transparency to let the user know the sheet is above the screen that generated it, and that the user can dismiss the sheet at any time.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/03-tabdrawer.mp4" src="{assets_path}/material-studies/basil/03-tabdrawer.mp4" type="video/mp4"></video></figure></div></div>

[en]: <> (Tabs)
### 译文

[en]: <> (On desktop and tablet, Basil uses tabs to navigate between sections. The tabs are distributed equally across a fixed width region, which is aligned to the center of the screen.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-tabs-1.png)

<figcaption>

[en]: <> (Basil uses custom tabs for navigation on desktop and tablet, scaled down to 62.5%)
译文

</figcaption></figure><figure>

![]({assets_path}/material-studies/basil/casestudies-basil-tabs-2-625p.png)

<figcaption>

[en]: <> (A baseline tab)
[en]: <> (Basil’s desktop and tablet navigation tabs use custom typography, color, and states. The custom selected state changes text to a heavier font weight. \(Scaled down to 62.5%\))
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (On mobile, tabs allow users to toggle between recipe ingredients and directions. By default, these tabs are displayed at the bottom of a recipe screen. Upon selection, they move to the top of the screen and attach to a surface that allows users to toggle between them.)
译文

<figure>

![]({assets_path}/material-studies/basil/casestudies-basil-tabs-2.png)

<figcaption>

[en]: <> (Recipe detail tabs are displayed first at the bottom of the screen \(1\). When tapped, they move to the top of the screen, allowing the user to toggle between them \(2\).)
译文

</figcaption></figure><figure>

![]({assets_path}/material-studies/basil/casestudies-basil-tabs-3.png)

<figcaption>

[en]: <> (A baseline tab)
[en]: <> (Basil’s recipe tabs use custom typography, color, and states. The custom selected state includes a stroke under the selected tab text, which also changes to a heavier font weight.)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Steppers)
### 译文

[en]: <> (Basil uses non-linear steppers for recipe directions, so users can move between the different steps in any order they want. Steps use Basil’s typography and color scheme, with customized vertical spacing.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/material-studies/basil/casestudies-basil-steppers-1.png)

<figcaption>

[en]: <> (Basil uses magnification to focus on the activated stepper, scaled up to 200%)
[en]: <> (Basil’s stepper appears on the right side of the screen.)
1. 译文
2. 译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/steppers-custom-basil-mobile.mp4" src="{assets_path}/material-studies/basil/steppers-custom-basil-mobile.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Basil’s use of stretch motion on steppers demonstrates an elastic style.)
译文

</figcaption></figure></div></div>

[en]: <> (Motion)
<h2 id="motion">译文</h2>

[en]: <> (Launch screen)
### 译文

[en]: <> (Basil’s logo animation plays off the use of parallax throughout the app. The subtle overshoot on the bottom arrow encourages the user to navigate vertically and explore.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/01-launch.mp4" src="{assets_path}/material-studies/basil/01-launch.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When launching Basil, a logo animation is displayed.)
译文

</figcaption></figure>

[en]: <> (Navigation transitions)
### 译文

[en]: <> (Basil makes use of emphasized easing, parallax, and condensed transitions when navigating the app.)
译文

[en]: <> (Mobile)
#### 译文

[en]: <> (Parallax is used to indicate the elevation between elements and to add visual interest during transitions.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/02-parallax.mp4" src="{assets_path}/material-studies/basil/02-parallax.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Navigation transitions on mobile make use of parallax.)
译文

</figcaption></figure>

[en]: <> (Tablet and desktop)
#### 译文

[en]: <> (On tablet and desktop, Basil uses condensed transitions to keep the transitions simple and clean. A translation in the z-axis is combined with a fade-through animation to create the condensed transition.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/04-condensedtransition.mp4" src="{assets_path}/material-studies/basil/04-condensedtransition.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Parent-child transitions on tablet and desktop are condensed when clicking on a recipe.)
译文

</figcaption></figure>

[en]: <> (Stretch)
### 译文

[en]: <> (Components like steppers use stretch motion to add an unexpected and delightful tone to simple interactions.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/basil/03-elasticity.mp4" src="{assets_path}/material-studies/basil/03-elasticity.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The stepper indicator uses elasticity when transitioning between steps.)
译文

</figcaption></figure></div>
