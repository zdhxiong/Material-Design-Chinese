<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Some units have different meanings in different contexts. This chapter discusses the usage of device-independent pixels, scaleable pixels, as well as concepts like pixel density. </h1>
        </div>
      </div>


      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="units-measurements.html#units-measurements-pixel-density" data-qp-ui-data-id="qp:1">Pixel density</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="units-measurements.html#units-measurements-density-independent-pixels-dp" data-qp-ui-data-id="qp:2">Density-independent pixels (dp)</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="units-measurements.html#units-measurements-scaleable-pixels-sp" data-qp-ui-data-id="qp:3">Scaleable pixels (sp)</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="units-measurements.html#units-measurements-designing-layouts-for-dp" data-qp-ui-data-id="qp:4">Designing layouts for dp</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="units-measurements.html#units-measurements-image-scaling" data-qp-ui-data-id="qp:5">Image scaling</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="units-measurements-pixel-density" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Pixel density
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>The number of pixels that fit into an inch is referred to as “pixel density.” High-density screens have more pixels per inch than low-density ones. As a result, UI elements (such as a button) appear physically larger on low-density screens and smaller on high-density screens. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Screen resolution refers to the total number pixels in a display. </p>
                    <p><strong>screen density = screen width (or height) in pixels / screen width (or height) in </strong><strong>inches</strong></p>
                    <h4 class="related">Related</h4>
                    <div class="modulettes">
                      <a class="modulette container android" href="https://www.google.com/url?q=http://developer.android.com/guide/practices/screens_support.html&amp;sa=D&amp;ust=1481817970797000&amp;usg=AFQjCNGwPQDJJd2uu17SB88ySaEwsmZEPw" target="_blank">
                        <img alt="" class="icon callout-icon" src="../static/images/callouts/android.svg">
                        <div class="info">
                          <div class="title">Supporting Multiple Screens</div>
                          <span class="subtitle">Optimize your design for different screen densities.</span>
                        </div>
                        </img>
                      </a>
                    </div>
                    <div class="modulettes">
                      <a class="modulette container android" href="https://www.google.com/url?q=http://developer.android.com/guide/topics/resources/more-resources.html%23Dimension&amp;sa=D&amp;ust=1481817970799000&amp;usg=AFQjCNGSIwsX8PWLOAEIqXA1Gm15wNg5jA" target="_blank">
                        <img alt="" class="icon callout-icon" src="../static/images/callouts/android.svg">
                        <div class="info">
                          <div class="title">More Resource Types</div>
                          <span class="subtitle">Units of measure supported by Android.</span>
                        </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/units-measurements/layout_units_density1.png"/>
                      </div>
                      <figcaption>
                        <p><br>
                        High-density screen</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/units-measurements/layout_units_density2.png"/>
                      </div>
                      <figcaption>
                        <p><br>
                        Low-density screen</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="units-measurements-density-independent-pixels-dp" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Density-independent pixels (dp)
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
                    <p>"Density independence" refers to the uniform display of UI elements on screens with different densities. </p>
                    <p>Density-independent pixels (pronounced “dips”) are flexible units that scale to uniform dimensions on any screen. When developing an Android application, use dp to display elements uniformly on screens with different densities. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/layout/units-measurements/layout_units_dp.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>A dp is equal to one physical pixel on a screen with a density of 160. To calculate dp:</p>
                    <p><strong>dp = (width in pixels * 160) / screen density</strong></p>
                    <p>When writing CSS, use px wherever dp or sp is stated. Dp only needs to be used in developing for Android.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Screen density</p></td>
                        <td colspan="1" rowspan="1"><p>Screen width in pixels</p></td>
                        <td colspan="1" rowspan="1"><p>Screen width in density-independent pixels</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>120</p></td>
                        <td colspan="1" rowspan="1"><p>180 px</p></td>
                        <td colspan="1" rowspan="3"><p>240 dp</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>160</p></td>
                        <td colspan="1" rowspan="1"><p>240 px</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>240</p></td>
                        <td colspan="1" rowspan="1"><p>360 px</p></td>
                      </tr>
                      </tbody>
                    </table>
                    <p>If you have three screens, all 1.5 inches wide, with varying screen densities, the screen width will still be 240dp for all of them.</p>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="units-measurements-scaleable-pixels-sp" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Scaleable pixels (sp)
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>When developing for Android, scaleable pixels (sp) serve the same function as dp, but for fonts. The default value of an sp is the same as the default value for dp. </p>
              <p>The primary difference between an sp and a dp is that sp preserves a user's font settings. Users who have larger text settings for accessibility will see the font size matched to their text size preferences.</p>
            </div>
          </div>
        </div>

        <div id="units-measurements-designing-layouts-for-dp" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Designing layouts for dp
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>When designing layouts for the screen, calculate an element’s measurements in dp: </p>
              <p><strong>dp = (width in pixels * 160) / density</strong></p>
              <p>For example, a 32 x 32 px icon with a screen density of 320 equals 16 x 16 dp.</p>
            </div>
          </div>
        </div>

        <div id="units-measurements-image-scaling" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Image scaling
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>Images can be scaled to look the same across different screen resolutions by using these ratios:</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p><strong>Screen resolution</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>dpi</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>Pixel ratio</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>Image size (pixels)</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>xxxhdpi</p></td>
                        <td colspan="1" rowspan="1"><p>640</p></td>
                        <td colspan="1" rowspan="1"><p>4.0</p></td>
                        <td colspan="1" rowspan="1"><p>400 x 400</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>xxhdpi</p></td>
                        <td colspan="1" rowspan="1"><p>480</p></td>
                        <td colspan="1" rowspan="1"><p>3.0</p></td>
                        <td colspan="1" rowspan="1"><p>300 x 300</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>xhdpi</p></td>
                        <td colspan="1" rowspan="1"><p>320</p></td>
                        <td colspan="1" rowspan="1"><p>2.0</p></td>
                        <td colspan="1" rowspan="1"><p>200 x 200</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>hdpi</p></td>
                        <td colspan="1" rowspan="1"><p>240</p></td>
                        <td colspan="1" rowspan="1"><p>1.5</p></td>
                        <td colspan="1" rowspan="1"><p>150 x 150</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>mdpi</p></td>
                        <td colspan="1" rowspan="1"><p>160</p></td>
                        <td colspan="1" rowspan="1"><p>1.0</p></td>
                        <td colspan="1" rowspan="1"><p>100 x 100</p></td>
                      </tr>
                      </tbody>
                    </table>
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