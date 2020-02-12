<div class="article__intro">

[en]: <> (Snackbars)
# Snackbars

[en]: <> (Snackbars provide brief messages about app processes at the bottom of the screen.)
Snackbars 在屏幕底部提供有关应用进度的简短消息。

<figure>

![]({assets_path}/components/snackbars/snackbars-container-do.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Placement)
[en]: <> (Spec)
* [用法](#usage)
* [剖析](#anatomy)
* [行为](#behavior)
* [位置](#placement)
* [规范](#spec)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Snackbars inform users of a process that an app has performed or will perform. They appear temporarily, towards the bottom of the screen. They shouldn’t interrupt the user experience, and they don’t require user input to disappear.)
Snackbars 会通知用户应用已执行或将要执行的操作。 它们暂时出现在屏幕底部。 他们不应该中断用户体验，也不需要用户手动令其消失。

[en]: <> (Frequency)
#### 频率

[en]: <> (Only one snackbar may be displayed at a time.)
一次只能显示一个 Snackbar。

[en]: <> (Actions)
#### 操作

[en]: <> (A snackbar can contain a single action. Because they disappear automatically, the action shouldn’t be “Dismiss” or “Cancel.”)
一个 Snackbar 只能有一个操作。 因为他们通常自动消失,操作不能是 "忽略" 或 "取消"

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/snackbars/snackbar-illos-02.png)

<figcaption>

[en]: <> (Informational)
#### 信息性
<!-- 译者注:这个什么意思还没搞懂,只好直译成这样了 -->

[en]: <> (Snackbars provide updates on an app’s processes.)
Snackbars 提供应用进度的更新提示

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/snackbars/snackbar-illos-03.png)

<figcaption>

[en]: <> (Temporary)
#### 临时性

[en]: <> (Snackbars appear temporarily, and disappear on their own without requiring user input to be dismissed.)
Snackbars 仅是临时出现且自行消失,不需要用户的操作来令其消失。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/snackbars/snackbar-illos-04.png)

<figcaption>

[en]: <> (Contextual)
#### 适应性
<!-- 译者注:为了字数一样我也是太难了,其实正常翻译是 放在合适的位置 -->

[en]: <> (Snackbars are placed in the most suitable area of the UI.)
Snackbars 应当放在页面中最合适的地方

</figcaption></figure></div></div>

[en]: <> (When to use)
### 目的性
<!-- 译者注:为了字数和格式...... -->

[en]: <> (Snackbars should communicate messages that are minimally interruptive; those don’t require user action. )
Snackbars 应当显示干扰最小的提示信息,这些信息不需要用户来执行操作。

<figure>

![]({assets_path}/components/snackbars/snackbars-when-to-use.png)

</figure>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

<figure>

![]({assets_path}/components/snackbars/understanding-snackbars-elements.png)

<figcaption>

[en]: <> (1. Text label)
[en]: <> (2. Container)
[en]: <> (3. Action \(optional\))
#### 1. 文本标签
#### 2. 容器
#### 3. 操作 (可选)

</figcaption></figure>

[en]: <> (Text label)
### 文本标签

[en]: <> (Snackbars contain a text label that directly relates to the process being performed. On mobile, the text label can contain up to two lines of text.)
Snackbar 包含与正在执行的操作相关的文本标签。 在移动设备上，文本标签最多可以包含两行文字。

<figure>

![]({assets_path}/components/snackbars/understanding-snackbars-text-1-line.png)

<figcaption>

[en]: <> (Text labels are short, clear updates on processes that have been performed.)
文本标签应当简短，清晰地表现执行操作的更新。

</figcaption></figure><figure>

![]({assets_path}/components/snackbars/understanding-snackbars-text-2-lines.png)

<figcaption>

{do}

[en]: <> (On mobile, use up to two lines of text to communicate the snackbar message.)
在移动设备上,使用不超过两行的文本内容作为 Snackbar 的提示信息

</figcaption></figure><figure>

![]({assets_path}/components/snackbars/snackbars-text-desktop.png)

<figcaption>

{do}

[en]: <> (In wide UIs like desktop and tablet, snackbars should have only a single line of text.)
在宽屏设备 (桌面设备及平板电脑) 下, Snackbar 的提示文本只能有一行.

</figcaption></figure><figure>

![]({assets_path}/components/snackbars/understanding-snackbars-text-dont-icon.png)

<figcaption>

{dont}

[en]: <> (Don’t place icons in snackbars. If your message needs an icon, consider using an alert.)
不要在 Snackbar 中显示图标。 如果信息需要图标,则考虑使用警告提示。
<!-- 译者注: Alert 是警告图标还是警告框? 保险点翻译成警告提示 -->

</figcaption></figure>

[en]: <> (Container)
### 容器

[en]: <> (Snackbars are displayed in rectangular containers with a grey background. Containers should be completely opaque, so that text labels remain legible.)
Snackbars 显示在带有灰色背景的矩形容器中。 容器应完全不透明，以使文本标签清晰易读。

<figure>

![]({assets_path}/components/snackbars/snackbars-container-do.png)

<figcaption>

{do}

[en]: <> (Snackbar containers use a solid background color with a shadow to stand out against content.)
Snackbar 的容器使用纯色背景,并且具有一定阴影以便突出显示内容
<!-- 译者注:这里没有直译而是改变了下翻译,不然可能会造成一些歧意 -->

</figcaption></figure><figure>

![]({assets_path}/components/snackbars/snackbars-container-desktop-do.png)

<figcaption>

{do}

[en]: <> (In wide layouts, extend the container width to accommodate longer text labels.)
在较宽的布局中，请拉伸容器的宽度以容纳更长的文本标签。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/snackbars/snackbars-container-caution-transparent.png)

<figcaption>

{caution}

[en]: <> (An app can apply slight transparency to the container background, as long as text remains clearly legible.)
允许一定的透明度,不过请保证文本仍然清晰易读。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/snackbars/snackbars-container-don-t-shape.png)

