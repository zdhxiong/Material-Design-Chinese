<div class="article__intro">

[en]: <> (App bars: bottom)
# 应用栏：底部

[en]: <> (A bottom app bar displays navigation and key actions at the bottom of mobile screens.)
底部应用栏用于在屏幕底部显示导航和关键操作，它专为移动设备设计。

<figure>

![]({assets_path}/components/app-bars-bottom/bottom-app-bar-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [行为](#behavior)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Bottom app bars provide access to a bottom navigation drawer and up to four actions, including the floating action button.)
底部应用栏用于放置底部导航抽屉，且最多只能包含 4 个操作（包含浮动操作按钮）。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/bottom-app-bar-illos-01.png)

</figure>

[en]: <> (Actionable)
#### 可操作

[en]: <> (Bottom app bars highlight important screen actions and raise awareness of the floating action button.)
底部应用栏突出显示了重要的操作，且提升了用户对浮动操作按钮的意识。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/bottom-app-bar-illos-02.png)

</figure>

[en]: <> (Flexible)
#### 灵活

[en]: <> (A bottom app bar’s layout and actions change based on the needs of the screen.)
底部应用栏的布局和操作可以根据屏幕的需要而改变。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/bottom-app-bar-illos-03.png)

</figure>

[en]: <> (Ergonomic)
#### 符合人体工程学

[en]: <> (The bottom app bar is easy to reach from a handheld position on a mobile device.)
用户手握移动设备时，底部应用栏很容易被触及。

</div></div>

[en]: <> (When to use)
### 何时使用

[en]: <> (Bottom app bars should be used for:)
底部应用栏应该用于：

[en]: <> (Mobile devices only)
[en]: <> (Access to a bottom navigation drawer)
[en]: <> (Screens with two to five actions)
* 仅用于移动设备
* 访问底部导航抽屉
* 包含 2 - 4 个操作

[en]: <> (Bottom app bars shouldn’t be used for:)
底部应用栏不应该用于：

[en]: <> (Apps with a bottom navigation bar)
[en]: <> (Screens with one or no actions)
* 包含底部导航栏的应用
* 没有操作或只有一个操作时

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/usage-when-do.png)

<figcaption>

{do}

[en]: <> (Use a bottom app bar to provide convenient access to actions.)
使用底部应用栏可以便捷地访问操作。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/usage-when-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use a bottom app bar on screens with one or no actions \(other than a FAB\).)
只有一个操作、或没有操作时（浮动操作按钮除外），不要使用底部应用栏。

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

[en]: <> (Bottom app bars can contain actions that apply to the context of the current screen. They include a navigation menu control on the far left and a floating action button \(when one is present\). If included in a bottom app bar, an overflow menu control is placed at the end of other actions.)
底部应用栏可以包含适用于当前屏幕的操作。包含最左侧的导航抽屉控件和浮动操作按钮。如果需要弹出菜单的话，则把弹出菜单控件放在最右侧。

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-elements.png)

</figure>

[en]: <> (Container)
[en]: <> (Navigation drawer control)
[en]: <> (Floating action button \(FAB\))
[en]: <> (Action icon)
[en]: <> (Overflow menu control)
1. 容器
2. 导航抽屉控件
3. 浮动操作按钮
4. 操作图标
5. 弹出菜单控件

[en]: <> (Positioning)
### 定位

[en]: <> (Bottom app bars have three different layouts based on the presence of a FAB and its position in the bar. These layouts dictate the number of actions that can be included in the bar.)
底部应用栏有三种不同的布局，取决于是否存在浮动操作按钮，以及浮动操作按钮的位置。这些布局决定了底部应用栏可以包含的操作数量。

[en]: <> (Centered FAB)
#### 居中的浮动操作按钮

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-center.png)

<figcaption>

{do}

[en]: <> (Use bottom app bars on home screens that feature a navigation menu control and a prominent action \(such as a FAB\). A minimum of one and a maximum of two additional actions can be placed on the opposite side of the bar.)
在主屏幕上使用底部应用栏，其中包含导航抽屉控件和一个主要操作（例如浮动操作按钮）。在最右侧可以放置最少一个、最多两个附加操作。

</figcaption></figure>

[en]: <> (End FAB)
#### 右对齐的浮动操作按钮

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-right.png)

<figcaption>

{do}

[en]: <> (Use a FAB on secondary screens that require a floating action button and three to four additional actions.)
在次级屏幕中使用浮动操作按钮，需要一个浮动操作按钮和三到四个附加操作。

</figcaption></figure>

[en]: <> (No FAB)
#### 不存在浮动操作按钮

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-none.png)

<figcaption>

{do}

