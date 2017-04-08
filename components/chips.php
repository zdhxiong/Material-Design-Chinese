<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div><p>纸片是一种小块的用来呈现复杂实体的块，比如联系人。</p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module"><p>纸片可以包含一张照片、文本、一个图标、或者一个联系人。</p>
                <p><strong>联系人纸片</strong>可以以一种紧凑的方式展现联系人信息。</p>
              </div>
              <div class="module">
                <h3>行为</h3>
                <ul class="lst-kix_jqjmyzcsxhkd-0 start">
                  <li>选择一个纸片，以打开一个完整的详细信息视图。</li>
                  <li>如果纸片包含了删除图标，则可以被删除。</li>
                </ul>
                <h3>规格</h3>
                <ul class="lst-kix_spr3tzkz6gly-0 start">
                  <li>高度：32dp</li>
                  <li>标签：13sp Roboto Regular, 87% black</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/chips/components_chips.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="chips.html#chips-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="chips.html#chips-behavior" data-qp-ui-data-id="qp:2">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="chips.html#chips-contact-chips" data-qp-ui-data-id="qp:3">联系人纸片</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="chips.html#chips-specs" data-qp-ui-data-id="qp:4">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="chips-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            用法
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>纸片可以包含照片、短文本、和简短的信息。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>纸片类型</h1>
                    <p>纸片可用于多种类型的实体，包括自由格式的文本、预定义文本、或联系人。纸片也可以包含图标。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 55.5555555556%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?php static_url('../static/media/components/chips/components_acux_chips_chiptxt.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>含文本的纸片</p>
                        <p><strong>纸片标签</strong></p>
                        <ul class="lst-kix_1wuhlm83l87s-0 start">
                          <li>13sp Roboto Regular</li>
                          <li>87% black</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 55.5555555556%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?php static_url('../static/media/components/chips/components_acux_chips_chipstxticon.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p>含文本和图标的纸片</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="chips-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            行为
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><h1>打开纸片</h1>
              <p>触摸纸片打开完整的详细信息视图（在卡片中或全屏）、或打开与该纸片相关的菜单。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>删除纸片</h1>
                    <p>纸片可以是可删除的或不可删除的。如果是可删除的，显示删除图标。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 20.0%">
                          <video aria-describedby="behavior-figure-caption-1" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/components/chips/components_acux_chips_deleting.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/chips/components_acux_chips_deleting.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>用户可以点击删除图标、或者按键盘上的 “Delete” 键来删除纸片。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="chips-contact-chips" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            联系人纸片
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
                    <p>可以使用联系人纸片来以一种紧凑的方式展现用户的联系人信息。当用户在输入框（通常是 “To” 字段）中输入一个联系人的名字时，联系人纸片会被触发，并显示联系人的地址以供用户进行选择。联系人纸片可以直接被添加到文本框中。</p>
                    <p>联系人纸片主要用于帮助用户准确高效地选择收件人。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="contact-chips-figure-caption-1" src="<?php static_url('../static/media/components/chips/components_chips_contact1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="contact-chips-figure-caption-1">
                        <p>用户在联系人纸片上确认邮件接收者的姓名。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="contact-chips-figure-caption-2" src="<?php static_url('../static/media/components/chips/components_chips_contact2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="contact-chips-figure-caption-2">
                        <p>用户在联系人纸片确认选择哪个邮件地址。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 145.526315789%">
                          <img alt="" aria-describedby="contact-chips-figure-caption-3" src="<?php static_url('../static/media/components/chips/components_chips_contact3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="contact-chips-figure-caption-3">
                        <p>联系人纸片有多种不同的状态：正常、聚焦、按下、和激活。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="chips-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>单行纸片</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 37.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-1" src="<?php static_url('../static/media/components/chips/components_acux_chips_deletable_rl.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-1">
                        <p><strong>可删除纸片</strong></p>
                        <p>高度：32dp<br>
                          标签左侧内边距：12dp</p>
                        <p><strong>删除图标</strong></p>
                        <p>尺寸：24dp x 24dp<br>
                          颜色和不透明度：54% black<br>
                          外边距：4dp</p>
                        <p>在桌面端。 “删除” 图标是一直显示着的。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 37.7777777778%">
                          <img alt="" aria-describedby="specs-figure-caption-2" src="<?php static_url('../static/media/components/chips/components_acux_chips_nondeletecontact_rl.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-2">
                        <p><strong>不可删除的纸片</strong></p>
                        <p>高度：32dp<br>
                          标签左右内边距：12dp</p>
                        <p><strong>联系人纸片</strong></p>
                        <p>高度：32dp<br>
                          标签左侧内边距：8dp<br>
                          标签右侧内边距：12dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>联系人纸片</h1>
                    <h2><strong><strong>关闭状态的联系人纸片</strong></strong></h2>
                    <ul class="lst-kix_kvbtu6ue51j9-0 start">
                      <li>联系人名称文本：Roboto Regular 14sp.</li>
                      <li>聚焦后，纸片的海拔高度会上升到 2dp。按下时，它会展开以显示联系人的其他地址。</li>
                    </ul>
                    <h2><strong><strong>打开状态的联系人纸片</strong></strong></h2>
                    <ul class="lst-kix_kt2fh1r11a8a-0 start">
                      <li>联系人名称文本：Roboto Regular 16sp</li>
                      <li>地址文本：Roboto Regular 14sp</li>
                      <li>打开状态的联系人纸片的海拔高度为 8dp。</li>
                      <li>按下时，联系人纸片会自动关闭。</li>
                      <li>默认状态下，顶部的条目会处于激活并聚焦状态。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 13.3333333333%">
                          <img alt="" aria-describedby="specs-figure-caption-3" src="<?php static_url('../static/media/components/chips/components_chips_contact_keyline1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-3">
                        <p>联系人纸片</p>
                        <p>高度：32dp<br>
                          标题顶部、底部、左侧内边距：8dp<br>
                          标题右侧内边距：12dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 60.0%">
                          <img alt="" aria-describedby="specs-figure-caption-4" src="<?php static_url('../static/media/components/chips/components_chips_contact_keyline2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-4">
                        <p>聚焦和激活状态的联系人纸片</p>
                        <p>高度：40dp<br>
                          顶部和底部内边距：16dp</p>
                        <p><strong>未聚焦状态的联系人纸片</strong></p>
                        <p>顶部和底部内边距：20dp</p>
                        <p></p>
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