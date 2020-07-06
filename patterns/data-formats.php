<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>使用格式化的数据，来表示不同类型的数值和语言。</h1>
          <div class="col-list">
            <section class="module-module-module col-3 h3-spacing">
              <div class="module">
                <p><strong>日期和时间</strong>可以格式化，用于表示时间范围、时区、缩写等适合用户所处情境的格式。</p>
                <p><strong>数据修订和截断</strong>指南介绍了如何表示截断的数字，以及如何对敏感数据进行伪装。</p>
              </div>
              <div class="module">
                <h3>格式包括</h3>
                <p>时间<br>
                  月，日，年<br>
                  大致时间<br>
                  绝对时间<br>
                  时区<br>
                  缩写<br>
                  数字四舍五入</p>
              </div>
              <div class="module">
                <div class="text-box"><p>000 • • • 0000<br>
                  <br>
                  12:00 UTC</p>
                </div>
                <figcaption>
                  <p>数据截断和时间显示示例</p>
                </figcaption>
              </div>
            </section>
          </div>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>目录</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-formats.html#data-formats-date-time" data-qp-ui-data-id="qp:1">日期 &amp; 时间</a></li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-formats.html#data-formats-data-redaction-truncation" data-qp-ui-data-id="qp:2">数据修订和截断</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="data-formats-date-time" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            日期 &amp; 时间
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>日期和时间</h1>
                    <p>如何格式化日期和时间取决于以下几个因素：</p>
                    <ul class="lst-kix_qp22hhzc4byb-0 start">
                      <li>时间或日期是否是当前的</li>
                      <li>使用 12 小时制还是 24 小时制</li>
                      <li>你需要多精确的显示</li>
                    </ul>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>元素</p></td>
                        <td colspan="1" rowspan="1"><p>描述</p></td>
                        <td colspan="1" rowspan="1"><p>示例</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>时间</p></td>
                        <td colspan="1" rowspan="1">
                          <p>使用 AM 或 PM 显示当天的时间，不使用点号。如果使用 24 小时制，则显示不带 AM/PM 的时间。</p>
                          <p>很多非英语语言使用小写的 am 和 pm。</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>2:00 PM<br>14:00</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>月，日，年</p></td>
                        <td colspan="1" rowspan="1"><p>在当前的年份内，显示不带年份的日期。否则，显示日期和年份。</p></td>
                        <td colspan="1" rowspan="1"><p>1月14日<br>2012年1月14日</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>大致时间</p></td>
                        <td colspan="1" rowspan="1"><p>大致时间会四舍五入到最大和最近的日期或时间单位。</p></td>
                        <td colspan="1" rowspan="1"><p>5分钟内<br>3天前</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>绝对时间</p></td>
                        <td colspan="1" rowspan="1"><p>当不适合使用大致时间时，显示精确的日期或时间。</p></td>
                        <td colspan="1" rowspan="1"><p>今天，10:00 AM</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>时间和日期范围</h1>
                    <p>日期和时间范围根据下列几个因素进行格式化：</p>
                    <ul class="lst-kix_ohjlshryggon-0 start">
                      <li>该日期或时间范围在同一个年份内</li>
                      <li>该日期或时间范围都是今年的</li>
                      <li>范围内的时间有相同的 AM 或 PM</li>
                    </ul>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>范围元素</p></td>
                        <td colspan="1" rowspan="1"><p>描述</p></td>
                        <td colspan="1" rowspan="1"><p>示例</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>短破折号</p></td>
                        <td colspan="1" rowspan="1"><p>使用短破折号分割日期或时间范围（不含空格）。当正式拼写月份时添加空格，以消除歧义。</p></td>
                        <td colspan="1" rowspan="1"><p>8:00 AM–12:30 PM<br>6月6日 - 2月2日</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>年份</p></td>
                        <td colspan="1" rowspan="1"><p>显示开始和结束的年份，除非这两个日期都是当前年份。</p></td>
                        <td colspan="1" rowspan="1"><p>2013年12月6日-2014年1月2日<br>2014年1月4日-6日</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>AM/PM</p></td>
                        <td colspan="1" rowspan="1"><p>如果两个时间的 AM/PM 相同，只在范围的后面显示一个 AM 或 PM。</p></td>
                        <td colspan="1" rowspan="1"><p>8:00–10:30 AM</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>时区</h1>
                    <p>因为不同地区的时区不同，使用时区时，要确保目的明确和有意义。</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>时区类型</p></td>
                        <td colspan="1" rowspan="1"><p>描述</p></td>
                        <td colspan="1" rowspan="1"><p>示例</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>单数字的小时</p></td>
                        <td colspan="1" rowspan="1"><p>移除小时前面的0 </p></td>
                        <td colspan="1" rowspan="1"><p>UTC+5:00</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>单个时区</p></td>
                        <td colspan="1" rowspan="1"><p>引用单个时区时，使用双字母时区，删除S（标准时区）或D（夏令时）。</p></td>
                        <td colspan="1" rowspan="1"><p>Open 4–10 PM ET</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>组合时区</p></td>
                        <td colspan="1" rowspan="1"><p>当为全国受众指定日期时，需要包含标准时区或夏令时（例如 EDT），以避免混淆。一些美国的州，如亚利桑那州，不使用夏令时。</p></td>
                        <td colspan="1" rowspan="1"><p>第一场比赛在2015年4月13日下午4点 EDT。</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>根据用户所处情境修改日期和时间</h1>
                    <p>根据所处情境，显示日期或时间，或同时显示日期和时间。</p></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>所处情境</p></td>
                        <td colspan="1" rowspan="1"><p>描述</p></td>
                        <td colspan="1" rowspan="1"><p>示例 </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>未来</p></td>
                        <td colspan="1" rowspan="1"><p>未来的日期需要包含时间。</p></td>
                        <td colspan="1" rowspan="1"><p>10月10日，08:00 </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>过去</p></td>
                        <td colspan="1" rowspan="1"><p>当引用过去的时间时，同时显示日期和时间</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>1月5日上午7:16 提醒我</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>遥远的过去</p></td>
                        <td colspan="1" rowspan="1"><p>在遥远的过去的事件可以省略时间。</p></td>
                        <td colspan="1" rowspan="1"><p>1月3日</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>平日</p></td>
                        <td colspan="1" rowspan="1"><p>当引用一周中的某一天时，显示以逗号分隔的缩写的日期。</p></td>
                        <td colspan="1" rowspan="1"><p>Mon, Jan 10, 8:00 AM</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>持续时间</p></td>
                        <td colspan="1" rowspan="1">
                          <p>以 H:MM:SS 的格式显示录音（如视频或音频）的持续时间。如果不适用，请省略小时或秒。</p>
                          <p>在同一情境中使用相同的格式。例如页面中有一个标记为 “3:15” 的视频（使用小时和分钟），不应在该页面中使用那种格式再来表示分钟和秒。</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>0:30<br>1:01:05</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2 h1-spacing">
                  <div class="module">
                    <h1>缩写</h1>
                    <p>如果空间有限，月和日部分可以使用缩写</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>时间段</p></td>
                        <td colspan="1" rowspan="1"><p>说明</p></td>
                        <td colspan="1" rowspan="1"><p>示例</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>月份</p></td>
                        <td colspan="1" rowspan="1"><p>月份可以使用缩写或数字。许多语言的月份没有缩写的名称。</p></td>
                        <td colspan="1" rowspan="1"><p>Jan 6<br>3/12/12</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>数据格式</p></td>
                        <td colspan="1" rowspan="1"><p>美国的日期格式为月/日/年，但其他国家使用日/月/年。</p></td>
                        <td colspan="1" rowspan="1"><p>2012年3月12日写作 03/12/12 可能会被误解为 2012年12月3日。</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>星期几</p></td>
                        <td colspan="1" rowspan="1"><p>星期几可以使用每天的第一个字母的缩写。</p></td>
                        <td colspan="1" rowspan="1"><p>S 表示星期天<br>M 表示星期一</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>日期和时间</p></td>
                        <td colspan="1" rowspan="1"><p>缩写的星期几可以和时间结合使用。</p></td>
                        <td colspan="1" rowspan="1"><p>Sun, 2:00 PM<br>Sun, 14:00</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>数字四舍五入</p></td>
                        <td colspan="1" rowspan="1"><p>简化时间单位，可以适时的去除某些场景下的 “:00” ，例如时间戳、图标中的标签和持续时间等。</p></td>
                        <td colspan="1" rowspan="1"><p>8 AM<br>2 hr 32 min ago</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <h1>谈论日期和时间</h1>
              <p>当有可用空间时，显示日期和时间信息，因为人们通常会彼此谈论时间。</p>
              <ul class="lst-kix_vpxpqzup8197-0 start">
                <li>请参考这些条款中的昨天或明天</li>
                <li>如果这个日期在下一周，则显示星期几（例如星期二）</li>
                <li>以其他有助于理解的方式描述一天中的时间，例如 “商店营业时间为上午9:00-午夜” 或 “明天下午提醒我”</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="data-formats-data-redaction-truncation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            数据修订和截断
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>截断数值</h1>
              <p>居中的椭圆[• • •]是隐藏部分敏感数据的符号字符。它们指示何时数字是不完全可见的（例如信用卡或社保号码）。</p>
              <div class="col-list">
                <section class="module-module-module col-3 h3-spacing">
                  <div class="module">
                    <h3>何时使用 3 个点的居中椭圆</h3>
                    <p>要隐藏大部分数字，例如社保号码，请使用三个点的居中椭圆[• • •]。</p>
                    <p>你可以跨字体和平台使用此格式：<br>
                      1. 在第一个椭圆之前放置两个空格<br>
                      2. 然后在每个椭圆和最后一个椭圆之间添加一个空格。</p>
                    <p>或者，使用 Unicode 字符代替：U0020,U0020,U2022,U2006,U2022,U2006,U2022,U2006</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>SSN • • • 5678</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3 h3-spacing">
                  <div class="module">
                    <h3>何时使用 4 个居中椭圆</h3>
                    <p>信用卡和借记卡数据必须使用 4 个居中椭圆进行隐藏 [• • • •].</p>
                    <p>用 Unicode 表示：<br>
                      U0020,U0020,U2022,U2006,U2022,U2006,U2022,U2006,U2022,U2006</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Visa • • • • 1234</p>
                    </div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                    <figcaption>
                      <p>用于信用卡号的椭圆符号</p>
                    </figcaption>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3 h1-spacing">
                  <div class="module">
                    <h1>减少字母</h1>
                    <p>底线椭圆[...]表示未显示的字母、单词或短语。它们还可以表示名称或邮件地址仅部分可见。</p>
                    <h3>用法</h3>
                    <p>在显示的最后一个字母后面输入三个点号（或者 Unicode 字符 U2026）。</p>
                  </div>
                  <div class="module">
                    <div class="text-box"><p>PayPal krestovozdvizhensky@goog…</p></div>
                    <p class="s-tag-caption do"><?= $translate['do']; ?></p>
                    <figcaption>
                      <p>用三个底线椭圆缩减了邮件地址。</p>
                    </figcaption>
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
