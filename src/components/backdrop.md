<div class="article__intro">

[en]: <> (Backdrop)
# 背景板

[en]: <> (A backdrop appears behind all other surfaces in an app, displaying contextual and actionable content.)
在一个应用里，所有的界面后面都会有一个背景板，用于显示上下文和可操作的内容。

<figure>

![]({assets_path}/components/backdrop/backdrop-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Theming)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [行为](#behavior)
* [主题](#theming)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (A backdrop is composed of two surfaces: a back layer and a front layer. The back layer displays actions and context, and these control and inform the front layer’s content.)
背景板有两个面组成：背景层和前景层。背景层可以显示操作和上下文，并且可以控制前景层的内容，以及向前景层发送通知。

<figure>

![]({assets_path}/components/backdrop/usage-01.png)

<figcaption>

[en]: <> (Back layer)
[en]: <> (Front layer)
1. 背景层
2. 前景层

</figcaption></figure><figure>

![]({assets_path}/components/backdrop/usage-02.png)

<figcaption>

[en]: <> (When concealed, the back layer can provide contextual information about the front layer.)
[en]: <> (When revealed, the back layer displays contextual controls that relate to the front layer.)
1. 隐藏时，背景层可以提供和前景层相关的信息。
2. 显示时，背景层可以显示和前景层相关的控件。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/backdrop/usage-04.png)

<figcaption>

[en]: <> (Back layer content can be navigational, changing the content displayed on the front layer.)
可以在背景层中进行导航切换，更改前景层显示的内容。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/backdrop/usage-05.png)

<figcaption>

[en]: <> (Back layer content can filter front layer content.)
在背景层中，可以对前景层内容进行过滤筛选。

</figcaption></figure></div></div>

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/backdrop/background-illos-03.png)

</figure>

[en]: <> (Relevant)
#### 相关性

[en]: <> (The backdrop’s back layer is persistent, displaying controls and content that relate to the front layer.)
背景层是固定存在的，用于显示和前景层相关的内容和控件。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/backdrop/background-illos-01.png)

</figure>

[en]: <> (Immediate)
#### 随时可见

[en]: <> (The backdrop’s back layer can be accessed from any scroll position.)
不管滚动条滚动到什么位置，都可以访问背景层。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/backdrop/background-illos-02.png)

</figure>

[en]: <> (Contextual)
#### 上下文相关

[en]: <> (The backdrop focuses attention on one layer at a time.)
在同一时间内，用户的注意力只会被集中到背景板的其中一个层上。

</div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

[en]: <> (A backdrop consists of a back layer, a front layer, and an optional subheader. Either the back layer or the front layer can be active at a time.)
背景板由背景层、前景层、和可选的副标题组成。在同一时刻，背景层和前景层只能有一个处于激活状态。

<figure>

![]({assets_path}/components/backdrop/elements-01.png)

<figcaption>

[en]: <> (Back layer)
[en]: <> (Front layer)
[en]: <> (Subheader \(optional\))
1. 背景层
2. 前景层
3. 副标题（可选）

</figcaption></figure>

[en]: <> (Active front layer)
### 激活的前景层

[en]: <> (The front layer always appears in front of the back layer. It is displayed at full width and holds primary content.)
前景层始终出现在背景层的前面。它用于显示页面的主要内容，且始终全宽显示。

<figure>

![]({assets_path}/components/backdrop/nested-02.png)

<figcaption>

[en]: <> (The front layer can contain browsing components, such as:)
前景层可以包含阅读型组件，例如：

[en]: <> (Text lists)
[en]: <> (Image lists)
[en]: <> (Cards)
[en]: <> (Text)
1. 文本列表
2. 图片列表
3. 卡片
4. 文本

</figcaption></figure><figure>

![]({assets_path}/components/backdrop/frontlayer-hide-reveal-001.png)

<figcaption>

[en]: <> (When the front layer is active, the backlayer contains a reveal affordance \(1\). Tapping this reveals the backlayer.)
当前景层激活时，背景层上会包含一个展开按钮（1），点击后会展开背景层。

</figcaption></figure>

[en]: <> (Subheader \(Optional\))
#### 副标题（可选）

