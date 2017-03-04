<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p><strong>仅支持 Android</strong></p>
          <h1>指纹识别可用于解锁设备，登录应用以及用于 Google Play 和某些第三方应用的购买的验证。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>要使用指纹验证购买，请显示指纹验证对话框。</p>
                <p>指纹不如复杂的 PIN 或密码安全。指纹验证的备用方案包括用户的账号密码，应用 PIN 和设备证书。</p>
              </div>
              <div class="module">
                <h3><strong>何时使用</strong></h3>
                <p>打开应用的时候<br>
                  在应用的购买流程中<br>
                  在应用的设置中<br>
                  注册后</p>
                <h3><strong>图标</strong></h3>
                <p>指纹图标大小：24dp<br>
                  圆环图标：40dp</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/patterns_fingerprint.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="fingerprint.html#fingerprint-enrollment" data-qp-ui-data-id="qp:1">注册</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="fingerprint.html#fingerprint-authentication" data-qp-ui-data-id="qp:2">验证</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="fingerprint.html#fingerprint-behavior" data-qp-ui-data-id="qp:3">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="fingerprint.html#fingerprint-fingerprint-icon" data-qp-ui-data-id="qp:4">指纹图标</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="fingerprint.html#fingerprint-reauthentication" data-qp-ui-data-id="qp:5">重新验证</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="fingerprint-enrollment" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            注册
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>你的应用在使用指纹之前，必须先获得用户的同意，允许你使用指纹作为验证账户的备用方法。</p>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"><p>邀请用户尝试指纹的时间可以是：</p>
                    <ul class="lst-kix_47wor9z2y2ny-0 start">
                      <li>打开应用时</li>
                      <li>在应用的购买流程中</li>
                      <li>在应用的设置中</li>
                      <li>注册后</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>打开应用时</strong></strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/fingerprint/v_01_fp_enrollment_login_alt_xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/fingerprint/v_01_fp_enrollment_login_alt_xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>用户可以在登录后立即验证其指纹。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/fingerprint/v_02_fp_enrollment_create_acct_after_xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/fingerprint/v_02_fp_enrollment_create_acct_after_xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>用户可以在创建账号后立即注册他们的指纹。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>在应用的购买流程中</strong></strong></h2></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_03_state1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>用户可以在使用现有账户进行购买后，立即验证他们的指纹。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong>在应用的设置中</strong></h2></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/fingerprint/v_04_fp_enrollment_app_settings_xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/fingerprint/v_04_fp_enrollment_app_settings_xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>用户可以在应用的设置中启用指纹锁定功能。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>注册后</strong></strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/fingerprint/v_05_fp_auth_purchase_xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/fingerprint/v_05_fp_auth_purchase_xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>注册后，每当需要用户验证时都可以出现指纹对话框。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="fingerprint-authentication" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            验证
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>用户可以设置使用指纹来验证登录、或验证购买行为。</p>
              <p>当需要验证用户操作时，显示指纹验证对话框代替登录界面。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>标题</strong></p>
                    <p>使用标题来描述正在执行的操作，例如 “登录” 。标题不应该用来介绍指纹。</p>
                    <p><strong>副文本</strong></p>
                    <p>使用 “确认指纹” 来和 Android 的设置保持一致性。</p>
                    <p>你可以将上述文本和用户的操作相结合，例如 “确认指纹以完成购买” 。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_06-.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>指纹验证对话框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_07.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>指纹验证对话框规格：</p>
                        <p>对话框左右内边距：24dp<br>
                          对话框顶部内边距：24dp<br>
                          标题底部外边距：20dp<br>
                          副标题底部外边距：28dp<br>
                          指纹图标右侧外边距：16dp<br>
                          触摸传感器高度：40dp<br>
                          触摸传感器文本上下外边距：12dp<br>
                          按钮容器高度：52dp<br>
                          按钮容器底部内边距：8dp<br>
                          按钮高度：36p<br>
                          按钮左右边距：8dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="fingerprint-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            行为
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
                    <h2><strong><strong>默认状态</strong></strong></h2>
                    <p>要求用户将他们的手指放在传感器上。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_08.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>默认状态要求用户将他们的手指放在传感器上</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>成功状态</strong></strong></h2>
                    <p>一旦识别到指纹，将对话框更改为成功的消息，将图像更改为带有复选标记的指纹图标。</p>
                    <p>规格：</p>
                    <ul class="lst-kix_snh2q96njwby-0 start">
                      <li>成功的文本和图标使用应用的主色，或使用 Teal 500 (#009688)</li>
                    </ul>
                    <p>成功状态应避免：</p>
                    <ul class="lst-kix_pv1kglh59qr0-0 start">
                      <li>同时显示两个成功状态</li>
                      <li>默认状态和成功状态之间的过渡太多</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_09.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>表示指纹已被识别的成功消息</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>失败状态</strong></strong></h2>
                    <p>失败时，提供一个清楚的提示，可以是带或不带状态消息的错误图标，告诉用户指纹未被识别，可以再次尝试。</p>
                    <p>规格：</p>
                    <ul class="lst-kix_snh2q96njwby-0">
                      <li>使用用于失败状态的应用色调，或者 Deep Orange 600 (#F4511E)</li>
                    </ul>
                    <p>失败状态应避免：</p>
                    <ul class="lst-kix_hptt6efiv41m-0 start">
                      <li>默认状态和失败状态之间的过渡太多</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_10.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>指出无法识别指纹的错误信息</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>退出</strong></strong></h2>
                    <p>提供其他方法退出对话框。至少，要提供关闭指纹对话框的功能，例如 “取消” 按钮。</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>指纹验证的替代方案</strong></strong></h2>
                    <p>指纹不应该是唯一的验证方式。提供其他身份验证方法，例如：</p>
                    <ul class="lst-kix_mj3hmnye60y2-0 start">
                      <li>用户的账号密码</li>
                      <li>应用 PIN</li>
                      <li><a href="https://www.google.com/url?q=https://developer.android.com/preview/api-overview.html%23confirm-credential&amp;sa=D&amp;ust=1481818027268000&amp;usg=AFQjCNHE1rk2HMXWl_KBmaPpZYFcpxaINw" target="_blank">设备证书</a></li>
                    </ul>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="fingerprint-fingerprint-icon" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            指纹图标
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
                    <h2><strong><strong>用法和大小</strong></strong></h2>
                    <p>指纹图标应该以标准的系统图标大小 24dp，显示在 40dp 的圆圈内。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_11_state1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>40dp 的圆圈</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_11_state2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>24dp 的系统图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>默认图标</strong></strong></h2>
                    <p>用户会在可以使用指纹的地方找到此图标。</p>
                    <p>规格：</p>
                    <ul class="lst-kix_cwipeaharukh-0 start">
                      <li>圆圈背景色：#607D8B</li>
                      <li>运行在白色背景上</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_12_state1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>默认图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_12_state2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>对话框和默认图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>有色图标</strong></strong></h2>
                    <p>图标外的圆圈可以使用不同颜色来定制，该颜色为指纹图标提供合适的对比度。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_13_state1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>有对比度的有色图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_15_state1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要使用带多种颜色的指纹图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>浅色背景的 UI 界面上</strong></p>
                    <p>使用带深色圆圈背景的指纹图标。</p>
                    <p>规格：</p>
                    <ul class="lst-kix_qoe5s0qzeerw-0 start">
                      <li>颜色：#FFFFFF</li>
                      <li>不透明度：100%</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_13_state2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>浅色背景下，使用带深色圆圈背景的指纹图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <p><strong>深色背景的 UI 界面上</strong></p>
                    <p>使用带浅色圆圈背景的指纹图标。</p>
                    <p>规格：</p>
                    <ul class="lst-kix_gb25ynglkofj-0 start">
                      <li>颜色：#000000</li>
                      <li>不透明度：54%</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong><strong>没有圆形背景的图标</strong></strong></h2>
                    <p>需要更多通用指纹图标的应用可能会消除圆形背景。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_14_state1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>没有圆形背景的图标</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_14_state2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>没有圆形背景图标的对话框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-figure col-3">
                  <div class="module"></div>
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_15_state2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要倾斜或扭曲指纹图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="fingerprint-reauthentication" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            重新验证
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
                    <p>重新验证适用于用户在继续操作之前需要确认其身份的情况。</p>
                    <p>重新验证用于：</p>
                    <ul class="lst-kix_kjm079cq6g2q-0 start">
                      <li>防止未经授权查看敏感信息</li>
                      <li>防止未经授权的购买行为</li>
                      <li>当加密密钥过期时，用户会被要求重新确认其身份</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_16-.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>重新验证对话框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>或者，如果用户不考虑使用指纹验证，你可以要求他们使用备用密码，并在下一次提醒他们使用指纹。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/fingerprint/components_fp_17-.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>询问用户备用密码的对话框</p>
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