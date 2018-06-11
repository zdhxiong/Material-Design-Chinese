<div class="article__intro">

[en]: <> (Bidirectionality)
# 可用性

[en]: <> (UIs for languages that are read from right-to-left \(RTL\), such as Arabic and Hebrew, should be mirrored to ensure content is easy to understand.)
译文

<nav>

[en]: <> (Mirroring layout)
[en]: <> (Mirroring elements)
[en]: <> (Localization)
* [译文](#mirroring-layout)
* [译文](#mirroring-elements)
* [译文](#localization)

</nav></div><div class="article__body">

[en]: <> (Mirroring layout)
<h2 id="mirroring-layout">译文</h2>

[en]: <> (The main difference between left-to-right \(LTR\) and right-to-left \(RTL\) language scripts is the direction in which content is displayed:)
译文

[en]: <> (LTR languages display content from left to right)
[en]: <> (RTL languages display content from right to left)
* 译文
* 译文

[en]: <> (RTL content also affects the direction in which some icons and images are displayed, particularly those depicting a sequence of events.)
译文

[en]: <> (In general, the passage of time is depicted as left to right for LTR languages, and right to left for RTL languages.)
译文

[en]: <> (Element     | LTR                                                           | RTL)
[en]: <> (---------   |----------                                                     |---------)
[en]: <> (Text        | Sentences are read from left to right.                        | Sentences are read from right to left.)
[en]: <> (Timeline    | An illustrated sequence of events progresses left to right.   | An illustrated sequence of events progresses right to left.)
[en]: <> (Imagery     | An arrow pointing left to right indicates forward motion: →   | An arrow pointing right to left indicates forward motion: ←)

译文     | 译文     | 译文
--------|----------|----------
译文     | 译文     | 译文
译文     | 译文     | 译文
译文     | 译文     | 译文

[en]: <> (When a UI is changed from LTR to RTL \(or vice-versa\), it’s often called mirroring. An RTL layout is the mirror image of an LTR layout, and it affects layout, text, and graphics.)
译文

[en]: <> (When a UI changes from one direction to another, these items are not mirrored:)
译文

[en]: <> (Numbers)
[en]: <> (Untranslated text \(even if it’s part of a phrase\))
* 译文
* 译文

[en]: <> (Text should always be in the correct direction for the language it’s in. For example, any LTR words, such as a URL, will continue to be shown in an LTR format, even if the rest of the UI is in RTL.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-mirroring-do.png)

<figcaption>

{do}

[en]: <> (Text and numbers should always be in the correct direction for the language.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-mirroring-dont-typed.png)

<figcaption>

{dont}

[en]: <> (LTR text shouldn’t be displayed in reverse order.)
译文

</figcaption></figure></div></div>

[en]: <> (When a UI is mirrored, these changes occur:)
译文

[en]: <> (Text fields icons are displayed on the opposite side of a field)
[en]: <> (Navigation buttons are displayed in reverse order)
[en]: <> (Icons that communicate direction, like arrows, are mirrored)
[en]: <> (Text \(if it is translated to an RTL language\) is aligned to the right)
* 译文
* 译文
* 译文
* 译文

[en]: <> (These items are not mirrored:)
译文

[en]: <> (Icons that don’t communicate direction, such as a camera)
[en]: <> (Numbers, such as those on a clock and phone numbers)
[en]: <> (Charts and graphs)
* 译文
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-mirror1.png)

<figcaption>

[en]: <> (An English UI in LTR)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-mirror2.png)

<figcaption>

[en]: <> (An Arabic UI in RTL, with numbers presented in LTR)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/usability/index/usability-bidirectionality-mirror-redlines-ltr.png)

<figcaption>

[en]: <> (Text editing actions in LTR)
译文

</figcaption></figure><figure>

![]({assets_path}/usability/index/usability-bidirectionality-mirror-redlines-rtl.png)

<figcaption>

[en]: <> (Text editing actions in RTL)
译文

[en]: <> (Icons related to bidirectionality are mirrored to reflect the start and end of a line of text)
1. 译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-components-tabs-usage-specs1.png)

<figcaption>

[en]: <> (*LTR screen*)
*译文*

[en]: <> (On an LTR screen, the tab for “Item One” is aligned to the left, and users swipe to the left to see more tabs.)
译文

[en]: <> (Touch target height: 48dp<br>Screen edge margin before first tab: 72dp<br>Tab labels bottom padding: 20dp<br>Tab labels right and left padding: 12dp)
译文<br>译文<br>译文<br>译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-components-tabs-usage-specs2.png)

<figcaption>

[en]: <> (*RTL screen*)
*译文*

[en]: <> (On an RTL screen, the tab for “Item One” is aligned to the right, and users swipe to the right to see more tabs.)
译文

