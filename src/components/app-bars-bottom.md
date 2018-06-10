<div class="article__intro">

[en]: <> (App bars: bottom)
# 译文

[en]: <> (A bottom app bar displays navigation and key actions at the bottom of mobile screens.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/bottom-app-bar-intro.png)

</figure>

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#theming)
* [译文](#specs)

</nav>

</div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Bottom app bars provide access to a bottom navigation drawer and up to four actions, including the floating action button.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/bottom-app-bar-illos-01.png)

</figure>

[en]: <> (Actionable)
#### 译文

[en]: <> (Bottom app bars highlight important screen actions and raise awareness of the floating action button.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/bottom-app-bar-illos-02.png)

</figure>

[en]: <> (Flexible)
#### 译文

[en]: <> (A bottom app bar’s layout and actions change based on the needs of the screen.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/bottom-app-bar-illos-03.png)

</figure>

[en]: <> (Ergonomic)
#### 译文

[en]: <> (The bottom app bar is easy to reach from a handheld position on a mobile device.)
译文

</div></div>

[en]: <> (When to use)
### 译文

[en]: <> (Bottom app bars should be used for:)
译文

[en]: <> (Mobile devices only)
[en]: <> (Access to a bottom navigation drawer)
[en]: <> (Screens with two to five actions)
* 译文
* 译文
* 译文

[en]: <> (Bottom app bars shouldn’t be used for:)
译文

[en]: <> (Apps with a bottom navigation bar)
[en]: <> (Screens with one or no actions)
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/usage-when-do.png)

<figcaption>

{do}

[en]: <> (Use a bottom app bar to provide convenient access to actions.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/usage-when-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use a bottom app bar on screens with one or no actions \(other than a FAB\).)
译文

</figcaption></figure>

</div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

[en]: <> (Bottom app bars can contain actions that apply to the context of the current screen. They include a navigation menu control on the far left and a floating action button \(when one is present\). If included in a bottom app bar, an overflow menu control is placed at the end of other actions.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-elements.png)

</figure>

[en]: <> (Container)
[en]: <> (Navigation drawer control)
[en]: <> (Floating action button \(FAB\))
[en]: <> (Action icon)
[en]: <> (Overflow menu control)
* 译文
* 译文
* 译文
* 译文
* 译文

[en]: <> (Positioning)
### 译文

[en]: <> (Bottom app bars have three different layouts based on the presence of a FAB and its position in the bar. These layouts dictate the number of actions that can be included in the bar.)
译文

[en]: <> (Centered FAB)
#### 译文

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-center.png)

<figcaption>

{do}

[en]: <> (Use bottom app bars on home screens that feature a navigation menu control and a prominent action \(such as a FAB\). A minimum of one and a maximum of two additional actions can be placed on the opposite side of the bar.)
译文

</figcaption></figure>

[en]: <> (End FAB)
#### 译文

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-right.png)

<figcaption>

{do}

[en]: <> (Use a FAB on secondary screens that require a floating action button and three to four additional actions.)
译文

</figcaption></figure>

[en]: <> (No FAB)
#### 译文

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-none.png)

<figcaption>

{do}

[en]: <> (When no floating action button is needed, the bottom app bar can accommodate a navigation menu icon and up to four actions aligned on the opposing edge.)
译文

</figcaption></figure>

[en]: <> (Landscape)
#### 译文

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-landscape.png)

<figcaption>

{do}

[en]: <> (In landscape orientation, actions remain aligned to screen edges for easy handheld access)
译文

</figcaption></figure>

[en]: <> (Floating Action Button)
### 译文

[en]: <> (When present, floating action buttons \(FABs\) are displayed on bottom app bars in one of two ways:)
译文

[en]: <> (*Overlap*: The FAB is at a higher elevation than the bottom app bar, and has no effect on the bar’s shape.)
[en]: <> (*Inset*: The FAB is at the same elevation as the bottom app bar, and the bar shape transforms to let the FAB dock in a notch carved into the bottom app bar.)
* 译文
* 译文

[en]: <> (Use an inset to increase the visual prominence of a FAB or accentuate customized element shapes. Refer to the *Theming* section for more guidance on inset FAB’s in a bottom app bar.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-overlap.png)

<figcaption>

[en]: <> (Overlapping FAB)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-cut.png)

<figcaption>

[en]: <> (Inset FAB)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/app-bars-bottom/anatomy-fab-dont.png)

<figcaption>

{dont}

[en]: <> (Do not place a FAB outside of a bottom app bar, as it makes it harder to reach.)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Layout)
### 译文

[en]: <> (To support the intent of different sections of an app, the layout and actions of a bottom app bar can be changed to suit each screen.)
译文

