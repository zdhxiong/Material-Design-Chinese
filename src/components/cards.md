<div class="article__intro">

[en]: <> (Cards)
# 卡片

[en]: <> (Cards contain content and actions about a single subject.)
卡片包含了一个主题的内容和操作。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-intro.mp4" src="{assets_path}/components/cards/cards-intro.mp4" type="video/mp4"></video></figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Actions)
[en]: <> (Card collections)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [行为](#behavior)
* [操作](#actions)
* [卡片集](#card-collections)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Cards are surfaces that display content and actions on a single topic.)
卡片用于显示一个主题的内容和操作。

[en]: <> (They should be easy to scan for relevant and actionable information. Elements, like text and images, should be placed on them in a way that clearly indicates hierarchy.)
卡片的内容和可操作信息应该要便于快速浏览。卡片上的文本和图片等元素应该要有清晰的层次结构。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/cards/illo-cards-intro.png)

<figcaption>

[en]: <> (Contained)
#### 可包含

[en]: <> (A card is identifiable as a single, contained unit.)
卡片是一个单独的可包含内容的单元。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/cards/illo-cards-independent.png)

<figcaption>

[en]: <> (Independent)
#### 独立的

[en]: <> (A card can stand alone, without relying on surrounding elements for context.)
卡片可以独立存在，不需要依赖于周围的元素。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/cards/illo-cards-cut.png)

<figcaption>

[en]: <> (Individual)
#### 单独的

[en]: <> (A card cannot merge with another card, or divide into multiple cards.)
卡片不能和其他卡片合并，也不能分隔成多张卡片。

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

[en]: <> (The card container is the only required element in a card. All other elements shown here are optional.)
卡片的容器是卡片中唯一需要的元素。所有其他的元素都是可选的。

[en]: <> (Card layouts can vary to support the types of content they contain. The following elements are commonly found among that variety.)
卡片的布局可以多样化，以便支持它包含的各种内容。卡片中经常会使用下列元素：

<figure>

![]({assets_path}/components/cards/cards-elements-2b.png)

<figcaption>

[en]: <> (*Container*<br>Card containers hold all card elements, and their size is determined by the space those elements occupy. Card elevation is expressed by the container.)
[en]: <> (*Thumbnail [optional]*<br>Cards can include thumbnails to display an avatar, logo, or icon.)
[en]: <> (*Header text [optional]*<br>Header text can include things like the name of a photo album or article.)
[en]: <> (*Subhead [optional]*<br>Subhead text can include text elements such as an article byline or a tagged location.)
[en]: <> (*Media [optional]*<br>Cards can include a variety of media, including photos, and graphics, such as weather icons.)
[en]: <> (*Supporting text [optional]*<br>Supporting text include text like an article summary or a restaurant description.)
[en]: <> (*Buttons [optional]*<br>Cards can include buttons for actions.)
[en]: <> (*Icons [optional]*<br>Cards can include icons for actions.)
1. *容器*<br>卡片的容器容纳了卡片中的所有元素，容器大小由这些元素占据的空间决定。卡片的海拔高度由卡片容器来体现。
2. *缩略图 \[可选\]*<br>卡片可以包含缩略图，用于显示头像、logo 或图标。
3. *标题文字 \[可选\]*<br>标题文字可以包含如相册名称、文章标题之类的内容。
4. *子标题 \[可选\]*<br>子标题可以包含如文章署名、目标位置之类的内容。
5. *媒体内容 \[可选\]*<br>卡片可以包含各类媒体内容，包括图片、图表等，例如表示天气状态的图标。
6. *辅助文本 \[可选\]*<br>辅助文本可以包含如文章摘要、餐馆描述之类的文本。
7. *按钮 \[可选\]*<br>卡片可以包含操作按钮。
8. *图标 \[可选\]*<br>卡片可以包含操作图标。

</figcaption></figure>

