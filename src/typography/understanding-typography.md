<div class="article__intro">

[en]: <> (Understanding typography)
# 译文

[en]: <> (Typography expresses hierarchy and brand presence.)
译文

<nav>

[en]: <> (Type properties)
[en]: <> (Type classification)
[en]: <> (Readability)
[en]: <> (System fonts)
* [译文](#type-properties)
* [译文](#type-classification)
* [译文](#readability)
* [译文](#system-fonts)

</nav></div><div class="article__body">

[en]: <> (Type properties)
<h2 id="type-properties">译文</h2>

[en]: <> (A typeface is a collection of letters. While each letter is unique, certain shapes are shared across letters. A typeface represents shared patterns across a collection of letters.)
译文

[en]: <> (Typefaces that are selected for their style, legibility, and readability are most effective when following the fundamental principles of typographic design.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/anatomy.png)

<figcaption>

[en]: <> (Names of letterform parts: aperture, ascender, baseline, cap height, descender, leading, letter-spacing, sans serif, serif, stem, stroke, x-height)
译文

</figcaption></figure>

[en]: <> (Baseline)
### 译文

[en]: <> (The *baseline* is the invisible line upon which a line of text rests. In Material Design, the baseline is an important specification in measuring the vertical distance between text and an element.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/baseline.png)

<figcaption>

[en]: <> (The baseline)
译文

</figcaption></figure>

[en]: <> (4dp grid)
#### 译文

[en]: <> (Type aligns to the 4dp baseline grid.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/type-setting-4dp-lineheight.png)

<figcaption>

[en]: <> (Regardless of pt / sp size, a text’s baseline must sit on the 4dp grid. Line-height must be a value divisible by 4 to maintain the grid.)
译文

</figcaption></figure>

[en]: <> (Measurement from the baseline)
#### 译文

[en]: <> (Specify distances from UI elements from the baseline. Baseline values are software-agnostic, so they work in any design program, and work with the grid. On Android and iOS, code can be translated from baseline-relative specs into padding. For the web, automate the calculation using Sass or CSS.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/typography/understanding-typography/type-setting-baseline.png)

<figcaption>

[en]: <> (Reference baselines for vertical alignment, instead of bounding boxes. This produces more accurate implementation across design software and platforms.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/typography/understanding-typography/type-setting-ex1.png)

<figcaption>

[en]: <> (Measure text in relation to other components.)
译文

</figcaption></figure></div></div>

[en]: <> (Cap height)
### 译文

[en]: <> (*Cap height* refers to the height of a typeface’s flat capital letters \(such as M or I\) measured from the baseline. Round and pointed capital letters, such as S and A, are optically adjusted by being drawn with a slight overshoot above the cap height to achieve the effect of being the same size. Every typeface has a unique cap height.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/cap-height.png)

<figcaption>

[en]: <> (Cap height)
译文

</figcaption></figure>

[en]: <> (X-height)
### 译文

[en]: <> (*X-height* refers to the height of the lowercase x for a typeface, and it indicates how tall or short each glyph in a typeface will be.)
译文

[en]: <> (Typefaces with tall x-heights have better legibility at small font sizes, as the white space within each letter is more legible.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/x-height.png)

<figcaption>

[en]: <> (The height of a typeface’s lower-case x determines its x-height.)
译文

</figcaption></figure>

[en]: <> (Ascenders and descenders)
### 译文

[en]: <> (*Ascenders* are an upward vertical stroke found in certain lowercase letters that extend beyond either the cap height or baseline. *Descenders* are the downward vertical stroke in these letters. In some cases, a collision between these strokes can occur when the *line height* \(the vertical distance between baselines\) is too tight.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/ascender-descender.png)

<figcaption>

[en]: <> (Ascenders and descender)
译文

</figcaption></figure>

[en]: <> (Weight)
### 译文

[en]: <> (*Weight* refers to the relative thickness of a font’s stroke. A typeface can come in many weights; and four to six weights is a typical number available for a typeface.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/weight.png)

<figcaption>

[en]: <> (Common weights:)
译文

[en]: <> (Light)
[en]: <> (Regular)
[en]: <> (Medium)
[en]: <> (Bold)
* 译文
* 译文
* 译文
* 译文

</figcaption></figure>

[en]: <> (Type classification)
<h2 id="type-classification">译文</h2>

[en]: <> (Serif)
### 译文

[en]: <> (A *serif* is a small shape or projection that appears at the beginning or end of a stroke on a letter. Typeface with that have serifs are called a serif typeface. Serif fonts are classified as one of the following:)
译文

[en]: <> (*Old-Style serifs* resemble writing in ink, with:)
译文

[en]: <> (Low contrast between thick and thin strokes)
[en]: <> (Diagonal stress in the strokes)
[en]: <> (Slanted serifs on lower-case ascenders)
* 译文
* 译文
* 译文

[en]: <> (*Transitional serifs* have:)
译文

[en]: <> (High contrast between thick and thin strokes)
[en]: <> (Medium-High x-height)
[en]: <> (Vertical stress in the strokes)
[en]: <> (Bracketed serifs)
* 译文
* 译文
* 译文
* 译文

[en]: <> (*Didone or neoclassical serifs* have:)
译文

[en]: <> (Very high contrast between thick and thin strokes)
[en]: <> (Vertical stress in the strokes)
[en]: <> (“Ball” terminal strokes.)
* 译文
* 译文
* 译文

[en]: <> (*Slab serifs* have:)
译文

[en]: <> (Heavy serifs with imperceptible differences between the stroke weight)
[en]: <> (Minimal or no bracketing)
* 译文
* 译文

<figure>

![]({assets_path}/typography/understanding-typography/serif.png)

<figcaption>

[en]: <> (EB Garamond, old-style serif)
[en]: <> (Libre Baskerville, transitional serif)
[en]: <> (Libre Bodoni, didone / neoclassical serif)
[en]: <> (Bitter, slab serif)
1. 译文
2. 译文
3. 译文
4. 译文

</figcaption></figure>

[en]: <> (Sans Serif)
### 译文

[en]: <> (A typeface without serifs is called a sans serif typeface, from the French word “sans” that means "without." Sans serifs can be classified as one of the following:)
译文

[en]: <> (*Grotesque*: Low contrast between thick and thin strokes, vertical or no observable stress)
[en]: <> (*Humanist*: Medium contrast between thick and thin strokes, slanted stress)
[en]: <> (*Geometric*: Low contrast between thick and thin strokes, with vertical stress, and circular round forms)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/typography/understanding-typography/san-serif.png)

<figcaption>

[en]: <> (Work Sans, grotesque sans serif)
[en]: <> (Alegreya Sans, humanist sans serif)
[en]: <> (Quicksand, geometric sans serif)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Monospace)
### 译文

[en]: <> (Monospace typefaces display all characters with the same width.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/ono.png)

<figcaption>

[en]: <> (Roboto Mono, monospace)
[en]: <> (Space Mono, monospace)
[en]: <> (VT323, monospace)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Handwriting)
### 译文

[en]: <> (Handwriting typefaces are unconventional with a natural, handwritten feel. These typically are used as H1 - H6 in your type scale. They come in the following forms:)
译文

[en]: <> (*Black letter*: High contrast, narrow, with straight lines and angular curves)
[en]: <> (*Script*: Replication of calligraphic styles of writing \(more formal\))
[en]: <> (*Handwriting*: Replication of handwriting \(less formal\))
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/typography/understanding-typography/handwriting.png)

