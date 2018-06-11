<div class="article__intro">

[en]: <> (Text fields)
# 文本框

[en]: <> (Text fields let users enter and edit text.)
译文

<figure>

![]({assets_path}/components/text-fields/textfields-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Filled text field)
[en]: <> (Outlined text field)
[en]: <> (Input types)
[en]: <> (Theming)
[en]: <> (Spec)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#filled-text-field)
* [译文](#outlined-text-field)
* [译文](#input-types)
* [译文](#theming)
* [译文](#spec)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Text fields allow users to enter text into a UI. They typically appear in forms and dialogs.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfield-illo-01.png)

<figcaption>

[en]: <> (Discoverable)
#### 译文

[en]: <> (Text fields should stand out and indicate that users can input information.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfield-illo-02.png)

<figcaption>

[en]: <> (Clear)
#### 译文

[en]: <> (Text field states should be clearly differentiated from one another.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfield-illo-03.png)

<figcaption>

[en]: <> (Efficient)
#### 译文

[en]: <> (Text fields should make it easy to understand the requested information and to address any errors.)
译文

</figcaption></figure></div></div>

[en]: <> (Types)
### 译文

[en]: <> (Text fields come in two types:)
译文

[en]: <> (Filled text fields)
[en]: <> (Outlined text fields)
* 译文
* 译文

[en]: <> (Both types of text fields use a container to provide a clear affordance for interaction, making the fields discoverable in layouts.)
译文

<figure>

![]({assets_path}/components/text-fields/textfields-types.png)

<figcaption>

[en]: <> (Filled text fields)
[en]: <> (Outlined text fields)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Choosing the right text field)
### 译文

[en]: <> (Both types of text fields provide the same functionality, so the type of text field you use can depend on style alone.)
译文

[en]: <> (Choose the type that:)
译文

[en]: <> (Works best with your app’s visual style)
[en]: <> (Best accommodates the goals of your UI)
[en]: <> (Is most distinct from other components \(like buttons\) and surrounding content)
* 译文
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-type-filled.png)

<figcaption>

[en]: <> (Mobile form using filled text fields)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-type-filled.png)

<figcaption>

[en]: <> (The same mobile form using outlined text fields)
译文

</figcaption></figure></div></div>

[en]: <> (Both types of text fields in one UI)
#### 译文

[en]: <> (If both types of text fields are used in a single UI, they should be used consistently within different sections, and not intermixed within the same region. For example, you could use outlined text fields in one section and filled text fields in another.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-type-mix-do.png)

<figcaption>

{do}

[en]: <> (When using both types of text fields in a UI, separate them by region.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-type-mix-dont.png)

<figcaption>

{dont}

[en]: <> (When using a both types of text fields, don’t use both next to each other, or within the same form.)
译文

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<figure>

![]({assets_path}/components/text-fields/textfields-annotations-1.png)

<figcaption>

[en]: <> (Container)
[en]: <> (Leading icon \(optional\))
[en]: <> (Label text)
[en]: <> (Input text)
[en]: <> (Trailing icon \(optional\))
[en]: <> (Activation indicator)
[en]: <> (Assistive text \(optional\))
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文
6. 译文
7. 译文

</figcaption></figure>

[en]: <> (Container)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Containers improve the discoverability of text fields by creating contrast between the text field and surrounding content.)
译文

[en]: <> (Fill and stroke)
#### 译文

[en]: <> (A text field container has a fill and a stroke \(either around the entire container, or just the bottom edge\). The color and thickness of a stroke can change to indicate when the text field is active.)
译文

[en]: <> (Rounded corners)
#### 译文

[en]: <> (The container of an outlined text field has rounded corners, while the container of a filled text field has rounded top corners and square bottom corners.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-anatomy-container.png)

</figure></div></div>

[en]: <> (Label text)
### 译文

[en]: <> (Label text is used to inform users as to what information is requested for a text field. Every text field should have a label.)
译文

[en]: <> (Label text should be aligned with the input line, and always visible. It can be placed in the middle of a text field, or rest near the top of the container.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-anatomy-label-text-do.mp4" src="{assets_path}/components/text-fields/textfields-anatomy-label-text-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Label text should always be visible, moving from the middle of the text field to the top \(if the field is selected\).)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-annotations-labels-dont-1.png)

<figcaption>

{dont}

[en]: <> (Label text shouldn’t be truncated. Keep it short, clear, and fully visible.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-annotations-labels-dont-2.png)

<figcaption>

{dont}

[en]: <> (Label text shouldn’t take up multiple lines.)
译文

</figcaption></figure></div></div>

[en]: <> (Required text indicator)
#### 译文

[en]: <> (To indicate that a field is required, display an asterisk \(*\) next to the label text and mention near the form that asterisks indicate required fields.)
译文

[en]: <> (If some fields are required, indicate all required ones)
[en]: <> (If most fields are required, indicate optional fields by displaying the word “optional” in parentheses next to the label text)
[en]: <> (If required text is colored, that color should also be used for the asterisk)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/components/text-fields/textfields-annotations-required.png)

<figcaption>

[en]: <> (Required text with asterisk)
译文

