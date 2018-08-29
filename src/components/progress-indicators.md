<div class="article__intro">

[en]: <> (Progress indicators)
# 进度条

[en]: <> (Progress indicators express an unspecified wait time or display the length of a process.)
进度条表示当前活动需要等待，或者显示当前活动的进度。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/01-progress-intro.mp4" src="{assets_path}/components/progress-indicators/01-progress-intro.mp4" type="video/mp4"></video></figure><nav>

[en]: <> (Usage)
[en]: <> (Linear progress indicators)
[en]: <> (Circular progress indicators)
[en]: <> (Specs)
* [用法](#usage)
* [线形进度条](#linear-progress-indicators)
* [圆形进度条](#circular-progress-indicators)
* [规格](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Progress indicators inform users about the status of ongoing processes, such as loading an app, submitting a form, or saving updates. They communicate an app’s state and indicate available actions, such as whether users can navigate away from the current screen.)
进度条让用户了解当前活动的状态，例如应用正在加载、正在提交表单或正在保存更新。 它们能显示应用的状态并提示用户可以进行的操作，例如是否可以离开当前屏幕。

[en]: <> (Progress as a group)
#### 显示整体进度

[en]: <> (When displaying progress for a sequence of processes, indicate overall progress rather than the progress of each activity.)
当需要显示一系列正在进行的活动的进度时，显示整体的进度而不是每一项的进度。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/progress-indicators/progress-indicator-illos-03.png)

<figcaption>

[en]: <> (Informative)
#### 显示信息

[en]: <> (Progress indicators look and animate in ways that reflect the status of a process. They are never simply decorative.)
进度条用动画的方式来展示活动进度，它们并不是用来装饰的。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/progress-indicators/progress-indicator-illos-01.png)

<figcaption>

[en]: <> (Animated)
#### 使用动画

[en]: <> (Progress indicators use animation to capture attention and inform users of an activity’s progress.)
进度条用动画来引起用户的注意并显示活动的进度。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/progress-indicators/progress-indicator-illos-02.png)

<figcaption>

[en]: <> (Consistent)
#### 保持一致

[en]: <> (Progress indicators should be applied to all instances of a process \(such as loading\) in a consistent format \(linear or circular\).)
进度条应该在被使用的实例（例如加载）中使用相同的形式（线形或圆形）。

</figcaption></figure></div></div>

[en]: <> (Types)
### 进度条的类型

[en]: <> (Linear and circular)
#### 线形和圆形

[en]: <> (Material Design offers two visually distinct types of progress indicators: linear and circular progress indicators. Only one type should represent each kind of activity in an app. For example, if a refresh action displays a circular indicator on one screen, that same action shouldn’t use a linear indicator elsewhere in the app.)
Material Design提供了两种不同形状的进度条：线形和圆形。在同一个APP中应该只使用一种进度条来表示某种操作。例如，如果刷新操作在APP的某个界面上使用了圆形进度条，那么在其他界面就不应该使用其他类型的进度条来表示这个操作。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/01-usage-types-linear-circular.mp4" src="{assets_path}/components/progress-indicators/01-usage-types-linear-circular.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Linear indicator)
[en]: <> (Circular indicator)
1. 线形进度条
2. 圆形进度条

</figcaption></figure>

[en]: <> (Determinate and indeterminate)
#### 确定进度的进度条和不确定进度的进度条

[en]: <> (Progress indicators may be determinate or indeterminate:)
进度条可以是确定进度的或者不确定进度的：

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Determinate indicators)
#### 确定进度的进度条

[en]: <> (*Determinate indicators* display how long a process will take. They should be used when the process completion rate can be detected.)
*确定进度的进度条*可以显示当前活动需要多长时间，它们应该在可以检测到完成部分百分比时被使用。

</div><div class="mdui-col">

[en]: <> (Indeterminate indicators)
#### 不确定进度的进度条

[en]: <> (*Indeterminate indicators* express an unspecified amount of wait time. They should be used when progress isn’t detectable, or if it’s not necessary to indicate how long an activity will take.)
*不确定进度的进度条*表示当前活动需要一段时间，它们应该在无法获取进度或没有必要显示这个活动需要多长时间时被使用。

</div></div><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/02-usage-types-determinate-indeterminate.mp4" src="{assets_path}/components/progress-indicators/02-usage-types-determinate-indeterminate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Determinate progress indicators fill from 0 to 100%.)
[en]: <> (Indeterminate progress indicators move along a fixed track, growing and shrinking in size.)
1. 确定进度的进度条从0%到100%显示。
2. 不确定进度的进度条沿着固定轨道移动，长度不断伸缩。

