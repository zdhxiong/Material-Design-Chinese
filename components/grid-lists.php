<?php
$vars = array(
  'title' => '网格列表',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '可扩展面板',
  'prev_path' => 'components/expansion-panels',
  'next_title' => '列表',
  'next_path' => 'components/lists'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Grid lists</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><p>Grid lists are an alternative to standard list views.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>A grid list consists of a repeated pattern of cells arrayed in a vertical and horizontal layout.</p>
                <p>Grid lists are best used on similar data types. They help improve the visual comprehension of the content they contain.</p>
              </div>
              <div class="module">
                <h3><strong>Types</strong></h3>
                <p>Image-only<br>
                  Single-line text (or with icon)<br>
                  Two-line text (or with icon)</p>
                <h3><strong>Actions</strong></h3>
                <p>Vertical scrolling<br>
                  Filtering</p>
                <h3><strong>Alternatives</strong></h3>
                <p><a href="lists.html">Lists</a><br>
                  <a href="cards.html">Cards</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/grid-lists/components_grid_lists.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="grid-lists.html#grid-lists-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="grid-lists.html#grid-lists-content" data-qp-ui-data-id="qp:2">Content</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="grid-lists.html#grid-lists-behavior" data-qp-ui-data-id="qp:3">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="grid-lists.html#grid-lists-specs" data-qp-ui-data-id="qp:4">Specs</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="grid-lists-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>A grid list is best suited to presenting <strong>homogenous data,</strong> typically images, and is optimized for <strong>visual comprehension</strong> and differentiating between similar data types.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_usage1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of grid list </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>A <strong>grid list</strong> consists of a repeated pattern of <strong>cells</strong> arrayed vertically and horizontally within the grid list.</p>
                    <p><strong>Tiles</strong> hold content and can span one or more cells vertically or horizontally. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_usage2.png"/>
                      </div>
                      <figcaption>
                        <p>Example of grid list</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_usage3.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a cell and tile </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p>If the text in tiles needs to be prominent enough to distinguish between primary content pieces, consider using a different container, like a list or cards, optimized for displaying text and facilitating reading comprehension.</p>
              <p><strong>Lists: </strong>Optimized for reading comprehension, particularly when comparing a set of data containing multiple data types.</p>
              <p><strong>Cards:</strong> Used for content with inconsistent formatting, such as photos with captions of variable length, or data sets with heterogeneous content, such as a mixed collection of photos and videos and books.</p>
            </div>
          </div>
        </div>

        <div id="grid-lists-content" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
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
                    <h1>Content in tiles</h1>
                    <p>Tile content consists of primary content and secondary content. Primary content is the main differentiating element, typically an image. Secondary content can be an action or text.</p>
                    <p>Provide a default image for tiles that lack an image for primary content.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_content1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of tile content with primary and secondary actions</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Actions in tiles</h1>
                    <p>Actions on both primary and secondary content – such as play, zoom in, delete, or select – are immediate and typically do not result in a submenu of options (action overflow) within the grid list.</p>
                    <p>Actions can open a subsequent view, such as a card.</p>
                    <h2><strong>Primary actions</strong></h2>
                    <ul class="lst-kix_xefhha8lrhq7-0 start">
                      <li>Fill the entire tile and therefore are not represented via icons or text.</li>
                      <li>Are consistent throughout tiles in a specific grid list. For example, the primary action for all tiles in a single grid list could be to view details for an image.</li>
                    </ul>
                    <h2><strong>Secondary actions or content</strong></h2>
                    <ul class="lst-kix_xzaw6cp8x2bi-0 start">
                      <li>Are represented in tiles with icons or text.</li>
                      <li>Are consistent throughout tiles in a specific grid list.</li>
                      <li>Are placed in a consistent location within the tiles of a specific grid list, but that consistent location may vary between grid lists (at corners or edges). For example, all titles in one grid list could be located at the bottom left corner, while all tiles in another grid list might place titles in the top left corner.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_content2.png"/>
                      </div>
                      <figcaption>
                        <p>Example of secondary action with action and text positions</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="grid-lists-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Behavior
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
                    <h1>Scrolling</h1>
                    <p>Grid lists typically scroll only vertically.</p>
                    <p>Horizontally scrolling grid lists are discouraged because the scrolling interferes with typical reading patterns, affecting comprehension. One notable exception is a horizontally-scrolling, single-line grid list of images, such as a gallery, which is compatible with typical reading patterns.</p>
                    <p>Cut off grid tiles in the view’s initial scroll position to communicate the scroll direction for content overflow.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_behavior1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Indicate content overflow by cutting off grid tiles.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_behavior2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Avoid aligning grid tiles along a view edge in the view’s initial scroll position. This positioning doesn’t effectively communicate that there is more content available.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Gestures</h1>
              <p>Per-tile swipe actions are not permitted. Pick-up-and-move actions are discouraged.</p>
              <h1>Tile filtering and sorting</h1>
              <p>Content in a grid list can be programmatically filtered or sorted by date, file size, alphabetical order, or other parameters.</p>
              <p>The first item in the grid list is positioned at the top left of the grid list, and the order proceeds left to right and top to bottom.</p>
              <h1>Dimensions and resizing</h1>
              <p>Resizing a grid list causes the tiles to re-sort as horizontal space becomes available. Full-bleed grid list tiles resize to fit the screen width.</p>
              <p>A grid list does not transform into a list when horizontal space contracts. Grid lists and lists are separate structures for emphasizing different data types. Grid lists prioritize images over text and lists prioritize text over images.</p>
              <p>To maintain a consistent rhythm throughout the grid list, truncate text content that is too long for the tile’s width. Alternatively, increase the grid size so that the tiles can accommodate the longer titles.</p>
              <h1>Responsive design</h1>
              <p>Full-screen grid lists should use fluid image ratios with minimum and maximum widths, derived using the <a href="https://www.google.com/url?q=http://www.google.com/design/spec/layout/metrics-keylines.html%23metrics-keylines-ratio-keylines&amp;sa=D&amp;ust=1481818011211000&amp;usg=AFQjCNEkNkPhCHA4jvTkp918lKXgzvkrvw" target="_blank">Ratio keylines</a>. They should retain fixed heights, margins, and padding.</p>
              <p>Centered grid lists have fluid margins with a minimum width. They maintain fixed image widths, heights, and padding. </p>
            </div>
          </div>
        </div>

        <div id="grid-lists-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Grid list header/footers</h1>
                    <h2><strong>Single-line header/footer </strong></h2>
                    <p>Height: 48dp<br>
                      Text padding: 16dp<br>
                      Default font size: 16sp<br>
                      Secondary action is flush right to the footer.</p>
                    <h2><strong>Two-line header/footer</strong></h2>
                    <p>Height: 68dp<br>
                      Text padding: 16dp<br>
                      Default font size for each line: 16sp/12sp or 14sp/14sp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs1.png"/>
                      </div>
                      <figcaption><br>
                        <p>Type 14/14 <br>
                          Two-line bar (with icon) height: 68dp<br>
                          Two-line bar height: 68dp<br>
                          Single-line bar height: 48dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs2.png"/>
                      </div>
                      <figcaption><br>
                        <p>Type 16/12 <br>
                          Two-line bar (with icon) height: 68dp<br>
                          Two-line bar height: 68dp<br>
                          Single-line bar height: 48dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs22.png"/>
                      </div>
                      <figcaption>
                        <p>Text truncation in header/footers.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Image-only grid list</h1>
                    <p>Grid list padding: 4dp or 1dp</p>
                    <p>Tiles in grid lists can span multiple columns.</p>
                    <p>Carefully consider whether secondary text is needed in grid lists that use multi-column tiles, as
                      larger tiles can develop significant empty space.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs3.png"/>
                      </div>
                      <figcaption>
                        <p>Image-only grid list </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs4.png"/>
                      </div>
                      <figcaption>
                        <p>Image-only grid list photo album</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Single-line grid list</h1>
                    <h2><strong>Text only</strong></h2>
                    <p>Height: 48dp<br>
                      Text padding: 16dp<br>
                      Default font size: 16sp<br>
                      Grid list padding: 4dp or 1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs5.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list footer with 16dp padding</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs7.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list header with 16dp padding</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs6.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list photo album</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Text with icon</strong></h2>
                    <p>Height: 48dp<br>
                      Text padding: 16dp<br>
                      Default font size: 16sp<br>
                      Grid list padding: 4dp or 1dp</p>
                    <p>The secondary action can be flush right or flush left within the footer or header.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs8.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list footer with 16dp padding and icon</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs10.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list header with 16dp padding and icon</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs12.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list footer with icon in photo album</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs9.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list footer with icon</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs11.png"/>
                      </div>
                      <figcaption>
                        <p>Single-line grid list header with icon</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Two-line grid list</h1>
                    <h2><strong>Text only</strong></h2>
                    <p>Height: 68dp<br>
                      Text padding: 16dp<br>
                      Default font size for each line: 16sp/12sp or 14sp/14sp<br>
                      Grid list padding: 4dp or 1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs13.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line grid list footer with 16dp of padding</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs15.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line grid list, 4dp example</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs14.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line grid list header with 16dp of padding</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs16.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line grid list, 1dp example</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Text with icon</strong></h2>
                    <p>Height: 68dp<br>
                      Text padding: 16dp<br>
                      Default font size for each line: 16sp/12sp or 14sp/14sp</p>
                    <p>The secondary action can be flush right or flush left within the footer or header.</p>
                    <p>Grid list padding: 4dp or 1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs17.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line text with icon footer</p>
                        <p>Text padding: 16dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs19.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line text with icon header</p>
                        <p>Text padding: 16dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs21.png"/>
                      </div>
                      <figcaption>
                        <p>Example of text with icon</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs18.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line text with icon</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/grid-lists/components_grids_specs20.png"/>
                      </div>
                      <figcaption>
                        <p>Two-line text with icon</p>
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