</figcaption></figure>

[en]: <> (Input text)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-annotations-2.png)

</figure></div><div class="mdui-col">

[en]: <> (Input text is text the user has entered into a text field.)
译文

[en]: <> (1. Input text)
#### 译文

[en]: <> (Input text is text entered by the user.)
译文

[en]: <> (2. Cursor)
#### 译文

[en]: <> (A cursor indicates the current location of text input in a field.)
译文

</div></div>

[en]: <> (Assistive elements)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-annotations-3.png)

</figure></div><div class="mdui-col">

[en]: <> (Assistive elements provide additional detail about text entered into text fields.)
译文

[en]: <> (1. Helper text)
#### 译文

[en]: <> (Helper text conveys additional guidance about the input field, such as how it will be used. It should only take up a single line, being persistently visible or visible only on focus.)
译文

[en]: <> (2. Error message)
#### 译文

[en]: <> (When text input isn’t accepted, an error message can display instructions on how to fix it. Error messages are displayed below the input line, replacing helper text until fixed.)
译文

[en]: <> (3. Icons)
#### 译文

[en]: <> (Icons can be used to message alerts as well. Pair them with error messages to provide redundant alerts, which are useful when you need to design for colorblind users.)
译文

[en]: <> (4. Character counter)
#### 译文

[en]: <> (Character or word counters should be used if there is a character or word limit. They display the ratio of characters used and the total character limit.)
译文

</div></div>

[en]: <> (Error text)
#### 译文

[en]: <> (For text fields that validate their content \(such as passwords\), replace helper text with error text when applicable. Swapping helper text with error text helps prevent new lines of text from being introduced into a layout, thus bumping content to fit it.)
译文

[en]: <> (If only one error is possible, error text describes how to avoid the error)
[en]: <> (If multiple errors are possible, error text describes how to avoid the most likely error)
* 译文
* 译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-anatomy-error.mp4" src="{assets_path}/components/text-fields/textfields-anatomy-error.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Swap helper text with error text.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-anatomy-error-dont.mp4" src="{assets_path}/components/text-fields/textfields-anatomy-error-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t place error text under helper text, as their appearance will shift content.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-anatomy-error-caution.png" src="{assets_path}/components/text-fields/textfields-anatomy-error-caution.png" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (Long errors can wrap to multiple lines if there isn’t enough space to clearly describe the error. In this case, ensure padding between text fields is sufficient to prevent multi-lined errors from bumping layout content.)
译文

</figcaption></figure>

[en]: <> (Icons)
### 译文

[en]: <> (Icons in text fields are optional. Text field icons can describe valid input methods \(such as a microphone icon\), provide affordances to access additional functionality \(such as clearing the content of a field\), and can express an error.)
译文

[en]: <> (Leading and trailing icons change their position based on LTR or RTL contexts.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-annotations-4.png)

</figure></div><div class="mdui-col">

[en]: <> (1. Icon signifier)
#### 译文

[en]: <> (Icon signifiers can describe the type of input a text field requires, and be touch targets for nested components. For example, a calendar icon may be tapped to reveal a date picker.)
译文

[en]: <> (2. Valid or error icon)
#### 译文

[en]: <> (Iconography can indicate both valid and invalid inputs, making error states clear for colorblind users.)
译文

[en]: <> (3. Clear icon)
#### 译文

[en]: <> (Clear icons let users clear an entire input field. They appear only when input text is present.)
译文

[en]: <> (4. Voice input icon)
#### 译文

[en]: <> (A microphone icon signifies that users can input characters using voice.)
译文

[en]: <> (5. Dropdown icon)
#### 译文

[en]: <> (A dropdown arrow indicates that a text field has a nested selection component.)
译文

</div></div>

[en]: <> (Filled text field)
<h2 id="filled-text-field">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Filled text fields carry more visual emphasis, making them stand out when surrounded by other content and components.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-filled-motion2.mp4" src="{assets_path}/components/text-fields/textfields-filled-motion2.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Filled text field)
译文

</figcaption></figure><figure>

![]({assets_path}/components/text-fields/textfields-filled-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t design text fields that may be mistaken for buttons.)
译文

</figcaption></figure>

[en]: <> (States)
### 译文

<figure>

![]({assets_path}/components/text-fields/textfields-filled-states.png)

<figcaption>

[en]: <> (Filled text field states are inactive, activated, focused, hover, error, and disabled.)
译文

</figcaption></figure>

[en]: <> (Outlined text field)
<h2 id="outlined-text-field">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Outlined text fields have less visual emphasis than filled text fields, which helps simplify layout in places like forms, where many text fields are placed together.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-outline-motion1.mp4" src="{assets_path}/components/text-fields/textfields-outline-motion1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Outlined text field)
译文

</figcaption></figure>

[en]: <> (States)
### 译文

<figure>

![]({assets_path}/components/text-fields/textfields-outline-states-enabled.png)

<figcaption>

[en]: <> (Filled text field states are inactive, activated, focused, hover, error, and disabled.)
译文

</figcaption></figure>

[en]: <> (Input types)
<h2 id="input-types">译文</h2>

