<div class="article__intro">

[en]: <> (Navigation drawer)
# 抽屉式导航

[en]: <> (Navigation drawers provide access to destinations in your app.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/nav-drawer-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Standard drawer)
[en]: <> (Modal drawer)
[en]: <> (Bottom drawer)
[en]: <> (States)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#standard-drawer)
* [译文](#modal-drawer)
* [译文](#bottom-drawer)
* [译文](#states)
* [译文](#theming)
* [译文](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Navigation drawers provide access to destinations and app functionality, such as switching accounts. They can either be permanently on-screen or controlled by a navigation menu icon.)
译文

[en]: <> (Navigation drawers are recommended for:)
译文

[en]: <> (Apps with five or more top-level destinations)
[en]: <> (Apps with two or more levels of navigation hierarchy)
[en]: <> (Quick navigation between unrelated destinations)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/components/navigation-drawer/usage-do.png)

<figcaption>

{do}

[en]: <> (Use a navigation drawer for five or more primary destinations.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/usage-caution-alt-3.png)

<figcaption>

{caution}

[en]: <> (Avoid using a navigation drawer with other primary navigation components, such as a bottom navigation bar.)
译文

</figcaption></figure>

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/navigation-illos-02.png)

<figcaption>

[en]: <> (Identifiable)
#### 译文

[en]: <> (The placement and list-style content of navigation drawers clearly identify them as navigation.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/navigation-illos-01.png)

<figcaption>

[en]: <> (Organized)
#### 译文

[en]: <> (Navigation drawers order destinations according to user importance, with frequent destinations first and related ones grouped together.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/navigation-illos-03.png)

<figcaption>

[en]: <> (Contextual)
#### 译文

[en]: <> (Navigation drawers can be shown or hidden to accommodate different app layouts.)
译文

</figcaption></figure></div></div>

[en]: <> (Types)
### 译文

<figure>

![]({assets_path}/components/navigation-drawer/usage-types-standard.png)

<figcaption>

[en]: <> (Standard drawer)
#### 译文

[en]: <> (Standard navigation drawers allow users to simultaneously access drawer destinations and app content. They are often co-planar with app content and affect the screen’s layout grid.)
译文

[en]: <> (Standard drawers can be permanently visible or opened and closed by tapping a navigation menu icon. They can be used on tablet and desktop only. On mobile, modal drawers are used instead.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/usage-types-modal.png)

<figcaption>

[en]: <> (Modal drawer)
#### 译文

[en]: <> (Modal navigation drawers use a scrim to block interaction with the rest of an app’s content. They are elevated above most app elements and don’t affect the screen’s layout grid.)
译文

[en]: <> (They are primarily for use on mobile, where screen space is limited. They can be replaced by standard drawers on tablet and desktop.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/usage-types-bottom.png)

<figcaption>

[en]: <> (Bottom drawer)
#### 译文

[en]: <> (Bottom navigation drawers are a specialized type of modal drawer for use with a bottom app bar.)
译文

[en]: <> (For increased reachability from the bottom app bar’s menu icon, they open from the bottom of the screen rather than the side.)
译文

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

[en]: <> (Navigation drawers contain a list embedded within a sheet. They can be enhanced with headers and dividers to organize longer lists.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/anatomy.png)

<figcaption>

[en]: <> (Container)
[en]: <> (Header \(optional\))
[en]: <> (Divider \(optional\))
[en]: <> (Active text overlay)
[en]: <> (Active text)
[en]: <> (Inactive text)
[en]: <> (Subtitle)
[en]: <> (Scrim \(modal only\))
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文
6. 译文
7. 译文
8. 译文

</figcaption></figure>

[en]: <> (Sheet)
### 译文

[en]: <> (The contents of a navigation drawer are contained within a side or bottom sheet. Navigation drawers that open from the side are placed on the left of the screen for left-to-right languages, and on the right of the screen for right-to-left languages.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/anatomy-sheet-do-alt.png)

<figcaption>

{do}

[en]: <> (A navigation drawer sheet can open from the left side of the screen for left-to-right languages \(1\), or from the bottom of the screen when paired with a bottom app bar \(2\). Scaled down to 62.5%)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/anatomy-sheet-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t open a navigation drawer from the right side of the screen unless the app is set to a right-to-left language.)
译文

</figcaption></figure>

[en]: <> (Destinations)
### 译文

[en]: <> (Destinations in a navigation drawer take the form of actionable list items. Each item describes its destination using a text label and optional iconography.)
译文

[en]: <> (Destination labels)
#### 译文

[en]: <> (Text labels should be clear and short enough that they aren’t cut off by the sheet.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-labels-no-icons-do.png)

<figcaption>

{do}

[en]: <> (Navigation drawers can use text labels without icons.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-labels-short-do.png)

<figcaption>

{do}

[en]: <> (Keep text labels concise, but truncate them if they extend beyond the container width.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-labels-wrap-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t wrap label text.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-labels-shrink-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t shrink text size in order to fit a text label on a single line.)
译文

</figcaption></figure></div></div>

[en]: <> (Destination iconography \(optional\))
#### 译文

[en]: <> (Icons can supplement labels as indicators of a destination. Whe used, they should always be placed before text. Other app components and content should reference these icons.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-icons-do.png)

<figcaption>

{do}

[en]: <> (Use recognizable icons when conventions exist.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-icons-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use the same icon to represent different primary destinations.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-icons-repeat-do.png)

<figcaption>

{caution}

[en]: <> (Secondary destinations can be represented by the same icon, especially if they are part of a collection \(1\).)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-destinations-icons-some-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t apply icons to some destinations and not others. Icons should be used for all destinations, or none.)
译文

