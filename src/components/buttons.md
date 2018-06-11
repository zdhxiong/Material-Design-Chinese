<div class="article__intro">

[en]: <> (Buttons)
# 译文

[en]: <> (Buttons allow users to take actions, and make choices, with a single tap.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-usage.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Hierarchy and placement)
[en]: <> (Text button)
[en]: <> (Outlined button)
[en]: <> (Contained button)
[en]: <> (Toggle button)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#hierarchy-placement)
* [译文](#text-button)
* [译文](#outlined-button)
* [译文](#contained-button)
* [译文](#toggle-button)
* [译文](#theming)
* [译文](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Buttons communicate actions that users can take. They are typically placed throughout your UI, in places like:)
译文

[en]: <> (Dialogs)
[en]: <> (Modal windows)
[en]: <> (Forms)
[en]: <> (Cards)
[en]: <> (Toolbars)
* 译文
* 译文
* 译文
* 译文
* 译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-illos-01.png)

</figure>

[en]: <> (Identifiable)
#### 译文

[en]: <> (Buttons should indicate that they can trigger an action.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-illos-02.png)

</figure>

[en]: <> (Findable)
#### 译文

[en]: <> (Buttons should be easy to find among other elements, including other buttons.)
译文

</div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-illos-03.png)

</figure>

[en]: <> (Clear)
#### 译文

[en]: <> (A button’s action and state should be clear.)

</div></div>

[en]: <> (Types)
### 译文

<figure>

![]({assets_path}/components/buttons/buttons-types-all.png)

<figcaption>

[en]: <> (*Text button* \(low emphasis\)<br>Text buttons are typically used for less important actions.)
[en]: <> (Outlined Button \(medium emphasis\)<br>Outlined buttons are used for more emphasis than text buttons due to the stroke.)
[en]: <> (Contained button \(high emphasis\)<br>Contained buttons have more emphasis, as they use use a color fill and shadow.)
[en]: <> (Toggle button<br>Toggle buttons group a set of actions using layout and spacing. They’re used less often than other button types.)
1. 译文<br>译文
2. 译文<br>译文
3. 译文<br>译文
4. 译文<br>译文

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

[en]: <> (Buttons contain one required element and four optional elements.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-anatomy-all.png)

<figcaption>

[en]: <> (Text button<br>A. Text label<br>C. Icon \(optional\))
[en]: <> (Outlined button<br>A. Text label<br>B. Container<br>C. Icon \(optional\))
[en]: <> (Contained button<br>A. Text label<br>B. Container<br>C. Icon \(optional\))
[en]: <> (Toggle button<br>A. Container<br>C. Icon)
1. 译文<br>译文<br>译文
2. 译文<br>译文<br>译文<br>译文
3. 译文<br>译文<br>译文<br>译文
4. 译文<br>译文<br>译文

</figcaption></figure>

[en]: <> (Text label)
### 译文

[en]: <> (Text buttons and contained buttons use text labels, which describe the action that will occur if a user taps a button. If a text label is not used, an icon should be present to signify what the button does.)
译文

[en]: <> (By default Material uses capitalized button text labels \(for languages that have capitalization\). This is to distinguish the text label from surrounding text. If a text button does not use capitalization for button text, find another characteristic to distinguish it such as color, size, or placement.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-text-label-do.png)

<figcaption>

{do}

[en]: <> (Use capitalization, for languages that allow capitalization.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-elements-text-label-dont-02.png)

<figcaption>

{dont}

[en]: <> (Don’t wrap text. For maximum legibility, a text label should remain on a single line.)
译文

</figcaption></figure></div></div>

[en]: <> (Hierarchy and placement)
<h2 id="hierarchy-placement">译文</h2>

[en]: <> (Hierarchy)
### 译文

[en]: <> (A single, prominent button)
#### 译文

[en]: <> (A layout should contain a single prominent button that makes it clear that other buttons have less importance in the hierarchy. This high-emphasis button commands the most attention.)
译文

[en]: <> (Other buttons)
#### 译文

[en]: <> (An app can show more than one button in a layout at a time, so a high-emphasis button can be accompanied by medium- and low-emphasis buttons that perform less important actions. When using multiple buttons, ensure the available state of one button doesn’t look like the disabled state of another.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-layout-diagram-01.png)

<figcaption>

[en]: <> (A button’s level of emphasis helps determine its appearance, typography, and placement.)
译文

</figcaption></figure>

[en]: <> (Placement)
### 译文

[en]: <> (Multiple button types can be used to express different emphasis levels.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-layout-when-to-use-02.png)

<figcaption>

[en]: <> (This screen layout uses:)
译文

[en]: <> (An extended floating action button for the highest emphasis)
[en]: <> (A contained button for high emphasis)
[en]: <> (A text button for low emphasis)
1. 译文
2. 译文
3. 译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-layout-do-04.png)

<figcaption>

{do}

[en]: <> (In a bottom bar, when using multiple buttons, indicate the more important action by placing it in a contained button \(next to a text button\).)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-layout-dont.png)

<figcaption>

{dont}

[en]: <> (Avoid using two contained buttons next to one another if they don’t have the same fill color.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-layout-do-outlined.png)

<figcaption>

{do}

[en]: <> (In a bottom bar, when using multiple buttons, you can place a outlined button \(medium emphasis\) next to a contained button \(high emphasis\).)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-layout-do-outlined2.png)

