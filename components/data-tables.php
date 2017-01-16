<?php
$vars = array(
  'title' => '数据表格',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '纸片',
  'prev_path' => 'components/chips',
  'next_title' => '提示框',
  'next_path' => 'components/dialogs'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Data tables</h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Data tables display sets of raw data. They usually appear in desktop enterprise products.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Data tables may be embedded on a surface, such as a card. They can include:</p>
                <ul class="lst-kix_apo1zqlnbkhv-0 start">
                  <li>A corresponding visualization</li>
                  <li>The ability to query and manipulate data</li>
                </ul>
                <p>Data tables on cards may display navigation and data manipulation tools at the top and bottom.</p>
              </div>
              <div class="module">
                <h3><strong>Supported interactions </strong></h3>
                <p>Row hover (desktop)<br>
                  Row selection<br>
                  Column sorting<br>
                  Column hover (desktop)<br>
                  Long header titles<br>
                  Text editing<br>
                  Menus</p>
                <h3><strong>Related components </strong></h3>
                <p><a href="cards.html">Cards</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/data-tables/components_data_tables.png"/>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>


      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-tables.html#data-tables-structure" data-qp-ui-data-id="qp:1">Structure</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-tables.html#data-tables-interaction" data-qp-ui-data-id="qp:2">Interaction</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-tables.html#data-tables-tables-within-cards" data-qp-ui-data-id="qp:3">Tables within cards</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-tables.html#data-tables-specs" data-qp-ui-data-id="qp:4">Specs</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="data-tables-structure" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Structure
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>A data table contains a <strong>header row</strong> at the top that lists column names, followed by rows for data. </p>
                    <p>Checkboxes should accompany each row if the user needs to select or manipulate data.</p>
                    <p>Data tables may include:</p>
                    <ul class="lst-kix_po9e8adcisuq-0 start">
                      <li>Three or more columns of data</li>
                      <li>A corresponding visualization</li>
                      <li>The ability for users to query and manipulate data</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_structure_basictable.png"/>
                      </div>
                      <figcaption>
                        <p>Basic data table</p>
                        <p><strong>Table content</strong></p>
                        <p>13sp Roboto Regular<br>
                          87% black </p>
                        <p><strong>Column headers</strong></p>
                        <p>12sp Roboto Medium<br>
                          54% black</p>
                        <p><strong>Text alignment</strong></p>
                        <p>Right-aligned numeric columns<br>
                          Left-aligned text columns</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="data-tables-interaction" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Interaction
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Row hover (Desktop)</h1>
                    <p>Display a background in a table row if a user hovers over any part of that row. If there are separate hover states on individual table cells, display both the hover state of the cell and row at the same time.</p>
                    <p><strong>Hover background</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0 start">
                      <li>Grey 200 (#EEEEEE)</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_rowhover.png"/>
                      </div>
                      <figcaption>
                        <p>Hovering over a row</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Row selection</h1>
                    <p>When a row is selected, display a background color on the row. </p>
                    <p><strong>Selected row background</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>Grey 100 (#F5F5F5)</li>
                    </ul>
                    <p><strong>Checkbox</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>Use secondary app color</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_selectedrow.png"/>
                      </div>
                      <figcaption>
                        <p>A selected table row</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Sorted column</h1>
                    <p>If column sorting is enabled, sort the most important data by default and display a sorted state
                      in the column header. If the user clicks on a column that is already sorted, reverse the sort
                      order and rotate the sort icon.</p>
                    <p><strong>Sorted column name</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>12sp Roboto Medium</li>
                      <li>87% black</li>
                    </ul>
                    <p><strong>Sort icon</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>16dp container</li>
                      <li>87% black</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_sortedcolumn.png"/>
                      </div>
                      <figcaption>
                        <p>Table with an ascending sorted column</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Column name hover (Desktop)</h1>
                    <p>If there is a need to provide definitions to column headers, display a tooltip on hover. If sorting is enabled, display a light sort icon upon hover, which indicates that the column is sortable. </p>
                    <p><strong>Tooltip</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>Follow the guidelines for <a href="tooltips.html">Tooltips</a></li>
                    </ul>
                    <p><strong>Sort icon</strong></p>
                    <ul class="lst-kix_qljkdfodks0k-0">
                      <li>16dp container</li>
                      <li>38% black</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_tooltip.png"/>
                      </div>
                      <figcaption>
                        <p>Hovering over a column name</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Long header titles</h1>
                    <p>Sometimes, column names don’t fit in a container with the recommended 56dp of padding in between columns. There are two options to handle this:</p>
                    <ol class="lst-kix_hcn9jmdi07bx-0 start" start="1">
                      <li>Display the full column name and enable horizontal scrolling in the table container.</li>
                      <li>Shorten the column name and display it in full on hover.</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_longtitle1.png"/>
                      </div>
                      <figcaption>
                        <p>Long column names truncated with an ellipse</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_longtitle2.png"/>
                      </div>
                      <figcaption>
                        <p>Hovering over a truncated column name</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Inline text editing</h1>
                    <p>Tables may require basic text editing (e.g. for editing existing text content, or adding comments). Include editable fields within a table and denote them using placeholder text. You can use a simple edit dialog with just a text field, or display a full dialog component on click. </p>
                    <p><strong>Placeholder text</strong></p>
                    <ul class="lst-kix_wgz9oez9qym-0 start">
                      <li>13sp Roboto Regular</li>
                      <li>38% black</li>
                      <li>No divider line on text field</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_editing1.png"/>
                      </div>
                      <figcaption><br>
                      </figcaption>
                    </figure>
                    An editable table cell with placeholder text
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Small edit dialog</strong></p>
                    <ul class="lst-kix_2z5lb8m0t9mx-0 start">
                      <li>Align edges of dialog with nearest divider lines, or table edges</li>
                      <li>24dp of left and right padding</li>
                      <li>Include a single <a href="text-fields.html">text field</a>, applying the app theme where applicable</li>
                      <li>User confirms text by pressing Enter</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_editing2.png"/>
                      </div>
                      <figcaption>
                        <p>A simple, one-field edit dialog</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Large edit dialog</strong></p>
                    <ul class="lst-kix_2z5lb8m0t9mx-0">
                      <li>Align edges of dialog with nearest divider lines, or table edges</li>
                      <li>Follow the <a href="dialogs.html">dialog</a> guidelines, applying the app theme where applicable</li>
                      <li>User confirms text by clicking the Save button</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_editing3.png"/>
                      </div>
                      <figcaption>
                        <p>A complex, flexible edit dialog</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Inline edit icon</strong></p>
                    <ul class="lst-kix_2z5lb8m0t9mx-0">
                      <li>18dp container</li>
                      <li>54% black</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_editing4.png"/>
                      </div>
                      <figcaption>
                        <p>(Optional) Icon-based edit affordance. Include icons at the edge of the cell on the opposite side of the content. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Inline menus</h1>
                    <p>Instead of editing text, users may need to select from a predefined list of options. In this scenario, embed a menu component directly in the table.</p>
                    <p><strong>Inline menu</strong></p>
                    <ul class="lst-kix_wgz9oez9qym-0">
                      <li>13sp Roboto Regular</li>
                      <li>87% black</li>
                      <li>Follow spacing and sizing guidelines for <a href="menus.html">menus</a></li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_inlinemenus1.png"/>
                      </div>
                      <figcaption>
                        <p>A table with inline menus</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_interaction_inlinemenus2.png"/>
                      </div>
                      <figcaption>
                        <p>An expanded inline menu</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="data-tables-tables-within-cards" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Tables within cards
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module col-1">
                  <div class="module">
                    <p>Tables may be embedded within a card, with table navigation and data manipulation tools displayed at the top and bottom.</p>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_cards_tablecard.png"/>
                      </div>
                      <figcaption>
                        <p>Table card with header and footer</p>
                        <p><strong>Card title</strong></p>
                        <p>20sp Roboto Regular<br>
                          87% black</p>
                        <p><strong>Card action icons (header and footer)</strong></p>
                        <p>24dp container<br>
                          54% black</p>
                        <p><strong>Footer pagination labels </strong></p>
                        <p>12sp Roboto Regular<br>
                          54% black</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <h1>Alternative headers</h1>
                    <p>Some table cards may require headers with actions instead of titles. In this case you may either:</p>
                    <ul class="lst-kix_ry5leblxtfua-0 start">
                      <li>Display persistent actions</li>
                      <li>Display a contextual header that activates when items are selected</li>
                    </ul>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_cards_altheaders.png"/>
                      </div>
                      <figcaption>
                        <p>Alternate headers for a table card</p>
                        <p><strong>Action buttons</strong></p>
                        <p>Use borderless buttons<br>
                          Enable upon item selection</p>
                        <p><strong>Colored header</strong></p>
                        <p>Use 50-value of secondary app color for background fill<br>
                          Display the number of items selected<br>
                          Display available contextual icons upon item selection</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="data-tables-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Specs
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <h1>Vertical spacing</h1>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_specs_verticalspacing.png"/>
                      </div>
                      <figcaption>
                        <p>Vertical spacing of a data table card and its last row</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <ol class="lst-kix_h0iwu6gtyrxk-0 start" start="1">
                      <li>64dp card header height</li>
                      <li>56dp height for last row</li>
                      <li>48dp data row height</li>
                    </ol>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <h1>Header &amp; footer padding</h1>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_specs_01_horizontalspacing.png"/>
                      </div>
                      <figcaption>
                        <p>Horizontal padding between elements in a table card</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <ol class="lst-kix_lexjqvir3ko0-0 start" start="1">
                      <li>24dp of padding around the perimeter of table cards</li>
                      <li>32dp in between footer control sets</li>
                      <li>40dp in between the footer row count and its label</li>
                    </ol>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <h1>Column padding</h1>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/data-tables/components_datatables_specs_02_horizontalspacing.png"/>
                      </div>
                      <figcaption>
                        <p>Padding in between columns </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <ol class="lst-kix_tgpxcjd2l7jl-0 start" start="1">
                      <li>Use a minimum of 56dp of padding in between columns. The widest item in the column (including data and column name) should delineate the column border.</li>
                      <li>Checkbox icons have a width and height of 18dp within a 24dp icon container.</li>
                    </ol>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
        <div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php
include $public_files['footer'];
?>