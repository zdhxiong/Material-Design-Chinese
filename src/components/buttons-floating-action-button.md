<div class="article__intro">

[en]: <> (Buttons: floating action button)
# 译文

[en]: <> (A floating action button \(FAB\) represents the primary action of a screen.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/intro-fab.png)

</figure>

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Placement)
[en]: <> (Behavior)
[en]: <> (Types of transitions)
[en]: <> (Extended FAB)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#placement)
* [译文](#behavior)
* [译文](#types-of-transitions)
* [译文](#extended-fab)
* [译文](#theming)
* [译文](#specs)

</nav>

</div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (A floating action button \(FAB\) performs the primary, or most common, action on a screen. It appears in front of all screen content, typically as a circular shape with an icon in its center. FABs come in three types: regular, mini, and extended.)
译文

[en]: <> (Only use a FAB if it is the most suitable way to present a screen’s primary action.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-usage-do-email.png)

<figcaption>

{do}

[en]: <> (Represent the most common primary action with a floating action button, such as drafting a new email.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-usage-do-gallery.png)

<figcaption>

{do}

[en]: <> (FABs are not needed on every screen, such as when images represent primary actions.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-usage-dont-contacts.png)

<figcaption>

{dont}

[en]: <> (Don’t display multiple FABs on a single screen.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-usage-caution-maps.png)

<figcaption>

{caution}

[en]: <> (Occasionally two FABs can be used, if they perform distinct, yet equally important, actions.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-illos-03.png)

</figure>

[en]: <> (Primary)
#### 译文

[en]: <> (A FAB represents the primary action on a screen.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-illos-01.png)

</figure>

[en]: <> (Constructive)
#### 译文

[en]: <> (A FAB should perform a constructive action \(such as create, share, or explore\).)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-illos-02.png)

</figure>

[en]: <> (Contextual)
#### 译文

[en]: <> (A FAB should be relevant to the screen on which it appears.)
译文

</div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-elements.png)

</figure>

</div><div class="mdui-col">

[en]: <> (Container)
[en]: <> (Icon)
1. 译文
2. 译文

</div></div>

[en]: <> (Container)
### 译文

[en]: <> (The FAB is typically displayed in a circular container. An app’s color scheme determines its color fill, which should contrast with the area behind the FAB.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-iconsizes.png)

<figcaption>

[en]: <> (FAB containers come in two sizes:)
译文

[en]: <> (Default \(56 x 56dp\))
[en]: <> (Mini \(40 x 40dp\))
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (A mini FAB should be used on smaller screens. When a screen width is 460dp or less, the container of a default FAB \(56dp\) should transform into the mini size \(40dp\).)
译文

[en]: <> (Mini FABs can also be used to create visual continuity with other screen elements.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-minifab.png)

<figcaption>

[en]: <> (This mini FAB creates visual continuity by having a related size, shape, and placement to the folder icons below it.)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-container-do.png)

<figcaption>

{do}

[en]: <> (FAB containers adopt a color from an app’s palette.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-container-dont-appbar.png)

<figcaption>

{dont}

[en]: <> (Don’t layer badges or other elements in front of a FAB.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Icon)
### 译文

[en]: <> (A FAB’s icon should clearly illustrate its action. A FAB shouldn’t contain notifications or actions found elsewhere on a screen.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-icon-dont-ambiguous.png)

<figcaption>

{dont}

[en]: <> (Don’t use ambiguous iconography.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-icon-dont-text.png)

<figcaption>

{dont}

[en]: <> (Don’t place text in a regular FAB.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Placement)
<h2 id="placement">译文</h2>

[en]: <> (FABs can attach to top app bars and the edge of some components.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-tabletdesktop-do-topbar.png)

<figcaption>

{do}

[en]: <> (A floating action button \(FAB\) can attach to a top app bar.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-tabletdesktop-do-attachededgelayout.png)

<figcaption>

{do}

[en]: <> (A FAB can be attached to the edge of a component.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-layout-tabletdesktop-dont-cards.png)

<figcaption>

{dont}

[en]: <> (Individual components, such as cards, cannot each have their own FAB.)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Actions)
### 译文

[en]: <> (A floating action button \(FAB\) can trigger an action either on the current screen, or it can perform an action that creates a new screen.)
译文

[en]: <> (A FAB promotes an important, constructive action such as:)
译文

[en]: <> (Create)
[en]: <> (Favorite)
[en]: <> (Share)
[en]: <> (Start a process)
* 译文
* 译文
* 译文
* 译文

[en]: <> (Avoid using a FAB for minor or destructive actions, such as:)
译文

[en]: <> (Archive or trash)
[en]: <> (Alerts or errors)
[en]: <> (Limited tasks like cutting text)
* 译文
* 译文
* 译文

[en]: <> (Controls better suited to a toolbar \(like controls to adjust volume or font color\))
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-behavior-do-primaryactions.png)

