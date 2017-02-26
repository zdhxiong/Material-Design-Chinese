<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Roboto and Noto are the standard typefaces on Android and Chrome.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p><strong>Roboto</strong> is the standard typeface on Android. </p>
                <p><strong>Noto</strong> is the standard typeface for all languages on Chrome and Android for all languages not covered by Roboto. </p>
                <p>Script types</p>
                <ul class="lst-kix_kzbbixcrg6x1-0 start">
                  <li>English and English-like (Latin, Greek, and Cyrillic)<br></li>
                  <li>Dense (Chinese, Japanese, and Korean)<br></li>
                  <li>Tall (South and Southeast Asian and Middle Eastern languages)</li>
                </ul>
              </div>
              <div class="module">
                <h3><strong>App bar</strong></h3>
                <p>Title style, Medium 20sp</p>
                <h3><strong>Buttons</strong></h3>
                <p>English: Medium 14sp, all caps<br>
                  Dense: Medium 15sp, all caps<br>
                  Tall: Bold 15sp</p>
                <h3><strong>Subheading</strong></h3>
                <p>English: Regular 16sp (device), 15sp (desktop)<br>
                  Dense: Regular 17sp (device), 16sp (desktop)<br>
                  Tall: Regular 17sp (device), 16sp (desktop)</p>
                <h3><strong>Body 1</strong></h3>
                <p>English: Regular 14sp (device), 13sp (desktop)<br>
                  Dense: Regular 15sp (dense), 14sp (desktop)<br>
                  Tall: Regular 15sp (device), 14sp (desktop)</p>
                <h3><strong>Text contrast ratios</strong></h3>
                <p>Minimum: 4.5:1<br>
                  Preferred: 7:1</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/style/typography/style_typography.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-language-categorization" data-qp-ui-data-id="qp:1">Language categorization </a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-typeface" data-qp-ui-data-id="qp:2">Typeface</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-styles" data-qp-ui-data-id="qp:3">Styles</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-line-height" data-qp-ui-data-id="qp:4">Line height</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-other-typographic-guidelines" data-qp-ui-data-id="qp:5">Other typographic guidelines</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="typography.html#typography-language-categories-reference" data-qp-ui-data-id="qp:6">Language categories reference</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="typography-language-categorization" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Language categorization
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Language scripts can be divided into three categories:</p>
              <p><strong>English and English-like</strong>: Latin (except Vietnamese), Greek, and Cyrillic scripts, supported by both Roboto and Noto. Roboto has been extended to completely cover all Latin, Greek, and Cyrillic characters as defined in Unicode 7.0. The number of supported characters has doubled from previous releases, from about 2000 to about 4000 characters.</p>
              <p><strong>Tall</strong>: Language scripts that require extra line height to accommodate larger glyphs, including South and Southeast Asian and Middle-Eastern languages, like Arabic, Hindi, Telugu, Thai, Vietnamese. Noto supports these languages with two weights.</p>
              <p><strong>Dense</strong>: Language scripts that require extra line height to accommodate larger glyphs, including Chinese, Japanese, and Korean. Noto supports these languages with seven weights.</p>
              <p>See the full list in the <a href="typography.html#typography-language-categories-reference">language categories table</a>.</p>
            </div>
          </div>
        </div>

        <div id="typography-typeface" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Typeface
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
                    <h1>Roboto</h1>
                    <p>Roboto has been refined extensively to work across the wider set of supported platforms. It is slightly wider and rounder, giving it greater clarity and making it more optimistic. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_roboto1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Examples of Roboto</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_roboto2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Roboto A-Z and numerals</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Roboto font weights</strong></h2>
                    <p>Roboto has six weights: Thin, Light, Regular, Medium, Bold, and Black. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_weights1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Roboto font weights</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Noto</h1>
                    <p>Noto’s vertical metrics are compatible with Roboto.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_noto1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Noto Sans examples for English and CJK (Chinese, Japanese, and Korean)</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_noto2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Noto Sans examples for Thai and Hindi (Devanagari)</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Noto font weights</strong></h2>
                    <p>Noto Sans CJK (Chinese, Japanese, and Korean) has seven weights: Thin, Light, DemiLight, Regular, Medium, Bold, and Black. The weight of Noto Sans CJK Regular is the same as Roboto Regular. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_weight1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Noto Sans CJK font weights</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Noto fonts for Thai, Devanagari, and all other major living languages have Regular and Bold weights.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_weight2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Noto Sans Thai and Hindi (Devanagari) font weights</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="modulettes">
                <a class="modulette container default" href="https://www.google.com/url?q=https://www.google.com/fonts&amp;sa=D&amp;ust=1481817971067000&amp;usg=AFQjCNFzeRUNQKxis0ia4IFE32tRJPSBGQ" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/default.svg'); ?>">
                  <div class="info">
                    <div class="title">Google font directory</div>
                    <span class="subtitle">A directory of open-source web fonts</span>
                  </div>
                  </img>
                </a>
              </div>
              <h1>Hinted fonts</h1>
              <p>Hints are the instructions embedded in a font on how to modify (distort) a glyph to look better on low-resolution displays. As a tradeoff, a hinted font consumes more space than the unhinted version.</p>
              <p>Both Roboto and Noto have hinted and unhinted versions. Google recommends: </p>
              <ul class="lst-kix_ez8axjshp34y-0 start">
                <li>Use the unhinted versions on Android and on Mac OS X, which doesn’t implement hints.</li>
                <li>Use hinted fonts on Chrome OS, Windows, and Linux.</li>
              </ul>
              <h1>Font stack</h1>
              <p>For both Android and web properties, the font stack should specify Roboto, Noto, and then sans-serif.</p>
            </div>
          </div>
        </div>

        <div id="typography-styles" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Styles
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Too many type sizes and styles at once can wreck any layout. A typographic scale has a limited set of type sizes that work well together along with the layout grid.</p>
              <p>These sizes and styles were developed to balance content density and reading comfort under typical usage conditions. Type sizes are specified with sp (scaleable pixels) to enable large type modes for <a href="../usability/accessibility.html">accessibility</a>. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>English and English-like scripts</h1>
                    <p>Latin, Greek, and Cyrillic.</p>
                    <p>The basic set of styles are based on a typographic scale of 12, 14, 16, 20, and 34. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_scale.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_01_display1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Examples using Display style, English</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_02_display2.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_03_headline1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Examples using Headline style, English</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_04_headline2.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Across form factors, text that appears in the app bar should use the Title style, Medium 20sp. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_05_title1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Examples using Title style, English</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_06_title2.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>In certain scenarios, use the larger subheading style instead of the smaller Body style. Some of those scenarios include when information is presented as small snippets or when titles are paired with lines of Body-styled text.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_07_subhead1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Examples using subheading style, English</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_08_subhead2.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_09_body-1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Examples using Body style, English</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_10_body2.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_11_body3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Examples using Body style, English</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_12_body4.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Button style (Medium 14sp, all caps) is used for all buttons. Button text should be all caps in languages that have capitalization. For languages that don’t have capitals, consider using color text for flat buttons to make them stand out from normal text.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_13_button1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Examples using Button style, English</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_14_button2.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Dense scripts</h1>
                    <p>Chinese, Japanese, and Korean.</p>
                    <p><strong>Weight</strong>: Since Noto CJK has seven weights that match Roboto, use the same weight settings as English.</p>
                    <p><strong>Font size</strong>: For Title through Caption styles, the font size is 1px larger than that specified for English. For styles larger than Title, the English type size is suitable.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_style1.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_style2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example, dense language script</p>
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
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_japanese1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of a subheading, Japanese</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_japanese2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Body, Japanese</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_japanese3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Body 1, Japanese</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_chinese1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of a subheading, Traditional Chinese</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_chinese2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Body, Traditional Chinese</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_chinese3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Body 1, Traditional Chinese</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Tall scripts</h1>
                    <p>South and Southeast Asian and Middle Eastern languages, including Arabic, Hindi, and Thai.</p>
                    <p><strong>Weight</strong>: Use Regular weight, as Medium weight is unavailable in Noto. Google recommends avoiding Bold weight, based on feedback from native speakers that Bold is too heavy.</p>
                    <p><strong>Font size</strong>: For Title through Caption styles, font size is 1px larger than that specified for English. For styles larger than Title, the English type size is suitable.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_style3.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_style4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example, tall language scripts</p>
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
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_hindi1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of a subheading, Hindi</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_hindi2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Body, Hindi</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_hindi3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Body1, Hindi</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_thai1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of a subheading, Thai</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_thai2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Body, Thai</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_example_thai3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Body1, Thai</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="typography-line-height" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Line height
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>To achieve proper readability and appropriate pacing, line heights have been determined based on each style’s individual size and weight. Line wrapping only applies to Body, Subhead, Headline, and the smaller Display styles. All other styles should exist as single lines.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>English and English-like scripts</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_lineheight1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>English and English-like type and leading</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_lineheight2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Pairing examples</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_lineheight3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Isolated examples – Increased line height</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Dense and tall scripts</h1>
                    <p>For all styles, line height is 0.1em larger than the English-like languages. English and English-like languages mostly use a portion of the em box, often the lower portion below the x-height. Chinese, Japanese, and Korean (CJK) ideographic characters use the entire em box. Characters in tall languages often have long descenders and/or ascenders. To achieve the same design intention as English for CJK and to avoid potential text clipping between two lines next to each other for tall languages, the line height needs to be larger than in English for tall and dense languages.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_lineheight_tall1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Line height for tall and dense languages</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_lineheight_tall2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Line height pairing example, Thai and Hindi</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_lineheight_dense2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Line height pairing example, Chinese and Japanese</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="typography-other-typographic-guidelines" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Other typographic guidelines
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
                    <h1>Colors &amp; contrast</h1>
                    <p>A text color that is too similar to the background color is hard to read. Text with too much contrast can also be hard to read. This is especially true of light-colored text against dark backgrounds.</p>
                    <p>Text should maintain a minimum contrast ratio of at least 4.5:1 (calculated based on luminance values) for legibility. A ratio of 7:1 is preferred.</p>
                    <p>These color combinations also consider contrast ratios for users who perceive color differently.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_contrast.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_15_contrast1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Contrast over light background</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_16_contrast2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Contrast over dark background</p>
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
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_17_contrast3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Contrast over image</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_18_contrast4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Contrast over illustration</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Large and dynamic type </h1>
                    <p>For the best user experience, use dynamic type instead of relying only on smaller type sizes or allowing truncation of larger-size text.</p>
                    <p>Large type applied correctly can make apps more interesting, differentiate layouts, and help users to decode content quickly.</p>
                    <p>Dynamic type enables large type when the length of the text in a layout is unknown. Dynamic sizes are selected from a typographic scale based on available space and letter size estimates.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_19_dynamic1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Examples of dynamic type</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_20_dynamic2.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_21_dynamic3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>UI application of dynamic type </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_22_dynamic4.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Line breaking</h1>
                    <p>The images show best practices for line breaks.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_linebreaks1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_linebreaks2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Avoid leaving large gaps and orphans on a line. Try not to leave very short words such as prepositions at the end of a line. Well-considered line breaks can avoid hyphenation of words altogether.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Tracking and kerning</h1>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_tracking.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Line length</h1>
                    <p>Consider this advice on readability and line length from the Baymard Institute:</p>
                    <p>“You should have around 60 characters per line if you want a good reading experience. Having the right amount of characters on each line is key to the readability of your text.”</p>
                    <p>"Too wide – if a line of text is too long, the user’s eye will have a hard time focusing on the text. This is because the length makes it difficult to get an idea of where the line starts and ends. Furthermore it can be difficult to continue from the correct line in large blocks of text.”</p>
                    <p>"Too narrow – if a line is too short, the eye will have to travel back too often, breaking the reader’s rhythm. Too short lines also tend to stress people, making them begin on the next line before finishing the current one (hence skipping potentially important words).”</p>
                    <p>Source: “Readability: the Optimal Line Length,”</p>
                    <p><a href="https://www.google.com/url?q=http://baymard.com/blog/line-length-readability&amp;sa=D&amp;ust=1481817971186000&amp;usg=AFQjCNH2N5LAy8Z7hOfvaHKRRt4ewTy1Vg" target="_blank">http://baymard.com/blog/line-length-readability</a></p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_linelengths1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Ideal line lengths for English body text. The numbers represent the number of characters per line.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/typography/style_typography_styles_linelengths2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Ideal line lengths for short lines of text in English. The numbers represent the number of characters per line.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="typography-language-categories-reference" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            Language categories reference
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
                    <p>For ease of internationalization, Google has categorized languages into three categories: English and English-like; tall; and dense.</p>
                    <p><strong>English and English-like</strong>: Latin (except Vietnamese), Greek, Cyrillic, Hebrew, Armenian and Georgian.</p>
                    <p><strong>Tall</strong>: Language scripts that require extra line height to accommodate larger glyphs, including South and Southeast Asian and Middle Eastern languages, like Arabic, Hindi, Telugu, Thai, Vietnamese.</p>
                    <p><strong>Dense</strong>: Language scripts that require extra line height to accommodate larger glyphs but have different metrics from tall scripts. Includes Chinese, Japanese, and Korean. </p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p><strong>Code</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>Description</strong></p></td>
                        <td colspan="1" rowspan="1"><p><strong>Category</strong></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>af</p></td>
                        <td colspan="1" rowspan="1"><p>Afrikaans</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>am</p></td>
                        <td colspan="1" rowspan="1"><p>Amharic</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ar</p></td>
                        <td colspan="1" rowspan="1"><p>Arabic (Modern Standard)</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>az</p></td>
                        <td colspan="1" rowspan="1"><p>Azerbaijani</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>bg</p></td>
                        <td colspan="1" rowspan="1"><p>Bulgarian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>bn</p></td>
                        <td colspan="1" rowspan="1"><p>Bengali</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ca</p></td>
                        <td colspan="1" rowspan="1"><p>Catalan</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>cs</p></td>
                        <td colspan="1" rowspan="1"><p>Czech</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>cy</p></td>
                        <td colspan="1" rowspan="1"><p>Welsh</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>da</p></td>
                        <td colspan="1" rowspan="1"><p>Danish</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>de</p></td>
                        <td colspan="1" rowspan="1"><p>German</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>el</p></td>
                        <td colspan="1" rowspan="1"><p>Greek</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>en</p></td>
                        <td colspan="1" rowspan="1"><p>English (US)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>en-GB</p></td>
                        <td colspan="1" rowspan="1"><p>English (UK)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>es</p></td>
                        <td colspan="1" rowspan="1"><p>Spanish (European)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>es-419</p></td>
                        <td colspan="1" rowspan="1"><p>Spanish (Latin American)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>et</p></td>
                        <td colspan="1" rowspan="1"><p>Estonian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>eu</p></td>
                        <td colspan="1" rowspan="1"><p>Basque</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>fa</p></td>
                        <td colspan="1" rowspan="1"><p>Persian</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>fi</p></td>
                        <td colspan="1" rowspan="1"><p>Finnish</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>fil</p></td>
                        <td colspan="1" rowspan="1"><p>Filipino</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>fr</p></td>
                        <td colspan="1" rowspan="1"><p>French (European)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>fr-CA</p></td>
                        <td colspan="1" rowspan="1"><p>French (Canadian)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>gl</p></td>
                        <td colspan="1" rowspan="1"><p>Galician</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>gu</p></td>
                        <td colspan="1" rowspan="1"><p>Gujarati</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>hi</p></td>
                        <td colspan="1" rowspan="1"><p>Hindi</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>hr</p></td>
                        <td colspan="1" rowspan="1"><p>Croatian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>hu</p></td>
                        <td colspan="1" rowspan="1"><p>Hungarian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>hy</p></td>
                        <td colspan="1" rowspan="1"><p>Armenian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>id</p></td>
                        <td colspan="1" rowspan="1"><p>Indonesian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>is</p></td>
                        <td colspan="1" rowspan="1"><p>Icelandic</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>it</p></td>
                        <td colspan="1" rowspan="1"><p>Italian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>iw</p></td>
                        <td colspan="1" rowspan="1"><p>Hebrew</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ja</p></td>
                        <td colspan="1" rowspan="1"><p>Japanese</p></td>
                        <td colspan="1" rowspan="1"><p>Dense</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ka</p></td>
                        <td colspan="1" rowspan="1"><p>Georgian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>kk</p></td>
                        <td colspan="1" rowspan="1"><p>Kazakh</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>km</p></td>
                        <td colspan="1" rowspan="1"><p>Khmer</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>kn</p></td>
                        <td colspan="1" rowspan="1"><p>Kannada</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ko</p></td>
                        <td colspan="1" rowspan="1"><p>Korean</p></td>
                        <td colspan="1" rowspan="1"><p>Dense</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ky</p></td>
                        <td colspan="1" rowspan="1"><p>Kirghiz</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>lo</p></td>
                        <td colspan="1" rowspan="1"><p>Lao</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>lt</p></td>
                        <td colspan="1" rowspan="1"><p>Lithuanian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>lv</p></td>
                        <td colspan="1" rowspan="1"><p>Latvian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>mk</p></td>
                        <td colspan="1" rowspan="1"><p>Macedonian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ml</p></td>
                        <td colspan="1" rowspan="1"><p>Malayalam</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>mn</p></td>
                        <td colspan="1" rowspan="1"><p>Mongolian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>mr</p></td>
                        <td colspan="1" rowspan="1"><p>Marathi</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ms</p></td>
                        <td colspan="1" rowspan="1"><p>Malay</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>my</p></td>
                        <td colspan="1" rowspan="1"><p>Burmese (Myanmar)</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ne</p></td>
                        <td colspan="1" rowspan="1"><p>Nepali</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>nl</p></td>
                        <td colspan="1" rowspan="1"><p>Dutch</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>no</p></td>
                        <td colspan="1" rowspan="1"><p>Norwegian (Bokmål)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>pa</p></td>
                        <td colspan="1" rowspan="1"><p>Punjabi</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>pl</p></td>
                        <td colspan="1" rowspan="1"><p>Polish</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>pt</p></td>
                        <td colspan="1" rowspan="1"><p>Portuguese (Brazilian)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>pt-PT</p></td>
                        <td colspan="1" rowspan="1"><p>Portuguese (European)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ro</p></td>
                        <td colspan="1" rowspan="1"><p>Romanian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ru</p></td>
                        <td colspan="1" rowspan="1"><p>Russian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>si</p></td>
                        <td colspan="1" rowspan="1"><p>Sinhala</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sk</p></td>
                        <td colspan="1" rowspan="1"><p>Slovak</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sl</p></td>
                        <td colspan="1" rowspan="1"><p>Slovenian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sq</p></td>
                        <td colspan="1" rowspan="1"><p>Albanian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sr</p></td>
                        <td colspan="1" rowspan="1"><p>Serbian (Cyrillic)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sr-Latn</p></td>
                        <td colspan="1" rowspan="1"><p>Serbian (Latin)</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sv</p></td>
                        <td colspan="1" rowspan="1"><p>Swedish</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>sw</p></td>
                        <td colspan="1" rowspan="1"><p>Swahili</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ta</p></td>
                        <td colspan="1" rowspan="1"><p>Tamil</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>te</p></td>
                        <td colspan="1" rowspan="1"><p>Telugu</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>th</p></td>
                        <td colspan="1" rowspan="1"><p>Thai</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>tr</p></td>
                        <td colspan="1" rowspan="1"><p>Turkish</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>uk</p></td>
                        <td colspan="1" rowspan="1"><p>Ukrainian</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>ur</p></td>
                        <td colspan="1" rowspan="1"><p>Urdu</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>uz</p></td>
                        <td colspan="1" rowspan="1"><p>Uzbek</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>vi</p></td>
                        <td colspan="1" rowspan="1"><p>Vietnamese</p></td>
                        <td colspan="1" rowspan="1"><p>Tall</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>zh-CN</p></td>
                        <td colspan="1" rowspan="1"><p>Chinese (Simplified, Mandarin)</p></td>
                        <td colspan="1" rowspan="1"><p>Dense</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>zh-HK</p></td>
                        <td colspan="1" rowspan="1"><p>Chinese (Mandarin, Hong Kong)</p></td>
                        <td colspan="1" rowspan="1"><p>Dense</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>zh-TW</p></td>
                        <td colspan="1" rowspan="1"><p>Chinese (Traditional, Mandarin)</p></td>
                        <td colspan="1" rowspan="1"><p>Dense</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>zu</p></td>
                        <td colspan="1" rowspan="1"><p>Zulu</p></td>
                        <td colspan="1" rowspan="1"><p>English-like</p></td>
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