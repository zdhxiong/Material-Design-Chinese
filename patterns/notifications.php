<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p><strong>仅限 Android</strong></p>
          <h1>当应用不处于使用中时，通知可以提供简短、即时和相关的信息。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
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
                  操作轨迹</p>
                <h3>如何使用户注意到通知</h3>
                <ul class="lst-kix_u3mgmsnrubnc-0 start">
                  <li>显示一个状态栏图标</li>
                  <li>在锁屏界面显示</li>
                  <li>闪烁设备的 LED</li>
                  <li>播放声音或震动</li>
                  <li>在当前屏幕出现</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media" style="max-width: 3000px">
                    <div class="frame " style="padding-top: 100.0%">
                      <img alt="" src="<?php static_url('../static/media/patterns/notifications/patterns_notifications.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-settings-priority" data-qp-ui-data-id="qp:5">设置和属性</a>
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
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Android N 高亮</h2>
                    <p>在 Android Nougat（Android N）中，通知旨在使用户更易于扫视，更易于使用通知中最重要的元素：</p>
                    <p><strong>主要内容</strong></p>
                    <p>内容是通知中最重要的元素。次要信息（如时间戳）较小，被合并显示在主要内容的上方。</p>
                    <p><strong>联系人</strong></p>
                    <p>头像显示在通知的右侧。</p>
                    <p><strong>操作</strong></p>
                    <p>对于可展开的通知，可以点击箭头图标来可以展开通知。操作仅使用文本（可容纳更多字符），显示在单独的背景色或位置上。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 50.5263157895%">
                          <img alt="" aria-describedby="anatomy-of-a-notification-figure-caption-1" src="<?php static_url('../static/media/patterns/notifications/notifications_anatomy_01_comparison.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="anatomy-of-a-notification-figure-caption-1">
                        <p>Android M（上）和 Android N（下）的折叠的通知</p>
                        <p><strong>Android M（上）的折叠的通知</strong><br>
                          头像和图标位于左侧，时间戳位于右侧。</p>
                        <p><strong>Android N（下）的折叠的通知</strong><br>
                          应用图标、应用名称、时间戳和扩展指示图标显示在左上角，头像在右边。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 65.2631578947%">
                          <img alt="" aria-describedby="anatomy-of-a-notification-figure-caption-2" src="<?php static_url('../static/media/patterns/notifications/notifications_anatomy_02_comparison.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="anatomy-of-a-notification-figure-caption-2">
                        <p>Android M（上） Android N（下）的展开的通知</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>头部区域</h2>
                    <p>在新的 Android N 上，头部区域包括：</p>
                    <p><strong>1. 应用图标：</strong>应用图标是一个小的二维图标，用于识别应用。它在状态栏中以单色显示。如果你的应用可以发送多种类型的通知，则可以使用反映内容类型的符号来代替应用图标。例如，Google Now 使用一个云朵的图标来表示天气通知。</p>
                    <p><strong>2. 应用名称：</strong>从 Android N 开始，应用名称会自动出现在通知中。</p>
                    <p><strong>3. 标题文本（可选）：</strong>只有当一个应用能从多个来源发送通知时，才使用标题文本，例如用户拥有多个账户，则可以使用账户名作为标题文本。</p>
                    <p><strong>4. 时间戳（可选）：</strong>默认情况下，时间戳不会出现，但如果时间对通知发送非常重要，则可以添加时间戳，例如未接电话的时间。</p>
                    <p><strong>5. 扩展指示器：</strong>如果通知可以被展开，就会出现该图标。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 27.3684210526%">
                          <img alt="" aria-describedby="anatomy-of-a-notification-figure-caption-3" src="<?php static_url('../static/media/patterns/notifications/notifications_anatomy_01_header.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="anatomy-of-a-notification-figure-caption-3">
                        <p>标题区域是 Android N 的新增内容。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
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
                          <img alt="" aria-describedby="anatomy-of-a-notification-figure-caption-4" src="<?php static_url('../static/media/patterns/notifications/notifications_anatomy_02_content.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="anatomy-of-a-notification-figure-caption-4">
                        <p>Android N 的通知更宽，让主要内容显得更加整洁。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>操作区域</h2>
                    <p>当通知展开后，最多可以在底部的操作条上显示 3 个操作。</p>
                    <p>从 Android N 开始，操作不包含图标，以容纳更多的文本。该图标仍然应该提供，因为在早期版本的系统中仍然需要显示图标， <a href="https://www.google.com/design/spec-wear/patterns/notifications.html" target="_blank">Android Wear</a> 和 <a href="https://www.google.com/design/spec-auto/system-overview/notifications.html#" target="_blank">Android Auto</a> 设备也是如此。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 27.3684210526%">
                          <img alt="" aria-describedby="anatomy-of-a-notification-figure-caption-5" src="<?php static_url('../static/media/patterns/notifications/notifications_anatomy_03_action_area.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="anatomy-of-a-notification-figure-caption-5">
                        <p>Android N 通知中的操作区域。</p>
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
                <section class="module-figure col-2">
                  <div class="module"><h1>何时不使用通知</h1>
                    <p>通知不应该是与用户沟通的主要通信渠道，因为太多的干扰可能会让用户恼火。以下案例中不要使用通知：</p>
                    <ul class="lst-kix_qxvcl22jo3yd-0 start">
                      <li><strong>交叉宣传</strong>，或在通知中宣传其他产品，这是 Play Store 严格禁止的</li>
                      <li>用户<strong>从未打开过的</strong>应用</li>
                      <li>消息鼓励用户返回应用，但不提供<strong>有直接价值的信息</strong>，例如 “有段时间没见到你了”</li>
                      <li>让用户<strong>对应用评分</strong></li>
                      <li>无需让用户参与的<strong>操作</strong>，例如同步信息</li>
                      <li>不需要用户交互，应用可以自己恢复的<strong>错误状态</strong></li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="usage-figure-caption-1" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_01_dontA.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                          <img alt="" aria-describedby="usage-figure-caption-2" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_02_dontB.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="usage-figure-caption-2">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要在任务期间打断用户，仅仅为了询问用户是否操作顺利。</p>
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
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>通知到达</h1>
                    <p>当通知到达时，它会被添加到通知抽屉。你可以指定通知在推送时是否包括：</p>
                    <ul class="lst-kix_kzmg5f305bqm-0 start">
                      <li>发出声音或震动</li>
                      <li>显示在当前屏幕上，以获取用户的注意力</li>
                    </ul>
                    <p>用户可以选择屏蔽通知。从 Android N 开始，用户还可以阻止应用的通知发出声音、震动或显示在屏幕上。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 760px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-1" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_01_status.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_01_status.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-1">
                        <p>当通知到达时，通常会在状态栏出现一个图标。这提醒用户在通知抽屉里有新的消息。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 760px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-2" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_02_peak.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_02_peak.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-2">
                        <p>如果通知非常重要，需要在任务期间就抓住用户的注意力，可以在当前屏幕上显示通知。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>通知抽屉</h1>
                    <p>Android 中的通知抽屉通常按照时间倒序显示通知，可以根据以下因素做出调整：</p>
                    <ul class="lst-kix_dc5va5pjmtco-0 start">
                      <li>应用状态通知的优先级</li>
                      <li>是否最近通过声音或震动提醒过用户</li>
                      <li>通知中涉及到的用户，是否是用户的星标联系人</li>
                    </ul>
                    <p><strong>陈旧的通知</strong></p>
                    <p>通知抽屉旨在为用户显示与当前时刻相关的信息。如果早前发送的通知，现在已经不再可用，系统会自动将其关闭。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 68.4210526316%">
                          <img alt="" aria-describedby="behavior-figure-caption-3" src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_03_drawer.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-3">
                        <p>在此通知抽屉中，刚刚收到的信息显示在顶部。关于天气的较低优先级的通知出现在底部。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>通知交互</h1>
                    <p>用户可以通过以下方式与通知进行交互：</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <h3>1. 导航到目标界面</h3>
                    <p>用户可以点击通知来进行导航。如果通知出现在锁屏界面，用户需要双击通知，然后输入 PIN 码、图案或密码。</p>
                    <p>当用户点击通知后，应用应该跳转到与该通知直接相关的界面，并让它们立刻执行操作。例如，通知用户在多人游戏中轮到用户了，点击通知应该直接进入游戏。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h3>2. 查看扩展视图</h3>
                    <p>如果提供了扩展视图，会在通知的头部显示一个扩展指示符。用户可以点击指示符或者向下滑动通知来展开扩展视图。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 760px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-4" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_06_expand.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_06_expand.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-4">
                        <p>扩展的通知</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h3>3. 忽略（如果允许）</h3>
                    <p>用户可以通过向左或向右滑动来忽略通知。</p>
                    <p>通知指示了后台有一个正在进行的进程（例如播放音乐），则可能不能通过滑动来忽略。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 760px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-5" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_07_dismiss.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_07_dismiss.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-5">
                        <p>被忽略的通知</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h3>4. 选择以后类似的通知如何推送</h3>
                    <p>用户可以通过触摸并按住某条通知，来调整该应用以后的通知如何推送。在 Android N 中，用户也可以轻轻向左或向右滑动，并触摸设置图标来进行设置。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 760px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-6" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_08_controls.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_08_controls.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-6">
                        <p>通知设置</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h2>多个通知</h2>
                    <p>对于会产生大量相同类型的通知的应用，Android 提供了两种方式来展示它们：汇总和组合。</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>汇总</h2>
                    <p>你可以把所有通知都汇总到一条通知里，而不是推送很多条通知。例如，通讯应用可以显示一个汇总通知：“你有 3 条新消息”。展开后，会显示每个消息的一段内容。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 57.8947368421%">
                          <img alt="" aria-describedby="behavior-figure-caption-7" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_05_summary_1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-7">
                        <p>汇总了多条通知，折叠视图和展开视图</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>组合</h2>
                    <p>从 Android N 开始，你可以用分组和分层的方式来显示应用中的多个通知：</p>
                    <ul class="lst-kix_k75u8ineafgx-0 start">
                      <li>父通知显示所有子通知的摘要信息。</li>
                      <li>如果用户展开了父通知，则会显示所有子通知。</li>
                      <li>用户可以展开某个子通知来显示它的完整内容。</li>
                    </ul>
                    <p>当子通知出现后，系统会自动移除任何冗余的标题信息。例如，如果子通知的应用图标和父通知的应用图标相同，则子通知的标题中不会包含该图标。</p>
                    <p>子通知应该能独立存在，因为系统可以选择在通知到达时把它显示在分组外部。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 84.2105263158%">
                          <img alt="" aria-describedby="behavior-figure-caption-8" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_05_summary_2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-8">
                        <p>组合后的通知，折叠视图和展开视图</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>展开视图</h1>
                    <p>你可以通过展开视图在通知中显示更多信息，而无需离开通知。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 60.0%">
                          <img alt="" aria-describedby="behavior-figure-caption-9" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-9">
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
                          <img alt="" aria-describedby="behavior-figure-caption-10" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_13_action_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-10">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                          <img alt="" aria-describedby="behavior-figure-caption-11" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_14_action_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-11">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>当 Android 的时钟应用正在运行计时器时，此通知可以让用户在通知中直接暂停或增加一分钟。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>启用在通知中输入</h1>
                    <p>在 Android N 中，应用可以让用户直接在通知中输入。用户可以输入少量文本，例如回复消息或记录简短的笔记。</p>
                    <p>对于长文本的输入，需要将用户导航到你的应用中，在那里他们会有更多空间来浏览和编辑文本。</p>
                    <p>如果你在一个通讯应用中使用此功能，在用户发送完回复后，需要继续显示该通知，等待一段时间，直到消息送达后，再自动关闭该通知。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 760px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" style="padding-top: 68.4210526316%">
                          <video aria-describedby="behavior-figure-caption-12" controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_17_inline.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_17_inline.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="behavior-figure-caption-12">
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
                <section class="module-module col-2">
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
                        <td colspan="1" rowspan="1"><p>控制或决定设备的临时状态</p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_b2yhe2k0443i-0 start">
                            <li>播放音乐</li>
                            <li>逐向导航</li>
                            <li>秒表运行</li>
                            <li>屏幕截图</li>
                          </ul>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
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
                <section class="module-module col-2">
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
                          <img alt="" aria-describedby="types-of-notifications-figure-caption-1" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_03_optin.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-notifications-figure-caption-1">
                        <p>来自 YouTube 的此通知使用可选停用的方式。它同时符合情境（用户订阅的 YouTube 频道）和价值（来自该频道的新视频）。 “Options” 操作可以将用户导航到设置界面，用户可以在此选择以后不再接收此频道的视频推送。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>可选启用</h2>
                    <p>可选启用的方式更保守。因为用户明确的选择了接收这些通知，这很可能表明用户很乐意看到这些通知。但是，用户必须访问设置才能了解如何接收这些通知。你可以在应用的其他地方提醒用户启用这些通知，例如<a href="../growth-communications/onboarding.html">导览流程</a>或可忽略的<a href="../components/cards.html">卡片</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 59.0789473684%">
                          <img alt="" aria-describedby="types-of-notifications-figure-caption-2" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_04_optout.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="types-of-notifications-figure-caption-2">
                        <p>该应用使用了可选启用方式。应用顶部的卡片使用户知道他们可以接收突发新闻的通知。如果用户想要接收，它们会选择 “Yes”，否则他们会选择 “No” 并保持不接收这些通知。这些选项同样也可以在应用的设置中进行设置。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="notifications-settings-priority" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            设置和优先级
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
                    <h1>通知设置</h1>
                    <p>在应用中加入设置，以开启或关闭所有通知。此外，还可以考虑提供更细节的设置，例如让用户选择通知声音，或接收特定的通知类型。</p>
                    <p>通过创建一条 <a href="https://developer.android.com/reference/android/app/Notification.html#INTENT_CATEGORY_NOTIFICATION_PREFERENCES" target="_blank">AndroidManifest tags</a> 链接，使用户可以从 Android 的系统设置直接导航到应用的通知设置。</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>分配合理的优先级</h1>
                    <p>Android 允许你为每条通知分配优先级，以影响系统的推送方式。优先级越高，对用户的打扰也越多，例如，MAX 和 HIGH 级别的优先级的通知会直接显示在用户的当前屏幕上，不管用户当时正在做什么。</p>
                    <p>优先考虑用户的时间和注意力。当不重要的通知伪装成紧急通知时，会使用户陷入不必要的焦虑。</p>
                    <p>为了避免用户被通知过度打扰，用户可以直接在通知上快速静音、或阻止应用发送通知。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>优先级</p></td>
                        <td colspan="1" rowspan="1"><p>用于</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>MAX</p></td>
                        <td colspan="1" rowspan="1"><p>对于至关重要和非常紧急的通知，需要提醒用户必须完成或解决一些条件后，才能继续进行后面的操作。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>HIGH</p></td>
                        <td colspan="1" rowspan="1"><p>主要用于重要的通信，例如短信或聊天。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>DEFAULT</p></td>
                        <td colspan="1" rowspan="1"><p>不属于其他优先级的所有通知。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>LOW</p></td>
                        <td colspan="1" rowspan="1"><p>与用户价值和/或情境相关，但不紧急或没有时间限制的信息或事件。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>MIN</p></td>
                        <td colspan="1" rowspan="1"><p>不是专门针对特定用户推荐的背景信息。例如天气或附近的景点。</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>预定义类别</h1>
                    <p>将通知分配到合适的预定义类别中。Android 可以根据此信息进行排序和过滤。</p>
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
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>通知声音</h1>
                    <p>当你为通知分配 DEFAULT 或更高的优先级时，你可以选择在发送通知时播放提示音。但是，尽可能保持通知安静，除非遇到下列情况：</p>
                    <ul class="lst-kix_65s8kiygz7lp-0 start">
                      <li>该通知帮助用户维持具有时效性的社交要求，例如来电、或提醒 5 分钟后的工作会议。</li>
                      <li>该通知告诉用户他们应该做什么、或此刻应该知道什么，以便来改善用户的日常生活，例如航班延误的通知。</li>
                      <li>用户已明确要求此通知在到达时需要发出声音（如果在设置中提供了该选项，且默认处于关闭状态）</li>
                    </ul>
                  </div>
                  <div class="module"></div>
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
                    <p>Android 会评估每个通知的显示级别，以确定哪些内容可以被安全的显示。用户可以选择在锁屏时显示通知。它们也可以隐藏被应用标记为敏感的通知。</p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>锁屏界面上的敏感内容</h1>
                    <p>因为通知在锁屏界面上可见，用户隐私就成了一个非常重要的考虑因素。对于你创建的每个通知，把可见级别设置为公共、私有和机密。</p>
                    <p><strong>公共</strong>通知在锁屏界面上完全可见，但<strong>机密</strong>通知则完全隐藏。</p>
                    <p><strong>私有</strong>通知则处于中间：它们只显示通知的基本信息，例如应用的图标和名称。内容则被替换为一段默认消息 “内容已隐藏”。你可以将此信息替换为一些有用的信息，但不能涉及到用户的个人信息，例如 “2 条未读消息”。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="lock-screen-figure-caption-1" src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_04_lockscreen1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="lock-screen-figure-caption-1">
                        <p>此用户选择在锁屏界面上显示所有通知。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="lock-screen-figure-caption-2" src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_05_lockscreen2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="lock-screen-figure-caption-2">
                        <p>此用户选择在锁屏界面上隐藏敏感信息。因为这些应用的通知可见度级别被设定为 “私有”，它们默认显示 “内容已隐藏”。</p>
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
                <section class="module-figure col-2">
                  <div class="module"><h1>清晰简洁的文本</h1>
                    <p>Android 会把内容标题截断为一行（即使已展开）。</p>
                    <p>内容标题应该：</p>
                    <ul class="lst-kix_f762qnwlper4-0 start">
                      <li>不超过 30 个字符</li>
                      <li>包含最重要的信息</li>
                      <li>避免使用变量 – 除非它们包含数字或短文本，或者前面有静态文本</li>
                      <li>不要包含应用名称，因为已经显示在了头部</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 30.5263157895%">
                          <img alt="" aria-describedby="style-figure-caption-1" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_09_title_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                          <img alt="" aria-describedby="style-figure-caption-2" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_10_title_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-2">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>内容的标题显示了最重要的信息。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
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
                          <img alt="" aria-describedby="style-figure-caption-3" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_11_large_icon_dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-3">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
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
                          <img alt="" aria-describedby="style-figure-caption-4" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_12_large_icon_do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="style-figure-caption-4">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
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
              <p>Google 在其 Android 应用套件中使用以下通知模版，你可以根据自己的需要进行调整。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>标准</h2>
                    <p>标准模版适用于大多数通知，允许显示简单的消息，必要时可以使用大图标和操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 60.0%">
                          <img alt="" aria-describedby="templates-figure-caption-1" src="<?php static_url('../static/media/patterns/notifications/notifications_templates_01_standard.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-1">
                        <p>折叠和展开的通知的标准模版</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>大文本</h2>
                    <p>当你需要显示较长的文本时，使用此模版。它允许用户在展开通知时预览更多文本。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 75.2631578947%">
                          <img alt="" aria-describedby="templates-figure-caption-2" src="<?php static_url('../static/media/patterns/notifications/notifications_templates_02_big_text.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-2">
                        <p>折叠和展开的通知的大文本模版</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>大图片</h2>
                    <p>当通知包含图片时可以使用此模版。大图标提供了图片的缩略图，用户可以通过展开通知来获得更多预览。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 82.6315789474%">
                          <img alt="" aria-describedby="templates-figure-caption-3" src="<?php static_url('../static/media/patterns/notifications/notifications_templates_03_big_picture.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-3">
                        <p>折叠和展开的通知的大图片模版</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>进度</h2>
                    <p>此模版用于由用户启动的需要一些时间才能完成的活动，并且可以随时取消。（不可取消的活动不适用。）</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 60.0%">
                          <img alt="" aria-describedby="templates-figure-caption-4" src="<?php static_url('../static/media/patterns/notifications/notifications_templates_04_progress.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-4">
                        <p>折叠和展开的通知的进度模版</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>多媒体</h2>
                    <p>使用此模版让用户控制应用中正在播放的媒体。折叠视图最多显示 3 个操作，大图标可以用于显示相关图片，如相册封面。展开的视图最多显示 5 个操作和一个大图片，或者不包含大图片的 6 个操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame " style="padding-top: 57.6315789474%">
                          <img alt="" aria-describedby="templates-figure-caption-5" src="<?php static_url('../static/media/patterns/notifications/notifications_templates_05_media.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="templates-figure-caption-5">
                        <p>折叠和展开的通知的媒体模版</p>
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