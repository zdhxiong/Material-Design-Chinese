<div class="article__intro">

[en]: <> (Sheets: bottom)
# 底部卡片

[en]: <> (Bottom sheets are surfaces containing supplementary content that are anchored to the bottom of the screen.)
译文

<figure>

![]({assets_path}/components/sheets-bottom/bottom-sheet-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Standard bottom sheet)
[en]: <> (Modal bottom sheet)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#standard-bottom-sheet)
* [译文](#modal-bottom-sheet)
* [译文](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Bottom sheets are supplementary surfaces primarily used on mobile.)
译文

[en]: <> (They come in two types:)
译文

[en]: <> (*Standard bottom sheets* display content that complements the screen’s primary content. They remain visible while users interact with the primary content.)
[en]: <> (*Modal bottom sheets* are an alternative to inline menus or simple dialogs on mobile, providing room for additional items, longer descriptions, and iconography. They must be dismissed in order to interact with the underlying content.)
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/usage-standard.png)

<figcaption>

[en]: <> (Standard bottom sheet)
#### 译文

[en]: <> (A user can interact with both the bottom sheet and the rest of the screen content.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/usage-modal.png)

<figcaption>

[en]: <> (Modal bottom sheet)
#### 译文

[en]: <> (A user must interact with or dismiss a modal bottom sheet.)
译文

</figcaption></figure></div></div>

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/sheets-bottom-illos-01.png)

<figcaption>

[en]: <> (Supporting)
#### 译文

[en]: <> (Bottom sheets contain content that supplements the screen’s primary UI region.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/sheets-bottom-illos-03.png)

<figcaption>

[en]: <> (Flexible)
#### 译文

[en]: <> (Bottom sheets can display a wide variety of content and layouts.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/sheets-bottom-illos-02.png)

<figcaption>

[en]: <> (Ergonomic)
#### 译文

[en]: <> (Bottom sheets are easy to reach on a mobile device.)
译文

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<figure>

![]({assets_path}/components/sheets-bottom/anatomy.png)

<figcaption>

[en]: <> (Sheet)
[en]: <> (Contents)
[en]: <> (Scrim \(Modal only\))
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Sheet)
### 译文

[en]: <> (Bottom sheets are anchored to the bottom edge of the screen and appear in front of other UI elements. They are full-width on mobile and can be inset or full-width on tablet or desktop.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/anatomy-sheet-placement-do.png)

<figcaption>

{do}

[en]: <> (A bottom sheet is anchored to the bottom edge of the screen.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/anatomy-sheet-placement-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t inset all sides of a bottom sheet from screen edges. This can make it hard to see and allow it to be confused for other components, such as snackbars.)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/components/sheets-bottom/anatomy-sheet-desktop.png)

<figcaption>

[en]: <> (Standard bottom sheet inset on desktop)
译文

</figcaption></figure>

[en]: <> (Contents)
### 译文

[en]: <> (Bottom sheets can display a wide variety of content and layouts, ranging from menu items \(in list and grid layouts\), to supplemental content laid out according to the layout grid.)
译文

[en]: <> (Content from a bottom sheet that initially appears below the screen edge can become visible when the sheet is dragged into view.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/anatomy-contents-list.png)

<figcaption>

[en]: <> (Menu of actions \(in a list\) inside a modal bottom sheet)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/anatomy-contents-grid.png)

<figcaption>

[en]: <> (Menu of apps \(in a grid layout\) inside a modal bottom sheet)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/anatomy-contents-partial.png)

<figcaption>

[en]: <> (The location information in this standard bottom sheet initially extends below the screen edge. It can be dragged into view.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/anatomy-contents-full.png)

<figcaption>

[en]: <> (This music player has been made fully visible to reveal a track list beneath the player.)
译文

</figcaption></figure></div></div>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Visibility)
### 译文

[en]: <> (Initial appearance)
#### 译文

