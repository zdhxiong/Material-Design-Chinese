<div class="article__intro">

[en]: <> (Language support)
# 语言支持

[en]: <> (Language size and display style vary based on whether a character set is English-like, tall, or dense.)
译文

<nav>

[en]: <> (Language considerations)
[en]: <> (Noto guidance)
[en]: <> (Language categories reference)
* [译文](#language-considerations)
* [译文](#noto-guidance)
* [译文](#language-categories-reference)

</nav></div><div class="article__body">

[en]: <> (Language considerations)
<h2 id="language-considerations">译文</h2>

[en]: <> (Glyphs)
### 译文

[en]: <> (Each written language uses its own set of characters called glyphs.)
译文

[en]: <> (If your UI uses multiple languages, then your typography layout should vary depending on the language. Languages have different average word lengths and heights, affecting how it appears across UIs.)
译文

<figure>

![]({assets_path}/typography/language-support/15-b-language.png)

<figcaption>

[en]: <> (Typographic glyphs)
译文

</figcaption></figure>

[en]: <> (Length)
### 译文

[en]: <> (Word length can vary greatly across languages, even those that use similar glyphs, such as English and German.)
译文

<figure>

![]({assets_path}/typography/language-support/length.png)

<figcaption>

[en]: <> (English is often shorter than other European languages. For instance, German has many compound words that are longer, requiring more lines or line spacing.)
译文

</figcaption></figure>

[en]: <> (Alignment)
### 译文

[en]: <> (Some writing systems, like Arabic and Hebrew, are displayed with characters appearing from right to left. Those fonts may appear smaller than Latin ones at the same font-size, requiring adjustments to line spacing and alignment so that the typography works well in that UI for all languages.)
译文

<figure>

![]({assets_path}/typography/language-support/hebrew.png)

<figcaption>

[en]: <> (Hebrew alignment appears right to left)
译文

</figcaption></figure>

[en]: <> (Height)
### 译文

[en]: <> (Many writing systems require more vertical space than English, so your UI should provide sufficient vertical space for these different systems.)
译文

<figure>

![]({assets_path}/typography/language-support/language-support.png)

<figcaption>

[en]: <> (While Vietnamese is written with Latin, it has accents that add height to some letters, such as ớ.)
译文

</figcaption></figure>

[en]: <> (Vertical typesetting)
### 译文

[en]: <> (Vertical typesetting, though rarely used, can display characters vertically instead of horizontally.)
译文

[en]: <> (The typography of China, Japan, and Korea is typically monospaced, which means each letter occupies the same amount of space as other letters. It is often set left-to-right, top-to-bottom. It can also be set vertically: top-to-bottom and right-to-left.)
译文

<figure>

![]({assets_path}/typography/language-support/language-2.png)

<figcaption>

[en]: <> (Horizontal and vertical styles of typesetting)
译文

</figcaption></figure>

[en]: <> (Language options)
### 译文

[en]: <> (More than one typeface may need to be used in the same UI to display multilingual content, when each language uses a different writing system.)
译文

[en]: <> (Writing systems can be grouped into three categories:)
译文

[en]: <> (English-like)
[en]: <> (Tall)
[en]: <> (Dense)
* 译文
* 译文
* 译文

[en]: <> (English-like typefaces)
#### 译文

[en]: <> (The languages of Western, Central, and Eastern Europe and much of Africa are typically written in the Latin alphabet. Vietnamese is a notable exception in that, while it uses a localized form of the Latin writing system, its accented glyphs can be much taller than those found in Western European languages. The Greek and Cyrillic writing systems are very similar to Latin.)
译文

[en]: <> (Tall typefaces)
#### 译文

[en]: <> (Language scripts that require extra line height to accommodate larger glyphs, including South and Southeast Asian and Middle-Eastern languages, like Arabic, Hindi, Telugu, Thai, and Vietnamese.)
译文

[en]: <> (Dense typefaces)
#### 译文

[en]: <> (Language scripts that require extra line height to accommodate larger glyphs, including Chinese, Japanese, and Korean.)
译文

[en]: <> (Noto guidance)
<h2 id="noto-guidance">译文</h2>

[en]: <> (Noto is the default typeface for all languages not covered by Roboto. Derived from Droid, it’s designed to be visually harmonious across languages and scripts with compatible heights and stroke thicknesses.)
译文

[en]: <> (The family has 93 scripts defined in Unicode version 6.0.)
译文

[en]: <> (Dense script considerations)
### 译文

[en]: <> (Noto Chinese, Japanese, and Korean \(CJK\) have seven weights that match Roboto, with the same weight settings as English.)
译文

[en]: <> (Type sizes smaller than title styles should make adjustments to the Latin type scale.)
译文

<figure>

![]({assets_path}/typography/language-support/noto-dense.png)

<figcaption>

[en]: <> (Chinese and Japanese)
译文

</figcaption></figure>

[en]: <> (Line height is slightly larger than Latin-based characters.)
译文

<figure>

![]({assets_path}/typography/language-support/noto-pairing-dense.png)

<figcaption>

[en]: <> (Line height pairing, Chinese and Japanese)
译文

</figcaption></figure>

[en]: <> (Tall script considerations)
### 译文

[en]: <> (Noto supports tall scripts used in South and Southeast Asian and Middle Eastern languages, including Arabic, Hindi, and Thai. Use regular weight, as medium weight is unavailable in Noto. Avoid using the bold weight, as bold is too heavy.)
译文

[en]: <> (Type sizes smaller than title styles should make adjustments to the Latin type scale.)
译文

<figure>

![]({assets_path}/typography/language-support/noto-tall.png)

<figcaption>

[en]: <> (Thai and Devanagari)
译文

</figcaption></figure>

[en]: <> (Tall script line height is slightly larger than Latin-based characters.)
译文

<figure>

![]({assets_path}/typography/language-support/noto-pairing-tall.png)

<figcaption>

[en]: <> (Line height pairing example, Thai and Devanagari)
译文

</figcaption></figure>

[en]: <> (Language categories reference)
<h2 id="language-categories-reference">译文</h2>

[en]: <> (Language categories reference)
### 译文

[en]: <> (For ease of internationalization, Google has categorized languages into three categories: English-like, tall, and dense.)
译文

[en]: <> (English-like: Latin \(except Vietnamese\), Greek, Cyrillic, Hebrew, Armenian, and Georgian.)
译文

[en]: <> (Tall: Language scripts that require extra line height to accommodate larger glyphs, including South and Southeast Asian and Middle Eastern languages, like Arabic, Hindi, Telugu, Thai, and Vietnamese.)
译文

[en]: <> (Dense: Language scripts that require extra line height to accommodate larger glyphs but have different metrics from tall scripts. Includes Chinese, Japanese, and Korean.)
译文

代码     | 描述                              | 分类
--------|----------                         |----------
af      | Afrikaans                         | English-like
am      | Amharic                           | English-like
ar      | Arabic (Modern Standard)          | Tall
az      | Azerbaijani                       | English-like
bg      | Bulgarian                         | English-like
bn      | Bengali                           | Tall
ca      | Catalan                           | English-like
cs      | Czech                             | English-like
cy      | Welsh                             | English-like
da      | Danish                            | English-like
de      | German                            | English-like
el      | Greek                             | English-like
en      | English (US)                      | English-like
en-GB   | English (UK)                      | English-like
es      | Spanish (European)                | English-like
es-419  | Spanish (Latin American)          | English-like
et      | Estonian                          | English-like
eu      | Basque                            | English-like
fa      | Persian                           | Tall
fi      | Finnish                           | English-like
fil     | Filipino                          | English-like
fr      | French (European)                 | English-like
fr-CA   | French (Canadian)                 | English-like
gl      | Galician                          | English-like
gu      | Gujarati                          | Tall
hi      | Hindi                             | Tall
hr      | Croatian                          | English-like
hu      | Hungarian                         | English-like
hy      | Armenian                          | English-like
id      | Indonesian                        | English-like
is      | Icelandic                         | English-like
it      | Italian                           | English-like
iw      | Hebrew                            | English-like
ja      | Japanese                          | Dense
ka      | Georgian                          | English-like
kk      | Kazakh                            | English-like
km      | Khmer                             | Tall
kn      | Kannada                           | Tall
ko      | Korean                            | Dense
ky      | Kirghiz                           | English-like
lo      | Lao                               | Tall
lt      | Lithuanian                        | English-like
lv      | Latvian                           | English-like
mk      | Macedonian                        | English-like
ml      | Malayalam                         | Tall
mn      | Mongolian                         | English-like
mr      | Marathi                           | Tall
ms      | Malay                             | English-like
my      | Burmese (Myanmar)                 | Tall
ne      | Nepali                            | Tall
nl      | Dutch                             | English-like
no      | Norwegian (Bokmål)                | English-like
pa      | Punjabi                           | Tall
pl      | Polish                            | English-like
pt      | Portuguese (Brazilian)            | English-like
pt-PT   | Portuguese (European)             | English-like
ro      | Romanian                          | English-like
ru      | Russian                           | English-like
si      | Sinhala                           | Tall
sk      | Slovak                            | English-like
sl      | Slovenian                         | English-like
sq      | Albanian                          | English-like
sr      | Serbian (Cyrillic)                | English-like
sr-Latn | Serbian (Latin)                   | English-like
sv      | Swedish                           | English-like
sw      | Swahili                           | English-like
ta      | Tamil                             | Tall
te      | Telugu                            | Tall
th      | Thai                              | Tall
tr      | Turkish                           | English-like
uk      | Ukrainian                         | English-like
ur      | Urdu                              | Tall
uz      | Uzbek                             | English-like
vi      | Vietnamese                        | Tall
zh-CN   | Chinese (Simplified, Mandarin)    | Dense
zh-HK   | Chinese (Mandarin, Hong Kong)     | Dense
zh-TW   | Chinese (Traditional, Mandarin)   | Dense
zu      | Zulu                              | English-like

</div>