[en]: <> (The subheader is a fixed area on the front layer that contains a title and optional iconography.)
副标题是前景层上的固定区域，包含一个标题、以及一个可选的图标。

<figure>

![]({assets_path}/components/backdrop/frontlayer-subheader.gif)

<figcaption>

[en]: <> (The subheader can be fixed in place, while content below it on the front layer scrolls independently.)
副标题固定在指定位置，前景层的其他内容可以独立滚动。

</figcaption></figure><figure>

![]({assets_path}/components/backdrop/primary-surface-01.png)

<figcaption>

[en]: <> (Both the subheader \(A\) and scrollable content area \(B\) on the front layer have an elevation of 1dp.)
前景层上的副标题（A）和滚动区域（B）都有 1dp 的海拔高度。

</figcaption></figure>

[en]: <> (Active back layer)
### 激活的背景层

[en]: <> (The back layer appears at the lowest elevation \(0dp\) in an app, filling the entire background. It holds actionable content that is relevant to the front layer.)
译文

<figure>

![]({assets_path}/components/backdrop/nested-01.png)

<figcaption>

[en]: <> (The back layer contains components for navigation or filtration, such as:)
译文

[en]: <> (Navigation)
[en]: <> (Steppers)
[en]: <> (Text fields)
[en]: <> (Selection controls)
1. 译文
2. 译文
3. 译文
4. 译文

[en]: <> (These components affect content on the front layer.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/backdrop/back-surface-01.png)

<figcaption>

[en]: <> (A: The elevation value for the backdrop’s back layer is 0dp.)
译文

</figcaption></figure>

[en]: <> (When the back layer is active, the front layer can contain text and iconography, or a scrim, as affordances that provide a way to conceal the back layer.)
译文

<figure>

![]({assets_path}/components/backdrop/elements-03.png)

<figcaption>

[en]: <> (Icon and text)
[en]: <> (Scrim)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Revealing the back layer)
### 译文

[en]: <> (To reveal the back layer, interact with any actions that appear on it.)
译文

<figure>

![]({assets_path}/components/backdrop/behavior-reveal-01.png)

<figcaption>

[en]: <> (This back layer can be revealed by tapping the menu icon \(1\).)
译文

</figcaption></figure><figure>

![]({assets_path}/components/backdrop/behavior-reveal-02-input.png)

<figcaption>

[en]: <> (This back layer can be revealed by tapping any input field \(1, 2, 3\).)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-reveal-swipe-dont.mp4" src="{assets_path}/components/backdrop/behavior-reveal-swipe-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t use the swipe gesture on the front layer to reveal the back layer.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-reveal.mp4" src="{assets_path}/components/backdrop/behavior-reveal.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When the back layer is revealed, the front layer slides out of view.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-backlayer-height.mp4" src="{assets_path}/components/backdrop/behavior-backlayer-height.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The height of the back layer is based on the size of its content.)
译文

</figcaption></figure></div></div>

[en]: <> (Concealing the back layer)
### 译文

[en]: <> (The back layer can be concealed by either interacting with the the front layer or tapping a conceal affordance on either layer.)
译文

<figure>

![]({assets_path}/components/backdrop/behavior-conceal-01.png)

<figcaption>

[en]: <> (This back layer can be concealed by tapping the back layer close icon \(1\), the entire front layer \(2\), or the front layer arrow \(3\).)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-conceal-tapfront.mp4" src="{assets_path}/components/backdrop/behavior-conceal-tapfront.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When the back layer is revealed, the front layer content becomes inactive. To conceal the back layer, tap either anywhere on the front layer or the back layer’s conceal affordance.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-conceal-tapbacklayericon.mp4" src="{assets_path}/components/backdrop/behavior-conceal-tapbacklayericon.mp4" type="video/mp4"></video><figcaption>

[en]: <> (To conceal the back layer when the front layer isn’t visible, tap the close affordance.)
译文

</figcaption></figure></div></div>

[en]: <> (Content scrolling)
### 译文

