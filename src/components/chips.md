<div class="article__intro">

[en]: <> (Chips)
# 译文

[en]: <> (Chips are compact elements that represent an input, attribute, or action.)
译文

<figure>

![]({assets_path}/components/chips/purpose-01.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Input chips)
[en]: <> (Choice chips)
[en]: <> (Filter chips)
[en]: <> (Action chips)
[en]: <> (Theming)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#input-chips)
* [译文](#choice-chips)
* [译文](#filter-chips)
* [译文](#action-chips)
* [译文](#theming)
* [译文](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Chips allow users to enter information, make selections, filter content, or trigger actions.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-illo-1.png)

<figcaption>

[en]: <> (Compact)
#### 译文

[en]: <> (Chips are compact components that represent discrete information.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-illo-2.png)

<figcaption>

[en]: <> (Relevant)
#### 译文

[en]: <> (Chips should have a clear and helpful relationship to the content or task they represent.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-illo-3.png)

<figcaption>

[en]: <> (Focused)
#### 译文

[en]: <> (Chips should make tasks easier to complete, or content easier to sort.)
译文

</figcaption></figure></div></div>

[en]: <> (Types)
### 译文

<figure>

![]({assets_path}/components/chips/chips-types-entry.png)

<figcaption>

[en]: <> (Input chips)
#### 译文

[en]: <> (Input chips represent information used in fields, such as an entity or different attributes.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/chips/chips-types-choice.png)

<figcaption>

[en]: <> (Choice chips)
#### 译文

[en]: <> (In sets that contain at least two options, choice chips represent a single selection.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/chips/chips-types-filter.png)

<figcaption>

[en]: <> (Filter chips)
#### 译文

[en]: <> (Filter chips represent filters for a collection.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/chips/chips-types-action.png)

<figcaption>

[en]: <> (Action chips)
#### 译文

[en]: <> (Action chips trigger actions related to primary content.)
译文

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/elements.png)

</figure></div><div class="mdui-col">

[en]: <> (1. Container)
#### 1. 译文

[en]: <> (Chip containers hold all chip elements, and their size is determined by those elements. A container can also be defined by a stroke.)
译文

[en]: <> (2. Thumbnail \(optional\))
#### 2. 译文

[en]: <> (Thumbnails identify entities \(like individuals\) by displaying an avatar, logo, or icon.)
译文

[en]: <> (3. Text)
#### 3. 译文

[en]: <> (Chip text can be an entity name, description, tag, action, or conversational.)
译文

[en]: <> (4. Remove icon [optional])
#### 4. 译文

[en]: <> (Entry chips can include a Remove icon.)
译文

</div></div>

[en]: <> (Input chips)
<h2 id="input-chips">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Input chips represent a complex piece of information in compact form, such as an entity \(person, place, or thing\) or text. They enable user input and verify that input by converting text into chips.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-input.png)

<figcaption>

[en]: <> (An input chip used to show an entity.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-input-outlined.png)

<figcaption>

[en]: <> (An outlined input chip used to show an entity.)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/components/chips/input-usage-text.png)

<figcaption>

[en]: <> (Input chips can provide suggested responses.)
译文

</figcaption></figure>

[en]: <> (Behavior)
### 译文

[en]: <> (Transformative)
#### 译文

[en]: <> (Input chips transform text based on user input.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-behavior-predictive.mp4" src="{assets_path}/components/chips/entry-chip-behavior-predictive.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Text transforming into an input chip.)
译文

</figcaption></figure>

[en]: <> (Editable)
#### 译文

[en]: <> (An input chip’s text is editable until the user takes an action with the chip, such as sending an email. To edit an input chip’s text, tap the chip.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-behavior-editable.mp4" src="{assets_path}/components/chips/entry-chip-behavior-editable.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Input chips become editable when tapped.)
译文

</figcaption></figure>

[en]: <> (Informational)
#### 译文

[en]: <> (If text input is not recognized by the system, input chips can display an error state.)
译文

<figure>

![]({assets_path}/components/chips/entry-chip-behavior-error.png)

<figcaption>

[en]: <> (Input chips can represent an error state.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Multiple)
#### 译文

[en]: <> (A single field can contain multiple entry chips.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-behavior-multiple.mp4" src="{assets_path}/components/chips/entry-chip-behavior-multiple.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Multiple entry chips)
译文

</figcaption></figure></div><div class="mdui-col">

[en]: <> (Movable)
#### 译文

[en]: <> (Entry chips can be reordered or moved into other fields.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-behavior-draggable.mp4" src="{assets_path}/components/chips/entry-chip-behavior-draggable.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Movable entry chips)
译文

</figcaption></figure></div></div>

[en]: <> (Expandable)
#### 译文

[en]: <> (Input chips can expand to show more information or options.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-behavior-expandable.mp4" src="{assets_path}/components/chips/entry-chip-behavior-expandable.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Expandable entry chips)
译文

</figcaption></figure>

[en]: <> (Placement)
### 译文

[en]: <> (Input chips can be integrated with other components. They can appear:)
译文

[en]: <> (Inline with the text input cursor in a field)
[en]: <> (In a stacked list)
[en]: <> (In a horizontally scrollable list)
* 译文
* 译文
* 译文

<figure>

![]({assets_path}/components/chips/entry-chip-behavior-stackable.png)

<figcaption>

[en]: <> (Input chips can wrap to a new row if all of the chips need to be visible.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-placement-scrolling.mp4" src="{assets_path}/components/chips/entry-chip-placement-scrolling.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Input chips that horizontally scroll.)
译文

</figcaption></figure>

[en]: <> (States)
### 译文

<figure>

![]({assets_path}/components/chips/input-chips-states.png)

</figure><figure>

![]({assets_path}/components/chips/outlined-input-chips-states.png)

<figcaption>

[en]: <> (Input chips states)
译文

</figcaption></figure>

[en]: <> (Choice chips)
<h2 id="choice-chips">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Choice chips allow selection of a single chip from a set of options.)
译文

