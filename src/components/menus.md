<div class="article__intro">

[en]: <> (Menus)
# 译文

[en]: <> (Menus display a list of choices on temporary surfaces.)
译文

<figure>

![]({assets_path}/components/menus/menu-intro.png)

</figure>

<nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Dropdown menu)
[en]: <> (Exposed dropdown menu)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#dropdown-menu)
* [译文](#exposed-dropdown-menu)
* [译文](#theming)
* [译文](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (A menu displays a list of choices on a temporary surface. They appear when users interact with a button, action, or other control.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/menu-illos-unobtrusive.png)

<figcaption>

[en]: <> (Nimble)
#### 译文

[en]: <> (Menus should be easy to open, close, and interact with.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/menus/menu-illos-contextual.png)

<figcaption>

[en]: <> (Contextual)
#### 译文

[en]: <> (Menu content should be suited to user needs.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/menus/menu-illos-scannable.png)

<figcaption>

[en]: <> (Scannable)
#### 译文

[en]: <> (Menu items should be easy to scan.)
译文

</figcaption></figure></div></div>

[en]: <> (Types)
### 译文

[en]: <> (Menus allow users make a selection from multiple options. They are less prominent and take up less space than selection controls, such as a set of radio buttons.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/option-baseline-dropdown.png)

<figcaption>

[en]: <> (Dropdown menus)
#### 译文

[en]: <> (Dropdown menus display a list of options, triggered by an icon, button, or action. Their placement varies based on the element that opens them.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/menus/option-exposed-line-item.png)

<figcaption>

[en]: <> (Exposed dropdown menus)
#### 译文

[en]: <> (Exposed dropdown menus display the currently selected menu item above the list of options. Some variations can accept user-entered input.)
译文

</figcaption></figure></div></div>

[en]: <> (Placement)
### 译文

[en]: <> (Elevation)
#### 译文

[en]: <> (Menus appear in front of all other permanent UI elements.)
译文

<figure>

![]({assets_path}/components/menus/behavior-location.png)

<figcaption>

[en]: <> (Menus appear at a higher elevation than all other permanent UI elements.)
译文

</figcaption></figure>

[en]: <> (Height)
#### 译文

[en]: <> (The maximum height of a menu should be at least one row less than the height of the app’s UI.)
译文

<figure>

![]({assets_path}/components/menus/menu-length.png)

<figcaption>

[en]: <> (The rows in this menu are 32dp tall. That’s also the space used between the menu and the bottom of the screen.)
译文

</figcaption></figure>

[en]: <> (Position)
#### 译文

[en]: <> (Menus should be positioned relative to the edge of the screen or browser. They typically appear next to \(or in front of\) the element that generates them. If they are in a position to be cut off by the browser or screen’s edge, the menu can instead appear to the left, right, or above the element that generates it.)
译文

<figure>

![]({assets_path}/components/menus/cascading-menu-2.png)

<figcaption>

[en]: <> (Menus can change their position to avoid being truncated by the screen or browser’s edge.)
译文

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

[en]: <> (Menus display lists of related options \(which can be grouped together\) as well as unrelated options. Menus appear when a user taps an interactive UI element such as an icon, button, action, or content, such as selected items or text.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/elements-text-only.png)

</figure></div><div class="mdui-col">

[en]: <> (Text list)
#### 译文

[en]: <> (Container)
[en]: <> (Text)
[en]: <> (Divider)
1. 译文
2. 译文
3. 译文

</div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/elements-text-icons.png)

</figure></div><div class="mdui-col">

[en]: <> (Text and icon list)
#### 译文

[en]: <> (Container)
[en]: <> (Leading icon)
[en]: <> (Text)
[en]: <> (Divider)
1. 译文
2. 译文
3. 译文
4. 译文

</div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/elements-text-icon-command.png)

</figure></div><div class="mdui-col">

[en]: <> (Text, icon, and keyboard command list)
#### 译文

[en]: <> (Container)
[en]: <> (Leading icon)
[en]: <> (Text)
[en]: <> (Divider)
[en]: <> (Command)
[en]: <> (Cascading menu indicator)
1. 译文
2. 译文
3. 译文
4. 译文
5. 译文
6. 译文

</div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/menus/elements-text-states.png)

</figure></div><div class="mdui-col">

[en]: <> (Text with selection state list)
#### 译文

[en]: <> (Selection state)
1. 译文

</div></div>

[en]: <> (Actions)
### 译文

[en]: <> (Disabled actions)
#### 译文