[en]: <> (Touch target height: 48dp<br>Screen edge margin before first tab: 72dp<br>Tab labels bottom padding: 20dp<br>Tab labels right and left padding: 12dp)
译文<br>译文<br>译文<br>译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-mirroring5.png)

<figcaption>

[en]: <> (LTR screen)
*译文*

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-mirroring5-farsi.png)

<figcaption>

[en]: <> (*RTL screen*)
*译文*

[en]: <> (Title, icons, and UI elements are displayed flowing from right to left)
译文

[en]: <> (Back button points to the right)
[en]: <> (Text is right-aligned)
[en]: <> (Primary and secondary buttons are mirrored to match reading direction)
[en]: <> (Checkbox appears to the right of text)
[en]: <> (Icons that do not communicate direction are not changed)
[en]: <> (Placement of units may vary across languages)
[en]: <> (Progress bars fill in the same direction as content is read)
* 译文
* 译文
* 译文
* 译文
* 译文
* 译文
* 译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-components-overflow-usage-specs1.png)

<figcaption>

[en]: <> (*LTR*)
*译文*

[en]: <> (Navigation, overflow menu, and icons displayed left-to-right)
译文

[en]: <> (Icon padding from screen edge: 16dp<br>Title distance from screen edge: 72dp<br>Padding below title: 20dp<br>Navigation bar height: 56dp<br>Overflow menu padding: 16dp)
译文<br>译文<br>译文<br>译文<br>译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-components-overflow-usage-specs2.png)

<figcaption>

[en]: <> (*RTL*)
*译文*

[en]: <> (Navigation, overflow menu, and icons switch sides in the RTL layout)
译文

[en]: <> (Icon padding from screen edge: 16dp<br>Title distance from screen edge: 72dp<br>Padding below title: 20dp<br>Navigation bar height: 56dp<br>Overflow menu padding: 16dp)
译文<br>译文<br>译文<br>译文<br>译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-components-lists-keylines-two-1.png)

<figcaption>

[en]: <> (*LTR*)
*译文*

[en]: <> (Padding and margin around icons and text for LTR)
译文

[en]: <> (List item height: 72dp<br>Icon margin from left screen edge: 16dp<br>List item distance from left screen edge: 72dp)
译文<br>译文<br>译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-components-lists-keylines-two-2-farsi.png)

<figcaption>

[en]: <> (*RTL*)
*译文*

[en]: <> (When mirroring the layout, padding and margin around icons and text also switch placement to match RTL layouts.)
译文

[en]: <> (List item height: 72dp<br>Icon margin from right screen edge: 16dp<br>List item distance from right screen edge: 72dp)
译文<br>译文<br>译文

</figcaption></figure></div></div>

[en]: <> (Mirroring elements)
<h2 id="mirroring-elements">译文</h2>

[en]: <> (When text, layout, and iconography are mirrored to support right-to-left \(RTL\) UIs, anything that relates to time should be depicted as moving from right to left. For example, in a RTL layout, forward points to the left, and backwards points to the right.)
译文

[en]: <> (When to mirror)
### 译文

[en]: <> (The most important icons for mirroring are back and forward buttons. Back and forward navigation buttons are reversed.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when1.png)

<figcaption>

[en]: <> (LTR back button)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when2.png)

<figcaption>

[en]: <> (RTL back button)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when4.png)

<figcaption>

[en]: <> (LTR forward button)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when3.png)

<figcaption>

[en]: <> (RTL forward button)
译文

</figcaption></figure></div></div>

[en]: <> (An icon that shows forward movement should be mirrored.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when5.png)

<figcaption>

[en]: <> (In a LTR UI, a bicycle facing the right typically communicates a sense of moving forward.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when6.png)

<figcaption>

[en]: <> (In a RTL UI, a bicycle pointing to the left similarly communicates a sense of moving forward.)
译文

</figcaption></figure></div></div>

[en]: <> (Most RTL countries do not mirror slashes. Leave images with slashes as-is for RTL locales.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when7.png)

<figcaption>

{do}

[en]: <> (The LTR slash can indicate an off state for both LTR and RTL languages.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when8.png)

<figcaption>

{dont}

[en]: <> (An RTL off state doesn’t need an RTL slash.)
译文

</figcaption></figure></div></div>

[en]: <> (A volume icon with a slider at its right side should be mirrored. The slider should progress RTL, and the sound waves should emerge from the right.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when9.png)

<figcaption>

[en]: <> (LTR volume with slider)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when10.png)

<figcaption>

[en]: <> (RTL volume with speaker icon and slider mirrored)
译文

</figcaption></figure></div></div>

