<div class="article__intro">

[en]: <> (Reply)
# 译文

[en]: <> (Reply is an email app that uses Material Design components and Material Theming to create an on-brand communication experience.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-main.png)

</figure>

<nav>

[en]: <> (About Reply)
[en]: <> (Product architecture)
[en]: <> (Layout)
[en]: <> (Color)
[en]: <> (Typography)
[en]: <> (Iconography)
[en]: <> (Components)
[en]: <> (Motion)
* [译文](#about-reply)
* [译文](#product-architecture)
* [译文](#layout)
* [译文](#color)
* [译文](#typography)
* [译文](#iconography)
* [译文](#components)
* [译文](#motion)

</nav>

</div><div class="article__body">

[en]: <> (About Reply)
<h2 id="about-reply">译文</h2>

[en]: <> (Reply is an app that helps individuals and groups communicate. It’s designed for clarity, legibility, intuition, and ease-of-use.)
译文

[en]: <> (Reply’s brand projects friendliness, competence, and a hint of quirkiness.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-brandattributes.png)

</figure>

[en]: <> (Functional aesthetic)
### 译文

[en]: <> (Reply’s brand emphasizes communication. As a result, the design of the app prioritizes functional qualities, placing ease-of-use over design elements that don’t have a functional purpose.)
译文

[en]: <> (Reply’s branding is often paired with user actions, such as the navigation drawer being accessed from the brand logo.)
译文

[en]: <> (Product architecture)
<h2 id="product-architecture">译文</h2>

[en]: <> (Reply uses a product architecture similar to other email apps: an inbox that contains new and archived messages, and a UI structured around organizing and taking actions related to those messages. Messages can be starred, sent, deleted, marked as spam, or organized in custom ways set up by the user.)
译文

[en]: <> (A focus on user tasks)
#### 译文

[en]: <> (Because user tasks mostly involve content generation and consumption, screen space is dedicated to content over other UI elements. To ensure there is enough space for both content and navigation, Reply uses different navigation patterns for desktop, tablet, and mobile. )
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-family.png)

<figcaption>

[en]: <> (Reply uses different navigation patterns on tablet \(rail\), mobile \(bottom app bar\), and desktop \(navigation drawer\).)
译文

</figcaption></figure>

[en]: <> (Navigation drawer)
### 译文

[en]: <> (On desktop, Reply uses a standard navigation drawer.)
译文

[en]: <> (Drawer organization)
#### 译文

[en]: <> (Drawer destinations are represented using both icons and text. The top of the navigation drawer incorporates settings, an account switcher, and a caret \(or arrow\) paired with the Reply logo.)
译文

[en]: <> (Drawer interactions)
#### 译文

[en]: <> (When tapped, the logo collapses the drawer into a rail.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-productarch.png)

<figcaption>

[en]: <> (Reply’s standard navigation drawer gives access to navigation items, an account switcher, and settings. When the Reply logo is tapped, the drawer collapses into a rail.)
译文

</figcaption></figure>

[en]: <> (Bottom app bar)
### 译文

[en]: <> (On mobile, Reply uses a bottom app bar to launch navigation.)
译文

[en]: <> (Bottom app bar interactions)
#### 译文

[en]: <> (When the Reply logo is tapped, it reveals a bottom navigation drawer with a settings icon and account avatar \(which can be tapped to switch accounts\).)
译文

[en]: <> (When the Reply logo is tapped again, the navigation closes and the bottom app bar returns to its default state.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-bottomappbar-1.png)

<figcaption>

[en]: <> (Reply’s bottom app bar)
译文

</figcaption></figure>

[en]: <> (Rail navigation)
### 译文

[en]: <> (On tablet, Reply uses rail navigation, in which each destination is represented by an icon.)
译文

[en]: <> (Rail interactions)
#### 译文

[en]: <> (The rail can open to a standard navigation drawer by tapping the Reply logo. An arrow displayed next to the logo makes it clear that the logo is interactive.)
译文

[en]: <> (Rail navigation is ideal for use on tablet because it can show a large number of destinations while taking up very little space. Customized folders are shown when the rail navigation has been opened, allowing the user to read the folder title text.)
译文

[en]: <> (When collapsed, the rail doesn’t include customized folders created by the user. This is because customized folders all use the same icon, so they can’t be distinguished by icon alone.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-railnav.png)

<figcaption>

[en]: <> (Reply’s rail navigation reveals a navigation drawer upon tapping the Reply logo.)
译文

</figcaption></figure>

[en]: <> (Layout)
<h2 id="layout">译文</h2>

[en]: <> (Grid system)
### 译文

[en]: <> (Reply uses a responsive grid, allowing padding and column size to change across mobile, tablet, and desktop. Content is placed in a column, where messages expand and contract upon interaction.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/material-studies/reply/casestudies-reply-grid-1a.mp4" src="{assets_path}/material-studies/reply/casestudies-reply-grid-1a.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Reply’s grid system, scaled down to 50%)
译文

</figcaption>

</figure>

[en]: <> (Elevation)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Reply uses color to create distinction between components. For example, the container of a card is visible because cards have a white surface color, while the app background is gray.)
译文

[en]: <> (Denser layout)
#### 译文

[en]: <> (Because Reply sometimes displays dense content, removing shadows helps decrease visual complexity. It also allows items to have smaller padding between each other, leaving more space for content.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-elevation.png)

<figcaption>

[en]: <> (The containers of cards in Reply have white surfaces, which stand out against the gray background of the app.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Color)
<h2 id="color">译文</h2>

[en]: <> (Color theme)
### 译文

[en]: <> (Reply’s color theme uses a primary color \(dark blue-gray\) and a secondary color \(orange\).)
译文

[en]: <> (Because the secondary color is rarely used, Reply’s UI is often monochromatic, using variations of its primary color. This subtle color theme allows content to be easily read without distraction, and photographic avatars to be easily seen.)
译文

[en]: <> (Whenever Reply’s secondary color is used, it has a pronounced impact.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-color.png)

<figcaption>

[en]: <> (Color theme)
译文

</figcaption></figure>

[en]: <> (Typography)
<h2 id="typography">译文</h2>

[en]: <> (Type scale)
### 译文

[en]: <> (Reply’s uses [Work Sans]\(https://fonts.google.com/specimen/Work+Sans\) as the typeface. All items in the type scale provide the typographic variety necessary for an app’s content.)
译文

[en]: <> (The type scale makes use of the variety of weights available by using six weights of Work Sans: Light, Regular, Medium, SemiBold, and Bold.)
译文

<figure>

![]({assets_path}/material-studies/reply/replytypescale.png)

<figcaption>

[en]: <> (Reply’s type scale)
译文

</figcaption></figure>

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-type-1.png)

<figcaption>

[en]: <> (Work Sans’ letterforms)
译文

</figcaption></figure>

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-type-2.png)

<figcaption>

[en]: <> (Work Sans compared to Roboto)
译文

</figcaption></figure>

[en]: <> (Iconography)
<h2 id="iconography">译文</h2>

[en]: <> (Reply’s iconography has subtle styling, which expresses brand while focusing on icon recognition and functionality.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-icons-alt.png)

<figcaption>

[en]: <> (1. Reply’s icons share the same grid structure, 2. A collection of Reply’s icons)
译文

</figcaption></figure>

[en]: <> (Components)
<h2 id="components">译文</h2>

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-components.png)

</figure>

[en]: <> (Floating action button)
### 译文

[en]: <> (On mobile, Reply nests a custom FAB in a bottom app bar.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-nestedfab.png)

<figcaption>

[en]: <> (Reply’s custom FAB nested in a bottom app bar)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-fab-baseline.png)

<figcaption>

[en]: <> (A FAB that hasn’t been customized)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-fab-reply.png)

<figcaption>

[en]: <> (Reply’s FAB uses custom color and iconography.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Extended FAB)
#### 译文

[en]: <> (On desktop and tablet, Reply uses a custom extended FAB that is paired with a navigation drawer.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-extendedfab.png)

<figcaption>

[en]: <> (Reply’s custom extended FAB inside a navigation drawer)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-extendedfab-baseline.png)

<figcaption>

[en]: <> (An extended FAB that hasn’t been customized)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-extendedfab-reply.png)

<figcaption>

[en]: <> (Reply’s extended FAB uses custom color and typography.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Bottom app bar, bottom sheet)
### 译文

[en]: <> (On mobile, Reply uses a custom bottom app bar for navigation and important actions.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-bottombar-compare.png)

<figcaption>

[en]: <> (This is a default bottom app bar.)
[en]: <> (Reply’s bottom app bar uses custom iconography, color, and shape. The Reply logo is incorporated into the component, functioning as the menu icon. A custom shape in the bar holds the floating action button.)
1. 译文
2. 译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-bottomappbar.png)