[en]: <> (Display actions as disabled when they can only be used sometimes, under certain conditions. They should be displayed as disabled rather than removing them.)
译文

<figure>

![]({assets_path}/components/menus/disabled-text-copy.png)

<figcaption>

[en]: <> (The Redo action is disabled when that action isn’t available, and the Cut and Copy actions are disabled until content is selected.)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Scrolling)
### 译文

[en]: <> (If not all menu items are displayed at once, menus can be scrollable. In this state, menus show a persistent scrollbar.)
译文

<figure>

![]({assets_path}/components/menus/scrollable.png)

<figcaption>

[en]: <> (When its content is scrollable, menus display scrollbars.)
译文

</figcaption></figure>

[en]: <> (Motion)
### 译文

[en]: <> (Menus open using a scale animation \(an animation that shows an element grow in size\). The animation creates a relationship between the menu and the action that generates the menu.)
译文

[en]: <> (Position)
#### 译文

[en]: <> (A menu’s position on screen affects where and how it will appear. If opened at the top of the screen, it will expand downwards \(to avoid being cropped\).)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/menus/behavior-menu-multiple-position.mp4" src="{assets_path}/components/menus/behavior-menu-multiple-position.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Menus at different positions on screen open in different ways, adapting to the space available.)
译文

</figcaption></figure>

[en]: <> (By default, menus open with an entrance animation. However, on desktop, menus can skip the animation and open instantly instead.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/menus/baseline-motion-comparison-frame.mp4" src="{assets_path}/components/menus/baseline-motion-comparison-frame.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Mobile menus have entrance animations)
[en]: <> (Desktop menus have the option to open instantly)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Dropdown menu)
<h2 id="dropdown-menu">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (A dropdown menu is a compact way of displaying multiple choices. It appears upon interaction with an element \(such as an icon or button\) or when users perform a specific action.)
译文

[en]: <> (Placement)
### 译文

[en]: <> (Dropdown menus are positioned relative to both the element that generates them and the edges of the screen or browser. They can appear in front of, beside, above, or below the element that generates them.)
译文

[en]: <> (Default placement)
#### 译文

[en]: <> (A dropdown menu is typically positioned below the element that generates it.)
译文

<figure>

![]({assets_path}/components/menus/baseline-menu-intro.png)

<figcaption>

[en]: <> (A dropdown menu triggered by an icon on mobile.)
译文

</figcaption></figure>

[en]: <> (Cascading menu \(Desktop only\))
#### 译文

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
### 译文

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

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Basil Material Theme)
### 译文

[en]: <> (This recipe app’s menus have been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/menus/menu-basil-ahero.png)

<figcaption>

[en]: <> (Basil’s customized menu)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Basil’s menus use custom color on four elements: the menu container, text, icon, and hover overlay.)
译文

<figure>

![]({assets_path}/components/menus/menu-basil-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Container     | Surface       | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Text          | On Surface    | Color<br>Opacity   | #29302E<br>100%)
[en]: <> (Icon          | Primary       | Color<br>Opacity   | #356859<br>54%)
[en]: <> (Hover overlay | Primary    | Color<br>Opacity   | #356859<br>4%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Basil’s menu text uses custom typography.)
译文

<figure>

![]({assets_path}/components/menus/menu-basil-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Body 1      | Typeface<br>Font<br>Size<br>Case   | Lekton<br>Medium<br>16<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Basil’s menu containers have custom corner shapes.)
译文

<figure>

![]({assets_path}/components/menus/menu-basil-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Table       | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 6dp<br>Rounded 6dp<br>Rounded 6dp<br>Rounded 6dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shrine Material Theme)
### 译文

[en]: <> (This retail app’s menus have been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/menus/menu-shrine-ahero.png)

<figcaption>

[en]: <> (Shrine’s customized menu)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Shrine’s menus use custom color on two elements: the menu container and text.)
译文

<figure>

![]({assets_path}/components/menus/menu-shrine-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Container     | Surface       | Color<br>Opacity   | #FFFBFA<br>100%)
[en]: <> (Text          | On Surface    | Color<br>Opacity   | #442C2E<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Shrine’s menu text uses custom typography.)
译文

<figure>

![]({assets_path}/components/menus/menu-shrine-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Body 1      | Typeface<br>Font<br>Size<br>Case   | Rubik<br>Regular<br>16<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Shrine’s menu containers have custom corner shapes.)
译文

<figure>

![]({assets_path}/components/menus/menu-shrine-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Table       | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 8dp<br>Rounded 8dp<br>Rounded 8dp<br>Rounded 8dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

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
