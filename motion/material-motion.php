<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>在 Material Design 的世界中，动效用于描述空间关系、功能以及提供优雅流畅的交互效果。</h1>
          <div class="col-list">
            <section class="figure col-1">
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 1520px">
                    <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 56.1842105263%">
                      <video controls="" loop="" preload="auto">
                        <source src="<?= static_url('../static/media/motion/material-motion/MaterialMotionHero_Spec_0505.webm'); ?>" type="video/webm">
                        <source src="<?= static_url('../static/media/motion/material-motion/MaterialMotionHero_Spec_0505.mp4'); ?>" type="video/mp4">
                        </source></source>
                      </video>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../motion/material-motion.html#material-motion-why-does-motion-matter" data-qp-ui-data-id="qp:1">为什么动效很重要？</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../motion/material-motion.html#material-motion-how-does-material-move" data-qp-ui-data-id="qp:2">材料如何移动？</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../motion/material-motion.html#material-motion-what-makes-a-good-transition" data-qp-ui-data-id="qp:3">什么是好的转换？</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../motion/material-motion.html#material-motion-implications-of-motion" data-qp-ui-data-id="qp:4">动效的影响</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="material-motion-why-does-motion-matter" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            为什么动效很重要?
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>动效展示了应用的组织方式和功能。</p>
              <p>动效可以：</p>
              <ul class="lst-kix_so1jjix4kui4-0 start">
                <li>引导用户在视图中的视觉焦点</li>
                <li>提示用户完成手势操作后会发生什么</li>
                <li>暗示元素间的等级和空间关系</li>
                <li>让用户忽视系统背后发生的事情（比如抓取内容、或加载下一个视图）</li>
                <li>使应用更有个性、更优雅、更令人愉悦</li>
              </ul>
              <div class="modulettes">
                <a class="modulette container gd" href="https://design.google.com/articles/making-motion-meaningful/" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?= static_url('../static/spec/images/callouts/gd.svg'); ?>" loading="lazy">
                  <div class="info">
                    <div class="title">让动效更有意义</div>
                    <span class="subtitle">来自 Google 的动效设计师分享了一些它们引以为傲的产品特性。</span>
                  </div>
                  </img>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="material-motion-how-does-material-move" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            材料如何移动?
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>材料环境从现实世界的力学中吸取灵感，如重力和摩擦力。这些力显示了用户如何和屏幕上的元素交互，以及元素之间的相互影响。</p>
              <p>运动中的材料有以下特性：</p>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>反映敏捷</h2>
                    <p>材料通常充满活力。它可以快速准确地在用户输入的位置做出响应。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }" role="button">
                          <video aria-describedby="how-does-material-move-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Responsive_01_Durations-v1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Responsive_01_Durations-v1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-0">
                        <p>在移动设备上，长一点的动画时间在 300-400ms 之间，短一点的动画时间在 150-200ms 之间。动画时间太长会让用户感觉迟钝，太短会感觉难以跟上。</p>
                        <p>更多信息详见<a href="duration-easing.html#duration-easing-common-durations">常见的动画时间</a>。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="how-does-material-move-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Responsive_02_Feedback-v2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Responsive_02_Feedback-v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-1">
                        <p>用户输入时会立即出现涟漪，从用户的触点向外扩散。浮动的卡片指示了卡片处于激活状态。</p>
                        <p>更多信息详见<a href="choreography.html#choreography-radial-reaction">径向反映</a>。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="how-does-material-move-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Responsive_03_SurfaceConnection-v3.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Responsive_03_SurfaceConnection-v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-2">
                        <p>展示了新创建的元素和创建者之间的联系。</p>
                        <p>更多信息详见<a href="choreography.html#choreography-creation">创建</a>。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>自然的</h2>
                    <p>受到了真实世界中的力学的启发，材料会很自然的移动。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }" role="button">
                          <video aria-describedby="how-does-material-move-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Natural_01_Easing-v1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Natural_01_Easing-v1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-3">
                        <p>在现实世界中，物体的加速度和减速度会受到物体自身的重量和表面摩擦力的影响，因此在 Material Design 中，物体不会突然开始运动，也不会突然停止。</p>
                        <p>更多信息详见<a href="duration-easing.html#duration-easing-natural-easing-curves">自然缓动曲线</a>。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="how-does-material-move-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Natural_02_Arc-v3.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Natural_02_Arc-v3.mp4'); ?>" type="video/mp4">
                            </source></source></video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-4">
                        <p>现实世界中的力，如重力，会启发物体沿着曲线运动，而不是直线运动。</p>
                        <p>更多信息详见<a href="movement.html#movement-movement-within-screen-bounds">移动</a>。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="how-does-material-move-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Natural_03_Transform-v3.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Natural_03_Transform-v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-5">
                        <p>材料的形变也遵守曲线的运动轨迹。</p>
                        <p>更多信息详见<a href="transforming-material.html">材料转换</a>。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>有意识的</h2>
                    <p>材料可以感知周围环境，包括用户和周围的其他材料。它可以被吸引到其他材料上，并以此响应用户的意图。</p>
                    <p>更多信息详见<a href="choreography.html">编排</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="how-does-material-move-figure-caption-6" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Aware_01_Choreo-v2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Aware_01_Choreo-v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-6">
                        <p>当元素转换到视图中时，它们和它们周围的元素会以某种方式编排在一起，以此来定义它们之间的关系。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="how-does-material-move-figure-caption-7" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Aware_02_MoveAway-v2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Aware_02_MoveAway-v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-7">
                        <p>材料可以把其他材料挤出视图。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="how-does-material-move-figure-caption-8" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Aware_03_Magnets-v2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Aware_03_Magnets-v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-8">
                        <p>元素可以吸引其他元素，并在接近一个元素时加入到这个元素中，成为一个新的元素。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>有意图的</h2>
                    <p>运动中的材料会指引用户在正确的时间聚焦于正确的位置。</p>
                    <p>更多信息详见<a href="choreography.html#choreography-continuity">连续性</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="how-does-material-move-figure-caption-9" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Intentional_01_Focus-v3.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Intentional_01_Focus-v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-9">
                        <p>转换可以指引用户前往交互的下一步。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="how-does-material-move-figure-caption-10" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Intentional_03_Disabled-v2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Intentional_03_Disabled-v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-10">
                        <p>移动可以传达出不同的信息，例如操作是否不可用。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="how-does-material-move-figure-caption-11" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/Intentional_02_Ring-v3.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/Intentional_02_Ring-v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="how-does-material-move-figure-caption-11">
                        <p>动画可以把用户的焦点聚集到需要用户注意的元素上。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="material-motion-what-makes-a-good-transition" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            什么是好的转换？
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>成功的动效设计需要遵守以下规则：</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>动效是快速的</h2>
                    <p>每一次交互都不应该让用户等待过长的时间。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="what-makes-a-good-transition-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/GoodTransition_QuickDo-v4.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/GoodTransition_QuickDo-v4.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="what-makes-a-good-transition-figure-caption-0">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>动画要迅速，这样用户不必等待动画完成。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="what-makes-a-good-transition-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/GoodTransition_QuickDont-v4.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/GoodTransition_QuickDont-v4.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="what-makes-a-good-transition-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>错开元素的动画，以及减慢元素的移动速度，都会导致动画时间过长。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>动画要简单明了</h2>
                    <p>转化要简单明了，并保持连贯。避免同时加入太多效果。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="what-makes-a-good-transition-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/GoodTransition_ClearDo-v3.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/GoodTransition_ClearDo-v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="what-makes-a-good-transition-figure-caption-2">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>转换到下一个视图时要保持清晰的路径，即使下一个视图是由很多元素编排成的。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="what-makes-a-good-transition-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/GoodTransition_ClearDont-v3.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/GoodTransition_ClearDont-v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="what-makes-a-good-transition-figure-caption-3">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>当有多个元素沿不同的方向、或不同的路径移动时，转换会变得很混乱。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>动效是一个整体</h2>
                    <p>材料元素的运动速度、灵敏度和目的都是统一的。应用中任何自定义的动效体验都应保持一致。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 61.8421052632%">
                          <video aria-describedby="what-makes-a-good-transition-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/GoodTransition_Cohesive-v4.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/GoodTransition_Cohesive-v4.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="what-makes-a-good-transition-figure-caption-4">
                        <p>虽然这些应用有不同的功能，但是相似的动画体验使用户觉得它们是相关的。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="material-motion-implications-of-motion" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            动效的影响
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
                  <div class="module"><p>这些动效带来的好处，可以在下列两个案例中观察到，这两个案例一个使用了动效，一个没有用动效。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="implications-of-motion-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/ImplicationsDo-v2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/ImplicationsDo-v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="implications-of-motion-figure-caption-0">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>在转换期间，用户被引导到下一个视图。通过平面的转换来传达应用的层次结构。加载过程在后台进行，以减少用户感知上的延迟。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.611111111%">
                          <video aria-describedby="implications-of-motion-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/material-motion/ImplicationsDont-v2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/material-motion/ImplicationsDont-v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="implications-of-motion-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>没有过渡效果，很难看出新视图和旧视图之间有什么关联。也无法感知到应用任何的层次结构，并且使用圆形旋转器的加载让加载过程显得太突兀。</p>
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
