<div class="article__intro">

[en]: <> (Light and shadows)
# 光亮和阴影

[en]: <> (Material surfaces cast shadows when they obstruct light sources.)
当光源被阻挡时会在材料表面产生阴影

<nav>

[en]: <> (Light)
[en]: <> (Shadows)
* [光源](#light)
* [阴影](#shadows)

</nav></div><div class="article__body">

[en]: <> (Light)
<h2 id="light">光源</h2>

[en]: <> (Light and shadows)
### 光源和阴影

[en]: <> (In the Material Design environment, virtual lights illuminate the UI. Key lights create sharper, directional shadows, called key shadows. Ambient light appears from all angles to create diffused, soft shadows, called ambient shadows.)
在Material Design的环境中，由虚拟光源照亮UI。关键光源会投射更锐利，有引导性阴影，称为关键阴影； 而环境光源会从各个角度出现，并投射分散的柔和阴影，称为环境阴影。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/lightshadows-1.png)

<figcaption>

[en]: <> (Shadow cast by a key light)
由关键光源投射的阴影

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/lightshadows-2.png)

<figcaption>

[en]: <> (Shadow cast by ambient light)
由环境光源投射的阴影

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/lightshadows-3.png)

<figcaption>

[en]: <> (Combined shadow from key and ambient lights)
同时含有由环境和关键光源所投射的阴影

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/lightshadows-4.png)

<figcaption>

[en]: <> (Elements use shadows on dark surfaces, even if they are less visible.)
元素在深色表面上使用阴影，即使可见度很低

</figcaption></figure></div></div>

[en]: <> (Light sources)
### 光源

[en]: <> (Shadows in the Material environment are cast by a key light and ambient light. In Android and iOS development, shadows occur when light sources are blocked by Material surfaces at various positions along the z-axis. On the web, shadows are depicted by manipulating the y-axis only. The following example shows a card with an elevation of 6dp.)
在Material中的阴影由关键光源和环境光源组成 在Android和iOS中，当光源在z轴的各个位置被材质表面阻挡时，会产生阴影。在Web中，仅能通过控制y轴改变 以下示例显示了海拔高度为6dp的卡片。

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/whatismaterial-environment-shadow1.png)

<figcaption>

{dont}

[en]: <> (Shadow cast by key light)
由关键光源投射的阴影

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/whatismaterial-environment-shadow2.png)

<figcaption>

{dont}

[en]: <> (Shadow cast by ambient light)
由环境光源投射的阴影

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/environment/light-shadows/whatismaterial-environment-shadow3.png)

<figcaption>

{do}

[en]: <> (Combined shadow from key and ambient lights)
同时含有由环境和关键光源所投射的阴影

</figcaption></figure></div></div>

[en]: <> (Shadows)
<h2 id="shadows">阴影</h2>

[en]: <> (Shadows provide cues about depth, direction of movement, and surface edges. A surface’s shadow is determined by its elevation and relationship to other surfaces.)
阴影会给人有关深浅，运动方向以及边缘的暗示 表面阴影是由海报高度和它与其他表面的关系决定的

[en]: <> (Usage)
### 用法

[en]: <> (Because shadows express the degree of elevation between surfaces, they must be used consistently throughout your product.)
由于阴影表示表面之间的高度，因此必须在整个产品中始终使用阴影。

<figure>

![]({assets_path}/environment/light-shadows/shadowprinciples-do-1.png)

<figcaption>

[en]: <> (Elevation is depicted by consistent use of shadow.)
海拔高度始终使用阴影来表示

</figcaption></figure><figure>

![]({assets_path}/environment/light-shadows/shadowprinciples-do-2.png)

<figcaption>

[en]: <> (Shadow size reflects elevation. Surfaces at higher elevations have larger shadows, while those at lower elevations have smaller shadows.)
阴影大小反映了海拔高度 表面在越高的海拔就拥有越高的阴影，而在低海拔高度时阴影越小

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/light-shadows/shadowprinciples-basil-1c.mp4" src="{assets_path}/environment/light-shadows/shadowprinciples-basil-1c.mp4" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (If your product doesn’t use shadows, convey elevation in other ways, such as through parallax motion.)
如果您的产品不使用阴影，那么请通过其他方式（例如通过视差运动）传达海拔高度

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/light-shadows/shadowprinciples-list.mp4" src="{assets_path}/environment/light-shadows/shadowprinciples-list.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (The appearance of a shadow indicates the list item has been picked up and can move in front of its peers during this reorder interaction.)
阴影的出现表示列表中的物品已经被选取，而且可以在重新排序交互顺序的过程中，移动到它的前面

</figcaption></figure></div></div>

[en]: <> (Shadows & Motion)
### 阴影和运动

[en]: <> (Shadows provide useful cues about an surface’s direction of movement and whether the distance between surfaces is increasing or decreasing.)
阴影提供了有关表面的运动方向和表面与表面之间的距离时增加还是减少的有用提示

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/light-shadows/shadowsmotion-do-1a.mp4" src="{assets_path}/environment/light-shadows/shadowsmotion-do-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When a surface changes shape or scale, but its elevation remains the same, its shadow should not change.)
当表面改变形状或比例但其海拔高度保持不变时，其阴影不应改变

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/environment/light-shadows/shadowsmotion-dont-1a.mp4" src="{assets_path}/environment/light-shadows/shadowsmotion-dont-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When a surface changes its elevation, its shadow should change.)
当表面的海拔高度改变时其阴影也应该与其改变

</figcaption></figure></div>
