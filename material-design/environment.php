<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Material design is a three-dimensional environment containing light, material, and cast shadows.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>All material objects have x, y, and z dimensions.</p>
                <p>All material objects have a single z-axis position.</p>
                <p>Key lights create directional shadows, and ambient light creates soft shadows.</p>
              </div>
              <div class="module">
                <h3><strong>Material thickness</strong></h3>
                <p>1dp </p>
                <h3><strong>Shadows</strong></h3>
                <p>Shadows are created by the elevation difference between overlapping material.</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/material-design/environment/what_is_material_environment.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="environment.html#environment-3d-world" data-qp-ui-data-id="qp:1">3D world</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="environment.html#environment-light-shadow" data-qp-ui-data-id="qp:2">Light and shadow</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="environment-3d-world" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            3D world
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
                  <div class="module"><p>The material environment is a 3D space, which means all objects have x, y, and z dimensions. The z-axis is perpendicularly aligned to the plane of the display, with the positive z-axis extending towards the viewer. Every sheet of material occupies a single position along the z-axis and has a standard 1dp thickness, equivalent to <a href="../layout/units-measurements.html#units-measurements-density-independent-pixels-dp-">one  pixel of thickness</a> on screens with a pixel density of 160.</p>
                    <p>On the web, the z-axis is used for layering and not for perspective. The 3D world is emulated by manipulating the y-axis.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/environment/whatismaterial_environment_3d.png"/>
                      </div>
                      <figcaption>
                        <p>3D space with x, y, and z axes</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="environment-light-shadow" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Light and shadow
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Within the material environment, virtual lights illuminate the scene. Key lights create directional shadows, while ambient light creates soft shadows from all angles.</p>
              <p>Shadows in the material environment are cast by these two light sources. In Android development, shadows occur when light sources are blocked by sheets of material at various positions along the z-axis. On the web, shadows are depicted by manipulating the y-axis only. The following example shows the card with a height of 6dp.</p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/environment/whatismaterial_environment_shadow1.png"/>
                      </div>
                      <figcaption>
                        <p>Shadow cast by key light</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/environment/whatismaterial_environment_shadow2.png"/>
                      </div>
                      <figcaption>
                        <p>Shadow cast by ambient light</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/environment/whatismaterial_environment_shadow3.png"/>
                      </div>
                      <figcaption>
                        <p>Combined shadow from key and ambient lights</p>
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