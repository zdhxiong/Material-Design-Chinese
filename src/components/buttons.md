<div class="article__intro">

[en]: <> (Buttons)
# 按钮

[en]: <> (Buttons allow users to take actions, and make choices, with a single tap.)
按钮可以让用户通过点击来执行操作以及做出选择。

<figure>

![]({assets_path}/components/buttons/buttons-usage.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Hierarchy and placement)
[en]: <> (Text button)
[en]: <> (Outlined button)
[en]: <> (Contained button)
[en]: <> (Toggle button)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [层次结构和位置](#hierarchy-placement)
* [文本按钮](#text-button)
* [空心按钮](#outlined-button)
* [实心按钮](#contained-button)
* [切换按钮](#toggle-button)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Buttons communicate actions that users can take. They are typically placed throughout your UI, in places like:)
按钮表示用户可以执行的操作。按钮通常可以放置在整个应用的各个位置，例如

[en]: <> (Dialogs)
[en]: <> (Modal windows)
[en]: <> (Forms)
[en]: <> (Cards)
[en]: <> (Toolbars)
* 对话框
* 模态窗口
* 表单
* 卡片
* 工具栏

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-illos-01.png)

</figure>

[en]: <> (Identifiable)
#### 可识别

[en]: <> (Buttons should indicate that they can trigger an action.)
按钮应该让用户知道点击它可以触发操作。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-illos-02.png)

</figure>

[en]: <> (Findable)
#### 易发现

[en]: <> (Buttons should be easy to find among other elements, including other buttons.)
按钮应该要让用户能很容易地在众多元素中找到它，包括在多个按钮中找到特定按钮。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-illos-03.png)

</figure>

[en]: <> (Clear)
#### 明确

[en]: <> (A button’s action and state should be clear.)
点击按钮后触发的操作、以及按钮的状态应该是清晰明确的。

</div></div>

[en]: <> (Types)
### 类型

<figure>

![]({assets_path}/components/buttons/buttons-types-all.png)

<figcaption>

[en]: <> (*Text button* \(low emphasis\)<br>Text buttons are typically used for less important actions.)
[en]: <> (Outlined Button \(medium emphasis\)<br>Outlined buttons are used for more emphasis than text buttons due to the stroke.)
[en]: <> (Contained button \(high emphasis\)<br>Contained buttons have more emphasis, as they use use a color fill and shadow.)
[en]: <> (Toggle button<br>Toggle buttons group a set of actions using layout and spacing. They’re used less often than other button types.)
1. *文本按钮*（低重要性）<br>文本按钮通常用于重要性较低的操作。
2. *空心按钮*（中重要性）<br>空心按钮通常用于比文本按钮重要性更高的场景。
3. *实心按钮*（高重要性）<br>实心按钮因为使用了填充颜色和阴影，重要性最高。
4. *切换按钮*<br>切换按钮对一组按钮进行了分组。它的使用频率低于其他按钮。

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

[en]: <> (Buttons contain one required element and four optional elements.)
按钮包含一个必需元素和四个可选元素。

<figure>

![]({assets_path}/components/buttons/buttons-anatomy-all.png)

<figcaption>

[en]: <> (Text button<br>A. Text label<br>C. Icon \(optional\))
[en]: <> (Outlined button<br>A. Text label<br>B. Container<br>C. Icon \(optional\))
[en]: <> (Contained button<br>A. Text label<br>B. Container<br>C. Icon \(optional\))
[en]: <> (Toggle button<br>A. Container<br>C. Icon)
1. 文本按钮<br>A. 文本标签<br>C. 图标（可选）
2. 空心按钮<br>A. 文本标签<br>B. 容器<br>C. 图标（可选）
3. 实心按钮<br>A. 文本标签<br>B. 容器<br>C. 图标（可选）
4. 切换按钮<br>A. 容器<br>C. 图标

</figcaption></figure>

[en]: <> (Text label)
### 文本标签

[en]: <> (Text buttons and contained buttons use text labels, which describe the action that will occur if a user taps a button. If a text label is not used, an icon should be present to signify what the button does.)
文本按钮和实心按钮使用了文本标签，用于描述用户点击按钮时会触发的操作。如果未使用文本标签，则应该显示一个图标来表示按钮的作用。

[en]: <> (By default Material uses capitalized button text labels \(for languages that have capitalization\). This is to distinguish the text label from surrounding text. If a text button does not use capitalization for button text, find another characteristic to distinguish it such as color, size, or placement.)
默认情况下，按钮的文本标签需要大写（对于有大小写的语言）。这是为了使文本标签和周围的文本形成区分。如果按钮的文本没有使用大写，请使用其他特征来区分它，例如颜色、大小或位置。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-text-label-do.png)

<figcaption>

{do}

[en]: <> (Use capitalization, for languages that allow capitalization.)
对于有大小写的语言，请使用大写。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-elements-text-label-dont-02.png)

