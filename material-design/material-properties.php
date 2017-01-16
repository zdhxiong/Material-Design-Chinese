<?php
$vars = array(
  'title' => 'Material properties',
  'category' => 'Material design',
  'theme_color' => '#00bcd4',
  'color_name' => 'cyan',
  'prev_title' => 'Environment',
  'prev_path' => 'material-design/environment',
  'next_title' => 'Elevation &amp; shadows',
  'next_path' => 'material-design/elevation-shadows'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Material properties</h1>
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Material has certain immutable characteristics and inherent behaviors. </h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Understanding these qualities of material will help you manipulate material in a way that’s consistent with the vision of material design.</p>
              </div>
              <div class="module">
                <h3><strong>Material characteristics</strong></h3>
                <p>Solid<br>
                  Occupies unique points in space<br>
                  Impenetrable<br>
                  Mutable shape<br>
                  Changes in size only along its plane<br>
                  Unbendable<br>
                  Can join to other material<br>
                  Can separate, split, and heal<br>
                  Can be created or destroyed<br>
                  Moves along any axis</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/material-design/material-properties/what_is_material_material_properties.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../what-is-material/material-properties.html#material-properties-physical-properties" data-qp-ui-data-id="qp:1">Physical properties</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../what-is-material/material-properties.html#material-properties-transforming-material" data-qp-ui-data-id="qp:2">Transforming material</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="../what-is-material/material-properties.html#material-properties-movement-of-material" data-qp-ui-data-id="qp:3">Movement of material</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="material-properties-physical-properties" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Physical properties
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
                  <div class="module"><p>Material has <strong>varying x &amp; y dimensions</strong> (measured in dp) and a <strong>uniform thickness</strong> (1dp). </p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/material-properties/whatismaterial_materialproperties_physicalproperties_thickness_01_yes.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>The height and width of material can vary.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/material-properties/whatismaterial_materialproperties_physicalproperties_thickness_02_no.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Material is always 1dp thick.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Material casts shadows.</p>
                    <p>Shadows result naturally from the relative elevation (z-position) between material elements.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/inline whatismaterial-materialprop-physicalprop-PaperShadow_01_xhdpi_008.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/inline whatismaterial-materialprop-physicalprop-PaperShadow_01_xhdpi_008.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Shadows depict the relative elevation between material elements.</p>
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
                            <source src="../static/media/material-design/material-properties/inline whatismaterial-materialprop-physicalprop-PaperShadow_02_xhdpi_008.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/inline whatismaterial-materialprop-physicalprop-PaperShadow_02_xhdpi_008.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Shadows are never approximated by coloring material.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Content is displayed on material, in any shape and color. Content does not add thickness to material.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-physicalprop-InkDisplay_xhdpi_006.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-physicalprop-InkDisplay_xhdpi_006.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Material can display any shape and color.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Content can behave independently of the material, but is limited within the bounds of the material.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-physicalprop-InkBehavior_xhdpi_006.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-physicalprop-InkBehavior_xhdpi_006.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Content behavior can be independent of the behavior of material.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Material is solid.</p>
                    <p>Input events cannot pass through material.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/material-properties/whatismaterial_properties_physical3.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Input events only affect the foreground material.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/material-properties/whatismaterial_properties_physical4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Input events cannot pass through material.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>Multiple material elements cannot occupy the same point in space simultaneously.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/material-properties/whatismaterial_properties_physical5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Using elevation to separate material elements is one method of preventing multiple material elements from occupying the same point in space simultaneously.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/material-design/material-properties/whatismaterial_properties_physical6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Multiple material elements cannot occupy the same point in space simultaneously.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Material cannot pass through other material.</p>
                    <p>For example, one sheet of material cannot pass through another sheet of material when changing elevation.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial_properties_physical_07_xhdpi_009.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial_properties_physical_07_xhdpi_009.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Material cannot pass through other material.</p>
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
            Transforming material
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
                    <p>Material can change shape.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperShape_xhdpi_005.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperShape_xhdpi_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Material can change shape.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Material grows and shrinks only along its plane.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperShapeLinear_xhdpi_005.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperShapeLinear_xhdpi_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Material grows and shrinks only along its plane.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Material never bends or folds.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperBendFold_xhdpi_006.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperBendFold_xhdpi_006.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Material never bends or folds.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Sheets of material can join together to become a single sheet of material.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperHeal_xhdpi_004.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperHeal_xhdpi_004.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Multiple sheets of material can join together to become a single sheet. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>When split, material can heal. For example, if you remove a portion of material from a sheet of material, the sheet of material will become a whole sheet again. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperSplitHeal_xhdpi_005.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-transformingmaterial-PaperSplitHeal_xhdpi_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Material can split and become whole again. </p>
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
            Movement of material
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
                    <p>Material can be spontaneously generated or destroyed anywhere in the environment.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-PaperPointExpand_xhdpi_005.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-PaperPointExpand_xhdpi_005.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Material can be spontaneously generated or destroyed. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"><p>Material can move along any axis.</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-PaperMove_xhdpi_008.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-PaperMove_xhdpi_008.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Material can move along various axes. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Z-axis motion is typically a result of user interaction with material.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-Material_Response_xhdpi_003.webm" type="video/webm">
                            <source src="../static/media/material-design/material-properties/whatismaterial-materialprop-movementmaterial-Material_Response_xhdpi_003.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Z-axis motion prompted by user interaction.</p>
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

<?php
include $public_files['footer'];
?>