<figcaption>

[en]: <> (Bottom app bar)
#### 译文

[en]: <> (On mobile, Reply’s bottom app bar is the primary way to perform navigation and actions.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-contextualactionbar.png)

<figcaption>

[en]: <> (Contextual action bar)
#### 译文

[en]: <> (When the user wishes to select and apply actions to multiple items, the bottom action bar transforms into a contextual action bar.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-bottomsheet.png)

<figcaption>

[en]: <> (Bottom navigation drawer)
#### 译文

[en]: <> (Upon pressing the Reply logo, the bottom app bar reveals a bottom navigation drawer that holds navigation items and an account switcher.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-floatingfab.png)

<figcaption>

[en]: <> (Floating action button)
#### 译文

[en]: <> (The bottom app bar moves off-screen on scroll, though the FAB remains.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Cards)
### 译文

[en]: <> (Reply displays emails on cards that have been customized with square corners. Padding between the cards is very small because color indicates boundaries of each card \(no indication of elevation is given\).)
译文

[en]: <> (This small padding allows more content to fit on-screen.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-cards-1.png)

<figcaption>

[en]: <> (When a card is swiped to the right, it reveals the action of highlighting an email.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-cards-2.png)

<figcaption>

[en]: <> (When a card is swiped to the left, it reveals the action of deleting an email.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Chips)
### 译文

