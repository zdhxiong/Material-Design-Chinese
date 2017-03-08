<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>权限请求应该简单、透明、可理解。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>应用应该要说明每一个权限请求的原因，可以通过功能名词或者提供的解释来进行说明。</p>
                <p><strong>运行时权限</strong>会在用户需要在应用中执行操作时来请求。</p>
                <p><strong>被拒绝的权限</strong>应该提供反馈和选项。</p>
              </div>
              <div class="module">
                <h3><strong>权限类型</strong></h3>
                <p>在请求权限前先进行指导<br>
                  预先请求权限<br>
                  在需要时请求权限<br>
                  在需要时进行指导<br>
                  提供一个直接的好处<br>
                  只请求相关权限</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/patterns/permissions/patterns_permissions.png'); ?>"/>
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
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>权限分组</strong></strong></h2>
                    <p>权限可以分为 9 个分组，允许用户授予单个操纵中包含的所有权限。例如，授予的联系人权限包括读取和编辑联系人。</p>
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
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>默认权限</strong></strong></h2>
                    <p>用户可以执行有明确意图的操作，例如：</p>
                    <ul class="lst-kix_em02k6y82udr-0 start">
                      <li>拍照</li>
                      <li>选择一个联系人</li>
                      <li>开始呼叫或编写短信</li>
                    </ul>
                    <p>在这些情况下，用户的操作清楚地表明了他们的意图，且不需要弹出权限对话框或进行授权。</p>
                    <p></p>
                    <div class="modulettes">
                      <a class="modulette container android" href="https://www.google.com/url?q=http://developer.android.com/guide/components/intents-filters.html&amp;sa=D&amp;ust=1481818002243000&amp;usg=AFQjCNFfT6XSBf74_LqfVqUqBpvFHpJPDA" target="_blank">
                        <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/android.svg'); ?>">
                        <div class="info">
                          <div class="title">意图和意图过滤器</div>
                          <span class="subtitle"></span>
                        </div>
                        </img>
                      </a>
                    </div>
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
                    <p>用户也可以在安装后应用的任意时间，从系统的设置中允许或拒绝任意应用的权限。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_runtime1.png'); ?>"/>
                      </div>
                      <figcaption>
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
                  <div class="module"><p>你的权限策略取决于你请求的权限类型的清晰度和重要性。这些模式提供了不同的方式来向用户介绍权限。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_patterns0.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>应该预先申请关键权限。辅助权限可以在需要时进行申请。</p>
                        <p>不明确的权限应该提供权限内容的说明，无论是预先申请权限，还是在需要时申请权限。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_patterns1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2><strong>在请求权限前先进行指导</strong></h2>
                        <p>如果你的应用有 “热烈欢迎”，可以用它来解释你的应用是做什么的，以及为什么需要申请这些额外的权限。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_patterns2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2><strong>预先申请</strong></h2>
                        <p>在首次启动时，仅申请关键的和明显的权限。</p>
                        <p>因为用户期望短信应用能获取短信权限，因此预先申请这个权限是有意义的。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_patterns3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2><strong>Ask in context</strong></h2>
                        <p>Wait until a feature is invoked to request permission. </p>
                        <p>Users are more likely to allow a permission when they want to use the feature it enables.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_patterns4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2><strong>Educate in context</strong></h2>
                        <p>Explaining a permission in context helps gauge user interest and improve comprehension of the permission.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_patterns5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2><strong>Provide an immediate benefit </strong></h2>
                        <p>Provide instant gratification to make accepting a permission feel justified.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_patterns2.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_patterns2.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <h2><strong>Only ask for relevant permissions</strong></h2>
                        <p>When more than one permission is needed for a feature to work, ask for those permissions only and nothing extra.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="permissions-denied-permissions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Denied permissions
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
                    <p>Provide feedback whenever a permission is denied. Because denying permissions may prevent a feature from working as intended, whenever a permission is denied it should be explained to the user.</p>
                    <p>Permission denials occur in one of two ways: </p>
                    <ul class="lst-kix_2s2yiam7aofv-0 start">
                      <li>A permission request is denied by the user</li>
                      <li>A permission is silently denied without warning because a user once selected “Don’t ask again” from a previous permission request</li>
                    </ul>
                    <p>To ensure that features requiring permission always behave as intended, the app should state that permission is needed and provide a way to allow it.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_denied1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>A snackbar displays the need for permission in order to use an audio feature. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>Critical permissions</strong></strong></h2>
                    <p>If the app can no longer run because a critical permission has been denied, explain why that permission must be allowed and offer a button to open Settings so the user can allow it.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/permissions/patterns_permissions_denied2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>A screen explains that a permission is needed for an app to function, with a link to allow that permission in Settings.</p>
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