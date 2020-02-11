<div class="article__intro">

[en]: <> (Text fields)
# 文本框

[en]: <> (Text fields let users enter and edit text.)
文本框允许用户输入和编辑文本。

<figure>

![]({assets_path}/components/text-fields/textfields-intro.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Filled text field)
[en]: <> (Outlined text field)
[en]: <> (Input types)
[en]: <> (Spec)
* [用途](#usage)
* [剖析](#anatomy)
* [填充式文本框](#filled-text-field)
* [轮廓式文本框](#outlined-text-field)
* [输入框类型](#input-types)
* [规范](#spec)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用途</h2>

[en]: <> (Text fields allow users to enter text into a UI. They typically appear in forms and dialogs.)
文本框允许用户将文本输入到页面中，他们通常出现在表单和对话框中。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfield-illo-01.png)

<figcaption>

[en]: <> (Discoverable)
#### 明了

[en]: <> (Text fields should stand out and indicate that users can input information.)
文本框应突出并提示用户输入信息。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfield-illo-02.png)

<figcaption>

[en]: <> (Clear)
#### 清晰

[en]: <> (Text field states should be clearly differentiated from one another.)
文本框的状态应该被清晰地与其他状态区分。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfield-illo-03.png)

<figcaption>

[en]: <> (Efficient)
#### 高效

[en]: <> (Text fields should make it easy to understand the requested information and to address any errors.)
文本框所需要的填写的内容以及要解决的错误应该容易被理解。

</figcaption></figure></div></div>

[en]: <> (Types)
### 类型

[en]: <> (Text fields come in two types:)
文本框有两种类型

[en]: <> (Filled text fields)
[en]: <> (Outlined text fields)
* 填充式文本框
* 轮廓式文本框

<!-- 译者注: Filled 填充式? 这个翻译稍微有点牵强 -->

[en]: <> (Both types of text fields use a container to provide a clear affordance for interaction, making the fields discoverable in layouts.)

两种类型的文本框都使用一个容器以提供清晰明了的交互，从而使文本框在布局中易被发现。

<figure>

![]({assets_path}/components/text-fields/textfields-types.png)

<figcaption>

[en]: <> (Filled text fields)
[en]: <> (Outlined text fields)
1. 填充式文本框
2. 轮廓式文本框

</figcaption></figure>

[en]: <> (Choosing the right text field)
### 选择合适的文本框

[en]: <> (Both types of text fields provide the same functionality, so the type of text field you use can depend on style alone.)
两个类型的文本框都有着同样的功能,所以选择的类型取决于你想要的风格.

[en]: <> (Choose the type that:)
选择的一些建议:

[en]: <> (Works best with your app’s visual style)
[en]: <> (Best accommodates the goals of your UI)
[en]: <> (Is most distinct from other components \(like buttons\) and surrounding content)
* 和你的应用风格最搭配的
* 最适合你界面设计的目标
* 与其他组件 (比如按钮) 以及周围的内容相比最明显的

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-type-filled.png)

<figcaption>

[en]: <> (Mobile form using filled text fields)
使用填充式文本框的手机表单

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-type-filled.png)

<figcaption>

[en]: <> (The same mobile form using outlined text fields)
同样的手机表单使用的轮廓式编辑框

</figcaption></figure></div></div>

[en]: <> (Both types of text fields in one UI)
#### 两种类型的文本框在同一界面

[en]: <> (If both types of text fields are used in a single UI, they should be used consistently within different sections, and not intermixed within the same region. For example, you could use outlined text fields in one section and filled text fields in another.)
如果两种类型的文本框出现在同一个界面,他们必须被放在不同的板块并且不能被混搭在同一区域.比如,你可以在一个板块使用轮廓式文本框,在另一个板块使用填充式文本框.

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-type-mix-do.png)

<figcaption>

{do}

[en]: <> (When using both types of text fields in a UI, separate them by region.)
当在一个页面使用两种类型的文本框时,应当将他们区分到不同的区域.

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-type-mix-dont.png)

<figcaption>

{dont}

[en]: <> (When using a both types of text fields, don’t use both next to each other, or within the same form.)
当使用两种类型的文本框时,不要让其中一种挨着另一种,或者同时出现在一个表单.

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

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
1. 容器
2. 前图标 (可选)
3. 标签
4. 输入文本
5. 后图标 (可选)
6. 激活标识
7. 辅助元素

</figcaption></figure>

[en]: <> (Container)
### 容器

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Containers improve the discoverability of text fields by creating contrast between the text field and surrounding content.)
容器让文本框与周围的内容形成对比,使文本框更易被发现

[en]: <> (Fill and stroke)
#### 填充和边框

[en]: <> (A text field container has a fill and a stroke \(either around the entire container, or just the bottom edge\). The color and thickness of a stroke can change to indicate when the text field is active.)
文本框的容器有填充以及轮廓 (要么围绕整个容器,要么仅仅在底部). 轮廓的颜色和粗细可以因为文本框的激活而改变.