[en]: <> (When no floating action button is needed, the bottom app bar can accommodate a navigation menu icon and up to four actions aligned on the opposing edge.)
当不需要浮动操作按钮时，底部应用栏可以容纳导航抽屉图标和最多四个右对齐的操作。

</figcaption></figure>

[en]: <> (Landscape)
#### 横屏

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-landscape.png)

<figcaption>

{do}

[en]: <> (In landscape orientation, actions remain aligned to screen edges for easy handheld access)
设备横屏时，操作按钮需要与屏幕边缘对齐，以便于手持访问。

</figcaption></figure>

[en]: <> (Floating Action Button)
### 浮动操作按钮

[en]: <> (When present, floating action buttons \(FABs\) are displayed on bottom app bars in one of two ways:)
当存在浮动操作按钮时，浮动操作按钮将以以下任一方式显示在底部应用栏上：

[en]: <> (*Overlap*: The FAB is at a higher elevation than the bottom app bar, and has no effect on the bar’s shape.)
[en]: <> (*Inset*: The FAB is at the same elevation as the bottom app bar, and the bar shape transforms to let the FAB dock in a notch carved into the bottom app bar.)
* *重叠*：浮动操作按钮位于比底部应用栏海拔更高的位置，且对应用栏的形状不会产生影响。
* *内嵌*：浮动操作按钮和底部应用栏处于同一海拔高度，且应用栏形状发生转换，使浮动操作按钮放置在应用栏的凹槽中。

[en]: <> (Use an inset to increase the visual prominence of a FAB or accentuate customized element shapes. Refer to the *Theming* section for more guidance on inset FAB’s in a bottom app bar.)
使用内嵌来突出浮动操作按钮的视觉重要性、或突出自定义元素的形状。你可以阅读“主题”章节，来获取更多关于在底部应用栏中内嵌浮动操作按钮的指导。

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-overlap.png)

<figcaption>

[en]: <> (Overlapping FAB)
重叠的浮动操作按钮

</figcaption></figure><figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-cut.png)

<figcaption>

[en]: <> (Inset FAB)
内嵌的浮动操作按钮

</figcaption></figure><figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-dont.png)

<figcaption>

{dont}

[en]: <> (Do not place a FAB outside of a bottom app bar, as it makes it harder to reach.)
不要把浮动操作按钮放在底部应用栏之外，因为这会导致用户难以触及。

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Layout)
### 布局

[en]: <> (To support the intent of different sections of an app, the layout and actions of a bottom app bar can be changed to suit each screen.)
可以调整底部应用栏中的布局和操作，以便更好的体现应用各个界面的作用。

[en]: <> (For example, screens can display more or fewer actions according to what suits the screen content best.)
例如，可以根据当前界面的内容来增加或减少操作按钮。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/app-bars-bottom/behavior-layout-primary.mp4" src="{assets_path}/components/app-bars-bottom/behavior-layout-primary.mp4" type="video/mp4">
</video><figcaption>

[en]: <> (To showcase a primary action, this bottom app bar uses the centered FAB layout on its home screen. When viewing a message, the bottom app bar layout changes to the “End FAB” layout to accommodate additional contextual actions.)
在主界面上，为了凸显主操作，底部应用栏使用了居中的 FAB 布局。当阅读某条消息时，底部应用栏改成了使用右对齐的 FAB 布局，以便适应当前界面的内容。

</figcaption></figure>

[en]: <> (Scrolling)
### 滚动

[en]: <> (Upon scroll, the bottom app bar can appear or disappear:)
滚动时，底部应用栏可以显示或隐藏：

[en]: <> (*Scrolling downward* hides the bottom app bar. If a FAB is present, it detaches from the bar and remains on screen.)
[en]: <> (*Scrolling upward* reveals the bottom app bar, and reattaches to a FAB if one is present.)
* *向下滚动*时隐藏底部应用栏。如果存在 FAB，FAB 将脱离底部应用栏，并保留在屏幕上。
* *向上滚动*时显示底部应用栏。如果存在 FAB，FAB 将重新合并到底部应用栏上。

[en]: <> (A bottom app bar can contain a shape, such as a notch, along its edge to accommodate the FAB. As the bar detaches from the FAB, the bar returns to its default shape. Upon returning to the screen and reattaching to the FAB, the bar regains its notched shape.)
底部应用栏可以包含一个特殊的形状（例如凹槽）来容纳 FAB。当应用栏和 FAB 分离时，应用栏会恢复成默认形状。当应用栏回到屏幕中时，会重新和 FAB 合并，并恢复凹槽形状。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/app-bars-bottom/behavior-scroll.mp4" src="{assets_path}/components/app-bars-bottom/behavior-scroll.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A FAB can remain on screen, even as a bottom app bar hides when scrolled off-screen.)
即使底部应用栏在滚动时隐藏了，FAB 仍然可以留在屏幕上。

