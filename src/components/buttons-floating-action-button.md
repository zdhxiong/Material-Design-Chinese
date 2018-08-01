<div class="article__intro">

[en]: <> (Buttons: floating action button)
# 浮动操作按钮

[en]: <> (A floating action button \(FAB\) represents the primary action of a screen.)
浮动操作按钮（FAB）表示界面中的主操作。

<figure>

![]({assets_path}/components/buttons-floating-action-button/intro-fab.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Placement)
[en]: <> (Behavior)
[en]: <> (Types of transitions)
[en]: <> (Extended FAB)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [位置](#placement)
* [行为](#behavior)
* [过渡类型](#types-of-transitions)
* [延长型 FAB](#extended-fab)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (A floating action button \(FAB\) performs the primary, or most common, action on a screen. It appears in front of all screen content, typically as a circular shape with an icon in its center. FABs come in three types: regular, mini, and extended.)
浮动操作按钮（FAB）用于执行界面中最主要、或最常见的操作。它出现在所有内容的前面，通常是圆形的，中间有一个图标。FAB 有三种类型：常规型、迷你型和展开型。

[en]: <> (Only use a FAB if it is the most suitable way to present a screen’s primary action.)
仅在 FAB 是最适合呈现界面中主操作的方式时，才使用 FAB。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-usage-do-email.png)

<figcaption>

{do}

[en]: <> (Represent the most common primary action with a floating action button, such as drafting a new email.)
使用浮动操作按钮表示最常用的主操作，例如写一封新邮件。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-usage-do-gallery.png)

<figcaption>

{do}

[en]: <> (FABs are not needed on every screen, such as when images represent primary actions.)
不是每个界面都需要 FAB，例如图片是主操作时，就不需要 FAB。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-usage-dont-contacts.png)

<figcaption>

{dont}

[en]: <> (Don’t display multiple FABs on a single screen.)
不要在一个界面中使用多个 FAB。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-usage-caution-maps.png)

<figcaption>

{caution}

[en]: <> (Occasionally two FABs can be used, if they perform distinct, yet equally important, actions.)
偶尔可以在一个界面中使用两个 FAB，前提是它们执行不同的、但有相同重要性的操作。

</figcaption></figure></div></div>

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-illos-03.png)

</figure>

[en]: <> (Primary)
#### 最主要的

[en]: <> (A FAB represents the primary action on a screen.)
FAB 表示界面中的主操作。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-illos-01.png)

</figure>

[en]: <> (Constructive)
#### 创造性的

[en]: <> (A FAB should perform a constructive action \(such as create, share, or explore\).)
FAB 应该执行创造性的操作（例如创建、共享或探索）。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-illos-02.png)

</figure>

[en]: <> (Contextual)
#### 相关的

[en]: <> (A FAB should be relevant to the screen on which it appears.)
FAB 应与其所在的界面相关。

</div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-elements.png)

</figure></div><div class="mdui-col">

[en]: <> (Container)
[en]: <> (Icon)
1. 容器
2. 图标

</div></div>

[en]: <> (Container)
### 容器

[en]: <> (The FAB is typically displayed in a circular container. An app’s color scheme determines its color fill, which should contrast with the area behind the FAB.)
FAB 通常显示在圆形容器中。它的填充色由应用的配色方案决定，且应该与 FAB 背后的区域形成鲜明对比。

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-iconsizes.png)

<figcaption>

[en]: <> (FAB containers come in two sizes:)
FAB 容器有两种尺寸：

[en]: <> (Default \(56 x 56dp\))
[en]: <> (Mini \(40 x 40dp\))
1. 默认（56 x 56dp）
2. 迷你（40 x 40dp）

</figcaption></figure>

[en]: <> (A mini FAB should be used on smaller screens. When a screen width is 460dp or less, the container of a default FAB \(56dp\) should transform into the mini size \(40dp\).)
迷你 FAB 应该用在较小的屏幕上。当屏幕宽度小于等于 460dp 时，默认的 FAB 容器（56dp）应该转换为迷你尺寸（40dp）。

