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
                <p>Material in motion guides the user’s focus through interactions by sharing elements across transitions.</p>
              </div>
              <div class="module">
                <h3><strong>Surface creation </strong></h3>
                <p>Stagger the choreography of new surfaces being created.</p>
                <h3><strong>Radial reaction</strong></h3>
                <p>Connect user input to surface reactions with touch ripples.</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/motion/choreography/04-choreography.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="choreography.html#choreography-continuity" data-qp-ui-data-id="qp:1">Continuity</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="choreography.html#choreography-creation" data-qp-ui-data-id="qp:2">Creation</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="choreography.html#choreography-radial-reaction" data-qp-ui-data-id="qp:3">Radial reaction</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="choreography-continuity" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Continuity
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>Maintain a clear focal point during transitions by carefully selecting the number and type of elements shared across the transitions. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>All content elements are shared</h1>
                    <p>While a surface is expanding, a significant number of elements should remain visible during the transition. </p>
                    <p>Complex transitions should keep a single element visible (see below).</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/Continuity_01_AllShared_v6-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/Continuity_01_AllShared_v6-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>All elements from this collapsed card form the header of the expanded card.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Few or no content elements are shared</h1>
                    <p>While expanding a surface, if only a <strong>single element</strong> will be present after thetransition, that element should be the focal point of the transition, controlling all otherelements.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/Continuity_02_SingleShared_v6-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/Continuity_02_SingleShared_v6-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Anchoring non-shared content to a single shared element’s movement.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>If there are <strong>no shared elements</strong> between views, anchor all crossfading elements to the surface’s vertical movement. The surface crops the content within.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/Continuity_03_NoShared_v7-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/Continuity_03_NoShared_v7-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Anchoring all non-shared content to the vertical movement of the surface expansion.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>No shared surfaces (Not recommended)</h1>
                    <p>If there are <strong>no common surfaces</strong> shared across the transition, a new surface enters the screen from another location, creating a new focal point.</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Multiple shared elements</h1>
                    <p>When <strong>multiple elements</strong> remain visible during a transition, only the most important ones should be included. Some elements may disappear during the transition but reappear once the transition completes, if they are too distracting during the transition itself.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/Continuity_04_SharedDo_v6-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/Continuity_04_SharedDo_v6-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Guide the user’s focus to the next view using the most important shared element.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/Continuity_05_SharedDont_v6-remapped.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/Continuity_05_SharedDont_v6-remapped.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Avoid creating scenes without focus, such as by using many shared elements or by letting elements cross paths during the transition. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Layout awareness</h1>
                    <p>When any element doesn't completely load by the time a transition completes, allow sufficient space in the location where the element will appear. This prevents jarring layout shifts when the elements finally appear, and avoids user frustration when a touch target suddenly jumps away.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/Continuity_06_LayoutAwareDo_v2.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/Continuity_06_LayoutAwareDo_v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>Make room for the unloaded elements during the transition and gracefully display them in place once they fully load.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/Continuity_07_LayoutAwareDont_v2.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/Continuity_07_LayoutAwareDont_v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Don’t shift the layout as elements load into view, as this distracts and causes a shift in focus.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="choreography-creation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Creation
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>New material surfaces, and their content, may be created from nothing.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h1>Creating new surfaces</h1>
                    <p>Associate newly created surfaces to the element or action that creates them. New surfaces usually emerge from radial or rectangular expansions from the point of touch.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/CreationChoreo_01_OriginDo_v2.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/CreationChoreo_01_OriginDo_v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>This menu appears from the touch point, tying the element to the point of touch.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/CreationChoreo_02_OriginDont_v2.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/CreationChoreo_02_OriginDont_v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>This menu appears far away from the touch point that triggered it, which breaks its relationship with the input method.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Choreographing surfaces</h1>
                    <p>When multiple new surfaces are created at the same time, quickly stagger the appearance of each. Create a clear, smooth focal path in a single direction.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/CreationChoreo_03_StaggerDo_v3.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/CreationChoreo_03_StaggerDo_v3.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>List items have a slightly staggered entrance. Grid items populate left to right, and top to bottom.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/CreationChoreo_04_StaggerDont_v2.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/CreationChoreo_04_StaggerDont_v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Items shouldn’t appear within the list all at once. It’s overwhelming and eliminates a clear focus.</p>
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
                            <source src="../static/media/motion/choreography/CreationChoreo_05_StaggerDont_v2.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/CreationChoreo_05_StaggerDont_v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Items that have a slightly staggered entrance shouldn’t appear in an order that’s confusing to follow.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/CreationChoreo_05b_StaggerDont_v2.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/CreationChoreo_05b_StaggerDont_v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Do not wait for each item to fully animate before introducing the next item. Begin each item’s staggered entrance no more than 20ms apart.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Autonomous surface creation</h1>
                    <p>Surfaces created without user input, or without a point of origin, should do so using an elegant combination of fading, position, and scaling transformations.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/CreationChoreo_06_NewDialogueDo_v2.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/CreationChoreo_06_NewDialogueDo_v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do">Do.</p>
                        <p>An automatically triggered surface appears smoothly and quickly.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/CreationChoreo_07_NewDialogueDont_v2.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/CreationChoreo_07_NewDialogueDont_v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont">Don't.</p>
                        <p>Too much animation during surface creation is distracting.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="choreography-radial-reaction" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Radial reaction
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>Clarify the connection between user input and surface reactions using radial action.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h1>User input</h1>
                    <p>Connect user input to screen reactions by using touch ripples to both indicate the point of touch, and to confirm that touch input was received. For touch or mouse, this occurs at the point of contact.</p>
                    <p>Screen reactions occurring near the point of touch should occur sooner than reactions further away.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/RR_Point_of_Contact_001.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/RR_Point_of_Contact_001.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Use touch ripples to connect screen reactions to the point of touch. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/motion/choreography/02_SearchRipple-v2.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/02_SearchRipple-v2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Starting from the point of touch, the app bar changes color with the new color rippling outwards.</p>
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
                            <source src="../static/media/motion/choreography/01_GridRipple.webm" type="video/webm">
                            <source src="../static/media/motion/choreography/01_GridRipple.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Images in this grid fade out based on the radial reaction around the tap point.</p>
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