[en]: <> (Content on the front layer has different scrolling behaviors \(and restrictions\) than content on the back layer.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-scroll-do.mp4" src="{assets_path}/components/backdrop/behavior-scroll-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Content on the front layer can scroll horizontally.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-scrolloverlap-dont.mp4" src="{assets_path}/components/backdrop/behavior-scrolloverlap-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t let front layer content extend beyond its container, overlapping the back layer.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-scroll-subheader.mp4" src="{assets_path}/components/backdrop/behavior-scroll-subheader.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Use a subheader to scroll content vertically on the front layer.)
译文

</figcaption></figure></div><div class="mdui-col"><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-scroll-subheader-position.mp4" src="{assets_path}/components/backdrop/behavior-scroll-subheader-position.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When using a subheader, content on the front layer can retain its scroll position when the back layer is exposed.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-scroll-backcontent.mp4" src="{assets_path}/components/backdrop/behavior-scroll-backcontent.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (If the front layer is minimized, content on the back layer can scroll vertically.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/backdrop/behavior-scroll-backcontent-caution.mp4" src="{assets_path}/components/backdrop/behavior-scroll-backcontent-caution.mp4" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (Be careful when scrolling back layer content in a small area. Since the exposed backdrop is modal, expose as much content as possible.)
译文

</figcaption></figure></div></div>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Crane Material Theme)
### 译文

[en]: <> (This travel app’s backdrop has been customized using Material Theming. Areas of customization include color and shape.)
译文

<figure>

![]({assets_path}/components/backdrop/backdrop-crane-ahero.png)

<figcaption>

[en]: <> (Crane’s customized backdrop.)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Crane’s backdrop uses custom color on four elements: the back layer, the front layer, back layer icons, and front layer text.)
译文

<figure>

![]({assets_path}/components/backdrop/backdrop-crane-color.png)

</figure>

[en]: <> (Element           | Category     | Attribute          | Value)
[en]: <> (---------         |----------    |---------           |------)
[en]: <> (Back layer        | Primary      | Color<br>Opacity   | #5C1349<br>100%)
[en]: <> (Back layer icons  | On Primary   | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Front layer       | Surface      | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Front layer text  | On Surface   | Color<br>Opacity   | #000000<br>60%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Crane’s backdrop uses custom shapes on the top corners of the front layer.)
译文

<figure>

![]({assets_path}/components/backdrop/backdrop-crane-shape.png)

</figure>

[en]: <> (Element           | Attribute        | Value)
[en]: <> (---------         |----------        |---------)
[en]: <> (Front layer       | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner      | Rounded 16dp<br>Rounded 16dp<br>Rounded 0dp<br>Rounded 0dp)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shrine Material Theme)
### 译文

[en]: <> (Shrine is a retail app, and its backdrop has been customized using Material Theming. Areas of customization include color and shape.)
译文

<figure>

![]({assets_path}/components/backdrop/backdrop-shrine-ahero.png)

<figcaption>

[en]: <> (Shrine's customized backdrop)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Shrine's backdrop uses custom color on four elements: the back layer, back layer icons, the front layer, and front layer icons.)
译文

<figure>

![]({assets_path}/components/backdrop/backdrop-shrine-color.png)

</figure>

[en]: <> (Element           | Category     | Attribute          | Value)
[en]: <> (---------         |----------    |---------           |------)
[en]: <> (Back layer        | Primary      | Color<br>Opacity   | #FEDBD0<br>100%)
[en]: <> (Back layer icons  | On Primary   | Color<br>Opacity   | #442C2E<br>100%)
[en]: <> (Front layer       | Surface      | Color<br>Opacity   | #FFFBFA<br>100%)
[en]: <> (Front layer text  | On Surface   | Color<br>Opacity   | #442C2E<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Shrine’s backdrop uses a custom shape on the top left corner of the front layer.)
译文

<figure>

![]({assets_path}/components/backdrop/backdrop-shrine-shape.png)

</figure>

[en]: <> (Element           | Attribute        | Value)
[en]: <> (---------         |----------        |---------)
[en]: <> (Front layer       | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner      | Cut 32dp<br>Cut 0dp<br>Cut 0dp<br>Cut 0dp)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Mobile)
### 译文

<figure>

![]({assets_path}/components/backdrop/spec-backdrop-mobile-closed.png)

</figure><figure>

![]({assets_path}/components/backdrop/spec-backdrop-mobile-open.png)

</figure></div>
