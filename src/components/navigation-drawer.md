<div class="article__intro">

[en]: <> (Navigation drawer)
# 导航抽屉

[en]: <> (Navigation drawers provide access to destinations in your app.)
导航抽屉提供了应用中的各个主页面的访问链接。

<figure>

![]({assets_path}/components/navigation-drawer/nav-drawer-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Standard drawer)
[en]: <> (Modal drawer)
[en]: <> (Bottom drawer)
[en]: <> (States)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [标准抽屉](#standard-drawer)
* [模态化抽屉](#modal-drawer)
* [底部抽屉](#bottom-drawer)
* [状态](#states)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Navigation drawers provide access to destinations and app functionality, such as switching accounts. They can either be permanently on-screen or controlled by a navigation menu icon.)
导航抽屉提供了各个主页面及应用功能的访问链接，例如切换账户。它们可以固定显示在屏幕上，也可以通过导航菜单图标控制显示状态。

[en]: <> (Navigation drawers are recommended for:)
导航抽屉推荐用于：

[en]: <> (Apps with five or more top-level destinations)
[en]: <> (Apps with two or more levels of navigation hierarchy)
[en]: <> (Quick navigation between unrelated destinations)
* 有 5 个或更多个主页面的应用
* 导航层次结构有两层及以上的应用
* 在不相关的主页面之间快速切换

<figure>

![]({assets_path}/components/navigation-drawer/usage-do.png)

<figcaption>

{do}

[en]: <> (Use a navigation drawer for five or more primary destinations.)
有 5 个或更多个主页面时，使用导航抽屉。

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/usage-caution-alt-3.png)

<figcaption>

{caution}

[en]: <> (Avoid using a navigation drawer with other primary navigation components, such as a bottom navigation bar.)
避免把导航抽屉和其他导航组件一起使用，例如底部导航栏。

</figcaption></figure>

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/navigation-illos-02.png)

<figcaption>

[en]: <> (Identifiable)
#### 可识别

[en]: <> (The placement and list-style content of navigation drawers clearly identify them as navigation.)
导航抽屉的位置和列表形式的内容，可以使用户轻易地识别出它是一个导航。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/navigation-illos-01.png)

<figcaption>

[en]: <> (Organized)
#### 有组织的

[en]: <> (Navigation drawers order destinations according to user importance, with frequent destinations first and related ones grouped together.)
导航抽屉会根据重要性对链接进行排序，访问最频繁的链接放在最前面，并把相关的链接组织起来放到一起。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/navigation-illos-03.png)

<figcaption>

[en]: <> (Contextual)
#### 适应性

[en]: <> (Navigation drawers can be shown or hidden to accommodate different app layouts.)
导航抽屉可以通过显示或隐藏来适应不同的应用布局。

</figcaption></figure></div></div>

[en]: <> (Types)
### 类型

<figure>

![]({assets_path}/components/navigation-drawer/usage-types-standard.png)

<figcaption>

[en]: <> (Standard drawer)
#### 标准抽屉

[en]: <> (Standard navigation drawers allow users to simultaneously access drawer destinations and app content. They are often co-planar with app content and affect the screen’s layout grid.)
使用标准导航抽屉，页面中可以同时显示抽屉中的链接和应用的内容。它通常和应用内容共存，并会对布局网格产生影响。

[en]: <> (Standard drawers can be permanently visible or opened and closed by tapping a navigation menu icon. They can be used on tablet and desktop only. On mobile, modal drawers are used instead.)
标准抽屉可以始终保持显示状态、或点击导航菜单图标后打开或关闭。它只能用于平板端或桌面端。在移动端，请使用模态化抽屉。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/usage-types-modal.png)

<figcaption>

[en]: <> (Modal drawer)
#### 模态化抽屉

[en]: <> (Modal navigation drawers use a scrim to block interaction with the rest of an app’s content. They are elevated above most app elements and don’t affect the screen’s layout grid.)
模态化导航抽屉使用遮罩层来阻止用户与应用的其他内容进行交互。它的海拔高度高于大部分应用中的元素，且不会影响布局网格。

[en]: <> (They are primarily for use on mobile, where screen space is limited. They can be replaced by standard drawers on tablet and desktop.)
它主要用于屏幕空间有限的移动端。在平板端和桌面端，可以使用标准抽屉代替。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/usage-types-bottom.png)

<figcaption>

[en]: <> (Bottom drawer)
#### 底部抽屉

