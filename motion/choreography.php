<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>运动中的材料通过在转换过程中共享元素的交互来引导用户的视觉焦点。</p>
              </div>
              <div class="module">
                <h3>创建表面</h3>
                <p>把新创建的表面错开编排。</p>
                <h3>径向反应</h3>
                <p>使用触摸涟漪把用户输入和表面反应联系起来。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 720px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/motion/choreography/04-choreography.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="choreography.html#choreography-continuity" data-qp-ui-data-id="qp:1">连续性</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="choreography.html#choreography-creation" data-qp-ui-data-id="qp:2">创建</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="choreography.html#choreography-radial-reaction" data-qp-ui-data-id="qp:3">径向反应</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="choreography-continuity" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            连续性
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>仔细地选择在转换过程中共享的元素类型和数量，以此在转换过程中保持清晰的视觉焦点。</p>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>共享所有内容元素</h1>
                    <p>当表面扩展时，特定的元素在扩展过程中应始终保持可见。</p>
                    <p>复杂的转换应保持单个元素可见（见下文）。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="continuity-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_01_AllShared_v6-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_01_AllShared_v6-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="continuity-figure-caption-0">
                        <p>此折叠状态的卡片中的所有元素，组成了展开后的卡片的头部。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>很少或没有共享内容元素</h1>
                    <p>当扩展一个表面时，如果在转换后只存在<strong>单个元素</strong>，则该元素应该是转换的焦点，由它来控制所有其他元素。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="continuity-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_02_SingleShared_v6-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_02_SingleShared_v6-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="continuity-figure-caption-1">
                        <p>把不共享的内容固定到单个共享的元素上一起移动。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>如果视图之间<strong>没有共享的元素</strong>，则将所有元素固定到表面上一起纵向移动、淡入淡出。表面会修剪其中的内容。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="continuity-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_03_NoShared_v7-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_03_NoShared_v7-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="continuity-figure-caption-2">
                        <p>把所有的非共享内容固定到扩展元素的表面做纵向运动。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>无共享的表面（不推荐）</h1>
                    <p>如果在转换过程中<strong>没有公共表面</strong>共享，就会有一个新的表面从其他位置进入屏幕，创造一个新的视觉焦点。</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>多个共享的元素</h1>
                    <p>当有<strong>多个元素</strong>在转换过程中可见时，应该仅包含最重要的元素。如果某些元素在转换过程中太过抢眼，则在转换期间可能会消失，一旦转换完成，它们又会重新出现。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="continuity-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_04_SharedDo_v6-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_04_SharedDo_v6-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="continuity-figure-caption-3">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>使用最重要的共享元素把用户的焦点引导到下一个视图。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="continuity-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_05_SharedDont_v6-remapped.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_05_SharedDont_v6-remapped.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="continuity-figure-caption-4">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>避免创建没有焦点的场景，例如在转换期间使用大量共享元素、或使元素的路径相互交叉。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>布局意识</h1>
                    <p>如果转换完成时，还有一些元素没有加载，请在元素即将出现的位置留出足够的空间。这避免了元素突然出现时造成的元素跳动；也避免了用户触摸时，触摸目标突然跳开，使用户失望。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="continuity-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_06_LayoutAwareDo_v2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_06_LayoutAwareDo_v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="continuity-figure-caption-5">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在转换期间为尚未加载的元素留出空间，在加载完成后将其优雅的呈现出来。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="continuity-figure-caption-6" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_07_LayoutAwareDont_v2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/Continuity_07_LayoutAwareDont_v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="continuity-figure-caption-6">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要在元素加载完后挪动视图，因为那会把用户注意力转移到新加载的元素上。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="choreography-creation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            创建
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>新的材料表面和它的内容可以凭空创建。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module"><h1>创建新的表面</h1>
                    <p>把新创建的表面与创建它们的元素或操作关联起来。新表面通常以径向或矩形转换的方式从触摸点出现。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="creation-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_01_OriginDo_v2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_01_OriginDo_v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="creation-figure-caption-0">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>此菜单从触摸点出现，并将元素绑定到了触摸点。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="creation-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_02_OriginDont_v2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_02_OriginDont_v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="creation-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>此菜单从距离触摸点很远的地方出现，破坏了菜单和触摸点之间的关联。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>编排表面</h1>
                    <p>当同时创建多个表面时，把它们快速交错显示出来。在单个方向上创建清晰、平滑的视觉路径。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="creation-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_03_StaggerDo_v3.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_03_StaggerDo_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="creation-figure-caption-2">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>列表项有一个稍微交错的入场效果。网格项的交错效果为从左到右、从上到下。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="creation-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_04_StaggerDont_v2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_04_StaggerDont_v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="creation-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>列表项不应该同时一次性地出现。这样无法创造清晰的视觉焦点。</p>
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
                          <video aria-describedby="creation-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_05_StaggerDont_v2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_05_StaggerDont_v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="creation-figure-caption-4">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>带有交错入场效果的列表项，不应该以混乱的顺序出现。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="creation-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_05b_StaggerDont_v2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_05b_StaggerDont_v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="creation-figure-caption-5">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要等前一个项目的动画结束后才开始出现下一个。使用交错入场时，交错的时间间隔不应超过 20ms。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>自主创建的表面</h1>
                    <p>在没有用户输入源或没有起始点的情况下创建的表面，应该使用优雅的转换组合，包含淡入淡出、位移、缩放等效果。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="creation-figure-caption-6" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_06_NewDialogueDo_v2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_06_NewDialogueDo_v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="creation-figure-caption-6">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>自主创建的表面应平滑且快速地出现。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="creation-figure-caption-7" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_07_NewDialogueDont_v2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/CreationChoreo_07_NewDialogueDont_v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="creation-figure-caption-7">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>表面创建期间过多的动画会分散用户的注意力。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="choreography-radial-reaction" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            径向转换
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>使用径向反应来阐明用户输入和表面反应之间的联系。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module"><h1>用户输入</h1>
                    <p>使用触摸涟漪把用户输入和屏幕反应联系起来，同时指示出用户的触摸点，并告知用户已接受到触摸操作。无论是触摸还是鼠标，都应该在触摸点出现涟漪。</p>
                    <p>在触摸点附近发生的屏幕反应，应该比远离触摸点发生的屏幕反应出现的更早。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }" role="button">
                          <video aria-describedby="radial-reaction-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/RR_Point_of_Contact_001.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/RR_Point_of_Contact_001.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="radial-reaction-figure-caption-0">
                        <p>使用触摸涟漪把触摸点和屏幕反应关联起来。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="radial-reaction-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/02_SearchRipple-v2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/02_SearchRipple-v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="radial-reaction-figure-caption-1">
                        <p>从触摸点开始，应用栏会随着新颜色向外扩散而改变颜色。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="radial-reaction-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/motion/choreography/01_GridRipple.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/motion/choreography/01_GridRipple.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="radial-reaction-figure-caption-2">
                        <p>网格中的图片按照从触摸点出现的径向反应淡出。</p>
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
