<div class="article__intro">

[en]: <> (Bottom navigation)
# 底部导航

[en]: <> (Bottom navigation bars allow movement between primary destinations in an app.)
底部导航栏允许用户在应用的不同顶级视图间切换。

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-usage-1.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Placement)
[en]: <> (States)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [行为](#behavior)
* [位置](#placement)
* [状态](#states)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Bottom navigation bars display three to five destinations at the bottom of a screen. Each destination is represented by an icon and an optional text label. When a bottom navigation icon is tapped, the user is taken to the top-level navigation destination associated with that icon.)
底部导航栏在屏幕底部显示 3 到 5 个导航项。每个导航项都由一个图标和一个可选的文本标签组成。当点击底部导航图标时，用户将进入和该图标对应的视图。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/bottom-navigation/bnb-convenient.png)

</figure>

[en]: <> (Ergonomic)
#### 人体工程学

[en]: <> (The bottom navigation bar is easy to reach on a handheld mobile device.)
底部导航栏很容易在手持设备上触摸到。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/bottom-navigation/bnb-consistent.png)

</figure>

[en]: <> (Consistent)
#### 一致性

[en]: <> (When used, the bottom navigation bar appears at the bottom of every screen.)
如果使用了底部导航栏，则底部导航栏会出现在每个界面的底部。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/bottom-navigation/bnb-limited.png)

</figure>

[en]: <> (Related)
#### 同一类的

[en]: <> (Bottom navigation bar destinations should be of equal importance.)
每个导航项对应的视图应该有相同的重要性。

</div></div>

[en]: <> (When to use)
### 何时使用

[en]: <> (Bottom navigation should be used for:)
#### 底部导航应该用于：

[en]: <> (Top-level destinations that need to be accessible from anywhere in the app)
[en]: <> (Three to five destinations)
[en]: <> (Mobile or tablet only)
* 目标视图需要从应用的任何地方直接进行访问
* 3 到 5 个导航项
* 仅限手机或平板设备

[en]: <> (Bottom navigation shouldn’t be used for:)
#### 底部导航不应用于：

[en]: <> (Single tasks, such as viewing a single email)
[en]: <> (User preferences or settings)
* 单个任务，例如查看单个电子邮件
* 用户偏好设置或系统设置

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use a bottom navigation bar for fewer than three destinations \(use tabs instead\).)
少于 3 个导航项时，不要使用底部导航栏（可以使用标签页代替）。

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-dont-3.png)

<figcaption>

{dont}

[en]: <> (Don’t use more than five destinations. For those cases, try tabs or a navigation drawer.)
不要超过 5 个导航项。对于超过 5 个的情况，可以尝试使用标签页或导航抽屉。

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-caution-1.png)

<figcaption>

{caution}

[en]: <> (Combining bottom navigation and tabs may cause confusion, as their relationship to the content may be unclear. Tabs share a common subject, whereas bottom navigation destinations are top-level and disconnected from each other.)
混合使用底部导航和标签页可能会引起混淆，因为它们与内容的关系可能会不清楚。标签页用于区分同一类主题，而底部导航的每个目标视图都是顶级视图，彼此之间是没有联系的。

[en]: <> (Scaled down 50%.)
缩放到 50%。

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-anatomy.png)

<figcaption>

[en]: <> (Container)
[en]: <> (Inactive icon)
[en]: <> (Inactive text label)
[en]: <> (Active icon)
[en]: <> (Active text label)
1. 容器
2. 未激活的图标
3. 未激活的文本标签
4. 激活的图标
5. 激活的文本标签

</figcaption></figure>

[en]: <> (Representing destinations)
### 导航项的显示方式

[en]: <> (The way bottom navigation destinations are represented can depend on how many are used:)
导航项的显示方式取决于导航项数量：

[en]: <> (*Three destinations*: Display icons and text labels for all destinations.)
[en]: <> (*Four destinations*: Active destinations display an icon and text label. Inactive destinations display icons, and text labels are recommended.)
[en]: <> (*Five destinations*: Active destinations display an icon and text label. Inactive destinations use icons, and use text labels with caution \(as space may not permit them\).)
* *三个导航项*：所有导航项都显示图标和文本标签。
* *四个导航项*：激活的导航项显示图标和文本标签，未激活的导航项显示图标，建议也显示文本标签。
* *五个导航项*：激活的导航项显示图标和文本标签，未激活的导航项显示图标，并谨慎使用文本标签（因为空间可能不允许）。

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-icons-2.png)