[en]: <> (Bottom navigation drawers are a specialized type of modal drawer for use with a bottom app bar.)
底部导航抽屉是一种特殊类型的模态化抽屉，可以与底部应用栏一起使用。

[en]: <> (For increased reachability from the bottom app bar’s menu icon, they open from the bottom of the screen rather than the side.)
从底部应用栏的菜单图标触发时，为了增加可达性，它会从屏幕的底部打开，而不是从侧面打开。

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

[en]: <> (Navigation drawers contain a list embedded within a sheet. They can be enhanced with headers and dividers to organize longer lists.)
导航抽屉为嵌入了一个列表的卡片。它可以通过添加头部和分隔线来组织内容，以支持显示较长的列表。

<figure>

![]({assets_path}/components/navigation-drawer/anatomy.png)

<figcaption>

[en]: <> (Container)
[en]: <> (Header \(optional\))
[en]: <> (Divider \(optional\))
[en]: <> (Active text overlay)
[en]: <> (Active text)
[en]: <> (Inactive text)
[en]: <> (Subtitle)
[en]: <> (Scrim \(modal only\))
1. 容器
2. 头部（可选）
3. 分隔线（可选）
4. 激活状态文字的背景
5. 激活状态的文字
6. 未激活的文字
7. 副标题
8. 遮罩层（进行模态化抽屉）

</figcaption></figure>

[en]: <> (Sheet)
### 卡片

[en]: <> (The contents of a navigation drawer are contained within a side or bottom sheet. Navigation drawers that open from the side are placed on the left of the screen for left-to-right languages, and on the right of the screen for right-to-left languages.)
导航抽屉的内容放置在侧边或底部的卡片中。从侧面打开的导航抽屉，对于 LTR 语言，放置在屏幕左侧；对于 RTL 语言，放置在屏幕右侧。

<figure>m

![]({assets_path}/components/navigation-drawer/anatomy-sheet-do-alt.png)

<figcaption>

{do}

[en]: <> (A navigation drawer sheet can open from the left side of the screen for left-to-right languages \(1\), or from the bottom of the screen when paired with a bottom app bar \(2\). Scaled down to 62.5%)
对于 LTR 语言，导航抽屉从屏幕左侧打开。如果界面中包含底部应用栏，则将从屏幕底部打开。

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/anatomy-sheet-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t open a navigation drawer from the right side of the screen unless the app is set to a right-to-left language.)
除非应用使用的是 RTL 语言，否则不要从屏幕右侧打开导航抽屉。

</figcaption></figure>

[en]: <> (Destinations)
### 目标页面链接

[en]: <> (Destinations in a navigation drawer take the form of actionable list items. Each item describes its destination using a text label and optional iconography.)
导航抽屉中的目标页面链接用可操作列表项的形式显示。每个列表项都使用文本和可选的图标来表示。

[en]: <> (Destination labels)
#### 目标页面链接的文本

[en]: <> (Text labels should be clear and short enough that they aren’t cut off by the sheet.)
文本应简短清晰，以免超出卡片范围而被截断。

<figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-labels-no-icons-do.png)

<figcaption>

{do}

[en]: <> (Navigation drawers can use text labels without icons.)
导航抽屉的列表项可以不使用图标，仅使用纯文本。

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-labels-short-do.png)

<figcaption>

{do}

[en]: <> (Keep text labels concise, but truncate them if they extend beyond the container width.)
保持文本简洁，但如果它们超出了容器范围，则需要截断它们。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-labels-wrap-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t wrap label text.)
不要使文本产生换行。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-labels-shrink-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t shrink text size in order to fit a text label on a single line.)
不要为了使文本在一行中显示全，而缩小文本。

</figcaption></figure></div></div>

[en]: <> (Destination iconography \(optional\))
#### 目标页面链接的图标（可选）

[en]: <> (Icons can supplement labels as indicators of a destination. Whe used, they should always be placed before text. Other app components and content should reference these icons.)
图标可以作为目标页面的指示器来对文本进行补充。使用图标时，应始终将它们放在文本之前。应用中其他组件和内容应该以这些图标为依据。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-icons-do.png)

<figcaption>

{do}

[en]: <> (Use recognizable icons when conventions exist.)
使用易于识别的图标。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-icons-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use the same icon to represent different primary destinations.)
请勿使用相同的图标来表示不同的主页面。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-icons-repeat-do.png)

<figcaption>

{caution}

