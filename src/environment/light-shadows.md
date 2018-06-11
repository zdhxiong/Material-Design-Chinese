<div class="article__intro">

[en]: <> (Light and shadows)
# 光亮和阴影

[en]: <> (Material surfaces cast shadows when they obstruct light sources.)
译文

<nav>

[en]: <> (Light)
[en]: <> (Shadows)
* [译文](#light)
* [译文](#shadows)

</nav></div><div class="article__body">

[en]: <> (Light)
<h2 id="light">译文</h2>

[en]: <> (Light and shadows)
### 译文

[en]: <> (In the Material Design environment, virtual lights illuminate the UI. Key lights create sharper, directional shadows, called key shadows. Ambient light appears from all angles to create diffused, soft shadows, called ambient shadows.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/lightshadows-1.png)

<figcaption>

[en]: <> (Shadow cast by a key light)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/lightshadows-2.png)

<figcaption>

[en]: <> (Shadow cast by ambient light)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/lightshadows-3.png)

<figcaption>

[en]: <> (Combined shadow from key and ambient lights)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/lightshadows-4.png)

<figcaption>

[en]: <> (Elements use shadows on dark surfaces, even if they are less visible.)
译文

</figcaption></figure></div></div>

[en]: <> (Light sources)
### 译文

[en]: <> (Shadows in the Material environment are cast by a key light and ambient light. In Android and iOS development, shadows occur when light sources are blocked by Material surfaces at various positions along the z-axis. On the web, shadows are depicted by manipulating the y-axis only. The following example shows a card with an elevation of 6dp.)
译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/whatismaterial-environment-shadow1.png)

<figcaption>

{dont}

[en]: <> (Shadow cast by key light)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/whatismaterial-environment-shadow2.png)

<figcaption>

{dont}

[en]: <> (Shadow cast by ambient light)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/whatismaterial-environment-shadow3.png)

<figcaption>

{do}

[en]: <> (Combined shadow from key and ambient lights)
译文

</figcaption></figure></div></div>

[en]: <> (Shadows)
<h2 id="shadows">译文</h2>

[en]: <> (Shadows provide cues about depth, direction of movement, and surface edges. A surface’s shadow is determined by its elevation and relationship to other surfaces.)
译文

[en]: <> (Usage)
### 译文

[en]: <> (Because shadows express the degree of elevation between surfaces, they must be used consistently throughout your product.)
译文

<figure>

![]({assets_path}/environment/light-shadows/shadowprinciples-do-1.png)

<figcaption>

[en]: <> (Elevation is depicted by consistent use of shadow.)
译文

</figcaption></figure><figure>

![]({assets_path}/environment/light-shadows/shadowprinciples-do-2.png)

<figcaption>

[en]: <> (Shadow size reflects elevation. Surfaces at higher elevations have larger shadows, while those at lower elevations have smaller shadows.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/light-shadows/shadowprinciples-basil-1c.mp4" src="{assets_path}/environment/light-shadows/shadowprinciples-basil-1c.mp4" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (If your product doesn’t use shadows, convey elevation in other ways, such as through parallax motion.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/light-shadows/shadowprinciples-list.mp4" src="{assets_path}/environment/light-shadows/shadowprinciples-list.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (The appearance of a shadow indicates the list item has been picked up and can move in front of its peers during this reorder interaction.)
译文

</figcaption></figure></div></div>

[en]: <> (Shadows & Motion)
### 译文

[en]: <> (Shadows provide useful cues about an surface’s direction of movement and whether the distance between surfaces is increasing or decreasing.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/light-shadows/shadowsmotion-do-1a.mp4" src="{assets_path}/environment/light-shadows/shadowsmotion-do-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When a surface changes shape or scale, but its elevation remains the same, its shadow should not change.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/light-shadows/shadowsmotion-dont-1a.mp4" src="{assets_path}/environment/light-shadows/shadowsmotion-dont-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When a surface changes its elevation, its shadow should change.)
译文

</figcaption></figure></div>