<figcaption>

{do}

[en]: <> (Use FABs for primary, positive actions.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-behavior-dont-minoractions.png)

<figcaption>

{dont}

[en]: <> (Do not use FABs for minor, overflow, unclear, or destructive actions.)
译文

</figcaption></figure>

[en]: <> (Motion)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Appearing on screen)
#### 译文

[en]: <> (When a FAB animates on screen, it expands outward from a central point. The icon within it may be animated as well.)
译文

[en]: <> (While FABs should be relevant to screen content, they aren’t attached to the surface on which content appears. FABs move separately from other UI elements because of their relative importance.)
译文

[en]: <> (Screen transitions)
#### 译文

[en]: <> (FABs can morph to launch related actions. When a screen changes its layout, the FAB should disappear and reappear during the transition.)
译文

[en]: <> (Reappearance)
#### 译文

[en]: <> (The FAB should only reappear if it’s relevant to the new screen. It should reappear in the same position, if possible.)
译文

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/buttons-floating-action-button/fab-behavior-transition-v01.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-behavior-transition-v01.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Throughout this user flow the FAB location remains consistent.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Tabbed screens)
### 译文

[en]: <> (When tabs are present, the FAB should briefly disappear, then reappear when the new content moves into place. This expresses that the FAB is not connected to any particular tab.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/buttons-floating-action-button/fab-layout-transition-do-v01.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-layout-transition-do-v01.mp4" type="video/mp4">
</video>

<figcaption>

{do}

[en]: <> (When switching between tabs, FABs disappear and then reappear.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/buttons-floating-action-button/fab-layout-transition-dont-v01.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-layout-transition-dont-v01.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (When switching between tabs, FABs don’t move in unison with screen content.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Types of transitions)
<h2 id="types-of-transitions">译文</h2>

[en]: <> (Speed dial)
### 译文

[en]: <> (When pressed, a FAB can display three to six related actions in the form of a *speed dial*. This transition can occur in one of the following ways:)
译文

[en]: <> (Upon press, the FAB can emit related actions)
[en]: <> (Upon press, the FAB can transform into a menu containing related actions \(Android only\))
* 译文
* 译文

[en]: <> (If more than six actions are needed, something other than a FAB should be used to present them.)
译文

[en]: <> (Emit related actions)
#### 译文

[en]: <> (Upon press, the FAB remains visible and emits a stack of related actions. If the FAB is tapped is pressed in this state, it should either initiate its default action or close the speed dial actions.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/buttons-floating-action-button/fab-toolbar-speeddial-v03.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-toolbar-speeddial-v03.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (A FAB displays a stack of related actions.)
译文

</figcaption>

</figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-dont-1.png)

<figcaption>

{dont}

[en]: <> (A speed dial should include at least three options.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-dont-2.png)

<figcaption>

{dont}

[en]: <> (A speed dial should include no more than six options.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-do-contacts.png)

<figcaption>

{do}

[en]: <> (A FAB can contain a list of contacts.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-do-labels.png)

<figcaption>

{do}

[en]: <> (Related actions can have text labels.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-dont-unrelated.png)

<figcaption>

{dont}

[en]: <> (A FAB shouldn’t transform into unrelated actions.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-speeddial-dont-overflow.png)

<figcaption>

{dont}

[en]: <> (Speed dial options shouldn’t include an overflow menu.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Transform into a menu with the related actions)
#### 译文

[en]: <> (Upon press on Android, the FAB can transform into a menu containing related actions. A scrim indicates that functionality outside of the action menu is temporarily disabled. The menu remains on-screen until an action, or the scrim, is tapped.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/buttons-floating-action-button/fab-transitions-menu-1.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-transitions-menu-1.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (A FAB transforming into an action menu)
译文

</figcaption>

</figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-menu-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use an action menu with fewer than three options.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/fab-transitions-menu-dont-2.png)

<figcaption>

{dont}

[en]: <> (An action menu shouldn’t include more than six options, as action menus don’t support scrolling.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Morph)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (The FAB can transform into another surface in an app. Morphing should be reversible and transform the new surface back into the FAB.)
译文

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/buttons-floating-action-button/fab-morph-v1.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-morph-v1.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (A FAB can morph into a surface that is part of the app structure.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Full screen)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (The FAB can transform into a new surface that spans the entire screen. This type of transformation is typically for creating new content.)
译文

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/buttons-floating-action-button/fab-toolbar-fullscreen-v06.mp4" src="{assets_path}/components/buttons-floating-action-button/fab-toolbar-fullscreen-v06.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (A FAB can transform into a new surface that spans the entire screen.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Extended FAB)
<h2 id="extended-fab">译文</h2>

[en]: <> (The extended FAB is wider, and it includes a text label.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-01.png)

<figcaption>

[en]: <> (Extended FAB)
译文

</figcaption></figure>

[en]: <> (Anatomy)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-layout-elements.png)

</figure>

</div><div class="mdui-col">

[en]: <> (Container)
[en]: <> (Icon \(optional\))
[en]: <> (Text label)
* 译文
* 译文
* 译文

</div></div>

[en]: <> (Container)
#### 译文

[en]: <> (The width of a extended FAB’s container can be fixed or fluid.)
译文

[en]: <> (A fixed width container is defined by the cumulative width of the icon, text label, and padding.)
[en]: <> (A fluid width container is defined by its relationship to something else on screen, such as screen width or the layout grid.)
* 译文
* 译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-layout-fixed-center.png)