[en]: <> (Rounded corners)
#### 圆角

[en]: <> (The container of an outlined text field has rounded corners, while the container of a filled text field has rounded top corners and square bottom corners.)
轮廓式文本框有一个圆角的轮廓,而填充式文本框则是顶部圆角,底部方角.

</div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-anatomy-container.png)

</figure></div></div>

[en]: <> (Label text)
### 标签

[en]: <> (Label text is used to inform users as to what information is requested for a text field. Every text field should have a label.)
标签文本通常用来提示需要填写在文本框的信息. 每一个文本框都应该有一个标签.

[en]: <> (Label text should be aligned with the input line, and always visible. It can be placed in the middle of a text field, or rest near the top of the container.)
标签应该与输入的地方对齐并且一直可见.他可以放在文本框的中间,或者放置在容器靠近顶部的地方
<!-- 译者注: Rest有点像表示在旁边显示而不遮挡文本框内容(见轮廓式文本框),可是这样用中文怎么描述呢...... -->

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-anatomy-label-text-do.mp4" src="{assets_path}/components/text-fields/textfields-anatomy-label-text-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Label text should always be visible, moving from the middle of the text field to the top \(if the field is selected\).)
标签必须一直可见. 假如选中了文本框,就将他从文本框中间移动到顶部.

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-annotations-labels-dont-1.png)

<figcaption>

{dont}

[en]: <> (Label text shouldn’t be truncated. Keep it short, clear, and fully visible.)
标签的内容不应当被截断. 请保持它的精简以便可以完全看见他.

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-annotations-labels-dont-2.png)

<figcaption>

{dont}

[en]: <> (Label text shouldn’t take up multiple lines.)
标签的内容不能是多行的.

</figcaption></figure></div></div>

[en]: <> (Required text indicator)
#### 必填提示

[en]: <> (To indicate that a field is required, display an asterisk \(*\) next to the label text and mention near the form that asterisks indicate required fields.)
要提示这个文本框是必填的,需要显示一个星号 (*) 在标签旁边并且在旁边注明

[en]: <> (If some fields are required, indicate all required ones)
[en]: <> (If most fields are required, indicate optional fields by displaying the word “optional” in parentheses next to the label text)
[en]: <> (If required text is colored, that color should also be used for the asterisk)
* 如果一些文本框是必填的,请指明所有必填文本框
* 如果大部分文本框是必填的,指明不必填的文本框 (注明 "可选")
* 如果必填的文本是彩色的,则星号也应当是相同颜色

<figure>

![]({assets_path}/components/text-fields/textfields-annotations-required.png)

<figcaption>

[en]: <> (Required text with asterisk)
必填文本框附上星号

</figcaption></figure>

[en]: <> (Input text)
### 输入文本

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-annotations-2.png)

</figure></div><div class="mdui-col">

[en]: <> (Input text is text the user has entered into a text field.)
输入文本是用户输入到文本框的文本

[en]: <> (1. Input text)
#### 输入文本

[en]: <> (Input text is text entered by the user.)
输入文本是用户输入的文本

[en]: <> (2. Cursor)
#### 光标

[en]: <> (A cursor indicates the current location of text input in a field.)
光标指示当前的输入位置。

</div></div>

[en]: <> (Assistive elements)
### 辅助元素

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-annotations-3.png)

</figure></div><div class="mdui-col">

[en]: <> (Assistive elements provide additional detail about text entered into text fields.)
辅助元素提供文本框中输入文本的更多详细信息。

[en]: <> (1. Helper text)
#### 提示信息

[en]: <> (Helper text conveys additional guidance about the input field, such as how it will be used. It should only take up a single line, being persistently visible or visible only on focus.)
提示信息给予用户关于文本框的其他信息，例如如何使用。 它应该只占一行，始终可见或仅在文本框为焦点时可见。

[en]: <> (2. Error message)
#### 错误信息

[en]: <> (When text input isn’t accepted, an error message can display instructions on how to fix it. Error messages are displayed below the input line, replacing helper text until fixed.)
如果输入的内容不被接受，则会显示一条错误消息，其中可以显示有关如何修正内容的说明。 错误消息显示在输入文本下方，替换辅助文本，直到错误被修复。

[en]: <> (3. Icons)
#### 图标

[en]: <> (Icons can be used to message alerts as well. Pair them with error messages to provide redundant alerts, which are useful when you need to design for colorblind users.)
图标也可以用于向用户警告。 将它们与错误消息配对以提供二次警报，这在需要为颜色障碍人士设计时很有用。
<!-- 译者注:色盲=>颜色障碍人士 我也是绝了 -->

[en]: <> (4. Character counter)
#### 字符计数器

