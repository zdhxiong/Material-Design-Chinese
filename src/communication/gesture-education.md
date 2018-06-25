<div class="article__intro">

[en]: <> (Gesture education)
# 手势指导

[en]: <> (Gesture education explains how to interact with an element using a gesture.)
手势指导解释了如何使用手势与元素进行交互。

<nav>

[en]: <> (Types)
[en]: <> (How to use)
* [类型](#types)
* [如何使用](#how-to-use)

</nav></div><div class="article__body">

[en]: <> (Types)
<h2 id="types">类型</h2>

[en]: <> (Partial surface gesture education)
### 局部手势指导

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (A *partial surface gesture* affects only a portion of the screen, such as swiping a card.)
*局部手势指导*只在屏幕的局部有效，例如滑动卡片。

[en]: <> (Display a sample UI)
#### 显示一个示例 UI

[en]: <> (To show how to use a gesture for the first time, display a sample UI that mimics the movement of the gesture being represented.)
为了向首次使用应用的用户演示如何使用手势，请显示一个示例 UI，来模拟手势触发时的元素移动效果。

[en]: <> (Dismissing gesture education)
#### 关闭手势指导

[en]: <> (The only way to dismiss the sample UI should be when the user performs the gesture being demonstrated. Once a gesture is detected, the gesture indicator should pause, and then disappear.)
关闭示例 UI 的唯一方式应该是当用户执行演示的手势时。一旦检测到这个手势，手势指导 UI 应该暂停，然后消失。

[en]: <> (Writing)
#### 文字

[en]: <> (Describe the result of the gesture briefly and clearly.)
简单清晰的描述手势的结果。

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/communication/gesture-education/gesture-ed-partial-screen.mp4" src="{assets_path}/communication/gesture-education/gesture-ed-partial-screen.mp4" type="video/mp4"></video><figcaption>

[en]: <> (After displaying a sample UI of a card being swiped off the screen, only a left or right swipe will dismiss the gesture education card.)
这个在屏幕上滑动的卡片示例显示后，只有向左或向右的滑动才能关闭手势指导卡片。

</figcaption></figure></div></div>

[en]: <> (Full-screen gesture education)
### 全屏手势指导

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (*Full-screen gestures* affect the entire screen, such as pinching to zoom in.)
*全屏手势指导*会影响整个屏幕，例如双指缩放。

[en]: <> (Display a banner)
#### 显示一个横幅

[en]: <> (A banner should describe what a full-screen gesture will do.)
应该在横幅中描述全屏手势的功能。

[en]: <> (Dismissing gesture education)
#### 关闭手势指导

[en]: <> (Upon touching the screen, the screen content should return to its default state, with the gesture indicator removed. The banner should be displayed until the user dismisses it.)
触摸屏幕后，屏幕内容应该回到默认状态，同时移除手势指导横幅。在用户触摸屏幕前，横幅应该始终保持显示。

[en]: <> (Writing)
#### 文字

[en]: <> (Describe the result of the gesture briefly and clearly.)
简单清晰的描述手势的结果。

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/communication/gesture-education/gesture-ed-entire-screen.mp4" src="{assets_path}/communication/gesture-education/gesture-ed-entire-screen.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A banner describes what a full-screen gesture will do, and is displayed until the user dismisses it.)
横幅描述了全屏手势执行的操作，并在用户取消它之前会持续显示。

</figcaption></figure></div></div>


[en]: <> (How to use)
<h2 id="how-to-use">如何使用</h2>

[en]: <> (Targeting & Triggering)
### 定位 & 触发

[en]: <> (Gesture education should be displayed as the user needs it, not just in the first moments of using an app. It should help users interact with an element or surface in a way they have not done so previously.)
手势指导应该只在用户需要的时候显示，而不仅仅是在用户首次使用应用时。它应该帮助用户以前所未有的方式与元素或界面进行交互。

[en]: <> (Whether the gesture affects only part of the screen, or the entire screen, similar targeting and triggering guidelines are used.)
无论手势只影响屏幕的一部分、或影响整个屏幕，都会使用类似的定位和触发准则。

[en]: <> (Targeting                                                                  | Triggering)
[en]: <> (---------                                                                  |----------)
[en]: <> (Show gesture education only to users who have not performed the gesture.   | <p>Gesture education occurs:</p><ul><li>During the first-run experience \(FRE\)</li><li>In later sessions, if a user has not performed the gesture</li><li>After a major change to the UI</li><p>If a certain gesture is core to the user experience, present it at a contextually relevant moment later in the first-run experience.</p><p>If a gesture is not critical to the experience, show it in a later session at a contextually relevant moment.</p>/ul>)

定位                              | 触发
--------                         |----------
仅向尚未执行手势的用户显示手势指导     | <p>手势指导发生在：</p><ul><li>用户首次体验应用（FRE）期间</li><li>之后的会话中，前提是用户没有执行过手势</li><li>对 UI 做了大的更改之后</li></ul><p>如果某个手势是用户体验的核心，则在用户首次体验应用时，在和用户所处情境相关的时刻，显示附加手势。</p><p>如果某个手势对用户体验不重要，则可以在稍后的会话中，在和用户所处情境相关的时刻显示它。</p>

[en]: <> (Volume)
### 数量

[en]: <> (Limit the number of gesture education prompts displayed in your app and UI.)
限制应用中显示的手势指导提示的数量。

[en]: <> (If a gesture is critical to your user experience, display up to two prompts during the first-run experience.)
如果某个手势对用户体验至关重要，则在用户首次体验应用时，可以最多显示两个手势指导提示。

[en]: <> (Frequency)
### 频率

[en]: <> (Most gesture education prompts should be shown only once.)
大部分手势指导提示应该只显示一次。

[en]: <> (If a gesture is critical to your user experience, display it up to two times in distinct sessions.)
如果某个手势对用户体验至关重要，则在不同会话中，最多显示两次。

</div>
