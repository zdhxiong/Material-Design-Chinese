<div class="article__intro">

[en]: <> (Android widget)
# Android 小部件

[en]: <> (Widgets display glanceable information of an app's most important data and functionality.)
译文

<nav>

[en]: <> (Types)
[en]: <> (Behavior)
* [译文](#types)
* [译文](#behavior)

</nav></div><div class="article__body">

[en]: <> (Types)
<h2 id="types">译文</h2>

[en]: <> (Widgets display your app’s new and interesting content in a consolidated form on a mobile home screen. They link to richer detail within the app.)
译文

[en]: <> (Users can move and, if supported, resize widgets across their home screen panels.)
译文

[en]: <> (Information widgets)
#### 译文

[en]: <> (Information widgets display a few elements of importance to a user and track how that information changes over time, such as weather or sports scores. Tapping the widget launches the associated app into a detail screen.)
译文

<figure>

![]({assets_path}/platform-guidance/android-widget/as-widget-types-information.png)

<figcaption>

[en]: <> (An information widget)
译文

</figcaption></figure>

[en]: <> (Collection widgets)
#### 译文

[en]: <> (Collection widgets display multiple elements of the same type, such as a collection of articles from a news app. They focus on two interactions:)
译文

[en]: <> (Browsing a collection)
[en]: <> (Opening an element’s detail screen)
* 译文
* 译文

[en]: <> (Collection widgets can scroll vertically.)
译文

<figure>

![]({assets_path}/platform-guidance/android-widget/as-widget-types-collection-1.png)

<figcaption>

[en]: <> (A collection widget)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-widget/as-widget-types-collection-2.png)

<figcaption>

[en]: <> (A collection widget)
译文

</figcaption></figure>

[en]: <> (Control widgets)
#### 译文

[en]: <> (Control widgets display frequently used functions. These functions may be triggered from the home screen without opening the app. For example, music app widgets allow the user to play, pause, or skip music tracks from outside the music app.)
译文

[en]: <> (Control widgets may or may not progress to a detail screen.)
译文

<figure>

![]({assets_path}/platform-guidance/android-widget/as-widget-types-control.png)

<figcaption>

[en]: <> (A control widget)
译文

</figcaption></figure>

[en]: <> (Hybrid widgets)
#### 译文

[en]: <> (Many widgets are hybrids that combine elements of the different types above. Center your widget around one of these types and add elements of others as needed.)
译文

<figure>

![]({assets_path}/platform-guidance/android-widget/as-widget-types-hybrid.png)

<figcaption>

[en]: <> (A hybrid music player widget combines a control widget with elements of an information widget. The result keeps the user informed about which track is currently playing. )
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Scrolling)
### 译文

[en]: <> (Scrollable widgets)
#### 译文

[en]: <> (List or grid-based collection widgets usually expand or contract the vertical scrolling area. Regardless of the widget's size, the user can still scroll all elements into view.)
译文

[en]: <> (Determine how much of your app's information should surface. For smaller widget sizes, concentrate on the essential and then add more contextual information as the widget grows.)
译文

[en]: <> (Non-scrollable widgets)
#### 译文

[en]: <> (Information widgets are not scrollable. All content and layout must dynamically fit into the size selected by the user.)
译文

[en]: <> (Resizing)
### 译文

[en]: <> (Resizing allows users to adjust the height or width of a widget. This allows users to influence the layout of widgets on home panels.)
译文

[en]: <> (Your app may be completely resizable or constrained to horizontal or vertical size changes.)
译文

<figure>

![]({assets_path}/platform-guidance/android-widget/as-widget-behavior-resizing.png)

<figcaption>

[en]: <> (A long press and subsequent release sets resizable widgets into resize mode. Users can use the drag handles or the widget corners to set the desired size.)
译文

</figcaption></figure>

[en]: <> (Responsive resizing)
#### 译文

[en]: <> (Widgets should accommodate different spacing requirements across devices, including cell number, size, and spacing variations.)
译文

[en]: <> (Navigation)
### 译文

[en]: <> (Your widgets should provide navigation links to frequently used areas of your app, including:)
译文

[en]: <> (Functions that allow the user to create new content, such as a new document or message)
[en]: <> (Access to the top level of your app)
* 译文
* 译文

[en]: <> (Configuring)
### 译文

[en]: <> (Once placed on a home screen panel, Android widgets display their configuration choices.)
译文

[en]: <> (Configuration should:)
译文

[en]: <> (Present no more than 2-3 configuration elements)
[en]: <> (Present choices using dialogs, rather than full-screen, to retain the user's context)
* 译文
* 译文

[en]: <> (Once setup, widgets do not typically show a "Setup" or "Configuration" button.)
译文

</div>
