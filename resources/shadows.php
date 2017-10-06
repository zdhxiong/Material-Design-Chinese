<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">
      <div class="article-content chapter-intro">
        <div>
          <p>阴影提供了关于材料深度和运动方向的重要视觉线索。材料的海拔高度决定了阴影的外观。有关 Material Design 中视图的海拔高度和阴影的说明，请参阅设计指南中的 <a href="../material-design/elevation-shadows.html#elevation-shadows-shadows">阴影和海拔高度</a>。</p>
          <p>Android 和 Polymer 中关于阴影的开发文档：</p>
          <p></p>
          <p>
            <div class="modulettes">
              <a class="modulette container android" href="https://developer.android.com/training/material/shadows-clipping.html" target="_blank">
                <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/android.svg'); ?>">
                  <div class="info">
                    <div class="title">定义阴影和裁剪视图</div>
                  </div>
                </img>
              </a>
            </div>
          阴影由父元素进行绘制和裁剪
          </p>
          <p>
            <div class="modulettes">
              <a class="modulette container polymer" href="https://docs-05-dot-polymer-project.appspot.com/0.5/docs/elements/paper-shadow.html" target="_blank">
                <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/polymer.svg'); ?>">
                  <div class="info">
                    <div class="title">纸片阴影</div>
                  </div>
                </img>
              </a>
            </div>
          在两个层次中创建阴影，以创造一个比较逼真的效果
          </p>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="shadows.html#shadows-sketch" data-qp-ui-data-id="qp:1">Sketch</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="shadows.html#shadows-illustrator" data-qp-ui-data-id="qp:2">Illustrator</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="shadows.html#shadows-photoshop" data-qp-ui-data-id="qp:3">Photoshop</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="shadows-sketch" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Sketch
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>Sketch 材料的海拔高度</h1>
                    <p>右侧表格是用于 Sketch 的阴影值列表。</p>
                    <div class="modulettes">
                      <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/resources/shadows/shadows.sketch'); ?>" title="Shadows in Sketch">
                        <img alt="" class="icon download-icon" src="<?php static_url('../static/spec/images/callouts/download.svg'); ?>">
                          <div class="info">
                            <div class="title">Sketch 中的阴影</div>
                            <span class="subtitle">0.07 MB (.sketch) </span>
                          </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="module">

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="4" rowspan="1"><p><strong>1dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="2" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>本影</p></td>
                        <td colspan="1" rowspan="1"><p>半影</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="4" rowspan="1"><p><strong>2dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="2" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>本影</p></td>
                        <td colspan="1" rowspan="1"><p>半影</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>5</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="4" rowspan="1"><p><strong>3dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="2" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>本影</p></td>
                        <td colspan="1" rowspan="1"><p>半影</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="4" rowspan="1"><p><strong>4dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="2" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>本影</p></td>
                        <td colspan="1" rowspan="1"><p>半影</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>5</p></td>
                        <td colspan="1" rowspan="1"><p>10</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="4" rowspan="1"><p><strong>6dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="2" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>本影</p></td>
                        <td colspan="1" rowspan="1"><p>半影</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>10</p></td>
                        <td colspan="1" rowspan="1"><p>18</p></td>
                        <td colspan="1" rowspan="1"><p>5</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="4" rowspan="1"><p><strong>8dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="2" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>本影</p></td>
                        <td colspan="1" rowspan="1"><p>半影</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>10</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>15</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="4" rowspan="1"><p><strong>9dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="2" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>本影</p></td>
                        <td colspan="1" rowspan="1"><p>半影</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>9</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>5</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="4" rowspan="1"><p><strong>12dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="2" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>本影</p></td>
                        <td colspan="1" rowspan="1"><p>半影</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>5</p></td>
                        <td colspan="1" rowspan="1"><p>7</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>17</p></td>
                        <td colspan="1" rowspan="1"><p>22</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="4" rowspan="1"><p><strong>16dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="2" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>本影</p></td>
                        <td colspan="1" rowspan="1"><p>半影</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                        <td colspan="1" rowspan="1"><p>30</p></td>
                        <td colspan="1" rowspan="1"><p>10</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1"><p>5</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="4" rowspan="1"><p><strong>24dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="2" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>本影</p></td>
                        <td colspan="1" rowspan="1"><p>半影</p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>14</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>24</p></td>
                        <td colspan="1" rowspan="1"><p>9</p></td>
                        <td colspan="1" rowspan="1"><p>11</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>38</p></td>
                        <td colspan="1" rowspan="1"><p>46</p></td>
                        <td colspan="1" rowspan="1"><p>15</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      </tbody>
                    </table>

                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="shadows-illustrator" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Illustrator
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module"><h1>Illustrator 材料的海拔高度</h1>
                    <p>右侧表格是用于 Illustrator 的阴影值列表。</p>
                    <div class="modulettes">
                      <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/resources/shadows/shadows.ai'); ?>" title="Shadows in Illustrator">
                        <img alt="" class="icon download-icon" src="<?php static_url('../static/spec/images/callouts/download.svg'); ?>">
                          <div class="info">
                            <div class="title">Illustrator 中的阴影</div>
                            <span class="subtitle">1.65 MB (.ai) </span>
                          </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="module">

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>1dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>26%</p></td>
                        <td colspan="1" rowspan="1"><p>8%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>.92</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>.5</p></td>
                        <td colspan="1" rowspan="1"><p>.67</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>2dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>26%</p></td>
                        <td colspan="1" rowspan="1"><p>8%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>1.83</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                        <td colspan="1" rowspan="1"><p>1.33</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>3dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>26%</p></td>
                        <td colspan="1" rowspan="1"><p>8%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>2.75</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>1.5</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>4dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>26%</p></td>
                        <td colspan="1" rowspan="1"><p>8%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>3.67</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1"><p>2.67</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>6dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>26%</p></td>
                        <td colspan="1" rowspan="1"><p>8%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>5.5</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>8dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>26%</p></td>
                        <td colspan="1" rowspan="1"><p>8%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>7.33</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                        <td colspan="1" rowspan="1"><p>5.33</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>9dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>26%</p></td>
                        <td colspan="1" rowspan="1"><p>8%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>8.25</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>4.5</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>12dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>26%</p></td>
                        <td colspan="1" rowspan="1"><p>8%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>11</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>16dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>26%</p></td>
                        <td colspan="1" rowspan="1"><p>8%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>14.67</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                        <td colspan="1" rowspan="1"><p>10.67</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>24dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>26%</p></td>
                        <td colspan="1" rowspan="1"><p>8%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>X：</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Y：</p></td>
                        <td colspan="1" rowspan="1"><p>22</p></td>
                        <td colspan="1" rowspan="1"><p>0</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>模糊：</p></td>
                        <td colspan="1" rowspan="1"><p>12</p></td>
                        <td colspan="1" rowspan="1"><p>16</p></td>
                      </tr>
                      </tbody>
                    </table>

                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="shadows-photoshop" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Photoshop
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>Photoshop 材料的海拔高度</h1>
                    <p>右侧表格是用于 Photoshop 的阴影值列表。</p>
                    <div class="modulettes">
                      <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/resources/shadows/shadows.psd'); ?>" title="Shadows in Photoshop">
                        <img alt="" class="icon download-icon" src="<?php static_url('../static/spec/images/callouts/download.svg'); ?>">
                          <div class="info">
                            <div class="title">Photoshop 中的阴影</div>
                            <span class="subtitle">1.09 MB (.psd) </span>
                          </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="module">

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>1dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>24%</p></td>
                        <td colspan="1" rowspan="1"><p>16%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>角度：</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>距离：</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>尺寸：</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>2dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>24%</p></td>
                        <td colspan="1" rowspan="1"><p>16%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>角度：</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>距离：</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                        <td colspan="1" rowspan="1"><p>1</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>尺寸：</p></td>
                        <td colspan="1" rowspan="1"><p>5</p></td>
                        <td colspan="1" rowspan="1"><p>7</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>3dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>24%</p></td>
                        <td colspan="1" rowspan="1"><p>16%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>角度：</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>距离：</p></td>
                        <td colspan="1" rowspan="1"><p>5</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>尺寸：</p></td>
                        <td colspan="1" rowspan="1"><p>7</p></td>
                        <td colspan="1" rowspan="1"><p>10</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>4dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>24%</p></td>
                        <td colspan="1" rowspan="1"><p>16%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>角度：</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>距离：</p></td>
                        <td colspan="1" rowspan="1"><p>7</p></td>
                        <td colspan="1" rowspan="1"><p>3</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>尺寸：</p></td>
                        <td colspan="1" rowspan="1"><p>10</p></td>
                        <td colspan="1" rowspan="1"><p>13</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>6dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>24%</p></td>
                        <td colspan="1" rowspan="1"><p>16%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>角度：</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>距离：</p></td>
                        <td colspan="1" rowspan="1"><p>10</p></td>
                        <td colspan="1" rowspan="1"><p>4</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>尺寸：</p></td>
                        <td colspan="1" rowspan="1"><p>15</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>8dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>24%</p></td>
                        <td colspan="1" rowspan="1"><p>16%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>角度：</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>距离：</p></td>
                        <td colspan="1" rowspan="1"><p>13</p></td>
                        <td colspan="1" rowspan="1"><p>5</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>尺寸：</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                        <td colspan="1" rowspan="1"><p>27</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>9dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>24%</p></td>
                        <td colspan="1" rowspan="1"><p>16%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>角度：</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>距离：</p></td>
                        <td colspan="1" rowspan="1"><p>18</p></td>
                        <td colspan="1" rowspan="1"><p>9</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>尺寸：</p></td>
                        <td colspan="1" rowspan="1"><p>27</p></td>
                        <td colspan="1" rowspan="1"><p>36</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>12dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>24%</p></td>
                        <td colspan="1" rowspan="1"><p>16%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>角度：</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>距离：</p></td>
                        <td colspan="1" rowspan="1"><p>20</p></td>
                        <td colspan="1" rowspan="1"><p>8</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>尺寸：</p></td>
                        <td colspan="1" rowspan="1"><p>30</p></td>
                        <td colspan="1" rowspan="1"><p>41</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>16dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>24%</p></td>
                        <td colspan="1" rowspan="1"><p>16%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>角度：</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>距离：</p></td>
                        <td colspan="1" rowspan="1"><p>28</p></td>
                        <td colspan="1" rowspan="1"><p>11</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>尺寸：</p></td>
                        <td colspan="1" rowspan="1"><p>40</p></td>
                        <td colspan="1" rowspan="1"><p>53</p></td>
                      </tr>
                      </tbody>
                    </table>

                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="3" rowspan="1"><p><strong>24dp 海拔高度</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>主阴影</p></td>
                        <td colspan="1" rowspan="1"><p>环境阴影</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不透明度：</p></td>
                        <td colspan="1" rowspan="1"><p>24%</p></td>
                        <td colspan="1" rowspan="1"><p>16%</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>角度：</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                        <td colspan="1" rowspan="1"><p>90</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>距离：</p></td>
                        <td colspan="1" rowspan="1"><p>39</p></td>
                        <td colspan="1" rowspan="1"><p>15</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>扩展：</p></td>
                        <td colspan="1" rowspan="1"><p>6</p></td>
                        <td colspan="1" rowspan="1"><p>2</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>尺寸：</p></td>
                        <td colspan="1" rowspan="1"><p>60</p></td>
                        <td colspan="1" rowspan="1"><p>81</p></td>
                      </tr>
                      </tbody>
                    </table>

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