<div class="article__intro">

[en]: <> (Text legibility)
# 文本可读性

[en]: <> (Color plays an important role in text legibility.)
颜色在文本可读性中起到很重要的作用。

<nav>

[en]: <> (Legibility standards)
[en]: <> (Text backgrounds)
[en]: <> (Text types)
* [可读性标准](#legibility-standards)
* [文本背景](#text-backgrounds) 
* [文本类型](#text-types) 

</nav></div><div class="article__body">

[en]: <> (Legibility standards)
<h2 id="legibility-standards">可读性标准</h2>

[en]: <> (WCAG standards)
### Web内容无障碍指南（WCAG）标准

[en]: <> (All text should be legible and meet accessibility standards. *The Web Content Accessibility Guidelines \(WCAG 2.0\)* level AA requires a 4.5：1 color contrast between text and background for normal text, and 3:1 to large text.)
所有的文本应该是清晰易懂的，并符合无障碍标准。*Web内容无障碍指南 \(WCAG 2.0\)* 中，AA 级别要求正常文本的文本和背景之间的颜色对比度为4.5：1，大文本的颜色对比度为3：1。

[en]: <> (To learn more about color, contrast, and accessibility design, read *Material Design Accessibility*.)
想要了解更多关于颜色，对比和无障碍设计，请阅读 *Material Design 无障碍*


[en]: <> (Text backgrounds)
<h2 id="text-backgrounds">文本背景</h2>

[en]: <> (Text on colored backgrounds)
### 彩色背景上的文本

[en]: <> (Black text is recommended for use on light backgrounds, and white text on dark backgrounds. If your app has both light and dark themes, make sure the text is available in a contrasting color against each theme.)
黑色文本被推荐运用于浅色的背景上，而白色的文本推荐运用于深色的背景。如果你的app同时拥有浅色和深色的主题，请确保这些文本在每个主题的对比颜色上都是易获取的。

[en]: <> (Colored backgrounds or typography additionally change the rules regarding text opacity and different states of text.)
彩色背景或排版会额外的改变关于文本不透明度和不同文本状态的规则。

[en]: <> (Using text opacity)
### 使用文本不透明度

[en]: <> (Instead of using gray text and icons on top of colored backgrounds, create better contrast by displaying white or black text with reduced opacity.)
在彩色背景上使用灰色的文本和图标是不推荐的，取而代之的是 通过显示含已减少不透明度的白色或黑色文本来创造更佳的透明度。

[en]: <> (For example, black text displayed at 75% opacity on a green background gives the text an appearance of black, with a hint of green.)
例如，黑色文本以 75% 的不透明度显示在一个绿色背景上，就会给这些文字带来黑色的外观并带有一丝绿色。

[en]: <> (Alternatively, you can calculate the color of text by doing the following:)
或者，你可以通过完成以下这些来计算文本的颜色

[en]: <> (Place the color black at reduced opacity in front of a green background)
[en]: <> (Identify the hex value of the resulting darkened green color)
[en]: <> (Use that hex value of that color for your text)
* 将含已减少不透明度的黑色放在一个绿色背景的前面。
* 识别由此产生的深色绿色的十六进制值（hex color）。
* 将此颜色的十六进制值应用于你的文本。

[en]: <> (In this case, if the surface behind the text changes color, you must update the hex color as well.)
在这种情况下，如果处于文本下方的表面变换了颜色，你必须同时改变文本的十六进制色码。

<figure>

![]({assets_path}/color/text-legibility/color-legibility-opacity-baseline-do.png)

<figcaption>

{do}

[en]: <> (Use a transparent version of black on a colored surface to preserve legibility.)
在彩色表面上使用透明的黑色以保持可读性。

</figcaption></figure><figure>

![]({assets_path}/color/text-legibility/color-legibility-opacity-baseline-dont.png)

<figcaption>

{dont}

[en]: <> (Avoid using opaque gray text that isn’t legible on colored surfaces.)
避免使用不透明的灰色文本，他们在彩色表面上往往是难以分辨的

</figcaption></figure>

[en]: <> (Dark text on light backgrounds)
### 在浅色背景上使用深色文本

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Dark text on light backgrounds \(shown here as #000000 on #FFFFFF\) applies the following opacity levels:)
在浅色背景上的深色文本（例如此处所展示的 #FFFFFF 背景上的 #000000 ）应用以下的不透明度( opacity )级别

[en]: <> (High-emphasis text has an opacity of 100%)
[en]: <> (Medium-emphasis text and hint text have opacities of 60%)
[en]: <> (Disabled text has an opacity of 38%)
* 高强调度的文本具有100%的不透明度。
* 中强调度的文本和暗示文本具有60%的不透明度。
* 禁用文本的不透明度为38%。

</div><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-darktext.png)

</figure></div></div>

[en]: <> (Colored text and backgrounds)
### 彩色的文本和背景

[en]: <> (Colored text should be used sparingly to draw attention and apply selective emphasis. Ideally colored text should be reserved for text elements such as headlines, buttons, and links.)
彩色文本应谨慎使用，以引起注意，并有选择性地强调。理想的彩色文本应该为像标题、按钮和链接等文本元素保留。

[en]: <> (Use the Material color tool to determine if certain foreground colors used on text pass accessibility standards on background colors.)
使用 *Material颜色工具* 来确定文本上使用的某些前景颜色是否通过背景颜色的无障碍标准。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-coloredtextbg-basil.png)

<figcaption>

{do}

[en]: <> (Large headlines and short text snippets are best for colored text.)
大标题和短的文本片段是彩色文本的最佳实践。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-coloredtextbg-caution-owl.png)

<figcaption>

{caution}

[en]: <> (It can be hard to read long body copy that is colored.)
长篇的彩色文稿可能是难以阅读的。

</figcaption></figure></div></div>


[en]: <> (Text types)
<h2 id="text-types">文本类型</h2>

[en]: <> (Helper Text)
### 辅助文本

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Helper text gives context about a field’s input, such as how the input will be used. It can adopt brand colors, but should be legible as determined by WCAG standards.)
辅助文本提供关于字段的输入的上下文，例如输入将如何使用。它可以采用品牌颜色，但应该是WCAG标准所确定的。

