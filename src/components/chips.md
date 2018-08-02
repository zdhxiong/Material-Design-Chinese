<div class="article__intro">

[en]: <> (Chips)
# 纸片

[en]: <> (Chips are compact elements that represent an input, attribute, or action.)
纸片是用于表示输入、属性或操作的较紧凑的元素。

<figure>

![]({assets_path}/components/chips/purpose-01.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Input chips)
[en]: <> (Choice chips)
[en]: <> (Filter chips)
[en]: <> (Action chips)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [输入纸片](#input-chips)
* [选择纸片](#choice-chips)
* [过滤纸片](#filter-chips)
* [操作纸片](#action-chips)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Chips allow users to enter information, make selections, filter content, or trigger actions. Chips should appear dynamically as a group of multiple interactive elements. Unlike buttons, which should be a consistent and familiar call to action, one that a user expects to appear as the same action in the same general area.)
纸片使用户可以输入信息、进行选择、过滤内容或触发操作。纸片应该作为由多个交互元素组成的一组元素动态显示。与按钮不同的是，显示在同一块区域内的纸片，每个纸片的操作应该是一致的。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-illo-1.png)

<figcaption>

[en]: <> (Compact)
#### 紧凑的

[en]: <> (Chips are compact components that represent discrete information.)
纸片是用于表示多个不相关信息的紧凑组件。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-illo-2.png)

<figcaption>

[en]: <> (Relevant)
#### 与内容相关的

[en]: <> (Chips should have a clear and helpful relationship to the content or task they represent.)
纸片应该与它所代表的内容或任务有明确而有用的关系。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-illo-3.png)

<figcaption>

[en]: <> (Focused)
#### 有重点的

[en]: <> (Chips should make tasks easier to complete, or content easier to sort.)
纸片应该要使任务更容易完成，或者内容更容易排序。

</figcaption></figure></div></div>

[en]: <> (Types)
### 类型

<figure>

![]({assets_path}/components/chips/chips-types-entry.png)

<figcaption>

[en]: <> (Input chips)
#### 输入纸片

[en]: <> (Input chips represent information used in fields, such as an entity or different attributes.)
输入纸片表示在字段中使用的信息，例如一个对象或不同的属性。

</figcaption></figure><figure>

![]({assets_path}/components/chips/chips-types-choice.png)

<figcaption>

[en]: <> (Choice chips)
#### 选择纸片

[en]: <> (In sets that contain at least two options, choice chips represent a single selection.)
在包含至少两个选项的集合中，选择纸片代表其中的一个选项。

</figcaption></figure><figure>

![]({assets_path}/components/chips/chips-types-filter.png)

<figcaption>

[en]: <> (Filter chips)
#### 过滤纸片

[en]: <> (Filter chips represent filters for a collection.)
过滤纸片代表一个集合的过滤器。

</figcaption></figure><figure>

![]({assets_path}/components/chips/chips-types-action.png)

<figcaption>

[en]: <> (Action chips)
#### 操作纸片

[en]: <> (Action chips trigger actions related to primary content.)
操作纸片用于触发与主内容相关的操作。

</figcaption></figure>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/elements.png)

</figure></div><div class="mdui-col">

[en]: <> (1. Container)
#### 1. 容器

[en]: <> (Chip containers hold all chip elements, and their size is determined by those elements. A container can also be defined by a stroke.)
纸片容器用于容纳纸片中所有的元素，容器的尺寸由这些元素决定。容器也可以用描边来表示。

[en]: <> (2. Thumbnail \(optional\))
#### 2. 缩略图（可选）

[en]: <> (Thumbnails identify entities \(like individuals\) by displaying an avatar, logo, or icon.)
缩略图通过显示头像、logo 或图标来区分实体（如使用头像来区分不同用户）。

[en]: <> (3. Text)
#### 3. 文本

[en]: <> (Chip text can be an entity name, description, tag, action, or conversational.)
纸片的文本可以是实体的名称、描述、标签、操作或对话。

[en]: <> (4. Remove icon [optional])
#### 4. 删除图标（可选）

[en]: <> (Entry chips can include a Remove icon.)
输入纸片可以包含删除图标。

</div></div>

[en]: <> (Input chips)
<h2 id="input-chips">输入纸片</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Input chips represent a complex piece of information in compact form, such as an entity \(person, place, or thing\) or text. They enable user input and verify that input by converting text into chips.)
输入纸片用较紧凑的形式表示复杂信息，例如一个实体（人、地点或事物）或文本。它支持用户输入，并通过把文本转换为纸片来确认用户输入。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-input.png)