<figcaption>

[en]: <> (There are three destinations in this bottom navigation, each with an icon and text label.)
这个底部导航有三个导航项，每个导航项都带有图标和文本标签。

</figcaption></figure>

[en]: <> (Icons)
### 图标

[en]: <> (Bottom navigation destinations always include an icon. It’s best to pair icons with text labels, especially if the icon doesn’t have obvious meaning.)
底部导航的导航项始终包含图标。最好是同时使用图标和文本标签，特别是图标没有明显含义的时候。

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-usage-1.png)

<figcaption>

[en]: <> (Icons paired with text labels in bottom navigation)
底部导航中同时使用图标和文本标签

</figcaption></figure>

[en]: <> (Text Labels)
### 文本标签

[en]: <> (Text labels provide short, meaningful descriptions of bottom navigation destinations.)
文本标签为导航项提供了简短、有意义的描述。

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-labels.png)

<figcaption>

{do}

[en]: <> (Use short text labels.)
使用短文本标签。

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-textlabels-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t truncate text. The truncation may obscure important destination information.)
不要截断文本。因为这样会导致理解困难。

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-textlabels-dont-3.png)

<figcaption>

{dont}

[en]: <> (Don’t shrink text to fit on a single line.)
不要为了使文本在单行显示而缩小文本。

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-textlabels-dont-1.png)

<figcaption>

{caution}

[en]: <> (Avoid wrapping text.)
避免使文本产生换行。

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Bottom navigation actions)
### 底部导航操作

[en]: <> (Tapping a bottom navigation destination results in one of the following:)
点击底部导航的导航项会导致下列之一的结果：

[en]: <> (It takes the user to the screen associated with it)
[en]: <> (On a visited section, it returns the user to their previous scroll position there)
[en]: <> (On the current section, it scrolls the page back to the top and may refresh it)
* 切换到导航项对应的界面
* 如果导航项对应的界面是曾经访问过的界面，则会切换到该界面，并恢复之前的滚动条位置
* 如果导航项对应的界面是当前界面，则当前界面会滚动到顶部、且可能会刷新

[en]: <> (Bottom navigation destinations don’t:)
点击底部导航的导航项不会：

[en]: <> (Open menus or dialogs)
* 打开菜单或对话框

[en]: <> (On Android, the Back button does not navigate between bottom navigation destinations.)
在 Android 上，点击后退按钮不会在底部导航的导航项之间切换。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-icons-1a.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-icons-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tapping the navigation destination of a previously visited section returns the user to where they left off in that section.)
点击之前访问过的界面对应的导航项，会将用户带回到之前界面所处的状态。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-icons-2a.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-icons-2a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tapping the current bottom navigation destination takes the user to the top of the screen, and refreshes the content if applicable.)
如果导航项对应的界面是当前界面，则点击导航项后，会滚动回界面顶部，并刷新（如果适用的话）。

</figcaption></figure></div></div>

[en]: <> (Badges)
### 徽章

[en]: <> (Bottom navigation icons can include badges in their upper right corner. These badges can contain dynamic information, such as a number of pending requests.)
底部导航项可以在图标的右上角包含一个徽章。这些徽章可以包含动态信息，例如显示未处理的消息数量。

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-badging-1.png)

<figcaption>

[en]: <> (Badge)
[en]: <> (Badge with a number)
[en]: <> (Badge with a maximum character count)
1. 徽章
2. 带数字的徽章
3. 带有最大字符数的徽章

</figcaption></figure>

[en]: <> (Scrolling)
### 滚动

[en]: <> (Upon scroll, the bottom navigation bar can appear or disappear:)
滚动时，底部导航栏可以显示或隐藏：

[en]: <> (Scrolling downward hides the bar)
[en]: <> (Scrolling upward reveals it)
* 向下滚动时隐藏底部导航栏
* 向上滚动时显示底部导航栏

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-1b.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-1b.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The bottom navigation bar can disappear to allow more space for content.)
底部导航栏可以隐藏，以便为内容留出更多空间。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-icons-1a.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-icons-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The bottom navigation bar remains in view when navigating through an app’s hierarchy.)
在应用界面的层级之间切换时，底部导航栏仍然保留在视图中。

</figcaption></figure></div></div>

[en]: <> (Transitions)
### 过渡

