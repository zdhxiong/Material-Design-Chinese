<div class="article__intro">

[en]: <> (Bottom navigation)
# 底部导航

[en]: <> (Bottom navigation bars allow movement between primary destinations in an app.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-usage-1.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Placement)
[en]: <> (States)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#placement)
* [译文](#states)
* [译文](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Bottom navigation bars display three to five destinations at the bottom of a screen. Each destination is represented by an icon and an optional text label. When a bottom navigation icon is tapped, the user is taken to the top-level navigation destination associated with that icon.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/bottom-navigation/bnb-convenient.png)

</figure>

[en]: <> (Ergonomic)
#### 译文

[en]: <> (The bottom navigation bar is easy to reach on a handheld mobile device.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/components/bottom-navigation/bnb-consistent.png)

</figure>

[en]: <> (Consistent)
#### 译文

[en]: <> (When used, the bottom navigation bar appears at the bottom of every screen.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/components/bottom-navigation/bnb-limited.png)

</figure>

[en]: <> (Related)
#### 译文

[en]: <> (Bottom navigation bar destinations should be of equal importance.)
译文

</div></div>

[en]: <> (When to use)
### 译文

[en]: <> (Bottom navigation should be used for:)
#### 译文

[en]: <> (Top-level destinations that need to be accessible from anywhere in the app)
[en]: <> (Three to five destinations)
[en]: <> (Mobile or tablet only)
* 译文
* 译文
* 译文

[en]: <> (Bottom navigation shouldn’t be used for:)
#### 译文

[en]: <> (Single tasks, such as viewing a single email)
[en]: <> (User preferences or settings)
* 译文
* 译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use a bottom navigation bar for fewer than three destinations \(use tabs instead\).)
译文

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-dont-3.png)

<figcaption>

{dont}

[en]: <> (Don’t use more than five destinations. For those cases, try tabs or a navigation drawer.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-caution-1.png)

<figcaption>

{caution}

[en]: <> (Combining bottom navigation and tabs may cause confusion, as their relationship to the content may be unclear. Tabs share a common subject, whereas bottom navigation destinations are top-level and disconnected from each other.)
译文

[en]: <> (Scaled down 50%.)
译文

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-anatomy.png)

<figcaption>

[en]: <> (Container)
[en]: <> (Inactive icon)
[en]: <> (Inactive text label)
[en]: <> (Active icon)
[en]: <> (Active text label)
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文

</figcaption></figure>

[en]: <> (Representing destinations)
### 译文

[en]: <> (The way bottom navigation destinations are represented can depend on how many are used:)
译文

[en]: <> (*Three destinations*: Display icons and text labels for all destinations.)
[en]: <> (*Four destinations*: Active destinations display an icon and text label. Inactive destinations display icons, and text labels are recommended.)
[en]: <> (*Five destinations*: Active destinations display an icon and text label. Inactive destinations use icons, and use text labels with caution \(as space may not permit them\).)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-icons-2.png)

<figcaption>

[en]: <> (There are three destinations in this bottom navigation, each with an icon and text label.)
译文

</figcaption></figure>

[en]: <> (Icons)
### 译文

[en]: <> (Bottom navigation destinations always include an icon. It’s best to pair icons with text labels, especially if the icon doesn’t have obvious meaning.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-usage-1.png)

<figcaption>

[en]: <> (Icons paired with text labels in bottom navigation)
译文

</figcaption></figure>

[en]: <> (Text Labels)
### 译文

[en]: <> (Text labels provide short, meaningful descriptions of bottom navigation destinations.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-labels.png)

<figcaption>

{do}

[en]: <> (Use short text labels.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-textlabels-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t truncate text. The truncation may obscure important destination information.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-textlabels-dont-3.png)

<figcaption>

{dont}

[en]: <> (Don’t shrink text to fit on a single line.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-textlabels-dont-1.png)

<figcaption>

{caution}

[en]: <> (Avoid wrapping text.)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Bottom navigation actions)
### 译文

[en]: <> (Tapping a bottom navigation destination results in one of the following:)
译文

[en]: <> (It takes the user to the screen associated with it)
[en]: <> (On a visited section, it returns the user to their previous scroll position there)
[en]: <> (On the current section, it scrolls the page back to the top and may refresh it)
* 译文
* 译文
* 译文

[en]: <> (Bottom navigation destinations don’t:)
译文

[en]: <> (Open menus or dialogs)
* 译文

[en]: <> (On Android, the Back button does not navigate between bottom navigation destinations.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-icons-1a.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-icons-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tapping the navigation destination of a previously visited section returns the user to where they left off in that section.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-icons-2a.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-icons-2a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tapping the current bottom navigation destination takes the user to the top of the screen, and refreshes the content if applicable.)
译文

</figcaption></figure></div></div>

[en]: <> (Badges)
### 译文

[en]: <> (Bottom navigation icons can include badges in their upper right corner. These badges can contain dynamic information, such as a number of pending requests.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-badging-1.png)

