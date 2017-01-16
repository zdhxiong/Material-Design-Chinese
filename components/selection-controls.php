<?php
$vars = array(
  'title' => '选择控制器',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '进度和动态',
  'prev_path' => 'components/progress-activity',
  'next_title' => '滑块',
  'next_path' => 'components/sliders'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Selection controls</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><p>Selection controls allow the user to select options. </p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Three types of selection controls are covered in this guidance:</p>
                <ul class="lst-kix_5laryictleob-0 start">
                  <li><strong>Checkboxes </strong>allow the selection of multiple options from a set.</li>
                  <li><strong>Radio buttons</strong> allow the selection of a single option from a set.</li>
                  <li><strong>Switches</strong> allow a selection to be turned on or off.</li>
                </ul>
              </div>
              <div class="module">
                <h3><strong>Color</strong></h3>
                <p>Selection controls use an app’s <a href="../style/color.html#color-color-schemes">accent color</a>.</p>
                <h3><strong>Themes</strong></h3>
                <p>Selection controls are available in both dark and light themes.</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/selection-controls/patterns_selection_controls.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection-controls.html#selection-controls-checkbox" data-qp-ui-data-id="qp:1">Checkbox</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection-controls.html#selection-controls-radio-button" data-qp-ui-data-id="qp:2">Radio button</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection-controls.html#selection-controls-switch" data-qp-ui-data-id="qp:3">Switch</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="selection-controls-checkbox" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Checkbox
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
                    <p>Checkboxes allow the user to select multiple options from a set. </p>
                    <p>If you have multiple options appearing in a list, you can preserve space by using checkboxes instead of on/off switches. </p>
                    <p>If you have a single option, avoid using a checkbox and use an on/off switch instead.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_check1.png"/>
                      </div>
                      <figcaption>
                        <p>Light theme</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_check2.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Light</h1>
                    <p>On: Swatch 500, Opacity 100%<br>
                      Off: #000000, Opacity 54%<br>
                      Disabled: #000000, Opacity 26%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_check3.png"/>
                      </div>
                      <figcaption>
                        <p>Light theme for checkboxes in hover, focused, pressed, disabled, and disabled focused states. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Dark</h1>
                    <p>On: Swatch 500, Opacity 100%<br>
                      Off: #FFFFFF, Opacity 70%<br>
                      Disabled: #FFFFFF, Opacity 30%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_check4.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme for checkboxes in hover, focused, pressed, disabled, and disabled focused states. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="selection-controls-radio-button" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Radio button
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
                    <p>Radio buttons allow the user to select one option from a set. Use radio buttons for exclusive selection if you think that the user needs to see all available options side-by-side. </p>
                    <p>Otherwise, consider a dropdown, which uses less space than displaying all options. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_radio1.png"/>
                      </div>
                      <figcaption>
                        <p>Light theme for radio buttons</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_radio2.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme for radio buttons</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Light</h1>
                    <p>On: Swatch 500, Opacity 100%<br>
                      Off: #000000, Opacity 54%<br>
                      Disabled: #000000, Opacity 26%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_radio3.png"/>
                      </div>
                      <figcaption>
                        <p>Light theme for radio buttons in hover, focused, pressed, disabled, and disabled focused states. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Dark</h1>
                    <p>On: Swatch 500, Opacity 100%<br>
                      Off: #FFFFFF, Opacity 70%<br>
                      Disabled: #FFFFFF, Opacity 30%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_radio4.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme for radio buttons in hover, focused, pressed, disabled, and disabled focused states. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="selection-controls-switch" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Switch
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
                    <p>On/off switches toggle the state of a single settings option. The option that the switch controls, as well as the state it’s in, should be made clear from the corresponding inline label. Switches take on the same visual properties of the radio button. </p>
                    <p>The on/off slide toggle with the text “on” and “off” included within the asset is deprecated. Use the switch shown here instead. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch1.png"/>
                      </div>
                      <figcaption>
                        <p>Light theme</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch2.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><h1>Light</h1>
                    <p>Thumb On: Swatch 500, Opacity 100%<br>
                      Track On: Swatch 500, Opacity 50%</p>
                    <p>Thumb Off: Grey 50, #FAFAFA, Opacity 100%<br>
                      Track Off: #000000, Opacity 38%</p>
                    <p>Thumb Disabled: Grey 400, #BDBDBD, Opacity 100%<br>
                      Track Disabled: #000000, Opacity 12%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch3.png"/>
                      </div>
                      <figcaption>
                        <p>Light theme for switches in hover, focused, pressed, disabled, and disabled focused states. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Dark</h1>
                    <p>Thumb On: Swatch 200, Opacity 100%<br>
                      Track On: Swatch 200, Opacity 50%</p>
                    <p>Thumb Off: Grey 400, #BDBDBD, Opacity 100%<br>
                      Track Off: #FFFFFF, Opacity 30%</p>
                    <p>Thumb Disabled: Grey 800, #424242, Opacity 100%</p>
                    <p>Track Disabled: #FFFFFF, Opacity 10%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch4.png"/>
                      </div>
                      <figcaption>
                        <p>Dark theme for switches in hover, focused, pressed, disabled, and disabled focused states. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Use the outer radial reaction only on form factors that favor finger touch, where interaction may obstruct the element completely. For desktop usage with a mouse, you do not need this extra indication.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch5.png"/>
                      </div>
                      <figcaption>
                        <p>Radial reaction on mobile</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/selection-controls/components_switches_switch6.png"/>
                      </div>
                      <figcaption>
                        <p>No radial reaction on desktop</p>
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