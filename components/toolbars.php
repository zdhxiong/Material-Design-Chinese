<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>工具栏显示在受其操作影响的视图上方。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>工具栏会在受其影响的内容上方显示一个层阶。工具栏可以约束自己的宽度以容纳穿过工具栏的内容。</p>
                <p>不要用别的材料把工具栏的操作分隔开，除非它只是暂时显示的，例如菜单和对话框。</p>
              </div>
              <div class="module">
                <h3>海拔高度</h3>
                <p>在应用内容之上</p>
                <h3>滚动</h3>
                <p>受影响的内容会在工具栏下滚动。</p>
                <h3>忽略的内容</h3>
                <p>移动屏幕时，可能会有元素暂时覆盖工具栏。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/components/toolbars/components_toolbars.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="toolbars.html#toolbars-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="toolbars-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            用法
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p></p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>工具栏在受其操作影响的材料上方显示一个层阶。当材料在工具栏下方滚动时，工具栏会被限制在固定位置。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?= static_url('../static/media/components/toolbars/layout_principles_papercraft_toolbars4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>工具栏在其他材料上方显示一个层阶。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>其他材料在滚动时可以覆盖工具栏。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?= static_url('../static/media/components/toolbars/layout_principles_papercraft_toolbars6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>工具栏会保持和其他材料的接缝，直到工具栏离开屏幕。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>最后，第二个材料在滚动时也可以覆盖工具栏。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?= static_url('../static/media/components/toolbars/layout_principles_papercraft_toolbars7.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p>第二个材料在滚动时也可以覆盖工具栏。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>工具栏的左右两侧的操作不会被其他材料分隔开，除了如菜单和对话框之类的临时材料。</p>
                    <p>相反，工具栏会限制它们的宽度，以便为在其上经过的材料腾出空间。工具栏上的左右两侧的操作会始终保持在那一侧。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-3" src="<?= static_url('../static/media/components/toolbars/layout_principles_papercraft_toolbars2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-3">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>将工具栏的宽度限制为小于页面的宽度。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 52.7777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-4" src="<?= static_url('../static/media/components/toolbars/layout_principles_papercraft_toolbars3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-4">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>切勿让一个材料被另一个持久显示的材料分隔开。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>工具栏可以和其他材料共用一个接缝。</p>
                    <p>在某些情况下，接缝可以转换为层阶，这种变形称为<strong>瀑布</strong>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="usage-figure-caption-5" src="<?= static_url('../static/media/components/toolbars/layout_principles_papercraft_toolbars5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-5">
                        <p>在瀑布变形中，工具栏开始显示接缝，然后提升形成一个层阶。</p>
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