<figcaption>

[en]: <> (This fixed extended FAB’s width is defined by the cumulative width of the icon, text label, and container padding.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-layout-fluid.png)

<figcaption>

[en]: <> (This extended FAB’s container width is defined by the layout grid columns.)
译文

</figcaption></figure>

[en]: <> (Icon)
#### 译文

[en]: <> (The icon of an extended FAB should intuitively represent its action.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/extfab-left-to-right.png)

<figcaption>

[en]: <> (Icons should be placed to the left of text labels for left-to-right languages.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/extfab-right-to-left.png)

<figcaption>

[en]: <> (Icons should be placed to the right for right-to-left languages.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/extfab-noicon.png)

<figcaption>

{do}

[en]: <> (Unlike standard FABs, extended FABs don’t require an icon.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/extfab-icondont.png)

<figcaption>

{dont}

[en]: <> (An extended FAB can’t have an icon without a text label.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Text label)
#### 译文

[en]: <> (The text label of an extended FAB should describe its action.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-layout-dont1.png)

<figcaption>

{caution}

[en]: <> (Only truncate text if shorter text isn’t an option.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/buttons-floating-action-button/extended-fab-layout-dont2.png)

<figcaption>

{dont}

[en]: <> (Avoid wrapping text.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Placement)
### 译文

[en]: <> (The extended FAB can be positioned in the center, left, or right side of a screen.)
译文

[en]: <> (Desktop and tablet)
#### 译文

[en]: <> (For UIs larger than 840dp, such as desktop, the extended FAB should be placed at the top left of the screen, or at the bottom right of the screen.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/desktopextfab1.png)

<figcaption>

[en]: <> (On desktop, the extended FAB placed at the top left)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/buttons-floating-action-button/desktopextfab2.png)

<figcaption>

[en]: <> (On desktop, the extended FAB placed at the bottom right)
译文

</figcaption></figure>

[en]: <> (Mobile)
#### 译文

[en]: <> (On mobile, the extended FAB should be placed at the bottom right or bottom center.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/extfabmobilecentered.png)

<figcaption>

[en]: <> (On mobile, the extended FAB placed at the bottom center)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/buttons-floating-action-button/extfabmobileright.png)

<figcaption>

[en]: <> (On mobile, the extended FAB placed at the bottom right)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/buttons-floating-action-button/extfabbab.png)

<figcaption>

{caution}

[en]: <> (Avoid using an extended FAB above a bottom app bar, as the combination takes up a lot of screen space. If they are paired, the extended FAB should collapse on scroll.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Speed dial)
#### 译文

[en]: <> (The extended FAB can also display a speed dial of 3-6 related actions when tapped. On hover, these related actions expand to display labels.)
译文

[en]: <> (During the speed dial transition, the extended FAB becomes a standard FAB.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/buttons-floating-action-button/extended-fab-behavior-speeddial.mp4" src="{assets_path}/components/buttons-floating-action-button/extended-fab-behavior-speeddial.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Extended FAB speed dial)
译文

</figcaption>

</figure>

[en]: <> (Transformation to a standard FAB)
#### 译文

[en]: <> (If space becomes limited, the extended FAB can transform into a standard FAB. For example, if an app viewport is resized below 840dp, or a navigation drawer opens up.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/buttons-floating-action-button/extendedfab-desktop-transition.mp4" src="{assets_path}/components/buttons-floating-action-button/extendedfab-desktop-transition.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Extended FAB transforming into a standard FAB)
译文

</figcaption>

</figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (An extended FAB can transform into a standard FAB when a screen is scrolled.)
[en]: <> (The FAB should not return to an extended FAB until the user scrolls back to the top of the page.)
* 译文
* 译文

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/buttons-floating-action-button/efab-scroll.mp4" src="{assets_path}/components/buttons-floating-action-button/efab-scroll.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Extended FAB transforming into a standard FAB after the user scrolls to the top of the page)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Reply Material Theme)
### 译文

[en]: <> (This email app’s floating action button has been customized using Material Theming. Areas of customization include color and shape.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsfab-reply-ahero.png)

