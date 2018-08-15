<div class="article__intro">

[en]: <> (Menus)
# 菜单

[en]: <> (Menus display a list of choices on temporary surfaces.)
菜单是一个临时显示的选项列表。

<figure>

![]({assets_path}/components/menus/menu-intro.png)

</figure>

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Dropdown menu)
[en]: <> (Exposed dropdown menu)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [行为](#behavior)
* [下拉菜单](#dropdown-menu)
* [选择菜单](#exposed-dropdown-menu)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (A menu displays a list of choices on a temporary surface. They appear when users interact with a button, action, or other control.)
菜单是一个临时显示的选项列表。当用户点击按钮、或其他控件时，菜单会显示。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/menu-illos-unobtrusive.png)

<figcaption>

[en]: <> (Nimble)
#### 灵活

[en]: <> (Menus should be easy to open, close, and interact with.)
菜单应该易于打开、关闭和交互。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/menus/menu-illos-contextual.png)

<figcaption>

[en]: <> (Contextual)
#### 符合语境

[en]: <> (Menu content should be suited to user needs.)
菜单内容应该和用户的需求相符。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/menus/menu-illos-scannable.png)

<figcaption>

[en]: <> (Scannable)
#### 可快速扫视

[en]: <> (Menu items should be easy to scan.)
菜单项应该便于快速扫视。

</figcaption></figure></div></div>

[en]: <> (Types)
### 类型

[en]: <> (Menus allow users make a selection from multiple options. They are less prominent and take up less space than selection controls, such as a set of radio buttons.)
菜单使用户可以从多个选项中进行选择。与选择控件（如单选按钮）相比，它们的视觉效果不那么突出，且占用更少的空间。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/option-baseline-dropdown.png)

<figcaption>

[en]: <> (Dropdown menus)
#### 下拉菜单

[en]: <> (Dropdown menus display a list of options, triggered by an icon, button, or action. Their placement varies based on the element that opens them.)
下拉菜单显示一个选项列表，可以由图标、按钮或其他操作触发。它们的位置取决于打开它们的元素的位置。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/menus/option-exposed-line-item.png)

<figcaption>

[en]: <> (Exposed dropdown menus)
#### 选择菜单

[en]: <> (Exposed dropdown menus display the currently selected menu item above the list of options. Some variations can accept user-entered input.)
选择菜单会在选项列表上方显示当前已选中的菜单项。某些菜单的变体可以允许用户输入。

</figcaption></figure></div></div>

[en]: <> (Placement)
### 位置

[en]: <> (Elevation)
#### 海拔高度

[en]: <> (Menus appear in front of all other permanent UI elements.)
菜单出现在所有其他元素的前面。

<figure>

![]({assets_path}/components/menus/behavior-location.png)

<figcaption>

[en]: <> (Menus appear at a higher elevation than all other permanent UI elements.)
菜单有较高的海拔高度，会出现在所有其他元素的前面。

</figcaption></figure>

[en]: <> (Height)
#### 高度

[en]: <> (The maximum height of a menu should be at least one row less than the height of the app’s UI.)
菜单的最大高度应该至少比应用的界面高度小一行。

<figure>

![]({assets_path}/components/menus/menu-length.png)

<figcaption>

[en]: <> (The rows in this menu are 32dp tall. That’s also the space used between the menu and the bottom of the screen.)
此菜单的行高为 32dp。这也是菜单和屏幕底部之间的最小距离。

</figcaption></figure>

[en]: <> (Position)
#### 位置

[en]: <> (Menus should be positioned relative to the edge of the screen or browser. They typically appear next to \(or in front of\) the element that generates them. If they are in a position to be cut off by the browser or screen’s edge, the menu can instead appear to the left, right, or above the element that generates it.)
菜单应该相对于屏幕或浏览器的边缘进行定位。它们通常出现在生成它们的元素旁边（或前面）。如果它们的位置超出浏览器或屏幕的显示范围，则菜单可以在生成它的元素的左侧、右侧或上方进行调整，比避免超出显示范围。

<figure>

![]({assets_path}/components/menus/cascading-menu-2.png)

<figcaption>

[en]: <> (Menus can change their position to avoid being truncated by the screen or browser’s edge.)
菜单可以调整其位置，以避免超出屏幕或浏览器的显示范围。

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

[en]: <> (Menus display lists of related options \(which can be grouped together\) as well as unrelated options. Menus appear when a user taps an interactive UI element such as an icon, button, action, or content, such as selected items or text.)
菜单显示相关的选项（可以组合在一起成为一个分组）和不相关选项组成的列表。当用户点击一个交互式元素（如图标、按钮、已选中的菜单项或文本）时，将显示菜单。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/elements-text-only.png)

</figure></div><div class="mdui-col">

