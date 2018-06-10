<div class="article__intro">

[en]: <> (Android split-screen)
# 译文

[en]: <> (Split-screen mode allows two activities to be visible on screen at the same time.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Behavior)
[en]: <> (Layout)
* [译文](#usage)
* [译文](#behavior)
* [译文](#layout)

</nav>

</div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Apps are not authorized to invoke split-screen mode by themselves; the user must activate it.)
译文

[en]: <> (Launching new activities)
### 译文

[en]: <> (When an app launches a new activity, it will launch within the same portion of the screen by default. Apps will be resized to fit the split-screen view as necessary \(unless your app isn’t compatible with the split-screen format\).)
译文

[en]: <> (When split-screen mode is active, apps may launch new activities in the opposite portion of the screen if the following criteria are met:)
译文

[en]: <> (The original and new activities are related to each other and usable while in split-screen mode)
[en]: <> (The task that the app helps accomplish warrants displaying two activities at once, and hiding the other app that was open)
[en]: <> (It is clear that the app will enter split-screen mode, such as with a button stating “Open in new window”)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/platform-guidance/android-split-screen/01-splitscreen-intro.png)

<figcaption>

[en]: <> (Split screen shown in portrait mode on mobile \(on the left\) and landscape mode on tablet \(on the right\))
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Split-screen mode remains active until the user cancels it or switches to an incompatible app.)
译文

[en]: <> (Resizing split screen)
### 译文

[en]: <> (Users may move and resize each screen in split-screen mode by dragging the divider between the two split screens.)
译文

[en]: <> (Edge swipe gestures)
### 译文

[en]: <> (When split-screen mode is active, the edge swipe gesture will likely not work as intended. Because split-screen mode relies on swiping to resize each split screen, if your app also relies on edge swipes to perform actions, then it’s possible that the swipe will either trigger screen resizing or an action in your app.)
译文

[en]: <> (To avoid this, edge swipes should not be the only way to perform actions in your app. There should be an alternative method to perform each action.)
译文

[en]: <> (For example, the navigation drawer enables an edge swipe to open the drawer, but it is also accessible by pressing the menu icon.)
译文

[en]: <> (Layout)
<h2 id="layout">译文</h2>

[en]: <> (To support split-screen usage, viewable content should be scaled to an appropriate size and density.)
译文

[en]: <> (Primary controls should be adapted for split-screen mode. For example, navigation tabs may be collapsed into a menu.)
译文

[en]: <> (Responsive UI)
### 译文

[en]: <> (Apps in split-screen mode should elegantly adjust across device sizes and orientations.)
译文

[en]: <> (The screen is split along the x-axis in portrait, and along the y-axis in landscape. Changing a device’s orientation should not cause the UI to change unexpectedly. For example, a video displayed in one side of a split screen shouldn’t switch to full-screen if the device is rotated from portrait to landscape orientation.)
译文

[en]: <> (Apps may use the same or different layouts for mobile and tablet:)
译文

[en]: <> (Apps with similar layouts for mobile and tablet may switch between the tablet and mobile UIs when the app is resized, as the transition will not be jarring.)
[en]: <> (Apps with completely different layouts for mobile and tablet should avoid using the mobile UI on tablet in split-screen mode. Instead, the existing tablet UI should be adapted to fit the smaller size to ensure that users have a consistent experience on both devices.)
* 译文
* 译文

<figure>

![]({assets_path}/platform-guidance/android-split-screen/02-splitscreen-samelayout.png)

<figcaption>

[en]: <> (An app may use the same layout across mobile \(left\) and tablet \(right\).)
译文

</figcaption></figure>

<figure>

![]({assets_path}/platform-guidance/android-split-screen/03-splitscreen-differentlayout.png)

<figcaption>

[en]: <> (An app may use different layouts across mobile \(left\) and tablet \(right\).)
译文

</figcaption></figure>

[en]: <> (Design for condensed sizes)
### 译文

[en]: <> (To simplify adapting your app for the various sizes of split-screen mode, it is recommended to design for the smallest size first.)
译文

[en]: <> (Create a layout that works at 220dp wide or tall by condensing elements or removing non-essential ones. The layout may be scaled upward from there.)
译文

<figure>

![]({assets_path}/platform-guidance/android-split-screen/04-splitscreen-34.15-tablet.png)

<figcaption>

[en]: <> (When the split screen is active on a tablet, by default it takes up 34.15% of the entire screen.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/platform-guidance/android-split-screen/05-splitscreen-16.9-mobile.png)

<figcaption>

[en]: <> (When the split screen is active on mobile, the aspect ratio of an app in portrait orientation is 16:9.)
译文

</figcaption></figure>
</div>
