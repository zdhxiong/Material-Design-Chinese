<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p><strong>Android only</strong></p>
          <h1>Notifications provide short, timely, and relevant information about your app when it’s not in use.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Notifications are intended to inform users about events in your app. These two types of notifications are the most effective:</p>
                <ul class="lst-kix_v2rnvrv35tc9-0 start">
                  <li>Communication from other users</li>
                  <li>Well-timed and informative task reminders</li>
                </ul>
              </div>
              <div class="module">
                <h3>Notification components</h3>
                <p>Header area<br>
                  Content area<br>
                  Action rail</p>
                <h3>How notifications may be noticed</h3>
                <ul class="lst-kix_u3mgmsnrubnc-0 start">
                  <li>Showing a status bar icon</li>
                  <li>Appearing on the lock screen</li>
                  <li>Pulsing the device's LED</li>
                  <li>Playing a sound or vibrating</li>
                  <li>Peeking onto the current screen</li>
                </ul>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/patterns/notifications/patterns_notifications.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-anatomy-of-a-notification" data-qp-ui-data-id="qp:1">Anatomy of a notification</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-usage" data-qp-ui-data-id="qp:2">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-behavior" data-qp-ui-data-id="qp:3">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-types-of-notifications" data-qp-ui-data-id="qp:4">Types of notifications</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-settings-priority" data-qp-ui-data-id="qp:5">Settings and priority</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-lock-screen" data-qp-ui-data-id="qp:6">Lock screen</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-style" data-qp-ui-data-id="qp:7">Style</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="notifications.html#notifications-templates" data-qp-ui-data-id="qp:8">Templates</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="notifications-anatomy-of-a-notification" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Anatomy of a notification
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
                    <h2>Android N highlights</h2>
                    <p>In Android Nougat (Android N), notifications have been designed to make it easier for users to scan and use a notification’s most important elements:</p>
                    <p><strong>Primary content</strong></p>
                    <p>Content is the most prominent element of a notification. Secondary information, such as a timestamp, is smaller and consolidated above the primary content.</p>
                    <p><strong>People</strong></p>
                    <p>Avatars appear on the right side of a notification.</p>
                    <p><strong>Actions</strong></p>
                    <p>Expandable notifications are revealed by tapping an indicator icon. Actions are displayed using text only (which accommodates more characters) on a separate background color and location.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_anatomy_01_comparison.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Collapsed notification on Android M (above) and Android N (below) </p>
                        <p><strong>Collapsed notification on Android M (top)</strong><br>
                          The avatar and icon are on the left and the timestamp is on the right.</p>
                        <p><strong>Collapsed notification on Android N (bottom)</strong><br>
                          The app icon, app name, timestamp, and expansion indicator icon appear on the top left. The avatar is on the right. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_anatomy_02_comparison.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Expanded notification on Android M (above) and Android N (below) </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Header area</h2>
                    <p>New for Android N, the header area is comprised of:</p>
                    <p><strong>1. The app icon:</strong> The app icon is a small two-dimensional representation of your app's identity. It appears in monochrome in the status bar. If your app sends a wide variety of notifications, you may replace your app's identity icon with a symbol that reflects the content type. For example, Google Now uses a cloud icon for weather notifications.</p>
                    <p><strong>2.The </strong><strong>app name</strong><strong>:</strong> Starting in Android N, the name of the app automatically appears in the notification. </p>
                    <p><strong>3.</strong><strong>Header text</strong><strong> (optional): </strong>Header text is usually only needed if an app sends notifications from multiple sources, such as the account name for users with multiple accounts.</p>
                    <p><strong>4. Timestamp (optional):</strong> By default, a timestamp does not appear, but it may be added if it's important to display when a notification was sent, such as the time of a missed call.</p>
                    <p><strong>5. Expand indicator:</strong> This appears if the notification can be expanded. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_anatomy_01_header.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>The header area is new for Android N. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Content area</h2>
                    <p>The content area is comprised of:</p>
                    <p><strong>1. A</strong><strong> content title:</strong> A brief headline for the notification</p>
                    <p><strong>2. Content text:</strong> Supporting information</p>
                    <p><strong>3. Large icon (optional):</strong> An image may be added to reinforce the notification in a meaningful way, such as a message that includes a photo of the sender</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_anatomy_02_content.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Android N's notifications are wider, resulting in a less cluttered presentation of the main content.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Action area</h2>
                    <p>When expanded, a notification may display up to three actions on a strip at the bottom. </p>
                    <p>Starting in Android N, actions are shown without icons in order to accommodate more text. An icon should still be provided because devices with earlier versions of the OS continue to rely on it, as will <a href="https://www.google.com/url?q=https://www.google.com/design/spec-wear/patterns/notifications.html&amp;sa=D&amp;ust=1481818002527000&amp;usg=AFQjCNHTcvNhbEF5sbogeUAKiECHKKtqjA" target="_blank">Android Wear</a> and <a href="https://www.google.com/url?q=https://www.google.com/design/spec-auto/system-overview/notifications.html%23&amp;sa=D&amp;ust=1481818002528000&amp;usg=AFQjCNGUKwZCbAiKnvjviZsEs2tb8NwZ7Q" target="_blank">Android Auto</a> devices.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_anatomy_03_action_area.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>The action area in an Android N notification. </p>
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
            Usage
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
                  <div class="module"><h1>When not to use a notification</h1>
                    <p>Notifications should not be the primary communication channel with your users, as frequent interruptions may cause irritation. The following cases do not warrant notification:</p>
                    <ul class="lst-kix_qxvcl22jo3yd-0 start">
                      <li><strong>Cross-promotion</strong>, or advertising another product within a notification, which is strictly prohibited by the Play Store</li>
                      <li>An app that a user has <strong>never opened</strong></li>
                      <li>Messages that encourage the user to return to an app, but provide <strong>no direct value</strong>, such as "Haven't seen you in a while"</li>
                      <li>Requests to <strong>rate an app</strong></li>
                      <li><strong>Operations </strong>that don't require user involvement, like syncing information</li>
                      <li><strong>Error states</strong> from which the app may recover without user interaction</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_01_dontA.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t send holiday or birthday greetings in the form of notifications.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_02_dontB.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t interrupt the user in the middle of a task for the sole purpose of asking if you're doing a good job.</p>
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
            Behavior
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
                    <h1>Notification arrival</h1>
                    <p>When a notification arrives, it gets added to the notification drawer. You may specify if its delivery includes:</p>
                    <ul class="lst-kix_kzmg5f305bqm-0 start">
                      <li>Making a sound or vibration</li>
                      <li>Peeking onto the current screen to grab the user's attention</li>
                    </ul>
                    <p>Users may choose to block notifications. Starting in Android N, they may also prevent an app’s notifications from making sounds, vibrating, or peeking. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_01_status.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_01_status.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>When a notification arrives, an icon usually appears in the status bar. This signals to the user that there's something to see in the notification drawer.</p>
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
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_02_peak.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_02_peak.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>If it's important to grab a user's attention in the middle of a task, an app can have the notification peek onto the current screen.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Notification drawer</h1>
                    <p>The notification drawer in Android typically shows notifications in reverse-chronological order, with adjustments influenced by:</p>
                    <ul class="lst-kix_dc5va5pjmtco-0 start">
                      <li>The app's stated notification priority</li>
                      <li>Whether the notification recently alerted the user with a sound or vibration</li>
                      <li>Any people attached to the notification and whether they are starred contacts</li>
                    </ul>
                    <p><strong>Stale notifications</strong></p>
                    <p>The notification drawer is intended to show the user information relevant to this very moment in time. If a notification you sent earlier is no longer relevant, automatically dismiss it. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_03_drawer.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>In this notification drawer, a text that just arrived appears at the top. A lower priority notification about the weather appears at the bottom.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Notification interactions</h1>
                    <p>Users may interact with a notification in the following ways:</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <h3>1. To navigate to a destination </h3>
                    <p>To navigate, a user may tap a notification. If the notification appears on a locked screen, the user will need to double-tap it and then enter their PIN, pattern, or password. </p>
                    <p>When the user taps a notification, they should be taken to a screen in your app that relates directly to that notification and lets them take immediate action. For example, if the notification says it's their turn in a two-player game, tapping the notification should take them directly to that game.</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h3>2. To see an expanded view </h3>
                    <p>If offered, an expand indicator appears in the header. A user may tap the indicator or swipe down the notification body to expand it.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_06_expand.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_06_expand.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>An expanded notification</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h3>3. To dismiss it (if permitted)</h3>
                    <p>A user may dismiss a notification by swiping it left or right. </p>
                    <p>Ongoing notifications that indicate a continuing process in the background, such as music playing, may not be dismissed with a swipe.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_07_dismiss.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_07_dismiss.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>A notification being dismissed</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h3>4. To choose how similar notifications should be delivered in the future</h3>
                    <p>A user may adjust how notifications for an app are delivered by touching and holding an individual notification. In Android N, the user may also gently swipe the notification left or right and then tap the settings icon to access these controls.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_08_controls.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_08_controls.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Notification settings</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h2>Multiple notifications </h2>
                    <p>For apps that may generate multiple notifications of the same type, Android offers two different approaches to represent them: summarizing and bundling.</p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Summarizing</h2>
                    <p>Instead of displaying multiple notifications, you can create one notification that summarizes them all. For example, a messaging app might have a summary notification that says "3 new messages.” Upon expansion, it could show a snippet for each message.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_05_summary_1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Multiple notifications summarized, shown in both collapsed view and expanded view.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Bundling</h2>
                    <p>Starting in Android N, you may present multiple notifications from your app in a grouped and hierarchical manner:</p>
                    <ul class="lst-kix_k75u8ineafgx-0 start">
                      <li>A parent notification displays summary information for all child notifications.</li>
                      <li>If the user expands the parent notification, all child notifications are revealed.</li>
                      <li>The user may expand a child notification to reveal its entire content.</li>
                    </ul>
                    <p>When child notifications are presented, the system automatically removes any redundant header information. For example, if a child notification's app icon is the same as the parent notification’s app icon, then the child notification's header does not include an icon. </p>
                    <p>Child notifications should be able to stand on their own because the system may choose to show them outside of the bundle when they arrive.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_05_summary_2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Bundled notifications, shown in both collapsed and expanded views</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Expanded views</h1>
                    <p>You may display more information in a notification through an expanded view, without navigating away from the notification.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Collapsed and expanded notifications</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>A notification may offer up to three actions when expanded. It should not duplicate the action taken from tapping on the notification body. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_13_action_dont.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Don’t include text actions that duplicate the behavior of tapping on the notification body.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_14_action_do.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>When Android's Clock app has a timer running, this notification lets the user pause or add a minute directly from the notification.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Enable typing into notifications</h1>
                    <p>In Android N, apps may enable the user to type directly into a notification. Users may type small amounts of text, such replying to a text message or jotting a brief note. </p>
                    <p>For long-form typing, navigate users to your app, where they benefit from more space to view and edit text.</p>
                    <p>If you're using this functionality for a messaging app, keep the notification around after the user has sent the reply, and wait until the conversation has reached a lull before automatically dismissing it.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_17_inline.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_17_inline.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Users of Android's Messenger app can reply directly to any message without leaving the notification</p>
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
            Types of notifications
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Notifications are considered either transactional or non-transactional. </p>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h2>Transactional</h2>
                    <p>Transactional notifications provide content that a user must receive at a specific time in order to do one of the following:</p>
                    <ul class="lst-kix_g5hgxsxhm448-0 start">
                      <li>Enable human-to-human interaction</li>
                      <li>Function better in daily life</li>
                      <li>Control or resolve transient device states</li>
                    </ul>
                    <h2>Non-transactional</h2>
                    <p>If none of the above situations describe your notification, then it is non-transactional.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Transactional notifications can help users...</p></td>
                        <td colspan="1" rowspan="1"><p>Examples</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Enable human-to-human interaction</p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_2pp656d076zo-0 start">
                            <li>Incoming phone calls or text messages</li>
                            <li>Notification of a user's turn in a two-player game</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Function better in daily life</p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_2ieqoy7zvd5z-0 start">
                            <li>Calendar event about to take place</li>
                            <li>A reminder or alarm set up by the user</li>
                            <li>Delayed flight</li>
                            <li>Delivered order</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Control or resolve temporary device states</p></td>
                        <td colspan="1" rowspan="1">
                          <ul class="lst-kix_b2yhe2k0443i-0 start">
                            <li>Music playing</li>
                            <li>Turn-by-turn navigation</li>
                            <li>Stopwatch running</li>
                            <li>Screenshot taken</li>
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
                    <h1>Non-transactional opt-out and opt-in </h1>
                    <p>Non-transactional notifications should be optional, as they may not appeal to all users. You can  make them optional in one of two ways:</p>
                    <ul class="lst-kix_e9ivxnmvtjvc-0 start">
                      <li><strong>Opt-out:</strong> Users receive opt-out notifications by default, but they may stop receiving them by turning off a setting.</li>
                      <li><strong>Opt-in:</strong> Users only receive opt-in notifications by turning on a setting in your app.</li>
                    </ul>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <h2>Opt-out </h2>
                    <p>Avoid the opt-out approach unless your notifications meet <strong>both </strong>of the following criteria:</p>
                    <ul class="lst-kix_ovhvckqpq2ia-0 start">
                      <li>They provide concrete value to the user</li>
                      <li>They clearly relate to the user's context (such as current location, current date or time, past history, or expressed interests)</li>
                    </ul>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Example notification</p></td>
                        <td colspan="1" rowspan="1"><p>Reason to avoid using opt-out notifications here</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>A random tip on how to use an app</p></td>
                        <td colspan="1" rowspan="1"><p>Provides concrete user value but isn't contextual</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>A prompt to rate content recently used in the app</p></td>
                        <td colspan="1" rowspan="1"><p>Contextual, but doesn't provide concrete user value</p></td>
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
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_03_optin.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>This notification from YouTube takes the opt-out approach. It offers both context (a YouTube channel the user has subscribed to) and value (a new video from that channel). The "Options" action navigates the user to where they can opt out of future notifications for this channel.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Opt-in </h2>
                    <p>The opt-in approach is more conservative. Because users explicitly choose to receive these notifications, it's more likely they'll be glad to see them. However, they must visit settings to find out how to receive them. You may inform users about these notifications from other places in your app, such as an <a href="../growth-communications/onboarding.html">onboarding flow</a> or a dismissible <a href="../components/cards.html">card</a>.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_04_optout.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>This app takes the opt-in approach. A card at the top of the app lets users know that they can receive notifications for breaking news stories. If the user wants to opt in, they choose Yes. Otherwise, they choose No Thanks and remain opted out. This choice is also available in the app's settings.</p>
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
            Settings and priority
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
                    <h1>Notification settings </h1>
                    <p>Include a setting in your app for turning all notifications on or off. Additionally, consider offering granular settings, such as letting users choose notification sounds or receiving specific notification types.</p>
                    <p>Enable users to navigate directly to notification settings from the Android Settings app by creating a link there using the appropriate <a href="https://www.google.com/url?q=https://developer.android.com/reference/android/app/Notification.html%23INTENT_CATEGORY_NOTIFICATION_PREFERENCES&amp;sa=D&amp;ust=1481818002353000&amp;usg=AFQjCNEKwH5cxNulkMWcft1gVRpC9txueA" target="_blank">AndroidManifest tags</a>.</p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Assign appropriate priority levels</h1>
                    <p>Android allows you to assign a priority level to each notification to influence how the Android system will deliver it. The higher the priority, the more interruptive it will be — for example, MAX and HIGH priority notifications will peek onto the user's current screen, no matter what they are doing.</p>
                    <p>Prioritize with the utmost consideration for the user's time and attention. When an unimportant notification is disguised as urgent, it tricks users into unnecessary anxiety.</p>
                    <p>To give users relief from overly interruptive notifications, users can quickly silence or block an app's notifications directly on the notification itself.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Priority</p></td>
                        <td colspan="1" rowspan="1"><p>Use</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>MAX</p></td>
                        <td colspan="1" rowspan="1"><p>For critical and urgent notifications that alert the user to a condition that is time-critical or needs to be resolved before they can continue with a time-critical task.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>HIGH</p></td>
                        <td colspan="1" rowspan="1"><p>Primarily for important communication, such as messages or chats.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>DEFAULT</p></td>
                        <td colspan="1" rowspan="1"><p>For all notifications that don't fall into any of the other priorities described here.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>LOW</p></td>
                        <td colspan="1" rowspan="1"><p>For information and events that are valuable and/or contextually relevant to the user, but aren't urgent or time-critical.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>MIN</p></td>
                        <td colspan="1" rowspan="1"><p>For nice-to-know background information that isn't aimed specifically at the user. For example, weather or nearby places of interest.</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Pre-defined categories</h1>
                    <p>Assign your notification to the most suitable predefined category. Android may use this information to make ranking and filtering decisions.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Category</p></td>
                        <td colspan="1" rowspan="1"><p>Description</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_CALL</p></td>
                        <td colspan="1" rowspan="1"><p>Incoming call (voice or video) or similar synchronous communication request</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_MESSAGE</p></td>
                        <td colspan="1" rowspan="1"><p>Incoming direct message (SMS, instant message, etc.)</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_EMAIL</p></td>
                        <td colspan="1" rowspan="1"><p>Asynchronous bulk message (email)</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_EVENT</p></td>
                        <td colspan="1" rowspan="1"><p>Calendar event</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_PROMO</p></td>
                        <td colspan="1" rowspan="1"><p>Promotion or advertisement</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_ALARM</p></td>
                        <td colspan="1" rowspan="1"><p>Alarm or timer</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_PROGRESS</p></td>
                        <td colspan="1" rowspan="1"><p>Progress of a long-running background operation</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_SOCIAL</p></td>
                        <td colspan="1" rowspan="1"><p>Social network or sharing update</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_ERROR</p></td>
                        <td colspan="1" rowspan="1"><p>Error in background operation or authentication status</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_TRANSPORT</p></td>
                        <td colspan="1" rowspan="1"><p>Media transport control for playback</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_SYSTEM</p></td>
                        <td colspan="1" rowspan="1"><p>System or device status update. Reserved for system use.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_SERVICE</p></td>
                        <td colspan="1" rowspan="1"><p>Indication of running background service</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_RECOMMENDATION</p></td>
                        <td colspan="1" rowspan="1"><p>A specific, timely recommendation for a single thing. For example, a news app might recommend a news story the user might want to read next.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>CATEGORY_STATUS</p></td>
                        <td colspan="1" rowspan="1"><p>Ongoing information about device or contextual status</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Notification sounds</h1>
                    <p>When you assign a priority of DEFAULT or higher to a notification, you may optionally provide a sound to play when the notification is delivered. However, you should deliver your notification silently unless one or more of the following are true:</p>
                    <ul class="lst-kix_65s8kiygz7lp-0 start">
                      <li>The notification helps the user uphold a time-sensitive social expectation, such as an incoming phone call or a reminder for a work meeting in five minutes.</li>
                      <li>The notification tells the user about something they should do or know at that moment in order to function better in their daily life, such as a notification that a flight is delayed.</li>
                      <li>The user has explicitly requested that this notification make a sound upon arrival (if offered as an option in settings, and off by default).</li>
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
            Lock screen
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
                    <p>Android evaluates each notification's visibility level to figure out what can safely be shown. A user may choose to show notifications when their screen is locked. They may also conceal any content that an app marks as sensitive. </p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Sensitive content on lock screens</h1>
                    <p>Because notifications are visible on the lock screen, user privacy is an important consideration. For each notification you create, set a visibility level to either public, private, or secret. </p>
                    <p><strong>Public </strong>notifications are fully visible on secure lock screens, while <strong>secret </strong>notifications are hidden.</p>
                    <p><strong>Private </strong>notifications fall in the middle: they show only basic information about the existence of the notification, including its icon and name of the app that posted it. The content is replaced with a default message that says "Contents hidden.” You can replace this message with a redacted version of the content that is still useful but does not reveal personal information, such as "2 new messages.”</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_04_lockscreen1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>This user has chosen to show all notification content on the lock screen.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_behavior_05_lockscreen2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>This user has chosen to hide sensitive content from the lock screen. Because these apps gave their notifications a visibility level of "private,” they show "Contents hidden" by default. </p>
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
            Style
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
                  <div class="module"><h1>Clear and concise text</h1>
                    <p>Android truncates content titles to a single line (even when expanded). </p>
                    <p>Content titles should:</p>
                    <ul class="lst-kix_f762qnwlper4-0 start">
                      <li>Be under under 30 characters long</li>
                      <li>Contain the most important information</li>
                      <li>Avoid variables – unless they contain a number or short text string, or are preceded by static text</li>
                      <li>Exclude the app's name, which already appears in the header</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_09_title_dont.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>The content title shows the app name, which is redundant with the header area and uses up available characters.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Content text should:</p>
                    <ul class="lst-kix_x4z8pfid2wez-0 start">
                      <li>Avoid exceeding the 40-character limit</li>
                      <li>Not repeat what's in the content title</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_10_title_do.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>The content title shows the most important information.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>The large icon</h1>
                    <p>In Android N, the large icon is only meant for specific situations in which imagery meaningfully reinforces the notification's content, including:</p>
                    <ul class="lst-kix_bivykmsl728x-0 start">
                      <li><strong>Communication </strong>from another person, such as the image of someone sending a message</li>
                      <li>The <strong>source of content</strong> if it's different than the app sending the notification, such as the logo from a YouTube channel to which the user is subscribed</li>
                      <li><strong>Meaningful symbols</strong> about the notification, such as an arrow symbol for driving directions</li>
                    </ul>
                    <p>Large icons should be circular when showing a person, but square in all other cases.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_11_large_icon_dont.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>The large icon is not intended for branding.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_guidelines_12_large_icon_do.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>The large icon is meant to reinforce the content of the notification in a meaningful way, such as a person's photo attached to a message notification.</p>
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
            Templates
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Google uses the following notification templates in its suite of Android apps, which you may adapt for your own needs.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Standard</h2>
                    <p>The standard template works well for most notifications, allowing for a succinct message, a large icon when applicable, and actions.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_templates_01_standard.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Standard template for collapsed and expanded notifications </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Big text</h2>
                    <p>Use this template when you have longer text to display. It lets the user preview more of the text when the notification is expanded.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_templates_02_big_text.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Big text template for collapsed and expanded notifications</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Big picture</h2>
                    <p>Use this template when the notification contains a picture. The large icon offers a thumbnail of the picture, and the user can get a bigger preview by expanding the notification.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_templates_03_big_picture.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Big picture template for collapsed and expanded notifications</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Progress</h2>
                    <p>Use this template for activities initiated by the user that need time to complete and can be canceled at any time. (Non-cancelable activities don't warrant notifications.)</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_templates_04_progress.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Progress template for collapsed and expanded notifications</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Media </h2>
                    <p>Use this template to let the user control media currently playing from your app. The collapsed view displays up to three actions, and the large icon can be used for a related image, such as an album cover. The expanded view displays up to five actions with a larger image, or six actions if no image is displayed.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/notifications/notifications_templates_05_media.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Media template for collapsed and expanded notifications</p>
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