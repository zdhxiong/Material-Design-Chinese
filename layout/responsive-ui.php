<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><h1>Responsive layouts in material design adapt to any possible screen size. This UI guidance includes a
          flexible grid that ensures consistency across layouts, breakpoint details about how content reflows on
          different screens, and a description of how an app can scale from small to extra-large screens.</h1></div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="adaptive-ui.html#responsive-ui-breakpoints" data-qp-ui-data-id="qp:1">Breakpoints</a></li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="adaptive-ui.html#responsive-ui-grid" data-qp-ui-data-id="qp:2">Grid</a></li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="adaptive-ui.html#responsive-ui-surface-behaviors" data-qp-ui-data-id="qp:3">Surface behaviors</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="adaptive-ui.html#responsive-ui-patterns" data-qp-ui-data-id="qp:4">Patterns</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="responsive-ui-breakpoints" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Breakpoints
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>For optimal user experience, material design user interfaces should adapt layouts for the following breakpoint widths: 480, 600, 840, 960, 1280, 1440, and 1600dp.</p>
              <div class="modulettes">
                <a class="modulette container md" href="http://material.io/resizer/" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/md.svg'); ?>">
                  <div class="info">
                    <div class="title">Resizer</div>
                    <span class="subtitle">Preview material design breakpoints with this interactive viewer across desktop, mobile, and tablet </span>
                  </div>
                  </img>
                </a>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPSGFxemFiQVRtb1k/layout_adaptive_breakpoints_01.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p><strong>1.</strong><strong> Summary and detail view content in layouts</strong></p>
                    <ul class="lst-kix_yt2oj44xi7j7-0 start">
                      <li>Layouts under 600dp wide may fill the screen with a single level of content hierarchy (either summary or detail content, but not both).</li>
                      <li>Layouts over 600dp wide may place two levels of content hierarchy on the screen (both summary and detail content).</li>
                    </ul>
                  </div>
                  <div class="module">
                    <p><strong>2. Max screen widths</strong></p>
                    <p>Layouts over 1600dp wide may let the layout grow until it hits a max width. At this point, the grid may do one of the following: </p>
                    <ul class="lst-kix_8aft212gh0kb-0 start">
                      <li>Become center aligned with increased margins</li>
                      <li>Remain left aligned while the right margin grows</li>
                      <li>Continue to grow while revealing additional content</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p><strong>Breakpoint system</strong></p>
                    <p>These breakpoints describe column and width specifications for different screens, devices, and orientations.</p>
                    <p>For some measurements, the values remain the same even if a device is rotated. For that reason the smallest width in either orientation is the defining value. </p>
                    <p>* 16dp when the smallest width of the device is &lt;600</p>
                    <p>** Desktop breakpoints are 16dp below the listed values to accommodate variations in browser chrome.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Breakpoint (dp)</p></td>
                        <td colspan="1" rowspan="1"><p>Handset / Tablet Portrait</p></td>
                        <td colspan="1" rowspan="1"><p>Handset / Tablet Landscape</p></td>
                        <td colspan="1" rowspan="1"><p>Window</p></td>
                        <td colspan="1" rowspan="1"><p>Columns</p></td>
                        <td colspan="1" rowspan="1"><p>Gutter</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>small handset</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>xsmall</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>360</p></td>
                        <td colspan="1" rowspan="1"><p>medium handset</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>xsmall</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>400</p></td>
                        <td colspan="1" rowspan="1"><p>large handset</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>xsmall</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>480</p></td>
                        <td colspan="1" rowspan="1"><p>large handset</p></td>
                        <td colspan="1" rowspan="1"><p>small handset</p></td>
                        <td colspan="1" rowspan="1"><p>xsmall</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>600</p></td>
                        <td colspan="1" rowspan="1"><p>small tablet</p></td>
                        <td colspan="1" rowspan="1"><p>medium handset</p></td>
                        <td colspan="1" rowspan="1"><p>small</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                        <td colspan="1" rowspan="1"><p>16/24*</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>720</p></td>
                        <td colspan="1" rowspan="1"><p>large tablet</p></td>
                        <td colspan="1" rowspan="1"><p>large handset</p></td>
                        <td colspan="1" rowspan="1"><p>small</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                        <td colspan="1" rowspan="1"><p>16/24*</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>840</p></td>
                        <td colspan="1" rowspan="1"><p>large tablet</p></td>
                        <td colspan="1" rowspan="1"><p>large handset</p></td>
                        <td colspan="1" rowspan="1"><p>small</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>16/24*</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>960</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>small tablet</p></td>
                        <td colspan="1" rowspan="1"><p>small</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1024**</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>large tablet</p></td>
                        <td colspan="1" rowspan="1"><p>medium</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1280**</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>large tablet</p></td>
                        <td colspan="1" rowspan="1"><p>medium</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1440**</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>large</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1600**</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>large</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1920**</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>xlarge</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="responsive-ui-grid" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Grid
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Material design’s responsive UI is based on a 12-column grid layout. This grid creates visual consistency between layouts, while allowing flexibility across a wide variety of designs. The number of grid columns varies based on the breakpoint system.</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmAZ3hsemplb3k0S00/layout_adaptiveUI_grid_01_hero.webm" type="video/webm">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmATmowU3BOUFR6Wk0/layout_adaptiveUI_grid_01_hero.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>This animation shows how surfaces and panels can align to influence the 12-column grid. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Margins and Gutters</strong></h2>
                    <p>The responsive grid focuses on consistent margin and gutter widths, rather than column width. Material design margins and columns follow an 8dp square baseline grid. Margins and gutters can be 8, 16, 24, or 40dp wide. </p>
                    <p>Margins and gutters don’t need to be equal. For example, it’s acceptable to use 40dp margins and 24dp gutters in the same layout.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmATEhhSmstQnNLek0/layout_adaptiveUI_grid_02_margins.webm" type="video/webm">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmAOHhfNWdvdmw1RUE/layout_adaptiveUI_grid_02_margins.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>This animation shows interactions of the following margin and gutter width variations:</p>
                        <ol class="lst-kix_l8t11msx2rv8-0 start" start="1">
                          <li>8dp margins and gutters</li>
                          <li>16dp margins and gutters</li>
                          <li>24dp margins and gutters</li>
                          <li>40dp margins and gutters</li>
                          <li>40dp margins and 24dp gutters</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Full-width vs Centered</strong></h2>
                    <p><strong>Full-width grids</strong> use fluid columns and breakpoints to determine when a layout needs to change. </p>
                    <p><strong>Centered grids</strong> use fixed columns and reflow the layout when all columns (plus a defined margin) no longer fit on screen. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmAZ1ptYWI2ZEc4czQ/layout_adaptiveUI_grid_03_width.webm" type="video/webm">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmASzY4clJvRmNFZTA/layout_adaptiveUI_grid_03_width.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <ol class="lst-kix_rij772l0b5s1-0 start" start="1">
                          <li>Full-width grids</li>
                          <li>Centered grids</li>
                        </ol>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h2><strong>Panel Influence on the Grid</strong></h2>
              <p>As defined in <a href="../patterns/navigation-drawer.html#navigation-drawer-behavior">Navigation patterns</a>, the side nav may be permanent, persistent, or temporary. These behaviors apply to any panel, not just a side nav. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Permanent </strong></p>
                    <p>A permanent panel exists outside of the responsive grid. The panel appears at a defined breakpoint (when the screen can accommodate the panel) and squeezes content. There are no controls to show/hide the panel.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmAUGNyT2dNT1AwV2M/layout_adaptiveUI_grid_04_behaviorPermanent.webm" type="video/webm">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmAdlN2bVFjXy1ZUzQ/layout_adaptiveUI_grid_04_behaviorPermanent.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>The effects of a permanent panel on the responsive grid</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Side panel effects on the grid</strong></p>
                    <p>This animation happens in two phases: </p>
                    <ol class="lst-kix_v6pxnk8kyd0x-0 start" start="1">
                      <li>A persistent side panel appears, squeezing both content and the grid. Content is accessible while the panel remains visible. The panel hides upon toggling.</li>
                      <li>A temporary side panel appears, pushing grid content off-screen. Touching either outside the panel, or an item inside the panel, hides the panel.</li>
                    </ol>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmAV0RFaV9jWEd4c1k/layout_adaptiveUI_grid_05_behaviorSqueezePush.webm" type="video/webm">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmAX3VfWTVZZjdpSnc/layout_adaptiveUI_grid_05_behaviorSqueezePush.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>The effects of a persistent panel on the responsive grid</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Temporary overlay</strong></p>
                    <p>A temporary panel does not affect the grid or content when off-screen. When toggled to be visible, it can be hidden again by touching anywhere outside the panel or an item inside the panel.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmAY2dNZUVlZnJmT28/layout_adaptiveUI_grid_06_behaviorOverlay.webm" type="video/webm">
                            <source src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B0nwUo5pqvmAV0Fnc2xLTmljUWc/layout_adaptiveUI_grid_06_behaviorOverlay.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>The effects of a temporary panel on the responsive grid</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="responsive-ui-surface-behaviors" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Surface behaviors
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>When a screen size changes, the UI adapts using the following surface-specific behaviors. </p>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>Visibility</p></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Behavior</p></td>
                        <td colspan="1" rowspan="1"><p>Definition</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Permanent</p></td>
                        <td colspan="1" rowspan="1"><p>When screen space is available, a surface is always visible.</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Persistent</p></td>
                        <td colspan="1" rowspan="1"><p>Surface visibility can be toggled between visible and hidden. When visible, interacting with other elements on the screen does not change visibility.</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Temporary</p></td>
                        <td colspan="1" rowspan="1"><p>Surface visibility can be toggled between visible and hidden. When visible, interacting with other elements on the screen toggles the surface to become hidden or minimized.</p>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <p>Width</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Behavior</p></td>
                        <td colspan="1" rowspan="1"><p>Definition</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Fixed</p></td>
                        <td colspan="1" rowspan="1"><p>Element width stays the same when screen size changes.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Fluid</p></td>
                        <td colspan="1" rowspan="1"><p>Element width grows as screen size changes.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Sticky</p></td>
                        <td colspan="1" rowspan="1"><p>Element width is fixed until influenced by another element or breakpoint.</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Squeeze</p></td>
                        <td colspan="1" rowspan="1"><p>Element width contracts as a panel is revealed</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Push</p></td>
                        <td colspan="1" rowspan="1"><p>Element width stays the same, its position changes horizontally as a panel appears, and it may be partially occluded by a screen’s edge.</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Overlay</p></td>
                        <td colspan="1" rowspan="1"><p>Element width and position stays the same as a panel appears over content.</p>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <p>Descriptors</p></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Behavior</p></td>
                        <td colspan="1" rowspan="1"><p>Definition</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Above, Below</p></td>
                        <td colspan="1" rowspan="1"><p>The y position of an element.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Over, Under</p></td>
                        <td colspan="1" rowspan="1"><p>The z position of an element in motion.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>In Front, Behind</p></td>
                        <td colspan="1" rowspan="1"><p>The static z position of an element.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Left, Right, Centered</p></td>
                        <td colspan="1" rowspan="1"><p>The x position of an element</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Top, Bottom</p></td>
                        <td colspan="1" rowspan="1"><p>The y position of an element and its position relative to a screen edge.</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Flat, Raised</p></td>
                        <td colspan="1" rowspan="1"><p>The z position, and shadow of an element. A flat element will have no shadow.</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Inset, Full Bleed</p></td>
                        <td colspan="1" rowspan="1"><p>The padding of an image or element</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Summary, Detail</p></td>
                        <td colspan="1" rowspan="1"><p>A content summary, and the full expansion of the summary</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="responsive-ui-patterns" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Patterns
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>As screen space increases, the following responsive patterns may be applied:</p>
              <ul class="lst-kix_vspbrsv9j74l-0 start">
                <li>Reveal</li>
                <li>Transform</li>
                <li>Divide</li>
                <li>Reflow</li>
                <li>Expand</li>
                <li>Position</li>
              </ul>
              <h2><strong>Reveal</strong></h2>
              <p>UI hidden by smaller screens may be revealed with increased available space.</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPcUUwX1I3bU0zdms/layout_adaptiveUI_patterns_01_reveal.png"/>
                      </div>
                      <figcaption>
                        <p>Elements, such as a side nav, may become visible.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPZ2VYZjhWaF9hZVE/layout_adaptiveUI_patterns_02_reveal.png"/>
                      </div>
                      <figcaption>
                        <p>A simple UI may reveal more powerful or complex options. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPS0FXa0ZEZy1TNUU/layout_adaptiveUI_patterns_03_reveal.png"/>
                      </div>
                      <figcaption>
                        <p>Content on a small screen that only appears after tapping an element may be revealed by default when more space is available.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h2><strong>Transform</strong></h2>
              <p>A UI element may transform from one format to another.</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPQ3JwNlkwUkgwVlU/layout_adaptiveUI_patterns_04_transform.png"/>
                      </div>
                      <figcaption>
                        <p>Side navigation may transform into tabs.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPeUFEVUUwNVpFWjQ/layout_adaptiveUI_patterns_05_transform.png"/>
                      </div>
                      <figcaption>
                        <p>A list may transform into a grid list.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPdkFVaHh1elZzUlk/layout_adaptiveUI_patterns_06_transform.png"/>
                      </div>
                      <figcaption>
                        <p>Menu items may transform into icons in a toolbar.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h2><strong>Divide</strong></h2>
              <p>A layered UI may be divided into newly available space.</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPdzR4OGMtZWJtalE/layout_adaptiveUI_patterns_07_divide.png"/>
                      </div>
                      <figcaption>
                        <p>Side navigation, list content, and detailed content divide to fill a single view.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPTTA4bmtTRlZUZ2M/layout_adaptiveUI_patterns_08_divide.png"/>
                      </div>
                      <figcaption>
                        <p>A left panel, list content, and a right panel divide within a single view as space increases. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPenZ3SDczaFI1eGc/layout_adaptiveUI_patterns_09_divide.png"/>
                      </div>
                    </figure>
                    <p>Tabbed sibling content is divided within the same view.</p>
                  </div>
                </section>
              </div>
              <h2><strong>Reflow</strong></h2>
              <p>A UI may reflow into available space.</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPeExEOG1QZzZpcEE/layout_adaptiveUI_patterns_10_reflow.png"/>
                      </div>
                      <figcaption>
                        <p>Elements from a single-column format may reflow to fill the content area in various combinations.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPSHZzMXFUejQ0UzQ/layout_adaptiveUI_patterns_11_reflow.png"/>
                      </div>
                      <figcaption>
                        <p>Horizontal tabs may reflow into a vertical list.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPMU43UGlBaWJZYW8/layout_adaptiveUI_patterns_12_reflow.png"/>
                      </div>
                      <figcaption>
                        <p>Elements may reflow within a component based on a new screen ratio or device orientation.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h2><strong>Expand</strong></h2>
              <p>The UI may expand across more space.</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPQ2wwdE1FQnhQdmM/layout_adaptiveUI_patterns_13_expand.png"/>
                      </div>
                      <figcaption>
                        <p>Content cards may expand to fill the new space.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPQXlRX0xFV1ZxOW8/layout_adaptiveUI_patterns_14_expand.png"/>
                      </div>
                      <figcaption>
                        <p>Dialogs may expand proportionally with content or in specific increments. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h2><strong>Position</strong></h2>
              <p>The position of UI components may change to more appropriate locations.</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPQzZOeW1RVmoteDg/layout_adaptiveUI_patterns_15_position.png"/>
                      </div>
                      <figcaption>
                        <p>A bottom sheet on a small screen may reposition itself as a menu.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B8olV15J7abPOEhNdE5iRnZicXc/layout_adaptiveUI_patterns_16_position.png"/>
                      </div>
                      <figcaption>
                        <p>A floating action button (FAB) may move to a more visible location relative to other UI elements.</p>
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