<div class="article__intro">

[en]: <> (App bars: top)
# 应用栏：顶部

[en]: <> (The top app bar displays information and actions relating to the current screen.)
顶部应用栏显示和当前界面相关的信息和操作。

<figure>

![]({assets_path}/components/app-bars-top/topappbars-howtouse-1.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Contextual action bar)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [行为](#behavior)
* [上下文操作栏](#contextual-action-bar)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (The top app bar provides content and actions related to the current screen. It’s used for branding, screen titles, navigation, and actions.)
顶部应用栏提供和当前界面相关的内容和操作。它可以用于显示 Logo、标题、导航或其他相关操作。

[en]: <> (It can transform into a contextual action bar.)
它可以转换为上下文操作栏。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-top/top-app-bar-illos-01.png)

</figure>

[en]: <> (Persistent)
#### 固定

[en]: <> (Top app bars appear at the top of each screen in an app, and can disappear upon scroll.)
顶部应用栏在每个界面的顶部显示，且可以在滚动时隐藏。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-top/top-app-bar-illos-02.png)

</figure>

[en]: <> (Guiding)
#### 主导

[en]: <> (Top app bars provide a reliable way to guide users through an app.)
顶部应用栏提供了一种可靠的方式，来引导用户使用应用。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-top/top-app-bar-illos-03.png)

</figure>

[en]: <> (Consistent)
#### 统一

[en]: <> (Top app bars have a consistent position and content to increase familiarity.)
顶部应用栏具有统一的位置和内容，方便用户快速熟悉应用。

</div></div>

[en]: <> (Types)
### 类型

<figure>

![]({assets_path}/components/app-bars-top/topappbars-regular.png)

</figure>

[en]: <> (Regular)
#### 常规

[en]: <> (A regular top app bar)
常规的顶部应用栏

<figure>

![]({assets_path}/components/app-bars-top/topappbars-contextual.png)

</figure>

[en]: <> (Contextual action bar)
#### 上下文操作栏

[en]: <> (Contextual action bars provide actions for selected items. A top app bar can transform into a contextual action bar, remaining active until an action is taken or it is dismissed.)
上下文操作栏为已选择项提供操作。顶部应用栏可以转换为上下文操作栏，且会保持激活状态，直到执行了某一操作或取消了选择。

[en]: <> (Anatomy)
<h2 id="anatomy">Anatomy</h2>

[en]: <> (The recommended placement of elements in a top app bar for left-to-right languages is:)
对于 LTR 语言，顶部应用栏中元素的放置建议：

[en]: <> (Place navigation on the far left)
[en]: <> (Place any titles to the right of navigation)
[en]: <> (Place contextual actions to the right of navigation)
[en]: <> (Place an overflow menu \(if used\) to the far right)
* 将导航放在最左侧
* 将标题放在导航右侧
* 将上下文操作放在导航右侧
* 如果需要用到弹出菜单的话，将弹出菜单放在最右侧

[en]: <> (For right-to-left languages, placement positions should be flipped.)
对于 RTL 语言，元素的放置位置应该翻转。

<figure>

![]({assets_path}/components/app-bars-top/topappbars-layout-elements-1.png)

</figure>

[en]: <> (Container)
[en]: <> (Navigation icon \(optional\))
[en]: <> (Title \(optional\))
[en]: <> (Action items \(optional\))
[en]: <> (Overflow menu \(optional\))
1. 容器
2. 导航图标（可选）
3. 标题（可选）
4. 操作项（可选）
5. 弹出菜单（可选）

[en]: <> (Bar)
### 栏

[en]: <> (The bar holds the content of the top app bar. A variety of bar heights are available:)
顶部应用栏中的内容都放在栏里。栏可以有各种不同的高度：

[en]: <> (Regular)
[en]: <> (Prominent)
[en]: <> (Dense \(desktop only\))
[en]: <> (Prominent dense \(desktop only\))
* 常规型
* 凸现型
* 密集型（仅限桌面端）
* 凸现密集型（仅限桌面端）

[en]: <> (Prominent)
#### 凸现型

[en]: <> (Prominent top app bars can be used for longer titles, to house imagery, or to provide a stronger presence to the top app bar.)
凸现型顶部应用栏可用于较长的标题，用于容纳图片，或为顶部应用栏提供更强的存在感。

