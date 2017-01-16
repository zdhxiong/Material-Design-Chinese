<?php
$vars = array(
  'title' => '列表',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '网格列表',
  'prev_path' => 'components/grid-lists',
  'next_title' => '列表控制器',
  'next_path' => 'components/lists-controls'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Lists</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Lists present multiple line items vertically as a single continuous element.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Lists are made up of a continuous column of rows. Each row contains a tile. Primary actions fill the tile, and supplemental actions are represented by icons and text.<br></p>
                <p>Lists are best suited for similar data types.</p>
              </div>
              <div class="module">
                <h3>Actions</h3>
                <p>Vertical scrolling<br>
                  Filtering and sorting</p>

                <h3>Gestures</h3>
                <p>Swipe<br>
                  Drag and drop </p>

                <h3>Alternatives</h3>
                <p><a href="cards.html">Cards</a> <br>
                  <a href="grid-lists.html">Grid lists</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/lists/components_lists.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists.html#lists-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists.html#lists-behavior" data-qp-ui-data-id="qp:2">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists.html#lists-content" data-qp-ui-data-id="qp:3">Content</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists.html#lists-actions" data-qp-ui-data-id="qp:4">Actions</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="lists.html#lists-specs" data-qp-ui-data-id="qp:5">Specs</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="lists-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Usage
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>A <strong>list</strong> consists of a single continuous column of tessellated sub-divisions of equal width called <strong>rows </strong>that function as containers for <strong>tiles</strong>.</p>
                    <p><strong>Tiles</strong> hold content, and can vary in height within a list.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_usage1.png"/>
                      </div>
                      <figcaption>
                        <p>List</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_usage2.png"/>
                      </div>
                      <figcaption>
                        <p>Row and tile</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Lists are best suited to presenting a homogeneous data type or sets of data types, such as images and text. They are optimized for reading comprehension while differentiating either between similar data types, or qualities within a single data type.</p>
                    <h2><strong><strong>List alternatives:</strong></strong></h2>
                    <ul class="lst-kix_qyzctdh51pys-0 start">
                      <li>If more than three lines of text need to be shown in list tiles, use <strong>cards </strong>instead.</li>
                      <li>If the primary distinguishing content consists of images, use a <strong>grid list</strong>.</li>
                    </ul>
                    <h2><strong><strong>Density</strong></strong></h2>
                    <p>When the mouse and keyboard are the primary input methods, measurements may be condensed to accommodate denser layouts.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_usage3.png"/>
                      </div>
                      <figcaption>
                        <p>Typical list scanning pattern</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="lists-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Behavior
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>Scrolling</h1>
              <p>Lists scroll only vertically.</p>
              <h1>Gestures</h1>
              <p>The swipe action of each tile should be consistent within lists.</p>
              <p>Tiles may be moved between a list and drop target (similar to moving a file into a folder) and picked up and manually reordered within a list.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h1>Filtering and sorting</h1>
                    <p>List tiles can be sorted or filtered by date, file size, alphabetical order, or other parameters.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_behavior1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Alphabetical sorting makes information easier to find.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_behavior2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t display information in random order; if the UI doesn’t allow the user to sort a list, your app should use a logical sort order.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="lists-content" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Content
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Collections of list tiles present related content in a consistent format. Lists use hierarchy to prioritize a type or set of content, which helps users find the most important information. For example, in an email inbox app, an avatar and text snippet are emphasized over a time stamp. </p>
                    <p>List tiles may contain up to three lines of text, and text length may vary between tiles in the same list. To display more than three lines of text, use a card.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_content1.png"/>
                      </div>
                      <figcaption>
                        <p>Place the most distinguishing content on the left of the tile and the least distinguishing content on the right. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module">
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Specifications:</p>
                    <ul class="lst-kix_8uufrxu5qfsh-0 start">
                      <li>The majority of space on a list tile should be dedicated to the primary action.</li>
                      <li>Place the most distinguishing content towards the left of the tile.</li>
                      <li>In tiles with <strong>multi-line content</strong>, place the most distinguishing content in the first line.</li>
                      <li>Place <strong>supplemental actions</strong> on the right side.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_content2.png"/>
                      </div>
                      <figcaption>
                        <p>The primary action takes up the majority of the space on the tile. The supplemental action goes on the right side of the tile.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="lists-actions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Actions
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Primary and supplemental actions (such as play, zoom in, delete, and select) may open a subsequent view, such as a card. They do not have a submenu or an action overflow menu.</p>
              <p><strong>Primary actions</strong></p>
              <ul class="lst-kix_bt62f15dsukc-0 start">
                <li>Fill the entire tile and are not represented solely by an individual icon or text button</li>
                <li>Are consistent for all tiles in a specific list, such as the primary action in a list of music to play songs</li>
              </ul>
              <p><strong>Supplemental actions</strong></p>
              <ul class="lst-kix_ue9aszt4rxdb-0 start">
                <li>Are represented by icons, secondary text, etc</li>
                <li>Have consistent functionality throughout a list, such as an icon that indicates if someone is online</li>
                <li>Have a consistent location in a list’s tiles</li>
              </ul>
              <p><strong>Repeating actions</strong></p>
              <p>Avoid displaying a repeated supplemental action in tiles, such as a share action in every tile. </p>
              <p>Toggles, such as stars or pins, are exceptions because they provide unique information about each individual tile.</p>
            </div>
          </div>
        </div>

        <div id="lists-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>In a <strong>single-line list</strong>, each tile contains a single line of text. The amount of text can vary between tiles within the same list.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines1.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line list specs</p>
                        <p>Icon left padding: 16dp<br>
                          List item left padding: 72dp<br>
                          List right padding: 16dp<br>
                          List right margin: 56dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single6.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a single-line list</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>In a <strong>two-line list</strong>, each tile contains a maximum of two lines of text. The amount of text can vary between tiles within the same list.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines3.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line list specs</p>
                        <p>Icon left padding: 16dp<br>
                          List item left padding: 72dp<br>
                          List right padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines4.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a two-line list</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>In a <strong>three-line list</strong>, each tile contains a maximum of three lines of text.</p>
                    <p>The amount of text can vary between tiles within the same list.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines5.png"/>
                      </div>
                      <figcaption>
                        <p>Three-line list specs</p>
                        <p>Icon left padding: 16dp<br>
                          List item left padding: 72dp<br>
                          List right padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines6.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a three-line list</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Single-line list</h1>
                    <h2><strong>Text only</strong></h2>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                    <p>Bottom padding is measured from the baseline.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single1.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line list</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single3.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a single-line list</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single2.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Single-line list specs</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Height: 48dp<br>
                          Left and right padding from screen edge: 16dp<br>
                          Top padding: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single2_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense single-line list specs</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Height: 40dp<br>
                          Left and right padding from screen edge: 16dp<br>
                          Top padding: 4dp </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Icon with text</strong></h2>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                    <p>Bottom padding is measured from the baseline.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single4.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line list with icon </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single6.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a single-line list with icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single5.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Single-line list with icon specs</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Height: 48dp<br>
                          Icon padding, left: 16dp<br>
                          Text padding, left: 72dp<br>
                          Top padding: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single5_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense single-line list with icon specs</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Height: 40dp<br>
                          Icon padding, left: 16dp<br>
                          Text padding, left: 72dp<br>
                          Top padding: 4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Avatar with text</strong></h2>
                    <p>Bottom padding is measured from the baseline.</p>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single7.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line item with avatar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single9.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a single-line item with avatar </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single8.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Single-line item with avatar specs</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Height: 56dp<br>
                          Left avatar padding: 16dp<br>
                          Text padding, left: 72dp<br>
                          Top padding: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single8_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense single-line item with avatar specs</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Height: 48dp<br>
                          Left avatar padding: 16dp<br>
                          Text padding, left: 72dp<br>
                          Top padding: 4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Avatar with text and icon</strong></h2>
                    <p>Right icon padding: 16dp</p>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                    <p>Bottom padding is measured from the baseline.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single10.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line item with avatar and icon</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single9.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a single-line item with avatar and icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single11.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Single-line item with avatar and icon specs</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Height: 56dp<br>
                          Left avatar padding: 16dp<br>
                          Right icon padding: 16dp<br>
                          Text padding, left: 72dp<br>
                          Top padding: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_single11_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense single-line item with avatar and icon specs</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Height: 48dp<br>
                          Left avatar padding: 16dp<br>
                          Right icon padding: 16dp<br>
                          Text padding, left: 72dp<br>
                          Top padding: 4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Two-line list</h1>
                    <h2><strong>Text only</strong></h2>
                    <p>Primary text font: Roboto Regular 16sp<br>
                      Secondary text font: Roboto Regular 14sp<br>
                      Tile height: 72dp<br>
                      Text padding, left: 16dp<br>
                      Text padding, top and bottom: 20dp</p>
                    <p>Bottom padding is measured from the baseline.</p>
                    <p>Add 8dp of padding at the top and bottom of a list. One exception is at the top of a list with a subheader, because subheaders contain their own padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two1.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line list </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two3.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a two-line list </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two2.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Two-line list specs:</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Height: 72dp<br>
                          Left and right padding from screen edge: 16dp<br>
                          Top padding: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two2_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense two-line list specs:</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Height: 60dp<br>
                          Left and right padding from screen edge: 16dp<br>
                          Top padding: 4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Icon with text</strong></h2>
                    <p>Primary text font: Roboto Regular 16sp<br>
                      Secondary text font: Roboto Regular 14sp<br>
                      Tile height: 72dp<br>
                      Left icon padding: 16dp<br>
                      Text padding, left: 72dp<br>
                      Text padding, top and bottom: 20dp<br>
                      Bottom padding is measured from the baseline.</p>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two4.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line list with icon</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two12.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a two-line list with icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two5.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Two-line list with icon specs:</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Height: 72dp<br>
                          Icon left padding: 16dp<br>
                          Text left padding: 72dp<br>
                          Padding above list: 8dp<br>
                          Text right padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two5_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense two-line list with icon specs:</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Tile height: 60dp<br>
                          Icon left padding: 16dp<br>
                          Text left padding: 72dp<br>
                          Padding above list: 4dp<br>
                          Text right padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Avatar with text</strong></h2>
                    <p>Primary text font: Roboto Regular 16sp<br>
                      Secondary text font: Roboto Regular 14sp<br>
                      Tile height: 72dp<br>
                      Left avatar padding: 16dp<br>
                      Text padding, left: 72dp<br>
                      Text padding, top and bottom: 20dp</p>
                    <p>Bottom padding is measured from the baseline.</p>
                    <p>Center-align icon with text area.</p>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two6.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line list with avatar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two8.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a two-line list with avatar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two7.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Two-line list with avatar specs:</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Tile height: 72dp<br>
                          Icon left padding: 16dp<br>
                          Text left padding: 72dp<br>
                          Padding above list: 8dp<br>
                          Text right padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two7_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense two-line list with avatar specs:</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Tile height: 60dp<br>
                          Icon left padding: 16dp<br>
                          Text left padding: 72dp<br>
                          Padding above list: 4dp<br>
                          Text right padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Avatar with text and icon</strong></h2>
                    <p>Primary text font: Roboto Regular 16sp<br>
                      Secondary text font: Roboto Regular 14sp<br>
                      Tile height: 72dp<br>
                      Left avatar padding: 16dp<br>
                      Text padding, left: 72dp</p>
                    <p>Right icon padding: 16dp</p>
                    <p>Bottom padding is measured from the baseline.</p>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two9.png"/>
                      </div>
                      <figcaption>
                        <p>Avatar with text and icon</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two11.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an avatar with text and icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two10.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Avatar with text and icon</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Tile height: 72dp<br>
                          Icon left padding: 16dp<br>
                          Text left padding: 72dp<br>
                          Padding above list: 8dp<br>
                          Text right padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_two10_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense avatar with text and icon</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Tile height: 60dp<br>
                          Icon left padding: 16dp<br>
                          Text left padding: 72dp<br>
                          Padding above list: 4dp<br>
                          Text right padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Three-line list</h1>
                    <h2><strong>Text only</strong></h2>
                    <p>Primary text font: Roboto Regular 16sp</p>
                    <p>Secondary text font: Roboto Regular 14sp<br>
                      Tile height: 88dp<br>
                      Text padding, left: 16dp<br>
                      Text padding, top: 16dp<br>
                      Text padding, bottom: 20dp</p>
                    <p>Bottom padding is measured from the baseline.</p>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three1.png"/>
                      </div>
                      <figcaption>
                        <p>Three-line list</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three12.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a three-line list</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three2.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Three-line list specs:</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Tile height: 88dp<br>
                          Text left padding: 16dp<br>
                          Text right padding: 16dp<br>
                          Padding above list: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three2_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense three-line list specs:</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Tile height: 76dp<br>
                          Text left padding: 16dp<br>
                          Text right padding: 16dp<br>
                          Padding above list: 4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Icon with text</strong></h2>
                    <p>Primary text font: Roboto Regular 16sp<br>
                      Secondary text font: Roboto Regular 14sp<br>
                      Tile height: 88dp<br>
                      Left icon padding: 16dp<br>
                      Text left padding: 72dp<br>
                      Text padding, top: 16dp<br>
                      Text padding, bottom: 20dp</p>
                    <p>Bottom padding is measured from the baseline.</p>
                    <p>Top-align icon with primary text.</p>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three4.png"/>
                      </div>
                      <figcaption>
                        <p>Three-line list with icon</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three3.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a three-line list with icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three5.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Three-line list with icon specs:</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Tile height: 88dp<br>
                          Icon left padding: 16dp<br>
                          Text left padding: 72dp<br>
                          Text padding right: 16dp<br>
                          Padding above list: 8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three5_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense three-line list with icon specs:</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Tile height: 76dp<br>
                          Icon left padding: 16dp<br>
                          Text left padding: 72dp<br>
                          Text padding right: 16dp<br>
                          Padding above list: 4dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Avatar with text</strong></h2>
                    <p>Primary text font: Roboto Regular 16sp<br>
                      Secondary text font: Roboto Regular 14sp<br>
                      Tile height: 88dp<br>
                      Left avatar padding: 16dp<br>
                      Left text padding: 72dp<br>
                      Text padding, top: 16dp<br>
                      Text padding, bottom: 20dp</p>
                    <p>Bottom padding is measured from the baseline.</p>
                    <p>Top-align avatar with primary text.</p>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three6.png"/>
                      </div>
                      <figcaption>
                        <p>Three-line list with avatar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three8.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a three-line list with avatar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three7.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Three-line list with avatar specs:</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Tile height: 88dp<br>
                          Padding above list: 8dp<br>
                          Padding left of avatar: 16dp<br>
                          Text left padding: 72dp<br>
                          Text right padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three7_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense three-line list with avatar specs:</strong></p>
                        <p>Font: Roboto Regular 13sp<strong><br>
                        </strong>Tile height: 76dp<br>
                          Padding above list: 4dp<br>
                          Padding left of avatar: 16dp<br>
                          Text left padding: 72dp<br>
                          Text right padding: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Avatar with text and icon</strong></h2>
                    <p>Primary text font: Roboto Regular 16sp<br>
                      Secondary text font: Roboto Regular 14sp<br>
                      Tile height: 88dp<br>
                      Left avatar padding: 16dp<br>
                      Text left padding: 72dp<br>
                      Text padding, top: 16dp<br>
                      Text padding, bottom: 20dp</p>
                    <p>Right icon padding: 16dp</p>
                    <p>Bottom padding is measured from the baseline.</p>
                    <p>Top-align avatar and icon with primary text.</p>
                    <p>Add 8dp of padding at the top and bottom of a list, except for lists with subheaders, which have their own padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three9.png"/>
                      </div>
                      <figcaption>
                        <p>Three-line list with avatar and icon</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three11.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a three-line list with avatar and icon</p>
                        <p><br></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three10.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Three-line list with avatar and icon specs:</strong></p>
                        <p>Font: Roboto Regular 16sp<br>
                          Tile height: 88dp<br>
                          Left avatar padding: 16dp<br>
                          Text left padding: 72dp<br>
                          Padding above list: 8dp<br>
                          Right and left padding by the icon: 16dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/lists/components_lists_keylines_three10_dense.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Dense three-line list with avatar and icon specs:</strong></p>
                        <p>Font: Roboto Regular 13sp<br>
                          Tile height: 76dp<br>
                          Left avatar padding: 16dp<br>
                          Text left padding: 72dp<br>
                          Padding above list: 4dp<br>
                          Right and left padding by the icon: 16dp</p>
                      </figcaption>
                    </figure>
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