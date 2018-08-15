<div class="article__intro">

[en]: <> (Lists)
# 列表

[en]: <> (Lists are continuous, vertical indexes of text or images.)
列表是连续的、垂直的文本或图片的索引。

<figure>

![]({assets_path}/components/lists/lists-intro.png)

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

[en]: <> (Lists are a continuous group of text or images. They are composed of items containing primary and supplemental actions, which are represented by icons and text.)
列表是一组连续的文本或图片。它由包含主操作和辅助操作的项目组成，这些操作可以用图标和文本表示。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/lists/lists-illos-logical.png)

<figcaption>

[en]: <> (Logical)
#### 合乎逻辑

[en]: <> (Lists should be sorted in logical ways that make content easy to scan, such as alphabetical, numerical, chronological, or by user preference.)
列表应该按某一逻辑进行排序，使内容更易于被快速扫视，例如按字母顺序排序、按数值大小排序、按时间顺序排序、或根据用户设置排序。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/lists/lists-illos-content.png)

<figcaption>

[en]: <> (Actionable)
#### 可操作

[en]: <> (Lists present content in a way that makes it easy to identify a specific item in a collection and act on it.)
呈现列表时，要使用户能轻易地找到集合中的特定项目，并对其进行操作。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/lists/lists-illos-consistency.png)

<figcaption>

[en]: <> (Consistent)
#### 一致性

[en]: <> (Lists should present icons, text, and actions in a consistent format.)
同一列表中，项目的图标、文本和操作的呈现方式应该保持一致。

</figcaption></figure></div></div>

[en]: <> (Types)
### 类型

<figure>

![]({assets_path}/components/lists/usage-types.png)

<figcaption>

[en]: <> (*Single-line list*<br>Single-line list items contain a maximum of one line of text.)
[en]: <> (*Two-line list*<br>Two-line list items contain a maximum of two lines of text.)
[en]: <> (*Three-line list*<br>Three-line list items contains a maximum of three lines of text.)
1. *单行列表*<br>单行列表项最多包含一行文本。
2. *两行列表*<br>两行列表项最多包含两行文本。
3. *三行列表*<br>三行列表项最多包含三行文本。

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

[en]: <> (Lists are optimized for reading comprehension. A list consists of a single continuous column of subdivisions called rows that contain items of content.)
列表专门针对阅读进行了优化。一个列表由一系列连续的行组成，每一行都包含了列表项的内容。

<figure>

![]({assets_path}/components/lists/lists-elements.png)

<figcaption>

[en]: <> (List)
[en]: <> (Row)
[en]: <> (List item content)
1. 列表
2. 行
3. 列表项内容

</figcaption></figure>

[en]: <> (Content types)
### 内容类型

[en]: <> (Content types can take different forms, depending on the needs of a list.)
内容可以有不同的类型，具体取决于列表的需要。

<figure>

![]({assets_path}/components/lists/list-elements.png)

<figcaption>

[en]: <> (List items are comprised of three different content types:)
列表项由三个不同类型的内容组成：

[en]: <> (Supporting visuals)
[en]: <> (Primary text)
[en]: <> (Metadata)
1. 图像
2. 主文本
3. 元数据

</figcaption></figure>

[en]: <> (A list control can display information and actions for list items.)
列表控件可以显示列表项的信息和操作。

<figure>

![]({assets_path}/components/lists/list-elements-2.png)

<figcaption>

[en]: <> (Lists with controls contain three content types:)
含控件的列表包含三种类型的内容：

[en]: <> (Supporting visuals)
[en]: <> (Primary text)
[en]: <> (List control)
1. 图像
2. 主文本
3. 列表控件

</figcaption></figure>

[en]: <> (A list should be easily scannable, and any element of a list can be used to anchor and align list item content. Scannability is improved when elements \(such as supporting visual and primary text\) are placed in consistent locations across list items.)
列表应便于快速扫视，列表中的任何元素都可以用于固定和对齐列表项内容。当元素（如图像和主文本）放置在列表项的统一位置时，列表的可读性就得到了增强。

<figure>

![]({assets_path}/components/lists/list-scan-three-up.png)

<figcaption>

[en]: <> (Sample list)
[en]: <> (Content placement in a row)
[en]: <> (Supporting visuals are aligned for easy scanning)
[en]: <> (Primary text is aligned for easy scanning)
1. 列表示例
2. 内容放在一行中
3. 图像保持对齐，便于快速扫视
4. 主文本保持对齐，便于快速扫视

</figcaption></figure>

[en]: <> (Visuals, dividers, and spacing)
### 图像、分隔线、间距

[en]: <> (List structure can be organized using visuals, dividers, and spacing.)
可以使用图像、分隔线、间距来组织列表结构。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/lists/two-line-example-2.png)

<figcaption>

{do}

[en]: <> (Improve scannability by anchoring supporting visuals, such as thumbnails, along the row's edge.)
把图像（如缩略图）固定在行的边缘，提高可读性。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/lists/two-line-example-dont.png)

