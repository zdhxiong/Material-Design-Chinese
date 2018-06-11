<div class="article__intro">

[en]: <> (Navigation transitions)
# 导航转换

[en]: <> (Navigational transitions occur when users move between screens, such as from a home screen to a detail screen.)
译文

<figure>

![]({assets_path}/navigation/navigation-transitions/navigationtransitions-hero-1.png)

</figure><nav>

[en]: <> (About navigation transitions)
[en]: <> (Hierarchical transitions)
[en]: <> (Peer transitions)
* [译文](#about-navigation-transitions)
* [译文](#hierarchical-transitions)
* [译文](#peer-transitions)

</nav></div><div class="article__body">

[en]: <> (About navigation transitions)
<h2 id="about-navigation-transitions">译文</h2>

[en]: <> (Navigation and motion)
### 译文

[en]: <> (Navigation transitions use motion to guide users between two screens in your app. They help users orient themselves by expressing your app’s hierarchy, using movement to indicate how elements are related to one another.)
译文

[en]: <> (For example, when an element expands to fill the entire screen, the act of expansion expresses that the new screen is a *child* element. The screen from which it expanded is its *parent* element.)
译文

[en]: <> (Hierarchy)
### 译文

[en]: <> (Hierarchical transitions move users one level upwards or downwards through an app’s hierarchy, while peer transitions move users between siblings \(screens of equal hierarchy\).)
译文

[en]: <> (Hierarchical transitions)
<h2 id="hierarchical-transitions">译文</h2>

[en]: <> (Hierarchical transitions reflect when users move one level up, or down, in an app. Screens at adjacent levels to one another have a parent and child relationship with one another, in which the parent is placed at a higher level of hierarchy than its child.)
译文

[en]: <> (Parent-child transitions)
#### 译文

[en]: <> (From a parent screen, an embedded child element lifts up on touch and expands in place, using the *standard easing curve* The motion both draws focus to the child screen \(which is the destination of the interaction\), while reinforcing the relationship between parent and child screens.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/navigation/navigation-transitions/hierarchicaltransitions-1-spec.mp4" src="{assets_path}/navigation/navigation-transitions/hierarchicaltransitions-1-spec.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A parent-to-child transition)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/navigation/navigation-transitions/hierarchicaltransitions-reply-1a.mp4" src="{assets_path}/navigation/navigation-transitions/hierarchicaltransitions-reply-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Message previews in this email app lift and expand in place to reveal the full message.)
译文

</figcaption></figure>

[en]: <> (Peer transitions)
<h2 id="peer-transitions">译文</h2>

[en]: <> (*Peer transitions* occur between screens at the same level of hierarchy.)
译文

[en]: <> (*Sibling transitions* occur between peers that share a parent, while *top-level peer transitions* are only used for switching between primary destinations.)
译文

[en]: <> (Sibling transitions)
### 译文

[en]: <> (Screens that share the same parent \(such as photos in an album, sections of a profile, or steps in a flow\) move in unison to reinforce their relationship to one another. The peer screen slides in from the one side, while its sibling moves off screen in the opposite direction.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/navigation/navigation-transitions/peertransitions-1-spec.mp4" src="{assets_path}/navigation/navigation-transitions/peertransitions-1-spec.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tabs indicate they are related by sitting at the same elevation and moving together.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/navigation/navigation-transitions/peertransitions-crane-1b.mp4" src="{assets_path}/navigation/navigation-transitions/peertransitions-crane-1b.mp4" type="video/mp4"></video><figcaption>

[en]: <> (This travel app uses tabs to allow switching between three different types of trips.)
译文

</figcaption></figure>

[en]: <> (Top-level transitions)
### 译文

[en]: <> (At the top level of an app, destinations are often grouped into major tasks \(and the tasks may not relate to one another\). These screens transition in place by changing values such as opacity and scale.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/navigation/navigation-transitions/peertransitions-bottomnav.mp4" src="{assets_path}/navigation/navigation-transitions/peertransitions-bottomnav.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Destinations in a bottom navigation bar transition in place.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/navigation/navigation-transitions/peertransitions-bottomnav-baseline.mp4" src="{assets_path}/navigation/navigation-transitions/peertransitions-bottomnav-baseline.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The top-level destinations of this photo app transition appropriately, given that the destinations aren’t strongly related to one another.)
译文

</figcaption></figure></div>
