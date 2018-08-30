<div class="article__intro">

[en]: <> (Tabs)
# 标签栏

[en]: <> (Tabs organize content across different screens, data sets, and other interactions.)
标签栏在不同屏幕、数据集和其它交互中组织内容。

<figure>

![]({assets_path}/components/tabs/tabs-usage-01.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Placement)
[en]: <> (Fixed tabs)
[en]: <> (Scrollable tabs)
[en]: <> (States)
[en]: <> (Spec)
* [用法](#usage)
* [结构剖析](#anatomy)
* [行为](#behavior)
* [位置](#placement)
* [固定标签栏](#fixed-tabs)
* [可滚动标签栏](#scrollable-tabs)
* [状态](#states)
* [规范](#spec)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Tabs organize and allow navigation between groups of content that are related and at the same level of hierarchy.)
标签栏能组织处于相同层次结构的内容组，并对相邻的组之间进行导航。

[en]: <> (Tabs in a set)
#### 标签栏中的标签

[en]: <> (Each tab should contain content that is distinct from other tabs in a set. For example, tabs can present different sections of news, different genres of music, or different themes of documents.)
每个标签中的内容类型都应该与其他标签不同。例如，标签可以呈现不同的新闻类型，不同的音乐种类或者不同的文档主题。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-usage-do1.png)

<figcaption>

正确示例

[en]: <> (Tab labels can include icons and text. Text labels should be short.)
标签的标题可以包含图标和文本。文本标题需要短小精炼。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-usage-dont1.png)

<figcaption>

错误示例

[en]: <> (Don’t use tabs to move through sequential content that needs to be read in a particular order.)
不要用标签来切换需要按顺序阅读的内容。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-usage-do2.png)

<figcaption>

正确示例

[en]: <> (Present tabs as a single row above their associated content.)
应该在相关内容的上方显示它的标签

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-usage-dont2.png)

<figcaption>

错误示例

[en]: <> (Avoid using tabs for comparing content across multiple tabs, such as different sizes of the same item.)
避免使用标签栏来组织进行对比的内容，例如同一个物品的不同大小。

</figcaption></figure></div></div>

[en]: <> (Combinations with other components)
#### 与其它控件组合使用

[en]: <> (Tabs can be paired with components like top app bars, or nested in components like cards and sheets.)
标签栏可以与其它组件（如应用栏）配合使用，或者嵌套在其它组件（如卡片或者纸片）中。

[en]: <> (Principles)
### 使用原则

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-illos-01.png)

<figcaption>

[en]: <> (Scalable)
#### 可扩展的

[en]: <> (As tabs can horizontally scroll, a UI can have as many tabs as needed.)
由于标签可以水平滚动，因此界面可以根据需求包含更多的标签。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-illos-02.png)

<figcaption>

[en]: <> (Informative)
#### 信息化的

[en]: <> (Tabs organize content into categories to help users easily find different types of information.)
标签栏将信息组织到不同分类中，用来帮助用户快速找到不同类型的信息。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-illos-03.png)

<figcaption>

[en]: <> (Peers)
#### 同等的

[en]: <> (Tabs are displayed next to each other as peers, in categories of equal importance.)
标签以相同的重要程度显示彼此相邻显示。

</figcaption></figure></div></div>

[en]: <> (Types)
### 类型

[en]: <> (Fixed tabs)
#### 固定标签栏

[en]: <> (Fixed tabs display all tabs on one screen, with each tab at a fixed width. The width of each tab is determined by dividing the number of tabs by the screen width. They don’t scroll to reveal more tabs; the visible tab set represents the only tabs available.)
固定的标签栏将所有标签显示在同一块屏幕，所有的标签拥有相同的固定宽度。每个标签的宽度由标签数和屏幕宽度决定。它们不会滚动来显示更多的标签；标签组中同时只有一个标签处于激活状态。

<figure>

![]({assets_path}/components/tabs/tabs-types-01.png)

</figure>

[en]: <> (Scrollable tabs)
### 可滚动标签栏

[en]: <> (Scrollable tabs are displayed without fixed widths. They are scrollable, such that some tabs will remain off-screen until scrolled.)
可滚动标签栏不会以固定的宽度来显示每一个标签。它们可以滚动，这样一些标签会在一直屏幕外，直到滚动到屏幕内。

<figure>

![]({assets_path}/components/tabs/tabs-types-02.png)

</figure>

[en]: <> (Anatomy)
<h2 id="anatomy">结构剖析</h2>

<figure>

![]({assets_path}/components/tabs/tabs-elements-01.png)

<figcaption>

[en]: <> (Container)
[en]: <> (Active icon \(Optional if there’s a label\))
[en]: <> (Active text label \(Optional if there’s an icon\))
[en]: <> (Active tab indicator)
[en]: <> (Inactive icon \(Optional if there’s a label\))
[en]: <> (Inactive text label \(Optional if there’s an icon\))
[en]: <> (Tab item)
1. 组件的容器
2. 已激活的图标（如果有标题的话图标是可选的）
3. 已激活的文本（如果有图标的话文本是可选的）
4. 已激活标签的指示器
5. 未激活的图标（如果有标题的话图标是可选的）
6. 未激活的文本（如果有图标的话文本是可选的）
7. 标签栏中的一项

</figcaption></figure>

[en]: <> (Text label)
### 文本标题

[en]: <> (Text labels should clearly and succinctly describe the content of the tab they represent. Tab content should contain a cohesive set of items that share a common characteristic.)
文本标题应该简洁明了地描述它们所在的标签的内容。标签内容应包含一组相似类型的项目。

[en]: <> (Tab labels appear in a single row. They can use a second line if needed, with truncated text. Alternatively, you can use scrollable tabs to allow room for longer titles.)
标签的标题应该只有一行。如果需要，可以截断文本并使用第二行。或者，你也可以使用可滚动标签栏来允许标签宽度不被限制以使用更长的标题。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-when-06.png)