<figcaption>

{dont}

[en]: <> (Don’t wrap text. For maximum legibility, a text label should remain on a single line.)
文字不要换行。为了确保易读性，文本标签应该在同一行。

</figcaption></figure></div></div>

[en]: <> (Hierarchy and placement)
<h2 id="hierarchy-placement">层次结构和位置</h2>

[en]: <> (Hierarchy)
### 层次结构

[en]: <> (A single, prominent button)
#### 一个单独的、突出的按钮

[en]: <> (A layout should contain a single prominent button that makes it clear that other buttons have less importance in the hierarchy. This high-emphasis button commands the most attention.)
布局中应该包含一个突出的按钮，以清楚地表明其他按钮在布局中的重要性较低。这个高重要性的按钮可以获取到用户更多注意力。

[en]: <> (Other buttons)
#### 其他按钮

[en]: <> (An app can show more than one button in a layout at a time, so a high-emphasis button can be accompanied by medium- and low-emphasis buttons that perform less important actions. When using multiple buttons, ensure the available state of one button doesn’t look like the disabled state of another.)
一个应用可以同时在布局中显示多个按钮，因此一个高重要性的按钮可以伴随着几个中/低重要性的按钮，这些按钮用于执行重要性较低的操作。当使用多个按钮时，要确保按钮的可用状态和其他按钮的禁用状态要有明显的视觉上的区分。

<figure>

![]({assets_path}/components/buttons/buttons-layout-diagram-01.png)

<figcaption>

[en]: <> (A button’s level of emphasis helps determine its appearance, typography, and placement.)
可以根据按钮的重要性程度确定其外观、排版和位置。

</figcaption></figure>

[en]: <> (Placement)
### 位置

[en]: <> (Multiple button types can be used to express different emphasis levels.)
可以使用多个不同类型的按钮，以表示不同的重要性级别。

<figure>

![]({assets_path}/components/buttons/buttons-layout-when-to-use-02.png)

<figcaption>

[en]: <> (This screen layout uses:)
这个布局中使用了：

[en]: <> (An extended floating action button for the highest emphasis)
[en]: <> (A contained button for high emphasis)
[en]: <> (A text button for low emphasis)
1. 一个定制的浮动操作按钮，用于重要性最高的操作
2. 一个实心按钮，用于高重要性操作
3. 一个文本按钮，用于低重要性操作

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-layout-do-04.png)

<figcaption>

{do}

[en]: <> (In a bottom bar, when using multiple buttons, indicate the more important action by placing it in a contained button \(next to a text button\).)
在底栏中，当同时使用多个按钮时，通过使用实心按钮（在文本按钮旁边）来表示高重要性的操作。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-layout-dont.png)

<figcaption>

{dont}

[en]: <> (Avoid using two contained buttons next to one another if they don’t have the same fill color.)
如果两个实心按钮的填充色不一样，则不要把它们放在相邻位置。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-layout-do-outlined.png)

