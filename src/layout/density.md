<div class="article__intro">

[en]: <> (Density)
# 译文

[en]: <> (Material Design uses low-density space by default \(with large tap targets and margins\) but offers high-density space when it improves the user experience.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Layout)
[en]: <> (Touch and click targets)
[en]: <> (Typographic density)
* [译文](#usage)
* [译文](#layout)
* [译文](#touch-click-targets)
* [译文](#typographic-density)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Density principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/layout/density/density-illos-01.png)

<figcaption>

[en]: <> (Scannable)
#### 译文

[en]: <> (Dense UIs improve browsing and interaction with large amounts of content.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/layout/density/density-illos-02.png)

<figcaption>

[en]: <> (Prioritized)
#### 译文

[en]: <> (Dense UIs help users focus by reducing space between actions.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/layout/density/density-illos-03.png)

<figcaption>

[en]: <> (Available)
#### 译文

[en]: <> (Density exposes more content and actions on a single screen.)
译文

</figcaption></figure></div></div>

[en]: <> (When to apply density)
### 译文

[en]: <> (Whether to increase your UI’s density can be determined by how users interact with a component.)
译文

[en]: <> (Components with high density enable users to process and take action against large amounts of information in a more manageable way. List, tables, and long forms are components that benefit from increased density.)
译文

<figure>

![]({assets_path}/layout/density/layout-density-rows.png)

<figcaption>

[en]: <> (Default density, 48dp row height)
[en]: <> (High density, 32dp row height)
1. 译文
2. 译文

</figcaption></figure><figure>

![]({assets_path}/layout/density/layout-density-forms.png)

<figcaption>

[en]: <> (Default density, 56dp text field height)
[en]: <> (High density, 44dp text field height)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Apply density consistently to a component and any components nested within it.)
译文

<figure>

![]({assets_path}/layout/density/layout-density-nested.png)

<figcaption>

[en]: <> (Default density, 40dp row height, and 36dp action height.)
[en]: <> (High density, 32dp row height, and 24dp action height.)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (When not to apply density)
### 译文

[en]: <> (High density should not be applied to task or alert-based components.)
#### 译文

[en]: <> (Focused tasks)
#### 译文

[en]: <> (Don’t apply density to components that involve focused tasks, such as interacting with a dropdown menu or picker. Increasing density on these components reduces their usability.)
译文

<figure>

![]({assets_path}/layout/density/focused-tasks-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t apply high density to a date picker, as this reduces usability.)
译文

</figcaption></figure>

[en]: <> (Alerts and messaging)
#### 译文

[en]: <> (Don’t apply density to components that alert the user of changes, such as snackbars or dialogs. Applying high density to alerts reduces their ability to command attention.)
译文

<figure>

![]({assets_path}/layout/density/alerts-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t apply high density to dialogs, which reduces their readability and prominence.)
译文

</figcaption></figure>

[en]: <> (Layout)
<h2 id="layout">译文</h2>

[en]: <> (Grid and component density)
### 译文

[en]: <> (To create more scannable groups of content, use a less-dense grid layout with high-density components. The higher the density of components, the larger their margins and gutter widths should be.)
译文

<figure>

![]({assets_path}/layout/density/rally-density-gridvcontent-high-low.gif)

<figcaption>

[en]: <> (High-density component row height, with wide margins and gutters)
译文

</figcaption></figure><figure>

![]({assets_path}/layout/density/rally-density-gridvcontent-low-high.gif)

<figcaption>

[en]: <> (Default density component row height, with narrow margins and gutters)
译文

</figcaption></figure><figure>

![]({assets_path}/layout/density/rally-gridvcontent-dont.gif)

<figcaption>

{dont}

[en]: <> (Don’t use both a dense layout grid and dense components, as this will make it difficult to differentiate content groups.)
译文

</figcaption></figure>

[en]: <> (Touch and click targets)
<h2 id="touch-click-targets">译文</h2>

[en]: <> (Touch target specs)
### 译文

[en]: <> (Touch targets apply to any device that receives both touch and non-touch input. To balance information density and usability, touch targets should be at least 48 x 48 dp, with at least 8dp of space between each target.)
译文

<figure>

![]({assets_path}/layout/density/layout-spacing-touchtargets.png)

<figcaption>

[en]: <> (Touch target minimum of 48 x 48 dp)
译文

</figcaption></figure>

[en]: <> (Applying density)
#### 译文

<figure>

![]({assets_path}/layout/density/rally-touchtargets-1.png)

<figcaption>

[en]: <> (Default density in a list)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/layout/density/rally-touchtargets-2.png)

<figcaption>

{do}

[en]: <> (In this high-density list, the minimum space \(48px\) is defined by the tap target on each list item.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/layout/density/rally-touchtargets-3-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use less than the minimum touch target size of 48dp for touch devices or devices that support both touch and click input methods.)
译文

</figcaption></figure></div></div>

[en]: <> (Click targets)
### 译文

[en]: <> (On non-touch UIs, click targets should be at least 24 x 24 dp, with at least 8dp of space between each target.)
译文

<figure>

![]({assets_path}/layout/density/layout-spacing-clicktargets.png)

<figcaption>

[en]: <> (Click target minimum 24 x 24dp)
译文

</figcaption></figure>

[en]: <> (Applying Density)
#### 译文

<figure>

![]({assets_path}/layout/density/rally-clicktargets.png)

<figcaption>

[en]: <> (When using high-density icons \(18dp\), the minimum space \(24px\) is defined by the click target.)
译文

</figcaption></figure>

[en]: <> (Typographic density)
<h2 id="typographic-density">译文</h2>

[en]: <> (Line height)
### 译文

[en]: <> (Line height is the space between lines of text. Line height can be used as a way to create density in typographic layouts. When tightening line height be sure to still use the 4dp baseline grid.)
译文

<figure>

![]({assets_path}/layout/density/layout-line-height-1.png)

<figcaption>

[en]: <> (Larger line height)
[en]: <> (Smaller line height)
1. 译文
2. 译文

</figcaption></figure></div>