[en]: <> (Text list)
#### 文本列表

[en]: <> (Container)
[en]: <> (Text)
[en]: <> (Divider)
1. 容器
2. 文本
3. 分隔线

</div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/elements-text-icons.png)

</figure></div><div class="mdui-col">

[en]: <> (Text and icon list)
#### 文本和图标列表

[en]: <> (Container)
[en]: <> (Leading icon)
[en]: <> (Text)
[en]: <> (Divider)
1. 容器
2. 图标
3. 文本
4. 分隔线

</div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/elements-text-icon-command.png)

</figure></div><div class="mdui-col">

[en]: <> (Text, icon, and keyboard command list)
#### 文本、图标和键盘快捷键列表

[en]: <> (Container)
[en]: <> (Leading icon)
[en]: <> (Text)
[en]: <> (Divider)
[en]: <> (Command)
[en]: <> (Cascading menu indicator)
1. 容器
2. 图标
3. 文本
4. 分隔线
5. 快捷键
6. 级联菜单指示符

</div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/elements-text-states.png)

</figure></div><div class="mdui-col">

[en]: <> (Text with selection state list)
#### 带选中状态的文本列表

[en]: <> (Selection state)
1. 选中状态

</div></div>

[en]: <> (Actions)
### 菜单项操作

[en]: <> (Disabled actions)
#### 禁用菜单项

[en]: <> (Display actions as disabled when they can only be used sometimes, under certain conditions. They should be displayed as disabled rather than removing them.)
当菜单项只有满足一定条件时才可用时，可以将菜单项显示为禁用状态。注意是显示为禁用状态，而不是移除那些它们。

<figure>

![]({assets_path}/components/menus/disabled-text-copy.png)

<figcaption>

[en]: <> (The Redo action is disabled when that action isn’t available, and the Cut and Copy actions are disabled until content is selected.)
当撤销功能不可用时，将“撤销”操作禁用，并且在选择内容之前禁用“剪切”和“复制”操作。

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Scrolling)
### 滚动

[en]: <> (If not all menu items are displayed at once, menus can be scrollable. In this state, menus show a persistent scrollbar.)
如果无法一次显示所有菜单项，则菜单可以滚动。在此状态下，菜单滚动条应始终保持显示。

<figure>

![]({assets_path}/components/menus/scrollable.png)

<figcaption>

[en]: <> (When its content is scrollable, menus display scrollbars.)
当菜单内容可以滚动时，显示滚动条。

</figcaption></figure>

[en]: <> (Motion)
### 动效

[en]: <> (Menus open using a scale animation \(an animation that shows an element grow in size\). The animation creates a relationship between the menu and the action that generates the menu.)
菜单打开时使用缩放动画（元素大小变化的动画）。使用动画在菜单和生成菜单的元素之间创建了联系。

[en]: <> (Position)
#### 位置

[en]: <> (A menu’s position on screen affects where and how it will appear. If opened at the top of the screen, it will expand downwards \(to avoid being cropped\).)
菜单在屏幕中的位置会影响其显示位置和显示方式。如果在屏幕顶部打开菜单，则他会向下展开（以避免菜单超出显示范围）。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/menus/behavior-menu-multiple-position.mp4" src="{assets_path}/components/menus/behavior-menu-multiple-position.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Menus at different positions on screen open in different ways, adapting to the space available.)
屏幕中不同位置的菜单以不同的方式打开，以适应屏幕中的可用空间，避免超出屏幕的显示范围。

</figcaption></figure>

[en]: <> (By default, menus open with an entrance animation. However, on desktop, menus can skip the animation and open instantly instead.)
默认情况下，菜单打开时，会带有动画效果。但是在桌面端，菜单可以直接打开，没有动画效果。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/menus/baseline-motion-comparison-frame.mp4" src="{assets_path}/components/menus/baseline-motion-comparison-frame.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Mobile menus have entrance animations)
[en]: <> (Desktop menus have the option to open instantly)
1. 移动端菜单有打开动画
2. 桌面端菜单可以立刻打开

</figcaption></figure>

[en]: <> (Dropdown menu)
<h2 id="dropdown-menu">下拉菜单</h2>

[en]: <> (Usage)
### 用法

[en]: <> (A dropdown menu is a compact way of displaying multiple choices. It appears upon interaction with an element \(such as an icon or button\) or when users perform a specific action.)
下拉菜单以一种紧凑的方式显示多个选项。它在用户与元素（如图标或按钮）交互、或用户执行特定操作时。

[en]: <> (Placement)
### 位置

[en]: <> (Dropdown menus are positioned relative to both the element that generates them and the edges of the screen or browser. They can appear in front of, beside, above, or below the element that generates them.)
下拉菜单会相对于生成它的元素和屏幕或浏览器的边缘进行定位。它们可以出现在生成它们的元素的前面、旁边、上面或下面。

