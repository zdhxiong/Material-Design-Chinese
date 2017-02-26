<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Navigation guides users through different parts of your app.</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Organize your app's structure according to the content and tasks you want users to see. Focus attention on important destinations by displaying them in tabs or in the side navigation, and de-emphasize inessential content by displaying it in less prominent locations.</p>
              </div>
              <div class="module">
                <h3><strong>Navigation patterns</strong></h3>
                <p>Embedded navigation<br>
                  Tabs<br>
                  Bottom navigation bar<br>
                  Navigation drawer<br>
                  Nested navigation<br>
                  Expanding navigation drawer<br>
                  Cascading navigation drawer (desktop)<br>
                  Gestural</p>
                <h3><strong>Combination navigation patterns</strong></h3>
                <p>In-context navigation<br>
                  Side navigation and tabs<br>
                  Nested navigation drawer and tabs (desktop)</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation.png'); ?>"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="app-structure.html#navigation-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="app-structure.html#navigation-defining-your-navigation" data-qp-ui-data-id="qp:2">Defining your navigation</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="app-structure.html#navigation-up-back-buttons" data-qp-ui-data-id="qp:3">Up and Back buttons</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="app-structure.html#navigation-navigating-between-apps-android" data-qp-ui-data-id="qp:4">Navigating between apps (Android)</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="app-structure.html#navigation-hierarchy" data-qp-ui-data-id="qp:5">Hierarchy </a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="app-structure.html#navigation-patterns" data-qp-ui-data-id="qp:6">Patterns</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="app-structure.html#navigation-combined-patterns" data-qp-ui-data-id="qp:7">Combined patterns</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="navigation-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>Navigation through your app should be intuitive and predictable. Both new and returning users should be able to figure out how to move through your app with ease. When users move from one view to the next, they observe scenes containing imagery, actions, and content. These scenes work together to tell a story about the content they contain, leading users down paths that emphasize certain actions. </p>
              <p>For information on movements between states, see <a href="navigational-transitions.html">navigational transitions</a>.</p>
              <div class="modulettes">
                <a class="modulette container android" href="https://www.google.com/url?q=https://developer.android.com/training/implementing-navigation/index.html&amp;sa=D&amp;ust=1481817996621000&amp;usg=AFQjCNG9BAni_a8z2Rat7w2AEI3n93mnJg" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/android.svg'); ?>">
                  <div class="info">
                    <div class="title">Implementing Effective Navigation</div>
                    <span class="subtitle"></span>
                  </div>
                  </img>
                </a>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h2>Communicate relationships &amp; context</h2>
                    <p>Group content into logical and relatable chunks that show clear relationships between items.</p>
                  </div>
                  <div class="module">
                    <h2>Illuminate actions</h2>
                    <p>Guide users from one scene to the next using paths that encourage specific choices or freer exploration.</p>
                  </div>
                  <div class="module">
                    <h2>Focus attention </h2>
                    <p>Tailor your app’s navigation to promote important content and tasks. </p>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_structure1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>This image shows relationships between email items by grouping them into these clusters: Promos, Social, Finance.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/navigation/components-buttons-fab-transition_speeddial_02.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/navigation/components-buttons-fab-transition_speeddial_02.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_structure3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Use simple design and lightweight structure when user needs are simple.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigation-defining-your-navigation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Defining your navigation
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="figure col-1">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_definingyournavigation-alt.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
              </div>
              <p>Navigation organizes content so that it’s easier to find important destinations in your app. Navigation may include frequently visited places, contain settings, or encourage specific actions.</p>
              <p>To determine the type of navigation best suited to your app, identify your app’s users, typical paths they might take through your app, and actions you want them to perform.</p>
              <p>For instance, if your app is a restaurant guide, your users may want to make reservations, post menus, or write reviews. By identifying the goals most users will have, you’ll be able to better define a navigation structure that meets their priorities. </p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Take inventory</h2>
                    <p>Identify your app’s users and their potential roles, such as consumer, business owner, or journalist. Identify the most common tasks they may want to perform.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/inventory.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Identify your key users and the use cases they might want to perform.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Prioritize</h2>
                    <p>Assign priority levels of high, medium, or low to common user tasks. Give prominence in the UI to paths and destinations with high priority levels and frequent use. </p>
                    <p>Adjust priority levels as user needs change over time. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/prioritize.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>When designing navigation for a restaurant app, the highest priority tasks may include viewing restaurant details or finding new restaurants.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Sequence</h2>
                    <p>Identify the different paths that users take through your app and use those paths to define your navigation:</p>
                    <ul class="lst-kix_lkdkprp2x96w-0 start">
                      <li>List frequent destinations prominently in your navigation</li>
                      <li>Group related tasks together and use those groupings to structure your navigation</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/sequence.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Whether a consumer wants to find a new restaurant or view a favorite one, both paths lead viewing restaurant details. Make frequently used paths to these destinations (such as search or favorites) easily available.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"><h2>Deconstruct</h2>
                    <p>Divide complex, broad, or vague use cases into smaller activities. These smaller tasks may be frequently used, more easily understood, or better meet user goals. </p>
                    <p>For example, dividing search into smaller activities that differentiate searching by name, location, or popularity may reveal the need to surface those smaller activities as part of navigation.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/deconstruct.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>The broader activity of “Find a restaurant” may actually encapsulate smaller activities, such as: Browse nearby, Search by name, and Browse popular. These smaller tasks may be easier for users to perform searches and should be integrated within your navigation.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigation-up-back-buttons" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Up and Back buttons
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>App bars provide basic navigation through the <strong>Up</strong> and <strong>Back</strong> buttons.</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h2>The Up button</h2>
                    <p>The <strong>Up</strong> button returns users to the previous screen they viewed. It navigates upward in the app’s hierarchy until the app’s home screen is reached.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_upandback1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>The Up button</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_upandback2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>The Up button in a photo gallery </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>The Back button</h2>
                    <p>The <strong>Back</strong> button navigates in reverse chronological order through the history of recently viewed screens. </p>
                    <p>Whereas the Up button ensures the user remains in your app, the Back button may take the user back through recent screens outside of your app.</p>
                    <p>The Back button also: </p>
                    <ul class="lst-kix_v716ldyselu2-0 start">
                      <li>Dismisses floating windows (such as dialogs or popups)</li>
                      <li>Dismisses contextual action bars, and removes the highlight from the selected items</li>
                      <li>Hides the on-screen keyboard (IME)</li>
                    </ul>
                    <div class="modulettes">
                      <a class="modulette container android" href="https://www.google.com/url?q=https://developer.android.com/guide/components/tasks-and-back-stack.html&amp;sa=D&amp;ust=1481817996847000&amp;usg=AFQjCNFn8EsNCS11DfShnDzTgnwhCU_mZw" target="_blank">
                        <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/android.svg'); ?>">
                        <div class="info">
                          <div class="title">Tasks and Back Stack</div>
                          <span class="subtitle">Activities performed by users are arranged in a stack in the order in which each activity is opened</span>
                        </div>
                        </img>
                      </a>
                    </div>
                    <p>Make navigation more predictable by inserting the navigation path the user took to the app's topmost screen </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_upandback3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>The Back button </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_upandback4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>The Back button in a photo gallery</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>Changing views within a screen </h1>
              <p>Navigation history is not affected by these types of screen changes:</p>
              <ul class="lst-kix_5m0uqigpaul6-0 start">
                <li>Switching views using tabs, swiping, or a dropdown</li>
                <li>Filtering or sorting a list</li>
                <li>Changing display characteristics (such as zooming)</li>
              </ul>
              <p><strong>Exception:</strong> Navigation history is created by following links from related detail views (not unified by a list), such as browsing Play Store albums by the same artist.</p>
            </div>
          </div>
        </div>

        <div id="navigation-navigating-between-apps-android" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Navigating between apps (Android)
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Navigate directly from one app to another to create a consistent experience for common actions. For example, an app may activate the Camera app to capture a photo.</p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"><h1>Activities, tasks, and intents</h1>
                    <ul class="lst-kix_p3jme84ft40n-0 start">
                      <li>In Android, an <strong>activity </strong>includes an app’s screen and the associated actions available to the user. Your app is a collection of activities you create and reuse from other apps.</li>
                      <li>A <strong>task </strong>is the sequence of activities a user follows to accomplish a goal.</li>
                      <li>An <strong>intent </strong>allows an app to signal it would like another app's assistance in performing an action, such as “Share.” Apps can indicate which intents to respond to through activities.</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_betweenapps1.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_betweenapps1.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>Launching an app from the Home screen begins a new <strong>task</strong>. This task is extended to include <strong>activities</strong> of navigating through albums and viewing photo details. If the user triggers the Share action, a bottom sheet is revealed with available sharing activities from different apps (all of which have been registered to handle the Share <strong>intent</strong>).</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigation-hierarchy" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:5">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:5">
            Hierarchy
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Navigation organizes content by placing it within a hierarchy. Scenes at the top of the hierarchy are the most prominent and accessible, connecting users to scenes lower in the hierarchy. </p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_home.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>Home</h2>
                        <p>The <strong>home </strong>scene is the entrance to the app. It introduces the app and its navigation.</p>
                        <p>The home scene may vary the content it displays. A <strong>stateful home</strong> contains indications of a user’s previous interaction with the app.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_parent-child.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>Parent and child </h2>
                        <p>A higher level of navigational hierarchy is called a <strong>parent</strong>, and the level (or levels) below are referred to as <strong>children</strong>. </p>
                        <p>For example, the home screen is the parent to all other screens in an app.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_navigation.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>Navigation </h2>
                        <p>When you navigate more deeply into an app, you descend from a higher level of hierarchy to a lower one.</p>
                        <p>Moving from a parent scene to a child scene is <strong>descending navigation</strong>. Moving from child to parent is <strong>ascending navigation</strong>.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_siblings.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>Siblings</h2>
                        <p>Scenes that have the same parent are called <strong>siblings</strong>. Apps that have multiple use cases, all of equal priority, usually contain many sibling scenes.<br></p>
                        <p><strong>Lateral navigation</strong> is movement between siblings.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_collections.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>Collections</h2>
                        <p><strong>Collections</strong> include multiple items that share the same parent.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_links.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>Links</h2>
                        <p>Links allow users to move quickly between scenes that aren’t navigationally adjacent.</p>
                        <p><strong>Crosslinks</strong> are links that take users anywhere within your app. </p>
                        <p><strong>External links</strong> are links from sources outside your app, including notifications and home screen widgets. They take users directly to scenes deep within your app.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigation-patterns" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:6">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:6">
            Patterns
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>Navigation should best accommodate the needs of the majority of your app’s users. Apps with complex and deep hierarchies (that require switching between multiple views) have different navigation requirements than apps with a single primary view.</p>
              <p>The following navigation patterns are designed to:</p>
              <ul class="lst-kix_9bhmorkxvuvo-0 start">
                <li>Promote engaging and responsive layouts</li>
                <li>Anchor navigation and actions</li>
                <li>Highlight important destinations and de-emphasize infrequent ones</li>
                <li>Promote a primary action with the floating action button</li>
              </ul>
              <p></p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>Embedded navigation</h2>
                    <p>Apps with simple navigation may embed navigation inside app content, but doing so reduces the available space to display that content.</p>
                    <p>Recommended for:</p>
                    <ul class="lst-kix_4ye16hy0lkcl-0 start">
                      <li>Apps with a strong primary view, and few alternate views</li>
                      <li>Apps that perform common tasks in the main view</li>
                      <li>Infrequently used apps</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_embedded1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>This is a mobile example of an app with embedded navigation. Common tasks are performed in a strong primary view. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>Tabs</h2>
                    <p><a href="../components/tabs.html">Tabs</a> allow users to quickly move between a small number of equally important views.</p>
                    <p>Appropriate for these hierarchies:</p>
                    <ul class="lst-kix_v59hukqqlhav-0 start">
                      <li>Parents with embedded child views</li>
                      <li>A group of sibling views</li>
                    </ul>
                    <p>Recommended for:</p>
                    <ul class="lst-kix_fbhn9imnghkk-0 start">
                      <li>Frequent switching between views</li>
                      <li>Apps with few top-level views</li>
                      <li>Promoting awareness of alternate views</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_tabs1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Mobile example with three tabs</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_tabs2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Tablet example of centered tabs</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_tabs3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Desktop example of left-aligned fixed tabs with a title and extended header</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>Bottom navigation bar</h2>
                    <p>A <a href="../components/bottom-navigation.html">bottom navigation bar</a> allows users to quickly move between a small number of top-level views.</p>
                    <p>Appropriate for these hierarchies:</p>
                    <ul class="lst-kix_v59hukqqlhav-0">
                      <li>Parents with embedded child views</li>
                      <li>A group of parent views</li>
                    </ul>
                    <p>Recommended for:</p>
                    <ul class="lst-kix_fbhn9imnghkk-0">
                      <li>Frequent switching between views</li>
                      <li>Apps with few top-level views</li>
                      <li>Promoting awareness of alternate views</li>
                      <li>Mobile devices, as bottom navigation is located in a more ergonomic location</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_bottomnav1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Mobile example with fixed text labels present at all times</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_bottomnav2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Tablet example with text labels present at all times</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_bottomnav3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Mobile example with shifting text and labels</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_bottomnav4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Tablet example with shifting text and labels</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"><h2>Navigation drawer</h2>
                    <p>When there is insufficient space to support tabs, side navigation is a good alternative. Side navigation can display many navigation targets at once. A drawer remains hidden until invoked by the user. </p>
                    <p>Apps with a single “home” should list the most frequently accessed destinations at the top of side navigation.</p>
                    <p>Side navigation may appear either with or without a <a href="navigation-drawer.html">navigation drawer</a>. </p>
                    <p>Appropriate for these hierarchies:</p>
                    <ul class="lst-kix_ngfguo6izgoc-0 start">
                      <li>Lateral navigation</li>
                      <li>Parents with siblings or peers</li>
                    </ul>
                    <p>Recommended for:</p>
                    <ul class="lst-kix_90mwt7psj956-0 start">
                      <li>Apps with many top-level views</li>
                      <li>Enabling quick navigation between unrelated views</li>
                      <li>Deep navigation structures</li>
                      <li>Reducing visibility of infrequent destinations</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_navdrawer1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Mobile example of a closed left nav</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_navdrawer3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Tablet example of an open left nav</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_navdrawer2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Mobile example of an open left nav</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_navdrawer4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Desktop example of an open and pinned-in-place left nav </p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>Nested Navigation</h2>
                    <p>When you have multiple levels of navigation, sibling views should be nested underneath their parent. </p>
                    <p>On desktop, a secondary level of navigation may be nested within the navigation drawer.</p>
                    <p>Appropriate for these hierarchies:</p>
                    <ul class="lst-kix_8bvbvopfaja2-0 start">
                      <li>Lateral navigation</li>
                      <li>Parents with siblings or peers</li>
                    </ul>
                    <p>Recommended for:</p>
                    <ul class="lst-kix_zgqveo1ru94k-0 start">
                      <li>Deep navigation structures with many views</li>
                      <li>Enabling quick navigation between unrelated views</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_nested1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Desktop example of an expanding left nav</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Expanding navigation drawer</h2>
                    <p>If you have a deep navigational hierarchy, you may expand that hierarchy within the navigation drawer. Upon selecting a level, the level of navigation below is revealed. Selecting a collapsed section expands that level in-line, hiding all levels outside of it. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_expanding1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Desktop example of an expanding left nav</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_expanding2.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>Cascading navigation drawer (Desktop only)</h2>
                    <p>If you have a deep navigational hierarchy, you may use cascading menus to expand navigation drawer content horizontally. Each collection of views is presented in its own panel, and a level closes when a subsection is selected. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_cascading1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Desktop example of a cascading left nav</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_cascading2.png'); ?>"/>
                      </div>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>Gestural</h2>
                    <p>Gestural navigation allows users to use swipe gestures to navigate between sibling or peer views. Supported gestures include: touching and dragging the screen horizontally (left/right), vertically (up/down), or while zooming in or out. </p>
                    <p>Recommended for:</p>
                    <ul class="lst-kix_72r0fesv1xsx-0 start">
                      <li>Naturally ordered relationships, such as pages representing consecutive calendar days</li>
                      <li>Views with few siblings</li>
                      <li>Views with similar content types</li>
                    </ul>
                    <p>See <a href="navigational-transitions.html">Navigational transitions</a> for more information on hierarchical journeys between scenes.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="<?php static_url('../static/media/patterns/navigation/Expanding - Overscroll Top.webm'); ?>" type="video/webm">
                            <source src="<?php static_url('../static/media/patterns/navigation/Expanding - Overscroll Top.mp4'); ?>" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <p>When in Inbox, you are able to pull down on a message to return back to the parent view.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="navigation-combined-patterns" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:7">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:7">
            Combined patterns
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
                    <h1>In-context navigation </h1>
                    <p>In-context navigation (used with tabs or navigation drawers) allows nimble movement between related sets of data. </p>
                    <p>In-context navigation integrates into an app’s content and is typically less linear in nature. When moving through in-context navigation, navigating to a new scene will display navigational controls specific to that view. </p>
                    <p>Appropriate for these hierarchies:</p>
                    <ul class="lst-kix_ljqhq92pvh6u-0 start">
                      <li>Parents with siblings</li>
                    </ul>
                    <p>Recommended for:</p>
                    <ul class="lst-kix_4wc9g77p30zo-0 start">
                      <li>Showing large sets of child scenes</li>
                      <li>Focusing attention on a specific set of tasks</li>
                      <li>Apps with a strong primary view, and few alternates</li>
                    </ul>
                    <p>Example uses:</p>
                    <ul class="lst-kix_qszrwkirn4jp-0 start">
                      <li>Link a song to an artist</li>
                      <li>Move between recent items and a complete history</li>
                      <li>Connect a user’s post to their profile page</li>
                    </ul>
                    <p>The up arrow is used to return to the previous level.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Mobile example of navigation integrated into content </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Mobile example of an up arrow</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Tablet/desktop example of navigation integrated into content </p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Tablet/desktop example of an up arrow</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Side nav and tab combinations</h1>
                    <p>Products with two levels of navigation may pair a left navigation drawer with tabs.</p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Mobile example using two levels of navigation: a navigation drawer and tabs</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Mobile example of an open left nav</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations7.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Tablet example using two levels of navigation: a navigation drawer and tabs</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations8.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Tablet example of an open left nav in front of tabs</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"></div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations9.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Desktop example using two levels of navigation: a navigation drawer and tabs</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>Nested navigation drawer + tabs (Desktop only)</h1>
                    <p>If your product has three levels of navigation, pair a navigation drawer with nested navigation and tabs. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations10.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Desktop example of a nested left nav with tabs</p>
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