<figcaption>

[en]: <> (UnifrakturMaguntia, black letter)
[en]: <> (Dancing Script, script)
[en]: <> (Indie Flower, handwriting)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Display)
### 译文

[en]: <> (A miscellaneous category for all classification types that are only suitable for use at large point sizes. Display fonts typically are used as H1 - H6 in your type scale.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/display.png)

<figcaption>

[en]: <> (Shrikhand, display)
[en]: <> (Chewy, display)
[en]: <> (Faster One, display)
1. 译文
2. 译文
3. 译文

</figcaption></figure>

[en]: <> (Readability)
<h2 id="readability">译文</h2>

[en]: <> (While legibility is determined by the characters in a typeface, *readability* refers to how easy it is to read words or blocks of text, which is affected by the style of a typeface.)
译文

[en]: <> (Letter-spacing)
### 译文

[en]: <> (*Letter-spacing*, also called tracking, refers to the uniform adjustment of the space between letters in a piece of text.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/letterspacing.png)

</figure>

[en]: <> (Larger type sizes, such as headlines, use tighter letter-spacing to improve readability and reduce space between letters.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/readability-tight-tracking.png)

<figcaption>

[en]: <> (Tighter letter-spacing)
译文

</figcaption></figure>

[en]: <> (For smaller type sizes, looser letter spacing can improve readability as more space between letters increases contrast between each letter shape. Text in all caps, even at small type sizes, has improved readability because of its added letter spacing.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/readability-looser-tracking.png)

