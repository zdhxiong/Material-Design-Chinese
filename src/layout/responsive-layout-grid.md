<div class="article__intro">

[en]: <> (Responsive layout grid)
# 译文

[en]: <> (The Material Design responsive layout grid adapts to screen size and orientation, ensuring consistency across layouts.)
译文

<nav>

[en]: <> (Columns, gutters, and margins)
[en]: <> (Grid customization)
[en]: <> (Breakpoints)
[en]: <> (Grid behavior)
[en]: <> (UI regions)
[en]: <> (Whiteframes)
* [译文](#columns-gutters-margins)
* [译文](#grid-customization)
* [译文](#breakpoints)
* [译文](#grid-behavior)
* [译文](#ui-regions)
* [译文](#whiteframes)

</nav></div><div class="article__body">

[en]: <> (Columns, gutters, and margins)
<h2 id="columns-gutters-margins">译文</h2>

[en]: <> (The Material Design layout grid is made up of three elements: columns, gutters, and margins.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-columns-margins-gutters.png)

<figcaption>

[en]: <> (Columns)
[en]: <> (Gutters)
[en]: <> (Margins)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Columns)
### 译文

[en]: <> (Content is placed in the areas of the screen that contain columns.)
译文

[en]: <> (Column width is defined using percentages, rather than fixed values, to allow content to flexibly adapt to any screen size. The number of columns displayed in the grid is determined by the breakpoint range \(a range of predetermined screen sizes\) at which a screen is viewed, whether it’s a breakpoint for mobile, tablet, or another size.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-columns-360.png)

<figcaption>

[en]: <> (On mobile, at a breakpoint of 360dp, this layout grid uses 4 columns.)
译文

</figcaption></figure><figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-columns-600.png)

<figcaption>

[en]: <> (On tablet, at a breakpoint of 600dp, this layout grid uses 8 columns.)
译文

</figcaption></figure>

[en]: <> (Gutters)
### 译文

[en]: <> (Gutters are the spaces between columns. They help separate content.)
译文

[en]: <> (Gutter widths are fixed values at each breakpoint range. To better adapt to the screen, gutter width can change at different breakpoints. Wider gutters are more appropriate for larger screens, as they create more whitespace between columns.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-gutters-360.png)

<figcaption>

[en]: <> (On mobile, at a breakpoint of 360dp, this layout grid uses 16dp gutters.)
译文

</figcaption></figure><figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-gutters-600.png)

<figcaption>

[en]: <> (On tablet, at a breakpoint of 600dp, this layout grid uses 24dp gutters.)
译文

</figcaption></figure>

[en]: <> (Margins)
### 译文

[en]: <> (Margins are the space between content and the left and right edges of the screen.)
译文

[en]: <> (Margin widths are defined as fixed values at each breakpoint range. To better adapt to the screen, the margin width can change at different breakpoints. Wider margins are more appropriate for larger screens, as they create more whitespace around the perimeter of content.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-margins-360.png)

<figcaption>

[en]: <> (On mobile, at a breakpoint of 360dp, this layout grid uses 16dp margins.)
译文

</figcaption></figure><figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-margins-600.png)

<figcaption>

[en]: <> (On a small tablet, at a breakpoint of 600dp, this layout grid uses 24dp margins.)
译文

</figcaption></figure>

[en]: <> (Grid customization)
<h2 id="grid-customization">译文</h2>

[en]: <> (The layout grid can be adjusted to meet the needs of both your product and various device sizes.)
译文

[en]: <> (Customizing gutters)
### 译文

[en]: <> (Gutters can be adjusted to create more or less space between the columns of a layout.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-custom-gutters-small.gif)

<figcaption>

[en]: <> (This layout grid uses 8dp gutters. The tighter spacing may suggest the images are closely related to one another, so that they are perceived as part of a collection.)
译文

</figcaption></figure><figure>

![]({assets_path}/layout/responsive-layout-grid/layout-custom-gutter-large.gif)

<figcaption>

[en]: <> (This layout grid uses larger, 32dp gutters to create more separation between columns. The extra space helps each album to be perceived as an individual entity within a collection.)
译文

</figcaption></figure><figure>

![]({assets_path}/layout/responsive-layout-grid/layout-custom-gutters-too-large-dont.gif)

<figcaption>

{dont}

[en]: <> (Don’t make gutters too large, such as the same width as the columns. Too much space doesn’t leave enough room for content and prevents it from appearing unified.)
译文

</figcaption></figure>

[en]: <> (Customizing margins)
### 译文

[en]: <> (Margins can be adjusted to create more or less space between content and the edge of the screen. Margins use a fixed value for each breakpoint.)
译文

[en]: <> (The ideal length for legibility of body copy is 40-60 characters per line.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-custom-margins-small.gif)

<figcaption>

[en]: <> (This layout grid uses small, 8dp margins to allow images to take up more space in the layout.)
译文

</figcaption></figure><figure>

![]({assets_path}/layout/responsive-layout-grid/layout-custom-margins-large.gif)

<figcaption>

[en]: <> (This layout grid uses large, 64dp margins to limit the width of content.)
译文

</figcaption></figure><figure>

![]({assets_path}/layout/responsive-layout-grid/layout-custom-margins-large-dont.gif)

<figcaption>

{dont}

[en]: <> (Don’t make margins so large that there isn’t sufficient room for content.)
译文

</figcaption></figure>

[en]: <> (Gutters and margins)
### 译文

[en]: <> (Within the same breakpoint, gutter and margin widths can be different from one another.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-custom-gutters-margins-different.png)

<figcaption>

[en]: <> (32dp margins)
[en]: <> (8dp gutters)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Horizontal grids)
### 译文

[en]: <> (The Material Design layout grid can be customized for touch UIs that scroll horizontally. Columns, gutters, and margins are laid out from left to right, rather than top to bottom. The height of the screen determines the number of columns in a horizontal grid.)
译文

[en]: <> (Horizontally scrolling UIs are uncommon on non-touch and web platforms.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-horizontal-grid.png)

<figcaption>

[en]: <> (This horizontal layout grid uses four horizontal columns, for a total layout height of 400dp.)
译文

[en]: <> (Columns)
[en]: <> (Gutters)
[en]: <> (Margins)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Horizontal grids can be positioned to accommodate different heights, allowing space for app bars or other UI regions at the top.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-horizontal-grid-appbar.png)