</figcaption></figure></div></div>

[en]: <> (Dividers \(optional\))
### 译文

[en]: <> (Horizontal dividers can be used to separate groups of navigation destinations within the list. They extend across the full width of the drawer.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-dividers-do.png)

<figcaption>

{do}

[en]: <> (Use full-width dividers \(1\) to separate groups of destinations \(2\).)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/anatomy-dividers-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use dividers to separate individual destinations.)
译文

</figcaption></figure></div></div>

[en]: <> (Header \(optional\))
### 译文

[en]: <> (The header area of a navigation drawer is a flexible space that can be used for brand expression \(such as an app title or logo\), an account switcher, and more.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/anatomy-header-account.png)

<figcaption>

{do}

[en]: <> (If access to account switching is a priority, an account switcher can be placed in the header area of a navigation drawer.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/anatomy-header-brand-do.png)

<figcaption>

{do}

[en]: <> (If a navigation drawer is the full vertical height of the page, you can place a branding element or product name in the header area.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/anatomy-header-brand-dont.png)

<figcaption>

{dont}

[en]: <> (If a navigation drawer is clipped by a top app bar, don’t place a branding element or product name in the header. In this case the top app bar is a more suitable place for that content.)
译文

</figcaption></figure>

[en]: <> (Scrim \(modal and bottom only\))
### 译文

[en]: <> (Modal navigation drawers use a scrim to block interaction with the rest of the app. The scrim is placed directly below the drawer’s sheet and can be tapped or clicked to dismiss the drawer.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/anatomy-scrim.png)

<figcaption>

[en]: <> (Scrims applied to a modal side navigation drawer \(1\) and bottom navigation drawer \(2\))
译文

</figcaption></figure>

[en]: <> (Standard drawer)
<h2 id="standard-drawer">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Standard navigation drawers allow interaction with both screen content and the drawer at the same time. They can be used on tablet and desktop, but they aren’t suitable for mobile due to limited screen size.)
译文

[en]: <> (Alternatives)
#### 译文

[en]: <> (*Modal drawer*: In a responsive layout grid, at a defined minimum breakpoint of at least 600dp width, a standard drawer should be replaced with a modal drawer.)
[en]: <> (*Permanently visible drawer*: When users need to switch destinations frequently \(and screen size allows\), a permanently visible drawer can be used.)
[en]: <> (*Dismissible drawer*: A dismissible drawer can be used when users are likely to focus on screen content and require less frequent access to its navigation destinations.)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/components/navigation-drawer/standard-usage.png)

<figcaption>

[en]: <> (A dismissible drawer.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Scrolling)
#### 译文

[en]: <> (Navigation drawers can be vertically scrolled, independent of the rest of the screen’s content and UI. If the list of navigation destinations is longer than the height of the drawer, the drawer’s contents can be scrolled within the drawer.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/standard-behavior-scrolling-alt.png)

</figure>

[en]: <> (Visibility)
#### 译文

[en]: <> (The visibility of a standard navigation drawer depends on screen size, app layout, and frequency of use.)
译文

[en]: <> (*Dismissible* standard drawers can be used for layouts that prioritize content \(such as a photo gallery\) or for apps where users are unlikely to switch destinations often. They should use a visible navigation menu icon to open and close the drawer.)
[en]: <> (*Permanently visible* standard drawers allow quick pivoting between unrelated destinations. They require a menu icon for control because they can’t be dismissed by the user.)
* 译文
* 译文

<figure>

![]({assets_path}/components/navigation-drawer/standard-behavior-visibility-dismissible.png)

<figcaption>

[en]: <> (A standard dismissible navigation drawer is opened and closed by tapping the navigation menu icon in the top app bar \(1\), and remains open until the menu icon is tapped again \(2\).)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/standard-behavior-visibility-permanent.png)

<figcaption>

