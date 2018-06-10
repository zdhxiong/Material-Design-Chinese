<div class="article__intro">

[en]: <> (App bars: top)
# 译文

[en]: <> (The top app bar displays information and actions relating to the current screen.)
译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-howtouse-1.png)

</figure>

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Contextual action bar)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#contextual-action-bar)
* [译文](#theming)
* [译文](#specs)

</nav>

</div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (The top app bar provides content and actions related to the current screen. It’s used for branding, screen titles, navigation, and actions.)
译文

[en]: <> (It can transform into a contextual action bar.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-top/top-app-bar-illos-01.png)

</figure>

[en]: <> (Persistent)
#### 译文

[en]: <> (Top app bars appear at the top of each screen in an app, and can disappear upon scroll.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-top/top-app-bar-illos-02.png)

</figure>

[en]: <> (Guiding)
#### 译文

[en]: <> (Top app bars provide a reliable way to guide users through an app.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-top/top-app-bar-illos-03.png)

</figure>

[en]: <> (Consistent)
#### 译文

[en]: <> (Top app bars have a consistent position and content to increase familiarity.)

</div></div>

[en]: <> (Types)
### 译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-regular.png)

</figure>

[en]: <> (Regular)
#### 译文

[en]: <> (A regular top app bar)
译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-contextual.png)

</figure>

[en]: <> (Contextual action bar)
#### 译文

[en]: <> (Contextual action bars provide actions for selected items. A top app bar can transform into a contextual action bar, remaining active until an action is taken or it is dismissed.)
译文

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

[en]: <> (The recommended placement of elements in a top app bar for left-to-right languages is:)
译文

[en]: <> (Place navigation on the far left)
[en]: <> (Place any titles to the right of navigation)
[en]: <> (Place contextual actions to the right of navigation)
[en]: <> (Place an overflow menu \(if used\) to the far right)
* 译文
* 译文
* 译文
* 译文

[en]: <> (For right-to-left languages, placement positions should be flipped.)
译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-layout-elements-1.png)

</figure>

[en]: <> (Container)
[en]: <> (Navigation icon \(optional\))
[en]: <> (Title \(optional\))
[en]: <> (Action items \(optional\))
[en]: <> (Overflow menu \(optional\))
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文

[en]: <> (Bar)
### 译文

[en]: <> (The bar holds the content of the top app bar. A variety of bar heights are available:)
译文

[en]: <> (Regular)
[en]: <> (Prominent)
[en]: <> (Dense \(desktop only\))
[en]: <> (Prominent dense \(desktop only\))
* 译文
* 译文
* 译文
* 译文

[en]: <> (Prominent)
#### 译文

[en]: <> (Prominent top app bars can be used for longer titles, to house imagery, or to provide a stronger presence to the top app bar.)
译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-customization-height-prominent-mobile-1.png)

<figcaption>

[en]: <> (Regular top app bar on mobile)
[en]: <> (Prominent top app bar on mobile)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Dense \(desktop only\))
#### 译文

[en]: <> (The top app bar may be condensed on desktop to accommodate denser layouts.)
译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-customization-height-dense-desktop-1.png)

<figcaption>

[en]: <> (Regular top app bar on desktop)
[en]: <> (Dense top app bar on desktop)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Prominent dense)
#### 译文

[en]: <> (Prominent top app bars on desktop can have a dense state to accommodate denser layouts.)
译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-customization-height-prominentdense-desktop.png)

<figcaption>

[en]: <> (Prominent top app bar on desktop)
[en]: <> (Prominent dense top app bar on desktop)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Images in bars)
#### 译文

[en]: <> (Bars can contain imagery. Prominent top app bars are recommended for image use because they provide more space.)
译文

[en]: <> (Don’t use imagery that makes top app bar text and icons illegible.)
译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-images.png)

<figcaption>

[en]: <> (A prominent top app bar with imagery)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/app-bars-top/topappbars-images-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t place imagery in a bar that makes the top app bar’s text and icons illegible.)
译文

</figcaption></figure>

[en]: <> (Navigation icon \(optional\))
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (A navigation icon is optional. When it appears in an app bar, it’s aligned on the left of the bar.)
译文

[en]: <> (It can take any of the following forms:)
译文

[en]: <> (A menu icon, which opens a navigation drawer)
[en]: <> (An up arrow, which navigating up an app’s hierarchy)
[en]: <> (A back arrow, which returns to the previous screen)
* 译文
* 译文
* 译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/app-bars-top/topappbars-navigation-icon.png)