[en]: <> (For example, helper text on light backgrounds could apply the following opacity levels and default hexes:)
例如，浅背景下的辅助文本可以应用以下的不透明度级别和默认值：

[en]: <> (High emphasis helper: This text uses a hex value #000000 at 100% opacity)
[en]: <> (Default color helper text: This text uses a hex value of #000000 at 60% opacity)
[en]: <> (Default error helper text: This text uses a hex value of #B00020 at 100% opacity)
* 强调度高的辅助文本：这个文本使用了十六进制颜色值 #000000 和100%的不透明度
* 默认颜色的辅助文本：这个文本使用了十六进制颜色值 #000000 和60%的不透明度
* 默认错误的辅助文本：这个文本使用了十六进制颜色值 #B00020 和100%的不透明度

</div><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-helpertext.png)

</figure></div></div>

[en]: <> (Selected Text)
### 已选择文本

[en]: <> (To reflect brand, text selection can use an accent of your primary or secondary color.)
为了反映品牌，文字选择区域可以使用主色或次色的强调色。

[en]: <> (Selected text should be legible against the selection color, and the selection color should contrast the background color. Alternatively, you can display outlines, motion, checkmark icons, or other text treatments to indicate selected text.)
所选择的文本应在选择区颜色下清晰易读，选择区颜色应与背景颜色形成对比。或者，你可以显示纲要、手势、复选图标或其他文本处理方式来指示选择的文本。

[en]: <> (Learn more about contrast \(or try a color contrast analyzer\) at webaim.org.)
你可以在 *WeBAIM.org* 了解更多关于对比度信息（或者尝试使用颜色对比度分析器）。

<div class="mdui-row-xs-2"><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-selectedtext-baseline.png)

<figcaption>

[en]: <> (Text)
[en]: <> (Text selection color)
[en]: <> (Background)
* 文本
* 文本选择区颜色
* 背景色

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-selectedtext-reply.png)

<figcaption>

[en]: <> (Text selection can be customized using your palette accent color.)
文本选择区可以使用调色板的强调颜色定制。

</figcaption></figure></div></div>

[en]: <> (Icons and Other symbols)
### 图标和其他符号

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Icons and other elements don’t need to meet WCAG legibility standards, but should be as visible as possible to indicate function or communicate information.)
图标和其他元素不需要满足 WCAG 可读性标准，但应该尽可能明显地指示功能或交流信息。


[en]: <> (For example, dark icons \(#000000\) or other elements on light backgrounds \(#FFFFFF\) could apply the following opacity levels:)
例如，在浅色背景上的深色图标（#000000）或其他的元素应该运用如下的不透明度等级

[en]: <> (Active icons have an opacity of 100%)
[en]: <> (Inactive icons have an opacity of 60%)
[en]: <> (Disabled icones have an opacity of 38%)
* 激活的图标具有100%的不透明度
* 可激活的图标具有60%的不透明度
* 禁用的图标具有38%的不透明度

</div><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-darkicon.png)

</figure></div></div></div>
