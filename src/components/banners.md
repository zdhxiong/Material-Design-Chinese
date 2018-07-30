<div class="article__intro">

[en]: <> (Banners)
# 横幅

[en]: <> (A banner displays a prominent message and related optional actions.)
横幅用于显示重要消息和相关操作。

<figure>

![]({assets_path}/components/banners/banners-usage.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Placement)
[en]: <> (Behavior)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [位置](#placement)
* [行为](#behavior)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (A banner displays an important, succinct message, and provides actions for users to address \(or dismiss the banner\). It requires a user action to be dismissed.)
横幅用于显示重要的、简洁的信息，并为用户提供处理（或移除横幅）的操作。它需要用户主动操作才能被移除。

[en]: <> (Banners should be displayed at the top of the screen, below a top app bar. They are persistent and nonmodal, allowing the user to ignore them or interact with them at any time.)
横幅应该显示在界面顶部，顶部应用栏下方。横幅是固定的、非模态化的，用户可以随时移除它，或与它进行交互。

<figure>

![]({assets_path}/components/banners/banners-when-to-use.png)

<figcaption>

[en]: <> (Banners communicate messages which are important but don’t require user action. They are more prominent than snackbars, and less interruptive than dialogs.)
横幅向用户展示了重要的、且不需要用户操作的消息。

</figcaption></figure>

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/banners/alerts-illo-1.png)

</figure>

[en]: <> (Appropriately interruptive)
#### 适当的中断性

[en]: <> (Banners are interruptive, but their level of interruption should match the information they contain and the context in which they appear.)
横幅是中断性的，但它们的中断程度应该和它们包含的信息以及它们出现时的上下文相匹配。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/alerts-illo-2.png)

</figure>

[en]: <> (Clear)
#### 明确的

[en]: <> (Banners communicate a succinct message and what will happen if users interact with them.)
横幅传达了简洁的信息，以及告诉用户与它交互时会发生什么。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/alerts-illo-3.png)

</figure>

[en]: <> (Focused)
#### 有重点的

[en]: <> (Banners contain a single message and specific actions a user can take.)
横幅包含单条消息，以及用户可以执行的特定操作。

</div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

<figure>

![]({assets_path}/components/banners/banners-elements.png)

<figcaption>

[en]: <> (Supporting illustration \(optional\))
[en]: <> (Container)
[en]: <> (Text)
[en]: <> (Buttons)
1. 辅助图（可选）
2. 容器
3. 文本
4. 按钮

</figcaption></figure>

[en]: <> (Banner container)
### 横幅容器

[en]: <> (A banner container is rectangular, extending the full width of a layout. The container should be placed in a consistent and prominent location throughout an app, sharing the same elevation as screen content.)
横幅容器是矩形的，填满布局的整个宽度。容器应该放置在整个应用中统一且显眼的位置，拥有和界面内容相同的海拔高度。

[en]: <> (Only one banner should be shown at a time.)
同一时刻只能显示一个横幅。

<figure>

![]({assets_path}/components/banners/banners-container-mobile.png)

<figcaption>

[en]: <> (A banner appears above content and below a top app bar.)
横幅在内容上方，顶部应用栏下方。

</figcaption></figure><figure>

![]({assets_path}/components/banners/banners-layout-placement-dont.png)

<figcaption>

{dont}

[en]: <> (Only one banner should be shown at a time.)
同一时刻只能显示一个横幅。

</figcaption></figure>

[en]: <> (Banner message)
### 横幅消息

[en]: <> (The banner message communicates a change or error within an app.)
横幅消息用于传达应用的最新变更或错误。

[en]: <> (Banners should be considered as part of your overall in-app messaging strategy.)
应该将横幅视为整个应用中消息策略的一部分。

[en]: <> (Buttons)
### 按钮

