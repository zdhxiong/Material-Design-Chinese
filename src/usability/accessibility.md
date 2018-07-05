<div class="article__intro">

[en]: <> (Accessibility)
# 无障碍

[en]: <> (Accessible design allows users of all abilities to navigate, understand, and use your UI successfully.)
译文

<nav>

[en]: <> (Understanding accessibility)
[en]: <> (Assistive technology)
[en]: <> (Composition)
[en]: <> (Color and contrast)
[en]: <> (Layout and typography)
[en]: <> (Writing)
[en]: <> (Sound and motion)
[en]: <> (Implementing accessibility)
* [译文](#understanding-accessibility)
* [译文](#assistive-technology)
* [译文](#composition)
* [译文](#color-contrast)
* [译文](#layout-typography)
* [译文](#writing)
* [译文](#sound-motion)
* [译文](#implementing-accessibility)

</nav></div><div class="article__body">

[en]: <> (Understanding accessibility)
<h2 id="understanding-accessibility">译文</h2>

[en]: <> (Improving your product’s accessibility enhances the usability for all users, including those with low vision, blindness, hearing impairments, cognitive impairments, motor impairments or situational disabilities \(such as a broken arm\).)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-illos-03.png)

</figure>

[en]: <> (Clear)
#### 译文

[en]: <> (Help users navigate your app by designing clear layouts with distinct calls to action.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-illos-01.png)

</figure>

[en]: <> (Robust)
#### 译文

[en]: <> (Design your app to accommodate a variety of users.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-illos-02.png)

</figure>

[en]: <> (Specific)
#### 译文

[en]: <> (Support assistive technologies specific to your platform, just as you support the input methods of touch, keyboard, and mouse.)
译文

</div></div>

[en]: <> (Mobile guidance)
#### 译文

[en]: <> (This section primarily applies to mobile UI design. For more information on designing and developing fully accessible products, visit the [Google accessibility site]\(https://www.google.com/accessibility/\).)
译文

[en]: <> (Assistive technology)
<h2 id="assistive-technology">译文</h2>

[en]: <> (Assistive technology helps increase, maintain, or improve the functional capabilities of individuals with disabilities, through devices like screen readers, magnification devices, wheelchairs, hearing aids, or memory aids. For example, ensure your Android app works with Google’s screen reader, [TalkBack]\(https://support.google.com/accessibility/android/answer/6283677?hl=en&amp;ref_topic=3529932\).)
译文

[en]: <> (Screen readers)
### 译文

[en]: <> (A user may be new to your product or use a text-only *screen reader* \(a program that reads text aloud or uses a braille display\). Your app should contain appropriate content labelling for those who experience a text-only version.)
译文

[en]: <> (Navigation methods)
#### 译文

[en]: <> (Screen readers give users multiple ways to navigate a screen, including:)
译文

[en]: <> (*Explore by touch*: Touch interface screen readers allow users to run their finger over the screen to hear what is directly underneath. This provides the user a quick sense of an entire interface. Or the user can quickly move to a UI element from muscle memory. In TalkBack, this feature is called “*explore by touch*”. To select an item, the user must double tap.)
[en]: <> (*Linear navigation*: Users may also move focus by swiping backwards or forwards on screen to read pages linearly, from top to bottom. This allows users to hone in on certain elements. In TalkBack, this is called linear navigation.)
* 译文
* 译文

[en]: <> (Users may switch between both “explore by touch” and “linear navigation” modes. Some assistive technologies allow users to navigate between page landmarks, such as headings, when these landmarks use the appropriate semantic markup.)
译文

[en]: <> (Directional controllers)
### 译文

[en]: <> (Hardware or software directional controllers \(such as a D-pad, trackball, or keyboard\) allow users to jump from selection to selection in a linear fashion.)
译文

[en]: <> (Composition)
<h2 id="composition">译文</h2>

[en]: <> (Your app should make it easy to navigate your UI, giving users confidence in knowing where they are in your app and what’s important. It should make it easy to understand important tasks, reinforcing information through multiple visual and textual cues like color, shape, text, and motion.)
译文

[en]: <> (Types of feedback)
#### 译文

[en]: <> (Apps should give users feedback and a sense of where they are in the app. Visual feedback \(such as labels, colors, and icons\) and touch feedback show users what is available in the UI.)
译文

[en]: <> (Navigation)
#### 译文

[en]: <> (Navigation should have clear task flows with minimal steps. Navigation controls should be easy to locate and clearly written. Focus control, or the ability to control keyboard and reading focus, should be implemented for frequently used tasks.)
译文

[en]: <> (Hierarchy)
### 译文

[en]: <> (Every added button, image, and line of text increase the complexity of a UI. You can simplify how your UI is understood by using:)
译文

[en]: <> (Clearly visible elements)
[en]: <> (Sufficient contrast and size)
[en]: <> (A clear hierarchy of importance)
[en]: <> (Key information that is discernable at a glance)
* 译文
* 译文
* 译文
* 译文

[en]: <> (Place items on the screen according to their relative level of importance.)
译文

[en]: <> (Important actions: Place important actions at the top or bottom of the screen \(reachable with shortcuts\).)
[en]: <> (Related items: Place related items of a similar hierarchy next to each other.)
* 译文
* 译文

<figure>

![]({assets_path}/usability/accessibility/accessibility-hierarchy-1-do.png)

<figcaption>

{do}

[en]: <> (By placing important actions at the top of the screen, they are given more importance in the hierarchy.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/usability/accessibility/accessibility-hierarchy-2-dont.png)

<figcaption>

{dont}

[en]: <> (When important actions are embedded within other content, it’s unclear what the most important elements are on the page.)
译文

</figcaption></figure>

[en]: <> (Focus order)
### 译文

[en]: <> (Input focus should follow the order of the visual layout, from the top to the bottom of the screen. It should traverse from the most important to the least important item. Determine the following focus points and movements:)
译文

[en]: <> (The order in which elements receive focus)
[en]: <> (The way in which elements are grouped)
[en]: <> (Where focus moves when the element in focus disappears)
* 译文
* 译文
* 译文

[en]: <> (Clarify where the focus exists through a combination of visual indicators and accessibility text.)
译文

<figure>

![]({assets_path}/usability/accessibility/accessibility-hierarchy-3.png)

<figcaption>

[en]: <> (The black circles indicate the order in which onscreen elements should receive focus.)
译文

</figcaption></figure>

[en]: <> (Grouping)
### 译文

[en]: <> (Group similar items under headings that communicate what the groupings are. These groups organize content spatially.)
译文

[en]: <> (Transitions)
### 译文

[en]: <> (Focus traversal between screens and tasks should be as continuous as possible. If a task is interrupted and then resumed, place focus on the element that was previously focused.)
译文

[en]: <> (Color and contrast)
<h2 id="color-contrast">译文</h2>

[en]: <> (Use color and contrast to help users see and interpret your app’s content, interact with the right elements, and understand actions.)
译文

[en]: <> (Accessible color)
### 译文

[en]: <> (Color can help communicate mood, tone, and critical information. Use color so that all users can understand the content is fundamental to accessible design. Choose primary, secondary, and accent colors for your app that support usability. Ensure sufficient color contrast between elements so that users with low vision can see and use your app.)
译文

[en]: <> (Material Design’s [Color Tool]\(https://material.io/tools/color/#!/?view.left=1&amp;view.right=0\) can help you choose colors with sufficient contrast between elements, so that all users can see and use your app.)
译文

[en]: <> (Contrast ratios)
### 译文

[en]: <> (The contrast ratio between a color and its background ranges from 1-21 based on its *luminance* \(the intensity of light emitted\) according to the World Wide Web Consortium \(W3C\).)
译文

[en]: <> (Contrast ratios represent how different a color is from another color, commonly written as 1:1 or 21:1. The higher the difference between the two numbers in the ratio, the greater the difference in relative luminance between the colors.)
译文

[en]: <> (The W3C recommends the following contrast ratios for body text and image text:)
译文

[en]: <> (Small text should have a contrast ratio of at least 4.5:1 against its background.)
[en]: <> (Large text \(at 14 pt bold/18 pt regular and up\) should have a contrast ratio of at least 3:1 against its background.)
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-color1-do.png)

<figcaption>

{do}

[en]: <> (These lines of text follow the color contrast ratio recommendations and are legible against their background colors.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-color2-dont.png)

<figcaption>

{dont}

[en]: <> (These lines of text don’t meet the color contrast ratio recommendations and are difficult to read against their background colors.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Icons or other critical elements should also use the above recommended contrast ratios.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-color3-do.png)

<figcaption>

{do}

[en]: <> (These icons follow the color contrast ratio recommendations and are legible against their backgrounds.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-color4-dont.png)

<figcaption>

{dont}

[en]: <> (These icons don’t follow the color contrast ratio recommendations and are difficult to discern against their backgrounds.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Logos and decorative elements)
### 译文

[en]: <> (While decorative elements \(such as logos or illustrations\) don’t have to meet contrast ratios, they should be distinguishable if they possess important functionality.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-color5-do.png)

<figcaption>

{do}

[en]: <> (Decorative logos that are distinguishable don’t have to meet contrast ratios.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-color6-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t necessary to distort your logo to meet contrast ratios.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Other visual cues)
### 译文

[en]: <> (For users who are colorblind, or cannot see differences in color, include design elements in addition to color that ensure they receive the same amount of information.)
译文

[en]: <> (Because colorblindness takes different forms \(including red-green, blue-yellow, and monochromatic\), use multiple visual cues to communicate important states. Elements such as strokes, indicators, patterns, texture, or text can describe actions and content.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-color7-do.png)

<figcaption>

{do}

[en]: <> (The text field error state is communicated through multiple cues: title color, text field stroke, and an error message below the field.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-color8-dont.png)

<figcaption>

{dont}

[en]: <> (The text field error state is only communicated with a colored stroke, which would be missed by a user who cannot perceive color.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Layout and typography)
<h2 id="layout-typography">译文</h2>

[en]: <> (Material Design’s touch target guidelines enable users who aren’t able to see the screen, or who have difficulty with small touch targets, to tap elements in your app.)
译文

[en]: <> (Touch and pointer targets)
### 译文

[en]: <> (Touch targets)
#### 译文

[en]: <> (Touch targets are the parts of the screen that respond to user input. They extend beyond the visual bounds of an element. For example, an icon may appear to be 24 x 24 dp, but the padding surrounding it comprises the full 48 x 48 dp touch target.)
译文

[en]: <> (Touch targets should be at least 48 x 48 dp. A touch target of this size results in a physical size of about 9mm, regardless of screen size. The recommended target size for touchscreen elements is 7-10mm. It may be appropriate to use larger touch targets to accommodate a larger spectrum of users.)
译文

[en]: <> (Pointer targets)
#### 译文

[en]: <> (Pointer targets are similar to touch targets, but apply to the use of motion-tracking pointer devices such as a mouse or a stylus. Pointer targets should be at least 44 x 44 dp.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-layout1.png)

<figcaption>

[en]: <> (Avatar: 40dp<br/>Icon: 40dp<br/>Touch target on both: 48dp)
译文<br/>译文<br/>译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-layout2.png)

<figcaption>

[en]: <> (Touch targets)
译文

</figcaption></figure>

</div></div>

[en]: <> (Touch target spacing)
#### 译文

[en]: <> (In most cases, touch targets should be separated by 8dp of space or more to ensure balanced information density and usability.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-layout3.png)

<figcaption>

[en]: <> (Touch target height: 48dp<br/>Button height: 36dp)
译文<br/>译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-layout4.png)

<figcaption>

[en]: <> (Touch targets and buttons)
译文

</figcaption></figure>

</div></div>

[en]: <> (Layout)
### 译文

[en]: <> (Responsive layouts)
#### 译文

[en]: <> (Flexible, responsive layouts help content scale in relation to the screen size. Content shouldn’t be truncated as a result of device type or resolution.)
译文

[en]: <> (Grouping items)
#### 译文

[en]: <> (Keeping related items in proximity to one another is helpful for those who have low vision or have trouble focusing on the screen.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-layout5-do.png)

<figcaption>

{do}

[en]: <> (The slider value is in close proximity with the slider control.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-layout6-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t place the slider value too far away from the control. Someone using screen magnification may not be able to view both the slider and the value without panning back and forth.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Typography)
### 译文

[en]: <> (Fonts)
#### 译文

[en]: <> (To improve readability, users might increase font size. Mobile devices and browsers include features to allow users to adjust font size system-wide. To enable system font size in an Android app, mark text and their associated containers to be measured in scaleable pixels \(sp\) .)
译文

[en]: <> (Make sure to allot enough space for large and foreign language fonts. See [Line Height]\(https://material.io/design/typography/language-support.html#language-considerations\) for information on the recommended sizes of foreign language fonts.)
译文

[en]: <> (Writing)
<h2 id="writing">译文</h2>

[en]: <> (Accessibility text)
### 译文

[en]: <> (Clear and helpful accessibility text is one of the primary ways to make UIs more accessible. Accessibility text refers to text that is used by screen reader accessibility software, such as TalkBack on Android, VoiceOver on iOS, and JAWS on desktop. Screen readers read all text and elements \(such as buttons\) on screen aloud, including both visible and nonvisible alternative text.)
译文

[en]: <> (Visible and nonvisible text)
#### 译文

[en]: <> (Accessibility text includes both visible text \(including labels for UI elements, text on buttons, links, and forms\) and nonvisible descriptions that don’t appear on screen \(such as alternative text for buttons with icons\). Sometimes, an on-screen label may be overridden with accessibility text to provide more information to the user.)
译文

[en]: <> (Both visible and nonvisible text should be descriptive and meaningful, as some users navigate by using all headings or links on a screen. Test your app with a screen reader to identify areas that are missing or need better accessibility text.)
译文

[en]: <> (Be succinct)
### 译文

[en]: <> (Keep content and accessibility text short and to the point. Screen reader users hear every UI element read aloud. The shorter the text, the faster the screen reader users can navigate it.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Switch to jeffersonloveshiking@gmail.com)
Switch to jeffersonloveshiking@gmail.com

{do}

[en]: <> (Write clear and short accessibility text.)
译文

</div><div class="mdui-col">

[en]: <> (Account switcher. Switch to account<br/>jeffersonloveshiking@gmail.com)
Account switcher. Switch to account<br/>jeffersonloveshiking@gmail.com

{dont}

[en]: <> (Don’t write long accessibility text.)
译文

</div></div>

[en]: <> (Avoid stating control type or state)
### 译文

[en]: <> (Screen readers may automatically announce a control’s type or state through a sound or by speaking the control name before or after the accessibility text.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Search)
译文

{do}

[en]: <> (Use short descriptions.)
译文

</div><div class="mdui-col">

[en]: <> (Search field)
译文

{dont}

[en]: <> (Don’t write the control type.)
译文

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Download over Wi-Fi only)
译文

{do}

[en]: <> (Use short descriptions.)
译文

</div><div class="mdui-col">

[en]: <> (Download over Wi-Fi is selected)
译文

{dont}

[en]: <> (Don’t describe the current state, in this case, that Wi-Fi is “selected.”)
译文

</div></div>

[en]: <> (Developer note)
#### 译文

[en]: <> (If the control type or state isn’t being read correctly, the control’s accessibility role may be improperly set or be a custom control.)
译文

[en]: <> (Every element should have an associated accessibility role on a website or be coded to be announced properly. This means a button should be set as a button, and a checkbox as a checkbox, so that the control’s type or state is communicated correctly to the user.)
译文

[en]: <> (Native elements)
#### 译文

[en]: <> (If you extend or inherit from a native UI element, you will get the correct role. If not, you can override this information for accessibility on each platform [ARIA]\(https://www.w3.org/WAI/intro/aria\) for web, crosslink [AccessibilityNodeInfo]\( https://developer.android.com/reference/android/view/accessibility/AccessibilityNodeInfo\) for Android. On Android, set the class name field of the control’s AccessibilityNodeInfo to "android.widget.Button".)
译文

[en]: <> (Indicate what an element does)
### 译文

[en]: <> (Use action verbs to indicate what an element or link does, not what an element looks like, so a visually impaired person can understand.)
译文

[en]: <> (Link text should:)
译文

[en]: <> (Specify what will happen if an action or link is tapped)
[en]: <> (Avoid vague descriptions, such as “click here”)
* 译文
* 译文

[en]: <> (Ensure an element has the same description everywhere it’s used.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-writing-edit-do.png)

<figcaption>

{do}

[en]: <> (The description read aloud indicates the action represented by the icon.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-writing-edit-dont.png)

<figcaption>

{dont}

[en]: <> (Describing what the icon looks like doesn’t make it clear what the action does.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-writing-menu-do.png)

<figcaption>

{do}

[en]: <> (Accessible text for a navigation menu could be “Show navigation menu” and “Hide navigation menu” \(preferred\) or “Show main menu” and “Hide main menu” \(acceptable\).)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-writing-menu-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use accessible text that doesn’t indicate what action will occur, such as “Side drawer.”)
译文

</figcaption></figure>

</div></div>

[en]: <> (Elements with state changes)
### 译文

[en]: <> (For icons that toggle between values or states, announce the icon according to how it is presented to the user.)
译文

[en]: <> (If the icon is a property of an item, make it a checkbox so that screen readers verbalize the current state, such as “on” or “off.”)
[en]: <> (If the icon is an action, write the text label to specify the action that occurs if the icon is selected, such as “Add to wishlist.”)
* 译文
* 译文

[en]: <> (Elements are displayed based on how they should be used. For example, if a star icon represents the action of adding something to a wishlist, the app should verbally state “Add to wishlist” or “Remove from wishlist.”)
译文

[en]: <> (Don’t specify how to interact with a control)
### 译文

[en]: <> (Don’t tell users how to physically interact with a control, as they may be navigating with a keyboard or other device, not with their fingers or a mouse. Accessibility software will describe the correct interaction for the user.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-writing-voicesearch-do.png)

<figcaption>

{do}

[en]: <> (The command “voice search” describes the user task \(search\) paired with the input method \(voice\).)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-writing-voicesearch-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use commands that don’t fully express how to activate a control. This voice command says “tap,” even though it could be selected via a keyboard press, switch device, or braille display. As this task is to perform a search, that action should be mentioned instead of “speak”.
)
译文

</figcaption></figure>

</div></div>

[en]: <> (Hint speech)
### 译文

[en]: <> (Hint speech provides extra information for actions that aren't clear. For example, Android's “double-tap to select” feature prompts the user to tap twice when landing on an item without taking action. Android TalkBack will also announce any custom actions associated with an element. Use hint speech sparingly and only for complex UI.)
译文

[en]: <> (Sound and motion)
<h2 id="sound-motion">译文</h2>

[en]: <> (Sound)
### 译文

[en]: <> (Give visual alternatives to sound, and vice versa. Provide closed captions, a transcript, or other visual cues to critical audio elements and sound alerts.)
译文

[en]: <> (Allow users to navigate your app using sound by adding descriptive labels to UI elements. When using a screen reader such as TalkBack and navigating by [touch exploration]\(https://support.google.com/accessibility/android/answer/6006598?hl=en\), labels are spoken aloud when users touch UI elements with their fingertips.)
译文

[en]: <> (The following sounds should be avoided:)
译文

[en]: <> (Unnecessary sounds that play over a screen reader, such as background music that autoplays when entering a web page. If there is background sound, ensure users can safely pause or stop it.)
[en]: <> (Extra sounds added to native elements \(as screen readers will be able to interpret native elements correctly\).)
* 译文
* 译文

[en]: <> (Motion)
### 译文

[en]: <> (Material Design uses motion to guide focus between views. Surfaces transform into focal points for the user to follow, and unimportant elements are removed.)
译文

[en]: <> (To allow users with motion and vision sensitivities to use interfaces comfortably, adhere to the Material Design motion guidance, which supports the following from the W3C:)
译文

[en]: <> (Enable content that moves, scrolls, or blinks automatically to be paused, stopped, or hidden if it lasts more than five seconds)
[en]: <> (Limit flashing content to three times in a one-second period to meet [flash and red flash thresholds]\(https://www.w3.org/TR/WCAG20/#general-thresholddef\))
[en]: <> (Avoid [flashing large central regions of the screen]\(https://www.w3.org/TR/2015/NOTE-WCAG20-TECHS-20150226/G176\))
* 译文
* 译文
* 译文

[en]: <> (Timed controls)
### 译文

[en]: <> (Controls in an app may be set to disappear after a certain amount of time. For example, five seconds after starting a video, playback controls may fade from the screen.)
译文

[en]: <> (High-priority controls)
#### 译文

[en]: <> (Avoid using timers on controls that perform high-priority functions, as users may not notice these controls if they fade away too quickly. For example, TalkBack reads controls out loud if they are focused on, and placing them on timers may prevent the controls from completing their task.)
译文

[en]: <> (For controls that enable other important functions, make sure that the user can turn on the controls again or perform the same function in other ways. Learn more in [Composition]\(https://material.io/design/usability/accessibility.html#composition\).)
译文

[en]: <> (Implementing accessibility)
<h2 id="implementing-accessibility">译文</h2>

[en]: <> (By using standard platform controls and semantic HTML \(on the web\), your app will automatically contain the markup and code needed to work well with a platform’s assistive technology. Adapt your app to meet each platform's accessibility standards and assistive technology \(including shortcuts and structure\) to give users an efficient experience.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-implementation1-do.png)

<figcaption>

{do}

[en]: <> (Use native elements, such as the standard platform dialog.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-implementation2-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t use non-standard elements, such as a non-standard platform dialog to perform a standard dialog task. This implementation would require extra coding and testing to make this non-standard control work well with assistive technology.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Test your design with the platform accessibility settings turned on \(both during and after implementation\).)
译文

[en]: <> (Other design considerations:)
译文

[en]: <> (Use scalable text and a spacious layout to accommodate users who may have large text, color correction, magnification, or other assistive settings turned on.)
[en]: <> (Keyboard and mouse interfaces should have every task and all hover information accessible by keyboard-only.)
[en]: <> (Touch interfaces should allow screen readers and other assistive technology devices to read all parts of your interface. The text read aloud should be both meaningful and helpful.)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/usability/accessibility/accessibility-implementation3-do.png)

<figcaption>

{do}

[en]: <> (Scale your UI to work well with magnification and large text.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/usability/accessibility/accessibility-implementation4-dont.png)

<figcaption>

{dont}

[en]: <> (This UI hasn’t scaled well with magnification and large text. Portions of content are overlapping or cut off.)
译文

</figcaption></figure>

[en]: <> (Label UI elements)
### 译文

[en]: <> (Screen-reader users need to know which UI elements are tappable on-screen. To enable screen readers to read the names of components out loud, add the contentDescription attribute to components such as buttons, icons, and tabs containing icons that have no visible text. For web apps, add an [add aria-label]\(https://developers.google.com/web/fundamentals/accessibility/semantics-aria/aria-labels-and-relationships\).)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-labeling1.png)

<figcaption>

[en]: <> (Label the Search icon)
[en]: <> (Label the Microphone icon)
1. 译文
2. 译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/usability/accessibility/accessibility-labeling2.png)

<figcaption>

[en]: <> (Label the Edit icon)
[en]: <> (Label the Chat icon)
1. 译文
2. 译文

</figcaption></figure>

</div></div>

[en]: <> (Help documentation)
### 译文

[en]: <> (Any features with special accessibility considerations should be included in help documentation. Make help documentation relevant, accessible, and discoverable. As an example, review this guide on how to use a screen reader with [Google Drive]\(https://support.google.com/drive/answer/6034939?hl=en\).)
译文

[en]: <> (Testing and research)
### 译文

[en]: <> (Following these accessibility guidelines will help improve the accessibility of your app, but does not guarantee a fully accessible experience. It is recommended that you also:)
译文

[en]: <> (Test your app for full task completion, beginning to end, with various assistive technologies turned on. For example, turn on Explore by Touch in TalkBack and change the speed at which text is spoken out loud.)
[en]: <> (Have users with impairments test your app.)
[en]: <> (Consider how individual elements should be accessible while also fitting together in a coherent user flow.)
[en]: <> (Make sure the major tasks you want your users to complete are possible for everyone.)
* 译文
* 译文
* 译文
* 译文

[en]: <> (Talk to your users, particularly those who use assistive technology, to learn about their needs, what they want out of your app, which tools they use, and how they use them. Become familiar with these tools so you can give them the best experience.)
译文

<figure>

![]({assets_path}/usability/accessibility/accessibility-implementation5.png)

<figcaption>

[en]: <> (People use assistive technology in different ways.)
译文

</figcaption></figure>

</div>
