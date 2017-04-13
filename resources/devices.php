<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro"></div>
      
      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="devices.html#devices-device-metrics" data-qp-ui-data-id="qp:1">设备数据</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="devices.html#devices-resizer-tool" data-qp-ui-data-id="qp:2">Resizer 工具</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="devices-device-metrics" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            设备数据
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="modulettes">
                <a class="modulette container md" href="https://material.io/devices" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/md.svg'); ?>">
                  <div class="info">
                    <div class="title">设备数据</div>
                    <span class="subtitle">一个包含各种设备的设备尺寸、分辨率等数据的综合性资源。</span>
                  </div>
                  </img>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="devices-resizer-tool" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Resizer 工具
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Resizer 是一个交互式查看器，显示数字产品如何响应桌面设备、移动设备和平板电脑上的 Material Design 的断点。</p>
              <div class="modulettes">
                <a class="modulette container md" href="http://material.io/resizer/" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/md.svg'); ?>">
                  <div class="info">
                    <div class="title">Resizer</div>
                    <span class="subtitle">在不同的 Material Design 断点下预览网站和示例。</span>
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

<?php include SRC_PATH.'/public/footer.php'; ?>