[en]: <> (Reply entry chips apply customized typography, color, and image sizing.)
译文

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-chips-alt.png)

<figcaption>

[en]: <> (Adjustments to the layout, typography, and color help the chip component feel visually similar to Reply’s brand.)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-chip-baseline.png)

<figcaption>

[en]: <> (A default entry chip)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/material-studies/reply/casestudies-reply-chip-reply.png)

<figcaption>

[en]: <> (Reply’s entry chips use custom color and typography. The avatar imagery is customized to be larger, completing the chip shape instead of being inset.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Motion)
<h2 id="motion">译文</h2>

[en]: <> (Launch screen)
### 译文

[en]: <> (Reply’s logo animation traces a path inspired by a curling piece of paper.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/material-studies/reply/01-launch.mp4" src="{assets_path}/material-studies/reply/01-launch.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Launching Reply for the first time displays an animated launch screen.)
译文

</figcaption>

</figure>

[en]: <> (Navigation transitions)
### 译文

[en]: <> (Reply uses shorter durations and standard easing to focus on efficiency.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/material-studies/reply/02-reply-navtransitions.mp4" src="{assets_path}/material-studies/reply/02-reply-navtransitions.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (These navigation transitions use 250ms instead of the standard 300ms.)
译文

</figcaption>

</figure>

[en]: <> (Icons & illustrations)
### 译文

[en]: <> (Animated illustrations create a connection at key points in a user journey, such as reaching inbox zero.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/material-studies/reply/03-reply-inboxzero.mp4" src="{assets_path}/material-studies/reply/03-reply-inboxzero.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (The two remaining emails are archived, triggering a celebratory animation.)
译文

</figcaption>

</figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/material-studies/reply/04-reply-pulltorefresh.mp4" src="{assets_path}/material-studies/reply/04-reply-pulltorefresh.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Reply’s logo animation loops during a pull to refresh the loading sequence.)
译文

</figcaption>

</figure>
</div>