<figcaption>

[en]: <> (An input chip used to show an entity.)
一个用于显示实体的输入纸片。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-input-outlined.png)

<figcaption>

[en]: <> (An outlined input chip used to show an entity.)
一个用于显示实体的描边型输入纸片

</figcaption></figure></div></div><figure>

![]({assets_path}/components/chips/input-usage-text.png)

<figcaption>

[en]: <> (Input chips can provide suggested responses.)
输入纸片可以提供建议的回复。

</figcaption></figure>

[en]: <> (Behavior)
### 行为

[en]: <> (Transformative)
#### 转换

[en]: <> (Input chips transform text based on user input.)
可以根据用户输入把文本转换成输入纸片。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-behavior-predictive.mp4" src="{assets_path}/components/chips/entry-chip-behavior-predictive.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Text transforming into an input chip.)
文本转换为输入纸片

</figcaption></figure>

[en]: <> (Editable)
#### 可编辑

[en]: <> (An input chip’s text is editable until the user takes an action with the chip, such as sending an email. To edit an input chip’s text, tap the chip.)
在用户对纸片进行操作（例如发送电子邮件）之前，输入纸片的文本是可编辑的。点击纸片即可编辑输入纸片的文本。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-behavior-editable.mp4" src="{assets_path}/components/chips/entry-chip-behavior-editable.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Input chips become editable when tapped.)
点击纸片后，即可编辑输入纸片。

</figcaption></figure>

[en]: <> (Informational)
#### 可包含信息

[en]: <> (If text input is not recognized by the system, input chips can display an error state.)
如果系统无法识别输入文本，输入纸片可以显示出错误状态。

<figure>

![]({assets_path}/components/chips/entry-chip-behavior-error.png)

<figcaption>

[en]: <> (Input chips can represent an error state.)
输入纸片可以表示错误状态。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Multiple)
#### 可显示多个

[en]: <> (A single field can contain multiple entry chips.)
一个字段中可以包含多个输入纸片。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-behavior-multiple.mp4" src="{assets_path}/components/chips/entry-chip-behavior-multiple.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Multiple entry chips)
多个输入纸片

</figcaption></figure></div><div class="mdui-col">

[en]: <> (Movable)
#### 可移动

[en]: <> (Entry chips can be reordered or moved into other fields.)
输入纸片可以重新排序、或移动到其他字段中。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-behavior-draggable.mp4" src="{assets_path}/components/chips/entry-chip-behavior-draggable.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Movable entry chips)
可移动的输入纸片

</figcaption></figure></div></div>

[en]: <> (Expandable)
#### 可展开

[en]: <> (Input chips can expand to show more information or options.)
输入纸片可以展开，以显示更多信息或选项。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-behavior-expandable.mp4" src="{assets_path}/components/chips/entry-chip-behavior-expandable.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Expandable entry chips)
可展开的输入纸片

</figcaption></figure>

[en]: <> (Placement)
### 位置

[en]: <> (Input chips can be integrated with other components. They can appear:)
输入纸片可以与其他组件集成。它可以出现在：

[en]: <> (Inline with the text input cursor in a field)
[en]: <> (In a stacked list)
[en]: <> (In a horizontally scrollable list)
* 一个字段的文本输入框中
* 在堆叠列表中
* 在水平滚动列表中

<figure>

![]({assets_path}/components/chips/entry-chip-behavior-stackable.png)

<figcaption>

[en]: <> (Input chips can wrap to a new row if all of the chips need to be visible.)
如果需要所有的纸片都可见，则多个输入纸片之间可以进行换行。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/entry-chip-placement-scrolling.mp4" src="{assets_path}/components/chips/entry-chip-placement-scrolling.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Input chips that horizontally scroll.)
水平滚动的输入纸片。

</figcaption></figure>

[en]: <> (States)
### 状态

<figure>

![]({assets_path}/components/chips/input-chips-states.png)

</figure><figure>

![]({assets_path}/components/chips/outlined-input-chips-states.png)

<figcaption>

[en]: <> (Input chips states)
输入纸片的状态

</figcaption></figure>

[en]: <> (Choice chips)
<h2 id="choice-chips">选择纸片</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Choice chips allow selection of a single chip from a set of options.)
选择纸片可以从一组选项中选择单个纸片。

