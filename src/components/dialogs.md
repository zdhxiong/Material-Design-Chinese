<div class="article__intro">

[en]: <> (Dialogs)
# 对话框

[en]: <> (Dialogs inform users about a task and can contain critical information, require decisions, or involve multiple tasks.)
对话框可以用于告知用户关于一项任务的情况、可以包含重要信息、可以要求用户做出决策、或者包含多个任务。

<figure>

![]({assets_path}/components/dialogs/dialogs-usage-1.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Actions)
[en]: <> (Alert dialog)
[en]: <> (Simple dialog)
[en]: <> (Confirmation dialog)
[en]: <> (Full-screen dialog)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [行为](#behavior)
* [操作](#actions)
* [警告框](#alert-dialog)
* [简单对话框](#simple-dialog)
* [确认框](#confirmation-dialog)
* [全屏对话框](#full-screen-dialog)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (A dialog is a type of modal window that appears in front of app content to provide critical information or ask for a decision. Dialogs disable all app functionality when they appear, and remain on screen until confirmed, dismissed, or a required action has been taken.)
对话框是一个模态化窗口，显示在应用内容的前面，用于提供重要信息、或要求用户做出决策。对话框显示后，会禁用应用中所有其他功能，并保留在屏幕上，直到用户确认、取消或执行了对话框中的操作。

[en]: <> (Dialogs are purposefully interruptive, so they should be used sparingly.)
对话框会有目的性地中断用户操作，所以使用的时候请谨慎。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-illos-03.png)

<figcaption>

[en]: <> (Focused)
#### 可聚集用户注意力的

[en]: <> (Dialogs focus user attention to ensure their content is addressed.)
对话框会立刻获取用户的注意，以确保其内容得到处理。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-illos-01.png)

<figcaption>

[en]: <> (Direct)
#### 直接的

[en]: <> (Dialogs should be direct in communicating information and dedicated to completing a task.)
对话框应该直接用于沟通信息，并专门用于完成某一项任务。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-illos-02.png)

<figcaption>

[en]: <> (Helpful)
#### 有帮助的

[en]: <> (Dialogs should appear in response to a user task or an action, with relevant or contextual information.)
对话框应该用于对用户操作的响应，并提供相关信息。

</figcaption></figure></div></div>

[en]: <> (When to use)
### 何时使用

[en]: <> (Dialogs should be used for:)
对话框应该用于：

[en]: <> (Errors that block an app’s normal operation)
[en]: <> (Critical information that requires a specific user task, decision, or acknowledgement)
* 发生使应用无法正常使用的错误
* 需要用户操作、做出决策或进行确认的重要信息

<figure>

![]({assets_path}/components/dialogs/dialog-when-to-use.png)

</figure>

[en]: <> (Types)
### 类型

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-alertdialog.png)

<figcaption>

[en]: <> (Alert dialog)
#### 警告框

[en]: <> (Alert dialogs interrupt users with urgent information, details, or actions.)
警告框会打断用户正在进行的操作，并显示有关的重要信息、详细信息或操作。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-simpledialog.png)

<figcaption>

[en]: <> (Simple dialog)
#### 简单对话框

[en]: <> (Simple dialogs display a list of items that take immediate effect when selected.)
简单对话框显示一个项目列表，在选中其中一项后会立即执行对应的操作。

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-confirmationdialog.png)

<figcaption>

[en]: <> (Confirmation dialog)
#### 确认框

[en]: <> (Confirmation dialogs require users to confirm a choice before the dialog is dismissed.)
确认框需要用户进行确认后才会关闭。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-fullscreendialog.png)

<figcaption>

[en]: <> (Full-screen dialog)
#### 全屏对话框

[en]: <> (Full-screen dialogs fill the entire screen, containing actions that require a series of tasks to complete.)
全屏对话框会填满整个屏幕，对话框中包含了需要完成的一系列任务。

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

<figure>

![]({assets_path}/components/dialogs/dialogs-elements-1.png)

<figcaption>

[en]: <> (Container)
[en]: <> (Title \(optional\))
[en]: <> (Supporting text)
[en]: <> (Buttons)
[en]: <> (Scrim)
1. 容器
2. 标题（可选）
3. 辅助文本
4. 按钮
5. 遮罩层

</figcaption></figure>

[en]: <> (Dialog box and scrim)
### 对话框和遮罩层

