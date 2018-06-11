<div class="article__intro">

[en]: <> (Confirmation & acknowledgement)
# 确认 & 确知

[en]: <> (Confirmation and acknowledgement communications ask for confirmation before taking an action and acknowledge successful actions.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Confirmation)
[en]: <> (Acknowledgement)
* [译文](#usage)
* [译文](#confirmation)
* [译文](#acknowledgement)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Confirming and acknowledging user actions can reduce uncertainty about an action that a user has taken, or is about to take. They also prevent users from making mistakes.)
译文

[en]: <> (Types of actions)
#### 译文

[en]: <> (*Confirming actions* ask the user to verify that they want to proceed with an action.)
[en]: <> (*Acknowledging actions* provide text to let the user know whether an action they chose has been completed.)
* 译文
* 译文

[en]: <> (Not all actions warrant a confirmation or an acknowledgment.)
译文

[en]: <> (Confirmation)
<h2 id="confirmation">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (When a UI requests confirmation from a user, it asks if they want to proceed with the action they just took. It may be paired with a warning or critical information related to that action.)
译文

[en]: <> (Confirmation isn’t necessary when the consequences of an action are reversible or negligible. For example, if a check mark shows an image has been selected, further confirmation is unnecessary.)
译文

[en]: <> (Alert dialog)
### 译文

[en]: <> (Confirmation is best delivered using an alert dialog.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/communication/confirmation-acknowledgement/communication-confirmation1.png)

</figure>

</div>
<div class="mdui-col"><figure>

![]({assets_path}/communication/confirmation-acknowledgement/communication-confirmation2.png)

<figcaption>

[en]: <> (An alert dialog confirms the user action and informs the user of what will happen as a result.)
译文

</figcaption></figure></div></div>


[en]: <> (Acknowledgement)
<h2 id="acknowledgement">译文</a>

[en]: <> (Usage)
### 译文

[en]: <> (An acknowledgement notifies the user about system actions occurring in the background. It appears for a short amount of time and may include an option to undo the action.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/communication/confirmation-acknowledgement/communication-acknowledgement1.png)

<figcaption>

[en]: <> (An acknowledgment in the form of a snackbar appears, then fades after a few seconds.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/communication/confirmation-acknowledgement/communication-acknowledgement2.png)

<figcaption>

[en]: <> (An acknowledgment appears with an undo option. It remains until the user takes an unrelated action, such as scrolling through a list.)
译文

</figcaption></figure></div></div>

[en]: <> (Acknowledgement components)
### 译文

[en]: <> (Acknowledgements can be delivered by a variety of components. Criteria for choosing the right acknowledgement component includes:)
译文

[en]: <> (Urgency level)
[en]: <> (Inclusion of an action to correct a problem)
[en]: <> (Duration on screen \(transient, dismissable, or both\))
* 译文
* 译文
* 译文

[en]: <> (Acknowledgements that are transient mean the component will exit on its own within a few seconds of appearing. Dismissable acknowledgements can be dismissed by selecting an action to dismiss the component.)
译文

[en]: <> (Component    | Urgency  | Content                                 | Behavior                                   | Number of actions to dismiss)
[en]: <> (---------    |----------|---------                                |------                                      |---------)
[en]: <> (Snackbar     | Low      | Informational                           | Transient & dismissable                    | 0-1)
[en]: <> (Alert        | Medium   | Correct a problem; Awareness of state   | Persistent, non-blocking, and dismissable  | 1-2)
[en]: <> (Dialog       | High     | Require a choice; Acknowledge           | Persistent, blocking \(interruptive\)      | 1-2)
[en]: <> (Empty State  | Medium   | Informational                           | Persistent, blocking                       | 0-2)

译文     | 译文     | 译文      | 译文      | 译文
--------|----------|-----------|-----------|-------
译文     | 译文     | 译文      | 译文       |译文
译文     | 译文     | 译文      | 译文       |译文
译文     | 译文     | 译文      | 译文       |译文
译文     | 译文     | 译文      | 译文       |译文

[en]: <> (Alert)
#### 译文

[en]: <> (Use alerts to deliver a persistent, in-app message that informs users of a particular change state.)
译文

<figure>

![]({assets_path}/communication/confirmation-acknowledgement/understanding-alerts-usage.png)

<figcaption>

[en]: <> (An alert)
译文

</figcaption></figure>

[en]: <> (Snackbar)
#### 译文

[en]: <> (Use a snackbar to provide brief feedback about an operation.)
译文

<figure>

![]({assets_path}/communication/confirmation-acknowledgement/snackbars-container-do.png)

<figcaption>

[en]: <> (A snackbar)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Empty state)
#### 译文

[en]: <> (When a UI is only available online and content has failed to load or sync, use an empty state. The user should be able to interact with as much of the rest of the app as possible. A link to reload can be presented to help a user accomplish their task.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/communication/confirmation-acknowledgement/empty-state-do.png)

<figcaption>

[en]: <> (An empty state)
译文

</figcaption></figure></div></div></div>