[en]: <> (Choice chips clearly delineate and display options in a compact area. They are a good alternative to toggle buttons, radio buttons, and single select menus.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-choice.png)

<figcaption>

[en]: <> (A set of choice chips)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-choice-outlined.png)

<figcaption>

[en]: <> (A set of outlined choice chips)
译文

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 译文

[en]: <> (Selecting a single choice chip automatically deselects all other chips in the set.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/choice-chip-behavior-selecting.mp4" src="{assets_path}/components/chips/choice-chip-behavior-selecting.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Selecting a choice chip deselects the other chips)
译文

</figcaption></figure>

[en]: <> (Placement)
### 译文

[en]: <> (Choice chips appear as part of a series of other choice chips. They are typically displayed horizontally and sequentially.)
译文

<figure>

![]({assets_path}/components/chips/composition-01.png)

<figcaption>

{do}

[en]: <> (Horizontal placement of choice chips)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-02.png)

<figcaption>

{do}

[en]: <> (Choice chips can scroll horizontally.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-03.png)

<figcaption>

{caution}

[en]: <> (Choice chips can wrap to a new row. However, using two or more rows of choice chips can make each chip harder to scan.)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/components/chips/composition-04.png)

<figcaption>

{dont}

[en]: <> (Choice chips shouldn’t present only a single option.)
译文

</figcaption></figure>

[en]: <> (States)
### 译文

<figure>

![]({assets_path}/components/chips/choice-chips-states.png)

</figure><figure>

![]({assets_path}/components/chips/outlined-choice-chips-states.png)

<figcaption>

{do}

[en]: <> (Choice chips states)
译文

</figcaption></figure>

[en]: <> (Filter chips)
<h2 id="filter-chips">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Filter chips use tags or descriptive words to filter content.)
译文

[en]: <> (Filter chips clearly delineate and display options in a compact area. They are a good alternative to toggle buttons or checkboxes.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-filter.png)

<figcaption>

[en]: <> (A filter chip)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-filter-outlined.png)

<figcaption>

[en]: <> (An outlined filter chip)
译文

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 译文