[en]: <> (Swipe gestures do not navigate between bottom navigation views.)
滑动手势无法在底部导航的视图间进行切换。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-do-1a.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-do-1a.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Transition between active and inactive views using a cross-fade animation.)
在不同视图中切换时使用淡入淡出的过渡效果。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-dont-1a.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-dont-1a.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid using lateral \(left-and-right\) motion to transition between views. Lateral motion is reserved for navigating related content, such as tabs.)
避免使用横向（左右方向）滑动来切换视图。横向滑动仅用于在相关内容之间切换，例如标签页。

</figcaption></figure></div></div>

[en]: <> (When they appear, these items are displayed in front of the bottom navigation bar:)
底部导航栏显示时，这些元素会显示在底部导航栏的前面：

[en]: <> (Bottom sheets)
[en]: <> (Navigation drawers)
[en]: <> (Keyboards)
* 底部卡片
* 导航抽屉
* 键盘

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-keyboard-1b.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-keyboard-1b.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Bottom navigation can be temporarily covered by bottom sheets, navigation drawers, and keyboards.)
底部导航可以被底部卡片、导航抽屉和键盘覆盖。

</figcaption></figure>

[en]: <> (Color)
### 颜色

[en]: <> (When a bottom navigation destination is active, color the icon and text label with the app’s primary color.)
当一个底部导航项处于激活状态时，导航项的图标和文本标签使用应用的主色。

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-color-do-1.png)

<figcaption>

{do}

[en]: <> (Use the app’s primary color to indicate an active destination.)
使用应用的主色来指明激活状态的导航项。

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-color-dont-1.png)

<figcaption>

{dont}

[en]: <> (Avoid using different colored icons and text labels.)
避免在不同导航项上使用不同颜色的图标和文本标签。

</figcaption></figure>

[en]: <> (If the bottom navigation bar is colored, make the current action’s icon and text label either black or white.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-color-do-2.png)

<figcaption>

{do}

[en]: <> (Use black or white iconography if the bottom navigation bar is colored.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-color-dont-2.png)

<figcaption>

{dont}

[en]: <> (Ensure legible color contrast when placing colored icons and text on a colored bottom navigation bar.)
译文

</figcaption></figure>

[en]: <> (Placement)
<h2 id="placement">位置</h2>

[en]: <> (Fixed navigation bar)
### 译文

[en]: <> (Bottom navigation bar destinations have fixed positions. They don’t scroll or move horizontally.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-dont-2.png)

<figcaption>

{dont}

[en]: <> (Bottom navigation bar destinations don’t scroll.)
译文

</figcaption></figure>

[en]: <> (Landscape view)
### 译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-do-4.png)

<figcaption>

{do}

[en]: <> (On mobile \(in landscape mode\) or tablet, bottom navigation destinations can retain the same spacing used in portrait mode, rather than being equally distributed across the bottom app bar.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-do-5.png)

<figcaption>

{do}

[en]: <> (On mobile \(in landscape mode\) or tablet, bottom navigation destinations can be positioned horizontally instead of stacked. In this case, it’s recommended that destinations are evenly distributed across the entire bar.)
译文

</figcaption></figure>

[en]: <> (States)
<h2 id="states">译文</h2>

[en]: <> (Bottom navigation destinations may be active, inactive, focused or pressed.)
译文

[en]: <> (Bottom navigation uses opacity and text to show when a destination is active. States are used to show pressed, focused, and unselected states.)
译文

[en]: <> (Inactive destination states are represented with reduced opacities; active states have full opacity.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-states-labels.png)

<figcaption>

[en]: <> (Inactive destinations)
[en]: <> (An active destination)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (When text labels are not used persistently \(at all times\), only active destinations are given text labels.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-states-icons.png)

<figcaption>

[en]: <> (Inactive destinations without text labels)
[en]: <> (An active destination with a text label)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Mobile)
### 译文

[en]: <> (Portrait)
#### 译文

<figure>

![]({assets_path}/components/bottom-navigation/specs-bottomnav-mobile-portrait.png)

</figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Minimum width)
#### 译文

<figure>

![]({assets_path}/components/bottom-navigation/specs-bottomnav-cell-minwidth.png)

</figure></div><div class="mdui-col">

[en]: <> (Maximum width)
#### 译文

<figure>

![]({assets_path}/components/bottom-navigation/specs-bottomnav-cell-maxwidth.png)

</figure></div></div>

[en]: <> (Landscape)
#### 译文

<figure>

![]({assets_path}/components/bottom-navigation/specs-bottomnav-mobile-landscape.png)

</figure></div>
