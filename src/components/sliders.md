<div class="article__intro">

[en]: <> (Sliders)
# 滑块

[en]: <> (Sliders allow users to make selections from a range of values.)
译文

<figure>

![]({assets_path}/components/sliders/sliders-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Continuous slider)
[en]: <> (Discrete slider)
[en]: <> (Spec)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#continuous-slider)
* [译文](#discrete-slider)
* [译文](#spec)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Sliders reflect a range of values along a bar, from which users may select a single value. They are ideal for adjusting settings such as volume, brightness, or applying image filters.)
译文

[en]: <> (Sliders can have icons on both ends of the bar that reflect a range of values.)
译文

[en]: <> (Immediate effects)
#### 译文

[en]: <> (Changes made with sliders are immediate, allowing a user to make slider adjustments until finding their preference. They shouldn’t be paired with settings that have even minor delays in providing user feedback.)
译文

[en]: <> (Current state)
#### 译文

[en]: <> (Sliders reflect the current state of the settings they control.)

</div><div class="mdui-col"><figure>

![]({assets_path}/components/sliders/sliders-usage-howtouse.png)

</figure></div></div>

[en]: <> (Values)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Editable numeric values)
#### 译文

[en]: <> (Editable numeric values allow users to set the exact value of a slider.)
译文

[en]: <> (Upon pressing the thumb or the value indicator field, the value indicator input becomes editable for text entry. The thumb position immediately is updated to match any change in value.)
译文

[en]: <> (Order of values)
#### 译文

[en]: <> (For languages that are displayed from left-to-right, such as English, the smallest value for the range appears on the left and the largest value appears on the right.)
译文

[en]: <> (For right-to-left languages, like Arabic, this placement would be switched \(with the largest value on the left, and the smallest on the right\).)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/components/sliders/sliders-continuousslider-editablenumeric.png)

<figcaption>

[en]: <> (A slider with an editable numeric value)
译文

</figcaption></figure></div></div>

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/sliders/sliders-illos-01.png)

<figcaption>

[en]: <> (Adjustable)
#### 译文

[en]: <> (Sliders should only be used for choosing selections from a range of values.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sliders/sliders-illos-02.png)

<figcaption>

[en]: <> (Immediate)
#### 译文

[en]: <> (When interacting with a slider, changes should be represented immediately.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/sliders/sliders-illos-03.png)

<figcaption>

[en]: <> (Accessible)
#### 译文

[en]: <> (Sliders should provide the full range of choices available for the user to select from.)
译文

</figcaption></figure></div></div>

[en]: <> (Types)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Continuous sliders)
#### 译文

[en]: <> (Continuous sliders allow users to select a value along a subjective range.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/components/sliders/sliders-usage-whentouse-continuous.png)

<figcaption>

[en]: <> (Continuous slider)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Discrete sliders)
#### 译文

[en]: <> (Discrete sliders can be adjusted to a specific value by referencing its value indicator.)
译文

[en]: <> (Possible selections may be organized through the use of tick marks, which a slider thumb will snap to \(or to which an input will round up or down\).)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/components/sliders/sliders-usage-whentouse-discrete.png)

<figcaption>

[en]: <> (Discrete slider)
译文

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/sliders/sliders-layout-elements.png)

</figure></div><div class="mdui-col">

[en]: <> (A slider can contain the following elements:)
译文

[en]: <> (*Track*<br>The track shows the range available for user selection. The smallest value of a range is on the far left, and the largest value on the far right.)
[en]: <> (*Thumb*<br>The thumb slides along the track, displaying the selected value through its position.)
[en]: <> (*Value label \(optional\)*<br>A value label displays the currently selected, specific numerical value.)
[en]: <> (*Tick mark \(optional\)*<br>Tick marks represent predetermined values to which the user can move the slider.)
* *译文*<br>译文
* *译文*<br>译文
* *译文*<br>译文
* *译文*<br>译文

</div></div>

[en]: <> (Continuous slider)
<h2 id="continuous-slider">译文</h2>

[en]: <> (Use continuous sliders allow users to make meaningful selections that don’t require a specific value.)
译文

