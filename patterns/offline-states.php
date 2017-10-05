<?php include SRC_PATH . '/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">
    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="chapter-content">
      <div class="article-content chapter-intro">
        <div>
          <h1>离线状态可以让没有连接到互联网的用户使用应用。</h1>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li><a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="offline-states.html#offline-states-principles" data-qp-ui-data-id="qp:1">原则</a></li>
          <li><a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="offline-states.html#offline-states-states-settings" data-qp-ui-data-id="qp:2">状态和设置</a></li>
          <li><a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="offline-states.html#offline-states-offline-interactions" data-qp-ui-data-id="qp:3">离线交互</a></li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="offline-states-principles" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            原则
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 100.0%">
                          <img alt="" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-principles-graceful.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                    <h2>适应不同的网络状态</h2>
                    <p>当用户的网络缓慢、网络时常中断、或者没有连接到互联网时，你的应用的功能要怎么展现。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 100.0%">
                          <img alt="" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-principles-form.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                    <h2>功能说明</h2>
                    <p>使用一个精心设计的元素来解释离线状态下如何使用。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 100.0%">
                          <img alt="" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-principles-something.png'); ?>"/>
                        </div>
                      </div>
                    </figure>
                    <h2>显示可用的内容</h2>
                    <p>显示一些东西比什么都不显示要好，同时也可以解释当前互联网连接处于受限状态。</p></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="offline-states-states-settings" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            状态和设置
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
                    <p>你的应用应该指明当前是在线状态还是离线状态，特别是应用的某些功能可以离线使用，而有些功能必须联网才能使用时。</p>
                    <p>如果可以的话，应用还应该提供一个管理离线文件的地方。</p>
                  </div>
                  <div class="module">
                    <div class="modulettes">
                      <a class="modulette container default" href="https://developer.android.com/develop/quality-guidelines/building-for-billions-connectivity.html#network-offline" target="_blank">
                        <img alt="" class="icon callout-icon" src="../static/spec/images/callouts/default.svg"/>
                        <div class="info">
                          <div class="title">使你的应用可在离线状态使用</div>
                          <span class="subtitle">把数据保存到本地，并减少网络请求</span>
                        </div>
                      </a>
                    </div>
                    <div class="modulettes">
                      <a class="modulette container default" href="https://developers.google.com/web/fundamentals/instant-and-offline/offline-ux" target="_blank">
                        <img alt="" class="icon callout-icon" src="../static/spec/images/callouts/default.svg"/>
                        <div class="info">
                          <div class="title">离线状态的用户体验设计注意事项</div>
                          <span class="subtitle">网络较慢及离线状态的设计建议</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>离线时可用</h1>
                    <p><br>显示一个脱机图标和 “Offline” 文本，以表明当前操作正处于离线状态。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="states-settings-figure-caption-0" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-state-settings-offline-translation.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="states-settings-figure-caption-0">
                        <p>用户执行一项离线操作时，会显示脱机图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="states-settings-figure-caption-1" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-state-settings-browser-offline.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="states-settings-figure-caption-1">
                        <p>当网站离线访问时，网址旁边会显示脱机图标。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>离线时不可用</h1>
                    <p><br>离线时，不可用的功能应使用 “cloud off” 图标。产品离线时，仅显示此图标。有可能的话，使用带此图标的文本 “No internet”。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="states-settings-figure-caption-2" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-state-settings-search-offline.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="states-settings-figure-caption-2">
                        <p>使用对用户有用的提示表示离线状态，告诉用户离线时，用户可以做什么。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="states-settings-figure-caption-3" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-state-settings-translate-offline.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="states-settings-figure-caption-3">
                        <p>当联网时，提供一个下载操作按钮，以供将来离线使用。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>离线位置</h1>
                    <p>为用户提供一个管理离线设置的地方。如果适用的话，使用脱机图标标记此位置。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="states-settings-figure-caption-4" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-state-settings-offline-places.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="states-settings-figure-caption-4">
                        <p>此导航菜单中提供了 Offline areas。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="offline-states-offline-interactions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            离线交互
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>下载文件</h1>
                    <p>离线功能可以让用户使用预先下载的文件，例如视频和网站。要离线访问这些文件，用户必须在联网时把文件下载到设备上。</p>
                    <p>要指明文件可以下载，需要同时显示下载图标和文本 “download”。包括文件大小，以帮助用户决定文件是否太大。</p>
                    <p>离线时，允许用户选择在联网后需要下载的文件。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="offline-interactions-figure-caption-0" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-interactions-downloading-do.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="offline-interactions-figure-caption-0">
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>下载图标和文本 “Download” 配合使用。 </p></figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 71.1111111111%">
                          <img alt="" aria-describedby="offline-interactions-figure-caption-1" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-interactions-downloading-dont.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="offline-interactions-figure-caption-1">
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>不要使用切换控件来下载单个文件。切换控件表示的是状态 “on” 或 “off”，而不是一次性的下载。</p></figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2 h1-spacing">
                  <div class="module">
                    <h1>图像</h1>
                    <p>文件下载完毕后，显示一个脱机图标，表示可以离线使用。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 1520px">
                        <div class="frame" style="padding-top: 47.3684210526%">
                          <img alt="" aria-describedby="offline-interactions-figure-caption-2" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-interactions-icons.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="offline-interactions-figure-caption-2">
                        <p><a href="https://material.io/icons/#ic_file_download" target="_blank">下载</a>和<a href="https://material.io/icons/#ic_offline_pin" target="_blank">脱机图标</a>可以在<a href="https://material.io/icons/" target="_blank">Material icon图标库</a>中找到。
                        </p></figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3 h1-spacing">
                  <div class="module">
                    <h1>动画</h1>
                    <p>要表明已下载的文档可以离线访问，需要把下载图标使用动画转换为脱机图标。详见<a href="../components/progress-activity.html#progress-activity-types-of-indicators" target="_blank">进度 & 活动状态</a>。</p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 404px">
                        <div class="qp-ui frame" data-qp-ui="{ 'VideoPlayer': {} }" role="button" style="padding-top: 178.217821782%">
                          <video aria-describedby="offline-interactions-figure-caption-3" controls="" loop="" preload="auto">
                            <source src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-interactions-determinate-progress.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-interactions-determinate-progress.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption id="offline-interactions-figure-caption-3">
                        <p>进度指示器在两个图标之间切换。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3 h2-spacing">
                  <div class="module">
                    <h2>移除下载的内容</h2>
                    <p>为了腾出存储空间，用户可能会删除设备上的文件。你的应用应该允许用户删除任何已下载的文件。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="offline-interactions-figure-caption-4" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-interactions-delete.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="offline-interactions-figure-caption-4">
                        <p>对于已下载的文件，显示一个含删除图标的操作按钮。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame" style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="offline-interactions-figure-caption-5" src="<?php static_url('../static/media/patterns/offline-states/patterns-offline-interactions-delete-confirmation.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="offline-interactions-figure-caption-5">
                        <p>显示通过删除文件可以腾出多少空间。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include SRC_PATH . '/public/footer.php'; ?>
