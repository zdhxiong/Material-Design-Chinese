<?php
$vars = array(
  'title' => '卡片',
  'category' => '组件',
  'theme_color' => '#3949AB',
  'color_name' => 'indigo',
  'prev_title' => '按钮：浮动操作按钮',
  'prev_path' => 'components/buttons-floating-action-button',
  'next_title' => '纸片',
  'next_path' => 'components/chips'
);

include $public_files['header'];
?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title">Cards</h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>A card is a sheet of material that serves as an entry point to more detailed information. </p>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Cards may contain a photo, text, and a link about a single subject. They may display content containing elements of varying size, such as photos with captions of variable length.</p>
                <p>A card collection is a layout of cards on the same plane.</p>
              </div>
              <div class="module">
                <h3><strong>Usage</strong></h3>
                <p>Cards display content composed of different elements whose size or supported actions vary.</p>

                <h3><strong>Supported gestures</strong></h3>
                <p>Swipe<br>
                  Pick-up-and-move</p>

                <h3><strong>Related components </strong></h3>
                <p><a href="grid-lists.html">Grid lists</a></p>

                <h3><strong>For developers</strong></h3>
                <p>
                  <a href="https://www.google.com/url?q=http://developer.android.com/index.html&amp;sa=D&amp;ust=1481817970288000&amp;usg=AFQjCNGDCjHsLwZxRyFZiza53UXMMl_Prg" target="_blank">Android cards</a><br>
                  <a href="https://www.google.com/url?q=https://www.polymer-project.org/1.0/&amp;sa=D&amp;ust=1481817970289000&amp;usg=AFQjCNGE4vO4lDdu1AKO1gSMoZknFYWhxQ" target="_blank">Polymer cards</a>
                </p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/components/cards/components_cards.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="cards.html#cards-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="cards.html#cards-content" data-qp-ui-data-id="qp:2">Content</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="cards.html#cards-behavior" data-qp-ui-data-id="qp:3">Behavior</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="cards.html#cards-actions" data-qp-ui-data-id="qp:4">Actions</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="cards.html#cards-content-blocks" data-qp-ui-data-id="qp:5">Content blocks</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="cards-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
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
                  <div class="module">
                    <p>Cards are a convenient means of displaying content composed of different elements. They’re also well-suited for showcasing elements whose size or supported actions vary, like photos with captions of variable length.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a card</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p>A card collection is coplanar, or a layout of cards on the same plane.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards2.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a card collection</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards3.png"/>
                      </div>
                      <figcaption>
                        <p>Example of a card collection</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <p><strong>When to use</strong></p>
                    <p>Use a card layout when displaying content that:</p>
                    <ul class="lst-kix_rnw5ydwfz5t2-0 start">
                      <li>As a collection, comprises multiple data types, such as images, movies, and text</li>
                      <li>Does not require direct comparison (a user is not directly comparing images or text)</li>
                      <li>Supports content of highly variable length, such as comments</li>
                      <li>Contains interactive content, such as +1 buttons or comments</li>
                      <li>Would otherwise be in a grid list but needs to display more content to supplement the image</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards6.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>1. Cards have rounded corners.<br>
                          2. Cards can have multiple actions.<br>
                          3. Cards can be dismissible and rearranged.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards7.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>This is a tile, not a card.<br>
                          1. Tiles have square corners.<br>
                          2. Tiles have no more than two actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards8.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>A quickly scannable list, instead of cards, is an appropriate way to represent homogeneous content that doesn't have many actions.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards9.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>The use of cards here distracts the user from being able to quickly scan. These list items are also not dismissable, so having them on separate cards is confusing. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards10.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Grid tiles are a clean and lightweight way to present a gallery of images.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards11.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Cards are unnecessary in a gallery of images (homogeneous content). </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="cards-content" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Content
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
                  <div class="module"><p>Cards provide context and an entry point to more robust information and views, and their content and quantity can vary greatly. Cards within a card collection can each contain a unique data set, such as a checklist with an action, a note with an action, and a note with a photo.</p>
                    <p>Don't overload cards with extraneous information or actions.</p>
                    <h2><strong><strong>Content hierarchy</strong></strong></h2>
                    <p>Use hierarchy within the card to direct users’ attention to the most important information. For example, place primary content at the top of the card, or use typography to emphasize primary content.</p>
                    <p>Images can reinforce other content in a card. However, their size and placement within the card depends on whether images are the primary content or are being used to supplement other content on the card.</p>
                    <p><strong>Background images</strong></p>
                    <p>Text is most legible when placed on a solid color background with a sufficient contrast ratio to the text. Text placed on image backgrounds should preserve text legibility.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_content1.png"/>
                      </div>
                      <figcaption>
                        <p>This card collection contains cards with varied layouts.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_content2.png"/>
                      </div>
                      <figcaption>
                        <p>This card collection contains cards with varied content types and layouts.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_content3.png"/>
                      </div>
                      <figcaption>
                        <p>Typography can emphasize primary content.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_content4.png"/>
                      </div>
                      <figcaption>
                        <p>This card collection contains cards with varied layouts and content hierarchy. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="cards-behavior" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
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
              <p>Cards have a constant width and variable height. The maximum height is limited to the height of the available space on a platform, but it can temporarily expand (for example, to display a comment field). </p>
              <p>Cards do not flip over to reveal information on the back.</p>
              <h1>Supported gestures</h1>
              <p>Card gestures should be consistently implemented within a card collection.</p>
              <p>Supported gestures include:</p>
              <ul class="lst-kix_s5w344fogft3-0 start">
                <li>The <strong>swipe gesture</strong> may be used on a per-card basis. Limit swipe gestures within a view so that they don’t overlap with one another. For example, a swipeable card should not contain a swipeable image carousel, so that only a single action occurs when the card is swiped.</li>
                <li>The <strong>pick-up-and-move gesture</strong> may be used if it is important for the user to be able to sort cards within a collection. But consider if filtering or sorting would better organize the content.</li>
              </ul>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Card collection filtering and sorting</h1>
                    <p>Card collections can be programmatically sorted or filtered by date, file size, alphabetical  order, or other parameters. </p>
                    <ul class="lst-kix_k88e5oocs0bw-0 start">
                      <li>The first item in the collection is positioned at the top left.</li>
                      <li>The order proceeds left to right and top to bottom.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior1.png"/>
                      </div>
                      <figcaption>
                        <p>Card sorting from left to right, top to bottom. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h1>Scrolling</h1>
                    <p>Card collections only scroll vertically. </p>
                    <p>Card content that exceeds the maximum card height is truncated and does not scroll, but the card can be expanded. Once expanded, the card may exceed the maximum height of the view. In this case, the card will scroll with the card collection.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior2.png"/>
                      </div>
                      <figcaption>
                        <p>Card content that exceeds the maximum card height is truncated and does not scroll</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior5.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Cards may be expanded to reveal more content, without using scrolling.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior4.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>On mobile, avoid placing scrollable space within a card, as it could cause two sets of scroll bars to be displayed, if one is already present.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior3.png"/>
                      </div>
                      <figcaption>
                        <p>On desktop, card content can expand and scroll internally </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Card focus</h1>
                    <p>When traversing through focus points on a card, all focusable elements are visited before moving to the next card.</p>
                    <p>For interfaces that depend on focus traversal for navigation (D-pad and keyboard), cards should have either a primary action or open a new view containing primary and supplemental actions.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior6.png"/>
                      </div>
                      <figcaption>
                        <p>Action selected during focus traversal </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_behavior7.png"/>
                      </div>
                      <figcaption>
                        <p>Expanded supporting text made visible, with the focus then placed on a supplemental action</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="cards-actions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Actions
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
                    <p>The primary action in a card is typically the card itself.</p>
                    <p>Supplemental actions can vary from card to card in a collection, depending on the content type and expected outcome; for example, playing a movie versus opening a book. Within cards in a collection, position actions consistently. </p>
                    <h2><strong><strong>Supplemental actions </strong></strong></h2>
                    <p>Supplemental actions within the card are explicitly called out using icons, text, and UI controls, typically placed at the bottom of the card.</p>
                    <p>Limit supplemental actions to two actions, in addition to an overflow menu.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards16.png"/>
                      </div>
                      <figcaption>
                        <p>Card with action area, rich media and supporting text</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards17.png"/>
                      </div>
                      <figcaption>
                        <p>Card with action areas 1 and 2, optional header, rich media, supporting text, and supplemental actions</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards18.png"/>
                      </div>
                      <figcaption>
                        <p>Card with action areas 1, 2, 3 and 4, optional header, rich media, and supplemental actions</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards19.png"/>
                      </div>
                      <figcaption>
                        <p>Card with action areas 1 and 2, optional header, supporting text and supplemental actions</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>UI controls</strong></h2>
                    <p>UI controls, like a slider, placed inline with primary content can modify the view of the primary content. For example, a slider to choose a day, stars to rate content, or a segmented button to select a date range.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action1.png"/>
                      </div>
                      <figcaption>
                        <p>This card contains UI controls within the action area block</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action4.png"/>
                      </div>
                      <figcaption>
                        <p>This card contains segmented buttons within the action area block. </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action6.png"/>
                      </div>
                      <figcaption>
                        <p>This card contains a slider control within the action area block.</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action5.png"/>
                      </div>
                      <figcaption>
                        <p>This card contains tabs within the action area block. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2><strong>Overflow menu (optional)</strong></h2>
                    <p>An overflow menu is typically placed in the upper-right corner of a card, but can be placed in the lower-right corner if doing so improves content layout and legibility.</p>
                    <p>Take care not to overload an overflow menu with too many actions.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_overflow.png"/>
                      </div>
                      <figcaption>
                        <p>This card contains an overflow menu in the top right. </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2><strong><strong>Additional actions</strong></strong></h2>
                    <p>Inline links within text content are strongly discouraged.</p>
                    <p>Although cards can support multiple actions, UI controls, and an overflow menu, use restraint and remember that cards are entry points to more complex and detailed information.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action2-do.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                        <p>Use cards as an entry point to more detailed information. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action3-dont.png"/>
                      </div>
                      <figcaption>
                        <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                        <p>Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions. Inline links within text content are strongly discouraged.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="cards-content-blocks" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Content blocks
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
                    <p>Cards can be constructed using blocks of content which include:</p>
                    <ul class="lst-kix_an4kdbg3r80d-0 start">
                      <li>An optional header</li>
                      <li>A primary title</li>
                      <li>Rich media</li>
                      <li>Supporting text</li>
                      <li>Actions</li>
                    </ul>
                    <p>These blocks can be organized to promote different types of content. For example, numbers may be emphasized by increasing their typographic scale.</p>
                    <p>On tablet/desktop<strong>, </strong>cards should follow the 24dp keyline. See <a href="../layout/metrics-keylines.html#metrics-keylines-keylines-spacing">Metrics &amp; Keylines</a> for more information.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards20.png"/>
                      </div>
                      <figcaption>
                        <p>Primary title top padding: 24dp<br>
                        Primary title bottom padding: 16dp<br>
                        Action button row padding: 8dp<br>
                        Supporting text top padding: 16dp<br>
                        Supporting text bottom padding: 24dp</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Content block types</h1>
                    <p><strong>Rich media</strong></p>
                    <p>16:9 or 1:1 aspect ratio (recommended)</p>
                    <p><strong>Actions</strong></p>
                    <p>Padding: 8dp</p>
                    <p><strong>Primary title/text</strong></p>
                    <p>Title: 24sp or 14sp<br>
                      Subtitle: 14sp<br>
                      Left and right padding: 16dp on mobile </p>
                    <p>On tablet/desktop<strong>, </strong>cards should follow the 24dp keyline. See <a href="../layout/metrics-keylines.html#metrics-keylines-keylines-spacing">Metrics &amp; Keylines</a> for more information.</p>
                    <p>Top padding: 16dp or 24dp (when a large primary title is present)<br>
                      Bottom padding: 16dp (if there are additional actions or supporting text) or 24dp (no actions or supporting text) </p>
                    <p><strong>Supporting text</strong></p>
                    <p>Supporting text: 14sp<br>
                      Left and right padding: 16dp on mobile </p>
                    <p>On tablet/desktop<strong>, </strong>cards should follow the 24dp keyline. See <a href="../layout/metrics-keylines.html#metrics-keylines-keylines-spacing">Metrics &amp; Keylines</a> for more information.<br>
                      Top padding: 16dp<br>
                      Bottom padding: 24dp (16dp if there are additional actions or text below)</p>
                    <p>Bullet points (but not their text), images, and buttons may extend outside of the 16dp padding.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards28.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1><strong>Card collections </strong></h1>
                    <p><strong>Card margins on mobile</strong></p>
                    <p>Padding from edge of screen to card: 8dp<br>
                      Space between cards: 8dp</p>
                    <p><strong>Responsive UI</strong></p>
                    <p>Card gutters and margins may vary on larger screen sizes, as long as they follow Material Design 8dp grid. Card margins and gutters can be 8, 16, 24, or 40dp wide.</p>
                    <p>Margins and gutters don’t need to be equal. For example, both 40dp margins and 24dp gutters can be used in the same layout.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/components/cards/layout_adaptiveUI_grid_02_margins.webm" type="video/webm">
                            <source src="../static/media/components/cards/layout_adaptiveUI_grid_02_margins.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p></p>
                        <p>This animation shows interactions of the following margin and gutter width variations:</p>
                        <ul class="lst-kix_cflcskz1qeuo-0 start">
                          <li>8dp margins and gutters</li>
                          <li>16dp margins and gutters</li>
                          <li>24dp margins and gutters</li>
                          <li>40dp margins and gutters</li>
                          <li>40dp margins and 24dp gutters</li>
                        </ul>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Elevation</strong></p>
                    <p>Card resting elevation: 2dp<br>
                      Card raised elevation: 8dp</p>
                    <p>Cards have a default elevation of 2dp.</p>
                    <p>On desktop, cards can have a resting elevation of 0dp and gain an elevation of 8dp on hover.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_elevation.png"/>
                      </div>
                      <figcaption>
                        <p>Card resting elevation of 2dp, and raised elevation of 8dp</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_elevation_desktop.png"/>
                      </div>
                      <figcaption>
                        <p>On desktop, cards have a resting elevation of 0dp (left), and an elevation of 8dp on hover (right)</p>
                        <p> (desktop only)</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Content block combinations</h1>
              <p>The following examples illustrate some possible combinations of content blocks.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area</strong></p>
                    <ul class="lst-kix_if9xk86cumf-0 start">
                      <li>16:9 ratio</li>
                    </ul>
                    <p><strong>Supporting text</strong></p>
                    <ul class="lst-kix_lxmx7nviftrj-0 start">
                      <li>Text: 14sp</li>
                      <li>Left and right padding: 16dp</li>
                      <li>Top padding: 16dp or 24dp (when a primary title is present)</li>
                      <li>Bottom padding: 16dp (if there are additional actions or supporting text) or 24dp (if there are no actions or supporting text)</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards29.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Avatar, Title, and Subtitle area</strong></p>
                    <ul class="lst-kix_cefnexi6519-0 start">
                      <li>Height: 72dp</li>
                      <li>Left and right padding: 16dp</li>
                      <li>Top and bottom padding: 16dp</li>
                    </ul>
                    <p><strong>Media area</strong></p>
                    <ul class="lst-kix_fg1c5omc6rb9-0 start">
                      <li>16:9 ratio<br></li>
                    </ul>
                    <p><strong>Supporting text</strong></p>
                    <ul class="lst-kix_gep5cyd9dh7j-0 start">
                      <li>Text: 14sp</li>
                    </ul>
                    <ul class="lst-kix_z28tg7fs7td7-0 start">
                      <li>Left and right padding: 16dp</li>
                      <li>Top and bottom padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_w76qg4ak3vvk-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards30.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Avatar, Title, and Subtitle area</strong></p>
                    <ul class="lst-kix_rm1mnefsleij-0 start">
                      <li>Height: 72dp</li>
                      <li>Left and right padding: 16dp</li>
                      <li>Top and bottom padding: 16dp</li>
                    </ul>
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_ux2tb7wsr8t5-0 start">
                      <li>16:9 ratio</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_pojwfg8ze8io-0 start">
                      <li>Padding: 8dp</li>
                      <li>Padding between actions: 4dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards31.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area</strong></p>
                    <ul class="lst-kix_5gj48qvvncyt-0 start">
                      <li>16:9 ratio</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_iwfkkor9twoy-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Subtext</strong></p>
                    <ul class="lst-kix_w9izyze1k8bj-0 start">
                      <li>Text: 14sp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_s3jsuld3aqy-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards32.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area</strong></p>
                    <ul class="lst-kix_f7h6nlvyna4c-0 start">
                      <li>16:9 ratio</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_digc7593xoke-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Subtext</strong></p>
                    <ul class="lst-kix_5ekg8ne61bne-0 start">
                      <li>Text: 14sp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_zgn73qla5hwm-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                    <p><strong>Expanded supporting text</strong></p>
                    <ul class="lst-kix_2yb23ci78lly-0 start">
                      <li>Text: 14sp</li>
                      <li>Top padding: 16dp</li>
                      <li>Bottom padding: 24dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards33.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_vy6murv76g3l-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Subtitle</strong></p>
                    <ul class="lst-kix_vy6murv76g3l-0">
                      <li>Top padding: 12dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><br><strong>Subtext</strong></p>
                    <ul class="lst-kix_v0qc72kabkpf-0 start">
                      <li>Text: 14sp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Supporting text</strong></p>
                    <ul class="lst-kix_lpp8dtqzrq8y-0 start">
                      <li>Text: 14sp</li>
                      <li>Top padding: 16dp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_p07r11cbp05k-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards34.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_yyji7tfee50d-0 start">
                      <li>16:9 ratio</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_zesvu8percgl-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards35.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_22ppqiw6xto1-0 start">
                      <li>1:1 ratio</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_s2g3ninu0noi-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><br><strong>Subtext</strong></p>
                    <ul class="lst-kix_g561ngvd2bd0-0 start">
                      <li>Text: 14sp</li>
                      <li>Bottom padding: 16dp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_g0sq6cfczbtd-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards36.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_sdzvksnsu6ns-0 start">
                      <li>1:1 ratio</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_kejbf1otgpmx-0 start">
                      <li>Text: 24sp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_744gqmcplfl7-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards37.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_vcr2ibuabnm-0 start">
                      <li>80dp</li>
                      <li>1x</li>
                      <li>Top padding: 16dp</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_bjnvkx3zoakf-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Right and left padding: 16dp<br></li>
                    </ul>
                    <p><strong>Subtext</strong></p>
                    <ul class="lst-kix_lsaj3qjmnxpd-0 start">
                      <li>Text: 14sp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_92r5yl7olvre-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards24.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_3zw6lupeefzt-0 start">
                      <li>1.5x (Increment size based on 80dp media area)</li>
                      <li>Top padding: 16dp</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_ydrgs2c8vl1m-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Right and left padding: 16dp<br></li>
                    </ul>
                    <p><strong>Subtext</strong></p>
                    <ul class="lst-kix_nxc0id1muc26-0 start">
                      <li>Text: 14sp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_kbbyqhpd92r2-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards25.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_13slb6m4ozvf-0 start">
                      <li>2x (Increment size based on 80dp media area)</li>
                      <li>Top padding: 16dp</li>
                    </ul>
                    <p><strong>Primary text</strong></p>
                    <ul class="lst-kix_hlg7v54wtjda-0 start">
                      <li>Text: 24sp</li>
                      <li>Top padding: 24dp</li>
                      <li>Right and left padding: 16dp<br></li>
                    </ul>
                    <p><strong>Subtext</strong></p>
                    <ul class="lst-kix_14h6u4ajubs-0 start">
                      <li>Text: 14sp</li>
                      <li>Right and left padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_p6r1xtlqczwh-0 start">
                      <li>Padding: 8dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards26.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p><strong>Media area </strong></p>
                    <ul class="lst-kix_qwtmfbdplfju-0 start">
                      <li>3x (Increment size based on 80dp media area)</li>
                      <li>Padding: 16dp</li>
                    </ul>
                    <p><strong>Actions</strong></p>
                    <ul class="lst-kix_qq24fnjppxii-0 start">
                      <li>All around padding: 8dp + 16dp</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards41.png"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Dividers in cards</h1>
              <p>Dividers may be used to separate content areas in cards that require distinct visual separation. Dividers may also indicate seams in places where material may expand.</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Content areas that can be expanded should use full-width dividers. Dividers can indicate seams in material where the material will expand when content is expanded.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards33.png"/>
                      </div>
                      <figcaption>
                        <p>This example uses a full-bleed divider. Similar to expansion of lists, this card uses a full-width divider to denote expansion.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Content areas that need more distinct visual separation should use dividers.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action6.png"/>
                      </div>
                      <figcaption>
                        <p>This example uses a full-bleed divider as a way to visually separate the slider content and list from the action below. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <p>Use inset dividers to separate related content. </p></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/components/cards/components_cards_action4.png"/>
                      </div>
                      <figcaption>
                        <p>This example uses an inset divider to separate related the restaurant information from the booking section. </p>
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