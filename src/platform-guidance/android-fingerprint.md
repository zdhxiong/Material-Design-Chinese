<div class="article__intro">

[en]: <> (Android fingerprint)
# 译文

[en]: <> (Fingerprint detection may be used to unlock a device, sign in to apps, and authenticate in-app purchases.)
译文

<nav>

[en]: <> (Standard fingerprint)
[en]: <> (Enrollment)
[en]: <> (Authentication)
* [译文](#standard-fingerprint)
* [译文](#enrollment)
* [译文](#authentication)

</nav>

</div><div class="article__body">

[en]: <> (Standard fingerprint)
<h2 id="standard-fingerprint">译文</h2>

[en]: <> (Anatomy)
### 译文

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-anatomy-informationarchitecture.png)

<figcaption>

[en]: <> (*Title*<br>The Fingerprint title describes the action being performed, such as “Sign in.” It shouldn’t be used to introduce Fingerprint.)
[en]: <> (*User identity*)
[en]: <> (*Secondary text*<br>The secondary text uses the phase “Confirm fingerprint.” This wording maintains consistency with Android Settings.<br>You can combine this text with the associated user action, such as “Confirm fingerprint to complete purchase.”)
[en]: <> (*Fingerprint icon*)
[en]: <> (*Fingerprint instruction text*)
[en]: <> (*Actions*)
1. *译文*<br>译文
2. *译文*
3. *译文*<br>译文<br>译文
4. *译文*
5. *译文*
6. *译文*

</figcaption></figure>

[en]: <> (Hardware sensor)
### 译文

[en]: <> (When the user sees the Fingerprint icon without a circular background, it indicates they can touch the hardware sensor to have their fingerprint detected.)
译文

[en]: <> (Size)
#### 译文

[en]: <> (The Fingerprint icon should be displayed at the standard system icon size, 64dp.)
译文

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-anatomy-hardwaresensorfingerprinticonsize.png)

<figcaption>

[en]: <> (64dp system icon)
译文

</figcaption></figure>

[en]: <> (Layout)
#### 译文

[en]: <> (To communicate that the hardware fingerprint sensor needs to be touched, use a fingerprint icon without a circular background.)
译文

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-anatomy-hardwaresensorfingerprinticon2.png)

<figcaption>

[en]: <> (Icon with no circular background)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-anatomy-hardwaresensorfingerprinticon3.png)

<figcaption>

{dont}

[en]: <> (Don’t tilt or distort the fingerprint icon.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-anatomy-hardwaresensorfingerprinticon4.png)

<figcaption>

{dont}

[en]: <> (Don’t add a circle behind the fingerprint icon.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Icon)
### 译文

[en]: <> (When displayed on screen, the Fingerprint icon indicates that users can touch the screen itself \(in the location indicated\) to have their fingerprint detected.)
译文

[en]: <> (Size)
#### 译文

[en]: <> (The Fingerprint icon should be displayed at the standard system icon size \(36dp\) within a 64dp circle.)
译文

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-anatomy-indisplayfingerprinticonsize.png)

<figcaption>

[en]: <> (The 36dp system icon with a 64dp circular background.)
译文

</figcaption></figure>

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-anatomy-indisplayfingerprinticon2.png)

<figcaption>

[en]: <> (Bottom sheet dialog and fingerprint icon)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-anatomy-indisplayfingerprinticon3.png)

<figcaption>

{dont}

[en]: <> (Don’t change the size proportion between the system icon and the circular background.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-anatomy-indisplayfingerprinticon4.png)

<figcaption>

{dont}

[en]: <> (Don’t compromise legibility by using low contrast \(and low opacity\) on the fingerprint icon.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Tinted icon)
#### 译文

[en]: <> (The circle surrounding the icon can be customized with a color, as long it it provides sufficient contrast against the fingerprint icon.)
译文

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/components-fp-13-state1.png)

<figcaption>

[en]: <> (Contrast and tinted icons.)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/components-fp-15-state1.png)

<figcaption>

{dont}

