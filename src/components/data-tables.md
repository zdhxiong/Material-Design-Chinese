<div class="article__intro">

[en]: <> (Data tables)
# 数据表格

[en]: <> (Data tables display sets of data.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-structure.png)

</figure><nav>

[en]: <> (Usage)
[en]: <> (Anatomy)
[en]: <> (Behavior)
[en]: <> (Tables within cards)
[en]: <> (Specs)
* [译文](#usage)
* [译文](#anatomy)
* [译文](#behavior)
* [译文](#tables-within-cards)
* [译文](#specs)

</nav></div><div class="article__body">

[en]: <> (Usage)
<h2 id="usage">译文</h2>

[en]: <> (Data tables display information in a way that’s easy to scan, so that users can look for patterns and insights. They can be embedded in primary content, such as cards.)
译文

[en]: <> (Data tables can include:)
译文

[en]: <> (A corresponding visualization)
[en]: <> (Navigation)
[en]: <> (Tools to query and manipulate data)
* 译文
* 译文
* 译文

[en]: <> (When including tools, they should be placed directly above or below the table.)
译文

[en]: <> (Principles)
### 译文

<div class="mdui-row-sm-3"><div class="mdui-col"><figure>

![]({assets_path}/components/data-tables/data-tables-illos-02.png)

<figcaption>

[en]: <> (Hierarchical)
#### 译文

[en]: <> (Data table content should be hierarchical, alphabetical, or similarly organized.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/data-tables/data-tables-illos-01.png)

<figcaption>

[en]: <> (Interactive)
#### 译文

[en]: <> (Data tables should allow user interaction, so that users can sort information in custom ways.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/data-tables/data-tables-illos-03.png)

<figcaption>

[en]: <> (Intuitive)
#### 译文

[en]: <> (Data tables should work intuitively, allowing users to focus on content, not structure.)
译文

</figcaption></figure></div></div>

[en]: <> (Anatomy)
<h2 id="anatomy">译文</h2>

[en]: <> (Data tables can include three or more columns. A header row at the top lists column names, and all subsequent rows contain data. Data tables can include a corresponding visualization, such as a graph.)
译文

[en]: <> (If users need to interact with row data, checkboxes should accompany each row.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-datatable-anatomy.png)

<figcaption>

[en]: <> (*Container*<br>The container holds all data table content.)
[en]: <> (*Column header*<br>Column headers are titles for column content.)
[en]: <> (*Sorting tool*<br>Sorting tools allow users to reorder table content, appearing only on hover.)
[en]: <> (*Row checkbox*<br>Checkboxes allow users to select a row.)
[en]: <> (*Table content*<br>Tables contain raw data.)
1. *译文*<br>译文
2. *译文*<br>译文
3. *译文*<br>译文
4. *译文*<br>译文
5. *译文*<br>译文

</figcaption></figure>

[en]: <> (Column header)
### 译文

[en]: <> (By default, there is 56dp of padding between columns. Column headers that extend into this padding can either:)
译文

[en]: <> (Enable horizontal scrolling, so users can scroll to see the full column name)
[en]: <> (Shorten the column name, while displaying it in full in a tooltip \(on hover\))
1. 译文
2. 译文

<div class="mdui-row-sm-2"><div class="mdui-col"><figure>

![]({assets_path}/components/data-tables/components-datatables-anatomy-interaction5.png)

<figcaption>

[en]: <> (Long column headers are truncated with an ellipse.)
译文

</figcaption></figure></div><div class="mdui-col"><figure>

![]({assets_path}/components/data-tables/components-datatables-anatomy-interaction6.png)

<figcaption>

[en]: <> (Hovering over a truncated column header reveals the full text, using a tooltip.)
译文

</figcaption></figure></div></div>

[en]: <> (Sorting tool)
### 译文

[en]: <> (If sorting is enabled, the left-most column is sorted by default, with an indicator displayed in the column header. Tapping the header of the sorting column reverses the sort order, also rotating the sort icon 180 degrees.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction3.png)

<figcaption>

[en]: <> (Table with a sorting tool)
译文

</figcaption></figure>

[en]: <> (Row Checkbox)
### 译文

[en]: <> (When a checkbox for a row is selected, the row should display a background color.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction2.png)

<figcaption>

[en]: <> (A selected row checkbox)
译文

</figcaption></figure>

[en]: <> (Behavior)
<h2 id="behavior">译文</h2>

[en]: <> (Row hover \(Desktop\))
### 译文

[en]: <> (If a user hovers over a row, display a background color in that row. If individual table cells have specific hover states, display both that cell’s hover state as well as the row hover state.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction1.png)

<figcaption>

[en]: <> (Hovering over a row)
译文

</figcaption></figure>

[en]: <> (Column hover \(Desktop\))
### 译文

[en]: <> (On hover, two things can be displayed:)
译文

[en]: <> (A tooltip displaying more information about each column header)
[en]: <> (A sort icon in the column header, if sorting is enabled)
* 译文
* 译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction4.png)

<figcaption>

[en]: <> (A tooltip and sort icon can be displayed when hovering over a column name.)
译文

</figcaption></figure>

[en]: <> (Inline text editing)
### 译文

[en]: <> (Tables can include editable fields for text editing or adding comments. They are indicated by placeholder text in the field. On tap, an edit dialog with a text field or a full dialog is displayed.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction7.png)

<figcaption>

[en]: <> (An editable table cell with placeholder text)
译文

</figcaption></figure>

[en]: <> (Small edit dialog)
#### 译文

[en]: <> (Text can be edited using a small edit dialog, allowing users to confirm text by pressing Enter. Dialog edges should align with nearest divider line or table edge.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction8.png)

</figure>

[en]: <> (Large edit dialog)
#### 译文

[en]: <> (A large edit dialog is a complex, flexible dialog box. Users confirm text by tapping the Save button. Dialog edges should align with the nearest divider line or table edge.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction9.png)

</figure>

[en]: <> (Inline edit icon \(Optional\))
#### 译文

[en]: <> (An inline edit icon allows field editing, with an icon at the opposite end of the cell from content.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction10.png)

</figure>

[en]: <> (Inline menus)
### 译文

[en]: <> (Inline menus allow users to select from a predefined list of options. These menus can be directly embedded in a table.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-interaction11.png)

<figcaption>

[en]: <> (A table with inline menus)
译文

</figcaption></figure><figure>

![]({assets_path}/components/data-tables/components-datatables-interaction12.png)

<figcaption>

[en]: <> (An expanded inline menu)
译文

</figcaption></figure>

[en]: <> (Tables within cards)
<h2 id="tables-within-cards">译文</h2>

[en]: <> (Tables can be embedded within a card. At the bottom of each card, tools can be displayed for table navigation and data manipulation.)
译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-card1.png)

<figcaption>

[en]: <> (Table card with header and footer)
译文

</figcaption></figure>

[en]: <> (Data table card headers)
### 译文

[en]: <> (When tables in cards require actionable headers instead of titles, you can either:)
译文

[en]: <> (Display persistent actions)
[en]: <> (Display a contextual header that indicates when items are selected)
* 译文
* 译文

<figure>

![]({assets_path}/components/data-tables/components-datatables-card2.png)

<figcaption>

[en]: <> (Action buttons)
[en]: <> (Colored header)
1. 译文
2. 译文

</figcaption></figure>

[en]: <> (Specs)
<h2 id="specs">译文</h2>

[en]: <> (Data tables with a header)
#### 译文

<figure>

![]({assets_path}/components/data-tables/specs-datatable-with-header.png)

</figure>

[en]: <> (Data tables without a header)
#### 译文

<figure>

![]({assets_path}/components/data-tables/specs-datatable-no-header.png)

</figure></div>
