<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>权限请求应该简单、透明、可理解。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>应用应该要说明每一个权限请求的原因，可以通过功能名称或者提供的解释来进行说明。</p>
                <p><strong>运行时权限</strong>会在用户需要在应用中执行操作时来请求。</p>
                <p><strong>被拒绝的权限</strong>应该提供反馈和选项。</p>
              </div>
              <div class="module">
                <h3>权限类型</h3>
                <p>在请求权限前先进行指导<br>
                  预先请求权限<br>
                  在需要时请求权限<br>
                  在需要时进行指导<br>
                  提供一个直接的福利<br>
                  只请求相关权限</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/patterns/permissions/patterns_permissions.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="permissions.html#permissions-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="permissions.html#permissions-runtime-permissions" data-qp-ui-data-id="qp:2">运行时权限</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="permissions.html#permissions-request-patterns" data-qp-ui-data-id="qp:3">请求模式</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="permissions.html#permissions-denied-permissions" data-qp-ui-data-id="qp:4">被拒绝的权限</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="permissions-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            用法
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>权限分组</h2>
                    <p>权限可以分为 9 个分组，允许用户授予一个操纵中包含的所有权限。例如，授予的联系人权限包括读取和编辑联系人。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>权限</p></td>
                        <td colspan="1" rowspan="1"><p>描述</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>日历</p></td>
                        <td colspan="1" rowspan="1"><p>管理日历</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>相机</p></td>
                        <td colspan="1" rowspan="1"><p>拍摄照片和录制视频</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>联系人</p></td>
                        <td colspan="1" rowspan="1"><p>管理联系人</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>位置</p></td>
                        <td colspan="1" rowspan="1"><p>当前设备位置</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>麦克风</p></td>
                        <td colspan="1" rowspan="1"><p>录音</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>电话</p></td>
                        <td colspan="1" rowspan="1"><p>拨打和管理电话</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>身体传感器</p></td>
                        <td colspan="1" rowspan="1"><p>心率和类似数据</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>短信</p></td>
                        <td colspan="1" rowspan="1"><p>发送和查看信息</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>存储</p></td>
                        <td colspan="1" rowspan="1"><p>访问照片、媒体和文件</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>默认权限</h2>
                    <p>用户可以执行有明确意图的操作，例如：</p>
                    <ul class="lst-kix_em02k6y82udr-0 start">
                      <li>拍照</li>
                      <li>选择一个联系人</li>
                      <li>开始呼叫或编写短信</li>
                    </ul>
                    <p>在这些情况下，用户的操作清楚地表明了他们的意图，且不需要弹出权限对话框或进行授权。</p>
                    <p></p>
                    <p>
                      <div class="modulettes">
                        <a class="modulette container android" href="http://developer.android.com/guide/components/intents-filters.html" target="_blank">
                          <img alt="" class="icon callout-icon" src="<?= static_url('../static/spec/images/callouts/android.svg'); ?>" loading="lazy"/>
                          <div class="info">
                            <div class="title">意图和意图过滤器</div>
                          </div>
                        </a>
                      </div>
                    使用意图从应用中请求操作。
                    </p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="permissions-runtime-permissions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            运行时权限
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
                    <p>应用可能会在安装后的任意时间请求权限，来访问信息或使用设备功能。当用户需要在应用中执行操作时（例如使用设备相机），应用可能会在那时请求权限。</p>
                    <p>用户也可以在安装应用后的任意时间，从系统的设置中允许或拒绝任意应用的权限。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="runtime-permissions-figure-caption-0" src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_runtime1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="runtime-permissions-figure-caption-0">
                        <p>一个应用请求权限的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="permissions-request-patterns" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            请求模式
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
                    <p>和应用功能相关的权限更有可能被用户授予。以下请求模式将帮助你决定何时以及如何请求权限：</p>
                    <ul class="lst-kix_tp6xw69ibpxb-0 start">
                      <li>权限对于应用核心功能的重要性</li>
                      <li>权限的透明度</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 68.4210526316%">
                          <img alt="" aria-describedby="request-patterns-figure-caption-0" src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_patterns0.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="request-patterns-figure-caption-0">
                        <p>应该预先申请关键权限。辅助权限可以在需要时进行申请。<br/>
                        无论哪种权限，对于不明确的权限都应该提供权限内容的说明。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_patterns1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                    <h2><strong>在请求权限前先进行指导</strong></h2>
                    <p>如果你的应用有 “<a href="../growth-communications/onboarding.html">热烈欢迎</a>”，可以用它来解释你的应用是做什么的，以及为什么需要申请这些额外的权限。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_patterns2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                    <h2><strong>预先申请</strong></h2>
                    <p>在首次启动时，仅申请关键的和明显的权限。</p>
                    <p>因为用户期望短信应用能获取短信权限，因此预先申请这个权限是有意义的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_patterns3.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                    <h2><strong>在需要时申请</strong></h2>
                    <p>先等待着，直到调用某项功能时，再申请这项功能所需的权限。</p>
                    <p>当用户想要使用某项功能时，用户会更愿意授予该项功能所需的权限。</p>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_patterns4.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                    <h2><strong>在需要时进行指导</strong></h2>
                    <p>在需要权限时，对权限进行解释说明，有助于判断用户的兴趣，并加深用户对权限的理解。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_patterns5.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                    </figure>
                    <h2><strong>提供一个直接的福利</strong></h2>
                    <p>提供片刻令人满足的东西，使用户觉得接受权限会更合理。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 540px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 173.703703704%">
                          <video controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_patterns2.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_patterns2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                    <h2><strong>只请求相关权限</strong></h2>
                    <p>当一个功能需要多个权限时，只请求这些权限，不要请求额外的权限。</p>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="permissions-denied-permissions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            被拒绝的权限
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p></p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>当权限被拒绝时需要提供反馈。因为拒绝权限可能导致某个功能无法按预期运行，因此每当有一个权限被拒绝时，都应该向用户进行解释。</p>
                    <p>权限拒绝以下列二选一的方式发生：</p>
                    <ul class="lst-kix_2s2yiam7aofv-0 start">
                      <li>权限请求被用户拒绝</li>
                      <li>因为用户在之前的权限请求中勾选了 “不再询问”，所以权限默认被拒绝，没有提示。</li>
                    </ul>
                    <p>要确保需要权限的功能始终能按预期方式运行，应用应该说明需要的权限，并提供一种方式来允许权限。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="denied-permissions-figure-caption-0" src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_denied1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="denied-permissions-figure-caption-0">
                        <p>为了使用音频功能，snackbar 中显示了需要的权限。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3 h2-spacing">
                  <div class="module">
                    <h2>关键权限</h2>
                    <p>如果应用因为一个关键权限被拒绝而无法再运行，请解释为什么那个权限必须要允许，并提供一个按钮来打开 “设置”，以便用户来允许权限。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="denied-permissions-figure-caption-1" src="<?= static_url('../static/media/patterns/permissions/patterns_permissions_denied2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="denied-permissions-figure-caption-1">
                        <p>此屏幕说明了应用需要权限才能运行，并提供了一个指向 “设置” 的链接，以便用户来允许权限。</p>
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