<figcaption>

{do}

[en]: <> (When using multiple buttons in a bottom bar, you can place a text button \(low emphasis\) next to an outlined button \(medium emphasis\).)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/components/buttons/buttons-layout-do-06.png)

<figcaption>

{do}

[en]: <> (Use a contained button in a bottom sheet next to other important details.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/buttons/buttons-layout-dont-08.png)

<figcaption>

{dont}

[en]: <> (Don’t place a button below another button if there is space to place them side by side.)
译文

</figcaption></figure>

[en]: <> (Text button)
<h2 id="text-button">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Text buttons are typically used for less-pronounced actions, including those located:)
译文

[en]: <> (In dialogs)
[en]: <> (In cards)
* 译文
* 译文

[en]: <> (In cards, text buttons help maintain an emphasis on card content.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-text-when-to-use-01.png)

<figcaption>

[en]: <> (Text button)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/text-button-usage-2.png)

<figcaption>

[en]: <> (Use a text button in snackbars.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/text-button-usage-3.png)

<figcaption>

[en]: <> (A text button against an image background)
译文

</figcaption></figure></div></div>

[en]: <> (Text label)
#### 译文

[en]: <> (A button’s text label is the most important element on a button, as it communicates the action that will be performed when the user touches it.)
译文

<figure>

![]({assets_path}/components/buttons/text-button-usage-1.png)

<figcaption>

[en]: <> (Text label using a distinct action)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/text-button-text-label-caution.png)

<figcaption>

{caution}

[en]: <> (Text labels need to be distinct from other elements. If the text label isn’t capitalized, it should use a different color, style, or layout from other text.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-textbutton-text-label-dont-1.png)

<figcaption>

{dont}

[en]: <> (Avoid text labels that are too long. They should be concise.)
译文

</figcaption></figure></div></div>

[en]: <> (Placement)
### 译文

[en]: <> (Text buttons are often embedded in contained components like cards and dialogs, in order to relate themselves to the component in which they appear. Because text buttons don’t have a container, they don’t distract from nearby content.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-text-when-to-use-02.png)

<figcaption>

[en]: <> (Dialogs use text buttons because the absence of a container helps unify the action with the dialog text. Align text buttons to the right edge for left-to-right scripts.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/buttons/buttons-text-when-to-use-03.png)

<figcaption>

[en]: <> (Text buttons minimize distraction from card content.)
译文

</figcaption></figure>

[en]: <> (States)
### 译文

[en]: <> (Text buttons can be placed in front of a variety of backgrounds. Until the button is interacted with, its container isn’t visible.)
译文

[en]: <> (To maintain accessibility, Material Design provides baseline opacity values for the color overlays used by states. A brand can adjust opacity values to suit its color scheme.)
译文

<figure>

![]({assets_path}/components/buttons/text-buttons-states.png)

<figcaption>

[en]: <> (Text button states)
译文

</figcaption></figure>

[en]: <> (Outlined button)
<h2 id="outlined-button">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Outlined buttons are medium-emphasis buttons. They contain actions that are important, but aren’t the primary action in an app.)
译文

[en]: <> (Alternatives)
#### 译文

[en]: <> (Outlined buttons are also a lower emphasis alternative to contained buttons, or a higher emphasis alternative to text buttons.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-outlined-usage-01.png)

</figure>

[en]: <> (Container)
### 译文

[en]: <> (Outlined buttons display a stroke around a text label. Stroke can be represented in different ways:)
译文

[en]: <> (Set a button’s width to be the size of the text label, with 16dp padding on the left and right)
[en]: <> (Set the button’s relative position to the responsive layout grid)
* 译文
* 译文

