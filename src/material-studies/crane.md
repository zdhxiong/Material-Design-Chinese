<div class="article__intro">

[en]: <> (Crane)
# 译文

[en]: <> (Crane is a travel app that uses Material Design components and Material Theming to create a personalized, on-brand experience.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-main.png)

</figure><nav>

[en]: <> (About Crane)
[en]: <> (Product architecture)
[en]: <> (Layout)
[en]: <> (Color)
[en]: <> (Typography)
[en]: <> (Iconography)
[en]: <> (Components)
[en]: <> (Motion)
* [译文](#about-crane)
* [译文](#product-architecture)
* [译文](#layout)
* [译文](#color)
* [译文](#typography)
* [译文](#iconography)
* [译文](#components)
* [译文](#motion)

</nav></div><div class="article__body">

[en]: <> (About Crane)
<h2 id="about-crane">译文</h2>

[en]: <> (Crane is a travel app that helps users find and book travel, lodging, and restaurant options that match their input preferences. The Crane app is both functional \(used for booking reservations\) and informative \(allowing users to explore and learn about new experiences\).)
译文

[en]: <> (Crane’s brand is refined and expressive, with an attention to visual and motion details that create an experience that feels tailor-made to the user.)
译文

<figure>

![]({assets_path}/material-studies/crane/masonry-crane.png)

</figure>

[en]: <> (Flexible aesthetic)
### 译文

[en]: <> (Along with being both functional and informative, the Crane app provides a variety of filters to customize content so it’s relevant to the user.)
译文

[en]: <> (To make it easy for users to understand this flexibility, interactions are centered around the use of a backdrop component. Both the front and back layers of the backdrop share information with one another by contextually updating content. This interplay reinforces how Crane tailors it’s content to the preference of the user, presenting options in a way that is both bold and classy, direct but respectful.)
译文

[en]: <> (Product architecture)
<h2 id="product-architecture">译文</h2>

[en]: <> (The Crane app’s information architecture uses a *flow structure*. A flow structure is a task-based structure, requiring screens to be accessed in consecutive order. As the user proceeds through the flow, they can branch out or skip steps along the way.)
译文

[en]: <> (A flow structure is best for Crane because it provides the flexibility needed for users interested in exploring filtered content, by making them actionable so they can book a specific choice.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-family.png)

<figcaption>

[en]: <> (Crane uses tabs and a backdrop to navigate and filter content on mobile, tablet, and desktop.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Main sections)
#### 译文

[en]: <> (The Crane app has three main sections:)
译文

[en]: <> (Fly)
[en]: <> (Sleep)
[en]: <> (Eat)
* 译文
* 译文
* 译文

[en]: <> (Navigate to these main sections by using the tabs along the top of the screen.)
译文

[en]: <> (These tabs are nested in the back layer of a backdrop component, which also contains relevant filters and contextual actions.)
译文

[en]: <> (Content filtering)
#### 译文

[en]: <> (Users can quickly customize Crane’s content according to their preferences. The back layer contains controls that affect the content displayed on the front layer, allowing users to view content customized for them..)
译文

[en]: <> (The backdrop component is ideal for Crane because of the flexibility and content customization it provides. Users can change preferences on the back layer, and those changes will be immediately reflected in the front layer’s content. This allows users to quickly move from passively browsing information to taking action on it – all within the same screen, making flows easy and efficient to move through.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/crane/navtransitions-peer.mp4" src="{assets_path}/material-studies/crane/navtransitions-peer.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tapping between tabs on Crane.)
译文

</figcaption></figure></div></div>

[en]: <> (Layout)
<h2 id="layout">译文</h2>

[en]: <> (Grid system)
### 译文

[en]: <> (Crane uses a responsive grid system, which has flexible columns and padding that can resize depending on the screen width \(such as mobile, tablet, and desktop\). Content is stacked in columns, which vertically expand and contract upon user interaction.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/crane/casestudies-crane-grid-1a.mp4" src="{assets_path}/material-studies/crane/casestudies-crane-grid-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Crane’s grid system, scaled down to 50%)
译文

</figcaption></figure>

[en]: <> (Tabs and backdrop \(Mobile\))
#### 译文

[en]: <> (Because of limited screen space, each backdrop item stacks vertically on top of the others.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-productarch-tabsbackdrop-mobile.png)

</figure>

[en]: <> (Tabs and backdrop \(Tablet\))
#### 译文

[en]: <> (Because tablets have more screen space than mobile, there is enough horizontal room to placebackdrop items next to one other.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-productarch-tabsbackdrop-tablet.png)

<figcaption>

[en]: <> (Scaled down to 62.5%)
译文

</figcaption></figure>

[en]: <> (Tabs and backdrop \(Desktop\))
#### 译文

[en]: <> (Because there is more screen space on a desktop than on a tablet, there is enough space for all backdrop items to be placed next to one another, horizontally.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-productarch-tabsbackdrop-desktop.png)

<figcaption>

[en]: <> (Scaled down to 50%)
译文

</figcaption></figure>

[en]: <> (Elevation)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Using color)
#### 译文

[en]: <> (Crane’s UI uses color to express elevation differences between elements, rather than shadows. For example, cards show the boundaries of their containers by having a color distinct from the background, without casting shadows.)
译文

[en]: <> (The backdrop shadow)
#### 译文

[en]: <> (An exception to this is when content scrolls in the front layer of the backdrop component. In this case, the default behavior of the backdrop remains in place, producing a shadow to separate the front layer subheader from the content scrolling behind it.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-elevation.png)

<figcaption>

[en]: <> (A card collection scrolling beneath a front layer’s subheader.)
译文

</figcaption></figure></div></div>

[en]: <> (Color)
<h2 id="color">译文</h2>

[en]: <> (Color theme)
### 译文

[en]: <> (Primary color)
#### 译文

[en]: <> (Crane’s primary color is purple. It uses three variations of this color to distinguish different UI elements.)
译文

[en]: <> (Secondary color)
#### 译文

[en]: <> (Crane’s secondary color is red, which it uses to highlight selected items.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-color.png)

</figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Distinct elements and states)
#### 译文

[en]: <> (Not all screens need to use the secondary color. Variations of Crane’s primary color purple are sufficient enough to create distinction between elements. Since Crane’s secondary color is often used for selected states, it’s absence is helpful in indicating when no selection has been made.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-color-noselection.png)

</figure></div></div>

[en]: <> (Crane’s secondary color red is used to indicate selected states for components such as checkboxes, sliders, and radio buttons. Red can also be used to give typographic emphasis.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-color-secondary.png)

<figcaption>

[en]: <> (Scaled down to 62.5%)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Alternative secondary color)
#### 译文

[en]: <> (Crane customized app alerts use an alternative secondary color, orange.)
译文

[en]: <> (As red is Crane’s baseline secondary color, an alert using red would not sufficiently stand out from the surrounding UI, and may be misread as selected state. The alternative secondary color of orange helps it stand out as an error state.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-color-altsecondary.png)

</figure></div></div>

[en]: <> (Typography)
<h2 id="typography">译文</h2>

[en]: <> (Type scale)
### 译文

[en]: <> (Crane’s type scale provides the typographic variety necessary for its app content. All items in the type scale use [Raleway]\(https://fonts.google.com/specimen/Raleway\) as the typeface, making use of the variety of weights available with Raleway Light, Regular, Medium, and SemiBold.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-typescale.png)

<figcaption>

[en]: <> (Crane’s type scale)
译文

</figcaption></figure>

[en]: <> (Raleway)
### 译文

[en]: <> (Crane uses the sans-serif typeface Raleway across the entire app.)
译文

[en]: <> (Although Raleway was initially made as a display typeface, intended for headings and large sizes, it was expanded into a 9-weight family that is suitable for body copy. The use of a single typeface across the Crane app gives the UI consistently, allowing other elements \(such as photography and small visual details\) to stand out.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-type-1.png)

<figcaption>

[en]: <> (Raleways letterforms)
译文

</figcaption></figure><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-type-2.png)

<figcaption>

[en]: <> (Raleway compared to Roboto)
译文

</figcaption></figure>

[en]: <> (Iconography)
<h2 id="iconography">译文</h2>

[en]: <> (Crane’s iconography is reminiscent of icons found in travel settings, such as airports and train stations.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-icons-alt.png)

<figcaption>

[en]: <> (1. Crane’s icons were designed using the same grid structure, 2. A collection of Crane’s icons)
译文

</figcaption></figure>

[en]: <> (Components)
<h2 id="components">译文</h2>

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-components.png)

</figure>

[en]: <> (Image List)
### 译文

[en]: <> (Crane lets users explore content using an image list \(on tablet and desktop\).)
译文

[en]: <> (Masonry grid)
#### 译文

[en]: <> (This image list uses a masonry grid, which dynamically sizes image container heights based on the original image size. The masonry grid style ensure photos that are landscape, portrait, or square formats all show as much content as possible. It creates an exciting, unpredictable rhythm, inviting the user to continue to scroll down and explore content.)
译文

[en]: <> (Image labels)
#### 译文

[en]: <> (The image list has been customized to display text labels with each item. Custom padding gives more space above and below each item, ensuring there is no confusion between which text label is paired with each image.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-imagelist-1.png)

<figcaption>

[en]: <> (Crane’s customized masonry image list \(reduced 50%\))
译文

</figcaption></figure>

[en]: <> (List)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (On mobile, Crane uses the list component to organize content, customized to incorporate Crane’s typography and color.)
译文

[en]: <> (Each list item contains content most relevant to the user \(including location name, type, distance, and cost\) and a photo.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-imagelist-2.png)

<figcaption>

[en]: <> (Crane’s customized list on mobile)
译文

</figcaption></figure></div></div>

[en]: <> (Cards)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Crane uses cards to show detailed search results, such as flight options with departure and arrival times, cost, airport and carrier information.)
译文

[en]: <> (Vertical card collection)
#### 译文

[en]: <> (Shrine’s cards appear in a vertically stacked card collection, using color to indicate containment by having a white fill color that contrasts with the gray background color. Crane’s cards don’t cast shadows, allowing them to have very little padding between each card, for easy scannability.)
译文

</div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/crane/crane-cardtransition.mp4" src="{assets_path}/material-studies/crane/crane-cardtransition.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Cards tapped on mobile open full screen to show more information and allow users to take an action, such a booking a flight.)
译文

</figcaption></figure></div></div>

[en]: <> (On tablet and desktop, a card expands when tapped to reveal more information and allow users to take action on the item. When a card in a collection is expanded, all other cards in the collection are given a white overlay with an 80% opacity to give emphasis to the expanded card.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/crane/casestudies-crane-cards-desktop-1a.mp4" src="{assets_path}/material-studies/crane/casestudies-crane-cards-desktop-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Crane’s customized card collection on desktop)
译文

</figcaption></figure>

[en]: <> (Text fields)
### 译文

[en]: <> (Outlined text fields)
#### 译文

[en]: <> (Crane uses outlined text fields, customized with the brand’s typeface and colors. Because Crane uses red as its secondary color, errors are expressed using orange to ensure that they stand out.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-textfields-outlined.png)

<figcaption>

[en]: <> (Crane’s customized outlined text fields)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-textfields-compare-alt-small1.png)

<figcaption>

[en]: <> (An outlined text field that hasn’t been customized)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-textfields-compare-alt-small2.png)

<figcaption>

[en]: <> (Crane’s outlined text fields use custom typography, iconography, and color.)
译文

</figcaption></figure></div></div>

[en]: <> (Filled text fields)
#### 译文

[en]: <> (Crane uses filled text fields for inputting user preferences. They have a custom shape with rounded corners on all four sides and use Crane’s brand colors, typography, and iconography.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-textfields-filled.png)

<figcaption>

[en]: <> (Crane’s customized filled text fields)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-textfields-filled-compare-alt-small1.png)

