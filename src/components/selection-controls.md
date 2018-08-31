<div class="article__intro">

[en]: <> (Selection controls)
# 选择控件

[en]: <> (Selection controls allow the user to select options.)
选择控件使用户可以选择选项。

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-usage-howtouse.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Checkboxes)
[en]: <> (Radio buttons)
[en]: <> (Switches)
[en]: <> (Specs)
* [用法](#usage)
* [复选框](#checkboxes)
* [单选按钮](#radio-buttons)
* [开关按钮](#switches)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Selection controls allow users to complete tasks that involve making choices such as selecting options, or switching settings on or off. Selection controls are found on screens that ask users to make decisions or declare preferences such as settings or dialogs.)
选择控件可以使用户完成和选择有关的任务，例如选择一个选项、或打开或关闭某一项设置。选择控件位于要求用户做出选择或设置首选项的位置，例如设置项中、或对话框中。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/selection-controls-illos-01.png)

<figcaption>

[en]: <> (Familiar)
#### 一如既往

[en]: <> (Selection controls have been in user interfaces for a long time and should be used as expected.)
选择控件很早以前就在使用了，应该继续以用户熟悉的方式来使用。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/selection-controls-illos-03.png)

<figcaption>

[en]: <> (Scannable)
#### 方便快速扫视

[en]: <> (It should be visible at a glance if a selection control has been selected, and selected items should be more visually prominent than unselected items.)
已选中的控件要一目了然，且选中的控件要比未选中的控件在视觉上更突出。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/selection-controls-illos-02.png)

<figcaption>

[en]: <> (Efficient)
#### 高效

[en]: <> (Selection controls make it easy to compare available options.)
选择控件使选项之间的比较变得更方便。

</figcaption></figure></div></div>

[en]: <> (Types)
### 类型

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/when-to-use-radiobuttons.png)

<figcaption>

[en]: <> (Radio buttons)
#### 单选按钮

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/when-to-use-checkboxes.png)

<figcaption>

[en]: <> (Checkboxes)
#### 复选框

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/when-to-use-switches.png)

<figcaption>

[en]: <> (Switches)
#### 开关按钮

</figcaption></figure></div></div>

[en]: <> (When to use radio buttons)
### 何时使用单选按钮

[en]: <> (Use radio buttons to:)
单选按钮用于：

[en]: <> (Select a single option from a list)
[en]: <> (Expose all available options)
* 从列表中选择单个选项
* 铺开所有可用的选项

[en]: <> (If available options can be collapsed, consider using a dropdown menu instead, as it uses less space.)
如果可用的选项可以折叠显示，则可以考虑使用下拉菜单，因为它占用的空间更小。

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-usage-whentouse-radio.png)

<figcaption>

[en]: <> (Radio buttons)
单选按钮

</figcaption></figure>

[en]: <> (Radio buttons should be used instead of checkboxes if only one item can be selected from a list.)
如果列表中只能有一个条目被选中，则应使用单选按钮，而不是复选框。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/selectioncontrols-usage-whentouse-dont-checkboxes.png)

<figcaption>

{dont}

[en]: <> (Don’t use checkboxes when only one item can be selected from a list. Use radio buttons instead.)
列表中只能有一个条目被选中时，不要使用复选框。请改用单选按钮。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/selectioncontrols-usage-whentouse-do-radio.png)

<figcaption>

{do}

[en]: <> (Use radio buttons when only one item can be selected from a list.)
列表中只能有一个条目被选中时，使用单选按钮。

</figcaption></figure></div></div>

[en]: <> (When to use switches)
### 何时使用开关按钮

[en]: <> (Use switches to:)
开关按钮用于：

[en]: <> (Toggle a single option on or off, on mobile and tablet)
[en]: <> (Immediately activate or deactivate something)
* 在移动端和平板端，打开或关闭单个选项
* 立刻激活或停用某些内容

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-usage-whentouse-switches.png)

<figcaption>

[en]: <> (Switches)
开关按钮

</figcaption></figure>

[en]: <> (Swtiches should be used instead of radio buttons if only one item can be selected from a list.)
列表中只能有一个条目被选中时，应使用开关按钮，而不是单选按钮。

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-usage-whentouse-dont-radio.png)

<figcaption>

{dont}

[en]: <> (Don’t use radio buttons to toggle an option on or off.)
请勿使用单选按钮来打开或关闭选项。

</figcaption></figure><figure>

![]({assets_path}/components/selection-controls/selectioncontrols-usage-whentouse-do-switches.png)

<figcaption>

{do}

[en]: <> (Use switches to turn an option on or off, especially on mobile.)
使用开关按钮来打开或关闭选项，尤其是在移动设备上。