[en]: <> (In a resting state, outlined buttons should display containment with a stroke and no fill.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-outlined-usage-02.png)

<figcaption>

[en]: <> (Outlined button)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-outlined-usage-flexible.png)

<figcaption>

{do}

[en]: <> (An outlined button’s width is dynamically set to fit the text label.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-outlined-usage-dont.png)

<figcaption>

{dont}

[en]: <> (An outlined button’s width shouldn’t be shorter than its text.)
译文

</figcaption></figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-outlined-usage-caution.png)

<figcaption>

{caution}

[en]: <> (Protect text when using Outlined buttons in front of images. This image uses a light purple scrim to provide text protection for this outlined button.)
译文

</figcaption></figure></div></div>

[en]: <> (States)
### 译文

[en]: <> (Outlined buttons can be placed on top of a variety of backgrounds. Its container is transparent and until the button is interacted with, a color isn’t visible.)
译文

[en]: <> (To maintain accessibility, Material Design provides baseline opacity values for the color overlays used by states. A brand can adjust opacity values to suit its color scheme.)
译文

<figure>

![]({assets_path}/components/buttons/outlined-button-states.png)

<figcaption>

[en]: <> (Outlined button states)
译文

</figcaption></figure>

[en]: <> (Contained button)
<h2 id="contained-button">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Contained buttons are high-emphasis, distinguished by their use of elevation and fill. They contain actions that are primary to your app.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-contained-do-1.png)

<figcaption>

[en]: <> (A contained button)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-text-label-do-2.png)

<figcaption>

{do}

[en]: <> (Text labels can be written in sentence case, as long as the button is clearly distinguishable from elements around it.)
译文

</figcaption></figure></div></div>

[en]: <> (Container)
### 译文

[en]: <> (Contained buttons display a container around a text label. Containers can be represented in different ways:)
译文

[en]: <> (Set container width to the size of the text label with 16dp padding on the left and right)
[en]: <> (Set the container’s relative position to the [responsive layout grid]\(https://www.mdui.org/design/layout/responsive-layout-grid.html\))
* 译文
* 译文

[en]: <> (Contained buttons should display containers with a solid color.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-contained-do.png)

<figcaption>

[en]: <> (A contained button with solid color)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-elements-container-flexible.png)

<figcaption>

{do}

[en]: <> (A button container’s width is dynamically set to fit its text label.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-elements-container-flexible-dont.png)

<figcaption>

{dont}

[en]: <> (A button container’s width shouldn’t be shorter than its text.)
译文

</figcaption></figure></div></div>

[en]: <> (Button container width can be set according to the responsive layout grid.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-elements-container-extended.png)

<figcaption>

[en]: <> (Contained button in a responsive layout grid)
译文

</figcaption></figure>

[en]: <> (Icon)
### 译文

[en]: <> (Contained buttons can place icons next to text labels to both clarify an action and call attention to a button.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-elements-icon-01.png)

<figcaption>

{do}

[en]: <> (Use icons that clearly communicate their meaning.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-elements-icon-dont-02.png)

<figcaption>

{dont}

[en]: <> (Don’t vertically align an icon and text in the center of a contained button.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/buttons/buttons-elements-icon-dont-03.png)

<figcaption>

{dont}

[en]: <> (Don’t use two icons in the same button.)
译文

</figcaption></figure></div></div>

[en]: <> (Shadow & elevation)
### 译文

[en]: <> (Buttons at higher elevations typically appear more prominent in a design. On press, elevated buttons lift up and the container displays touch feedback.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-elements-shadow-elevation.png)

<figcaption>

[en]: <> (Higher elevation increases the prominence of a contained button.)
译文

</figcaption></figure>

[en]: <> (States)
### 译文

[en]: <> (The following opacity values are recommended for button container fill colors. Each app can alter the overlay values to suit their brand’s color palette.)
译文

<figure>

![]({assets_path}/components/buttons/contained-buttons-states.png)

<figcaption>

[en]: <> (Contained button states)
译文

</figcaption></figure>

[en]: <> (Toggle button)
<h2 id="toggle-button">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Toggle buttons can be used to group related options. To emphasize groups of related toggle buttons, a group should share a common container.)
译文

[en]: <> (Selected action)
#### 译文

[en]: <> (Only one option in a group of toggle buttons can be selected and active at a time. Selecting one option deselects any other.)
译文

<figure>

![]({assets_path}/components/buttons/buttons-toggle-usage.png)

<figcaption>

