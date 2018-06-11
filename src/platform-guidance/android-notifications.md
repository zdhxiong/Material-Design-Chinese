<div class="article__intro">

[en]: <> (Android notifications)
# 译文

[en]: <> (Notifications provide short, timely, and relevant information about your app when it’s not in use.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy of a notification)
[en]: <> (Behavior)
[en]: <> (Types of notifications)
[en]: <> (Settings)
[en]: <> (Lock screen)
[en]: <> (Style)
[en]: <> (Templates)
* [译文](#usage)
* [译文](#anatomy-of-a-notification)
* [译文](#behavior)
* [译文](#types-of-notifications)
* [译文](#settings)
* [译文](#lock-screen)
* [译文](#style)
* [译文](#templates)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Notifications are intended to inform users about events in your app. These two types of notifications are the most effective:)
译文

[en]: <> (Communication from other users)
[en]: <> (Well-timed and informative task reminders)
* 译文
* 译文

[en]: <> (Notification Anatomy)
#### 译文

[en]: <> (Header area)
[en]: <> (Content area)
[en]: <> (Action area)
* 译文
* 译文
* 译文

[en]: <> (How notifications may be noticed)
#### 译文

[en]: <> (Showing a status bar icon)
[en]: <> (Appearing on the lock screen)
[en]: <> (Playing a sound or vibrating)
[en]: <> (Peeking onto the current screen)
[en]: <> (Blinking the device's LED)
* 译文
* 译文
* 译文
* 译文
* 译文

[en]: <> (When not to use a notification)
### 译文

[en]: <> (Notifications should not be the primary communication channel with your users, as frequent interruptions may cause irritation. The following cases do not warrant notification:)
译文

[en]: <> (Cross-promotion, or advertising another product within a notification, which is strictly prohibited by the Play Store)
[en]: <> (An app that a user has never opened)
[en]: <> (Messages that encourage the user to return to an app, but provide no direct value, such as "Haven't seen you in a while")
[en]: <> (Requests to rate an app)
[en]: <> (Operations that don't require user involvement, like syncing information)
[en]: <> (Error states from which the app may recover without user interaction)
* 译文
* 译文
* 译文
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-usage-1.png)

<figcaption>

{dont}

[en]: <> (Don’t send holiday or birthday greetings in the form of notifications.)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-usage-2.png)

<figcaption>

{dont}

[en]: <> (Don’t interrupt the user in the middle of a task for the sole purpose of asking if you're doing a good job.)
译文

</figcaption></figure>

[en]: <> (Required notifications)
### 译文

[en]: <> (Foreground services are app processes that run in the background while the user is not directly interacting with your app. Because these apps use battery and possibly data, Android requires that users are made aware of these types of services by showing a non-dismissible notification.)
译文

[en]: <> (Because the user can't dismiss the notification, you should provide an action for the user to stop the service if they don't want it running.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-usage-3.png)

<figcaption>

[en]: <> (While downloading apps and files, Android's Download Manager runs a foreground service and shows a notification that lets the user know downloading is in progress, with an option to cancel.)
译文

</figcaption></figure>

[en]: <> (Anatomy of a notification)
<h2 id="anatomy-of-a-notification">译文</h2>

[en]: <> (Notifications have been designed to make it easy to scan and use a notification’s most important elements:)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-anatomy-1-collapsed.png)

<figcaption>

[en]: <> (Collapsed view of a notification)
译文

</figcaption></figure>

[en]: <> (Primary content)
#### 译文

[en]: <> (Content is the most prominent element of a notification. Secondary information, such as a timestamp, is smaller and consolidated above the primary content.)
译文

[en]: <> (People)
#### 译文

[en]: <> (If the notification involves a person, an avatar appears on the right where it stands out from the rest of the content.)
译文

[en]: <> (Actions)
#### 译文

[en]: <> (Expandable notifications are revealed by tapping an indicator icon. Actions are displayed with text labels on a separate background color and location.)
译文

[en]: <> (Header area)
### 译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-anatomy-2.png)

<figcaption>

[en]: <> (The header area)
译文

</figcaption></figure>

[en]: <> (The header area is comprised of:)
译文

[en]: <> (1. The app icon:)
#### 译文

[en]: <> (The app icon is a small two-dimensional representation of your app's identity. It appears in monochrome in the status bar. If your app sends a wide variety of notifications, you may replace your app's identity icon with a symbol that reflects the content type. For example, Google Now uses a cloud icon for weather notifications.)

[en]: <> (2.The app name:)
#### 译文

[en]: <> (The name of the app automatically appears in the notification.)
译文

[en]: <> (3. Header text \(optional\):)
#### 译文

[en]: <> (Header text is usually only needed if an app sends notifications from multiple sources, such as the account name for users with multiple accounts.)
译文

[en]: <> (4. Timestamp \(optional\):)
#### 译文

[en]: <> (By default, a timestamp does not appear, but it may be added if it's important to display when a notification was sent, such as the time of a missed call.)
译文

[en]: <> (5. Expand indicator:)
#### 译文

[en]: <> (This appears if the notification can be expanded.)
译文

[en]: <> (Content area)
### 译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-anatomy-3.png)

<figcaption>

[en]: <> (The content area)
译文

</figcaption></figure>

[en]: <> (The content area is comprised of:)
译文

[en]: <> (1. A content title:)
#### 译文

[en]: <> (A brief headline for the notification)
译文

[en]: <> (2. Content text:)
#### 译文

[en]: <> (Supporting information)
译文

[en]: <> (3. Large icon \(optional\):)
#### 译文

[en]: <> (An image may be added to reinforce the notification in a meaningful way, such as a message that includes an avatar of the sender.)
译文

[en]: <> (Action area)
### 译文

[en]: <> (When expanded, a notification may display up to three actions on at the bottom.)
译文

[en]: <> (In Android N and later, actions are shown without icons to accommodate more text. An icon should still be provided because devices with earlier versions of the OS rely on it, as will [Android Wear]\(https://www.google.com/design/spec-wear/patterns/notifications.html\) and [Android Auto]\(https://www.google.com/design/spec-auto/system-overview/notifications.html#\) devices.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-anatomy-4.png)

<figcaption>

[en]: <> (The action area)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Notification arrival)
### 译文

[en]: <> (When a notification arrives, it gets added to the notification drawer. Depending on the parameters you set and the current state of the device, the notification may also:)
译文

[en]: <> (Be indicated in the status bar with an icon)
[en]: <> (Make a sound or vibrate)
[en]: <> (Peek onto the current screen to grab the user's attention)
* 译文
* 译文
* 译文

[en]: <> (Users may choose to alter the notification behaviors you set.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/platform-guidance/android-notifications/notifications-arrival-1.mp4" src="{assets_path}/platform-guidance/android-notifications/notifications-arrival-1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (When a notification arrives, an icon usually appears in the status bar. This signals to the user that there's something to see in the notification drawer.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/platform-guidance/android-notifications/notifications-arrival-2.mp4" src="{assets_path}/platform-guidance/android-notifications/notifications-arrival-2.mp4" type="video/mp4"></video><figcaption>

[en]: <> (If it's important to grab a user's attention in the middle of a task, an app can have the notification peek onto the current screen.)
译文

</figcaption></figure>

[en]: <> (Notification drawer)
### 译文

[en]: <> (The notification drawer in Android typically shows notifications in reverse-chronological order, with adjustments influenced by:)
译文

[en]: <> (The app's stated notification priority or importance)
[en]: <> (Whether the notification recently alerted the user with a sound or vibration)
[en]: <> (Any people attached to the notification and whether they are starred contacts)
[en]: <> (Whether the notification represents an important ongoing activity, such as a phone call in progress or music playing)
* 译文
* 译文
* 译文
* 译文

[en]: <> (Starting in Android O, the Android system may alter the appearance of some notifications at the top and bottom of the list by adding emphasis or deemphasis, to help the user scan content.)
译文

[en]: <> (Stale notifications)
#### 译文

[en]: <> (The notification drawer should show users relevant information for the current moment in time. If a notification sent earlier is no longer relevant, you can automatically dismiss it so the user doesn’t see it.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-behavior-1.png)

<figcaption>

[en]: <> (In this notification drawer, a text that just arrived appears at the top. A lower priority notification about the weather appears at the bottom.)
译文

</figcaption></figure>

[en]: <> (Notification interactions)
### 译文

[en]: <> (Users may interact with a notification in the following ways:)
译文

[en]: <> (1. To navigate to a destination)
#### 译文

[en]: <> (To navigate, a user may tap a notification. If the notification appears on a locked screen, the user will need to double-tap it and then enter their PIN, pattern, or password.)
译文

[en]: <> (When the user taps a notification, they should be taken to a screen in your app that relates directly to that notification and lets them take immediate action. For example, if the notification says it's their turn in a two-player game, tapping the notification should take them directly to that game.)
译文

[en]: <> (2. To see an expanded view)
#### 译文

[en]: <> (If offered, an expand indicator appears in the header. A user may tap the indicator or swipe down the notification body to expand it.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/platform-guidance/android-notifications/notifications-expand-1.mp4" src="{assets_path}/platform-guidance/android-notifications/notifications-expand-1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (An expanded notification)
译文

</figcaption></figure>

[en]: <> (3. To dismiss it \(if permitted\))
#### 译文

[en]: <> (A user may dismiss a notification by swiping it left or right.)
译文

[en]: <> (Ongoing notifications that indicate a continuing process in the background, such as music playing, may not be dismissed with a swipe.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/platform-guidance/android-notifications/notifications-dismiss-1.mp4" src="{assets_path}/platform-guidance/android-notifications/notifications-dismiss-1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A notification being dismissed)
译文

</figcaption></figure>

[en]: <> (4. To control similar notifications in the future)
#### 译文

[en]: <> (Notification controls can be accessed by:)
译文

[en]: <> (Touching and holding an individual notification)
[en]: <> (Swiping the notification left or right, and then tapping the settings icon)
* 译文
* 译文

[en]: <> (The controls displayed vary depending on the Android version and whether the app has [channels]\(https://www.mdui.org/design/patterns/notifications.html#notifications-settings\) for its notifications \(starting in Android O\).)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/platform-guidance/android-notifications/notifications-controls-1.mp4" src="{assets_path}/platform-guidance/android-notifications/notifications-controls-1.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Notification settings)
译文

</figcaption></figure>

[en]: <> (Multiple notifications)
### 译文

[en]: <> (For apps that generate multiple notifications of the same type, Android offers two different approaches to represent them: summarizing and bundling.)
译文

[en]: <> (Summarizing)
#### 译文

[en]: <> (Instead of displaying multiple notifications, you can create one notification that summarizes them all. For example, a messaging app might have a summary notification that says "3 new messages.” Upon expansion, it could show a snippet for each message.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-behavior-2-collapsed.png)

<figcaption>

[en]: <> (Multiple notifications summarized, shown in collapsed view.)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-behavior-2-expanded.png)

<figcaption>

[en]: <> (Multiple notifications summarized, shown in expanded view.)
译文

</figcaption></figure>

[en]: <> (Grouping)
#### 译文

[en]: <> (Your app can present multiple notifications according to hierarchy:)
译文

[en]: <> (A parent notification displays a summary of its child notifications)
[en]: <> (If the parent notification is expanded by the user, all child notifications are revealed)
[en]: <> (A child notification may be expanded to reveal its entire content)
* 译文
* 译文
* 译文

[en]: <> (Child notifications are presented without duplicate header information. For example, if a child notification has the same app icon as its parent, then the child’s header doesn’t include an icon.)
译文

[en]: <> (Child notifications should be understandable if they appear solo, as the system may show them outside of the group when they arrive.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-behavior-3-collapsed.png)

<figcaption>

[en]: <> (Grouped notifications collapsed view)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-behavior-3-expanded.png)

<figcaption>

[en]: <> (Grouped notifications expanded view)
译文

</figcaption></figure>

[en]: <> (Expanded views)
### 译文

[en]: <> (You may display more information in a notification through an expanded view, without navigating away from the notification.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-behavior-4-collapsed.png)

<figcaption>

[en]: <> (Collapsed notification)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-behavior-4-expanded.png)

<figcaption>

[en]: <> (Expanded notification)
译文

</figcaption></figure>

[en]: <> (A notification may offer up to three actions when expanded. It should not duplicate the action taken from tapping on the notification body.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-behavior-5.png)

<figcaption>

{dont}

[en]: <> (Don’t include text actions that duplicate the behavior of tapping on the notification body.)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-behavior-6.png)

<figcaption>

{do}

[en]: <> (When Android's Clock app has a timer running, this notification lets the user pause or add a minute directly from the notification.)
译文

</figcaption></figure>

[en]: <> (Enable typing into notifications)
### 译文

[en]: <> (You may enable the user to type directly into a notification. Users may type small amounts of text, such replying to a text message or jotting a brief note.)
译文

[en]: <> (For long-form typing, navigate users to your app, where they benefit from more space to view and edit text.)
译文

[en]: <> (If you're using this functionality for a messaging app, keep the notification present after the user has sent the reply, and wait until the conversation is paused before automatically dismissing it.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/platform-guidance/android-notifications/notifications-enabletyping.mp4" src="{assets_path}/platform-guidance/android-notifications/notifications-enabletyping.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Users of Android's Messages app can reply directly to any message without leaving the notification)
译文

</figcaption></figure>

[en]: <> (Types of notifications)
<h2 id="types-of-notifications">译文</h2>

[en]: <> (Notifications are considered either transactional or non-transactional.)
译文

[en]: <> (Transactional)
### 译文

[en]: <> (Transactional notifications provide content that a user must receive at a specific time in order to do one of the following:)
译文

[en]: <> (Enable human-to-human interaction)
[en]: <> (Function better in daily life)
[en]: <> (Control or resolve transient device states)
[en]: <> (Non-transactional)
[en]: <> (If none of the above situations describe your notification, then it is non-transactional.)
* 译文
* 译文
* 译文
* 译文
* 译文

[en]: <> (Transactional notifications can help users...          | Examples)
[en]: <> (---------                                              |----------)
[en]: <> (Enable human-to-human interaction                      | <ul><li>Incoming phone calls or text messages</li><li>Notification of a user's turn in a two-player game</li></ul>)
[en]: <> (Function better in daily life                          | <ul><li>Calendar event about to take place</li><li>A reminder or alarm set up by the user</li><li>Delayed flight</li><li>Delivered order</li></ul>)
[en]: <> (Monitor, control, or resolve temporary device states   | <ul><li>Music playing</li><li>Turn-by-turn navigation</li><li>Stopwatch running</li><li>Screenshot taken</li><li>App running in the background</li></ul>)

译文     | 译文
--------|----------
译文     | 译文<br>译文
译文     | 译文<br>译文<br>译文<br>译文
译文     | 译文<br>译文<br>译文<br>译文<br>译文

[en]: <> (Non-transactional opt-out and opt-in)
### 译文

[en]: <> (Non-transactional notifications should be optional, as they may not appeal to all users. You can make them optional in one of two ways:)
译文

[en]: <> (Opt-out: Users receive opt-out notifications by default, but they may stop receiving them by turning off a setting.)
[en]: <> (Opt-in: Users only receive opt-in notifications by turning on a setting in your app.)
* 译文
* 译文

[en]: <> (Opt-out)
#### 译文

[en]: <> (Avoid the opt-out approach unless your notifications meet both of the following criteria:)
译文

[en]: <> (They provide concrete value to the user)
[en]: <> (They clearly relate to the user's context \(such as current location, current date or time, past history, or expressed interests\))
* 译文
* 译文

[en]: <> (Example notification                                | Reason to avoid using opt-out notifications here)
[en]: <> (---------                                           |----------)
[en]: <> (A random tip on how to use an app                   | Provides concrete user value but isn't contextual)
[en]: <> (A prompt to rate content recently used in the app   | Contextual, but doesn't provide concrete user value)

译文     | 译文
--------|---------
译文     | 译文
译文     | 译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-types-1.png)

<figcaption>

[en]: <> (This notification from YouTube takes the opt-out approach. It offers both context \(a YouTube channel the user has subscribed to\) and value \(a new video from that channel\). The "Options" action navigates the user to where they can opt out of future notifications for this channel.)
译文

</figcaption></figure>

[en]: <> (Opt-in)
#### 译文

[en]: <> (The opt-in approach is more conservative. Because users explicitly choose to receive these notifications, it's more likely they'll be glad to see them. However, they must visit settings to find out how to receive them. You may inform users about these notifications from other places in your app, such as an [onboarding flow]\(https://www.mdui.org/design/growth-communications/onboarding.html\) or a dismissible [card]\(https://www.mdui.org/design/components/cards.html/cards.html\).)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-types-2.png)

<figcaption>

[en]: <> (This app takes the opt-in approach. A card at the top of the app lets users know that they can receive notifications for breaking news stories. If the user wants to opt in, they choose “Yes.” Otherwise, they choose “No Thanks” and remain opted out. This choice is also available in the app's settings.)
译文

</figcaption></figure>

[en]: <> (Settings)
<h2 id="settings">译文</h2>

[en]: <> (Channels in Android O)
### 译文

[en]: <> (When you upgrade your app to Android O, you'll be required to define channels for your notifications – one for each type of notification you want to send.)
译文

[en]: <> (Users control app notifications in Android O with channels. If a user doesn't want a certain notification from your app, they can block that channel rather than all notifications.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-settings.png)

<figcaption>

[en]: <> (This app has three channels, which may be referred to as "categories" in the UI.)
译文

</figcaption></figure>

[en]: <> (Channel importance levels)
#### 译文

[en]: <> (For each channel you define, you'll assign it an importance level. Starting in Android O, importance levels control the behavior of each channel \(taking the place of priority levels\).)
译文

[en]: <> (Importance levels have the following restrictions:)
译文

[en]: <> (The importance level you assign will be the channel’s default. Users can change a channel’s importance level in Android Settings.)
[en]: <> (Once you choose an importance level, you're limited in how you can change it: you may only lower the importance, and only if the user hasn't explicitly changed it.)
* 译文
* 译文

[en]: <> (Channel importance should be chosen with consideration for the user's time and attention. When an unimportant notification is disguised as urgent, it can produce unnecessary alarm.)
译文

[en]: <> (Importance  | Behavior                         | Usage                                                                                                     | Examples)
[en]: <> (---------   |----------                        |---------                                                                                                  |------)
[en]: <> (HIGH        | Makes a sound and appears on screen                                                                                                          | Time-critical information that the user must know, or act on, immediately   | Text messages, alarms, phone calls)
[en]: <> (DEFAULT     | Makes a sound                    | Information that should be seen at the user’s earliest convenience, but not interrupt what they're doing   | Traffic alerts, task reminders)
[en]: <> (LOW         | No sound                         | Notification channels that don't meet the requirements of other importance levels                          | New content the user has subscribed to, social network invitations)
[en]: <> (MIN         | No sound or visual interruption  | Non-essential information that can wait or isn’t specifically relevant to the user                         | Nearby places of interest, weather, promotional content)

译文     | 译文     | 译文     | 译文
--------|----------|-------- |-----------
译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文
译文     | 译文     | 译文     | 译文

[en]: <> (Defining channels)
#### 译文

[en]: <> (To define your channels, take inventory of all the notifications you want to send. Group these notifications into sets that have the following things in common:)
译文

[en]: <> (Subject matter. A single topic can succinctly describe all of these notifications, such as "Downloads.")
* 译文

[en]: <> (Desired importance level. Because notifications in a channel share one importance level, they should carry a similar level of importance to one another from the user’s perspective.)
译文

[en]: <> (Grouping channels)
#### 译文

[en]: <> (You can group your channels to make it easier for users to scan your list of channels in Android Settings.)
译文

[en]: <> (Only create channel groupings if:)
译文

[en]: <> (You have more than 10 channels)
[en]: <> (Your app supports multiple user accounts \(such as personal and business accounts\) allowing users to have the same channel names and functions across accounts)
* 译文
* 译文

[en]: <> (Link your app's settings to Android channel settings)
#### 译文

[en]: <> (Keep the settings in your app consistent with those in Android channels. If your app offers controls for different types of notifications, direct users to the settings of the appropriate Android channel settings to make changes.)
译文

[en]: <> (Channels and foreground services)
#### 译文

[en]: <> (In Android O, a channel’s default importance level for [foreground service]\(https://www.mdui.org/design/patterns/notifications.html#notifications-usage\) notifications must be at least IMPORTANCE_LOW so that it shows an icon in the status bar.)
译文

[en]: <> (Channels using the less-prominent IMPORTANCE_MIN level will trigger an extra notification from Android at IMPORTANCE_LOW, stating that the app is using battery.)
译文

[en]: <> (Priority levels without channels)
### 译文

[en]: <> (For apps not yet upgraded to Android O, you'll need to assign a priority level for each individual notification. Some priority levels offer the option to play sound.)
译文

[en]: <> (Priority levels)
#### 译文

[en]: <> (To affect how each notification is delivered to users, assign it a priority level. The higher the priority, the more interruptive it will be. For example, MAX and HIGH priority notifications will peek onto the user's current screen, regardless of what they are doing. When in doubt, choose a lower priority.)
译文

[en]: <> (Notification sounds)
#### 译文

[en]: <> (Notifications assigned a priority of DEFAULT \(or higher\) have the option to play a sound \(using a sound file you provide\) when the notification is delivered. However, a notification should only use sound if:)
译文

[en]: <> (It helps the user uphold a time-sensitive social expectation, such as an incoming phone call or imminent work meeting.)
[en]: <> (It helps the user in daily life, such as letting them know that a flight is delayed.)
[en]: <> (The user has explicitly requested that this notification make a sound upon arrival \(this option is off by default\).)
* 译文
* 译文
* 译文

[en]: <> (Pre-defined categories)
### 译文

[en]: <> (Whether you're using channels or not, assign each individual notification to the most suitable predefined category. Android may use this information to make ranking and filtering decisions.)
译文

[en]: <> (Category                  | Description)
[en]: <> (---------                 |----------)
[en]: <> (CATEGORY_CALL             | Incoming call \(voice or video\) or similar synchronous communication request)
[en]: <> (CATEGORY_MESSAGE          | Incoming direct message \(SMS, instant message, etc.\))
[en]: <> (CATEGORY_EMAIL            | Asynchronous bulk message \(email\))
[en]: <> (CATEGORY_EVENT            | Calendar event)
[en]: <> (CATEGORY_PROMO            | Promotion or advertisement)
[en]: <> (CATEGORY_ALARM            | Alarm or timer)
[en]: <> (CATEGORY_PROGRESS         | Progress of a long-running background operation)
[en]: <> (CATEGORY_SOCIAL           | Social network or sharing update)
[en]: <> (CATEGORY_ERROR            | Error in background operation or authentication status)
[en]: <> (CATEGORY_TRANSPORT        | Media transport control for playback)
[en]: <> (CATEGORY_SYSTEM           | System or device status update. Reserved for system use.)
[en]: <> (CATEGORY_SERVICE          | Indication of running background service)
[en]: <> (CATEGORY_RECOMMENDATION   | A specific, timely recommendation for a single thing. For example, a news app might recommend a news story the user might want to read next.)
[en]: <> (CATEGORY_STATUS           | Ongoing information about device or contextual status)

译文     | 译文
--------|----------
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文
译文     | 译文

[en]: <> (Lock screen)
<h2 id="lock-screen">译文</h2>

[en]: <> (A user may choose to show notifications when their screen is locked. These notifications may conceal any content that an app marks as sensitive. Android evaluates each notification's visibility level to figure out what can safely be shown.)
译文

[en]: <> (Sensitive content on lock screens)
### 译文

[en]: <> (Because notifications are visible on the lock screen, user privacy is an important consideration. For each notification you create, a visibility level is set to either public, private, or secret.)
译文

[en]: <> (Public notifications are fully visible on secure lock screens, while secret notifications are hidden.)
译文

[en]: <> (Private notifications fall in the middle: they show only basic information, including the name of the app that posted it and its icon. In place of the regular content – which will be hidden – you have the option to show text that doesn't reveal personal information, such as "2 new messages".)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-lockscreen-1.png)

<figcaption>

[en]: <> (This user has chosen to show all notification content on the lock screen.)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-lockscreen-2.png)

<figcaption>

[en]: <> (This user has chosen to hide sensitive content from the lock screen. Because these apps gave their notifications a visibility level of "private,” no content title or text appears.)
译文

</figcaption></figure>

[en]: <> (Style)
<h2 id="style">译文</h2>

[en]: <> (Clear and concise text)
### 译文

[en]: <> (Android truncates content titles to a single line \(even when expanded\).)
译文

[en]: <> (Content titles should:)
译文

[en]: <> (Be under under 30 characters long)
[en]: <> (Contain the most important information)
[en]: <> (Avoid variables – unless they contain a number or short text string, or are preceded by text)
[en]: <> (Exclude the app's name, which already appears in the header)
* 译文
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-style-1.png)

<figcaption>

{dont}

[en]: <> (The content title shows the app name, which is redundant with the header area and uses up available characters.)
译文

</figcaption></figure>

[en]: <> (Content text should:)
译文

[en]: <> (Avoid exceeding the 40-character limit)
[en]: <> (Not repeat what's in the content title)
* 译文
* 译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-style-2.png)

<figcaption>

{do}

[en]: <> (The content title shows the most important information.)
译文

</figcaption></figure>

[en]: <> (The large icon)
### 译文

[en]: <> (In Android N, the large icon is only meant for specific situations in which imagery meaningfully reinforces the notification's content, including:)
译文

[en]: <> (Communication from another person, such as the image of someone sending a message)
[en]: <> (The source of content if it's different than the app sending the notification, such as the logo from a YouTube channel to which the user is subscribed)
[en]: <> (Meaningful symbols about the notification, such as an arrow symbol for driving directions)
* 译文
* 译文
* 译文

[en]: <> (Large icons should be circular when showing a person, but square in all other cases.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-style-3.png)

<figcaption>

{dont}

[en]: <> (The large icon is not intended for branding.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-style-4.png)

<figcaption>

{do}

[en]: <> (The large icon is meant to reinforce the content of the notification in a meaningful way, such as a person's photo attached to a message notification.)
译文

</figcaption></figure>

[en]: <> (Templates)
<h2 id="templates">译文</h2>

[en]: <> (Google uses the following notification templates in its Android apps. These templates can be customized to some extent for your app.)
译文

[en]: <> (Standard template)
### 译文

[en]: <> (The standard template is suitable for most notifications, allowing succinct text, a large icon \(when applicable\), and actions.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-1-collapsed.png)

<figcaption>

[en]: <> (Standard template for collapsed notifications)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-1-expanded.png)

<figcaption>

[en]: <> (Standard template for expanded notifications)
译文

</figcaption></figure>

[en]: <> (Big text template)
### 译文

[en]: <> (This template should be used when long text is displayed. It lets the user preview more text when the notification is expanded.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-2-collapsed.png)

<figcaption>

[en]: <> (Big text template for collapsed notifications)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-2-expanded.png)

<figcaption>

[en]: <> (Big text template for expanded notifications)
译文

</figcaption></figure>

[en]: <> (Big picture template)
### 译文

[en]: <> (This template should be used when a notification contains a picture. The large icon offers a thumbnail of the picture, and the user can get a bigger preview by expanding the notification.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-3-collapsed.png)

<figcaption>

[en]: <> (Big picture template for collapsed notifications)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-3-expanded.png)

<figcaption>

[en]: <> (Big picture template for expanded notifications)
译文

</figcaption></figure>

[en]: <> (Progress template)
### 译文

[en]: <> (This template should be used for user-initiated activities that take time to complete and can be canceled at any time. \(Non-cancelable activities don't warrant notifications.\))
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-4-collapsed.png)

<figcaption>

[en]: <> (Progress template for collapsed notifications)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-4-expanded.png)

<figcaption>

[en]: <> (Progress template for expanded notifications)
译文

</figcaption></figure>

[en]: <> (Media template)
### 译文

[en]: <> (This template lets the user control media currently playing from an app.)
译文

[en]: <> (The collapsed view displays up to three actions, and the large icon can show a related image, such as an album cover.)
[en]: <> (The expanded view displays up to five actions with a larger image, or six actions if no image is displayed. Colors from provided images automatically color the notification's background and other elements.)
* 译文
* 译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-5-collapsed.png)

<figcaption>

[en]: <> (Media template for collapsed notifications)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-5-expanded.png)

<figcaption>

[en]: <> (Media template for expanded notifications)
译文

</figcaption></figure>

[en]: <> (Messaging template)
### 译文

[en]: <> (This template is for real-time communication. Optionally, you can offer users the ability to type replies directly into the notification.)
译文

<figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-6-collapsed.png)

<figcaption>

[en]: <> (Messaging template for collapsed notifications)
译文

</figcaption></figure><figure>

![]({assets_path}/platform-guidance/android-notifications/as-notifications-templates-6-expanded.png)

<figcaption>

[en]: <> (Messaging template for expanded notifications)
译文

</figcaption></figure></div>
