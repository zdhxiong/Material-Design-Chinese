<div class="article__intro">

[en]: <> (Component behavior)
# 译文

[en]: <> (The following guidance describes how components behave, both in the grid and between breakpoints.)
译文

<nav>

[en]: <> (Positioning terminology)
[en]: <> (Component width)
[en]: <> (Responsive patterns)
* [译文](#positioning-terminology)
* [译文](#component-width)
* [译文](#responsive-patterns)

</nav>

</div><div class="article__body">

[en]: <> (Positioning terminology)
<h2 id="positioning-terminology">译文</h2>

[en]: <> (UI elements behave in different ways at each breakpoint range.)
译文

[en]: <> (Descriptors)
### 译文

[en]: <> (The position of UI elements elements, components, and surfaces in the grid can be described using the following terms:)
译文

[en]: <> (Descriptor               | Definition)
[en]: <> (---------                |----------)
[en]: <> (Above, below             | The y position of an element)
[en]: <> (In front of, behind      | The z position of an element)
[en]: <> (Left, right, centered    | The x position of an element)
[en]: <> (Top, bottom              | The y position of an element relative to a container or screen edge)
[en]: <> (Vertically centered      | The x and y position of an element are centered relative to a container or screen edges)
[en]: <> (Sticky                   | An element that scrolls with the UI and locks at a certain point in the scroll position)
[en]: <> (Floating                 | A fixed element positioned in front of scrolling content)

译文     | 译文
--------|----------
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文

[en]: <> (Component width)
<h2 id="component-width">译文</h2>

[en]: <> (Component width can remain the same across screen sizes, or it can change depending on the layout. )
译文

[en]: <> (Component width can be either:)
译文

[en]: <> (Fixed)
[en]: <> (Fluid)
* 译文
* 译文

[en]: <> (Because fixed width elements retain their width during layout changes, their placement can change to accommodate new layouts. Their placement can be either:)
译文

[en]: <> (Pushed)
[en]: <> (Overlaid)
* 译文
* 译文

[en]: <> (Fixed)
### 译文

[en]: <> (When an element has a fixed width, its width stays the same even across screen size changes.)
译文

<figure>

![]({assets_path}/layout/component-behavior/layout-element-behavior-fixed-width.gif)

<figcaption>

[en]: <> (This button component remains fixed against the right margin.)
译文

</figcaption></figure>

[en]: <> (Fluid)
### 译文

[en]: <> (When an element has a fluid width, its width expands and contracts as the screen size changes.)
译文

<figure>

![]({assets_path}/layout/component-behavior/layout-element-behavior-fluid-width.gif)

<figcaption>

[en]: <> (This button fluidly scales within the right two columns.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-element-behavior-fluid-dont-01.gif)

<figcaption>

{dont}

[en]: <> (Don’t use a container on fluid components if it’s too narrow to display elements and padding at smaller widths.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-element-behavior-fluid-caution-01.gif)

<figcaption>

{caution}

[en]: <> (Use caution when spanning a fluid component across several columns in a wide screen. Certain components, like buttons, might be overly emphasized on larger screen widths.)
译文

</figcaption></figure>

[en]: <> (Push)
### 译文

[en]: <> (When layout and screen size change, a component can be pushed from its original position. Component width remains the same, but its position changes horizontally, moving left or right. When this occurs, it may be partially occluded by a screen’s edge if pushed off-screen.)
译文

<figure>

![]({assets_path}/layout/component-behavior/layout-element-behavior-push.gif)

<figcaption>

[en]: <> (The content region is pushed off-screen by the navigation drawer.)
译文

</figcaption></figure>

[en]: <> (Overlaid)
### 译文

[en]: <> (When a UI changes, a component can be overlaid by other elements that occlude it. When a component is overlaid, its width and position remain the same.)
译文

<figure>

![]({assets_path}/layout/component-behavior/layout-element-behavior-overlaid.gif)

<figcaption>

[en]: <> (The content UI region is covered by the navigational UI region.)
译文

</figcaption></figure>

[en]: <> (Responsive patterns)
<h2 id="responsive-patterns">译文</h2>

[en]: <> (Components can adapt their dimensions based on screen size and device type, using the following the following patterns. These dimension adaptations can include:)
译文

[en]: <> (Using different components that fit the space better)
[en]: <> (Altering the visibility of components to accommodate smaller spaces)
[en]: <> (Changing to input methods)
* 译文
* 译文
* 译文

[en]: <> (As screen space increases, the following responsive patterns may be applied.)
译文

[en]: <> (Reveal)
### 译文

[en]: <> (Parts of the UI hidden by smaller screens can be revealed when additional space becomes available at a designated breakpoint.)
译文

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-reveal-navdrawer.png)

<figcaption>

[en]: <> (Elements, such as side navigation, can become visible when screen size increases.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-reveal-wordprocessor.png)

<figcaption>

[en]: <> (A simple UI may reveal more robust or complex options.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-reveal-card.png)

<figcaption>

[en]: <> (Content that only appears after tapping on a small screen can be revealed by default when more space is available.)
译文

</figcaption></figure>

[en]: <> (Transform)
### 译文

[en]: <> (A component can transform from one format to another at a designated breakpoint.)
译文

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-navdrawer.png)

<figcaption>

[en]: <> (Side navigation can transform into tabs on a larger screen.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-list.png)

<figcaption>

[en]: <> (A list can transform into an image list on a larger screen.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-toolbar.png)

<figcaption>

[en]: <> (Menu items can transform into icons in a toolbar on a larger screen.)
译文

</figcaption></figure>

[en]: <> (Divide)
### 译文

[en]: <> (UIs with multiple layers can display all of those layers at once when more screen space is available. UI elements are divided across this newly available space.)
译文

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-divide-1.png)

<figcaption>

[en]: <> (Side navigation, list content, and detailed content divide to fill a single view on a larger screen.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-divide-2.png)

<figcaption>

[en]: <> (Tabbed sibling content is divided within the same view on a larger screen.)
译文

</figcaption></figure>

[en]: <> (Reflow)
### 译文

[en]: <> (A UI may change its layout to reflow across newly available space.)
译文

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-reflow-1.png)

<figcaption>

[en]: <> (Elements from a single-column format can reflow to fill the content area in various combinations on a larger screen.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-reflow-2.png)

<figcaption>

[en]: <> (Horizontal tabs can reflow into a vertical list on a larger screen.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-reflow-3.png)

<figcaption>

[en]: <> (Elements can reflow within a component based on a new screen ratio or device orientation.)
译文

</figcaption></figure>

[en]: <> (Expand)
### 译文

[en]: <> (The UI can expand across more space.)
译文

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-expand-1.png)

<figcaption>

[en]: <> (Cards can expand to fill a new and larger space.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-expand-2.png)

<figcaption>

[en]: <> (Dialogs can expand proportionally with content or in specific increments.)
译文

</figcaption></figure>

[en]: <> (Position)
### 译文

[en]: <> (The position of UI components can change to more appropriate locations.)
译文

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-position-1.png)

<figcaption>

[en]: <> (A bottom sheet on a small screen can reposition itself as a menu on a larger screen.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/layout/component-behavior/layout-responsive-patterns-transform-position-2.png)

<figcaption>

[en]: <> (A floating action button \(FAB\) can move to a more visible location relative to other UI elements on a larger screen.)
译文

</figcaption></figure>
</div>
