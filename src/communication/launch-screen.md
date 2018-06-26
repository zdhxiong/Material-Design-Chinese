<div class="article__intro">

[en]: <> (Launch screen)
# 启动页

[en]: <> (The launch screen is a user’s first experience of your app.)
启动页是用户对应用的第一体验。

<nav>

[en]: <> (Usage)
[en]: <> (Placeholder UI)
[en]: <> (Branded launch)
* [用法](#usage)
* [占位符 UI](#placeholder-ui)
* [品牌启动页](#branded-launch)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Using launch screens)
### 使用启动页

[en]: <> (Launch screens can be displayed upon an app’s launch from the home screen when an app loads, instead of displaying a blank screen. Displaying a launch screen can decrease the sense of a long load time, and has the potential to add delight to the user experience.)
当应用从主屏幕启动时，可以显示启动页，而不是空白页面。显示启动页可以减少用户感官上的加载时间，且有可能为用户的体验增添乐趣。

[en]: <> (Launch screens shouldn’t be displayed if an app is running.)
如果应用正在允许，则不应该显示启动页。

[en]: <> (Types of launch screens)
### 启动页类型

[en]: <> (There are two types of launch screens:)
有两种类型的启动页：

[en]: <> (Placeholder UI launch screens display a non-interactive preview of the app’s actual UI. This launch screen is appropriate for both app launches and activity transitions within an app.)
[en]: <> (Branded launch screens provide momentary brand exposure.)
* 占位符 UI 启动页显示应用实际 UI 的非交互式预览。这种启动页同时适用于应用的启动和应用内页面的切换。
* 品牌启动页提供短暂的品牌展示。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/communication/launch-screen/communication-launch-screens-01.png)

<figcaption>

[en]: <> (Branded launch screen)
品牌启动页

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/communication/launch-screen/communication-launch-screens-03.png)

<figcaption>

[en]: <> (Placeholder UI)
占位符 UI

</figcaption></figure></div></div>

[en]: <> (Placeholder UI)
<h2 id="placeholder-ui">占位符 UI</h2>

[en]: <> (Usage)
### 用法

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (For apps with short loading times, or that aren’t promoting branding, a placeholder UI displays the fewest possible shifts from the launch screen to the app. Additionally, placeholder UIs have a higher perceived response time.)
当应用的加载时间非常短，或没有强烈的品牌需求时，使用占位符 UI 可以显示尽可能少的过渡效果。此外占位符 UI 具有更高的感知响应时间。

</div><div class="mdui-col"><figure>

![]({assets_path}/communication/launch-screen/communication-launch-screens-03.png)

<figcaption>

[en]: <> (A placeholder UI)
占位符 UI

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 行为

[en]: <> (On launch, core structural elements – such as the status bar, app bar, and bottom sheet – are displayed without content until the app has loaded.)
启动时，核心结构元素（例如状态栏、应用栏和底部卡片）将在没有内容的情况下显示，直至应用内容加载完毕。

[en]: <> (Placeholder elements, with subtle animation, should be displayed in locations where content will load.)
应该在内容加载的位置显示带有微妙动画的占位符元素。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/communication/launch-screen/02-fortnightly-loading-do.mp4" src="{assets_path}/communication/launch-screen/02-fortnightly-loading-do.mp4" type="video/mp4"></video><figcaption>

{do}

[en]: <> (A branded indicator is displayed until a placeholder UI loads. Content loads using a subtle fade transition.)
在占位符 UI 载入前，先显示品牌指示符。内容的加载需要使用微妙的淡入淡出动画。

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/communication/launch-screen/02-fortnightly-loading-dont.mp4" src="{assets_path}/communication/launch-screen/02-fortnightly-loading-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t display multiple progress indicators, which divide focus.)
不要使用多个进度指示符，这会分散焦点。

</figcaption></figure></div></div>

[en]: <> (Placeholder elements should remain positioned where content will load to avoid unexpected shifts in positioning.)
占位符元素的位置应该和即将加载的内容的位置一致，以避免产生突然的位置变化。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/communication/launch-screen/02-fortnightly-loadinglayout-dont.mp4" src="{assets_path}/communication/launch-screen/02-fortnightly-loadinglayout-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t display content that rearranges itself instantly as it loads, as this can produce a jarring experience.)
不要在加载完后马上重新排列内容并显示，因为这会导致很不和谐的体验。

</figcaption></figure>

[en]: <> (Branded launch)
<h2 id="branded-launch">品牌启动页</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Branded launch screens express branding while an app loads, by displaying a logo or other elements that improve brand recognition. Avoid using text on this screen except your logo and, if applicable, a tagline.)
品牌启动页可以在应用加载时，显示 Logo 或其他能提升品牌认知度的元素，来展示品牌形象。避免在此屏幕上使用文字，但你的 Logo 和标语（适用的话）除外。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/communication/launch-screen/communication-launch-screens-01.png)

<figcaption>

[en]: <> (Examples of branded launch screens)
品牌启动页示例

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/communication/launch-screen/fortnightly-launch.mp4" src="{assets_path}/communication/launch-screen/fortnightly-launch.mp4" type="video/mp4"></video></figure></div></div><figure>

![]({assets_path}/communication/launch-screen/communication-launch-screens-04.png)

</figure><figure>

![]({assets_path}/communication/launch-screen/communication-launch-screens-05.png)

</figure></div>