[en]: <> (Tap a chip to select it. Multiple chips can be selected or unselected.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/filter-chip-behavior-selecting.mp4" src="{assets_path}/components/chips/filter-chip-behavior-selecting.mp4" type="video/mp4"></video><figcaption>

[en]: <> (An icon can be added to indicate when a filter chip is selected.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/filter-chip-behavior-selecting-dynamic.mp4" src="{assets_path}/components/chips/filter-chip-behavior-selecting-dynamic.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Filter chip suggestions can dynamically change as users start to select filters.)
译文

</figcaption></figure>

[en]: <> (Placement)
### 译文

<figure>

![]({assets_path}/components/chips/composition-01.png)

<figcaption>

[en]: <> (Filter chips can be shown underneath a search field.)
译文

</figcaption></figure><figure>

![]({assets_path}/components/chips/composition-02.png)

<figcaption>

[en]: <> (Display multiple sets of filters in a side sheet.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-05.png)

<figcaption>

[en]: <> (Filter chips can wrap to a new row. If there are more than two rows, consider using horizontal scrolling to access them all.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-04.png)

<figcaption>

[en]: <> (Filter chips can horizontally scroll to show unlimited options.)
译文

</figcaption></figure></div></div><figure>

![]({assets_path}/components/chips/composition-03.png)

<figcaption>

{dont}

[en]: <> (Filter chips should not present only a single option.)
译文

</figcaption></figure>

[en]: <> (States)
### 译文

<figure>

![]({assets_path}/components/chips/filter-chips-states.png)

</figure><figure>

![]({assets_path}/components/chips/outlined-filter-chips-states.png)

<figcaption>

[en]: <> (Filter chips states)
译文

</figcaption></figure>

[en]: <> (Action chips)
<h2 id="action-chips">译文</h2>

[en]: <> (Usage)
### 译文

[en]: <> (Action chips offer actions related to primary content. They should appear dynamically and contextually in a UI.)
译文

[en]: <> (An alternative to action chips are buttons, which should appear persistently and consistently.)
译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-action.png)

<figcaption>

[en]: <> (An action chip)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-action-outlined.png)

<figcaption>

[en]: <> (An outlined action chip)
译文

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 译文

[en]: <> (Action chips can trigger an action or show progress and confirmation.)
译文

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/action-chip-behavior-tapping.mp4" src="{assets_path}/components/chips/action-chip-behavior-tapping.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tapping an action chip triggers a contextual action.)
译文

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/action-chip-behavior-confirmation.mp4" src="{assets_path}/components/chips/action-chip-behavior-confirmation.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Action chips can show progress and confirmation feedback.)
译文

</figcaption></figure>

[en]: <> (Placement)
### 译文

[en]: <> (Action chips are displayed after primary content, such as below a card or persistently at the bottom of a screen.)
译文

<figure>

![]({assets_path}/components/chips/composition-action-chips.png)

<figcaption>

[en]: <> (Action chips should be shown underneath primary content.)
译文

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-02.png)

<figcaption>

{caution}

[en]: <> (Action chips should appear in a set.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-03.png)

<figcaption>

{do}

[en]: <> (Action chips can be horizontally scrollable.)
译文

</figcaption></figure></div></div>

[en]: <> (States)
### 译文

<figure>

![]({assets_path}/components/chips/action-chips-states.png)

</figure><figure>

![]({assets_path}/components/chips/outlined-action-chips-states.png)

<figcaption>

[en]: <> (Action chips states)
译文

</figcaption></figure>

[en]: <> (Theming)
<h2 id="theming">译文</h2>

[en]: <> (Reply Material Theme)
### 译文

[en]: <> (This email app’s input chips have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/chips/chipinput-reply-ahero.png)

<figcaption>

[en]: <> (Reply’s customized input chips)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Reply’s input chips uses custom color on two elements: text, container.)
译文

<figure>

![]({assets_path}/components/chips/chipinput-reply-color.png)

</figure>