</figcaption></figure>

[en]: <> (When to use checkboxes)
### 何时使用复选框

[en]: <> (Use checkboxes to:)
复选框用于：

[en]: <> (Select one or multiple items from a list)
[en]: <> (Present a list containing sub-selections)
[en]: <> (Turn an option on or off in desktop environment)
* 从列表中选择一个或多个项目
* 显示包含子选择列表的列表
* 在桌面环境中打开或关闭一个选项

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-checkboxes-usage-parentchild-1c.png)

<figcaption>

[en]: <> (Checkboxes)
复选框

</figcaption></figure>

[en]: <> (When to use checkboxes instead of toggles)
#### 何时使用复选框，而不是开关按钮

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-usage-whentouse-dont-switches.png)

<figcaption>

{dont}

[en]: <> (If a list consists of multiple options, avoid using switches. Use checkboxes instead because they take up less space.)
如果列表中包含多个选项，请避免使用开关按钮。应使用复选框，因为它们占用的空间更小。

</figcaption></figure><figure>

![]({assets_path}/components/selection-controls/selectioncontrols-usage-whentouse-do-checkboxes.png)

<figcaption>

{do}

[en]: <> (Checkboxes are for making selections from a list. They let users select more than one item and allow for easy selection or deselection of all items with a parent checkbox.)
复选框用于从列表中进行选择。它允许用户同时选择多个条目，并可以使用父复选框一次性选中或取消选中所有条目。

</figcaption></figure>

[en]: <> (Checkboxes)
<h2 id="checkboxes">复选框</h2>

[en]: <> (Usage)
### 用法

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Checkboxes allow the user to select one or more items from a set. Checkboxes can be used to turn an option on or off.)
复选框允许用户从一组条目中选择一个或多个条目。复选框可用于打开或关闭选项。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/selectioncontrols-checkboxes-usage.png)

<figcaption>

[en]: <> (Selected and unselected checkboxes)
选中和未选中的复选框

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/selection-controls/slidercontrols-checkbox-v03.mp4" src="{assets_path}/components/selection-controls/slidercontrols-checkbox-v03.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Using checkboxes to select multiple items in a list)
使用复选框选择列表中的多个条目

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/selection-controls/slidercontrols-checkbox-darkmode-v02.mp4" src="{assets_path}/components/selection-controls/slidercontrols-checkbox-darkmode-v02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Using a checkbox to turn an option on or off)
使用复选框打开或关闭选项

</figcaption></figure></div></div>

[en]: <> (Parent and child checkboxes)
#### 父复选框和子复选框

[en]: <> (Checkboxes can have a parent-child relationship with other checkboxes.)
复选框可以和其他复选框具有父子关系。

[en]: <> (When the parent checkbox is checked, all child checkboxes are checked)
[en]: <> (If a parent checkbox is unchecked, all child checkboxes are unchecked)
[en]: <> (If some, but not all, child checkboxes are checked, the parent checkbox becomes an indeterminate checkbox)
* 当父复选框选中时，所有子复选框都将被选中
* 取消选中父复选框时，所有子复选框都将被取消选中
* 如果选中了一部分（但不是全部）子复选框，则父复选框将变为不确定复选框

<figure>

![]({assets_path}/components/selection-controls/slidercontrols-parent-child-v03.mp4)

<figcaption>

[en]: <> (Checked, unchecked, and indeterminate parent checkboxes)
选中、未选中、和不确定父复选框

</figcaption></figure>

[en]: <> (States)
### 状态

[en]: <> (Checkboxes can be selected, unselected, or indeterminate. Checkboxes have enabled, hover, focused and pressed states.)
复选框可以是选中的、未选中的、或不确定的。复选框有启用、悬停、聚焦和按下状态。

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-checkboxes-states.png)

<figcaption>

[en]: <> (Checkbox states)
复选框状态

</figcaption></figure>

[en]: <> (Radio buttons)
<h2 id="radio-buttons">单选按钮</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Radio buttons allow the user to select one option from a set. Use radio buttons when the user needs to see all available options. If available options can be collapsed, consider using a dropdown menu because it uses less space.)
单选按钮使用户可以从一组选项中选择其中一项。当需要用户能一次性看到所有选项时，可以使用单选按钮。如果可以折叠部分选项，请考虑使用下拉菜单，因为它占用的空间更小。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/selectioncontrols-radio-usage.png)

<figcaption>

[en]: <> (Selected and unselected radio buttons)
选中以及未选中的单选按钮

</figcaption></figure></div><div class="mdui-col"><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/selection-controls/slidercontrols-radial-v01.mp4" src="{assets_path}/components/selection-controls/slidercontrols-radial-v01.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Using radio buttons to select a single item)
使用单选按钮来选择单个项目