[en]: <> (Choice chips clearly delineate and display options in a compact area. They are a good alternative to toggle buttons, radio buttons, and single select menus.)
选择纸片可以在一个紧凑的区域内清晰的显示选项。它是切换按钮、单选按钮和单选菜单的很好的替代品。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-choice.png)

<figcaption>

[en]: <> (A set of choice chips)
一组选择纸片

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-choice-outlined.png)

<figcaption>

[en]: <> (A set of outlined choice chips)
一组描边型选择组件

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 行为

[en]: <> (Selecting a single choice chip automatically deselects all other chips in the set.)
选中一组纸片中的一个选择纸片后，会自动取消选中其他选择纸片。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/choice-chip-behavior-selecting.mp4" src="{assets_path}/components/chips/choice-chip-behavior-selecting.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Selecting a choice chip deselects the other chips)
选中一个选择纸片后，取消选中了其他纸片。

</figcaption></figure>

[en]: <> (Placement)
### 位置

[en]: <> (Choice chips appear as part of a series of other choice chips. They are typically displayed horizontally and sequentially.)
选择纸片出现在一系列选择纸片中。它们通常按顺序水平显示。

<figure>

![]({assets_path}/components/chips/composition-01.png)

<figcaption>

{do}

[en]: <> (Horizontal placement of choice chips)
水平排列的选择纸片

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-02.png)

<figcaption>

{do}

[en]: <> (Choice chips can scroll horizontally.)
选择纸片可以水平滚动。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-03.png)

<figcaption>

{caution}

[en]: <> (Choice chips can wrap to a new row. However, using two or more rows of choice chips can make each chip harder to scan.)
不同的选择纸片之间可以换行。但是，使用两行或更多行的选择纸片，会提高每个纸片的扫视难度。

</figcaption></figure></div></div><figure>

![]({assets_path}/components/chips/composition-04.png)

<figcaption>

{dont}

[en]: <> (Choice chips shouldn’t present only a single option.)
选择纸片不应该只提供一个选项。

</figcaption></figure>

[en]: <> (States)
### 状态

<figure>

![]({assets_path}/components/chips/choice-chips-states.png)

</figure><figure>

![]({assets_path}/components/chips/outlined-choice-chips-states.png)

<figcaption>

{do}

[en]: <> (Choice chips states)
选择纸片的状态

</figcaption></figure>

[en]: <> (Filter chips)
<h2 id="filter-chips">过滤纸片</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Filter chips use tags or descriptive words to filter content.)
过滤纸片使用标签或描述性词语来过滤内容。

[en]: <> (Filter chips clearly delineate and display options in a compact area. They are a good alternative to toggle buttons or checkboxes.)
过滤纸片可以在一个紧凑的区域内清晰地显示选项。它是切换按钮或复选框的很好的替代品。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-filter.png)

<figcaption>

[en]: <> (A filter chip)
一个过滤纸片

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-filter-outlined.png)

<figcaption>

[en]: <> (An outlined filter chip)
一个描边型过滤纸片

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 行为

[en]: <> (Tap a chip to select it. Multiple chips can be selected or unselected.)
点击纸片可以选中它。可以选中或取消选中多个纸片。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/filter-chip-behavior-selecting.mp4" src="{assets_path}/components/chips/filter-chip-behavior-selecting.mp4" type="video/mp4"></video><figcaption>

[en]: <> (An icon can be added to indicate when a filter chip is selected.)
可以在选中的纸片上添加一个图标，以区分选中状态的纸片。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/filter-chip-behavior-selecting-dynamic.mp4" src="{assets_path}/components/chips/filter-chip-behavior-selecting-dynamic.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Filter chip suggestions can dynamically change as users start to select filters.)
在用户修改过滤条件时，过滤纸片的建议内容可以动态改变。

</figcaption></figure>

[en]: <> (Placement)
### 位置

<figure>

![]({assets_path}/components/chips/composition-01.png)

<figcaption>

[en]: <> (Filter chips can be shown underneath a search field.)
过滤纸片可以显示在搜索字段下方。

</figcaption></figure><figure>

![]({assets_path}/components/chips/composition-02.png)

<figcaption>

[en]: <> (Display multiple sets of filters in a side sheet.)
在侧边栏中显示多组过滤纸片。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-05.png)

<figcaption>

[en]: <> (Filter chips can wrap to a new row. If there are more than two rows, consider using horizontal scrolling to access them all.)
过滤纸片之间可以换行。如果超过两行，请考虑使用水平滚动代替。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-04.png)

