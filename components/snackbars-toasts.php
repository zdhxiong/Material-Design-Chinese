<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>Snackbars provide brief feedback about an operation through a message at the bottom of the screen. </p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p><strong>Snackbars </strong>contain a single line of text directly related to the operation performed. They may contain a text action, but no icons. </p>
                <p><strong>Toasts </strong>(Android only) are primarily used for system messaging. They also display at the bottom of the screen, but may not be swiped off-screen. </p>
              </div>
              <div class="module">
                <h3><strong>Usage</strong></h3>
                <p>Only one snackbar may be displayed at a time. Each snackbar may contain a single action, neither of which may be “Dismiss” or “Cancel.”</p>
                <h3><strong>Behavior</strong></h3>
                <p>Snackbars animate upwards from the bottom edge of the screen.</p>
                <h3><strong>Snackbar specs</strong></h3>
                <ul class="lst-kix_eaje492nnrn7-0 start">
                  <li>Action button: Roboto Medium 14sp, all-caps text</li>
                  <li>Mobile height: 48dp (single-line), 80dp (multi-line)</li>
                  <li>Desktop snackbar height: 48dp</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/snackbars-toasts/components_snackbars.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="snackbars-toasts.html#snackbars-toasts-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="snackbars-toasts.html#snackbars-toasts-specs" data-qp-ui-data-id="qp:2">Specs</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="snackbars-toasts-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>Show only one snackbar on screen at a time. </p>
              <h1>Placement</h1>
              <p>Snackbars appear above most elements on screen, and they are equal in elevation to the floating action button. However, they are lower in elevation than dialogs, bottom sheets, and navigation drawers.</p>
              <h1>Behavior</h1>
              <p>Upon entrance, snackbars animate upwards from the bottom edge of the screen. When they appear, they do not block input. </p>
              <p>They exit by being swiped off-screen or automatically disappear after a timeout or user interaction elsewhere (such as summoning a new surface or activity). </p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Very short text strings</h1>
                    <p>Snackbars should contain a single line of text directly related to the operation performed. They may contain a text action. They cannot contain icons.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_usage1.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_usage2.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Transient</h1>
                    <p>Snackbars automatically time out from the screen. For usability reasons, snackbars should not contain the only way to access a core use case. They should not be persistent or be stacked, as they are above other elements on screen. </p>
                    <p>On Android, when an unrelated dialog or popup occurs while the snackbar is up, the snackbar timeout will reset upon the window focus being regained. This is to ensure that the user will be able to read the snackbar for the full intended duration. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_usage3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_usage4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>0-1 actions, not dismiss or cancel</h1>
                    <p>If an action is present, comply with dialog spacing and affordance rules. For two or more actions, use a dialog, not a snackbar, even when one of the actions is a dismiss action. If the action described in the snackbar is important enough to block the use of the screen, it should be a dialog. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_usage5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_usage6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Don’t block the floating action button</h1>
                    <p>Move your floating action button vertically to accommodate the snackbar height. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/snackbars-toasts/components_snackbar_usage_fabdo_005.webm" type="video/webm">
                            <source src="../static/media/components/snackbars-toasts/components_snackbar_usage_fabdo_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/snackbars-toasts/components_snackbar_usage_fabdont_005.webm" type="video/webm">
                            <source src="../static/media/components/snackbars-toasts/components_snackbar_usage_fabdont_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Consecutive snackbars</h1>
                    <p>There is only ever one snackbar displayed. When a second snackbar is triggered while the first is displayed, the first should start the contraction motion downwards before the second one animates upwards. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/snackbars-toasts/components_snackbars_usage_consecutivesbdifferenttype_005.webm" type="video/webm">
                            <source src="../static/media/components/snackbars-toasts/components_snackbars_usage_consecutivesbdifferenttype_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Two consecutive snackbars with different content.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/snackbars-toasts/components_snackbars_usage_consecutivesbsametype_005.webm" type="video/webm">
                            <source src="../static/media/components/snackbars-toasts/components_snackbars_usage_consecutivesbsametype_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Two consecutive snackbars with the same content.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="snackbars-toasts-specs" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
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
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Mobile</h1>
                    <ul class="lst-kix_t4bqbxm63pob-0 start">
                      <li>Single-line snackbar height: 48dp</li>
                      <li>Multi-line snackbar height: 80dp</li>
                      <li>Text: Roboto Regular 14sp</li>
                      <li>Action button: Roboto Medium 14sp, all-caps text</li>
                      <li>Default background fill: #323232 100%</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_mobile1.png"/>
                      </div>
                      <figcaption>
                        <p>A mobile snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_mobile2.png"/>
                      </div>
                      <figcaption>
                        <p>A mobile snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/snackbars-toasts/components_snackbar_usage_fabdo_005.webm" type="video/webm">
                            <source src="../static/media/components/snackbars-toasts/components_snackbar_usage_fabdo_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation of a mobile snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_mobile3.png"/>
                      </div>
                      <figcaption>
                        <p>Mobile in landscape with a snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_mobile4.png"/>
                      </div>
                      <figcaption>
                        <p>Specs of a mobile snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Tablet/desktop</h1>
                    <ul class="lst-kix_psrtmy7li6md-0 start">
                      <li>Single-line snackbar height: 48dp tall</li>
                      <li>Minimum width: 288dp</li>
                      <li>Maximum width: 568dp</li>
                      <li>2dp rounded corner</li>
                      <li>Text: Roboto Regular 14sp</li>
                      <li>Action button: Roboto Medium 14sp, all-caps text</li>
                      <li>Default background fill: #323232 100%</li>
                      <li>Alignment: Centered or left-aligned 24dp from the left and bottom edges of the screen</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_tabletdesktop1.png"/>
                      </div>
                      <figcaption>
                        <p>A center aligned tablet/desktop snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_tabletdesktop2.png"/>
                      </div>
                      <figcaption>
                        <p>A center-aligned tablet/desktop snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_tabletdesktop1-left.png"/>
                      </div>
                      <figcaption>
                        <p>A left-aligned tablet/desktop snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_tabletdesktop2-left.png"/>
                      </div>
                      <figcaption>
                        <p>A left-aligned tablet/desktop snackbar</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/snackbars-toasts/components_toasts_tabletdesktop3.png"/>
                      </div>
                      <figcaption>
                        <p>Specs of tablet/desktop snackbar</p>
                        <p>Snackbar height: 48dp<br>
                          Snackbar left and right padding: 24dp<br>
                          Snackbar top and bottom padding: 14dp<br>
                          Snackbar button left padding: 48dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/snackbars-toasts/components_snackbar_specs_fabtablet_002.webm" type="video/webm">
                            <source src="../static/media/components/snackbars-toasts/components_snackbar_specs_fabtablet_002.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Animation of a tablet/desktop snackbar</p>
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