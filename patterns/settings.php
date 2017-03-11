<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>应用的设置功能可以让用户指定它们的偏好，以确定应用或服务应如何运作。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>把应用的设置放在应用导航的 “设置” 标签中。</p>
                <p>位于设置中的控件应该要能捕获用户偏好，并且是不经常访问的。它们应该影响大部分用户、或者为少数用户提供重要的功能设置。</p>
              </div>
              <div class="module">
                <h3><strong>位置</strong></h3>
                <p>侧边导航<br>
                  工具栏菜单</p>
                <h3><strong>设置组件</strong></h3>
                <p>标签<br>
                  辅助文本<br>
                  开关或复选框设置<br>
                  状态</p>
                <p><br>
                </p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/patterns/settings/patterns_settings.png'); ?>"/>
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
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/settings/patterns_settings_sidenav.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>抽屉栏中的设置</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/settings/patterns_settings_menu.png'); ?>"/>
                      </div>
                      <figcaption>
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
                    <p>用户应该要能快速了解所有可用的设置，以及它们的当前值。</p>
                    <p>如果有很多的设置，优先考虑那些用户可能最感兴趣的设置。不重要的设置可以进行分组，并移动到分组所在的屏幕。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/settings/patterns_settings_sliders.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>重要设置显示在列表顶部</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <h1><strong>选择合适的设置</strong></h1>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p><strong>位于设置中的控件：</strong></p>
                    <ul class="lst-kix_q432qzxjj523-0 start">
                      <li>能捕获用户偏好</li>
                      <li>不经常访问</li>
                      <li>被大多数用户使用</li>
                      <li>被少部分用户使用，但是为了满足它们的需求是比不可少的</li>
                    </ul>
                  </div>
                  <div class="module">
                    <p><strong>设置不应该：</strong></p>
                    <ul class="lst-kix_kc4xdncv287u-0 start">
                      <li>包含需要频繁访问的操作。（把这些操作移动到工具栏。）</li>
                      <li>包含应用的相关信息，例如版本号或授权信息。（这些信息应该移动到帮助界面。）</li>
                      <li>管理用户账户。（在应用的主要流程中显示这些操作，例如在侧边栏中。）</li>
                    </ul>
                  </div>
                </section>
              </div>
              <h1><strong>选择友好的默认值</strong></h1>
              <p>每个设置的初始值应该：</p>
              <ul class="lst-kix_d8bl19dm23x8-0 start">
                <li>是大部分用户会选择的默认值</li>
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>对于有大量列表的设置，请把它分组为多个短的列表。请根据应用中 “设置” 面板的设置总数进行排列。</p>
                    <p><strong>7 个及以下</strong><br>
                      不进行分组。</p>
                    <p><strong>9 到 10 个</strong><br>
                      按相关性进行分组，分到 1 到 2 个段落分隔符下。对于不能分组的设置：</p>
                    <ul class="lst-kix_mql6zxpm6v48-0 start">
                      <li>如果是重要的，请在顶部列出它们，而不使用段落分隔符。</li>
                      <li>否则，按重要性排序，将它们列在底部，名为 “其他” 的段落分隔符下面。</li>
                    </ul>
                    <p><strong>11 到 15 个</strong><br>
                      按相关性进行分组，分到 2 到 4 个段落分隔符下。将两组相关设置合并为一个单独的设置。</p>
                    <p>例如，包含复选框的两组相关的设置可以合并成一组多选设置。</p>
                    <p><strong>16 个及以上</strong><br>
                      在子屏幕下分成 4 组或更多组相关设置。使用一致的术语，确保子屏幕的标题和打开它的设置的标签相匹配。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/settings/patterns_settings_subscreen2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>中断的分组设置</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/settings/patterns_settings_subscreen3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>相关设置分组显示在子屏幕下</p>
                      </figcaption>
                    </figure>
                  </div>
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
              <p>使你的标签简短、有意义。</p>
              <p>标签应该：</p>
              <ul class="lst-kix_4f21i2rnb8w1-0 start">
                <li>只使用每一个标签的第一个名词，及专有名词。</li>
                <li>将标签中最重要的文字放在最前面。</li>
                <li>将诸如 “不要” 或 “从不” 之类的否定词改为中性词，例如 “阻止”。</li>
                <li>使用诸如 “通知” 等客观标签，而不要用 “通知我” 这类主观标签。例外：如果必须要提到用户才能理解设置，使用第二人称（你），而不是第一人称（我）。</li>
              </ul>
              <p>标签应避免：</p>
              <ul class="lst-kix_wok8mls19v7j-0 start">
                <li>通用术语，例如：设置、更改、编辑、修改、管理、使用、选择</li>
                <li>在段落分隔符或子屏幕标题中重复文本</li>
                <li>使用技术术语，除非你的目标受众已经广泛理解这些术语</li>
              </ul>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>辅助文本</h1>
                    <p>辅助文本是可选的。如果标签本身已经足够表达意思了，就不要再添加辅助文本描述。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>通知</strong><br>
                      显示通知</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>避免在辅助文本中重复标签中的词。</p>
                    </figcaption>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>开关或复选框设置</strong></p>
                    <p>需要准确描述的设置可以在设置标签下添加单行描述。描述应该：</p>
                    <ul class="lst-kix_g4ajoa9uzxc8-0 start">
                      <li>传达当设置启用时，会发生什么</li>
                      <li>使用尚未出现在标签中的词</li>
                    </ul>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>启用 NFC</strong><br>
                      当手机靠近其他设备时，允许进行数据交换</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>描述应该使用动词作为开头。</p>
                    </figcaption>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>需要更长解释的设置，可以在子屏幕中添加描述。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/settings/settings_switch1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>在标签下方，显示开关的状态文本 “开” 或 “关”。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/settings/settings_switch2.png'); ?>"/>
                      </div>
                      <figcaption>
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
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>屏幕超时</strong><br>
                      调整屏幕自动关闭前的时间</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                      <p><strong>触摸时震动</strong></p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>使用触觉反馈</strong></p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>指示在合适场景中的特定细节的状态。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>睡眠</strong><br>
                      10 分钟无活动后</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>屏幕超时</strong><br>
                      调整屏幕自动关闭前的时间</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>使用可以准确描述设置的关键词。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>屏幕锁</strong><br>
                      图形</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>如果用户尚未设置屏幕锁，辅助文本应显示 “无”。</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>更改屏幕锁</strong><br>
                      更改或禁用图案、PIN、或安全密码</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption><br></figcaption>
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
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>NFC</strong><br>
                      使用近场通信读取或交换标签</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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