[en]: <> (Secondary destinations can be represented by the same icon, especially if they are part of a collection \(1\).)
次级页面可以使用相同的图标，特别是当它们是集合的一部分的时候（1）。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-icons-some-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t apply icons to some destinations and not others. Icons should be used for all destinations, or none.)
不要仅在某些列表项上使用图标。图标要么在所有列表项上都使用，要么都不使用。

</figcaption></figure></div></div>

[en]: <> (Dividers \(optional\))
### 分隔线（可选）

[en]: <> (Horizontal dividers can be used to separate groups of navigation destinations within the list. They extend across the full width of the drawer.)
水平分隔线可用于将列表中的目标页面链接分隔成不同的分组。它占据了整个抽屉的宽度。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-dividers-do.png)

<figcaption>

{do}

[en]: <> (Use full-width dividers \(1\) to separate groups of destinations \(2\).)
使用全宽分隔线（1）来把目标页面链接分隔成不同的分组（2）。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-dividers-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use dividers to separate individual destinations.)
不要使用分隔线来分隔每个链接。

</figcaption></figure></div></div>

[en]: <> (Header \(optional\))
### 头部（可选）

[en]: <> (The header area of a navigation drawer is a flexible space that can be used for brand expression \(such as an app title or logo\), an account switcher, and more.)
导航抽屉的头部区域是一个非常灵活的空间，可用于展示品牌标识（如应用的标题或 logo）、账户切换工具等。

<figure>

![]({assets_path}/components/navigation-drawer/anatomy-header-account.png)

<figcaption>

{do}

[en]: <> (If access to account switching is a priority, an account switcher can be placed in the header area of a navigation drawer.)
如果账户切换工具是最重要的元素，则可以把账户切换工具放置到导航抽屉的头部区域中。

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/anatomy-header-brand-do.png)

<figcaption>

{do}

[en]: <> (If a navigation drawer is the full vertical height of the page, you can place a branding element or product name in the header area.)
如果导航抽屉的高度为页面的高度，则可以在头部区域中放置品牌标识或产品名称。

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/anatomy-header-brand-dont.png)

<figcaption>

{dont}

[en]: <> (If a navigation drawer is clipped by a top app bar, don’t place a branding element or product name in the header. In this case the top app bar is a more suitable place for that content.)
如果导航抽屉位于顶部应用栏下方，请勿在头部区域中放置品牌标识或产品名称。在这种情况下，顶部应用栏更适合用来放置这些内容。

</figcaption></figure>

[en]: <> (Scrim \(modal and bottom only\))
### 遮罩层（仅限模态化抽屉和底部抽屉）

[en]: <> (Modal navigation drawers use a scrim to block interaction with the rest of the app. The scrim is placed directly below the drawer’s sheet and can be tapped or clicked to dismiss the drawer.)
模态化导航抽屉使用遮罩层来阻止用户与应用的其余部分进行交互。遮罩层直接放在抽屉的后面，可以通过点击遮罩层来关闭抽屉。

<figure>

![]({assets_path}/components/navigation-drawer/anatomy-scrim.png)

<figcaption>

[en]: <> (Scrims applied to a modal side navigation drawer \(1\) and bottom navigation drawer \(2\))
适用于模态化侧边导航抽屉（1）和底部导航抽屉（2）的遮罩层。

</figcaption></figure>

[en]: <> (Standard drawer)
<h2 id="standard-drawer">标准抽屉</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Standard navigation drawers allow interaction with both screen content and the drawer at the same time. They can be used on tablet and desktop, but they aren’t suitable for mobile due to limited screen size.)
标准导航抽屉可以使用户同时与页面内容和抽屉进行交互。它可以用在平板端和桌面端，但不适用于移动端，因为移动端的屏幕尺寸有限。

[en]: <> (Alternatives)
#### 备用方案

[en]: <> (*Modal drawer*: In a responsive layout grid, at a defined minimum breakpoint of at least 600dp width, a standard drawer should be replaced with a modal drawer.)
[en]: <> (*Permanently visible drawer*: When users need to switch destinations frequently \(and screen size allows\), a permanently visible drawer can be used.)
[en]: <> (*Dismissible drawer*: A dismissible drawer can be used when users are likely to focus on screen content and require less frequent access to its navigation destinations.)
* *模态化抽屉*：在响应式布局中，在最小的断点宽度以下（即宽度小于 600dp 时），应使用模态化抽屉代替标准抽屉。
* *固定显示的抽屉*：当用户需要经常在主页面之间切换（且屏幕中有足够的空间），可以使用固定显示的抽屉。
* *可关闭的抽屉*：当需要用户专注于屏幕内容，且导航抽屉的使用频率比较低时，可以使用可关闭的抽屉。

