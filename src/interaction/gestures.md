<div class="article__intro">

[en]: <> (Gestures)
# 译文

[en]: <> (Gestures let users interact with screen elements using touch.)
译文

<nav>

[en]: <> (Principles)
[en]: <> (Properties)
[en]: <> (Types of gestures)
* [译文](#principles)
* [译文](#properties)
* [译文](#types-of-gestures)

</nav></div><div class="article__body">

[en]: <> (Principles)
<h2 id="principles">译文</h2>

[en]: <> (Gestures help users perform tasks rapidly and intuitively using touch.)
译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/interaction/gestures/gestures-illos-01.png)

<figcaption>

[en]: <> (Alternative interaction)
#### 译文

[en]: <> (Gestures use touch as another way of performing a task.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/gestures/gestures-illos-02.png)

<figcaption>

[en]: <> (Easy to use)
#### 译文

[en]: <> (Users can perform gestures in imprecise ways.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/interaction/gestures/gestures-illos-03.png)

<figcaption>

[en]: <> (Tactile control)
#### 译文

[en]: <> (Gestures allow direct changes to UI elements using touch, such as precisely zooming into a map.)
译文

</figcaption></figure></div></div>

[en]: <> (Properties)
<h2 id="properties">译文</h2>

[en]: <> (Provide realistic responses)
### 译文

[en]: <> (Material responds to gestures in real-time to express direct user control over touch interactions.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-response-01-do.mp4" src="{assets_path}/interaction/gestures/attributes-response-01-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (The user’s touch should directly control the movement of elements.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-response-01-dont.mp4" src="{assets_path}/interaction/gestures/attributes-response-01-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid gestures that trigger an animation. Elements should be directly controlled by the user’s touch.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-response-03-do.mp4" src="{assets_path}/interaction/gestures/attributes-response-03-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (When animating an element to a destination, the speed of the user’s gesture should be matched by the speed of the element being moved across the screen.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-response-03-dont.mp4" src="{assets_path}/interaction/gestures/attributes-response-03-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t misrepresent the velocity of a gesture in the resulting animation. The animation should match the speed of the user’s touch.)
译文

</figcaption></figure></div></div>

[en]: <> (Indicate gestures)
### 译文

[en]: <> (How elements look and behave should indicate if gestures can be performed on them. Visual cues indicate that a gesture can be performed, such as showing the edge of a card to suggest it may be pulled into view.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-imply-01.mp4" src="{assets_path}/interaction/gestures/attributes-imply-01.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The edge of a sheet invites the user to pull it into view.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-imply-02.mp4" src="{assets_path}/interaction/gestures/attributes-imply-02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (In the absence of other affordances, icons provide a clear indication that a gesture can be performed.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-imply-03.mp4" src="{assets_path}/interaction/gestures/attributes-imply-03.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Animate elements before the user interacts with them to suggest a gesture.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-imply-04.mp4" src="{assets_path}/interaction/gestures/attributes-imply-04.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Elevated surfaces, like cards, suggest that they can be moved independently.)
译文

</figcaption></figure></div></div>

[en]: <> (Show what gestures do)
### 译文

[en]: <> (As a user performs a gesture, elements should move in a way that demonstrates the gesture’s purpose.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-show-01.mp4" src="{assets_path}/interaction/gestures/attributes-show-01.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Element transitions should continuously animate as a gesture progresses.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-show-02.mp4" src="{assets_path}/interaction/gestures/attributes-show-02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The size of the photo and visibility of the scrim suggest that this drag gesture will close the photo.)
译文

</figcaption></figure></div></div>

[en]: <> (Gestures that execute actions should use graphics that communicate what the gesture will do.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/attributes-show-03.mp4" src="{assets_path}/interaction/gestures/attributes-show-03.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Upon swiping, an icon appears to suggest the purpose of the gesture. The radial fill indicates that a threshold has been passed and the action will be committed when the gesture is completed.)
译文

</figcaption></figure></div></div>

[en]: <> (Types of gestures)
<h2 id="types-of-gestures">译文</h2>

[en]: <> (Gestures help users to navigate between views, take actions, and manipulate content.)
译文

[en]: <> (Types of gestures include:)
译文

[en]: <> (Navigational gestures)
[en]: <> (Action gestures)
[en]: <> (Transform gestures)
* 译文
* 译文
* 译文

[en]: <> (Navigational gestures)
### 译文

[en]: <> (Navigational gestures help users to move through a product easily. They supplement other explicit input methods, like buttons and navigation components.)
译文

[en]: <> (Types of navigation gestures include:)
译文

[en]: <> (Tap)
[en]: <> (Scroll and pan)
[en]: <> (Drag)
[en]: <> (Swipe)
[en]: <> (Pinch)
* 译文
* 译文
* 译文
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Tap)
#### 译文

[en]: <> (Users can navigate to destinations by touching elements.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/type-nav-tap.mp4" src="{assets_path}/interaction/gestures/type-nav-tap.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Users can navigate by directly tapping elements or controls, like buttons.)
译文

</figcaption></figure></div></div>

[en]: <> (Scroll and pan)
#### 译文

[en]: <> (Users can slide surfaces vertically, horizontally, or omnidirectionally to move continuously through content.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/type-nav-scroll.mp4" src="{assets_path}/interaction/gestures/type-nav-scroll.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Users scroll vertically through content in a list.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/type-nav-pan.mp4" src="{assets_path}/interaction/gestures/type-nav-pan.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Panning allows users to move expansive surfaces in any direction.)
译文

</figcaption></figure></div></div>

[en]: <> (Drag)
#### 译文

[en]: <> (Users can slide surfaces to bring them into and out of view.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/behavior-visibility-standard.mp4" src="{assets_path}/interaction/gestures/behavior-visibility-standard.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Users can drag surfaces like bottom sheets into view.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/type-nav-drag-02.mp4" src="{assets_path}/interaction/gestures/type-nav-drag-02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Users can close scrolling surfaces by dragging them past a distance threshold.)
译文

</figcaption></figure></div></div>

[en]: <> (Swipe)
#### 译文

[en]: <> (Users can move surfaces horizontally to navigate between peers, like tabs.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/type-nav-swipe-do.mp4" src="{assets_path}/interaction/gestures/type-nav-swipe-do.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Swiping the content of a tab allows the user to move between tabs.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/type-nav-swipe-dont.mp4" src="{assets_path}/interaction/gestures/type-nav-swipe-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid situations where a single gesture might produce two different results.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Pinch)
#### 译文

[en]: <> (Users can scale surfaces to navigate between screens.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/type-nav-pinch.mp4" src="{assets_path}/interaction/gestures/type-nav-pinch.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Users can pinch a surface to open and close it. The expansion of the surface suggests that the pinch gesture is available.)
译文

</figcaption></figure></div></div>

[en]: <> (Action gestures)
### 译文

[en]: <> (Action gestures can perform actions or provide shortcuts for completing actions.)
译文

[en]: <> (Types of action gestures include:)
译文

[en]: <> (Tap)
[en]: <> (Long press)
[en]: <> (Swipe)
* 译文
* 译文
* 译文

[en]: <> (Tap or long press)
#### 译文

[en]: <> (The tap gesture and long press gesture each allow users to interact with elements and access additional functionality.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/type-action-tap.mp4" src="{assets_path}/interaction/gestures/type-action-tap.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A tap allows users to perform actions and interact with elements.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/type-action-longpress.mp4" src="{assets_path}/interaction/gestures/type-action-longpress.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Long presses can reveal additional modes and features, but are not easily discoverable.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Swipe)
#### 译文

[en]: <> (Users can slide elements to complete actions upon passing a threshold.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/type-action-swipe.mp4" src="{assets_path}/interaction/gestures/type-action-swipe.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Users may quickly commit actions to list items by swiping them.)
译文

</figcaption></figure></div></div>

[en]: <> (Transform gestures)
### 译文

[en]: <> (Users can transform an element’s size, position, and rotation with gestures.)
译文

[en]: <> (Types of transform gestures include:)
译文

[en]: <> (Double tap)
[en]: <> (Pinch)
[en]: <> (Compound gestures)
[en]: <> (Pick up and move)
* 译文
* 译文
* 译文
* 译文

[en]: <> (Double tap or pinch)
#### 译文

[en]: <> (A pinch, or two quick taps, allows users to zoom into and out of content.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/transform-pinch.mp4" src="{assets_path}/interaction/gestures/transform-pinch.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Pinches allow users to zoom into and out of content along a gradient of zoom levels.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/transform-doubletap.mp4" src="{assets_path}/interaction/gestures/transform-doubletap.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Double taps allow users to zoom into content, or toggle between zoom levels)
译文

</figcaption></figure></div></div>

[en]: <> (Compound gestures)
#### 译文

[en]: <> (Users can fluidly transition between various gestures.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/transform-compound-do.mp4" src="{assets_path}/interaction/gestures/transform-compound-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Enable users to seamlessly transition between gestures such as zooming, rotating, and panning.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/transform-compound-dont.mp4" src="{assets_path}/interaction/gestures/transform-compound-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t prevent users from fluidly transitioning between multiple gestures.)
译文

</figcaption></figure></div></div>

[en]: <> (Pick up and move)
#### 译文

[en]: <> (A long press and drag allows users to reorder content.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/interaction/gestures/cards-behavior-pickupmove-do.mp4" src="{assets_path}/interaction/gestures/cards-behavior-pickupmove-do.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Cards can be reordered by using a long press to pick them up, and dragging them to a new position.)
译文

</figcaption></figure></div>