<figcaption>

{dont}

[en]: <> (Avoid significantly altering the shape of a snackbar container.)
避免明显地改变 Snackbar 容器的形状。

</figcaption></figure></div></div><figure>

![]({assets_path}/components/snackbars/snackbars-container-caution-no-shadow.png)

<figcaption>

{dont}

[en]: <> (Avoid displaying a snackbar container without elevation.)
请不要显示没有高度的 Snackbar。
<!-- 译者注:请给其加上阴影以便提现他的高度 -->

</figcaption></figure>

[en]: <> (Action)
### 操作

[en]: <> (Snackbars can display a single text button that lets users take action on a process performed by the app. Snackbars shouldn’t be the only way to access a core use case, to make an app usable.)
Snackbar 可以显示一个文本按钮以便是用户对当前执行的操作采取一定的行为. Snackbar 不应当是继续应用操作的唯一方法。
<!-- 译者注:最后一句话想了很久,官网上的图片是真的一看就明白什么意思 -->

<figure>

![]({assets_path}/components/snackbars/understanding-snackbars-action-color.png)

<figcaption>

[en]: <> (To distinguish the action from the text label, text buttons should display colored text.)
为了将操作的按钮与文本标签区分开，按钮应显示彩色文本。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/snackbars/snackbars-action-dont-color.png)

<figcaption>

{dont}

[en]: <> (The text label shouldn’t share the same color as the text button.)
文字标签的颜色不应与按钮文字的颜色相同。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/snackbars/snackbars-action-dont-elevated-btn.png)

<figcaption>

{dont}

[en]: <> (Don’t use a filled or elevated button in a snackbar, as it draws too much attention.)
不要在 Snackbar 中使用有背景色或浮动的按钮，因为它会引起过多的注意。

</figcaption></figure></div></div><figure>

![]({assets_path}/components/snackbars/understanding-snackbars-text-2-lines-longer-action.png)

<figcaption>

{do}

[en]: <> (If an action is long, it can be displayed on a third line.)
如果操作的文本长度太长,可以将其显示在新的一行

</figcaption></figure><figure>

![]({assets_path}/components/snackbars/understanding-snackbars-action-undo.png)

<figcaption>

{do}

[en]: <> (To allow users to amend choices, display an "Undo" action.)
如果允许用户撤销之前的操作,显示一个 "撤销" 操作按钮。

</figcaption></figure><figure>

![]({assets_path}/components/snackbars/snackbars-action-caution-dismiss.png)

<figcaption>

{caution}

[en]: <> (A dismiss action is unnecessary, as snackbar disappears on their own by default.)
忽略操作是不必要的, 因为 Snackbar 默认会自行消失。

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Appearing and disappearing)
### 出现和消失

[en]: <> (Snackbars appear without warning, and don't require user interaction. They automatically disappear from the screen after a minimum of four seconds, and a maximum of ten seconds.)
Snackbar 显示时没有警告，且不需要用户干预。它们 4 秒到 10 秒后会自动从屏幕上消失。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/snackbars/01-appear.mp4" src="{assets_path}/components/snackbars/01-appear.mp4" type="video/mp4"></video></figure>

[en]: <> (Consecutive snackbars)
### 连续的 Snackbars

[en]: <> (When multiple snackbar updates are necessary, they should appear one at a time.)
当需要显示多个 Snackbar 时,应当一次只出现一个。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/snackbars/02-appearconsecutive.mp4" src="{assets_path}/components/snackbars/02-appearconsecutive.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Consecutive snackbars should appear above persistent bottom navigation.)
连续的 Snackbar 应当显示在底部导航栏的上方。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/snackbars/02-appearconsecutive-dont.mp4" src="{assets_path}/components/snackbars/02-appearconsecutive-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Avoid stacking snackbars on top of one another.)
请勿堆叠 Snackbar。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/snackbars/02-appear-dont.mp4" src="{assets_path}/components/snackbars/02-appear-dont.mp4" type="video/mp4"></video><figcaption>

{dont}

[en]: <> (Don’t animate other components along with snackbar animations, such as the floating action button.)
请不要让其他组件和 Snackbar 拥有同样的动效,例如浮动操作按钮。

