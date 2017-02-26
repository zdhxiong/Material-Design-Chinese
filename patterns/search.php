<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Search allows users to locate app content quickly.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>When an app supports large amounts of information, users should be able to quickly locate content by searching for it.</p>
              </div>
              <div class="module">
                <h3><strong>Search options</strong></h3>
                <p>Voice search<br>
                  Search suggestions<br>
                  Autocompletion</p>
                <h3><strong>Types of search</strong></h3>
                <p>Persistent search<br>
                  Expandable search</p>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="search.html#search-in-app-search" data-qp-ui-data-id="qp:1">In-app search</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">
        <div id="search-in-app-search" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            In-app search
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>When an app supports large amounts of information, users should be able to quickly locate content by searching. </p>
              <p>Basic search involves:</p>
              <ol class="lst-kix_ip2ohrtdq8of-0 start" start="1">
                <li>Opening a search text field</li>
                <li>Entering and submitting a query</li>
                <li>Displaying a set of search results</li>
              </ol>
              <p>However, the search experience can be enhanced by providing:</p>
              <ul class="lst-kix_gdvuemmncjao-0 start">
                <li>Voice search</li>
                <li>Historical search suggestions based on recent user queries, before a query is completed</li>
                <li>Auto-completed search suggestions matching actual results in your application data</li>
              </ul>
              <p>There are two major patterns for in-app search: <strong>persistent search</strong> and <strong>expandable search</strong>.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h1><strong>Persistent search</strong></h1>
                    <p>Use persistent search when search is the primary focus of your app. </p>
                    <p>Behavior:</p>
                    <p>The search text field is presented inside of an inset search box, ready to receive focus. The user can touch the microphone icon to initiate a voice search.</p>
                    <p>When in focus, the search field expands to show historical search suggestions. If needed, the onscreen keyboard will also appear. </p>
                    <p>Choosing any of the suggestions submits the search. Touching the up arrow releases the focus from search, dismissing suggestions and the on-screen keyboard.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_persistent1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Persistent search box</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_persistent2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Persistent search text field in focus</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>As the user enters a query, the search suggestions shift to auto-completion. As the user types, the suggestions are filtered and sorted. Choosing a suggestion or pressing the return key submits the search.</p>
                    <p>The X action in the search box clears the query. </p>
                    <p>When displaying search results, the search box remains visible, but is not focused by default. The onscreen keyboard is dismissed so more results can be shown.</p>
                    <p>Search results are formatted as cards to match the inset appearance of the search box and to accommodate different types of results.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_persistent3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Auto-complete<br>
                      </p></figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_persistent4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Search results</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1><strong>Expandable search</strong></h1>
                    <p>Use expandable search when search is not the primary focus of your app.</p>
                    <p>Behavior:</p>
                    <p>Display a magnifying glass icon in the toolbar instead of a search text box.</p>
                    <p>Touching the search icon causes the toolbar to transform, clearing other content and displaying a search text field. If voice search is supported, the microphone icon also appears.</p>
                    <p>The search text field automatically receives focus, and, if needed, the onscreen keyboard will appear. Historical search suggestions can be shown beneath the toolbar. Choosing any of the suggestions submits the query. </p>
                    <p>Touching the up arrow closes search and restores the original presentation of the toolbar.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_expandable1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Expandable search</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_expandable2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Search text field in focus</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>As the user enters a query, the search suggestions shift to auto-completion. As the user types, the suggestions are filtered and sorted. Choosing a suggestion or pressing the return key submits the search. </p>
                    <p>The X action in the search field clears the query. </p>
                    <p>When displaying search results, the search version of the toolbar remains visible, but is not in focus by default. The onscreen keyboard is dismissed so more results can be shown.</p>
                    <p>Search results are formatted as cards and appear in the main body of the page beneath the toolbar.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_expandable3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Auto-complete<br></p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/search/patterns_search_expandable4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Search results</p>
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