[en]: <> (When bottom sheets initially appear on screen, they may contain content that extends below the bottom of the screen. They can be swiped or dragged up to become full-screen. Depending on the content, bottom sheets can also become full-screen by tapping on their surface or an expand icon.)
译文

[en]: <> (Full-screen)
#### 译文

[en]: <> (When full-screen, bottom sheets can be internally scrolled to reveal additional content. They display a top app bar, which elevates upon scroll.)
译文

[en]: <> (In the top app bar, full-screen standard bottom sheets contain a collapse icon that returns the sheet to its initial position. Full-screen modal bottom sheets contain a dismiss icon that dismisses the sheet entirely from view.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sheets-bottom/behavior-visibility-standard.mp4" src="{assets_path}/components/sheets-bottom/behavior-visibility-standard.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Partially visible bottom sheets can be dragged to full-screen view and scroll internally.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sheets-bottom/modal-behavior-dismissal-close.mp4" src="{assets_path}/components/sheets-bottom/modal-behavior-dismissal-close.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Include a close affordance in a full-height modal bottom sheet to dismiss the sheet.)
译文

</figcaption></figure></div></div>

[en]: <> (Standard bottom sheet)
<h2 id="standard-bottom-sheet">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Standard bottom sheets co-exist with the screen’s main UI region and allow for simultaneously viewing and interacting with both regions. They are commonly used to keep a feature or secondary content visible on screen when content in main UI region is frequently scrolled or panned.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/standard-usage-content.png)

<figcaption>

{do}

[en]: <> (Standard bottom sheets can contain supplementary content that continues below the screen, such as location information over a map.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/standard-usage-feature.png)

<figcaption>

{do}

[en]: <> (Use a standard bottom sheet to persist an important feature such as media controls in a music app.)
译文

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 译文

[en]: <> (Interaction)
#### 译文

[en]: <> (Standard bottom sheets remain on-screen when a user interacts with the main UI region or the sheet itself. They have a default elevation of 8dp, which allows content in the main UI region behind to scroll or pan and for the sheet to temporarily cover the main UI region when made full-screen. At full-screen height, they should contain a collapse icon in an app bar to return to their initial position.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/standard-behavior-interaction-drag.png)

<figcaption>

{do}

[en]: <> (Standard bottom sheets are elevated above the main UI region so their visibility is not affected by panning or scrolling.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/standard-behavior-interaction-scroll.png)

<figcaption>

{do}

[en]: <> (This music player in a standard bottom sheet remains on-screen as the user browses available music.)
译文

</figcaption></figure></div></div>

[en]: <> (Placement)
### 位置

[en]: <> (The contents of standard bottom sheets on mobile can be moved into side sheets on larger screen sizes given the additional horizontal space.)
译文

<figure>

![]({assets_path}/components/sheets-bottom/standard-placement-mobile.png)

<figcaption>

[en]: <> (On mobile, the location information for this map is displayed in a standard bottom sheet due to limited screen width.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/sheets-bottom/standard-placement-desktop.png)

<figcaption>

[en]: <> (On desktop, the location information for this map is displayed in side sheet because screen widths are larger than screen heights.)
译文

</figcaption></figure>

[en]: <> (Modal bottom sheet)
<h2 id="modal-bottom-sheet">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Modal bottom sheets present a set of choices while blocking interaction with the rest of the screen. They are an alternative to inline menus and simple dialogs on mobile, providing additional room for content, iconography, and actions.)
译文

[en]: <> (Modal bottom sheets are used in mobile apps only.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/modal-usage-overflow.png)

<figcaption>

{do}

[en]: <> (Modal bottom sheets can be used instead of menus to present additional screen actions.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/modal-usage-cross-app.png)

<figcaption>

{do}

[en]: <> (Use a modal bottom sheet to provide deep links to another app.)
译文

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 译文

[en]: <> (Elevation and scrim)
#### 译文

[en]: <> (Modal bottom sheets have a default elevation of 16dp. This elevation allows them to appear over most UI elements and allows them to be pulled up in front of the entire UI to display more options.)
译文

