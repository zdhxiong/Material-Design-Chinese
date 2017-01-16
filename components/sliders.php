<?php
$vars = array(
  'title' => '滑块',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '选择控制器',
  'prev_path' => 'components/selection-controls',
  'next_title' => 'Snackbars 与 toasts',
  'next_path' => 'components/snackbars-toasts'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Sliders</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Sliders let users select from a range of values by moving the slider thumb. </p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module"><p>Sliders are ideal components for adjusting settings that reflect intensity levels, such as volume, brightness, or color saturation.</p>
                <p>Sliders may have icons on both ends of the bar that reflect the value intensity. Place the smallest value for the slider range on the left and the largest value on the right. </p>
              </div>
              <div class="module">
                <h3><strong>Continuous sliders</strong></h3>
                <p>Continuous sliders allow users to select a value along a subjective range. They do not require a specific value to make adjustments, although they may, in some instances, offer an editable numeric value.</p>
                <h3><strong>Discrete sliders</strong></h3>
                <p>Discrete sliders allow users to select a specific value from a range. </p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/sliders/components_sliders.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="sliders.html#sliders-continuous-slider" data-qp-ui-data-id="qp:1">Continuous slider</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="sliders.html#sliders-discrete-slider" data-qp-ui-data-id="qp:2">Discrete slider</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="sliders-continuous-slider" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Continuous slider
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
                    <p>Use continuous sliders for subjective settings that do not require a specific value for the user to make meaningful adjustments.</p>
                    <h2><strong><strong>Light</strong></strong></h2>
                    <p>Thumb on: Swatch 500, Opacity 100%<br>
                      Track on: Swatch 500, Opacity 100%</p>
                    <p>Thumb off: #000000, Opacity 26%<br>
                      Track off: #000000, Opacity 26%</p>
                    <p>Focused and Click Thumb off: #000000, Opacity 38% <br>
                      Focused and Click Track off: #000000, Opacity 38%</p>
                    <p>Disabled (disconnected): #000000, Opacity 26%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous1.png"/>
                      </div>
                      <figcaption>
                        <p>Light theme</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>Dark</strong></strong></h2>
                    <p>Thumb on: Swatch 200, Opacity 100%<br>
                      Track on: Swatch 200, Opacity 100%</p>
                    <p>Thumb off: #FFFFFF, Opacity 30%<br>
                      Track off: #FFFFFF, Opacity 30%</p>
                    <p>Disabled (disconnected): #FFFFFF, Opacity 30%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous2.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/sliders/components-sliders-continuous_slider_light_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/components/sliders/components-sliders-continuous_slider_light_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Various slider behaviors</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Spacing for icons to the left and/or right of the bar:</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous3.png"/>
                      </div>
                      <figcaption>
                        <p>Example of spacing for icons in a slider. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous4.png"/>
                      </div>
                      <figcaption>
                        <p>Examples of sliders in normal, hover, focus, click, and disabled states. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>With an editable numeric value</h1>
                    <p>Use for settings for which users need to set the exact value. Upon pressing the thumb, the text box becomes editable for text entry and updates the value automatically with thumb movement. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous5.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a slider with an editable numeric value </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_continuous6.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a slider with an editable numeric value in normal, hover, focus, click, and disabled states. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="sliders-discrete-slider" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Discrete slider
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>The discrete slider thumb snaps to evenly spaced tick marks along the slider rail. Use for objective settings that require specific values for the user to make meaningful adjustments. Each tick mark should change the setting to a level that’s discernible to the user. The values are predetermined and aren’t user-editable.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>With a numeric value label</h1>
                    <p>Use for settings for which users need to know the exact value of the setting. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_discrete1.png"/>
                      </div>
                      <figcaption>
                        <p>Light theme</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/sliders/components_sliders_discrete2.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/sliders/components-sliders-discreteslider-061202_Slider_LightTheme_xhdpi_002.webm" type="video/webm">
                            <source src="../static/media/components/sliders/components-sliders-discreteslider-061202_Slider_LightTheme_xhdpi_002.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation of a discrete slider</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
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