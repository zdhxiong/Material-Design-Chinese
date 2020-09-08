<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>材料的动画灵敏且自然。使用这些缓动曲线和持续时间模式来创建平滑连贯的动效。</p>
              </div>
              <div class="module">
                <h3>缓动曲线</h3>
                <p>标准曲线<br>
                  减速曲线<br>
                  加速曲线<br>
                  夏普曲线</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 720px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/motion/duration-easing/01-duration-and-easing.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="duration-easing.html#duration-easing-speed" data-qp-ui-data-id="qp:1">速度</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="duration-easing.html#duration-easing-dynamic-durations" data-qp-ui-data-id="qp:2">动态时长</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="duration-easing.html#duration-easing-common-durations" data-qp-ui-data-id="qp:3">常用时长</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="duration-easing.html#duration-easing-natural-easing-curves" data-qp-ui-data-id="qp:4">自然缓动曲线</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="duration-easing-speed" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            速度
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
                    <p>当元素在移动或者形变时，速度应足够快，快到可以避免用户等待，但同时也要足够慢，慢到过渡动画可以被理解。保持过渡简短，因为用户会频繁的看到这些过渡动画。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="speed-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/QuickResponse_01_QuickDo_v2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/QuickResponse_01_QuickDo_v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="speed-figure-caption-0">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>动画要足够快，这样用户无需等待动画结束。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 100.0%">
                          <video aria-describedby="speed-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/QuickResponse_01_QuickDont_v3.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/QuickResponse_01_QuickDont_v3.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="speed-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要使动画过慢，因为这样会导致不必要的延迟。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="duration-easing-dynamic-durations" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            动态时长
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
                    <p>与其对所有的动效都使用相同的持续时间，不如根据移动距离，物体的速度以及形变来调整每个动效的时长。</p>
                    <p><a href="movement.html#movement-movement-in-out-of-screen-bounds">元素离开屏幕时</a>可以使用较短的动效时长，因为这不需要引起用户的注意。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 46.0526315789%">
                          <video aria-describedby="dynamic-durations-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/DynamicDurations_01_LongDistance-v2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/DynamicDurations_01_LongDistance-v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="dynamic-durations-figure-caption-0">
                        <p>物体需要移动较长距离、或者面积的变化较大时，需要使用较长的动画时长。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 46.0526315789%">
                          <video aria-describedby="dynamic-durations-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/DynamicDurations_02_ShortDistance-v2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/DynamicDurations_02_ShortDistance-v2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="dynamic-durations-figure-caption-1">
                        <p>物体需要移动的距离较短、或者面积的变化较小时，需要使用较短的动效时长，这样动画看起来不会显得很缓慢。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="duration-easing-common-durations" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            常用时长
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module"><h2>移动端</h2>
                    <p>移动端的过渡时长通常在 300ms 内，根据情况可做如下调整：</p>
                    <ul class="lst-kix_j29t0uw7155t-0 start">
                      <li>幅度大、复杂的、全屏过渡动画可能需要更长的持续时间，可以长达 375ms</li>
                      <li>元素进入屏幕需要的时长为 225ms</li>
                      <li>元素离开屏幕需要的时长为 195ms</li>
                    </ul>
                    <p>超过 400ms 的过渡动画可能会感觉太慢。</p>
                    <h2>大屏设备</h2>
                    <p>在大屏设备上，相同时间内，元素长距离移动时，速度的峰值会比短距离移动时更大。更大的屏幕需要更长的过渡时长，以确保元素不会移动过快。</p>
                    <h2>平板</h2>
                    <p>平板上的过渡时长会比手机上的长 30%。例如，在手机上需要 300ms 的过渡，在平板上需要增加到 390ms。</p>
                    <h2>可穿戴设备</h2>
                    <p>可穿戴设备上的过渡时长会比手机上的短 30%。例如，在手机上需要 300ms 的过渡，在可穿戴设备上需要减少到 210ms。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 71.0526315789%">
                          <video aria-describedby="common-durations-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/CommonDurations_01_3Devices_v1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/CommonDurations_01_3Devices_v1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="common-durations-figure-caption-0">
                        <p>因为在大屏设备上，元素需要移动更长的距离，所以过渡动画会比小屏设备稍慢一点。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>桌面端</h2>
                    <p>桌面端的动画应该比手机端更快、更简单。动画的持续时间应保持在 150ms 到 200ms 之间。</p>
                    <p>桌面端的过渡动画可能不太明显，所以应该比手机端的动画更敏捷快速。</p>
                    <p>Web 端复杂的动画通常会掉帧（除非使用了 GPU 加速）。更短的过渡时间可以让动画不那么引人注目。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 57.8947368421%">
                          <video aria-describedby="common-durations-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/CommonDurations_02_Desktop_v1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/CommonDurations_02_Desktop_v1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="common-durations-figure-caption-1">
                        <p>桌面端的过渡动画会更快。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="duration-easing-natural-easing-curves" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            自然缓动曲线
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>自然缓动曲线会影响元素的速度、不透明度和缩放。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>动画中加速度和减速度的改变应该平滑，这样才不会显得呆板。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 46.0526315789%">
                          <video controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_01_CurveNoCurve_v1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_01_CurveNoCurve_v1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>当加速度和减速度不对称时，动画会显得更自然和愉悦。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 46.0526315789%">
                          <video controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_00_AsymetricCurve_v1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_00_AsymetricCurve_v1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module col-1 h1-spacing">
                  <div class="module">
                    <h1>缓动曲线</h1>
                    <p>根据所使用的平台或软件不同，缓动曲线会有不同的命名。这份指南把它们称为标准曲线、减速曲线、加速曲线和夏普曲线。</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>标准曲线</h1>
                    <p>标准曲线（也称为 “ease in out” ）是最常见的缓动曲线。元素会在屏幕上的位置之间快速加速，缓慢减速。它主要用于材料变大变小，以及其他属性改变的动画。</p>
                    <p>更多信息详见<a href="movement.html#movement-movement-within-screen-bounds">屏幕内的移动</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 46.0526315789%">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_02_StandardCurve_v1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_02_StandardCurve_v1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>平台</p></td>
                        <td colspan="1" rowspan="1"><p>约定</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Android</p></td>
                        <td colspan="1" rowspan="1"><p>FastOutSlowInInterpolator</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>iOS</p></td>
                        <td colspan="1" rowspan="1">
                          <p>[[CAMediaTimingFunction alloc]
                          initWithControlPoints:0.4f:0.0f:0.2f:1.0f]</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CSS</p></td>
                        <td colspan="1" rowspan="1"><p>cubic-bezier(0.4, 0.0, 0.2, 1);</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>After Effects</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Outgoing Velocity: 40%<br>
                          Incoming Velocity: 80%</p>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>减速曲线</h1>
                    <p>使用减速曲线（也称为 “ease out” ）时，元素会全速进入屏幕，然后缓慢减速到目标位置。</p>
                    <p>减速期间，元素可能会放大尺寸（到 100%）或不透明度（到 100%）。在一些情况下，当元素以 0% 的不透明度进入屏幕时，可能会从比原始尺寸更大的尺寸略微收缩一点。</p>
                    <p>更多信息详见<a href="movement.html#movement-movement-in-out-of-screen-bounds">进出屏幕时的移动</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 46.0526315789%">
                          <video controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_03_DecelerationCurve_v1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_03_DecelerationCurve_v1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>平台</p></td>
                        <td colspan="1" rowspan="1"><p>约定</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Android</p></td>
                        <td colspan="1" rowspan="1"><p>LinearOutSlowInInterpolator</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>iOS</p></td>
                        <td colspan="1" rowspan="1"><p> [[CAMediaTimingFunction alloc] initWithControlPoints:0.0f:0.0f:0.2f:1.0f]</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CSS</p></td>
                        <td colspan="1" rowspan="1"><p>cubic-bezier(0.0, 0.0, 0.2, 1);</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>After Effects</p></td>
                        <td colspan="1" rowspan="1"><p>Outgoing Velocity: 0%<br> Incoming Velocity: 80%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>加速曲线</h1>
                    <p>使用加速曲线（也称为 “ease in” ）时，元素会全速离开屏幕。离开屏幕时不会减速。</p>
                    <p>在动画开始时会加速，并可能缩小尺寸（到 0%）或不透明度（到 0%）。在一些情况下，当元素以 0% 的不透明度离开屏幕时，同时可能会放大或缩小尺寸。</p>
                    <p>更多细节详见<a href="movement.html#movement-movement-in-out-of-screen-bounds">进出屏幕时的移动</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 46.0526315789%">
                          <video controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_04_AccelerationCurve_v1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_04_AccelerationCurve_v1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>平台</p></td>
                        <td colspan="1" rowspan="1"><p>约定</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Android</p></td>
                        <td colspan="1" rowspan="1"><p>FastOutLinearInInterpolator</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>iOS</p></td>
                        <td colspan="1" rowspan="1"><p>[CAMediaTimingFunction alloc] initWithControlPoints:0.4f:0.0f:1.0f:1.0f]<br></p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CSS</p></td>
                        <td colspan="1" rowspan="1"><p>cubic-bezier(0.4, 0.0, 1, 1);<br>
                        </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>After Effects</p></td>
                        <td colspan="1" rowspan="1"><p>Outgoing Velocity: 40%<br> Incoming Velocity: 0%</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module"><h1>夏普曲线<br>
                  </h1>
                    <p>使用夏普曲线（也称为 “ease in out” ）时，元素会很快的加速和减速。主要用在已有的元素离开屏幕后重新返回时。</p>
                    <p>元素可以在屏幕的起始点快速加速，然后以对称曲线快速减速到离开屏幕的点。它的减速度比标准曲线快，因为在离开屏幕时并不存在明确的路径。元素可能在任何时候返回。</p>
                    <p>更多细节详见<a href="movement.html#movement-movement-in-out-of-screen-bounds">退出屏幕时的移动</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 46.0526315789%">
                          <video controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_05_SharpCurve_v1.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/motion/duration-easing/NaturalEasing_05_SharpCurve_v1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>平台</p></td>
                        <td colspan="1" rowspan="1"><p>约定</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Android</p></td>
                        <td colspan="1" rowspan="1"><p>-</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>iOS </p></td>
                        <td colspan="1" rowspan="1"><p>-</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CSS</p></td>
                        <td colspan="1" rowspan="1"><p>cubic-bezier(0.4, 0.0, 0.6, 1);</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>After Effects</p></td>
                        <td colspan="1" rowspan="1"><p>Outgoing Velocity: 40%<br> Incoming Velocity: 40%</p></td>
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
