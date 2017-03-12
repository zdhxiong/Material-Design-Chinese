<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Material Design 中的物体与物理世界中的物体有很多相似的特性。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>在物理世界中，物体之间可以相互叠加和拼接，但是无法彼此交叉。物体也会投射出阴影，并且会反射光线。</p>
                <p>Material Design 中的物体也拥有这些特性，并以此构建出用户熟悉的空间模型，在不同应用之间也是如此。</p>
              </div>
              <div class="module">
                <h3><strong>海拔高度</strong></h3>
                <p>海拔高度是衡量从一个表面到另一个表面之间的距离，元素的海拔高度指明了元素与表面之间的距离以及阴影的深度。</p>
                <h3><strong>静止状态海拔高度</strong></h3>
                <p>所有元素都有一个静止状态的海拔高度。同一组件在不同应用中具有相同的海拔高度，但它们在不同的平台和不同的设备中可能有不同的海拔高度。</p>
                <h3><strong>动态海拔高度偏移</strong></h3>
                <p>动态海拔高度偏移是组件从静止状态向目标海拔移动的距离。</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/what_is_material_elevation_and_shadows.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../material-design/elevation-shadows.html#elevation-shadows-elevation-android" data-qp-ui-data-id="qp:1">海拔高度（Android）</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../material-design/elevation-shadows.html#elevation-shadows-shadows" data-qp-ui-data-id="qp:2">阴影</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../material-design/elevation-shadows.html#elevation-shadows-object-relationships" data-qp-ui-data-id="qp:3">物体关系</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="elevation-shadows-elevation-android" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            海拔高度（Android）
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
                    <p>海拔高度是相对深度或距离，是两个表面在 Z 轴上的距离。</p>
                    <p><strong>规格：</strong></p>
                    <ul class="lst-kix_ywnojxagdrrs-0 start">
                      <li>海拔高度的测量单位和 x 轴和 y 轴一样，通常是与密度无关的像素（dp）。因为材料元素有厚度（所有材料都是 1dp 的厚度），所以海拔高度被用来测量两个表面的顶部之间的距离。</li>
                      <li>一个子元素的海拔高度是相对其父元素而言的。</li>
                    </ul>
                    <p>这张图片和其中的海拔高度值是针对 Android 平台的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>不同海拔高度的两个物体</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>静止状态的海拔高度</h1>
                    <p>所有材料，无论尺寸多大，都有静止状态的海拔高度，或发生变化之前的默认高度。如果物体的海拔高度发生了变化，那么它会尽快回到静止状态海拔高度。</p>
                    <p>桌面端的静止状态的海拔高度比所列值低 2dp，以适应鼠标和非触控环境。</p>
                    <p><strong>组件的海拔高度：</strong></p>
                    <ul class="lst-kix_h2btshl9z56-0 start">
                      <li>同一组件在不用应用中，海拔高度相同。例如，不同应用中的浮动操作按钮的海拔高度都相同。</li>
                      <li>同一组件在不同的平台和设备中，可能会有不同的海拔高度，这主要取决于环境深度。比如说，电视具有比桌面更大的深度，因为它的屏幕更大，用户的观看距离更远。同样的，电视和桌面的深度比移动设备更深。</li>
                    </ul>
                    <p></p>
                    <h2>响应式海拔高度和动态海拔高度偏移</h2>
                    <p>某些类型的组件具有响应式的海拔高度，也就是说它们会根据用户的输入（例如，正常状态、聚焦、按下）和系统事件来改变自身的海拔。这些海拔高度的改变通常通过<strong>动态海拔高度偏移</strong>实现。</p>
                    <p>动态海拔高度偏移是组件从静止状态向目标状态移动的距离。它们确保在不同操作和组件类型下海拔高度的改变保持一致。例如，所有组件在被按下时，所增加的海拔高度是一样的。</p>
                    <p>一旦输入事件完成或取消，组件就会回到静止状态的海拔高度。</p>
                    <h2>避免海拔高度冲突</h2>
                    <p>有响应式海拔高度的组件，在静止状态和动态海拔高度偏移之间切换时，可能会穿透其他组件。<a href="../material-design/material-properties.html#material-properties-physical-properties">材料不能彼此穿透</a>，因此可以通过改变冲突组件的布局或整个应用的布局来避免这些冲突。</p>
                    <p>在组件级别上，组件可以在发生冲突之前移动或移除。例如，在用户拾起卡片前，浮动操作按钮可以消失或移动离开屏幕，或者在 snackbar 出现时进行移动。</p>
                    <p>在布局级别上，通过设计应用布局，来最大限度减少造成冲突的可能。例如，将浮动操作按钮定位在卡片流的一侧，这样当用户拾起一张卡片时，不会和浮动操作按钮造成冲突。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>海拔高度（dp）</p></td>
                        <td colspan="1" rowspan="1"><p>组件</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                        <td colspan="1" rowspan="1"><p>对话框</p><p>选择器</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                        <td colspan="1" rowspan="1">
                          <p>抽屉式导航</p>
                          <p>右侧抽屉</p>
                          <p>底部卡片模态框</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>浮动操作按钮（FAB - 按下状态）</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>9</p></td>
                        <td colspan="1" rowspan="1"><p>子菜单（为每个子菜单 +1dp）</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                        <td colspan="1" rowspan="1">
                          <p>底部导航栏</p>
                          <p>菜单</p>
                          <p>卡片（拾起时）</p>
                          <p>浮动按钮（按下状态）</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1">
                          <p>浮动操作按钮（FAB - 静止状态）</p>
                          <p>Snackbar</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>应用栏</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1">
                          <p>刷新指示器</p>
                          <p>快速入口/搜索栏（滚动状态）</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1">
                          <p>卡片（静止状态）*</p>
                          <p>浮动按钮（静止状态）*</p>
                          <p>快速入口/搜索栏（静止状态）</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                        <td colspan="1" rowspan="1"><p>开关</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <h1>组件海拔高度对比</h1>
                    <p>下图比较了组件的静止状态的海拔高度和动态海拔高度偏移。</p>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>在此图中，只有组件的海拔高度和组件的布局是准确的。其他尺寸和总体布局仅用于作图。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>包含卡片和浮动操作按钮的应用布局示例，以及 Z 轴海拔高度的剖面图。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>一个带有打开的抽屉式导航的应用布局示例，以及 Z 轴海拔高度的剖面图。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="elevation-shadows-shadows" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            阴影
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>阴影是一个重要的视觉提示，它表示了物体的深度和运动方向。它也是指示两个面之间的距离的唯一视觉元素。物体的海拔高度决定了阴影的外观。</p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>没有阴影，无法指示出浮动操作按钮和背景表面是分离的。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>锐利的阴影可以指示出浮动操作按钮和蓝色卡片是独立的元素。但上图中，它们的阴影太过相似，也就暗示了它们处于同一海拔高度。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>更柔和、更大的阴影表示浮动操作按钮的海拔高度高于蓝色卡片。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p>在运动中，阴影可以指示出物体的运动方向、表面之间的距离是增加还是减小。</p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>没有阴影指示海拔高度，就不清楚这个正方形是增加了大小还是增加了海拔高度。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>随着物体的海拔高度增加，阴影会变得更柔和、更大；随着物体海拔高度降低，阴影会变得更锐利、更小。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_shadow6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>在这个案例中，物体的阴影相同，表示物体正在改变形状，而不是改变海拔高度。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>组件的阴影标准</h1>
              <p>下列组件的阴影应该被作为标准使用。如果你在本文档中其他地方找到的组件阴影和以下规范不符，请以此为标准。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>应用栏</strong></p>
                    <p>4dp</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component06.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>应用栏示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>浮动按钮<br>
                      </strong>静止状态：2dp<br>
                      按下状态：8dp</p>
                    <p>仅适用于桌面端，浮动按钮可以有以下海拔高度：<br>
                      静止状态：0dp<br>
                      按下状态：2dp</p>
                    <p>更多信息详见<a href="../components/buttons.html##buttons-raised-buttons">浮动按钮</a></p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component02.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>浮动操作按钮（FAB）</strong></p>
                    <p>静止状态：6dp</p>
                    <p>按下状态：12dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component08.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>卡片</strong></p>
                    <p>静止状态：2dp</p>
                    <p>浮动状态：8dp</p>
                    <p>仅适用于桌面端，详见<a href="../components/cards.html#cards-content-blocks">内容块</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component03.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>菜单和子菜单</strong></p>
                    <p>菜单：8dp</p>
                    <p>子菜单：9dp（每个子菜单 +1dp）</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component09.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>对话框</strong></p>
                    <p>24dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component12.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>抽屉式导航 &amp; 右侧抽屉</strong></p>
                    <p>16dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component10.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>模态化底部卡片</strong></p>
                    <p>16dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component11.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>刷新指示器</strong></p>
                    <p>3dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component05.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>快速入口/搜索栏</strong></p>
                    <p>静止状态：2dp</p>
                    <p>滚动状态：3dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component04.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Snackbar</strong></p>
                    <p>6dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component07.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>开关</strong></p>
                    <p>1dp</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/material-design/elevation-shadows/whatismaterial_3d_elevation_component01.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="elevation-shadows-object-relationships" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            物体间的相互关系
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
                    <h1>物体层次结构</h1>
                    <p>你如何组织应用中的物体或物体集合，决定了它们相对于彼此如何移动。物体可以彼此独立移动，但也被更高层次的物体约束着。</p>
                    <p>所有物体都是根据父-子关系描述的层次结构中的一部分。这些关系中的 “子” 指的是从属于其 “父” 元素的元素。物体可以是系统或其他物体的子元素。</p>
                    <p>父-子细节：</p>
                    <ul class="lst-kix_vujeetwcvlnf-0 start">
                      <li>每一个物体都有其父元素。</li>
                      <li>每一个物体都可以有任意数量的子元素。</li>
                      <li>子元素会继承父元素的变换属性，如位置、旋转、缩放和海拔高度。</li>
                      <li>同级的物体在层次结构中属于同一层。</li>
                    </ul>
                    <h2><strong><strong>例外</strong></strong></h2>
                    <p>根元素（例如主要 UI 元素）可以独立移动。例如，浮动操作按钮不随内容滚动。其他元素包括：</p>
                    <ul class="lst-kix_q1k9qrwkv05c-0 start">
                      <li>应用的抽屉式导航</li>
                      <li>应用栏</li>
                      <li>对话框</li>
                    </ul>
                    <h2><strong><strong>交互</strong></strong></h2>
                    <p>物体之间如何交互，取决于它们在父-子层次结构中的位置。</p>
                    <p>例如：</p>
                    <ul class="lst-kix_lr0wngj8xi4f-0 start">
                      <li>子元素和它们的父元素的 Z 轴距离是最小的；其他物体不能在父元素和子元素之间插入。</li>
                      <li>在滚动的卡片集合中，卡片之间是同级关系，所以它们会一起滚动。卡片是卡片集合的子元素，卡片集合会控制着它们一起移动。</li>
                    </ul>
                    <h2><strong><strong>海拔高度</strong></strong></h2>
                    <p>如何确定物体的海拔高度 - 它们的 Z 轴位置 - 取决于要表达的内容的层次结构，以及它是否需要独立于其他物体进行移动。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/material-design/elevation-shadows/WhatIsMaterial_ObjectsIn3DSpace_ObjectRelationships_01_RaisedChildButton_001.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/elevation-shadows/WhatIsMaterial_ObjectsIn3DSpace_ObjectRelationships_01_RaisedChildButton_001.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>当父元素滚动时，浮动按钮（子元素）会跟着一起滚动。</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/material-design/elevation-shadows/WhatIsMaterial_ObjectsIn3DSpace_ObjectRelationships_02_FAB_001.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/elevation-shadows/WhatIsMaterial_ObjectsIn3DSpace_ObjectRelationships_02_FAB_001.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>当卡片集合滚动时，它内部的所有卡片都会跟着一起滚动。但是浮动操作按钮保持在原地，因为它的父元素没有滚动。</p>
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