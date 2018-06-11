<div class="article__intro">

[en]: <> (Understanding navigation)
# 理解导航

[en]: <> (Navigation enables users to move through an app.)
译文

<figure>

![]({assets_path}/navigation/understanding-navigation/about-hero-1.png)

</figure><nav>

[en]: <> (Types of navigation)
[en]: <> (Lateral navigation)
[en]: <> (Forward navigation)
[en]: <> (Reverse navigation)
* [译文](#types-of-navigation)
* [译文](#lateral-navigation)
* [译文](#forward-navigation)
* [译文](#reverse-navigation)

</nav></div><div class="article__body">

[en]: <> (Types of navigation)
<h2 id="types-of-navigation">译文</h2>

[en]: <> (Navigation is the act of moving between screens of an app to complete tasks. It’s enabled through several means: dedicated navigation components, embedding navigation behavior into content, and platform affordances.)
译文

[en]: <> (Navigational directions)
#### 译文

[en]: <> (Based on your app’s information architecture, a user can move in one of three navigational directions:)
译文

[en]: <> (*Lateral navigation* refers to moving between screens at the same level of hierarchy. An app’s primary navigation component should provide access to all destinations at the top level of its hierarchy.)
[en]: <> (*Forward navigation* refers to moving between screens at consecutive levels of hierarchy, steps in a flow, or across an app. Forward navigation embeds navigation behavior into containers \(such as cards, lists, or images\), buttons, links, or by using search.)
[en]: <> (*Reverse navigation* refers to moving backwards through screens either chronologically \(within one app or across different apps\) or hierarchically \(within an app\). Platform conventions determine the exact behavior of reverse navigation within an app.)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/navigation/understanding-navigation/usage-lateral.png)

<figcaption>

[en]: <> (Lateral navigation allows movement between the top-level screens of this music app’s information architecture.)
译文

</figcaption></figure><figure>

![]({assets_path}/navigation/understanding-navigation/usage-forward.png)

<figcaption>

[en]: <> (Users of this music app can use forward navigation to access a song in one of two ways:)
译文

[en]: <> (Navigating hierarchically from a music album to a particular song)
[en]: <> (Searching for the song and navigating directly to it, bypassing screens in the hierarchy above the song \(Library and Album\))
1. 译文
2. 译文

</figcaption></figure><figure>

![]({assets_path}/navigation/understanding-navigation/usage-reverse.png)

<figcaption>

[en]: <> (From a song screen, users may navigate in reverse in one of two ways:)
译文

[en]: <> (Upward in the hierarchy to the song’s parent, in this case the album containing the song)
[en]: <> (Chronologically, to a search results screen, but only if the user just navigated to the song from that screen)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Lateral navigation)
<h2 id="lateral-navigation">译文</h2>

[en]: <> (Lateral navigation refers to movement between screens at the same level of hierarchy. It enables access to different app destinations and features, or pivoting between related items in a set.)
译文

[en]: <> (Destinations and hierarchy)
#### 译文

[en]: <> (An app’s primary navigation component should provide access to all destinations at the top level of its hierarchy. Apps with two or more top-level destinations can provide lateral navigation through a navigation drawer, bottom navigation bar, or tabs.)
译文

[en]: <> (Component               | Use for                   | # destinations    | Devices)
[en]: <> (---------               |----------                 |---------          |------)
[en]: <> (Navigation drawer       | Top-level destinations    | 5+                | Mobile, Tablet, Desktop)
[en]: <> (Bottom navigation bar   | Top-level destinations    | 2-5               | Mobile)
[en]: <> (Tabs                    | Any level of hierarchy    | 2+                | Mobile, Tablet, Desktop)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文         | 译文
译文     | 译文     | 译文         | 译文
译文     | 译文     | 译文         | 译文

<figure>

![]({assets_path}/navigation/understanding-navigation/lateral-nav-drawer.png)

<figcaption>

[en]: <> (Navigation drawers are appropriate for five or more top-level destinations, and can be used across device sizes for a consistent navigation experience.)
译文

</figcaption></figure><figure>

![]({assets_path}/navigation/understanding-navigation/lateral-bottom-nav.png)

<figcaption>

[en]: <> (Bottom navigation bars provide access to 2-5 top-level destinations on mobile devices. Their location, visibility, and persistence across screens allow quick pivoting between destinations.)
译文

</figcaption></figure><figure>

![]({assets_path}/navigation/understanding-navigation/lateral-tabs.png)

<figcaption>

[en]: <> (Tabs can be used at any level of an app’s hierarchy to present two or more peer sets of data across screen sizes.)
译文

</figcaption></figure><figure>

![]({assets_path}/navigation/understanding-navigation/lateral-hierarchy-do.png)

<figcaption>

{do}

[en]: <> (Tabs \(2\) can enable additional lateral navigation within an app’s hierarchy when paired with a top-level navigation component like a navigation drawer \(1\).)
译文

</figcaption></figure>

[en]: <> (Forward navigation)
<h2 id="forward-navigation">译文</h2>

[en]: <> (Methods of forward navigation)
#### 译文

[en]: <> (Forward navigation refers to one of three types of movement between screens to complete a task:)
译文

[en]: <> (*Downward* in an app’s hierarchy to access deeper content, from a *parent* screen \(higher level of hierarchy\) to a *child* screen \(lower level\))
[en]: <> (*Sequentially* through a *flow*, or an ordered sequence of screens, such as a checkout process)
[en]: <> (*Directly* from one screen to any other in the app, such as from a home screen to a screen deep in an app’s hierarchy)
* 译文
* 译文
* 译文

[en]: <> (Implementing forward navigation)
#### 译文

[en]: <> (While lateral navigation uses dedicated navigation components, forward navigation is often embedded into a screen’s content through a variety of components.)
译文

[en]: <> (Forward navigation can be implemented using:)
译文

[en]: <> (Content containers such as cards, lists, or image lists)
[en]: <> (Buttons that advance to another screen)
[en]: <> (In-app search on one or more screens)
[en]: <> (Links within content)
* 译文
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/navigation/understanding-navigation/forward-content.png)

<figcaption>

[en]: <> (The cards on the home screen \(parent\) provide a preview of each note’s content and can be tapped to navigate to the full note \(child\).)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/navigation/understanding-navigation/forward-button.png)

<figcaption>

[en]: <> (Buttons can provide a clear affordance to advance in a flow through their label, placement, and visual emphasis.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/navigation/understanding-navigation/forward-search.png)

<figcaption>

[en]: <> (Search allows users to quickly access screens anywhere within an app’s information architecture.)
译文

</figcaption></figure></div></div>

[en]: <> (Reverse navigation)
<h2 id="reverse-navigation">译文</h2>

[en]: <> (Reverse navigation refers to backward movement between screens. It can move users *chronologically* through their recent screen history, or *upwards* through an app’s hierarchy.)
译文

[en]: <> (Reverse chronological navigation)
#### 译文

[en]: <> (Reverse chronological navigation refers to navigating in reverse order through a user’s history of recently viewed screens. It can move users between screens within an app or across multiple apps. For example, the Back button on a web browser is a form of reverse chronological navigation.)
译文

[en]: <> (This type of navigation is typically provided by the operating system or platform. Individual platforms define how it behaves and how users can access that functionality.)
译文

<figure>

![]({assets_path}/navigation/understanding-navigation/reverse-chronological.png)

<figcaption>

[en]: <> (The Back button allows users to navigate recently viewed screens in reverse chronological order.)
译文

[en]: <> (The Back button \(A\) in the Android navigation bar)
[en]: <> (The Back button \(B\) in a web browser)
* 译文
* 译文

</figcaption></figure>

[en]: <> (Upward navigation)
#### 译文

[en]: <> (Upward navigation allows users to navigate one level upwards within a single app’s hierarchy, until the app’s home or top-level screen is reached. For example, the Up arrow in a top app bar is a form of upwards reverse navigation.)
译文

[en]: <> (Upward navigation should be implemented for all child screens in an app and follow platform guidance. Android and web apps should use the Material Up action, while iOS apps should use the back button within an iOS Navigation Bar.)
译文

<figure>

![]({assets_path}/navigation/understanding-navigation/reverse-upward.png)

<figcaption>

[en]: <> (Upward navigation is possible on Android and web apps through an Up action \(A\))
[en]: <> (Upward navigation is possible on iOS through the back button \(B\) in an iOS Navigation Bar)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Considerations)
#### 译文

[en]: <> (The design and functionality of your app should account for both kinds of reverse navigation in your app’s target platforms. To optimize a user’s experience when navigating in reverse:)
译文

[en]: <> (Return users to their prior screen position and state, such as their vertical scroll position, to speed up information recall and task resumption.)
[en]: <> (Provide clear messaging if a screen’s prior state is no longer available, such as when information from a form has been cleared for privacy.)
[en]: <> (Clearly indicate child screens’ relationship with screens above them in the hierarchy. For example, if a user moves directly to a *child* screen in your app, they should be able to identify the *parent* screen to which they can navigate upward.)
* 译文
* 译文
* 译文

</div>
