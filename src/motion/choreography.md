<div class="article__intro">

[en]: <> (Choreography)
# 译文

[en]: <> (Transition choreography is a coordinated sequence of motion that maintains user focus as the interface adapts.)
译文

<nav>

[en]: <> (Sequencing)
[en]: <> (Transformation)
[en]: <> (Using a focal element)
* [译文](#sequencing)
* [译文](#transformation)
* [译文](#using-a-focal-element)

</nav></div><div class="article__body">

[en]: <> (Sequencing)
<h2 id="sequencing">译文</h2>

[en]: <> (Animation sequences)
### 译文

[en]: <> (An animation sequence refers to the order in which different parts of an animation appear, start moving, and stop moving.)
译文

[en]: <> (A good sequence makes it easy to understand what has changed about a screen, if any elements were added or removed, and what’s important to know about the next interaction.)
译文

[en]: <> (Simple sequences)
### 译文

[en]: <> (Simple sequences animate all elements in unison, such as the expansion of a bottom sheet.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/01-simple-sequencing.mp4" src="{assets_path}/motion/choreography/01-simple-sequencing.mp4" type="video/mp4"></video><figcaption>

[en]: <> (This bottom sheet slides up using standard easing to expose additional options. All animation details, including color and position, start and stop in sync.)
译文

</figcaption></figure>

[en]: <> (Complex sequences)
### 译文

[en]: <> (Complex transitions, like viewing details from a contact list, require more elaborate sequences. This can be done by dividing the transition into two parts, at the point when elements move the fastest. Classify each of the elements into four categories: incoming, outgoing, persistent or static.)
译文

[en]: <> (First part of transition: Outgoing elements disappear)
[en]: <> (Second part of transition: Incoming elements appear)
[en]: <> (Entire transition: Persistent elements transform)
* 译文
* 译文
* 译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/02-sequencing.mp4" src="{assets_path}/motion/choreography/02-sequencing.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Peak velocity for the Standard curve is at 30% of the overall duration. Outgoing elements disappear over 90ms, and incoming elements appear over 210ms.)
译文

[en]: <> (The persistent curve shows the easing of persistent elements.)
[en]: <> (The outgoing curve shows the easing of outgoing elements.)
[en]: <> (The incoming curve shows the easing of incoming elements.)
* 译文
* 译文
* 译文

</figcaption></figure>

[en]: <> (Transformation)
<h2 id="transformation">译文</h2>

[en]: <> (Simple transformations)
### 译文

[en]: <> (Simple transitions involve tweening all properties that change from one state to the next.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/00-simpletransformations.mp4" src="{assets_path}/motion/choreography/00-simpletransformations.mp4" type="video/mp4"></video><figcaption>

[en]: <> (This simple transformation shows the switch component tweening its position and color by moving from left to right and fading from white to purple.)
译文

</figcaption></figure>

[en]: <> (Complex transformations)
### 译文

[en]: <> (Complex layout changes use *shared transformation* to create smooth transitions from one layout to the next. Elements are grouped together and transform as a single unit, rather than animating independently, avoiding multiple transformations that overlap and compete for attention.)
译文

[en]: <> (Grouped elements are changed with a fade through transition. Grouped elements disappear and then reappear with their final appearance.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/01-pointoffocus-do.mp4" src="{assets_path}/motion/choreography/01-pointoffocus-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Minimize the number of elements that move independently. Transformation of the group directs attention to provide continuity, while individual elements fade in or out.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/01-pointoffocus-dont.mp4" src="{assets_path}/motion/choreography/01-pointoffocus-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t animate many elements in relation to each other. Individual movements compete for attention and divide focus.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/01-pointoffocus-jumpcut-dont.mp4" src="{assets_path}/motion/choreography/01-pointoffocus-jumpcut-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t let the UI jump and shift abruptly, which can make it difficult to stay focused.)
译文

</figcaption></figure></div></div>

[en]: <> (Transitions with animated containers)
### 译文

[en]: <> (When a group of elements is contained by clearly defined borders during a transition, such as a card or set of dividers, the container transforms. The group of elements within maintains its aspect ratio, scaling to fit the container’s width. The group can be clipped by the container’s bottom edge.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/02-focus-nofocalelement.mp4" src="{assets_path}/motion/choreography/02-focus-nofocalelement.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Continuity is created by animating the group in unison with its container. The group scales to match the container’s width. When expanded, elements aren’t clipped, except at the bottom edge.)
译文

</figcaption></figure>

[en]: <> (Transitions without animated containers)
### 译文

[en]: <> (When a group of elements is not contained by clearly defined borders, or its container doesn’t animate, a shared transformation can create a smooth transition. For example, a pair of icons within a floating action button can rotate in unison to create continuity.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/04-symbolicmotion-fab.mp4" src="{assets_path}/motion/choreography/04-symbolicmotion-fab.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The icons transition using clockwise rotation.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/04-symbolicmotion-stepper.mp4" src="{assets_path}/motion/choreography/04-symbolicmotion-stepper.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Incoming and outgoing elements move up and down as a group, in tandem with the vertical stepper.)
译文

</figcaption></figure></div></div>

[en]: <> (Using a focal element)
<h2 id="using-a-focal-element">译文</h2>

[en]: <> (A transition may include a *focal element*, which is a persistent element significant to the hierarchy that can be tweened. Like animated containers, focal elements enhance continuity by seamlessly transforming their appearance.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/01-focalelement-large.mp4" src="{assets_path}/motion/choreography/01-focalelement-large.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The header image is a focal element, remaining visible from start to finish as it transforms between collapsed and expanded layouts.)
译文

</figcaption></figure>

[en]: <> (Focal element conflicts)
### 译文

[en]: <> (Some transitions place a focal element in the path of other elements. In these cases, avoid using a focal element and apply the default transition, allowing elements to disappear and then reappear.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/02-focus-focalelement-dont.mp4" src="{assets_path}/motion/choreography/02-focus-focalelement-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid focal elements that overlap with other elements in motion.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/02-focus-focalelement-do.mp4" src="{assets_path}/motion/choreography/02-focus-focalelement-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (To simplify overlapping motion, substitute a focal element with a fade transition.)
译文

</figcaption></figure></div></div>

[en]: <> (Grouping focal elements)
### 译文

[en]: <> (Transitions that have both a focal element and an animated container, but can’t move them in unison, should divide transition elements into groups.)
译文

[en]: <> (For example, a card transition can group together the motion of:)
译文

[en]: <> (A collapsed layout with a focal element)
[en]: <> (An expanded layout with a card)
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/03-focus-thumbnail-do.mp4" src="{assets_path}/motion/choreography/03-focus-thumbnail-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Group elements together so they move as little as possible within their container. This collapsed layout is grouped with a focal element \(the thumbnail image\), while the expanded layout is grouped with the card.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/motion/choreography/03-focus-thumbnail-dont.mp4" src="{assets_path}/motion/choreography/03-focus-thumbnail-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid groupings in which contents move within their container. Elements aren’t grouped within the card during the transition, and the card clips the expanded layout on all four sides rather than just at the bottom.)
译文

</figcaption></figure></div></div></div>