[en]: <> (These toggle buttons present options for aligning text to the left, right, and center.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/buttons/buttons-toggle-usage-2.png)

<figcaption>

[en]: <> (Icons can be used as toggle buttons when they allow selection, or deselection, of a single choice, such as marking an item as a favorite.)
译文

</figcaption></figure>

[en]: <> (States)
### 译文

[en]: <> (Active and available toggle buttons)
#### 译文

[en]: <> (A toggle button’s state makes it clear which button is active. Hover and focus states express the available selection options for buttons in a toggle group.)
译文

[en]: <> (Disabled toggle buttons)
#### 译文

[en]: <> (Toggle buttons that cannot be selected can either be given a disabled state, or be hidden.)
译文

<figure>

![]({assets_path}/components/buttons/toggle-buttons-states.png)

<figcaption>

[en]: <> (Toggle button states)
译文

</figcaption></figure>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Crane Material Theme)
### 译文

[en]: <> (This travel app’s buttons have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/buttons/button-crane-ahero.png)

<figcaption>

[en]: <> (Crane’s customized buttons)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Crane’s buttons uses custom color on two elements: the container and text.)
译文

<figure>

![]({assets_path}/components/buttons/button-crane-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Container     | Primary       | Color<br>Opacity   | #5C1349<br>100%)
[en]: <> (Text          | On Primary    | Color<br>Opacity   | #FFFFFF<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Crane’s buttons use custom typography for the button text.)
译文

<figure>

![]({assets_path}/components/buttons/button-crane-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Button      | Typeface<br>Font<br>Size<br>Case   | Raleway<br>SemiBold<br>14<br>All caps)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Crane’s button containers have custom corner shapes.)
译文

<figure>

![]({assets_path}/components/buttons/button-crane-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 18dp<br>Rounded 18dp<br>Rounded 18dp<br>Rounded 18dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Fortnightly Material Theme)
### 译文

[en]: <> (This news app’s buttons have been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/buttons/button-fortnightly-ahero.png)

<figcaption>

[en]: <> (Fortnightly’s customized buttons)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Fortnightly’s buttons uses custom color on two elements: background and text.)
译文

<figure>

![]({assets_path}/components/buttons/button-fortnightly-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Background    | Background    | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Text          | Primary       | Color<br>Opacity   | #661FFF<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Fortnightly’s buttons use custom typography for the button text.)
译文

<figure>

![]({assets_path}/components/buttons/button-fortnightly-type.png)

</figure>

[en]: <> (Element     |Category      | Attribute                          | Value)
[en]: <> (---------   |-----------   |---------                           |------)
[en]: <> (Text        | Button       | Typeface<br>Font<br>Size<br>Case   | Libre Franklin<br>ExtraBold<br>14<br>Sentence case)

译文     |译文     | 译文                        | 译文
--------|-------- |----------                   |-----------
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Rally Material Theme)
### 译文

[en]: <> (This personal finance app’s buttons have been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/buttons/button-rally-ahero.png)

<figcaption>

[en]: <> (Rally’s customized buttons)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Rally’s buttons uses custom color on two elements: background and text.)
译文

<figure>

![]({assets_path}/components/buttons/button-rally-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Background    | Surface       | Color<br>Opacity   | #3C3C46<br>100%)
[en]: <> (Text          | Primary       | Color<br>Opacity   | #FFFFFF<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Rally’s buttons use custom typography for the button text.)
译文

<figure>

![]({assets_path}/components/buttons/button-rally-type.png)

</figure>

[en]: <> (Element     |Category      | Attribute                          | Value)
[en]: <> (---------   |-----------   |---------                           |------)
[en]: <> (Text        | Button       | Typeface<br>Font<br>Size<br>Case   | Roboto Condensed<br>Bold<br>14<br>All caps)

译文     |译文     | 译文                        | 译文
--------|-------- |----------                   |-----------
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Posivibes Material Theme)
### 译文

[en]: <> (This social media app’s buttons have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/buttons/button-posivibes-ahero.png)

<figcaption>

[en]: <> (Posivibe’s customized buttons)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Posivibe’s buttons uses custom color on two elements: the container stroke and text.)
译文

<figure>

![]({assets_path}/components/buttons/button-posivibes-color.png)

</figure>

