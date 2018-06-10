<div class="article__intro">

[en]: <> (Speed)
# 译文

[en]: <> (Speed adjustments make transitions responsive and smooth.)
译文

<nav>

[en]: <> (Controlling speed)
[en]: <> (Duration)
[en]: <> (Easing)
* [译文](#controlling-speed)
* [译文](#duration)
* [译文](#easing)

</nav>

</div><div class="article__body">

[en]: <> (Controlling speed)
<h2 id="controlling-speed">译文</h2>

[en]: <> (Transition speed is the observable speed at which a UI changes states. It’s primarily controlled by adjusting *duration* \(how long a transition lasts\), but also by *easing* \(acceleration over time\) and the distance that elements move.)
译文

[en]: <> (Apply the right easing type before adjusting duration, as easing adjustments may affect duration.)
译文

[en]: <> (Usage)
### 译文

[en]: <> (Appropriate transition speed helps users to follow UI changes, without complicating tasks. The shortest duration possible should be used that isn’t abrupt or jarring.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/posivibe-speed-do-v03.mp4" src="{assets_path}/motion/speed/posivibe-speed-do-v03.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (Make transitions quick and easy to follow.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/posivibe-speed-dont-v02.mp4" src="{assets_path}/motion/speed/posivibe-speed-dont-v02.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (Avoid transitions that are too fast or slow.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Duration)
<h2 id="duration">译文</h2>

[en]: <> (Regardless of an animation’s style, transitions shouldn’t be jarringly fast or so slow that they keep the user waiting. The right combination of duration and easing produces fluid and clear transitions. The factors below detail how duration should be adjusted to suit each animation.)
译文

[en]: <> (Complexity level)
### 译文

[en]: <> (Simple animations require less time to complete than complex animations.)
译文

[en]: <> (Simple animations)
#### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/01-iconssimple.mp4" src="{assets_path}/motion/speed/01-iconssimple.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Selection controls have a duration of 100ms.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/01-dialogsenterexit.mp4" src="{assets_path}/motion/speed/01-dialogsenterexit.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Dialogs enter and exit with a fade animation.)
译文

[en]: <> (Fade in duration: 150ms)
译文

[en]: <> (Fade out duration: 75ms)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Complex animations)
#### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/01-iconsmedium.mp4" src="{assets_path}/motion/speed/01-iconsmedium.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Shape changes are more complex, so they have a longer duration of 200ms.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/01-iconscomplex.mp4" src="{assets_path}/motion/speed/01-iconscomplex.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Icons with detailed animations have a duration of 500ms.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Exits and closing)
### 译文

[en]: <> (Transitions that close, dismiss, or collapse an element use shorter durations, as they require less user attention than the user’s next task.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/02-baseline-enterexit.mp4" src="{assets_path}/motion/speed/02-baseline-enterexit.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (A nav drawer opens over 250ms, and closes over 200ms.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/02-baseline-expand-collapse-v05.mp4" src="{assets_path}/motion/speed/02-baseline-expand-collapse-v05.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (This card expands over 300ms, and collapses over 250ms.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Area)
### 译文

[en]: <> (Transitions that traverse a small area of the screen have shorter durations than those that traverse larger areas.)
译文

[en]: <> (Small)
#### 译文

[en]: <> (Animated elements that traverse a small portion of the screen have short durations, like icons and selection controls.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/01-smallswitch.mp4" src="{assets_path}/motion/speed/01-smallswitch.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (A switch animation has a duration of 100ms.)
译文

</figcaption>

</figure>

[en]: <> (Medium)
#### 译文

[en]: <> (Animated elements that traverse a larger part of the screen have slightly longer durations, like bottom sheets and expanding chips.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/02-bottomsheet-partial.mp4" src="{assets_path}/motion/speed/02-bottomsheet-partial.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Bottom sheet)
译文

[en]: <> (Expand: 250ms)
[en]: <> (Collapse: 200ms)
* 译文
* 译文


</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/02-chips-partial.mp4" src="{assets_path}/motion/speed/02-chips-partial.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Chip)
译文

[en]: <> (Expand: 250ms)
[en]: <> (Collapse: 200ms)
* 译文
* 译文

</figcaption>

</figure>

</div></div>

[en]: <> (Large)
#### 译文

[en]: <> (Animated elements that traverse a large portion of the screen have the longest durations.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/03-card-full.mp4" src="{assets_path}/motion/speed/03-card-full.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Card)
译文

[en]: <> (Expand: 300ms)
[en]: <> (Collapse: 250ms)
* 译文
* 译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/03-dps-full.mp4" src="{assets_path}/motion/speed/03-dps-full.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Persistent sheet)
译文

[en]: <> (Expand: 300ms)
[en]: <> (Collapse: 250ms)
* 译文
* 译文

</figcaption>

</figure>

</div></div>

[en]: <> (Easing)
<h2 id="easing">译文</h2>

[en]: <> (Easing is a way to adjust an animation’s rate of change. Easing allows transitioning elements to speed up and slow down, rather than moving at a constant rate.)
译文

[en]: <> (In the real world, things don’t start or stop moving instantaneously. They take time to speed up and slow down. Easing makes elements move as though influenced by natural forces like friction.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/01-curvenocurve-v1.mp4" src="{assets_path}/motion/speed/01-curvenocurve-v1.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Transitions without easing look stiff and mechanical.)
译文

</figcaption>

</figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/01-easing-do.mp4" src="{assets_path}/motion/speed/01-easing-do.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (Use easing that allows elements to speed up and slow down together. The acceleration of these elements is synchronized, creating a unified impression.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/01-easing-dont.mp4" src="{assets_path}/motion/speed/01-easing-dont.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (Avoid speeding up elements that should be slowing down, which creates a disorganized impression.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Easing types)
### 译文

[en]: <> (Easing types may be named differently across platforms. These guidelines refer to them as standard, accelerate, and decelerate.)
译文

[en]: <> (Standard easing)
### 译文

[en]: <> (*Standard easing* puts subtle attention at the end of an animation, by giving more time to deceleration than acceleration. It is the most common form of easing.)
译文

[en]: <> (Elements that begin and end at rest use standard easing. They speed up quickly and slow down gradually, in order to emphasize the end of the transition.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/02-standardcurve-v1.mp4" src="{assets_path}/motion/speed/02-standardcurve-v1.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (This graph shows the easing of an element that remains visible throughout a transition. The y-axis shows the position and the x-axis shows the time.)
译文

</figcaption>

</figure>

[en]: <> (Platform         | Protocol)
[en]: <> (---------        |----------)
[en]: <> (Android          | FastOutSlowInInterpolator)
[en]: <> (iOS              | [[CAMediaTimingFunction alloc] initWithControlPoints:0.4f:0.0f:0.2f:1.0f])
[en]: <> (CSS              | cubic-bezier\(0.4, 0.0, 0.2, 1\);)
[en]: <> (After Effects    | Outgoing Easing: 40%, Incoming Easing: 80%)

译文     | 译文
--------|---------
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文

[en]: <> (Decelerate easing)
### 译文

[en]: <> (Incoming elements are animated using deceleration easing, which starts a transition at peak velocity \(the fastest point of an element’s movement\) and ends at rest.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/03-deceleratecurve.mp4" src="{assets_path}/motion/speed/03-deceleratecurve.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (This graph shows the easing of an element that is visible only at the end of a transition. The y-axis shows the position and the x-axis shows the time.)
译文

</figcaption>

</figure>

[en]: <> (Platform         | Protocol)
[en]: <> (---------        |----------)
[en]: <> (Android          | LinearOutSlowInInterpolator)
[en]: <> (iOS              | [[CAMediaTimingFunction alloc] initWithControlPoints:0.0f:0.0f:0.2f:1.0f])
[en]: <> (CSS              | cubic-bezier\(0.0, 0.0, 0.2, 1\);)
[en]: <> (After Effects    | Outgoing Easing: 0%, Incoming Easing: 80%)

译文     | 译文
--------|---------
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文

[en]: <> (Accelerate easing)
### 译文

[en]: <> (Elements exiting a screen use acceleration easing, where they start at rest and end at peak velocity.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/motion/speed/04-acceleratecurve.mp4" src="{assets_path}/motion/speed/04-acceleratecurve.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (This graph shows the easing of an element that is visible only at the beginning of a transition. The y-axis shows the position and the x-axis shows the time.)
译文

</figcaption>

</figure>

[en]: <> (Platform         | Protocol)
[en]: <> (---------        |----------)
[en]: <> (Android          | FastOutLinearInInterpolator)
[en]: <> (iOS              | [CAMediaTimingFunction alloc] initWithControlPoints:0.4f:0.0f:1.0f:1.0f])
[en]: <> (CSS              | cubic-bezier\(0.4, 0.0, 1, 1\);)
[en]: <> (After Effects    | Outgoing Easing: 40%, Incoming Easing: 0%)

译文     | 译文
--------|---------
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文

</div>
