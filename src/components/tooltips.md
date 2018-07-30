<div class="article__intro">

[en]: <> (Tooltips)
# 工具提示

[en]: <> (Tooltips display informative text when users hover over, focus on, or tap an element.)
译文

<figure>

![]({assets_path}/components/tooltips/tooltips-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Placement)
[en]: <> (Behavior)
[en]: <> (Spec)
* [译文](#usage)
* [译文](#placement)
* [译文](#behavior)
* [译文](#spec)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (When activated, tooltips display a text label identifying an element, such as a description of its function.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/tooltips/tooltips-illo-1.png)

<figcaption>

[en]: <> (Transient)
#### 译文

[en]: <> (Tooltips appear on hover, focus, or touch, and disappear after a short duration.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tooltips/tooltips-illo-3.png)

<figcaption>

[en]: <> (Paired)
#### 译文

[en]: <> (Tooltips are always paired nearby the element with which they are associated.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tooltips/tooltips-illo-2.png)

<figcaption>

[en]: <> (Succinct)
#### 译文

[en]: <> (Tooltips only include short, descriptive text.)
译文

</figcaption></figure></div></div>

[en]: <> (Placement)
<h2 id="placement">译文</h2>

<figure>

![]({assets_path}/components/tooltips/tooltip-usage.png)

<figcaption>

{do}

[en]: <> (Use tooltips for interactive imagery.)
译文

[en]: <> (200% zoom)
译文

[en]: <> (On hover)
[en]: <> (On focus)
1. 译文
2. 译文

</figcaption></figure><figure>

![]({assets_path}/components/tooltips/tooltip-usage-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use tooltips to restate visible UI text.)
译文

[en]: <> (200% zoom)
译文

[en]: <> (On hover)
[en]: <> (On focus)
1. 译文
2. 译文

</figcaption></figure><figure>

![]({assets_path}/components/tooltips/tooltip-usage-do.png)

<figcaption>

[en]: <> (200% zoom)
译文

[en]: <> (Tooltips describe differences between similar elements)
[en]: <> (Tooltips distinguish actions with related iconography)
1. 译文
2. 译文

</figcaption></figure><figure>

![]({assets_path}/components/tooltips/tooltip-usage-dont-2.png)

<figcaption>

{dont}

[en]: <> (200% zoom)
译文

[en]: <> (Don’t display shadows on tooltips)
[en]: <> (Don’t display rich information and imagery on tooltips)
1. 译文
2. 译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tooltips/tooltip-position-do.png)

<figcaption>

{do}

[en]: <> (Keep the position of the tooltip visible.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tooltips/tooltip-position-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t crop tooltips.)
译文

</figcaption></figure></div></div>

[en]: <> (Desktop)
### 译文

<figure>

![]({assets_path}/components/tooltips/tooltip-desktop.png)

<figcaption>

[en]: <> (Desktop tooltip on hover)
译文

</figcaption></figure>

[en]: <> (Mobile)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tooltips/baseline-video-list.mp4" src="{assets_path}/components/tooltips/baseline-video-list.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tooltip displayed through long press)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tooltips/baseline-video-list-focus.mp4" src="{assets_path}/components/tooltips/baseline-video-list-focus.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tooltip summoned through focus \(Android only\))
译文

</figcaption></figure></div></div>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (A tooltip is displayed upon tapping and holding a screen element or component \(on mobile\) or hovering over it \(desktop\). Continuously display the tooltip as long as the user long-presses or hovers over the element.)
译文

[en]: <> (Timing)
#### 译文

[en]: <> (Display the tooltip for 1.5 seconds. If the user takes another action before that time ends, the tooltip will disappear.)
译文

[en]: <> (Motion)
#### 译文

[en]: <> (Over 150ms, tooltips fade in and scale up using the deceleration curve. They fade out over 75ms.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tooltips/01-tooltip-interaction.mp4" src="{assets_path}/components/tooltips/01-tooltip-interaction.mp4" type="video/mp4"></video><figcaption>

[en]: <> (200%)
[en]: <> (100%)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (On desktop, tooltips appear in the center of click targets and stay in place while cursor moves within the target.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tooltips/02-tooltip-interaction.mp4" src="{assets_path}/components/tooltips/02-tooltip-interaction.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tooltip disappears when cursor moves out of the touch target)
[en]: <> (Tooltip remains while cursor moves within the touch target)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Spec)
<h2 id="spec">译文</h2>

[en]: <> (Desktop)
### 译文

<figure>

![]({assets_path}/components/tooltips/tooltip-spec-desktop.png)

</figure>

[en]: <> (Mobile)
### 译文

<figure>

![]({assets_path}/components/tooltips/tooltip-spec-mobile.png)

</figure></div>