[en]: <> (Mini FABs can also be used to create visual continuity with other screen elements.)
迷你 FAB 还可以用于与界面中其他元素建立视觉连续性。

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-minifab.png)

<figcaption>

[en]: <> (This mini FAB creates visual continuity by having a related size, shape, and placement to the folder icons below it.)
这个迷你 FAB 和其下方的文件夹图标拥有相似的尺寸、形状和位置，以此创建了视觉连续性。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-container-do.png)

<figcaption>

{do}

[en]: <> (FAB containers adopt a color from an app’s palette.)
FAB 使用应用配色方案中的颜色。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-container-dont-appbar.png)

<figcaption>

{dont}

[en]: <> (Don’t layer badges or other elements in front of a FAB.)
不要在 FAB 上添加徽章等元素。

</figcaption></figure></div></div>

[en]: <> (Icon)
### 图标

[en]: <> (A FAB’s icon should clearly illustrate its action. A FAB shouldn’t contain notifications or actions found elsewhere on a screen.)
FAB 的图标应该要清楚的表示其操作。FAB 不应该包含通知或界面上其他位置的操作。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-icon-dont-ambiguous.png)

<figcaption>

{dont}

[en]: <> (Don’t use ambiguous iconography.)
不要使用含糊不清的图标。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-icon-dont-text.png)

<figcaption>

{dont}

[en]: <> (Don’t place text in a regular FAB.)
不要在 FAB 中放置文本。

</figcaption></figure></div></div>

[en]: <> (Placement)
<h2 id="placement">位置</h2>

[en]: <> (FABs can attach to top app bars and the edge of some components.)
FAB 可以附加到顶部应用栏和某些组件的边缘。

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-tabletdesktop-do-topbar.png)

<figcaption>

{do}

[en]: <> (A floating action button \(FAB\) can attach to a top app bar.)
浮动操作按钮（FAB）可以附加到顶部应用栏。

</figcaption></figure><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-tabletdesktop-do-attachededgelayout.png)

<figcaption>

{do}

[en]: <> (A FAB can be attached to the edge of a component.)
FAB 可以附加到组件边缘。

</figcaption></figure><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-tabletdesktop-dont-cards.png)

<figcaption>

{dont}

[en]: <> (Individual components, such as cards, cannot each have their own FAB.)
单独的组件（例如卡片），不能各自拥有自己的 FAB。

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Actions)
### 操作

[en]: <> (A floating action button \(FAB\) can trigger an action either on the current screen, or it can perform an action that creates a new screen.)
浮动操作按钮（FAB）可以触发当前界面上的操作，也可以用于创建新界面。

[en]: <> (A FAB promotes an important, constructive action such as:)
FAB 应该表示一个重要的、创造性的操作，例如：

[en]: <> (Create)
[en]: <> (Favorite)
[en]: <> (Share)
[en]: <> (Start a process)
* 创建
* 喜欢
* 分享
* 开始一个过程

[en]: <> (Avoid using a FAB for minor or destructive actions, such as:)
不要使用 FAB 进行次要的、破坏性的操作，例如：

[en]: <> (Archive or trash)
[en]: <> (Alerts or errors)
[en]: <> (Limited tasks like cutting text)
* 存档或销毁
* 警告或错误
* 切割文本之类的受限任务

[en]: <> (Controls better suited to a toolbar \(like controls to adjust volume or font color\))
更适合放在工具栏中的控件（如调整音量或字体颜色的控件）

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-behavior-do-primaryactions.png)

<figcaption>

{do}

[en]: <> (Use FABs for primary, positive actions.)
使用 FAB 进行最主要的、积极的操作。

</figcaption></figure><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-behavior-dont-minoractions.png)

<figcaption>

