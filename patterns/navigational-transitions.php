<?php
$vars = array(
  'title' => 'Navigational transitions',
  'category' => '模式',
  'theme_color' => '#FB8C00',
  'color_name' => 'orange',
  'prev_title' => 'Navigation drawer',
  'prev_path' => 'patterns/navigation-drawer',
  'next_title' => 'Notifications',
  'next_path' => 'patterns/notifications'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Navigational transitions</h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Navigational transitions are movements between states in an app, such as from a high-level view to a detailed view. </h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Most, but not all, transitions are hierarchical in nature. These moments should appropriately reflect the user’s journey through each state of an app. </p>
              </div>
              <div class="module">
                <h3><strong>Hierarchy and elevation</strong></h3>
                <p>When elements lift up and expand, the elevation change indicates a shift in focus from <strong>parent to child</strong> elements.</p>
                <p><strong>Sibling transitions</strong> occur between elements at the same level of hierarchy without elevation changes.</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/navigational-transitions/patterns_navigation_transitions.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigational-transitions.html#navigational-transitions-parent-to-child" data-qp-ui-data-id="qp:1">Parent to child</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigational-transitions.html#navigational-transitions-sibling-to-sibling" data-qp-ui-data-id="qp:2">Sibling to sibling</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="navigational-transitions-parent-to-child" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Parent to child
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Exploring deeper levels, or screens, of an app is a hierarchical journey that starts at a parent screen. From there, a user can explore multiple possible sub-screens, which are children to the parent screen.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>In material design, elevation changes indicate changes in focus from parent to child elements. </p>
                    <p><strong>Elevation and expansion</strong></p>
                    <p>The surface that the user touches should lift up and expand into place from its origin. This expansion and motion highlights movement away from the parent towards a destination (a child element) in a natural movement using the material motion curve.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/navigational-transitions/patterns_navigational-transitions_parent-to-child_list-02_xhdpi_019.webm" type="video/webm">
                            <source src="../static/media/patterns/navigational-transitions/patterns_navigational-transitions_parent-to-child_list-02_xhdpi_019.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Parent-to-child transition animation</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/navigational-transitions/patterns_navigational-transitions_parent-to-child_calendar_tablet_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/patterns/navigational-transitions/patterns_navigational-transitions_parent-to-child_calendar_tablet_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation of parent-to-child transition </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigational-transitions-sibling-to-sibling" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Sibling to sibling
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p><strong>Sibling transitions</strong> are transitions that occur between elements at the same level of hierarchy. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Static elevation</strong></p>
                    <p>When a user navigates through tabs, for example, no elevation changes occur. The content and surface of each tab stays at the same elevation level. New content slides in from the right while sibling content moves off-screen to the left.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/navigational-transitions/patterns_navigational-transitions_sibling-to-sibling_tabs-01_xhdpi_013.webm" type="video/webm">
                            <source src="../static/media/patterns/navigational-transitions/patterns_navigational-transitions_sibling-to-sibling_tabs-01_xhdpi_013.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Sibling transition</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/navigational-transitions/patterns_navigational-transitions_sibling-to-sibling_tabs-02_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/patterns/navigational-transitions/patterns_navigational-transitions_sibling-to-sibling_tabs-02_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation of sibling-to-sibling transition</p>
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