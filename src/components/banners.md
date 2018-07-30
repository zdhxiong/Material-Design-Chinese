<div class="article__intro">

[en]: <> (Banners)
# 横幅

[en]: <> (A banner displays a prominent message and related optional actions.)
译文

<figure>

![]({assets_path}/components/banners/banners-usage.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Placement)
[en]: <> (Behavior)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#placement)
* [译文](#behavior)
* [译文](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (A banner displays an important, succinct message, and provides actions for users to address \(or dismiss the banner\). It requires a user action to be dismissed.)
译文

[en]: <> (Banners should be displayed at the top of the screen, below a top app bar. They are persistent and nonmodal, allowing the user to ignore them or interact with them at any time.)
译文

<figure>

![]({assets_path}/components/banners/banners-when-to-use.png)

<figcaption>

[en]: <> (Banners communicate messages which are important but don’t require user action. They are more prominent than snackbars, and less interruptive than dialogs.)
译文

</figcaption></figure>

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/banners/alerts-illo-1.png)

</figure>

[en]: <> (Appropriately interruptive)
#### 译文

[en]: <> (Banners are interruptive, but their level of interruption should match the information they contain and the context in which they appear.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/alerts-illo-2.png)

</figure>

[en]: <> (Clear)
#### 译文

[en]: <> (Banners communicate a succinct message and what will happen if users interact with them.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/alerts-illo-3.png)

</figure>

[en]: <> (Focused)
#### 译文

[en]: <> (Banners contain a single message and specific actions a user can take.)
译文

</div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<figure>

![]({assets_path}/components/banners/banners-elements.png)

<figcaption>

[en]: <> (Supporting illustration \(optional\))
[en]: <> (Container)
[en]: <> (Text)
[en]: <> (Buttons)
1. 译文
2. 译文
3. 译文
4. 译文

</figcaption></figure>

[en]: <> (Banner container)
### 译文

[en]: <> (A banner container is rectangular, extending the full width of a layout. The container should be placed in a consistent and prominent location throughout an app, sharing the same elevation as screen content.)
译文

[en]: <> (Only one banner should be shown at a time.)
译文

<figure>

![]({assets_path}/components/banners/banners-container-mobile.png)

<figcaption>

[en]: <> (A banner appears above content and below a top app bar.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/banners/banners-layout-placement-dont.png)

<figcaption>

{dont}

[en]: <> (Only one banner should be shown at a time.)
译文

</figcaption></figure>

[en]: <> (Banner message)
### 译文

[en]: <> (The banner message communicates a change or error within an app.)
译文

[en]: <> (Banners should be considered as part of your overall in-app messaging strategy.)
译文

[en]: <> (Buttons)
### 译文

[en]: <> (Buttons in banners should directly relate to a banner’s message and clearly represent the banner’s action. Buttons must be labelled with text, not icons, for clarity. Banners can contain up to two [text buttons]\(https://www.mdui.org/design/components/buttons.html#text-button,\) with the dismissive action placed on the left and the confirming action on the right.)
译文

[en]: <> (Place buttons under the banner message, or on the same line if there is enough room to fit both.)
译文

<figure>

![]({assets_path}/components/banners/banners-buttons-do.png)

<figcaption>

{do}

[en]: <> (Banners may have one or two low-emphasis text buttons.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-caution-1.png)

<figcaption>

{caution}

[en]: <> (Avoid using a single button as a way to acknowledge a banner and dismiss it. A button to dismiss a banner should be paired with an action to address its message.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-do-2.png)

<figcaption>

{caution}

[en]: <> (Banners are intended to be minimally interruptive. If a button in a banner requires extra emphasis, a contained, full-width button can be used for a single, prominent action \(though it’s prominence may be distracting\).)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-caution-2.png)

<figcaption>

{dont}

[en]: <> (Don’t include links in a banner message. All available actions should be represented as buttons.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t combine buttons with different emphasis levels, which could appear to promote one action over another.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-dont-3.png)

<figcaption>

{caution}

[en]: <> (Don’t stack buttons unless there isn’t sufficient room to display them side by side.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-buttons-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use a close affordance icon as the only method of dismissing a banner. All actions should be shown as text buttons.)
译文

</figcaption></figure></div></div>

[en]: <> (Supporting illustration)
### 译文

[en]: <> (Banners can supplement their message using a supporting illustration.)
译文

<figure>

![]({assets_path}/components/banners/banners-imagery.png)

<figcaption>

{do}

[en]: <> (Icons can help communicate a banner’s message.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/banners/banners-imagery-dont.png)

<figcaption>

{dont}

[en]: <> (An icon used as an illustration can be ambiguous and make a banner too prominent in a layout. Illustrations support the banner message and aren’t the primary method of communication.)
译文

</figcaption></figure>

[en]: <> (Placement)
<h2 id="placement">译文</h2>

[en]: <> (Banners should be placed at the top of a layout or screen. When scrolling, banners typically move with content and scroll off the screen. Only one banner should be shown at a time.)
译文

[en]: <> (Banners and top bars)
### 译文

[en]: <> (Banners are placed at the top of the screen below the top app bar. They can be fixed, or scroll with content, depending on the environment:)
译文

[en]: <> (On mobile, they scroll off-screen with content, at the same elevation as app content.)
[en]: <> (On desktop, they remain fixed at the top of the screen, at the same elevation as the top app bar.)
* 译文
* 译文

<figure>

![]({assets_path}/components/banners/banners-layout-placement.png)

<figcaption>

[en]: <> (Banner and a top bar)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-layout-topbar-dont-1.png)

<figcaption>

{dont}

[en]: <> (The surface containing a banner should be clearly distinguished from the top app bar surface.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/banners/banners-layout-topbar-dont-2.png)

<figcaption>

{dont}

[en]: <> (Banners shouldn’t appear in front of the top bar.)
译文

</figcaption></figure></div></div>

[en]: <> (Banners and persistent search)
### 译文

[en]: <> (When a banner appears with a persistent search bar, it’s placed below the search bar.)
译文

<figure>

![]({assets_path}/components/banners/banners-layout-placement-persistent-search.png)

<figcaption>

[en]: <> (A banner appears below a persistent search bar.)
译文

</figcaption></figure>

[en]: <> (Banners and bottom navigation)
### 译文

[en]: <> (When bottom navigation is present, banners should remain at the top of the screen.)
译文

<figure>

![]({assets_path}/components/banners/banners-placement-bottomnav.png)

<figcaption>

[en]: <> (Banners appear at the top of the screen when bottom navigation is present.)
译文

</figcaption></figure>

[en]: <> (Banners in wide layouts)
### 译文

[en]: <> (Banners in wide layouts span the entire width of the screen. They appear at the same elevation as the top app bar and remain on screen while content scrolls.)
译文

<figure>

![]({assets_path}/components/banners/banners-placement-desktop.png)

<figcaption>

[en]: <> (A banner in a wide layout appears at the same elevation as the top app bar.)
译文

</figcaption></figure>

[en]: <> (When vertical navigation is present, banners can appear above content rather than across the full width of the screen.)
译文

<figure>

![]({assets_path}/components/banners/banners-placement-desktop-rails.png)

<figcaption>

[en]: <> (A banner on a screen with a navigation drawer appears slightly above just the content \(on the y-axis\), at the same elevation as that content.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/banners/banners-placement-multiple-dont.png)

<figcaption>

{dont}

[en]: <> (Avoid stacking multiple banners.)
译文

</figcaption></figure>

[en]: <> (Banners and pannable content)
### 译文

[en]: <> (Banners remain on screen when scrolling pannable content.)
译文

<figure>

![]({assets_path}/components/banners/banners-layout-placement-3.png)

<figcaption>

[en]: <> (Banners remain on screen when scrolling pannable content, such as a map.)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Appearing)
### 译文