</figure>

</div></div>

[en]: <> (Title \(optional\))
### 译文

[en]: <> (The app bar title can be used to describe:)
译文

[en]: <> (The screen a user is currently on)
[en]: <> (The section the user is currently in)
[en]: <> (The app being used)
* 译文
* 译文
* 译文

[en]: <> (By default, titles are left aligned on desktop. The default position of titles on mobile and tablet depends on the platform. More information on this is available in [cross-platform adaptation]\(https://www.mdui.org/design/platform-guidance/cross-platform-adaptation.html\).)
译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-title-long.png)

<figcaption>

{do}

[en]: <> (If title text is long, use a prominent app bar and wrap the title to two lines.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/app-bars-top/topappbars-layout-title-dont-wrapped.png)

<figcaption>

{dont}

[en]: <> (Don’t wrap text in a regular top app bar.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/app-bars-top/topappbars-layout-title-dont-truncated.png)

<figcaption>

{dont}

[en]: <> (Don’t truncate text, hiding the full title may cause misunderstanding.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/app-bars-top/topappbars-layout-title-dont-shrink.png)

<figcaption>

{dont}

[en]: <> (Don’t shrink text to fit on a single line.)
译文

</figcaption></figure>

[en]: <> (Action items and overflow menu \(optional\))
### 译文

[en]: <> (App actions are placed on the right side of an app bar, either as icons or in an overflow menu. Overflow menus differ across mobile platforms. For more guidance refer to [cross-platform adaptation]\(https://www.mdui.org/design/platform-guidance/cross-platform-adaptation.html\).)
译文

[en]: <> (Icon placement)
#### 译文

[en]: <> (Place most-used actions on the left, progressing towards the least-used actions on the far right. Any remaining actions that don’t fit on the app bar can go into an overflow menu.)
译文

[en]: <> (Actions move into and out of the overflow menu as the app bar width changes, such as if a device is rotated from landscape to portrait orientation. More guidance on this is available in [top app bar behavior]\(https://www.mdui.org/design/components/app-bar-top.html#behavior\).)
译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-layout-actionoverflow.png)

<figcaption>

{do}

[en]: <> (Order action items by putting the most-used action \(1\) on the far left, second most used action \(2\) to it’s right, and so on. Any remaining or secondary actions should be placed in an overflow menu \(3\).)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Scrolling)
### 译文

[en]: <> (Upon scrolling, the top app bar can remain in place, or transform in the following ways:)
译文

[en]: <> (Scrolling upward hides the top app bar)
[en]: <> (Scrolling downward reveals the top app bar)
* 译文
* 译文

[en]: <> (When the top app bar scrolls, its elevation above other elements becomes apparent.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-hide.mp4" src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-hide.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (The top app bar disappears upon scrolling up, and appears upon scrolling down.)
译文

</figcaption></figure>

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-sameelevation.mp4" src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-sameelevation.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Top app bars can be positioned at the same elevation as content. Upon scroll, they increase elevation and let content scroll behind them.)
译文

</figcaption></figure>

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-prominent-to-regular.mp4" src="{assets_path}/components/app-bars-top/topappbars-behavior-scrolling-prominent-to-regular.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (When scrolling up, prominent top app bars using imagery can transform into normal top app bars. They should not return to prominent mode until the user scrolls back to the top of the page.)
译文

</figcaption></figure>

[en]: <> (Nesting actions)
### 译文

[en]: <> (When a screen is resized, the top app bar resizes with it. Actions are consolidated into the overflow menu.)
译文

[en]: <> (Action positioning)
#### 译文

[en]: <> (The actions move to the overflow menu from right to left, making the most-used action the last to be moved to the overflow menu.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/app-bars-top/topappbars-behavior-nesting.mp4" src="{assets_path}/components/app-bars-top/topappbars-behavior-nesting.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (As a top app bar is resized, actions move to the overflow menu from right to left.)
译文

[en]: <> (Scaled down to 62.5%)
译文

</figcaption></figure>

[en]: <> (Contextual action bar)
<h2 id="contextual-action-bar">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (A top app bar can transform into a contextual action bar to provide contextual actions to selected items. For example, upon user selection of photos from a gallery, the top app bar transforms to a contextual app bar with actions related to the selected photos.)
译文

[en]: <> (When a top app bar transforms into a contextual action bar, the following changes occur:)
译文

[en]: <> (The bar color changes)
[en]: <> (Navigation icon is replaced with a close icon)
[en]: <> (Top app bar title text converts to contextual action bar text)
[en]: <> (Top app bar actions are replaced with contextual actions)
* 译文
* 译文
* 译文
* 译文

[en]: <> (Upon closing, the contextual action bar transforms back into a top app bar.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/app-bars-top/topappbars-behavior-transformation.mp4" src="{assets_path}/components/app-bars-top/topappbars-behavior-transformation.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Top app bar transforming into a contextual action bar)
译文

</figcaption></figure>

[en]: <> (Anatomy)
### 译文

<figure>

![]({assets_path}/components/app-bars-top/topappbars-contextualactionbar-elements.png)

</figure>

[en]: <> (Container)
[en]: <> (Close button \(instead of a navigation icon\))
[en]: <> (Contextual title)
[en]: <> (Contextual actions)
[en]: <> (Overflow menu \(optional\))
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文

[en]: <> (Bar)
#### 译文

[en]: <> (When a top app bar transforms into a contextual action bar, the bar should change color to indicate a change of state.)
译文

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Fortnightly Material Theme)
### 译文

[en]: <> (This news app’s top app bar has been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/app-bars-top/appbartop-fortnightly-ahero.png)

<figcaption>

[en]: <> (Reply’s customized bottom app bar)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

<figure>

![]({assets_path}/components/app-bars-top/appbartop-fortnightly-color.png)

</figure>

[en]: <> (Element      | Category     | Attribute          | Value)
[en]: <> (---------    |----------    |---------           |------)
[en]: <> (Container    | Surface      | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Text, icons  | On Surface   | Color<br>Opacity   | #000000<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

<figure>

![]({assets_path}/components/app-bars-top/appbartop-fortnightly-type.png)

</figure>

[en]: <> (Element      | Category     | Attribute                          | Value)
[en]: <> (---------    |----------    |---------                           |------)
[en]: <> (Text         | H6           | Typeface<br>Font<br>Size<br>Case   | Merriweather<br>Bold Italic<br>20<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Rally Material Theme)
### 译文

[en]: <> (This financial app’s top app bar has been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/app-bars-top/appbartop-rally-ahero.png)

<figcaption>

[en]: <> (Rally’s customized bottom app bar)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

<figure>

![]({assets_path}/components/app-bars-top/appbartop-rally-color.png)

</figure>

[en]: <> (Element      | Category     | Attribute          | Value)
[en]: <> (---------    |----------    |---------           |------)
[en]: <> (Container    | Surface      | Color<br>Opacity   | #363640<br>100%)
[en]: <> (Text         | On Surface   | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Icons        | On Surface   | Color<br>Opacity   | #FFFFFF<br>60%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

<figure>

![]({assets_path}/components/app-bars-top/appbartop-rally-type.png)

</figure>

[en]: <> (Element      | Category     | Attribute                          | Value)
[en]: <> (---------    |----------    |---------                           |------)
[en]: <> (Text         | H6           | Typeface<br>Font<br>Size<br>Case   | Roboto Condensed<br>Regular<br>20<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shrine Material Theme)
### 译文

[en]: <> (This retail app’s top app bar has been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/app-bars-top/appbartop-shrine-ahero.png)

<figcaption>

[en]: <> (Posivibe’s customized bottom app bar)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

<figure>

![]({assets_path}/components/app-bars-top/appbartop-shrine-color.png)

</figure>

[en]: <> (Element      | Category     | Attribute          | Value)
[en]: <> (---------    |----------    |---------           |------)
[en]: <> (Container    | Primary      | Color<br>Opacity   | #FEDBD0<br>100%)
[en]: <> (Text, icons  | On Primary   | Color<br>Opacity   | #442C2E<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

<figure>

![]({assets_path}/components/app-bars-top/appbartop-shrine-type.png)

</figure>

[en]: <> (Element      | Category     | Attribute                          | Value)
[en]: <> (---------    |----------    |---------                           |------)
[en]: <> (Text         | H6           | Typeface<br>Font<br>Size<br>Case   | Rubik<br>Medium<br>20<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Mobile)
### 译文

[en]: <> (Regular top app bar)
#### 译文

<figure>

![]({assets_path}/components/app-bars-top/spec-topappbar-mobile-regular.png)

</figure>

[en]: <> (Extended top app bar)
#### 译文

<figure>

![]({assets_path}/components/app-bars-top/spec-topappbar-mobile-extended.png)

</figure>

</div>