[en]: <> (Sometimes, both the horizontal and circular direction of time are implied in an icon. For example, the redo and undo buttons in Google Docs have both a horizontal direction and a circular direction.)
译文

[en]: <> (In LTR, these point to the same direction in both circular and horizontal representations of time. In RTL, choose whether to show circular or horizontal direction.)
译文

<figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when13.png)

<figcaption>

[en]: <> (LTR redo and undo button from the toolbar in Google Docs)
译文

</figcaption></figure>

[en]: <> (Icons that contain representations of text need careful mirroring.)
译文

[en]: <> (Text is right-aligned in RTL. If there is a paragraph indent at the beginning of a paragraph, an unfinished line at the end of the paragraph, or a ragged right side, the icons need to be mirrored.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when14.png)

<figcaption>

[en]: <> (LTR chat icon)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-when15.png)

<figcaption>

[en]: <> (RTL chat icon)
译文

</figcaption></figure></div></div>

[en]: <> (When not to mirror)
### 译文

[en]: <> (While the linear representation of time is mirrored in RTL, the circular direction of time is not. Clocks still turn clockwise for RTL languages. A clock icon or a circular refresh or progress indicator with an arrow pointing clockwise should not be mirrored.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-whennot1.png)

<figcaption>

[en]: <> (The refresh icon shows time moving forward; the direction is clockwise. The icon is not mirrored.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-whennot2.png)

<figcaption>

[en]: <> (The history icon points backwards in time; the direction is counterclockwise. The icon is not mirrored.)
译文

</figcaption></figure></div></div>

[en]: <> (Some icons refer to physical objects that are not mirrored in a right-to-left UI.)
译文

[en]: <> (For example, physical keyboards look the same everywhere, so they should not be mirrored.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-whennot3.png)

<figcaption>

[en]: <> (Keyboard icon)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-whennot4.png)

<figcaption>

[en]: <> (Headset icon)
译文

</figcaption></figure></div></div>

[en]: <> (Certain icons might seem directional but they actually represent holding an object with one’s right hand.)
译文

[en]: <> (For example, the search icon typically has its handle at the bottom right side, because the majority of users are right-handed.)
译文

[en]: <> (The majority of users in RTL-writing countries are also right-handed, so such icons should not be mirrored.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-whennot5.png)

<figcaption>

[en]: <> (Search icon)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-whennot6.png)

<figcaption>

[en]: <> (Local cafe icon)
译文

</figcaption></figure></div></div>

[en]: <> (The passage of time)
### 译文

[en]: <> (Anything depicting the passage of time should be mirrored.)
译文

[en]: <> (Do not mirror media playback buttons and the media progress indicator as they refer to the direction of tape being played, not the direction of time.)
译文

<figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-whennot7.png)

<figcaption>

[en]: <> (Since media playback buttons and the progress indicator reflect the direction of the tape, they are not mirrored.)
译文

</figcaption></figure><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-whennot-do.png)

<figcaption>

{do}

[en]: <> (Media controls for playback are always LTR.)
译文

</figcaption></figure><figure>

![]({assets_path}/usability/index/usability-bidirectionality-guidelines-whennot-dont.png)

<figcaption>

{dont}

[en]: <> (Do not mirror media playback or progress bars. The direction of these elements represents the direction of the tape, not the direction of time.)
译文

</figcaption></figure>

[en]: <> (Localization)
<h2 id="localization">译文</h2>

[en]: <> (Text in graphics)
### 译文

[en]: <> (Graphics that include text usually require localization.)
译文

[en]: <> (Numbers)
### 译文

[en]: <> (Numbers, including icons containing numbers, must be localized for languages that use different numerals. For example, Bengali, Marathi, Nepali, and some Arabic-speaking locales use different forms of numbers.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-other1.png)

<figcaption>

[en]: <> (An icon in LTR containing a number)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/usability/index/usability-bidirectionality-other2.png)

<figcaption>

[en]: <> (An RTL icon in Arabic)
译文

</figcaption></figure></div></div>

[en]: <> (Mirroring)
### 译文

[en]: <> (Sometimes content may need to be mirrored, even if the UI is not mirrored. For example, when a user edits an RTL paragraph inside a LTR document, the toolbar buttons for the RTL text should be in RTL.)
译文

<figure>

![]({assets_path}/usability/index/usability-bidirectionality-other3.png)

<figcaption>

[en]: <> (In this RTL paragraph inside a LTR document, the buttons for indenting and lists should be RTL even though the primary UI direction is LTR.)
译文

[en]: <> (Paragraph aligned right)
[en]: <> (Icons flipped)
[en]: <> (Hebrew text direction is RTL)
1. 译文
2. 译文
3. 译文

</figcaption></figure></div>