[en]: <> (Banners typically appear when a screen loads content.)
译文

[en]: <> (Banners that appear after a screen loads should animate on screen from the top of a layout. If the banner is at the same elevation as content, it pushes content downwards.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/banners/banner-container-mobile.mp4" src="{assets_path}/components/banners/banner-container-mobile.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Banners at the same elevation as content push content downward as they enter from the top of a layout.)
译文

</figcaption></figure>

[en]: <> (Dismissing banners)
### 译文

[en]: <> (Banners must remain on screen until dismissed by the user.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/banners/banner-change-dismiss.mp4" src="{assets_path}/components/banners/banner-change-dismiss.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Banners can be dismissed by the user.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/banners/banner-change-condition02.mp4" src="{assets_path}/components/banners/banner-change-condition02.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Banners persist until the user acts on them or dismisses them.)
译文

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Mobile)
### 译文

<figure>

![]({assets_path}/components/banners/spec-banners-mobile-1action.png)

</figure><figure>

![]({assets_path}/components/banners/spec-banners-mobile-2actions.png)

</figure><figure>

![]({assets_path}/components/banners/spec-banners-mobile-image.png)

</figure>

[en]: <> (Desktop)
### 译文

<figure>

![]({assets_path}/components/banners/spec-banners-desktop-1action.png)

</figure><figure>

![]({assets_path}/components/banners/spec-banners-desktop-2actions.png)

</figure><figure>

![]({assets_path}/components/banners/spec-banners-desktop-image.png)

</figure></div>