<figcaption>

[en]: <> (Reply’s customized FAB)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Reply’s FAB uses custom color on two elements: the container and icon.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsfab-reply-color.png)

</figure>

[en]: <> (Element      | Category      | Attribute          | Value)
[en]: <> (---------    |----------     |---------           |------)
[en]: <> (Container    | Secondary     | Color<br>Opacity   | #FAAB1A<br>100%)
[en]: <> (Icon         | On Secondary  | Color<br>Opacity   | #232F34<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Reply’s FAB uses a custom shape on the container.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsfab-reply-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Text        | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 28dp<br>Rounded 28dp<br>Rounded 28dp<br>Rounded 28dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Reply’s extended FAB has customized color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsextfab-reply-ahero.png)

<figcaption>

[en]: <> (Reply’s customized FAB)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Reply’s extended FAB uses custom color on two elements: the container, icon, and text.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsextfab-reply-color.png)

</figure>

[en]: <> (Element      | Category      | Attribute          | Value)
[en]: <> (---------    |----------     |---------           |------)
[en]: <> (Container    | Secondary     | Color<br>Opacity   | #FAAB1A<br>100%)
[en]: <> (Icon         | On Secondary  | Color<br>Opacity   | #232F34<br>100%)
[en]: <> (Text         | On Secondary  | Color<br>Opacity   | #232F34<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Reply’s extended FAB uses custom typography on its button text.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsextfab-reply-type.png)

</figure>

[en]: <> (Element     |Category      | Attribute                          | Value)
[en]: <> (---------   |-----------   |---------                           |------)
[en]: <> (Text        | Button       | Typeface<br>Font<br>Size<br>Case   | Work Sans<br>ExtraBold<br>15<br>All caps)

译文     |译文     | 译文                        | 译文
--------|-------- |----------                  |-----------
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Reply’s extended FAB uses a custom shape on its container.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsextfab-reply-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 28dp<br>Rounded 28dp<br>Rounded 28dp<br>Rounded 28dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Posivibes Material Theme)
### 译文

[en]: <> (This social media app’s floating action button has been customized using Material Theming. Areas of customization include color and shape.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsfab-posivibes-ahero.png)

<figcaption>

[en]: <> (Posivibe’s customized FAB)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Posivibe’s FAB uses custom color on two elements: the container and icon.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsfab-posivibes-color.png)

</figure>

[en]: <> (Element      | Category      | Attribute          | Value)
[en]: <> (---------    |----------     |---------           |------)
[en]: <> (Container    | Secondary     | Color<br>Opacity   | #000000<br>100%)
[en]: <> (Icon         | On Secondary  | Color<br>Opacity   | #FFFFFF<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Posivibe’s FAB uses a custom shape on its container.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsfab-posivibes-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Cut 34dp<br>Cut 34dp<br>Cut 34dp<br>Cut 34dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shrine Material Theme)
### 译文

[en]: <> (This retail app’s extended floating action button has been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsextfab-shrine-ahero.png)

<figcaption>

[en]: <> (Shrine’s customized FAB)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Shrine’s extended FAB uses custom color on two elements: the container and text.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsextfab-shrine-color.png)

</figure>

[en]: <> (Element      | Category      | Attribute          | Value)
[en]: <> (---------    |----------     |---------           |------)
[en]: <> (Container    | Primary       | Color<br>Opacity   | #FEDBD0<br>100%)
[en]: <> (Text         | On Primary    | Color<br>Opacity   | #442C2E<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Shrine’s extended FAB uses custom typography on its button text.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsextfab-shrine-type.png)

</figure>

[en]: <> (Element     |Category      | Attribute                          | Value)
[en]: <> (---------   |-----------   |---------                           |------)
[en]: <> (Text        | Button       | Typeface<br>Font<br>Size<br>Case   | Rubik<br>Medium<br>14<br>All caps)

译文     |译文     | 译文                        | 译文
--------|-------- |----------                  |-----------
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Shrine’s extended FAB uses a custom shape on its container.)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/buttonsextfab-shrine-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Cut 8dp<br>Cut 8dp<br>Cut 8dp<br>Cut 8dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Floating action button)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Regular)

<figure>

![]({assets_path}/components/buttons-floating-action-button/specs-fab-default.png)

</figure>

</div><div class="mdui-col">

[en]: <> (Mini FAB)

<figure>

![]({assets_path}/components/buttons-floating-action-button/specs-mini-fab.png)

</figure>

</div></div>

[en]: <> (Placement)
译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/specs-fab-placement.png)

</figure>

[en]: <> (Extended floating action button)
### 译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/specs-extended-fab-default.png)

</figure>

[en]: <> (Placement)
#### 译文

<figure>

![]({assets_path}/components/buttons-floating-action-button/specs-extended-fab-placement.png)

</figure>

</div>