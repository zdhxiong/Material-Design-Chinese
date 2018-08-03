<div class="article__intro">

[en]: <> (Data tables)
# 数据表格

[en]: <> (Data tables display sets of data.)
数据表格用于显示数据集。

<figure>

![]({assets_path}/components/data-tables/components-datatables-structure.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Tables within cards)
[en]: <> (Specs)
* [用法](#usage)
* [剖析](#anatomy)
* [行为](#behavior)
* [卡片中的表格](#tables-within-cards)
* [规范](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">用法</h2>

[en]: <> (Data tables display information in a way that’s easy to scan, so that users can look for patterns and insights. They can be embedded in primary content, such as cards.)
数据表格以一种更易快速扫视的方式来显示信息。数据表格可以嵌入到主内容中，例如卡片。

[en]: <> (Data tables can include:)
数据表格可以包含：

[en]: <> (A corresponding visualization)
[en]: <> (Navigation)
[en]: <> (Tools to query and manipulate data)
* 相应的可视化
* 导航
* 用于查询和操作数据的工具

[en]: <> (When including tools, they should be placed directly above or below the table.)
包含工具时，工具应该直接放在表格的上方或下方。

[en]: <> (Principles)
### 原则

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/data-tables/data-tables-illos-02.png)

<figcaption>

[en]: <> (Hierarchical)
#### 有组织的

[en]: <> (Data table content should be hierarchical, alphabetical, or similarly organized.)
数据表格中的内容应该是有组织的，按字母顺序排列或者类似的方式进行组织。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/data-tables/data-tables-illos-01.png)

<figcaption>

[en]: <> (Interactive)
#### 可交互的

[en]: <> (Data tables should allow user interaction, so that users can sort information in custom ways.)
数据表格允许用户进行交互，以便用户以自定义的方式对数据进行排序。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/data-tables/data-tables-illos-03.png)

<figcaption>

[en]: <> (Intuitive)
#### 直观的

[en]: <> (Data tables should work intuitively, allowing users to focus on content, not structure.)
数据表格应该直观的展现，使用户能专注于内容，而不是界面结构。

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">剖析</h2>

[en]: <> (Data tables can include three or more columns. A header row at the top lists column names, and all subsequent rows contain data. Data tables can include a corresponding visualization, such as a graph.)
数据表格可以包含 3 列或更多列。最上面的一行显示列的名称，其他的行显示数据。数据表格可以包含相应的可视化，例如图表。

[en]: <> (If users need to interact with row data, checkboxes should accompany each row.)
如果用户需要与数据进行交互，则每一行都应该包含复选框。

<figure>

![]({assets_path}/components/data-tables/components-datatables-datatable-anatomy.png)

<figcaption>

[en]: <> (*Container*<br>The container holds all data table content.)
[en]: <> (*Column header*<br>Column headers are titles for column content.)
[en]: <> (*Sorting tool*<br>Sorting tools allow users to reorder table content, appearing only on hover.)
[en]: <> (*Row checkbox*<br>Checkboxes allow users to select a row.)
[en]: <> (*Table content*<br>Tables contain raw data.)
1. *容器*<br>容器包含了数据表格中所有的内容。
2. *列头部*<br>列头部显示列的标题。
3. *排序工具*<br>排序工具使用户能对表格内容进行排序，仅在鼠标悬浮时显示。
4. *行复选框*<br>复选框可以使用户选择一行数据。
5. *表格内容*<br>表格包含的数据。

</figcaption></figure>

[en]: <> (Column header)
### 列头部

[en]: <> (By default, there is 56dp of padding between columns. Column headers that extend into this padding can either:)
默认情况下，列之间有 56dp 的间距。超出到这个间距里的列标题可以：

[en]: <> (Enable horizontal scrolling, so users can scroll to see the full column name)
[en]: <> (Shorten the column name, while displaying it in full in a tooltip \(on hover\))
1. 启用水平滚动，以便用户可以滚动查看完整列名称
2. 缩短列名，同时在工具提示中显示完整列名（鼠标悬浮时）

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/data-tables/components-datatables-anatomy-interaction5.png)

<figcaption>

[en]: <> (Long column headers are truncated with an ellipse.)
过长的列标题可以截断，并以省略号显示。

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/data-tables/components-datatables-anatomy-interaction6.png)

<figcaption>

[en]: <> (Hovering over a truncated column header reveals the full text, using a tooltip.)
鼠标悬浮到截断的列标题上时，可以在工具提示中显示完整列标题。

</figcaption></figure></div></div>

[en]: <> (Sorting tool)
### 排序工具

[en]: <> (If sorting is enabled, the left-most column is sorted by default, with an indicator displayed in the column header. Tapping the header of the sorting column reverses the sort order, also rotating the sort icon 180 degrees.)
如果启用了排序，默认情况下会对最左侧的列进行排序，并在列标题中显示指示符。点击排序列的标题会反转排序顺序，同时将排序图标旋转 180 度。

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction3.png)

<figcaption>

[en]: <> (Table with a sorting tool)
含排序工具的数据表格

</figcaption></figure>

[en]: <> (Row Checkbox)
### 行复选框

[en]: <> (When a checkbox for a row is selected, the row should display a background color.)
选中某一行的复选框后，该行应添加背景色。

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction2.png)

