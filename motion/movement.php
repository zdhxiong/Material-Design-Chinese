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
                <p>材料中的运动遵循现实世界的力学，比如重力。</p>
              </div>
              <div class="module">
                <h3><strong>屏幕上的移动</strong></h3>
                <p>向上弧线<br>
                  向下弧线</p>
                <h3><strong>进出屏幕的移动</strong></h3>
                <p>独立移动<br>
                  关联移动</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 720px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/motion/movement/02-movement.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="movement.html#movement-movement-within-screen-bounds" data-qp-ui-data-id="qp:1">屏幕内的移动</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="movement.html#movement-movement-in-out-of-screen-bounds" data-qp-ui-data-id="qp:2">进出屏幕的移动</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="movement-movement-within-screen-bounds" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            屏幕内的移动
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>元素在屏幕内两点之间会沿着一条自然下凹的弧线移动。所有屏幕内的移动都遵循<a href="duration-easing.html#duration-easing-natural-easing-curves">标准曲线</a>。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>向上弧线</h1>
                    <p>在现实世界中，物体需要使用外力克服重力才能上升。屏幕内的元素的向上移动也需要类似的外力，使元素从一个较慢的速度开始加速。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-within-screen-bounds-figure-caption-1" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/ShiftWithin_01_Upward_Do_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/ShiftWithin_01_Upward_Do_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-within-screen-bounds-figure-caption-1">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>向斜上方移动时，刚开始坡度较缓，结束时坡度较陡。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-within-screen-bounds-figure-caption-2" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/ShiftWithin_02_Upward_Dont_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/ShiftWithin_02_Upward_Dont_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-within-screen-bounds-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>元素向上移动时，不要一开始就使用陡峭的坡度。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>向下弧线</h1>
                    <p>在现实世界中，元素会通过重力加速下落。在屏幕上，元素会以更快的速度向下移动，受较少的外力作用。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-within-screen-bounds-figure-caption-3" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/ShiftWithin_03_Downward_Do_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/ShiftWithin_03_Downward_Do_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-within-screen-bounds-figure-caption-3">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>当沿着对角线向下移动时，开始的曲线比较陡峭，结束的曲线比较平缓。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-within-screen-bounds-figure-caption-4" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/ShiftWithin_04_Downward_Dont_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/ShiftWithin_04_Downward_Dont_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-within-screen-bounds-figure-caption-4">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>元素向下移动时，不要一开始就使用平缓的曲线。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>何时不要用曲线轨迹</h1>
                    <p>沿着单个轴（水平或垂直）移动的元素不需要遵循弧线轨迹。这种移动更简单，且可以以稍快的速度移动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-within-screen-bounds-figure-caption-5" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/NoArc_01_SingleAxis_Do_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/NoArc_01_SingleAxis_Do_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-within-screen-bounds-figure-caption-5">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>沿着单个轴移动时使用直线轨迹。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-within-screen-bounds-figure-caption-6" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/NoArc_02_SingleAxis_Dont_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/NoArc_02_SingleAxis_Dont_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-within-screen-bounds-figure-caption-6">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>沿着单个轴移动时使用曲线轨迹会显得很不自然。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>元素进出屏幕时的移动也是沿着单个轴的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-within-screen-bounds-figure-caption-7" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/NoArc_03_ShiftInOutArcDo_v3-device.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/NoArc_03_ShiftInOutArcDo_v3-device.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-within-screen-bounds-figure-caption-7">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>直线进入屏幕可以很容易的感知到入口的位置。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-within-screen-bounds-figure-caption-8" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/NoArc_04_ShiftInOutArcDont_v3-device.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/NoArc_04_ShiftInOutArcDont_v3-device.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-within-screen-bounds-figure-caption-8">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要在离开屏幕的运动中使用弧线，这会使入口显得复杂。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="movement-movement-in-out-of-screen-bounds" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            进出屏幕的移动
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>独立移动</h1>
              <p>元素进入和离开屏幕时完全独立移动，不会对屏幕内其他内容的位置造成影响。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h2>进入屏幕</h2>
                    <p>元素进入屏幕时使用<a href="duration-easing.html#duration-easing-natural-easing-curves">减速曲线</a>实现快速进入，表明他们已经以峰值速度行进了。</p>
                    <h2>永久离开屏幕</h2>
                    <p>元素<strong>永久</strong>离开屏幕时，使用<a href="duration-easing.html#duration-easing-natural-easing-curves">加速曲线</a>来实现在较短的时间内加快离开屏幕，因为它们不会再返回，且不太需要获得用户的注意。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-in-out-of-screen-bounds-figure-caption-1" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_01_ShiftInOutDo_v3-device.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_01_ShiftInOutDo_v3-device.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-in-out-of-screen-bounds-figure-caption-1">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>对进入屏幕，并对周围其他元素的位置没有影响时，应使用减速曲线。在移动端，这个转换通常会持续 225ms。当元素永久离开屏幕时，应使用加速曲线。在移动端，这个转换通常会持续 195ms 以上。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-in-out-of-screen-bounds-figure-caption-2" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_02_ShiftInOutDont_v3-device.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_02_ShiftInOutDont_v3-device.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-in-out-of-screen-bounds-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要在这些情况中使用标准曲线。对于入场，缓慢的加速是没有必要的，因为用户的焦点会停在元素最终静止的点。对于出场，缓慢的减速是没有必要的，因为终点是不可见的。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>暂时离开屏幕</h2>
                    <p>元素<strong>暂时</strong>离开屏幕时应该使用<a href="duration-easing.html#duration-easing-natural-easing-curves">夏普曲线</a>，因为元素随时可能返回屏幕，且在屏幕外不会距离屏幕太远。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-in-out-of-screen-bounds-figure-caption-3" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_03_ShiftOutTempDo_v4-device.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_03_ShiftOutTempDo_v4-device.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-in-out-of-screen-bounds-figure-caption-3">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>元素暂时离开屏幕时应使用夏普曲线，因为元素可能从离开的位置再次返回。当元素返回时，使用减速曲线。在移动端，这个转换通常持续 300ms。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-in-out-of-screen-bounds-figure-caption-4" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_04_ShiftOutTempDont_v4-device.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_04_ShiftOutTempDont_v4-device.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-in-out-of-screen-bounds-figure-caption-4">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>元素永久离开屏幕时、或者需要从其他地方返回屏幕时，请使用加速曲线。而当元素返回时，应使用减速曲线。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>关联移动</h1>
              <p>元素进入或离开屏幕，导致屏幕上其他元素发生移动时，需要使用平滑的缓动曲线，这样才能减小混乱，避免视觉干扰和突然的移动。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><a href="duration-easing.html#duration-easing-natural-easing-curves">标准曲线</a>用于在屏幕的边界内或边界外移动的元素。与独立运动的元素相比，标准曲线的持续时间会稍久一点。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-in-out-of-screen-bounds-figure-caption-5" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_05_ShiftInOutRelativeDo_v3-device.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_05_ShiftInOutRelativeDo_v3-device.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-in-out-of-screen-bounds-figure-caption-5">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>当屏幕内的浮动操作按钮被进入屏幕的卡片影响时，标准曲线可以让两个元素保持平滑的开始和结束。在移动端，这个转换通常持续 300ms。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 100.0%">
                          <video aria-describedby="movement-in-out-of-screen-bounds-figure-caption-6" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_06_ShiftInOutRelativeDont_v3-device.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/movement/InOut_06_ShiftInOutRelativeDont_v3-device.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-in-out-of-screen-bounds-figure-caption-6">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>在向上和向下移动时，使用加速和减速曲线，会让屏幕内的浮动操作按钮突然向上移动，然后突然停止，然后突然向下移动。这种移动是非常粗糙和带破坏性的。</p>
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

<?php include SRC_PATH.'/public/footer.php'; ?>