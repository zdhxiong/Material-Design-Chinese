<div class="article__intro">

[en]: <> (Image lists)
# 图片列表

[en]: <> (Image lists display a collection of images in an organized grid.)
使用图片列表，可以有组织地在网格中显示图片集。

<figure>

![]({assets_path}/components/image-lists/hero-gridlist.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Types)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [行为](#behavior)
* [类型](#types)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Image lists represent a collection of items in a repeated pattern. They help improve the visual comprehension of the content they hold.)
图片列表用于表示一系列具有相同样式的项目的集合。有助于提升用户对图片列表中的内容的视觉理解。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/image-lists/gridlist-illos-01.png)

<figcaption>

[en]: <> (Visual)
#### 直观的

[en]: <> (Image lists allow users to scan content based on images.)
图片列表使用户能根据图片快速扫视内容。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/image-lists/gridlist-illos-03.png)

<figcaption>

[en]: <> (Comparable)
#### 可对比的

[en]: <> (Image lists allow users to easily compare items within a collection.)
图片列表使用户能更轻易地对同一集合中的项目进行对比。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/image-lists/gridlist-illos-04.png)

<figcaption>

[en]: <> (Integrated)
#### 融合的

[en]: <> (Image lists are responsively integrated with the surrounding content and layout.)
图片列表是响应式的，可以很好的与周围的内容和布局集成。

</figcaption></figure></div></div>

[en]: <> (Types)
### 类型

<figure>

![]({assets_path}/components/image-lists/grid-diagram.png)

<figcaption>

[en]: <> (*Standard image lists* are best for items of equal importance. They have a uniform container size, ratio, and padding.)
[en]: <> (*Quilted image lists* emphasize certain items over others in a collection. They create hierarchy using varied container sizes and ratios.)
[en]: <> (*Woven image lists* facilitate the browsing of peer content. They display content in containers of varying ratios to create a rhythmic layout.)
[en]: <> (*Masonry image lists* facilitate the browsing of uncropped peer content. Container heights are sized based on the image size.)
1. *标准图片列表*最适合用于一系列同等重要的项目。它们具有相同的尺寸、长宽比和边距。
2. *凹凸型图片列表*可用于强调集合中的某些项目。它们使用不同的尺寸、长宽比来创建层次结构。
3. *梭织型图片列表*可用于浏览一系列同等地位的内容。它们使用不同的比例显示内容，以创造有规律的布局。
4. *砌砖型图片列表*可用于浏览未裁剪过的同等地位的内容。元素的高度根据图片大小而定。

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

[en]: <> (Image lists are comprised of containers that are set at a certain aspect ratio. Each item in an image list can display optional text and iconography below or above the image container.)
图片列表由特定宽高比的容器组成。图片列表中的每个项目都可以在图片的上方或下方显示文本和图标。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/image-lists/elements.png)

</figure></div><div class="mdui-col">

[en]: <> (*Image container*<br>The image container displays an image list item’s image or illustration.)
[en]: <> (*Text labels \(optional\)*<br>Text labels display one line of text related to an image list item.)
[en]: <> (*Actionable iconography \(optional\)*<br>Actionable iconography can represent related actions.)
[en]: <> (*Text protection \(optional\)*<br>Text protection is a semi-opaque scrim placed in front of imagery to keep text above it legible.)
[en]: <> (*Image list item*<br>Image list items represent individual items in an image list.)
1. *图片容器*<br>图片容器用于显示图片列表项的图片或插图。
2. *文本标签（可选）*<br>文本标签是一行与图片列表项相关的文本。
3. *可操作的图标（可选）*<br>可以用图标表示相关的操作。
4. *文本背景色（可选）*<br>一层半透明的遮罩层，放在图片前面，可以使文字更清晰易读。
5. *图片列表项*<br>图片列表项表示图片列表中的每个独立的项目。

</div></div>

[en]: <> (Padding)
### 间距

[en]: <> (Padding can vary between images in an image list. The following padding values are recommended: 1, 2, 4, 8, 16, 20, 24, 32 dp.)
图片列表中，图片直接的间距是可以变化的。建议使用这些间距：1，2，4，8，16，20，24，32dp。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/image-lists/custom-02-layout.mp4" src="{assets_path}/components/image-lists/custom-02-layout.mp4" type="video/mp4"></video></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Actions)
### 操作

[en]: <> (Image lists items may be tapped, dragged, filtered, or sorted.)
图片列表项可以点击、拖动、过滤、排序。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/image-lists/imagelist-behavior-tap.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-tap.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tapping an image list item displays more detail about that item.)
点击图片列表项，可以显示关于那个项目的更多详细信息。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/image-lists/imagelist-behavior-filtered.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-filtered.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Image list content can be filtered or sorted by date, file size, alphabetical order, or other parameters.)
图片列表的内容可以按日期、文件大小、字母顺序或其他参数进行过滤和排序。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/image-lists/imagelist-behavior-dragged.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-dragged.mp4" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (You can drag an image list item to reorder it, but this interaction should be disabled if images are sorted or filtered.)
可以拖动图片列表项，以对其重新排序，但如果图片以及经过了过滤或排序，则应该禁用该交互功能。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/image-lists/imagelist-behavior-swipe-dont.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-swipe-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t allow swipe gestures on individual image list items. Image lists should be perceived as a group.)
不允许在单个图片列表项上使用滑动手势。图片列表应该被视为一个整体。

</figcaption></figure></div></div>

[en]: <> (Layout grid)
### 布局网格

[en]: <> (Defined layout)
#### 划定布局

