<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Different types of numeric and linguistic data are represented using data formats. </h1>
          <div class="col-list">
            <section class="module-module-module col-3">
              <div class="module">
                <p><strong>Date and time </strong>values may be formatted to depict ranges, time zones, abbreviations, and more, as appropriate to the context.</p>
                <p><strong>Data redaction and truncation</strong> guidelines describe how to represent truncated numbers and disguise sensitive data.</p>
              </div>
              <div class="module">
                <h3><strong>Formats represented</strong></h3>
                <p>Time<br>
                  Month, day, year<br>
                  Approximating time<br>
                  Absolute time<br>
                  Time zones <br>
                  Abbreviations<br>
                  Rounded numbers</p>
              </div>
              <div class="module">
                <div class="text-box"><p>000 • • • 0000<br>
                  <br>
                  12:00 UTC</p>
                </div>
                <figcaption>
                  <p>Data truncation and time display examples</p>
                </figcaption>
              </div>
            </section>
          </div>
        </div>
      </div>

      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-formats.html#data-formats-date-time" data-qp-ui-data-id="qp:1">Date &amp; time</a></li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="data-formats.html#data-formats-data-redaction-truncation" data-qp-ui-data-id="qp:2">Data redaction and truncation</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="data-formats-date-time" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:1">
            Date &amp; time
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Date and time</h1>
                    <p>How you format the date and time depends on a few factors:</p>
                    <ul class="lst-kix_qp22hhzc4byb-0 start">
                      <li>If the time or date is the current one</li>
                      <li>Whether you are using the 12-hour or 24-hour clock</li>
                      <li>How specific you need to be</li>
                    </ul>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Element</p></td>
                        <td colspan="1" rowspan="1"><p>Description</p></td>
                        <td colspan="1" rowspan="1"><p>Example</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Time</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Within the current day, display the time using uppercase AM or PM, without periods. If you are using the 24-hour clock, display the time without AM/PM.</p>
                          <p>Many non-English languages use lowercase am and pm.</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>2:00 PM<br>14:00</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Month, day, and year</p></td>
                        <td colspan="1" rowspan="1"><p>Within the current calendar year, display the date without the year. Otherwise, display the date and year.</p></td>
                        <td colspan="1" rowspan="1"><p>January 14<br>14 January 2012</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Approximate time</p></td>
                        <td colspan="1" rowspan="1"><p>Approximate time rounds down to the largest and most recent date or time unit. </p></td>
                        <td colspan="1" rowspan="1"><p>In 5 minutes<br> 3 days ago</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Absolute time</p></td>
                        <td colspan="1" rowspan="1"><p>When approximate time isn’t appropriate, display the specific date and/or time. </p></td>
                        <td colspan="1" rowspan="1"><p>Today, 10:00 AM</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Time and date ranges</h1>
                    <p>Date and time ranges are formatted based on the following: </p>
                    <ul class="lst-kix_ohjlshryggon-0 start">
                      <li>The year is the same on both sides of the range</li>
                      <li>It’s the current year on both sides of the range</li>
                      <li>Whether both times have the same AM or PM</li>
                    </ul>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Range element</p></td>
                        <td colspan="1" rowspan="1"><p>Description</p></td>
                        <td colspan="1" rowspan="1"><p>Example</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>En dash</p></td>
                        <td colspan="1" rowspan="1"><p>Separate a range of dates or times with an en dash, without spaces. Add spaces when spelling out months, or to remove ambiguity.</p></td>
                        <td colspan="1" rowspan="1"><p>8:00 AM–12:30 PM<br> 6 Jan – 2 Feb</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Year</p></td>
                        <td colspan="1" rowspan="1"><p>Show the year on both the start and end, unless both dates have the current year. </p></td>
                        <td colspan="1" rowspan="1"><p>Dec 6, 2013–Jan 2, 2014<br> January 4–6, 2014</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>AM/PM</p></td>
                        <td colspan="1" rowspan="1"><p>Use a single AM or PM at the end of the range, if both times have the same AM/PM.</p></td>
                        <td colspan="1" rowspan="1"><p>8:00–10:30 AM</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Time zones</h1>
                    <p>As time zones vary across regions, time zone usage should be both clear and relevant.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Types of time zones</p></td>
                        <td colspan="1" rowspan="1"><p>Description</p></td>
                        <td colspan="1" rowspan="1"><p>Example</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Single-digit hours</p></td>
                        <td colspan="1" rowspan="1"><p>Remove the leading 0 for single digit hours. </p></td>
                        <td colspan="1" rowspan="1"><p>UTC+5:00</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Single times zones</p></td>
                        <td colspan="1" rowspan="1"><p>Use two-letter time zones when referring to a single time zone. Remove the S (for Standard) or D (for Daylight).</p></td>
                        <td colspan="1" rowspan="1"><p>Open 4–10 PM ET</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Combination time zones</p></td>
                        <td colspan="1" rowspan="1"><p>When specifying a date for a nationwide audience, include Standard or Daylight acronyms (such as EDT) to avoid confusion. Some U.S. states, such as Arizona, don't use daylight savings time. </p></td>
                        <td colspan="1" rowspan="1"><p>The first game is on April 13, 2015 at 4 PM EDT.</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Date and time modifications by context </h1>
                    <p>Depending on the context, show either date or time, or both date and time.</p></div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Context</p></td>
                        <td colspan="1" rowspan="1"><p>Description</p></td>
                        <td colspan="1" rowspan="1"><p>Example </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Future</p></td>
                        <td colspan="1" rowspan="1"><p>Include time to a future day or date.</p></td>
                        <td colspan="1" rowspan="1"><p>10 Jan, 08:00 </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Past</p></td>
                        <td colspan="1" rowspan="1"><p>When referring to a past time, display both date and time.</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>Reminded Jan 5, 7:16 AM</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Distant past</p></td>
                        <td colspan="1" rowspan="1"><p>Omit the time for events in the distant past.</p></td>
                        <td colspan="1" rowspan="1"><p>3 Jan</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Weekday</p></td>
                        <td colspan="1" rowspan="1"><p>When referring to a day of the week, such as for Calendar invites, display the abbreviated day separated by a comma. </p></td>
                        <td colspan="1" rowspan="1"><p>Mon, Jan 10, 8:00 AM</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Duration</p></td>
                        <td colspan="1" rowspan="1">
                          <p>Show the duration of a recording, like audio or video, in the format H:MM:SS. Omit hours or seconds if they don’t apply.</p>
                          <p>Use the same format across the same context. A video labelled “3:15” referring to hours and minutes, should not use that time format later on that page to refer to minutes and seconds.</p>
                        </td>
                        <td colspan="1" rowspan="1"><p>0:30<br>1:01:05</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <h1>Abbreviations</h1>
                    <p>Where space is limited, use abbreviations for months and days.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Time period</p></td>
                        <td colspan="1" rowspan="1"><p>Description</p></td>
                        <td colspan="1" rowspan="1"><p>Example </p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Months</p></td>
                        <td colspan="1" rowspan="1"><p>Months can be abbreviated or numeric. Many languages do not abbreviate month names.</p></td>
                        <td colspan="1" rowspan="1"><p>Jan 6<br>3/12/12</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Date format</p></td>
                        <td colspan="1" rowspan="1"><p>The US date format is month/day/year, but other countries use day/month/year. </p></td>
                        <td colspan="1" rowspan="1"><p>March 12, 2012 written as 03/12/12 could be misinterpreted to mean December 3, 2012 across different users.</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Days of the week</p></td>
                        <td colspan="1" rowspan="1"><p>Days of the week may be abbreviated using the first letter of each day. </p></td>
                        <td colspan="1" rowspan="1"><p>S for Sunday<br>M for Monday</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Day and time</p></td>
                        <td colspan="1" rowspan="1"><p>Abbreviated days of the week may be combined with a time.</p></td>
                        <td colspan="1" rowspan="1"><p>Sun, 2:00 PM<br>Sun, 14:00</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Rounded numbers</p></td>
                        <td colspan="1" rowspan="1"><p>Abbreviated numerical units, which remove the “:00,” are appropriate for timestamps, labels on graphs, durations, etc.</p></td>
                        <td colspan="1" rowspan="1"><p>8 AM<br>2 hr 32 min ago</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
              <h1>Talking about date and time</h1>
              <p>Display date and time information as people normally speak to each other, when space is available.</p>
              <ul class="lst-kix_vpxpqzup8197-0 start">
                <li>Refer to yesterday or tomorrow in those terms</li>
                <li>If the day is in the upcoming week, display the day of the week (such as Tuesday)</li>
                <li>Describe a time of day in other ways that promote understanding, such as, “Store open 9:00 AM–Midnight” or “Reminder for tomorrow afternoon”</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="data-formats-data-redaction-truncation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Data redaction and truncation
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <h1>Redacting numbers</h1>
              <p>Midline ellipses [• • •] are bulleted characters that partially hide sensitive data. They indicate when a number, such as a credit card or Social Security number, is not entirely visible.</p>
              <div class="col-list">
                <section class="module-module-module col-3">
                  <div class="module"><h3><strong>When to use 3 ellipses</strong></h3>
                    <p>To redact most numbers, like Social Security numbers, use three midline ellipses [• • •]. </p>
                    <p>You may use this format across typefaces and platforms:<br>
                      1. Place two regular spaces before the first midline ellipse<br>
                      2. Then add a thin space between each midline ellipse and after the final one. </p>
                    <p>Or, use the Unicode string instead: U0020,U0020,U2022,U2006,U2022,U2006,U2022,U2006</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>SSN • • • 5678</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <h3><strong><strong>When to use 4 ellipses</strong></strong></h3>
                    <p>Credit and debit card data must be redacted using four midline ellipses [• • • •].</p>
                    <p>Written in Unicode:<br>
                      U0020,U0020,U2022,U2006,U2022,U2006,U2022,U2006,U2022,U2006</p>
                  </div>
                  <div class="module">
                    <div class="text-box">
                      <p>Visa • • • • 1234</p>
                    </div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>Ellipses for credit card redaction</p>
                    </figcaption>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-module-module col-3">
                  <div class="module">
                    <h1>Redacting letters</h1>
                    <p>Baseline ellipses [...] represent letters, words, or phrases that aren’t shown. They also represent when a name or email address is only partially visible. </p>
                    <h3><strong><strong>Usage</strong></strong></h3>
                    <p>Type the ellipses as three periods in a row (or Unicode character U2026) after the last letter shown.</p>
                  </div>
                  <div class="module">
                    <div class="text-box"><p>PayPal krestovozdvizhensky@goog…</p></div>
                    <p class="s-tag-caption do"><?php echo $translate['do']; ?></p>
                    <figcaption>
                      <p>Redacted email address with three baseline ellipses.</p>
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