<figcaption>

[en]: <> (<caption | This horizontal layout grid starts below the [Top App Bar]\(https://www.mdui.org/design/components/app-bars-top.html\) component and uses four horizontal columns at a height of 316dp.>)
译文

</figcaption></figure>

[en]: <> (Breakpoints)
<h2 id="breakpoints">译文</h2>

[en]: <> (A breakpoint is the range of predetermined screen sizes that have specific layout requirements. At a given breakpoint range, the layout adjusts to suit the screen size and orientation.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/layout/responsive-layout-grid/layout-responsive-breakpoints.mp4" src="{assets_path}/layout/responsive-layout-grid/layout-responsive-breakpoints.mp4" type="video/mp4"></video></figure>

[en]: <> (Breakpoint system)
### 译文

[en]: <> (Material Design provides responsive layouts based on the following column structures. Layouts using 4-column, 8-column, and 12-column grids are available for use across different screens, devices, and orientations.)
译文

[en]: <> (Each breakpoint range determines the number of columns, and recommended margins and gutters, for each display size.)
译文

[en]: <> (Breakpoint Range \(dp\)   | Portrait         | Landscape        | Window   | Columns   | Margins / Gutters*)
[en]: <> (---------                 |----------        |---------         |------    |------     |------)
[en]: <> (0 – 359                   | small handset    | &nbsp;           | xsmall   | 4         | 16)
[en]: <> (360 – 399                 | medium handset   | &nbsp;           | xsmall   | 4         | 16)
[en]: <> (400 – 479                 | large handset    | &nbsp;           | xsmall   | 4         | 16)
[en]: <> (480 – 599                 | large handset    | small handset    | xsmall   | 4         | 16)
[en]: <> (600 – 719                 | small tablet     | medium handset   | small    | 8         | 16)
[en]: <> (720 – 839                 | large tablet     | large handset    | small    | 8         | 24)
[en]: <> (840 – 959                 | large tablet     | large handset    | small    | 12        | 24)
[en]: <> (960 – 1023                | &nbsp;           | small tablet     | small    | 12        | 24)
[en]: <> (1024 – 1279               | &nbsp;           | large tablet     | medium   | 12        | 24)
[en]: <> (1280 – 1439               | &nbsp;           | large tablet     | medium   | 12        | 24)
[en]: <> (1440 – 1599               | &nbsp;           | &nbsp;           | large    | 12        | 24)
[en]: <> (1600 – 1919               | &nbsp;           | &nbsp;           | large    | 12        | 24)
[en]: <> (1920 +                    | &nbsp;           | &nbsp;           | xlarge   | 12        | 24)

译文     | 译文     | 译文     | 译文     | 译文     | 译文
--------|----------|-------- |-------- |-------- |--------
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文

[en]: <> (*Margins and gutters are flexible and don’t need to be of equal size.)
译文

[en]: <> (iOS breakpoints)
### 译文

[en]: <> (The following column numbers, and margin and gutter widths, apply to breakpoints for screens, devices, orientations, and widths on iOS.)
译文

[en]: <> (Device                                      | Orientation  | Vertical Size Category  | Horizontal Size Category  | Columns  | Margins / Gutters*)
[en]: <> (---------                                   |----------    |---------                |------                     |------    |------)
[en]: <> (iPhone                                      | Portrait     | Regular                 | Compact                   | 4        | 16)
[en]: <> (iPhone                                      | Landscape    | Compact                 | Compact                   | 4        | 16)
[en]: <> (iPhone Plus                                 | Portrait     | Regular                 | Compact                   | 4        | 16)
[en]: <> (iPhone Plus                                 | Landscape    | Compact                 | Regular                   | 4        | 16)
[en]: <> (iPad                                        | Portrait     | Regular                 | Regular                   | 8        | 16)
[en]: <> (iPad                                        | Landscape    | Regular                 | Regular                   | 8        | 24)
[en]: <> (iPad - Even Split Multitasking              | Portrait     | Regular                 | Compact                   | 12       | 24)
[en]: <> (iPad - Even Split Multitasking              | Landscape    | Regular                 | Compact                   | 12       | 24)
[en]: <> (iPad - 2/3 Split Multitasking               | Portrait     | Regular                 | Compact                   | 12       | 24)
[en]: <> (iPad - 2/3 Split Multitasking - First App   | Landscape    | Regular                 | Regular                   | 12       | 24)
[en]: <> (iPad - 2/3 Split Multitasking - Second App  | Landscape    | Regular                 | Compact                   | 12       | 24)
[en]: <> (iPad Pro - Even Split Multitasking          | Portrait     | Regular                 | Compact                   | 12       | 24)
[en]: <> (iPad Pro 13in - Even Split Multitasking     | Landscape    | Regular                 | Regular                   | 12       | 24)

译文     | 译文     | 译文     | 译文     | 译文     | 译文
--------|----------|-------- |-------- |-------- |--------
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文     | 译文     | 译文

[en]: <> (*Margins and gutters are flexible values and don’t need to be equal within the Material Design grid system.)
译文

[en]: <> (Grid behavior)
<h2 id="grid-behavior">译文</h2>

[en]: <> (Fluid grids)
### 译文

[en]: <> (Fluid grids use columns that scale and resize content. A fluid grid’s layout can use breakpoints to determine if the layout needs to change dramatically.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-grid-behavior-fluid.gif)

<figcaption>

[en]: <> (Columns expanding in a full-width grid)
译文

</figcaption></figure>

[en]: <> (Fixed grids)
### 译文

[en]: <> (Fixed grids use columns of a fixed size, with fluid margins to keep content unchanging within each breakpoint range. A fixed grid’s layout can only change at an assigned breakpoint.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-grid-behavior-fixed.gif)

<figcaption>

[en]: <> (Margins expanding in a fixed grid)
译文

</figcaption></figure>

[en]: <> (UI regions)
<h2 id="ui-regions">译文</h2>

[en]: <> (A layout is made up of several UI regions, such as side navigation, content areas, and app bars. These regions can display actions, content, or navigation destinations. UI regions should be consistent across devices, while adapting to different breakpoints of different screen sizes.)
译文

[en]: <> (To increase familiarity across devices, UI elements designed for desktop should be organized in a way that’s consistent with the mobile UI.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/01-ui-regions.gif)

<figcaption>

[en]: <> (Layout changes on different-sized screens)
译文

</figcaption></figure>

[en]: <> (Permanent UI regions)
### 译文

[en]: <> (Permanent UI regions are regions that can be displayed outside of the responsive grid, like a navigation drawer. These regions cannot be collapsed.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-uiregions-permenant.png)

<figcaption>

[en]: <> (When screen space is available, a permanent UI region exposes content.)
译文

</figcaption></figure>

[en]: <> (Persistent UI regions)
### 译文

[en]: <> (Persistent UI regions are regions that can be displayed upon command at any time, or they can remain visible. They can be toggled on or off, to appear or disappear. When they appear, they condense both content and the grid.)
译文

[en]: <> (When a persistent UI region is visible, its visibility isn’t affected by interaction with other elements on screen.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-uiregions-persistent.gif)

<figcaption>

[en]: <> (When open, this persistent navigation drawer causes the grid \(and its content\) to condense.)
译文

</figcaption></figure>

[en]: <> (Temporary UI regions)
### 译文

[en]: <> (Temporary UI regions appear temporarily, and when they do, they do not affect the responsive grid. When visible, they can be hidden by tapping an item in their region, or any space outside their region.)
译文

[en]: <> (When a UI region is visible, other screen elements aren’t interactive.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-uiregions-temporary.gif)

<figcaption>

[en]: <> (When open, this temporary navigation drawer doesn’t affect the responsive grid or screen content.)
译文

</figcaption></figure>

[en]: <> (Whiteframes)
<h2 id="whiteframes">译文</h2>

[en]: <> (Whiteframes are structured layouts that provide a consistent approach to layout, layering, and shadows. They are a starting point, meant to be modified to meet the specific needs of a product.)
译文

<figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-whiteframes-01.png)

<figcaption>

[en]: <> (Desktop)
[en]: <> (Mobile)
1. 译文
2. 译文

</figcaption></figure><figure>

![]({assets_path}/layout/responsive-layout-grid/layout-responsive-whiteframes-02.png)

<figcaption>

[en]: <> (Desktop)
[en]: <> (Mobile)
1. 译文
2. 译文

</figcaption></figure></div>
