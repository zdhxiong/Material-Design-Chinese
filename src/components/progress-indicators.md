<div class="article__intro">

[en]: <> (Progress indicators)
# 译文

[en]: <> (Progress indicators express an unspecified wait time or display the length of a process.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/01-progress-intro.mp4" src="{assets_path}/components/progress-indicators/01-progress-intro.mp4" type="video/mp4"></video></figure><nav>

[en]: <> (Usage)
[en]: <> (Linear progress indicators)
[en]: <> (Circular progress indicators)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#linear-progress-indicators)
* [译文](#circular-progress-indicators)
* [译文](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Progress indicators inform users about the status of ongoing processes, such as loading an app, submitting a form, or saving updates. They communicate an app’s state and indicate available actions, such as whether users can navigate away from the current screen.)
译文

[en]: <> (Progress as a group)
#### 译文

[en]: <> (When displaying progress for a sequence of processes, indicate overall progress rather than the progress of each activity.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/progress-indicators/progress-indicator-illos-03.png)

<figcaption>

[en]: <> (Informative)
#### 译文

[en]: <> (Progress indicators look and animate in ways that reflect the status of a process. They are never simply decorative.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/progress-indicators/progress-indicator-illos-01.png)

<figcaption>

[en]: <> (Animated)
#### 译文

[en]: <> (Progress indicators use animation to capture attention and inform users of an activity’s progress.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/progress-indicators/progress-indicator-illos-02.png)

<figcaption>

[en]: <> (Consistent)
#### 译文

[en]: <> (Progress indicators should be applied to all instances of a process \(such as loading\) in a consistent format \(linear or circular\).)
译文

</figcaption></figure></div></div>

[en]: <> (Types)
### 译文

[en]: <> (Linear and circular)
#### 译文

[en]: <> (Material Design offers two visually distinct types of progress indicators: linear and circular progress indicators. Only one type should represent each kind of activity in an app. For example, if a refresh action displays a circular indicator on one screen, that same action shouldn’t use a linear indicator elsewhere in the app.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/01-usage-types-linear-circular.mp4" src="{assets_path}/components/progress-indicators/01-usage-types-linear-circular.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Linear indicator)
[en]: <> (Circular indicator)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Determinate and indeterminate)
#### 译文

[en]: <> (Progress indicators may be determinate or indeterminate:)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Determinate indicators)
#### 译文

[en]: <> (*Determinate indicators* display how long a process will take. They should be used when the process completion rate can be detected.)
译文

</div><div class="mdui-col">

[en]: <> (Indeterminate indicators)
#### 译文

[en]: <> (*Indeterminate indicators* express an unspecified amount of wait time. They should be used when progress isn’t detectable, or if it’s not necessary to indicate how long an activity will take.)
译文

</div></div><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/02-usage-types-determinate-indeterminate.mp4" src="{assets_path}/components/progress-indicators/02-usage-types-determinate-indeterminate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Determinate progress indicators fill from 0 to 100%.)
[en]: <> (Indeterminate progress indicators move along a fixed track, growing and shrinking in size.)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (As more information about a process becomes available, a progress indicator can switch from an indeterminate to a determinate state.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/03-usage-types-indeterminate-to-determinate.mp4" src="{assets_path}/components/progress-indicators/03-usage-types-indeterminate-to-determinate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A linear progress indicator changes from indeterminate to determinate while loading a screen.)
译文

</figcaption></figure>

[en]: <> (Linear progress indicators)
<h2 id="linear-progress-indicators">译文</h2>

[en]: <> (Anatomy)
### 译文

<figure>

![]({assets_path}/components/progress-indicators/linear-anatomy.png)

</figure>

[en]: <> (Linear progress indicators are composed of two required elements:)
译文

[en]: <> (*Track*<br>The track is a fixed width rule, with set boundaries for the indicator to travel along.)
[en]: <> (*Indicator*<br>The indicator animates along the length of the track.)
* *译文*<br>译文
* *译文*<br>译文

[en]: <> (Behavior)
### 译文

[en]: <> (Linear progress indicators display progress by animating an indicator along the length of a fixed, visible track. The behavior of the indicator is dependent on whether the progress of a process is known.)
译文

[en]: <> (Types)
### 译文

[en]: <> (Linear progress indicators support both determinate and indeterminate operations.)
译文

[en]: <> (*Determinate* operations display the indicator increasing in width from 0 to 100% of the track, in sync with the process’s progress.)
[en]: <> (*Indeterminate* operations display the indicator continually growing and shrinking along the track until the process is complete.)
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/01-linear-types-determinate.mp4" src="{assets_path}/components/progress-indicators/01-linear-types-determinate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Determinate linear progress indicator)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/02-linear-types-indeterminate.mp4" src="{assets_path}/components/progress-indicators/02-linear-types-indeterminate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Indeterminate linear progress indicator)
译文