{dont}

[en]: <> (Do not use FABs for minor, overflow, unclear, or destructive actions.)
FAB 不要用于次要的、弹出式的、不清楚的或破坏性的操作。

</figcaption></figure>

[en]: <> (Motion)
### 动效

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Appearing on screen)
#### 出现时

[en]: <> (When a FAB animates on screen, it expands outward from a central point. The icon within it may be animated as well.)
FAB 显示时，它会从中心向外展开。里面的图标也可能有动画效果。

[en]: <> (While FABs should be relevant to screen content, they aren’t attached to the surface on which content appears. FABs move separately from other UI elements because of their relative importance.)
虽然 FAB 应该与界面内容相关，但它不会附着在界面内容上。因为 FAB 的重要性，FAB 会独立于其他元素单独移动。

[en]: <> (Screen transitions)
#### 界面转换

[en]: <> (FABs can morph to launch related actions. When a screen changes its layout, the FAB should disappear and reappear during the transition.)
FAB 可以变形来启动相关操作。当界面布局变化时，FAB 在这期间应该先消失，然后再出现。

[en]: <> (Reappearance)
#### 重新出现时

[en]: <> (The FAB should only reappear if it’s relevant to the new screen. It should reappear in the same position, if possible.)
只有与新界面相关时，FAB 才会重新出现。FAB 应该尽量出现在原来的位置。

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/buttons-floating-action-button/fab-behavior-transition-v01.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-behavior-transition-v01.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Throughout this user flow the FAB location remains consistent.)
在整个操作流程中，FAB 始终保留在同一位置。

</figcaption></figure></div></div>

[en]: <> (Tabbed screens)
### 含标签页的界面

[en]: <> (When tabs are present, the FAB should briefly disappear, then reappear when the new content moves into place. This expresses that the FAB is not connected to any particular tab.)
如果存在标签页，在切换标签页时，FAB 应该暂时消失，在新标签页的动画结束后再重新出现。这表示 FAB 没有附着到任何一个特定的标签页上。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/buttons-floating-action-button/fab-layout-transition-do-v01.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-layout-transition-do-v01.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (When switching between tabs, FABs disappear and then reappear.)
在标签之间切换时，FAB 先消失然后再出现。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/buttons-floating-action-button/fab-layout-transition-dont-v01.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-layout-transition-dont-v01.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (When switching between tabs, FABs don’t move in unison with screen content.)
在标签之间切换时，FAB 不会跟着界面内容一起移动。

</figcaption></figure></div></div>

[en]: <> (Types of transitions)
<h2 id="types-of-transitions">过渡类型</h2>

[en]: <> (Speed dial)
### 快速拨号

[en]: <> (When pressed, a FAB can display three to six related actions in the form of a *speed dial*. This transition can occur in one of the following ways:)
按下 FAB 时，FAB 可以以*快速拨号*的形式显示 3 到 6 个相关操作。这种过渡可以通过以下方式之一进行：

[en]: <> (Upon press, the FAB can emit related actions)
[en]: <> (Upon press, the FAB can transform into a menu containing related actions \(Android only\))
* 按下后，FAB 可以触发相关操作
* 按下后，FAB 可以转换为包含相关操作的菜单（仅限 Android）

[en]: <> (If more than six actions are needed, something other than a FAB should be used to present them.)
如果需要显示超过 6 个操作，应该使用其他方式来呈现，不应该再使用 FAB。

[en]: <> (Emit related actions)
#### 触发相关操作

[en]: <> (Upon press, the FAB remains visible and emits a stack of related actions. If the FAB is tapped is pressed in this state, it should either initiate its default action or close the speed dial actions.)
按下后，FAB 仍然保持可见，并会触发一系列相关操作。如果在按下状态时再次点击 FAB，则应触发默认操作、或关闭快速拨号。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/buttons-floating-action-button/fab-toolbar-speeddial-v03.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-toolbar-speeddial-v03.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A FAB displays a stack of related actions.)
FAB 显示一系列相关操作。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-dont-1.png)

