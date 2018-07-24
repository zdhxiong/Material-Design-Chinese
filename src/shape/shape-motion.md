<div class="article__intro">

[en]: <> (Shape and motion)
# 形状和动效

[en]: <> (Elements can change shape in response to content changes or user interaction.)
元素可以通过变更形状回应内容变更或用户交互。

<nav>

[en]: <> (Usage)
[en]: <> (Morphing shape)
[en]: <> (Displaying content)
* [用法](#usage)
* [形状形变](#morphing-shape)
* [显示内容](#displaying-content)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Morphing is the act of changing one shape into another. Shapes can morph in response to changes in state or content, or as a result of user interaction. For example, when rotating a mobile device from portrait to landscape, surfaces can respond by changing size, which can cause shapes to morph.)
形变是变一种形状为另一种的行为。形状能够以形变回应状态或内容变更，或作为用户交互结果。举例，将移动设备从纵向旋转至横向时，面可以以尺寸变更作为回应，这就可能导致形状形变。

[en]: <> (Shapes can morph for various reasons, such as to remain consistent with a visual language as surface dimensions change, or to indicate when items are added to a selected set.)
形状可能因各种原因产生形变，例如与视觉语言保持一致时随面尺寸变化，或在项目被加进选定集合时进行指明。

[en]: <> (Morphing can cause changes to:)
形变可以同时改变：

[en]: <> (Element prominence)
[en]: <> (Element ergonomics)
[en]: <> (The meaning of a particular shape)
[en]: <> (How well a surface expresses a brand’s visual language)
[en]: <> (Relationships between elements)
* 元素的明显、重要程度
* 元素的人体工程程度
* 特定形状的含义
* 面表现品牌视觉语言时的表现
* 元素间关系

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/interactive-do-baseline-1.mp4" src="{assets_path}/shape/shape-motion/interactive-do-baseline-1.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A shape can morph in response to changes in the UI. This bottom app bar morphs upon the entrance of a floating action button.)
形状可以响应 UI 的变化而形变。此底部应用栏在一浮动动作按钮的入口处变形。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/interactive-do-baseline-2a.mp4" src="{assets_path}/shape/shape-motion/interactive-do-baseline-2a.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A surface can reflect state changes by changing its dimensions. The corner of this surface maintains its curve while the edge grows.)
面能够通过改变自身尺寸来反应状态变化。这个面的边角在边变长时保留了其曲线。

</figcaption></figure></div></div>

[en]: <> (Morphing shape)
<h2 id="morphing-shape">形状形变</h2>

[en]: <> (Morphing shape)
### 形状形变

[en]: <> (As a surface changes size, its shape can maintain its original position or dimensions, it can stretch, or or it can shrink. A shape can also morph between two different shapes.)
当面变换型号时，其形状可以保留它原来的位置或尺寸，它或可延展，或可收缩。形状亦可往返于两不同形状中来形变。

[en]: <> (Dimensions)
### 尺寸

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-1b.mp4" src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-1b.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Shape can maintain its original dimensions and position when morphing. This shape \(B\) retains its original dimensions and position relative to one side \(A\) of the surface, while the other side \(C\) stretches.)
形状在形变时可以保留它原来的位置和尺寸。这处形状（B）保留了它的原来的尺寸和于一侧（A）的相对位置，而此时另一侧（C）伸长了。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-2b.mp4" src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-2b.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A surface may change its dimensions to retain its shape. The height \(A\) of this portion of the surface changes as its width changes in order to maintain its angled slope.)
面可能会改变其尺寸以保留原形状。该面上此部分的高（A）如其宽一同发生改变以保留其倾斜斜率。

</figcaption></figure>

[en]: <> (Stretching and shrinking)
### 延伸和收缩

[en]: <> (A shape can stretch or shrink in response to changes in surface dimensions. Morphing a shape should preserve the proportions of distinctive shapes.)
形状能够以延伸或收缩来回应面的尺寸变更。形变形状应要保留形状特殊处的比例。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-3c.mp4" src="{assets_path}/shape/shape-motion/typesmorphing-do-baseline-3c.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (As this surface stretches, its shape remains recognizable because its distinctive rounded corners keep the same proportions even as portions of the surface change dimensions.)
当这个面伸长时，其形状因其独特圆角保留了原比所以即使在面的某些部分改变尺寸时也仍可被辨识。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/typesmorphing-dont-baseline-1c.mp4" src="{assets_path}/shape/shape-motion/typesmorphing-dont-baseline-1c.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid distorting shapes when stretching or shrinking a surface. This surface’s proportions and rounded corners change as the surface stretches, creating a disconnect between its beginning and end states.)
避免在延伸或收缩一个面时扭曲形状。该面的比例和圆角都随面延展而改变，断开了其开始和结束状态间的联系。

</figcaption></figure>

