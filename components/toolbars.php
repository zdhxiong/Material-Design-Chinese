<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Toolbar actions appear above the view affected by their actions.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Toolbars appear a step above the content they affect. They may constrain their width to accommodate material passing over them.</p>
                <p>Do not separate a toolbar’s actions by another sheet of material, unless it is transient, such as a menu or dialog.</p>
              </div>
              <div class="module">
                <h3><strong>Elevation</strong></h3>
                <p>Above app content</p>
                <h3><strong>Scrolling</strong></h3>
                <p>Affected content scrolls underneath toolbars.</p>
                <h3><strong>Dismissed content</strong></h3>
                <p>Sheets may temporarily cover the toolbar while moving offscreen.</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/toolbars/components_toolbars.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="toolbars.html#toolbars-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="toolbars-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Usage
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p></p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Toolbars appear a step above the sheet of material affected by their actions. When sheets scroll underneath toolbars, they are clipped and cannot pass through to the opposite side.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/toolbars/layout_principles_papercraft_toolbars4.png"/>
                      </div>
                      <figcaption>
                        <p>Toolbars are located a step above another sheet.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Sheets can also cover the toolbar as they move offscreen.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/toolbars/layout_principles_papercraft_toolbars6.png"/>
                      </div>
                      <figcaption>
                        <p>The toolbar maintains its seam until it moves off of the screen.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Finally, the second sheet can cover the toolbar as it moves.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/toolbars/layout_principles_papercraft_toolbars7.png"/>
                      </div>
                      <figcaption>
                        <p>The second sheet covers the toolbar as it moves.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>A toolbar’s left and right actions are never split by another sheet of material, with the exception of temporary materials such as menus or dialogs.</p>
                    <p>Instead, toolbars can constrain their width to make space for sheets of material passing over them. The actions on the left and right cluster to stay on the same side of a toolbar.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/toolbars/layout_principles_papercraft_toolbars2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo TRANSLATE['do']; ?></p>
                        <p>Constrain width to less than the full length of its material.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/toolbars/layout_principles_papercraft_toolbars3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo TRANSLATE['dont']; ?></p>
                        <p>Never allow a sheet of material to be split by another persistent sheet of material.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Toolbars can share a seam with another sheet.</p>
                    <p>In cases where they share a seam that transforms into a step, it is called a <strong>waterfall</strong>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/toolbars/layout_principles_papercraft_toolbars5.png"/>
                      </div>
                      <figcaption>
                        <p>In the waterfall variant of clipping, the toolbar starts out as seamed and then lifts to form a step.</p>
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

<?php include SRC_PATH.'/public/footer.php'; ?>