<figure>

![]({assets_path}/components/navigation-drawer/standard-usage.png)

<figcaption>

[en]: <> (A dismissible drawer.)
可关闭的抽屉。

</figcaption></figure>

[en]: <> (Behavior)
### 行为

[en]: <> (Scrolling)
#### 滚动

[en]: <> (Navigation drawers can be vertically scrolled, independent of the rest of the screen’s content and UI. If the list of navigation destinations is longer than the height of the drawer, the drawer’s contents can be scrolled within the drawer.)
导航抽屉可以垂直滚动，不受屏幕中其他内容影响。如果导航抽屉中的列表高度高于抽屉的高度，则抽屉内容可以在抽屉中滚动。

<figure>

![]({assets_path}/components/navigation-drawer/standard-behavior-scrolling-alt.png)

</figure>

[en]: <> (Visibility)
#### 可见性

[en]: <> (The visibility of a standard navigation drawer depends on screen size, app layout, and frequency of use.)
标准导航抽屉的可见性取决于屏幕大小、应用布局、以及使用频率。

[en]: <> (*Dismissible* standard drawers can be used for layouts that prioritize content \(such as a photo gallery\) or for apps where users are unlikely to switch destinations often. They should use a visible navigation menu icon to open and close the drawer.)
[en]: <> (*Permanently visible* standard drawers allow quick pivoting between unrelated destinations. They require a menu icon for control because they can’t be dismissed by the user.)
* *可关闭*的标准抽屉可用于以内容为主（例如相册）的布局，或用户不需要频繁切换主页面的应用。应该使用一个导航菜单图标来打开或关闭抽屉。
* *固定显示*的标准抽屉使用户可以在主页面之间快速切换。它需要一个菜单图标用于控制抽屉的显示状态，应为它不能被用户取消。

<figure>

![]({assets_path}/components/navigation-drawer/standard-behavior-visibility-dismissible.png)

<figcaption>

[en]: <> (A standard dismissible navigation drawer is opened and closed by tapping the navigation menu icon in the top app bar \(1\), and remains open until the menu icon is tapped again \(2\).)
标准的可关闭导航抽屉，可以通过点击顶部应用栏（1）中的导航菜单图标，来打开或关闭。且在再次点击菜单图标前，导航抽屉会保持在打开状态（2）。

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/standard-behavior-visibility-permanent.png)

<figcaption>

[en]: <> (A permanent navigation drawer on desktop)
桌面端的固定显示的导航抽屉

</figcaption></figure>

[en]: <> (Elevation)
### 海拔高度

[en]: <> (A standard navigation drawer can use one of these elevation positions:)
标准导航抽屉的海拔高度可以是以下之一：

[en]: <> (At the same elevation as a top app bar \(full-height\))
[en]: <> (At a lower elevation than a top app bar \(clipped\))
* 与顶部应用栏的海拔高度相同（全高）
* 低于顶部应用栏的海拔高度（被限制高度）

[en]: <> (Full-height)
#### 全高

[en]: <> (A full-height navigation drawer is at the same elevation as a top app bar.)
全高的导航抽屉处于和顶部应用栏同一海拔高度。

<figure>

![]({assets_path}/components/navigation-drawer/standard-elevation-top-app-bar.png)

</figure>

[en]: <> (Clipped)
#### 被限制高度

[en]: <> (A clipped navigation drawer is at the same elevation as content that scrolls beneath a top app bar.)
被限制高度的导航抽屉与顶部应用栏下方的内容处于同一海拔高度。

<figure>

![]({assets_path}/components/navigation-drawer/standard-elevation-below.png)

</figure>

[en]: <> (Modal drawer)
<h2 id="modal-drawer">模态化抽屉</h2>

[en]: <> (Usage)
### 用法

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Modal navigation drawers block interaction with the rest of an app’s content with a scrim. They are elevated above most of the app’s UI and don’t affect the screen’s layout grid.)
模态化导航抽屉使用遮罩层来阻止用户与应用的其他内容进行交互。它的海拔高度高于应用中的大部分元素，且不会影响屏幕中元素的布局。

[en]: <> (They are primarily for use on mobile where screen space is limited, and can be replaced by standard drawers on tablet and desktop.)
它主要用于屏幕空间有限的移动设备。在平板和桌面端，可以使用标准抽屉代替。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/modal-usage.png)