[en]: <> (Character or word counters should be used if there is a character or word limit. They display the ratio of characters used and the total character limit.)
字符计数器应当在内容的长度受限制时使用. 它们显示已输入的字符数和限制字符数的比例 (已输入的字符数/限制字符数)。

</div></div>

[en]: <> (Error text)
#### 错误信息

[en]: <> (For text fields that validate their content \(such as passwords\), replace helper text with error text when applicable. Swapping helper text with error text helps prevent new lines of text from being introduced into a layout, thus bumping content to fit it.)
对于验证其内容（例如密码）的文本框，请在发现错误时用错误信息替换提示信息。 将提示信息与错误信息交换以防止在布局中引入新的文本行，从而使内容不符合要求。

[en]: <> (If only one error is possible, error text describes how to avoid the error)
[en]: <> (If multiple errors are possible, error text describes how to avoid the most likely error)
* 如果仅发生一个错误，则错误信息描述如何避免该错误
* 如果出现多个错误，则错误信息描述如何避免最可能发生的错误

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-anatomy-error.mp4" src="{assets_path}/components/text-fields/textfields-anatomy-error.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (Swap helper text with error text.)
用错误信息替换提示信息

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-anatomy-error-dont.mp4" src="{assets_path}/components/text-fields/textfields-anatomy-error-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t place error text under helper text, as their appearance will shift content.)
不要将错误信息添加到提示信息下方,这样会导致外观的改变

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-anatomy-error-caution.png" src="{assets_path}/components/text-fields/textfields-anatomy-error-caution.png" type="video/mp4"></video><figcaption>

{caution}

[en]: <> (Long errors can wrap to multiple lines if there isn’t enough space to clearly describe the error. In this case, ensure padding between text fields is sufficient to prevent multi-lined errors from bumping layout content.)
如果没有足够的空间来清楚地描述错误，可以将其显示为多行。 在这种情况下，请确保文本框之间有足够的空间以防止多行错误引起布局内容冲突。

</figcaption></figure>

[en]: <> (Icons)
### 图标

[en]: <> (Icons in text fields are optional. Text field icons can describe valid input methods \(such as a microphone icon\), provide affordances to access additional functionality \(such as clearing the content of a field\), and can express an error.)
文本框可以显示图标。 文本框图标可以描述输入方法（例如麦克风图标），提供其他功能（例如清除内容），并且可以提示错误。

[en]: <> (Leading and trailing icons change their position based on LTR or RTL contexts.)
首图标和尾图标可以根据语言阅读方式是从右到左还是从左到右来交换位置.

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/text-fields/textfields-annotations-4.png)

</figure></div><div class="mdui-col">

[en]: <> (1. Icon signifier)
#### 指示图标

[en]: <> (Icon signifiers can describe the type of input a text field requires, and be touch targets for nested components. For example, a calendar icon may be tapped to reveal a date picker.)
指示图标可以介绍文本框需要的内容类型,并且可以作为对应组件的按钮。 比如点击日历图标可以打开日期选择器.

[en]: <> (2. Valid or error icon)
#### 错误图标

[en]: <> (Iconography can indicate both valid and invalid inputs, making error states clear for colorblind users.)
图像可以提示输入是否有效，从而使颜色障碍人士可以清楚地看到错误状态。

[en]: <> (3. Clear icon)
#### 清除图标

[en]: <> (Clear icons let users clear an entire input field. They appear only when input text is present.)
清除图标可以让用户清除文本框中输入的文本. 它们仅在输入文本存在时出现。

[en]: <> (4. Voice input icon)
#### 语音识别图标

[en]: <> (A microphone icon signifies that users can input characters using voice.)
麦克风图标可以提示用户可以用语音输入.

[en]: <> (5. Dropdown icon)
#### 下拉图标

[en]: <> (A dropdown arrow indicates that a text field has a nested selection component.)
下拉箭头提用来示文本框有对应的选择组件。

</div></div>

[en]: <> (Filled text field)
<h2 id="filled-text-field">填充式文本框</h2>

[en]: <> (Usage)
### 用途

[en]: <> (Filled text fields carry more visual emphasis, making them stand out when surrounded by other content and components.)
填充式文本框可以吸引用户注意，使其在被其他内容和组件包围时突出显示。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-filled-motion2.mp4" src="{assets_path}/components/text-fields/textfields-filled-motion2.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Filled text field)
填充式文本框

</figcaption></figure><figure>

![]({assets_path}/components/text-fields/textfields-filled-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t design text fields that may be mistaken for buttons.)
不要将其与按钮设计地相似

</figcaption></figure>
<!-- !注意:此处内容相较于官网有丢失 -->

[en]: <> (States)
### 状态

<figure>

![]({assets_path}/components/text-fields/textfields-filled-states.png)

<figcaption>

