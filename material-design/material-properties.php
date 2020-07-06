<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>材料自身有一些固定的特性和行为。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>了解材料的这些特性，会有助于你用一种和 Material Design 的构想更一致的方式来使用材料。</p>
              </div>
              <div class="module">
                <h3>材料的特性</h3>
                <p>固体的<br>
                  在空间中占据一个独一无二的位置<br>
                  不可穿透<br>
                  形状可变<br>
                  仅允许沿着当前所在平面改变大小<br>
                  坚硬的<br>
                  可以添加到其他材料中<br>
                  可以独立、分割和复原<br>
                  可以被创建和销毁<br>
                  可以在任何轴上移动</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/material-design/material-properties/what_is_material_material_properties.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../material-design/material-properties.html#material-properties-physical-properties" data-qp-ui-data-id="qp:1">物理属性</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../material-design/material-properties.html#material-properties-transforming-material" data-qp-ui-data-id="qp:2">材料的转换</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../material-design/material-properties.html#material-properties-movement-of-material" data-qp-ui-data-id="qp:3">材料的移动</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="material-properties-physical-properties" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            物理属性
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
                  <div class="module"><p>材料在 <strong>x、y 轴上有不同的尺寸</strong>（计量单位为 dp）和<strong>统一的厚度</strong>（1dp）。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="physical-properties-figure-caption-0" src="<?php static_url('../static/media/material-design/material-properties/whatismaterial_materialproperties_physicalproperties_thickness_01_yes.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-0">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>材料的长度和宽度是可以改变的。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="physical-properties-figure-caption-1" src="<?php static_url('../static/media/material-design/material-properties/whatismaterial_materialproperties_physicalproperties_thickness_02_no.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>所有材料都是 1dp 的厚度。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>材料会投射出阴影。</p>
                    <p>阴影是由于元素之间的相对高度（Z 轴）而自然产生的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="physical-properties-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/inline whatismaterial-materialprop-physicalprop-PaperShadow_01_xhdpi_008.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/inline whatismaterial-materialprop-physicalprop-PaperShadow_01_xhdpi_008.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-2">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>阴影反映了材料的元素之间的相对高度。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="physical-properties-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/inline whatismaterial-materialprop-physicalprop-PaperShadow_02_xhdpi_008.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/inline whatismaterial-materialprop-physicalprop-PaperShadow_02_xhdpi_008.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>阴影不是通过对材料着色产生的。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>内容可以以任何形状和颜色显示在材料上。内容不会增加材料的厚度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="physical-properties-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-physicalprop-InkDisplay_xhdpi_006.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-physicalprop-InkDisplay_xhdpi_006.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-4">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>材料可以展示任何形状和颜色。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>内容看起来可以独立于材料，但是会被限制在材料的边界内。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="physical-properties-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-physicalprop-InkBehavior_xhdpi_006.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-physicalprop-InkBehavior_xhdpi_006.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-5">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>内容的行为可以和材料的行为互相独立。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>材料是固态的。</p>
                    <p>输入事件不能穿透材料。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="physical-properties-figure-caption-6" src="<?php static_url('../static/media/material-design/material-properties/whatismaterial_properties_physical3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-6">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>只有在最前面的材料才会响应输入事件。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="physical-properties-figure-caption-7" src="<?php static_url('../static/media/material-design/material-properties/whatismaterial_properties_physical4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-7">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>输入事件不能穿透材料。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>多个材料元素不能同时出现在同一空间中的相同位置。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="physical-properties-figure-caption-8" src="<?php static_url('../static/media/material-design/material-properties/whatismaterial_properties_physical5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-8">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>利用高度来区分材料元素，以防止多个材料元素同时占用空间中的相同位置。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 100.0%">
                          <img alt="" aria-describedby="physical-properties-figure-caption-9" src="<?php static_url('../static/media/material-design/material-properties/whatismaterial_properties_physical6.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-9">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>多个材料元素不能同时占用空间中的相同位置。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>材料之间不能相互交叉。</p>
                    <p>例如，当改变材料高度时，这片材料不能从另一片材料中穿过。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="physical-properties-figure-caption-10" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial_properties_physical_07_xhdpi_009.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial_properties_physical_07_xhdpi_009.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="physical-properties-figure-caption-10">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>材料之间不能相互交叉。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="material-properties-transforming-material" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            材料的转换
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
                    <p>材料可以改变形状。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="transforming-material-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperShape_xhdpi_005.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperShape_xhdpi_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transforming-material-figure-caption-0">
                        <p>材料可以改变形状。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>材料只能在当前所在平面内伸缩。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 47.3684210526%">
                          <video aria-describedby="transforming-material-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperShapeLinear_xhdpi_005.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperShapeLinear_xhdpi_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transforming-material-figure-caption-1">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>材料只能在当前所在平面内伸缩。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>材料不能弯曲或折叠。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 63.1578947368%">
                          <video aria-describedby="transforming-material-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperBendFold_xhdpi_006.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperBendFold_xhdpi_006.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transforming-material-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>材料不能弯曲或折叠。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>多片材料可以组合成一片材料。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 63.1578947368%">
                          <video aria-describedby="transforming-material-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperHeal_xhdpi_004.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperHeal_xhdpi_004.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transforming-material-figure-caption-3">
                        <p>多片材料可以组合成一片材料。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>分割之后，材料可以复原。例如，如果你从一片材料中移动了其中一部分，这部分材料会重新回到那片材料中，恢复成一整片材料。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 63.1578947368%">
                          <video aria-describedby="transforming-material-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperSplitHeal_xhdpi_005.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperSplitHeal_xhdpi_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="transforming-material-figure-caption-4">
                        <p>材料可以被分割和复原。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="material-properties-movement-of-material" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            材料的移动
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
                    <p>材料可以在环境中的任何地方自动创建或销毁。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 63.1578947368%">
                          <video aria-describedby="movement-of-material-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-PaperPointExpand_xhdpi_005.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-PaperPointExpand_xhdpi_005.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-of-material-figure-caption-0">
                        <p>材料可以自动创建或销毁。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><p>材料可以沿着任何轴移动。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 63.1578947368%">
                          <video aria-describedby="movement-of-material-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-PaperMove_xhdpi_008.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-PaperMove_xhdpi_008.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-of-material-figure-caption-1">
                        <p>材料可以沿着任何轴移动。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Z 轴的运动通常是用户和材料交互的结果。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 46.0526315789%">
                          <video aria-describedby="movement-of-material-figure-caption-2" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-Material_Response_xhdpi_003.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-Material_Response_xhdpi_003.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="movement-of-material-figure-caption-2">
                        <p>Z 轴的运动是用户和材料交互后产生的。</p>
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
