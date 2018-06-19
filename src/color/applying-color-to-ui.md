<div class="article__intro">

[en]: <> (Applying color to UI)
# 将颜色应用于 UI

[en]: <> (Color is applied to UI elements and components in consistent and meaningful ways.)
颜色以一致和有意义的方式应用于UI的元素和组件。

<nav>

[en]: <> (Usage)
[en]: <> (Top and bottom app bars)
[en]: <> (Backdrop)
[en]: <> (Sheets and surfaces)
[en]: <> (Buttons, chips and selection controls)
[en]: <> (Typography and iconography)
* [用法](#usage)
* [顶部和底部应用程序条](#top-bottom-app-bars)
* [背景](#backdrop)
* [卡片和纸片](#sheets-surfaces)
* [按钮、滑块和选择控件](#buttons-chips-selection-controls)
* [布局与排版](#typography-iconography)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (These guidelines describe a variety of UI components and elements where color application is important.)
这些指南讲述了如何将颜色应用于重要的各种UI组件以及元素。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col">

![]({assets_path}/color/applying-color-to-ui/color-illos-08.png)

[en]: <> (Consistent)
#### 一致性

[en]: <> (Color should be applied throughout a UI consistently and be compatible with the brand it represents.)
颜色应该贯穿整个UI，并与它所代表的内容相兼容。

</div><div class="mdui-col">

![]({assets_path}/color/applying-color-to-ui/color-illos-09.png)

[en]: <> (Distinct)
#### 区别性

[en]: <> (Color should create distinction between elements, with sufficient contrast between them.)
颜色应该体现元素之间的区别，使得元素之间有足够的对比度。

</div><div class="mdui-col">
    
![]({assets_path}/color/applying-color-to-ui/color-illos-10.png)

[en]: <> (Intentional)
#### 目的性

[en]: <> (Color should be applied purposefully as it can convey meaning in multiple ways, such as relationships between elements and degrees of hierarchy.)
颜色应该有目的地应用，因为它可以传达出类似于关系和等级之类的信息。

</div></div>

[en]: <> (Top and bottom app bars)
<h2 id="top-bottom-app-bars">顶部和底部应用程序栏</h2>

[en]: <> (The way color is applied to top and bottom app bars helps users identify them and understand their relationship to surrounding UI elements.)
  颜色应用于顶部和底部应用程序栏以帮助用户识别它们并理解它们与周围UI元素之间的关系。

[en]: <> (Identifying app bars)
### 区别系统程序栏

[en]: <> (Top and bottom app bars use an app’s primary color. System bars can use a dark or light variant of the primary color to separate system content from top app bar content.)
如果顶部和底部应用程序栏目都使用应用程序的主色。那么在系统程序栏上可以使用暗变主色或浅变主色，这样就可以将系统程序栏和顶部的应用程序栏内容区分开来。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-bars-differentiating-baseline.png)

<figcaption>

{do}

[en]: <> (The primary color \(purple 500\) is used on this top app bar, and a dark primary variant \(purple 700\) is used on the system bar.)
这个顶部应用程序栏使用了主色（紫色500），并且系统程序栏上使用了暗变主色（紫色700）。

</figcaption></figure>

[en]: <> (To emphasize the difference between app bars and other surfaces, use a secondary color on nearby components such as the FAB.)
为了强调应用程序栏和其他内容之间的差别，附近的组件（比如浮动动作按钮）应该使用与其对比度较高的一些颜色。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-bars-differentiating-reply.png)

<figcaption>

{do}

[en]: <> (The primary color \(blue 700\) is used on this bottom app bar, and the secondary color \(orange 500\) is used on the floating action button.)
底部应用程序条使用了主色（蓝色700），那么浮动动作按钮应该使用不同的颜色（橙色500）。

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-bars-differentiating-caution-1.png)

<figcaption>

{caution}

[en]: <> (If the bottom app bar and floating action button are the same color, use shadow or alternate means to create enough distinction between them.)
如果底部应用程序栏和浮动动作按钮的颜色是相同的，就可以使用阴影来将他们区分开来。

</figcaption></figure>

[en]: <> (Blending an app bar with the background)
### 将应用程序条与背景混合

[en]: <> (When an app’s top or bottom app bar color is the same color as the background color, they blend together, placing emphasis on an app’s content instead of its structure.)
当然，你也可以把顶部或底部的应用程序栏的和背景的颜色设置成一样的，它们就会混合在一起，这样就可以使应用程序的内容（而非结构）更加明显。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/color/applying-color-to-ui/color-applyingcolorui-blendedbars-fortnightly-1a-v1.mp4" src="{assets_path}/color/applying-color-to-ui/color-applyingcolorui-blendedbars-fortnightly-1a-v1.mp4" type="video/mp4">
</video><figcaption>

[en]: <> (Both this app’s top app bar color and background color is the primary color: white. However, on scroll the top app bar gains a shadow, showing it has an elevation higher than the content that scrolls behind it.)
这个应用程序的顶部应用程序栏和背景都使用了主色（白色）。但是只要给顶部应用程序栏增加一个阴影，就可以使它看起来在其他内容的前面。

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-blendedbars-owl.png)

<figcaption>

[en]: <> (This app’s bright, seamless layout uses it’s primary blue \(blue 700\) color for app bars, bottom navigation, and the background color, so individual elements stand out less, and content stands out more. The activation state uses the secondary yellow. It includes a shadow on the bottom navigation to show the elevation division between surfaces.)
这个应用程序的应用程序条，底部导航栏和背景三者之间无缝的使用了主色（蓝色700）来使得他们看起来更和谐。当底部应用程序条的某一个选项卡被选择时颜色会变成黄色并且会被加上阴影。
</figcaption></figure>

[en]: <> (Backdrop) 
<h2 id="backdrop">背景</h2>

[en]: <> (A backdrop has a front and back layer. To distinguish between these two layers, the baseline back layer color is your primary color and the baseline front layer is white.)
背景有前、后两层。为了区分这两层，后层的颜色应该是你的主色，而前层的颜色应该是白色的。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-surfaceelevations-crane.png)

<figcaption>

[en]: <> (This app uses its primary color \(purple 800\) on the backdrop’s back layer. The text fields are a light primary variant \(purple 700\). A secondary color \(red 700\) is applied as an accent to the flight fares.)
这个应用程序背景的后层使用了主色（紫色800）。文本字段比主色要稍微淡一些（紫色700）。而飞机票的价格则使用了比较显眼的颜色（红色700）。

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-surfaceelevations-shrine.png)