<figcaption>

{dont}

[en]: <> (A speed dial should include at least three options.)
快速拨号应该包含至少 3 个操作。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-dont-2.png)

<figcaption>

{dont}

[en]: <> (A speed dial should include no more than six options.)
快速拨号应该包含不超过 6 个操作。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-do-contacts.png)

<figcaption>

{do}

[en]: <> (A FAB can contain a list of contacts.)
FAB 可以包含联系人列表

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-do-labels.png)

<figcaption>

{do}

[en]: <> (Related actions can have text labels.)
相关操作可以包含文本标签。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-dont-unrelated.png)

<figcaption>

{dont}

[en]: <> (A FAB shouldn’t transform into unrelated actions.)
FAB 不应该转换为不相关的操作。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-dont-overflow.png)

<figcaption>

{dont}

[en]: <> (Speed dial options shouldn’t include an overflow menu.)
快速拨号中不应该包含弹出菜单。

</figcaption></figure></div></div>

[en]: <> (Transform into a menu with the related actions)
#### 转换为包含相关操作的菜单

[en]: <> (Upon press on Android, the FAB can transform into a menu containing related actions. A scrim indicates that functionality outside of the action menu is temporarily disabled. The menu remains on-screen until an action, or the scrim, is tapped.)
在 Android 上，按下 FAB 后，FAB 可以转换为包含相关操作的菜单。显示遮罩表示暂时禁用了菜单之外的功能。在点击菜单项、或点击遮罩之前，菜单会保留在界面上。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/buttons-floating-action-button/fab-transitions-menu-1.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-transitions-menu-1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A FAB transforming into an action menu)
FAB 转换为菜单

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-menu-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use an action menu with fewer than three options.)
不要使用少于 3 个选项的菜单。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-menu-dont-2.png)

<figcaption>

{dont}

[en]: <> (An action menu shouldn’t include more than six options, as action menus don’t support scrolling.)
菜单不应包含超过 6 个选项，因为菜单不支持滚动。

</figcaption></figure></div></div>

[en]: <> (Morph)
### 变形

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (The FAB can transform into another surface in an app. Morphing should be reversible and transform the new surface back into the FAB.)
FAB 可以转换成其他界面。FAB 的变形是可逆的，可以将新界面转换回 FAB。

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/buttons-floating-action-button/fab-morph-v1.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-morph-v1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A FAB can morph into a surface that is part of the app structure.)
FAB 可以变形成应用结构中的其他界面。

</figcaption></figure></div></div>

[en]: <> (Full screen)
### 全屏

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (The FAB can transform into a new surface that spans the entire screen. This type of transformation is typically for creating new content.)
FAB 可以转换为全屏界面。这种类型的转换通常用于发表新内容。

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/buttons-floating-action-button/fab-toolbar-fullscreen-v06.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-toolbar-fullscreen-v06.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A FAB can transform into a new surface that spans the entire screen.)
FAB 可以转换为全屏界面。

</figcaption></figure></div></div>

[en]: <> (Extended FAB)
<h2 id="extended-fab">延长型 FAB</h2>

[en]: <> (The extended FAB is wider, and it includes a text label.)
延长型 FAB 更宽，它包含文本标签。

<figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-01.png)

<figcaption>

[en]: <> (Extended FAB)
延长型 FAB

</figcaption></figure>

[en]: <> (Anatomy)
### 剖析

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-layout-elements.png)

</figure></div><div class="mdui-col">

[en]: <> (Container)
[en]: <> (Icon \(optional\))
[en]: <> (Text label)
* 容器
* 图标（可选）
* 文本标签

</div></div>

[en]: <> (Container)
#### 容器

[en]: <> (The width of a extended FAB’s container can be fixed or fluid.)
延长型 FAB 的宽度可以是固定的，也可以是流式的。

