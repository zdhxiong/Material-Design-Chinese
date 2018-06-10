<div class="article__intro">

[en]: <> (Android swipe to refresh)
# 译文

[en]: <> (Swipe to refresh manually refreshes screen content with a user action or gesture.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Behavior & placement)
* [译文](#usage)
* [译文](#behavior-placement)

</nav>

</div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Swipe to refresh is a [swipe gesture]\(https://www.mdui.org/design/patterns/gestures.html#gestures-gestures\) available at the beginning of lists, grid lists, and card collections where the most recent content appears \(Index 0\).)
译文

[en]: <> (It’s best to use this gesture with dynamic content that has frequent updates surfacing from a consistent location, where users have a high probability of seeing new content after initiating the gesture.)
译文

[en]: <> (Refresh indicator)
### 译文

[en]: <> (The refresh indicator appears only in conjunction with a refresh gesture or action. Syncing does not display a refresh indicator.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Effects)
#### 译文

[en]: <> (Changes may not be immediately obvious to users when this gesture is used in views that can change significantly upon refresh. For example, the refresh may non-sequentially delete, reorder, modify, and insert items or change only off-screen items.)
译文

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-behavior.mp4" src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-behavior.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Animation showing swipe to refresh)
译文

</figcaption>

</figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Swipe to refresh should not be used in the following situations:)
译文

[en]: <> (Navigation drawers)
[en]: <> (Home screen widgets)
[en]: <> (Pannable content)
* 译文
* 译文
* 译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-swipe-to-refresh/as-swipetorefresh-usage-refreshindicator-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t place refresh indicators in navigation drawers.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-swipe-to-refresh/as-swipetorefresh-usage-refreshindicator-dont-widgets.png)

<figcaption>

{dont}

[en]: <> (Don’t display refresh indicators on regions that should update automatically, such as Home screen widgets.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-swipe-to-refresh/as-swipetorefresh-usage-refreshindicator-dont-pannablecontent.png)

<figcaption>

{dont}

[en]: <> (Don’t attach refresh indicators to pannable content, such as in maps, as the swipe gesture is already being used for other actions on those regions.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Behavior & placement)
<h2 id="behavior-placement">译文</h2>

[en]: <> (Behavior)
### 译文

[en]: <> (As the refresh indicator scales into view, the circular spinner fades in while rotating.)
译文

[en]: <> (The refresh indicator remains visible until the refresh activity completes and any new content is visible, or the user navigates away from the refreshing content.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-behavior-do.mp4" src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-behavior-do.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (Keep the refresh indicator in view until the activity is completed to provide status of the refresh activity.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-behavior-dont.mp4" src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-behavior-dont.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (Don’t scroll the refresh indicator off-screen, as it hides the status of the refresh activity. It could imply that the refresh activity is associated with a specific component, such as a card, instead of the entire screen.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Refresh indicator transitions)
#### 译文

[en]: <> (When a surface is in front of the surface with refreshing content, the refresh indicator transitions from behind that surface and is clipped until fully visible.)
译文

[en]: <> (The refresh indicator increases in size as it translates when:)
译文

[en]: <> (The refreshing material is at a higher elevation than all other surfaces)
[en]: <> (A content refresh is initiated via an app bar or overflow menu action)
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-coplanar.mp4" src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-coplanar.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Refreshing content that is coplanar with another surface.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-belowsurface.mp4" src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-belowsurface.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Refreshing content that is below another surface in z-space.)
译文

</figcaption>

</figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-tap.mp4" src="{assets_path}/platform-guidance/android-swipe-to-refresh/patterns-swipetorefresh-tap.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Refreshing content generated by an app bar action.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Threshold requirements)
#### 译文

[en]: <> (To ensure intentional usage of the swipe to refresh gesture, the refresh indicator must pass a threshold before the app will refresh. This threshold is indicated by a number of cues:)
译文

[en]: <> (The circular spinner reaches 100% opacity)
[en]: <> (The rotation of the circular spinner slows down)
[en]: <> (The rate of translation of the refresh indicator slows down)
* 译文
* 译文
* 译文

[en]: <> (After passing the threshold, completing the gesture initiates a refresh.)
译文

[en]: <> (Reversing the gesture past the threshold will cancel the refresh action.)
译文

[en]: <> (Swipe to refresh in composition)
### 译文

[en]: <> (Gesture positioning)
#### 译文

[en]: <> (Typically, the refresh gesture is available at the top of content collections, but it can also be at the bottom of the screen.)
译文

[en]: <> (Refresh indicator \(Horizontal resting position\))
#### 译文

[en]: <> (The refresh indicator, when resting, is centered horizontally relative to refreshing content.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-swipe-to-refresh/as-swipetorefresh-placement-horizontal-do.png)

<figcaption>

{do}

[en]: <> (Horizontally center the refresh indicator over the refreshing content.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-swipe-to-refresh/as-swipetorefresh-placement-horizontal-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t horizontally align the refresh indicator to one side of the refreshing content.)
译文

</figcaption></figure>

</div></div>

<figure>

![]({assets_path}/platform-guidance/android-swipe-to-refresh/as-swipetorefresh-placement-unexpectedlocation.png)

<figcaption>

{dont}

[en]: <> (Placing the refresh indicator in unexpected locations that makes its relationship to refreshing content ambiguous.)
译文

</figcaption></figure>

[en]: <> (Refresh indicator \(Vertical resting position\))
#### 译文

[en]: <> (The refresh indicator is located near the top of refreshing content.)
译文

[en]: <> (Its vertical resting position can be adjusted to improve the harmony of a layout. For example, the indicator may fall on a surface’s edge or the layout grid, as long as it’s located near the top of the refreshing content.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-swipe-to-refresh/as-swipetorefresh-placement-neartop-do.png)

<figcaption>

{do}

[en]: <> (Position the refresh indicator near the top of refreshing content.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-swipe-to-refresh/as-swipetorefresh-placement-center-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t vertically position the refresh indicator where it will obstruct content.)
译文

</figcaption></figure>

</div></div>
</div>