<figcaption>

[en]: <> (This app uses the primary color \(pink 100\) for the backdrop’s back layer and the primary dark primary variant \(pink 900\) for typography and iconography. Additionally, the secondary color \(pink 50\) is used for the expanding sheet on the front layer.)
这个应用程序背景的后层的使用原色（粉色100），而图标则使用加深的主色（粉红色900）。此外，背景的前层使用了变浅的主色（粉红色50）。

</figcaption></figure>


[en]: <> (Sheets and surfaces)
<h2 id="sheets-surfaces">卡片和纸片</h2>

[en]: <> (The baseline color for sheets and surfaces, such as bottom sheets, navigation drawers, menus, dialogs, and cards is white. These components can incorporate color to create contrast between other surfaces. Contrast can make surface edges apparent, indicating elevation differences when surfaces overlap.)
卡片和纸片比如抽屉式导航、菜单和对话框对话框是白色的。这些白色的组件可以增加其他组件之间的对比度，使其他组件的边缘清晰并且更容易使用阴影来体现它的高度感。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-baseline-alt.png)

<figcaption>

[en]: <> (This product has changed the default white to a primary color in a bottom sheet and the navigation drawer.)
这个应用程序将背景和抽屉式导航栏由默认的白色改变为了原色。

[en]: <> (This product uses a primary color \(purple 500\) in part of the bottom sheet instead of the baseline white.)
[en]: <> (This product’s navigation drawer uses its primary color \(purple 500\) instead of the baseline white.)
* 该应用程序部分背景色使用了原色（紫色500）而没有使用基础的白色。
* 该应用程序的抽屉式导航栏使用其原色（紫色500）代替基础的白色。