<figcaption>

[en]: <> (A filled text field that has not been customized.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-textfields-filled-compare-alt-small2.png)

<figcaption>

[en]: <> (Crane’s filled text fields use custom typography, iconography, color, and shape.)
译文

</figcaption></figure></div></div>

[en]: <> (Selection controls and sliders)
### 译文

[en]: <> (Crane uses a variety selection controls to help users filter search results and make selections during the checkout process. These controls include checkboxes, radio buttons, sliders, and switches, that are customized with Crane’s brand colors.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-selectioncontrols-alt.png)

<figcaption>

[en]: <> (Crane’s checkboxes and sliders)
译文

[en]: <> (Crane’s radio buttons)
译文

[en]: <> (Crane’s switches)
译文

</figcaption></figure>

[en]: <> (Tabs)
### 译文

[en]: <> (To signal a tab’s active state, Crane uses a pill-shaped selector as visual affordance.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-tabs.png)

<figcaption>

[en]: <> (Crane’s customized tabs.)
译文

</figcaption></figure><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-tabs-compare.png)

<figcaption>

[en]: <> (1. A tab that has not been customized. 2. Crane’s tabs use custom typography and color, and states. The custom selected state includes a pill-shaped line around the tab, and a change in type color.)
译文

</figcaption></figure>

