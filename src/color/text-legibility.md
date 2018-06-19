<div class="article__intro">

[en]: <> (Text legibility)
# 文本可读性

[en]: <> (Color plays an important role in text legibility.)
颜色在文本可读性中起到很重要的作用。

<nav>

[en]: <> (Legibility standards)
[en]: <> (Text backgrounds)
[en]: <> (Text types)
* [译文](#legibility-standards)
* [译文](#text-backgrounds) 
* [译文](#text-types) 

</nav></div><div class="article__body">

[en]: <> (Legibility standards)
<h2 id="legibility-standards">译文</h2>

[en]: <> (WCAG standards)
### 译文

[en]: <> (All text should be legible and meet accessibility standards. *The Web Content Accessibility Guidelines \(WCAG 2.0\)* level AA requires a 4.5.1 color contrast between text and background for normal text, and 3:1 to large text.)
译文

[en]: <> (To learn more about color, contrast, and accessibility design, read *Material Design Accessibility*.)
译文


[en]: <> (Text backgrounds)
<h2 id="text-backgrounds">译文</h2>

[en]: <> (Text on colored backgrounds)
### 译文

[en]: <> (Black text is recommended for use on light backgrounds, and white text on dark backgrounds. If your app has both light and dark themes, make sure the text is available in a contrasting color against each theme.)
译文

[en]: <> (Colored backgrounds or typography additionally change the rules regarding text opacity and different states of text.)
译文

[en]: <> (Using text opacity)
### 译文

[en]: <> (Instead of using gray text and icons on top of colored backgrounds, create better contrast by displaying white or black text with reduced opacity.)
译文

[en]: <> (For example, black text displayed at 75% opacity on a green background gives the text an appearance of black, with a hint of green.)
译文

[en]: <> (Alternatively, you can calculate the color of text by doing the following:)
译文

[en]: <> (Place the color black at reduced opacity in front of a green background)
[en]: <> (Identify the hex value of the resulting darkened green color)
[en]: <> (Use that hex value of that color for your text)
* 译文
* 译文
* 译文

[en]: <> (In this case, if the surface behind the text changes color, you must update the hex color as well.)
译文

<figure>

![]({assets_path}/color/text-legibility/color-legibility-opacity-baseline-do.png)

<figcaption>

{do}

[en]: <> (Use a transparent version of black on a colored surface to preserve legibility.)
译文

</figcaption></figure><figure>

![]({assets_path}/color/text-legibility/color-legibility-opacity-baseline-dont.png)

<figcaption>

{dont}

[en]: <> (Avoid using opaque gray text that isn’t legible on colored surfaces.)
译文

</figcaption></figure>

[en]: <> (Dark text on light backgrounds)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Dark text on light backgrounds \(shown here as #000000 on #FFFFFF\) applies the following opacity levels:)
译文

[en]: <> (High-emphasis text has an opacity of 100%)
[en]: <> (Medium-emphasis text and hint text have opacities of 60%)
[en]: <> (Disabled text has an opacity of 38%)
* 译文
* 译文
* 译文

</div><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-darktext.png)

</figure></div></div>

[en]: <> (Colored text and backgrounds)
### 译文

[en]: <> (Colored text should be used sparingly to draw attention and apply selective emphasis. Ideally colored text should be reserved for text elements such as headlines, buttons, and links.)
译文

[en]: <> (Use the Material color tool to determine if certain foreground colors used on text pass accessibility standards on background colors.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-coloredtextbg-basil.png)

<figcaption>

{do}

[en]: <> (Large headlines and short text snippets are best for colored text.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-coloredtextbg-caution-owl.png)

<figcaption>

{caution}

[en]: <> (It can be hard to read long body copy that is colored.)
译文

</figcaption></figure></div></div>


[en]: <> (Text types)
<h2 id="text-types">译文</h2>

[en]: <> (Helper Text)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Helper text gives context about a field’s input, such as how the input will be used. It can adopt brand colors, but should be legible as determined by WCAG standards.)
译文

[en]: <> (For example, helper text on light backgrounds could apply the following opacity levels and default hexes:)
译文

[en]: <> (High emphasis helper: This text uses a hex value #000000 at 100% opacity)
[en]: <> (Default color helper text: This text uses a hex value of #000000 at 60% opacity)
[en]: <> (Default error helper text: This text uses a hex value of #B00020 at 100% opacity)
* 译文
* 译文
* 译文

</div><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-helpertext.png)

</figure></div></div>

[en]: <> (Selected Text)
### 译文

[en]: <> (To reflect brand, text selection can use an accent of your primary or secondary color.)
译文

[en]: <> (Selected text should be legible against the selection color, and the selection color should contrast the background color. Alternatively, you can display outlines, motion, checkmark icons, or other text treatments to indicate selected text.)
译文

[en]: <> (Learn more about contrast \(or try a color contrast analyzer\) at webaim.org.)
译文

<div class="mdui-row-xs-2"><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-selectedtext-baseline.png)

<figcaption>

[en]: <> (Text)
[en]: <> (Text selection color)
[en]: <> (Background)
* 译文
* 译文
* 译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-selectedtext-reply.png)

<figcaption>

[en]: <> (Text selection can be customized using your palette accent color.)
译文

</figcaption></figure></div></div>

[en]: <> (Icons and Other symbols)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Icons and other elements don’t need to meet WCAG legibility standards, but should be as visible as possible to indicate function or communicate information.)
译文

[en]: <> (For example, dark icons \(#000000\) or other elements on light backgrounds \(#FFFFFF\) could apply the following opacity levels:)
译文

[en]: <> (Active icons have an opacity of 100%)
[en]: <> (Inactive icons have an opacity of 60%)
[en]: <> (Disabled icones have an opacity of 38%)
* 译文
* 译文
* 译文

</div><div class="mdui-col"><figure>

![]({assets_path}/color/text-legibility/color-legibility-darkicon.png)

</figure></div></div></div>
