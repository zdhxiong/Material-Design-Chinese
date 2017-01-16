<?php
$vars = array(
  'title' => 'Devices',
  'category' => '资源',
  'theme_color' => '#039BE5',
  'color_name' => 'light-blue',
  'prev_title' => 'Color palettes',
  'prev_path' => 'resources/color-palettes',
  'next_title' => 'Layout templates',
  'next_path' => 'resources/layout-templates'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Devices</h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro"></div>
      
      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="devices.html#devices-device-metrics" data-qp-ui-data-id="qp:1">Device metrics</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="devices.html#devices-resizer-tool" data-qp-ui-data-id="qp:2">Resizer tool</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="devices-device-metrics" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Device metrics
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="modulettes">
                <a class="modulette container md" href="https://material.io/devices/" target="_blank">
                  <img alt="" class="icon callout-icon" src="../static/images/callouts/md.svg">
                  <div class="info">
                    <div class="title">Device metrics</div>
                    <span class="subtitle">A comprehensive resource for sizing, resolution, and more across multiple devices</span>
                  </div>
                  </img>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="devices-resizer-tool" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Resizer tool
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Resizer is an interactive viewer that shows how digital products respond to material design breakpoints across desktop, mobile, and tablet.</p>
              <div class="modulettes">
                <a class="modulette container md" href="http://material.io/resizer/" target="_blank">
                  <img alt="" class="icon callout-icon" src="../static/images/callouts/md.svg">
                  <div class="info">
                    <div class="title">Resizer</div>
                    <span class="subtitle">Preview websites and demos across Material Design breakpoints</span>
                  </div>
                  </img>
                </a>
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