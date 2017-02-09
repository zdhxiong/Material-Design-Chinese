<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>A divider is a thin, lightweight rule that groups content in lists and page layouts. </p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Dividers help organize page content and hierarchy into individual tiles. </p>
                <p>Full-bleed dividers emphasize separate content areas and sections that require more distinct visual separation. Alternatives to full-bleed dividers include white space, subheaders, or inset dividers.</p>
                <p>Image-based content in <a href="grid-lists.html">grid lists</a> does not need dividers. Grid lists adequately separate content using white space and subheaders.</p>
              </div>
              <div class="module"><h3>Usage</h3>
                <p>For <a href="lists.html">lists</a> and to separate content</p>
                <h3>Type of dividers</h3>
                <ul class="lst-kix_empwb2afgke-0 start">
                  <li>Full-bleed dividers are used to separate distinct content sections.</li>
                  <li>Inset dividers are used to separate related content.</li>
                </ul>
                <h3>Specs</h3>
                <ul class="lst-kix_qijap1wwopwy-0 start">
                  <li>Thickness: 1dp</li>
                  <li>Opacity: 12% black or 12% white</li>
                  <li>Placement: Along the bottom edge of content tiles</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/dividers/components_dividers.png"/>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dividers.html#dividers-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dividers.html#dividers-types-of-dividers" data-qp-ui-data-id="qp:2">Types of dividers</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="dividers.html#dividers-specs" data-qp-ui-data-id="qp:3">Specs</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="dividers-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Usage
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
                    <p>Dividers help users understand how content is organized by establishing a rhythm and hierarchy on a page. But a heavy use of dividers can lead to visual noise and dilute their impact. </p>
                    <p>Full-bleed dividers emphasize separate content areas and sections, but if such strong divisions are not required, consider using white space, subheaders, or inset dividers.</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong>Items without anchors</strong></h2>
                    <p>When lists don’t have an anchoring element such as an avatar or icon, spacing alone isn’t always enough to separate tiles. In this case, full-bleed dividers can help create rhythm and separate individual tiles.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_usage1.png"/>
                      </div>
                      <figcaption>
                        <p>Full-bleed dividers separate email summaries. </p>
                        <p></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_usage2.png"/>
                      </div>
                      <figcaption>
                        <p>Full-bleed dividers separate the From, To, Subject, and Message sections of the email screen. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong>Image-based content</strong></h2>
                    <p>Because the grid itself creates visual distinction, grid lists do not need dividers to separate subheaders from content. In this case, the white space and the subheaders separate the sections adequately.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_usage3.png"/>
                      </div>
                      <figcaption>
                        <p>The white space and the subheaders separate the photos and albums.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_usage6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Judicious use of inset dividers demarcates major sections of content.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_type1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Use inset dividers in conjunction with anchoring elements such as avatars. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_usage4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Overuse of full-bleed dividers creates visual noise and ultimately diminishes the meaning of the dividers.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_usage5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Inset dividers help cut down on visual noise and should be used with anchor elements, but overuse reduces their meaning.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dividers-types-of-dividers" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Types of dividers
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
                    <h1>Full-bleed dividers</h1>
                    <p>Full-bleed dividers separate distinct content sections (e.g., biographic details from contact information) or distinct content elements (e.g., list items) in both lists and page layouts.</p>
                    <p>Full-bleed dividers can also indicate seams in material where the material will expand when content is expanded.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_fullbleed1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of full-bleed divider</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_type2.png"/>
                      </div>
                      <figcaption>
                        <p>Example of full-bleed divider</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Inset dividers</h1>
                    <p>Inset dividers separate related content, such as sections in a list of contacts or emails in a conversation. </p>
                    <p>Inset dividers should be used in conjunction with anchoring elements such as icons or avatars aligned with the Title Key Line.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_type3.png"/>
                      </div>
                      <figcaption>
                        <p>Example of inset divider</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_type4.png"/>
                      </div>
                      <figcaption>
                        <p>Example of inset divider</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Subheaders and dividers</h1>
                    <p>When using a divider with a subheader, place the divider above the subheader to reinforce the relationship between the subheader and the content.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_type5.png"/>
                      </div>
                      <figcaption>
                        <p>Example of divider above subheader</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_type6.png"/>
                      </div>
                      <figcaption>
                        <p>Example of divider above subheader</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="dividers-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Specs
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
                    <p>Dividers are 1dp thick, with an opacity of either 12% black in light themes or 12% white in dark themes.</p>
                    <p>Dividers are placed along the bottom edge of the content tiles, independent of the grid.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/dividers/components_dividers_specs.png"/>
                      </div>
                      <figcaption>
                        <p>The divider sits within the baseline of the tile. </p>
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