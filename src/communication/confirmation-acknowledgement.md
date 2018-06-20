<div class="article__intro">

[en]: <> (Confirmation & acknowledgement)
# 确认 & 确知

[en]: <> (Confirmation and acknowledgement communications ask for confirmation before taking an action and acknowledge successful actions.)
确认和确知在采取行动前进行确认、以及在执行确认操作前进行确认。

<nav>

[en]: <> (Usage)
[en]: <> (Confirmation)
[en]: <> (Acknowledgement)
* [用法](#usage)
* [确认](#confirmation)
* [确知](#acknowledgement)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Confirming and acknowledging user actions can reduce uncertainty about an action that a user has taken, or is about to take. They also prevent users from making mistakes.)
对用户行为进行确认和确知可以减少用户已经或即将采取的操作的不确定性。它还可以防止用户犯错误。

[en]: <> (Types of actions)
#### 操作类型

[en]: <> (*Confirming actions* ask the user to verify that they want to proceed with an action.)
[en]: <> (*Acknowledging actions* provide text to let the user know whether an action they chose has been completed.)
* *确认操作*要求用户确认他们想执行的操作。
* *确知操作*提供文本，让用户知道他们选择的操作是否已经完成。

[en]: <> (Not all actions warrant a confirmation or an acknowledgment.)
不是所有的操作都需要确认或确知。

[en]: <> (Confirmation)
<h2 id="confirmation">确认</h2>

[en]: <> (Usage)
### 用法

[en]: <> (When a UI requests confirmation from a user, it asks if they want to proceed with the action they just took. It may be paired with a warning or critical information related to that action.)
当 UI 请求用户的确认时，它会询问用户是否想继续他们刚刚采取的操作。它可能和与该操作相关的警告或关键信息同时出现。

[en]: <> (Confirmation isn’t necessary when the consequences of an action are reversible or negligible. For example, if a check mark shows an image has been selected, further confirmation is unnecessary.)
当一个操作的结果是可逆的或者可以忽略的时候，确认是不必要的。例如，选中一个复选标记，表示一张图片被选中，这个过程不需要进一步确认。

[en]: <> (Alert dialog)
### 警告框

[en]: <> (Confirmation is best delivered using an alert dialog.)
确认最好使用警告框的形式出现。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/communication/confirmation-acknowledgement/communication-confirmation1.png)

</figure></div><div class="mdui-col"><figure>

![]({assets_path}/communication/confirmation-acknowledgement/communication-confirmation2.png)

<figcaption>

[en]: <> (An alert dialog confirms the user action and informs the user of what will happen as a result.)
警告框确认用户操作，并通知用户操作结果。

</figcaption></figure></div></div>


[en]: <> (Acknowledgement)
<h2 id="acknowledgement">确知</a>

[en]: <> (Usage)
### 用法

[en]: <> (An acknowledgement notifies the user about system actions occurring in the background. It appears for a short amount of time and may include an option to undo the action.)
确知会通知用户在后台发生的系统操作。它出现的时间很短，且可能包含取消操作的选项。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/communication/confirmation-acknowledgement/communication-acknowledgement1.png)

<figcaption>

[en]: <> (An acknowledgment in the form of a snackbar appears, then fades after a few seconds.)
以 snackbar 形式出现的确知，几秒钟后就会消失。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/communication/confirmation-acknowledgement/communication-acknowledgement2.png)

<figcaption>

[en]: <> (An acknowledgment appears with an undo option. It remains until the user takes an unrelated action, such as scrolling through a list.)
确知会出现一个撤销选项。它会持续显示，直到用户执行一个不相关的操作，例如滚动列表，它才会消失。

</figcaption></figure></div></div>

[en]: <> (Acknowledgement components)
### 确知组件

[en]: <> (Acknowledgements can be delivered by a variety of components. Criteria for choosing the right acknowledgement component includes:)
确知可以通过各种组件进行传递。选择正确的确知组件的标准包括：

[en]: <> (Urgency level)
[en]: <> (Inclusion of an action to correct a problem)
[en]: <> (Duration on screen \(transient, dismissable, or both\))
* 紧急程度
* 包含一个纠正问题的操作
* 在屏幕上的持续时间（短暂的、可忽略的、或两者都有）

[en]: <> (Acknowledgements that are transient mean the component will exit on its own within a few seconds of appearing. Dismissable acknowledgements can be dismissed by selecting an action to dismiss the component.)
短暂的确知意味着组件将在出现后的几秒内自动退出。可忽略的确知可以通过点击操作来忽略该组件。

[en]: <> (Component    | Urgency  | Content                                 | Behavior                                   | Number of actions to dismiss)
[en]: <> (---------    |----------|---------                                |------                                      |---------)
[en]: <> (Snackbar     | Low      | Informational                           | Transient & dismissable                    | 0-1)
[en]: <> (Alert        | Medium   | Correct a problem; Awareness of state   | Persistent, non-blocking, and dismissable  | 1-2)
[en]: <> (Dialog       | High     | Require a choice; Acknowledge           | Persistent, blocking \(interruptive\)      | 1-2)
[en]: <> (Empty State  | Medium   | Informational                           | Persistent, blocking                       | 0-2)

组件       | 紧急程度  | 内容                          | 行为                      | 忽略操作的数量
--------  |----------|-----------                   |-----------               |-------
Snackbar  | 低       | 信息                          | 短暂的、可忽略的            |0-1
警告       | 中       | 纠正一个问题；使用户知道当前状态   | 持久的，非阻塞的，可忽略的    |1-2
对话框     | 高       | 需要进行选择；确知               | 持久的，阻塞的（打断用户的）  |1-2
空状态     | 中       | 信息                          | 持久的，阻塞的              |0-2

[en]: <> (Alert)
#### 警告

[en]: <> (Use alerts to deliver a persistent, in-app message that informs users of a particular change state.)
使用警告来传递一个持久的、应用内的消息，它通知用户特定的状态变更。

<figure>

![]({assets_path}/communication/confirmation-acknowledgement/understanding-alerts-usage.png)

<figcaption>

[en]: <> (An alert)
一个警告

</figcaption></figure>

[en]: <> (Snackbar)
#### Snackbar

[en]: <> (Use a snackbar to provide brief feedback about an operation.)
使用 Snackbar 来提供关于一个操作的简短反馈。

<figure>

![]({assets_path}/communication/confirmation-acknowledgement/snackbars-container-do.png)

<figcaption>

[en]: <> (A snackbar)
snackbar

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Empty state)
#### 空状态

[en]: <> (When a UI is only available online and content has failed to load or sync, use an empty state. The user should be able to interact with as much of the rest of the app as possible. A link to reload can be presented to help a user accomplish their task.)
当 UI 只在联网时可用，在内容加载失败时，显示空状态。应该让用户能尽可能多的与应用的其他部分进行交互。可以提供一个重新加载的链接，以帮助用户继续他们的操作。

</div><div class="mdui-col"><figure>

![]({assets_path}/communication/confirmation-acknowledgement/empty-state-do.png)

<figcaption>

[en]: <> (An empty state)
空状态

</figcaption></figure></div></div></div>