[en]: <> (Buttons in banners should directly relate to a banner’s message and clearly represent the banner’s action. Buttons must be labelled with text, not icons, for clarity. Banners can contain up to two [text buttons]\(https://www.mdui.org/design/components/buttons.html#text-button,\) with the dismissive action placed on the left and the confirming action on the right.)
横幅中的按钮应该和横幅的消息相关，并清楚的表达横幅的操作。为清晰起见，按钮必须标有文字，不要用图标。横幅最多可以包含两个[文本按钮](https://www.mdui.org/design/components/buttons.html#text-button)，左侧按钮为驳回操作，右侧按钮为确认操作。

[en]: <> (Place buttons under the banner message, or on the same line if there is enough room to fit both.)
把按钮放在横幅消息下方，如果有足够的空间，则可以把按钮放在同一行。

<figure>

![]({assets_path}/components/banners/banners-buttons-do.png)

<figcaption>

{do}

[en]: <> (Banners may have one or two low-emphasis text buttons.)
横幅可以有一个或两个重要性不高的文本按钮。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-caution-1.png)

<figcaption>

{caution}

[en]: <> (Avoid using a single button as a way to acknowledge a banner and dismiss it. A button to dismiss a banner should be paired with an action to address its message.)
不要使用同一个按钮来确认并移除横幅。移除横幅的按钮应该要和确认按钮同时存在。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-do-2.png)

<figcaption>

{caution}

[en]: <> (Banners are intended to be minimally interruptive. If a button in a banner requires extra emphasis, a contained, full-width button can be used for a single, prominent action \(though it’s prominence may be distracting\).)
横幅旨在尽量减少干扰。如果横幅中的按钮需要进行额外的强调，可以使用着色的全宽按钮进行突出显示（尽管这样做可能会分散用户的注意力）。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-caution-2.png)

<figcaption>

{dont}

[en]: <> (Don’t include links in a banner message. All available actions should be represented as buttons.)
不要在横幅消息中包含链接。横幅中所有的操作都应该用按钮来表示。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t combine buttons with different emphasis levels, which could appear to promote one action over another.)
不要把具有不同强调级别的按钮组合在一起，这样做会导致一个按钮的重要性盖过另一个按钮。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-dont-3.png)

<figcaption>

{caution}

[en]: <> (Don’t stack buttons unless there isn’t sufficient room to display them side by side.)
不要垂直堆叠按钮，除非没有足够的空间并排显示两个按钮。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use a close affordance icon as the only method of dismissing a banner. All actions should be shown as text buttons.)
不要使用关闭图标来移除横幅。横幅中的所有操作都应该以文本按钮的形式显示。

</figcaption></figure></div></div>

[en]: <> (Supporting illustration)
### 辅助图

[en]: <> (Banners can supplement their message using a supporting illustration.)
横幅中可以添加辅助图来补充信息。

<figure>

![]({assets_path}/components/banners/banners-imagery.png)

<figcaption>

{do}

[en]: <> (Icons can help communicate a banner’s message.)
图标可以帮助传达横幅的消息。

</figcaption></figure><figure>

![]({assets_path}/components/banners/banners-imagery-dont.png)

<figcaption>

{dont}

[en]: <> (An icon used as an illustration can be ambiguous and make a banner too prominent in a layout. Illustrations support the banner message and aren’t the primary method of communication.)
用作插图的图标不够明确，并且在横幅中太过突出。横幅中可以使用插图，但插图不是主要的消息表达方式。

</figcaption></figure>

[en]: <> (Placement)
<h2 id="placement">位置</h2>

[en]: <> (Banners should be placed at the top of a layout or screen. When scrolling, banners typically move with content and scroll off the screen. Only one banner should be shown at a time.)
横幅应该放置在布局或界面的顶部。滚动时，横幅通常会随着内容滚动，可以随着内容一起滚动到屏幕外面。同一时刻只能显示一个横幅。

[en]: <> (Banners and top bars)
### 横幅和顶部应用栏

[en]: <> (Banners are placed at the top of the screen below the top app bar. They can be fixed, or scroll with content, depending on the environment:)
横幅放在界面顶部，顶部应用栏下方。它们可以固定显示，也可以随着内容一起滚动，具体取决于所处环境：

[en]: <> (On mobile, they scroll off-screen with content, at the same elevation as app content.)
[en]: <> (On desktop, they remain fixed at the top of the screen, at the same elevation as the top app bar.)
* 在移动端，它们会随着内容一起滚动，与应用内容处于同一海拔高度。
* 在桌面端，它们固定在界面顶部，不随内容滚动，与顶部应用栏处于同一海拔高度。

<figure>

![]({assets_path}/components/banners/banners-layout-placement.png)

<figcaption>

[en]: <> (Banner and a top bar)
横幅和顶部应用栏

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-layout-topbar-dont-1.png)

<figcaption>

{dont}

[en]: <> (The surface containing a banner should be clearly distinguished from the top app bar surface.)
横幅应该和顶部应用栏有明确的区分。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-layout-topbar-dont-2.png)

<figcaption>

{dont}

[en]: <> (Banners shouldn’t appear in front of the top bar.)
横幅不能覆盖住顶部应用栏。

</figcaption></figure></div></div>

[en]: <> (Banners and persistent search)
### 横幅和固定搜索条

[en]: <> (When a banner appears with a persistent search bar, it’s placed below the search bar.)
当横幅和固定搜索条同时出现时，横幅在搜索条下方。

<figure>