[en]: <> (A permanent navigation drawer on desktop)
译文

</figcaption></figure>

[en]: <> (Elevation)
### 译文

[en]: <> (A standard navigation drawer can use one of these elevation positions:)
译文

[en]: <> (At the same elevation as a top app bar \(full-height\))
[en]: <> (At a lower elevation than a top app bar \(clipped\))
* 译文
* 译文

[en]: <> (Full-height)
#### 译文

[en]: <> (A full-height navigation drawer is at the same elevation as a top app bar.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/standard-elevation-top-app-bar.png)

</figure>

[en]: <> (Clipped)
#### 译文

[en]: <> (A clipped navigation drawer is at the same elevation as content that scrolls beneath a top app bar.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/standard-elevation-below.png)

</figure>

[en]: <> (Modal drawer)
<h2 id="modal-drawer">译文</h2>

[en]: <> (Usage)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Modal navigation drawers block interaction with the rest of an app’s content with a scrim. They are elevated above most of the app’s UI and don’t affect the screen’s layout grid.)
[en]: <> (They are primarily for use on mobile where screen space is limited, and can be replaced by standard drawers on tablet and desktop.)

</div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/modal-usage.png)

<figcaption>

[en]: <> (A modal drawer on mobile)
译文

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 译文

[en]: <> (Opening and closing)
#### 译文

[en]: <> (Modal navigation drawers are always opened by an affordance outside of the drawer, such as a navigation menu icon in a top app bar.)
译文

[en]: <> (Modal drawers can be dismissed by:)
译文

[en]: <> (Selecting a drawer item)
[en]: <> (Tapping the scrim)
[en]: <> (Swiping toward the drawer’s anchoring edge \(e.g. swiping right-to-left for a left-aligned navigation drawer\))
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/components/navigation-drawer/modal-behavior-open-alt.png)

<figcaption>

{do}

[en]: <> (A modal drawer is always opened by a navigation menu icon \(1\).)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/modal-behavior-close.png)

<figcaption>

[en]: <> (Modal drawers can be dismissed by tapping its scrim \(1\) or swiping the drawer toward its anchoring screen edge \(2\).)
译文

</figcaption></figure>

[en]: <> (Scrolling)
#### 译文

[en]: <> (If the list of navigation destinations is longer than the height of the drawer, the list can vertically scroll in the drawer.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/modal-behavior-scrolling-do.png)

</figure>

[en]: <> (Bottom drawer)
<h2 id="bottom-drawer">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Bottom navigation drawers are modal drawers that are anchored to the bottom of the screen instead of the left or right edge. They are only used with bottom app bars.)
译文

[en]: <> (These drawers open upon tapping the navigation menu icon in the bottom app bar. They are only for use on mobile.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/bottom-usage.png)

<figcaption>

[en]: <> (Bottom navigation drawer)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Opening on mobile \(portrait orientation\))
#### 译文

[en]: <> (As with other modal bottom sheets, the initial vertical position of a bottom navigation drawer is based on its content and screen height. They initially cannot open above 50% of the screen’s height.)
译文

[en]: <> (If drawer contents are under 50% of screen height, open the drawer to full height at all times)
[en]: <> (If drawer contents are greater than 50% of screen height, open them to 50% initially, then allow a user to drag the drawer upward to its full height or screen height \(whichever comes first\))
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-open-portrait-do.png)

<figcaption>

{do}

[en]: <> (Open bottom navigation drawers that contain only a few items to their full height \(A\).)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-open-portrait-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t extend the height of a drawer beyond its contents.)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-open-portrait-clip.png)

<figcaption>

{do}

[en]: <> (Adjust the opening position of your bottom navigation drawer so the last list item in view is clipped by the bottom of the screen. This can inform users that there are more items to view.)
译文

</figcaption></figure>

[en]: <> (Opening on mobile \(landscape orientation\))
#### 译文

[en]: <> (In landscape orientation on mobile, taller bottom navigation drawers automatically open to full-screen mode.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-landscape-open-do.png)

<figcaption>

[en]: <> (A bottom drawer opens to full-screen mode on mobile in a landscape orientation.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-landscape-open-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t open a bottom drawer to half the screen height in landscape mode.)
译文

</figcaption></figure>

[en]: <> (Scrolling)
#### 译文

[en]: <> (Bottom navigation drawers can be internally scrolled once they have been opened to full screen height.)
译文