<figcaption>

{do}

[en]: <> (In a bottom bar, when using multiple buttons, you can place a outlined button \(medium emphasis\) next to a contained button \(high emphasis\).)
在底栏中，当同时使用多个按钮时，可以在实心按钮（高重要性）旁边放一个空心按钮（中重要性）。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-layout-do-outlined2.png)

<figcaption>

{do}

[en]: <> (When using multiple buttons in a bottom bar, you can place a text button \(low emphasis\) next to an outlined button \(medium emphasis\).)
当在底栏中使用多个按钮时，可以在空心按钮（中重要性）旁边放一个文本按钮（低重要性）。

</figcaption></figure></div></div><figure>

![]({assets_path}/components/buttons/buttons-layout-do-06.png)

<figcaption>

{do}

[en]: <> (Use a contained button in a bottom sheet next to other important details.)
在底部卡片中，在其他重要信息旁边使用实心按钮。

</figcaption></figure><figure>

![]({assets_path}/components/buttons/buttons-layout-dont-08.png)

<figcaption>

{dont}

[en]: <> (Don’t place a button below another button if there is space to place them side by side.)
如果有足够的空间将按钮并排放置，则不要垂直排列两个按钮。

</figcaption></figure>

[en]: <> (Text button)
<h2 id="text-button">文本按钮</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Text buttons are typically used for less-pronounced actions, including those located:)
文本按钮通常用于不需要引起用户太多注意的操作，包括位于：

[en]: <> (In dialogs)
[en]: <> (In cards)
* 对话框中
* 卡片中

[en]: <> (In cards, text buttons help maintain an emphasis on card content.)
在卡片中，文本按钮有助于将视觉焦点保持在卡片内容上。

<figure>

![]({assets_path}/components/buttons/buttons-text-when-to-use-01.png)

<figcaption>

[en]: <> (Text button)
文本按钮

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/text-button-usage-2.png)

<figcaption>

[en]: <> (Use a text button in snackbars.)
在 snackbar 中使用文本按钮。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/text-button-usage-3.png)

<figcaption>

[en]: <> (A text button against an image background)
一个针对图片背景的文本按钮

</figcaption></figure></div></div>

[en]: <> (Text label)
#### 文本标签

[en]: <> (A button’s text label is the most important element on a button, as it communicates the action that will be performed when the user touches it.)
按钮的文本标签是按钮上最重要的元素，因为它传达了用户点击按钮时要执行的操作。

<figure>

![]({assets_path}/components/buttons/text-button-usage-1.png)

<figcaption>

[en]: <> (Text label using a distinct action)
文本标签清楚地描述了要执行的操作

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/text-button-text-label-caution.png)

<figcaption>

{caution}

[en]: <> (Text labels need to be distinct from other elements. If the text label isn’t capitalized, it should use a different color, style, or layout from other text.)
文本标签需要与其他元素有明显区别。如果文本标签没有大写，则应该使用与其他文本不同的颜色、样式或布局。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-textbutton-text-label-dont-1.png)

<figcaption>

{dont}

[en]: <> (Avoid text labels that are too long. They should be concise.)
避免使用太长的文本标签。文本标签应该简明扼要。

</figcaption></figure></div></div>

[en]: <> (Placement)
### 位置

[en]: <> (Text buttons are often embedded in contained components like cards and dialogs, in order to relate themselves to the component in which they appear. Because text buttons don’t have a container, they don’t distract from nearby content.)
文本按钮通常嵌入在其他组件中，如卡片和对话框，以便将按钮和按钮所在的组件相关联。因为文本按钮没有容器，所以它们不会分散附近内容的焦点。

<figure>

![]({assets_path}/components/buttons/buttons-text-when-to-use-02.png)

<figcaption>

