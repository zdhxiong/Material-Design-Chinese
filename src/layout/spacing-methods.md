<div class="article__intro">

[en]: <> (Spacing methods)
# 译文

[en]: <> (Spacing methods use baseline grids, keylines, padding, and incremental spacing to affect ratios, containers, and touch targets.)
译文

<nav>

[en]: <> (Baseline)
[en]: <> (Spacing)
[en]: <> (Containers and aspect ratios)
[en]: <> (Touch and click targets)
* [译文](#baseline)
* [译文](#spacing)
* [译文](#containers-aspect-ratios)
* [译文](#touch-click-targets)

</nav>

</div><div class="article__body">

[en]: <> (Baseline)
<h2 id="baseline">译文</h2>

[en]: <> (8dp grid)
### 译文

[en]: <> (All components align to an 8dp square baseline grid for mobile, tablet, and desktop.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-baslinegrid.png)

<figcaption>

[en]: <> (The app bar and floating action button align to the 8dp grid.)
译文

</figcaption></figure>

[en]: <> (4dp grid)
### 译文

[en]: <> (Iconography, typography, and some elements within components can align to a 4dp grid.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-4dp-baslinegrid.png)

<figcaption>

[en]: <> (Elements of the bottom navigation bar align to the 4dp grid.)
译文

</figcaption></figure>

[en]: <> (4dp baseline grid)
### 译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-baslinetype.png)

<figcaption>

[en]: <> (Type aligns to the 4dp baseline grid.)
译文

</figcaption></figure>

[en]: <> (Typography can be placed outside of the 4dp grid when it’s centered within a component, such as a button or list item.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-keylinespadding-verticalspacing-type.png)

<figcaption>

[en]: <> (The text appears vertically aligned in the center of the list item, even though the type isn’t resting on the 4dp grid.)
译文

</figcaption></figure>

[en]: <> (Spacing)
<h2 id="spacing">译文</h2>

[en]: <> (Keylines)
### 译文

[en]: <> (Keylines enable the consistent placement of elements outside of the [layout grid]\(https://www.mdui.org/design/layout/responsive-layout-grid.html\) . They are vertical lines that show where elements are placed in a design that doesn’t align to the grid. Keylines are determined by each element’s distance from the edge of the screen, measured in increments of 8dp.)
译文

[en]: <> (Keylines should be used in combination with the responsive layout grid to place elements consistently across a design.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-keylinespadding-keylines.png)

<figcaption>

[en]: <> (Layout Grid)
[en]: <> (Keyline)
1. 译文
2. 译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/spacing-methods/custom-keylines.gif)

<figcaption>

[en]: <> (Keylines can create more or less space between elements in a layout. They are adjustable per breakpoint range.)
译文

</figcaption></figure>

[en]: <> (Padding)
### 译文

[en]: <> (Padding refers to the space between UI elements. It’s an alternative spacing method to keylines, measured in increments of 8dp or 4dp.)
译文

[en]: <> (Padding should be used in combination with the responsive layout grid to place elements consistently across a design.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-keylinespadding-padding.png)

<figcaption>

[en]: <> (Layout Grid)
[en]: <> (Padding)
1. 译文
2. 译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-keylinespadding-padding-verthorz.png)

<figcaption>

[en]: <> (Padding can be measured both vertically and horizontally. Unlike keylines, padding does not need to span the whole height of a layout.)
译文

</figcaption></figure>

[en]: <> (Vertical spacing)
### 译文

[en]: <> (Vertical spacing refers to the height of a standard element, such as an app bar or list item. The heights of these elements should align to the 8dp grid.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-keylinespadding-verticalspacing.png)

<figcaption>

[en]: <> (Status bar: 24dp)
[en]: <> (App bar: 56dp)
[en]: <> (List item: 88dp)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Increment)
### 译文

[en]: <> (An *increment* is a measurement used to measure the size and placement of elements in your app.)
译文

[en]: <> (It has equal height and width. It can be any number, but it’s recommended to use the height of a standard element \(such as the app bar\) as your increment.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-increments-example.png)

<figcaption>

[en]: <> (This increment is defined using the height of the app bar. If an app bar is 64dp tall, the increment would be 64 x 64dp.)
译文

</figcaption></figure>

[en]: <> (To make a component, like a card, eight increments wide, multiply the number of increments by the size of the increment. If each increment is 56dp, the total width of the card would be:)
译文

[en]: <> (8 increments x 56dp = 512dp)
译文

[en]: <> (The card would be 512dp wide.)
译文

[en]: <> (Containers and aspect ratios)
<h2 id="containers-aspect-ratios">译文</h2>

[en]: <> (Containers)
### 译文

[en]: <> (A container is a shape used to represent an enclosed area. Containers can hold various UI elements such as an image, icon, or surface.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-unitsmeasurements-dev-containers.png)

<figcaption>

[en]: <> (200%)
译文

[en]: <> (Image container)
[en]: <> (Icon container)
[en]: <> (Surface container)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Containers can be rigid and restrict the size or cropping of elements within them. Alternatively, they can be flexible and grow to support the size of the content they hold.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacingmethods-containers.gif)

<figcaption>

[en]: <> (Rigid image container that crops original the image size.)
[en]: <> (Flexible image container that scales to hold the original image size.)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Aspect ratios)
### 译文

[en]: <> (An aspect ratio is the proportion of an element’s width to its height.)
译文

[en]: <> (To maintain consistency in your layout, use a consistent aspect ratio on elements like images, surfaces, and screen size. Aspect ratio is written as width:height.)
译文

[en]: <> (The following aspect ratios are recommended for use across your UI:)
译文

[en]: <> (16:9, 3:2, 4:3, 1:1, 3:4, and 2:3)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-unitsmeasurements-dev-aspectratio.png)

