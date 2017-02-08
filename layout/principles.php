<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><h1>Material design is guided by print-based design elements – such as typography, grids, space, scale,
          color, and imagery – to create hierarchy, meaning, and focus that immerse the user in the experience. Material
          design adopts tools from the field of print design, like baseline grids and structural templates, encouraging
          consistency across environments by repeating visual elements, structural grids, and spacing across platforms
          and screen sizes. These layouts scale to fit any screen size, which simplifies the process of creating
          scalable apps. </h1></div>
      </div>

      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="principles.html#principles-how-paper-works" data-qp-ui-data-id="qp:1">How paper works</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="principles.html#principles-floating-action-button" data-qp-ui-data-id="qp:2">Floating action button</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="principles-how-paper-works" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            How paper works
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>In material design, the physical properties of paper are translated to the screen. The background of an application resembles the flat, opaque texture of a sheet of paper, and an application’s behavior mimics paper’s ability to be re-sized, shuffled, and bound together in multiple sheets. </p>
              <p>The surfaces that comprise applications are referred to in this spec as material, or sheets of material.</p>
              <p>Elements outside of applications, such as system bars, are separate from the app content beneath them, and are not treated as material.</p>
              <p>For detailed information about material, see <a href="../what-is-material/material-properties.html">Material Properties</a>.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Seams</h1>
                    <p>Two sheets of material that share an entire common edge are called <strong>seams</strong>. While joined by a seam, they move together.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/principles/layout_principles_papercraft_paper1.png"/>
                      </div>
                      <figcaption>
                        <p>Seams in two sheets of material</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Steps</h1>
                    <p>Two overlapping sheets of material, with different z-positions (or depths), form a <strong>step</strong>. They move independently of each other. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/principles/layout_principles_papercraft_paper2.png"/>
                      </div>
                      <figcaption>
                        <p>Steps in two sheets of overlapping material</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="principles-floating-action-button" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Floating action button
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
                    <h1>Floating action button</h1>
                    <p>A <strong>floating action</strong><strong> button</strong> is a circular sheet separate from a toolbar. It represents a single promoted action. </p>
                    <p>It can straddle a step if it relates to the content creating that step.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/principles/layout_principles_papercraft_actions1.png"/>
                      </div>
                      <figcaption><br>
                        <p>Floating action buttons straddling steps</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>A floating action button can straddle a seam if it relates to the content of both sheets. </p>
                    <p>Do not introduce a decorative seam to provide an anchoring point for an action.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/principles/layout_principles_papercraft_actions2.png"/>
                      </div>
                      <figcaption><br>
                        <p>Floating action buttons straddling seams</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p>For detailed information about floating action buttons, see <a href="../components/buttons.html#buttons-floating-action-button">Floating Action Buttons</a>.</p>
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