[en]: <> (Dialogs use text buttons because the absence of a container helps unify the action with the dialog text. Align text buttons to the right edge for left-to-right scripts.)
在对话框中使用文本按钮，这样有助于提升按钮和对话框内容在视觉上的统一性。对于 LTR 语言，将文本按钮对齐到右边缘。

</figcaption></figure><figure>

![]({assets_path}/components/buttons/buttons-text-when-to-use-03.png)

<figcaption>

[en]: <> (Text buttons minimize distraction from card content.)
文本按钮可以最大限度地减少对卡片内容的干扰。

</figcaption></figure>

[en]: <> (States)
### 状态

[en]: <> (Text buttons can be placed in front of a variety of backgrounds. Until the button is interacted with, its container isn’t visible.)
文本按钮可以放在各类背景上。在与按钮交互之前，按钮的容器不可见。

[en]: <> (To maintain accessibility, Material Design provides baseline opacity values for the color overlays used by states. A brand can adjust opacity values to suit its color scheme.)
为了保证可访问性，Material Design 为各种状态的颜色提供了基准不透明度。可以调整不透明度值以适应你的产品的配色方案。

<figure>

![]({assets_path}/components/buttons/text-buttons-states.png)

<figcaption>

[en]: <> (Text button states)
文本按钮的状态

</figcaption></figure>

[en]: <> (Outlined button)
<h2 id="outlined-button">空心按钮</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Outlined buttons are medium-emphasis buttons. They contain actions that are important, but aren’t the primary action in an app.)
空心按钮是中重要性的按钮。它们包含了重要的操作，但不是应用中的主操作。

[en]: <> (Alternatives)
#### 备选方案

[en]: <> (Outlined buttons are also a lower emphasis alternative to contained buttons, or a higher emphasis alternative to text buttons.)
空心按钮可以替代实心按钮，有比实心按钮更低的重要性；或者替代文本按钮，有比文本按钮更高的重要性。

<figure>

![]({assets_path}/components/buttons/buttons-outlined-usage-01.png)

</figure>

[en]: <> (Container)
### 容器

[en]: <> (Outlined buttons display a stroke around a text label. Stroke can be represented in different ways:)
空心按钮会在文本标签周围显示一个描边。描边可以用不同的方式表示：

[en]: <> (Set a button’s width to be the size of the text label, with 16dp padding on the left and right)
[en]: <> (Set the button’s relative position to the responsive layout grid)
* 将按钮的宽度设置为文本标签的宽度，并在左右各添加 16dp 的内边距
* 将按钮的宽度设置为充满响应式布局网格

[en]: <> (In a resting state, outlined buttons should display containment with a stroke and no fill.)
在静止状态下，空心按钮不含填充色，仅显示描边。

<figure>

![]({assets_path}/components/buttons/buttons-outlined-usage-02.png)

<figcaption>

[en]: <> (Outlined button)
空心按钮

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-outlined-usage-flexible.png)

<figcaption>

{do}

[en]: <> (An outlined button’s width is dynamically set to fit the text label.)
空心按钮的宽度会根据文本标签的宽度动态调整。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-outlined-usage-dont.png)

<figcaption>

{dont}

[en]: <> (An outlined button’s width shouldn’t be shorter than its text.)
空心按钮的宽度不应短于文本。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-outlined-usage-caution.png)

<figcaption>

{caution}

[en]: <> (Protect text when using Outlined buttons in front of images. This image uses a light purple scrim to provide text protection for this outlined button.)
在图片上使用空心按钮时，注意保持文本的可读性。这张图片上使用了浅紫色的遮罩，以保持空心按钮上文本的可读性。

</figcaption></figure></div></div>

[en]: <> (States)
### 状态

[en]: <> (Outlined buttons can be placed on top of a variety of backgrounds. Its container is transparent and until the button is interacted with, a color isn’t visible.)
空心按钮可以放在各种背景上。它的容器是透明的，在与按钮交互之前，容器的颜色都是不可见的。

