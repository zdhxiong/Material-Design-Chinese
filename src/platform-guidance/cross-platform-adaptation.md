<div class="article__intro">

[en]: <> (Cross-platform adaptation)
# 译文

[en]: <> (Material Design supports design and usability best practices across platforms to help create beautiful user experiences.)
译文

<nav>

[en]: <> (When to adapt)
[en]: <> (Cross-platform guidelines)
* [译文](#when-to-adapt)
* [译文](#cross-platform-guidelines)

</nav></div><div class="article__body">

[en]: <> (When to adapt)
<h2 id="when-to-adapt">译文</h2>

[en]: <> (Material Design was built on a foundation of best practices in both traditional and web design, informed by user experience research and cognitive science. The design guidelines that developed from these findings are intended to be universally applied across all platforms and devices.)
译文

[en]: <> (Design conventions can differ from platform to platform. These differences in convention can affect the user's ability to understand the UI or complete certain tasks. In these cases, it is recommended to adapt to platform-specific conventions. In areas where design differences are minimally disruptive, adapting to the platform is optional.)
译文

[en]: <> (The following guidelines indicate when you should adapt to native platform conventions, and when you have the option to adapt. Platform conventions are constantly evolving, and Material Design is evolving with them to increase the quality of our design patterns.)
译文

[en]: <> (Cross-platform guidelines)
<h2 id="cross-platform-guidelines">译文</h2>

[en]: <> (Toolbars)
### 译文

[en]: <> (Toolbars are commonly used to frame the context of a screen. On iOS, toolbars are called navigation bars. On Android, toolbars are called top app bars.)
译文

[en]: <> (It is recommended to use a platform’s default text alignment for toolbar titles, unless multiple action buttons are present.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/as-crossplatform-toolbar-01.png)

<figcaption>

[en]: <> (Android)
#### 译文

[en]: <> (Titles are left-aligned by default in top app bars.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/material-design.platform-adaptation-toolbar-2.png)

<figcaption>

[en]: <> (iOS)
#### 译文

[en]: <> (Titles are center-aligned by default in navigation bars.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/as-crossplatform-toolbar-02.png)

<figcaption>

[en]: <> (Android)
#### 译文

[en]: <> (When multiple actions, or even no actions, appear on the right side, top app bar titles are always left-aligned.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/material-design.platform-adaptation-toolbar-4.png)

<figcaption>

[en]: <> (iOS)
#### 译文

[en]: <> (When multiple action buttons are on the right side, or on the home screen of an application, titles may be left-aligned.)
译文

</figcaption></figure></div></div>

[en]: <> (Iconography)
### 译文

[en]: <> (System icons are used to represent the most universally available actions for the platform.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/as-crossplatform-iconography-01.png)

<figcaption>

[en]: <> (Android)
#### 译文

[en]: <> (The Up button contains a thin arrow with a stem.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/material-design.platform-adaptation-iconography-2.png)

<figcaption>

[en]: <> (iOS)
#### 译文

[en]: <> (On iOS, the back arrow is thicker and doesn’t have a stem. It should include a label to its destination.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/as-crossplatform-iconography-02.png)

<figcaption>

[en]: <> (Android)
#### 译文

[en]: <> (The action overflow menu icon \(indicated by the “More…” symbol\) contains three vertical dots.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/material-design.platform-adaptation-iconography-4.png)

<figcaption>

[en]: <> (iOS)
#### 译文

[en]: <> (The action overflow menu icon \(indicated by the “More…” symbol\) contains three horizontal dots.)
译文

</figcaption></figure></div></div>

[en]: <> (Controls)
### 译文

[en]: <> (Controls should clearly indicate how users should interact with them.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/as-crossplatform-controls.png)

<figcaption>

[en]: <> (Android)
#### 译文

[en]: <> (Use Material switches, checkboxes, and radio buttons.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/material-design.platform-adaptation-control-2.png)

<figcaption>

[en]: <> (iOS)
#### 译文

[en]: <> (Native platform switches may be used as they have matching functionality and appearance as Material switches.)
译文

[en]: <> (Use switches instead of check boxes and check mark lists instead of radio buttons, as these are the graphics expected on iOS.)
译文

</figcaption></figure></div></div>

[en]: <> (Gestures)
### 译文

[en]: <> (Edge swipe)
#### 译文

[en]: <> (An edge swipe starts from outside of the screen to reveal off-screen content.)
译文

[en]: <> (Edge swipes can conflict with other swipe gestures, such as horizontal swipes through pages or table rows. To avoid these kinds of conflicts, an edge swipe should perform the same behavior as any other swipe that exists over a content area.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/platform-guidance/cross-platform-adaptation/platform-adaptation-android.mp4" src="{assets_path}/platform-guidance/cross-platform-adaptation/platform-adaptation-android.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Android)
#### 译文

[en]: <> (When conflicting gestures are not present, performing an edge swipe from the left reveals off-screen content, such as a navigation drawer.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/platform-guidance/cross-platform-adaptation/platform-adaptation-ios.mp4" src="{assets_path}/platform-guidance/cross-platform-adaptation/platform-adaptation-ios.mp4" type="video/mp4"></video><figcaption>

[en]: <> (iOS)
#### 译文

[en]: <> (When conflicting gestures are not present, performing an edge swipe from the left navigates you back through an app’s hierarchy.)
译文

</figcaption></figure></div></div>

[en]: <> (Typography)
### 译文

[en]: <> (Typography communicates both text content and branding. In both cases, text must be accessible and resizable.)
译文

[en]: <> (If your app already uses typography for branding, it is recommended to do so in moderation.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/material-design.platform-adaptation-typography-1.png)

<figcaption>

[en]: <> (Android)
#### 译文

[en]: <> (The default typeface on Android is Roboto. On Android, text size should be specified in scaleable pixels to allow type to be resized using accessibility features.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/cross-platform-adaptation/material-design.platform-adaptation-typography-2.png)

<figcaption>

[en]: <> (iOS)
#### 译文

[en]: <> (The default typeface on iOS is San Francisco. Using this typeface is the easiest way to implement accessibility features like Dynamic Type. Using other typefaces may require making adjustments to get the same accessibility features.)
译文

</figcaption></figure></div></div></div>
