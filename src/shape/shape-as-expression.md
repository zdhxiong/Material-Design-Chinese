<div class="article__intro">

[en]: <> (Shape as expression)
# 形状表达

[en]: <> (Shape can communicate an element’s state or help express a brand.)
形状能传达一个元素的状态或帮助表现品牌。

<nav>

[en]: <> (Communicating state)
[en]: <> (Expressing brand)
* [传达状态](#communicating-state)
* [表现品牌](#expressing-brand)

</nav></div><div class="article__body">

[en]: <> (Communicating state)
<h2 id="communicating-state">传达状态</h2>

[en]: <> (Shape and meaning)
### 形状和内涵

[en]: <> (Shape can communicate many things about an element, including its current state, the result of a user interaction, or other changes in an app. When used in these ways, shape should be used consistently across the same state and interactions, so that a specific shape means the same thing every time it’s encountered.)
形状能传递与元素有关的很多信息，包括当前状态、用户交互结果、或应用中的其他改变。如此使用时，同样的状态和交互应确保形状使用得统一，因此每遇特定形状都意味着同一事情。

[en]: <> (Shape and interaction)
#### 形状和交互

[en]: <> (To attach meaning to a specific shape, shape changes can be expressed in tandem with a user-initiated action or state change. For example, morph a shape upon selection, or introduce the shape with an icon or other indicator, to reinforce a shape’s meaning.)
要为特定形状附上意思，形状改变的展现可以串在一用户发起的动作或状态改变后。举例，在选择时变形，或引入带有图标或其他指示的形状，以强化形状内涵。

[en]: <> (Non-interactive shapes)
#### 非交互式形状

[en]: <> (If a shape isn’t interactive, avoid using shapes with sizes large enough to appear interactive. For example, a small triangular shape on a card shouldn’t be large enough to be mistaken for a tap target if it’s not one.)
如果一个形状不是交互式的，则避免使用尺寸大到可以展现交互的形状。举例，一个卡片上的小三角形如果不为点按目标则不应大到可被误判。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/shape/shape-as-expression/communicatingstate-do-reply-1b-v2.mp4" src="{assets_path}/shape/shape-as-expression/communicatingstate-do-reply-1b-v2.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Shape changes should be clearly linked to a user interaction or other obvious cause. This list item’s shape changes upon passing a gesture threshold, eventually giving its left edge a rounded corner.)
形状变化应该与用户交互或其它明显原因清晰关联。这个列表项的形状在越过一个手势阈值后发生变化，最终在它的左边缘带来一个圆角。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/shape/shape-as-expression/communicatingstate-dont-reply-1.png)

<figcaption>

{dont}

[en]: <> (Don’t communicate state with shapes that are too small to be noticeable.)
不要使用小得难以察觉的形状传递状态。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/shape/shape-as-expression/communicatingstate-dont-reply-2.png)

<figcaption>

{dont}

[en]: <> (Don’t communicate state with a shape large enough to provide a tap target if it’s not interactive.)
若不是交互式的，不要使用大到可以作为点按目标的形状来传递状态。

</figcaption></figure></div></div><figure>

![]({assets_path}/shape/shape-as-expression/communicatingstate-caution-baseline-1.png)

<figcaption>

{caution}

[en]: <> (A shape can be used in ways that makes it unclear whether it’s expressing a state or branding. These folded card corners don’t make it clear if the cards are selected, favorited, or simply expressing brand – because cards can express all of these states. To make meaning clearer, either:)
可以使用不清楚其是在传递状态还是表现品牌的形状。这些折叠起来的卡片边角未表明这些卡片是选中，喜爱，还是简单地表现着品牌 – 因为卡片能够传达所有这些状态。要使表意明晰，二选一：

[en]: <> (Clearly connect the change of the corner shape with a user action, like selection or favoriting)
[en]: <> (Remove the folded shape, but keep the corner angle, to reduce the appearance that the folded shape is interactive)
* 清楚地把角的形状变化和一用户动作关联起来，如选择或喜爱
* 移去折叠状，但保留角的角度，以减少该折叠形的可交互感

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/shape/shape-as-expression/communicatingstate-do-baseline-1.png)

<figcaption>

{do}