[en]: <> (A modal bottom sheet causes all content and UI elements behind it to display a scrim, which indicates that they will not respond to user interaction. Tapping the scrim dismisses both the modal bottom sheet and scrim from view.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sheets-bottom/modal-usage-overflow.mp4" src="{assets_path}/components/sheets-bottom/modal-usage-overflow.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Use a visible scrim with modal bottom sheets to inform users they cannot interact with the rest of the screen.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sheets-bottom/modal-usage-overflow-dont.mp4" src="{assets_path}/components/sheets-bottom/modal-usage-overflow-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t use an invisible scrim for modal bottom sheets. This can mislead users about their ability to interact with the rest of the screen.)
译文

</figcaption></figure></div></div>

[en]: <> (Visibility)
#### 译文

[en]: <> (To provide initial access to its top actions, the initial vertical position of modal bottom sheets is capped at 50% of the screen height.)
译文

[en]: <> (Modal bottom sheets whose contents exceed 50% of the screen height can then be pulled across the full screen, scrolling internally to access their remaining items.)
译文

[en]: <> (Sheet height                                     | Visibility and behavior)
[en]: <> (---------                                        |----------)
[en]: <> (Under 50% of screen height                       | Visible at full height)
[en]: <> (50 to 100% of screen height                      | Partially visibility at 50% of screen height.<br>On scroll or surface tap, reveal full sheet.)
[en]: <> (Greater than or equal to 100% of screen height   | Partially visible at 50% of screen height. <br>On scroll or container tap, move to top of screen and scroll contents internally. <br>Add internal action to close.)

译文     | 译文
--------|----------
译文     | 译文
译文     | 译文<br>译文
译文     | 译文<br>译文<br>译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/modal-behavior-visibility-under-half-do.png)

<figcaption>

{do}

[en]: <> (Modal bottom sheets with few items are fully visible upon opening.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/modal-behavior-visibility-over-half-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t make tall bottom sheets full-screen upon opening. This places the top content immediately out of reach for users on mobile devices.)
译文

</figcaption></figure></div></div>

[en]: <> (Control)
#### 译文

[en]: <> (Modal bottom sheets appear when triggered by a user action, such as tapping a button or an overflow icon. They can be dismissed by:)
译文

[en]: <> (Tapping a menu item or action within the bottom sheet)
[en]: <> (Tapping the scrim)
[en]: <> (Swiping the sheet down)
[en]: <> (Using a close affordance within the bottom sheet’s top app bar, if available)
* 译文
* 译文
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/modal-behavior-dismissal-tap.png)

<figcaption>

{do}

[en]: <> (Tapping the scrim dismisses a modal bottom sheet.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/modal-behavior-dismissal-swipe.png)

<figcaption>

{do}

[en]: <> (A modal bottom sheet can be dismissed by swiping the sheet down.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-bottom/modal-behavior-dismissal-close.png)

<figcaption>

{do}

[en]: <> (Display a close affordance in a full-screen modal bottom sheet.)
译文

</figcaption></figure></div></div>

[en]: <> (Placement)
### 位置

[en]: <> (Modal bottom sheets are most effective on small screens.)
译文

[en]: <> (On larger screens, use menus or dialogs to create clear visual connections to the triggering UI element.)
译文

<figure>

![]({assets_path}/components/sheets-bottom/modal-placement.png)

<figcaption>

[en]: <> (An overflow menu using a bottom sheet on mobile \(1\) and an inline menu on desktop \(2\).)
译文

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Modal bottom sheet for mobile)
#### 译文

<figure>

![]({assets_path}/components/sheets-bottom/specs-sheets-bottom-modal-50.png)

</figure><figure>

![]({assets_path}/components/sheets-bottom/specs-sheets-bottom-modal-lessthan50.png)

</figure>

[en]: <> (Standard bottom sheet for mobile)
#### 译文

<figure>

![]({assets_path}/components/sheets-bottom/specs-sheets-bottom-coplanar.png)

</figure></div>