<figcaption>

[en]: <> (Filter chips can horizontally scroll to show unlimited options.)
过滤纸片可以水平滚动来显示更多选项。

</figcaption></figure></div></div><figure>

![]({assets_path}/components/chips/composition-03.png)

<figcaption>

{dont}

[en]: <> (Filter chips should not present only a single option.)
过滤纸片不应该只提供一个选项。

</figcaption></figure>

[en]: <> (States)
### 状态

<figure>

![]({assets_path}/components/chips/filter-chips-states.png)

</figure><figure>

![]({assets_path}/components/chips/outlined-filter-chips-states.png)

<figcaption>

[en]: <> (Filter chips states)
过滤纸片的状态

</figcaption></figure>

[en]: <> (Action chips)
<h2 id="action-chips">操作纸片</h2>

[en]: <> (Usage)
### 用法

[en]: <> (Action chips offer actions related to primary content. They should appear dynamically and contextually in a UI.)
操作纸片提供和主内容相关的操作。它们应该根据上下文需要动态出现。

[en]: <> (An alternative to action chips are buttons, which should appear persistently and consistently.)
按钮是操作纸片的替代品，和操作纸片不同的是，按钮应该始终统一地显示。

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-action.png)

<figcaption>

[en]: <> (An action chip)
一个操作纸片

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/chips-types-action-outlined.png)

<figcaption>

[en]: <> (An outlined action chip)
一个描边型操作纸片

</figcaption></figure></div></div>

[en]: <> (Behavior)
### 行为

[en]: <> (Action chips can trigger an action or show progress and confirmation.)
操作纸片可以触发操作、或显示进度和确认反馈。

<figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/action-chip-behavior-tapping.mp4" src="{assets_path}/components/chips/action-chip-behavior-tapping.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Tapping an action chip triggers a contextual action.)
点击操作纸片后，触发了上下文操作菜单。

</figcaption></figure><figure><video controls loop muted preload="metadata" class="mdui-video-fluid"><source data-src="{assets_path}/components/chips/action-chip-behavior-confirmation.mp4" src="{assets_path}/components/chips/action-chip-behavior-confirmation.mp4" type="video/mp4"></video><figcaption>

[en]: <> (Action chips can show progress and confirmation feedback.)
操作纸片可以显示进度和确认反馈。

</figcaption></figure>

[en]: <> (Placement)
### 位置

[en]: <> (Action chips are displayed after primary content, such as below a card or persistently at the bottom of a screen.)
操作纸片显示在主内容之后，例如在卡片下方、或固定在屏幕底部。

<figure>

![]({assets_path}/components/chips/composition-action-chips.png)

<figcaption>

[en]: <> (Action chips should be shown underneath primary content.)
操作纸片应该显示在主内容下方。

</figcaption></figure><div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-02.png)

<figcaption>

{caution}

[en]: <> (Action chips should appear in a set.)
操作纸片应该显示在一个集合里。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/chips/composition-03.png)

<figcaption>

{do}

[en]: <> (Action chips can be horizontally scrollable.)
操作纸片可以水平滚动。

</figcaption></figure></div></div>

[en]: <> (States)
### 状态

<figure>

![]({assets_path}/components/chips/action-chips-states.png)

</figure><figure>

![]({assets_path}/components/chips/outlined-action-chips-states.png)

<figcaption>

[en]: <> (Action chips states)
操作纸片的状态

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

<div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Action chip)
操作纸片

<figure>

![]({assets_path}/components/chips/specs-chips-action.png)

</figure></div><div class="mdui-col">

[en]: <> (Outlined action chip)
描边型操作纸片

<figure>

![]({assets_path}/components/chips/specs-outlined-chips-action.png)

</figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Choice chip)
选择纸片

<figure>

![]({assets_path}/components/chips/specs-chips-choice.png)

</figure></div><div class="mdui-col">

[en]: <> (Filter chip)
过滤纸片

<figure>

![]({assets_path}/components/chips/specs-chips-filter.png)

</figure></div></div><div class="mdui-row-sm-2"><div class="mdui-col">

[en]: <> (Input chip)
输入纸片

<figure>

![]({assets_path}/components/chips/specs-chips-input.png)

</figure></div><div class="mdui-col">

[en]: <> (Chips in groups)
在纸片组中的纸片

<figure>

![]({assets_path}/components/chips/specs-chipsingrous.png)

</figure></div></div></div>