<figcaption>

[en]: <> (A selected row checkbox)
选中的行复选框

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">行为</h2>

[en]: <> (Row hover \(Desktop\))
### 鼠标悬浮在某一行（桌面端）

[en]: <> (If a user hovers over a row, display a background color in that row. If individual table cells have specific hover states, display both that cell’s hover state as well as the row hover state.)
如果用户鼠标悬浮在某一行上，则在该行中显示背景色。如果某个单元格具有特定的悬浮状态，则同时显示该单元格的悬浮状态和行悬浮状态。

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction1.png)

<figcaption>

[en]: <> (Hovering over a row)
鼠标悬浮在某一行

</figcaption></figure>

[en]: <> (Column hover \(Desktop\))
### 鼠标悬浮在某一列（桌面端）

[en]: <> (On hover, two things can be displayed:)
鼠标悬浮在某一列上时，可以显示两件事：

[en]: <> (A tooltip displaying more information about each column header)
[en]: <> (A sort icon in the column header, if sorting is enabled)
* 显示一个关于列标题的完整信息的工具提示
* 如果启用了排序功能，则在列标题中显示排序图标

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction4.png)

<figcaption>

[en]: <> (A tooltip and sort icon can be displayed when hovering over a column name.)
鼠标悬浮在列标题上时，可以显示一个工具提示和排序图标。

</figcaption></figure>

[en]: <> (Inline text editing)
### 行内文本编辑

[en]: <> (Tables can include editable fields for text editing or adding comments. They are indicated by placeholder text in the field. On tap, an edit dialog with a text field or a full dialog is displayed.)
表格可以包含一个可编辑字段，用于编辑文本或添加注释。可编辑字段可以用占位符文本来表示。点击后，将显示一个带有文本框的对话框、或者全屏对话框。

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction7.png)

<figcaption>

[en]: <> (An editable table cell with placeholder text)
带有占位符文本的可编辑单元格

</figcaption></figure>

[en]: <> (Small edit dialog)
#### 小型编辑框

[en]: <> (Text can be edited using a small edit dialog, allowing users to confirm text by pressing Enter. Dialog edges should align with nearest divider line or table edge.)
可以使用小型编辑框来编辑文本，通过按回车键确认输入内容。对话框边缘应与最近的分隔线或表格边缘对齐。

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction8.png)

</figure>

[en]: <> (Large edit dialog)
#### 大型编辑框

[en]: <> (A large edit dialog is a complex, flexible dialog box. Users confirm text by tapping the Save button. Dialog edges should align with the nearest divider line or table edge.)
大型编辑框是一个复杂、灵活的对话框。通过点击“保存”按钮确认输入内容。对话框边缘应与最近的分隔线或表格边缘对齐。

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction9.png)

</figure>

[en]: <> (Inline edit icon \(Optional\))
#### 内联编辑图标（可选）

[en]: <> (An inline edit icon allows field editing, with an icon at the opposite end of the cell from content.)
点击内联编辑图标后，可以编辑字段，图标应位于文本的另一端，与单元格边缘对齐。

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction10.png)

</figure>

[en]: <> (Inline menus)
### 内联菜单

[en]: <> (Inline menus allow users to select from a predefined list of options. These menus can be directly embedded in a table.)
内联菜单使用户可以从预定义的选项列表中进行选择。这些菜单可以直接嵌入到表格中。

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction11.png)

<figcaption>

[en]: <> (A table with inline menus)
含内联菜单的表格

</figcaption></figure><figure>

![]({assets_path}/components/data-tables/components-datatables-interaction12.png)

<figcaption>

[en]: <> (An expanded inline menu)
展开后的内联菜单

</figcaption></figure>

[en]: <> (Tables within cards)
<h2 id="tables-within-cards">卡片内的表格</h2>

[en]: <> (Tables can be embedded within a card. At the bottom of each card, tools can be displayed for table navigation and data manipulation.)
表格可以嵌入到卡片中。在每张卡片的底部，可以显示一些工具，以进行分页和数据操作。

<figure>

![]({assets_path}/components/data-tables/components-datatables-card1.png)

<figcaption>

[en]: <> (Table card with header and footer)
卡片中的表格，包含头部和底部。

</figcaption></figure>

[en]: <> (Data table card headers)
### 卡片中的数据表格的头部

[en]: <> (When tables in cards require actionable headers instead of titles, you can either:)
当卡片中的表格需要可操作的头部，而不是标题文本时，你可以：

[en]: <> (Display persistent actions)
[en]: <> (Display a contextual header that indicates when items are selected)
* 显示固定的操作按钮
* 可以显示根据选中的表格行而变化的头部

<figure>

![]({assets_path}/components/data-tables/components-datatables-card2.png)

<figcaption>

[en]: <> (Action buttons)
[en]: <> (Colored header)
1. 操作按钮
2. 带背景色的头部

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">规范</h2>

[en]: <> (Data tables with a header)
#### 带头部的数据表格

<figure>

![]({assets_path}/components/data-tables/specs-datatable-with-header.png)

</figure>

[en]: <> (Data tables without a header)
#### 不带头部的数据表格

<figure>

![]({assets_path}/components/data-tables/specs-datatable-no-header.png)

</figure></div>