[en]: <> (A fixed width container is defined by the cumulative width of the icon, text label, and padding.)
[en]: <> (A fluid width container is defined by its relationship to something else on screen, such as screen width or the layout grid.)
* 固定宽度的 FAB 的宽度由图标、文本标签和内边距决定。
* 流式宽度的 FAB 的宽度由它和界面中其他内容的关系决定，例如屏幕宽度或布局网格。

<figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-layout-fixed-center.png)

<figcaption>

[en]: <> (This fixed extended FAB’s width is defined by the cumulative width of the icon, text label, and container padding.)
这个固定宽度的延长型 FAB 的宽度由图标宽度、文本标签和内边距决定。

</figcaption></figure><figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-layout-fluid.png)

<figcaption>

[en]: <> (This extended FAB’s container width is defined by the layout grid columns.)
这个延长型 FAB 的宽度由网格布局的列宽度来决定。

</figcaption></figure>

[en]: <> (Icon)
#### 图标

[en]: <> (The icon of an extended FAB should intuitively represent its action.)
延长型 FAB 的图标应该直观地反映其对应的操作。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/extfab-left-to-right.png)

<figcaption>

[en]: <> (Icons should be placed to the left of text labels for left-to-right languages.)
对于 LTR 语言，图标应该放在左侧。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/extfab-right-to-left.png)

<figcaption>

[en]: <> (Icons should be placed to the right for right-to-left languages.)
对于 RTL 语言，图标应该放在右侧。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/extfab-noicon.png)

<figcaption>

{do}

[en]: <> (Unlike standard FABs, extended FABs don’t require an icon.)
和标准 FAB 不同，延长型 FAB 可以没有图标。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/extfab-icondont.png)

<figcaption>

{dont}

[en]: <> (An extended FAB can’t have an icon without a text label.)
延长型 FAB 不能仅包含图标，而没有文本标签。

</figcaption></figure></div></div>

[en]: <> (Text label)
#### 文本标签

[en]: <> (The text label of an extended FAB should describe its action.)
延长型 FAB 的文本标签应该描述其对应的操作。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-layout-dont1.png)

<figcaption>

{caution}

[en]: <> (Only truncate text if shorter text isn’t an option.)
只有在短文本不是操作项时才能截断文本。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-layout-dont2.png)

<figcaption>

{dont}

[en]: <> (Avoid wrapping text.)
文本不要换行。

</figcaption></figure></div></div>

[en]: <> (Placement)
### 位置

[en]: <> (The extended FAB can be positioned in the center, left, or right side of a screen.)
延长型 FAB 可以位于界面的中间、左侧或右侧。

[en]: <> (Desktop and tablet)
#### 桌面端和平板端

[en]: <> (For UIs larger than 840dp, such as desktop, the extended FAB should be placed at the top left of the screen, or at the bottom right of the screen.)
对于大于 840dp 的界面（例如桌面端），延长型 FAB 应该放在界面的左上角或右下角。

<figure>

![]({assets_path}/components/buttons-floating-action-button/desktopextfab1.png)

<figcaption>

[en]: <> (On desktop, the extended FAB placed at the top left)
在桌面端，延长型 FAB 位于左上角。

</figcaption></figure><figure>

![]({assets_path}/components/buttons-floating-action-button/desktopextfab2.png)

<figcaption>

[en]: <> (On desktop, the extended FAB placed at the bottom right)
在桌面端，延长型 FAB 位于右下角。

</figcaption></figure>

[en]: <> (Mobile)
#### 移动端

[en]: <> (On mobile, the extended FAB should be placed at the bottom right or bottom center.)
在移动端，延长型 FAB 应该放置在右下角或底部中间。

<figure>

![]({assets_path}/components/buttons-floating-action-button/extfabmobilecentered.png)

<figcaption>