<figcaption>

应避免的示例

[en]: <> (Although label text can wrap to a second line, scrollable tabs confine text to a single row.)
虽然文本标题可以换行到第二行，但是可滚动标签栏会把行数限制为一行。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-when-07.png)

<figcaption>

错误示例

[en]: <> (Don’t resize text labels to fit them onto a single line. If labels are too long, wrap text to a second line or use scrollable tabs.)
不要通过更改文本大小来使文本保持一行。如果标题太长，应该换行到第二行或者使用可滚动标题栏。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-when-08.png)

<figcaption>

错误示例

[en]: <> (Don’t truncate labels unless required, as truncated text can impede comprehension.)
在非必须的情况下不要讲标签截断，因为截断的标题会妨碍理解。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-when-09.png)

<figcaption>

错误示例

[en]: <> (Don’t mix tabs that contain only text, with tabs that contain only icons. Use either all text labels, all icon labels, or both, across all labels.)
不要将只包含文本的标题或只包含图标的标题混合使用。在所有标签中，只使用文本标题、只使用图标标题或者只使用文本和图标组成的标题。

</figcaption></figure></div></div>

[en]: <> (Icons)
### 图标

[en]: <> (Icons communicate the type of content a tab represents in a simple, recognizable way. However, they aren’t as effective as text labels at communicating complex content.)
图标用简单的、可识别方式来表达标签的内容。但是，在内容比较复杂时它们的表达能力不如文本标题那么强。

<figure>

![]({assets_path}/components/tabs/tabs-usage-06.png)

<figcaption>

[en]: <> (Tabs can use a combination of labels and icons.)
标签栏可以使用图标和文本组合起来的标题。

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-usage-iconsb.png)

<figcaption>

正确示例

[en]: <> (Tabs can use icons to communicate content.)
标签栏可以用图标来表达内容。

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-usage-010b.png)

<figcaption>

错误示例

[en]: <> (Don’t use tabs with both icons and text labels on only some tabs, but not others.)
不要只在一些标签上使用文本图标组合标题的同时其它标签又不这样使用。

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-04.png)

<figcaption>

{caution}