<figure>

![]({assets_path}/components/app-bars-top/topappbars-customization-height-prominent-mobile-1.png)

<figcaption>

[en]: <> (Regular top app bar on mobile)
[en]: <> (Prominent top app bar on mobile)
1. 移动端的常规型顶部应用栏
2. 移动端的凸现型顶部应用栏

</figcaption></figure>

[en]: <> (Dense \(desktop only\))
#### 密集型（仅限桌面端）

[en]: <> (The top app bar may be condensed on desktop to accommodate denser layouts.)
在桌面端，顶部应用栏可以压缩显示，以适应更密集的布局。

<figure>

![]({assets_path}/components/app-bars-top/topappbars-customization-height-dense-desktop-1.png)

<figcaption>

[en]: <> (Regular top app bar on desktop)
[en]: <> (Dense top app bar on desktop)
1. 桌面端的常规型顶部应用栏
2. 桌面端的密集型顶部应用栏

</figcaption></figure>

[en]: <> (Prominent dense)
#### 凸现密集型

[en]: <> (Prominent top app bars on desktop can have a dense state to accommodate denser layouts.)
桌面端的凸现型顶部应用栏可以拥有密集型的状态，以适应更密集的布局。

<figure>

![]({assets_path}/components/app-bars-top/topappbars-customization-height-prominentdense-desktop.png)

<figcaption>

[en]: <> (Prominent top app bar on desktop)
[en]: <> (Prominent dense top app bar on desktop)
1. 桌面端的凸现型顶部应用栏
2. 桌面端的凸现密集型顶部应用栏

</figcaption></figure>

[en]: <> (Images in bars)
#### 栏中包含图片

[en]: <> (Bars can contain imagery. Prominent top app bars are recommended for image use because they provide more space.)
栏可以包含图片。凸现型顶部应用栏有更大的空间，建议在里面使用图片。

[en]: <> (Don’t use imagery that makes top app bar text and icons illegible.)
请选择合适的图片，不能因为添加了图片导致顶部应用栏中的文字和图标难以辨认。

<figure>

![]({assets_path}/components/app-bars-top/topappbars-images.png)

<figcaption>

[en]: <> (A prominent top app bar with imagery)
包含图片的凸现型顶部应用栏

</figcaption></figure><figure>

![]({assets_path}/components/app-bars-top/topappbars-images-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t place imagery in a bar that makes the top app bar’s text and icons illegible.)
请选择合适的图片，不能因为添加了图片导致顶部应用栏中的文字和图标难以辨认。

</figcaption></figure>

[en]: <> (Navigation icon \(optional\))
### 导航图标（可选）

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (A navigation icon is optional. When it appears in an app bar, it’s aligned on the left of the bar.)
导航图标是可选的。当应用栏中存在导航图标时，导航图标应位于应用栏左侧。

[en]: <> (It can take any of the following forms:)
导航图标可以有以下形式：

[en]: <> (A menu icon, which opens a navigation drawer)
[en]: <> (An up arrow, which navigating up an app’s hierarchy)
[en]: <> (A back arrow, which returns to the previous screen)
* 菜单图标，用于打开导航抽屉
* 向上箭头，用于导航到应用的上一级
* 后退箭头，返回上一个界面

</div><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-top/topappbars-navigation-icon.png)

</figure></div></div>

[en]: <> (Title \(optional\))
### 标题（可选）

[en]: <> (The app bar title can be used to describe:)
应用栏标题可用于描述：

[en]: <> (The screen a user is currently on)
[en]: <> (The section the user is currently in)
[en]: <> (The app being used)
* 用户当前所在的界面
* 用户当前所处的界面中的某一部分
* 正在使用的应用

