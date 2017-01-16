<?php
$vars = array(
  'title' => 'Gestures',
  'category' => '模式',
  'theme_color' => '#FB8C00',
  'color_name' => 'orange',
  'prev_title' => 'Fingerprint',
  'prev_path' => 'patterns/fingerprint',
  'next_title' => 'Help &amp; feedback',
  'next_path' => 'patterns/help-feedback'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Gestures</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p><strong>Mobile only</strong></p>
          <h1>Gestures include <strong>touch mechanics</strong> (what your fingers do on the screen) and <strong>touch activities</strong> (results of specific gestures).</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>A <strong>touch mechanic</strong> may cause different outcomes, depending on the context in which it is used. For example, a <strong>long press</strong> may select an element like a list item.</p>
                <p>A <strong>touch activity</strong> may be achieved through combining multiple touch mechanics. For example, by using the touch mechanics of pinch open, double-touch, or double-touch and dragging, a user may zoom in on a view.</p>
              </div>
              <div class="module">
                <h3><strong>Types of drag, swipe, and fling activities</strong></h3>
                <p>Scroll<br>
                  Reveal upon scroll<br>
                  Pan<br>
                  Dismiss<br>
                  Swipe to refresh<br>
                  Edge swipe<br>
                  Paging swipe<br>
                  Overscroll collapse<br>
                  Menu open<br>
                  Tilt</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/gestures/patterns_gestures.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gestures.html#gestures-touch-mechanics" data-qp-ui-data-id="qp:1">Touch mechanics</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gestures.html#gestures-touch-activities" data-qp-ui-data-id="qp:2">Touch activities</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="gestures.html#gestures-drag-swipe-or-fling-details" data-qp-ui-data-id="qp:3">Drag, swipe, or fling details</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="gestures-touch-mechanics" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Touch mechanics
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
                    <p>Touch mechanics refer to what the user's fingers do on the screen.</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-touch_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Touch</p>
                        <p>One-finger press, lift</p>
                        <p><em>Example: Select</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-double-touch_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Double touch</p>
                        <p>One-finger press, lift, one-finger press, lift</p>
                        <p><em>Example: Zoom in</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-swipe_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Drag, Swipe, or Fling</p>
                        <p>One-finger press, move, lift</p>
                        <p><em>Example: Dismiss, scroll, tilt, etc.</em></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-long-press_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Long press</p>
                        <p>One-finger press, wait, lift</p>
                        <p><em>Example: Select an element, such as a list item</em></p>
                        <p>Long press is not used to display a contextual menu.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-long-press-drag_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Long-press drag</p>
                        <p>One-finger press, wait, move, lift</p>
                        <p><em>Example: Pick up and move, select multiple items</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchMechanics-6-Long-press-drag_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Double-touch drag</p>
                        <p>One-finger press, lift, one-finger press, move, lift</p>
                        <p><em>Example: Zoom in, zoom out</em></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-pinch-open_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Pinch open</p>
                        <p>Two-finger press, move outwards, lift</p>
                        <p><em>Example: Zoom in</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-pinch-closed_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Pinch closed</p>
                        <p>Two-finger press, move inwards, lift</p>
                        <p><em>Example: Zoom out</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-two-finger-touch_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Two-finger touch</p>
                        <p>Two-finger press, lift</p>
                        <p><em>Example: Zoom out</em></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-two-finger-swipe_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Two-finger swipe, drag, fling</p>
                        <p>Two-finger press, move, lift</p>
                        <p><em>Example: Select multiple items, pan, tilt</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-two-finger-long-press_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Two-finger long-press</p>
                        <p>Two-finger press, wait, lift</p>
                        <p><em>Example: None; this gesture is uncommon.</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-two-finger-long-press-drag_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Two-finger long-press drag</p>
                        <p>Two-finger press, wait, move, lift</p>
                        <p><em>Example: Pick up and move</em></p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-module col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-two-finger-double-touch_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Two-finger double touch</p>
                        <p>Two-finger press, lift, two-finger press, lift</p>
                        <p><em>Example: Zoom out</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/patterns-gestures-gestures-rotate_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Rotate</p>
                        <p>Two-finger press, simultaneously orbit both fingers around the center point, lift</p>
                        <p><em>Example: Rotate content, such as a map</em></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="gestures-touch-activities" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Touch activities
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
                    <p>Specific gestures and their results, in context.</p></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Action</p></td>
                        <td colspan="1" rowspan="1"><p>Description</p></td>
                        <td colspan="1" rowspan="1"><p>Touch mechanics</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Activate</p></td>
                        <td colspan="1" rowspan="1"><p>Activates a screen element, like a button</p></td>
                        <td colspan="1" rowspan="1"><p>Touch</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Cancel or Escape </p></td>
                        <td colspan="1" rowspan="1"><p>Cancels or escapes out of the current task, as in dialogs or menus</p></td>
                        <td colspan="1" rowspan="1"><p>Touch</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Enable/Disable lights out</p></td>
                        <td colspan="1" rowspan="1"><p>Hides or shows a view’s chrome</p></td>
                        <td colspan="1" rowspan="1"><p>Touch</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Drag or Swipe or Fling</p></td>
                        <td colspan="1" rowspan="1"><p>See the following section <strong>Drag, swipe, or fling details </strong>for distinctions between Scroll, Reveal upon scroll, Pan, Dismiss, Swipe to refresh, Edge swipe, Paging swipe, Overscroll collapse, Menu open, and Tilt</p></td>
                        <td colspan="1" rowspan="1"><p>Drag, Swipe, or Fling</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Data selection (when nothing is selected)</p></td>
                        <td colspan="1" rowspan="1"><p>Selects a single element </p></td>
                        <td colspan="1" rowspan="1"><p>Long press, two-finger touch</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Data selection (when items are already selected)</p></td>
                        <td colspan="1" rowspan="1"><p>Selects additional elements while in selection mode <br><br>Can use any combination of subsequent one- or two-finger gestures </p>
                        </td>
                        <td colspan="1" rowspan="1"><p>Touch, two-finger touch </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Data multi-selection drag</p></td>
                        <td colspan="1" rowspan="1"><p>Reveals selection box that originates from point of gesture initiation <br>
                          The height and width can be adjusted based on finger position. <br>
                          The final selection is based on selection box dimensions upon finger(s) lifting. </p>
                        </td>
                        <td colspan="1" rowspan="1"><p>Two-finger swipe or drag, long-press drag with no items selected</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Pick up and move</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Affects the selected item or items. It can be used to:</p>
                          <ul class="lst-kix_87296p16xwc6-0 start">
                            <li>Rearrange data within a view</li>
                            <li>Move an item into a container or onto a target</li>
                            <li>Reorder items in a list or a card collection</li>
                          </ul>
                        </td>
                        <td colspan="1" rowspan="1"><p>Two-finger long-press drag, long-press drag on selected item </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Zoom in</p></td>
                        <td colspan="1" rowspan="1"><p>Scales up content </p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_8qwygmagtvy0-0 start">
                            <li>Double-touch</li>
                            <li>Double-touch drag (down)</li>
                            <li>Pinch open</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Zoom in to fit</p></td>
                        <td colspan="1" rowspan="1"><p>For nested views, scales up the smallest targetable view</p></td>
                        <td colspan="1" rowspan="1"><p>Double-touch</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Zoom out</p></td>
                        <td colspan="1" rowspan="1"><p>Scales down content</p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_5tkx0uf52vs8-0 start">
                            <li>Double-touch at maximum zoom</li>
                            <li>Double-touch drag (up)</li>
                            <li>Pinch closed</li>
                            <li>Two-finger touch</li>
                            <li>Two-finger double touch</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Expand</p></td>
                        <td colspan="1" rowspan="1"><p>Expands collapsed content</p></td>
                        <td colspan="1" rowspan="1"><p>Pinch open</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Collapse</p></td>
                        <td colspan="1" rowspan="1"><p>Collapses expanded content </p></td>
                        <td colspan="1" rowspan="1"><p>Pinch closed</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Rotate</p></td>
                        <td colspan="1" rowspan="1"><p>Rotates the targeted content </p></td>
                        <td colspan="1" rowspan="1"><p>Rotate</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="gestures-drag-swipe-or-fling-details" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Drag, swipe, or fling details
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
                  <div class="module"><p>Swipe gesture activities vary based on context. The speed at which a gesture is performed is the primary distinction between Drag, Swipe, and Fling. </p>
                    <ul class="lst-kix_dqkz0dcg8yod-0 start">
                      <li><strong>Drag: </strong>Fine gesture, slower, more controlled, typically has an on-screen target</li>
                      <li><strong>Swipe:</strong> Gross gesture, faster, typically has no on-screen target</li>
                      <li><strong>Fling:</strong> Gross gesture, with no on-screen target</li>
                    </ul>
                    <p>Gesture velocity impacts whether the action is immediately reversible. </p>
                    <ul class="lst-kix_hdososeh0xki-0 start">
                      <li>A swipe becomes a fling based on ending velocity and whether the affected element has crossed a threshold (or point past which an action can be undone).</li>
                      <li>A drag maintains contact with an element, so reversing the direction of the gesture will drag the element back across the threshold.</li>
                      <li>A fling moves at a faster speed and removes contact with the element while it crosses the threshold, preventing the action from being undone.</li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong><strong>Scroll</strong></strong></h3>
                    <p>A <strong>scroll</strong> is a vertical or horizontal swipe in a single direction within the content body. </p>
                    <p>Usage</p>
                    <ul class="lst-kix_bgu778u1biv8-0 start">
                      <li>Scroll amount varies based on velocity of gesture: drag (slow) vs. swipe vs. fling (fast).</li>
                      <li>Scrolled content should move at the same rate as the gesture being performed. The content should feel "anchored" to the finger or touch device.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-02_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Example of scroll directions</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong><strong>Reveal upon scroll</strong></strong></h3>
                    <p><strong>Reveal upon scroll</strong> means that reversing the scroll direction in a content area reveals hidden in-app elements. E.g., scrolling up in Chrome shows the Omnibox. To dismiss these in-app elements, resume the original scroll direction.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-02_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Example of scroll directions</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong><strong>Pan</strong></strong></h3>
                    <p>A <strong>p</strong><strong>an</strong> is an omnidirectional one- or two-finger gesture that expands the field of view. Drag is typically used with pan. Fling will maintain gesture velocity, resulting in a significant pan of the content along the direction of the fling gesture.</p>
                    <p>Pan is applied to:</p>
                    <ul class="lst-kix_dy48eaq34c2v-0 start">
                      <li>Unbounded content (maps)</li>
                      <li>Content that is larger than the screen height or width (zoomed in web page or photo)</li>
                    </ul>
                    <p>A <strong>two-finger pan</strong> occurs when transitioning from another two-finger gesture (e.g., pinch zoom or rotate) such as in Maps. When a gesture begins with a two-finger pan it results in <strong>tilt</strong>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-03_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a pan</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong><strong>Dismiss</strong></strong></h3>
                    <p>A <strong>dismiss</strong> gesture originates on a swipeable element, such as a list item or card, orthogonal to the direction of scrolling.</p>
                    <p>The gesture is typically horizontal.</p>
                    <p>The dismiss gesture is committed based on crossing a threshold.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-04_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a dismiss gesture</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong><strong>Swipe to refresh</strong></strong></h3>
                    <p><strong>Swipe to refresh </strong>usually occurs in a vertical and downward movement. It is available at the top of a list, or at the edge of any card or container where new content surfaces.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-05_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Example of the swipe to refresh gesture</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong>Edge swipe</strong></h3>
                    <p>An <strong>edge swipe</strong> gesture originates outside of the screen to reveal off-screen content. It invokes content separate from the current view.</p>
                    <p>If no edge swipe action is defined, an edge swipe can default to a <strong>paging swipe</strong>.</p>
                    <p>The edge swipe gesture is committed based on crossing a threshold.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-06_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an edge swipe</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong><strong>Paging swipe</strong></strong></h3>
                    <p>A <strong>paging swipe</strong> is an on-screen, in-content swipe that reveals related off-screen content. It reveals one page/tab per paging swipe.</p>
                    <p>If paged content is at &gt;100% zoom, an in-content swipe will <strong>Pan</strong> to an edge of the content, and an additional in-content swipe will <strong>Page</strong>.</p>
                    <p>The Paging swipe gesture is committed based on crossing a threshold.</p>
                    <p>Don’t use paging swipes when individual elements are swipeable. </p>
                    <p>See below: Overscroll collapse</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-07_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a paging swipe</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong><strong>Overscroll collapse</strong></strong></h3>
                    <p><strong>Overscroll collapse </strong>navigates up in the content hierarchy via a paging swipe at the top or bottom of scrolling content.</p>
                    <p>The Overscroll collapse gesture is committed based on crossing a threshold.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-08_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an overscroll collapse</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong><strong>Menu open</strong></strong></h3>
                    <p>A drag originating from a menu or picker reveals a menu. Upon lift, the highlighted menu option is selected.</p>
                    <p>The menu then appears upon touch. </p>
                    <p>Drag is used with <strong>Menu open</strong>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-09_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a menu open drag</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h3><strong><strong>Tilt</strong></strong></h3>
                    <p><strong>Tilt</strong> moves 3D content forward or backward.</p>
                    <p>The transition from another two-finger gesture (e.g., pinch zoom or rotate) such as in Maps, will result in a <strong>two-finger pan</strong>.</p>
                    <p>Drag is used with <strong>Tilt</strong>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/gestures/Patterns-Gestures-TouchActivities-10_large_xhdpi.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a tilt</p>
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

<?php
include $public_files['footer'];
?>