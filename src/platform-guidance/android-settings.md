<div class="article__intro">

[en]: <> (Android settings)
# 译文

[en]: <> (App settings let users indicate preferences for how an app should behave.)
译文

<nav>

[en]: <> (Placement)
[en]: <> (Usage)
[en]: <> (Grouping settings)
[en]: <> (Label and secondary text)
[en]: <> (Writing style)
* [译文](#placement)
* [译文](#usage)
* [译文](#grouping-settings)
* [译文](#label-secondary-text)
* [译文](#writing-style)

</nav>

</div><div class="article__body">

[en]: <> (Placement)
<h2 id="placement">译文</h2>

[en]: <> (All of an app’s settings should be reached via the “Settings” label. Don’t use synonyms such as “Options” or “Preferences.”)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-settings/communication-settings-sidenav.png)

<figcaption>

[en]: <> (Apps with side navigation)
#### 译文

[en]: <> (If side navigation such as a navigation drawer exists, include “Settings” below all other items \(except Help & Feedback\).)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-settings/communication-settings-menu.png)

<figcaption>

[en]: <> (Apps without navigation)
#### 译文

[en]: <> (Place Settings in the toolbar menu below all other items \(except Help & Feedback\).)
译文

</figcaption></figure>

</div></div>

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Settings should be well-organized, predictable, and contain a manageable number of options.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Provide an overview)
#### 译文

[en]: <> (A user should be able to quickly see the most important or frequently used settings and their values.)
译文

[en]: <> (If there are many settings, prioritize the ones most likely to interest users. Less important settings can be grouped and moved to their own screen.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-usage-provideoverview.png)

<figcaption>

[en]: <> (Important settings appear at the top of the list.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Select appropriate settings)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Settings should:)
译文

[en]: <> (Save user preferences)
[en]: <> (Get accessed infrequently)
[en]: <> (Be used by most users)
[en]: <> (Be used by a minority of users, but be essential to supporting their needs)
* 译文
* 译文
* 译文
* 译文

</div><div class="mdui-col">

[en]: <> (Settings should not:)
译文

[en]: <> (Be frequently accessed actions \(move these to a toolbar\))
[en]: <> (Contain information about the app, such as a version number or licensing information \(move these to a Help screen\))
[en]: <> (Manage user accounts \(present these in the main flow of your app, such as a side nav\))
* 译文
* 译文
* 译文

</div></div>

[en]: <> (Choose polite defaults)
### 译文

[en]: <> (The initial value for each setting should:)
译文

[en]: <> (Represent the default most users would choose)
[en]: <> (Be neutral and pose little risk to the user)
[en]: <> (Use less battery or mobile data)
[en]: <> (Only interrupt when important)
* 译文
* 译文
* 译文
* 译文

[en]: <> (Grouping settings)
<h2 id="grouping-settings">译文</h2>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Show the most important or frequently used settings upfront.)
译文

[en]: <> (Divider lines)
#### 译文

[en]: <> (Use divider lines to group together several related settings. Avoid using dividers between each individual setting.)
译文

[en]: <> (Section titles \(optional\))
#### 译文

[en]: <> (Grouped settings can include a section title. Section titles should be specific, avoiding ambiguous names like “Other” or “Miscellaneous.”)
译文

[en]: <> (15+ settings)
#### 译文

[en]: <> (Related settings are best grouped under a subscreen. Use consistent terms: the label of the setting that opens a group should match the subscreen title.)

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-groupingsettings.png)

<figcaption>

[en]: <> (Grouping settings)
译文

</figcaption></figure>

</div></div>

[en]: <> (Label and secondary text)
<h2 id="label-secondary-text">译文</h2>

[en]: <> (Labels)
### 译文

[en]: <> (Make your labels brief and meaningful. Labels will wrap to multiple lines if necessary.)
译文

[en]: <> (Labels should:)
译文

[en]: <> (Capitalize only proper nouns and the first word of a label)
[en]: <> (Start with the most important text)
[en]: <> (Avoid negative terms like "Don't" or "Never," in favor of neutral terms like "Block")
[en]: <> (Use impersonal labels like "Notifications" instead of "Notify me" \(Exception: If referring to the user is necessary for understanding the setting, use the second person \("you"\) rather than the first person \("I"\)\))
* 译文
* 译文
* 译文
* 译文

[en]: <> (Labels should avoid:)
译文

[en]: <> (Generic terms, such as: Set, Change, Edit, Modify, Manage, Use, Select, or Choose)
[en]: <> (Repeating words from the section title)
[en]: <> (Technical jargon, unless it's widely understood by your target audience)
* 译文
* 译文
* 译文

[en]: <> (Alignment)
#### 译文

[en]: <> (All labels should align with the left edge of the screen title. This provides a simpler, unified appearance.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-labelsandscondarytext-alignment.png)

<figcaption>

[en]: <> (Labels align with the screen title)
译文

</figcaption></figure>

[en]: <> (Secondary Text \(optional\))
#### 译文

[en]: <> (Secondary text helps the user better understand the current state of a setting. If the label is sufficient on its own, don't add secondary text.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-labelsandscondarytext-secondarytextdont.png)

<figcaption>

{dont}

[en]: <> (Avoid repeating words from the label in the secondary text.)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Switch or checkbox settings)
#### 译文

[en]: <> (Switch and checkbox settings that require precise descriptions may add a single-line description under the label.)
译文

[en]: <> (Descriptions should:)
译文

[en]: <> (Convey information about a setting’s state or status)
[en]: <> (Indicate what happens when a setting is enabled)
* 译文
* 译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-labelsandscondarytext-switches01.png)

<figcaption>

{do}

[en]: <> (Start the description with a verb.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-labelsandscondarytext-switches02.png)

