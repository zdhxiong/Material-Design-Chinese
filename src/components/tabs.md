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
* [固定的标签栏](#fixed-tabs)
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
标签的标题可以包含图标和文字。文字标题需要短小精炼。

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
由于标签可以水平滚动，因此UI可以根据需求包含更多的标签。

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
#### 固定的标签栏

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
3. 已激活的文字（如果有图标的话文字是可选的）
4. 已激活标签的指示器
5. 未激活的图标（如果有标题的话图标是可选的）
6. 未激活的文字（如果有图标的话文字是可选的）
7. 标签栏中的一项

</figcaption></figure>

[en]: <> (Text label)
### 文字标题

[en]: <> (Text labels should clearly and succinctly describe the content of the tab they represent. Tab content should contain a cohesive set of items that share a common characteristic.)
文字标题应该简洁明了地描述它们所在的标签的内容。标签内容应包含一组相似类型的项目。

[en]: <> (Tab labels appear in a single row. They can use a second line if needed, with truncated text. Alternatively, you can use scrollable tabs to allow room for longer titles.)
标签的标题应该只有一行。如果需要，可以截断文本并使用第二行。或者，你也可以使用可滚动标签栏来允许标签宽度不被限制以使用更长的标题。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-when-06.png)

<figcaption>

应避免的示例

[en]: <> (Although label text can wrap to a second line, scrollable tabs confine text to a single row.)
虽然文字标题可以换行到第二行，但是可滚动标签栏会把行数限制为一行。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-when-07.png)

<figcaption>

错误示例

[en]: <> (Don’t resize text labels to fit them onto a single line. If labels are too long, wrap text to a second line or use scrollable tabs.)
不要通过更改文字大小来使文本保持一行。如果标题太长，应该换行到第二行或者使用可滚动标题栏。

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
不要将只包含文字的标题或只包含图标的标题混合使用。在所有标签中，只使用文字标题、只使用图标标题或者只使用文字和图标组成的标题。

</figcaption></figure></div></div>

[en]: <> (Icons)
### 图标

[en]: <> (Icons communicate the type of content a tab represents in a simple, recognizable way. However, they aren’t as effective as text labels at communicating complex content.)
图标用简单的、可识别方式来表达标签的内容。但是，在内容比较复杂时它们的表达能力不如文字标题那么强。

<figure>

![]({assets_path}/components/tabs/tabs-usage-06.png)

<figcaption>

[en]: <> (Tabs can use a combination of labels and icons.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-usage-iconsb.png)

<figcaption>

{do}

[en]: <> (Tabs can use icons to communicate content.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-usage-010b.png)

<figcaption>

{dont}

[en]: <> (Don’t use tabs with both icons and text labels on only some tabs, but not others.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-04.png)

<figcaption>

{caution}

[en]: <> (Use caution when only representing tab content with icons, as an icon’s meaning may not be clear on every topic.)
译文

</figcaption></figure>

[en]: <> (Active tab indicators)
### 译文

[en]: <> (To differentiate an active tab from an inactive tab, apply an underline and color change to the active tab’s text and icon.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-selector-active.png)

<figcaption>

[en]: <> (An underline and color change differentiate an active tab from the inactive ones.)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Moving between tabs)
### 译文

[en]: <> (Users can navigate between tabs by tapping a tab, or by performing a swipe gesture over content.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Tap a tab)
#### 译文

