<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>图片，包括插图和照片，可分三个阶段加载。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>插图和照片会通过不透明度、曝光和饱和度三个错开的阶段来加载和过渡。</p>
              </div>
              <div class="module">
                <h3><strong>行为</strong></h3>
                <p>逐渐淡入<br>
                  转换时长<br>
                  动画</p>
                <h3><strong>转换时长</strong></h3>
                <p>使用较长的时间来载入图片，并缩短图片切换时的过渡效果的持续时间。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/patterns/loading-images/patterns_loading_images.png'); ?>"/>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>
      
      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="loading-images.html#loading-images-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="loading-images.html#loading-images-behavior" data-qp-ui-data-id="qp:2">行为</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="loading-images-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            用法
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
                    <p>插图和照片可以在错开的时长内在三个阶段之间加载和过渡，而不是单独依赖于不透明度的变化。你可以结合图片不透明度、曝光和饱和度变化来满足你的需求。</p>
                    <h2>曝光调整</h2>
                    <p>图片应该从低对比度和低饱和度开始加载。一旦图片的不透明度达到 100%，就以完整的饱和度显示图片。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/loading-images/patterns_loadingimages1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>加载图片时推荐使用的不透明度、曝光和饱和度</p>
                        <p>不透明度：0% 开始，100% 结束<br>
                          曝光：Gamma, Black output（针对暗色图片）<br>
                          饱和度：0 或 20% 开始，100% 结束</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/loading-images/patterns-imagetreatment-imageload3_large_xhdpi.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>完全不透明和曝光</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/loading-images/patterns-imagetreatment-imageload4_large_xhdpi.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>色彩饱和度</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p></p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>更大的屏幕</h1>
                    <p>此过程适合更大的屏幕，例如加载 Chrome OS 的系统壁纸。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/loading-images/patterns_loadingimages_largescreen.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/loading-images/patterns_loadingimages_largescreen.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>动画显示在更大的屏幕上加载 Chrome OS 的系统壁纸</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="loading-images-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            行为
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
                    <h1>逐渐淡入</h1>
                    <p>将图片的淡入可视化，就像打印照片的过程那样。</p>
                    <p>不要让图片过度曝光。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/loading-images/patterns-imagetreatment-aperturevsdevelopment1-yes-no_large_xhdpi.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/loading-images/patterns-imagetreatment-aperturevsdevelopment2-yes-no_large_xhdpi.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>转换时长</h1>
                    <p>推荐使用一个较长的转换时间来加载图片，切换图片时的过渡效果推荐使用较短的转换时间。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/loading-images/patterns-imagerytreatment-imageload-transition_large_xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/loading-images/patterns-imagerytreatment-imageload-transition_large_xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>加载和过渡动画</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>动画</h1>
                    <p>加载图片时可以添加细小的位移。此背景图在账户切换时会跟着切换动画水平移动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/loading-images/patterns-loadingimages-loading-070901_Load_Add_Animation_xhdpi_002.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/loading-images/patterns-loadingimages-loading-070901_Load_Add_Animation_xhdpi_002.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>视频显示了切换账户时的动画</p>
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

<?php include SRC_PATH.'/public/footer.php'; ?>