[en]: <> (When initially opened to 50% of the screen height, the drawer must be dragged to screen height before additional items are revealed. Upon scroll, the drawer's header becomes an elevated top app bar with a close affordance.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-scrolling-do.png)

<figcaption>

{do}

[en]: <> (Allow a bottom drawer’s contents to be scrolled when at full height.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/navigation-drawer/bottom-behavior-scrolling-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t scroll a bottom drawer’s contents when it’s not at full-screen height.)
译文

</figcaption></figure></div></div>

[en]: <> (Content hierarchy)
### 译文

[en]: <> (Because the number of bottom navigation drawer content items aren’t all visible at first, the content of the drawer should be ordered as follows:)
译文

[en]: <> (List items first that are most likely to be frequently accessed by users)
[en]: <> (If an account switcher is used, place it at the top of the drawer)
1. 译文
2. 译文

[en]: <> (States)
<h2 id="states">译文</h2>

[en]: <> (The destinations within a navigation drawer take the form of list items. Each item can be activated, inactive, hovered, focused, and pressed.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/states-hero.png)

<figcaption>

[en]: <> (*Activated*<br>The current screen, or its parent, is represented with an activated state. Only one item in a navigation drawer can be activated at a time. This state should have strong visual contrast from unactivated items.)
[en]: <> (*Inactive*<br>Inactive is the default state for items in a navigation drawer.)
[en]: <> (*Focus*)
[en]: <> (*Pressed*)
[en]: <> (*Hover*)
1. *译文*<br>译文
2. *译文*<br>译文
3. *译文*
4. *译文*
5. *译文*

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/states-do.png)

<figcaption>

{do}

[en]: <> (Only one drawer item can be activated at a time.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/navigation-drawer/states-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t activate more than one drawer item at a time.)
译文

</figcaption></figure>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Fortnightly Material Theme)
### 译文

[en]: <> (This news app’s modal navigation drawer has been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/navdrawer-fortnightly-ahero.png)

<figcaption>

[en]: <> (Fortnightly’s customized modal navigation drawer)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Fortnightly’s modal navigation drawer uses custom color on six elements: sheet, activated icon, activated text, activated overlay, navigation item, and scrim.)

<figure>

![]({assets_path}/components/navigation-drawer/navdrawer-fortnightly-color.png)

</figure>

[en]: <> (Element                          | Category      | Attribute          | Value)
[en]: <> (---------                        |----------     |---------           |------)
[en]: <> (Container                        | Surface       | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Activated icon, Activated text   | Primary       | Color<br>Opacity   | #661FFF<br>100%)
[en]: <> (Activated overlay                | Primary       | Color<br>Opacity   | #661FFF<br>12%)
[en]: <> (Inactive item                    | On Surface    | Color<br>Opacity   | #000000<br>100%)
[en]: <> (Scrim                            | On Surface    | Color<br>Opacity   | #000000<br>32%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Fortnightly’s modal navigation drawer text uses custom typography.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/navdrawer-fortnightly-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Body 2      | Typeface<br>Font<br>Size<br>Case   | Libre Franklin<br>Regular<br>14<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Posivibes Material Theme)
### 译文

[en]: <> (This social media app’s bottom navigation drawer has been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/navdrawer-posivibes-ahero.png)

<figcaption>

[en]: <> (Posivibes’ customized navigation drawer)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Posivibes’ bottom navigation drawer uses custom color on six elements: sheet, activated icon, activated text, activated overlay, navigation item, and scrim.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/navdrawer-posivibes-color.png)

</figure>

[en]: <> (Element                          | Category      | Attribute          | Value)
[en]: <> (---------                        |----------     |---------           |------)
[en]: <> (Container                        | Surface       | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Activated icon, Activated text   | Primary       | Color<br>Opacity   | #000000<br>100%)
[en]: <> (Activated overlay                | Primary       | Color<br>Opacity   | #000000<br>12%)
[en]: <> (Inactive item                    | On Surface    | Color<br>Opacity   | #000000<br>100%)
[en]: <> (Scrim                            | Surface       | Color<br>Opacity   | #FFFFFF<br>60%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Posivibes’ bottom navigation drawer text uses custom typography.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/navdrawer-posivibes-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Body 2      | Typeface<br>Font<br>Size<br>Case   | Roboto Condensed<br>Regular<br>14<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Posivibes’ bottom navigation drawer container has custom corner shapes.)
译文

<figure>

![]({assets_path}/components/navigation-drawer/navdrawer-posivibes-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 0dp<br>Rounded 0dp<br>Rounded 0dp<br>Rounded 0dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Standard navigation drawer)
#### 译文

<figure>

![]({assets_path}/components/navigation-drawer/specs-navdrawer-side-standard.png)

</figure>

[en]: <> (Modal navigation drawer)
#### 译文

<figure>

![]({assets_path}/components/navigation-drawer/specs-navdrawer-side-modal.png)

</figure>

[en]: <> (Bottom navigation drawer)
#### 译文

<figure>

![]({assets_path}/components/navigation-drawer/specs-navdrawer-bottom-modal.png)

</figure></div>
