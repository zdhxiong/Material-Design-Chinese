<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Material can make surfaces feel alive by multiplying and dividing them, and changing their shape and size.</p>
              </div>
              <div class="module">
                <h3><strong>Rectangular transformation </strong></h3>
                <p>Asymmetric<br>
                  Symmetric</p>
                <h3><strong>Radial transformation</strong></h3>
                <p>Symmetrical and circular</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/motion/transforming-material/03-transforming-material.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="transforming-material.html#transforming-material-rectangular-transformation" data-qp-ui-data-id="qp:1">Rectangular transformation</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="transforming-material.html#transforming-material-radial-transformation" data-qp-ui-data-id="qp:2">Radial transformation</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="transforming-material.html#transforming-material-joining-dividing" data-qp-ui-data-id="qp:3">Joining &amp; Dividing</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="transforming-material-rectangular-transformation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Rectangular transformation
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>When material changes shape and size, its width and height change asynchronously along a motion curve. These changes are <a href="choreography.html">choreographed</a> with nearby surfaces inside or around the changing element.</p>
              <p>All surface transformations that occur on-screen, such as the ones below, use the <a href="duration-easing.html#duration-easing-natural-easing-curves">standard curve</a>. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><h1>Transforming width and height</h1>
                    <p>Elements may be expanded or collapsed using either asymmetric or symmetrical width and height changes.</p>
                    <p><strong>Asymmetric transformations</strong> involve the width and height changes at different rates. They work best when multiple elements or position changes are involved.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Rect_01_ExpandOffset_v6-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Rect_01_ExpandOffset_v6-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Asymmetric transformation</p>
                        <p>To expand an elements’ size, begin transforming the width of an element slightly before transforming the height. To collapse an element’s size, begin transforming the height slightly before the width. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Symmetrical transformations</strong> involve width and height changes occurring at the same rate. They are better for changes to a single element that occur along a single axis.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Rect_02_ExpandRobot_v6-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Rect_02_ExpandRobot_v6-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Symmetric transformation</p>
                        <p>Transforming width and height at the same time is a less detailed animation approach best suited to simple shape changes. These transformations can have slightly shorter durations than asymmetric ones.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>When an element expands asynchronously, the items it contains (such as text or images) change size at a constant aspect ratio to prevent unnatural stretching. For more information on how to transition content within a surface, see <a href="choreography.html">Choreography</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Rect_04_ThumbnailContent_v6-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Rect_04_ThumbnailContent_v6-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Content (such as a full-width image) transforms at a constant aspect ratio, even as its container (such as a larger card) transforms asynchronously along a motion curve.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Rect_03_Thumbnail_v6-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Rect_03_Thumbnail_v6-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Containers with full-bleed content (such as a full-bleed image) may expand synchronously.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="transforming-material-radial-transformation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Radial transformation
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
                    <p>Radial transformations are symmetrical, circular visualizations that originate from a user’s point of touch. They are commonly used on circular surfaces that morph into other shapes.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Radial_01_RadialExpand_v4-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Radial_01_RadialExpand_v4-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Radial transformation should be used on circular surfaces that morph into rectangular surfaces, or for creating new surfaces from the point of input.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Radial_02_DontRadial_v3.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Radial_02_DontRadial_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t use a radial transformation when transforming between two rectangular shapes.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Radial_03_DontOval_v3.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Radial_03_DontOval_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t expand an oval’s width and height asynchronously.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Radial_03_DontShape_v3.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Radial_03_DontShape_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t transform complex shapes.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Transformations can originate either from the object’s current location or from the center of the final surface being formed. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Radial_04_RadialArc_v5-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Radial_04_RadialArc_v5-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>During expansion, the floating action button moves in an arc towards its destination as it expands into a card.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Radial_05_RadialArc_v5-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Radial_05_RadialArc_v5-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>The center of the floating action button stays in place during the transformation, creating a subtler expansion effect.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="transforming-material-joining-dividing" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Joining &amp; Dividing
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>Joining</h2>
                    <p>Material may join with other material, or it may divide into multiple pieces. As two pieces of material approach one other, their edges meet and margins overlap before the movement completes. </p>
                    <h2>Dividing</h2>
                    <p>When material divides into multiple pieces, the pieces begin separation at the start of the movement. </p>
                    <h2>Shadows</h2>
                    <p>Shadows from separated material do not appear above sibling elements.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/transforming-material/Join_01_JoinDivide_v3.webm" type="video/webm">
                            <source src="../static/media/motion/transforming-material/Join_01_JoinDivide_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Example of material joining and dividing</p>
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