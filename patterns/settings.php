<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>应用的设置功能可以让用户指定它们的偏好，以确定应用或服务应如何运作。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>应用的设置位于应用导航的 “设置” 标签中。</p>
                <p>设置控件应该要能捕获用户偏好。显示的设置项应该要能影响大部分用户、或者为少数用户提供重要的功能设置。</p>
              </div>
              <div class="module">
                <h3>位置</h3>
                <p>侧边导航<br>
                  工具栏菜单</p>
                <h3>设置组件</h3>
                <p>标签<br>
                  辅助文本<br>
                  开关或复选框设置<br>
                  状态</p>
                <p><br>
                </p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/patterns/settings/patterns_settings.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="settings.html#settings-placement" data-qp-ui-data-id="qp:1">位置</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="settings.html#settings-usage" data-qp-ui-data-id="qp:2">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="settings.html#settings-grouping-settings" data-qp-ui-data-id="qp:3">分组设置</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="settings.html#settings-labels-secondary-text" data-qp-ui-data-id="qp:4">标签和辅助文本</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="settings.html#settings-writing-guidelines" data-qp-ui-data-id="qp:5">书写指南</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="settings-placement" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            位置
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>应用的所有设置项都应该可以通过 “设置” 标签访问到。不要使用 “选项” 或 “偏好” 等同义词。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>侧边导航</strong></p>
                    <p>如果存在侧边导航，例如抽屉式导航，在所有其他选项（帮助和反馈除外）的下面添加 “设置”。</p>
                    <p><strong>不含导航的应用</strong></p>
                    <p>放在工具栏菜单的所有其他选项下面（帮助和反馈除外）。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="placement-figure-caption-0" src="<?= static_url('../static/media/patterns/settings/patterns_settings_sidenav.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="placement-figure-caption-0">
                        <p>抽屉栏中的设置</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="placement-figure-caption-1" src="<?= static_url('../static/media/patterns/settings/patterns_settings_menu.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="placement-figure-caption-1">
                        <p>工具栏菜单中的设置</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="settings-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            用法
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>设置应该是经过精心组织、可预测的，并含有一定数量的选项。</p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>提供概述</strong></p>
                    <p>要使用户能迅速看到最重要的或使用最频繁的设置项，以及它们的当前值。</p>
                    <p>如果有很多的设置，优先考虑那些用户可能最感兴趣的设置。不重要的设置可以进行分组，并移动到分组所在的界面。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.361111111%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?= static_url('../static/media/patterns/settings/patterns-settings-sound.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>重要设置显示在列表顶部</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <h1>选择合适的设置</h1>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p><strong>设置应该：</strong></p>
                    <ul class="lst-kix_q432qzxjj523-0 start">
                      <li>保存用户偏好</li>
                      <li>不经常访问</li>
                      <li>被大多数用户使用</li>
                      <li>被少部分用户使用，但是为了满足它们的需求是必不可少的</li>
                    </ul>
                  </div>
                  <div class="module">
                    <p><strong>设置不应该：</strong></p>
                    <ul class="lst-kix_kc4xdncv287u-0 start">
                      <li>被频繁访问（把频繁访问的操作放到工具栏）</li>
                      <li>包含应用的相关信息，例如版本号或授权信息。（这些信息应该移动到帮助界面）</li>
                      <li>管理用户账户（在应用的主要流程中显示这些操作，例如在侧边栏中）</li>
                    </ul>
                  </div>
                </section>
              </div>
              <h1>选择友好的默认值</h1>
              <p>设置的默认值应该：</p>
              <ul class="lst-kix_d8bl19dm23x8-0 start">
                <li>是大部分用户会选择的值</li>
                <li>是中性的，尽量不要产生风险</li>
                <li>使用较少的电量或移动数据流量</li>
                <li>只有在重要时才中断</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="settings-grouping-settings" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            分组设置
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
                    <p>显示最重要或频繁使用的设置。</p>
                    <h2>分隔线</h2>
                    <p>使用分隔线把相关的设置分组到一起。避免在每个单独的设置之间使用分隔线。</p>
                    <h2>分组标题（可选）</h2>
                    <p>分组后的设置可以包含标题。分组标题应该是具体的，避免使用含糊不清的名字，如 “其他” 或 “杂项”。</p>
                    <h2>15+ 设置项</h2>
                    <p>相关设置最好分组在子菜单下。使用统一的术语：设置项的文本需要和子菜单的标题匹配。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.361111111%">
                          <img alt="" aria-describedby="grouping-settings-figure-caption-0" src="<?= static_url('../static/media/patterns/settings/patterns-settings-languages.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="grouping-settings-figure-caption-0">
                        <p>语言和输入法的分组设置</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="settings-labels-secondary-text" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            标签和辅助文本
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>标签</h1>
              <p>使你的标签简短、有意义。有需要的话，标签可以是多行的。</p>
              <p>标签应该：</p>
              <ul class="lst-kix_4f21i2rnb8w1-0 start">
                <li>只把专有名词及标签的第一个字母大写</li>
                <li>用最重要的文本开头</li>
                <li>避免使用诸如 “不要” 或 “从不” 之类的否定词，改用诸如 “阻止” 之类的中性词</li>
                <li>使用诸如 “通知” 等客观的文本，而不要用 “通知我” 这类主观的文本（例外：如果必须要提到用户才能让用户理解设置，则使用第二人称（你），而不是第一人称（我））</li>
              </ul>
              <p>标签应避免：</p>
              <ul class="lst-kix_wok8mls19v7j-0 start">
                <li>通用术语，例如：设置、更改、编辑、修改、管理、使用、选择</li>
                <li>在段落中使用重复的文本</li>
                <li>使用技术术语，除非你的目标受众已经广泛理解这些术语</li>
              </ul>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>对齐方式</strong></p>
                    <p>所有标签都应与标题的左边缘对齐。这使外观看起来更简单、更统一。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 85.0%">
                          <img alt="" aria-describedby="labels-secondary-text-figure-caption-0" src="<?= static_url('../static/media/patterns/settings/settings-switch3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="labels-secondary-text-figure-caption-0">
                        <p>标签和标题对齐</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>辅助文本（可选）</h1>
                    <p>辅助文本可以帮助用户更好地理解设置的当前状态。如果标签本身表达地足够清楚了，则不用添加辅助文本。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 85.0%">
                          <img alt="" aria-describedby="labels-secondary-text-figure-caption-1" src="<?= static_url('../static/media/patterns/settings/settings-switch4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="labels-secondary-text-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>避免在辅助文本中重复标签中的文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>开关或复选框设置</strong></p>
                    <p>需要准确描述的开关或复选框设置可以在设置标签下添加单行描述。描述应该：</p>
                    <ul class="lst-kix_g4ajoa9uzxc8-0 start">
                      <li>传达有关设置状态的信息</li>
                      <li>指明当设置启用时，会发生什么</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.361111111%">
                          <img alt="" aria-describedby="labels-secondary-text-figure-caption-2" src="<?= static_url('../static/media/patterns/settings/settings-switch5.png'); ?>" loading="lazy">
                        </div>
                      </div>
                      <figcaption id="labels-secondary-text-figure-caption-2">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>用动词开始描述。</p></figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 24.3055555556%">
                          <img alt="" aria-describedby="labels-secondary-text-figure-caption-3" src="<?= static_url('../static/media/patterns/settings/settings-switch6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="labels-secondary-text-figure-caption-3">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>解释设置的当前状态。</p></figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>需要更长的文本进行解释的设置，可以在子屏幕中添加描述。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="labels-secondary-text-figure-caption-4" src="<?= static_url('../static/media/patterns/settings/settings-switch1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="labels-secondary-text-figure-caption-4">
                        <p>在标签下方，显示开关的状态文本 “开” 或 “关”。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="labels-secondary-text-figure-caption-5" src="<?= static_url('../static/media/patterns/settings/settings-switch2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="labels-secondary-text-figure-caption-5">
                        <p>将开关本身和更长的描述添加到子屏幕。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>所有其他设置</strong></p>
                    <p>对于非开关设置，辅助文本应仅显示当前的设置状态。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>睡眠</strong><br>
                      10 分钟无活动后</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                    <figcaption>
                      <p>辅助文本传达了设置的当前状态。</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>屏幕超时</strong><br>
                      调整屏幕自动关闭前的时间</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                    <figcaption>
                      <p>避免描述设置。应该显示设置的状态。</p>
                    </figcaption>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="settings-writing-guidelines" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            书写指南
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>直接和易于理解。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>点击时震动</strong></p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>使用触觉反馈</strong></p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>指示在合适场景中的特定细节的状态。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>无线热点 & 移动热点<br></strong>
                      无线热点启用</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>无线热点 & 移动热点<br></strong>
                      通过移动数据连接向其他设备提供网络</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>当没有更好的替代品时，使用熟悉的缩略语。传达如何以及为什么存在一个不熟悉的设置。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>NFC</strong><br>
                      当手机靠近另一个设备时，允许进行数据交换</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>NFC</strong><br>
                      使用近场通信读取或交换标签</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
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