![]({assets_path}/components/banners/banners-layout-placement-persistent-search.png)

<figcaption>

[en]: <> (A banner appears below a persistent search bar.)
横幅显示在固定搜索条下方。

</figcaption></figure>

[en]: <> (Banners and bottom navigation)
### 横幅和底部导航

[en]: <> (When bottom navigation is present, banners should remain at the top of the screen.)
当存在底部导航时，横幅应始终保留在界面顶部。

<figure>

![]({assets_path}/components/banners/banners-placement-bottomnav.png)

<figcaption>

[en]: <> (Banners appear at the top of the screen when bottom navigation is present.)
当存在底部导航时，横幅应始终保留在界面顶部。

</figcaption></figure>

[en]: <> (Banners in wide layouts)
### 较宽的布局中的横幅

[en]: <> (Banners in wide layouts span the entire width of the screen. They appear at the same elevation as the top app bar and remain on screen while content scrolls.)
在较宽的布局中，横幅横跨整个屏幕宽度。它们和顶部应用栏具有相同的海拔高度，并在内容滚动时保留在固定位置，不随内容滚动。

<figure>

![]({assets_path}/components/banners/banners-placement-desktop.png)

<figcaption>

[en]: <> (A banner in a wide layout appears at the same elevation as the top app bar.)
在较宽的布局中，横幅具有和顶部应用栏相同的海拔高度。

</figcaption></figure>

[en]: <> (When vertical navigation is present, banners can appear above content rather than across the full width of the screen.)
当存在垂直导航时，横幅可以显示在内容上方，而不是横跨整个屏幕宽度。

<figure>

![]({assets_path}/components/banners/banners-placement-desktop-rails.png)

<figcaption>

[en]: <> (A banner on a screen with a navigation drawer appears slightly above just the content \(on the y-axis\), at the same elevation as that content.)
在含有导航抽屉的界面上，横幅处于略高于内容的位置（在 Y 轴上），和内容处于同一海拔高度。

</figcaption></figure><figure>

![]({assets_path}/components/banners/banners-placement-multiple-dont.png)

<figcaption>

{dont}

[en]: <> (Avoid stacking multiple banners.)
不要堆叠多个横幅。

</figcaption></figure>

[en]: <> (Banners and pannable content)
### 横幅和可平移内容

[en]: <> (Banners remain on screen when scrolling pannable content.)
在可平移内容移动时，横幅在界面上保持不动。

<figure>

![]({assets_path}/components/banners/banners-layout-placement-3.png)

<figcaption>

[en]: <> (Banners remain on screen when scrolling pannable content, such as a map.)
在可平移内容移动时（例如地图），横幅在界面上保持不动。

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Appearing)
### 出现

[en]: <> (Banners typically appear when a screen loads content.)
横幅通常在内容加载完后出现。

[en]: <> (Banners that appear after a screen loads should animate on screen from the top of a layout. If the banner is at the same elevation as content, it pushes content downwards.)
界面内容加载完后，横幅应该以动画的形式从屏幕顶部进入。如果横幅和界面内容处于同一海拔高度，它会把界面内容向下推。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/banners/banner-container-mobile.mp4" src="{assets_path}/components/banners/banner-container-mobile.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Banners at the same elevation as content push content downward as they enter from the top of a layout.)
和内容具有相同海拔高度的横幅从顶部进入界面时，会把内容向下推。

</figcaption></figure>

[en]: <> (Dismissing banners)
### 移除横幅

[en]: <> (Banners must remain on screen until dismissed by the user.)
横幅必须保留在界面上，直到被用户主动移除。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/banners/banner-change-dismiss.mp4" src="{assets_path}/components/banners/banner-change-dismiss.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Banners can be dismissed by the user.)
横幅可以被用户移除。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/banners/banner-change-condition02.mp4" src="{assets_path}/components/banners/banner-change-condition02.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Banners persist until the user acts on them or dismisses them.)
横幅会持续显示，直到用户移除它们、或执行了横幅上的操作。

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (Mobile)
### 移动端

<figure>

![]({assets_path}/components/banners/spec-banners-mobile-1action.png)

</figure><figure>

![]({assets_path}/components/banners/spec-banners-mobile-2actions.png)

</figure><figure>

![]({assets_path}/components/banners/spec-banners-mobile-image.png)

</figure>

[en]: <> (Desktop)
### 桌面端

<figure>

![]({assets_path}/components/banners/spec-banners-desktop-1action.png)

</figure><figure>

![]({assets_path}/components/banners/spec-banners-desktop-2actions.png)

</figure><figure>

![]({assets_path}/components/banners/spec-banners-desktop-image.png)

</figure></div>
