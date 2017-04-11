<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>有些单位在不同的情境下有不同的含义。本章讨论与设备无关的像素、可缩放像素以及像素密度等概念的用法。</h1>
        </div>
      </div>


      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="units-measurements.html#units-measurements-pixel-density" data-qp-ui-data-id="qp:1">像素密度</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="units-measurements.html#units-measurements-density-independent-pixels-dp" data-qp-ui-data-id="qp:2">与密度无关的像素（dp）</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="units-measurements.html#units-measurements-scaleable-pixels-sp" data-qp-ui-data-id="qp:3">可缩放像素（sp）</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="units-measurements.html#units-measurements-designing-layouts-for-dp" data-qp-ui-data-id="qp:4">为 dp 设计布局</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="units-measurements.html#units-measurements-image-scaling" data-qp-ui-data-id="qp:5">图片缩放</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="units-measurements-pixel-density" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            像素密度
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>每英寸所包含的像素数量被称为 “像素密度” 。高密度的屏幕每英寸拥有的像素数量比低密度的要多。所以 UI 元素（比如按钮）在低密度的屏幕上看起来更大，而在高密度的屏幕上看起来更小。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>屏幕分辨率则是屏幕内的像素总数。</p>
                    <p><strong>屏幕密度 = 以像素为单位的屏幕宽度（或高度） / 以英寸为单位的屏幕宽度（或高度）</strong></p>
                    <h4 class="related">相关资源</h4>
                    <div class="modulettes">
                      <a class="modulette container android" href="http://developer.android.com/guide/practices/screens_support.html" target="_blank">
                        <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/android.svg'); ?>">
                        <div class="info">
                          <div class="title">支持多种屏幕</div>
                          <span class="subtitle">为不同屏幕密度的设备优化设计</span>
                        </div>
                        </img>
                      </a>
                    </div>
                    <div class="modulettes">
                      <a class="modulette container android" href="http://developer.android.com/guide/topics/resources/more-resources.html#Dimension" target="_blank">
                        <img alt="" class="icon callout-icon" src="<?php static_url('../static/spec/images/callouts/android.svg'); ?>">
                        <div class="info">
                          <div class="title">更多资源类型</div>
                          <span class="subtitle">Android 支持的度量单位。</span>
                        </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 68.4210526316%">
                          <img alt="" aria-describedby="pixel-density-figure-caption-1" src="<?php static_url('../static/media/layout/units-measurements/layout_units_density1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="pixel-density-figure-caption-1">
                        <p><br>
                        高密度屏幕</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 68.4210526316%">
                          <img alt="" aria-describedby="pixel-density-figure-caption-2" src="<?php static_url('../static/media/layout/units-measurements/layout_units_density2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption>
                        <p><br>
                        低密度屏幕</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="units-measurements-density-independent-pixels-dp" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            与密度无关的像素（dp）
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
                    <p>"与密度无关"指在不同密度的屏幕上显示相同的 UI 元素。</p>
                    <p>与密度无关的像素（发音为 “dips” ）是一个灵活的单位，可以在任何屏幕上缩放到统一尺寸。开发 Android 应用时，使用 dp 在不同密度的屏幕上显示相同的元素。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 68.4210526316%">
                          <img alt="" src="<?php static_url('../static/media/layout/units-measurements/layout_units_dp.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>1dp 等于密度为 160 的屏幕上的 1 个物理像素。dp 的计算方式为：</p>
                    <p><strong>dp = （以像素为单位的宽度 * 160） / 屏幕密度</strong></p>
                    <p>编写 CSS 时，不用管 dp 或 sp，统一使用 px，dp 只在 Android 开发时使用。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>屏幕密度</p></td>
                        <td colspan="1" rowspan="1"><p>以像素为单位的屏幕宽度</p></td>
                        <td colspan="1" rowspan="1"><p>以与密度无关的像素为单位的屏幕宽度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>120</p></td>
                        <td colspan="1" rowspan="1"><p>180 px</p></td>
                        <td colspan="1" rowspan="3"><p>240 dp</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>160</p></td>
                        <td colspan="1" rowspan="1"><p>240 px</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>240</p></td>
                        <td colspan="1" rowspan="1"><p>360 px</p></td>
                      </tr>
                      </tbody>
                    </table>
                    <p>如果你有 3 个 1.5 英寸宽的设备，即使屏幕密度不同，屏幕的宽度始终是 240dp。</p>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="units-measurements-scaleable-pixels-sp" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            可缩放像素（sp）
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>在进行 Android 开发时，可缩放像素（sp）和 dp 功能一样，但仅用在字体上。1sp 的默认值和 1dp 一样。</p>
              <p>sp 和 dp 的主要区别是 sp 保留了用户的字体设置。在辅助功能中设置了大号字体的用户会看到和他们的设置相匹配的字体大小。</p>
            </div>
          </div>
        </div>

        <div id="units-measurements-designing-layouts-for-dp" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            为 dp 设计布局
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>为屏幕设计布局时，使用 dp 来计算元素的尺寸：</p>
              <p><strong>dp = （以像素为单位的宽度 * 160） / 像素密度</strong></p>
              <p>例如，32 x 32 px 的图标在 320 像素密度的屏幕上，等同于 16 x 16 dp。</p>
            </div>
          </div>
        </div>

        <div id="units-measurements-image-scaling" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            图片缩放
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
                    <p>通过使用以下比率，可以使图片在不同分辨率的屏幕上看起来一样：</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p><strong>屏幕分辨率</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>dpi</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>像素比例</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>图片尺寸（像素）</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>xxxhdpi</p></td>
                        <td colspan="1" rowspan="1"><p>640</p></td>
                        <td colspan="1" rowspan="1"><p>4.0</p></td>
                        <td colspan="1" rowspan="1"><p>400 x 400</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>xxhdpi</p></td>
                        <td colspan="1" rowspan="1"><p>480</p></td>
                        <td colspan="1" rowspan="1"><p>3.0</p></td>
                        <td colspan="1" rowspan="1"><p>300 x 300</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>xhdpi</p></td>
                        <td colspan="1" rowspan="1"><p>320</p></td>
                        <td colspan="1" rowspan="1"><p>2.0</p></td>
                        <td colspan="1" rowspan="1"><p>200 x 200</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>hdpi</p></td>
                        <td colspan="1" rowspan="1"><p>240</p></td>
                        <td colspan="1" rowspan="1"><p>1.5</p></td>
                        <td colspan="1" rowspan="1"><p>150 x 150</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>mdpi</p></td>
                        <td colspan="1" rowspan="1"><p>160</p></td>
                        <td colspan="1" rowspan="1"><p>1.0</p></td>
                        <td colspan="1" rowspan="1"><p>100 x 100</p></td>
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