[en]: <> (Filled text field states are inactive, activated, focused, hover, error, and disabled.)
填充式文本框的状态有未激活，已激活，获得焦点，悬停，错误和禁用。

</figcaption></figure>

[en]: <> (Outlined text field)
<h2 id="outlined-text-field">轮廓式文本框</h2>

[en]: <> (Usage)
### 用途

[en]: <> (Outlined text fields have less visual emphasis than filled text fields, which helps simplify layout in places like forms, where many text fields are placed together.)
轮廓式文本框与填充式文本框相比只有较少的视觉强调力,这有助于简化拥有很多文本框的元素布局,比如表单.

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-outline-motion1.mp4" src="{assets_path}/components/text-fields/textfields-outline-motion1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Outlined text field)
轮廓式文本框

</figcaption></figure>

[en]: <> (States)
### 状态

<figure>

![]({assets_path}/components/text-fields/textfields-outline-states-enabled.png)

<figcaption>
<!-- !注意:此处原文错误 -->
[en]: <> (Filled text field states are inactive, activated, focused, hover, error, and disabled.)
填充式文本框的状态有未激活，已激活，获得焦点，悬停，错误和禁用。

</figcaption></figure>

<!-- !注意:此处内容丢失 -->

[en]: <> (Input types)
<h2 id="input-types">输入框类型</h2>

[en]: <> (Text fields can display user input in the following ways:)
输入框可以显示下述的类型

[en]: <> (*Single line text fields* display only one line of text)
[en]: <> (*Multi-line text fields* grow to accommodate multiple lines of text)
[en]: <> (*Text areas* are fixed-height fields)
* **单行文本框** 显示只有一行的文本
* **多行文本框** 可以增长以容纳多行的文本
* **文本域** 是固定高度的文本框

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-input-motion2.mp4" src="{assets_path}/components/text-fields/textfields-input-motion2.mp4" type="video/mp4"></video></figure>

[en]: <> (Single-line fields)
#### 单行文本框

[en]: <> (In single-line fields, as the cursor reaches the right field edge, text longer than the input line automatically scrolls left.)
在单行文本框中，当光标到达文本框的右边缘时，继续输入的话文本会自动向左滚动。

[en]: <> (Single-line fields are not suitable for collecting long responses. For those, use a multi-line text field or text area instead.)
单行文本框不适用于收集长响应。 对于这种情况，请使用多行文本框或文本域。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-input-multiline.mp4" src="{assets_path}/components/text-fields/textfields-input-multiline.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Multi-line fields)
#### 多行文本框

[en]: <> (Multi-line text fields show all user input at once. Overflow text causes the text field to expand \(shifting screen elements downward\), and text wraps onto a new line.)
多行文本框可以一次性显示所有用户输入。 文本溢出的话文本框增长（之后的元素向下移动），并且文本会换行到新行。

[en]: <> (These fields initially appear as single-line fields, which is useful for compact layouts that need to be able to accomodate large amounts of text.)
这种文本框最初显示为单行文本框，这对于需要能够容纳大量文本的紧凑型布局很有用。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/text-fields/textfields-input-multiline.mp4" src="{assets_path}/components/text-fields/textfields-input-multiline.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Text areas)
#### 文本域

[en]: <> (Text areas are taller than text fields and wrap overflow text onto a new line. They are a fixed height and scroll vertically when the cursor reaches the bottom of the field.)
文本域比单行文本框高，并将溢出文本换行。 它们是固定高度，当光标到达文本底部时文本会向上垂直滚动。

[en]: <> (The large initial size indicates that longer responses are possible and encouraged.)
较大的初始大小可以容纳更长的内容，我们鼓励这样做。

[en]: <> (These should be used instead of multi-line fields on the web. Ensure the height of a text area fits within [mobile screen sizes]\(https://material.io/devices/\) .)
这种文本框可以在网页端替换多行文本框. 请确保文本区域的高度适合[移动屏幕尺寸](https：//material.io/devices/)

</figcaption></figure></div></div>

<!-- !注意:此处内容缺失 -->
[en]: <> (Spec)
<h2 id="spec">规范</h2>

[en]: <> (Filled text field)
### 填充式文本框

<figure>

![]({assets_path}/components/text-fields/specs-textfields-filled.png)

</figure><figure>

![]({assets_path}/components/text-fields/specs-textfields-filled-active.png)

</figure><figure>

![]({assets_path}/components/text-fields/specs-textfields-filled-error.png)

</figure>

[en]: <> (Outlined text field)
### 轮廓式文本框

<figure>

![]({assets_path}/components/text-fields/specs-textfields-outlined.png)

</figure><figure>

![]({assets_path}/components/text-fields/specs-textfields-outlined-active.png)

</figure><figure>

![]({assets_path}/components/text-fields/specs-textfields-outlined-error.png)

</figure></div>
