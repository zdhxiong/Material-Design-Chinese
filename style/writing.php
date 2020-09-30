<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>无论用户拥有怎样的文化和语言，无论在何地，文本都应该能被用户理解。</h1>
          <div class="gas-intro-h1-bottom"></div>
          <div class="col-list">
            <section class="module-module-module col-3 h3-spacing">
              <div class="module">
                <p>清晰、准确、简洁的文本能增加界面的可用性，并建立信任感。</p>
                <p>除了这些指南外，请务必参考为特定的 UI 元素编写的指南，例如<a href="../patterns/errors.html">错误</a>、<a href="../components/dialogs.html">对话框</a>、<a href="../patterns/settings.html">设置</a>，以及<a href="../patterns/data-formats.html">数据格式</a>。</p>
              </div>
              <div class="module">
                <h3>指南</h3>
                <p>语气<br>
                  大小写<br>
                  标点符号<br>
                  按钮文本</p>
                <h3>样式</h3>
                <p>通常 Google 的指南会遵循美联社（AP）的样式指南。</p>
              </div>
              <div class="module">
                <div class="text-box">
                  <p>文本应当简洁、易懂、直截了当</p>
                </div>
                <p class="s-tag-caption do"><?= $translate['do']; ?></p>
              </div>
            </section>
          </div>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="writing.html#writing-language" data-qp-ui-data-id="qp:1">语言</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="writing.html#writing-tone" data-qp-ui-data-id="qp:2">语气</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="writing.html#writing-capitalization-punctuation" data-qp-ui-data-id="qp:3">大小写 &amp; 标点符号</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="writing.html#writing-global-writing" data-qp-ui-data-id="qp:4">国际化书写</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="writing-language" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            语言
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>称谓</h1>
                    <p>在 UI 中可以使用下列之一的方式称呼用户：</p>
                    <ul class="lst-kix_4h34kitihxzm-1 start">
                      <li><strong>第二人称， “你” 或 “你们” </strong>：在大多数情况下会使用这种谈话的风格，就像应用在直接和用户说话一样。</li>
                      <li><strong>第一人称， “我” 或 “我们” </strong>：在某些情况下，可能需要使用这种形式的称呼来强调用户对内容或操作的所有权。</li>
                    </ul>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>在不解锁你的屏幕的情况下快速打开相机<br>
                      <br>
                      你的空间</p>
                    </div>
                    <figcaption>
                      <p>使用第二人称 “你” 或 “你们” 来称呼用户</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>我同意遵守 Google 的服务条款<br>
                      <br>
                      我的账户</p>
                    </div>
                    <figcaption>
                      <p>使用第一人称 “我” 或 “我的” 来称呼用户</p>
                    </figcaption>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>避免混合使用 “我” / “我的” 和 “你” / “你的” 。在同一个内容中同时使用这两种称谓会让用户感到困惑。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>在我的账户中更改你的设置偏好</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>避免使用代词 “我们”</h1>
                    <p>把注意力放在用户以及用户如何使用应用上，而不是你或你的应用正在为用户做什么。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>从 Google+ 上获取热门信息</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>我们在 Google+ 上为你准备了这些热门信息</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>一个例外是，当某人对用户执行操作时，例如审核申请或回应建议。这里，使用 “我们” 是恰当的。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>我们会审核你的申请，并在几天内回复</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>你的申请将被审核，你将在几天内收到回复</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>保持简洁</h1>
                    <p>使用简短的文字来方便导航和发现。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>汇款给美国任何拥有电子邮箱的人。这是快速、简单和免费的。</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>通过电子邮件地址向美国的朋友和家人汇款（或收款）。这只需要两步，几乎没有延迟，不需要任何费用就能收款。</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>保持句子简短，尽可能少添加概念。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>阅读手机附带的操作说明</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>查阅手机附带的关于更多高级操作指南的文档</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>使用现在时</h1>
                    <p>使用现在时来描述产品行为。避免使用将来时来描述产品的日常行为。</p>
                    <p>当你需要使用过去时或将来时，请使用简单的动词形式。</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>简单直接地书写</h1>
                    <p>使用简单、直接的语言，便于用户理解。</p>
                    <p>常见的介绍性短语可以省略。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>保存更改？</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>你想要保存你的更改吗？</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>消息已发送</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>消息已经被发送了</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>注册以投票</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>在投票之前你必须先注册</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>为所有级别的读者书写</h1>
                    <p>选择对初级和高级英语读者来说都清楚易懂的常用词汇。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>开启位置记录</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>激活位置记录</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>避免使用行业特定的术语、或为 UI 的功能虚构的名称。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>正在准备视频…</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>正在缓冲…</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>你的手机不支持 “Ok Google”</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>只有双核处理器的设备才支持 “Ok Google”</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>把用户引导到 UI 元素的标签，而不是元素类型（例如菜单或按钮）。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>点击<strong>继续</strong></p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>点击继续按钮</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>在一个功能的所有部分中使用一致的词</h1>
                    <p>所有操作的描述都使用一致的动词。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>移除图片</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>删除图片</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>移除图片？</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                    <figcaption>
                      <p>对话框标题应简短。</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>从页面中移除图片？</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                    <figcaption>
                      <p>对话框标题过长。</p>
                    </figcaption>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>使用“1，2，3”，而不是“一，二，三”</h1>
                    <p>使用阿拉伯数字代替文字。</p>
                    <p>有一个例外是混合使用数字的时候，例如“输入两个 3s”.</p></div>
                  <div class="module">
                    <div class="text-box">
                      <p>你有 3 条消息</p></div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>你有三条消息</p></div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>以目标开始</h1>
                    <p>如果一个句子既描述了一个目标，又包含了实现这个目标所需的操作，则以目标作为句子的开始。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>从相册中移除图片，只需拖动照片到垃圾箱即可</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>拖动照片到垃圾箱，以把它从相册中移除</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>根据需要显示详细信息</h1>
                    <p>没有必要在第一次的互动中就描述每个细节。在用户探索信息并且需要这些信息时，才向用户显示有关功能的详细信息。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>移除下载的书籍？</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>你确定你要移除这本下载的书籍？移除后你只有在线状态才能访问它了。</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>不要说 “绝不” </h1>
                    <p>避免使用 “绝不” 和其它绝对性的词语。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>你的圈子名称不会被公开</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>我们绝不会公开你的圈子名称</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <h1>按钮和相关元素的文本</h1>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>按钮出现在<a href="../components/buttons.html#buttons-flat-raised-buttons">对话框</a>中，并且显示蓝色或带下划线的文本。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>按钮</p></td>
                        <td colspan="1" rowspan="1"><p>用法</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>[ 操作 ]</p></td>
                        <td colspan="1" rowspan="1"><p>参考上文中关于一致性动词的指南。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>后退</p></td>
                        <td colspan="1" rowspan="1"><p>允许多步处理</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>取消</p></td>
                        <td colspan="1" rowspan="1"><p>取消一个操作</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>忽略</p></td>
                        <td colspan="1" rowspan="1"><p>导致消息或对话框消失，且不会有任何后果</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>完成</p></td>
                        <td colspan="1" rowspan="1"><p>确认完成一个有多个步骤的任务</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>知道了</p></td>
                        <td colspan="1" rowspan="1"><p>导致消息或对话框消失，且不会有任何后果（类似于 “好” ）</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>了解更多</p></td>
                        <td colspan="1" rowspan="1"><p>把用户带到另外的内容</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>下一步</p></td>
                        <td colspan="1" rowspan="1"><p>使用户进行多步骤任务的下一步</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>不，谢谢</p></td>
                        <td colspan="1" rowspan="1"><p>允许用户拒绝</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>以后再说</p></td>
                        <td colspan="1" rowspan="1">
                          <p>让用户推迟一个操作或决定。仅当对话框中的操作对产品的功能至关重要时，但出于法律原因或其他紧急原因时，才能使用。</p>
                          <p><br>不要使用 “以后再说” 来机械地代替 “不，谢谢”。</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>好</p></td>
                        <td colspan="1" rowspan="1"><p>允许用户确认与手头任务相关的操作</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>跳过</p></td>
                        <td colspan="1" rowspan="1"><p>使用户能跳过不必要的步骤，继续执行任务</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="writing-tone" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            语气
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>友好、尊重、并专注于用户</h1>
                    <p>你的应用的文本应该是设计的补充：直观、高效、轻松、可靠。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>MyApp 没有响应<br>
                        </strong>你想要关闭它吗？</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>抱歉！<br>
                        </strong>MyAppActivity（在 MyApp 中）的活动没有响应</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>保持谦逊</h1>
                    <p>真实的描述功能，不要吹牛或过度承诺。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>你的所有资料都存储在一个地方</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>你一定会爱上这聪明绝顶的想法</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>更多餐厅点评</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>所有餐厅点评</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>吸引人的</h1>
                    <p>聚焦于每个功能的好处。在介绍功能时，省略功能的执行细节、注意事项和限制。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>为了节省电量，请将定位模式切换到省电模式</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>手动控制 GPS，以防止其他应用使用它</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>积极的</h1>
                    <p>以积极的态度来呈现信息：让用户安心。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>使用不多于 24 个字符来命名文件</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>你的文件名必须少于 25 个字符</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>再试一次</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>操作失败</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>必不可少的</h1>
                    <p>仅展示必要的细节，使用户可以专注于他们自己的任务。有时候最高效的 UI 根本不包含文字。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>正在登录... <br>
                        </strong>你的手机正在连接到 Google。这大概需要五分钟。</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>正在登录... <br>
                        </strong>你的手机需要与 Google 服务器通信才能登录账户。这大概需要五分钟。</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="writing-capitalization-punctuation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            大小写 &amp; 标点符号
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>使用句式的大小写</h1>
                    <p>标题、标签、菜单项应该使用句式大小写（只大写句子中的第一个字母）。</p>
                    <p>除了材料规范的需要之外（例如按钮文本），避免所有字母都用大写。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Search settings</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Search Settings</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <h1>省略句号和不必要的标点符号</h1>
              <p>为了帮助读者快速扫视文本，避免使用句号和其他不必要的标点符号。</p>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>句号</strong>
                    </p>
                    <p>避免在这些元素中使用句号：</p>
                    <ul class="lst-kix_twtxrzb60awk-0 start">
                      <li>标签</li>
                      <li>悬浮文本</li>
                      <li>项目列表</li>
                      <li>对话框正文</li>
                    </ul>
                    <p>句号应该用于：</p>
                    <ul class="lst-kix_qvj10667l85r-0 start">
                      <li>多个句子</li>
                      <li>超链接之前的句子</li>
                    </ul>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>和你的朋友分享照片。<a href="writing.html#capitalization-punctuation">了解更多</a></p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                    <figcaption>
                      <p>超链接之前的句子要使用句号。</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>和你的朋友分享照片。<a href="writing.html#capitalization-punctuation">了解更多</a>。</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                    <figcaption>
                      <p>句子后面跟着一个超链接时，应该把句号放在超链接之前，而不是之后。</p>
                    </figcaption>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>撤销批量更改？<br/></strong>如果撤销批量更改，你所做的更改会全部恢复到之前的状态</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                    <figcaption>
                      <p>忽略只有一句话的正文的结尾句号。</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>撤销批量更改？<br/></strong>如果撤销批量更改，你所做的更改会全部恢复到之前的状态。</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['dont']; ?></p>
                    <figcaption>
                      <p>不要在只有一句话的正文结尾添加句号。</p>
                    </figcaption>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>冒号</strong></p>
                    <p>省略标签后面的冒号。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>分享给</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>分享给：</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>使用缩写</h1>
                    <p>如果缩写能让句子更容易被理解，则使用缩写。但是，有时候不是这样，使用 “do not” 比 “don't” 更能表示强调。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>it’s, can’t, wouldn’t, you’re, you’ve, haven’t, don’t</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>it is, cannot, would not, it’ll, should’ve</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>避免使用感叹号</h1>
                    <p>避免使用感叹号，因为感叹号给人大喊大叫的感觉。但也有一些例外，包括问候或者贺词。</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>欢迎！</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>了解更多日历的新功能！</p>
                    </div>
                    <p class="s-tag-caption dont"><?= $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <h1>标点</h1>
              <p>使用标点符号来保证句意清晰和语法正确。</p>
              <div class="col-list">
                <section class="module-module col-1">
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>符号/字符</p></td>
                        <td colspan="1" rowspan="1"><p>HTML 实体字符</p></td>
                        <td colspan="1" rowspan="1"><p>Unicode</p></td>
                        <td colspan="1" rowspan="1"><p>用法</p></td>
                        <td colspan="1" rowspan="1"><p>实例</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>冒号</p></td>
                        <td colspan="1" rowspan="1"><p><strong>：</strong></p></td>
                        <td colspan="1" rowspan="1"><p>&amp;#58;</p></td>
                        <td colspan="1" rowspan="1"><p>\u003A</p></td>
                        <td colspan="1" rowspan="1">
                          <p>在标签上不要用冒号。<br/>在列表上面使用冒号。</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>两件事：</p>
                          <ul class="lst-kix_e89o5b2dsbaa-0 start">
                            <li>第一</li>
                            <li>第二</li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>逗号</p></td>
                        <td colspan="1" rowspan="1"><p><strong>,</strong></p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1">
                          <p>逗号放置在引号内。</p>
                          <p>在有 3 个或更多项目的列表中使用连续的逗号分隔。但使用了 &amp; 符号的除外</p>
                        </td>
                        <td colspan="1" rowspan="1"></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>双尖括号</p></td>
                        <td colspan="1" rowspan="1">
                          <p> &gt;&gt; </p>
                          <p>&lt;&lt;<strong> </strong></p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>&amp;laquo;</p>
                          <p>&amp;raquo;</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>\u00AB</p>
                          <p>\u00BB</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>忽略用于打开另一个页面、或进入下一个步骤的链接或按钮中的尖括号。</p></td>
                        <td colspan="1" rowspan="1"></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>长破折号</p><p></p></td>
                        <td colspan="1" rowspan="1"><p><strong>— </strong></p></td>
                        <td colspan="1" rowspan="1"><p>&amp;mdash;</p></td>
                        <td colspan="1" rowspan="1"><p>\u2014</p></td>
                        <td colspan="1" rowspan="1">
                          <p>使用短破折号，而不是长破折号</p>
                        </td>
                        <td colspan="1" rowspan="1"></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>短破折号</p></td>
                        <td colspan="1" rowspan="1"><p><strong>– </strong></p></td>
                        <td colspan="1" rowspan="1"><p>&amp;ndash;</p></td>
                        <td colspan="1" rowspan="1"><p>\u2013</p></td>
                        <td colspan="1" rowspan="1">
                          <p>使用短破折号而不是连字符来表示范围，且不要添加空格。</p>
                          <p>避免使用短破折号来分隔文字。如果非用不可 – 像这样 – 在短破折号前后加上空格。</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>3–5 kg</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>省略号 </p></td>
                        <td colspan="1" rowspan="1"><p><strong> … </strong></p></td>
                        <td colspan="1" rowspan="1"><p>&amp;hellip;</p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1">
                          <p>用省略号表示一项操作正在进行中，或者表示残缺或被截断的文本，省略号前不含空格。<br>
                            忽略用于打开一个对话框或者开始一些其他操作的菜单或按钮中的省略号。</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>下载中…</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>感叹号</p></td>
                        <td colspan="1" rowspan="1"><p><strong>!</strong></p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"><p>避免使用感叹号，因为它们会让人感觉是在吼叫</p></td>
                        <td colspan="1" rowspan="1"></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>连字符</p></td>
                        <td colspan="1" rowspan="1"><p><strong>- </strong></p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"><p>使用连字符表示负数，或创建复合词 </p></td>
                        <td colspan="1" rowspan="1">
                          <p>-5</p>
                          <p>5-英里路程</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>中线椭圆</p></td>
                        <td colspan="1" rowspan="1"><p><strong>• • •</strong></p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1">
                          <p><a href="../patterns/data-formats.html#data-formats-data-redaction-truncation">中线椭圆</a>用于表示数字截断或敏感数据。</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>SSN • • • 5678</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>括号</p></td>
                        <td colspan="1" rowspan="1"><p><strong>( )</strong></p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"><p>用括号表示首字母缩写或术语</p></td>
                        <td colspan="1" rowspan="1"><p>SSL (secure socket layer)</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>句号</p></td>
                        <td colspan="1" rowspan="1"><p><strong>.</strong></p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1">
                          <p>省略文本片段或单个句子中的句号，在两个或更多个句子的组合中使用句号。<br>
                            将句号放在引号内。</p>
                        </td>
                        <td colspan="1" rowspan="1"></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>撇号</p></td>
                        <td colspan="1" rowspan="1"><p>′</p></td>
                        <td colspan="1" rowspan="1">
                          <p>&amp;prime;</p>
                          <p>&amp;Prime;</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>\u2032</p>
                          <p>\u2033</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>仅在英寸、角分、分钟的缩写中使用撇号（′）。<br>
                            仅在英寸、角分、分钟的缩写中使用双撇号（″）。<br>
                            不要使用通用的引号 " 或 ' 或单独的声标 ` 或 ´ 来代替撇号。</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>3° 15′</p>
                          <p>3° 15′ 35″</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1">
                          <p>引号</p>
                          <p></p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>“ </p>
                          <p>” </p>
                          <p>‘ </p>
                          <p>’ </p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>&amp;ldquo;</p>
                          <p>&amp;rdquo; </p>
                          <p>&amp;lsquo;</p>
                          <p>&amp;rsquo; </p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>\u201C</p>
                          <p>\u201D</p>
                          <p>\u2018</p>
                          <p>\u2019</p>
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>使用引号，而不是英寸或英尺符号。<br>
                            右单引号也用于表示撇号。<br>
                            不要使用通用引号 " 或 ' ，或是单独的声标 ` 或 ´ （\u0022、\u0027、\u0060、\u00B4）。这些不是正确的引号、撇号或重音符号。</p>
                        </td>
                        <td colspan="1" rowspan="1"></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="writing-global-writing" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            国际化书写
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
                    <p>所有年龄、文化和教育水平的用户都可能使用英文版的产品。简单明了的英文能使任何人都能轻松了解你的产品。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="global-writing-figure-caption-0" src="<?= static_url('../static/media/style/writing/style_writing_globalwriting_japanese.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="global-writing-figure-caption-0">
                        <p>日文书写示例</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="global-writing-figure-caption-1" src="<?= static_url('../static/media/style/writing/style_writing_globalwriting_thai.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="global-writing-figure-caption-1">
                        <p>泰文书写示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3 h1-spacing">
                  <div class="module">
                    <h1>在 RTL 语言中，谨慎使用 “左” 和 “右” 这类术语</h1>
                    <p>在本地化时，从右到左语言的界面可能需要<a href="../usability/bidirectionality.html#bidirectionality-ui-mirroring-overview">镜像化</a>。</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="global-writing-figure-caption-2" src="<?= static_url('../static/media/style/writing/style_writing_globalwriting_arabic.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="global-writing-figure-caption-2">
                        <p>在这个例子中，从右到左语言（RTL）的阿拉伯文界面，是根据英文版界面做了镜像处理的。</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media" style="max-width: 720px">
                        <div class="frame " style="padding-top: 177.777777778%">
                          <img alt="" aria-describedby="global-writing-figure-caption-3" src="<?= static_url('../static/media/style/writing/style_writing_globalwriting_english.png'); ?>" loading="lazy"/>
                        </div>
                      </div>
                      <figcaption id="global-writing-figure-caption-3">
                        <p>英文界面的从左到右（LTR）的示例</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>指定性别</h1>
                    <p>有时用户的性别是未知的。在英文中，这种情况下可以使用不分性别的文字 “they” 。但是很多语言需要以不同的方式来表示性别。</p>
                    <p>当在应用中涉及性别时：</p>
                    <ul class="lst-kix_ovfpjraz8txh-0 start">
                      <li>不要合并性别，例如使用 “他/她” 。</li>
                      <li>如果必须指明性别，例如引用某人的姓名时，可以使用 Components for Unicode (ICU) 的 API 或等效的软件库来提供准确的翻译说明。</li>
                    </ul>
                  </div>
                  <div class="module"></div>
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
  <div class="gas-last-div-inner-bottom"></div>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>
