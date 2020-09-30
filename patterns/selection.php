<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>“选择” 使用户可以通过手势或视觉提示进行选择</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p><strong>复选框</strong>表示完成，例如选中列表中的项目。</p>
                <p><strong>文本选择</strong>由一段高亮的文本来表示。</p>
              </div>
              <div class="module">
                <h3>选择的类型</h3>
                <p>项目选择<br>
                  文本选择</p>
                <h3>选择的手势</h3>
                <ul class="lst-kix_hgumxa1xlv11-0 start">
                  <li>在一个位置长按、触摸或按下鼠标，并保持一会儿</li>
                  <li>双指触摸（仅限触摸设备）</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/patterns/selection/patterns_selection.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection.html#selection-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection.html#selection-item-selection" data-qp-ui-data-id="qp:2">项目选择</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="selection.html#selection-text-selection" data-qp-ui-data-id="qp:3">文本选择</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="selection-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            用法
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><h1>选择的手势</h1>
              <p>用于选择数据的全局手势是，在同一位置长按、触摸或按下鼠标，并保持一会儿。在触摸设备上，双指触摸也可以触发选择。</p>
              <h1>复选框（建议用于桌面端）</h1>
              <p>复选框、或自定义的类似组件，应该仅用于表示完成任务，例如选中列表中的项目。</p>
              <p>复选框行为：</p>
              <ul class="lst-kix_p8vg2qw8sw46-0 start">
                <li>将鼠标悬停到某个项目上时，为那个项目显示一个复选框</li>
                <li>选中一个项目后，显示该项目集合中所有其他项目的复选框</li>
              </ul>
              <p>避免把复选框作为项目的一部分持续显示。</p>
            </div>
          </div>
        </div>

        <div id="selection-item-selection" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            项目选择
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>项目选择允许用户将操作应用到选中的项目上。</p>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>选择项目</h1>
                    <p>在触摸设备上，可以通过长按选择一个项目。</p>
                    <p>要退出选择模式，请取消所有选择的项目，或在工具栏中对已选择的项目执行操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1080px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="item-selection-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_entering1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_entering1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="item-selection-figure-caption-0">
                        <p>在触摸设备上，通过长按选择一个项目。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>打开和关闭选择</h1>
                    <p>通过点击一个项目，使该项目在选中和未选中状态之间切换。</p>
                    <p>通过长按并拖动光标，来选择多个项目。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1080px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="item-selection-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_controlling1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_controlling1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="item-selection-figure-caption-1">
                        <p>选中一个项目后，点击该项目即可切换其选中状态。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1080px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="item-selection-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_controlling2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_controlling2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="item-selection-figure-caption-2">
                        <p>用户可以长按并拖动光标来选择多个项目。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>桌面端</strong></p>
                    <p>要在桌面端切换选中状态，可以将鼠标悬停在某个项目上，以显示可以单击的复选标记。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 76.3157894737%">
                          <video aria-describedby="item-selection-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_controlling_desktop_click.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_controlling_desktop_click.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="item-selection-figure-caption-3">
                        <p>在桌面设备上，用户可以通过点击来选择多个项目。</p></figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>指示选择</h1>
                    <p>要指示一个项目已被选中，请显示一个与该项目或该项目的头像重叠的复选标记和透明遮罩。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1080px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="item-selection-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_indicating1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_indicating1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="item-selection-figure-caption-4">
                        <p>如果图标或头像和项目内容是分隔开的，那么在选中后可以用复选标记替换图标和头像。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1080px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 177.777777778%">
                          <video aria-describedby="item-selection-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_indicating2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/selection/patterns_selection_item_indicating2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="item-selection-figure-caption-5">
                        <p>使用紧凑型复选标记来减少对显示内容的遮盖。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p>.</p>
            </div>
          </div>
        </div>

        <div id="selection-text-selection" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            文本选择
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>通过高亮一段文字来指示文本选择。</p>
              <p>在移动设备上，会在选中的文字的开头和结尾各加上一个选择手柄。和文本相关的操作会显示在一个下拉菜单中，该下拉菜单会紧挨着文本上方，但不会和文本重叠。</p>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module"><h1>调整所选文本</h1>
                    <p>用户可以通过以下方式来调整选中的文本：</p>
                    <ul class="lst-kix_t3epjq3awayd-0 start">
                      <li>拖动刚刚被选中的文本来展开它</li>
                      <li>拖动其中一个选择手柄来展开或缩小选择</li>
                      <li>在选中的文本内重复触摸（或点击）来展开它（选择将在单词、段落和全文之间切换）</li>
                      <li>键盘快捷键（见表格）</li>
                    </ul>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>键盘快捷键</p></td>
                        <td colspan="1" rowspan="1"><p>结果</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Shift+左/右方向键</p></td>
                        <td colspan="1" rowspan="1"><p>逐字选择</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Shift+上/下方向键</p></td>
                        <td colspan="1" rowspan="1"><p>逐行选择</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Ctrl/Command+A</p></td>
                        <td colspan="1" rowspan="1"><p>全选</p></td>
                      </tr>
                      </tbody>
                    </table>
                    <p>文本选择快捷键可用于更改选择范围。</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2><strong>文本选择手柄</strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-selection-figure-caption-0" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text01.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-selection-figure-caption-0">
                        <p>文本选择手柄示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-selection-figure-caption-1" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text02.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-selection-figure-caption-1">
                        <p>文本选择手柄示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>颜色和对比度</h2>
                    <p>文本选择元素可以使用<a href="../style/color.html">调色板</a>中应用的强调色。</p>
                    <p>选中的文本应清晰易读，与背景颜色对比明显。或者，可以通过显示轮廓、文本解释、动画、或复选标记来指示选中的文本。</p>
                    <p>在<a href="http://webaim.org" target="_blank">webaim.org</a>了解更多有关对比度（或<a href="http://webaim.org/resources/contrastchecker/" target="_blank">颜色对比度检查器</a>）的信息。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 58.8888888889%">
                          <img alt="" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text_color1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <ol class="lst-kix_xdqkwleg2gie-0 start" start="1">
                        <li>文本选择的颜色</li>
                        <li>文本</li>
                        <li>背景</li>
                      </ol>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 122.5%">
                          <img alt="" aria-describedby="text-selection-figure-caption-2" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text_color2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-selection-figure-caption-2">
                        <p>文本选择可使用调色板中的强调色进行自定义。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>文本选择 - 亮色主题</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 27.8947368421%">
                          <img alt="" aria-describedby="text-selection-figure-caption-3" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text03.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-selection-figure-caption-3">
                        <p>文本选择 – 亮色主题</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>文本选择 – 暗色主题</h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 27.8947368421%">
                          <img alt="" aria-describedby="text-selection-figure-caption-4" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text04.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-selection-figure-caption-4">
                        <p>文本选择 – 暗色主题</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>文本选择工具栏</h1>
                    <p>浮动工具栏出现在选择区域的上方，包含剪切、复制、粘贴及更多主要操作。当用户选择更多图标时，工具栏将折叠并转换为弹出菜单来显示其他操作。</p>
                    <p>浮动工具栏文本的字体为 Roboto Medium 14sp，全部大写。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-selection-figure-caption-5" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text05.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-selection-figure-caption-5">
                        <p>选择区域上方的工具栏菜单，显示剪切、复制、粘贴和更多操作。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-selection-figure-caption-6" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text07.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-selection-figure-caption-6">
                        <p>更多</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-selection-figure-caption-7" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text06.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-selection-figure-caption-7">
                        <p>当用户选择更多时，菜单开始转换，以显示弹出菜单项。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="text-selection-figure-caption-8" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text08.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-selection-figure-caption-8">
                        <p>弹出菜单项包括：分享、搜索和翻译</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 43.8888888889%">
                          <img alt="" aria-describedby="text-selection-figure-caption-9" src="<?= static_url('../static/media/patterns/selection/patterns_selection_text09.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="text-selection-figure-caption-9">
                        <p>文本选择</p>
                        <p>工具栏菜单高度：44dp<br>
                          工具栏菜单文本顶部边距：12dp<br>
                          工具栏菜单文本底部边距：14dp<br>
                          工具栏菜单文本左侧边距：24dp<br>
                          <br>
                          工具栏菜单中的菜单项文本之间的间距：32dp<br>
                          菜单和选中的文本之间的间距：8dp</p>
                        <p>扩展图标右边距：16dp</p>
                        <p>扩展图标左边距：22dp<br>
                          扩展图标上下边距：10dp<br>
                          文本选择的手柄：22 x 22 dp</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
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
