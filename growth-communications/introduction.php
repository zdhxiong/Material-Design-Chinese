<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>成长和沟通指南包含了最佳实践和组件，以帮助用户快速直观地了解应用的功能，指南包括<a href="onboarding.html">导览</a>，<a href="feature-discovery.html">特性探索</a>，和<a href="gesture-education.html">附加手势</a>。</h1>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="introduction.html#introduction-goals" data-qp-ui-data-id="qp:1">目标</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="introduction-goals" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            目标
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>以下准则旨在：</p>
              <ul class="lst-kix_to3stogm3g1q-0 start">
                <li>在用户浏览或进行某些操作时，向用户介绍关于这些内容或操作的相关特性和功能，以帮助用户从应用中获得更多有价值的信息</li>
                <li>提高用户的活跃度和留存率</li>
              </ul>
              <p>为了确保用户体验，不对用户造成打扰，这些建议只针对定位、时间、音量和频率。</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/growth-communications/introduction/patterns_usereducation_01_TimelineEdu2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p><strong>前七天</strong></p>
                        <p>导览：自选模型<br>
                          用户教育：指导用户如何使用应用</p>
                        <p><strong>接下来30天及以后</strong></p>
                        <p>特性探索：对用户尚未尝试过的特性和功能做出提示</p>
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