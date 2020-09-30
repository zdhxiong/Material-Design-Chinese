<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p><strong>仅限 Android</strong></p>
          <h1>当应用不处于使用状态时，通知可以提供简短、即时和相关的信息。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-figure col-3 h3-spacing">
              <div class="module">
                <p>通知旨在告知用户应用中的事件。这两种类型的通知是最有效的：</p>
                <ul class="lst-kix_v2rnvrv35tc9-0 start">
                  <li>与其他用户的通信</li>
                  <li>适时且内容翔实的任务提醒</li>
                </ul>
              </div>
              <div class="module">
                <h3>通知组件</h3>
                <p>头部区域<br>
                  内容区域<br>
                  操作区域</p>
                <h3>如何使用户注意到通知</h3>
                <ul class="lst-kix_u3mgmsnrubnc-0 start">
                  <li>显示一个状态栏图标</li>
                  <li>在锁屏界面显示</li>
                  <li>播放声音或震动</li>
                  <li>在当前屏幕出现</li>
                  <li>闪烁设备的 LED</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?= static_url('../static/media/patterns/notifications/patterns-notifications.png'); ?>" loading="lazy"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-anatomy-of-a-notification" data-qp-ui-data-id="qp:1">剖析通知</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-usage" data-qp-ui-data-id="qp:2">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-behavior" data-qp-ui-data-id="qp:3">行为</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-types-of-notifications" data-qp-ui-data-id="qp:4">通知类型</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-settings" data-qp-ui-data-id="qp:5">设置</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-lock-screen" data-qp-ui-data-id="qp:6">锁屏</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-style" data-qp-ui-data-id="qp:7">样式</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-templates" data-qp-ui-data-id="qp:8">模版</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="notifications-anatomy-of-a-notification" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            剖析通知
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
                  <div class="module">
                    <h2>概述</h2>
                    <p>通知旨在使用户更易于扫视，更易于使用通知中最重要的元素：</p>
                    <p><strong>主要内容</strong></p>
                    <p>内容是通知中最重要的元素。次要信息（如时间）较小，被合并显示在主要内容的上方。</p>
                    <p><strong>联系人</strong></p>
                    <p>如果通知涉及到一个联系人，那么其头像会出现在通知的右侧，从其他内容中脱颖而出。</p>
                    <p><strong>操作</strong></p>
                    <p>对于可展开的通知，可以点击箭头图标来展开通知。操作按钮使用文本，显示在单独的背景色或位置上。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 60.0%">
                          <img alt="" aria-describedby="anatomy-of-a-notification-figure-caption-0" src="<?= static_url('../static/media/patterns/notifications/notifications-anatomy-01-states.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="anatomy-of-a-notification-figure-caption-0">
                        <p>展开状态和折叠状态的通知</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>头部区域</h2>
                    <p>头部区域包括：</p>
                    <p><strong>1. 应用图标：</strong>应用图标是一个小的二维图标，用于识别应用。它在状态栏中以单色显示。如果你的应用可以发送多种类型的通知，则可以使用反映内容类型的符号来代替应用图标。例如，Google Now 使用一个云朵的图标来表示天气通知。</p>
                    <p><strong>2. 应用名称：</strong>应用名称会自动出现在通知中。</p>
                    <p><strong>3. 标题文本（可选）：</strong>只有当一个应用能从多个来源发送通知时，才使用标题文本，例如用户拥有多个账户，则可以使用账户名作为标题文本。</p>
                    <p><strong>4. 时间（可选）：</strong>默认情况下，时间不会出现，但如果时间对通知发送非常重要，则可以添加时间，例如未接电话的时间。</p>
                    <p><strong>5. 展开指示器：</strong>如果通知可以被展开，就会出现该图标。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 27.3684210526%">
                          <img alt="" aria-describedby="anatomy-of-a-notification-figure-caption-1" src="<?= static_url('../static/media/patterns/notifications/notifications-anatomy-01-header.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="anatomy-of-a-notification-figure-caption-1">
                        <p>标题区域</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>内容区域</h2>
                    <p>内容区域包括：</p>
                    <p><strong>1. 内容标题：</strong>通知的简要标题</p>
                    <p><strong>2. 内容文本：</strong>通知的内容</p>
                    <p><strong>3. 大图标（可选）：</strong>可以添加一张图片，以更有意义的方式来强化通知，例如包含消息发送者头像的消息。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 27.3684210526%">
                          <img alt="" aria-describedby="anatomy-of-a-notification-figure-caption-2" src="<?= static_url('../static/media/patterns/notifications/notifications-anatomy-02-content.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="anatomy-of-a-notification-figure-caption-2">
                        <p>内容区域</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>操作区域</h2>
                    <p>当通知展开后，最多可以在底部的操作条上显示 3 个操作按钮。</p>
                    <p>在 Android N 及之后的版本中，操作不包含图标，以便容纳更多的文本。不过该图标仍然应该提供，因为在早期版本的系统中需要显示图标， <a href="https://www.google.com/design/spec-wear/patterns/notifications.html" target="_blank">Android Wear</a> 和 <a href="https://www.google.com/design/spec-auto/system-overview/notifications.html#" target="_blank">Android Auto</a> 设备也是如此。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 28.6842105263%">
                          <img alt="" aria-describedby="anatomy-of-a-notification-figure-caption-3" src="<?= static_url('../static/media/patterns/notifications/notifications-anatomy-03-action-area.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="anatomy-of-a-notification-figure-caption-3">
                        <p>操作区域</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="notifications-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
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
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>何时不使用通知</h1>
                    <p>通知不应该是与用户沟通的主要通信渠道，因为太多的干扰可能会让用户恼火。以下案例中不要使用通知：</p>
                    <ul class="lst-kix_qxvcl22jo3yd-0 start">
                      <li><strong>交叉宣传</strong>，或在通知中宣传其他产品，这是 Play Store 严格禁止的</li>
                      <li>用户<strong>从未打开过的</strong>应用</li>
                      <li>通知鼓励用户返回应用，但不提供<strong>有直接价值的信息</strong>，例如 “有段时间没见到你了”</li>
                      <li>让用户<strong>对应用评分</strong></li>
                      <li>无需让用户参与的<strong>操作</strong>，例如同步信息</li>
                      <li>不需要用户交互，应用可以自己恢复的<strong>错误状态</strong></li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="usage-figure-caption-0" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-01-donta.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-0">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要以通知的形式发送节日或生日祝福。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-02-dontb.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>不要在任务期间打断用户，仅仅为了询问用户是否操作顺利。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>必要的通知</h1>
                    <p><strong>前台服务</strong>是在后台运行的应用进程，但用户不直接和应用进行交互。由于这些应用会使用电池和某些数据，因此 Android 需要显示一个不可关闭的通知，来使用户知道系统正在运行的这类服务。</p>
                    <p>因为用户不能关闭这类通知，所以你应该为用户提供一项操作，以便在用户不希望运行该服务的情况下停止该服务。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame" style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-03-foreground.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p>在下载应用和文件时，Android 的下载管理器会运行一个前台服务，并显示一个通知，使用户知道正在进行下载，并提供一项操作，来取消下载。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="notifications-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>通知到达</h1>
                    <p>当通知到达时，它会被添加到通知抽屉。根据你设置的参数和设备的当前状态，通知还可能：</p>
                    <ul class="lst-kix_kzmg5f305bqm-0 start">
                      <li>在状态栏中显示一个图标</li>
                      <li>发出声音或震动</li>
                      <li>显示在当前屏幕上，以获取用户的注意力<br/></li>
                    </ul>
                    <p>用户可以选择修改你设置的通知方式。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 760px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-0" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-01-status.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-01-status.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-0">
                        <p>当通知到达时，通常会在状态栏出现一个图标。这提醒用户在通知抽屉里有新的消息。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-1" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-02-peak-xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-02-peak-xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>如果通知非常重要，需要在任务期间就抓住用户的注意力，可以在当前屏幕上显示通知。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>通知抽屉</h1>
                    <p>Android 中的通知抽屉通常按照时间倒序显示通知，可以根据以下因素做出调整：</p>
                    <ul class="lst-kix_dc5va5pjmtco-0 start">
                      <li>应用状态通知的优先级或重要性</li>
                      <li>是否最近通过声音或震动提醒过用户</li>
                      <li>通知中涉及到的用户，是否是用户的星标联系人</li>
                      <li>该通知是否表示正在进行的重要的活动，例如正在打电话或播放音乐</li>
                    </ul>
                    <p>从 Android O 开始，Android 系统可以通过添加强调或降低重要性来改变通知列表顶部和底部的某些通知的外观，以帮助用户更快扫视内容。<br/></p>
                    <p><strong>陈旧的通知</strong></p>
                    <p>通知抽屉应该向用户显示当前时刻的相关信息。如果先前发送的通知不再和当前时刻相关，可以自动关闭，使用户不再看到这些通知。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 68.4210526316%">
                          <img alt="" aria-describedby="behavior-figure-caption-2" src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-03-drawer.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p>在此通知抽屉中，刚刚收到的信息显示在顶部。关于天气的较低优先级的通知出现在底部。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>通知交互</h1>
                    <p>用户可以通过以下方式与通知进行交互：</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3 h3-spacing">
                  <div class="module">
                    <h3>1. 导航到目标界面</h3>
                    <p>用户可以点击通知来进行导航。如果通知出现在锁屏界面，用户需要双击通知，然后输入 PIN 码、图案或密码。</p>
                    <p>当用户点击通知后，应用应该跳转到与该通知直接相关的界面，并让它们立刻执行操作。例如，通知用户在多人游戏中轮到用户了，点击通知应该直接进入游戏。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2 h3-spacing">
                  <div class="module">
                    <h3>2. 查看扩展视图</h3>
                    <p>如果提供了扩展视图，会在通知的头部显示一个扩展指示符。用户可以点击指示符或者向下滑动通知来展开扩展视图。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 760px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-06-expand.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-06-expand.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p>扩展的通知</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h3-spacing">
                  <div class="module">
                    <h3>3. 忽略（如果允许）</h3>
                    <p>用户可以通过向左或向右滑动来忽略通知。</p>
                    <p></p>
                    <p>如果通知指示了后台有一个正在运行的进程（例如播放音乐），则可能不能通过滑动来忽略。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-4" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-07-dismiss-xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-07-dismiss-xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-4">
                        <p>被忽略的通知</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h3-spacing">
                  <div class="module">
                    <h3>4. 控制今后类似的通知如何推送</h3>
                    <p>可以通过这些方式访问通知控制器：</p>
                    <ul>
                      <li>触摸并按住某条通知</li>
                      <li>向左或向右滑动通知，并点击设置图标</li>
                    </ul>
                    <p>通知控制器的显示方式取决于 Android 系统版本，以及应用是否具有通知<a href="./notifications.html#notifications-settings">通道</a>（从 Android O 开始）。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-5" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-08-controls-xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-08-controls-xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-5">
                        <p>通知设置</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>多个通知</h2>
                    <p>对于会产生大量相同类型的通知的应用，Android 提供了两种方式来展示它们：汇总和组合。</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>汇总</h2>
                    <p>你可以把所有通知都汇总到一条通知里，而不是推送很多条通知。例如，通讯应用可以显示一个汇总通知：“你有 3 条新消息”。展开后，会显示每个消息的一段内容。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 57.8947368421%">
                          <img alt="" aria-describedby="behavior-figure-caption-6" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-05-summary-1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-6">
                        <p>汇总了多条通知，折叠视图和展开视图</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>分组</h2>
                    <p>应用可以根据父子层次关系显示多个通知：</p>
                    <ul class="lst-kix_k75u8ineafgx-0 start">
                      <li>父通知显示子通知的摘要信息</li>
                      <li>父通知被用户展开之后，会显示所有子通知</li>
                      <li>子通知可以在展开后显示完整内容</li>
                    </ul>
                    <p>子通知不会重复显示相同的头部信息。例如，如果子通知具有和父通知相同的应用图标，则子通知的头部中不包含图标。</p>
                    <p>当子通知独立存在时，也应该是使人容易理解的，因为系统可能在通知到达时，把通知显示在分组外面。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 84.2105263158%">
                          <img alt="" aria-describedby="behavior-figure-caption-7" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-05-summary-2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-7">
                        <p>分组后的通知，折叠视图和展开视图</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>展开视图</h1>
                    <p>你可以通过展开视图在通知中显示更多信息，而无需离开通知。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 60.0%">
                          <img alt="" aria-describedby="behavior-figure-caption-8" src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-06-expand.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-8">
                        <p>折叠和展开的通知</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>展开时，通知最多可以提供 3 个操作。且不应与点击通知主体的操作重复。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="behavior-figure-caption-9" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-13-action-dont.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-9">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>文本操作不应和点击通知主体的操作重复。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="behavior-figure-caption-10" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-14-action-do.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-10">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>当 Android 的时钟应用正在运行计时器时，此通知可以让用户在通知中直接暂停或增加一分钟。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>启用在通知中输入</h1>
                    <p>你可以让用户直接在通知中输入。用户可以输入少量文本，例如回复消息或记录简短的笔记。</p>
                    <p>对于长文本的输入，需要将用户导航到你的应用中，在那里他们会有更多空间来浏览和编辑文本。</p>
                    <p>如果你在一个通讯应用中使用此功能，在用户发送完回复后，需要继续显示该通知，等待一段时间，直到消息送达后，再自动关闭该通知。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-11" controls="" loop="" preload="auto">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-17-inline-xhdpi.webm'); ?>" type="video/webm">
                            <source src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-17-inline-xhdpi.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-11">
                        <p>Android 的短信应用允许用户直接在通知中回复消息，无需离开通知</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="notifications-types-of-notifications" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            通知类型
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>通知可以是事务性和非事务性的。</p>
              <div class="col-list">
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>事务性</h2>
                    <p>事务性通知提供的内容，用户必须在特定时间内接收，以执行以下之一的操作：</p>
                    <ul class="lst-kix_g5hgxsxhm448-0 start">
                      <li>允许人与人之间的交互</li>
                      <li>有助于改善日常生活的功能</li>
                      <li>控制或决定设备的临时状态</li>
                    </ul>
                    <h2>非事务性</h2>
                    <p>如果以上几条都没有描述到你的通知，那它就是非事务性的。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>事务性通知可以帮助用户...</p></td>
                        <td colspan="1" rowspan="1"><p>示例</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>允许人与人之间的交互</p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_2pp656d076zo-0 start">
                            <li>接听来电或发送短信</li>
                            <li>在多人游戏中，通知用户轮到你了</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>有助于改善日常生活的功能</p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_2ieqoy7zvd5z-0 start">
                            <li>即将发生的日历事件</li>
                            <li>用户设置的提醒或闹钟</li>
                            <li>航班延误</li>
                            <li>交付订单</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>监控、控制或决定设备的临时状态</p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_b2yhe2k0443i-0 start">
                            <li>播放音乐</li>
                            <li>逐向导航</li>
                            <li>秒表运行</li>
                            <li>屏幕截图</li>
                            <li>应用在后台运行</li>
                          </ul>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>非事务性可选停用和可选启用</h1>
                    <p>非事务性通知应该是可选的，因为它们可能不会吸引所有用户。你可以通过下列两者之一的方式将其设置为可选：</p>
                    <ul class="lst-kix_e9ivxnmvtjvc-0 start">
                      <li><strong>可选停用：</strong>用户默认会收到可选停用的通知，但是可以通过设置来停止接收。</li>
                      <li><strong>可选启用：</strong>用户只有在应用中设置启用后才能接收到可选启用的通知。</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>可选停用</h2>
                    <p>避免选择可选停用方式，除非你的通知<strong>同时符合</strong>以下两个条件：</p>
                    <ul class="lst-kix_ovhvckqpq2ia-0 start">
                      <li>为用户提供具体的价值</li>
                      <li>与用户的情境直接相关（例如当前地点、当前日期或时间、过往历史、或用户表达的兴趣）</li>
                    </ul>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>通知示例</p></td>
                        <td colspan="1" rowspan="1"><p>避免在此使用可选停用通知的原因</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>关于如何使用应用的随机提示</p></td>
                        <td colspan="1" rowspan="1"><p>提供具体的价值，但不符合情境</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>提示你对最近使用的内容进行评论</p></td>
                        <td colspan="1" rowspan="1"><p>符合情境，但未给用户带来具体的价值</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="types-of-notifications-figure-caption-0" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-03-optin.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-notifications-figure-caption-0">
                        <p>来自 YouTube 的此通知使用可选停用的方式。它同时符合情境（用户订阅的 YouTube 频道）和价值（来自该频道的新视频）。 “Options” 操作可以将用户导航到设置界面，用户可以在此选择以后不再接收此频道的视频推送。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>可选启用</h2>
                    <p>可选启用的方式更保守。因为用户明确的选择了接收这些通知，这很可能表明用户很乐意看到这些通知。但是，用户必须访问设置才能了解如何接收这些通知。你可以在应用的其他地方提醒用户启用这些通知，例如<a href="../growth-communications/onboarding.html">导览流程</a>或可忽略的<a href="../components/cards.html">卡片</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 59.0789473684%">
                          <img alt="" aria-describedby="types-of-notifications-figure-caption-1" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-04-optout.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="types-of-notifications-figure-caption-1">
                        <p>该应用使用了可选启用方式。应用顶部的卡片使用户知道他们可以接收突发新闻的通知。如果用户想要接收，它们会选择 “Yes”，否则他们会选择 “No Thanks” 并保持不接收这些通知。这些选项同样也可以在应用的设置中进行设置。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="notifications-settings" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            设置
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>Android O 中的通道</h1>
                    <p>当你把应用更新到 Android O 时，你需要为通知定义通道 - 每一个通知类型定义一个通道。</p>
                    <p><br/>用户通过通道控制 Android O 中的应用通知。如果用户不想收到应用中的某类通知，他们可以屏蔽该通道，而不用屏蔽该应用的所有通知。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="settings-figure-caption-0" src="<?= static_url('../static/media/patterns/notifications/notifications-settings-01-channels.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="settings-figure-caption-0">
                        <p></p>
                        <p>该应用有三个通道，在 UI 中称为“分类”。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>通道的重要性级别</h2>
                    <p>你定义的每个通道，都需要为其分配重要性级别。从 Android O 开始，重要性级别控制每个通道的行为（取代优先级）。</p>
                    <p>重要性级别有以下限制：</p>
                    <ul class="lst-kix_jpz5c9252aa9-0 start">
                      <li>你分配的重要性级别将是通道的默认值。用户可以在 Android 的设置中修改通道的重要性级别。</li>
                      <li>一旦你选择了重要性级别，你修改它的方式就会收到限制：只能降低重要性，且仅在用户没有明确修改它时。</li>
                    </ul>
                    <p><br>选择通道的重要性时，需要考虑用户的时间和注意力。当不重要的通知被伪装成紧急通知时，会让用户产生不必要的惊恐。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>重要性</p></td>
                        <td colspan="1" rowspan="1"><p>行为</p></td>
                        <td colspan="1" rowspan="1"><p>用法</p></td>
                        <td colspan="1" rowspan="1"><p>示例</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>HIGH</p></td>
                        <td colspan="1" rowspan="1"><p>发出声音，并出现在屏幕上</p></td>
                        <td colspan="1" rowspan="1"><p>用户必须立即知道，或立即采取行动的，对时间要求严格的信息</p></td>
                        <td colspan="1" rowspan="1"><p>短信、闹钟、电话</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>DEFAULT</p></td>
                        <td colspan="1" rowspan="1"><p>发出声音</p></td>
                        <td colspan="1" rowspan="1"><p>在用户方便的时候应该被最先看到的消息，但不会中断他们正在做的事</p></td>
                        <td colspan="1" rowspan="1"><p>流量警报、任务提醒</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>LOW</p></td>
                        <td colspan="1" rowspan="1"><p>没有声音</p></td>
                        <td colspan="1" rowspan="1"><p>不符合其他重要性级别要求的通知通道</p></td>
                        <td colspan="1" rowspan="1"><p>用户订阅的新内容，社交网络的邀请</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>MIN</p></td>
                        <td colspan="1" rowspan="1"><p>没有声音或视觉中断</p></td>
                        <td colspan="1" rowspan="1"><p>可以等待稍后处理、或与用户不是特别相关的非必要信息</p></td>
                        <td colspan="1" rowspan="1"><p>附近的景点、天气、促销内容</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>定义通道</h2>
                    <p>要定义通道，需要先记录所有你需要发送的通知。然后将通知分组为具有以下共同点的集合：</p>
                    <ul class="lst-kix_h627nsykt0g8-0 start">
                      <li><strong>主题：</strong>单个主题可以简洁地描述所有这些通知，例如“下载”。</li>
                      <li><strong>期望的重要性级别：</strong>因为一个通道中的通知共用一个重要性级别，因此它们应该在用户的角度上具有相似的重要性级别。</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>分组通道</h2>
                    <p>你可以对通道进行分组，方便用户在 Android 的设置中快速扫视通道列表。</p>
                    <p>只在以下情况下创建通道分组：</p>
                    <ul class="lst-kix_4d6gqqyjkl50-0 start">
                      <li>有超过 10 个通道</li>
                      <li>应用支持多个用户账户（如个人账户和企业账户），允许用户在不同账户间使用相同的通道名称和功能</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>将应用的设置和 Android 的通道设置相关联</h2>
                    <p>使应用中的设置和 Android 的通道设置保持一致。如果应用提供了对不同类型的通知的控制功能，用户可以直接选择适当的 Android 通道设置来进行更改。</p>
                    <p>你也可以把通道设置界面链接到应用的设置。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame" style="padding-top: 86.8421052632%">
                          <img alt="" aria-describedby="settings-figure-caption-1" src="<?= static_url('../static/media/patterns/notifications/notifications-settings-03b-applink.png'); ?>" loading="lazy">
                          </img></div>
                      </div>
                      <figcaption id="settings-figure-caption-1"><p></p>
                        <p>在该应用中，用户可以设置通信偏好。其中一项偏好是航班更新的通知，链接到了名为 “Flight updates” 的系统通道设置界面。那个界面包含一个返回链接 “Additional settings in the app”。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>通道和前台服务</h2>
                    <p>在 Android O 中，<a href="./notifications.html#notifications-usage">前台服务</a>通知的通道默认重要性级别必须至少为 IMPORTANCE_LOW，以便能在状态栏中显示一个图标。</p>
                    <p>使用重要性级别较低的 IMPORTANCE_MIN 的通道会触发一个来自 Android 系统的额外的 IMPORTANCE_LOW 级别的通知，表明该应用正在使用电池。</p></div>
                  <div class="module">
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>不含通道的优先级</h1>
                    <p>对于尚未升级到 Android O 的应用，你需要为每个通知分配优先级，某些优先级提供了播放声音的选项。</p></div>
                  <div class="module"></div>
                </section>
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>优先级</h2>
                    <p>要控制通知的推送方式，需要先分配优先级。优先级越高，对用户的中断越多。例如，MAX 和 HIGH 优先级的通知会直接显示在用户的屏幕上，无论用户正在做什么。如果对通知的优先级不确定，请选择较低的优先级。</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module col-2 h2-spacing">
                  <div class="module">
                    <h2>通知的声音</h2>
                    <p>DEFAULT（或更高）优先级的通知可以在推送通知时播放声音（使用你提供的音频文件）。但是，应该仅在以下情况下使用声音：</p>
                    <ul class="lst-kix_bcfsecv8pj89-0 start">
                      <li>它有助于用户保持一个具有时效性的社会期望，例如，来电、或者即将召开的工作会议。</li>
                      <li>它在日常生活中帮助到用户，例如通知用户航班延误。</li>
                      <li>用户明确要求此通知在到达时需要发出声音（此选项默认为关闭状态）。</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>预定义类别</h1>
                    <p>无论是否使用了通道，都请把每个通知都分配到合适的预定义类别中。Android 可以根据此信息进行排序和过滤。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>类别</p></td>
                        <td colspan="1" rowspan="1"><p>描述</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_CALL</p></td>
                        <td colspan="1" rowspan="1"><p>来电（语音或视频）或类似的同步通信请求</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_MESSAGE</p></td>
                        <td colspan="1" rowspan="1"><p>直接接收的消息（短信、即时消息等）</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_EMAIL</p></td>
                        <td colspan="1" rowspan="1"><p>异步的大量消息（邮件）</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_EVENT</p></td>
                        <td colspan="1" rowspan="1"><p>日历事件</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_PROMO</p></td>
                        <td colspan="1" rowspan="1"><p>宣传或广告</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_ALARM</p></td>
                        <td colspan="1" rowspan="1"><p>闹钟或计时器</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_PROGRESS</p></td>
                        <td colspan="1" rowspan="1"><p>长时间运行的后台操作的进度</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_SOCIAL</p></td>
                        <td colspan="1" rowspan="1"><p>社交网络或分享更新</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_ERROR</p></td>
                        <td colspan="1" rowspan="1"><p>后台操作错误或身份验证状态</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_TRANSPORT</p></td>
                        <td colspan="1" rowspan="1"><p>媒体播放控制器</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_SYSTEM</p></td>
                        <td colspan="1" rowspan="1"><p>系统或设备状态更新。保留仅供系统使用。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_SERVICE</p></td>
                        <td colspan="1" rowspan="1"><p>运行后台服务的指示</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_RECOMMENDATION</p></td>
                        <td colspan="1" rowspan="1"><p>为单一事件提供的具体的、即时的建议。例如，新闻应用可能会推荐用户想要阅读的新闻报道。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_STATUS</p></td>
                        <td colspan="1" rowspan="1"><p>关于设备或情境状态的行为信息</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="notifications-lock-screen" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            锁屏
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
                    <p>用户可以选择在锁屏时显示通知。这些通知可能会隐藏被应用标记为隐私的内容。Android 会评估每个通知的可见性级别，以确定哪些内容可以被安全的显示。</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>锁屏界面上的敏感内容</h1>
                    <p>因为通知可以直接在锁屏界面上浏览，用户隐私就成了一个非常重要的考虑因素。对于你创建的每个通知，都需要把可见级别设置为公共、私有或机密。</p>
                    <p><strong>公共</strong>通知在锁屏界面上完全可见，但<strong>机密</strong>通知则完全隐藏。</p>
                    <p><strong>私有</strong>通知则处于中间：它们只显示通知的基本信息，例如应用的图标和名称。常规内容则将被隐藏 - 你可以自行设置显示不涉及个人信息的文本，例如 “2 条未读消息”</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 736px">
                        <div class="frame " style="padding-top: 174.048913043%">
                          <img alt="" aria-describedby="lock-screen-figure-caption-0" src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-04-lockscreen1.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="lock-screen-figure-caption-0">
                        <p>此用户选择在锁屏界面上显示所有通知。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 736px">
                        <div class="frame " style="padding-top: 174.048913043%">
                          <img alt="" aria-describedby="lock-screen-figure-caption-1" src="<?= static_url('../static/media/patterns/notifications/notifications-behavior-05-lockscreen2.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="lock-screen-figure-caption-1">
                        <p>此用户选择在锁屏界面上隐藏敏感信息。因为这些应用的通知可见性级别被设定为 “私有”，不会出现内容的标题或其他文本。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="notifications-style" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:7">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:7">
            样式
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module"><h1>清晰简洁的文本</h1>
                    <p>Android 会把内容标题截断为一行（即使已展开）。</p>
                    <p>内容标题应该：</p>
                    <ul class="lst-kix_f762qnwlper4-0 start">
                      <li>不超过 30 个字符</li>
                      <li>包含最重要的信息</li>
                      <li>避免使用变量 – 除非它们包含数字或短文本，或者前面有文本</li>
                      <li>不要包含应用名称，因为已经显示在了头部</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="style-figure-caption-0" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-09-title-dont.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-0">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>内容标题显示了应用名称，它与头部区域冗余，并且占用了标题中的可用空间。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>内容文本应该：</p>
                    <ul class="lst-kix_x4z8pfid2wez-0 start">
                      <li>避免超过 40 个字符的限制</li>
                      <li>不重复标题中的内容</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="style-figure-caption-1" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-10-title-do.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-1">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>内容的标题显示了最重要的信息。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>大图标</h1>
                    <p>在 Android N 中，大图标只针对特殊的情况，即图像可以通过有意义的方式增强内容，包括：</p>
                    <ul class="lst-kix_bivykmsl728x-0 start">
                      <li>与另一个人<strong>通信</strong>时，例如用图片表示发送消息的人</li>
                      <li><strong>内容的来源</strong>，如果应用发送通知的来源不同时，例如用户订阅的 YouTube 频道的 Logo</li>
                      <li>关于通知的<strong>有意义的符号</strong>，例如表示驾驶方向的箭头符号</li>
                    </ul>
                    <p>大图标在代表人的时候应该是圆形的，但是其他时候是方形的。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="style-figure-caption-2" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-11-large-icon-dont.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-2">
                        <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                        <p>大图标不适合使用 logo。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="style-figure-caption-3" src="<?= static_url('../static/media/patterns/notifications/notifications-guidelines-12-large-icon-do.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-3">
                        <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                        <p>大图标旨在以有意义的方式强化应用的内容，例如消息通知中的联系人照片。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="notifications-templates" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:8">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:8">
            模版
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Google 在其 Android 应用中使用以下通知模版，你可以根据自己的应用进行调整。</p>
              <div class="col-list">
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>标准模板</h2>
                    <p>标准模版适用于大多数通知，允许显示简单的文本、大图标（有需要时）、操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 60.0%">
                          <img alt="" aria-describedby="templates-figure-caption-0" src="<?= static_url('../static/media/patterns/notifications/notifications-templates-01-standard.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-0">
                        <p>折叠和展开的通知的标准模版</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>大文本模板</h2>
                    <p>当你需要显示较长的文本时，使用此模版。它允许用户在展开通知时预览更多文本。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.2631578947%">
                          <img alt="" aria-describedby="templates-figure-caption-1" src="<?= static_url('../static/media/patterns/notifications/notifications-templates-02-big-text.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-1">
                        <p>折叠和展开的通知的大文本模版</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>大图片模板</h2>
                    <p>当通知包含图片时可以使用此模版。大图标提供了图片的缩略图，用户可以通过展开通知来获得更多预览。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 82.6315789474%">
                          <img alt="" aria-describedby="templates-figure-caption-2" src="<?= static_url('../static/media/patterns/notifications/notifications-templates-03-big-picture.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-2">
                        <p>折叠和展开的通知的大图片模版</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>进度模板</h2>
                    <p>此模版用于由用户启动的需要一些时间才能完成的活动，并且可以随时取消。（不可取消的活动不适用。）</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 60.0%">
                          <img alt="" aria-describedby="templates-figure-caption-3" src="<?= static_url('../static/media/patterns/notifications/notifications-templates-04-progress.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-3">
                        <p>折叠和展开的通知的进度模版</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>多媒体模板</h2>
                    <p>使用此模版让用户控制应用中正在播放的媒体。</p>
                    <ul class="lst-kix_f7ezr371sbc8-0 start">
                      <li><strong>折叠视图</strong>最多显示 3 个操作，大图标可以显示相关图片，如相册封面。</li>
                      <li><strong>展开视图</strong>最多显示 5 个操作和一个大图片，或者不包含大图片的 6 个操作。来自图片中的颜色自动填充通知的背景色和其他元素。</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 57.6315789474%">
                          <img alt="" aria-describedby="templates-figure-caption-4" src="<?= static_url('../static/media/patterns/notifications/notifications-templates-05-media.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-4">
                        <p>折叠和展开的通知的媒体模版</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h2-spacing">
                  <div class="module">
                    <h2>消息模板</h2>
                    <p>此模板用于实时通信。你也可以提供直接在通知中进行回复的功能。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame" style="padding-top: 60.0%">
                          <img alt="" aria-describedby="templates-figure-caption-5" src="<?= static_url('../static/media/patterns/notifications/notifications-templates-06-messaging.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-5">
                        <p>折叠和展开状态的通知模板</p>
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
  <div class="gas-last-div-inner-bottom"></div>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>
