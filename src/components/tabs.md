<div class="article__intro">

[en]: <> (Tabs)
# Tab 选项卡

[en]: <> (Tabs organize content across different screens, data sets, and other interactions.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-usage-01.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Placement)
[en]: <> (Fixed tabs)
[en]: <> (Scrollable tabs)
[en]: <> (States)
[en]: <> (Spec)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#placement)
* [译文](#fixed-tabs)
* [译文](#scrollable-tabs)
* [译文](#states)
* [译文](#spec)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Tabs organize and allow navigation between groups of content that are related and at the same level of hierarchy.)
译文

[en]: <> (Tabs in a set)
#### 译文

[en]: <> (Each tab should contain content that is distinct from other tabs in a set. For example, tabs can present different sections of news, different genres of music, or different themes of documents.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-usage-do1.png)

<figcaption>

{do}

[en]: <> (Tab labels can include icons and text. Text labels should be short.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-usage-dont1.png)

<figcaption>

{dont}

[en]: <> (Don’t use tabs to move through sequential content that needs to be read in a particular order.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-usage-do2.png)

<figcaption>

{do}

[en]: <> (Present tabs as a single row above their associated content.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-usage-dont2.png)

<figcaption>

{dont}

[en]: <> (Avoid using tabs for comparing content across multiple tabs, such as different sizes of the same item.)
译文

</figcaption></figure></div></div>

[en]: <> (Combinations with other components)
#### 译文

[en]: <> (Tabs can be paired with components like top app bars, or nested in components like cards and sheets.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-illos-01.png)

<figcaption>

[en]: <> (Scalable)
#### 译文

[en]: <> (As tabs can horizontally scroll, a UI can have as many tabs as needed.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-illos-02.png)

<figcaption>

[en]: <> (Informative)
#### 译文

[en]: <> (Tabs organize content into categories to help users easily find different types of information.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-illos-03.png)

<figcaption>

[en]: <> (Peers)
#### 译文

[en]: <> (Tabs are displayed next to each other as peers, in categories of equal importance.)
译文

</figcaption></figure></div></div>

[en]: <> (Types)
### 译文

[en]: <> (Fixed tabs)
#### 译文

[en]: <> (Fixed tabs display all tabs on one screen, with each tab at a fixed width. The width of each tab is determined by dividing the number of tabs by the screen width. They don’t scroll to reveal more tabs; the visible tab set represents the only tabs available.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-types-01.png)

</figure>

[en]: <> (Scrollable tabs)
### 译文

[en]: <> (Scrollable tabs are displayed without fixed widths. They are scrollable, such that some tabs will remain off-screen until scrolled.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-types-02.png)

</figure>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<figure>

![]({assets_path}/components/tabs/tabs-elements-01.png)

<figcaption>

[en]: <> (Container)
[en]: <> (Active icon \(Optional if there’s a label\))
[en]: <> (Active text label \(Optional if there’s an icon\))
[en]: <> (Active tab indicator)
[en]: <> (Inactive icon \(Optional if there’s a label\))
[en]: <> (Inactive text label \(Optional if there’s an icon\))
[en]: <> (Tab item)
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文
6. 译文
7. 译文

</figcaption></figure>

[en]: <> (Text label)
### 译文

[en]: <> (Text labels should clearly and succinctly describe the content of the tab they represent. Tab content should contain a cohesive set of items that share a common characteristic.)
译文

[en]: <> (Tab labels appear in a single row. They can use a second line if needed, with truncated text. Alternatively, you can use scrollable tabs to allow room for longer titles.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-when-06.png)

<figcaption>

{caution}

[en]: <> (Although label text can wrap to a second line, scrollable tabs confine text to a single row.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-when-07.png)

<figcaption>

{dont}

[en]: <> (Don’t resize text labels to fit them onto a single line. If labels are too long, wrap text to a second line or use scrollable tabs.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-when-08.png)

<figcaption>

{dont}

[en]: <> (Don’t truncate labels unless required, as truncated text can impede comprehension.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-when-09.png)

<figcaption>

{dont}

[en]: <> (Don’t mix tabs that contain only text, with tabs that contain only icons. Use either all text labels, all icon labels, or both, across all labels.)
译文

</figcaption></figure></div></div>

[en]: <> (Icons)
### 译文

[en]: <> (Icons communicate the type of content a tab represents in a simple, recognizable way. However, they aren’t as effective as text labels at communicating complex content.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-usage-06.png)

<figcaption>

[en]: <> (Tabs can use a combination of labels and icons.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-usage-iconsb.png)

<figcaption>

{do}

[en]: <> (Tabs can use icons to communicate content.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-usage-010b.png)

<figcaption>

{dont}

[en]: <> (Don’t use tabs with both icons and text labels on only some tabs, but not others.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-04.png)

<figcaption>

{caution}

[en]: <> (Use caution when only representing tab content with icons, as an icon’s meaning may not be clear on every topic.)
译文

</figcaption></figure>

[en]: <> (Active tab indicators)
### 译文

[en]: <> (To differentiate an active tab from an inactive tab, apply an underline and color change to the active tab’s text and icon.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-selector-active.png)

<figcaption>

[en]: <> (An underline and color change differentiate an active tab from the inactive ones.)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Moving between tabs)
### 译文

[en]: <> (Users can navigate between tabs by tapping a tab, or by performing a swipe gesture over content.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Tap a tab)
#### 译文

[en]: <> (Navigate to a tab by tapping on it.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-tap.mp4" src="{assets_path}/components/tabs/tabs-tap.mp4" type="video/mp4"></video></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Swipe within the content area)
#### 译文

[en]: <> (To navigate between tabs, users can swipe left or right within the content area.)
译文

[en]: <> (Gestures occur differently for each type of tab:)
译文

[en]: <> (Fixed tabs don’t respond to the swipe gesture at all)
[en]: <> (Upon swipe, scrollable tabs scroll independent of the content area)
* 译文
* 译文

[en]: <> (Use caution when placing other swipeable content \(such as interactive maps or list items\) in the content area.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-swipe.mp4" src="{assets_path}/components/tabs/tabs-swipe.mp4" type="video/mp4"></video></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scroll-lists-caution.mp4" src="{assets_path}/components/tabs/tabs-scroll-lists-caution.mp4" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (Use caution when placing swipeable content in UIs that have tabs, as users could easily swipe the wrong component.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scroll-lists-dont.mp4" src="{assets_path}/components/tabs/tabs-scroll-lists-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid placing swipeable items in the content area of a UI that has tabs, as the user may mistakenly swipe the wrong component.)
译文

</figcaption></figure></div></div>

[en]: <> (Scrolling)
### 译文

[en]: <> (When a screen scrolls, tabs can either be fixed to the top of the screen, or scroll off the screen. If they scroll off the screen, they will return when the user scrolls upward.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrolling-1.mp4" src="{assets_path}/components/tabs/tabs-scrolling-1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When tabs are attached to a top app bar, they can scroll off the screen with the bar and lock in place at the top of the screen.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrolling-2.mp4" src="{assets_path}/components/tabs/tabs-scrolling-2.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tabs can scroll offscreen on scroll, and reappear when the page is scrolled up.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrolling-4.mp4" src="{assets_path}/components/tabs/tabs-scrolling-4.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t scroll tabs behind a top app bar. When tabs are attached to a component, they should appear and move as a single unit.)
译文

</figcaption></figure>

[en]: <> (Placement)
<h2 id="placement">译文</h2>

[en]: <> (Tab layout)
### 译文

[en]: <> (Tabs are displayed in a single row, with each tab connected to the content it represents. As a set, all tabs are unified by a shared topic.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-layout-layout-01.png)

<figcaption>

[en]: <> (Place tabs above content.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-layout-dont.png)

<figcaption>

{caution}

[en]: <> (Avoid nesting a tab within another tab.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/tabs/tabs-layout-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t place tabs below one another.)
译文

</figcaption></figure></div></div>

[en]: <> (Tab placement)
### 译文

[en]: <> (Tabs can be joined with components like top app bars, embedded in a specific UI region, or nested into components like cards and sheets. Tabs control the UI region displayed below them.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-placement-01.png)

<figcaption>

[en]: <> (Tabs below a top app bar)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use tabs with short top app bars, or top app bars that transition to short top app bars on scroll.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t attach tabs to bottom navigation as it can cause confusion about what action or tab controls which content.)
译文

</figcaption></figure>

[en]: <> (Tabs can be embedded in a specific UI region in order to control the content displayed in that region.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-placement-ui.png)

<figcaption>

[en]: <> (Tabs embedded in a column, the content of which they can control when tapped. Scaled down to 62.5%)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-ui-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t place tabs above content that they don’t control. If tabs only change a section of the UI, embed them within that section. Scaled down to 62.5%)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-02b.png)

<figcaption>

[en]: <> (Tabs nested in a card)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-placement-03b.png)

<figcaption>

[en]: <> (Tabs nested in a sheet)
译文

</figcaption></figure>

[en]: <> (Fixed tabs)
<h2 id="fixed-tabs">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Fixed tabs display all tabs in a set simultaneously. They are best for switching between related content quickly, such as between transportation methods in a map. To navigate between fixed tabs, tap an individual tab, or swipe left or right in the content area.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-fixed-01.png)