[en]: <> (Use caution when only representing tab content with icons, as an icon’s meaning may not be clear on every topic.)
尽量避免只使用图标作为标题，因为图标可能不会很清楚的表示每个标签的内容。

</figcaption></figure>

[en]: <> (Active tab indicators)
### 已激活标签指示器

[en]: <> (To differentiate an active tab from an inactive tab, apply an underline and color change to the active tab’s text and icon.)
为了和未激活标签区分开，在已激活标签的标题底下放一条用于强调的线。

<figure>

![]({assets_path}/components/tabs/tabs-selector-active.png)

<figcaption>

[en]: <> (An underline and color change differentiate an active tab from the inactive ones.)
当未激活标签变为激活标签时，在标题底下放一条用于强调的线并将线和标题变为彩色。

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Moving between tabs)
### 在相邻的标签之间移动

[en]: <> (Users can navigate between tabs by tapping a tab, or by performing a swipe gesture over content.)
用户可以通过点击标签或者滑动手势来在不同标签之间切换。

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Tap a tab)
#### 点击标签

[en]: <> (Navigate to a tab by tapping on it.)
标签被点击时将会切换到这个标签。

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-tap.mp4" src="{assets_path}/components/tabs/tabs-tap.mp4" type="video/mp4"></video></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Swipe within the content area)
#### 在内容区域中滑动

[en]: <> (To navigate between tabs, users can swipe left or right within the content area.)
用户可以通过在内容区域中向左或者向右滑动来切换标签。

[en]: <> (Gestures occur differently for each type of tab:)
对于不同类型的标签栏，手势都会有所不同：

[en]: <> (Fixed tabs don’t respond to the swipe gesture at all)
[en]: <> (Upon swipe, scrollable tabs scroll independent of the content area)
* 固定的标签栏不会响应在标签上的滑动。
* 可滚动的标签栏在滑动时会独立于内容区域而滚动。

[en]: <> (Use caution when placing other swipeable content \(such as interactive maps or list items\) in the content area.)
避免在标签内容区域放置其它可滚动内容（例如地图控件或者能够左右滑动的列表控件）。

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-swipe.mp4" src="{assets_path}/components/tabs/tabs-swipe.mp4" type="video/mp4"></video></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scroll-lists-caution.mp4" src="{assets_path}/components/tabs/tabs-scroll-lists-caution.mp4" type="video/mp4"></video><figcaption>

应避免的示例

[en]: <> (Use caution when placing swipeable content in UIs that have tabs, as users could easily swipe the wrong component.)
避免在带有标签栏的UI中方式可左右滑动的内容，因为用户很可能会不小心滑动错误的内容。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scroll-lists-dont.mp4" src="{assets_path}/components/tabs/tabs-scroll-lists-dont.mp4" type="video/mp4"></video><figcaption>

错误示例

[en]: <> (Avoid placing swipeable items in the content area of a UI that has tabs, as the user may mistakenly swipe the wrong component.)
不要在带有标签栏的界面中放置可滑动的列表项，因为用户会不小心滑动了错误的列表项。

</figcaption></figure></div></div>

[en]: <> (Scrolling)
### 在滚动时

[en]: <> (When a screen scrolls, tabs can either be fixed to the top of the screen, or scroll off the screen. If they scroll off the screen, they will return when the user scrolls upward.)
当屏幕内容滚动时，标签栏可以固定在屏幕顶端，也可以与内容同时滚动出屏幕。如果它们滚动出屏幕了，它们会在内容向上滚动时重新出现。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrolling-1.mp4" src="{assets_path}/components/tabs/tabs-scrolling-1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When tabs are attached to a top app bar, they can scroll off the screen with the bar and lock in place at the top of the screen.)
如果标签栏是附加在应用栏上的，它可以让应用栏滚动出屏幕并让标签栏固定在屏幕顶端。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrolling-2.mp4" src="{assets_path}/components/tabs/tabs-scrolling-2.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tabs can scroll offscreen on scroll, and reappear when the page is scrolled up.)
标签栏可以随着内容滚动出屏幕，然后在屏幕向上滚动时重新出现。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrolling-4.mp4" src="{assets_path}/components/tabs/tabs-scrolling-4.mp4" type="video/mp4"></video><figcaption>

