<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Empty states occur when an item’s content can’t be shown.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>A list that doesn’t contain any items, or a search that doesn’t display any results, are examples of empty states. Although these states aren’t typical, they should be designed to prevent user confusion. </p>
                <p>For content that cannot be displayed because of a system failure, see <a href="errors.html#errors-app-errors">app errors</a>.</p>
              </div>
              <div class="module">
                <h3>Alternatives to empty states</h3>
                <p>Starter content<br>
                  Educational content<br>
                  Best match</p>
                <h3>Content for empty states</h3>
                <p>Text tagline<br>
                  Non-interactive image</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/empty-states/patterns_empty_states.png"/>
                  </div>
                </figure>
              </div>
            </section>
          </div>
        </div>
      </div>
      
      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="empty-states.html#empty-states-displaying-empty-states" data-qp-ui-data-id="qp:1">Displaying empty states</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="empty-states.html#empty-states-avoiding-completely-empty-states" data-qp-ui-data-id="qp:2">Avoiding completely empty states</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="empty-states-displaying-empty-states" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Displaying empty states
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
                  <div class="module"><p>The most basic empty state displays a non-interactive image and a text tagline.</p>
                    <p>Use an image that:</p>
                    <ul class="lst-kix_ojibm6d1wfvy-0 start">
                      <li>Is subtle and neutral with respect to the background</li>
                      <li>Conveys the purpose and potential of the app in a lively way, such as your app's icon</li>
                    </ul>
                    <p>Include a tagline that:</p>
                    <ul class="lst-kix_m2obi9471yei-0 start">
                      <li>Has a positive tone</li>
                      <li>Is consistent with your brand</li>
                      <li>Conveys the purpose of the app without appearing to be actionable</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/empty-states/patterns_emptystates_do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>The image is neutral and clearly part of the background. The tagline conveys the purpose of the app without coming across as a call to action.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/empty-states/patterns_emptystates_dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>The image is bright and the tagline is worded like a call to action, which may encourage users to touch either the image or the tagline to start a hangout.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="empty-states-avoiding-completely-empty-states" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Avoiding completely empty states
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>There are several situations in which you can provide users with alternatives to truly empty states.</p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>Starter content</strong></p>
                    <p>The most compelling way for new users to learn and get excited about your app is by using it. Consider providing starter content that will allow users to explore your app right away. </p>
                    <p>Recommendations:</p>
                    <ul class="lst-kix_49cmhgvnnhb4-0 start">
                      <li>Use content that has broad appeal and demonstrates primary features.</li>
                      <li>Give users the ability to delete and replace this content.</li>
                      <li>If possible, provide content that's personalized.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/empty-states/patterns_emptystates_starter.png"/>
                      </div>
                      <figcaption>
                        <p>A book reading app might provide all users with a few free popular books to immediately start exploring the app.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p><strong>Educational content</strong></p>
                    <p>If the purpose of the screen isn't easily conveyed through an image and a tagline, consider showing educational content instead.</p>
                    <p>Recommendations:</p>
                    <ul class="lst-kix_6zm2x7h92bnt-0 start">
                      <li>Help users understand what they'll be able to do on this screen once it has content.</li>
                      <li>Make it possible to dismiss or skip this content.</li>
                      <li>Keep it brief.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/empty-states/patterns_emptystates_education.png"/>
                      </div>
                      <figcaption>
                        <p>Before a user watches a video in the movies app, a dismissible card is shown to explain the features and benefits of the service.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>Best match</strong></p>
                    <p>If nothing exactly matches the user's query, are there any results for a query spelled slightly differently? If so, then show the results, as they may help a user find what they're after.</p>
                    <p>With this approach, clearly convey in a heading above the results that this content shouldn't be mistaken for a match to actual query results.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/empty-states/Empty-state_best_match_01.png"/>
                      </div>
                      <figcaption>
                        <p>Example of best matches </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/empty-states/Empty-state_best_match_02.png"/>
                      </div>
                      <figcaption>
                        <p>Offering best matches is a great way to handle a misspelled query without explicitly placing blame on the user.</p>
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