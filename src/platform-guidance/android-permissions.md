<div class="article__intro">

[en]: <> (Android permissions)
# 译文

[en]: <> (Permission requests should be simple, transparent, and understandable.)
译文

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Request types)
[en]: <> (Runtime permissions)
[en]: <> (Denied permissions)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#request-types)
* [译文](#runtime-permissions)
* [译文](#denied-permissions)

</nav>

</div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Android apps have limited permissions associated with them by default. If your app selected to apply “normal” permissions, the system automatically grants those without user input.)
译文

[en]: <> (For permissions that extend beyond the scope of normal permissions, the user must explicitly grant those permissions. These are classified according to the following groups.)
译文

[en]: <> (Permission groups)
### 译文

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Permissions are divided into nine groups, allowing users to grant all permissions encompassed by a single action by bundling them together as a group.)
译文

[en]: <> (For example, to provide a user with permission to view, edit, and add Contacts, it’s more efficient to group these permissions into a single permission group \(called Contacts\) than to request each individually.)
译文

</div><div class="mdui-col">

[en]: <> (Permission Group   | Description)
[en]: <> (---------          |----------)
[en]: <> (Calendar           | Managing calendars)
[en]: <> (Camera             | Taking photos and recording videos)
[en]: <> (Contacts           | Managing contacts)
[en]: <> (Location           | Current device location)
[en]: <> (Microphone         | Audio recording)
[en]: <> (Phone              | Dialing and managing phone calls)
[en]: <> (Body Sensors       | Heart rate and similar data)
[en]: <> (SMS                | Sending and viewing messages)
[en]: <> (Storage            | Storage)

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

</div></div>

[en]: <> (Demonstrated intent)
### 译文

[en]: <> (A user may perform an action that demonstrates clear intent, such as:)
译文

[en]: <> (Taking a picture)
[en]: <> (Selecting a contact)
[en]: <> (Starting a call or text message)
* 译文
* 译文
* 译文

[en]: <> (In these cases, the user’s action clearly demonstrates their intent, and no permission dialog is needed or authorized.)
译文

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<figure>

![]({assets_path}/platform-guidance/android-permissions/as-permissions-anatomy.png)

<figcaption>

[en]: <> (Permission group icon)
[en]: <> (App name)
[en]: <> (“Never ask again” check box \(This is displayed if a user denies a permission twice\))
[en]: <> (Indicator for multiple dialogs)
[en]: <> (Action)
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文

</figcaption></figure>

[en]: <> (Request types)
<h2 id="request-types">译文</h2>

[en]: <> (Your permissions strategy depends on the clarity and importance of the permission type you are requesting. Each strategy offers a different way of introducing permissions to the user.)
译文

[en]: <> (*Critical permissions* should be requested up-front.)
译文

[en]: <> (*Secondary permissions* may be requested in-context.)
译文

[en]: <> (Permissions that are less clear should provide education about what the permission involves, whether done up-front or in context.)
译文

<figure>

![]({assets_path}/platform-guidance/android-permissions/communication-permissions-request-chart.png)

<figcaption>

[en]: <> (Determine the clarity and importance level of each permission.)
译文

</figcaption></figure>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-permissions/communication-permissions-request1.png)

<figcaption>

[en]: <> (Educate before asking)
#### 译文

[en]: <> (If your app has a “warm welcome,” use it to explain what your app does and why unexpected permissions will be requested.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-permissions/communication-permissions-request2.png)

<figcaption>

[en]: <> (Ask up-front)
#### 译文

[en]: <> (Only ask for critical and obvious permissions on first launch.)
译文

[en]: <> (Because users expect a messaging app to request SMS permissions, requesting it up-front makes sense.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-permissions/communication-permissions-request3.png)

<figcaption>

[en]: <> (Ask in context)
#### 译文

[en]: <> (Wait until a feature is invoked to request permission.)
译文

[en]: <> (Users are more likely to allow a permission when they want to use the feature it enables.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-permissions/communication-permissions-request4.png)

<figcaption>

[en]: <> (Educate in context)
#### 译文

[en]: <> (Explaining a permission in context helps gauge user interest and improve comprehension of the permission.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-permissions/communication-permissions-request5.png)

<figcaption>

[en]: <> (Provide an immediate benefit)
#### 译文

[en]: <> (Provide instant gratification to make accepting a permission feel justified.)
译文

</figcaption></figure>

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-permissions/communication-permissions-request6a.png)

<figcaption>

[en]: <> (Only ask for relevant permissions)
#### 译文

[en]: <> (When more than one permission is needed for a feature to work, only ask for those permissions and nothing else.)
译文

</figcaption></figure>

</div></div>

[en]: <> (Runtime permissions)
<h2 id="runtime-permissions">译文</h2>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Apps may request permission to access information or use device capabilities at any time after installation. When a user needs to perform an action in an app, such as using the device camera, the app may request permission at that moment.)
译文

[en]: <> (Users may also allow or deny the permissions of any app from Android Settings anytime after installation.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-permissions/communication-permissions-runtime1.png)

<figcaption>

[en]: <> (Example of an app requesting permission)
译文

</figcaption></figure>

</div></div>

[en]: <> (Denied permissions)
<h2 id="denied-permissions">译文</h2>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Provide feedback whenever a permission is denied. Because denying permissions may prevent a feature from working as intended, whenever a permission is denied it should be explained to the user.)
译文

[en]: <> (Permission denials occur in one of two ways:)
译文

[en]: <> (A permission request is denied by the user)
[en]: <> (A permission is silently denied without warning because a user once selected “Don’t ask again” from a previous permission request)
* 译文
* 译文

[en]: <> (To ensure that features requiring permission always behave as intended, the app should state that permission is needed and provide a way to allow it.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-permissions/communication-permissions-deny1.png)

<figcaption>

[en]: <> (A snackbar displays the need for permission in order to use an audio feature.)
译文

</figcaption></figure>

</div></div>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Critical permissions)
#### 译文

[en]: <> (If the app can no longer run because a critical permission has been denied, explain why that permission must be allowed and offer a button to open Settings so the user can allow it.)
译文

</div><div class="mdui-col">

<figure>

![]({assets_path}/platform-guidance/android-permissions/communication-permissions-deny2.png)

<figcaption>

[en]: <> (A screen explains that a permission is needed for an app to function, with a link to allow that permission in Settings.)
译文

</figcaption></figure>

</div></div>
</div>