</figcaption></figure>

[en]: <> (Placement)
<h2 id="placement">位置</h2>

[en]: <> (Snackbars should be placed at the bottom of a UI, in front of app content. Avoid placing a snackbar in front of frequently used touch targets or navigation.)
Snackbars 应当在用户界面的底部出现,并且在应用内容的前面。 请不要将 Snackbar 放置在需要经常点击的目标或者导航栏前面。

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-do.png)

<figcaption>

[en]: <> (Place a snackbar in front of content.)
在应用内容前显示 Snackbar

</figcaption></figure><figure>

![]({assets_path}/components/snackbars/snackbars-layout-don-t-bottom-bar.png)

<figcaption>

{dont}

[en]: <> (Avoid placing snackbars in front of navigation components.)
请勿在导航栏前显示 Snackbar

</figcaption></figure><figure>

![]({assets_path}/components/snackbars/snackbars-layout-don-t-edge-to-edge.png)

<figcaption>

{caution}

<!-- !注意:此处相较于官网内容有变动 -->
[en]: <> (Snackbars can span the entire width of a UI. However, they should not appear in front of navigation or other important UI elements like floating action buttons.)
在不遮挡重要的页面元素 (比如浮动操作按钮) 时, Snackbars 才可以占屏幕的全部宽度。

</figcaption></figure>

[en]: <> (Snackbars and floating action buttons \(FABs\))
### Snackbars 与 浮动操作按钮 (FAB)

[en]: <> (Snackbars should appear above FABs.)
Snackbars 应当出现在浮动操作按钮的上方
<!-- 译者注:这个和v1变化还是挺大的 -->

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-fab.png)

</figure><figure>

![]({assets_path}/components/snackbars/snackbars-layout-fab-caution.png)

<figcaption>

<!-- !注意:此处相较于官网内容有变动 -->
{caution}

[en]: <> (The FAB can be pushed up when a snackbar appears, though this can cause distraction if multiple snackbars appear.)
当出现 Snackbar 时，可以将浮动操作按钮向上移动，但是如果出现多个 Snackbar 时 ，则可能会导致干扰。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/snackbars/snackbars-layout-fab-dont-1.png)

<figcaption>

{dont}

[en]: <> (Don’t place a snackbar in front of a FAB.)
请勿令 Snackbar 遮挡浮动操作按钮

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/snackbars/snackbars-layout-fab-dont-2.png)

<figcaption>

{dont}

[en]: <> (Don’t place a snackbar behind a FAB.)
请不要将 Snackbar 放在浮动操作按钮后方

</figcaption></figure></div></div>

[en]: <> (Snackbars and persistent footer elements)
### Snackbars 和 固定底部元素

[en]: <> (Snackbars should appear directly above persistent footer elements.)
Snackbars 应当显示在固定底部元素的上方

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-do-navigation.png)

</figure><figure>

![]({assets_path}/components/snackbars/snackbars-layout-sheets-extended.png)

<figcaption>

{do}

[en]: <> (Place snackbars in front of medium extended sheets.)
将 Snackbar 放在中等加长元素前面。
<!-- 译者注:我只能直译. -->

</figcaption></figure><figure>

![]({assets_path}/components/snackbars/snackbars-layout-don-t-push-bottom-bar.png)

<figcaption>

{dont}

[en]: <> (Avoid pushing bottom persistent elements up when snackbars appear.)
请勿让 Snackbar 把底部固定元素向上推。

</figcaption></figure>

[en]: <> (Snackbars in wide layouts)
### 宽屏下的 Snackbar

[en]: <> (In wide layouts, snackbars can be left-aligned or center-aligned if they are consistently placed on the same spot at the bottom of the screen.)
在宽布局中，Snackbar 可以始终在屏幕底部的同一位置，可以左对齐或居中对齐。

<figure>

![]({assets_path}/components/snackbars/snackbars-layout-desktop-do.png)

</figure><figure>

![]({assets_path}/components/snackbars/snackbars-container-landscape-do-2.png)

</figure><figure>

![]({assets_path}/components/snackbars/snackbars-container-desktop-dont-flush-edge.png)

<figcaption>

{dont}

[en]: <> (Avoid placing snackbars flushed to one edge of the layout.)
请勿将 Snackbar 与布局边缘接触。

</figcaption></figure><figure>

![]({assets_path}/components/snackbars/snackbars-layout-desktop-dont-side-to-side.png)

<figcaption>

{dont}

[en]: <> (Avoid placing consecutive snackbars side by side or next to one another.)
请勿将连续 Snackbar 并排放置或彼此相邻。

</figcaption></figure>

[en]: <> (Spec)
<h2 id="spec">规范</h2>

<figure>

![]({assets_path}/components/snackbars/snackbar-spec-singleline.png)

</figure><figure>

![]({assets_path}/components/snackbars/snackbar-spec-singleline-action.png)

</figure><figure>

![]({assets_path}/components/snackbars/snackbar-spec-twoline-action.png)

</figure><figure>

![]({assets_path}/components/snackbars/snackbar-spec-twoline-longaction.png)

</figure></div>
