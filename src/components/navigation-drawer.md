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

<figure>

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
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-dividers-do.png)

<figcaption>

{do}

[en]: <> (Use full-width dividers \(1\) to separate groups of destinations \(2\).)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-dividers-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use dividers to separate individual destinations.)
译文

</figcaption></figure></div></div>

[en]: <> (Header \(optional\))
### 译文

[en]: <> (The header area of a navigation drawer is a flexible space that can be used for brand expression \(such as an app title or logo\), an account switcher, and more.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/anatomy-header-account.png)

<figcaption>

{do}

[en]: <> (If access to account switching is a priority, an account switcher can be placed in the header area of a navigation drawer.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/anatomy-header-brand-do.png)

<figcaption>

{do}

[en]: <> (If a navigation drawer is the full vertical height of the page, you can place a branding element or product name in the header area.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/anatomy-header-brand-dont.png)

<figcaption>

{dont}

[en]: <> (If a navigation drawer is clipped by a top app bar, don’t place a branding element or product name in the header. In this case the top app bar is a more suitable place for that content.)
译文

</figcaption></figure>

[en]: <> (Scrim \(modal and bottom only\))
### 译文

[en]: <> (Modal navigation drawers use a scrim to block interaction with the rest of the app. The scrim is placed directly below the drawer’s sheet and can be tapped or clicked to dismiss the drawer.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/anatomy-scrim.png)

<figcaption>

[en]: <> (Scrims applied to a modal side navigation drawer \(1\) and bottom navigation drawer \(2\))
译文

</figcaption></figure>

[en]: <> (Standard drawer)
<h2 id="standard-drawer">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Standard navigation drawers allow interaction with both screen content and the drawer at the same time. They can be used on tablet and desktop, but they aren’t suitable for mobile due to limited screen size.)
译文

[en]: <> (Alternatives)
#### 译文

[en]: <> (*Modal drawer*: In a responsive layout grid, at a defined minimum breakpoint of at least 600dp width, a standard drawer should be replaced with a modal drawer.)
[en]: <> (*Permanently visible drawer*: When users need to switch destinations frequently \(and screen size allows\), a permanently visible drawer can be used.)
[en]: <> (*Dismissible drawer*: A dismissible drawer can be used when users are likely to focus on screen content and require less frequent access to its navigation destinations.)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/components/navigation-drawer/standard-usage.png)

<figcaption>

[en]: <> (A dismissible drawer.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Scrolling)
#### 译文

[en]: <> (Navigation drawers can be vertically scrolled, independent of the rest of the screen’s content and UI. If the list of navigation destinations is longer than the height of the drawer, the drawer’s contents can be scrolled within the drawer.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/standard-behavior-scrolling-alt.png)

</figure>

[en]: <> (Visibility)
#### 译文

[en]: <> (The visibility of a standard navigation drawer depends on screen size, app layout, and frequency of use.)
译文

[en]: <> (*Dismissible* standard drawers can be used for layouts that prioritize content \(such as a photo gallery\) or for apps where users are unlikely to switch destinations often. They should use a visible navigation menu icon to open and close the drawer.)
[en]: <> (*Permanently visible* standard drawers allow quick pivoting between unrelated destinations. They require a menu icon for control because they can’t be dismissed by the user.)
* 译文
* 译文

<figure>

![]({assets_path}/components/navigation-drawer/standard-behavior-visibility-dismissible.png)

<figcaption>

[en]: <> (A standard dismissible navigation drawer is opened and closed by tapping the navigation menu icon in the top app bar \(1\), and remains open until the menu icon is tapped again \(2\).)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/standard-behavior-visibility-permanent.png)

<figcaption>

[en]: <> (A permanent navigation drawer on desktop)
译文

</figcaption></figure>

[en]: <> (Elevation)
### 译文

[en]: <> (A standard navigation drawer can use one of these elevation positions:)
译文

[en]: <> (At the same elevation as a top app bar \(full-height\))
[en]: <> (At a lower elevation than a top app bar \(clipped\))
* 译文
* 译文

[en]: <> (Full-height)
#### 译文

[en]: <> (A full-height navigation drawer is at the same elevation as a top app bar.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/standard-elevation-top-app-bar.png)

</figure>

[en]: <> (Clipped)
#### 译文

[en]: <> (A clipped navigation drawer is at the same elevation as content that scrolls beneath a top app bar.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/standard-elevation-below.png)

</figure>

[en]: <> (Modal drawer)
<h2 id="modal-drawer">译文</h2>

[en]: <> (Usage)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Modal navigation drawers block interaction with the rest of an app’s content with a scrim. They are elevated above most of the app’s UI and don’t affect the screen’s layout grid.)
[en]: <> (They are primarily for use on mobile where screen space is limited, and can be replaced by standard drawers on tablet and desktop.)

</div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/modal-usage.png)

<figcaption>

[en]: <> (A modal drawer on mobile)
译文

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 译文

[en]: <> (Opening and closing)
#### 译文

[en]: <> (Modal navigation drawers are always opened by an affordance outside of the drawer, such as a navigation menu icon in a top app bar.)
译文