[en]: <> (For example, screens can display more or fewer actions according to what suits the screen content best.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/app-bars-bottom/behavior-layout-primary.mp4" src="{assets_path}/components/app-bars-bottom/behavior-layout-primary.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (To showcase a primary action, this bottom app bar uses the centered FAB layout on its home screen. When viewing a message, the bottom app bar layout changes to the “End FAB” layout to accommodate additional contextual actions.)
译文

</figcaption></figure>

[en]: <> (Scrolling)
### 译文

[en]: <> (Upon scroll, the bottom app bar can appear or disappear:)
译文

[en]: <> (*Scrolling downward* hides the bottom app bar. If a FAB is present, it detaches from the bar and remains on screen.)
[en]: <> (*Scrolling upward* reveals the bottom app bar, and reattaches to a FAB if one is present.)
* 译文
* 译文

[en]: <> (A bottom app bar can contain a shape, such as a notch, along its edge to accommodate the FAB. As the bar detaches from the FAB, the bar returns to its default shape. Upon returning to the screen and reattaching to the FAB, the bar regains its notched shape.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/app-bars-bottom/behavior-scroll.mp4" src="{assets_path}/components/app-bars-bottom/behavior-scroll.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (A FAB can remain on screen, even as a bottom app bar hides when scrolled off-screen.)
译文

</figcaption></figure>

[en]: <> (Elevation)
### 译文

[en]: <> (The bottom app bar has an elevation of 8dp. When paired with a FAB, the FAB’s resting and raised heights should be increased to remain visible above the bottom app bar.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/behavior-elevation-section.png)

<figcaption>

[en]: <> (Content \(0dp\))
[en]: <> (Snackbar \(6dp\))
[en]: <> (Bottom app bar \(8dp\))
[en]: <> (Floating action button \(12dp resting\))
[en]: <> (Bottom navigation drawer \(16dp\))
* 译文
* 译文
* 译文
* 译文
* 译文

</figcaption></figure>

[en]: <> (Menus that are generated by the bottom app bar \(such as a bottom navigation drawer or overflow menu\) open as bottom sheets at a higher elevation than the bar.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/app-bars-bottom/behavior-drawer.mp4" src="{assets_path}/components/app-bars-bottom/behavior-drawer.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (This bottom navigation drawer opens from a bottom app bar. The drawer opens in front of the bottom app bar, and displays a top app bar to close the drawer when it reaches full height.)
译文

</figcaption></figure>

[en]: <> (Elements that cover the bottom app bar)
#### 译文

[en]: <> (The bottom app bar can be covered by keyboards and other temporary surfaces. If your app requires frequent obstruction of the bar, another component should be used instead.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/behavior-keyboard-do.png)

<figcaption>

{do}

[en]: <> (A keyboard can temporarily cover a bottom app bar.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/behavior-keyboard-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t attach a bottom app bar to the top of the keyboard.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Placement)
### 译文

[en]: <> (Navigation)
#### 译文

[en]: <> (A bottom app bar can display a navigation menu icon to open a bottom navigation drawer, but the bar doesn’t contain any navigation actions itself \(such as Up navigation to a home screen or a close icon\). App navigation should be placed in another component such as a top app bar, or embedded on-screen.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/placement-navigation-do.png)

<figcaption>

{do}

[en]: <> (Provide navigation outside of a bottom app bar that allows users to return to the previous app screen.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/placement-navigation-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t place navigation actions in a bottom app bar, as they can be covered by temporary surfaces.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Pairing with a top app bar)
#### 译文

[en]: <> (When used with a bottom app bar, top app bars can provide upwards navigation and additional actions. Throughout an app, actions should be organized and divided consistently across both bars.)
译文

[en]: <> (The following items benefit from specific placement:)
译文

[en]: <> (Place a single navigation menu control in a bottom app bar \(for reachability\))
[en]: <> (Place a single overflow menu control as the trailing action)
[en]: <> (Place actions, like Search, in a consistent location throughout the app)
[en]: <> (Place destructive actions, such as “Delete,” in the top app bar)
* 译文
* 译文
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/placement-top-app-bar-do.png)

<figcaption>

{do}

[en]: <> (Use a top app bar as a container for upwards navigation on secondary screens.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/placement-top-app-bar-dont.png)

<figcaption>

{dont}

[en]: <> (On a home screen, don’t place a navigation menu control in both a top and bottom app bar. Only one app bar should have this control.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/placement-top-app-bar-bottom-primary.png)

<figcaption>

{do}

[en]: <> (Place an overflow menu as the last action between the app bars.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-bottom/placement-top-app-bar-bottom-fixed.png)

<figcaption>

{do}

[en]: <> (A bottom app bar can provide consistent access to actions, such as navigation and search, allowing the top app bar to hold contextual, screen-specific actions.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Snackbars)
#### 译文

[en]: <> (To avoid obstruction, snackbars and toasts should animate in place vertically above a bottom app bar. Refer to [Snackbars]\(https://www.mdui.org/design/components/snackbars.html\) for more guidance on its layout and positioning.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/app-bars-bottom/placement-snackbar-do.mp4" src="{assets_path}/components/app-bars-bottom/placement-snackbar-do.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (Inset a snackbar or toast above a bottom app bar and FAB.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/app-bars-bottom/placement-snackbar-dont.mp4" src="{assets_path}/components/app-bars-bottom/placement-snackbar-dont.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (Don’t place a snackbar in front of a bottom app bar or FAB.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Reply Material Theme)
### 译文

[en]: <> (This email app’s bottom app bar has been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/appbarbottom-reply-ahero.png)

<figcaption>

[en]: <> (Reply’s customized bottom app bar)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Reply’s bottom app bar uses custom color on three elements: the container, text, and icons.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/appbarbottom-reply-color.png)

</figure>

[en]: <> (Element      | Category     | Attribute          | Value)
[en]: <> (---------    |----------    |---------           |------)
[en]: <> (Container    | Primary      | Color<br>Opacity   | #344955<br>100%)
[en]: <> (Text, icons  | On Primary   | Color<br>Opacity   | #FFFFFF<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Reply’s bottom app bar uses custom typography.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/appbarbottom-reply-type.png)

</figure>

[en]: <> (Element      | Category     | Attribute                         | Value)
[en]: <> (---------    |----------    |---------                          |------)
[en]: <> (Text         | H6           | Typeface<br>Font<br>Size<br>Case  | Work Sans<br>Bold<br>21<br>Sentence case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Reply’s bottom app bar uses a custom shape on the top edge of the container.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/appbarbottom-reply-shape.png)

</figure>

[en]: <> (Element      | Attribute    | Value)
[en]: <> (---------    |----------    |---------)
[en]: <> (Container    | Top edge     | Arc SVG<br>Path data: “a 36 36 0 0 1 72 0")

译文     | 译文     | 译文
--------|----------|----------
译文     | 译文     | 译文<br>译文

[en]: <> (Further guidance on path syntax [here]\(https://www.w3.org/TR/SVG/paths.html\) .)
译文

[en]: <> (Posivibes Material Theme)
### 译文

[en]: <> (This social media app’s bottom app bar has been customized using Material Theming. Areas of customization include color and shape.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/appbarbottom-posivibes-ahero.png)

<figcaption>

[en]: <> (Posivibe’s customized bottom app bar)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Posivibe’s bottom app bar uses custom color on two elements: the container and icons.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/appbarbottom-posivibes-color.png)

</figure>

[en]: <> (Element      | Category     | Attribute         | Value)
[en]: <> (---------    |----------    |---------          |------)
[en]: <> (Container    | Surface      | Color<br>Opacity  | #FFFFFF<br>100%)
[en]: <> (Icons        | On Surface   | Color<br>Opacity  | #000000<br>100%)

译文     | 译文     | 译文            | 译文
--------|----------|----------      |-----------
译文     | 译文     | 译文<br>译文     | 译文<br>译文
译文     | 译文     | 译文<br>译文     | 译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Posivibe’s bottom app bar uses a custom shape on the top edge of the container.)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/appbarbottom-posivibes-shape.png)

</figure>

[en]: <> (Element      | Attribute     | Value)
[en]: <> (---------    |----------     |---------)
[en]: <> (Container    | Top edge      | TriangleEdge SVG<br>Path data: “l 42 42 l 42 -42")

译文     | 译文     | 译文
--------|----------|-----------
译文     | 译文     | 译文<br>译文

[en]: <> (For further path syntax guidance, see [https://www.w3.org/TR/SVG/paths.html]\(https://www.w3.org/TR/SVG/paths.html\) .)
译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Mobile portrait)
### 译文

[en]: <> (Bottom app bars are a mobile-only component and are not applicable for tablet or desktop use.)
译文

[en]: <> (Minimum 1, maximum of 2 actions aligned to opposite edge of navigation menu)
译文

[en]: <> (FAB Center)
#### 译文

<figure>

![]({assets_path}/components/app-bars-bottom/spec-bottomappbar-fab-center.png)

</figure>

[en]: <> (FAB Center cut)
#### 译文

<figure>

![]({assets_path}/components/app-bars-bottom/spec-bottomappbar-fab-cut.png)

</figure>

[en]: <> (FAB End)
#### 译文

[en]: <> (Minimum 2, maximum of 4 actions aligned to opposite edge of the FAB)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/spec-bottomappbar-fab-right.png)

</figure>

[en]: <> (No FAB)
#### 译文

[en]: <> (Minimum 2, maximum of 4 actions aligned on opposite edge of navigation menu)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/spec-bottomappbar-fab-none.png)

</figure>

[en]: <> (Mobile landscape)
### 译文

[en]: <> (Bottom app bars are a mobile-only component and are not applicable for tablet or desktop use.)
译文

[en]: <> (Minimum 1, maximum of 2 actions aligned to opposite edge of navigation menu)
译文

<figure>

![]({assets_path}/components/app-bars-bottom/spec-bottomappbar-landscape.png)

</figure>

</div>

