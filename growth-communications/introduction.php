<?php
$vars = array(
  'title' => '介绍',
  'category' => '增长与用户教育',
  'theme_color' => '#00bcd4',
  'color_name' => 'cyan',
  'prev_title' => 'Swipe to refresh',
  'prev_path' => 'patterns/swipe-to-refresh',
  'next_title' => 'Onboarding',
  'next_path' => 'growth-communications/onboarding'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Introduction</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>The growth and communications guidelines contain best practices and components to help users quickly and intuitively understand what they can do with your app, including <a href="onboarding.html">onboarding</a>, <a href="feature-discovery.html">feature discovery</a>, and <a href="gesture-education.html">gesture education</a>. </h1>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="introduction.html#introduction-goals" data-qp-ui-data-id="qp:1">Goals</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="introduction-goals" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Goals
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div><p>The following guidelines aim to:</p>
              <ul class="lst-kix_to3stogm3g1q-0 start">
                <li>Help users derive more value from your app by introducing them to features and functionality at contextually relevant moments</li>
                <li>Improve app engagement and retention metrics</li>
              </ul>
              <p>To ensure a user experience that respects user attention, these recommendations address targeting, timing, volume, and frequency.</p>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/growth-communications/introduction/patterns_usereducation_01_TimelineEdu2.png"/>
                      </div>
                      <figcaption>
                        <p><strong>First seven days</strong></p>
                        <p>Onboarding: Self-Select model<br>
                          User education: Basic guidance on how to use the app</p>
                        <p><strong>Next 30 days and beyond</strong></p>
                        <p>Feature discovery: Tips for features and functionality the user hasn’t tried</p>
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

<?php
include $public_files['footer'];
?>