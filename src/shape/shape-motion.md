<div class="article__intro">

[en]: <> (Shape and motion)
# 形状和动效

[en]: <> (Elements can change shape in response to content changes or user interaction.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Morphing shape)
[en]: <> (Displaying content)
* [译文](#usage)
* [译文](#morphing-shape)
* [译文](#displaying-content)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Morphing is the act of changing one shape into another. Shapes can morph in response to changes in state or content, or as a result of user interaction. For example, when rotating a mobile device from portrait to landscape, surfaces can respond by changing size, which can cause shapes to morph.)
译文

[en]: <> (Shapes can morph for various reasons, such as to remain consistent with a visual language as surface dimensions change, or to indicate when items are added to a selected set.)
译文

[en]: <> (Morphing can cause changes to:)
译文

[en]: <> (Element prominence)
[en]: <> (Element ergonomics)
[en]: <> (The meaning of a particular shape)
[en]: <> (How well a surface expresses a brand’s visual language)
[en]: <> (Relationships between elements)
* 译文
* 译文
* 译文
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/interactive-do-baseline-1.mp4" src="{assets_path}/shape/shape-motion/interactive-do-baseline-1.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A shape can morph in response to changes in the UI. This bottom app bar morphs upon the entrance of a floating action button.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/interactive-do-baseline-2a.mp4" src="{assets_path}/shape/shape-motion/interactive-do-baseline-2a.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A surface can reflect state changes by changing its dimensions. The corner of this surface maintains its curve while the edge grows.)
译文

</figcaption></figure></div></div>

[en]: <> (Morphing shape)
<h2 id="morphing-shape">译文</h2>

[en]: <> (Morphing shape)
### 译文

[en]: <> (As a surface changes size, its shape can maintain its original position or dimensions, it can stretch, or or it can shrink. A shape can also morph between two different shapes.)
译文

[en]: <> (Dimensions)
### 译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-1b.mp4" src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-1b.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Shape can maintain its original dimensions and position when morphing. This shape \(B\) retains its original dimensions and position relative to one side \(A\) of the surface, while the other side \(C\) stretches.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-2b.mp4" src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-2b.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A surface may change its dimensions to retain its shape. The height \(A\) of this portion of the surface changes as its width changes in order to maintain its angled slope.)
译文

</figcaption></figure>

[en]: <> (Stretching and shrinking)
### 译文

[en]: <> (A shape can stretch or shrink in response to changes in surface dimensions. Morphing a shape should preserve the proportions of distinctive shapes.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-3c.mp4" src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-3c.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (As this surface stretches, its shape remains recognizable because its distinctive rounded corners keep the same proportions even as portions of the surface change dimensions.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/typesmorphing-dont-baseline-1c.mp4" src="{assets_path}/shape/shape-motion/typesmorphing-dont-baseline-1c.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid distorting shapes when stretching or shrinking a surface. This surface’s proportions and rounded corners change as the surface stretches, creating a disconnect between its beginning and end states.)
译文

</figcaption></figure>

[en]: <> (Resizing shape)
### 译文

[en]: <> (Maintain the aspect ratio of distinctive shapes when resizing them to avoid shape distortion.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/resizing-do-baseline-1d.mp4" src="{assets_path}/shape/shape-motion/resizing-do-baseline-1d.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The corner radius maintains its original aspect ratio when it moves and resizes, supporting a consistent visual language.)
译文

</figcaption></figure>

[en]: <> (Transforming shape)
### 译文

[en]: <> (A shape can transform into a different shape.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/resizing-caution-baseline-1c.mp4" src="{assets_path}/shape/shape-motion/resizing-caution-baseline-1c.mp4" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (Transforming between similar shapes produces smoother transitions. Transformations between different shapes can display awkward states during a transition.)
译文

</figcaption></figure>

[en]: <> (Displaying content)
<h2 id="displaying-content">译文</h2>

[en]: <> (Content visibility)
### 译文

[en]: <> (All content on a surface should be visible while the surface morphs, without clipping content.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/contentvisibility-do-baseline-1a.mp4" src="{assets_path}/shape/shape-motion/contentvisibility-do-baseline-1a.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A shaped component should change its dimensions to accommodate content changes, while maintaining that component’s shape.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/shape/shape-motion/contentvisibility-dont-baseline-1.png)

<figcaption>

{dont}

[en]: <> (Don’t separate a surface from its content when morphing. The shape of this top app bar causes these action icons to appear separate from the surface.)
译文

</figcaption></figure></div></div>

[en]: <> (Default shape)
### 译文

[en]: <> (By default, Material surfaces are rectangular. They can transform from rectangular shapes into other shapes, and vice versa. For example, a round floating action button can become a rectangular menu, and then return to its original round shape.)
译文

[en]: <> (Rectangular shapes maximize the space available for scrollable content and blend in with other rectangular surfaces. As a result, content receives emphasis.)
译文

[en]: <> (When using the default rectangular shape, you can add a cue \(such as a collapse or expand icon\) to indicate how to transform the surface.)
译文

[en]: <> (Maximize space)
#### 译文

[en]: <> (Rectangular shapes maximize space for scrollable content.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/closeaffordance-do-baseline-1b.mp4" src="{assets_path}/shape/shape-motion/closeaffordance-do-baseline-1b.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A round floating action button transitions into a rectangular menu to maximize space for content.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/closeaffordance-dont-baseline-1b.mp4" src="{assets_path}/shape/shape-motion/closeaffordance-dont-baseline-1b.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Choose shapes for expanded surfaces that are optimized for the content they display. This circular menu does not effectively display its content because it maintains the circular shape of the FAB.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/returndefaultshape-baseline-1b.mp4" src="{assets_path}/shape/shape-motion/returndefaultshape-baseline-1b.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Space is maximized to display list content when this curved expanding sheet transforms into the default rectangular shape.)
译文

</figcaption></figure>

[en]: <> (Focus attention)
#### 译文

[en]: <> (Rectangular surfaces blend in with other rectangular surfaces, allowing content to receive emphasis.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/returndefaultshape-baseline-2b.mp4" src="{assets_path}/shape/shape-motion/returndefaultshape-baseline-2b.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When the backdrop’s back layer is active, the default shape of the front layer reduces its prominence and focuses user attention on the filter options behind it.)
译文

</figcaption></figure></div>
