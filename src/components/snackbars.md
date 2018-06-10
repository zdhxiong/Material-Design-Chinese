<div class="article__intro">

[en]: <> (Snackbars)
# 译文

[en]: <> (Snackbars provide brief messages about app processes at the bottom of the screen.)
译文

<figure>

![]({assets_path}/components/snackbars/snackbars-container-do.png)

</figure>

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Placement)
[en]: <> (Spec)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#placement)
* [译文](#spec)

</nav>

</div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Snackbars inform users of a process that an app has performed or will perform. They appear temporarily, towards the bottom of the screen. They shouldn’t interrupt the user experience, and they don’t require user input to disappear.)
译文

[en]: <> (Frequency)
#### 译文

[en]: <> (Only one snackbar may be displayed at a time.)
译文

[en]: <> (Actions)
#### 译文

[en]: <> (A snackbar can contain a single action. Because they disappear automatically, the action shouldn’t be “Dismiss” or “Cancel.”)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col">

<figure>

![]({assets_path}/components/snackbars/snackbar-illos-02.png)

<figcaption>

[en]: <> (Informational)
#### 译文

[en]: <> (Snackbars provide updates on an app’s processes.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/snackbars/snackbar-illos-03.png)

<figcaption>

[en]: <> (Temporary)
#### 译文

[en]: <> (Snackbars appear temporarily, and disappear on their own without requiring user input to be dismissed.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/snackbars/snackbar-illos-04.png)

<figcaption>

[en]: <> (Contextual)
#### 译文

[en]: <> (Snackbars are placed in the most suitable area of the UI.)
译文

</figcaption></figure>

</div></div>

[en]: <> (When to use)
### 译文

[en]: <> (Snackbars should communicate messages that are minimally interruptive; those don’t require user action. )
译文

<figure>

![]({assets_path}/components/snackbars/snackbars-when-to-use.png)

</figure>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<figure>

![]({assets_path}/components/snackbars/understanding-snackbars-elements.png)

<figcaption>

[en]: <> (1. Text label)
[en]: <> (2. Container)
[en]: <> (3. Action \(optional\))
#### 1. 译文
#### 2. 译文
#### 3. 译文

</figcaption></figure>

[en]: <> (Text label)
### 译文

[en]: <> (Snackbars contain a text label that directly relates to the process being performed. On mobile, the text label can contain up to two lines of text.)
译文

<figure>

![]({assets_path}/components/snackbars/understanding-snackbars-text-1-line.png)

<figcaption>

[en]: <> (Text labels are short, clear updates on processes that have been performed.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/snackbars/understanding-snackbars-text-2-lines.png)

<figcaption>

{do}

[en]: <> (On mobile, use up to two lines of text to communicate the snackbar message.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-text-desktop.png)

<figcaption>

{do}

[en]: <> (In wide UIs like desktop and tablet, snackbars should have only a single line of text.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/snackbars/understanding-snackbars-text-dont-icon.png)

<figcaption>

{dont}

[en]: <> (Don’t place icons in snackbars. If your message needs an icon, consider using an alert.)
译文

</figcaption></figure>

[en]: <> (Container)
### 译文

[en]: <> (Snackbars are displayed in rectangular containers with a grey background. Containers should be completely opaque, so that text labels remain legible.)
译文

<figure>

![]({assets_path}/components/snackbars/snackbars-container-do.png)

<figcaption>

{do}

[en]: <> (Snackbar containers use a solid background color with a shadow to stand out against content.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-container-desktop-do.png)

<figcaption>

{do}

[en]: <> (In wide layouts, extend the container width to accommodate longer text labels.)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/snackbars/snackbars-container-caution-transparent.png)

<figcaption>

{caution}

[en]: <> (An app can apply slight transparency to the container background, as long as text remains clearly legible.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/snackbars/snackbars-container-don-t-shape.png)

<figcaption>

{dont}

[en]: <> (Avoid significantly altering the shape of a snackbar container.)
译文

</figcaption></figure>

</div></div>

<figure>

![]({assets_path}/components/snackbars/snackbars-container-caution-no-shadow.png)

<figcaption>

{dont}

[en]: <> (Avoid displaying a snackbar container without elevation.)
译文

</figcaption></figure>

[en]: <> (Action)
### 译文

[en]: <> (Snackbars can display a single text button that lets users take action on a process performed by the app. Snackbars shouldn’t be the only way to access a core use case, to make an app usable.)
译文

<figure>

![]({assets_path}/components/snackbars/understanding-snackbars-action-color.png)

<figcaption>

[en]: <> (To distinguish the action from the text label, text buttons should display colored text.)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/snackbars/snackbars-action-dont-color.png)

<figcaption>

{dont}