[en]: <> (Default placement)
#### 默认位置

[en]: <> (A dropdown menu is typically positioned below the element that generates it.)
下拉菜单通常位于生成它的元素的下方。

<figure>

![]({assets_path}/components/menus/baseline-menu-intro.png)

<figcaption>

[en]: <> (A dropdown menu triggered by an icon on mobile.)
移动端，由图标触发的下拉菜单。

</figcaption></figure>

[en]: <> (Cascading menu \(Desktop only\))
#### 级联菜单（仅限桌面端）

[en]: <> (Cascading menus allow users to choose from a large variety of choices, by displaying menus with multiple levels of hierarchy.)
译文

[en]: <> (They are organized into menus of parent list items that contain child list items. Child list items appear to right or left of parent list items, depending on where there is room to expand child list items.)
译文

<figure>

![]({assets_path}/components/menus/menu-intro.png)

<figcaption>

[en]: <> (A parent list item can trigger a cascading menus containing child actions.)
译文

</figcaption></figure>

[en]: <> (Contextual menu)
#### 译文

[en]: <> (Contextual menus aren’t triggered by a consistent UI element. They appear next to where a user taps, and their actions can vary based on the tap target.)
译文

<figure>

![]({assets_path}/components/menus/dropdown-contextual.png)

<figcaption>

[en]: <> (To reveal a contextual menu, tap and hold, or right click \(desktop\), selected text.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/menus/behavior-text-selection.png)

<figcaption>

[en]: <> (A contextual menu appears next to selected text.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (When an option is chosen from a dropdown menu, the element that generates it remains the same.)
译文

<figure>

![]({assets_path}/components/menus/behavior-icon.png)

<figcaption>

[en]: <> (Tapping the icon triggers a dropdown menu.)
[en]: <> (Choosing a menu option doesn’t change the icon of the element generating the menu.)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Exposed dropdown menu)
<h2 id="exposed-dropdown-menu">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Exposed dropdown menus display the currently selected menu item above the menu.)
译文

[en]: <> (They can only be used when a single menu item can be chosen at a time.)
译文

<figure>

![]({assets_path}/components/menus/exposed-line-item-intro.png)

<figcaption>

[en]: <> (This exposed dropdown menu displays the currently selected font above the menu.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Upon selecting an item, an exposed dropdown menu updates to display that item. In some cases, it can accept user input and display a value \(whether or not it’s listed as a menu choice\).)
译文

[en]: <> (Placement)
### 位置

[en]: <> (An exposed dropdown menu is positioned below the element that generates the dropdown. On mobile, it can appear in front of the element generating the dropdown.)
译文

[en]: <> (Variations)
### 译文

[en]: <> (An exposed dropdown menu can be customized to have a different appearance or behavior.)
译文

[en]: <> (Text field dropdown menu)
#### 译文

[en]: <> (Text field dropdown menus look like text fields and display the currently selected item above the menu.)
译文

[en]: <> (On desktop, a text field dropdown menu appears below the element triggering the dropdown. On mobile, a text field dropdown menu can open a native picker.)
译文

<figure>

![]({assets_path}/components/menus/text-field-menu-intro.png)

<figcaption>

[en]: <> (On desktop, a text field dropdown menu appears below the currently selected menu item.)
译文

</figcaption></figure>

[en]: <> (Editable dropdown menu)
#### 译文

[en]: <> (An editable dropdown menu displays the currently selected menu item above the menu. It can accept a user-entered value not listed in the menu, but may accept only certain types of values, such as only positive numbers.)
译文

<figure>

![]({assets_path}/components/menus/editable-dropdown-intro.png)

<figcaption>

[en]: <> (This editable dropdown menu displays the currently selected font size. A user can also enter a value not listed in the menu, such as seven.)
译文

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Minimum and maximum width)
### 译文

<figure>

![]({assets_path}/components/menus/specs-menu-width-min.png)

</figure><figure>

![]({assets_path}/components/menus/specs-menu-width-max.png)

</figure>

[en]: <> (Dropdown)
### 译文

[en]: <> (Mobile)
#### 译文

<figure>

![]({assets_path}/components/menus/specs-menu-dropdown-1.png)

</figure><figure>

![]({assets_path}/components/menus/specs-menu-dropdown-2.png)

</figure>

[en]: <> (Desktop)
#### 译文

<figure>

![]({assets_path}/components/menus/specs-menu-desktopdropdown.png)

</figure>

[en]: <> (Dropdown—desktop dense)
### 译文

<figure>

![]({assets_path}/components/menus/specs-menu-desktopdense.png)

</figure></div>