[en]: <> (Each card is made up of content blocks. All of the blocks, as a whole, are related to a single subject or destination. Content can receive different levels of emphasis, depending on its level of hierarchy.)
每张卡片都由内容块组成。所有的块，作为一个整体，与单个主题或卡片对应的目标视图相关联。内容根据其层级结构级别拥有不同的重要性。

<figure>

![]({assets_path}/components/cards/cards-elements-1.png)

<figcaption>

[en]: <> (Cards contain rich media, primary title, supporting text, and actions.)
卡片包含富媒体、主标题、辅助文本和操作。

</figcaption></figure>

[en]: <> (Dividers)
### 分隔线

[en]: <> (Dividers can be used to separate regions in cards or to indicate areas of a card that can expand.)
分隔线用于分隔卡片中的区域，或用于指示卡片中可展开的区域。

<figure>

![]({assets_path}/components/cards/cards-dividers-2.png)

<figcaption>

[en]: <> (Use inset dividers \(1\), dividers that do not run the full length of a card, to separate related content.)
使用内嵌型分隔线（1），即不充满整个卡片宽度的分隔线，分隔相关内容。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-dividers.mp4" src="{assets_path}/components/cards/cards-dividers.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Content that can be expanded should use full-width dividers.)
可以展开的内容需要使用全宽分隔线。

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Transitions)
### 过渡

[en]: <> (Cards can transform to reveal additional content.)
卡片可以进行转换，以显示额外内容。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-transition.mp4" src="{assets_path}/components/cards/cards-transition.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A card expands to fill the full screen using a parent-child transition.)
卡片展开后填满了整个屏幕。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-behavior-do.mp4" src="{assets_path}/components/cards/cards-behavior-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Expand a card to reveal information.)
站卡卡片显示额外信息。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-behavior-dont.mp4" src="{assets_path}/components/cards/cards-behavior-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Cards don’t flip over to reveal information.)
卡片不会翻转来显示信息。

</figcaption></figure>

[en]: <> (Elevation)
### 海拔高度

[en]: <> (On mobile, a card’s default elevation is 1dp, with a raised elevation of 8dp.)
在移动端，卡片的默认海拔高度为 1dp，升高后的高度为 8dp。

<figure>

![]({assets_path}/components/cards/cards-elevation-1.png)

<figcaption>

[en]: <> (A shadow helps indicate a card.)
阴影可以帮助辨别卡片。

</figcaption></figure>

[en]: <> (On desktop and mobile, cards can have a resting elevation of 0dp. They elevate to 8dp on hover.)
在桌面端和移动端，卡片可以拥有默认 0dp 的海拔高度。在悬浮时升至 8dp。

<figure>

![]({assets_path}/components/cards/cards-elevation-3.png)

<figcaption>

[en]: <> (A stroke of 0dp helps indicate a card.)
0dp 时的描边有助于辨别卡片。

</figcaption></figure>

[en]: <> (Gestures)
### 手势

[en]: <> (Gestures should be implemented consistently within a card collection. Frequently used gestures on cards include swipe, pick up and move, and scrolling.)
卡片集中每个卡片的手势都要统一。卡片上经常使用的手势包括滑动、拾起、移动和滚动。

[en]: <> (Swipe)
#### 滑动

[en]: <> (A swipe gesture can be performed on a single card at a time, anywhere on that card.)
滑动手势可以在卡片的任意位置触发，同时只能有一张卡片触发滑动手势。

[en]: <> (It can be used to:)
滑动手势可以用于：

[en]: <> (Dismiss a card)
[en]: <> (Change the state of a card \(such as flagging or archiving it\))
* 移除一张卡片
* 修改卡片状态（例如标记或存档）

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-behavior-swipe-do.mp4" src="{assets_path}/components/cards/cards-behavior-swipe-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A card should only have one swipe action assigned to it.)
每张卡片只能有一个滑动手势操作。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-behavior-swipe-dont.mp4" src="{assets_path}/components/cards/cards-behavior-swipe-dont.mp4" type="video/mp4"></video><figcaption>