[en]: <> (A dialog is a type of modal window. Access to the rest of the UI is disabled until the modal is addressed. All modal surfaces are interruptive by design – their purpose is to have the user focus on content on a surface that appears in front of all other surfaces.)
对话框是一种模态框窗口。在对话框显示期间会禁用对所有其他元素的操作。所有模态化组件都是中断式的 - 它们的目的是让用户专注于出现在所有其他元素前面的内容。

[en]: <> (To express that the rest of the app is inaccessible, and to focus attention on the dialog, surfaces behind the dialog are scrimmed. A scrim is a temporary treatment that can be applied to Material surfaces for the purpose of making content on the surface less prominent.)
为了表示应用的其余部分无法操作，并将注意力集中在对话框上，对话框后面的内容会被淡化。遮罩层是一个临时显示的半透明层，可以显示在内容的表面，使内容不那么突出。

[en]: <> (Title)
### 标题

[en]: <> (A dialog’s purpose should be communicated by its title and button text.)
应通过对话框的标题和按钮文本来表达对话框的用途。

[en]: <> (Titles should:)
标题应该：

[en]: <> (Contain a brief, clear statement or question)
[en]: <> (Avoid apologies \(“Sorry for the interruption”\), alarm \(“Warning!”\), or ambiguity \(“Are you sure?”\))
* 包含简单明了的陈述性语句、或疑问性语句
* 避免使用表示道歉（如“抱歉打扰了”）、表示惊恐（如“警告！”）、包含歧义（如“你确定吗？”）的语句

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-titles-do-1.png)

<figcaption>

{do}

[en]: <> (This dialog title poses a specific question, concisely explains what’s involved in the request, and provides clear actions.)
该对话框的标题中提出了一个问题，简明扼要的描述了对话框内容，并提供了一个明确的操作。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-titles-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use dialog titles that pose an ambiguous question.)
不要使用带有歧义的对话框标题。

</figcaption></figure></div></div>

[en]: <> (Buttons)
### 按钮

[en]: <> (Side-by-side buttons \(Recommended\))
#### 并排按钮（推荐）

[en]: <> (Side-by-side buttons display two text buttons next to one another.)
并排按钮显示两个彼此相邻的文本按钮。

<figure>

![]({assets_path}/components/dialogs/dialogs-buttons-sidebyside-1.png)

<figcaption>

[en]: <> (These side-by-side buttons display buttons provide the actions of “Disagree” and “Agree” as options.)
这个并排按钮提供了“不同意”和“同意”两个选项。

</figcaption></figure>

[en]: <> (Stacked full-width buttons)
#### 堆叠的全宽按钮

[en]: <> (Stacked buttons accommodate longer button text. Confirming actions appear above dismissive actions.)
堆叠按钮可容纳更长的按钮文本。确认按钮放在取消按钮的上方。

<figure>

![]({assets_path}/components/dialogs/dialogs-buttons-stacked-1.png)

</figure>

[en]: <> (Elevation)
### 海拔高度

[en]: <> (Dialogs are displayed at 24dp elevation and can display a shadow. They appear above other content and typically have a scrim below them that covers all app content.)
对话框有 24dp 的海拔高度，且可以显示阴影。对话框出现在其他内容之上，且通常在其下方有一个覆盖应用内容的遮罩层。

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Interaction)
### 交互

[en]: <> (Dialogs appear without warning, requiring users to stop their current task. They should be used sparingly, as not every choice or setting warrants interruption.)
对话框出现之前不会有提示，不会要求用户先停止他们正在进行的操作。应该谨慎使用对话框，因为不是每个选择或设置都必须中断用户操作。

[en]: <> (Position)
### 位置

[en]: <> (Dialogs retain focus until dismissed or an action has been taken, such as choosing a setting. They shouldn’t be obscured by other elements or appear partially on screen, with the exception of full-screen dialogs.)
对话框会持续获得焦点，直到用户关闭它、或执行了对话框中的操作（例如选择了一个设置项）。除了全屏对话框外，它们不应该被其他元素遮挡，或对话框的一部分超出屏幕可视范围。

[en]: <> (Scrolling)
### 滚动

[en]: <> (Most dialog content should avoid scrolling. When scrolling is required, the dialog title is pinned at the top, with buttons pinned at the bottom. This ensures selected content remains visible alongside the title and buttons, even upon scroll.)
大部分的对话框内容应避免出现滚动条。当必须滚动时，对话框标题需要固定在顶部，按钮需要固定在底部。这确保了当前内容始终在标题和按钮旁边可见，即使在滚动时也是如此。