<figcaption>

[en]: <> (Badge)
[en]: <> (Badge with a number)
[en]: <> (Badge with a maximum character count)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Scrolling)
### 译文

[en]: <> (Upon scroll, the bottom navigation bar can appear or disappear:)
译文

[en]: <> (Scrolling downward hides the bar)
[en]: <> (Scrolling upward reveals it)
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-1b.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-1b.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The bottom navigation bar can disappear to allow more space for content.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-icons-1a.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-icons-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The bottom navigation bar remains in view when navigating through an app’s hierarchy.)
译文

</figcaption></figure></div></div>

[en]: <> (Transitions)
### 译文

[en]: <> (Swipe gestures do not navigate between bottom navigation views.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-do-1a.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-do-1a.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Transition between active and inactive views using a cross-fade animation.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-dont-1a.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-scrolling-dont-1a.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid using lateral \(left-and-right\) motion to transition between views. Lateral motion is reserved for navigating related content, such as tabs.)
译文

</figcaption></figure></div></div>

[en]: <> (When they appear, these items are displayed in front of the bottom navigation bar:)
译文

[en]: <> (Bottom sheets)
[en]: <> (Navigation drawers)
[en]: <> (Keyboards)
* 译文
* 译文
* 译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/bottom-navigation/bottomnav-keyboard-1b.mp4" src="{assets_path}/components/bottom-navigation/bottomnav-keyboard-1b.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Bottom navigation can be temporarily covered by bottom sheets, navigation drawers, and keyboards.)
译文

</figcaption></figure>

[en]: <> (Color)
### 译文

[en]: <> (When a bottom navigation destination is active, color the icon and text label with the app’s primary color.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-color-do-1.png)

<figcaption>

{do}

[en]: <> (Use the app’s primary color to indicate an active destination.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-color-dont-1.png)

<figcaption>

{dont}

[en]: <> (Avoid using different colored icons and text labels.)
译文

</figcaption></figure>

[en]: <> (If the bottom navigation bar is colored, make the current action’s icon and text label either black or white.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-color-do-2.png)

<figcaption>

{do}

[en]: <> (Use black or white iconography if the bottom navigation bar is colored.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-color-dont-2.png)

<figcaption>

{dont}

[en]: <> (Ensure legible color contrast when placing colored icons and text on a colored bottom navigation bar.)
译文

</figcaption></figure>

[en]: <> (Placement)
<h2 id="placement">译文</h2>

[en]: <> (Fixed navigation bar)
### 译文

[en]: <> (Bottom navigation bar destinations have fixed positions. They don’t scroll or move horizontally.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-dont-2.png)

<figcaption>

{dont}

[en]: <> (Bottom navigation bar destinations don’t scroll.)
译文

</figcaption></figure>

[en]: <> (Landscape view)
### 译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-do-4.png)

<figcaption>

{do}

[en]: <> (On mobile \(in landscape mode\) or tablet, bottom navigation destinations can retain the same spacing used in portrait mode, rather than being equally distributed across the bottom app bar.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/bottom-navigation/bottomnav-whentouse-do-5.png)

<figcaption>

{do}

[en]: <> (On mobile \(in landscape mode\) or tablet, bottom navigation destinations can be positioned horizontally instead of stacked. In this case, it’s recommended that destinations are evenly distributed across the entire bar.)
译文

</figcaption></figure>

[en]: <> (States)
<h2 id="states">译文</h2>

[en]: <> (Bottom navigation destinations may be active, inactive, focused or pressed.)
译文

[en]: <> (Bottom navigation uses opacity and text to show when a destination is active. States are used to show pressed, focused, and unselected states.)
译文

[en]: <> (Inactive destination states are represented with reduced opacities; active states have full opacity.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-states-labels.png)

<figcaption>

[en]: <> (Inactive destinations)
[en]: <> (An active destination)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (When text labels are not used persistently \(at all times\), only active destinations are given text labels.)
译文

<figure>

![]({assets_path}/components/bottom-navigation/bottomnav-states-icons.png)

<figcaption>

[en]: <> (Inactive destinations without text labels)
[en]: <> (An active destination with a text label)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Mobile)
### 译文

[en]: <> (Portrait)
#### 译文

<figure>

![]({assets_path}/components/bottom-navigation/specs-bottomnav-mobile-portrait.png)

</figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Minimum width)
#### 译文

<figure>

![]({assets_path}/components/bottom-navigation/specs-bottomnav-cell-minwidth.png)

</figure></div><div class="mdui-col">

[en]: <> (Maximum width)
#### 译文

<figure>

![]({assets_path}/components/bottom-navigation/specs-bottomnav-cell-maxwidth.png)

</figure></div></div>

[en]: <> (Landscape)
#### 译文

<figure>

![]({assets_path}/components/bottom-navigation/specs-bottomnav-mobile-landscape.png)

</figure></div>
