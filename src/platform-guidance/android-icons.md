<div class="article__intro">

[en]: <> (Android icons)
# Android 图标

[en]: <> (Android O icons represent your app on a device's Home and All Apps screens.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Keyline shapes)
[en]: <> (Specs)
[en]: <> (OEM masks)
* [译文](#usage)
* [译文](#keyline-shapes)
* [译文](#specs)
* [译文](#oem-masks)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (The following guidelines describe how icons can receive unique visual treatments, animations, and behaviors.)
译文

[en]: <> (Providing icons)
### 译文

[en]: <> (Launcher icons are provided to the Google Play store, with the following requirements:)
译文

[en]: <> (Icon drawables in a PNG or vector format)
[en]: <> (Background and foreground layers without mask or background shadows)
[en]: <> (All layers must exceed the base icon shape by 50%)
* 译文
* 译文
* 译文

[en]: <> (The OEM requirements include:)
译文

[en]: <> (One shape for masking any icons that are displayed on an OEM’s platform)
[en]: <> (An outer shadow \(optional\))
* 译文
* 译文

[en]: <> (Keyline shapes)
<h2 id="keyline-shapes">译文</h2>

[en]: <> (Keyline shapes)
### 译文

[en]: <> (Keyline shapes are used across all app icons to maintain consistent visual proportions.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-icons/product-icons-android-01.png)

<figcaption>

[en]: <> (Square)
#### 译文

[en]: <> (Height: 44dp<br>Width: 44dp<br>Corner radius: 4dp)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-icons/product-icons-android-02.png)

<figcaption>

[en]: <> (Circle)
#### 译文

[en]: <> (Diameter: 52dp)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-icons/product-icons-android-01.png)

<figcaption>

[en]: <> (Vertical rectangle)
#### 译文

[en]: <> (Height: 52dp<br>Width: 36dp<br>Corner radius: 4dp)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-icons/product-icons-android-02.png)

<figcaption>

[en]: <> (Horizontal rectangle)
#### 译文

[en]: <> (Height: 36dp<br>Width: 52dp<br>Corner radius: 4dp)
译文

</figcaption></figure></div></div>

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Layers)
### 译文

[en]: <> (Icons consist of two layers: a foreground and a background. Each layer can animate and receive treatments independently from the other layer.)
译文

<figure>

![]({assets_path}/platform-guidance/android-icons/product-icons-android-09.png)

<figcaption><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Foreground \(scrolling parallax\))
#### 译文

[en]: <> (108 x 108 dp<br>72dp masked section<br>Transparency recommended \(optional\))
译文

</div><div class="mdui-col">

[en]: <> (Background \(subtler parallax\))
#### 译文

[en]: <> (108 X 108 dp<br>72dp masked section<br>Must be opaque)
译文

</div></div></figcaption></figure>

[en]: <> (Shadows)
### 译文

[en]: <> (When designing new icons, lighting and shadow effects should be consistent with other icons on the platform. Contact shadows are placed on elements to make them stand out from the background.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Illustrator mode: Normal)
译文

[en]: <> (Opacity: 20%)
译文

[en]: <> (X Offset: 0dp)
译文

[en]: <> (Y Offset: 4dp)
译文

[en]: <> (Blur: 4dp)
译文

[en]: <> (Color: Refer to tint, shade and shadow values)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-icons/product-icons-android-05.png)

<figcaption>

[en]: <> (A contact shadow is a soft shadow surrounding an element.)
译文

</figcaption></figure></div></div>

[en]: <> (Edge tint and shade)
### 译文

[en]: <> (To provide a sense of depth, treatments are applied to the top and bottom edges of elements.)
译文

[en]: <> (Tinted edges highlight the top edge of elements \(the left, right, and bottom edges are not tinted\))
[en]: <> (Shaded edges display dark bottom edges on elements \(the left, right, and top edges are not shaded\))
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-icons/product-icons-android-07.png)

<figcaption>

[en]: <> (Tinted edge)
译文

[en]: <> (Height: 1dp<br>Opacity: 20%<br>Color: White \(#FFFFFF\))
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-icons/product-icons-android-08.png)

<figcaption>

[en]: <> (Shaded edge)
译文

[en]: <> (Height: 1dp<br>Opacity: 20%<br>Color: See tint, shade, and shadow values)
译文

</figcaption></figure></div></div>

[en]: <> (Finishing layer)
### 译文

[en]: <> (A finishing layer is placed above the foreground layer.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Specs)
#### 译文

[en]: <> (Angle: 45º)
[en]: <> (Midpoint: 32%)
[en]: <> (Color: Refer to tint, shade and shadow values)
* 译文
* 译文
* 译文

[en]: <> (Illustrator gradient tool     | Opacity      | Location)
[en]: <> (---------                     |----------    |---------)
[en]: <> (Slider 1                      | 10%          | 0%)
[en]: <> (Slider 2                      | 0%           | 100%)

译文     | 译文     | 译文
--------|----------|----------
译文     | 译文     | 译文
译文     | 译文     | 译文

</div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-icons/product-icons-android-06.png)

<figcaption>

[en]: <> (Finishing layer above foreground layer)
译文

</figcaption></figure></div></div>

[en]: <> (OEM masks)
<h2 id="oem-masks">译文</h2>

[en]: <> (Without affecting icon layout, OEMs can apply their own custom masks to icons using a 72 x 72 dp masked area. The convex shapes include both a circular mask and a square mask.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/platform-guidance/android-icons/product-icons-android-02.mp4" src="{assets_path}/platform-guidance/android-icons/product-icons-android-02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (OEM mask shapes)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/platform-guidance/android-icons/product-icons-android-03.mp4" src="{assets_path}/platform-guidance/android-icons/product-icons-android-03.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Final icon shapes)
译文

</figcaption></figure></div></div></div>
