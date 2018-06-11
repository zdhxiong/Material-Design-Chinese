<div class="article__intro">

[en]: <> (Android haptics)
# Android 触感

[en]: <> (Haptics enhance interactions and convey useful information to users through the sense of touch.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Principles)
* [译文](#usage)
* [译文](#principles)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Haptics refers to the sensation delivered to users through a touch UI. Haptics can enhance the overall user experience by conveying and reinforcing information. They are frequently combined with audio and visual elements to complement interactions.)
译文

[en]: <> (When to use)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-haptics/haptics-1.png)

<figcaption>

[en]: <> (Touch feedback)
#### 译文

[en]: <> (Haptics provide touch feedback using:)
译文

[en]: <> (Tap and click)
[en]: <> (Long press)
* 译文
* 译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-haptics/haptics-3.png)

<figcaption>

[en]: <> (Attention cues)
#### 译文

[en]: <> (Haptics provide signals using:)
译文

[en]: <> (Alarms and reminders)
[en]: <> (Notifications)
[en]: <> (Incoming calls)
[en]: <> (Error and success states)
* 译文
* 译文
* 译文
* 译文

</figcaption></figure></div></div>

[en]: <> (Haptics with audio and video)
### 译文

[en]: <> (Haptics can be paired with other audio and visual elements, or used alone. For example, haptics can be the only method of feedback when a device has the sound turned off.)
译文

[en]: <> (When paired with other elements, haptics should be synchronized to create powerful and delightful expressions.)
译文

[en]: <> (Implementation)
### 译文

[en]: <> (Haptics can be implemented in multiple ways. One way is through the commonly used motor-controlled vibration available on mobile devices.)
译文

[en]: <> (Haptics may be constrained by technological and device limitations.)
译文

[en]: <> (Principles)
<h2 id="principles">译文</h2>

[en]: <> (Haptics should be used thoughtfully. If haptics are overused, it can be bothersome and could potentially cause user discomfort. Only perform haptic feedback if the user has enabled haptics in their system’s settings.)
译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-haptics/haptics-4.png)

<figcaption>

[en]: <> (Follow system patterns)
#### 译文

[en]: <> (Apply haptics consistently by adhering to platform patterns \(such as [Android Haptic Feedback Constants]\(https://developer.android.com/reference/android/view/HapticFeedbackConstants\)\).)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-haptics/haptics-5.png)

<figcaption>

[en]: <> (Focus on user needs)
#### 译文

[en]: <> (The number of new and unique haptics produced should be limited, and only used when system patterns are not defined.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-haptics/haptics-6.png)

<figcaption>

[en]: <> (Design holistically)
#### 译文

[en]: <> (Select patterns that fit the interaction, context, and environment in which a pattern is used.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-haptics/haptics-7.png)

<figcaption>

[en]: <> (Combine haptics with audio and visual)
#### 译文

[en]: <> (Haptics communicate simpler information, and shouldn’t be used to convey complex information.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-haptics/haptics-8.png)

<figcaption>

[en]: <> (Avoid unpleasant haptics)
#### 译文

[en]: <> (Use simple haptic patterns, avoiding long or jarring vibrations if alternative haptic designs are possible.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/platform-guidance/android-haptics/haptics-9.png)

<figcaption>

[en]: <> (Use patterns predictably)
#### 译文

[en]: <> (Use standard patterns in the ways they were intended, so users don’t get confused.)
译文

</figcaption></figure></div></div></div>
