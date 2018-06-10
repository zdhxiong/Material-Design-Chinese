<div class="article__intro">

[en]: <> (Image lists)
# 译文

[en]: <> (Image lists display a collection of images in an organized grid.)
译文

<figure>

![]({assets_path}/components/image-lists/hero-gridlist.png)

</figure>

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Types)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#types)
* [译文](#theming)
* [译文](#specs)

</nav>

</div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Image lists represent a collection of items in a repeated pattern. They help improve the visual comprehension of the content they hold.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col">

<figure>

![]({assets_path}/components/image-lists/gridlist-illos-01.png)

<figcaption>

[en]: <> (Visual)
#### 译文

[en]: <> (Image lists allow users to scan content based on images.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/image-lists/gridlist-illos-03.png)

<figcaption>

[en]: <> (Comparable)
#### 译文

[en]: <> (Image lists allow users to easily compare items within a collection.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/image-lists/gridlist-illos-04.png)

<figcaption>

[en]: <> (Integrated)
#### 译文

[en]: <> (Image lists are responsively integrated with the surrounding content and layout.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Types)
### 译文

<figure>

![]({assets_path}/components/image-lists/grid-diagram.png)

<figcaption>

[en]: <> (*Standard image lists* are best for items of equal importance. They have a uniform container size, ratio, and padding.)
[en]: <> (*Quilted image lists* emphasize certain items over others in a collection. They create hierarchy using varied container sizes and ratios.)
[en]: <> (*Woven image lists* facilitate the browsing of peer content. They display content in containers of varying ratios to create a rhythmic layout.)
[en]: <> (*Masonry image lists* facilitate the browsing of uncropped peer content. Container heights are sized based on the image size.)
1. 译文
2. 译文
3. 译文
4. 译文

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

[en]: <> (Image lists are comprised of containers that are set at a certain aspect ratio. Each item in an image list can display optional text and iconography below or above the image container.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/image-lists/elements.png)

</figure>

</div><div class="mdui-col">

[en]: <> (*Image container*<br>The image container displays an image list item’s image or illustration.)
[en]: <> (*Text labels \(optional\)*<br>Text labels display one line of text related to an image list item.)
[en]: <> (*Actionable iconography \(optional\)*<br>Actionable iconography can represent related actions.)
[en]: <> (*Text protection \(optional\)*<br>Text protection is a semi-opaque scrim placed in front of imagery to keep text above it legible.)
[en]: <> (*Image list item*<br>Image list items represent individual items in an image list.)
1. *译文*<br>译文
2. *译文*<br>译文
3. *译文*<br>译文
4. *译文*<br>译文
5. *译文*<br>译文

</div></div>

[en]: <> (Padding)
### 译文

[en]: <> (Padding can vary between images in an image list. The following padding values are recommended: 1, 2, 4, 8, 16, 20, 24, 32 dp.)
译文

<figure>
<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/image-lists/custom-02-layout.mp4" src="{assets_path}/components/image-lists/custom-02-layout.mp4" type="video/mp4">
</video>
</figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Actions)
### 译文

[en]: <> (Image lists items may be tapped, dragged, filtered, or sorted.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/image-lists/imagelist-behavior-tap.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-tap.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Tapping an image list item displays more detail about that item.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/image-lists/imagelist-behavior-filtered.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-filtered.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Image list content can be filtered or sorted by date, file size, alphabetical order, or other parameters.)
译文

</figcaption>

</figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/image-lists/imagelist-behavior-dragged.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-dragged.mp4" type="video/mp4">
</video>

<figcaption>

{caution}

[en]: <> (You can drag an image list item to reorder it, but this interaction should be disabled if images are sorted or filtered.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/image-lists/imagelist-behavior-swipe-dont.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-swipe-dont.mp4" type="video/mp4">
</video>

<figcaption>

{dont}

[en]: <> (Don’t allow swipe gestures on individual image list items. Image lists should be perceived as a group.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Layout grid)
### 译文

[en]: <> (Defined layout)
#### 译文

[en]: <> (Image list column structures don’t need to align to the layout grid. Only the perimeter of the image list itself needs to align to the layout grid.)
译文

<figure>

![]({assets_path}/components/image-lists/composition-01d.png)

<figcaption>

[en]: <> (An image list spanning eight columns of the layout grid, with 16dp padding)
译文

</figcaption></figure>

[en]: <> (Alignment with other components)
#### 译文

[en]: <> (Image lists can be placed adjacent to other components in the layout grid.)
译文

<figure>

![]({assets_path}/components/image-lists/composition-02.png)

<figcaption>

[en]: <> (An image list spanning three columns of the layout grid, with 8dp padding)
译文

</figcaption></figure>

[en]: <> (Responsive)
#### 译文

[en]: <> (Image lists inherit the responsive behavior of the layout grid.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/image-lists/composition-03.mp4" src="{assets_path}/components/image-lists/composition-03.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Image lists respond to the responsive layout grid.)
译文

</figcaption>

</figure>

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/image-lists/composition-04.mp4" src="{assets_path}/components/image-lists/composition-04.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Image lists are fixed to the layout grid.)
译文

</figcaption>

</figure>

[en]: <> (Scrolling)
### 译文

[en]: <> (Image lists can scroll vertically or horizontally. All items in an image list must scroll together as a collection. Image cropping can be used to indicate scroll direction.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/image-lists/imagelist-behavior-scrolling-vert.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-scrolling-vert.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Image list items scroll together.)
译文

</figcaption>

</figure>

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/image-lists/imagelist-behavior-scrolling-horz.mp4" src="{assets_path}/components/image-lists/imagelist-behavior-scrolling-horz.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Image lists can scroll horizontally.)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Types)
<h2 id="types">译文</h2>

