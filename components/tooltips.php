<?php
$vars = array(
  'title' => '工具提示',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '工具栏',
  'prev_path' => 'components/toolbars',
  'next_title' => '窗口小部件',
  'next_path' => 'components/widgets'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Tooltips</h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Tooltips are text labels that appear when the user hovers over, focuses on, or touches an element. </p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Tooltips identify an element when they are activated. They may contain brief helper text about its function. For example, they may contain text information about actionable icons.</p>
                <p>Tooltip labels do not receive input focus.</p>
              </div>
              <div class="module">
                <h3><strong>Summoned by:</strong></h3>
                <ul class="lst-kix_dz083mq70mc5-0 start">
                  <li>Hovering over an element with a cursor</li>
                  <li>Focusing on an element with a keyboard (usually the tab key)</li>
                  <li>Upon touch</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/tooltips/components_tooltips.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tooltips.html#tooltips-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tooltips.html#tooltips-interaction" data-qp-ui-data-id="qp:2">Interaction</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tooltips.html#tooltips-tooltips-desktop" data-qp-ui-data-id="qp:3">Tooltips (desktop)</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="tooltips.html#tooltips-tooltips-mobile" data-qp-ui-data-id="qp:4">Tooltips (mobile)</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="tooltips-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                    <p>Use tooltips for interactive imagery. </p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_usage1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_usage2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Tooltips don’t display rich information including images and formatted text. </p>
                    <p>Tooltips are different than ALT-attributes, which are intended primarily for static images.</p>
                    <p>Tooltips don’t have directional arrows; instead, they rely on motion emanating from the source to convey direction. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_usage3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_usage4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="tooltips-interaction" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Interaction
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>A tooltip is triggered by tapping and holding an item. Keep the tooltip displayed as long as the user continues to hold the element.</p>
              <h1>Timing</h1>
              <p>On lift, display the tooltip for 1.5 seconds.</p>
              <p>If the user takes another action before that time ends, the tooltip will disappear.</p>
              <h1>Motion details</h1>
              <p>The tooltip <strong>entrance </strong>occurs over 150ms, using the <a href="../motion/duration-easing.html#duration-easing-natural-easing-curves">Deceleration Curve</a>. It also <strong>exits </strong>over 150ms, using the <a href="../motion/duration-easing.html#duration-easing-natural-easing-curves">Acceleration Curve</a>.</p>
            </div>
          </div>
        </div>

        <div id="tooltips-tooltips-desktop" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Tooltips (desktop)
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
                  <div class="module"><p>Text: Roboto Medium 10sp</p>
                    <p>Color: Grey 700</p>
                    <p>Opacity: 90%</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_cursor_keyline.png"/>
                      </div>
                      <figcaption>
                        <p>Cursor/keyboard tooltips</p>
                        <p>Tile height: 22dp<br>
                          Left and right text padding: 8dp<br>
                          Top margin: 14dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_cursor.png"/>
                      </div>
                      <figcaption>
                        <p>Example of cursor/keyboard tooltip</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="tooltips-tooltips-mobile" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Tooltips (mobile)
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
                  <div class="module"><p>Text: Roboto Medium 14sp</p>
                    <p>Color: Grey 700</p>
                    <p>Opacity: 90%</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_touch_keyline.png"/>
                      </div>
                      <figcaption>
                        <p>Touch UI tooltips</p>
                        <p>Tile height: 32dp<br>
                          Left and right text padding: 16dp<br>
                          Top margin: 24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_touch1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of Touch UI tooltips</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_touch2.png"/>
                      </div>
                      <figcaption>
                        <p>Example of Touch UI tooltips</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_touch3.png"/>
                      </div>
                      <figcaption>
                        <p>Example of Touch UI tooltips in a normal state</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/tooltips/components_tooltips_touch4.png"/>
                      </div>
                      <figcaption>
                        <p>Example of Touch UI tooltips in a press and hold state</p>
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