<figcaption>

[en]: <> (Use fixed tabs when displaying a limited number of categories.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-usage-06.png)

<figcaption>

[en]: <> (A fixed tab bar using iconography and labels)
译文

</figcaption></figure>

[en]: <> (Placement)
### 译文

[en]: <> (Fixed tabs have equal width, which can be calculated either as:)
译文

[en]: <> (The width of the screen divided by the number of tabs)
[en]: <> (The width of the widest tab label)
* 译文
* 译文

[en]: <> (When using fixed tabs, ensure they can all be seen on mobile, without truncating their text. Don’t use more than four fixed tabs at once.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-fixed-03.png)

<figcaption>

[en]: <> (Don’t use more than four fixed tabs in a set.)
译文

[en]: <> (Reduced in size to 62.5%)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-010.png)

<figcaption>

[en]: <> (On wider layouts, fixed tabs increase in width, as their tab width is determined by the width of the screen.)
译文

[en]: <> (Reduced in size to 62.5%)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-08.png)

<figcaption>

{caution}

[en]: <> (Avoid letting fixed tabs cause confusion with content. These tab widths align to closely to the columns in this layout, such that the relationship between tabs and content could be misinterpreted.)
译文

</figcaption></figure>

[en]: <> (Clustered fixed tabs)
### 译文

