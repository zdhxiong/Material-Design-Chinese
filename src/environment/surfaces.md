<div class="article__intro">

[en]: <> (Surfaces)
# 译文

[en]: <> (Material Design has three-dimensional qualities that are reflected in its use of surfaces, depth, and shadows.)
译文

<nav>

[en]: <> (Material environment)
[en]: <> (Properties)
[en]: <> (Attributes)
* [译文](#material-environment)
* [译文](#properties)
* [译文](#attributes)

</nav></div><div class="article__body">

[en]: <> (Material environment)
<h2 id="material-environment">译文</h2>

[en]: <> (The physical world)
### 译文

[en]: <> (In the physical world, objects can be stacked or attached to one another, but cannot pass through each other. They cast shadows and reflect light.)
译文

[en]: <> (Material Design reflects these qualities in how surfaces are displayed and move across the Material UI. Surfaces, and how they move in three dimensions, are communicated in ways that resemble how they move in the physical world. This spatial model can also be applied consistently across apps.)
译文

[en]: <> (Depth)
### 译文

[en]: <> (Material Design UIs are displayed in an environment that expresses three-dimensional \(3D\) space using light, surfaces, and cast shadows. All elements in the Material environment move horizontally, vertically, and at varying depths along the z-axis. Depth is depicted by placing elements at various points along the positive z-axis extending towards the viewer.)
译文

[en]: <> (On the web, the UI expresses 3D space by manipulating the y-axis.)
译文

<figure>

![]({assets_path}/environment/surfaces/whatismaterial-environment-3d.png)

<figcaption>

[en]: <> (3D space with x, y, and z axes)
译文

</figcaption></figure>

[en]: <> (Properties)
<h2 id="properties">译文</h2>

[en]: <> (Material surfaces have consistent, unchangeable characteristics and behaviors across Material Design.)
译文

[en]: <> (Dimensions)
### 译文

[en]: <> (Material has varying x & y dimensions \(measured in dp\) and a uniform thickness \(1dp\).)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/surfaces/whatismaterial-materialproperties-physicalproperties-thickness-01-yes.png)

<figcaption>

{do}

[en]: <> (The height and width of material can vary.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/surfaces/whatismaterial-materialproperties-physicalproperties-thickness-02-no.png)

<figcaption>

{dont}

[en]: <> (Material is always 1dp thick.)
译文

</figcaption></figure></div></div>

[en]: <> (Shadows)
### 译文

[en]: <> (Material surfaces at different elevations cast shadows.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialshadow-do.mp4" src="{assets_path}/environment/surfaces/materialshadow-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Shadows show the elevation of different Material surfaces.)
译文

[en]: <> (Top view)
[en]: <> (Isometric 3D view showing the shadow cast by light when the material moves upwards)
1. 译文
2. 译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialshadow-dont.mp4" src="{assets_path}/environment/surfaces/materialshadow-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t express shadows without changing a surface’s elevation.)
译文

[en]: <> (Top view)
[en]: <> (Isometric 3D view depicts a shadow using only color, rather than light and elevation)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Resolution)
### 译文

[en]: <> (Material has infinite resolution.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialsurfaceproperties-do-infiniteresolution-1a.mp4" src="{assets_path}/environment/surfaces/materialsurfaceproperties-do-infiniteresolution-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material has infinite resolution.)
译文

</figcaption></figure>

[en]: <> (Content)
### 译文

[en]: <> (Content is displayed in any shape and color on Material. Content does not add thickness to Material. Content is expressed without being a separate layer.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialcontent-shapecolor.mp4" src="{assets_path}/environment/surfaces/materialcontent-shapecolor.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Material can display any shape and color. Content can behave independent of Material, but is limited within the bounds of Material.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialcontent-behavior.mp4" src="{assets_path}/environment/surfaces/materialcontent-behavior.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Content behavior can be independent of surface behavior.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialcontent-dependent-behavior.mp4" src="{assets_path}/environment/surfaces/materialcontent-dependent-behavior.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Content behavior can depend on Material behavior.)
译文