</figcaption></figure>

[en]: <> (Modal sheets)
### 悬浮框

[en]: <> (Use contrasting colors on surfaces that appear on-screen temporarily, such as navigation drawers and bottom sheets. Usually these surfaces are white, but you can use your app’s primary or secondary color.)
在屏幕上暂时悬浮的界面（比如抽屉式导航栏），可以使用使用对比度较高的颜色。通常这些界面都会使用白色，但你也可以使用应用程序的主要或次要颜色。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-tempsurfaces-reply.png)

<figcaption>

[en]: <> (This app uses its primary color blue \(blue 700\) on the bottom navigation drawer, a primary dark variant \(blue 800\) for the account switcher, and a secondary color \(orange 500\) for selection.)
这个应用程序的底部抽屉式导航栏使用了它的主色蓝色（蓝色7000），账户转换器使用了暗变的主色（蓝色800），已选择项目使用了高对比度的橙色（橙色500）。

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-tempsurfaces-fortnightly.png)

<figcaption>

[en]: <> (This app uses its primary color \(white\) for its modal navigation drawer, creating the maximum contrast between the dark typography and the navigation. A white scrim is used to make content behind it less noticeable, as the navigation drawer is the same color as the background.)
这个应用程序的导航栏使用了它的原色（白色），使得导航栏与背景产生足够的对比。又因为导航栏颜色与文字底色相同，使得后面的内容不那么显眼。

</figcaption></figure><figure>
<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/color/applying-color-to-ui/tempsurfaces-owl-1a.mp4" src="{assets_path}/color/applying-color-to-ui/tempsurfaces-owl-1a.mp4" type="video/mp4">
</video><figcaption>

[en]: <> (This app displays a sheet in the bottom right, colored with its primary color \(pink 500\). Upon tap, the sheet expands.)
这个应用程序的右下角有一个浮动操作按钮，颜色是原色（粉红色500）。点击这个浮动操作按钮的时候，按钮会扩展开来。

</figcaption></figure>

[en]: <> (Cards)
### 卡片 

[en]: <> (`The baseline color for cards is white. This color can be customized to express brand or to improve legibility. Card text and icons can also use the color theme to improve legibility.`)
卡片的底色使用白色的，这样可以使卡片兼容更多的风格并且提高易读性。卡片上的文字和图标也可以使用某个主题的颜色来提高易读性。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-cards-baseline.png)

<figcaption>

[en]: <> (The surfaces of these cards use the primary color \(purple 500\). The app’s background color is white. The secondary color \(teal 200\) is used for data visualization.)
这些卡片的底色使用原色（紫色500），而应用程序的背景颜色是白色的。可视化的数据则使用了对比度较高的颜色（TEAL 200）。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/color/applying-color-to-ui/interaction-baseline-1a.mp4" src="{assets_path}/color/applying-color-to-ui/interaction-baseline-1a.mp4" type="video/mp4">
</video><figcaption>

[en]: <> (Cards can inherit color to showcase selection or importance.)
卡片也可以继承应用程序的主色来体现出它被选择或者它是重要的。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (When a card’s text and icons appear in front of imagery, they can be difficult to read. To improve legibility, you can use color to create a surface for text and icons.)
当卡片的文字和图标出现在图片上时将会变得较难阅读。这时可以为卡片增加底色来使文字和图标与背景之间形成较高的对比度来提高易读性。

</div><div class="mdui-col"><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-surfaces-cards-legibility-baseline-1a.png)

<figcaption>

[en]: <> (This card uses a colorful scrim to ensure text remains legible.)
这张卡片使用了彩色的底色来确保文字清晰易懂。

</figcaption></figure></div></div>

[en]: <> (Buttons, chips and selection controls)
<h2 id="buttons-chips-selection-controls">按钮、滑块和选择控件</h2>

