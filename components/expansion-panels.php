<?php
$vars = array(
  'title' => '可扩展面板',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '分割线',
  'prev_path' => 'components/dividers',
  'next_title' => '网格列表',
  'next_path' => 'components/grid-lists'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Expansion panels</h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Expansion panels contain creation flows and allow lightweight editing of an element.</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module"><p>An expansion panel is a lightweight container that may either stand alone or be connected to a larger surface, such as a card.</p>
                <p>They may be used for a variety of tasks, such as:</p>
                <ul class="lst-kix_nmfkwyszolh9-0 start">
                  <li>To edit a setting</li>
                  <li>To create a tool for ad campaigns</li>
                </ul>
              </div>
              <div class="module">
                <h3><strong>Usage</strong></h3>
                <p>Editing<br>
                  Creating flows</p>
                <h3><strong>Behavior</strong></h3>
                <p>Expand<br>
                  Collapse<br>
                  Focus</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/expansion-panels/components_expansion_panels.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="expansion-panels.html#expansion-panels-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="expansion-panels.html#expansion-panels-behavior" data-qp-ui-data-id="qp:2">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="expansion-panels.html#expansion-panels-specs" data-qp-ui-data-id="qp:3">Specs</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="expansion-panels-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <p>An expansion panel is a lightweight container that may either stand alone or be connected to a larger surface, such as a card. </p>
                    <p><strong>Editing</strong></p>
                    <p>Expansion panels are best used for lightweight editing of an element, such as selecting a value for a setting. </p>
                    <p>For example, an app that contains tables may use expansion panels to adjust settings on table elements.</p>
                    <p><strong>Creation flows</strong></p>
                    <p>Expansion panels may be displayed in a sequence to form creation flows. </p>
                    <p>For example, a tool for creating ad campaigns may display a series of expansion panels to collect campaign details.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/expansion-panels/components_expansionpanels_usage.png"/>
                      </div>
                      <figcaption>
                        <p>Various expansion panels</p>
                        <table class="s-tag-table">
                          <tbody>
                          <tr>
                            <td colspan="1" rowspan="1"><p><strong>List content</strong></p>
                              <p>15sp Roboto Regular<br>
                                87% black</p>
                              <p><strong>Secondary content</strong></p>
                              <p>12sp Roboto Regular<br>
                                54% black</p></td>
                            <td colspan="1" rowspan="1">
                              <p><strong>Divider</strong></p>
                              <p>1dp border<br>
                                12% black</p>
                              <p><strong>Expand icon</strong></p>
                              <p>24dp x 24dp<br>
                                38% black</p>
                            </td>
                          </tr>
                          </tbody>
                        </table>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="expansion-panels-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Behavior
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
                    <h1>Collapsed panel</h1>
                    <p>A collapsed panel displays summary information. Upon selecting the collapsed panel, it expands to display the full expansion panel.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/expansion-panels/components_material_expansionpanels_collapse.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a collapsed panel</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Expanded panel</h1>
                    <p>Upon selection, a collapsed panel expands, allowing users to add or edit information. </p>
                    <p>Helper text may be added to the panel to assist the user.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/expansion-panels/components_material_expansionpanels_expand.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an extended panel</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Focus state</h1>
                    <p>An expansion panel may use a focus state (by using a grey background on the list item) to provide focus to individual list items. </p>
                    <p>On a keyboard, users may traverse through list items by using the Tab key.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/expansion-panels/components_material_expansionpanels_state.png"/>
                      </div>
                      <figcaption>
                        <p><strong>Background</strong></p>
                        <p>Grey 200</p>
                        <p><strong>Expand icon on hover and pressed</strong></p>
                        <p>24dp x 24dp<br>
                          54% black</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="expansion-panels-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Specs
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
                    <p><strong>Label</strong></p>
                    <ul class="lst-kix_c7v5kcmoplqk-0 start">
                      <li>Font: Roboto Regular 15sp</li>
                    </ul>
                    <p><strong>Padding</strong></p>
                    <ul class="lst-kix_c7v5kcmoplqk-0">
                      <li>Top and bottom padding: 16dp</li>
                      <li>Left and right padding: 24dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/expansion-panels/components_material_expansionpanels_spec2.png"/>
                      </div>
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