</figcaption></figure>

[en]: <> (Physical properties)
### 译文

[en]: <> (Material is solid. User input and interaction cannot pass through material.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/surfaces/materialsurfaceproperties-do-physical.png)

<figcaption>

{do}

[en]: <> (Input events only affect the surface of Material.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/surfaces/materialsurfaceproperties-do-physical.png)

<figcaption>

{dont}

[en]: <> (Input events cannot pass through Material.)
译文

</figcaption></figure></div></div>

[en]: <> (Multiple Material elements cannot occupy the same point in space simultaneously.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/surfaces/whatismaterial-properties-physical5.png)

<figcaption>

{do}

[en]: <> (Prevent multiple Material elements from simultaneously occupying the same point in space, such as by separating elements with elevation.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/surfaces/whatismaterial-properties-physical6.png)

<figcaption>

{dont}

[en]: <> (Multiple Material elements cannot occupy the same point in space simultaneously.)
译文

</figcaption></figure></div></div>

[en]: <> (Material cannot pass through other Material. For example, one Material surface cannot pass through another Material surface when changing elevation.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialproperties-clipping.mp4" src="{assets_path}/environment/surfaces/materialproperties-clipping.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Material cannot pass through other Material.)
译文

</figcaption></figure>

[en]: <> (Material does not behave like a gas.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialsurfaceproperties-dont-gas-1b.mp4" src="{assets_path}/environment/surfaces/materialsurfaceproperties-dont-gas-1b.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Material does not behave like a gas.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialsurfaceproperties-do-enterexitseq-1a.mp4" src="{assets_path}/environment/surfaces/materialsurfaceproperties-do-enterexitseq-1a.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Material enters and exits through changes in opacity, size, or position.)
译文

</figcaption></figure></div></div>

[en]: <> (Material is not fluid like a liquid or gel, though it may display content with these properties.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialsurfaceproperties-dont-dripping.mp4" src="{assets_path}/environment/surfaces/materialsurfaceproperties-dont-dripping.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Material does not behave like a liquid or gel.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialsurfaceproperties-dont-flow-1a.mp4" src="{assets_path}/environment/surfaces/materialsurfaceproperties-dont-flow-1a.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Material does not behave like a liquid.)
译文

</figcaption></figure>

[en]: <> (Transforming Material)
### 译文

[en]: <> (Material can change shape.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialsurfaceproperties-changeshape-1b.mp4" src="{assets_path}/environment/surfaces/materialsurfaceproperties-changeshape-1b.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material can change shape.)
译文

</figcaption></figure>

[en]: <> (Material can change opacity.)
译文

<figure>

![]({assets_path}/environment/surfaces/materialsurfaceproperties-opacity.png)

<figcaption>

[en]: <> (Material can change opacity uniformly across its entire surface.)
[en]: <> (Material can change opacity across a portion of its surface.)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Material grows and shrinks only along its plane.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialsurfaceproperties-plane.mp4" src="{assets_path}/environment/surfaces/materialsurfaceproperties-plane.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Material grows and shrinks only along its plane.)
译文

</figcaption></figure>

[en]: <> (Material bends or folds within the depth of the UI.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialsurfaceproperties-plane-dont.mp4" src="{assets_path}/environment/surfaces/materialsurfaceproperties-plane-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Material never bends or folds in ways that exceed the depth of the UI.)
译文

</figcaption></figure>

[en]: <> (Material surfaces can join together to become a single Material surface.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialproperties-join.mp4" src="{assets_path}/environment/surfaces/materialproperties-join.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Multiple Material surfaces can join together to become a single surface.)
译文

</figcaption></figure>

[en]: <> (When split, Material can rejoin. For example, if you remove a portion of Material from a surface, the surface will become whole again.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialproperties-slicejoin.mp4" src="{assets_path}/environment/surfaces/materialproperties-slicejoin.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material can split and become whole again.)
译文