[en]: <> (Element             | Category      | Attribute          | Value)
[en]: <> (---------           |----------     |---------           |------)
[en]: <> (Container stroke    | Secondary     | Color<br>Opacity   | #000000<br>100%)
[en]: <> (Text                | Primary       | Color<br>Opacity   | #000000<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Posivibe’s buttons use custom typography for the button text.)
译文

<figure>

![]({assets_path}/components/buttons/button-posivibes-type.png)

</figure>

[en]: <> (Element     |Category      | Attribute                          | Value)
[en]: <> (---------   |-----------   |---------                           |------)
[en]: <> (Text        | Button       | Typeface<br>Font<br>Size<br>Case   | Roboto Condensed<br>Bold<br>14<br>All caps)

译文     |译文     | 译文                        | 译文
--------|-------- |----------                   |-----------
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Posivibe’s button containers have custom corner shapes.)
译文

<figure>

![]({assets_path}/components/buttons/button-posivibes-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Sharp 0dp<br>Sharp 0dp<br>Sharp 0dp<br>Sharp 0dp)

译文     |译文     | 译文                        | 译文
--------|-------- |----------                   |-----------
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Reply Material Theme)
### 译文

[en]: <> (This email app’s buttons have been customized using Material Theming. Areas of customization include color and typography.)
译文

<figure>

![]({assets_path}/components/buttons/button-reply-ahero.png)

<figcaption>

[en]: <> (Reply’s customized buttons.)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Reply’s buttons uses custom color on four elements: background, icon, icon fill, and text.)
译文

<figure>

![]({assets_path}/components/buttons/button-reply-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Background    | Surface       | Color<br>Opacity   | #FFFFFF<br>100%)
[en]: <> (Icon          | Primary       | Color<br>Opacity   | #344955<br>100%)
[en]: <> (Icon fill     | On Primary    | Color<br>Opacity   | #344955<br>100%)
[en]: <> (Text          | Primary       | Color<br>Opacity   | #344955<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Reply’s buttons use custom typography for the button text.)
译文

<figure>

![]({assets_path}/components/buttons/button-reply-type.png)

</figure>

[en]: <> (Element     |Category      | Attribute                          | Value)
[en]: <> (---------   |-----------   |---------                           |------)
[en]: <> (Text        | Button       | Typeface<br>Font<br>Size<br>Case   | Work Sans<br>ExtraBold<br>15<br>All caps)

译文     |译文     | 译文                        | 译文
--------|-------- |----------                  |-----------
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shrine Material Theme)
### 译文

[en]: <> (This retail app’s buttons have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/buttons/button-shrine-ahero.png)

<figcaption>

[en]: <> (Shrine’s customized buttons)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Shrine’s buttons uses custom color on three elements: the container, icon, and text.)
译文

<figure>

![]({assets_path}/components/buttons/button-shrine-color.png)

</figure>

[en]: <> (Element      | Category      | Attribute          | Value)
[en]: <> (---------    |----------     |---------           |------)
[en]: <> (Container    | Primary       | Color<br>Opacity   | #FEDBD0<br>100%)
[en]: <> (Icon         | On Primary    | Color<br>Opacity   | #442C2E<br>100%)
[en]: <> (Text         | On Primary    | Color<br>Opacity   | #442C2E<br>100%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Shrine’s buttons use custom typography for the button text.)
译文

<figure>

![]({assets_path}/components/buttons/button-shrine-type.png)

</figure>

[en]: <> (Element     |Category      | Attribute                          | Value)
[en]: <> (---------   |-----------   |---------                           |------)
[en]: <> (Text        | Button       | Typeface<br>Font<br>Size<br>Case   | Rubik<br>Medium<br>14<br>All caps)

译文     |译文     | 译文                        | 译文
--------|-------- |----------                  |-----------
译文     |译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Shrine’s button containers have custom corner shapes.)
译文

<figure>

![]({assets_path}/components/buttons/button-shrine-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Cut 8dp<br>Cut 8dp<br>Cut 8dp<br>Cut 8dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Contained Button)
#### 译文

<figure>

![]({assets_path}/components/buttons/specs-contained-button.png)

</figure></div><div class="mdui-col">

[en]: <> (Contained Button with icon)
#### 译文

<figure>

![]({assets_path}/components/buttons/specs-contained-button-with-icon.png)

</figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Outlined Button)
#### 译文

<figure>

![]({assets_path}/components/buttons/specs-outlined-button.png)

</figure></div><div class="mdui-col">

[en]: <> (Text Button)
#### 译文

<figure>

![]({assets_path}/components/buttons/specs-text-button.png)

</figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Toggle Buttons)
#### 译文

<figure>

![]({assets_path}/components/buttons/specs-toggle-buttons.png)

</figure></div></div></div>