[en]: <> (Clustered fixed tabs aren’t divided equally across the screen. The tab bar is centered, right-aligned, or left-aligned.)
译文

[en]: <> (Clustered fixed tabs should be used in wide horizontal layouts, such as landscape mode.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-fixed-05.png)

<figcaption>

[en]: <> (On wider layouts, tabs may be centered on the tab bar.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-fixed-06.png)

<figcaption>

[en]: <> (Fixed tabs in a cluster can be aligned to the left or right.)
译文

</figcaption></figure>

[en]: <> (Scrollable tabs)
<h2 id="scrollable-tabs">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (When a set of tabs cannot fit on screen, use scrollable tabs. Scrollable tabs can use longer text labels and a larger number of tabs. They are best used for browsing on touch interfaces.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-scrollable-02.png)

<figcaption>

[en]: <> (A set of scrollable tabs)
译文

</figcaption></figure>

[en]: <> (Placement)
### 译文

[en]: <> (Scrollable tabs display a subset of all tabs at once. The width of each tab is defined by the length of its text label.)
译文

<figure>

![]({assets_path}/components/tabs/tabs-scrollable-01.png)

</figure><figure>

![]({assets_path}/components/tabs/tabs-scrollable-desktop-do.png)

<figcaption>

{do}

[en]: <> (On mobile and desktop, offset the first tab on the left to signal that tabs are scrollable.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-scrollable-03-dont.png)

<figcaption>

{dont}

[en]: <> (Avoid using inconsistent padding on each tab.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/tabs/tabs-paginated-01.png)

<figcaption>

[en]: <> (On desktop, provide a visual indicator that more tabs are available off screen.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (To navigate between a set of scrollable tabs, users swipe the set left or right. A tab set can be looped so when a user reaches the last tab in a set, the first tab is shown again.)
译文

[en]: <> (To select an individual tab, tap it.)
译文

[en]: <> (Tab placement on activation)
#### 译文

[en]: <> (When tapped, a scrollable tab should reposition itself to become fully visible on screen.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrollable-in-place.mp4" src="{assets_path}/components/tabs/tabs-scrollable-in-place.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Active tabs reposition themselves to appear fully on screen.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/tabs/tabs-scrollable-center.mp4" src="{assets_path}/components/tabs/tabs-scrollable-center.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Active tabs can move to the middle of the row when they become active.)
译文

</figcaption></figure>

[en]: <> (States)
<h2 id="states">译文</h2>

[en]: <> (By default, tabs inherit enabled states with one active state.)
译文

[en]: <> (The inactive state of a tab can inherit a hover, focus, and pressed state.)
译文

<figure>

![]({assets_path}/components/tabs/tab-inactive-states.png)

<figcaption>

[en]: <> (The hover, focus, and pressed states of an enabled tab)
译文

</figcaption></figure>

[en]: <> (The active state of a tab can inherit a hover, focus, and pressed state.)
译文

<figure>

![]({assets_path}/components/tabs/tab-active-states.png)

<figcaption>

[en]: <> (The hover, focus, and pressed states of an active tab)
译文

</figcaption></figure>

[en]: <> (Spec)
<h2 id="spec">译文</h2>

[en]: <> (Fixed tabs)
### 译文

<figure>

![]({assets_path}/components/tabs/tabs-spec-fixed.png)

</figure>

[en]: <> (Minimum width)
#### 译文

<figure>

![]({assets_path}/components/tabs/tabs-spec-cell-minwidth.png)

</figure>

[en]: <> (Maximum width)
#### 译文

<figure>

![]({assets_path}/components/tabs/tabs-spec-cell-maxwidth.png)

</figure>

[en]: <> (Scrollable tabs)
### 译文

<figure>

![]({assets_path}/components/tabs/tabs-spec-scrollable.png)

</figure></div>