[en]: <> (To maintain accessibility, Material Design provides baseline opacity values for the color overlays used by states. A brand can adjust opacity values to suit its color scheme.)
为了保证可访问性，Material Design 为各种状态的颜色提供了基准不透明度。可以调整不透明度值以适应你的产品的配色方案。

<figure>

![]({assets_path}/components/buttons/outlined-button-states.png)

<figcaption>

[en]: <> (Outlined button states)
空心按钮的状态

</figcaption></figure>

[en]: <> (Contained button)
<h2 id="contained-button">实心按钮</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Contained buttons are high-emphasis, distinguished by their use of elevation and fill. They contain actions that are primary to your app.)
实心按钮是高重要性的，通过添加海拔高度和填充色来和周围元素形成区分。它包含应用的主要操作。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-contained-do-1.png)

<figcaption>

[en]: <> (A contained button)
一个实心按钮

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-text-label-do-2.png)

<figcaption>

{do}

[en]: <> (Text labels can be written in sentence case, as long as the button is clearly distinguishable from elements around it.)
文本标签可以使用句子，只要按钮与周围的元素清晰可辨即可。

</figcaption></figure></div></div>

[en]: <> (Container)
### 容器

[en]: <> (Contained buttons display a container around a text label. Containers can be represented in different ways:)
实心按钮会在文本标签周围显示一个容器。容器可以用不同的方式表示：

[en]: <> (Set container width to the size of the text label with 16dp padding on the left and right)
[en]: <> (Set the container’s relative position to the [responsive layout grid]\(https://www.mdui.org/design/layout/responsive-layout-grid.html\))
* 将容器的宽度设置为文本标签的宽度，并在左右各添加 16dp 的内边距
* 将容器的宽度设置为充满[响应式布局网格](https://www.mdui.org/design/layout/responsive-layout-grid.html)

[en]: <> (Contained buttons should display containers with a solid color.)
实心按钮应显示纯色的容器。

<figure>

![]({assets_path}/components/buttons/buttons-contained-do.png)

<figcaption>

[en]: <> (A contained button with solid color)
一个纯色的实心按钮

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-elements-container-flexible.png)

<figcaption>

{do}

[en]: <> (A button container’s width is dynamically set to fit its text label.)
按钮容器的宽度会根据文本标签的宽度动态调整。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-elements-container-flexible-dont.png)

<figcaption>

{dont}

[en]: <> (A button container’s width shouldn’t be shorter than its text.)
按钮容器的宽度不应短于其文本。

</figcaption></figure></div></div>

[en]: <> (Button container width can be set according to the responsive layout grid.)
可以将按钮容器的宽度设置为充满响应式布局网格。

<figure>

![]({assets_path}/components/buttons/buttons-elements-container-extended.png)

<figcaption>

[en]: <> (Contained button in a responsive layout grid)
响应式布局网格中的实心按钮

</figcaption></figure>

[en]: <> (Icon)
### 图标

[en]: <> (Contained buttons can place icons next to text labels to both clarify an action and call attention to a button.)
实心按钮可以在文本标签旁边放置图标，以使操作更清晰易懂，并引起用户对按钮的注意。

<figure>

![]({assets_path}/components/buttons/buttons-elements-icon-01.png)

<figcaption>

{do}

[en]: <> (Use icons that clearly communicate their meaning.)
使用图标清楚地表达了按钮的含义。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-elements-icon-dont-02.png)

<figcaption>

{dont}

[en]: <> (Don’t vertically align an icon and text in the center of a contained button.)
实心按钮中的图标和文本不要垂直排列。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-elements-icon-dont-03.png)

<figcaption>

{dont}

[en]: <> (Don’t use two icons in the same button.)
不要在一个按钮中使用两个图标。

</figcaption></figure></div></div>

[en]: <> (Shadow & elevation)
### 阴影 & 海拔高度

