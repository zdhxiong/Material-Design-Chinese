<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>无法显示项目的内容时会显示空状态。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>不包含任何项目的列表，或不包含任何结果的搜索，都是空状态的例子。虽然这些状态并不具有代表性，但它们也应该被设计成防止用户混淆。</p>
                <p>对于由于系统故障而无法显示的内容，请参阅<a href="errors.html#errors-app-errors">应用错误</a>。</p>
              </div>
              <div class="module">
                <h3>空状态的替代方案</h3>
                <p>启动器内容<br>
                  教育性的内容<br>
                  最佳匹配</p>
                <h3>空状态的内容</h3>
                <p>文字标语<br>
                  非交互式图像</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/patterns/empty-states/patterns_empty_states.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="empty-states.html#empty-states-displaying-empty-states" data-qp-ui-data-id="qp:1">显示空状态</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="empty-states.html#empty-states-avoiding-completely-empty-states" data-qp-ui-data-id="qp:2">避免完全为空的状态</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="empty-states-displaying-empty-states" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            显示空状态
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
                  <div class="module"><p>最基本的空状态是显示非交互式的图像和文本标语。</p>
                    <p>使用以下图片：</p>
                    <ul class="lst-kix_ojibm6d1wfvy-0 start">
                      <li>淡淡的，颜色素净的，和背景色不造成冲突的</li>
                      <li>以活泼的方式传达应用的用途和潜能，例如应用的图标</li>
                    </ul>
                    <p>使用以下标语</p>
                    <ul class="lst-kix_m2obi9471yei-0 start">
                      <li>有一个积极的基调</li>
                      <li>与你的品牌一致</li>
                      <li>传达应用的用途，而不要出现可执行的操作</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/empty-states/patterns_emptystates_do.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>图像应该是素净的，视觉上能成为背景的一部分。标语应该传达应用的用途，而不要让用户去执行某项操作。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/empty-states/patterns_emptystates_dont.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>图像太过鲜明，标语不应该使用号召性的文字，这可能会导致用户去触摸图像或标语来开始视频聊天。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="empty-states-avoiding-completely-empty-states" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            避免完全为空的状态
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>这里有几种完全空白状态的替代方案。</p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>启动器内容</strong></p>
                    <p>使新用户学习使用并对应用感兴趣的最有效的途径是让用户使用它。考虑提供一个启动器内容，以便用户能立即浏览你的应用。</p>
                    <p>建议：</p>
                    <ul class="lst-kix_49cmhgvnnhb4-0 start">
                      <li>使用具有显著吸引力并展示主要功能的内容。</li>
                      <li>使用户能删除和替换此内容。</li>
                      <li>如果有可能，提供个性化的内容。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/empty-states/patterns_emptystates_starter.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>一个图书阅读应用可以为所有用户提供几本免费流行的书籍，以便用户可以立即开始探索该应用。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>教育性的内容</strong></p>
                    <p>如果屏幕的目的不易通过图片和标语来传达，请考虑显示教育性的内容。</p>
                    <p>建议：</p>
                    <ul class="lst-kix_6zm2x7h92bnt-0 start">
                      <li>帮助用户了解在此屏幕上有新内容后，他们能在此屏幕上执行哪些操作。</li>
                      <li>可以关闭或跳过此内容。</li>
                      <li>保持简短。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/empty-states/patterns_emptystates_education.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>用户在一个电影应用中观看视频之前，显示一个可移除的卡片，以说明服务的功能和优点。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>最佳匹配</strong></p>
                    <p>如果没有完全匹配用户查询的搜索结果，是否存在相似的搜索结果？如果有，则显示该结果，因为它们可能会帮用户找到他们想要的。</p>
                    <p>使用这种方法，需要在搜索结果上面的标题中清楚的指出，该内容不应被误认为与实际搜索结果相匹配。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/empty-states/Empty-state_best_match_01.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>最佳匹配示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/empty-states/Empty-state_best_match_02.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>提供最佳匹配是一个处理用户拼写错误，且不把责任推给用户的好方法。</p>
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