[en]: <> (By default, titles are left aligned on desktop. The default position of titles on mobile and tablet depends on the platform. More information on this is available in [cross-platform adaptation]\(https://www.mdui.org/design/platform-guidance/cross-platform-adaptation.html\).)
默认情况下，在桌面端，标题保持左对齐。在移动端和平板电脑上，标题的位置因平台而异。更多信息可参阅 [跨平台适配](https://www.mdui.org/design/platform-guidance/cross-platform-adaptation.html)

<figure>

![]({assets_path}/components/app-bars-top/topappbars-title-long.png)

<figcaption>

{do}

[en]: <> (If title text is long, use a prominent app bar and wrap the title to two lines.)
如果标题文本较长，请使用凸现型应用栏，并把标题分为两行显示。

</figcaption></figure><figure>

![]({assets_path}/components/app-bars-top/topappbars-layout-title-dont-wrapped.png)

<figcaption>

{dont}

[en]: <> (Don’t wrap text in a regular top app bar.)
常规型顶部应用栏中的文字不要有换行。

</figcaption></figure><figure>

![]({assets_path}/components/app-bars-top/topappbars-layout-title-dont-truncated.png)

<figcaption>

{dont}

[en]: <> (Don’t truncate text, hiding the full title may cause misunderstanding.)
不要截断文本，不显示完整的标题可能会引起误解。

</figcaption></figure><figure>

![]({assets_path}/components/app-bars-top/topappbars-layout-title-dont-shrink.png)

<figcaption>

{dont}

[en]: <> (Don’t shrink text to fit on a single line.)
不要为了在一行显示所有文本而缩小文字。

</figcaption></figure>

[en]: <> (Action items and overflow menu \(optional\))
### 操作项和弹出菜单（可选）

[en]: <> (App actions are placed on the right side of an app bar, either as icons or in an overflow menu. Overflow menus differ across mobile platforms. For more guidance refer to [cross-platform adaptation]\(https://www.mdui.org/design/platform-guidance/cross-platform-adaptation.html\).)
应用的操作按钮可以是图标，也可以是弹出菜单，放在应用栏的右侧。弹出菜单则因平台而异。更多信息请参阅 [跨平台适配](https://www.mdui.org/design/platform-guidance/cross-platform-adaptation.html)

[en]: <> (Icon placement)
#### 译文

[en]: <> (Place most-used actions on the left, progressing towards the least-used actions on the far right. Any remaining actions that don’t fit on the app bar can go into an overflow menu.)
把最常用的操作放在左侧，并按操作的使用频率依次向右排列。剩下的不适合放在应用栏里的操作都可以放到弹出菜单里。

[en]: <> (Actions move into and out of the overflow menu as the app bar width changes, such as if a device is rotated from landscape to portrait orientation. More guidance on this is available in [top app bar behavior]\(https://www.mdui.org/design/components/app-bar-top.html#behavior\).)
当应用栏的宽度发生变化时（例如设备从横屏改为竖屏），操作项可以从弹出菜单中移入或移出。更多信息可查阅[顶部应用栏行为](https://www.mdui.org/design/components/app-bar-top.html#behavior)。

<figure>

![]({assets_path}/components/app-bars-top/topappbars-layout-actionoverflow.png)

<figcaption>

{do}

[en]: <> (Order action items by putting the most-used action \(1\) on the far left, second most used action \(2\) to it’s right, and so on. Any remaining or secondary actions should be placed in an overflow menu \(3\).)
把最常用的操作（1）放在最左侧，右侧是第二常用的操作（2），以此类推。任何剩余的或辅助操作都应该放在弹出菜单里（3）。

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Scrolling)
### 滚动

[en]: <> (Upon scrolling, the top app bar can remain in place, or transform in the following ways:)
滚动时，顶部应用栏可以留在原位不动，或者可以通过下面的方式进行转换：

[en]: <> (Scrolling upward hides the top app bar)
[en]: <> (Scrolling downward reveals the top app bar)
* 向上滚动时隐藏顶部应用栏
* 向下滚动时显示顶部应用栏

[en]: <> (When the top app bar scrolls, its elevation above other elements becomes apparent.)
当顶部应用栏滚动时，它的海拔高度会明显高于其他元素。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-hide.mp4" src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-hide.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The top app bar disappears upon scrolling up, and appears upon scrolling down.)
向上滚动时，顶部应用栏会消失，向下滚动时会显示。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-sameelevation.mp4" src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-sameelevation.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Top app bars can be positioned at the same elevation as content. Upon scroll, they increase elevation and let content scroll behind them.)
顶部应用栏可以与页面内容位于同一海拔高度。滚动时，会增加海拔高度，使页面内容在应用栏后面滚动。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-prominent-to-regular.mp4" src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-prominent-to-regular.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When scrolling up, prominent top app bars using imagery can transform into normal top app bars. They should not return to prominent mode until the user scrolls back to the top of the page.)
向上滚动时，凸现型顶部应用栏可以转换为常规型顶部应用栏。直到用户将页面滚动到顶部，才能切换回凸现型应用栏。

</figcaption></figure>

[en]: <> (Nesting actions)
### 嵌套操作

[en]: <> (When a screen is resized, the top app bar resizes with it. Actions are consolidated into the overflow menu.)
当调整屏幕大小时，顶部应用栏也会随之进行调整。操作会被合并到弹出菜单中。

[en]: <> (Action positioning)
#### 操作位置

[en]: <> (The actions move to the overflow menu from right to left, making the most-used action the last to be moved to the overflow menu.)
操作会从右向左移动到弹出菜单中，使最常用的操作最后移动到弹出菜单。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/app-bars-top/topappbars-behavior-nesting.mp4" src="{assets_path}/components/app-bars-top/topappbars-behavior-nesting.mp4" type="video/mp4"></video><figcaption>

[en]: <> (As a top app bar is resized, actions move to the overflow menu from right to left.)
顶部应用栏大小变化时，操作从右向左移动到弹出菜单中。

[en]: <> (Scaled down to 62.5%)
缩小到 62.5%

</figcaption></figure>

[en]: <> (Contextual action bar)
<h2 id="contextual-action-bar">上下文操作栏</h2>

[en]: <> (Usage)
### 用法

[en]: <> (A top app bar can transform into a contextual action bar to provide contextual actions to selected items. For example, upon user selection of photos from a gallery, the top app bar transforms to a contextual app bar with actions related to the selected photos.)
顶部应用栏可以转换为上下文操作栏，以便为所选项目提供相关操作。例如，用户从相册中选择图片时，顶部应用栏可以转换为具有与所选照片相关的操作的上下文操作栏。

[en]: <> (When a top app bar transforms into a contextual action bar, the following changes occur:)
当顶部应用栏转换为上下文操作栏时，会发生以下变化：

[en]: <> (The bar color changes)
[en]: <> (Navigation icon is replaced with a close icon)
[en]: <> (Top app bar title text converts to contextual action bar text)
[en]: <> (Top app bar actions are replaced with contextual actions)
* 栏的颜色变化
* 导航图标被替换为关闭图标
* 顶部应用栏标题替换为上下文操作栏文本
* 顶部应用栏操作替换为上下文操作

[en]: <> (Upon closing, the contextual action bar transforms back into a top app bar.)
关闭后，上下文操作栏会转换回顶部应用栏。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/app-bars-top/topappbars-behavior-transformation.mp4" src="{assets_path}/components/app-bars-top/topappbars-behavior-transformation.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Top app bar transforming into a contextual action bar)
顶部应用栏转换为上下文操作栏

</figcaption></figure>

[en]: <> (Anatomy)
### 剖析

<figure>

![]({assets_path}/components/app-bars-top/topappbars-contextualactionbar-elements.png)

</figure>

[en]: <> (Close button \(instead of a navigation icon\))
[en]: <> (Contextual title)
[en]: <> (Contextual actions)
[en]: <> (Overflow menu \(optional\))
1. 关闭按钮（替换了导航图标）
2. 上下文标题
3. 上下文操作
4. 弹出菜单（可选）

[en]: <> (Bar)
#### 栏

[en]: <> (When a top app bar transforms into a contextual action bar, the bar should change color to indicate a change of state.)
当顶部应用栏转换为上下文操作栏时，栏应该更改颜色，以表明状态变化。

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (Mobile)
### 移动端

[en]: <> (Regular top app bar)
#### 常规型顶部应用栏

<figure>

![]({assets_path}/components/app-bars-top/spec-topappbar-mobile-regular.png)

</figure>

[en]: <> (Extended top app bar)
#### 凸现型顶部应用栏

<figure>

![]({assets_path}/components/app-bars-top/spec-topappbar-mobile-extended.png)

</figure></div>
