<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>当用户在应用中执行操作时，通过文本确认或确知该操作。</h1>
        </div>
      </div>
      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="confirmation-acknowledgement.html#confirmation-acknowledgement-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="confirmation-acknowledgement.html#confirmation-acknowledgement-confirmation" data-qp-ui-data-id="qp:2">确认</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="confirmation-acknowledgement.html#confirmation-acknowledgement-acknowledgement" data-qp-ui-data-id="qp:3">确知</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="confirmation-acknowledgement-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>确认和确知操作可以帮助减轻已经发生或即将发生的事情的不确定性。它还可以防止用户犯下会让他们后悔的错误。</p>
              <ul class="lst-kix_xhnp0oc6lrvk-0 start">
                <li><strong>确认</strong>要求用户核实需要继续执行的操作。</li>
                <li><strong>确知</strong>是显示文本，让用户知道他们执行的操作已完成。</li>
              </ul>
              <p>并非所有操作都需要确认或确知。</p>
            </div>
          </div>
        </div>

        <div id="confirmation-acknowledgement-confirmation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            确认
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
                    <p>确认要求用户核实他们真的要继续执行刚刚调用的操作。它可能与警告或与该操作相关的关键信息相配对。</p>
                    <p>确认的模态对话框标题应该有意义，并回应请求的操作。</p>
                    <p>当操作的结果是可逆的或可忽略的，则不需要确认。例如，使用复选标记来显示已选择的图片，则不需要确认。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="confirmation-figure-caption-1" src="<?php static_url('../static/media/patterns/confirmation-acknowledgement/patterns_confirmation-acknowledgement_confirm_1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="confirmation-figure-caption-1">
                        <p>用户请求从库中删除一个相册，会显示一个<a href="https://developer.android.com/design/building-blocks/dialogs.html#alerts" target="_blank">警告框</a>来确认此操作，并告知用户此相册在任何设备上都将不能使用。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="confirmation-figure-caption-2" src="<?php static_url('../static/media/patterns/confirmation-acknowledgement/patterns_confirmation-acknowledgement_confirm_2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="confirmation-figure-caption-2">
                        <p>启用 Android Beam 后，系统会提示用户触摸要共享的内容。如果用户决定不共享了，只需把手机移开即可。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="confirmation-acknowledgement-acknowledgement" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            确知
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
                    <p>确知消除了系统采取的隐式操作的不确定性。它可以和一个含撤销操作的选项配对使用。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="acknowledgement-figure-caption-1" src="<?php static_url('../static/media/patterns/confirmation-acknowledgement/patterns_confirmation-acknowledgement_acknowledgement_1.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="acknowledgement-figure-caption-1">
                        <p>如果用户从撰写界面向后或向上导航，则会保存电子邮件的草稿，一个 toast 形式的确知出现，然后几秒钟后淡出。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="acknowledgement-figure-caption-2" src="<?php static_url('../static/media/patterns/confirmation-acknowledgement/patterns_confirmation-acknowledgement_acknowledgement_2.png'); ?>"/>
                        </div>
                      </div>
                      <figcaption id="acknowledgement-figure-caption-2">
                        <p>在用户从列表视图中删除一个会话后，将出现一个带有撤销选项的确认。它会持续显示，直到用户采取了不相关的操作，例如滚动列表。</p>
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