<figcaption>

{caution}

[en]: <> (Placing supporting visuals in the center of the row can make it difficult to see the relationship between primary content and supporting content.)
把图像放在行的中间，可能导致难以看到主要内容和辅助内容之间的关系。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/lists/threeline-sample-2.png)

<figcaption>

{do}

[en]: <> (Place a divider between rows with lots of content, such as those with three-line lists.)
在含有大量内容的行之间添加分隔线，例如三行列表。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/lists/threeline-sample-caution.png)

<figcaption>

{caution}

[en]: <> (Distinguish rows by maintaining sufficient space between list items.)
通过在列表项之间保留足够的间距来区分行。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/lists/content-action.png)

<figcaption>

[en]: <> (The primary action takes up the majority of space.)
主操作占据了大部分空间。

[en]: <> (Primary Action area)
[en]: <> (Secondary Action area)
1. 主操作区域
2. 辅助操作区域

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/lists/content-hierarchy.png)

<figcaption>

[en]: <> (Clear hierarchy is created by aligning the most distinguishing content on the left, with the least distinguishing on the right.)
把区分度最高的内容左对齐显示，区分度最小的内容右对齐显示，有助于创建清晰的层次结构。

[en]: <> (More distinguishing content)
[en]: <> (Less distinguishing content)
1. 区分度高的内容
2. 区分度低的内容

</figcaption></figure></div></div>

[en]: <> (Subheaders)
### 副标题

[en]: <> (Subheaders delineate sections of a list. They appear on list rows.)
副标题用于描述列表的各个部分。它们出现在列表行的上方。

<figure>

![]({assets_path}/components/lists/subheader-lists.png)

<figcaption>

[en]: <> (*Subheader*<br>A subheader should be left-aligned with an avatar or icon in a list.)
[en]: <> (*Subheader inset*<br>If a floating action button is aligned with list avatars or icons, the subheader should be aligned with the text content.)
1. *副标题*<br>副标题应与列表中的头像或图标左对齐
2. *内嵌型副标题*<br>如果存在浮动操作按钮与列表头像或图标对齐，则副标题应与文本内容对齐。

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Transitions)
### 过渡效果

[en]: <> (Tapping a list item expands it across the entire screen.)
点击列表项后，会展开成占据整个屏幕大小的界面。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/lists/01-list-parentchild.mp4" src="{assets_path}/components/lists/01-list-parentchild.mp4" type="video/mp4"></video><figcaption>

[en]: <> (To expand a list item, display a parent-child transition.)
通过 父-子 转换动画，来展开一个列表项。

</figcaption></figure>

[en]: <> (Gestures)
### 手势

[en]: <> (Swiping a list item \(either left or right\) can perform an action.)
滑动列表项（向左或向右）可以执行操作。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/lists/02-list-swipetodismiss.mp4" src="{assets_path}/components/lists/02-list-swipetodismiss.mp4" type="video/mp4"></video><figcaption>

[en]: <> (To archive a list item, swipe it.)
通过滑动，将列表项归档。

</figcaption></figure>

[en]: <> (Items can be dragged to reorder a list.)
可以拖动列表项来重新排序列表。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/lists/03-list-reorder.mp4" src="{assets_path}/components/lists/03-list-reorder.mp4" type="video/mp4"></video><figcaption>

[en]: <> (To reorder a list item, drag it.)
可以拖动列表项来重新排序列表。

</figcaption></figure>

[en]: <> (Expand)
### 展开

[en]: <> (A three-line list transition \(on mobile\) is displayed as a two-line list \(on desktop\).)
三行列表（移动端）可以转换为两行列表（桌面端）。

<figure>

![]({assets_path}/components/lists/behavior-transform-list-expand.png)

<figcaption>

[en]: <> (Scaled down to 50%)
缩小至 50%

[en]: <> (A three-line list on mobile)
[en]: <> (A two-line list on desktop)
1. 移动端的三行列表
2. 桌面端的两行列表

</figcaption></figure>

[en]: <> (Transform)
### 形态转变

[en]: <> (On a larger screen, a list may transform into an image list.)
在更大的屏幕上时，列表可以转变为图片列表。

<figure>

![]({assets_path}/components/lists/behavior-transform-list-image.png)

<figcaption>

[en]: <> (A one-line list on mobile)
[en]: <> (An image list on desktop)
1. 移动端的单行列表
2. 桌面端的图片列表

</figcaption></figure>

[en]: <> (Types)
<h2 id="types">类型</h2>

[en]: <> (Single-line list)
### 单行列表

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/lists/single-line-example-1.png)

<figcaption>

[en]: <> (A text list)
文本列表

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/lists/single-line-example-2.png)

<figcaption>

[en]: <> (A single-line list with icons and text)
含图标和文本的单行列表

</figcaption></figure></div></div><figure>

![]({assets_path}/components/lists/single-line-desktop.png)

<figcaption>