{done}

[en]: <> (Cards should not contain swipeable content \(such as an image carousel or pagination\). Swipe gestures should also not cause portions of cards to detach upon swipe.)
卡片内部不应包含可滑动的内容（如图片轮播或分页）。滑动手势也不应导致卡片的某一部分在滑动时从卡片中分离。

</figcaption></figure>

[en]: <> (Pick up and move)
#### 拾起和移动

[en]: <> (The pick up and move gesture allows users to move and re-order cards in a collection.)
拾起和移动手势使用户可以选择一张卡片，并重新对卡片集中的卡片进行排序。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-behavior-pickupmove-do.mp4" src="{assets_path}/components/cards/cards-behavior-pickupmove-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (When moving a card, increase its elevation.)
移动卡片时，需要增加卡片的海拔高度。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-behavior-pickupmove-dont-1.mp4" src="{assets_path}/components/cards/cards-behavior-pickupmove-dont-1.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t move cards behind other cards.)
不要把卡片移到其他卡片的后面。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-behavior-pickupmove-dont-2.mp4" src="{assets_path}/components/cards/cards-behavior-pickupmove-dont-2.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t let cards bump other elements out of the way. When a card is picked up, it appears in front of all elements \(except app bars and navigation\).)
不要让卡片碰到其他元素。拾起卡片时，卡片会在所有其他元素上方（应用栏和导航除外）。

</figcaption></figure>

[en]: <> (Scrolling)
#### 滚动

[en]: <> (Card content that is taller than the maximum card height is truncated and does not scroll, but can be displayed by expanding the height of a card. A card can expand beyond the maximum height of the screen, in which case the card scrolls within the screen.)
卡片内容超出了卡片的最大高度时，会被截断，而不会滚动，但可以通过展开卡片高度来显示额外内容。卡片可以展开到超出屏幕的最大高度，这时，卡片可以在屏幕内滚动。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-scrolling-do.mp4" src="{assets_path}/components/cards/cards-scrolling-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (On mobile, cards can expand to reveal more content, scrolling within the screen. Content within cards doesn’t scroll.)
在移动端，卡片可以展开以显示更多内容，整个卡片可以在屏幕内滚动。卡片内容不会在卡片内部滚动。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-scrolling-dont.mp4" src="{assets_path}/components/cards/cards-scrolling-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (On mobile, cards cannot internally scroll, as it could cause two scroll bars to be displayed.)
在移动端，卡片不能在内部滚动，因为这会导致界面上出现两个滚动条。

</figcaption></figure></div></div><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-desktopscrolling.mp4" src="{assets_path}/components/cards/cards-desktopscrolling.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (On desktop, card content can expand and scroll within a card.)
在桌面端，卡片内容可以展开，并在卡片内部滚动。

</figcaption></figure>

[en]: <> (Actions)
<h2 id="actions">操作</h2>

[en]: <> (Primary action)
### 主操作

[en]: <> (The primary action area of a card is typically the card itself. Often cards are one large touch target to a detail screen on a subject.)
卡片的主操作区域通常是卡片本身。通常，卡片本身是一个可点击目标，点击后会进入详情界面。

<figure>

![]({assets_path}/components/cards/cards-actions-1.png)

<figcaption>

[en]: <> (The action area of a card contains rich media and supporting text.)
卡片的操作区域包含富媒体和辅助文本。

</figcaption></figure>

[en]: <> (Supplemental actions)
### 附加操作

[en]: <> (Supplemental actions are represented by icons, text, and UI controls on cards. They are typically placed at the bottom of the card.)
卡片上的附加操作通过图标、文本和其他 UI 控件表示。它们通常放在卡片底部。

[en]: <> (For more than two supplemental actions, use an overflow menu instead.)
对于两个以上的附加操作，请使用弹出菜单代替。

<figure>