[en]: <> (Dialogs don’t scroll with elements outside of the dialog, such as the background.)
对话框不会跟随对话框外的元素（如背景）滚动。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/dialogs/dialogs-actions-do-1a.mp4" src="{assets_path}/components/dialogs/dialogs-actions-do-1a.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When viewing a scrollable list of options, the dialog title and buttons remain fixed.)
对话框中的列表滚动时，标题和按钮始终保持在固定位置。

</figcaption></figure>

[en]: <> (Dismissing dialogs)
### 关闭对话框

[en]: <> (Dialogs may be dismissed by:)
对话框可以通过下列方式关闭：

[en]: <> (Tapping outside of the dialog)
[en]: <> (Tapping the “Cancel” button)
[en]: <> (Tapping the system back button \(Android only\))
* 点击对话框外部
* 点击“取消”按钮
* 点击系统的后退按钮（仅限 Android）

[en]: <> (If the user’s ability to dismiss a dialog is disabled, the user must choose a dialog action to proceed.)
如果禁用了关闭对话框的功能，则用户必须选择其中一个对话框操作后才能继续。

[en]: <> (Actions)
<h2 id="actions">操作</h2>

[en]: <> (Types of actions)
### 操作类型

[en]: <> (Dialogs present a distinct choice to users through their title, content, and actions. Dialog actions are represented as buttons and allow users confirm or dismiss something.)
对话框通过标题、内容和操作按钮为用户提供了明确的选项。对话框操作用按钮的形式表示，使用户可以进行确认和取消。

[en]: <> (There are three types of dialog actions:)
对话框操作有三种类型：

[en]: <> (Confirming actions)
#### 确认操作

[en]: <> (To resolve what triggered the dialog, confirming actions confirm a proposed action. These actions can involve removing something, such as “Delete” or “Remove,” if it suits the context. They are placed on the right side of the screen.)
确认操作可以执行系统推荐的操作。确认操作可以是删除某些内容，例如“删除”或“移除”。它们放在界面的右侧。

[en]: <> (Dismissive actions)
#### 取消操作

[en]: <> (Dismissive actions dismiss a proposed action, and return the user to the originating screen or step. They are placed directly to the left of a confirming action.)
取消操作会无视系统推荐的操作，并返回到之前的界面或之前的步骤。它们放在确认操作的左侧。

[en]: <> (Acknowledgement actions)
#### 确知操作

[en]: <> (When user acknowledgement is required to proceed, a single action may be presented. Alternatively, use a snackbar to communicate this type of information.)
当需要用户确知才能继续时，可以显示单个操作。或者使用 snackbar 来表示这类信息。

<figure>

![]({assets_path}/components/dialogs/dialogs-actions-do-1a.png)

<figcaption>

{do}

[en]: <> (Disable confirming actions \(1\) until a choice is made. Dismissive actions are never disabled.)
在做出选择之前，禁用确认操作（1）。取消操作不会被禁用。

</figcaption></figure><figure>

![]({assets_path}/components/dialogs/dialogs-actions-dont-1.png)

<figcaption>

{dont}

[en]: <> (Dismissive actions \(1\) are placed to the left of confirming actions.)
取消操作（1）必须位于确认操作左侧。

</figcaption></figure><figure>

![]({assets_path}/components/dialogs/dialogs-actions-do-2.png)

<figcaption>

{do}

[en]: <> (A single action may be provided only if it’s an acknowledgement.)
只有在确知操作时，才能只提供单个按钮。

</figcaption></figure><figure>

![]({assets_path}/components/dialogs/dialogs-actions-dont-2.png)

<figcaption>

{dont}