[en]: <> (On mobile, the extended FAB placed at the bottom center)
在移动端，延长型 FAB 位于底部中间。

</figcaption></figure><figure>

![]({assets_path}/components/buttons-floating-action-button/extfabmobileright.png)

<figcaption>

[en]: <> (On mobile, the extended FAB placed at the bottom right)
在移动端，延长型 FAB 位于右下角。

</figcaption></figure><figure>

![]({assets_path}/components/buttons-floating-action-button/extfabbab.png)

<figcaption>

{caution}

[en]: <> (Avoid using an extended FAB above a bottom app bar, as the combination takes up a lot of screen space. If they are paired, the extended FAB should collapse on scroll.)
避免在底部应用栏上方使用延长型 FAB，因为这两者的组合会占用大量的屏幕空间。如果要同时使用这两者，则在滚动时，应该隐藏延长型 FAB。

</figcaption></figure>

[en]: <> (Behavior)
### 行为

[en]: <> (Speed dial)
#### 快速拨号

[en]: <> (The extended FAB can also display a speed dial of 3-6 related actions when tapped. On hover, these related actions expand to display labels.)
点击时，延长型 FAB 也可以显示包含 3-6 个相关操作的快速拨号。悬浮在相关操作上时，还会展开显示文本标签。

[en]: <> (During the speed dial transition, the extended FAB becomes a standard FAB.)
在快速拨号转换期间，延长型 FAB 会变成标准 FAB。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/buttons-floating-action-button/extended-fab-behavior-speeddial.mp4" src="{assets_path}/components/buttons-floating-action-button/extended-fab-behavior-speeddial.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Extended FAB speed dial)
延长型 FAB 的快速拨号

</figcaption></figure>

[en]: <> (Transformation to a standard FAB)
#### 转换为标准 FAB

[en]: <> (If space becomes limited, the extended FAB can transform into a standard FAB. For example, if an app viewport is resized below 840dp, or a navigation drawer opens up.)
如果空间变小，延长型 FAB 可以转换为标准 FAB。例如，如果应用的宽度调整为小于 840dp，或打开导航抽屉时。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/buttons-floating-action-button/extendedfab-desktop-transition.mp4" src="{assets_path}/components/buttons-floating-action-button/extendedfab-desktop-transition.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Extended FAB transforming into a standard FAB)
延长型 FAB 转换为标准 FAB

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (An extended FAB can transform into a standard FAB when a screen is scrolled.)
[en]: <> (The FAB should not return to an extended FAB until the user scrolls back to the top of the page.)
* 滚动时，延长型 FAB 可以转换为标准 FAB。
* 在滚动回页面顶部之前，FAB 不应恢复成延长型 FAB。

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/buttons-floating-action-button/efab-scroll.mp4" src="{assets_path}/components/buttons-floating-action-button/efab-scroll.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Extended FAB transforming into a standard FAB after the user scrolls to the top of the page)
在滚动到页面顶部后，标准型 FAB 转换成延长型 FAB。

</figcaption></figure></div></div>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (Floating action button)
### 浮动操作按钮

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Regular)
常规型

<figure>

![]({assets_path}/components/buttons-floating-action-button/specs-fab-default.png)

</figure></div><div class="mdui-col">

[en]: <> (Mini FAB)
迷你型

<figure>

![]({assets_path}/components/buttons-floating-action-button/specs-mini-fab.png)

</figure></div></div>

[en]: <> (Placement)
位置

<figure>

![]({assets_path}/components/buttons-floating-action-button/specs-fab-placement.png)

</figure>

[en]: <> (Extended floating action button)
### 延长型浮动操作按钮

<figure>

![]({assets_path}/components/buttons-floating-action-button/specs-extended-fab-default.png)

</figure>

[en]: <> (Placement)
#### 位置

<figure>

![]({assets_path}/components/buttons-floating-action-button/specs-extended-fab-placement.png)

</figure></div>
