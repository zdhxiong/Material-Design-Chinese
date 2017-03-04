<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>无论用户拥有怎样的文化和语言，无论在何地，文本都应该能被用户理解。</h1>
          <div class="col-list">
            <section class="module-module-module col-3">
              <div class="module">
                <p>清晰、准确、简洁的文本能增加界面的可用性，并建立信任感。</p>
                <p>除了这些指南外，请务必参考为特定的 UI 元素编写的指南，例如<a href="../patterns/errors.html">错误</a>、<a href="../components/dialogs.html">对话框</a>、<a href="../patterns/settings.html">设置</a>，以及<a href="../patterns/data-formats.html">数据格式</a>。</p>
              </div>
              <div class="module">
                <h3><strong>指南</strong></h3>
                <p>语气<br>
                  大小写<br>
                  标点符号<br>
                  按钮文本</p>
                <h3><strong>样式</strong></h3>
                <p>通常 Google 的指南会遵循美联社（AP）的样式指南。</p>
              </div>
              <div class="module">
                <div class="text-box">
                  <p>文本应当简洁、易懂、直截了当</p>
                </div>
                <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
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
                <section class="module-module-module col-3">
                  <div class="module"><h1>称谓</h1>
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
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>避免使用代词 “我们”</h1>
                    <p>Focus on the user and what they can do with your app, rather than what you or your app is doing for the user.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Get started with these popular posts on Google+</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>To get you started, we’re showing you popular posts on Google+</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>One exception is when a person takes an action for a user, such as reviewing an appeal or responding to a suggestion. Here, the use of “we” is appropriate.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>We’ll review your appeal and respond within a few days</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Your appeal will be reviewed, and you will receive a response within a few days</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Be concise</h1>
                    <p>Write in small, scannable segments to facilitate navigation and discovery. </p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Send money to anyone in the US who has an email address. It’s fast, easy, and free.</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Send (and receive) money with friends and family in the US with an email address. It’s a two-step process with little-to-no latency and there aren’t any charges for the recipients of the money.</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>Keep your sentences and phrases short, with as few concepts as possible.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Read the instructions that came with your phone</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Consult the documentation that came with your phone for further instructions</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Write in the present</h1>
                    <p>Use the present tense to describe product behavior. Avoid using the future tense to describe the way a product always acts. </p>
                    <p>When you need to write in the past or future, use simple verb forms.</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Write simply and directly</h1>
                    <p>Use simple, direct language that is easy for users to understand.</p>
                    <p>Common introductory phrases may be omitted.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Save changes?</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Would you like to save your changes?</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>Message sent</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Message has been sent</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>Register to vote</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>You must register before you can vote</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Write for all levels of readers</h1>
                    <p>Pick common words that are clearly and easily understandable to both beginning and advanced English readers. </p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Turn on Location History</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Enable Location History</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>Avoid industry-specific terminology or names invented for UI features.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Preparing video…</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Buffering…</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>“Ok Google” isn’t supported on your phone</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>“Ok Google” is only supported on dual-core devices</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p>Refer users to the labels on UI elements, not the type of element (such as menu or button).</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Click <strong>Continue</strong></p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Click the Continue button</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Use consistent words in all parts of a feature</h1>
                    <p>Use verbs in a consistent manner across the description of an action.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Remove photo</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Delete photo</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption></figcaption>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>Remove photo?</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>The dialog title is short.</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Remove photo from page?</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>The dialog title is longer than necessary. </p>
                    </figcaption>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Begin with the objective</h1>
                    <p>If a sentence describes both an objective and the action needed to achieve that objective, start the sentence with the objective.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>To remove a photo from this album, drag it to the trash</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Drag a photo to the trash to remove it from this album</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Reveal detail as needed</h1>
                    <p>It's not necessary to describe every detail in the first interaction. Reveal increasing detail about features as the user explores them and needs the information. </p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Remove downloaded book?</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Are you sure you want to remove this downloaded book? You won’t be able to access it unless you’re online.</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Never say “never” </h1>
                    <p>Avoid “never” and other absolutes.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Your circle names aren’t shared</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>We’ll never share your circle names</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <h1>Text for buttons and related elements</h1>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <p>Buttons appear in <a href="../components/buttons.html#buttons-flat-raised-buttons">dialogs</a> and as blue or underlined text. </p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Button</p></td>
                        <td colspan="1" rowspan="1"><p>Usage</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>[ Action ]</p></td>
                        <td colspan="1" rowspan="1"><p>See above guideline about using consistent verbs.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Back</p></td>
                        <td colspan="1" rowspan="1"><p>Allows multi-step processes</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Cancel</p></td>
                        <td colspan="1" rowspan="1"><p>Cancels an action</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Dismiss</p></td>
                        <td colspan="1" rowspan="1"><p>Causes a message or dialog to disappear without any consequences</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Done</p></td>
                        <td colspan="1" rowspan="1"><p>Confirms the completion of a multi-step process</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Got it</p></td>
                        <td colspan="1" rowspan="1"><p>Causes a message or dialog to disappear without any consequences (similar to OK)</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Learn more</p></td>
                        <td colspan="1" rowspan="1"><p>Takes the user to additional content</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Next</p></td>
                        <td colspan="1" rowspan="1"><p>Takes the user to the next step of a multi-step process</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>No thanks</p></td>
                        <td colspan="1" rowspan="1"><p>Allows a user to decline</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Not now</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Let’s a user postpone an action or decision. Use only when the call to action in the dialog is essential to the functionality of the product, for legal reasons, or for another urgent reason. </p>
                          <p><br>Do not use “Not now” as a mechanism to avoid providing a “No thanks” option.</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>OK</p></td>
                        <td colspan="1" rowspan="1"><p>Allows the user to confirm an action that’s relevant to the task at hand</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Skip</p></td>
                        <td colspan="1" rowspan="1"><p>Gives the user a way to avoid an interruption and proceed with a task </p></td>
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
            Tone
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Be friendly, respectful, and focus on the user</h1>
                    <p>Your app’s text should complement its design: intuitive, efficient, casual, and trustworthy. </p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>MyApp isn’t responding <br>
                        </strong>Do you want to close it?</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Sorry! <br>
                        </strong>Activity in MyAppActivity (in the MyApp app) is not responding</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Be humble</h1>
                    <p>Reveal what a feature does, without bragging or over-promising.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>All your savings in one place</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Great deals at places you’ll love</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>More restaurant reviews</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>All restaurant reviews</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Be inviting</h1>
                    <p>Focus on the benefits of each feature. Omit implementation details, caveats, and restrictions when features are introduced.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>To save power, switch Location mode to Battery saving mode</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Manually control GPS to prevent other apps from using it</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Be positive</h1>
                    <p>Present information in a positive light: it’s reassuring. </p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Use 24 characters or fewer for file names</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Your file name must be less than 25 characters</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>Try again</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>The action failed</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Be essential</h1>
                    <p>Communicate essential details, so that users can focus on their own tasks. Sometimes the most effective UI contains no text at all.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Signing in... <br>
                        </strong>Your phone is contacting Google. This can take up to five minutes.</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p><strong>Signing in... <br>
                        </strong>Your phone needs to communicate with Google servers to sign in to your account. This may take up to five minutes.</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="writing-capitalization-punctuation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Capitalization &amp; punctuation
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Use sentence-style caps </h1>
                    <p>Use sentence-style caps for all titles, headings, labels, menu items – any place that considered for “Title-Style Caps.” </p>
                    <p>Avoid capitalizing all letters except where the material spec requires them, such as the Button style.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Search settings</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Search Settings</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>SEARCH SETTINGS</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Skip periods and other unnecessary punctuation </h1>
                    <p>To help readers scan text at a glance, avoid using periods and other unnecessary punctuation.</p>
                  </div>
                  <div class="module"></div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>Periods</strong>
                    </p>
                    <p>Avoid using periods in solitary sentences in these elements: </p>
                    <ul class="lst-kix_twtxrzb60awk-0 start">
                      <li>Labels</li>
                      <li>Hover text</li>
                      <li>Bulleted lists</li>
                      <li>Dialog body text</li>
                    </ul>
                    <p>Periods should be used for:</p>
                    <ul class="lst-kix_qvj10667l85r-0 start">
                      <li>Lists or dialogs with multiple sentences</li>
                      <li>Any sentence followed by a link</li>
                    </ul>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Share your photos with friends. <a href="writing.html#capitalization-punctuation">Learn more</a></p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>Place periods after sentences followed by a link.</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Share your photos with friends. <a href="writing.html#capitalization-punctuation">Learn more</a>.</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>Sentences followed by a link should place the period before the link, not after.</p>
                    </figcaption>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>To narrow your targeting from all countries and territories, add a location</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <p><strong>Undo bulk edit?</strong>
                    </p>
                    <div class="text-box">
                      <p>If you undo this bulk edit, everything you changed will go back to its previous state</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>Skip periods after solo sentences of body text.</p>
                    </figcaption>
                  </div>
                  <div class="module">
                    <p><strong>Undo bulk edit?</strong></p>
                    <div class="text-box">
                      <p>If you undo this bulk edit, everything you changed will go back to its previous state.</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                    <figcaption>
                      <p>Don’t place periods after body text if there is only a single sentence present.</p>
                    </figcaption>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <p><strong>Colons</strong></p>
                    <p>Skip colons after labels. </p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Share with</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Share with:</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Use contractions </h1>
                    <p>Don't make a sentence harder to understand just to follow this rule. For example, "do not" can give more emphasis than "don't" when needed.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>it’s, can’t, wouldn’t, you’re, you’ve, haven’t, don’t</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>it is, cannot, would not, it’ll, should’ve</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Avoid exclamation points </h1>
                    <p>Avoid exclamation points: they tend to come across as shouting. Some exceptions include greetings or congratulatory messages.</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Welcome!</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Learn about the new features of Calendar!</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module"></div>
                  <div class="module">
                    <div class="text-box">
                      <p>Good job!</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>“1, 2, 3” not “one, two, three” </h1>
                    <p>Use numerals in place of words for numbers. </p>
                    <p>One exception is when mixing uses of numbers, such as "Enter two 3s."</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>You have 3 messages</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>You have three messages</p>
                    </div>
                    <p class="s-tag-caption dont"><?php echo $translate['dont']; ?></p>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module"><h1>Punctuation</h1>
                    <p>Omit punctuation after phrases and labels to create a cleaner and more readable interface.</p>
                    <p>Use punctuation to add clarity or be grammatically correct.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1"><p>Glyph/character</p></td>
                        <td colspan="1" rowspan="1"><p>HTML entity</p></td>
                        <td colspan="1" rowspan="1"><p>Unicode</p></td>
                        <td colspan="1" rowspan="1"><p>Description</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Periods</p></td>
                        <td colspan="1" rowspan="1"><p><strong>.</strong></p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>Omit for fragments and single sentences in affordances like toasts, snackbars, and labels. Do punctuate full sentences in body text, for example, in the body of dialogs. </p>
                          <p>Place inside quotation marks (unless you’re telling the reader what to enter and it’s ambiguous whether to include the period). </p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Commas</p></td>
                        <td colspan="1" rowspan="1"><p><strong>,</strong></p></td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1">
                        </td>
                        <td colspan="1" rowspan="1">
                          <p>Place inside of quotation marks.</p>
                          <p>Use the serial comma, except when using an ampersand (&amp;) in a list of three or more items, such as “you, me &amp; my dog.”</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Exclamation points</p></td>
                        <td colspan="1" rowspan="1"><p><strong>!</strong></p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"><p>Avoid exclamation points as they may come across as shouting in most cases.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Colons</p></td>
                        <td colspan="1" rowspan="1"><p><strong>: </strong></p></td>
                        <td colspan="1" rowspan="1"><p>&amp;#58;</p></td>
                        <td colspan="1" rowspan="1"><p>\u003A</p></td>
                        <td colspan="1" rowspan="1"><p>Omit from labels, for example, in the labels for fields in a form.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Quotation marks</p><p></p></td>
                        <td colspan="1" rowspan="1">
                          <p>“ </p>
                          <p>” </p>
                          <p>‘ </p>
                          <p>’ </p></td>
                        <td colspan="1" rowspan="1">
                          <p>&amp;ldquo;</p>
                          <p>&amp;rdquo; </p>
                          <p>&amp;lsquo;</p>
                          <p>&amp;rsquo; </p></td>
                        <td colspan="1" rowspan="1">
                          <p>\u201C</p>
                          <p>\u201D</p>
                          <p>\u2018</p>
                          <p>\u2019</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Use real quotation marks, not the inch and foot symbols.</p>
                          <p>The right single quotation mark symbol is also used for apostrophes.</p>
                          <p>Never use the generic quotes ", ' or free-standing accents `, ´ (\u0022, \u0027, \u0060, \u00B4). These are never right for quotation marks, apostrophes, or primes.</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Primes</p></td>
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
                          <p>Use prime (′) only in abbreviations for feet, arcminutes, and minutes. For example: 3° 15′</p>
                          <p>Use double-prime (″) only in abbreviations for inches, arcminutes, and minutes. For example: 3° 15′ 35″</p>
                          <p>Don’t use generic quotes ", ' or free-standing accents `, ´ for primes.</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Ellipses </p></td>
                        <td colspan="1" rowspan="1"><p><strong> … </strong></p></td>
                        <td colspan="1" rowspan="1"><p>&amp;hellip;</p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1">
                          <p>Use to indicate an action in progress ("Downloading…") or incomplete or truncated text. No space before the ellipses.</p>
                          <p>Omit from menu items or buttons that open a dialog or start some other process.</p>
                          <p>Midline ellipses (three-bullet glyphs) are also used to represent numeric truncation and the redaction of sensitive data, such as credit cards.</p>
                          <p>OS keystroke: Option-;</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Double angle brackets</p></td>
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
                        <td colspan="1" rowspan="1"><p>Omit from links or buttons that open another page or move to the next or previous step in a process.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Em dash</p><p></p></td>
                        <td colspan="1" rowspan="1"><p><strong>— </strong></p></td>
                        <td colspan="1" rowspan="1"><p>&amp;mdash;</p></td>
                        <td colspan="1" rowspan="1"><p>\u2014</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Avoid using em dashes. Use en dashes instead. </p>
                          <p>OS keystroke: Shift+Option -</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>En dash </p></td>
                        <td colspan="1" rowspan="1"><p><strong>– </strong></p></td>
                        <td colspan="1" rowspan="1"><p>&amp;ndash;</p></td>
                        <td colspan="1" rowspan="1"><p>\u2013</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Use an en dash instead of a hyphen to indicate a range, without spaces (in English). </p>
                          <p>Avoid using dashes to separate text. If you must use dashes for this purpose – like this – use an en dash surrounded by spaces.</p>
                          <p>Example of use with a range:<br>
                            8:00 AM–12:30 PM<br>
                            3–5 kg</p>
                          <p>OS keystroke: Option+ -</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Hyphen</p></td>
                        <td colspan="1" rowspan="1"><p><strong>- </strong></p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1">
                          <p>Use hyphens to represent negative numbers.</p>
                          <p>For example:<br>
                            -5<br>
                            -$100</p>
                          <p>Use hyphens to avoid ambiguity in adjective-noun or noun-participle pairs. </p>
                          <p>For example:<br>
                            anti-inflammatory<br>
                            5-mile walk</p>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Parentheses</p></td>
                        <td colspan="1" rowspan="1"><p><strong>( )</strong></p></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1"></td>
                        <td colspan="1" rowspan="1">
                          <p>Use parentheses only to define acronyms or jargon.</p>
                          <p>For example:<br>
                            “Secure web connections are based on a technology called SSL (the secure sockets layer).”
                          </p>
                        </td>
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
            Global writing
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
                    <p>People of all ages, cultures, and education levels rely on the English versions of products. Simple, clear English makes it easy for anyone to understand your product.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/writing/style_writing_globalwriting_japanese.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Japanese writing</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/writing/style_writing_globalwriting_thai.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of Thai writing</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-figure-figure col-3">
                  <div class="module">
                    <h1>Be aware of using terms like “left” and “right” in RTL languages </h1>
                    <p>Interfaces for languages with right-to-left scripts may be <a href="../usability/bidirectionality.html#bidirectionality-ui-mirroring-overview">mirrored</a> when a product is localized. </p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/writing/style_writing_globalwriting_arabic.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>In this example of a right-to-left (RTL) interface in Arabic, the interface is mirrored relative to English.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="<?php static_url('../static/media/style/writing/style_writing_globalwriting_english.png'); ?>"/>
                      </div>
                      <figcaption>
                        <p>Example of a left-to-right (LTR) interface in English</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Specifying gender</h1>
                    <p>Sometimes the gender of the user isn’t known. In English, the gender-neutral word "they" may be used in this case. But many languages refer to gender in different ways.</p>
                    <p>When referring to gender in your app:</p>
                    <ul class="lst-kix_ovfpjraz8txh-0 start">
                      <li>Don't combine gender options, such as "his/her" or "she/he.”</li>
                      <li>If a specific gender is required, such as text referring to a person’s name, provide clear translation instructions and use the International Components for Unicode (ICU) APIs or equivalent libraries.</li>
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
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>