[en]: <> (Avoid presenting users with unclear choices. “Cancel” doesn't make sense here because no clear action is proposed.)
避免向用户提供不明确的选项。“取消”在这里没有任何意义，因为这个对话框并没有系统推荐的操作。

</figcaption></figure>

[en]: <> (Number of actions)
### 操作数量

[en]: <> (Dialogs should contain a maximum of two actions.)
对话框最多只能包含两个操作。

[en]: <> (If a single action is provided, it must be an acknowledgement action.)
[en]: <> (If two actions are provided, one must be a confirming action, and the other a dismissing action.)
[en]: <> (Providing a third action such as “Learn more” is not recommended as it navigates the user away from the dialog, leaving the dialog task unfinished.)
* 如果只提供单个操作，则必须是确知操作。
* 如果提供了两个操作，一个必须是确认操作，另一个是取消操作。
* 建议不要提供第三个操作，例如“了解更多”，因为它会导致用户没有完成对话框上的操作，就离开对话框。

[en]: <> (Rather than adding a third action, an inline expansion can display more information. If more extensive information is needed, provide it prior to entering the dialog.)
可以通过在对话框内展开显示更多信息，而不是添加第三个操作。如果需要显示更多信息，请在打开对话框之前提供。

<figure>

![]({assets_path}/components/dialogs/dialogs-actions-dont-3.png)

<figcaption>

{dont}

[en]: <> (The “Learn more” action \(1\) navigates away from this dialog, potentially leaving it in an indeterminate state.)
“了解更多”操作（1）会使用户离开对话框，使对话框留在未处理的状态。

</figcaption></figure>

[en]: <> (Alert dialog)
<h2 id="alert-dialog">警告框</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Alert dialogs interrupt users with urgent information, details, or actions.)
警告框会打断用户正在进行的操作，并显示有关的重要信息、详细信息或操作。

[en]: <> (Behavior)
### 行为

[en]: <> (To close an alert dialog, one of its actions must be selected.)
必须选择警告框中的其中一个操作，才能关闭警告框。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-alertdialog-do-1.png)

<figcaption>

{do}

[en]: <> (The action “Discard” indicates the outcome of the decision.)
“废弃”表示了操作的结果。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/dialogs/dialogs-alertdialog-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use action text that fails to indicate what the selection will do. “Cancel” and “Delete” better indicate what will occur in this dialog.)
不要使用无法说明操作结果的按钮文本。使用“取消”和“删除”可以更好地说明对话框操作的结果。

</figcaption></figure></div></div>

[en]: <> (Simple dialog)
<h2 id="simple-dialog">简单对话框</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Simple dialogs can display items that are immediately actionable when selected. They don’t have text buttons.)
简单对话框可以显示选项列表，在选中其中一项后，可以立即执行对应的操作。简单对话框不含文本按钮。

[en]: <> (As simple dialogs are interruptive, they should be used sparingly. Alternatively, dropdown menus provide options in a non-modal, less disruptive way.)
由于简单对话框会中断用户操作，应该谨慎使用。或者，使用下拉菜单，可以以非模态，干扰最小的方式为用户提供选项。

[en]: <> (Behavior)
### 行为

[en]: <> (A simple dialog allows the following interactions:)
简单对话框允许进行以下交互：

[en]: <> (Tap an action to choose it and close the dialog)
[en]: <> (Tap outside the dialog to close the dialog without taking an action)
* 选择一个选项，执行对应的操作，并关闭对话框
* 点击对话框外面区域关闭对话框，不执行任何操作

<figure>

![]({assets_path}/components/dialogs/dialogs-simpledialog-1.png)

<figcaption>

[en]: <> (A simple dialog)
一个简单对话框

</figcaption></figure>

[en]: <> (Simple dialogs without actions)
#### 简单对话框不含操作按钮

[en]: <> (Simple dialogs allow users to act on selected elements, without action text. For example, users can simply select a list item to take action on it.)
简单对话框使用户可以直接选择选项来执行操作，无需文本按钮。例如，用户只需选择一个列表项即可对其执行操作。

<figure>

![]({assets_path}/components/dialogs/dialogs-simpledialog-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t display text buttons in simple dialogs. The choice itself is actionable when tapped.)
不要在简单对话框中显示文本按钮。在点击时，选项本身就能触发操作。

</figcaption></figure><figure>

![]({assets_path}/components/dialogs/dialogs-simpledialog-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t include dismissive actions like “Cancel” in a simple dialog. Users can tap anywhere outside the dialog to close it.)
不要在对话框中包含取消按钮。用户可以点击对话框外的区域来关闭对话框。

</figcaption></figure>

[en]: <> (Confirmation dialog)
<h2 id="confirmation-dialog">确认框</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Confirmation dialogs give users the ability to provide final confirmation of a choice before committing to it, so they have a chance to change their minds if necessary.)
确认框使用户在最终提交之前，再次确认所选的内容。因此在必要时，用户可以修改他们的选择。