[en]: <> (Use shape consistently, so that each shape expresses a single meaning. The rounded corner on selected cards helps the shape develop meaning.)
统一一致地使用形状，这样每个形状仅表一个意思。选中的卡片上的圆角有助于形状进行表意。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/shape/shape-as-expression/communicatingstate-caution-baseline-2.png)

<figcaption>

{caution}

[en]: <> (The inconsistent shapes on the corners in this card collection make it unclear if each shape represents something different \(such as distinct groupings\) or is simply brand expression.)
此卡片集合上边角的不同形状模糊了各形状是否代表不同的意思（例如不同的分组）或仅仅是表现品牌。

</figcaption></figure></div></div>

[en]: <> (Expressing brand)
<h2 id="expressing-brand">表现品牌</h2>

[en]: <> (Shape and brand expression)
### 形状和品牌表达

[en]: <> (Branding with shape)
#### 形塑品牌

[en]: <> (Use shape in combination with other customizations, like color and typography, to develop your brand’s visual language. Similar, related shapes help unify brand expression across your app. Your app can use a *shape family* – a set of similar shapes such as oval variations of a circle, or the same angled corner at different scales – across its surfaces, components, and elements. The style of shapes in a shape family, such as organic or geometric forms, should match your brand.)
结合其它自定义一起调教形状，如颜色和排版，进而开发您的品牌视觉语言。相似的、关联的形状有助于跨应用地统一您的品牌表达。您的应用可以使用一个*形状系列* – 即一组近似的形状，例如多种离心率的圆，或角度相同大小不同的边角 – 它们广泛遍布于其面，组件，和元素。形状系列中形状的风格，如自然或规则型，应与您的品牌相匹配。

[en]: <> (Mixing shapes)
#### 调和形状

[en]: <> (When expressing brand with shape, avoid shapes that:)
用形状表现品牌时，避开这样的形状：

[en]: <> (Imply interactivity)
[en]: <> (Inaccurately express state)
[en]: <> (Interfere with usability)
* 暗示着可交互的
* 会误表现状态的
* 干扰可用性的

[en]: <> (Mixing both different shape styles, and different shapes altogether, can make it difficult to associate particular shapes with a brand.)
混用不同的形状风格，和不同的形状于一处，可能导致难以将特定形状与品牌相联系。

[en]: <> (Shape overuse)
#### 形状使用过度

[en]: <> (Overuse of a shape for branding purposes can make it less meaningful because that shape becomes common and less noticeable.)
过度使用一个形状于品牌化目的可能会让其不是那么有意义因为这个形状已经普遍存在变得不再引目。

<figure>

![]({assets_path}/shape/shape-as-expression/expressingbrand-reply-1.png)

<figcaption>

{do}

[en]: <> (Consistent use of shape throughout a product contributes to a brand’s visual language. This product’s components use a shape based on its logo \(1, 2\).)
产品中各处对形状的如一使用有利于品牌的视觉语言。此产品组件使用的形状基于其徽标（1，2）。

</figcaption></figure><figure>

![]({assets_path}/shape/shape-as-expression/expressingbrand-shrine-1.png)

<figcaption>

{do}

[en]: <> (This product’s components use a geometric shape based on its logo \(1, 2, 3\).)
此产品组件使用的规则型形状基于其徽标（1，2，3）。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/shape/shape-as-expression/expression-do-reply-1.png)

<figcaption>

{do}

[en]: <> (The curve of the corner reflects the color and curved edge of the logo, without affecting usability.)
边角曲线反映了徽标的颜色和曲边，且不影响可用性。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/shape/shape-as-expression/expression-dont-reply-1.png)

<figcaption>

{dont}

[en]: <> (Don’t reduce the usability of a component when using shape to express brand. The size of this shape interferes with the usability of the list.)
勿以牺牲组件可用性的方式表现品牌。该形状的大小影响了此列表的可用性。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/shape/shape-as-expression/expressingbrand-caution-shrine-1.png)

<figcaption>

{caution}

[en]: <> (Overuse of a single shape makes that shape common, and thus less noticeable, which reduces its impact on branding.)
过度使用单一形状使该形状变得常见，因而不太明显，亦减少了它在品牌化中的影响。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/shape/shape-as-expression/expressingbrand-dont-shrine-2.png)

<figcaption>

{dont}

[en]: <> (Don’t use shapes that don’t reflect a product’s shape family.)
别去用那些不体现产品形状系列的形状。

</figcaption></figure></div></div></div>