错误示例

[en]: <> (Don’t scroll tabs behind a top app bar. When tabs are attached to a component, they should appear and move as a single unit.)
不要让标题栏滚动到应用栏后面去了。当标签栏是附加到一个组件上的时候，它们应该作为一个整体同时出现

</figcaption></figure>

[en]: <> (Placement)
<h2 id="placement">位置</h2>

[en]: <> (Tab layout)
### 标签栏布局

[en]: <> (Tabs are displayed in a single row, with each tab connected to the content it represents. As a set, all tabs are unified by a shared topic.)
标签栏显示在一行中，每个标签连接到它所代表的内容。作为一个集合，所有标签都由一个共享主题统一起来。

<figure>

![]({assets_path}/components/tabs/tabs-layout-layout-01.png)

<figcaption>

[en]: <> (Place tabs above content.)
标签栏放置在内容上方。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-layout-dont.png)

<figcaption>

应避免的示例

[en]: <> (Avoid nesting a tab within another tab.)
避免将一个标签栏嵌套进另一个标签栏。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-layout-dont-2.png)

<figcaption>

错误示例

[en]: <> (Don’t place tabs below one another.)
不要将标签摆放在另一个标签的下方。

</figcaption></figure></div></div>

[en]: <> (Tab placement)
### 标签栏的摆放

[en]: <> (Tabs can be joined with components like top app bars, embedded in a specific UI region, or nested into components like cards and sheets. Tabs control the UI region displayed below them.)
标签栏可以与另一个组件（例如顶部应用栏）连接、嵌入特定界面区域或嵌套进组件中（例如卡片或者纸张）。标签栏能控制显示在它们下方的界面区域中的内容。

<figure>

![]({assets_path}/components/tabs/tabs-placement-01.png)

<figcaption>

[en]: <> (Tabs below a top app bar)
标签栏在应用栏下方

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-dont-1.png)

<figcaption>

错误示例

[en]: <> (Don’t use tabs with short top app bars, or top app bars that transition to short top app bars on scroll.)
不要在带有短的顶部应用栏的界面或者在滚动时顶部应用栏会收起的界面中使用标签栏。

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-dont-2.png)

<figcaption>

错误示例

[en]: <> (Don’t attach tabs to bottom navigation as it can cause confusion about what action or tab controls which content.)
不要让标签栏附加在底部导航栏上，因为这样会混淆什么操作或标签控制哪些内容。

</figcaption></figure>

[en]: <> (Tabs can be embedded in a specific UI region in order to control the content displayed in that region.)
标签栏可以被嵌入特定的界面区域中，以便控制该区域的显示内容。

<figure>

![]({assets_path}/components/tabs/tabs-placement-ui.png)

<figcaption>

[en]: <> (Tabs embedded in a column, the content of which they can control when tapped. Scaled down to 62.5%)
嵌入在一列中的标签栏，在点击时可以控制这一列的内容。而其它区域的范围需要缩小至62.5%。

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-ui-dont.png)

<figcaption>

错误示例

[en]: <> (Don’t place tabs above content that they don’t control. If tabs only change a section of the UI, embed them within that section. Scaled down to 62.5%)
不要将标签栏放置在它不能控制的内容的上方。如果它只能控制界面中的一部分，就将它嵌入进这个部分，然后将其它区域的范围至62.5%。

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-02b.png)

<figcaption>

[en]: <> (Tabs nested in a card)
标签栏嵌套在一张卡片中

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-03b.png)

<figcaption>

[en]: <> (Tabs nested in a sheet)
标签栏嵌套在一张表格中

</figcaption></figure>

[en]: <> (Fixed tabs)
<h2 id="fixed-tabs">固定标签栏</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Fixed tabs display all tabs in a set simultaneously. They are best for switching between related content quickly, such as between transportation methods in a map. To navigate between fixed tabs, tap an individual tab, or swipe left or right in the content area.)
固定的标签栏会同时显示所有标签。它们最适合于在相关内容之间快速切换，例如在地图中的导航方法之间。要在标签中进行切换，可以点击单个选项卡，或者在内容区域中向左或向右滑动。