[en]: <> (Buttons, chips and selection controls can be emphasized by applying your primary or secondary color to them.)
按钮、滑块和选择控件可以使用主色或者次色来使他们更加显眼。

[en]: <> (Color categories)
#### 颜色类别

[en]: <> (The baseline color for contained, text and outlined buttons is your *primary color*.)
[en]: <> (The baseline color for floating action buttons and extended floating action buttons is your *secondary color*.)
[en]: <> (The baseline color for selection controls is your *secondary color*.)
* 控件、文本和按钮的基础颜色是你的*原色*。
* 浮动动作按钮的基础颜色是你的第二颜色（次色）*。
* 选择控件的基础颜色是您的第二颜色（次色）*。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-baseline.png)

<figcaption>

[en]: <> (The color theme for this app consists of a primary color \(purple 500\) with a primary dark variant \(purple 600\) and a secondary color \(teal 200\).)
这个应用程序的主题颜色由一个主色（紫色500）与暗变原色\（紫色600）和次色（绿色200）三种颜色组成。

[en]: <> (This product uses the primary color \(purple 500\) for the bottom app bar and the secondary color \(teal 200\) as an accent for the floating action button and selection controls.)
[en]: <> (This product uses the secondary color \(teal 200\) as an accent for selected list items.)
* 该应用程序的顶部应用程序条使用主色（紫色500），浮动动作按钮和选择控件则使用了次色（TEAL 200）。
* 同样，被选定的列表项目也使用次色（TEAL 200）。

</figcaption></figure>

[en]: <> (Buttons, chips, and selection controls)
### 按钮、滑块和选择控件

[en]: <> (Buttons, chips, and selection controls can be emphasized with your primary or secondary colors.)
按钮、滑块和选择控件可以用主色或次色来强调。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-buttonschips-shrine.png)

<figcaption>

[en]: <> (This app uses its primary color \(pink 100\) for its extended floating action button and chips. It uses its primary dark variant \(pink 900\) for the slider.)
这个应用程序的选择按钮和滑块底色使用它的原色（粉红色100），而滑块的选择颜色使用了它的暗变主色（粉红色900）。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-buttonschips-dont-crane.png)

<figcaption>

{do}

[en]: <> (Selection controls can inherit your app’s secondary color.)
选择控件可以使用应用程序的次色。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-buttonschips-do-crane.png)

<figcaption>

{dont}

[en]: <> (Don’t use one of your brand colors for coloring alerts. This will help it stand out.)
不要用与主色或次色比较相近的颜色来标记警报，这样可以让它看起来更加显眼。

</figcaption></figure></div></div>

[en]: <> (Floating action button \(FAB\))
### 浮动动作按钮（FAB）

[en]: <> (The floating action button \(FAB\) should be one of the most recognizable items on your screen.)
浮动动作按钮（FAB）应该是屏幕上最容易识别的项目之一。

[en]: <> (Use color to create contrast between the FAB and surrounding elements, such as the app bar. Your secondary color is the baseline color for use on the FAB. If your canvas uses many colors, your FAB can use monochromatic coloring instead, to stand out from the content.)
可以通过改变FAB的颜色来使其于周围元素（比如应用程序条）之前产生较大的对比度。FAB的底色可以使用应用程序的次色。如果背景使用了较多种颜色，相对的，可以给FAB一个单色来使其更加突出。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-fab-reply.png)

<figcaption>

[en]: <> (This app’s secondary color \(orange 500\) is applied to the FAB, contrasting it from the surrounding UI.)
这个应用程序的浮动动作按钮使用了次色（橙色500），使其与周围的UI在颜色上形成鲜明的对比。

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-fab-posivibes.png)

<figcaption>

[en]: <> (This app’s color theme uses a primary white and a secondary black for all buttons, selection controls, and iconography. These components stand out because they contrast with the vivid, multicolor content.)
这个应用程序使用白色的主色并且给所有的按钮，选择控件和图标使用了黑色的次色。这种单纯的黑白色可以与生动鲜艳的内容形成鲜明的对比而使它们更加突出。

</figcaption></figure>