[en]: <> (Element       | Category      | Attribute          | Value)
[en]: <> (---------     |----------     |---------           |------)
[en]: <> (Text          | On Surface    | Color<br>Opacity   | #232F34<br>100%)
[en]: <> (Container     | On Surface    | Color<br>Opacity   | #232F34<br>12%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Reply’s input chips use custom typography for the text.)
译文

<figure>

![]({assets_path}/components/chips/chipinput-reply-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Body 2      | Typeface<br>Font<br>Size<br>Case   | Work Sans<br>Regular<br>14<br>Sentence case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Reply’s input chip containers have custom corner shapes.)
译文

<figure>

![]({assets_path}/components/chips/chipinput-reply-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 16dp<br>Rounded 16dp<br>Rounded 16dp<br>Rounded 16dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shrine Material Theme)
### 译文

[en]: <> (This retail app’s choice chips have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/chips/chipchoice-shrine-ahero.png)

<figcaption>

[en]: <> (Shrine’s customized choice chips)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Shrine’s choice chips uses custom color on four elements: selected container, selected text, unselected container, and unselected text.)
译文

<figure>

![]({assets_path}/components/chips/chipchoice-shrine-color.png)

</figure>

[en]: <> (Element               | Category      | Attribute          | Value)
[en]: <> (---------             |----------     |---------           |------)
[en]: <> (Selected container    | Primary       | Color<br>Opacity   | #FEDBD0<br>100%)
[en]: <> (Selected text         | On Primary    | Color<br>Opacity   | #442C2E<br>100%)
[en]: <> (Unselected text       | On Surface    | Color<br>Opacity   | #442C2E<br>100%)
[en]: <> (Unselected container  | On Surface    | Color<br>Opacity   | #442C2E<br>12%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Shrine’s choice chips use custom typography for the text.)
译文

<figure>

![]({assets_path}/components/chips/chipchoice-shrine-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Body 2      | Typeface<br>Font<br>Size<br>Case   | Rubik<br>Medium<br>14<br>Sentence case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Reply’s choice chip containers have custom corner shapes.)
译文

<figure>

![]({assets_path}/components/chips/chipchoice-shrine-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 8dp<br>Rounded 8dp<br>Rounded 8dp<br>Rounded 8dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Fortnightly Material Theme)
### 译文

[en]: <> (This news app’s filter chips have been customized using Material Theming. Areas of customization include color, typography, and shape.)
译文

<figure>

![]({assets_path}/components/chips/chipfilter-fortnightly-ahero.png)

<figcaption>

[en]: <> (Fortnightly’s customized filter chips.)
译文

</figcaption></figure>

[en]: <> (Color)
#### 译文

[en]: <> (Fortnightly’s filter chips uses custom color on two elements: text, and container stroke.)
译文

<figure>

![]({assets_path}/components/chips/chipfilter-fortnightly-color.png)

</figure>

[en]: <> (Element           | Category      | Attribute          | Value)
[en]: <> (---------         |----------     |---------           |------)
[en]: <> (Text              | On Surface    | Color<br>Opacity   | #000000<br>87%)
[en]: <> (Container stroke  | On Surface    | Color<br>Opacity   | #000000<br>12%)

译文     | 译文     | 译文         | 译文
--------|----------|----------   |-----------
译文     | 译文     | 译文<br>译文  | 译文<br>译文
译文     | 译文     | 译文<br>译文  | 译文<br>译文

[en]: <> (Typography)
#### 译文

[en]: <> (Fortnightly’s filter chips use custom typography for the text.)
译文

<figure>

![]({assets_path}/components/chips/chipfilter-fortnightly-type.png)

</figure>

[en]: <> (Element     | Category    | Attribute                          | Value)
[en]: <> (---------   |----------   |---------                           |------)
[en]: <> (Text        | Body 2      | Typeface<br>Font<br>Size<br>Case   | Libre Franklin<br>Regular<br>14<br>Title case)

译文     | 译文     | 译文                        | 译文
--------|----------|----------                  |-----------
译文     | 译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Shape)
#### 译文

[en]: <> (Fortnightly’s filter chip containers have custom corner shapes.)
译文

<figure>

![]({assets_path}/components/chips/chipfilter-fortnightly-shape.png)

</figure>

[en]: <> (Element     | Attribute                                                                          | Value)
[en]: <> (---------   |---------                                                                           |------)
[en]: <> (Container   | Top left corner<br>Top right corner<br>Bottom right corner<br>Bottom left corner   | Rounded 0dp<br>Rounded 0dp<br>Rounded 0dp<br>Rounded 0dp)

译文     | 译文                        | 译文
--------|----------                  |-----------
译文     | 译文<br>译文<br>译文<br>译文  | 译文<br>译文<br>译文<br>译文

[en]: <> (Specs)
<h2 id="specs">译文</h2>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Action chip)

<figure>

![]({assets_path}/components/chips/specs-chips-action.png)

</figure></div><div class="mdui-col">

[en]: <> (Outlined action chip)

<figure>

![]({assets_path}/components/chips/specs-outlined-chips-action.png)

</figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Choice chip)

<figure>

![]({assets_path}/components/chips/specs-chips-choice.png)

</figure></div><div class="mdui-col">

[en]: <> (Filter chip)

<figure>

![]({assets_path}/components/chips/specs-chips-filter.png)

</figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Input chip)

<figure>

![]({assets_path}/components/chips/specs-chips-input.png)

</figure></div><div class="mdui-col">

[en]: <> (Chips in groups)

<figure>

![]({assets_path}/components/chips/specs-chipsingrous.png)

</figure></div></div></div>