[en]: <> (Resizing shape)
### 缩放形状

[en]: <> (Maintain the aspect ratio of distinctive shapes when resizing them to avoid shape distortion.)
调整大小时保持形状独特部分的纵横比以避免形状扭曲。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/resizing-do-baseline-1d.mp4" src="{assets_path}/shape/shape-motion/resizing-do-baseline-1d.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The corner radius maintains its original aspect ratio when it moves and resizes, supporting a consistent visual language.)
圆角半径在位移和变化尺寸时保持原纵横比，维持着统一的视觉语言。

</figcaption></figure>

[en]: <> (Transforming shape)
### 变换性状

[en]: <> (A shape can transform into a different shape.)
形状能变换转化为另一不同形状。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/resizing-caution-baseline-1c.mp4" src="{assets_path}/shape/shape-motion/resizing-caution-baseline-1c.mp4" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (Transforming between similar shapes produces smoother transitions. Transformations between different shapes can display awkward states during a transition.)
变换于近似形状之间可产生更为平滑的过渡。相异形状之间的变换在过渡时状态可能会显尴尬。

</figcaption></figure>

[en]: <> (Displaying content)
<h2 id="displaying-content">显示内容</h2>

[en]: <> (Content visibility)
### 内容可见性

[en]: <> (All content on a surface should be visible while the surface morphs, without clipping content.)
面上的所有内容在面形变时均应可见，不应裁切。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/contentvisibility-do-baseline-1a.mp4" src="{assets_path}/shape/shape-motion/contentvisibility-do-baseline-1a.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A shaped component should change its dimensions to accommodate content changes, while maintaining that component’s shape.)
成形的组件应该改变其尺寸以含纳内容更改，同时保留组件的形状。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/shape/shape-motion/contentvisibility-dont-baseline-1.png)

<figcaption>

{dont}

[en]: <> (Don’t separate a surface from its content when morphing. The shape of this top app bar causes these action icons to appear separate from the surface.)
形变时不得将面与其内容分离。这个顶部应用栏的形状使这些操作图标显得分离于该面。

</figcaption></figure></div></div>

[en]: <> (Default shape)
### 原始形状

[en]: <> (By default, Material surfaces are rectangular. They can transform from rectangular shapes into other shapes, and vice versa. For example, a round floating action button can become a rectangular menu, and then return to its original round shape.)
默认情况下，Material 面为矩形。它们能变换矩形为其它形状，反之亦然。举例，一个圆形浮动动作按钮能变成一个矩形目录，后再变回它原来的圆形。

[en]: <> (Rectangular shapes maximize the space available for scrollable content and blend in with other rectangular surfaces. As a result, content receives emphasis.)
矩形最大化可滚动内容的可用空间并与其它矩面相调和。故而，内容得到特别的重视。

[en]: <> (When using the default rectangular shape, you can add a cue \(such as a collapse or expand icon\) to indicate how to transform the surface.)
使用默认的矩形形状时，你可以加入点点暗示（如折叠或展开图标）以表示如何能变换此面。

[en]: <> (Maximize space)
#### 最大化空间

[en]: <> (Rectangular shapes maximize space for scrollable content.)
矩形最大化可滚动内容的空间。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/closeaffordance-do-baseline-1b.mp4" src="{assets_path}/shape/shape-motion/closeaffordance-do-baseline-1b.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A round floating action button transitions into a rectangular menu to maximize space for content.)
圆形浮动动作按钮转化至矩形选单以最大化内容空间。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/closeaffordance-dont-baseline-1b.mp4" src="{assets_path}/shape/shape-motion/closeaffordance-dont-baseline-1b.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Choose shapes for expanded surfaces that are optimized for the content they display. This circular menu does not effectively display its content because it maintains the circular shape of the FAB.)
选择适于其内容显示的形状来展开面。此圆形选单因为保留浮动动作按钮的圆形致没有有效显示其内容。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/returndefaultshape-baseline-1b.mp4" src="{assets_path}/shape/shape-motion/returndefaultshape-baseline-1b.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Space is maximized to display list content when this curved expanding sheet transforms into the default rectangular shape.)
空间在这个弧形表格展开变换至默认的矩形形状时最大化地展示列表内容。

</figcaption></figure>

[en]: <> (Focus attention)
#### 集中关注

[en]: <> (Rectangular surfaces blend in with other rectangular surfaces, allowing content to receive emphasis.)
矩面与其余矩面相调剂，集关注于指定内容。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-motion/returndefaultshape-baseline-2b.mp4" src="{assets_path}/shape/shape-motion/returndefaultshape-baseline-2b.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When the backdrop’s back layer is active, the default shape of the front layer reduces its prominence and focuses user attention on the filter options behind it.)
当背景后端被触发激活，前端原形状降低其突出性并把用户的注意带到它后面的过滤选项。

</figcaption></figure></div>