[en]: <> (Typography and iconography)
<h2 id="typography-iconography">布局与排版</h2>

[en]: <> (Color can express whether text has greater, or lesser, importance relative to other text. Color also ensures text remains legible when placed above imagery or backgrounds, which can make it difficult to read the text in front of them.)
颜色可以表示文本相对于其他文本是否更加重要。同时这些颜色必须保证文字清晰，将颜色放置在图片或者背景上会使上面的文字阅读起来比较困难。

[en]: <> (Typographic hierarchy)
### 排版层次

[en]: <> (Color can increase both text’s visibility and its level of importance.)
颜色可以增加文本的清晰度和并且表面其是否重要。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-baseline-alt.png)

<figcaption>

[en]: <> (The color theme for this app consists of a primary color \(purple 500\) and a secondary color \(orange 600\). Orange accents the card’s headlines, and purple appears on tabs and buttons.)
这个应用程序的颜色由原色（紫色500）和次色（橙色600）组成。橙色用来强调卡片的标题，而紫色则出现在标签和按钮上。

</figcaption></figure>

[en]: <> (Headlines and tabs)
### 标题和标签

[en]: <> (Important text, like tabs and headlines, can use your primary or secondary color.)
如标签和标题之类的一些的重要文本，可以使用主色或次色。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-headlinetabs-basil-1.png)

<figcaption>

[en]: <> (This app uses its secondary color \(orange 800\) to accent and call attention to the headlines.)
这个应用程序使用次色（橙色800）来强调标题。

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-headlinetabs-basil-2.png)

<figcaption>

[en]: <> (This app uses its primary color \(green 800\) for tabs, with weight changes indicating selected and unselected states.)
这个应用程序使用它的主色（绿色800）作为标签，并且使用文字的粗细和有无下划线来表明选择或未选择的状态。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-headlinetabs-do-owl-1.png)

<figcaption>

{do}

[en]: <> (Use your primary or secondary color to emphasize shorter text, such as headlines.)
使用主色或次色来强调像标题之类较短的文本。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-headlinetabs-do-owl-2.png)

<figcaption>

{do}

[en]: <> (You can use your primary or secondary color to accent links.)
也可以使用主色或次色来强调链接。

</figcaption></figure></div></div><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-typography-headlinetabs-caution-owl-1.png)

<figcaption>

{caution}

[en]: <> (Avoid using bright primary or secondary colors for body text.)
而在正文方面，则要尽量避免使用明亮的主色或次色。

</figcaption></figure>

[en]: <> (Text legibility)
### 文本易读性

[en]: <> (When text is placed above imagery, it often leads to legibility issues. Creating a colored layer between text and image can ensure text remains legible.)
当文字出现在图像上时，往往容易导致易读性问题。这时，只要在文本和图像之间添加彩色底板就可以使文本清晰起来。

<figure>

![]({assets_path}/color/applying-color-to-ui/textlegibility-posivibes-2.png)

<figcaption>

[en]: <> (This app applies a yellow scrim above imagery to ensure text above it is legible.)
这个应用程序在图像与文本之间增加了一层黄色的底板，以确保上面的文字清晰易懂。

</figcaption></figure>

[en]: <> (Icons)
### 图标

[en]: <> (Icons help identify actions and provide information. Their color should contrast against the background to ensure that they are legible and identifiable.)
图标有助于识别动作并提供信息。它们的颜色应该和背景有较高的对比去来确保它们足够清晰。

<figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-icons-basil.png)

<figcaption>

[en]: <> (This app uses both its primary color \(green 800\) and secondary color \(orange 800\) for its icons.)
这个应用程序的图标使用了主色（绿色800）和次色（橙色800）。

</figcaption></figure><figure>

![]({assets_path}/color/applying-color-to-ui/color-applyingcolorui-inputselectioncontrols-icons-shrine.png)

<figcaption>

[en]: <> (Shrine uses its primary dark variant \(pink 900\) for icons.)
这个应用程序在有动作的图标上使用了暗变主色（粉红色900）。

</figcaption></figure></div>