<figcaption>

[en]: <> (A modal drawer on mobile)
移动端的模态化抽屉

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 行为

[en]: <> (Opening and closing)
#### 打开和关闭

[en]: <> (Modal navigation drawers are always opened by an affordance outside of the drawer, such as a navigation menu icon in a top app bar.)
模态化导航抽屉总是通过一个抽屉外的元素来打开，例如顶部应用栏中的导航菜单图标。

[en]: <> (Modal drawers can be dismissed by:)
模态化抽屉可以通过以下方式关闭：

[en]: <> (Selecting a drawer item)
[en]: <> (Tapping the scrim)
[en]: <> (Swiping toward the drawer’s anchoring edge \(e.g. swiping right-to-left for a left-aligned navigation drawer\))
* 选中抽屉中的一个项目
* 点击遮罩层
* 将抽屉向屏幕边缘滑动（例如，从右向左滑动一个左对齐的导航抽屉）

<figure>

![]({assets_path}/components/navigation-drawer/modal-behavior-open-alt.png)

<figcaption>

{do}

[en]: <> (A modal drawer is always opened by a navigation menu icon \(1\).)
模态化抽屉总是通过导航菜单图标（1）来打开.

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/modal-behavior-close.png)

<figcaption>

[en]: <> (Modal drawers can be dismissed by tapping its scrim \(1\) or swiping the drawer toward its anchoring screen edge \(2\).)
可以通过点击遮罩层（1）或将抽屉向屏幕边缘滑动（2）来关闭模态化抽屉。

</figcaption></figure>

[en]: <> (Scrolling)
#### 滚动

[en]: <> (If the list of navigation destinations is longer than the height of the drawer, the list can vertically scroll in the drawer.)
如果抽屉中的列表比抽屉本身要高，则列表可以在抽屉内部滚动。

<figure>

![]({assets_path}/components/navigation-drawer/modal-behavior-scrolling-do.png)

</figure>

[en]: <> (Bottom drawer)
<h2 id="bottom-drawer">底部抽屉</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Bottom navigation drawers are modal drawers that are anchored to the bottom of the screen instead of the left or right edge. They are only used with bottom app bars.)
底部导航抽屉是模态化抽屉，固定在屏幕底部。它仅适合和底部应用栏共同使用。

[en]: <> (These drawers open upon tapping the navigation menu icon in the bottom app bar. They are only for use on mobile.)
点击底部应用栏中的导航菜单图标可以打开此抽屉。它仅适用于移动设备。

<figure>

![]({assets_path}/components/navigation-drawer/bottom-usage.png)

<figcaption>

[en]: <> (Bottom navigation drawer)
底部导航抽屉

</figcaption></figure>

[en]: <> (Behavior)
### 行为

[en]: <> (Opening on mobile \(portrait orientation\))
#### 在移动端打开（纵向）

[en]: <> (As with other modal bottom sheets, the initial vertical position of a bottom navigation drawer is based on its content and screen height. They initially cannot open above 50% of the screen’s height.)
和其他模态化底部卡片一样，底部导航抽屉的初始垂直高度取决于其内容和屏幕高度。其初始高度不能超过屏幕高度的 50%。

[en]: <> (If drawer contents are under 50% of screen height, open the drawer to full height at all times)
[en]: <> (If drawer contents are greater than 50% of screen height, open them to 50% initially, then allow a user to drag the drawer upward to its full height or screen height \(whichever comes first\))
* 如果抽屉内容高度小于屏幕高度的 50%，则始终把抽屉打开到最大高度
* 如果抽屉内容高度大于屏幕高度的 50%，则打开时的初始高度为 50%，然后允许用户将抽屉向上拖动至抽屉的最大高度或屏幕高度（以先到达的为准）

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-open-portrait-do.png)

<figcaption>

{do}

[en]: <> (Open bottom navigation drawers that contain only a few items to their full height \(A\).)
底部导航抽屉只包含少量几个条目，打开的高度为抽屉高度。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-open-portrait-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t extend the height of a drawer beyond its contents.)
抽屉的高度不要高于其内容的高度。

</figcaption></figure></div></div><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-open-portrait-clip.png)

<figcaption>

{do}

[en]: <> (Adjust the opening position of your bottom navigation drawer so the last list item in view is clipped by the bottom of the screen. This can inform users that there are more items to view.)
调整底部导航抽屉的打开位置，以便抽屉中的最后一个列表项能被屏幕截断。这样能告诉用户抽屉中还有更多的条目。