[en]: <> (Modal drawers can be dismissed by:)
译文

[en]: <> (Selecting a drawer item)
[en]: <> (Tapping the scrim)
[en]: <> (Swiping toward the drawer’s anchoring edge \(e.g. swiping right-to-left for a left-aligned navigation drawer\))
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/components/navigation-drawer/modal-behavior-open-alt.png)

<figcaption>

{do}

[en]: <> (A modal drawer is always opened by a navigation menu icon \(1\).)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/modal-behavior-close.png)

<figcaption>

[en]: <> (Modal drawers can be dismissed by tapping its scrim \(1\) or swiping the drawer toward its anchoring screen edge \(2\).)
译文

</figcaption></figure>

[en]: <> (Scrolling)
#### 译文

[en]: <> (If the list of navigation destinations is longer than the height of the drawer, the list can vertically scroll in the drawer.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/modal-behavior-scrolling-do.png)

</figure>

[en]: <> (Bottom drawer)
<h2 id="bottom-drawer">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Bottom navigation drawers are modal drawers that are anchored to the bottom of the screen instead of the left or right edge. They are only used with bottom app bars.)
译文

[en]: <> (These drawers open upon tapping the navigation menu icon in the bottom app bar. They are only for use on mobile.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/bottom-usage.png)

<figcaption>

[en]: <> (Bottom navigation drawer)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Opening on mobile \(portrait orientation\))
#### 译文

[en]: <> (As with other modal bottom sheets, the initial vertical position of a bottom navigation drawer is based on its content and screen height. They initially cannot open above 50% of the screen’s height.)
译文

[en]: <> (If drawer contents are under 50% of screen height, open the drawer to full height at all times)
[en]: <> (If drawer contents are greater than 50% of screen height, open them to 50% initially, then allow a user to drag the drawer upward to its full height or screen height \(whichever comes first\))
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-open-portrait-do.png)

<figcaption>

{do}

[en]: <> (Open bottom navigation drawers that contain only a few items to their full height \(A\).)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-open-portrait-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t extend the height of a drawer beyond its contents.)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-open-portrait-clip.png)

<figcaption>

{do}

[en]: <> (Adjust the opening position of your bottom navigation drawer so the last list item in view is clipped by the bottom of the screen. This can inform users that there are more items to view.)
译文

</figcaption></figure>

[en]: <> (Opening on mobile \(landscape orientation\))
#### 译文

[en]: <> (In landscape orientation on mobile, taller bottom navigation drawers automatically open to full-screen mode.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-landscape-open-do.png)

<figcaption>

[en]: <> (A bottom drawer opens to full-screen mode on mobile in a landscape orientation.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-landscape-open-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t open a bottom drawer to half the screen height in landscape mode.)
译文

</figcaption></figure>

[en]: <> (Scrolling)
#### 译文

[en]: <> (Bottom navigation drawers can be internally scrolled once they have been opened to full screen height.)
译文

[en]: <> (When initially opened to 50% of the screen height, the drawer must be dragged to screen height before additional items are revealed. Upon scroll, the drawer's header becomes an elevated top app bar with a close affordance.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-scrolling-do.png)

<figcaption>

{do}

[en]: <> (Allow a bottom drawer’s contents to be scrolled when at full height.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-scrolling-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t scroll a bottom drawer’s contents when it’s not at full-screen height.)
译文

</figcaption></figure></div></div>

[en]: <> (Content hierarchy)
### 译文

[en]: <> (Because the number of bottom navigation drawer content items aren’t all visible at first, the content of the drawer should be ordered as follows:)
译文

[en]: <> (List items first that are most likely to be frequently accessed by users)
[en]: <> (If an account switcher is used, place it at the top of the drawer)
1. 译文
2. 译文

[en]: <> (States)
<h2 id="states">译文</h2>

[en]: <> (The destinations within a navigation drawer take the form of list items. Each item can be activated, inactive, hovered, focused, and pressed.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/states-hero.png)

<figcaption>

[en]: <> (*Activated*<br>The current screen, or its parent, is represented with an activated state. Only one item in a navigation drawer can be activated at a time. This state should have strong visual contrast from unactivated items.)
[en]: <> (*Inactive*<br>Inactive is the default state for items in a navigation drawer.)
[en]: <> (*Focus*)
[en]: <> (*Pressed*)
[en]: <> (*Hover*)
1. *译文*<br>译文
2. *译文*<br>译文
3. *译文*
4. *译文*
5. *译文*

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/states-do.png)

<figcaption>

{do}

[en]: <> (Only one drawer item can be activated at a time.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/states-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t activate more than one drawer item at a time.)
译文

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Standard navigation drawer)
#### 译文

<figure>

![]({assets_path}/components/navigation-drawer/specs-navdrawer-side-standard.png)

</figure>

[en]: <> (Modal navigation drawer)
#### 译文

<figure>

![]({assets_path}/components/navigation-drawer/specs-navdrawer-side-modal.png)

</figure>

[en]: <> (Bottom navigation drawer)
#### 译文

<figure>

![]({assets_path}/components/navigation-drawer/specs-navdrawer-bottom-modal.png)

</figure></div>