[en]: <> (Behavior)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sliders/06-sliders-focus-cursor-drag-v02.mp4" src="{assets_path}/components/sliders/06-sliders-focus-cursor-drag-v02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Click and drag)
#### 译文

[en]: <> (This continuous slider is controlled by clicking the thumb and dragging it.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sliders/08-sliders-cursor-jump.mp4" src="{assets_path}/components/sliders/08-sliders-cursor-jump.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Click jump)
#### 译文

[en]: <> (This continuous slider is controlled by clicking the track.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sliders/04-sliders-focus-cursor-tab.mp4" src="{assets_path}/components/sliders/04-sliders-focus-cursor-tab.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Click and arrow)
#### 译文

[en]: <> (This continuous slider is controlled by clicking the thumb, then using arrow keys to move it.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sliders/01-sliders-tab-arrow-focus.mp4" src="{assets_path}/components/sliders/01-sliders-tab-arrow-focus.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tab and arrow)
#### 译文

[en]: <> (This continuous slider is controlled by using the tab key to select the thumb of the desired slider, then using arrow keys to move it.)
译文

</figcaption></figure></div></div>

[en]: <> (States)
### 译文

[en]: <> (Continuous sliders have normal, focused, click, and disabled states.)
译文

<figure>

![]({assets_path}/components/sliders/sliders-continuousslider-states2.png)

<figcaption>

[en]: <> (Slider states)
译文

</figcaption></figure>

[en]: <> (Discrete slider)
<h2 id="discrete-slider">译文</h2>

[en]: <> (Discrete sliders display a numeric value label upon pressing the thumb, which allows a user to input an exact value.)
译文

[en]: <> (Behavior)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sliders/07-sliders-focus-discreet-cursor-drag-v03.mp4" src="{assets_path}/components/sliders/07-sliders-focus-discreet-cursor-drag-v03.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Click and drag)
#### 译文

[en]: <> (This discrete slider is controlled by clicking the thumb and dragging it.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sliders/09-sliders-discreet-cursor-jump.mp4" src="{assets_path}/components/sliders/09-sliders-discreet-cursor-jump.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Click jump)
#### 译文

[en]: <> (This discrete slider is controlled by clicking the track.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sliders/05-sliders-focus-discreet-cursor-tab-v03.mp4" src="{assets_path}/components/sliders/05-sliders-focus-discreet-cursor-tab-v03.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Click and arrow)
#### 译文

[en]: <> (This discrete slider is controlled by clicking the thumb, then using arrow keys to move it.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sliders/03-sliders-arrow-focus-discreet.mp4" src="{assets_path}/components/sliders/03-sliders-arrow-focus-discreet.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tab and arrow)
#### 译文

[en]: <> (This discrete slider is controlled by using the tab key to select the thumb of the desired slider, then arrow keys to move it.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sliders/sliders-tick-marks-v02.mp4" src="{assets_path}/components/sliders/sliders-tick-marks-v02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tick marks \(Optional\))
#### 译文

[en]: <> (Discrete sliders can use evenly spaced tick marks along the slider track, and the thumb will snap to them. Each tick mark should change the setting in increments that are discernible to the user.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/sliders/sliders-value-entry-v01.mp4" src="{assets_path}/components/sliders/sliders-value-entry-v01.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Value entry field \(Optional\))
#### 译文

[en]: <> (Value entry fields become editable after selecting the thumb or entry field. After a text entry is made, the slider position automatically updates to reflect the new value.)
译文

</figcaption></figure></div></div>

[en]: <> (States)
### 译文

[en]: <> (Discrete sliders have normal, focused, click, and disabled states.)
译文

<figure>

![]({assets_path}/components/sliders/sliders-discreteslider-states2.png)

<figcaption>

[en]: <> (Discrete slider states)
译文

</figcaption></figure>

[en]: <> (Spec)
<h2 id="spec">译文</h2>

[en]: <> (Continuous sliders)
#### 译文

<figure>

![]({assets_path}/components/sliders/sliders-spec-continuous.png)

</figure>

[en]: <> (Discrete sliders)
译文

<figure>

![]({assets_path}/components/sliders/sliders-spec-discrete.png)

</figure><figure>

![]({assets_path}/components/sliders/sliders-spec-discrete-range.png)

</figure></div>