</figcaption></figure></div></div>

[en]: <> (States)
### 状态

[en]: <> (Radio buttons can be selected or unselected. Radio buttons have enabled, hover, focused and pressed states.)
单选按钮可以选中或未选中。单选按钮有启用、悬停、聚焦和按下状态。

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-radio-states.png)

<figcaption>

[en]: <> (Radio button states)
单选按钮的状态

</figcaption></figure>

[en]: <> (Switches)
<h2 id="switches">开关按钮</h2>

[en]: <> (Usage)
### 用法

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Switches toggle the state of a single setting on or off. They are the preferred way to adjust settings on mobile.)
开关按钮可以切换单个设置项的状态。它是移动端修改设置项的首选方式。

[en]: <> (State)
#### 状态

[en]: <> (A switch is successfully toggled when the user slides a switch thumb to the other side of the track, and the state of the switch changes.)
当用户将开关按钮的滑块滑动到轨道的另一侧时，表示切换成功，且开关按钮的状态发生变化。

[en]: <> (Text label)
#### 文本标签

[en]: <> (The option that the switch controls, as well as the state it’s in, should be made clear from the corresponding inline label.)
应该用开关按钮内联的文本标签来明确地指示开关按钮的选项、及其所处的状态。

[en]: <> (Avoid creating a switch that includes the text “on” and “off” within the graphic itself. The switch alone should be sufficient.)
避免在开关按钮的图形内部包含 “on” 和 “off” 文本。单独的开关按钮已经足够了。

</div><div class="mdui-col"><figure>

![]({assets_path}/components/selection-controls/selectioncontrols-switches-usage.png)

<figcaption>

[en]: <> (Thumb)
[en]: <> (Track )
1. 滑块
2. 轨道

</figcaption></figure></div></div><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/selection-controls/slidercontrols-switches-darkmode-v02.mp4" src="{assets_path}/components/selection-controls/slidercontrols-switches-darkmode-v02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Using a switch to turn an option on and off)
使用开关按钮打开或关闭选项

</figcaption></figure>

[en]: <> (Behavior)
### 行为

[en]: <> (When a user toggles a switch, its corresponding action takes effect immediately. If a switch cannot be turned on, the switch will automatically turn back off.)
当用户点击开关按钮时，其对应的操作会立即生效。如果开关按钮无法设置为打开，则会自动设置为关闭。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/selection-controls/slidercontrols-1a-v02.mp4" src="{assets_path}/components/selection-controls/slidercontrols-1a-v02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A switch unable to be toggled on)
无法设置为打开状态的开关按钮

</figcaption></figure>

[en]: <> (Display processing status)
#### 显示处理状态

[en]: <> (Because a switch shows the actual status of something, sometimes there is a delay in its change of state. In such cases, a processing status animation can be used.)
因为开关显示的是某项任务的实际状态，所以有时它的变化会有延迟。在这种情况下，可以使用动画来表示正在处理中的状态。

[en]: <> (A processing status is an animation on the thumb of the switch. For example, it can be used when a switch that controls a hardware feature experiences a delay before its final status can be confirmed.)
使用开关按钮上的滑块中的动画效果来表示处理中状态。例如，一个控制硬件功能的开关按钮，在其最终状态确认之前，可以显示处理中状态。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/selection-controls/slidercontrols-1b-v02.mp4" src="{assets_path}/components/selection-controls/slidercontrols-1b-v02.mp4" type="video/mp4"></video><figcaption>

[en]: <> (A processing status animation)
处理中状态动画

</figcaption></figure>

[en]: <> (States)
### 状态

[en]: <> (Switches can be on or off. Switches have enabled, hover, focused, and pressed states.)
开关按钮可以打开或关闭。开关按钮有启用、悬浮、聚焦和按下状态。

[en]: <> (Display the outer radial reaction only on form factors that use touch, where interaction may obstruct the element completely.)
仅在触摸时才显示涟漪效果，因为交互效果可能会完全阻塞元素。

[en]: <> (For desktop, the radial reaction isn’t needed.)
对于桌面端，不需要涟漪效果。

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-switches-states.png)

<figcaption>

[en]: <> (Switch states)
开关按钮的状态

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (Checkboxes)
#### 复选框

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-spec-checkboxes.png)

</figure>

[en]: <> (Radio buttons)
#### 单选按钮

<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-spec-radiobuttons.png)

</figure>

[en]: <> (Switches)
#### 开关按钮
<figure>

![]({assets_path}/components/selection-controls/selectioncontrols-spec-switches.png)

</figure></div>