[en]: <> (If the user confirms a choice, it’s carried out. Otherwise, the user can dismiss the dialog. For example, users can listen to multiple ringtones but only make a final selection upon touching “OK.”)
如果用户点击了确认，则会继续执行。否则，用户可以关闭对话框。例如，用户可以试听多个铃声，但只有在点击“确认”时才会做出最终选择。

[en]: <> (Behavior)
### 行为

[en]: <> (To confirm a choice, the user taps a confirmation action. To cancel, the user taps a dismissive action.)
用户点击确认按钮后，会确认做出的选择。点击取消按钮，可以取消。

<figure>

![]({assets_path}/components/dialogs/dialogs-confirmation-layout.png)

<figcaption>

[en]: <> (The user must either confirm a choice or dismiss the dialog before proceeding.)
在继续之前，用户必须确认选择或关闭对话框。

</figcaption></figure>

[en]: <> (Buttons)
### 按钮

[en]: <> (Confirmation dialogs provide both confirmation and cancel buttons. After a confirmation button is tapped, a selection is confirmed. If the cancel button is tapped, or the area outside the dialog, the action is cancelled.)
确认框需要同时提供确认和取消按钮。点击确认按钮后，确认选择。点击取消按钮、或者对话框外面的区域，会取消操作。

<figure>

![]({assets_path}/components/dialogs/dialogs-confirmation-layout-do.png)

<figcaption>

{do}

[en]: <> (Provide confirmation and dismissive buttons.)
提供确认和取消按钮。

</figcaption></figure><figure>

![]({assets_path}/components/dialogs/dialogs-confirmation-layout-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t provide a single action, as it’s unclear how to dismiss the dialog.)
不要只提供单个按钮，因为这会使用户不清楚如何关闭对话框。

</figcaption></figure>

[en]: <> (Full-screen dialog)
<h2 id="full-screen-dialog">全屏对话框</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Full-screen dialogs group a series of tasks, such as creating a calendar entry with the event title, date, location, and time. Because they take up the entire screen, full-screen dialogs are the only dialogs over which other dialogs can appear.)
全屏对话框可以将一系列任务分组，例如创建一个包含事件标题、日期、地址和事件的日历条目。因为全屏对话框占据了整个屏幕，所以全屏对话框是唯一可以显示其他对话框的对话框。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/dialogs/dialogs-fullscreen-behavior.mp4" src="{assets_path}/components/dialogs/dialogs-fullscreen-behavior.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A calendar app launching a full-screen dialog)
这个日历应用打开了一个全屏对话框

</figcaption></figure>

[en]: <> (Full-screen dialogs may be used for content or tasks that meet any of these criteria:)
全屏对话框可以用于满足以下任何条件的内容或任务：

[en]: <> (Dialogs that include components which require keyboard input, such as form fields)
[en]: <> (When changes aren’t saved instantly)
[en]: <> (When components within the dialog open additional dialogs)
* 包含需要键盘输入的组件的对话框，例如表单字段
* 做出的更改没有立即保存时
* 对话框中的组件需要打开其他对话框时

[en]: <> (Full-screen dialogs are for mobile devices only. For tablet or desktop, use a modal dialog.)
全屏对话框仅适用与移动设备。对于平板设备和桌面设备，请使用模态化对话框。

[en]: <> (Behavior)
### 行为

[en]: <> (Saving selections)
#### 保存选择

[en]: <> (To save a selection in a full-screen dialog, the user taps “Save.” To discard all changes and exit, the user taps the “X” icon or “Back” button.)
要在全屏对话框中保存选择，可以点击“保存”。要放弃所有更改并退出，可以点击“X”图标或者“后退”按钮。

[en]: <> (Confirmation)
#### 确认

[en]: <> (The confirmation action is disabled until all mandatory fields are filled. Use descriptive verbs such as “Save,” “Send,” “Share,” “Update,” or “Create.” Don’t use vague terms such as “Done,” “OK” or “Close.”)
在所有必填字段填写完之前，将禁用确认操作。使用描述性的动词，如“保存”、“发送”、“分享”、“更新”或“新建”。不要使用模糊的术语，例如“完成”、“确定”或“关闭”。

[en]: <> (If no changes have been made, the dialog closes and no discard confirmation is required)
[en]: <> (If the user has made changes, the user is prompted to confirm the discard action)
* 如果没有做出任何更改，则对话框将关闭，且不需要确认丢弃操作
* 如果用户做出了更改，则会提示用户确认丢弃操作