[en]: <> (Don’t use a multicolored Fingerprint icon.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (UIs with light backgrounds)
#### 译文

[en]: <> (On light backgrounds, use the Fingerprint icon with a dark circle background.)
译文

[en]: <> (Specifications:)
译文

[en]: <> (Color: #FFFFFF)
[en]: <> (Opacity: 100%)
* 译文
* 译文

</div><div class="mdui-col">

[en]: <> (UIs with dark backgrounds)
#### 译文

[en]: <> (On dark backgrounds, use the Fingerprint icon with a light circle background.)
译文

[en]: <> (Specifications:)
译文

[en]: <> (Color: #000000)
[en]: <> (Opacity: 54%)
* 译文
* 译文

</div></div>

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/components-fp-13-state1.png)

<figcaption>

[en]: <> (A dark circle contains the Fingerprint icon on a light background.)
译文

</figcaption></figure>

[en]: <> (States)
### 译文

[en]: <> (Default state)
#### 译文

[en]: <> (The UI should ask the user to touch the sensor.)
译文

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-states-defaultstate.png)

<figcaption>

[en]: <> (The default state, instructing the user to put their finger on the sensor.)
译文

</figcaption></figure>

[en]: <> (Failure state)
#### 译文

[en]: <> (Upon failure, provide a clear indication that the user’s fingerprint was not recognized and that they should try again, using the error icon – either with or without a status message.)
译文

[en]: <> (Specification:)
译文

[en]: <> (Use your app’s color for failure states, or Deep Orange 600 \(#F4511E\))
* 译文

[en]: <> (Failure states should avoid:)
译文

[en]: <> (Elaborate transitions between the default and failure states)
* 译文

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-states-failurestate.png)

<figcaption>

[en]: <> (Error message stating the fingerprint was not recognized.)
译文

</figcaption></figure>

[en]: <> (Exiting)
#### 译文

[en]: <> (Provide alternative ways to exit the dialog. At minimum, provide an affordance to close the Fingerprint dialog, such as a “Cancel” button or tapping outside of the Fingerprint dialog.)
译文

[en]: <> (Authentication alternatives)
#### 译文

[en]: <> (Fingerprint should not be the only way to authenticate. Provide alternative authentication methods, such as:)
译文

[en]: <> (User’s account password)
[en]: <> (App PIN)
[en]: <> ([Device credentials]\(https://developer.android.com/preview/api-overview.html#confirm-credential\))
* 译文
* 译文
* 译文

[en]: <> (Specs)
### 译文

<figure>

![]({assets_path}/platform-guidance/android-fingerprint/as-fingerprinticon-specs.png)

<figcaption>

[en]: <> (Specifications for fingerprint bottom sheet)
#### 译文

[en]: <> (Dialog left and right padding: 24dp)
译文

[en]: <> (Dialog top padding: 24dp)
译文

[en]: <> (Title bottom margin: 8dp)
译文

[en]: <> (Identity bottom margin: 8dp)
译文

[en]: <> (Secondary text bottom margin: 48dp)
译文

[en]: <> (Fingerprint icon bottom margin: 16dp)
译文

[en]: <> (Instruction text bottom margin: 24dp)
译文

[en]: <> (Button container height: 72dp)
译文

</figcaption></figure>

[en]: <> (Enrollment)
<h2 id="enrollment">译文</h2>

[en]: <> (Before using fingerprint for authentication, the app must get the user's consent.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (App settings)
#### 译文

[en]: <> (App settings provide a way to turn fingerprint authentication on or off.)
译文

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/platform-guidance/android-fingerprint/fp-enrollment.mp4" src="{assets_path}/platform-guidance/android-fingerprint/fp-enrollment.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Fingerprint authentication toggle)
译文

</figcaption>

</figure>

</div></div>

[en]: <> (Authentication)
<h2 id="authentication">译文</h2>

[en]: <> (Your app’s users can set up the option to sign in or authenticate purchases using fingerprint.)
译文

[en]: <> (When a user action needs to be authenticated, display the Fingerprint authentication dialog in place of your sign-in screen or during a purchase interaction.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (After enrollment)
#### 译文

[en]: <> (After enrollment, present the fingerprint dialog whenever you need authentication from the user.)
译文

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/platform-guidance/android-fingerprint/fp-after-enrollment.mp4" src="{assets_path}/platform-guidance/android-fingerprint/fp-after-enrollment.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Fingerprint dialog)
译文

</figcaption>

</figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (During your app’s purchase flow)
#### 译文

[en]: <> (The user has the option to enroll their fingerprint right after making a purchase, using an existing account.)
译文

</div><div class="mdui-col">

<figure>

<video controls loop muted preload="metadata" class="mdui-video-fluid">
<source data-src="{assets_path}/platform-guidance/android-fingerprint/fp-purchase-flow.mp4" src="{assets_path}/platform-guidance/android-fingerprint/fp-purchase-flow.mp4" type="video/mp4">
</video>

<figcaption>

[en]: <> (Purchase flow with Fingerprint)
译文

</figcaption>

</figure>

</div></div>
</div>