[en]: <> (Backdrop)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (The backdrop component provides the main structure for Crane by containing navigation, filters, and contextual actions on the back layer, and main content on the front layer.)
译文

[en]: <> (The back layer has been customized to use Crane’s primary color purple, which stands in high contrast to the white front layer. The front layer has been customized to have rounded curves on the top edges, to mimic the curvature of Crane’s logo.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/material-studies/crane/casestudies-crane-backdrop.png)

</figure></div></div>

[en]: <> (Stepper)
### 译文

[en]: <> (Steppers make it easy for Crane users to book flights, lodging, and make dining reservations. Crane uses one style of stepper for desktop and tablet, and another for mobile.)
译文

[en]: <> (On mobile, steps are surfaced on the back layer of the backdrop, with the related form on the front layer. If the user wishes to see more of the front layer, Crane’s stepper has a collapsed state that lets the user know where they are in the stepper process at the top of the screen.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/crane/casestudies-crane-stepper-mobile-1a.mp4" src="{assets_path}/material-studies/crane/casestudies-crane-stepper-mobile-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Crane’s mobile stepper has a collapsed state.)
译文

</figcaption></figure>

[en]: <> (The larger size of tablet and desktop allows Crane to fit all the steppers along the top of the screen.)
译文

<figure>

![]({assets_path}/material-studies/crane/casestudies-crane-stepper-3.png)