![]({assets_path}/components/cards/cards-supplementalactions-1.png)

<figcaption>

[en]: <> (Supplemental text and actions at the bottom of the card)
卡片底部的附加操作。

</figcaption></figure>

[en]: <> (Overflow menu)
### 弹出菜单

[en]: <> (Overflow menus contain related actions. They are typically placed in the upper-right or lower-right corner of a card.)
弹出菜单包含相关操作。它们通常放在卡片的右上角或右下角。

<figure>

![]({assets_path}/components/cards/cards-overflowmenu-1b.png)

<figcaption>

[en]: <> (Overflow menus are usually located in the upper-right or lower-right corner of a card.)
弹出菜单通常位于卡片的右上角或右下角。

</figcaption></figure>

[en]: <> (UI controls)
### UI 控件

[en]: <> (UI controls can be included within a card to allow the user to interact with a card’s content. UI controls may be in the form of a slider, stars to rate content, chips, or buttons.)
卡片中可以包含 UI 控件，使用户可以和卡片内容进行交互。UI 控件可以是滑块、星形评分组件、纸片或按钮。

<figure>

![]({assets_path}/components/cards/cards-uicontrols-1.png)

<figcaption>

[en]: <> (This card contains stars to rate content.)
此卡片包含了星形评分组件。

</figcaption></figure><figure>

![]({assets_path}/components/cards/cards-uicontrols-2.png)

<figcaption>

[en]: <> (This card contains choice chips within the action area.)
此卡片在操作区域内包含了纸片。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-actions-uicontrols.mp4" src="{assets_path}/components/cards/cards-actions-uicontrols.mp4" type="video/mp4"></video><figcaption>

[en]: <> (This card contains a slider control within the action area.)
此卡片在操作区域内包含了滑块控件。

</figcaption></figure>

[en]: <> (Additional actions)
### 其他操作

[en]: <> (Cards can support multiple actions, such as UI controls and an overflow menu. Because cards are entry points to more detailed information, they should contain a limited number of actions.)
卡片可以支持多个操作，例如 UI 控件和弹出菜单。由于卡片是详细信息的入口，它们不应该包含过多的操作。

<figure>

![]({assets_path}/components/cards/cards-additionalactions-1-dont.png)

<figcaption>

{caution}

[en]: <> (Cards provide entry to more robust information. Be cautious not to overload cards with extraneous information or actions.)
卡片是详细信息的入口。注意不要放置太多无关信息和操作，使卡片负荷过重。

</figcaption></figure>

[en]: <> (Focus)
### 焦点

[en]: <> (When traversing through focus points on a card, visit each focused element before moving to the next card.)
当在卡片上遍历焦点时，会先访问每个可获得焦点的元素，然后把焦点移动到下一张卡片。

[en]: <> (For users that navigate solely using focus traversal \(using a D-pad and keyboard\), cards should have either a primary action or open a new screen containing primary and supplemental actions.)
为了方便仅通过焦点遍历进行导航的用户（使用 D-pad 或键盘），卡片中应该包含主操作、或者支持打开一个包含主操作和辅助操作的新界面。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-focus.mp4" src="{assets_path}/components/cards/cards-focus.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Focus traversal of a card)
在卡片上遍历焦点

</figcaption></figure>

[en]: <> (Card collections)
<h2 id="card-collections">卡片集</h2>

[en]: <> (Usage)
### 用法

[en]: <> (When multiple cards are present, they are grouped together into one or more collections. By default, cards in a collection are coplanar, sharing the same resting elevation unless they are picked up or dragged.)
当存在多张卡片时，它们被组合到一起成为一个或多个卡片集。默认情况下，卡片集中的卡片都在同一平面上，拥有相同的海拔高度，除非它们被拾起或拖动。

<figure>

![]({assets_path}/components/cards/cards-cardcollections-hero.png)

</figure>

[en]: <> (Layout)
### 布局