[en]: <> (Navigate to a tab by tapping on it.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-tap.mp4" src="{assets_path}/components/tabs/tabs-tap.mp4" type="video/mp4"></video></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Swipe within the content area)
#### 译文

[en]: <> (To navigate between tabs, users can swipe left or right within the content area.)
译文

[en]: <> (Gestures occur differently for each type of tab:)
译文

[en]: <> (Fixed tabs don’t respond to the swipe gesture at all)
[en]: <> (Upon swipe, scrollable tabs scroll independent of the content area)
* 译文
* 译文

[en]: <> (Use caution when placing other swipeable content \(such as interactive maps or list items\) in the content area.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-swipe.mp4" src="{assets_path}/components/tabs/tabs-swipe.mp4" type="video/mp4"></video></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scroll-lists-caution.mp4" src="{assets_path}/components/tabs/tabs-scroll-lists-caution.mp4" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (Use caution when placing swipeable content in UIs that have tabs, as users could easily swipe the wrong component.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scroll-lists-dont.mp4" src="{assets_path}/components/tabs/tabs-scroll-lists-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid placing swipeable items in the content area of a UI that has tabs, as the user may mistakenly swipe the wrong component.)
译文

</figcaption></figure></div></div>

[en]: <> (Scrolling)
### 译文

[en]: <> (When a screen scrolls, tabs can either be fixed to the top of the screen, or scroll off the screen. If they scroll off the screen, they will return when the user scrolls upward.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrolling-1.mp4" src="{assets_path}/components/tabs/tabs-scrolling-1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When tabs are attached to a top app bar, they can scroll off the screen with the bar and lock in place at the top of the screen.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrolling-2.mp4" src="{assets_path}/components/tabs/tabs-scrolling-2.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tabs can scroll offscreen on scroll, and reappear when the page is scrolled up.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrolling-4.mp4" src="{assets_path}/components/tabs/tabs-scrolling-4.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t scroll tabs behind a top app bar. When tabs are attached to a component, they should appear and move as a single unit.)
译文

</figcaption></figure>

[en]: <> (Placement)
<h2 id="placement">位置</h2>

[en]: <> (Tab layout)
### 译文

[en]: <> (Tabs are displayed in a single row, with each tab connected to the content it represents. As a set, all tabs are unified by a shared topic.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-layout-layout-01.png)

<figcaption>

[en]: <> (Place tabs above content.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-layout-dont.png)

<figcaption>

{caution}

[en]: <> (Avoid nesting a tab within another tab.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-layout-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t place tabs below one another.)
译文

</figcaption></figure></div></div>

[en]: <> (Tab placement)
### 译文

[en]: <> (Tabs can be joined with components like top app bars, embedded in a specific UI region, or nested into components like cards and sheets. Tabs control the UI region displayed below them.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-placement-01.png)

<figcaption>

[en]: <> (Tabs below a top app bar)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use tabs with short top app bars, or top app bars that transition to short top app bars on scroll.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t attach tabs to bottom navigation as it can cause confusion about what action or tab controls which content.)
译文

</figcaption></figure>

[en]: <> (Tabs can be embedded in a specific UI region in order to control the content displayed in that region.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-placement-ui.png)

<figcaption>

[en]: <> (Tabs embedded in a column, the content of which they can control when tapped. Scaled down to 62.5%)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-ui-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t place tabs above content that they don’t control. If tabs only change a section of the UI, embed them within that section. Scaled down to 62.5%)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-02b.png)

<figcaption>

[en]: <> (Tabs nested in a card)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-03b.png)

<figcaption>

[en]: <> (Tabs nested in a sheet)
译文

</figcaption></figure>

[en]: <> (Fixed tabs)
<h2 id="fixed-tabs">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Fixed tabs display all tabs in a set simultaneously. They are best for switching between related content quickly, such as between transportation methods in a map. To navigate between fixed tabs, tap an individual tab, or swipe left or right in the content area.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-fixed-01.png)

<figcaption>

[en]: <> (Use fixed tabs when displaying a limited number of categories.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-usage-06.png)

<figcaption>

[en]: <> (A fixed tab bar using iconography and labels)
译文

</figcaption></figure>

[en]: <> (Placement)
### 位置

[en]: <> (Fixed tabs have equal width, which can be calculated either as:)
译文

[en]: <> (The width of the screen divided by the number of tabs)
[en]: <> (The width of the widest tab label)
* 译文
* 译文

[en]: <> (When using fixed tabs, ensure they can all be seen on mobile, without truncating their text. Don’t use more than four fixed tabs at once.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-fixed-03.png)

<figcaption>

[en]: <> (Don’t use more than four fixed tabs in a set.)
译文

[en]: <> (Reduced in size to 62.5%)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-010.png)

<figcaption>