<figcaption>

[en]: <> (Scaled down to 50%)
译文

</figcaption></figure>

[en]: <> (Motion)
<h2 id="motion">译文</h2>

[en]: <> (Launch screen)
### 译文

[en]: <> (Character animation, emphasized easing and staggers are used to set a sophisticated and premium tone.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/crane/01-launchscreen.mp4" src="{assets_path}/material-studies/crane/01-launchscreen.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Crane uses an animated launch screen to reinforce its brand on first launch.)
译文

</figcaption></figure>

[en]: <> (Navigation transitions)
### 译文

[en]: <> (Crane’s navigation transitions use emphasized easing and longer durations to add a sophisticated tone.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/crane/02-navtransitions.mp4" src="{assets_path}/material-studies/crane/02-navtransitions.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Parent child)
#### 译文

[en]: <> (Fade through, shared transformations and emphasized easing are used to maintain continuity.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/crane/03-navtransitions-peer.mp4" src="{assets_path}/material-studies/crane/03-navtransitions-peer.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Peer)
#### 译文

[en]: <> (Emphasized easing is used on peer transitions.)
译文

</figcaption></figure></div></div>

[en]: <> (Stagger)
### 译文

[en]: <> (Staggers are used when new lists or cards cards enter the screen. The cascade effect gives the transition a polished tone.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/material-studies/crane/04-cascade.mp4" src="{assets_path}/material-studies/crane/04-cascade.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Updating the date filter reloads the list items with a stagger.)
译文

</figcaption></figure></div>