<figure>

![]({assets_path}/components/tabs/tabs-fixed-01.png)

<figcaption>

[en]: <> (Use fixed tabs when displaying a limited number of categories.)
固定的标签栏在有内容数量限制的时候使用。

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-usage-06.png)

<figcaption>

[en]: <> (A fixed tab bar using iconography and labels)
一个使用文本和图标组合的标题的标签栏

</figcaption></figure>

[en]: <> (Placement)
### 放置

[en]: <> (Fixed tabs have equal width, which can be calculated either as:)
固定标签栏的宽度相等，可以这样计算：

[en]: <> (The width of the screen divided by the number of tabs)
[en]: <> (The width of the widest tab label)
* 屏幕宽度除以标签数量
* 最宽的标签标题宽度

[en]: <> (When using fixed tabs, ensure they can all be seen on mobile, without truncating their text. Don’t use more than four fixed tabs at once.)
当使用固定标签栏时，应确保它们在移动设备上完全可见（如果有文本标题还要保证文本不被截断）。不要一次使用4个以上的标签。

<figure>

![]({assets_path}/components/tabs/tabs-fixed-03.png)

<figcaption>

[en]: <> (Don’t use more than four fixed tabs in a set.)
不要在标签栏中使用4个以上的标签。

[en]: <> (Reduced in size to 62.5%)
缩小至62.5%

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-010.png)

<figcaption>

[en]: <> (On wider layouts, fixed tabs increase in width, as their tab width is determined by the width of the screen.)
在较宽的布局上，固定标签栏的标签宽度会增加，因为标签宽度由屏幕宽度决定。

[en]: <> (Reduced in size to 62.5%)
缩小至62.5%

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-08.png)

<figcaption>

应避免的示例

[en]: <> (Avoid letting fixed tabs cause confusion with content. These tab widths align to closely to the columns in this layout, such that the relationship between tabs and content could be misinterpreted.)
避免让固定标签栏与内容混淆。这些标签宽度与此布局中的列紧密对齐，这样标签和内容之间的关系可能会被误解。

</figcaption></figure>

[en]: <> (Clustered fixed tabs)
### 紧密排列的固定标签栏

[en]: <> (Clustered fixed tabs aren’t divided equally across the screen. The tab bar is centered, right-aligned, or left-aligned.)
紧密排列的固定标签栏不会等分屏幕宽度，它们可以居中、向左或者向右对齐。

[en]: <> (Clustered fixed tabs should be used in wide horizontal layouts, such as landscape mode.)
应在宽水平布局中使用紧密排列的固定标签栏，例如横屏模式。

<figure>

![]({assets_path}/components/tabs/tabs-fixed-05.png)

<figcaption>

[en]: <> (On wider layouts, tabs may be centered on the tab bar.)
在更宽的屏幕中，标签可以集中显示在标签栏的中间

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-06.png)

<figcaption>

[en]: <> (Fixed tabs in a cluster can be aligned to the left or right.)
紧密排列的固定标签栏中的标签可以向左或向右对齐。

</figcaption></figure>

[en]: <> (Scrollable tabs)
<h2 id="scrollable-tabs">可滚动标签栏</h2>

[en]: <> (Usage)
### 用法

[en]: <> (When a set of tabs cannot fit on screen, use scrollable tabs. Scrollable tabs can use longer text labels and a larger number of tabs. They are best used for browsing on touch interfaces.)
如果标签集的宽度不能容纳在一个屏幕中，就使用可滚动标签栏。可滚动标签栏可以使用更长的文本标题和更多数量的标签。它们最适合用在触屏界面上浏览。

<figure>

![]({assets_path}/components/tabs/tabs-scrollable-02.png)

<figcaption>

[en]: <> (A set of scrollable tabs)
一个可滚动的标签集

</figcaption></figure>