</figcaption></figure>

[en]: <> (As more information about a process becomes available, a progress indicator can switch from an indeterminate to a determinate state.)
当关于进度的信息可用时，不确定进度的进度条可以转变为确定进度的进度条。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/03-usage-types-indeterminate-to-determinate.mp4" src="{assets_path}/components/progress-indicators/03-usage-types-indeterminate-to-determinate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A linear progress indicator changes from indeterminate to determinate while loading a screen.)
线形进度条在加载屏幕内容时从不确定进度的状态转变为确定进度的状态。

</figcaption></figure>

[en]: <> (Linear progress indicators)
<h2 id="linear-progress-indicators">线形进度条</h2>

[en]: <> (Anatomy)
### 剖析结构

<figure>

![]({assets_path}/components/progress-indicators/linear-anatomy.png)

</figure>

[en]: <> (Linear progress indicators are composed of two required elements:)
线形进度条由两个必要的元素组成：

[en]: <> (*Track*<br>The track is a fixed width rule, with set boundaries for the indicator to travel along.)
[en]: <> (*Indicator*<br>The indicator animates along the length of the track.)
* *轨道*<br>轨道是固定的，具有指示器前进的边界。
* *指示器*<br>指示器通过动画的方式在轨道上前进。

[en]: <> (Behavior)
### 行为

[en]: <> (Linear progress indicators display progress by animating an indicator along the length of a fixed, visible track. The behavior of the indicator is dependent on whether the progress of a process is known.)
线形进度条通过动画的方式在可见的、长度固定的轨道上显示。它们的行为依赖于当前活动的进度是否已知。

[en]: <> (Types)
### 类型

[en]: <> (Linear progress indicators support both determinate and indeterminate operations.)
线形进度条支持确定进度的和不确定进度的操作。

[en]: <> (*Determinate* operations display the indicator increasing in width from 0 to 100% of the track, in sync with the process’s progress.)
[en]: <> (*Indeterminate* operations display the indicator continually growing and shrinking along the track until the process is complete.)
* *确定进度的*进度条的进度会从0%增长到100%，与活动进度同步。
* *不确定进度的*进度条会在轨道上不断伸缩直到活动完成。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/01-linear-types-determinate.mp4" src="{assets_path}/components/progress-indicators/01-linear-types-determinate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Determinate linear progress indicator)
确定进度的线形进度条

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/02-linear-types-indeterminate.mp4" src="{assets_path}/components/progress-indicators/02-linear-types-indeterminate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Indeterminate linear progress indicator)
不确定进度的线形进度条

</figcaption></figure></div></div>

[en]: <> (Placement)
### 位置

[en]: <> (The placement of a linear progress indicator can indicate the scope of a process. For example:)
进度条放置的位置可以表示正在进行活动的范围。例如：

[en]: <> (A linear indicator at the center of the screen can indicate loading all screen content)
[en]: <> (A linear indicator attached to a container, such as a card, can indicate the process applies to that particular item \(and that interaction with the rest of the UI is possible\))
[en]: <> (Expanding items can place a linear indicator along their expanding edge to draw user attention to where new content will appear)
* 线形进度条在屏幕中间时表示正在加载整个屏幕的内容。
* 附加到容器上的线形进度条可以表示该过程用于特定项目（并可以与其余部分进行交互）。
* 可扩展的项目可以在扩展边缘放置线形进度条，用来吸引用户注意新内容的出现位置。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/03-linear-placement-center.mp4" src="{assets_path}/components/progress-indicators/03-linear-placement-center.mp4" type="video/mp4"></video><figcaption>

[en]: <> (To indicate that loading affects the whole screen, a linear indicator can be placed in the background.)
如果要表示这个加载过程会影响到整块屏幕，可以放置一个线形进度条到背景中。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/04-linear-placement-attached.mp4" src="{assets_path}/components/progress-indicators/04-linear-placement-attached.mp4" type="video/mp4"></video><figcaption>

[en]: <> (To focus user attention, a linear indicator is recommended for displaying item expansion onto larger surfaces, such as desktop.)
为了引起用户注意，线形进度条推荐放在比较大的可扩展控件上，例如桌面端。

</figcaption></figure>

[en]: <> (Circular progress indicators)
<h2 id="circular-progress-indicators">圆形进度条</h2>

[en]: <> (Behavior)
### 行为

[en]: <> (Circular progress indicators display progress by animating an indicator along an invisible circular track in a clockwise direction. They can be applied directly to a surface, such as a button or card.)
圆形的进度条在不可见的圆形轨道上用顺时针动画。它们可以直接应用于控件表面，例如按钮或者卡片。

