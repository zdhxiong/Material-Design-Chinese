<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>菜单在一个短暂出现的材料上显示一列选项。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>用户单击按钮、操作图标或其他控件可以打开菜单。菜单上显示一系列的选项，每行显示一个选项。</p>
                <p>如果不适用于特定的页面内容，菜单项可能被禁用。与页面内容相关的菜单将根据当前应用状态动态改变可用的菜单项。</p>
              </div>
              <div class="module">
                <h3>类型</h3>
                <p>简单菜单（移动端和平板端）<br>
                  级联菜单（桌面端）</p>
                <h3>海拔高度</h3>
                <p>菜单出现在其他应用内元素的上方。</p>
                <h3>行为</h3>
                <p>可滚动</p>
                <h3>替代方案</h3>
                <p><a href="dialogs.html#dialogs-simple-menus">简单对话框</a></p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/components/menus/components_menus.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="menus.html#menus-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="menus.html#menus-menu-items" data-qp-ui-data-id="qp:2">菜单项</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="menus.html#menus-behavior" data-qp-ui-data-id="qp:3">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="menus.html#menus-simple-menus" data-qp-ui-data-id="qp:4">简单菜单</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="menus.html#menus-specs" data-qp-ui-data-id="qp:5">规格</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="menus-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>菜单是一片临时的材料，由按钮、操作图标、指示器或其他控件触发。它至少包含两个菜单项。</p>
                    <p>每一个菜单项都由一个独立的选项或操作组成，它可以影响应用、视图、或视图中的选定元素。</p>
                    <p>菜单不应该用作应用中主要的导航方法。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?php static_url('../static/media/components/menus/components_menus_usage1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p>应用栏中的操作按钮会触发菜单。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?php static_url('../static/media/components/menus/components_menus_usage2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p>此操作触发的菜单包含 5 个菜单项： “Refresh” ， “Settings” ， “Send feedback” ， “Help” 和 “Sign out” 。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>菜单标签</h2>
                    <p>按钮或控件的标签应该简明、准确的反映出菜单中的菜单项。菜单栏通常使用一个单词作为标签，像 “文件” 、 “格式” 、 “编辑” 和 “视图” 。其他内容可能会有更长的标签。</p>
                    <h2>禁用的菜单项</h2>
                    <p>菜单显示一组一致的菜单项。每个菜单项可以基于应用的当前状态来启用或禁用。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 66.3157894737%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?php static_url('../static/media/components/menus/components_menus_usage3do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>标题 “视图” 准确地描述了其包含的菜单项的统一特性。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 66.3157894737%">
                          <img alt="" aria-describedby="usage-figure-caption-3" src="<?php static_url('../static/media/components/menus/components_menus_usage3dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>标题 “Stuff” 不是描述性的，无法帮助用户预测他们将在 “Stuff” 菜单中找到什么菜单项。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>上下文菜单</h2>
                    <p>上下文菜单能够根据应用的当前状态动态的改变可用的菜单项。</p>
                    <ul class="lst-kix_jjy9e6u0ee5q-0 start">
                      <li>与当前上下文无关的菜单项可以被<strong>移除</strong>.</li>
                      <li>相关的但需要满足特定条件才能使用的菜单项可以被<strong>禁用</strong>。例如， “复制” 选项可以在选中文本后才启用。</li>
                    </ul>
                    <p><strong>单个菜单项状态</strong></p>
                    <p>一些应用状态会导致上下文菜单只含一个菜单项。例如，当选中网页上的文本时，Android 只显示 “复制” 菜单项，因为用户不能剪切或粘贴文本。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 172.5%">
                          <img alt="" src="<?php static_url('../static/media/components/menus/components_menus_usage4a.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 172.5%">
                          <img alt="" aria-describedby="usage-figure-caption-4" src="<?php static_url('../static/media/components/menus/components_menus_usage4b.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-4">
                        <p>上下文菜单</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>菜单可以滚动</h2>
                    <p>如果菜单的高度不足以显示所有的菜单项，那么菜单可以内部滚动。一个典型的例子是在手机横屏状态下查看菜单。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 103.421052632%">
                          <img alt="" aria-describedby="usage-figure-caption-5" src="<?php static_url('../static/media/components/menus/components_menus_usage6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-5">
                        <p>内部滚动菜单</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>级联菜单（仅适用于桌面端）</h2>
                    <p>对于级联菜单，根据其与屏幕边缘的距离，垂直和水平地定位菜单。</p>
                    <p>开发人员注释：此组件的实现可能因平台而异。通过使用标准平台实现，您将收到任何相关的进一步改进。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 103.421052632%">
                          <img alt="" aria-describedby="usage-figure-caption-6" src="<?php static_url('../static/media/components/menus/components_menus_usage7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-6">
                        <p>桌面端的级联菜单</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1480px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 75.0%">
                          <video aria-describedby="usage-figure-caption-7" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/menus/components-menus-menus-cascading_dropdown_spec_large_xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/menus/components-menus-menus-cascading_dropdown_spec_large_xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-7"><p></p>
                        <p>桌面端的级联下拉菜单</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 111.666666667%">
                          <video aria-describedby="usage-figure-caption-8" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/components/menus/Components-Menus-Usage-Textfield_Dropdown_xhdpi_006.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/menus/Components-Menus-Usage-Textfield_Dropdown_xhdpi_006.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-8">
                        <p>下拉菜单</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="usage-figure-caption-9" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/components/menus/Component-Menus-Usage_Appbar_Dropdown_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/components/menus/Component-Menus-Usage_Appbar_Dropdown_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-9"><p></p>
                        <p>应用栏弹出菜单</p>
                      </figcaption>
                    </figure>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="menus-menu-items" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            菜单项
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module"><h2>单行显示</h2>
                    <p>每一个菜单项都只能使用单行文本（一个单词或短语）来描述被选中时执行的操作。</p>
                    <p>菜单项还可以包括：</p>
                    <ul class="lst-kix_pplbnwc7wnp5-0 start">
                      <li>图标和帮助文本，比如快捷键。</li>
                      <li>像复选标记之类的控件来标识多选条目或状态（详见<a href="lists-controls.html">列表控件</a>）</li>
                    </ul>
                    <h2>菜单排序</h2>
                    <p>带有<strong>静态内容</strong>的菜单应该在菜单的顶部放置最常用的菜单项。</p>
                    <p>带有<strong>动态内容</strong>的菜单可能具有其他行为，例如在菜单的顶部放置之前使用过的字体。顺序可以根据用户的操作而改变。</p>
                    <h2>菜单嵌套</h2>
                    <p>菜单项可以显示嵌套的子菜单。最好只嵌套一层，因为导航多级嵌套的子菜单会比较困难。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 108.684210526%">
                          <img alt="" aria-describedby="menu-items-figure-caption-0" src="<?php static_url('../static/media/components/menus/components_menus_items1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="menu-items-figure-caption-0">
                        <p>菜单项示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>禁用菜单项</h2>
                    <p>将菜单项禁用，而不是移除，这样可以让用户知道在正确的条件下它们是可用的。</p>
                    <p>例如，当没有东西可以恢复时，“恢复”菜单项是禁用的。在内容被选中之前， “剪切” 和 “复制” 菜单项是禁用的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="menu-items-figure-caption-1" src="<?php static_url('../static/media/components/menus/components_menus_items2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="menu-items-figure-caption-1">
                        <p>禁用菜单项示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="menus-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            行为
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module"><h1>位置</h1>
                    <p>菜单出现在所有其他应用内部的 UI 元素上面。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 50.5263157895%">
                          <img alt="" aria-describedby="behavior-figure-caption-0" src="<?php static_url('../static/media/components/menus/components_menus_behavior1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p>菜单出现在所有其他应用内部的 UI 元素上面的示例。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>菜单显示在触发它的元素的位置，当前选中的菜单项显示在触发它的元素的顶部。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 62.1052631579%">
                          <img alt="" aria-describedby="behavior-figure-caption-1" src="<?php static_url('../static/media/components/menus/components_menus_behavior2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>当前选中的菜单项出现在触发它的元素上面。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>不要重复显示已选中的菜单项。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 62.1052631579%">
                          <img alt="" aria-describedby="behavior-figure-caption-2" src="<?php static_url('../static/media/components/menus/components_menus_behavior3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要重复显示已选中的菜单项。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>菜单不要放在触发它的元素的下面。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 62.1052631579%">
                          <img alt="" aria-describedby="behavior-figure-caption-3" src="<?php static_url('../static/media/components/menus/components_menus_behavior4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>菜单不要放在触发它的元素的下面。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>关闭菜单</h1>
                    <p>触摸菜单外部或触发菜单的元素可以关闭菜单。</p>
                    <p>选择了一个菜单项后也应该关闭菜单。一个例外是当菜单允许选择多个项目时，例如通过使用复选标识。</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="menus-simple-menus" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            简单菜单
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h2>移动端或平板端</h2>
              <p>在列表中使用简单菜单显示特定列表项的选项。</p>
              <h2>垂直对齐</h2>
              <p>当靠近屏幕边缘时，简单菜单垂直对齐，使所有菜单项完全可见。</p>
              <p><strong>消除歧义：</strong>与简单菜单相反，<a href="dialogs.html#dialogs-simple-dialogs">简单对话框</a>可以呈现与可用列表项相关的附加细节，或提供与主要任务相关的导航或正交操作。尽管它们可以显示相同的内容，但是简单菜单比简单对话框更好，因为简单菜单对用户的当前上下文干扰较小。</p>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module"><h2>选择选项</h2>
                    <p>选择一个选项将立即提交该选项并关闭菜单。</p>
                    <h2>取消选择</h2>
                    <p>触摸菜单外部，或按下系统后退按钮，会取消操作并关闭菜单。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 84.2105263158%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-0" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-0">
                        <p>简单菜单示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>当简单菜单打开时，会尝试将当前选定的菜单项与列表项垂直对齐。当前选定的菜单项将高亮显示。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 84.2105263158%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-1" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-1">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>当前选择的菜单项在列表项上垂直对齐。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 84.2105263158%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-2" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-2">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>当前选择的菜单项在列表项上垂直对齐。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>不要随意地把第一个菜单项置于列表项上。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 84.2105263158%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-3" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus5.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>第一个菜单项被随意地放在了列表项上，而不管当前选择的菜单项。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>当靠近屏幕边缘时，简单菜单会重新定位进行垂直对齐，以使所有菜单项完全可见。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 84.2105263158%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-4" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-4">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>当前选择的菜单项通常位于列表项之上，但是在这种情况下，这样做会导致菜单的一部分出现在屏幕外面，所以整个菜单被垂直地重新定位。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>简单菜单出现在触发它的元素上，而不是下面。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 34.7368421053%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-5" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus6.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-5">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>简单菜单出现在触发它的元素上。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 38.6842105263%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-6" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus7.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-6">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>简单菜单不会出现在触发它的元素下面。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>菜单宽度取决于字符串长度，在移动设备上定义为 56dp 单位的倍数。</p>
                    <p>简单菜单通常和屏幕的左右边缘保持 16dp（手机）或 24dp（平板）的距离。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-7" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus8.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-7">
                        <p>简单菜单具有 16dp 的外边距。</p>
                        <p>每个单位的宽是 56dp。</p>
                        <p>移动设备上最小宽度 = 2 * 56dp = 112dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-8" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus9.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-8">
                        <p>简单菜单左右均有 16dp 的外边距。</p>
                        <p>每个单位的宽是 56dp。</p>
                        <p>在移动设备上的最大宽度（纵向和横向） = 5 * 56dp = 280dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>如果简单菜单中的文本需要换行，请改用<a href="dialogs.html#dialogs-simple-dialogs">简单对话框</a>。简单对话框可以有不同高度的行。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-9" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus10.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-9">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>如果简单菜单中的任意文本产生了换行，请改用简单对话框。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-10" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus11.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-10">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要在简单菜单中截断文本。使用简单对话框代替。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>在内容可以滚动时，菜单会显示一个持续显示的滚动条。</p>
                    <p>简单菜单的最大高度应该比视图高度低一行或多行。这确保了在简单菜单外面留出一部分可点击区域，用于关闭菜单。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-11" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus12.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-11">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>默认显示可滚动内容的滚动条。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-12" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus13.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-12">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>没有滚动条，就不清楚是否有其他菜单项可用。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>不要重复显示菜单项。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-13" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus14.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-13">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>每个菜单项只出现一次。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-14" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus15.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-14">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要重复显示菜单项。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>简单菜单始终与列表项文本的开头左对齐，且不会基于触摸位置重新水平定位。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 29.4736842105%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-15" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus16.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-15">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>简单菜单左对齐，无论触摸位置如何。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 29.4736842105%">
                          <img alt="" aria-describedby="simple-menus-figure-caption-16" src="<?php static_url('../static/media/components/menus/components_dialogs_simplemenus17.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="simple-menus-figure-caption-16">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>简单菜单不根据触摸位置重新定位。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="menus-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            规格
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>规范提供了不同平台上，不同大小及不同菜单类型的尺寸标准。在菜单顶部和底部添加 8dp 的内边距。</p>
              <p>菜单的字体样式由 <a href="../style/typography.html">Material 排版比例</a> 来决定。</p>
              <p>默认情况下，菜单使用：16sp（移动设备上），15sp（桌面端）<br>
                 密集型界面上使用：14sp（移动设备上），13sp（桌面端）</p>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>手机端</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 50.5263157895%">
                          <img alt="" aria-describedby="specs-figure-caption-0" src="<?php static_url('../static/media/components/menus/components_menus_specs1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-0">
                        <p>菜单项高度：48dp<br>
                        菜单项文本左侧内边距：16dp<br>
                        菜单项文本底部内边距：20dp<br>
                        顶部内边距：8dp<br>
                        底部内边距：8dp<br>
                        字体排版：16sp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>不同宽度</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 76.3157894737%">
                          <img alt="" aria-describedby="specs-figure-caption-1" src="<?php static_url('../static/media/components/menus/components_menus_specs2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-1">
                        <p>不同宽度的菜单：最小宽度 1.5x，3x，6x 和 7x</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module"><h1>桌面端</h1></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 50.5263157895%">
                          <img alt="" aria-describedby="specs-figure-caption-2" src="<?php static_url('../static/media/components/menus/components_menus_specs1-desktop.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-2"><p><strong>默认的桌面端菜单<br>
                          </strong>菜单项高度：32px<br>
                          菜单项文本左侧内边距：24px<br>
                          顶部内边距：8px<br>
                          底部内边距：8px<br>
                          字体排版：15px</p></figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 50.5263157895%">
                          <img alt="" aria-describedby="specs-figure-caption-3" src="<?php static_url('../static/media/components/menus/components_menus_specs1-desktop-dense.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-3"><p><strong>密集型桌面端菜单<br>
                          </strong>菜单项高度：24px<br>
                          菜单项文本左侧内边距：24px<br>
                          顶部内边距：4px<br>
                          底部内边距：4px<br>
                          字体排版：13px</p></figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>级联菜单</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 87.3684210526%">
                          <img alt="" aria-describedby="specs-figure-caption-4" src="<?php static_url('../static/media/components/menus/components_menus_specs3.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-4">
                        <p>桌面端的级联菜单</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>级联菜单的红线标注</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 92.8947368421%">
                          <img alt="" aria-describedby="specs-figure-caption-5" src="<?php static_url('../static/media/components/menus/components_menus_specs4.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="specs-figure-caption-5">
                        <p>级联菜单顶部内边距：16px<br>
                        级联菜单左侧内边距：24px<br>
                        级联菜单项高度：32px<br>
                        菜单项图标右侧内边距：32px<br>
                        子菜单项左侧内边距：64px<br>
                        字体排版：15px<br>
                        密集型级联菜单可以使用 13px 的字体排版</p>
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