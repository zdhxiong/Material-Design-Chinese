<div class="article__intro">

[en]: <> (Dialogs)
# 译文

[en]: <> (Dialogs inform users about a task and can contain critical information, require decisions, or involve multiple tasks.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-usage-1.png)

</figure>

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Actions)
[en]: <> (Alert dialog)
[en]: <> (Simple dialog)
[en]: <> (Confirmation dialog)
[en]: <> (Full-screen dialog)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#actions)
* [译文](#alert-dialog)
* [译文](#simple-dialog)
* [译文](#confirmation-dialog)
* [译文](#full-screen-dialog)
* [译文](#theming)
* [译文](#specs)

</nav>

</div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (A dialog is a type of modal window that appears in front of app content to provide critical information or ask for a decision. Dialogs disable all app functionality when they appear, and remain on screen until confirmed, dismissed, or a required action has been taken.)
译文

[en]: <> (Dialogs are purposefully interruptive, so they should be used sparingly.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-illos-03.png)

<figcaption>

[en]: <> (Focused)
#### 译文

[en]: <> (Dialogs focus user attention to ensure their content is addressed.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-illos-01.png)

<figcaption>

[en]: <> (Direct)
#### 译文

[en]: <> (Dialogs should be direct in communicating information and dedicated to completing a task.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-illos-02.png)

<figcaption>

[en]: <> (Helpful)
#### 译文

[en]: <> (Dialogs should appear in response to a user task or an action, with relevant or contextual information.)
译文

</figcaption></figure>

</div></div>

[en]: <> (When to use)
### 译文

[en]: <> (Dialogs should be used for:)
译文

[en]: <> (Errors that block an app’s normal operation)
[en]: <> (Critical information that requires a specific user task, decision, or acknowledgement)
* 译文
* 译文

<figure>

![]({assets_path}/components/dialogs/dialog-when-to-use.png)

</figure>

[en]: <> (Types)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-alertdialog.png)

<figcaption>

[en]: <> (Alert dialog)
#### 译文

[en]: <> (Alert dialogs interrupt users with urgent information, details, or actions.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-simpledialog.png)

<figcaption>

[en]: <> (Simple dialog)
#### 译文

[en]: <> (Simple dialogs display a list of items that take immediate effect when selected.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-confirmationdialog.png)

<figcaption>

[en]: <> (Confirmation dialog)
#### 译文

[en]: <> (Confirmation dialogs require users to confirm a choice before the dialog is dismissed.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-fullscreendialog.png)

<figcaption>

[en]: <> (Full-screen dialog)
#### 译文

[en]: <> (Full-screen dialogs fill the entire screen, containing actions that require a series of tasks to complete.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<figure>

![]({assets_path}/components/dialogs/dialogs-elements-1.png)

<figcaption>

[en]: <> (Container)
[en]: <> (Title \(optional\))
[en]: <> (Supporting text)
[en]: <> (Buttons)
[en]: <> (Scrim)
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文

</figcaption></figure>

[en]: <> (Dialog box and scrim)
### 译文

[en]: <> (A dialog is a type of modal window. Access to the rest of the UI is disabled until the modal is addressed. All modal surfaces are interruptive by design – their purpose is to have the user focus on content on a surface that appears in front of all other surfaces.)
译文

[en]: <> (To express that the rest of the app is inaccessible, and to focus attention on the dialog, surfaces behind the dialog are scrimmed. A scrim is a temporary treatment that can be applied to Material surfaces for the purpose of making content on the surface less prominent.)
译文

[en]: <> (Title)
### 译文

[en]: <> (A dialog’s purpose should be communicated by its title and button text.)
译文

[en]: <> (Titles should:)
译文

[en]: <> (Contain a brief, clear statement or question)
[en]: <> (Avoid apologies \(“Sorry for the interruption”\), alarm \(“Warning!”\), or ambiguity \(“Are you sure?”\))
* 译文
* 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-titles-do-1.png)

<figcaption>

{do}

[en]: <> (This dialog title poses a specific question, concisely explains what’s involved in the request, and provides clear actions.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-titles-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use dialog titles that pose an ambiguous question.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Buttons)
### 译文

[en]: <> (Side-by-side buttons \(Recommended\))
#### 译文

[en]: <> (Side-by-side buttons display two text buttons next to one another.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-buttons-sidebyside-1.png)

<figcaption>

[en]: <> (These side-by-side buttons display buttons provide the actions of “Disagree” and “Agree” as options.)
译文

</figcaption></figure>

[en]: <> (Stacked full-width buttons)
#### 译文

[en]: <> (Stacked buttons accommodate longer button text. Confirming actions appear above dismissive actions.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-buttons-stacked-1.png)

</figure>

[en]: <> (Elevation)
### 译文

[en]: <> (Dialogs are displayed at 24dp elevation and can display a shadow. They appear above other content and typically have a scrim below them that covers all app content.)
译文

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Interaction)
### 译文

[en]: <> (Dialogs appear without warning, requiring users to stop their current task. They should be used sparingly, as not every choice or setting warrants interruption.)
译文

[en]: <> (Position)
### 译文

[en]: <> (Dialogs retain focus until dismissed or an action has been taken, such as choosing a setting. They shouldn’t be obscured by other elements or appear partially on screen, with the exception of full-screen dialogs.)

[en]: <> (Scrolling)
### 译文

[en]: <> (Most dialog content should avoid scrolling. When scrolling is required, the dialog title is pinned at the top, with buttons pinned at the bottom. This ensures selected content remains visible alongside the title and buttons, even upon scroll.)
译文

[en]: <> (Dialogs don’t scroll with elements outside of the dialog, such as the background.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/dialogs/dialogs-actions-do-1a.mp4" src="{assets_path}/components/dialogs/dialogs-actions-do-1a.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (When viewing a scrollable list of options, the dialog title and buttons remain fixed.)
译文

</figcaption>

</figure>

[en]: <> (Dismissing dialogs)
### 译文

[en]: <> (Dialogs may be dismissed by:)
译文

[en]: <> (Tapping outside of the dialog)
[en]: <> (Tapping the “Cancel” button)
[en]: <> (Tapping the system back button \(Android only\))
* 译文
* 译文
* 译文

[en]: <> (If the user’s ability to dismiss a dialog is disabled, the user must choose a dialog action to proceed.)
译文

[en]: <> (Actions)
<h2 id="actions">译文</h2>

[en]: <> (Types of actions)
### 译文

[en]: <> (Dialogs present a distinct choice to users through their title, content, and actions. Dialog actions are represented as buttons and allow users confirm or dismiss something.)
译文

[en]: <> (There are three types of dialog actions:)
译文

[en]: <> (Confirming actions)
#### 译文

[en]: <> (To resolve what triggered the dialog, confirming actions confirm a proposed action. These actions can involve removing something, such as “Delete” or “Remove,” if it suits the context. They are placed on the right side of the screen.)
译文

[en]: <> (Dismissive actions)
#### 译文

[en]: <> (Dismissive actions dismiss a proposed action, and return the user to the originating screen or step. They are placed directly to the left of a confirming action.)
译文

[en]: <> (Acknowledgement actions)
#### 译文

[en]: <> (When user acknowledgement is required to proceed, a single action may be presented. Alternatively, use a snackbar to communicate this type of information.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-actions-do-1a.png)

<figcaption>

{do}

[en]: <> (Disable confirming actions \(1\) until a choice is made. Dismissive actions are never disabled.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/dialogs/dialogs-actions-dont-1.png)

<figcaption>

{dont}

[en]: <> (Dismissive actions \(1\) are placed to the left of confirming actions.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/dialogs/dialogs-actions-do-2.png)

<figcaption>

{do}

[en]: <> (A single action may be provided only if it’s an acknowledgement.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/dialogs/dialogs-actions-dont-2.png)

<figcaption>

{dont}

[en]: <> (Avoid presenting users with unclear choices. “Cancel” doesn't make sense here because no clear action is proposed.)
译文

</figcaption></figure>

[en]: <> (Number of actions)
### 译文

[en]: <> (Dialogs should contain a maximum of two actions.)
译文

[en]: <> (If a single action is provided, it must be an acknowledgement action.)
[en]: <> (If two actions are provided, one must be a confirming action, and the other a dismissing action.)
[en]: <> (Providing a third action such as “Learn more” is not recommended as it navigates the user away from the dialog, leaving the dialog task unfinished.)
* 译文
* 译文
* 译文

[en]: <> (Rather than adding a third action, an inline expansion can display more information. If more extensive information is needed, provide it prior to entering the dialog.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-actions-dont-3.png)

<figcaption>

{dont}

[en]: <> (The “Learn more” action \(1\) navigates away from this dialog, potentially leaving it in an indeterminate state.)
译文

</figcaption></figure>

[en]: <> (Alert dialog)
<h2 id="alert-dialog">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Alert dialogs interrupt users with urgent information, details, or actions.)
译文

[en]: <> (Behavior)
### 译文

[en]: <> (To close an alert dialog, one of its actions must be selected.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-alertdialog-do-1.png)

<figcaption>

{do}

[en]: <> (The action “Discard” indicates the outcome of the decision.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/components/dialogs/dialogs-alertdialog-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t use action text that fails to indicate what the selection will do. “Cancel” and “Delete” better indicate what will occur in this dialog.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Simple dialog)
<h2 id="simple-dialog">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Simple dialogs can display items that are immediately actionable when selected. They don’t have text buttons.)
译文

[en]: <> (As simple dialogs are interruptive, they should be used sparingly. Alternatively, dropdown menus provide options in a non-modal, less disruptive way.)
译文

[en]: <> (Behavior)
### 译文

[en]: <> (A simple dialog allows the following interactions:)
译文

[en]: <> (Tap an action to choose it and close the dialog)
[en]: <> (Tap outside the dialog to close the dialog without taking an action)
* 译文
* 译文

<figure>

![]({assets_path}/components/dialogs/dialogs-simpledialog-1.png)

<figcaption>

[en]: <> (A simple dialog)
译文

</figcaption></figure>

[en]: <> (Simple dialogs without actions)
#### 译文

[en]: <> (Simple dialogs allow users to act on selected elements, without action text. For example, users can simply select a list item to take action on it.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-simpledialog-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t display text buttons in simple dialogs. The choice itself is actionable when tapped.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/dialogs/dialogs-simpledialog-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t include dismissive actions like “Cancel” in a simple dialog. Users can tap anywhere outside the dialog to close it.)
译文

</figcaption></figure>

[en]: <> (Confirmation dialog)
<h2 id="confirmation-dialog">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Confirmation dialogs give users the ability to provide final confirmation of a choice before committing to it, so they have a chance to change their minds if necessary.)
译文

[en]: <> (If the user confirms a choice, it’s carried out. Otherwise, the user can dismiss the dialog. For example, users can listen to multiple ringtones but only make a final selection upon touching “OK.”)
译文

[en]: <> (Behavior)
### 译文

[en]: <> (To confirm a choice, the user taps a confirmation action. To cancel, the user taps a dismissive action.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-confirmation-layout.png)

<figcaption>

[en]: <> (The user must either confirm a choice or dismiss the dialog before proceeding.)
译文

</figcaption></figure>

[en]: <> (Buttons)
### 译文

[en]: <> (Confirmation dialogs provide both confirmation and cancel buttons. After a confirmation button is tapped, a selection is confirmed. If the cancel button is tapped, or the area outside the dialog, the action is cancelled.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-confirmation-layout-do.png)

<figcaption>

{do}

[en]: <> (Provide confirmation and dismissive buttons.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/dialogs/dialogs-confirmation-layout-dont.png)

<figcaption>

{dont}

[en]: <> (Don’t provide a single action, as it’s unclear how to dismiss the dialog.)
译文

</figcaption></figure>

[en]: <> (Full-screen dialog)
<h2 id="full-screen-dialog">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Full-screen dialogs group a series of tasks, such as creating a calendar entry with the event title, date, location, and time. Because they take up the entire screen, full-screen dialogs are the only dialogs over which other dialogs can appear.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/dialogs/dialogs-fullscreen-behavior.mp4" src="{assets_path}/components/dialogs/dialogs-fullscreen-behavior.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (A calendar app launching a full-screen dialog)
译文

</figcaption>

</figure>

[en]: <> (Full-screen dialogs may be used for content or tasks that meet any of these criteria:)
译文

[en]: <> (Dialogs that include components which require keyboard input, such as form fields)
[en]: <> (When changes aren’t saved instantly)
[en]: <> (When components within the dialog open additional dialogs)
* 译文
* 译文
* 译文

[en]: <> (Full-screen dialogs are for mobile devices only. For tablet or desktop, use a modal dialog.)
译文

[en]: <> (Behavior)
### 译文

[en]: <> (Saving selections)
#### 译文

[en]: <> (To save a selection in a full-screen dialog, the user taps “Save.” To discard all changes and exit, the user taps the “X” icon or “Back” button.)
译文

[en]: <> (Confirmation)
#### 译文

[en]: <> (The confirmation action is disabled until all mandatory fields are filled. Use descriptive verbs such as “Save,” “Send,” “Share,” “Update,” or “Create.” Don’t use vague terms such as “Done,” “OK” or “Close.”)
译文

[en]: <> (If no changes have been made, the dialog closes and no discard confirmation is required)
[en]: <> (If the user has made changes, the user is prompted to confirm the discard action)
* 译文
* 译文

<figure>

![]({assets_path}/components/dialogs/dialogs-fullscreen-behavior-dont-1.png)

<figcaption>

{dont}

[en]: <> (A “Close” button \(1\) is vague because it does not indicate whether changes will be saved or discarded.)
译文

</figcaption></figure>

[en]: <> (Dialog windows)
#### 译文

[en]: <> (Launching a full-screen dialog temporarily resets the app’s perceived elevation, allowing simple menus or dialogs to appear above the full-screen dialog.)
译文

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/components/dialogs/dialogs-dialog-windows.mp4" src="{assets_path}/components/dialogs/dialogs-dialog-windows.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (A calendar app launching a full-screen dialog, which launches a confirmation dialog, and alert dialog.)
译文

</figcaption>

</figure>

[en]: <> (Layout)
### 译文

[en]: <> (Full-screen dialogs cover the screen and don’t appear as a floating modal window.)
译文

[en]: <> (Actions)
#### 译文

[en]: <> (Place confirmation and dismissive actions in the top app bar.)
译文

[en]: <> (Navigation)
#### 译文

[en]: <> (Because full-screen dialogs can only be completed, dismissed, or closed, only use the close “X” navigation button.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-fullscreen-layout-dont-1.png)

<figcaption>

{dont}

[en]: <> (Avoid any navigation icon other than “X.” The up arrow \(1\) indicates the view’s state is being saved, which isn’t the case in a full-screen dialog.)
译文

</figcaption></figure>

[en]: <> (Titles)
#### 译文

[en]: <> (Titles should be succinct. They can wrap to a second line if necessary, and be truncated. If there are long titles, or titles of variable lengths \(such as translations\), place them in the content area instead of the app bar.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-fullscreen-titles-dont-1.png)

<figcaption>

{caution}

[en]: <> (Avoid placing long titles in a dialog’s top app bar \(1\), as the truncated text may lead to misunderstanding.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/components/dialogs/dialogs-fullscreen-titles-do-1.png)

<figcaption>

{do}

[en]: <> (Find ways to shorten app bar text, and place longer titles into the content area \(1\) of a full-screen dialog.)
译文

</figcaption></figure>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Crane Material Theme)
### 译文

[en]: <> (This travel app’s dialogs have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-crane-ahero.png)

<figcaption>

[en]: <> (Crane’s customized dialogs)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Crane’s dialogs use custom color on five elements: the container, title text, supporting text, button text, and scrim.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-crane-color.png)

</figure>

[en]: <> (Element           | Category      | Attribute          | Value)
[en]: <> (---------         |----------     |---------           |------)
[en]: <> (Container         | Surface       | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Title text        | On Surface    | Color<br>Opacity   | #000000<br>87%)
[en]: <> (Supporting text   | On Surface    | Color<br>Opacity   | #000000<br>60%)
[en]: <> (Button text       | Primary       | Color<br>Opacity   | #5C1349<br>100%)
[en]: <> (Scrim             | On Surface    | Color<br>Opacity   | #000000<br>32%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Crane’s dialogs use custom typography for title text, supporting text, and button text.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-crane-type.png)

</figure>

[en]: <> (Element           | Category    | Attribute                          | Value)
[en]: <> (---------         |----------   |---------                           |------)
[en]: <> (Title text        | H6          | Typeface<br>Font<br>Size<br>Case   | Raleway<br>Bold<br>20<br>Title case)
[en]: <> (Supporting text   | Body 1      | Typeface<br>Font<br>Size<br>Case   | Raleway<br>Medium<br>16<br>Sentence case)
[en]: <> (Button text       | Button      | Typeface<br>Font<br>Size<br>Case   | Raleway<br>SemiBold<br>14<br>All caps)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Crane’s dialog boxes have custom corner shapes.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-crane-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 16dp<br>Rounded 16dp<br>Rounded 16dp<br>Rounded 16dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Reply Material Theme)
### 译文

[en]: <> (This email app’s dialogs have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-reply-ahero.png)

<figcaption>

[en]: <> (Reply’s customized dialogs)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Reply’s dialogs use custom color on five elements: the dialog box, title text, supporting text, button text, and scrim.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-reply-color.png)

</figure>

[en]: <> (Element          | Category      | Attribute          | Value)
[en]: <> (---------        |----------     |---------           |------)
[en]: <> (Container        | Surface       | Color<br>Opacity   | #000000<br>100%)
[en]: <> (Title text       | On Surface    | Color<br>Opacity   | #232F34<br>100%)
[en]: <> (Supporting text  | On Surface    | Color<br>Opacity   | #232F34<br>100%)
[en]: <> (Button text      | Primary       | Color<br>Opacity   | #344955<br>100%)
[en]: <> (Scrim            | On Surface    | Color<br>Opacity   | #232F34<br>32%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Reply’s dialogs use custom typography for title text, supporting text, and button text.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-reply-type.png)

</figure>

[en]: <> (Element           | Category    | Attribute                          | Value)
[en]: <> (---------         |----------   |---------                           |------)
[en]: <> (Title text        | H6          | Typeface<br>Font<br>Size<br>Case   | Work Sans<br>Bold<br>21<br>Sentence case)
[en]: <> (Supporting text   | Body 1      | Typeface<br>Font<br>Size<br>Case   | Work Sans<br>Regular<br>16<br>Sentence case)
[en]: <> (Button text       | Button      | Typeface<br>Font<br>Size<br>Case   | Work Sans<br>SemiBold<br>15<br>Sentence case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Reply’s dialog boxes have custom corner shapes.)
译文

<figure>

![]({assets_path}/components/dialogs/dialogs-reply-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 0dp<br>Rounded 0dp<br>Rounded 0dp<br>Rounded 0dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Mobile)
### 译文

[en]: <> (Simple dialog)
#### 译文

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-simple.png)

</figure>

[en]: <> (Alert dialog)
#### 译文

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-alert.png)

</figure>

[en]: <> (Confirmation dialog)
#### 译文

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-confirmation.png)

</figure>

[en]: <> (Confirmation dialog \(scrolling\))
#### 译文

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-confirmation-scrolled.png)

</figure>

[en]: <> (Confirmation dialog with long actions)
#### 译文

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-confirmation-longer-buttons.png)

</figure>

[en]: <> (Full-screen dialog)
#### 译文

<figure>

![]({assets_path}/components/dialogs/specs-dialog-mobile-fullscreen.png)

</figure>

[en]: <> (Desktop)
### 译文

[en]: <> (Mobile alert)
#### 译文

<figure>

![]({assets_path}/components/dialogs/specs-dialog-desktop-simple.png)

</figure>
</div>