[en]: <> (On wider layouts, fixed tabs increase in width, as their tab width is determined by the width of the screen.)
译文

[en]: <> (Reduced in size to 62.5%)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-08.png)

<figcaption>

{caution}

[en]: <> (Avoid letting fixed tabs cause confusion with content. These tab widths align to closely to the columns in this layout, such that the relationship between tabs and content could be misinterpreted.)
译文

</figcaption></figure>

[en]: <> (Clustered fixed tabs)
### 译文

[en]: <> (Clustered fixed tabs aren’t divided equally across the screen. The tab bar is centered, right-aligned, or left-aligned.)
译文

[en]: <> (Clustered fixed tabs should be used in wide horizontal layouts, such as landscape mode.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-fixed-05.png)

<figcaption>

[en]: <> (On wider layouts, tabs may be centered on the tab bar.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-06.png)

<figcaption>

[en]: <> (Fixed tabs in a cluster can be aligned to the left or right.)
译文

</figcaption></figure>

[en]: <> (Scrollable tabs)
<h2 id="scrollable-tabs">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (When a set of tabs cannot fit on screen, use scrollable tabs. Scrollable tabs can use longer text labels and a larger number of tabs. They are best used for browsing on touch interfaces.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-scrollable-02.png)

<figcaption>

[en]: <> (A set of scrollable tabs)
译文

</figcaption></figure>

[en]: <> (Placement)
### 位置

[en]: <> (Scrollable tabs display a subset of all tabs at once. The width of each tab is defined by the length of its text label.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-scrollable-01.png)

</figure><figure>

![]({assets_path}/components/tabs/tabs-scrollable-desktop-do.png)

<figcaption>

{do}

[en]: <> (On mobile and desktop, offset the first tab on the left to signal that tabs are scrollable.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-scrollable-03-dont.png)

<figcaption>

{dont}

[en]: <> (Avoid using inconsistent padding on each tab.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-paginated-01.png)

<figcaption>

[en]: <> (On desktop, provide a visual indicator that more tabs are available off screen.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (To navigate between a set of scrollable tabs, users swipe the set left or right. A tab set can be looped so when a user reaches the last tab in a set, the first tab is shown again.)
译文

[en]: <> (To select an individual tab, tap it.)
译文

[en]: <> (Tab placement on activation)
#### 译文

[en]: <> (When tapped, a scrollable tab should reposition itself to become fully visible on screen.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrollable-in-place.mp4" src="{assets_path}/components/tabs/tabs-scrollable-in-place.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Active tabs reposition themselves to appear fully on screen.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrollable-center.mp4" src="{assets_path}/components/tabs/tabs-scrollable-center.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Active tabs can move to the middle of the row when they become active.)
译文

</figcaption></figure>

[en]: <> (States)
<h2 id="states">译文</h2>

[en]: <> (By default, tabs inherit enabled states with one active state.)
译文

[en]: <> (The inactive state of a tab can inherit a hover, focus, and pressed state.)
译文

<figure>

![]({assets_path}/components/tabs/tab-inactive-states.png)

<figcaption>

[en]: <> (The hover, focus, and pressed states of an enabled tab)
译文

</figcaption></figure>

[en]: <> (The active state of a tab can inherit a hover, focus, and pressed state.)
译文

<figure>

![]({assets_path}/components/tabs/tab-active-states.png)

<figcaption>

[en]: <> (The hover, focus, and pressed states of an active tab)
译文

</figcaption></figure>

[en]: <> (Spec)
<h2 id="spec">译文</h2>

[en]: <> (Fixed tabs)
### 译文

<figure>

![]({assets_path}/components/tabs/tabs-spec-fixed.png)

</figure>

[en]: <> (Minimum width)
#### 译文

<figure>

![]({assets_path}/components/tabs/tabs-spec-cell-minwidth.png)

</figure>

[en]: <> (Maximum width)
#### 译文

<figure>

![]({assets_path}/components/tabs/tabs-spec-cell-maxwidth.png)

</figure>

[en]: <> (Scrollable tabs)
### 译文

<figure>

![]({assets_path}/components/tabs/tabs-spec-scrollable.png)

</figure></div>
