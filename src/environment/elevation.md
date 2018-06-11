<div class="article__intro">

[en]: <> (Elevation)
# 译文

[en]: <> (Elevation is the relative distance between two surfaces along the z-axis.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/elevation-hero.mp4" src="{assets_path}/environment/elevation/elevation-hero.mp4" type="video/mp4"></video><figcaption>

[en]: <> (*Component elevation values*)
*译文*

[en]: <> (Nav drawer: 16dp)
[en]: <> (App bar: 4dp)
[en]: <> (Card: 1dp to 8dp)
[en]: <> (FAB: 6dp)
[en]: <> (Button: 2dp to 8dp)
[en]: <> (Dialog: 24dp)
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文
6. 译文

</figcaption></figure><nav>

[en]: <> (Elevation in Material Design)
[en]: <> (Depicting elevation)
[en]: <> (Elevation hierarchy)
[en]: <> (Default elevations)
* [译文](#elevation-in-material-design)
* [译文](#depicting-elevation)
* [译文](#elevation-hierarchy)
* [译文](#default-elevations)

</nav></div><div class="article__body">

[en]: <> (Elevation in Material Design)
<h2 id="elevation-in-material-design">译文</h2>

[en]: <> (Measuring elevation)
### 译文

[en]: <> (Elevation in Material Design is measured as the distance between Material surfaces. The distance from the front of one Material surface to the front of another is measured along the z-axis in density-independent pixels \(dps\) and depicted \(by default\) using [shadows]\(https://www.mdui.org/design/environment/elevation.html#depicting-elevation\))
译文

<figure>

![]({assets_path}/environment/elevation/elevation-materialdesign.png)

<figcaption>

[en]: <> (One surface at 1dp elevation and another surface at 8dp elevation, as viewed from the front)
[en]: <> (The difference in elevation between the two surfaces is 7dp, as viewed from the side)
1. 译文
2. 译文

</figcaption></figure><figure>

![]({assets_path}/environment/elevation/elevation-materialdesign-2.png)

<figcaption>

[en]: <> (Surfaces at the same elevation can appear differently when other surfaces are behind them.)
译文

[en]: <> (Both surfaces A and B are at the same 8dp elevation. They cast different shadows because Surface B is in front of another surface \(C\) that already has elevation.)
[en]: <> (Elevation differences between surfaces \(A\), \(B\), and \(C\), as viewed from the side.)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (The elevation system)
### 译文

[en]: <> (All Material Design surfaces, and components, have elevation values.)
译文

[en]: <> (Surfaces at different elevations do the following:)
译文

[en]: <> (Allow surfaces to move in front of and behind other surfaces, such as content scrolling behind app bars)
[en]: <> (Reflect spatial relationships, such as how a floating action button’s shadow indicates it is separate from a card collection)
[en]: <> (Focus attention on the highest elevation, such as a dialog temporarily appearing in front of other surfaces)
* 译文
* 译文
* 译文

[en]: <> (Elevation can be depicted using shadows or other visual cues, such as surface fills or opacities.)
译文

<figure>

![]({assets_path}/environment/elevation/measuringelevation-intro-alt.png)

<figcaption>

[en]: <> (Material Design displays elevation using shadows.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/elevation/measuringelevation-intro-alt-caution01.png)

<figcaption>

{caution}

[en]: <> (Different surface fills can be used to express elevation instead of shadows.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/elevation/measuringelevation-intro-alt-caution02.png)

<figcaption>

{caution}

[en]: <> (Opacity can be used to express elevation instead of shadows.)
译文

</figcaption></figure></div></div>

[en]: <> (Resting elevation)
### 译文

[en]: <> (Resting elevations are starting elevation values given to components by default. Components move from resting elevations in response to the user or a system event. All Material components have resting elevations that are the same for each type of component. For example, all cards have the same resting elevations as each other, and a dialog has the same resting elevation as other dialogs.)
译文

[en]: <> (Resting elevation and environment)
#### 译文

[en]: <> (Resting elevations vary based on the environment, platform, or app. The resting elevations on mobile are designed to provide visual cues, like shadows, to indicate when components are interactive. In contrast, resting elevations on desktop are shallower because other cues, like hover states, communicate when a component is interactive. For example, cards at 0dp elevation on desktop are outlined with a stroke.)
译文

<figure>

![]({assets_path}/environment/elevation/restingelevation-baselineelevation.png)

<figcaption>

[en]: <> (Resting elevations on mobile for an app bar \(A\), cards \(B\), and a floating action button \(C\), as viewed from the front)
[en]: <> (The same components, as viewed from the side)
1. 译文
2. 译文

</figcaption></figure><figure>

![]({assets_path}/environment/elevation/restingelevation-modifiedelevation.png)

<figcaption>

[en]: <> (Resting elevations on desktop for an app bar \(A\), floating action button \(B\), and cards \(C\), as viewed from the front)
[en]: <> (The same components, as viewed from the side)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Changing elevation)
### 译文

[en]: <> (Components can change elevation in response to user input or system events. When this happens, components move to preset *dynamic elevation offsets*, which are the default elevations components move to when not resting.)
译文

[en]: <> (Dynamic elevation offsets are the same across each type of component. For example, all cards use the same offset as other cards, and all floating action buttons use the same offset as other floating action buttons.)
译文

[en]: <> (Once the user input \(or system event\) is completed or cancelled, the component swiftly returns to its resting elevation.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/responsiveelevation.mp4" src="{assets_path}/environment/elevation/responsiveelevation.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Some components respond to user input with increases in elevation.)
译文

[en]: <> (Upon user input, this button increases its elevation from 2dp to 8dp)
[en]: <> (The same component, as viewed from the side)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Elevation interference)
### 译文

[en]: <> (When a component moves between its resting elevation and dynamic elevation offset, it shouldn’t collide with other components.)
译文

[en]: <> (To avoid these kinds of collisions, components can move out of the way. For example, if increasing a card’s elevation positions it to pass through a floating action button, that button can disappear or move off-screen before the collision occurs.)
译文

[en]: <> (You can also design your app’s layout to avoid collisions, such as placing a floating action button beside cards, instead of directly above them.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/avoidelevationinterference-cardpickup.mp4" src="{assets_path}/environment/elevation/avoidelevationinterference-cardpickup.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Temporarily reposition or remove components which might collide with transitioning components. Front \(1\) and side \(2\) views of a card stream on a mobile device, demonstrating how a floating action button \(B\) disappears when a card \(A\) is picked up.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/avoidelevationinterference-cardstreamdesktop.mp4" src="{assets_path}/environment/elevation/avoidelevationinterference-cardstreamdesktop.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Design your app to minimize opportunities for elevation-based interference.)
译文

</figcaption></figure>

[en]: <> (Depicting elevation)
<h2 id="depicting-elevation">译文</h2>

[en]: <> (To successfully depict elevation, a surface must show:)
译文

[en]: <> (Surface edges, contrasting the surface from its surroundings)
[en]: <> (Overlap with other surfaces, either at rest or in motion)
[en]: <> (Distance from other surfaces)
1. 译文
2. 译文
3. 译文

[en]: <> (Surface edges)
### 译文

[en]: <> (Edges help to express the tactile quality of Material surfaces. They show where one surface ends and another begins by separating different parts of a UI into identifiable components. For example, the edges of an app bar show that it is separate from a grid list, communicating to the user that the grid list scrolls independently of the app bar.)
译文

[en]: <> (By default, Material surfaces use shadows to indicate edges. Other methods can be used to indicate edges, such as:)
译文

[en]: <> (Giving surfaces different colors)
[en]: <> (Giving surfaces different opacities)
* 译文
* 译文

[en]: <> (Edges must create sufficient contrast between surfaces \(by meeting or exceeding accessible contrast ratios\) for them to be seen as separate from one another.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/elevation/othertechniques-edges-none.png)

<figcaption>

[en]: <> (Without showing edges, it’s unclear if this image contains one or more surfaces.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/elevation/othertechniques-edges-fill.png)

<figcaption>

[en]: <> (Contrasting surface fills provide enough contrast to make it clear that this image has two surfaces.)
译文

</figcaption></figure></div></div>

[en]: <> (Surface overlap)
### 译文

[en]: <> (When a surface overlaps another surface, either partially or completely, it indicates that the two surfaces occupy different elevations \(but not the degree, or amount, of difference between them\). Surfaces at higher elevations appear in front of those at lower elevations, meaning they are positioned at different elevations along the z-axis. Surfaces may overlap one another by default, or become overlapped as a result of motion that changes their position in the UI.)
译文

[en]: <> (When surfaces have different opacities or insufficient contrast from one another, it can make it difficult to tell which surface is in front of another. Avoid ambiguous overlap by ensuring surface edges are clearly defined.)
译文

<figure>

![]({assets_path}/environment/elevation/surfaceedges-grid-1.png)

<figcaption>

[en]: <> (Shadows show surface edges, surface overlap, and the degree of elevation.)
[en]: <> (Different surface colors show surface edges and overlap, but not the degree of elevation.)
[en]: <> (Opacity shows surface edges and overlap, but not the degree of elevation.)
1. 译文
2. 译文
3. 译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/elevation/occlusion-do-1.png)

<figcaption>

{do}

[en]: <> (The top app bar overlaps the cards, indicating it is in front of the cards. This overlap doesn’t express the degree of elevation between the surfaces.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/elevation/occlusion-dont-1.png)

<figcaption>

{dont}

[en]: <> (Without visual cues of surface edges and overlap, it’s not possible to determine how many surfaces are present, which surfaces are above the others, nor the degree of elevation between surfaces.)
译文

</figcaption></figure></div></div>

[en]: <> (Distance)
### 译文

[en]: <> (The degree of elevation difference between surfaces can be expressed using scrimmed backgrounds, or using shadows.)
译文

[en]: <> (Scrimmed backgrounds)
#### 译文

[en]: <> (When the background is scrimmed in a UI, it expresses that the content above it is at a higher elevation. Scrimmed backgrounds express large, but unspecified, amounts of elevation.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/elevation/dimmedbackgrounds-do-1.png)

<figcaption>

{do}

[en]: <> (A scrimmed background can indicate surface overlap, but not the degree of elevation.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/elevation/dimmedbackgrounds-dont-1.png)

<figcaption>

{dont}

[en]: <> (The lack of shadows or scrimmed background makes it difficult to distinguish the dialog box from the background.)
译文

</figcaption></figure></div></div>

[en]: <> (Shadows)
#### 译文

[en]: <> (Shadows can express the degree of elevation between surfaces in ways that other techniques cannot.)
译文

[en]: <> (Both a shadow’s size and amount of softness or diffusion express the degree of distance between two surfaces. For example, a surface with a shadow that is small and sharp indicates a surface’s close proximity to the surface behind it. Larger, softer shadows express more distance.)
译文

[en]: <> (Subtle differences in shadow size and diffusion communicate:)
译文

[en]: <> (A detailed degree of distance between two surfaces)
[en]: <> (Elevation differences between non-overlapping surfaces)
* 译文
* 译文

<figure>

![]({assets_path}/environment/elevation/expressingelevation-1.png)

<figcaption>

[en]: <> (Shadows show the edges of a surface and its degree of elevation against the background. They also make differences in surface elevations perceptible between non-overlapping surfaces.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/elevation/separation-shadow-do-1.png)

<figcaption>

{do}

[en]: <> (Shadows make differences in surface elevation perceptible. The smaller, sharper shadow of the app bar \(1\) indicates it is at a lower elevation than the menu \(2\), which has a larger, softer shadow.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/elevation/separation-shadow-dont-1.png)

<figcaption>

{dont}

[en]: <> (The lack of shadows or other visual cues to indicate edges and surface overlap creates insufficient contrast between surfaces. As a result, it’s difficult to understand which pieces of this UI are grouped together.)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/environment/elevation/shadows-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use shadows for style only.)
译文

</figcaption></figure>

[en]: <> (Motion and elevation)
### 译文

[en]: <> (Motion can emphasize elevation using the following methods:)
译文

[en]: <> (Changes in shadows)
[en]: <> (Displaying overlap)
[en]: <> (Pushing)
[en]: <> (Scaling)
[en]: <> (Parallax)
* 译文
* 译文
* 译文
* 译文
* 译文

[en]: <> (Changes in shadows)
#### 译文

[en]: <> (Changes in shadow size and softness emphasize changes in elevation.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/tapcard.mp4" src="{assets_path}/environment/elevation/tapcard.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The shadow grows to emphasize the card is rising.)
译文

</figcaption></figure>

[en]: <> (Displaying overlap)
#### 译文

[en]: <> (A surface may overlap another upon animation, either partially or completely, showing which surface is in front of the other.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/tapcard-overlap.mp4" src="{assets_path}/environment/elevation/tapcard-overlap.mp4" type="video/mp4"></video><figcaption>

[en]: <> (As it expands, a surface may show elevation by overlapping nearby surfaces.)
译文

</figcaption></figure>

[en]: <> (Pushing)
#### 译文

[en]: <> (Surfaces that share the same elevation can move surfaces in their path.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/tapcard-push.mp4" src="{assets_path}/environment/elevation/tapcard-push.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A selected list item expands, pushing surrounding items away.)
译文

</figcaption></figure>

[en]: <> (Scaling)
#### 译文

[en]: <> (Scaling the size of a surface up or down can emphasize elevation changes.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/scaling.mp4" src="{assets_path}/environment/elevation/scaling.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Foreground and background surfaces scale up and down to emphasize elevation changes.)
译文

</figcaption></figure>

[en]: <> (Parallax)
#### 译文

[en]: <> (Multiple surfaces at different elevations that move at different speeds can create a sense of depth and place focus on foreground content.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/shrine-parallax.mp4" src="{assets_path}/environment/elevation/shrine-parallax.mp4" type="video/mp4"></video><figcaption>

[en]: <> (The foreground surface moves faster than the background image, creating a sense of depth.)
译文

</figcaption></figure>

[en]: <> (Combining motion techniques)
#### 译文

[en]: <> (Elevation can be emphasized through a combination of motion techniques.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/basil-parallax.mp4" src="{assets_path}/environment/elevation/basil-parallax.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Parallax motion and scaling emphasize which surfaces are in front of others.)
译文

</figcaption></figure>

[en]: <> (Elevation hierarchy)
<h2 id="elevation-hierarchy">译文</h2>

[en]: <> (Content relates to other content depending on whether they are at similar or different elevations.)
译文

[en]: <> (Content at different elevations)
### 译文

[en]: <> (Surfaces in front of other surfaces typically:)
译文

[en]: <> (Contain more important content)
[en]: <> (Focus attention, such as a dialog)
[en]: <> (Control the surfaces behind it, such as actions in an app bar)
1. 译文
2. 译文
3. 译文

<figure>

![]({assets_path}/environment/elevation/abovesurface-footnote-1.png)

<figcaption>

[en]: <> (Front \(1\) and side \(2\) views of a desktop interface demonstrate how more important content that is of primary focus \(B\) appears in front of content that is of secondary focus, like footnotes \(A\).)
译文

</figcaption></figure><figure>

![]({assets_path}/environment/elevation/abovesurface-bottomsheet-1.png)

<figcaption>

[en]: <> (Front \(1\) and side \(2\) views of a mobile interface demonstrate how placing content on a higher surface, like a bottom sheet \(A\), can focus attention while maintaining context.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/surfacerelationships-drawer.mp4" src="{assets_path}/environment/elevation/surfacerelationships-drawer.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Front \(1\) and side \(2\) views of a mobile interface demonstrate how content on a lower surface \(A\) is usually controlled by the surface in front of it, such as a navigation drawer \(B\).)
译文

</figcaption></figure>

[en]: <> (Content on coplanar surfaces)
### 译文

[en]: <> (Positioning surfaces at the same elevation makes them coplanar, and may indicate they contain content of equal importance as one another. For example, all cards in a collection have equal importance.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/elevation/surfacerelationships-sameelevation.mp4" src="{assets_path}/environment/elevation/surfacerelationships-sameelevation.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Cards \(A, B\), as viewed from the front, have the same elevation and move together, reinforcing that their content has similar hierarchy)
[en]: <> (The same components, as viewed from the side)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Surfaces that don’t express elevation can appear coplanar. For surfaces that don’t express elevation, you can communicate hierarchy differences through their content and by adjusting their horizontal and vertical layout position to suggest their relative hierarchy levels.)
译文

[en]: <> (For example, on a dashboard with coplanar surfaces, detail content is placed next to parent content, based on the direction a language’s text is displayed.)
译文

<figure>

![]({assets_path}/environment/elevation/coplanar-hierarchy-1.png)

<figcaption>

[en]: <> (A desktop UI, as viewed from the front, demonstrates how the left-to-right positioning of surfaces at the same elevation \(A, B, C\) communicates hierarchy based on English language content.)
[en]: <> (The same components, as viewed from the side)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Default elevations)
<h2 id="default-elevations">译文</h2>

[en]: <> (All elements have default values for resting elevation and dynamic elevation offsets. Certain components are positioned at higher elevations than others, establishing a consistent elevation order across all components. For example, dialogs always appear in front of all other components.)
译文

[en]: <> (The following table lists default values for resting elevation and dynamic elevation offsets.)
译文

[en]: <> (Table of default elevation values)
### 译文

[en]: <> (Component                                                         | Default elevation values \(dp\))
[en]: <> (---------                                                         |----------)
[en]: <> (Dialog                                                            | 24)
[en]: <> (Modal bottom sheet<br>Modal side sheet                            | 16)
[en]: <> (Navigation drawer                                                 | 16)
[en]: <> (Floating action button \(FAB - pressed\)                          | 12)
[en]: <> (Standard bottom sheet<br>Standard side sheet                      | 8)
[en]: <> (Bottom navigation bar                                             | 8)
[en]: <> (Bottom app bar                                                    | 8)
[en]: <> (Menus and sub menus                                               | 8)
[en]: <> (Card \(when picked up\)                                           | 8)
[en]: <> (Contained button \(pressed state\)                                | 8)
[en]: <> (Floating action button \(FAB - resting elevation\)<br>Snackbar    | 6)
[en]: <> (Top app bar \(scrolled state\)                                    | 4)
[en]: <> (Top app bar \(resting elevation\)                                 | 0 or 4)
[en]: <> (Refresh indicator<br>Search bar \(scrolled state\)                | 3)
[en]: <> (Contained button \(resting elevation\)                            | 2)
[en]: <> (Search bar \(resting elevation\)                                  | 1)
[en]: <> (Card \(resting elevation\)                                        | 1)
[en]: <> (Switch                                                            | 1)
[en]: <> (Text button                                                       | 0)
[en]: <> (Standard side sheet                                               | 0)

译文     | 译文
--------|----------
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文

[en]: <> (Diagram of default elevation values)
### 译文

<figure>

![]({assets_path}/environment/elevation/baselineelevation-chart.png)

<figcaption>

[en]: <> (Cross-section diagram showing the resting elevation and dynamic elevation offsets for multiple components.)
译文

</figcaption></figure></div>