[en]: <> (Placement)
### 放置

[en]: <> (Scrollable tabs display a subset of all tabs at once. The width of each tab is defined by the length of its text label.)
滚动标签栏同时显示所有标签的一部分。 每个标签的宽度由其文本标题的长度定义。

<figure>

![]({assets_path}/components/tabs/tabs-scrollable-01.png)

</figure><figure>

![]({assets_path}/components/tabs/tabs-scrollable-desktop-do.png)

<figcaption>

正确示例

[en]: <> (On mobile and desktop, offset the first tab on the left to signal that tabs are scrollable.)
在移动和桌面设备上，偏移左侧第一个标签来表示这是一个可滚动标签栏。

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-scrollable-03-dont.png)

<figcaption>

错误示例

[en]: <> (Avoid using inconsistent padding on each tab.)
避免在每一个标签中使用不同的填充宽度。

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-paginated-01.png)

<figcaption>

[en]: <> (On desktop, provide a visual indicator that more tabs are available off screen.)
在桌面端，当还有更多标签在屏幕外时提供一个可见指示器。

</figcaption></figure>

[en]: <> (Behavior)
### 行为

[en]: <> (To navigate between a set of scrollable tabs, users swipe the set left or right. A tab set can be looped so when a user reaches the last tab in a set, the first tab is shown again.)
想要在可滚动标签栏中的两个相邻标签中切换，用户可以在标签栏中向左或向右滑动。标签组可以可循环滚动，所以用户滑动到最后一个标签时会再次出现第一个标签。

[en]: <> (To select an individual tab, tap it.)
要选择一个标签，请点击它。

[en]: <> (Tab placement on activation)
#### 激活时的标签位置

[en]: <> (When tapped, a scrollable tab should reposition itself to become fully visible on screen.)
当被点击时，可滚动标签会改变自己的位置来让自己在屏幕中完全可见。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrollable-in-place.mp4" src="{assets_path}/components/tabs/tabs-scrollable-in-place.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Active tabs reposition themselves to appear fully on screen.)
已激活标签会改变自身的位置来完整地出现在屏幕中。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrollable-center.mp4" src="{assets_path}/components/tabs/tabs-scrollable-center.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Active tabs can move to the middle of the row when they become active.)
已激活标签会在激活时移动到这一行的中间。

</figcaption></figure>

[en]: <> (States)
<h2 id="states">状态</h2>

[en]: <> (By default, tabs inherit enabled states with one active state.)
默认情况下，标签栏会用一个活动状态来代替可用状态。

[en]: <> (The inactive state of a tab can inherit a hover, focus, and pressed state.)
未激活标签可以有悬停，获得焦点和被按下的状态。

<figure>

![]({assets_path}/components/tabs/tab-inactive-states.png)

<figcaption>

[en]: <> (The hover, focus, and pressed states of an enabled tab)
可用标签的悬停、获得焦点和被按下的状态

</figcaption></figure>

[en]: <> (The active state of a tab can inherit a hover, focus, and pressed state.)
已激活的标签可以有悬停、获得焦点和被按下的状态。

<figure>

![]({assets_path}/components/tabs/tab-active-states.png)

<figcaption>

[en]: <> (The hover, focus, and pressed states of an active tab)
已激活标签的悬停、获得焦点和被按下的状态

</figcaption></figure>

[en]: <> (Spec)
<h2 id="spec">规范</h2>

[en]: <> (Fixed tabs)
### 固定标签栏

<figure>

![]({assets_path}/components/tabs/tabs-spec-fixed.png)

</figure>

[en]: <> (Minimum width)
#### 最小宽度

<figure>

![]({assets_path}/components/tabs/tabs-spec-cell-minwidth.png)

</figure>

[en]: <> (Maximum width)
#### 最大宽度

<figure>

![]({assets_path}/components/tabs/tabs-spec-cell-maxwidth.png)

</figure>

[en]: <> (Scrollable tabs)
### 可滚动标题栏

<figure>

![]({assets_path}/components/tabs/tabs-spec-scrollable.png)

</figure></div>
