<?php include SRC_PATH.'/public/header.php'; ?>

<style>
.index-btn {
  background-color: #00bcd4;
  height: 36px;
  line-height: 36px;
  padding: 0 16px;
  display: inline-block;
  color: #fff !important;
  border-radius: 2px;
  user-select: none;
}
.index-btn:hover {
  background-color: #12cce4;
}
</style>

<div id="grid-cont">
  <section class="grid_outer chapter">
    <div class="chapter-content">
      <div class="article-content chapter-intro">
        <div>
          <a href="./material-design/introduction.html" class="index-btn">开始阅读</a>
        </div>
      </div>

      <div class="article-list">
        <div id="index-source" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            内容来源
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>英文版官方文档：<a href="https://material.io/guidelines/" target="_blank">https://material.io/guidelines/</a></p>
              <p>中文翻译网站：<a href="https://www.mdui.org/design" target="_blank">https://www.mdui.org/design</a></p>
              <p>中文版 Github 仓库：<a href="https://github.com/zdhxiong/Material-Design-Chinese" target="_blank">https://github.com/zdhxiong/Material-Design-Chinese</a></p>
            </div>
          </div>
        </div>

        <div id="index-donate" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            捐赠
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-3">
                  <div class="module">
                    <p>您的捐赠将帮助我继续完善翻译，及用于服务器费用、图片视频的流量费等开销。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?= static_url('../static/alipay.jpg'); ?>" loading="lazy"/>
                      </div>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?= static_url('../static/wechat.jpg'); ?>" loading="lazy"/>
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

<?php include SRC_PATH.'/public/footer.php'; ?>