<figcaption>

{do}

[en]: <> (Explain the current status of the setting.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Settings that require longer explanations may add a description on a second screen.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-labelsandscondarytext-switches03.png)

<figcaption>

[en]: <> (Underneath the label, show the status text of the switch as "On" or "Off.”)
译文

</figcaption></figure>

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-labelsandscondarytext-switches04.png)

<figcaption>

[en]: <> (Add the switch and a longer description to a second screen.)
译文

</figcaption></figure>

[en]: <> (All other settings)
#### 译文

[en]: <> (For non-switch settings, secondary text should show the current status of a setting only.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (*Sleep*)
*译文*

[en]: <> (After 10 minutes of inactivity)
译文

{do}

[en]: <> (The secondary text conveys the current state of the setting.)
译文

</div><div class="mdui-col">

[en]: <> (*Screen timeout*)
*译文*

[en]: <> (Adjust the delay before the screen automatically turns off)
译文

{dont}

[en]: <> (Avoid describing the setting. Show the setting’s status instead.)
译文

</div></div>

[en]: <> (Selection patterns)
### 译文

[en]: <> (Single choice)
#### 译文

[en]: <> (Use this pattern for a setting that is either selected or not selected.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-selectionpatterns-singlechoice.png)

</figure>

[en]: <> (Multiple choice)
#### 译文

[en]: <> (Use this pattern for a setting that needs to present a discrete set of options, from which the user can choose only one.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-selectionpatterns-multiplechoice.png)

</figure>

[en]: <> (Slider)
#### 译文

[en]: <> (Use this pattern for a setting where the range of values is not discrete and falls along a continuum.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-selectionpatterns-slider.png)

</figure>

[en]: <> (Date and time)
#### 译文

[en]: <> (Use this pattern for a setting that needs to collect a date or time from the user.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-selectionpatterns-time.png)

</figure>

[en]: <> (List subscreen)
#### 译文

[en]: <> (Use this pattern for a setting or category of settings that contains a list of equivalent items.)
译文

[en]: <> (The label provides the name of the item, and secondary text may be used for status. \(In this example, status is reinforced with an icon to the right of the label.\) Any actions associated with the list appear in the action bar rather than the list itself.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-selectionpatterns-listsubscreen.png)

</figure>

[en]: <> (Master on and off switch)
#### 译文

[en]: <> (Use this pattern when you need a mechanism to turn off an entire category of settings.)
译文

[en]: <> (An on/off switch is placed as the first item in the action bar of a subscreen. When the switch is turned off, the items in the list disappear, replaced by text that describes while the list is empty. If any actions require the switch to be on, they become disabled.)
译文

[en]: <> (You can also duplicate the master on/off switch in the menu item that leads to the subscreen. However, you should only do this in cases where users rarely need to access the subscreen once it's initially set up.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-selectionpatterns-masteronoff.png)

</figure>

[en]: <> (Individual on/off switch)
#### 译文

[en]: <> (Use this pattern for an individual setting that requires a more elaborate description than can be provided in checkbox form.)
译文

[en]: <> (The on/off switch only appears in the subscreen so that users can only toggle it while viewing its descriptive text. Secondary text appears below the setting label to reflect the current selection.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-selectionpatterns-individualonoff.png)

<figcaption>

[en]: <> (Since users might not know what this setting does, the status is more descriptive than just the word, "On".)
译文

</figcaption></figure>

[en]: <> (Dependency)
#### 译文

[en]: <> (Use this pattern for a setting that is only available based on the value of another setting.)
译文

[en]: <> (A dependent setting appears below the setting it depends upon, without indentation. If it has a status line, it should say "Unavailable." A brief explanation can be included in the status if the reason it’s unavailable isn’t obvious.)
译文

[en]: <> (If a setting has three or more dependent settings, a subscreen with a master on/off switch reduces the clutter introduced by many disabled items.)
译文

<figure>

![]({assets_path}/platform-guidance/android-settings/as-settings-selectionpatterns-dependency.png)

</figure>

[en]: <> (Writing style)
<h2 id="writing-style">译文</h2>

[en]: <> (Be direct and understandable.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Vibrate on touch)

{do}

</div><div class="mdui-col">

[en]: <> (Use tactile feedback)

{dont}

</div></div>

[en]: <> (For a setting adjusted via a dropdown menu or on a separate screen, summarize the setting’s current state in the text below the label.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (*Sleep*)
*译文*

[en]: <> (After 10 minutes of inactivity)
译文

{do}

[en]: <> (Display the currently selected setting.)
译文

</div><div class="mdui-col">

[en]: <> (*Sleep*)
*译文*

[en]: <> (Adjust the period of inactivity before the screen turns off)
译文

{dont}

[en]: <> (Don’t display the setting’s general purpose.)
译文

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (*On the lock screen*)
*译文*

[en]: <> (Don’t show notifications at all)
译文

{do}

[en]: <> (When possible, use the same language as the option itself – in this case, an item in the related dropdown menu.)
译文

</div><div class="mdui-col">

[en]: <> (*Lock screen notifications*)
*译文*

[en]: <> (Control whether to display all notification content, only non-sensitive content, or no notifications at all.)
译文

{dont}

[en]: <> (Don’t describe the setting’s purpose or all available selection options.)
译文

</div></div>

[en]: <> (Use familiar acronyms when there aren’t better alternatives. Convey how and why an unfamiliar setting exists.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (*NFC*)
*译文*

[en]: <> (Allow data exchange when the phone touches another device)
译文

{do}

</div><div class="mdui-col">

[en]: <> (*NFC*)
*译文*

[en]: <> (Use Near Field Communication to read and exchange tags)
译文

{dont}

</div></div>
</div>