[en]: <> (Image list column structures don’t need to align to the layout grid. Only the perimeter of the image list itself needs to align to the layout grid.)
图片列表的列结构不需要与布局网格对齐。只有图片列表的两边需要与布局网格对齐。

<figure>

![]({assets_path}/components/image-lists/composition-01d.png)

<figcaption>

[en]: <> (An image list spanning eight columns of the layout grid, with 16dp padding)
这个图片列表占据了布局网格的八列，列表项之间有 16dp 的间距。

</figcaption></figure>

[en]: <> (Alignment with other components)
#### 与其他组件对齐

[en]: <> (Image lists can be placed adjacent to other components in the layout grid.)
图片列表可以放在布局网格中的其他组件旁边。

<figure>

![]({assets_path}/components/image-lists/composition-02.png)

<figcaption>

[en]: <> (An image list spanning three columns of the layout grid, with 8dp padding)
这个图片列表占据了布局网格的三列，列表项之间有 8dp 的间距。

</figcaption></figure>

[en]: <> (Responsive)
#### 响应式

[en]: <> (Image lists inherit the responsive behavior of the layout grid.)
图片列表继承了布局网格的响应式行为。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/image-lists/composition-03.mp4" src="{assets_path}/components/image-lists/composition-03.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Image lists respond to the responsive layout grid.)
图片列表具有布局网格的响应式行为。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/image-lists/composition-04.mp4" src="{assets_path}/components/image-lists/composition-04.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Image lists are fixed to the layout grid.)
图片列表根据布局网格进行显示。

</figcaption></figure>

[en]: <> (Scrolling)
### 滚动

[en]: <> (Image lists can scroll vertically or horizontally. All items in an image list must scroll together as a collection. Image cropping can be used to indicate scroll direction.)
图片列表可以垂直滚动、也可以水平滚动。图片列表中的所有项目必须作为一个整体一起滚动。可以通过截断图片来指示滚动方向。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/image-lists/imagelist-behavior-scrolling-vert.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-scrolling-vert.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Image list items scroll together.)
所有图片列表项作为整体一起滚动。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/image-lists/imagelist-behavior-scrolling-horz.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-scrolling-horz.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Image lists can scroll horizontally.)
图片列表可以水平滚动。

</figcaption></figure></div></div>

[en]: <> (Types)
<h2 id="types">类型</h2>

[en]: <> (Standard image list)
### 标准图片列表

[en]: <> (Standard image lists are best for items of equal importance. They have a uniform container size, ratio, and padding.)
标准图片列表最适合用于一系列同等重要的项目。它们具有相同的尺寸、长宽比和边距。

<figure>

![]({assets_path}/components/image-lists/hero-gridlist-standard.png)

</figure><figure>

![]({assets_path}/components/image-lists/standard-usage-01.png)

<figcaption>

[en]: <> (Standard image lists can be displayed with or without text labels.)
标准图片列表可以包含文本标签、也可以不包含文本标签。

[en]: <> (image list with images only)
[en]: <> (image list with images and text labels)
1. 仅包含图片的图片列表
2. 包含图片和文本标签的图片列表

</figcaption></figure><figure>

![]({assets_path}/components/image-lists/standard-usage-02.png)

<figcaption>

[en]: <> (In compact layouts, labels can appear above the image container using an image treatment that provides text protection to ensure legibility.)
在紧凑的布局中，文本标签可以添加背景色后放在图片的前面，文本上的背景色可以确保文本的易读性。

</figcaption></figure>

[en]: <> (Quilted image list)
### 凹凸型图片列表

[en]: <> (Quilted image lists emphasize certain items over others in a collection. They use varied container sizes and ratios to create hierarchy across images.)
凹凸型图片列表可用于强调集合中的某些项目。它们使用不同的尺寸、长宽比来创建层次结构。

<figure>

![]({assets_path}/components/image-lists/hero-gridlist-quilted.png)

</figure><figure>

![]({assets_path}/components/image-lists/quilt-usage-02-dont.png)

<figcaption>

{dont}

[en]: <> (Quilted image lists shouldn’t display text below the image container, as it disrupts the layout.)
凹凸型图片列表不应该在图片下方显示文本，应为它会破坏布局。

</figcaption></figure>

[en]: <> (Woven image list)
### 梭织型图片列表

[en]: <> (Woven image lists use alternating container ratios to create a rhythmic layout. A woven image list is best for browsing peer content.)
梭织型图片列表可用于浏览一系列同等地位的内容。它们使用不同的比例显示内容，以创造有规律的布局。

<figure>

![]({assets_path}/components/image-lists/hero-gridlist-weaved.png)

</figure>

[en]: <> (Masonry image list)
### 砌砖型图片列表

[en]: <> (Masonry image lists use dynamically sized container heights that reflect the aspect ratio of each image. This image list is best used for browsing uncropped peer content.)
砌砖型图片列表可用于浏览未裁剪过的同等地位的内容。元素的高度根据图片大小而定。

<figure>

![]({assets_path}/components/image-lists/hero-gridlist-masonry.png)

</figure>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (Standard)
#### 标准型

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-standard.png)

</figure>

[en]: <> (Quilted)
#### 凹凸型

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-quilted.png)

</figure>

[en]: <> (Masonry—mobile)
#### 砌砖型 - 移动端

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-mobile-masonry.png)

</figure>

[en]: <> (Masonry—desktop)
#### 砌砖型 - 桌面端

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-desktop-masonry.png)

</figure>

[en]: <> (Masonry—tablet)
#### 砌砖型 - 平板端

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-tablet-masonry.png)

</figure>

[en]: <> (Woven)
#### 梭织型

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-woven.png)

</figure></div>
