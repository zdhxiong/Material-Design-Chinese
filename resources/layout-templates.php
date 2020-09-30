<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div class="gas-intro-h1-bottom"></div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="layout-templates.html#layout-templates-mobile" data-qp-ui-data-id="qp:1">手机端</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="layout-templates.html#layout-templates-tablet" data-qp-ui-data-id="qp:2">平板端</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="layout-templates.html#layout-templates-desktop" data-qp-ui-data-id="qp:3">桌面端</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="layout-templates.html#layout-templates-whiteframes" data-qp-ui-data-id="qp:4">线稿</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="layout-templates-mobile" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            手机端
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>我们为手机端提供了 10 种模板。使用图层面板来切换关键线和间距规则。</p>
              <div class="modulettes">
                <a class="modulette download trackdl" download="" href="<?= static_url('../static/media/resources/layout-templates/Layout_Mobile_Whiteframe.ai'); ?>" title="Mobile Whiteframe">
                  <img alt="" class="icon download-icon" src="<?= static_url('../static/spec/images/callouts/download.svg'); ?>" loading="lazy">
                  <div class="info">
                    <div class="title">手机端线稿</div>
                    <span class="subtitle">2.23 MB (.ai) </span>
                  </div>
                  </img>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="layout-templates-tablet" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            平板端
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>我们为平板端提供了 14 种模板。使用图层面板来切换关键线和间距规则。</p>
              <div class="modulettes">
                <a class="modulette download trackdl" download="" href="<?= static_url('../static/media/resources/layout-templates/Layout_Tablet_Whiteframe.ai'); ?>" title="Tablet Whiteframe">
                  <img alt="" class="icon download-icon" src="<?= static_url('../static/spec/images/callouts/download.svg'); ?>" loading="lazy">
                  <div class="info">
                    <div class="title">平板端线稿</div>
                    <span class="subtitle">1.39 MB (.ai) </span>
                  </div>
                  </img>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="layout-templates-desktop" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            桌面端
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>我们为桌面端提供了 4 种模板，每种模板都包含 4 个不同的屏幕尺寸。使用图层面板来切换关键线和间距规则。</p>
              <div class="modulettes">
                <a class="modulette download trackdl" download="" href="<?= static_url('../static/media/resources/layout-templates/Layout_Desktop_Whiteframe.ai'); ?>" title="Desktop Whiteframe">
                  <img alt="" class="icon download-icon" src="<?= static_url('../static/spec/images/callouts/download.svg'); ?>" loading="lazy">
                  <div class="info">
                    <div class="title">桌面端线稿</div>
                    <span class="subtitle">89.40 MB (.ai) </span>
                  </div>
                  </img>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="layout-templates-whiteframes" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            线稿
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>线稿提供了各种各样由风格一致的平面、层和阴影组成的布局结构。</p>
              <div class="modulettes">
                <a class="modulette download trackdl" download="" href="<?= static_url('../static/media/resources/layout-templates/whiteframes.ai'); ?>" title="Whiteframes">
                  <img alt="" class="icon download-icon" src="<?= static_url('../static/spec/images/callouts/download.svg'); ?>" loading="lazy">
                  <div class="info">
                    <div class="title">线稿</div>
                    <span class="subtitle">14.38 MB (.ai) </span>
                  </div>
                  </img>
                </a>
              </div>
              <div class="modulettes">
                <a class="modulette download trackdl" download="" href="<?= static_url('../static/media/resources/layout-templates/whiteframes.sketch'); ?>" title="Whiteframes">
                  <img alt="" class="icon download-icon" src="<?= static_url('../static/spec/images/callouts/download.svg'); ?>" loading="lazy">
                  <div class="info">
                    <div class="title">线稿</div>
                    <span class="subtitle">2.92 MB (.sketch) </span>
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
  <div class="gas-last-div-inner-bottom"></div>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>