[en]: <> (Organize card collections so that they are easy to use. Their layout affects how they are perceived.)
组织好卡片集，使其更易于使用。卡片集的布局方式会影响用户的感知。

<figure>

![]({assets_path}/components/cards/cards-cardcollections.png)

<figcaption>

[en]: <> (When adding cards to a collection, the first item is automatically positioned on the top left. Subsequent cards are laid out left to right, top to bottom.)
将卡片添加到卡片集时，第一张卡片会自动定位到左上角。后续的卡片从左到右，从上到下排列。

</figcaption></figure>

[en]: <> (Scannable)
#### 可扫视

[en]: <> (To make a collection of cards scannable, place them in a consistent pattern.)
为了使用户能快速扫视一个卡片集，请保持每张卡片的样式统一。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-1a.png)

<figcaption>

[en]: <> (Scannable cards)
可扫视的卡片

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-1b.png)

</figure></div></div>

[en]: <> (Dashboard)
#### 仪表板

[en]: <> (To display multiple subject matters and functions on a screen, use a dashboard-style card collection.)
要在界面中显示多个事项和功能，请使用仪表板样式的卡片集。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-2a.png)

<figcaption>

[en]: <> (Dashboard-style card collection)
仪表板样式的卡片集

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-2b.png)

</figure></div></div>

[en]: <> (Distinction)
#### 区分

[en]: <> (To highlight each card’s individuality, style, or novelty, use a card collection with an asymmetric grid.)
要突出每张卡片的个性、风格或新颖性，请使用带有不对称网格的卡片集。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-3a.png)

<figcaption>

[en]: <> (Cards in an asymmetric grid)
非对称网格中的卡片

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/cards/cards-layoutcardcollections-3b.png)

</figure></div></div>

[en]: <> (Contained collections)
### 容器中的卡片集

[en]: <> (Card collections can be placed within a container, and be scrolled within it.)
卡片集可以放在容器中，并在容器中滚动。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-collections-do.mp4" src="{assets_path}/components/cards/cards-collections-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A card collection can horizontally scroll within a container.)
卡片集可以在容器中水平滚动。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/cards/cards-collections-dont.mp4" src="{assets_path}/components/cards/cards-collections-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (The container for a collection should not be a card, and the entire surface area of the container should not be interactive.)
卡片集的容器不能是卡片，容器区域不能是交互式的。

</figcaption></figure></div></div>

[en]: <> (Filtering and sorting)
### 过滤和排序

[en]: <> (Card collections can be filtered in a variety of ways, including by date or alphabetical order. If a collection can be filtered, the filter must apply to each card in the collection.)
可以通过各种方式过滤卡片集，包括按日期或字母顺序。如果卡片集有过滤功能，则过滤功能必须应用于卡片集中的每张卡片。

<figure>

![]({assets_path}/components/cards/cards-cardcollectionsort-1.png)

<figcaption>

[en]: <> (Filter or sorting options should be placed outside of the card collection.)
过滤和排序选项应放在卡片集之外。

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (*This section should not be read as prescriptive or exhaustive.* Cards have no singular layout, typographic, or image size. All cards should be designed to meet the needs of the content they present. This section shows a variety of card layouts to help showcase that variety.)
*这节内容不应该被当成规范阅读。*卡片没有固定的布局、排版或图片大小。所有卡片都应该设计成符合内容呈现的要求。这章内容展示了各种卡片布局，以展示卡片布局的多样性。

[en]: <> (Elevated cards)
#### 升高的卡片

<figure>

![]({assets_path}/components/cards/specs-cards-template1.png)

</figure><figure>

![]({assets_path}/components/cards/specs-cards-template5.png)

</figure><figure>

![]({assets_path}/components/cards/specs-cards-template014.png)

</figure>

[en]: <> (Outlined cards)
#### 有描边的卡片

<figure>

![]({assets_path}/components/cards/specs-outline-cards.png)

</figure></div>