</figcaption></figure>

[en]: <> (Movement)
### 译文

[en]: <> (Material can be spontaneously generated or dismissed anywhere in the environment.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialmovement-appear.mp4" src="{assets_path}/environment/surfaces/materialmovement-appear.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material can be spontaneously generated or dismissed.)
译文

</figcaption></figure>

[en]: <> (Material can move along any axis.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialmovement-anyaxis.mp4" src="{assets_path}/environment/surfaces/materialmovement-anyaxis.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material can move along various axes.)
译文

</figcaption></figure>

[en]: <> (Material surfaces can coordinate their motion.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialmovement-coordinate.mp4" src="{assets_path}/environment/surfaces/materialmovement-coordinate.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material surfaces can coordinate their motion.)
译文

</figcaption></figure>

[en]: <> (Material motion along the z-axis is typically a result of user interaction.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialmovement-z-interaction.mp4" src="{assets_path}/environment/surfaces/materialmovement-z-interaction.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material surfaces exhibiting z-axis motion prompted by user interaction.)
译文

</figcaption></figure>

[en]: <> (Attributes)
<h2 id="attributes">译文</h2>

[en]: <> (Basic Material surface)
### 译文

[en]: <> (The basic Material surface is opaque white, with 1dp thickness, and casts a shadow. All UI elements in Material Design result from modifications to this surface.)
译文

[en]: <> (Behavior)
### 译文

[en]: <> (Material surfaces can behave in certain ways:)
译文

[en]: <> (*Rigid surfaces* remain the same size through all interactions.)
[en]: <> (*Stretchable surfaces* can grow or shrink along one or more edges up to a size limit, then behave as rigid surfaces.)
[en]: <> (*Pannable surfaces* remain the same size throughout interactions. They can display additional content upon scrolling within the area, until reaching a content limit. When this limit is reached, they behave as rigid surfaces in that scroll direction.)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/environment/surfaces/materialattributes-static-1b.png)

<figcaption>

[en]: <> (Material surface dimensions can be fixed with all content initially visible. The surface retains that size through all interactions.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialattributes-stretch-1.mp4" src="{assets_path}/environment/surfaces/materialattributes-stretch-1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material surface dimensions can grow along one or more axes to accommodate additional content.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialattributes-pan.mp4" src="{assets_path}/environment/surfaces/materialattributes-pan.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material surface dimensions can remain rigid, but content can scroll or pan across the surface.)
译文

</figcaption></figure>

[en]: <> (Composite surfaces)
#### 译文

[en]: <> (Surfaces can be divided into areas which display different types of behavior.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialattributes-constructingsurfaces-1.mp4" src="{assets_path}/environment/surfaces/materialattributes-constructingsurfaces-1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A single surface can contain multiple pannable surfaces, such as an embedded map \(1\) that pans independently of a scrollable list \(2\).)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialattributes-constructingsurfaces-2.mp4" src="{assets_path}/environment/surfaces/materialattributes-constructingsurfaces-2.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A card can stretch to display a region that scrolls independently of other card content.)
译文

</figcaption></figure>

[en]: <> (Stretchable surfaces)
### 译文

[en]: <> (A stretchable surface can be stretched before reaching a limit, at which point the entire surface becomes rigid. Surfaces can stretch vertically, horizontally, or in both directions.)
译文

[en]: <> (Typically, user interaction with a surface will stretch it in one direction. For example, tapping “more details” can cause a card to grow vertically and display additional content.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/surfaces-stretchvert.mp4" src="{assets_path}/environment/surfaces/surfaces-stretchvert.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material stretch direction can be exclusively vertical.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/surfaces-stretchhoriz.mp4" src="{assets_path}/environment/surfaces/surfaces-stretchhoriz.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material stretch direction can be exclusively horizontal.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/surfaces-stretchverthoriz.mp4" src="{assets_path}/environment/surfaces/surfaces-stretchverthoriz.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Material stretch direction can be along both horizontal and vertical axes, either independently or simultaneously.)
译文

