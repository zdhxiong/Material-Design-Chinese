<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>搜索可以使用户快速查找应用内容。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>当应用支持大量的内容时，用户应该要能通过搜索功能快速查找内容。</p>
              </div>
              <div class="module">
                <h3><strong>搜索选项</strong></h3>
                <p>语音搜索<br>
                  搜索建议<br>
                  自动完成</p>
                <h3><strong>搜索类型</strong></h3>
                <p>固定显示的搜索<br>
                  可展开搜索</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="search.html#search-in-app-search" data-qp-ui-data-id="qp:1">应用内搜索</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="search-in-app-search" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            应用内搜索
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>当应用支持大量内容时，用户应该要能通过搜索功能快速查找内容。</p>
              <p>基本的搜索包括：</p>
              <ol class="lst-kix_ip2ohrtdq8of-0 start" start="1">
                <li>打开一个搜索文本框</li>
                <li>输入并提交一个查询</li>
                <li>显示一组搜索结果</li>
              </ol>
              <p>然而，可以通过提供以下功能来提升搜索体验：</p>
              <ul class="lst-kix_gdvuemmncjao-0 start">
                <li>语音搜索</li>
                <li>在搜索完成之前，根据用户的最近搜索提供历史搜索建议</li>
                <li>自动完成和应用的真实搜索结果匹配的搜索建议</li>
              </ul>
              <p>应用内搜索有两种主要模式：<strong>固定显示的搜索</strong>和<strong>可展开搜索</strong>。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h1><strong>固定显示的搜索</strong></h1>
                    <p>当搜索是应用的主焦点时，使用固定显示的搜索。</p>
                    <p>行为：</p>
                    <p>搜索文本字段嵌入在搜索框内，随时准备获得焦点。用户可以触摸麦克风图标来启用语音搜索。</p>
                    <p>当获得焦点时，搜索框会向下展开，显示历史搜索建议。如果需要的话，屏幕键盘也会出现。</p>
                    <p>选择任意一条搜索建议就会提交搜索。触摸向上箭头会将焦点从搜索框中释放，关闭搜索建议以及屏幕键盘。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_persistent1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>固定显示的搜索框</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_persistent2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>聚焦状态的固定显示的搜索框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>当用户输入搜索词时，搜索建议会切换为自动完成。随着用户的输入，搜索建议会被过滤和排序。选择一个建议或按下搜索键就会提交搜索。</p>
                    <p>搜索框中的 X 操作会清空搜索词。</p>
                    <p>当显示搜索结果时，搜索框保持可见，但是默认不拥有焦点。屏幕键盘已关闭，因此可以显示更多搜索结果。</p>
                    <p>搜索结果的格式为卡片，以匹配搜索框的外观，以及适应不同类型的搜索结果。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_persistent3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>自动完成<br>
                      </p></figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_persistent4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>搜索结果</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1><strong>可展开搜索</strong></h1>
                    <p>当搜索不是应用的主焦点时，使用可展开搜索。</p>
                    <p>行为：</p>
                    <p>在工具栏中显示一个放大镜图标，而不是搜索文本框。</p>
                    <p>触摸搜索图标会使工具栏进行转换，清空工具栏中的其他内容，并显示搜索文本框。如果支持语音搜索，麦克风图标也会出现。</p>
                    <p>搜索文本框会自动获得焦点，如果需要的话，屏幕键盘也会出现。历史搜索建议可以显示在工具栏下面。选择任何一条建议将提交搜索。</p>
                    <p>触摸向上箭头可以关闭搜索，并把工具栏恢复成原始样式。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_expandable1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>可展开搜索</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_expandable2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>聚焦状态的搜索文本框</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>当用户输入搜索词时，搜索建议会转换为自动完成。随着用户的输入，搜素建议会被过滤和排序。选择其中一条建议或按下搜索键会提交搜索。</p>
                    <p>搜索框中的 X 操作会清空搜索框。</p>
                    <p>当显示搜索结果时，转换成了搜索框样式的工具栏保持可见，但是默认不拥有焦点。屏幕键盘已关闭，因此可以显示更多搜索结果。</p>
                    <p>搜索结果被格式化成卡片，并显示在工具栏下方的页面主体中。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_expandable3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>自动完成<br></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_expandable4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>搜索结果</p>
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