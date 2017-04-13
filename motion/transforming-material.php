<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>材料可以通过合并和分割、改变形状和尺寸，来使材料表面更富生命力。</p>
              </div>
              <div class="module">
                <h3><strong>矩形转换</strong></h3>
                <p>不对称转换<br>
                  对称转换</p>
                <h3><strong>径向转换</strong></h3>
                <p>对称和圆形</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 720px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/motion/transforming-material/03-transforming-material.png'); ?>"/>
                    </div>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="transforming-material.html#transforming-material-rectangular-transformation" data-qp-ui-data-id="qp:1">矩形转换</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="transforming-material.html#transforming-material-radial-transformation" data-qp-ui-data-id="qp:2">径向转换</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="transforming-material.html#transforming-material-joining-dividing" data-qp-ui-data-id="qp:3">合并 &amp; 分割</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="transforming-material-rectangular-transformation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            矩形转换
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>当材料改变形状和尺寸时，它的宽度和高度也会沿着运动曲线异步变化。这些改变是和内部与周围的元素经过<a href="choreography.html">编排</a>的。</p>
              <p>在屏幕上发生的所有表面转换，比如以下这些，都使用<a href="duration-easing.html#duration-easing-natural-easing-curves">标准曲线</a>。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><h1>宽度和高度的转换</h1>
                    <p>可以通过对称或不对称的宽度和高度变化来展开或折叠元素。</p>
                    <p><strong>不对称转换</strong>需要宽度和高度以不同的速率变化。当需要改变多个元素的的属性或位置时，最适合使用不对称转换。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 47.3684210526%">
                          <video aria-describedby="rectangular-transformation-figure-caption-1" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Rect_01_ExpandOffset_v6-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Rect_01_ExpandOffset_v6-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="rectangular-transformation-figure-caption-1">
                        <p>不对称转换</p>
                        <p>要扩展元素的尺寸，请在转换高度之前先稍微转换一下元素的宽度。要折叠元素的尺寸，请在转换宽度之前先稍微转换一下元素的高度。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>对称转换</strong>需要宽度和高度以相同的频率变换。当单个元素沿着单个轴进行变换时，最适合使用对称转换。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 47.3684210526%">
                          <video aria-describedby="rectangular-transformation-figure-caption-2" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Rect_02_ExpandRobot_v6-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Rect_02_ExpandRobot_v6-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="rectangular-transformation-figure-caption-2">
                        <p>对称转换</p>
                        <p>同时变换宽度和高度是一种不太细致的变换方法，最适合简单的形状变更。这些变换比非对称变换的持续时间稍短。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>当元素异步扩展时，其包含的内容（例如文本或图片）也会以恒定的宽高比进行转换，以防止内容被拉伸。了解更多如何转换内容的方法，详见<a href="choreography.html">编排</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="rectangular-transformation-figure-caption-3" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Rect_04_ThumbnailContent_v6-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Rect_04_ThumbnailContent_v6-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="rectangular-transformation-figure-caption-3">
                        <p>内容（例如全宽的图片）会按恒定的宽高比进行转换，即使它的容器（例如较大的卡片）是沿着运动曲线异步变换的。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="rectangular-transformation-figure-caption-4" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Rect_03_Thumbnail_v6-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Rect_03_Thumbnail_v6-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="rectangular-transformation-figure-caption-4">
                        <p>含全出血内容的容器（例如全出血图片）也可以同步展开。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="transforming-material-radial-transformation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            径向转换
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
                    <p>径向转换是源自用户的触摸点的、对称的、圆形的视觉效果。它们通常应用在圆形的表面，用于转换成其他形状。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="radial-transformation-figure-caption-1" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_01_RadialExpand_v4-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_01_RadialExpand_v4-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="radial-transformation-figure-caption-1">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>径向转换应该用在圆形表面上，用于转换成矩形表面、或者从输入点创建一个新表面。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="radial-transformation-figure-caption-2" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_02_DontRadial_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_02_DontRadial_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="radial-transformation-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>在两个矩形之间转换时，请不要使用径向转换。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="radial-transformation-figure-caption-3" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_03_DontOval_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_03_DontOval_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="radial-transformation-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要对圆形的宽度和高度使用异步转换。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="radial-transformation-figure-caption-4" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_03_DontShape_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_03_DontShape_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="radial-transformation-figure-caption-4">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要转换复杂的形状。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>转换的起点可以是元素的当前位置、或者是表面最终出现的位置的中心。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="radial-transformation-figure-caption-5" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_04_RadialArc_v5-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_04_RadialArc_v5-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="radial-transformation-figure-caption-5">
                        <p>在扩展期间，浮动操作按钮沿着一条弧线向目的地移动，并最终扩展成一张卡片。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="radial-transformation-figure-caption-6" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_05_RadialArc_v5-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Radial_05_RadialArc_v5-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="radial-transformation-figure-caption-6">
                        <p>在转换期间，浮动操作按钮的中心保持在原来的位置，创造了一种更微妙的扩展效果。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="transforming-material-joining-dividing" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            合并 &amp; 分割
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
                  <div class="module">
                    <h2>合并</h2>
                    <p>材料可以合并到其他元素中，或者分割成多个部分。当两片材料彼此接近时，在完成移动前，它们的边缘会相遇且重叠。</p>
                    <h2>分割</h2>
                    <p>当材料分割成多个部分时，每一部分在刚开始移动时就分离了。</p>
                    <h2>阴影</h2>
                    <p>来自分离的元素的阴影，不会覆盖在同级元素的上面。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="joining-dividing-figure-caption-1" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Join_01_JoinDivide_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/transforming-material/Join_01_JoinDivide_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="joining-dividing-figure-caption-1">
                        <p>材料合并和分离的示例</p>
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