[en]: <> (On Android, the “swipe to refresh” gesture displays a circular progress indicator to indicate that the UI is being refreshed.)
在Android端，“下拉刷新” 手势会显示一个圆形进度条来表示UI正在刷新。

[en]: <> (Types)
### 类型

[en]: <> (Circular progress indicators support both determinate and indeterminate processes.)
圆形进度条支持确定进度的和不确定进度的活动。

[en]: <> (*Determinate* circular indicators fill the invisible, circular track with color, as the indicator moves from 0 to 360 degrees.)
[en]: <> (*Indeterminate* circular indicators grow and shrink in size while moving along the invisible track.)
* *确定进度的*圆形进度条从0°到360°在圆形的不可见轨道上用颜色显示。
* *不确定进度的*圆形进度条会在不可见轨道上移动并伸缩。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/01-circular-types-determinate.mp4" src="{assets_path}/components/progress-indicators/01-circular-types-determinate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Determinate circular progress indicator)
确定进度的圆形进度条

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/02-circular-types-indeterminate.mp4" src="{assets_path}/components/progress-indicators/02-circular-types-indeterminate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Indeterminate circular progress indicator)
不确定进度的圆形进度条

</figcaption></figure></div></div>

[en]: <> (Placement)
### 位置

[en]: <> (Circular progress indicators are positioned to indicate the process that they represent.)
圆形进度条被放置的位置表示了正在加载的活动的位置。

[en]: <> (When centered on the screen, they indicate the initial loading of screen content.)
[en]: <> (When placed above or below existing content, they draw attention to where new content will appear.)
* 当出现在屏幕中心时，它们用来表示正在初始化屏幕内容。
* 当出现在已有项目的上方或者下方时，它们用来表示这里会出现新的内容。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/03-circular-placement-center.mp4" src="{assets_path}/components/progress-indicators/03-circular-placement-center.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A circular indicator centered on screen indicates an initial loading process.)
在屏幕中心出现的圆形进度条用来表示初始化过程。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/04-circular-placement-bottom.mp4" src="{assets_path}/components/progress-indicators/04-circular-placement-bottom.mp4" type="video/mp4"></video><figcaption>

[en]: <> (An indicator appears where new items will appear, at the end of the current items grid.)
在当前项目网格的末尾加载新的项目时需要使用进度条来表示正在加载。

</figcaption></figure></div></div>

[en]: <> (Integrating with actions)
#### 集成到操作中

[en]: <> (A circular indicator can be integrated into a button or actionable icon to express a connection between an interaction and a specific item. They are typically used to express when an interaction, such as clicking a button again, isn’t available.)
圆形的进度条可以集成到按钮或可操作的图标中用来关联两个可交互的特定操作。它们一般用来表示何时可以进行操作，例如此时可以再次点击按钮或者按钮已经不可用。

[en]: <> (They should be used for short, indeterminate activities \(between 2-5 seconds\). Longer activities may require alternate methods of communication, such as snackbars or notifications.)
它们应该用在时间比较短（介于两秒到五秒之间）或不确定的活动中。长时间的活动可能需要备用的交互方式，例如Snackbar或者通知。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/05-circular-placement-integrated-do.mp4" src="{assets_path}/components/progress-indicators/05-circular-placement-integrated-do.mp4" type="video/mp4"></video><figcaption>

正确示例

[en]: <> (Use circular indicators for short, indeterminate activities \(< 5 seconds\) requiring user attention.)
当需要用户注意时，可以使用圆形进度条进行短暂的或不确定（但是小于5秒）的活动。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/06-circular-placement-integrated-dont.mp4" src="{assets_path}/components/progress-indicators/06-circular-placement-integrated-dont.mp4" type="video/mp4"></video><figcaption>

错误示例

[en]: <> (Don’t apply progress indicators to every button in your app. They can unnecessarily interrupt the user’s task.)
不要在你的APP的每个按钮上都使用进度条。它们可能会不小心中断用户的操作。

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">规格</h2>

[en]: <> (Circular indicators)
#### 圆形进度条

<figure>

![]({assets_path}/components/progress-indicators/progressindicators-spec-circular.png)

</figure>

[en]: <> (Determinate indicators)
#### 确定进度的进度条

<figure>

![]({assets_path}/components/progress-indicators/progressindicators-spec-linear-determinate.png)

</figure>

[en]: <> (Indeterminate indicators)
#### 不确定进度的进度条

<figure>

![]({assets_path}/components/progress-indicators/progressindicators-spec-linear-indeterminate.png)

</figure></div>