<figcaption>

[en]: <> (Looser letter spacing)
译文

</figcaption></figure>

[en]: <> (Tabular figures)
#### 译文

[en]: <> (Use tabular figures \(also known as monospaced numbers\), rather than proportional digits, in tables or places where values may change often.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/readability-tabular-figures.png)

<figcaption>

[en]: <> (Tabular figures keep values optically aligned for better scanning.)
译文

</figcaption></figure>

[en]: <> (Line length)
### 译文

[en]: <> (Line lengths for body text are usually between 40 to 60 characters. In areas with wider line lengths, such as desktop, longer lines that contain up to 120 characters will need an increased line height from 20sp to 24sp.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/readability-ideal-linelength.png)

<figcaption>

[en]: <> (The ideal line length is 40-60 characters per line for English body text.)
译文

</figcaption></figure><figure>

![]({assets_path}/typography/understanding-typography/readability-short-linelength.png)

<figcaption>

[en]: <> (The ideal line length for short lines of English text is 20-40 characters per line.)
译文

</figcaption></figure>

[en]: <> (Line height)
### 译文

[en]: <> (Line height, also known as leading, controls the amount of space between baselines in a block of text. A text’s line height is proportional to its type size.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/readability-line-height.png)

<figcaption>

[en]: <> (Type size 14, Line-height 20dp)
[en]: <> (Type size 20, Line-height 28dp)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Paragraph spacing)
### 译文

[en]: <> (Keep paragraph spacing in the range between .75x and 1.25x of the type size.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/paragraph-spacing.png)

<figcaption>

[en]: <> (Type size 20sp, line-height 30dp, paragraph spacing 28dp)
译文

</figcaption></figure>

[en]: <> (Type alignment)
### 译文

[en]: <> (Type alignment controls how text aligns in the space it appears. There are three type alignments:)
译文

[en]: <> (Left-aligned: when text is aligned to the left margin)
[en]: <> (Right-aligned: when text is aligned to the right margin)
[en]: <> (Centered: when text is aligned to the center of the area it is set in)
* 译文
* 译文
* 译文

[en]: <> (Left-aligned)
#### 译文

[en]: <> (Left-aligned text is the most common setting for left-to-right languages such as English.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/typealign-left.png)

<figcaption>

[en]: <> (Left-aligned text applied to body copy)
译文

</figcaption></figure>

[en]: <> (Right-aligned)
#### 译文

[en]: <> (Right-aligned text is the most common setting for right-to-left languages, such as Arabic and Hebrew.)
译文

[en]: <> (Left-to-right languages can use right-aligned text, though it is best for distinguishing short typographic elements within a layout \(such as side notes\), and is not recommended for long copy.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/typealign-right.png)

<figcaption>

[en]: <> (Right-aligned text applied to a side note)
译文

</figcaption></figure>

[en]: <> (Centered)
#### 译文

[en]: <> (Centered text is best used to distinguishing short typographic elements within a layout \(such as pull quotes\), and is not recommended for long copy.)
译文

<figure>

![]({assets_path}/typography/understanding-typography/typealign-center.png)

<figcaption>

[en]: <> (Center-aligned text applied to a pull quote)
译文

</figcaption></figure>

[en]: <> (System fonts)
<h2 id="system-fonts">译文</h2>

[en]: <> (System fonts come pre-installed on your computer or device. They typically have wide language support and no licensing costs for developers. Using the system default font in your app font unites the consistency of the platform with your app’s look and feel. However, because they appear in many places on devices, they may not stand out.)
译文

[en]: <> (Using system fonts)
### 译文

[en]: <> (Native system typefaces should be used for large blocks of text and any text below 14sp.)
译文

[en]: <> (Roboto is the default system font for Android. For platforms outside of Android and web products, use a system typeface that is preferred on that platform. For example, iOS applications should use Apple’s San Francisco font.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/typography/understanding-typography/system-fonts-android-roboto.png)

<figcaption>

[en]: <> (Android)
#### 译文

[en]: <> (Roboto system font)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/typography/understanding-typography/system-fonts-ios-sf.png)

<figcaption>

[en]: <> (iOS)
#### 译文

[en]: <> (San Francisco system font)
译文

</figcaption></figure></div></div></div>