[en]: <> (Scaled down to 50% on desktop, a single-line list with icons and text)
桌面端含图标和文本的单行列表（此例子已缩小至 50%）

</figcaption></figure>

[en]: <> (Two-line list)
### 两行列表

[en]: <> (In a two-line list, each row contains two lines of text maximum.)
在两行列表中，每个列表项最多包含两行文本。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/lists/two-line-example-1.png)

<figcaption>

[en]: <> (A two-line list, with an icon and meta icon)
含图标和元图标的两行列表

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/lists/two-line-example-2.png)

<figcaption>

[en]: <> (A two-line list, with a thumbnail and meta text)
含缩略图和元文本的两行列表

</figcaption></figure></div></div><figure>

![]({assets_path}/components/lists/two-line-mix.png)

<figcaption>

[en]: <> (The amount of text can vary between different rows within the same list.)
在同一个列表中，不同行之间文本的数量可以不同。

</figcaption></figure><figure>

![]({assets_path}/components/lists/two-line-desktop.png)

<figcaption>

[en]: <> (Scaled down to 50% on desktop, a two-line list accompanied by an avatar and meta text)
含头像和元文本的两行列表（此例子已缩小至 50%）

</figcaption></figure>

[en]: <> (Three-line list)
### 三行列表

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/lists/threeline-sample-1.png)

<figcaption>

[en]: <> (A three-line text with an avatar)
含头像的三行列表

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/lists/threeline-sample-2.png)

<figcaption>

[en]: <> (A three-line text list, with a thumbnail and meta text)
含缩略图和元文本的三行列表

</figcaption></figure></div></div><figure>

![]({assets_path}/components/lists/three-line-mix.png)

<figcaption>

[en]: <> (The amount of text can vary between rows within the same list.)
在同一个列表中，不同行之间文本的数量可以不同。

</figcaption></figure><figure>

![]({assets_path}/components/lists/threeline-desktop.png)

<figcaption>

[en]: <> (On desktop, a three-line list accompanied by a large thumbnail and meta text)
在桌面端，含大缩略图和元文本的三行列表

</figcaption></figure>

[en]: <> (List controls)
### 列表控件

[en]: <> (List controls display information and actions for list items.)
列表控件可以显示列表项的信息和操作。

[en]: <> (Checkbox)
#### 复选框

[en]: <> (A checkbox can either be a primary or secondary action.)
复选框可以是主操作，也可以是辅助操作。

<figure>

![]({assets_path}/components/lists/lists-controls-checkbox.png)

<figcaption>

[en]: <> (Secondary action<br>This checkbox is the list item’s secondary action.)
[en]: <> (Primary action<br>This checkbox is both the list item’s primary action and state indicator.)
1. 辅助操作<br>此复选框是列表项的辅助操作。
2. 主操作<br>此复选框是列表项的主操作和状态指示器。

</figcaption></figure>

[en]: <> (Expand and collapse)
#### 展开和折叠

[en]: <> (Show and hide details of existing list items by expanding and collapsing list content vertically.)
通过垂直展开和折叠列表，来显示和隐藏现有列表项的详细信息。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/lists/lists-controls-expandable-close.png)

<figcaption>

[en]: <> (Tapping the list control expands the list.)
点击列表控件会展开列表。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/lists/lists-controls-expandable-open.png)

<figcaption>

[en]: <> (An expanded list)
展开后的列表

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Switch)
#### 开关切换

<figure>

![]({assets_path}/components/lists/lists-controls-switch.png)

<figcaption>

[en]: <> (Tapping the list control expands the list.)
点击列表控件会展开列表。

</figcaption></figure></div><div class="mdui-col">

[en]: <> (Reorder)
#### 排序

<figure>

![]({assets_path}/components/lists/lists-controls-reorder.png)

<figcaption>

[en]: <> (Usually appearing in edit mode, dragging lists items moves them to other locations within the list. This reorder icon is the list item’s secondary action.)
通常在编辑模式时才出现，拖动列表项会将其移动到列表中的其他位置。此排序图标是列表项的辅助操作。

</figcaption></figure></div></div>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (One line)
### 单行

<figure>

![]({assets_path}/components/lists/list-spec-singleline-individual.png)

</figure><figure>

![]({assets_path}/components/lists/list-spec-singleline-group.png)

</figure><figure>

![]({assets_path}/components/lists/list-spec-controls.png)

</figure>

[en]: <> (Double line)
### 两行

<figure>

![]({assets_path}/components/lists/list-spec-doubleline-individual.png)

</figure><figure>

![]({assets_path}/components/lists/list-spec-doubleline-group.png)

</figure>

[en]: <> (Three line)
### 三行

<figure>

![]({assets_path}/components/lists/list-spec-threeline-individual.png)

</figure><figure>

![]({assets_path}/components/lists/list-spec-threeline-group.png)

</figure>

[en]: <> (Collapsed & expanded)
### 折叠 & 展开

<figure>

![]({assets_path}/components/lists/list-spec-collapsed-expanded.png)

</figure></div>
