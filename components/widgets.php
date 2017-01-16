<?php
$vars = array(
  'title' => '窗口小部件',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '工具提示',
  'prev_path' => 'components/tooltips',
  'next_title' => '确认和确知',
  'next_path' => 'patterns/confirmation-acknowledgement'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Widgets</h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Widgets display glanceable views of an app's most important data and functionality.</p>
        </div>
      </div>
      
      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="widgets.html#widgets-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="widgets.html#widgets-types-of-widgets" data-qp-ui-data-id="qp:2">Types of widgets</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="widgets.html#widgets-behavior" data-qp-ui-data-id="qp:3">Behavior</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="widgets-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>Home screen widgets display your app’s new and interesting content in a consolidated form. They link to richer detail within the app.</p>
              <p>Users can move and, if supported, resize widgets across their home screen panels.</p>
              <div class="modulettes">
                <a class="modulette container android" href="https://www.google.com/url?q=https://developer.android.com/guide/topics/appwidgets/index.html&amp;sa=D&amp;ust=1481817989213000&amp;usg=AFQjCNEYogPWPMXxugx8F_BKM54SqwxaRA" target="_blank">
                  <img alt="" class="icon callout-icon" src="../static/images/callouts/android.svg">
                  <div class="info">
                    <div class="title">App widgets</div>
                    <span class="subtitle">How to publish an app widget</span>
                  </div>
                  </img>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="widgets-types-of-widgets" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Types of widgets
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
                  <div class="module"><h1>Information widgets</h1>
                    <p>Information widgets display a few elements of importance to a user and track how that information changes over time, such as weather or sports scores. Tapping the widget launches the associated app into a detail view.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/widgets/components_widgets_types_information.png"/>
                      </div>
                      <figcaption>
                        <p>An information widget</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Collection widgets</h1>
                    <p>Collection widgets display multiple elements of the same type, such as a collection of articles from a news app. They focus on two interactions: </p>
                    <ul class="lst-kix_kxygxuszxhje-0 start">
                      <li>Browsing a collection</li>
                      <li>Opening an element’s detail view</li>
                    </ul>
                    <p>Collection widgets can scroll vertically.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/widgets/components_widgets_types_collection.png"/>
                      </div>
                      <figcaption>
                        <p>Collection widgets</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/widgets/components_widgets_types_collection_list.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong>Control widgets</strong></h3>
                    <p>Control widgets display frequently used functions. These functions may be triggered from the home
                      screen without opening the app. For example, music app widgets allow the user to play, pause, or
                      skip music tracks from outside the music app.</p>
                    <p>Control widgets may or may not progress to a detail view.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/widgets/components_widgets_types_control.png"/>
                      </div>
                      <figcaption>
                        <p>A control widget</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong>Hybrid widgets</strong></h3>
                    <p>Many widgets are hybrids that combine elements of the different types above. Center your widget around one of these types and add elements of others as needed. </p>
                    <p>For example, a music player widget combines a control widget with elements of an information widget. The result keeps the user informed about which track is currently playing. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/widgets/components_widgets_types_hybrid.png"/>
                      </div>
                      <figcaption>
                        <p>A hybrid widget</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="widgets-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <h1>Navigation</h1>
              <p>Your widgets should provide navigation links to frequently used areas of your app, including:</p>
              <ul class="lst-kix_myvcxmhmnj8v-0 start">
                <li>Functions that allow the user to create new content, such as a new document or message</li>
                <li>Access to the top level of your app</li>
              </ul>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"><h1>Widget resizing</h1>
                    <p>Resizing allows users to adjust the height or width of a widget. This allows users to influence the layout of widgets on home panels.</p>
                    <p>Your app may be completely resizable or constrained to horizontal or vertical size changes.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/widgets/components_widgets_behavior_01.png"/>
                      </div>
                      <figcaption>
                        <p>A long press and subsequent release sets resizable widgets into resize mode. Users can use the drag handles or the widget corners to set the desired size.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module col-1">
                  <div class="module">
                    <h2>Scrollable widgets</h2>
                    <p>List or grid-based collection widgets usually expand or contract the vertical scrolling area. Regardless of the widget's size, the user can still scroll all elements into view.</p>
                    <p>Determine how much of your app's information should surface. For smaller sizes concentrate on the essential and then add more contextual information as the widget grows.</p>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <h2>Non-scrollable widgets</h2>
                    <p>Information widgets are not scrollable. All content and layout must dynamically fit as sized by the user.</p>
                  </div>
                </section>
                <section class="module col-1">
                  <div class="module">
                    <h2>Responsive resizing</h2>
                    <p>Widgets should accommodate different spacing requirements across devices, including cell number, size, and spacing variations.</p>
                  </div>
                </section>
              </div>
              <h1>Configuring widgets</h1>
              <p>Android widgets display their configuration choices once placed on a home panel. </p>
              <p>Configuration best practices:</p>
              <ul class="lst-kix_50zxfsiuzaou-0 start">
                <li>Keep configuration light and don't present more than 2-3 configuration elements</li>
                <li>Present configuration choices using dialogs, rather than full-screen, to retain the user's context
                </li>
              </ul>
              <p>Once setup, widgets do not typically show a "Setup" or "Configuration" button.</p>
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