</figure>

[en]: <> (Flexible ratios)
### 译文

[en]: <> (Flexible ratios sizing is determined by the [layout grid]\(https://www.mdui.org/design/layout/responsive-layout-grid.html\):)
译文

[en]: <> (Container width is determined by the screen layout, and grows to fill the maximum space available)
[en]: <> (Container height is determined by the height of the image in that container)
* 译文
* 译文

[en]: <> (Use a flexible ratio to allow content to dictate the height of the container.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-unitsmeasurements-dev-aspectratio-baseline.png)

<figcaption>

[en]: <> (Container widths are determined by the column widths in the layout grid.)
译文

</figcaption></figure>

[en]: <> (Responsive cropping)
### 译文

[en]: <> (To display images responsively, define how an image will be cropped at different breakpoint ranges. At different breakpoint ranges cropping can:)
译文

[en]: <> (Maintain one fixed ratio)
[en]: <> (Adapt to different ratios)
[en]: <> (Fix image heights)
* 译文
* 译文
* 译文

[en]: <> (Maintain one ratio)
#### 译文

[en]: <> (Image sizing can remain one fixed ratio across breakpoint ranges.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-responsive-cropping-maintain-ratio.png)

<figcaption>

[en]: <> (50%)
译文

[en]: <> (Image maintains a 3:2 ratio between breakpoints.)
译文

</figcaption></figure>

[en]: <> (Adapt to different ratios)
#### 译文

[en]: <> (Image sizing can change to different a ratio per breakpoint range.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-responsive-cropping-adapt-ratio.png)

<figcaption>

[en]: <> (50%)
译文

[en]: <> (The image ratio changes from 1:1 to 3:2 between breakpoints.)
译文

</figcaption></figure>

[en]: <> (Fix image heights)
#### 译文

[en]: <> (Image sizing can maintain a fixed height and fluid width across and within breakpoint ranges.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-responsive-cropping-fixed-height.png)

<figcaption>

[en]: <> (50%)
译文

[en]: <> (The image maintains a fixed height with a fluid width between breakpoints.)
译文

</figcaption></figure>

[en]: <> (Touch and click targets)
<h2 id="touch-click-targets">译文</h2>

[en]: <> (Touch target specs)
### 译文

[en]: <> (Touch targets apply to any device that receives both touch and non-touch input. To balance information density and usability, touch targets should be at least 48 x 48 dp with at least 8dp of space between them.)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-touchtargets.png)

<figcaption>

[en]: <> (Touch target minimum of 48 x 48 dp)
译文

</figcaption></figure>

[en]: <> (Click targets)
### 译文

[en]: <> (On non-touch-UIs, click targets should be at least 24 x 24 dp with at least 8dp of space between them..)
译文

<figure>

![]({assets_path}/layout/spacing-methods/layout-spacing-clicktargets.png)

<figcaption>

[en]: <> (Click target minimum of 24 x 24 dp)
译文

</figcaption></figure>
</div>
