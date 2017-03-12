<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>导航用于引导用户浏览你的应用的不同部分。</h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>根据你希望用户看到的内容和功能来整理你的应用的结构。通过在选项卡或侧边导航中显示重要的目标，来把用户的注意力集中到这些目标上，并把无关紧要的内容放在不显眼的位置。</p>
              </div>
              <div class="module">
                <h3><strong>导航模式</strong></h3>
                <p>嵌入式导航<br>
                  选项卡<br>
                  底部导航栏<br>
                  抽屉式导航<br>
                  内嵌导航栏<br>
                  扩展抽屉式导航<br>
                  层叠抽屉式导航（桌面端）<br>
                  手势</p>
                <h3><strong>组合导航模式</strong></h3>
                <p>情境内导航<br>
                  侧边导航和选项卡<br>
                  内嵌抽屉式导航和选项卡（桌面端）</p>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation.html#navigation-usage" data-qp-ui-data-id="qp:1">用法</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation.html#navigation-defining-your-navigation" data-qp-ui-data-id="qp:2">定义你的导航</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation.html#navigation-up-back-buttons" data-qp-ui-data-id="qp:3">向上和返回按钮</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation.html#navigation-navigating-between-apps-android" data-qp-ui-data-id="qp:4">应用间导航（Android）</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation.html#navigation-hierarchy" data-qp-ui-data-id="qp:5">层次结构</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation.html#navigation-patterns" data-qp-ui-data-id="qp:6">模式</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="navigation.html#navigation-combined-patterns" data-qp-ui-data-id="qp:7">组合模式</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="navigation-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>应用的导航应该是直观且可预测的。新老用户都应该能轻松的访问应用的各个部分。当用户从一个视图进入下一个视图时，他们会看到包含图像、操作和内容的场景。这些场景组合在一起来讲述它们所包含的内容，强调正确的操作，来引导用户逐步深入。</p>
              <p>更多关于在场景之间转换的信息，请参考<a href="navigational-transitions.html">导航转换</a>。</p>
              <div class="modulettes">
                <a class="modulette container android" href="https://www.google.com/url?q=https://developer.android.com/training/implementing-navigation/index.html&amp;sa=D&amp;ust=1481817996621000&amp;usg=AFQjCNG9BAni_a8z2Rat7w2AEI3n93mnJg" target="_blank">
                  <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/android.svg'); ?>">
                  <div class="info">
                    <div class="title">高效导航的实践</div>
                    <span class="subtitle"></span>
                  </div>
                  </img>
                </a>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h2>沟通关系和情境</h2>
                    <p>根据逻辑和相关度来对内容分组，清晰的展示出条目之间的关系。</p>
                  </div>
                  <div class="module">
                    <h2>启发式操作</h2>
                    <p>使用鼓励用户进行特定的操作、或让用户自由探索的方式，引导用户从一个场景切换到下一个场景。</p>
                  </div>
                  <div class="module">
                    <h2>注意力焦点</h2>
                    <p>调整应用的导航，以突出重要内容和功能。</p>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_structure1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>此图通过把邮件分组为：推广、社交、财务，来显示邮件条目之间的关系。</p>
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
                        <p>当用户的需求很简单时，使用简单的设计和轻量的结构。</p>
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
            定义你的导航
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
              <p>导航对内容进行了整理，以便能在应用中更容易找到用户所需的内容。导航可以包括用户频繁访问的页面，包括设置、或鼓励进行特定操作。</p>
              <p>为了确定最适合你的应用的导航类型，请先确定你的用户使用应用的典型路径，以及你希望用户执行的操作。</p>
              <p>例如，你的应用是一个餐厅指南应用，你的用户可能需要预定、提交菜单或撰写评论。通过确定大多数用户使用应用的目标，你将能更好地定义满足其优先级的导航结构。</p>
              <div class="col-list">
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>列出清单</h2>
                    <p>确定应用的用户及其可能的角色，例如消费者、商家或记者。确定用户的最常用的操作。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/inventory.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>确定你的核心用户和它们可能要执行的用例。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>确定优先级</h2>
                    <p>将用户的操作按优先级分为高、中、低三个级别。在 UI 中突出高优先级的操作和用户常用的操作。</p>
                    <p>随时根据用户需求的变化来调整优先级。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/prioritize.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>当为餐厅应用设计导航时，高优先级的任务可能包括查看餐厅细节和发现新的餐厅。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>顺序</h2>
                    <p>确定用户在应用中使用功能的不同路径，并根据这些路径来设计导航：</p>
                    <ul class="lst-kix_lkdkprp2x96w-0 start">
                      <li>在导航中突出常用的功能</li>
                      <li>对相关的功能进行分组，并使用这些分组来建立导航结构</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/sequence.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>无论消费者想要找到新餐厅还是查看最喜欢的餐馆，两种路径都会引导用户查看餐厅详情。通过搜索或收藏夹之类的功能使用户更快速地访问常用路径。</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module"><h2>解构</h2>
                    <p>将复杂、宽泛和模糊的用例分解为更小的功能，这些小功能可以是很常用的、易于理解的或更符合用户目标的。</p>
                    <p>例如，把搜索分解为更小的功能，通过名称、位置和流行度来区分搜索，将这些小功能作为导航的一部分，可能会更符合用户的需求。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/deconstruct.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>“查找餐厅” 是一个较广泛的功能，实际上可以分解为多个较小的功能，例如：浏览附近、按名称搜索、浏览热门餐厅。这些小功能可能更方便用户来进行搜索，应该被整合进导航中。</p>
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
            向上和返回按钮
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>应用栏通过<strong>向上</strong>和<strong>返回</strong>按钮提供基本的导航。</p>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module"><h2>向上按钮</h2>
                    <p><strong>向上</strong>按钮把用户带回到之前的视图。它会把用户带到应用层次结构的上一级，直到到达应用的首屏。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_upandback1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>向上按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_upandback2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>相册中的向上按钮</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>返回按钮</h2>
                    <p><strong>返回</strong>按钮按照最近浏览过的屏幕历史，按时间倒序导航。</p>
                    <p>向上按钮可确保用户留在应用内，而返回按钮会按最近浏览的屏幕导航，可能会让用户离开该应用。</p>
                    <p>返回按钮还可以：</p>
                    <ul class="lst-kix_v716ldyselu2-0 start">
                      <li>清除浮动窗口（例如对话框或弹出窗口）</li>
                      <li>清除上下文操作栏，并从选中的项目中取消高亮</li>
                      <li>隐藏屏幕键盘（IME）</li>
                    </ul>
                    <div class="modulettes">
                      <a class="modulette container android" href="https://www.google.com/url?q=https://developer.android.com/guide/components/tasks-and-back-stack.html&amp;sa=D&amp;ust=1481817996847000&amp;usg=AFQjCNFn8EsNCS11DfShnDzTgnwhCU_mZw" target="_blank">
                        <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/android.svg'); ?>">
                        <div class="info">
                          <div class="title">任务和返回栈</div>
                          <span class="subtitle">用户执行过的活动按照每个活动打开的顺序排列在堆栈中</span>
                        </div>
                        </img>
                      </a>
                    </div>
                    <p>通过把用户访问的导航路径插入到应用的最上层屏幕，使导航更具有可预测性。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_upandback3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>返回键</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_upandback4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>相册中的返回键</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <h1>屏幕内切换视图</h1>
              <p>这些类型的屏幕切换不会影响导航历史记录：</p>
              <ul class="lst-kix_5m0uqigpaul6-0 start">
                <li>使用选项卡、滑动、下拉菜单切换视图</li>
                <li>过滤或排序列表</li>
                <li>改变显示特性（如缩放）</li>
              </ul>
              <p><strong>例外</strong>：导航历史记录是通过相关详细视图（不在同一个列表内）的链接创建的，例如浏览 Play Store 中同一位艺术家的专辑。</p>
            </div>
          </div>
        </div>

        <div id="navigation-navigating-between-apps-android" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            应用间导航（Android）
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>直接从一个应用导航到另一个应用，为常见操作创建一致的体验。例如，某个应用可能激活 “相机” 应用来拍摄照片。</p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module"><h1>Activity、任务、Intent</h1>
                    <ul class="lst-kix_p3jme84ft40n-0 start">
                      <li>在 Android 中，<strong>Activity</strong> 包括应用的界面和可用的相关操作。你的应用是一个 Activity 的集合，由你创建的 Activity 和其他应用重用的 Activity 构成。</li>
                      <li><strong>任务</strong>是用户为达成某个目标而执行的 Activity 序列。</li>
                      <li><strong>Intent</strong> 是一种机制，用于发出信号以表明需要另一个应用的辅助才能执行某个操作，例如 “分享”。应用的 Activity 可指示其可响应哪些 Intent。</li>
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
                        <p>从主屏幕启动应用即开始了一个新的<strong>任务</strong>。此任务经过扩展，以包含在相册中导航并浏览照片详情后的 <strong>Activity</strong>。如果用户触发了分享操作，会显示一个底部卡片，其中包含了来自不同应用的分享 Activity（所有之前已注册并用于处理 “分享” 的 <strong>Intent</strong>）。</p>
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
            层次结构
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>导航通过将内容放入层次结构中来组织内容。处于层次结构顶层的场景是优先级最高且最易访问的，并将用户连接到层次结构中较低的场景。</p>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_home.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>主界面</h2>
                        <p><strong>主界面</strong>是应用的入口。它介绍了应用和它的导航。</p>
                        <p>主界面可以改变其显示的内容。<strong>有状态主界面</strong>包含了用户之前与应用交互的记录。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_parent-child.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>父级和子级</h2>
                        <p>较高级别的导航层称为<strong>父级</strong>，其下面的层级（或多个层级）称为<strong>子级</strong>。</p>
                        <p>例如，主界面是应用中所有其他界面的父级。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_navigation.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>导航</h2>
                        <p>当你导航到应用中更深的层级时，意味着你从应用较高的层级到了较低的层级。</p>
                        <p>从父级进入子级是<strong>下降导航</strong>。从子级进入父级是<strong>上升导航</strong>。</p>
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
                        <h2>同级</h2>
                        <p>有相同父级的场景称为<strong>同级</strong>。有多个相同优先级用例的应用，通常包含多个同级场景。<br></p>
                        <p><strong>横向导航</strong>是指在同级之间移动。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_collections.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>集合</h2>
                        <p><strong>集合</strong>包含属于同个父级的多个项目。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_hierarchy_links.png'); ?>"/>
                      </div>
                      <figcaption>
                        <h2>链接</h2>
                        <p>链接可以让用户在两个场景之间快速移动，即使它们在导航结构中不相邻。</p>
                        <p><strong>交链</strong>是应用内部的链接，可以链接到应用内的任何地方。</p>
                        <p><strong>外链</strong>是应用外部资源链接到应用内的链接，包括通知和桌面小部件。它们直接把用户带到应用内较深的场景。</p>
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
            模式
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p>导航应该最好包含大多数用户的需求。复杂和层次结构较深的应用（需要在多个视图之间切换），与只有一个主视图的应用有不同的导航要求。</p>
              <p>以下导航模式用于：</p>
              <ul class="lst-kix_9bhmorkxvuvo-0 start">
                <li>促进交互和响应式布局</li>
                <li>固定导航和操作</li>
                <li>突出重要的导航，减弱不常用的</li>
                <li>使用浮动操作按钮来突显主要操作</li>
              </ul>
              <p></p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>嵌入式导航</h2>
                    <p>只有单个导航的应用，可以把导航嵌入到应用内容中，但是这样做会减少内容的展示空间。</p>
                    <p>推荐用于：</p>
                    <ul class="lst-kix_4ye16hy0lkcl-0 start">
                      <li>有一个非常重要的视图，少数几个罕见视图的应用</li>
                      <li>常用操作都在主视图中执行的应用</li>
                      <li>不常用的应用</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_embedded1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>这是一个移动端的嵌入式导航的示例，常用操作都在非常重要的主视图中执行。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>选项卡</h2>
                    <p><a href="../components/tabs.html">选项卡</a>可以使用户在少数几个同等重要的视图间快速切换。</p>
                    <p>适用于这些层次结构：</p>
                    <ul class="lst-kix_v59hukqqlhav-0 start">
                      <li>具有嵌入式子视图的父级</li>
                      <li>一组同级视图</li>
                    </ul>
                    <p>推荐用途：</p>
                    <ul class="lst-kix_fbhn9imnghkk-0 start">
                      <li>需要在视图间频繁切换</li>
                      <li>应用只有少数几个顶级视图</li>
                      <li>提升用户切换视图的意识</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_tabs1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>移动端具有三个选项的选项卡示例</p>
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
                        <p>平板端的居中对齐的选项卡</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_tabs3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>桌面端，具有标题和扩展头部的左对齐的选项卡示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2>底部导航栏</h2>
                    <p><a href="../components/bottom-navigation.html">底部导航栏</a>可以使用户在少数几个顶级视图间快速切换。</p>
                    <p>适用于这些层次结构：</p>
                    <ul class="lst-kix_v59hukqqlhav-0">
                      <li>具有嵌入式子视图的父级</li>
                      <li>一组同级视图</li>
                    </ul>
                    <p>推荐用于：</p>
                    <ul class="lst-kix_fbhn9imnghkk-0">
                      <li>需要在视图间频繁切换</li>
                      <li>应用只有少数几个顶级视图</li>
                      <li>提升用户切换视图的意识</li>
                      <li>手机设备上，底部导航栏位于更符合人体工程学的位置</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_bottomnav1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>手机上持续显示标签的底部导航栏示例</p>
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
                        <p>平板上持续显示标签的底部导航栏示例</p>
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
                        <p>手机上显示动态标签的底部导航栏示例</p>
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
                        <p>平板上显示动态标签的底部导航栏示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module"><h2>抽屉式导航</h2>
                    <p>当没有足够的空间来使用选项卡时，侧边导航是一个很好的替代方案。侧边导航可以一次性显示很多个导航目标。抽屉默认保持隐藏，直到用户调用后才会显示。</p>
                    <p>有单个 “主界面” 的应用应该把最常访问的目标放在侧边导航的顶部。</p>
                    <p>侧边导航可以选择是否使用<a href="navigation-drawer.html">抽屉式导航</a>。</p>
                    <p>适用于这些层次结构：</p>
                    <ul class="lst-kix_ngfguo6izgoc-0 start">
                      <li>横向导航</li>
                      <li>父级及其同级或其他同等级的目标</li>
                    </ul>
                    <p>推荐用于：</p>
                    <ul class="lst-kix_90mwt7psj956-0 start">
                      <li>有很多个顶级视图的应用</li>
                      <li>需要在多个不相关的视图之间快速切换</li>
                      <li>更深的导航结构</li>
                      <li>降低不常用目标的视觉优先级</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_navdrawer1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>手机上关闭的侧边导航示例</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_navdrawer3.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>平板上打开的侧边导航示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_navdrawer2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>手机上打开的侧边导航示例</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_navdrawer4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>桌面端打开且固定的左侧导航</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h2>嵌套导航</h2>
                    <p>当有多级导航时，同级视图应该被嵌套其在父级下。</p>
                    <p>在桌面端，次级导航可以嵌套在抽屉式导航内。</p>
                    <p>适用于这些层次结构：</p>
                    <ul class="lst-kix_8bvbvopfaja2-0 start">
                      <li>横向导航</li>
                      <li>父级及其同级或其他同等级的目标</li>
                    </ul>
                    <p>推荐用于：</p>
                    <ul class="lst-kix_zgqveo1ru94k-0 start">
                      <li>有很多个视图的深层次的导航结构</li>
                      <li>需要在多个不相关的视图之间快速切换</li>
                    </ul>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_nested1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>桌面端展开的左侧导航示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h2>可展开的抽屉式导航</h2>
                    <p>如果你的应用的导航层次很深，可以在抽屉式导航中扩展该层次结构。选择一个层次后，该层次下方的导航就会展开。选择折叠部分，可以展开其下一级的层次，并关闭所有其他展开的层次。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_expanding1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>桌面端展开的左侧导航示例</p>
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
                    <h2>级联抽屉式导航（仅限桌面端）</h2>
                    <p>如果你的应用的导航层次较深，则可以使用级联菜单来水平扩展抽屉式导航的内容。每个视图集合都会显示其各自的面板，且子项目被选中后面板就会关闭。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterns_cascading1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>桌面端的级联左侧导航示例</p>
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
                    <h2>手势</h2>
                    <p>手势导航允许用户使用滑动手势在同级或同等优先级的视图之间导航。支持的手势包括：触摸和水平拖拽（左/右）屏幕，垂直拖拽屏幕（上/下），或缩放。</p>
                    <p>推荐用于：</p>
                    <ul class="lst-kix_72r0fesv1xsx-0 start">
                      <li>自然关系排序，例如一个表示连续日期的日历视图</li>
                      <li>只有少数几个同级的视图</li>
                      <li>有相似内容类型的视图</li>
                    </ul>
                    <p>更多关于场景之间转换的信息，请参考<a href="navigational-transitions.html">导航转换</a>。</p>
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
                        <p>在 Inbox 中，你可以在一条信息上向下拉动来回到父级视图。</p>
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
            组合模式
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
                    <h1>情境内导航</h1>
                    <p>情境内导航（和选项卡或抽屉式导航一起使用）允许用户灵活的在相关数据集之间切换。</p>
                    <p>情境内导航被整合进了应用的内容，且通常不是线性导航的。当通过情境内导航导航到一个新场景时，将显示该视图的导航控件。</p>
                    <p>适用于这些层次结构：</p>
                    <ul class="lst-kix_ljqhq92pvh6u-0 start">
                      <li>含同级的父级</li>
                    </ul>
                    <p>推荐用于：</p>
                    <ul class="lst-kix_4wc9g77p30zo-0 start">
                      <li>显示一大组子场景</li>
                      <li>将注意力集中到一组特定的任务上</li>
                      <li>有一个非常重要的视图和少数几个罕见视图的应用</li>
                    </ul>
                    <p>示例：</p>
                    <ul class="lst-kix_qszrwkirn4jp-0 start">
                      <li>把歌曲链接到艺术家</li>
                      <li>在最近访问的项目和完整的历史记录之间切换</li>
                      <li>把用户的文章关联到他们的个人信息页面</li>
                    </ul>
                    <p>向上箭头用于返回到上级页面。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations1.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>手机上导航整合进内容的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations2.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>手机上的向上箭头示例</p>
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
                        <p>平板/桌面端的导航整合进内容的示例</p>
                      </figcaption>
                    </figure>
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations4.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>平板/桌面端的向上箭头示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>侧边导航和选项卡组合</h1>
                    <p>有两级导航的产品可以使用左侧抽屉式导航和选项卡。</p>
                    <h2><strong> </strong></h2>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations5.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>手机上的两级导航示例：抽屉式导航和选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations6.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>手机上打开的左侧导航示例</p>
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
                        <p>平板上使用两级导航的示例：抽屉式导航和选项卡</p>
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
                        <p>平板上打开的左侧导航显示在选项卡前面</p>
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
                        <p>桌面端使用两级导航的示例：抽屉式导航和选项卡</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="module-figure col-2">
                  <div class="module">
                    <h1>嵌套的抽屉式导航 + 选项卡（仅限桌面端）</h1>
                    <p>如果你的产品有三级导航，可以同时使用抽屉式导航、嵌套导航和选项卡。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/patterns/navigation/patterns_navigation_patterncombinations10.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>桌面端的嵌套左侧导航和选项卡</p>
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