</figcaption></figure>

[en]: <> (Surface positioning and movement \(x/y\))
### 译文

[en]: <> (Surfaces can remain in a fixed position on the x- and y-axes, or can be moveable in any direction.)
译文

[en]: <> (Surface movement can be confined to a single axis, allow movement along a single axis at a time, or allow movement along both axes simultaneously.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/surfaces-movement-vert.mp4" src="{assets_path}/environment/surfaces/surfaces-movement-vert.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Surfaces can remain in a fixed position. The top app bar \(1\) remains in a fixed position while the card collection \(2\) scrolls only vertically behind it.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/surfaces-movement-horizvert.mp4" src="{assets_path}/environment/surfaces/surfaces-movement-horizvert.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Surfaces \(1,2\) can move in any direction, although movement can be confined to a single axis at a time.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/surfaces-movement-cards.mp4" src="{assets_path}/environment/surfaces/surfaces-movement-cards.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Surfaces can move in any direction.)
译文

</figcaption></figure>

[en]: <> (Surfaces can move independently of each other, or their movement can affect or be dependent upon the movement of other surfaces.)
译文

[en]: <> (A dependency can be based on a variety of mechanics, such as nearby surfaces moving when another surface expands, or the proportion of movement between surfaces moving in parallax.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/surfaces-movement-independent.mp4" src="{assets_path}/environment/surfaces/surfaces-movement-independent.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Surfaces can move independently of each other.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/surfaces-movement-dependent.mp4" src="{assets_path}/environment/surfaces/surfaces-movement-dependent.mp4" type="video/mp4"></video><figcaption>

[en]: <> (One surface’s movement can depend upon another’s movement.)
译文

</figcaption></figure>

[en]: <> (Surface opacity)
### 译文

[en]: <> (Material surfaces can be transparent, semi-transparent, or opaque.)
译文

[en]: <> (Text on transparent and semi-transparent surfaces may require background treatment to preserve legibility.)
译文

[en]: <> (Transparent surfaces lack clear edges, making it difficult to determine where surfaces begin and end, and which surface content belongs to.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialattributes-surfaceopacity-do.mp4" src="{assets_path}/environment/surfaces/materialattributes-surfaceopacity-do.mp4" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (Content on transparent or semi-transparent surfaces may need a background treatment to preserve legibility.)
[en]: <> (Isometric view)
1. 译文
2. 译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/surfaces/materialattributes-surfaceopacity-dont.mp4" src="{assets_path}/environment/surfaces/materialattributes-surfaceopacity-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t use transparent surfaces, as they have no opacity, making it difficult to identify the surface on which content appears. This top app bar is transparent, making it unclear if the text appears on the app bar or the surface behind it.)
[en]: <> (Isometric view)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Scrim)
### 译文

[en]: <> (Scrims are temporary treatments that can be applied to Material surfaces for the purpose of making content on a surface less prominent. They help direct user attention to other parts of the screen, away from the surface receiving a scrim.)
译文

[en]: <> (Scrims can be applied in a variety of ways, including:)
译文

[en]: <> (Darkening or lightening the surface and its content)
[en]: <> (Reducing the opacity of the surface and its content)
* 译文
* 译文

[en]: <> (Multiple surfaces on a screen at a time can display scrims. Scrims can appear at any elevation, whether in the foreground or background.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/surfaces/surfaces-attributes-scrim-back.png)

<figcaption>

[en]: <> (Foreground content attracts more attention when background content displays a scrim.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/surfaces/surfaces-attributes-scrim-back.png)

<figcaption>

[en]: <> (A scrim lightens content displayed on the front surface and directs attention to the surface behind it.)
译文

</figcaption></figure></div></div></div>
