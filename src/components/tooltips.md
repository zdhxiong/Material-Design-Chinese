<div class="article__intro">

[en]: <> (Tooltips)
# 工具提示

[en]: <> (Tooltips display informative text when users hover over, focus on, or tap an element.)
当用户悬停，聚焦，或是点击某个元素时，工具提示会显示一些信息文本。
<figure>

![]({assets_path}/components/tooltips/tooltips-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Placement)
[en]: <> (Behavior)
[en]: <> (Spec)
* [用法](#usage)
* [位置](#placement)
* [行为](#behavior)
* [规范](#spec)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (When activated, tooltips display a text label identifying an element, such as a description of its function.)
一旦激活，工具提示将显示一个文本标签来标识元素，如功能说明。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/tooltips/tooltips-illo-1.png)

<figcaption>

[en]: <> (Transient)
#### 显示时间短暂

[en]: <> (Tooltips appear on hover, focus, or touch, and disappear after a short duration.)
工具提示在悬停，聚焦或点击时显示，在一小段时间后消失。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tooltips/tooltips-illo-3.png)

<figcaption>

[en]: <> (Paired)
#### 相关元素

[en]: <> (Tooltips are always paired nearby the element with which they are associated.)
工具提示总是在它的相关元素周围配对，

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tooltips/tooltips-illo-2.png)

<figcaption>

[en]: <> (Succinct)
#### 简洁

[en]: <> (Tooltips only include short, descriptive text.)
工具提示包含一个短小的描述性文字。

</figcaption></figure></div></div>

[en]: <> (Placement)
<h2 id="placement">位置</h2>

<figure>

![]({assets_path}/components/tooltips/tooltip-usage.png)

<figcaption>

{do}

[en]: <> (Use tooltips for interactive imagery.)
用工具提示来与图像交互。

[en]: <> (200% zoom)
二倍放大

[en]: <> (On hover)
[en]: <> (On focus)
1. 悬停
2. 聚焦

</figcaption></figure><figure>

![]({assets_path}/components/tooltips/tooltip-usage-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use tooltips to restate visible UI text.)
不要使用工具提示修改可见的 UI 文本。

[en]: <> (200% zoom)
二倍放大

[en]: <> (On hover)
[en]: <> (On focus)
1. 悬停
2. 聚焦

</figcaption></figure><figure>

![]({assets_path}/components/tooltips/tooltip-usage-do.png)

<figcaption>

[en]: <> (200% zoom)
二倍放大

[en]: <> (Tooltips describe differences between similar elements)
[en]: <> (Tooltips distinguish actions with related iconography)
1. 工具提示描述相似元素之间的区别
2. 工具提示区分相关操作

</figcaption></figure><figure>

![]({assets_path}/components/tooltips/tooltip-usage-dont-2.png)

<figcaption>

{dont}

[en]: <> (200% zoom)
二倍放大

[en]: <> (Don’t display shadows on tooltips)
[en]: <> (Don’t display rich information and imagery on tooltips)
1. 不要为工具提示添加阴影
2. 不要为工具提示显示详细信息或是图像

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tooltips/tooltip-position-do.png)

<figcaption>

{do}

[en]: <> (Keep the position of the tooltip visible.)
保证工具提示的位置可见

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tooltips/tooltip-position-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t crop tooltips.)
不要裁剪工具提示

</figcaption></figure></div></div>

[en]: <> (Desktop)
### 桌面端

<figure>

![]({assets_path}/components/tooltips/tooltip-desktop.png)

<figcaption>

[en]: <> (Desktop tooltip on hover)
悬停时桌面端的工具提示

</figcaption></figure>

[en]: <> (Mobile)
### 移动端

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tooltips/baseline-video-list.mp4" src="{assets_path}/components/tooltips/baseline-video-list.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tooltip displayed through long press)
长按显示工具提示

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tooltips/baseline-video-list-focus.mp4" src="{assets_path}/components/tooltips/baseline-video-list-focus.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tooltip summoned through focus \(Android only\))
聚焦以召唤工具提示\(仅安卓\)

</figcaption></figure></div></div>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (A tooltip is displayed upon tapping and holding a screen element or component \(on mobile\) or hovering over it \(desktop\). Continuously display the tooltip as long as the user long-presses or hovers over the element.)
行为
工具提示将在点击并按住屏幕元素或组件 \(在移动设备上\) 或将鼠标悬停在其上 \(桌面\) 时显示。 若用户在元素上长按或悬停，工具提示就不会消失。

[en]: <> (Timing)
#### 定时

[en]: <> (Display the tooltip for 1.5 seconds. If the user takes another action before that time ends, the tooltip will disappear.)
工具提示出现后，持续显示 1.5 秒。如果用户在该时间之前采取了另一个操作，则工具提示将消失。

[en]: <> (Motion)
#### 动画

[en]: <> (Over 150ms, tooltips fade in and scale up using the deceleration curve. They fade out over 75ms.)
在工具提示显示 150 毫秒后，工具提示会逐渐消失，并以减速曲线放大。 它们会在 75 毫秒内消失。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tooltips/01-tooltip-interaction.mp4" src="{assets_path}/components/tooltips/01-tooltip-interaction.mp4" type="video/mp4"></video><figcaption>

[en]: <> (200%)
[en]: <> (100%)
1. 200%
2. 100%

</figcaption></figure>

[en]: <> (On desktop, tooltips appear in the center of click targets and stay in place while cursor moves within the target.)
在桌面端上，工具提示在单击目标的中心出现，当在光标在目标内移动时保持原位。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tooltips/02-tooltip-interaction.mp4" src="{assets_path}/components/tooltips/02-tooltip-interaction.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tooltip disappears when cursor moves out of the touch target)
[en]: <> (Tooltip remains while cursor moves within the touch target)
1. 工具提示会在光标移出点击目标时消失
2. 当光标在点击目标内移动时工具提示将保持原位

</figcaption></figure>

[en]: <> (Spec)
<h2 id="spec">规格</h2>

[en]: <> (Desktop)
### 桌面端

<figure>

![]({assets_path}/components/tooltips/tooltip-spec-desktop.png)

</figure>

[en]: <> (Mobile)
### 移动端

<figure>

![]({assets_path}/components/tooltips/tooltip-spec-mobile.png)

</figure></div>
