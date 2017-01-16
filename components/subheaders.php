<?php
$vars = array(
  'title' => '副标题',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '步进器',
  'prev_path' => 'components/steppers',
  'next_title' => 'Tab 选项卡',
  'next_path' => 'components/tabs'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Subheaders</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Subheaders are list tiles that delineate sections of a list or grid list.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p><strong>Subheaders </strong>may be displayed inline with tiles or associated with content. They are typically related to filtering or sorting criteria.</p>
                <p>Upon scrolling, subheaders remain pinned to the top of the screen until pushed off screen by the next subheader.</p>
              </div>
              <div class="module">
                <h3>Subheader types</h3>
                <p><a href="subheaders.html#subheaders-list-subheaders">List</a><br>
                  <a href="subheaders.html#subheaders-grid-subheaders">Grid</a><br>
                  <a href="subheaders.html#subheaders-menu-subheaders">Menu</a></p>
                <h3>Font </h3>
                <p>Roboto Medium 14sp</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt=""  src="../static/media/components/subheaders/components_subheaders.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="subheaders.html#subheaders-list-subheaders" data-qp-ui-data-id="qp:1">List subheaders</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="subheaders.html#subheaders-grid-subheaders" data-qp-ui-data-id="qp:2">Grid subheaders</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="subheaders.html#subheaders-menu-subheaders" data-qp-ui-data-id="qp:3">Menu subheaders</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="subheaders-list-subheaders" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            List subheaders
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
                  <div class="module"><h1>Specs</h1>
                    <p>Tile height: 48dp<br>
                      Subheader font: Roboto Medium 14sp</p>
                    <p><strong>Color</strong></p>
                    <p>Subheader color can either be the secondary grey text value (54% black) or the primary color of
                      the app.</p>
                    <p>In long lists of complex information, consider using colored subheaders to delineate content.
                      Android settings contain an example of how color can be used on subheaders.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/subheaders/components_subheaders1.png"/>
                      </div>
                      <figcaption>
                        <p>Grey subheader</p>
                        <p>Padding: 16dp<br>
                          Subheader tile height: 48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/subheaders/components_subheaders2.png"/>
                      </div>
                      <figcaption>
                        <p>Grey subheader in email inbox</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>Alignment</strong></p>
                    <p>A subheader should be left-aligned with an avatar/icon in a list, unless there is a promoted action in that space.</p>
                    <p>If there is a floating action button left-aligned with the avatar/icon in a list, align the subheader with the text content.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/subheaders/components_subheaders3.png"/>
                      </div>
                      <figcaption>
                        <p>With a left-aligned floating action button, the subheader is aligned with the text content.</p>
                        <p>Subheader tile height: 48dp<br>
                          Floating action button tile width: 72dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/subheaders/components_subheaders4.png"/>
                      </div>
                      <figcaption>
                        <p>The subheader is in the primary color of the app and aligned with the text because of the left-aligned floating action button. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="subheaders-grid-subheaders" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Grid subheaders
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
                  <div class="module"><p>Tile height: 48dp<br>
                    Subheader font: Roboto Medium 14sp<br>
                    Subheader is aligned 16dp from the left edge</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/subheaders/components_subheaders5.png"/>
                      </div>
                      <figcaption>
                        <p>The grid subheader is aligned 16dp from the left edge. The height of the grid subheader tile is 48dp.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/subheaders/components_subheaders6.png"/>
                      </div>
                      <figcaption>
                        <p>Grid subheaders for the months of the year in a photo album</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="subheaders-menu-subheaders" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Menu subheaders
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
                    <p>Tile height: 48dp<br>
                    Subheader font: Roboto Medium 14sp<br>
                    Subheader is aligned 16dp from the left edge</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/subheaders/components_subheaders7.png"/>
                      </div>
                      <figcaption>
                        <p>Menu subheader specs</p>
                        <p>Subheader padding from left edge: 16dp<br>
                          Tile height: 48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/subheaders/components_subheaders8.png"/>
                      </div>
                      <figcaption>
                        <p>Example of menu subheader</p>
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