</figcaption></figure>

[en]: <> (Opening on mobile \(landscape orientation\))
#### 在移动端打开（横向）

[en]: <> (In landscape orientation on mobile, taller bottom navigation drawers automatically open to full-screen mode.)
在横屏状态的移动端，较高的底部导航抽屉打开时，自动打开到全屏高度。

<figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-landscape-open-do.png)

<figcaption>

[en]: <> (A bottom drawer opens to full-screen mode on mobile in a landscape orientation.)
在横屏状态的移动端，底部抽屉打开到全屏模式。

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-landscape-open-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t open a bottom drawer to half the screen height in landscape mode.)
在横屏状态的移动端，不要将底部抽屉打开到屏幕高度的一半。

</figcaption></figure>

[en]: <> (Scrolling)
#### 滚动

[en]: <> (Bottom navigation drawers can be internally scrolled once they have been opened to full screen height.)
底部导航抽屉一旦打开到全屏高度，就可以在内部滚动。

[en]: <> (When initially opened to 50% of the screen height, the drawer must be dragged to screen height before additional items are revealed. Upon scroll, the drawer's header becomes an elevated top app bar with a close affordance.)
当初始打开高度为屏幕高度的 50% 时，必须将抽屉拖至屏幕高度后，才能显示其他内容。在滚动时，抽屉的头部转换为具有较高海拔高度的顶部应用栏，并包含一个关闭按钮。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-scrolling-do.png)

<figcaption>

{do}

[en]: <> (Allow a bottom drawer’s contents to be scrolled when at full height.)
底部抽屉高度为屏幕高度时，允许抽屉中的内容滚动。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-scrolling-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t scroll a bottom drawer’s contents when it’s not at full-screen height.)
当抽屉高度小于屏幕高度时，不要滚动抽屉中的内容。

</figcaption></figure></div></div>

[en]: <> (Content hierarchy)
### 内容结构

[en]: <> (Because the number of bottom navigation drawer content items aren’t all visible at first, the content of the drawer should be ordered as follows:)
因为底部导航抽屉的内容项最初并非全部可见，因此抽屉的内容应按如下顺序排列：

[en]: <> (List items first that are most likely to be frequently accessed by users)
[en]: <> (If an account switcher is used, place it at the top of the drawer)
1. 首先列出最有可能被用户频繁访问的条目
2. 如果包含账户切换器，则将其放在抽屉的顶部

[en]: <> (States)
<h2 id="states">状态</h2>

[en]: <> (The destinations within a navigation drawer take the form of list items. Each item can be activated, inactive, hovered, focused, and pressed.)
导航抽屉中目标页面的链接采用列表项的形式。每个条目都有已激活、未激活、悬停、聚焦和按下状态。

<figure>

![]({assets_path}/components/navigation-drawer/states-hero.png)

<figcaption>

[en]: <> (*Activated*<br>The current screen, or its parent, is represented with an activated state. Only one item in a navigation drawer can be activated at a time. This state should have strong visual contrast from unactivated items.)
[en]: <> (*Inactive*<br>Inactive is the default state for items in a navigation drawer.)
[en]: <> (*Focus*)
[en]: <> (*Pressed*)
[en]: <> (*Hover*)
1. *已激活*<br>当前界面对应的条目，及其父条目，用激活状态来表示。同一时刻只能激活导航抽屉中的一个条目。此状态应与未激活状态具有强烈的视觉对比。
2. *未激活*<br>未激活是导航抽屉中的列表项的默认状态。
3. *聚焦*
4. *按下*
5. *悬停*

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/states-do.png)

<figcaption>

{do}

[en]: <> (Only one drawer item can be activated at a time.)
同一时刻只能激活一个抽屉条目。

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/states-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t activate more than one drawer item at a time.)
不要同时激活多个抽屉条目。

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (Standard navigation drawer)
#### 标准导航抽屉

<figure>

![]({assets_path}/components/navigation-drawer/specs-navdrawer-side-standard.png)

</figure>

[en]: <> (Modal navigation drawer)
#### 模态化导航抽屉

<figure>

![]({assets_path}/components/navigation-drawer/specs-navdrawer-side-modal.png)

</figure>

[en]: <> (Bottom navigation drawer)
#### 底部导航抽屉

<figure>

![]({assets_path}/components/navigation-drawer/specs-navdrawer-bottom-modal.png)

</figure></div>