[en]: <> (Text fields can display user input in the following ways:)
译文

[en]: <> (*Single line text fields* display only one line of text)
[en]: <> (*Multi-line text fields* grow to accommodate multiple lines of text)
[en]: <> (*Text areas* are fixed-height fields)
* 译文
* 译文
* 译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-input-motion2.mp4" src="{assets_path}/components/text-fields/textfields-input-motion2.mp4" type="video/mp4"></video></figure>

[en]: <> (Single-line fields)
#### 译文

[en]: <> (In single-line fields, as the cursor reaches the right field edge, text longer than the input line automatically scrolls left.)
译文

[en]: <> (Single-line fields are not suitable for collecting long responses. For those, use a multi-line text field or text area instead.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-input-multiline.mp4" src="{assets_path}/components/text-fields/textfields-input-multiline.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Multi-line fields)
#### 译文

[en]: <> (Multi-line text fields show all user input at once. Overflow text causes the text field to expand \(shifting screen elements downward\), and text wraps onto a new line.)
译文

[en]: <> (These fields initially appear as single-line fields, which is useful for compact layouts that need to be able to accomodate large amounts of text.)
译文

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-input-multiline.mp4" src="{assets_path}/components/text-fields/textfields-input-multiline.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Text areas)
#### 译文

[en]: <> (Text areas are taller than text fields and wrap overflow text onto a new line. They are a fixed height and scroll vertically when the cursor reaches the bottom of the field.)
译文

[en]: <> (The large initial size indicates that longer responses are possible and encouraged.)
译文

[en]: <> (These should be used instead of multi-line fields on the web. Ensure the height of a text area fits within [mobile screen sizes]\(https://material.io/devices/\) .)
译文

</figcaption></figure></div></div>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Rally Material Theme)
### 译文

[en]: <> (This personal finance app’s filled text fields have been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/text-fields/textfeildfilled-rally-ahero.png)

<figcaption>

[en]: <> (Rally’s customized filled text fields)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Rally’s filled text fields use custom color on five elements: label text, input text, trailing icon, activation indicator, and container.)
译文

<figure>

![]({assets_path}/components/text-fields/textfeildfilled-rally-color.png)

</figure>

[en]: <> (Element                | Category      | Attribute          | Value)
[en]: <> (---------              |----------     |---------           |------)
[en]: <> (Label text             | Primary       | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Input text             | On Surface    | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Trailing icon          | On Surface    | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Activation indicator   | Primary       | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Container              | On Surface    | Color<br>Opacity   | #FFFFFF<br>4%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

<figure>

![]({assets_path}/components/text-fields/textfeildfilled-rally-type.png)

</figure>

[en]: <> (Element      | Category     | Attribute                          | Value)
[en]: <> (---------    |----------    |---------                           |------)
[en]: <> (Input text   | Subtitle 1   | Typeface<br>Font<br>Size<br>Case   | Eczar<br>Regular<br>16<br>Title case)
[en]: <> (Label text   | Caption      | Typeface<br>Font<br>Size<br>Case   | Roboto Condensed<br>Regular<br>12<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Crane Material Theme)
### 译文

[en]: <> (This travel app’s outlined text fields have been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/text-fields/textfieldsoutlined-crane-ahero.png)

<figcaption>

[en]: <> (Crane’s customized outlined text fields)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Crane’s outlined text fields use custom color on three elements: the input text, label text, and container.)
译文

<figure>

![]({assets_path}/components/text-fields/textfieldsoutlined-crane-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Input text    | On Surface    | Color<br>Opacity   | #000000<br>87%)
[en]: <> (Label Text    | On Surface    | Color<br>Opacity   | #000000<br>60%)
[en]: <> (Text          | On Surface    | Color<br>Opacity   | #000000<br>12%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Crane’s outlined text fields use custom typography for the input text and label text.)
译文

<figure>

![]({assets_path}/components/text-fields/textfieldsoutlined-crane-type.png)

</figure>

[en]: <> (Element      | Category     | Attribute                          | Value)
[en]: <> (---------    |----------    |---------                           |------)
[en]: <> (Input text   | Subtitle 1   | Typeface<br>Font<br>Size<br>Case   | Raleway<br>Medium<br>16<br>Title case)
[en]: <> (Label text   | Caption      | Typeface<br>Font<br>Size<br>Case   | Raleway<br>SemiBold<br>14<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Spec)
<h2 id="spec">译文</h2>

[en]: <> (Filled text field)
### 译文

<figure>

![]({assets_path}/components/text-fields/specs-textfields-filled.png)

</figure><figure>

![]({assets_path}/components/text-fields/specs-textfields-filled-active.png)

</figure><figure>

![]({assets_path}/components/text-fields/specs-textfields-filled-error.png)

</figure>

[en]: <> (Outlined text field)
### 译文

<figure>

![]({assets_path}/components/text-fields/specs-textfields-outlined.png)

</figure><figure>

![]({assets_path}/components/text-fields/specs-textfields-outlined-active.png)

</figure><figure>

![]({assets_path}/components/text-fields/specs-textfields-outlined-error.png)

</figure></div>