</figcaption></figure></div></div>

[en]: <> (Placement)
### 译文

[en]: <> (The placement of a linear progress indicator can indicate the scope of a process. For example:)
译文

[en]: <> (A linear indicator at the center of the screen can indicate loading all screen content)
[en]: <> (A linear indicator attached to a container, such as a card, can indicate the process applies to that particular item \(and that interaction with the rest of the UI is possible\))
[en]: <> (Expanding items can place a linear indicator along their expanding edge to draw user attention to where new content will appear)
* 译文
* 译文
* 译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/03-linear-placement-center.mp4" src="{assets_path}/components/progress-indicators/03-linear-placement-center.mp4" type="video/mp4"></video><figcaption>

[en]: <> (To indicate that loading affects the whole screen, a linear indicator can be placed in the background.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/04-linear-placement-attached.mp4" src="{assets_path}/components/progress-indicators/04-linear-placement-attached.mp4" type="video/mp4"></video><figcaption>

[en]: <> (To focus user attention, a linear indicator is recommended for displaying item expansion onto larger surfaces, such as desktop.)
译文

</figcaption></figure>

[en]: <> (Circular progress indicators)
<h2 id="circular-progress-indicators">译文</h2>

[en]: <> (Behavior)
### 译文

[en]: <> (Circular progress indicators display progress by animating an indicator along an invisible circular track in a clockwise direction. They can be applied directly to a surface, such as a button or card.)
译文

[en]: <> (On Android, the “swipe to refresh” gesture displays a circular progress indicator to indicate that the UI is being refreshed.)
译文

[en]: <> (Types)
### 译文

[en]: <> (Circular progress indicators support both determinate and indeterminate processes.)
译文

[en]: <> (*Determinate* circular indicators fill the invisible, circular track with color, as the indicator moves from 0 to 360 degrees.)
[en]: <> (*Indeterminate* circular indicators grow and shrink in size while moving along the invisible track.)
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/01-circular-types-determinate.mp4" src="{assets_path}/components/progress-indicators/01-circular-types-determinate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Determinate circular progress indicator)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/02-circular-types-indeterminate.mp4" src="{assets_path}/components/progress-indicators/02-circular-types-indeterminate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Indeterminate circular progress indicator)
译文

</figcaption></figure></div></div>

[en]: <> (Placement)
### 译文

[en]: <> (Circular progress indicators are positioned to indicate the process that they represent.)
译文

[en]: <> (When centered on the screen, they indicate the initial loading of screen content.)
[en]: <> (When placed above or below existing content, they draw attention to where new content will appear.)
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/03-circular-placement-center.mp4" src="{assets_path}/components/progress-indicators/03-circular-placement-center.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A circular indicator centered on screen indicates an initial loading process.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/04-circular-placement-bottom.mp4" src="{assets_path}/components/progress-indicators/04-circular-placement-bottom.mp4" type="video/mp4"></video><figcaption>

[en]: <> (An indicator appears where new items will appear, at the end of the current items grid.)
译文

</figcaption></figure></div></div>

[en]: <> (Integrating with actions)
#### 译文

[en]: <> (A circular indicator can be integrated into a button or actionable icon to express a connection between an interaction and a specific item. They are typically used to express when an interaction, such as clicking a button again, isn’t available.)
译文

[en]: <> (They should be used for short, indeterminate activities \(between 2-5 seconds\). Longer activities may require alternate methods of communication, such as snackbars or notifications.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/05-circular-placement-integrated-do.mp4" src="{assets_path}/components/progress-indicators/05-circular-placement-integrated-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Use circular indicators for short, indeterminate activities \(< 5 seconds\) requiring user attention.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/progress-indicators/06-circular-placement-integrated-dont.mp4" src="{assets_path}/components/progress-indicators/06-circular-placement-integrated-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t apply progress indicators to every button in your app. They can unnecessarily interrupt the user’s task.)
译文

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Circular indicators)
#### 译文

<figure>

![]({assets_path}/components/progress-indicators/progressindicators-spec-circular.png)

</figure>

[en]: <> (Determinate indicators)
#### 译文

<figure>

![]({assets_path}/components/progress-indicators/progressindicators-spec-linear-determinate.png)

</figure>

[en]: <> (Indeterminate indicators)
### 译文

<figure>

![]({assets_path}/components/progress-indicators/progressindicators-spec-linear-indeterminate.png)

</figure></div>
