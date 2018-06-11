<div class="article__intro">

[en]: <> (Sheets: side)
# 译文

[en]: <> (Side sheets are surfaces containing supplementary content that are anchored to the left or right edge of the screen.)
译文

<figure>

![]({assets_path}/components/sheets-side/side-sheet-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Placement)
[en]: <> (Standard side sheet)
[en]: <> (Modal side sheet)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#placement)
* [译文](#standard-side-sheet)
* [译文](#modal-side-sheet)
* [译文](#theming)
* [译文](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Side sheets are supplementary surfaces primarily used on tablet and desktop.)
译文

[en]: <> (They come in two types:)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Standard side sheets)
#### 译文

[en]: <> (*Standard side sheets* display content that complements the screen’s primary content. They remain visible while users interact with primary content.)
译文

[en]: <> (Common uses include)
译文

[en]: <> (Displaying a list of actions that affect the screen’s primary content, such as filters)
[en]: <> (Displaying supplemental content and features)
* 译文
* 译文

</div><div class="mdui-col">

[en]: <> (Modal side sheets)
#### 译文

[en]: <> (*Modal side sheets* are used on mobile instead of standard side sheets, due to limited screen size. They can display the same types of content as standard side sheets, but must be dismissed in order to interact with the underlying content.)
译文

</div></div><figure>

![]({assets_path}/components/sheets-side/usage-standard.png)

<figcaption>

[en]: <> (This standard side sheet on desktop contains filters that control the files shown in the primary UI region.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-side/usage-modal.png)

<figcaption>

[en]: <> (A modal side sheet on mobile is used instead of a standard side sheet, because of the limited screen space.)
译文

</figcaption></figure></div></div>

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-side/side-sheets-illos-04.png)

<figcaption>

[en]: <> (Supporting)
#### 译文

[en]: <> (Side sheets contain content that supplements the screen’s primary UI region.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-side/side-sheets-illos-02.png)

<figcaption>

[en]: <> (Flexible)
#### 译文

[en]: <> (Side sheets display a wide variety of content and layouts.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-side/side-sheets-illos-03.png)

<figcaption>

[en]: <> (Contextual)
#### 译文

[en]: <> (Side sheets can be visible or hidden based on screen size or user need, and they often become bottom sheets on mobile.)
译文

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<figure>

![]({assets_path}/components/sheets-side/anatomy.png)

<figcaption>

[en]: <> (Sheet)
[en]: <> (Content)
[en]: <> (Scrim \(Modal only\))
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Sheet)
### 译文

[en]: <> (Side sheets are anchored to the left or right edge of the screen. They are a fixed width and typically span the height of the screen. Their dimensions depend on how the app’s layout is subdivided into UI regions.)
译文

<figure>

![]({assets_path}/components/sheets-side/anatomy-sheet-placement-do.png)

<figcaption>

{do}

[en]: <> (Place side sheets along the left or right edge of the screen.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/sheets-side/anatomy-sheet-placement-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t fully inset a side sheet from the screen edges. This makes the sheet’s position and scroll behavior unclear, while obscuring primary content.)
译文

</figcaption></figure>

[en]: <> (Contents)
### 译文

[en]: <> (Side sheets can display a wide variety of content and layouts, ranging from a list of actions to supplemental content in a tabular layout.)
译文

<figure>

![]({assets_path}/components/sheets-side/anatomy-contents-metadata.png)

<figcaption>

[en]: <> (Metadata about a photo in a standard side sheet)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-side/anatomy-contents-filters.png)

<figcaption>

[en]: <> (A list of filters in a modal side sheet)
译文

</figcaption></figure></div></div>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Scrolling)
### 译文

[en]: <> (Side sheets can be vertically scrolled independent of the rest of the UI. This allows their scroll position and contents to persist while the page is scrolled, and vice versa.)
译文

[en]: <> (Side sheets cannot be horizontally scrolled.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sheets-side/behavior-scrolling-do.mp4" src="{assets_path}/components/sheets-side/behavior-scrolling-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Side sheets can vertically scroll internally when their content exceeds the screen height.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-side/behavior-scrolling-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t allow horizontal scrolling in a side sheet or layout in a way that suggests horizontal scrolling. A side sheet’s narrow width leaves limited space to fully view items.)
译文

</figcaption></figure></div></div>

[en]: <> (Placement)
<h2 id="placement">译文</h2>

[en]: <> (Screen size)
### 译文

[en]: <> (Side sheets that are modal on mobile, due to limited screen width, can become standard side sheets on tablet and desktop. The reverse is also true.)
译文

<figure>

![]({assets_path}/components/sheets-side/placement-screen-size-do.png)

<figcaption>

{do}

[en]: <> (The filters for this app are placed in a standard side sheet on desktop \(1\) and become modal on mobile due to limited screen width \(2\).)
译文

</figcaption></figure>

[en]: <> (Pairing with navigation drawers)
### 译文

[en]: <> (Side sheets should be placed on the opposite side of a side navigation drawer to avoid obstructing the UI or causing confusion about the sheet’s functionality.)
译文

[en]: <> (Navigation drawers are anchored to the left screen edge in left-to-right languages, and on the right for right-to-left languages.)
译文

<figure>

![]({assets_path}/components/sheets-side/placement-nav-drawer-do.png)

<figcaption>

{do}

[en]: <> (Place a side sheet on the opposite edge of a navigation drawer. This app uses a left-to-right layout, so the navigation drawer is placed on its left edge \(1\) and a standard side sheet is anchored to the right edge \(2\).)
译文

</figcaption></figure><figure>