[en]: <> (Standard image list)
### 译文

[en]: <> (Standard image lists are best for items of equal importance. They have a uniform container size, ratio, and padding.)
译文

<figure>

![]({assets_path}/components/image-lists/hero-gridlist-standard.png)

</figure>

<figure>

![]({assets_path}/components/image-lists/standard-usage-01.png)

<figcaption>

[en]: <> (Standard image lists can be displayed with or without text labels.)
译文

[en]: <> (image list with images only)
[en]: <> (image list with images and text labels)
1. 译文
2. 译文

</figcaption></figure>

<figure>

![]({assets_path}/components/image-lists/standard-usage-02.png)

<figcaption>

[en]: <> (In compact layouts, labels can appear above the image container using an image treatment that provides text protection to ensure legibility.)
译文

</figcaption></figure>

[en]: <> (Quilted image list)
### 译文

[en]: <> (Quilted image lists emphasize certain items over others in a collection. They use varied container sizes and ratios to create hierarchy across images.)
译文

<figure>

![]({assets_path}/components/image-lists/hero-gridlist-quilted.png)

</figure>

<figure>

![]({assets_path}/components/image-lists/quilt-usage-02-dont.png)

<figcaption>

{dont}

[en]: <> (Quilted image lists shouldn’t display text below the image container, as it disrupts the layout.)
译文

</figcaption></figure>

[en]: <> (Woven image list)
### 译文

[en]: <> (Woven image lists use alternating container ratios to create a rhythmic layout. A woven image list is best for browsing peer content.)
译文

<figure>

![]({assets_path}/components/image-lists/hero-gridlist-weaved.png)

</figure>

[en]: <> (Masonry image list)
### 译文

[en]: <> (Masonry image lists use dynamically sized container heights that reflect the aspect ratio of each image. This image list is best used for browsing uncropped peer content.)
译文

<figure>

![]({assets_path}/components/image-lists/hero-gridlist-masonry.png)

</figure>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Crane Material Theme)
### 译文

[en]: <> (This travel app’s image lists have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/image-lists/imagelist-crane-ahero.png)

<figcaption>

[en]: <> (Crane’s customized image list)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Crane’s image list text uses custom color.)
译文

<figure>

![]({assets_path}/components/image-lists/imagelist-crane-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Surface       | Surface       | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Text          | On Surface    | Color<br>Opacity   | #000000<br>87%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Crane’s image list text uses custom typography.)
译文

<figure>

![]({assets_path}/components/image-lists/imagelist-crane-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Subtitle 1  | Typeface<br>Font<br>Size<br>Case   | Raleway<br>Medium<br>16<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Crane’s image lists have custom corner shapes on image containers.)
译文

<figure>

![]({assets_path}/components/image-lists/imagelist-crane-shape.png)

</figure>

[en]: <> (Element           | Attribute                                                                          | Value)
[en]: <> (---------         |---------                                                                           |------)
[en]: <> (Image container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 4dp<br>Rounded 4dp<br>Rounded 4dp<br>Rounded 4dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Owl Material Theme)
### 译文

[en]: <> (This education app’s image list text has been customized using Material Theming.)
译文

<figure>

![]({assets_path}/components/image-lists/imagelist-owl-ahero.png)

<figcaption>

[en]: <> (Owl’s customized image list.)
译文

</figcaption></figure>

[en]: <> (Typography)
#### 译文

[en]: <> (Owl’s image list text uses custom typography.)
译文

<figure>

![]({assets_path}/components/image-lists/imagelist-owl-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Subtitle 1  | Typeface<br>Font<br>Size<br>Case   | Rubik<br>Medium<br>16<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shrine Material Theme)
### 译文

[en]: <> (This retail app’s image lists have been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/image-lists/imagelist-shrine-ahero.png)

<figcaption>

[en]: <> (Shrine’s customized image list)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Shrine’s image list text uses custom color.)
译文

<figure>

![]({assets_path}/components/image-lists/imagelist-shrine-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Surface       | Surface       | Color<br>Opacity   | #FFFBFA<br>100%)
[en]: <> (Text          | On Surface    | Color<br>Opacity   | #442C2E<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Shrine’s image list text uses custom typography.)
译文

<figure>

![]({assets_path}/components/image-lists/imagelist-shrine-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Subtitle 1  | Typeface<br>Font<br>Size<br>Case   | Raleway<br>Medium<br>16<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Standard)
#### 译文

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-standard.png)

</figure>

[en]: <> (Quilted)
#### 译文

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-quilted.png)

</figure>

[en]: <> (Masonry—mobile)
#### 译文

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-mobile-masonry.png)

</figure>

[en]: <> (Masonry—desktop)
#### 译文

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-desktop-masonry.png)

</figure>

[en]: <> (Masonry—tablet)
#### 译文

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-tablet-masonry.png)

</figure>

[en]: <> (Woven)
#### 译文

<figure>

![]({assets_path}/components/image-lists/specs-imagelist-woven.png)

</figure>
</div>