[en]: <> (Buttons at higher elevations typically appear more prominent in a design. On press, elevated buttons lift up and the container displays touch feedback.)
有较高海拔高度的按钮通常会显得更加突出。按下时，按钮海拔高度增加，并在容器上显示触摸反馈。

<figure>

![]({assets_path}/components/buttons/buttons-elements-shadow-elevation.png)

<figcaption>

[en]: <> (Higher elevation increases the prominence of a contained button.)
实心按钮的较高的海拔高度，会显得按钮更突出。

</figcaption></figure>

[en]: <> (States)
### 状态

[en]: <> (The following opacity values are recommended for button container fill colors. Each app can alter the overlay values to suit their brand’s color palette.)
按钮容器的填充色，建议使用以下不透明度值。每个应用都可以修改不透明度值，以适应其产品的配色方案。

<figure>

![]({assets_path}/components/buttons/contained-buttons-states.png)

<figcaption>

[en]: <> (Contained button states)
实心按钮的状态

</figcaption></figure>

[en]: <> (Toggle button)
<h2 id="toggle-button">切换按钮</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Toggle buttons can be used to group related options. To emphasize groups of related toggle buttons, a group should share a common container.)
切换按钮可用于对相关选项进行分组。通过共用一个容器，来强调一组切换按钮。

[en]: <> (Selected action)
#### 已选择的操作

[en]: <> (Only one option in a group of toggle buttons can be selected and active at a time. Selecting one option deselects any other.)
在同一时刻，一个按钮组中只能有一个选项被选中和激活。选择一个选项后，将取消其他选项。

<figure>

![]({assets_path}/components/buttons/buttons-toggle-usage.png)

<figcaption>

[en]: <> (These toggle buttons present options for aligning text to the left, right, and center.)
这些切换按钮提供的选项，可以将文本左对齐、右对齐和居中。

</figcaption></figure><figure>

![]({assets_path}/components/buttons/buttons-toggle-usage-2.png)

<figcaption>

[en]: <> (Icons can be used as toggle buttons when they allow selection, or deselection, of a single choice, such as marking an item as a favorite.)
当允许选择或取消选择单个选项时，可以使用图标作为切换按钮，例如将一个项目标记为喜欢。

</figcaption></figure>

[en]: <> (States)
### 状态

[en]: <> (Active and available toggle buttons)
#### 激活和可用的切换按钮

[en]: <> (A toggle button’s state makes it clear which button is active. Hover and focus states express the available selection options for buttons in a toggle group.)
切换按钮的状态可以清楚地显示哪个按钮处于激活状态。鼠标悬浮和聚焦状态则可以表示按钮组中按钮的可用状态。

[en]: <> (Disabled toggle buttons)
#### 禁用的切换按钮

[en]: <> (Toggle buttons that cannot be selected can either be given a disabled state, or be hidden.)
无法被选择的切换按钮可以添加禁用状态，也可以被隐藏。

<figure>

![]({assets_path}/components/buttons/toggle-buttons-states.png)

<figcaption>

[en]: <> (Toggle button states)
切换按钮的状态

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Contained Button)
#### 实心按钮

<figure>

![]({assets_path}/components/buttons/specs-contained-button.png)

</figure></div><div class="mdui-col">

[en]: <> (Contained Button with icon)
#### 含图标的实心按钮

<figure>

![]({assets_path}/components/buttons/specs-contained-button-with-icon.png)

</figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Outlined Button)
#### 空心按钮

<figure>

![]({assets_path}/components/buttons/specs-outlined-button.png)

</figure></div><div class="mdui-col">

[en]: <> (Text Button)
#### 文本按钮

<figure>

![]({assets_path}/components/buttons/specs-text-button.png)

</figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Toggle Buttons)
#### 切换按钮

<figure>

![]({assets_path}/components/buttons/specs-toggle-buttons.png)

</figure></div></div></div>
