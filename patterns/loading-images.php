<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Images, including illustrations and photographs, may load in three phases.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Illustrations and photographs may load and transition in three phases by staggering opacity, exposure, and saturation levels.</p>
              </div>
              <div class="module">
                <h3><strong>Behavior</strong></h3>
                <p>Progressive fade-in<br>
                  Duration<br>
                  Animation</p>
                <h3><strong>Duration </strong></h3>
                <p>Use longer durations for loading images, and shorter durations for transitions.</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/loading-images/patterns_loading_images.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="loading-images.html#loading-images-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="loading-images.html#loading-images-behavior" data-qp-ui-data-id="qp:2">Behavior</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="loading-images-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Illustrations and photographs may load and transition in three phases at staggered durations, rather than relying on opacity changes alone. You may combine image opacity, exposure, and saturation changes to suit your needs.</p>
                    <h2>Exposure adjustments</h2>
                    <p>Images should begin loading with low contrast levels and desaturated color. Once image opacity reaches 100%, display the image with full-color saturation. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/loading-images/patterns_loadingimages1.png"/>
                      </div>
                      <figcaption>
                        <p>Opacity, exposure, and saturation recommendations for loading images</p>
                        <p>Opacity: 0% start, 100% end<br>
                          Exposure: Gamma, Black output (for darker images)<br>
                          Saturation: 0 or 20% start, 100% end</p>
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
                        <img alt="" src="../static/media/patterns/loading-images/patterns-imagetreatment-imageload3_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Full opacity and exposure</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/loading-images/patterns-imagetreatment-imageload4_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Color saturation</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <p></p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Larger screens</h1>
                    <p>This process is ideal for larger screens, such as loading the Chrome OS wallpaper.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/loading-images/patterns_loadingimages_largescreen.webm" type="video/webm">
                            <source src="../static/media/patterns/loading-images/patterns_loadingimages_largescreen.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation showing loading on larger screens for Chrome OS wallpaper</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="loading-images-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Behavior
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
                    <h1>Progressive fade-in</h1>
                    <p>Visualize the image fading in, like a print during the photo development process.</p>
                    <p>Don’t adjust the levels in a way that will overexpose the lighter values.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/loading-images/patterns-imagetreatment-aperturevsdevelopment1-yes-no_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/loading-images/patterns-imagetreatment-aperturevsdevelopment2-yes-no_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Duration</h1>
                    <p>A longer duration is recommended for loading images, and a shorter duration is recommended for transitions.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/loading-images/patterns-imagerytreatment-imageload-transition_large_xhdpi.webm" type="video/webm">
                            <source src="../static/media/patterns/loading-images/patterns-imagerytreatment-imageload-transition_large_xhdpi.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Load and transition animation</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Animation</h1>
                    <p>Add a small position shift to loading images. The background image shown here in the account switcher animates in horizontally.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/loading-images/patterns-loadingimages-loading-070901_Load_Add_Animation_xhdpi_002.webm" type="video/webm">
                            <source src="../static/media/patterns/loading-images/patterns-loadingimages-loading-070901_Load_Add_Animation_xhdpi_002.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Video showing adding animation</p>
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