[en]: <> (The text label shouldn’t share the same color as the text button.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/snackbars/snackbars-action-dont-elevated-btn.png)

<figcaption>

{dont}

[en]: <> (Don’t use a filled or elevated button in a snackbar, as it draws too much attention.)
译文

</figcaption></figure>

</div></div>

<figure>

![]({assets_path}/components/snackbars/understanding-snackbars-text-2-lines-longer-action.png)

<figcaption>

{do}

[en]: <> (If an action is long, it can be displayed on a third line.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/snackbars/understanding-snackbars-action-undo.png)

<figcaption>

{do}

[en]: <> (To allow users to amend choices, display an "Undo" action.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-action-caution-dismiss.png)

<figcaption>

{caution}

[en]: <> (A dismiss action is unnecessary, as snackbar disappears on their own by default.)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Appearing and disappearing)
### 译文

[en]: <> (Snackbars appear without warning, and don't require user interaction. They automatically disappear from the screen after a minimum of four seconds, and a maximum of ten seconds.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/snackbars/01-appear.mp4" src="{assets_path}/components/snackbars/01-appear.mp4" type="video/mp4">
</video>

</figure>

[en]: <> (Consecutive snackbars)
### 译文

[en]: <> (When multiple snackbar updates are necessary, they should appear one at a time.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/snackbars/02-appearconsecutive.mp4" src="{assets_path}/components/snackbars/02-appearconsecutive.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Consecutive snackbars should appear above persistent bottom navigation.)
译文

</figcaption>

</figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/snackbars/02-appearconsecutive-dont.mp4" src="{assets_path}/components/snackbars/02-appearconsecutive-dont.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (Avoid stacking snackbars on top of one another.)
译文

</figcaption>

</figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/snackbars/02-appear-dont.mp4" src="{assets_path}/components/snackbars/02-appear-dont.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (Don’t animate other components along with snackbar animations, such as the floating action button.)
译文

</figcaption>

</figure>

[en]: <> (Placement)
<h2 id="placement">译文</h2>

[en]: <> (Snackbars should be placed at the bottom of a UI, in front of app content. Avoid placing a snackbar in front of frequently used touch targets or navigation.)
译文

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-do.png)

<figcaption>

[en]: <> (Place a snackbar in front of content.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-don-t-bottom-bar.png)

<figcaption>

{dont}

[en]: <> (Avoid placing snackbars in front of navigation components.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-don-t-edge-to-edge.png)

<figcaption>

{caution}

[en]: <> (Snackbars can span the entire width of a UI. However, they should not appear in front of navigation or other important UI elements like floating action buttons.)
译文

</figcaption></figure>

[en]: <> (Snackbars and floating action buttons \(FABs\))
### 译文

[en]: <> (Snackbars should appear above FABs.)
译文

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-fab.png)

</figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-fab-caution.png)

<figcaption>

{caution}

[en]: <> (The FAB can be pushed up when a snackbar appears, though this can cause distraction if multiple snackbars appear.)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-fab-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t place a snackbar in front of a FAB.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-fab-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t place a snackbar behind a FAB.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Snackbars and persistent footer elements)
### 译文

[en]: <> (Snackbars should appear directly above persistent footer elements.)
译文

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-do-navigation.png)

</figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-sheets-extended.png)

<figcaption>

{do}

[en]: <> (Place snackbars in front of medium extended sheets.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-don-t-push-bottom-bar.png)

<figcaption>

{dont}

[en]: <> (Avoid pushing bottom persistent elements up when snackbars appear.)
译文

</figcaption></figure>

[en]: <> (Snackbars in wide layouts)
### 译文

[en]: <> (In wide layouts, snackbars can be left-aligned or center-aligned if they are consistently placed on the same spot at the bottom of the screen.)
译文

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-desktop-do.png)

</figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-container-landscape-do-2.png)

</figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-container-desktop-dont-flush-edge.png)

<figcaption>

{dont}

[en]: <> (Avoid placing snackbars flushed to one edge of the layout.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-desktop-dont-side-to-side.png)

<figcaption>

{dont}

[en]: <> (Avoid placing consecutive snackbars side by side or next to one another.)
译文

</figcaption></figure>

[en]: <> (Spec)
<h2 id="spec">译文</h2>

<figure>

![]({assets_path}/components/snackbars/snackbar-spec-singleline.png)

</figure>

<figure>

![]({assets_path}/components/snackbars/snackbar-spec-singleline-action.png)

</figure>

<figure>

![]({assets_path}/components/snackbars/snackbar-spec-twoline-action.png)

</figure>

<figure>

![]({assets_path}/components/snackbars/snackbar-spec-twoline-longaction.png)

</figure>
</div>