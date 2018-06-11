<div class="article__intro">

[en]: <> (States)
# 译文

[en]: <> (States are visual representations used to communicate the status of a component or interactive element.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Disabled)
[en]: <> (Hover)
[en]: <> (Focus)
[en]: <> (Selected)
[en]: <> (Activated)
[en]: <> (Pressed)
[en]: <> (Dragged)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#disabled)
* [译文](#hover)
* [译文](#focus)
* [译文](#selected)
* [译文](#activated)
* [译文](#pressed)
* [译文](#dragged)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (States communicate the status of UI elements to the user. Each state should be visually similar and not drastically alter a component, but must have clear affordances that distinguish it from other states and the surrounding layout.)
译文

<figure>

![]({assets_path}/interaction/states/purpose-01.png)

<figcaption>

[en]: <> (States must have clear affordances that distinguish them from one other.)
译文

</figcaption></figure>

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/states-illos-01.png)

<figcaption>

[en]: <> (Distinct)
#### 译文

[en]: <> (States must have clear affordances distinguishing them from one other and the surrounding UI, emphasized according to their priority levels.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/states-illos-02.png)

<figcaption>

[en]: <> (Additive)
#### 译文

[en]: <> (When multiple states occur at once, such as selection and hover, both state indicators should be displayed.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/states-illos-03.png)

<figcaption>

[en]: <> (Consistent)
#### 译文

[en]: <> (States should be applied consistently across components in order to increase usability.)
译文

</figcaption></figure></div></div>

[en]: <> (Types of states)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/enabled.png)

<figcaption>

[en]: <> (Enabled)
#### 译文

[en]: <> (An enabled state communicates an interactive component or element.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/disabled.png)

<figcaption>

[en]: <> (Disabled)
#### 译文

[en]: <> (A disabled state communicates a noninteractive component or element.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/hover.png)

<figcaption>

[en]: <> (Hover)
#### 译文

[en]: <> (A hover state communicates when a user has placed a cursor above an interactive element.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/focused.png)

<figcaption>

[en]: <> (Focused)
#### 译文

[en]: <> (A focused state communicates when a user has highlighted an element, using an input method such as a keyboard or voice.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">


![]({assets_path}/interaction/states/selected.png)

<figcaption>

[en]: <> (Selected)
#### 译文

[en]: <> (A selected state communicates a user choice.)
译文

</figcaption></figure></div><div class="mdui-col">


![]({assets_path}/interaction/states/activated.png)

<figcaption>

[en]: <> (Activated)
#### 译文

[en]: <> (An activated state communicates a highlighted destination, whether initiated by the user or by default.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/pressed.png)

<figcaption>

[en]: <> (Pressed)
#### 译文

[en]: <> (A pressed state communicates a user tap.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/dragged.png)

<figcaption>

[en]: <> (Dragged)
#### 译文

[en]: <> (A dragged state communicates when a user presses and moves an element.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/on.png)

<figcaption>

[en]: <> (On)
#### 译文

[en]: <> (An on state communicates a toggle between two options.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/off.png)

<figcaption>

[en]: <> (Off)
#### 译文

[en]: <> (An off state communicates a toggle between two options.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/error.png)

<figcaption>

[en]: <> (Error)
#### 译文

[en]: <> (An error state communicates a user or system mistake.)
译文

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

[en]: <> (Overlay)
### 译文

[en]: <> (An overlay is a semi-transparent covering on an element, indicating state. Overlays provide a systematic approach to visualizing states using opacity.)
译文

[en]: <> (The overlay can be applied to an entire element or in a circular shape. The overlay color matches the color of the text or iconography on the element it’s applied to.)
译文

<figure>

![]({assets_path}/interaction/states/elements-overlay.png)

<figcaption>

[en]: <> (\(1\) Overlay on line items \(2\) overlay on chip, \(3\) overlay on selection controls.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/elements-elevation.png)

<figcaption>

[en]: <> (\(1\) Elevation, combined with an overlay, can signify state on some components.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/elements-iconography.png)

<figcaption>

[en]: <> (\(1\) Iconography, combined with an overlay, can signify state on some components.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/elements-colorchange.png)

<figcaption>

[en]: <> (\(1\) Color change may signify state.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/elements-messaging.png)

<figcaption>

[en]: <> (\(1\) Messaging may be additional signifiers of state.)
译文

</figcaption></figure></div></div>

[en]: <> (Overlay opacity values)
### 译文

[en]: <> (To ensure proper visibility and color contrast accessibility, the opacity value of overlays should be adjusted for every different combination of text on a surface.)
译文

<figure>

![]({assets_path}/interaction/states/overlay-opacity-values.png)

<figcaption>

[en]: <> (\(1\) Overlay opacity values on #FFFFFF on a white surface. \(2\) Overlay opacity values on #6200EE on a surface colored with a primary color.)
译文

</figcaption></figure>

[en]: <> (Disabled)
<h2 id="disabled">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (A disabled state communicates when a component or element isn’t interactive, and should be deemphasized in a UI. Disabled states are displayed at 38% opacity of the enabled state.)
译文

[en]: <> (Disabled states can also indicate they are inactive through color changes and reduced elevation.)
译文

<figure>

![]({assets_path}/interaction/states/disabled-01.png)

<figcaption>

[en]: <> (\(1\) Enabled and \(2\) disabled buttons differentiate through color and elevation changes.)
译文

</figcaption></figure>

[en]: <> (Disabled state inheritance)
#### 译文

[en]: <> (Components can inherit a disabled state, such as toggle buttons, selection controls, text fields, icons, grid and list items, cards, chips, and buttons.)
译文

<figure>

![]({assets_path}/interaction/states/disabled-02.png)

<figcaption>

[en]: <> (\(1\) Toggle buttons, \(2\) selection controls, \(3\) text fields and a \(4\) list item inheriting a disabled state.)
译文

</figcaption></figure>

[en]: <> (Disabled states cannot be inherited by: floating action buttons \(FABs\), bottom and side sheets, dialogs, menus, tooltips, and alerts, or navigational components \(such as app bars, tabs, bottom navigation and steppers\). If the action represented in the FAB is unavailable, the FAB should not appear in the composition.)
译文

<figure>

![]({assets_path}/interaction/states/disabled-03-dont.png)

<figcaption>

{dont}

[en]: <> (\(1\) FABs \(2\) bottom sheets and \(3\) app bars cannot inherit a disabled state.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Disabled components don’t change state when tapped or hovered over.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/disabled-behavior-nohover.mp4" src="{assets_path}/interaction/states/disabled-behavior-nohover.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Disabled components can be hovered over, but won’t display state changes to the component or cursor.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/disabled-behavior-tap.mp4" src="{assets_path}/interaction/states/disabled-behavior-tap.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Disabled components don’t change state when tapped.)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/interaction/states/behavior-03-dont.png)

<figcaption>

{dont}

[en]: <> (Disabled components cannot be \(1\) hovered, \(2\) focused, \(3\) dragged or \(4\) pressed.)
译文

</figcaption></figure>

[en]: <> (There may be zero, one, or multiple disabled components in a composition.)
译文

<figure>

![]({assets_path}/interaction/states/composition-01.png)

<figcaption>

[en]: <> (\(1\) Disabled toggle button, \(2\) Disabled button in one layout)
译文

</figcaption></figure>

[en]: <> (Hover)
<h2 id="hover">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Hover states are initiated by the user pausing over an interactive element using a cursor. They can be applied to all interactive components, and should be deemphasized to avoid distracting from content.)
译文

[en]: <> (An overlay signifies a hover state. It can be applied to the entire component, elements within a component, or as a circular shape over part of the component.)
译文

<figure>

![]({assets_path}/interaction/states/hover-01.png)

<figcaption>

[en]: <> (Overlay applied to \(1\) certain elements in a component, \(2\) the component as a whole, or \(3\) in circular form.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/hover-02.png)

<figcaption>

[en]: <> (Some components, such as buttons or cards, can inherit \(1\) elevation to signify a hover state.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/hover-03.png)

<figcaption>

[en]: <> (\(1\) Additional controls can appear on hover.)
译文

</figcaption></figure></div></div>

[en]: <> (Hover inheritance)
#### 译文

[en]: <> (Hover states can be inherited by the following components: buttons, FABs, toggle buttons, selection controls, grid list items, list items, cards, chips, text fields, and icons.)
译文

<figure>

![]({assets_path}/interaction/states/hover-04.png)

<figcaption>

[en]: <> (Whole components such as \(1\) icons, \(2\) text fields, \(3\) cards and \(4\) buttons can inherit a hover state.)
译文

</figcaption></figure>

[en]: <> (Interactive elements can inherit a hover state.)
译文

<figure>

![]({assets_path}/interaction/states/hover-05.png)

<figcaption>

[en]: <> (Hover states can be inherited by interactive elements or segments within components such as \(1\) app bars icons, \(2\) actions in sheets, \(3\) tabs items and \(4\) list items.)
译文

</figcaption></figure>

[en]: <> (Hover states cannot be inherited by: app bars, tabs, bottom navigation, sheets, dialogs, alerts, menus and steppers.)
译文

<figure>

![]({assets_path}/interaction/states/hover-06-dont.png)

<figcaption>

{dont}

[en]: <> (\(1\) Sheets, \(2\) app bars or \(3\) dialogs cannot inherit a hover state.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Hover states are initiated by the user pausing over an interactive element using a cursor.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-hover-motion.mp4" src="{assets_path}/interaction/states/behavior-hover-motion.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Hover states appear and disappear using a low-emphasis animated fade.)
译文

</figcaption></figure>

[en]: <> (Hover states can be combined with focused, activated, selected, or pressed states.)
译文

<figure>

![]({assets_path}/interaction/states/behavior-03.png)

<figcaption>

[en]: <> (Hover state in combination with \(1\) focused, \(2\) activated, \(3\) selected and \(4\) pressed states.)
译文

</figcaption></figure>

[en]: <> (There can only be one hover state at a time in a layout.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-hover-one.mp4" src="{assets_path}/interaction/states/behavior-hover-one.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Hover state can only be on one element at a time based on cursor position.)
译文

</figcaption></figure>

[en]: <> (Overlay opacity values)
### 译文

[en]: <> (The opacity value of the overlay should be adjusted for each different combination of text on surface in order to ensure proper visibility and color contrast accessibility. Hover overlays should be at lower opacities to avoid distracting from content.)
译文

<figure>

![]({assets_path}/interaction/states/overlays-hover.png)

<figcaption>

[en]: <> (Surface: 100% #FFFFFF<br>Ink: 100% #000000<br>Overlay: 4% #000000)
[en]: <> (Surface: 100% #6200EE<br>Ink: 100% #FFFFFF<br>Overlay: 8% #FFFFFF)
[en]: <> (Surface: Image<br>Overlay: 16% #000000)
1. 译文<br>译文<br>译文
2. 译文<br>译文<br>译文
3. 译文<br>译文<br>译文

</figcaption></figure>

[en]: <> (Focus)
<h2 id="focus">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (A focused state communicates when a user has highlighted an element using a keyboard or voice. Focus states apply to all interactive components.)
译文

[en]: <> (They should receive high emphasis, as they are not indicated by other visual cues.)
译文

[en]: <> (An overlay signifies a focus state. It can be applied to an entire component, elements within a component, or as a circular shape covering part of a component.)
译文

<figure>

![]({assets_path}/interaction/states/focus-01.png)

<figcaption>

[en]: <> (Overlays can be applied \(1\) to certain elements in a component, \(2\) to the component as a whole, or \(3\) in circular form.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/focus-02.png)

<figcaption>

[en]: <> (Some components, such as button, chips or cards, can inherit \(1\) elevation to signify a focus state.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/states/focus-03.png)

<figcaption>

[en]: <> (\(1\) Controls can appear on focus.)
译文

</figcaption></figure></div></div>

[en]: <> (Focus state inheritance)
#### 译文

[en]: <> (Components that can inherit focus states include: buttons, FABs, toggle buttons, selection controls, grid list items, list items, cards, chips, text fields, and icons.)
译文

<figure>

![]({assets_path}/interaction/states/focus-04.png)

<figcaption>

[en]: <> (Components such as \(1\) icons, \(2\) text fields, \(3\) cards and \(4\) buttons can inherit focus states.)
译文

</figcaption></figure><figure>

![]({assets_path}/interaction/states/focus-05.png)

<figcaption>

[en]: <> (Interactive elements within components can inherit a hover state, such as \(1\) app bars icons, \(2\) actions in sheets, \(3\) tabs items and \(4\) list items.)
译文

</figcaption></figure><figure>

![]({assets_path}/interaction/states/focus-06-dont.png)

<figcaption>

{dont}

[en]: <> (Components that can’t inherit a focus state include: \(1\) whole sheets, \(2\) whole app bars or \(3\) whole dialogs.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Focus states are initiated by user keyboard or voice input on an interactive element, until the user completes the audio or keyboard action.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-focus-fade.mp4" src="{assets_path}/interaction/states/behavior-focus-fade.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Focus states appear and disappear using a fade animation.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-focus-fade.mp4" src="{assets_path}/interaction/states/behavior-focus-fade.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Focus states appear in a read order specific to the composition.)
译文

</figcaption></figure></div></div>

[en]: <> (Focus states can be represented in combination with hover, activated, or selected states.)
译文

<figure>

![]({assets_path}/interaction/states/behavior-03.png)

<figcaption>

[en]: <> (Focus state in combination with \(1\) hover, \(2\) activated and \(3\) selected states.)
译文

</figcaption></figure>

[en]: <> (Only one focus state may exist at a time on a screen.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/placement-focus-one.mp4" src="{assets_path}/interaction/states/placement-focus-one.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A focus state can only be on one element at a time.)
译文

</figcaption></figure>

[en]: <> (Overlay opacity values)
### 译文

[en]: <> (To ensure proper visibility and color contrast accessibility, the overlay’s opacity value should be adjusted for every different combination of text on surface. Focus overlays should be at higher opacities as they are not indicated otherwise by visual cues.)
译文

<figure>

![]({assets_path}/interaction/states/overlays-focus.png)

<figcaption>

[en]: <> (Surface: 100% #FFFFFF<br>Ink: 100% #000000<br>Overlay: 12% #000000)
[en]: <> (Surface: 100% #6200EE<br>Ink: 100% #FFFFFF<br>Overlay: 24% #FFFFFF)
[en]: <> (Surface: Image<br>Overlay: 36% #000000)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Selected)
<h2 id="selected">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (A selected state indicates user selection of options using one of the following input methods: tap, cursor, keyboard, or voice. Selected states should receive medium emphasis so they are easily identifiable, but not distracting.)
译文

[en]: <> (An overlay signifies a selection state. It can be applied to elements within a component or to the entire component.)
译文

<figure>

![]({assets_path}/interaction/states/selected-01.png)

<figcaption>

[en]: <> (The overlay can be applied to \(1\) certain elements in a component, \(2\) the component as a whole. Selection can be signified by an \(A\) overlay and \(B\) iconography.)
译文

</figcaption></figure>

[en]: <> (Selected state inheritance)
#### 译文

[en]: <> (Components that can inherit selected states include: image list items, list items, chips, cards, data tables, menu items, and pickers.)
译文

<figure>

![]({assets_path}/interaction/states/selected-02.png)

<figcaption>

[en]: <> (\(1\) Grid list items, \(2\) list items, \(3\) cards, and \(4\) chips can inherit a selected state.)
译文

</figcaption></figure>

[en]: <> (Components that cannot inherit selected states include: app bars, backdrop, bottom navigation, sheets, buttons, dialogs, dividers, expansion panels, alerts, snackbars, tabs, text fields, or tooltips.)
译文

<figure>

![]({assets_path}/interaction/states/selected-03-dont.png)

<figcaption>

{dont}

[en]: <> (\(1\) Buttons, \(2\) text fields, \(3\) app bars, and \(4\) dialogs can’t inherit a selected state.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Selected states are initiated when users select one or more options.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-selected-ripple.mp4" src="{assets_path}/interaction/states/behavior-selected-ripple.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Selected states appear and disappear using a fade animation.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-selected-user-order.mp4" src="{assets_path}/interaction/states/behavior-selected-user-order.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Selected states appear in user-initiated order.)
译文

</figcaption></figure></div></div>

[en]: <> (Selected states can be represented in combination with hover, focus, pressed or dragged states.)
译文

<figure>

![]({assets_path}/interaction/states/behavior-03.png)

<figcaption>

[en]: <> (Selected state in combination with \(1\) hover and \(2\) focus states.)
译文

</figcaption></figure>

[en]: <> (Multiple selected states may exist at a time in a layout.)
译文

<figure>

![]({assets_path}/interaction/states/composition-01.png)

<figcaption>

[en]: <> (Multiple selected states)
译文

</figcaption></figure>

[en]: <> (Overlay opacity values)
### 译文

[en]: <> (To ensure proper visibility and color contrast accessibility, the overlay’s opacity should be adjusted for every different combination of text on surface. Selection overlays should be at medium emphasis so they are easily identifiable, but not distracting.)
译文

<figure>

![]({assets_path}/interaction/states/overlays-selected.png)

<figcaption>

[en]: <> (Surface: 100% #FFFFFF<br>Ink: 100% #6200EE<br>Overlay: 8% #6200EE)
[en]: <> (Surface: 100% #6200EE<br>Ink: 100% #FFFFFF<br>Overlay: 16% #FFFFFF)
[en]: <> (Surface: Image<br>Overlay: 24% #000000)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Activated)
<h2 id="activated">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Activated states indicate which item from a set of options is currently being viewed. They are initiated either by default or user choice, using input methods such as a tap, cursor, keyboard, or voice input. This state should be highly emphasized.)
译文

[en]: <> (Activated states are signified by an overlay, color change, or other visual treatments applied to elements or segments within a component.)
译文

<figure>

![]({assets_path}/interaction/states/activated-01.png)

<figcaption>

[en]: <> (\(1\) Overlays as activated state signifier. \(2\) Line element as activated state signifier.)
译文

</figcaption></figure>

[en]: <> (Activated state inheritance)
#### 译文

[en]: <> (An activated state differs from a selected state because it communicates a highlighted destination.)
译文

[en]: <> (Components that can inherit activation states include: navigation list items, tab items, bottom navigation items, stepper items, choice chips, or toggle buttons.)
译文

<figure>

![]({assets_path}/interaction/states/activated-02.png)

<figcaption>

[en]: <> (\(1\) Toggle buttons, \(2\) bottom navigation items, \(3\) choice chips and \(4\) tab items can inherit an activated state.)
译文

</figcaption></figure>

[en]: <> (Components that cannot inherit activation states include: buttons, floating action buttons, selection controls, sliders, app bars, bottom and side sheets, dialogs, or alerts.)
译文

<figure>

![]({assets_path}/interaction/states/activated-04-dont.png)

<figcaption>

{dont}

[en]: <> (\(1\) Buttons and \(2\) dialogs cannot inherit an activated state.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Activated states are initiated either by default or user choice.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-activation-ripple.mp4" src="{assets_path}/interaction/states/behavior-activation-ripple.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Activated states appear and disappear using a fade animation.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-activation-user-order.mp4" src="{assets_path}/interaction/states/behavior-activation-user-order.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Activated states appear in user-initiated order.)
译文

</figcaption></figure></div></div>

[en]: <> (Activated states can be represented in combination with hover and focus states.)
译文

<figure>

![]({assets_path}/interaction/states/behavior-03.png)

<figcaption>

[en]: <> (Activated states can be represented in combination with \(1\) hover and \(2\) focus.)
译文

</figcaption></figure>

[en]: <> (Within a single set of options, only one activated state may be present at a time.)
译文

<figure>

![]({assets_path}/interaction/states/composition-01.png)

<figcaption>

[en]: <> (This navigational list has an activated item in the same layout as a choice chip with an activated item.)
译文

</figcaption></figure>

[en]: <> (Overlay opacity values)
### 译文

[en]: <> (To ensure proper visibility and color contrast accessibility, the overlay’s opacity should be adjusted for every different combination of text on surface. Activation overlays should be at higher opacities since they are not always user-initiated.)
译文

<figure>

![]({assets_path}/interaction/states/overlays-activated.png)

<figcaption>

[en]: <> (Surface: 100% #FFFFFF<br>Ink: 100% #6200EE<br>Overlay: 12% #6200EE)
[en]: <> (Surface: 100% #6200EE<br>Ink: 100% #FFFFFF<br>Overlay: 24% #FFFFFF)
[en]: <> (Surface: Image<br>Overlay: 36% #000000)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Pressed)
<h2 id="pressed">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (A pressed state communicates a user-initiated tap or click by a cursor, keyboard, or voice input method. This state applies to all interactive components.)
译文

[en]: <> (Pressed states trigger a change in composition and should be high-emphasis.)
译文

[en]: <> (A ripple overlay signifies a pressed state. It can be applied to an entire component or elements within a component, or as a circular shape over part of the component.)
译文

<figure>

![]({assets_path}/interaction/states/pressed-01.png)

<figcaption>

[en]: <> (A ripple overlay applied to \(1\) elements in a component, \(2\) the component as a whole, or \(3\) in circular form.)
译文

</figcaption></figure>

[en]: <> (Some components, such as buttons or cards, can inherit elevation to signify a pressed state.)
译文

<figure>

![]({assets_path}/interaction/states/pressed-02.png)

<figcaption>

[en]: <> (Elevation applied to a pressed \(1\) button and \(2\) card.)
译文

</figcaption></figure>

[en]: <> (Pressed inheritance)
#### 译文

[en]: <> (Pressed states can be inherited by the following components: buttons, FABs, toggle buttons, selection controls, grid list items, list items, cards, chips, text fields, and icons.)
译文

<figure>

![]({assets_path}/interaction/states/pressed-03.png)

<figcaption>

[en]: <> (Entire components such as \(1\) icons, \(2\) text fields, \(3\) cards, and \(4\) buttons can inherit a pressed state.)
译文

</figcaption></figure>

[en]: <> (Interactive elements can inherit a pressed state.)
译文

<figure>

![]({assets_path}/interaction/states/pressed-04.png)

<figcaption>

[en]: <> (Interactive elements or segments within components such as \(1\) app bars icons, \(2\) actions in sheets, \(3\) tabs items, and \(4\) list items can inherit a pressed state.)
译文

</figcaption></figure>

[en]: <> (Pressed states cannot be inherited by: app bars, tabs, bottom navigation, sheets, dialogs, alerts, menus, and steppers.)
译文

<figure>

![]({assets_path}/interaction/states/pressed-05-dont.png)

<figcaption>

{dont}

[en]: <> (Components such as \(1\) sheets, \(2\) app bars, or \(3\) dialogs cannot inherit a pressed state.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Pressed states are initiated by user keyboard or voice input on an interactive element.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-pressed-motion.mp4" src="{assets_path}/interaction/states/behavior-pressed-motion.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Pressed states appear and disappear using a ripple animation.)
译文

</figcaption></figure>

[en]: <> (Pressed states can be combined with hovered, focused, activated, or selected states.)
译文

<figure>

![]({assets_path}/interaction/states/behavior-03.png)

<figcaption>

[en]: <> (Pressed state in combination with \(1\) hover, \(2\) focus, \(3\) selected, and \(4\) activated states.)
译文

</figcaption></figure>

[en]: <> (There may only be a single pressed state at a time in a layout.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-pressed-one.mp4" src="{assets_path}/interaction/states/behavior-pressed-one.mp4" type="video/mp4"></video></figure>

[en]: <> (Overlay opacity values)
### 译文

[en]: <> (To ensure proper visibility, an overlay’s opacity should be adjusted for every different combination of text on surface. Pressed overlays should be at higher opacities since they trigger a change in layout.)
译文

<figure>

![]({assets_path}/interaction/states/overlays-pressed.png)

<figcaption>

[en]: <> (Surface: 100% #FFFFFF<br>Ink: 100% #000000<br>Overlay: 16% #000000)
[en]: <> (Surface: 100% #6200EE<br>Ink: 100% #FFFFFF<br>Overlay: 32% #FFFFFF)
[en]: <> (Surface: Image<br>Overlay: 48% #000000)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Dragged)
<h2 id="dragged">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (A dragged state occurs when a user presses and moves an element or component. Dragged states should be low emphasis, to avoid distracting users from their task.)
译文

[en]: <> (A overlay signifies a dragged state. It can be applied to the entire component or to elements within a component.)
译文

<figure>

![]({assets_path}/interaction/states/dragged-01.png)

<figcaption>

[en]: <> (An overlay applied to \(1\) elements in a component or \(2\) the component as a whole.)
译文

</figcaption></figure>

[en]: <> (Some components, such as list items, chips, or cards, can inherit elevation to signify a dragged state.)
译文

<figure>

![]({assets_path}/interaction/states/dragged-02.png)

<figcaption>

[en]: <> (Elevation applied to \(1\) card and \(2\) list item)
译文

</figcaption></figure>

[en]: <> (Dragged inheritance)
#### 译文

[en]: <> (Dragged states can be inherited by the following components: grid list items, list items, cards, and chips.)
译文

<figure>

![]({assets_path}/interaction/states/dragged-03.png)

<figcaption>

[en]: <> (\(1\) List items, \(2\) grid list items, \(3\) cards, and \(4\) chips can inherit a dragged state.)
译文

</figcaption></figure>

[en]: <> (Dragged states cannot be inherited by: app bars, buttons, bottom navigation, dialogs, alerts, menus, or steppers.)
译文

<figure>

![]({assets_path}/interaction/states/dragged-04-dont.png)

<figcaption>

{dont}

[en]: <> (Components such as \(1\) buttons, \(2\) app bars, \(3\) dialogs, or \(4\) text fields cannot inherit a dragged state.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Dragged states are initiated when users touch and hold elements, using an input method such as a tap or click.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-dragged-motion.mp4" src="{assets_path}/interaction/states/behavior-dragged-motion.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Dragged states occur after a pressed state and appear and disappear using a fade animation.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-dragged-touch.mp4" src="{assets_path}/interaction/states/behavior-dragged-touch.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The user’s touch should directly control the movement of the dragged element.)
译文

</figcaption></figure></div></div>

[en]: <> (There may only be a single dragged state at a time within a layout.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/states/behavior-dragged-one.mp4" src="{assets_path}/interaction/states/behavior-dragged-one.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A single dragged state)
译文

</figcaption></figure>

[en]: <> (Overlay opacity values)
### 译文

[en]: <> (To ensure proper visibility, an overlay’s opacity should be adjusted for every different combination of text on surface. Dragged overlays should be at lower opacities to avoid distracting from content.)
译文

<figure>

![]({assets_path}/interaction/states/overlays-dragged.png)

<figcaption>

[en]: <> (Surface: 100% #FFFFFF<br>Ink: 100% #000000<br>Overlay: 8% #000000)
[en]: <> (Surface: 100% #6200EE<br>Ink: 100% #FFFFFF<br>Overlay: 16% #FFFFFF)
[en]: <> (Surface: Image<br>Overlay: 32% #000000)
1. 译文
2. 译文
3. 译文

</figcaption></figure></div>
