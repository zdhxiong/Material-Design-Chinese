<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>分隔线是一个细长、轻量的元素，用于对列表和页面布局中的内容进行分组。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>分隔线把页面内容和层次结构组织成单独的块。</p>
                <p>全出血分隔线强调了需要更多视觉分隔的独立的内容区域。全出血分隔线的替代方案包括空白、副标题、或内嵌分隔线。</p>
                <p>基于图片的<a href="grid-lists.html">网格列表</a>中的内容不需要分隔线。网格列表使用空白和副标题已经能充分的分隔内容。</p>
              </div>
              <div class="module"><h3>用法</h3>
                <p>在<a href="lists.html">列表</a>中用于分隔内容</p>
                <h3>分隔线类型</h3>
                <ul class="lst-kix_empwb2afgke-0 start">
                  <li>全出血分隔线用于分隔不同的内容区块。</li>
                  <li>内嵌分隔线用于分隔相关的内容。</li>
                </ul>
                <h3>规格</h3>
                <ul class="lst-kix_qijap1wwopwy-0 start">
                  <li>粗细：1dp</li>
                  <li>不透明度：12% 黑色或 12% 白色</li>
                  <li>位置：沿着内容块的底部</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/components/dividers/components_dividers.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dividers.html#dividers-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dividers.html#dividers-types-of-dividers" data-qp-ui-data-id="qp:2">分隔线类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dividers.html#dividers-specs" data-qp-ui-data-id="qp:3">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="dividers-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                <section class="module col-1">
                  <div class="module">
                    <p>分隔线通过在页面上创建一个规律和层次结构，来帮助用户理解内容是如何组织的。但过度使用分隔线会造成视觉干扰，减弱分隔线的作用。</p>
                    <p>全出血分隔线强调分隔内容区域和章节，但如果不需要进行如此明显的分类，可以考虑使用空白、副标题或内嵌型分隔线。</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>没有锚点的项目</h2>
                    <p>当列表没有锚元素（如头像或图标）时，仅通过间距不足以分隔内容块。在这种情况下，全出血分隔线可以帮助创建一种规律来分隔单独的内容块。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?= static_url('../static/media/components/dividers/components_dividers_usage1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>全出血分隔线分隔邮件的摘要。</p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?= static_url('../static/media/components/dividers/components_dividers_usage2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>全出血分隔线分隔邮件中的发件人、收件人、主题和正文部分。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h2-spacing">
                  <div class="module">
                    <h2><strong>基于图片的内容</strong></h2>
                    <p>因为网格本身会创造视觉差异，网格列表不需要使用分隔线来从内容中分离副标题。在这种情况下，空白和副标题会充分的分隔这些部分。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?= static_url('../static/media/components/dividers/components_dividers_usage3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p>空白和副标题分隔了这些照片。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-3" src="<?= static_url('../static/media/components/dividers/components_dividers_usage6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-3">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>合理的使用内嵌分隔线分隔内容的主要部分。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-4" src="<?= static_url('../static/media/components/dividers/components_dividers_type1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-4">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>同时使用内嵌分隔线和锚元素（如头像）。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-5" src="<?= static_url('../static/media/components/dividers/components_dividers_usage4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-5">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>过度使用全出血分隔线会造成视觉干扰，并最终减弱分隔线的作用。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-6" src="<?= static_url('../static/media/components/dividers/components_dividers_usage5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-6">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>内嵌型分隔线有助于减少视觉干扰，应该和锚元素一起使用，但过度使用会减弱分隔线的作用。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dividers-types-of-dividers" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            分隔线类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>全出血分隔线</h1>
                    <p>全出血分隔线可以用于分隔明显不同的内容（例如：联系人信息中的详细介绍），或列表和页面布局中不同的元素（如列表项）。</p>
                    <p>全出血分隔线还可以用于指出元素展开时的接缝。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-dividers-figure-caption-0" src="<?= static_url('../static/media/components/dividers/components_dividers_fullbleed1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-dividers-figure-caption-0">
                        <p>全出血分隔线示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-dividers-figure-caption-1" src="<?= static_url('../static/media/components/dividers/components_dividers_type2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-dividers-figure-caption-1">
                        <p>全出血分隔线示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>内嵌型分隔线</h1>
                    <p>内嵌型分隔线用于分隔相关的内容，例如联系人列表中的一部分，或邮件中的对话。</p>
                    <p>内嵌型分隔线应该和锚元素（如头像或图标）一起使用，并和标题的参考线对齐。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-dividers-figure-caption-2" src="<?= static_url('../static/media/components/dividers/components_dividers_type3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-dividers-figure-caption-2">
                        <p>内嵌型分隔线示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-dividers-figure-caption-3" src="<?= static_url('../static/media/components/dividers/components_dividers_type4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-dividers-figure-caption-3">
                        <p>内嵌型分隔线示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>副标题和分隔线</h1>
                    <p>当分隔线和副标题一起使用时，把分隔线放在副标题上方，以加强副标题和内容的联系。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-dividers-figure-caption-4" src="<?= static_url('../static/media/components/dividers/components_dividers_type5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-dividers-figure-caption-4">
                        <p>副标题上的分隔线示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="types-of-dividers-figure-caption-5" src="<?= static_url('../static/media/components/dividers/components_dividers_type6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-dividers-figure-caption-5">
                        <p>副标题上的分割线示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dividers-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            规格
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
                    <p>分隔线有 1dp 的粗细，在亮色主题中为黑色并带有 12% 的不透明度，在暗色主题中为白色并带有 12% 的不透明度 。</p>
                    <p>分隔线沿着内容块的底部边缘放置，独立于网格。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 63.1578947368%">
                          <img alt="" aria-describedby="specs-figure-caption-0" src="<?= static_url('../static/media/components/dividers/components_dividers_specs.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-0">
                        <p>分隔线位于内容块的基线内。</p>
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
  <div class="gas-last-div-inner-bottom"></div>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>
