<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p><strong>仅支持移动端</strong></p>
          <h1>手势包括<strong>触摸方法</strong>（手指在屏幕上做什么）和<strong>触摸动作</strong>（特定手势引发的结果）。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p><strong>触摸方法</strong>根据所处情境不同可能导致不同的结果。例如，<strong>长按</strong>可以选择像列表项之类的元素。</p>
                <p><strong>触摸动作</strong>可以通过组合多个触摸方法来实现。例如，用户可以使用捏放、双击或双击拖拽等触摸方法，来放大视图。</p>
              </div>
              <div class="module">
                <h3>拖拽、滑动和甩动的类型</h3>
                <p>滚动<br>
                  滚动时显示<br>
                  平移<br>
                  忽略<br>
                  滑动刷新<br>
                  边缘滑动<br>
                  翻页滑动<br>
                  滚动折叠<br>
                  菜单打开<br>
                  倾斜</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/patterns/gestures/patterns_gestures.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gestures.html#gestures-touch-mechanics" data-qp-ui-data-id="qp:1">触摸机制</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gestures.html#gestures-touch-activities" data-qp-ui-data-id="qp:2">触摸活动</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gestures.html#gestures-drag-swipe-or-fling-details" data-qp-ui-data-id="qp:3">拖拽、滑动和甩动细节</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="gestures-touch-mechanics" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            触摸机制
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
                    <p>触摸机制指的是用户的手指在屏幕上做了什么。</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-0" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-touch_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-0">
                        <p>触摸</p>
                        <p>单指按下，然后抬起</p>
                        <p><em>示例：选择</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-1" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-double-touch_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-1">
                        <p>触摸两下</p>
                        <p>单指按下，然后抬起，然后再按下，再抬起</p>
                        <p><em>示例：放大</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-2" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-swipe_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-2">
                        <p>拖拽、滑动或甩动</p>
                        <p>单指按下，然后移动，然后抬起</p>
                        <p><em>示例：忽略、滚动、快速滚动等</em></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-3" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-long-press_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-3">
                        <p>长按</p>
                        <p>单指按下，等待片刻，然后抬起</p>
                        <p><em>示例：选择一个元素，比如一个列表项</em></p>
                        <p>长按不能用于显示上下文菜单。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-4" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-long-press-drag_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-4">
                        <p>长按并拖拽</p>
                        <p>单指按下，等待片刻后移动手指，然后抬起</p>
                        <p><em>示例：选取并移动，选择多个项目</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-5" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchMechanics-6-Long-press-drag_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-5">
                        <p>触摸两下并拖拽</p>
                        <p>单指按下，然后抬起，然后再单指按下，然后移动，然后抬起</p>
                        <p><em>示例：放大、缩小</em></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-6" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-pinch-open_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-6">
                        <p>双指张开</p>
                        <p>双指按下，然后将手指分开，然后抬起</p>
                        <p><em>示例：放大</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-7" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-pinch-closed_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-7">
                        <p>双指捏合</p>
                        <p>双指按下，然后并拢，然后抬起</p>
                        <p><em>示例：缩小</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-8" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-two-finger-touch_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-8">
                        <p>双指触摸</p>
                        <p>双指按下，然后抬起</p>
                        <p><em>示例：缩小</em></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-9" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-two-finger-swipe_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-9">
                        <p>双指滑动、拖拽、甩动</p>
                        <p>双指按下、然后移动，然后抬起</p>
                        <p><em>示例：选择多个项目，然后平移，倾斜</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-10" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-two-finger-long-press_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-10">
                        <p>双指长按</p>
                        <p>双指按下，等待片刻后抬起</p>
                        <p><em>示例：无；这个手势不常用</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-11" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-two-finger-long-press-drag_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-11">
                        <p>双指长按并拖拽</p>
                        <p>双指按下，等待片刻，然后移动，然后抬起</p>
                        <p><em>示例：选取并移动</em></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-module col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-12" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-two-finger-double-touch_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-12">
                        <p>双指触摸两下</p>
                        <p>双指按下，然后抬起，然后再按下，再抬起</p>
                        <p><em>示例：缩小</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="touch-mechanics-figure-caption-13" src="<?php static_url('../static/media/patterns/gestures/patterns-gestures-gestures-rotate_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="touch-mechanics-figure-caption-13">
                        <p>旋转</p>
                        <p>双指按下，同时绕中心点旋转，然后抬起</p>
                        <p><em>示例：旋转内容，比如地图</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="gestures-touch-activities" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            触摸反应
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>特定情境中的特定手势及其结果。</p></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>操作</p></td>
                        <td colspan="1" rowspan="1"><p>说明</p></td>
                        <td colspan="1" rowspan="1"><p>触摸机制</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>激活</p></td>
                        <td colspan="1" rowspan="1"><p>激活界面中的元素，比如按钮</p></td>
                        <td colspan="1" rowspan="1"><p>触摸</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>取消或离开</p></td>
                        <td colspan="1" rowspan="1"><p>取消或离开当前任务，例如对话框或菜单</p></td>
                        <td colspan="1" rowspan="1"><p>触摸</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>启用/禁用灯光</p></td>
                        <td colspan="1" rowspan="1"><p>隐藏/显示视图中的操作栏</p></td>
                        <td colspan="1" rowspan="1"><p>触摸</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>拖拽、滑动或甩动</p></td>
                        <td colspan="1" rowspan="1"><p>参见下文的<strong>拖拽、滑动或甩动细节</strong>来了解滚动、滚动显示、平移、忽略、滑动刷新、边缘滑动、翻页滑动、滚动折叠、菜单打开以及倾斜之间的区别。</p></td>
                        <td colspan="1" rowspan="1"><p>拖拽、滑动或甩动</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>数据选择（没有选中项时）</p></td>
                        <td colspan="1" rowspan="1"><p>选择一个元素</p></td>
                        <td colspan="1" rowspan="1"><p>长按，双指触摸</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>数据选择（有选中项时）</p></td>
                        <td colspan="1" rowspan="1"><p>在编辑模式下选择更多元素<br><br>可以和随后的单指或双指手势进行任意组合</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>触摸，双指触摸</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>数据多选拖拽</p></td>
                        <td colspan="1" rowspan="1"><p>从手势触摸点开始显示选择框<br>
                          宽度和高度可以根据手指的位置进行调整。<br>
                          最终的选择项取决于手指抬起时选择框的范围。</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>双指滑动或拖拽，长按并拖拽（无选中项时）</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>选取并移动</p></td>
                        <td colspan="1" rowspan="1">
                          <p>作用于已选中的项目。可以用来：</p>
                          <ul class="lst-kix_87296p16xwc6-0 start">
                            <li>重新布局视图内的数据</li>
                            <li>将项目放到容器或目标上</li>
                            <li>调整列表或卡片集中的项目顺序</li>
                          </ul>
                        </td>
                        <td colspan="1" rowspan="1"><p>双指长按，在已选中项目上长按并拖拽</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>放大</p></td>
                        <td colspan="1" rowspan="1"><p>放大内容</p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_8qwygmagtvy0-0 start">
                            <li>触摸两下</li>
                            <li>触摸两下并拖拽（向下）</li>
                            <li>双指张开</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>放大到合适大小</p></td>
                        <td colspan="1" rowspan="1"><p>对于嵌套的视图，放大可访问的最小视图</p></td>
                        <td colspan="1" rowspan="1"><p>触摸两下</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>缩小</p></td>
                        <td colspan="1" rowspan="1"><p>缩小内容</p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_5tkx0uf52vs8-0 start">
                            <li>在最大视图时触摸两下</li>
                            <li>触摸两下并拖拽（向上）</li>
                            <li>双指捏合</li>
                            <li>双指触摸</li>
                            <li>双指触摸两下</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>展开</p></td>
                        <td colspan="1" rowspan="1"><p>展开收起的内容</p></td>
                        <td colspan="1" rowspan="1"><p>双指张开</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>收缩</p></td>
                        <td colspan="1" rowspan="1"><p>收起展开的内容</p></td>
                        <td colspan="1" rowspan="1"><p>双指捏合</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>旋转</p></td>
                        <td colspan="1" rowspan="1"><p>旋转目标内容</p></td>
                        <td colspan="1" rowspan="1"><p>旋转</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="gestures-drag-swipe-or-fling-details" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            拖拽、滑动和甩动细节
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
                  <div class="module"><p>滑动手势的功能因情境而异。手指移动的速度是拖拽、滑动和甩动之间最大的区别。</p>
                    <ul class="lst-kix_dqkz0dcg8yod-0 start">
                      <li><strong>拖拽</strong>：细致的手势、移动缓慢，但更有掌控感，通常有一个屏幕中的目标元素</li>
                      <li><strong>滑动</strong>：粗略的手势、移动快速，通常没有屏幕中的目标元素</li>
                      <li><strong>甩动</strong>：粗略的手势，没有屏幕中的目标元素</li>
                    </ul>
                    <p>手势速度会影响操作是否可立即撤销。</p>
                    <ul class="lst-kix_hdososeh0xki-0 start">
                      <li>滑动是否变成甩动，取决于结束速度、以及受影响的元素是否已经越过阀值（或超过了可以撤销操作的点）</li>
                      <li>拖拽操作会在移动期间和目标元素保持联系，所以反转手势方向，会把元素拖拽回临界点</li>
                      <li>甩动的速度更快，且会在元素越过临界点时与元素断开联系，防止操作被撤销</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3 h3-spacing">
                  <div class="module">
                    <h3>滚动</h3>
                    <p><strong>滚动</strong>是对内容主题在水平或垂直方向上的滑动。</p>
                    <p>用法</p>
                    <ul class="lst-kix_bgu778u1biv8-0 start">
                      <li>滚动的量取决于手势的速度：拖拽（慢） vs. 甩动（快）。</li>
                      <li>内容滚动的速度应该和手势速度保持一致。内容应该要有 “黏到” 手指或触摸设备上的感觉。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="drag-swipe-or-fling-details-figure-caption-0" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-02_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="drag-swipe-or-fling-details-figure-caption-0">
                        <p>滚动方向示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h3-spacing">
                  <div class="module">
                    <h3>滚动时显示</h3>
                    <p><strong>滚动时显示</strong>意味着在内容区域内反向滚动会显示应用内的隐藏元素。例如，在 Chrome 中向上滚动会出现地址栏。要隐藏这些元素，恢复原来的滚动方向即可。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="drag-swipe-or-fling-details-figure-caption-1" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-02_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="drag-swipe-or-fling-details-figure-caption-1">
                        <p>滚动方向示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h3-spacing">
                  <div class="module">
                    <h3>平移</h3>
                    <p><strong>平移</strong>是全方向的单指或双指手势，用来扩展视野。拖拽通常和平移同时使用。使用甩动时，内容会沿着甩动的方向以甩动的速度平移。</p>
                    <p>平移适用于：</p>
                    <ul class="lst-kix_dy48eaq34c2v-0 start">
                      <li>没有边界的内容（地图）</li>
                      <li>内容的尺寸超出了屏幕的宽度或高度（放大网页或图片时）</li>
                    </ul>
                    <p><strong>双指平移</strong>是从另一个双指手势过渡过来的（例如：双指缩放或旋转），例如在地图中。如果手势是以双指平移开始的，那么它就会导致<strong>倾斜</strong>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 151.111111111%">
                          <img alt="" aria-describedby="drag-swipe-or-fling-details-figure-caption-2" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-03_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="drag-swipe-or-fling-details-figure-caption-2">
                        <p>平移示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h3-spacing">
                  <div class="module">
                    <h3>忽略</h3>
                    <p><strong>忽略</strong>手势源自可滑动的元素，例如列表项或卡片，忽略方向和滚动方向垂直。</p>
                    <p>手势通常是水平的。</p>
                    <p>只有越过临界点后忽略操作才会被执行。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="drag-swipe-or-fling-details-figure-caption-3" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-04_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="drag-swipe-or-fling-details-figure-caption-3">
                        <p>忽略手势示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h3-spacing">
                  <div class="module">
                    <h3>滑动刷新</h3>
                    <p><strong>滑动刷新</strong>通常发生在一个垂直向下的拖拽中。通常在列表的顶部、卡片或其他容器的边缘（新内容的表面）起作用。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="drag-swipe-or-fling-details-figure-caption-4" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-05_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="drag-swipe-or-fling-details-figure-caption-4">
                        <p>滑动刷新手势示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h3-spacing">
                  <div class="module">
                    <h3>边缘滑动</h3>
                    <p><strong>边缘滑动</strong>手势从屏幕外侧开始，用于显示屏幕外的内容。边缘滑动会调用独立于当前视图的内容。</p>
                    <p>如果没有定义边缘滑动手势，边缘滑动默认为<strong>翻页滑动</strong>。</p>
                    <p>只有越过临界点后边缘滑动才会被执行。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="drag-swipe-or-fling-details-figure-caption-5" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-06_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="drag-swipe-or-fling-details-figure-caption-5">
                        <p>边缘滑动示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h3-spacing">
                  <div class="module">
                    <h3>翻页滑动</h3>
                    <p><strong>翻页滑动</strong>是在屏幕上，内容内部的滑动，用于显示屏幕之外的内容。每次翻页滑动都会切换一个页面、或一个选项卡。</p>
                    <p>如果页面内容缩放比例超过 &gt;100%，在内容内部滑动会<strong>平移</strong>到内容的边缘，到边缘后继续滑动就会<strong>翻页</strong>。</p>
                    <p>滑动翻页只有越过临界点后才会执行。</p>
                    <p>当页面内有个别元素可滑动时，不要使用滑动翻页手势。</p>
                    <p>参考下文：滚动折叠</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="drag-swipe-or-fling-details-figure-caption-6" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-07_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="drag-swipe-or-fling-details-figure-caption-6">
                        <p>滑动翻页示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h3-spacing">
                  <div class="module">
                    <h3>滚动折叠</h3>
                    <p><strong>滚动折叠</strong>通过在滚动的内容顶部或底部使用滑动翻页，来回到内容结构的上一级。</p>
                    <p>滚动折叠手势只有在越过临界点后才会执行。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="drag-swipe-or-fling-details-figure-caption-7" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-08_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="drag-swipe-or-fling-details-figure-caption-7">
                        <p>滚动折叠示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h3-spacing">
                  <div class="module">
                    <h3>菜单打开</h3>
                    <p>在菜单或选择器上拖拽会出现菜单。手指抬起后，高亮的菜单项会被选中。</p>
                    <p>菜单也可以通过触摸打开。</p>
                    <p>拖拽也可以用于<strong>菜单打开</strong>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="drag-swipe-or-fling-details-figure-caption-8" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-09_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="drag-swipe-or-fling-details-figure-caption-8">
                        <p>菜单打开拖拽示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h3-spacing">
                  <div class="module">
                    <h3>倾斜</h3>
                    <p><strong>倾斜</strong>会使 3D 内容向前或向后转动。</p>
                    <p>如果从另一个双指手势（如捏合或旋转）过渡而来，例如在地图中，会导致出现<strong>双指平移</strong>。</p>
                    <p>拖拽也可以用于<strong>倾斜</strong>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 75.5555555556%">
                          <img alt="" aria-describedby="drag-swipe-or-fling-details-figure-caption-9" src="<?php static_url('../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-10_large_xhdpi.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="drag-swipe-or-fling-details-figure-caption-9">
                        <p>倾斜示例</p>
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
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>