<figure>

![]({assets_path}/components/dialogs/dialogs-fullscreen-behavior-dont-1.png)

<figcaption>

{dont}

[en]: <> (A “Close” button \(1\) is vague because it does not indicate whether changes will be saved or discarded.)
“关闭”按钮（1）含义不清楚，因为不确定它表示保存还是丢弃更改。

</figcaption></figure>

[en]: <> (Dialog windows)
#### 对话框窗口

[en]: <> (Launching a full-screen dialog temporarily resets the app’s perceived elevation, allowing simple menus or dialogs to appear above the full-screen dialog.)
启动全屏对话框后会暂时重置应用的海拔高度，允许在全屏对话框上方显示简单菜单或对话框。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/dialogs/dialogs-dialog-windows.mp4" src="{assets_path}/components/dialogs/dialogs-dialog-windows.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A calendar app launching a full-screen dialog, which launches a confirmation dialog, and alert dialog.)
一个日历应用，打开了一个全屏对话框，并在其中打开了一个确认框和警告框。

</figcaption></figure>

[en]: <> (Layout)
### 布局

[en]: <> (Full-screen dialogs cover the screen and don’t appear as a floating modal window.)
全屏对话框会覆盖整个屏幕，不会显示为模态窗口。

[en]: <> (Actions)
#### 操作

[en]: <> (Place confirmation and dismissive actions in the top app bar.)
把确认和取消操作放在顶部应用栏中。

[en]: <> (Navigation)
#### 导航

[en]: <> (Because full-screen dialogs can only be completed, dismissed, or closed, only use the close “X” navigation button.)
由于全屏对话框只能完成、取消或关闭，因此只能使用“X”关闭按钮进行导航。

<figure>

![]({assets_path}/components/dialogs/dialogs-fullscreen-layout-dont-1.png)

<figcaption>

{dont}

[en]: <> (Avoid any navigation icon other than “X.” The up arrow \(1\) indicates the view’s state is being saved, which isn’t the case in a full-screen dialog.)
不要使用任何除“X”之外的导航图标。向上箭头（1）表示正在保存状态，而在全屏对话框中则不是这种情况。

</figcaption></figure>

[en]: <> (Titles)
#### 标题

[en]: <> (Titles should be succinct. They can wrap to a second line if necessary, and be truncated. If there are long titles, or titles of variable lengths \(such as translations\), place them in the content area instead of the app bar.)
标题应该简洁。如果有必要，可以换行成两行，并被截断。如果有长标题、或者长度不固定的标题（例如翻译后的标题），请把它们放在内容区域，而不是应用栏中。

<figure>

![]({assets_path}/components/dialogs/dialogs-fullscreen-titles-dont-1.png)

<figcaption>

{caution}

[en]: <> (Avoid placing long titles in a dialog’s top app bar \(1\), as the truncated text may lead to misunderstanding.)
避免在对话框的顶部应用栏（1）中放置长标题，因为被截断后的文本可能会导致误解。

</figcaption></figure><figure>

![]({assets_path}/components/dialogs/dialogs-fullscreen-titles-do-1.png)

<figcaption>

{do}

[en]: <> (Find ways to shorten app bar text, and place longer titles into the content area \(1\) of a full-screen dialog.)
想办法缩短应用栏文本，并将更长的标题放到全屏对话框的内容区域（1）。

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (Mobile)
### 移动端

[en]: <> (Simple dialog)
#### 简单对话框

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-simple.png)

</figure>

[en]: <> (Alert dialog)
#### 警告框

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-alert.png)

</figure>

[en]: <> (Confirmation dialog)
#### 确认框

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-confirmation.png)

</figure>

[en]: <> (Confirmation dialog \(scrolling\))
#### 确认框（可滚动）

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-confirmation-scrolled.png)

</figure>

[en]: <> (Confirmation dialog with long actions)
#### 有较长操作文本的确认框

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-confirmation-longer-buttons.png)

</figure>

[en]: <> (Full-screen dialog)
#### 全屏对话框

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-fullscreen.png)

</figure>

[en]: <> (Desktop)
### 桌面端

[en]: <> (Mobile alert)
#### 警告框

<figure>

![]({assets_path}/components/dialogs/specs-dialog-desktop-simple.png)

</figure></div>