</figcaption></figure>

[en]: <> (Elevation)
### 海拔高度

[en]: <> (The bottom app bar has an elevation of 8dp. When paired with a FAB, the FAB’s resting and raised heights should be increased to remain visible above the bottom app bar.)
底部应用栏的海拔高度为 8dp。当与 FAB 配合使用时，应该增加 FAB 的海拔高度，以便 FAB 能在底部应用栏上方，并保持可见。

<figure>

![]({assets_path}/components/app-bars-bottom/behavior-elevation-section.png)

<figcaption>

[en]: <> (Content \(0dp\))
[en]: <> (Snackbar \(6dp\))
[en]: <> (Bottom app bar \(8dp\))
[en]: <> (Floating action button \(12dp resting\))
[en]: <> (Bottom navigation drawer \(16dp\))
* 内容（0dp）
* Snackbar（6dp）
* 底部应用栏（8dp）
* 浮动操作按钮（12dp 静止状态）
* 底部导航抽屉（16dp）

</figcaption></figure>

[en]: <> (Menus that are generated by the bottom app bar \(such as a bottom navigation drawer or overflow menu\) open as bottom sheets at a higher elevation than the bar.)
由底部应用栏触发的菜单（例如底部导航抽屉或弹出菜单），会在比应用栏更高的海拔位置作为底部卡片打开。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/app-bars-bottom/behavior-drawer.mp4" src="{assets_path}/components/app-bars-bottom/behavior-drawer.mp4" type="video/mp4"></video><figcaption>

[en]: <> (This bottom navigation drawer opens from a bottom app bar. The drawer opens in front of the bottom app bar, and displays a top app bar to close the drawer when it reaches full height.)
此底部导航抽屉由底部应用栏触发打开。抽屉在底部应用栏的上方打开，并显示了一个顶部应用栏，以便在抽屉全屏显示时，可以点击顶部应用栏中的关闭按钮直接关闭抽屉。

</figcaption></figure>

[en]: <> (Elements that cover the bottom app bar)
#### 可以覆盖底部应用栏的元素

[en]: <> (The bottom app bar can be covered by keyboards and other temporary surfaces. If your app requires frequent obstruction of the bar, another component should be used instead.)
底部应用栏可以被键盘和其他临时元素覆盖。如果你的应用需要频繁地干扰应用栏，则应该使用其他组件代替底部应用栏。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/behavior-keyboard-do.png)

<figcaption>

{do}

[en]: <> (A keyboard can temporarily cover a bottom app bar.)
键盘可以暂时覆盖底部应用栏。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/behavior-keyboard-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t attach a bottom app bar to the top of the keyboard.)
不要把底部应用栏连接到键盘顶部。

</figcaption></figure></div></div>

[en]: <> (Placement)
### 位置

[en]: <> (Navigation)
#### 导航

[en]: <> (A bottom app bar can display a navigation menu icon to open a bottom navigation drawer, but the bar doesn’t contain any navigation actions itself \(such as Up navigation to a home screen or a close icon\). App navigation should be placed in another component such as a top app bar, or embedded on-screen.)
底部应用栏可以显示一个导航菜单图标，以打开底部导航抽屉，但底部应用栏本身不能包含任何导航操作（例如向上导航到主屏幕、或显示关闭图标）。应用的导航应该放在其他组件中，例如顶部应用栏、或内嵌在屏幕上。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/placement-navigation-do.png)

<figcaption>

{do}

[en]: <> (Provide navigation outside of a bottom app bar that allows users to return to the previous app screen.)
在底部应用栏外部提供导航按钮，使用户能返回到之前的界面。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/placement-navigation-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t place navigation actions in a bottom app bar, as they can be covered by temporary surfaces.)
不要把导航按钮放在底部应用栏中，因为底部应用栏可以被其他临时元素覆盖。

</figcaption></figure></div></div>

[en]: <> (Pairing with a top app bar)
#### 和顶部应用栏配合使用

[en]: <> (When used with a bottom app bar, top app bars can provide upwards navigation and additional actions. Throughout an app, actions should be organized and divided consistently across both bars.)
当顶部应用栏和底部应用栏一起使用时，顶部应用栏可以提供向上导航按钮和其他操作按钮。在整个应用中，操作按钮应该在两个应用栏上统一地进行组织归类。

[en]: <> (The following items benefit from specific placement:)
以下项目更适合放置在特定的位置：