![]({assets_path}/components/sheets-side/placement-nav-drawer-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t place a side sheet \(2\) along the same screen edge as a navigation drawer \(1\), as the sheet may get covered frequently by an elevated navigation drawer \(or be confused for navigation itself\).)
译文

</figcaption></figure>

[en]: <> (Standard side sheet)
<h2 id="standard-side-sheet">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Standard side sheets co-exist with the screen’s primary UI region, which allows viewing and interaction with both surfaces. They are used only on tablet and desktop.)
译文

[en]: <> (Standard side sheets are commonly used for:)
译文

[en]: <> (Keeping a feature or content on-screen, if the primary UI region is frequently scrolled or panned)
[en]: <> (Contextual actions that affect the primary region, such as filters)
[en]: <> (Supporting information or metadata, such as location or photo details)
[en]: <> (Short tasks that can be accomplished in a single screen, such as configuring options or specifying item details before making a purchase)
* 译文
* 译文
* 译文
* 译文

[en]: <> (Behavior)
### 译文

[en]: <> (Opening and closing)
#### 译文

[en]: <> (Standard side sheets that aren’t permanent should include affordances to open and close the sheet.)
译文

[en]: <> (Common open affordances include action icons in top app bars or buttons in the screen layout. While a single affordance can be used to toggle the visibility of the sheet on or off, a separate close affordance within the sheet is recommended.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sheets-side/standard-behavior-control.mp4" src="{assets_path}/components/sheets-side/standard-behavior-control.mp4" type="video/mp4"></video></figure>

[en]: <> (Placement)
### 译文

[en]: <> (Elevation)
#### 译文

[en]: <> (Standard side sheets can be set at the same elevation as the main content or placed above it, at 8dp.)
译文

[en]: <> (Their elevation can be used to indicate their hierarchical relationship to content or affect its behavior in the layout grid.)
译文

[en]: <> (*Coplanar elevation*)
译文

[en]: <> (Coplanar elevation places the sheet at the same elevation as content, indicating the two surfaces are related and of equal importance. Coplanar sheets affect the layout grid and shrink the available area for content.)
译文

[en]: <> (*Above content*)
译文

[en]: <> (When the standard side sheet is elevated above content, it can indicate hierarchical meaning or simply be for layout purposes. Surfaces elevated in front of others often convey more importance or control over those behind them. They don’t affect the layout grid, and should only be used for temporarily visible sheets since they obscure content.)
译文

<figure>

![]({assets_path}/components/sheets-side/standard-placement-elevation-coplanar.png)

<figcaption>

[en]: <> (This filter sheet is coplanar with the main UI region, indicating its connection to content and allowing both regions to be fully visible.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/sheets-side/standard-placement-elevation-above.png)

<figcaption>

[en]: <> (The metadata for this photo is elevated above it to avoid resizing the image as the sheet opens and closes.)
译文

</figcaption></figure>

[en]: <> (Modal side sheet)
<h2 id="modal-side-sheet">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Modal side sheets present content while blocking interaction with the rest of the screen.)
译文

[en]: <> (On mobile, they are used instead of standard side sheets. On larger screens, they can help focus a user’s attention on a key flow, such as making a purchase.)
译文

[en]: <> (Behavior)
### 译文

[en]: <> (Elevation and scrim)
#### 译文

[en]: <> (Modal side sheets have a default elevation of 16dp. This elevation allows them to appear over all UI elements.)
译文

[en]: <> (A modal side sheet places all content and UI elements behind a scrim, which indicates that they will not respond to user interaction. Tapping the scrim dismisses both the modal side sheet and scrim from view.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-side/modal-behavior-scrim-do.png)

<figcaption>

{do}

[en]: <> (A visible scrim informs users they cannot interact with the rest of the screen.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-side/modal-behavior-scrim-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use an invisible scrim. This can mislead users about their ability to interact with the rest of the screen.)
译文

</figcaption></figure></div></div>

[en]: <> (Control)
#### 译文

[en]: <> (Modal side sheets appear when triggered by a user action, such as tapping a button or action icon in a top app bar. They can be dismissed by:)
译文

[en]: <> (Tapping the scrim)
[en]: <> (Swiping towards the sheet’s anchoring edge \(left or right\))
[en]: <> (Using a close affordance within the side sheet’s header, if available)
* 译文
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-side/modal-behavior-control-tap.png)

<figcaption>

[en]: <> (Tapping the scrim will dismiss a modal side sheet.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sheets-side/modal-behavior-control-swipe.png)

<figcaption>

[en]: <> (A modal side sheet can be dismissed by swiping towards the sheet’s anchoring edge.)
译文

</figcaption></figure></div></div>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Crane Material Theme)
### 译文

[en]: <> (This travel app’s side sheets have been customized using Material Theming, specifically using customized color.)
译文

<figure>

![]({assets_path}/components/sheets-side/sheets-crane-ahero.png)

<figcaption>

[en]: <> (Crane’s customized side sheets)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Crane’s side sheets use custom color on three elements: the container, text, and selection controls.)
译文

<figure>

![]({assets_path}/components/sheets-side/sheets-crane-color.png)

</figure>

[en]: <> (Element             | Category      | Attribute          | Value)
[en]: <> (---------           |----------     |---------           |------)
[en]: <> (Container           | Surface       | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Text                | On Surface    | Color<br>Opacity   | #000000<br>100%)
[en]: <> (Selection controls  | Secondary     | Color<br>Opacity   | #E30425<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Modal side sheet \(Mobile\))
#### 译文

<figure>

![]({assets_path}/components/sheets-side/specs-sheet-side-mobile-modal.png)

</figure>

[en]: <> (Standard side sheet \(Desktop\))

<figure>

![]({assets_path}/components/sheets-side/specs-sheet-side-desktop-standard.png)

</figure></div>