[en]: <> (Place a single navigation menu control in a bottom app bar \(for reachability\))
[en]: <> (Place a single overflow menu control as the trailing action)
[en]: <> (Place actions, like Search, in a consistent location throughout the app)
[en]: <> (Place destructive actions, such as “Delete,” in the top app bar)
* 将单个导航菜单放在底部应用栏中（出于可达性）
* 将单个弹出菜单作为应用栏的最后一个操作按钮
* 将全局操作（例如搜索）放在整个应用中的固定位置
* 将破坏性的操作（例如删除），放在顶部应用栏中

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/placement-top-app-bar-do.png)

<figcaption>

{do}

[en]: <> (Use a top app bar as a container for upwards navigation on secondary screens.)
使用顶部应用栏作为容器，以便在副界面上向上导航。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/placement-top-app-bar-dont.png)

<figcaption>

{dont}

[en]: <> (On a home screen, don’t place a navigation menu control in both a top and bottom app bar. Only one app bar should have this control.)
在主界面上，不要同时在顶部应用栏和底部应用栏上放置导航菜单控件。只能有一个应用栏可以有该控件。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/placement-top-app-bar-bottom-primary.png)

<figcaption>

{do}

[en]: <> (Place an overflow menu as the last action between the app bars.)
把弹出菜单作为应用栏中的最后一个操作按钮。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/app-bars-bottom/placement-top-app-bar-bottom-fixed.png)

<figcaption>

{do}

[en]: <> (A bottom app bar can provide consistent access to actions, such as navigation and search, allowing the top app bar to hold contextual, screen-specific actions.)
底部应用栏可以提供全局统一的操作，例如导航和搜索；顶部应用栏可以提供和当前界面相关的操作。

</figcaption></figure></div></div>

[en]: <> (Snackbars)
#### Snackbar

[en]: <> (To avoid obstruction, snackbars and toasts should animate in place vertically above a bottom app bar. Refer to [Snackbars]\(https://www.mdui.org/design/components/snackbars.html\) for more guidance on its layout and positioning.)
为了避免底部应用栏被挡住，snackbar 和 toast 应该在底部应用栏垂直位置的上方显示。关于其布局和定位的更多信息，请参阅 [Snackbar](https://www.mdui.org/design/components/snackbars.html)。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/app-bars-bottom/placement-snackbar-do.mp4" src="{assets_path}/components/app-bars-bottom/placement-snackbar-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Inset a snackbar or toast above a bottom app bar and FAB.)
在底部应用栏和 FAB 的上方插入一个 snackbar 或 toast。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/app-bars-bottom/placement-snackbar-dont.mp4" src="{assets_path}/components/app-bars-bottom/placement-snackbar-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t place a snackbar in front of a bottom app bar or FAB.)
不要在底部应用栏或 FAB 的前面显示 snackbar。

</figcaption></figure></div></div>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (Mobile portrait)
### 竖屏时的移动端

[en]: <> (Bottom app bars are a mobile-only component and are not applicable for tablet or desktop use.)
底部应用栏是一个专门为移动端设计的组件，不适用于平板电脑和桌面设备。

[en]: <> (Minimum 1, maximum of 2 actions aligned to opposite edge of navigation menu)
在导航菜单的另一边，可以有最少 1 个，最多 2 个操作按钮

[en]: <> (FAB Center)
#### FAB 位于底部应用栏中间

<figure>

![]({assets_path}/components/app-bars-bottom/spec-bottomappbar-fab-center.png)

</figure>

[en]: <> (FAB Center cut)
#### FAB 嵌入在底部应用栏中

<figure>

![]({assets_path}/components/app-bars-bottom/spec-bottomappbar-fab-cut.png)

</figure>

[en]: <> (FAB End)
#### FAB 位于底部应用栏右侧

[en]: <> (Minimum 2, maximum of 4 actions aligned to opposite edge of the FAB)
在 FAB 的另一边，可以有最少 2 个，最多 4 个操作按钮

<figure>

![]({assets_path}/components/app-bars-bottom/spec-bottomappbar-fab-right.png)

</figure>

[en]: <> (No FAB)
#### 不存在 FAB

[en]: <> (Minimum 2, maximum of 4 actions aligned on opposite edge of navigation menu)
在导航菜单的另一边，可以有最少 2 个，最多 4 个操作按钮

<figure>

![]({assets_path}/components/app-bars-bottom/spec-bottomappbar-fab-none.png)

</figure>

[en]: <> (Mobile landscape)
### 横屏时的移动端

[en]: <> (Bottom app bars are a mobile-only component and are not applicable for tablet or desktop use.)
底部应用栏是一个专门为移动端设计的组件，不适用于平板电脑和桌面设备。

[en]: <> (Minimum 1, maximum of 2 actions aligned to opposite edge of navigation menu)
在导航菜单的另一边，可以有最少 1 个，最多 2 个操作按钮

<figure>

![]({assets_path}/components/app-bars-bottom/spec-bottomappbar-landscape.png)

</figure></div>
