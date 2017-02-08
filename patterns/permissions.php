<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>Permission requests should be simple, transparent, and understandable. </h1>
          <div class="col-list">
            <section class="module-module-figure col-3">
              <div class="module">
                <p>Apps should clarify why each permission request is needed, either through the feature name or an explanation provided.</p>
                <p><strong>Runtime permissions</strong> are requested at the moment a user needs to perform an action in an app.</p>
                <p><strong>Denied permissions</strong> should provide feedback and options.</p>
              </div>
              <div class="module">
                <h3><strong>Types of permissions</strong></h3>
                <p>Educate before asking<br>
                  Ask up-front<br>
                  Ask in context<br>
                  Educate in context<br>
                  Provide an immediate benefit<br>
                  Only ask for relevant permissions</p>
              </div>
              <div class="figure">
                <figure class="s-tag-media">
                  <div class="media">
                    <img alt="" src="../static/media/patterns/permissions/patterns_permissions.png"/>
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
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="permissions.html#permissions-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="permissions.html#permissions-runtime-permissions" data-qp-ui-data-id="qp:2">Runtime permissions</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="permissions.html#permissions-request-patterns" data-qp-ui-data-id="qp:3">Request patterns</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="permissions.html#permissions-denied-permissions" data-qp-ui-data-id="qp:4">Denied permissions</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="permissions-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>Permission groups</strong></strong></h2>
                    <p>Permissions are divided into nine groups, allowing users to grant all permissions encompassed by a single action. For instance, granting permission to Contacts includes the ability to both view and edit Contacts.</p>
                  </div>
                  <div class="module">
                    <table class="s-tag-table">
                      <tbody>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Permission</p></td>
                        <td colspan="1" rowspan="1"><p>Description</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Calendar</p></td>
                        <td colspan="1" rowspan="1"><p>Managing calendars</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Camera</p></td>
                        <td colspan="1" rowspan="1"><p>Taking photos and recording videos</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Contacts</p></td>
                        <td colspan="1" rowspan="1"><p>Managing contacts</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Location</p></td>
                        <td colspan="1" rowspan="1"><p>Current device location</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Microphone</p></td>
                        <td colspan="1" rowspan="1"><p>Audio recording</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Phone</p></td>
                        <td colspan="1" rowspan="1"><p>Dialing and managing phone calls</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Body Sensors</p></td>
                        <td colspan="1" rowspan="1"><p>Heart rate and similar data</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>SMS</p></td>
                        <td colspan="1" rowspan="1"><p>Sending and viewing messages</p></td>
                      </tr>
                      <tr>
                        <td colspan="1" rowspan="1"><p>Storage</p></td>
                        <td colspan="1" rowspan="1"><p>Accessing photos, media, and files</p></td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
                <section class="module-module col-2">
                  <div class="module">
                    <h2><strong><strong>Implied permission</strong></strong></h2>
                    <p>A user may perform an action that demonstrates clear intent, such as: </p>
                    <ul class="lst-kix_em02k6y82udr-0 start">
                      <li>Taking a picture</li>
                      <li>Selecting a contact</li>
                      <li>Starting a call or text message</li>
                    </ul>
                    <p>In these cases, the user’s action clearly demonstrates their intent, and no permission dialog is needed or authorized. </p>
                    <p></p>
                    <div class="modulettes">
                      <a class="modulette container android" href="https://www.google.com/url?q=http://developer.android.com/guide/components/intents-filters.html&amp;sa=D&amp;ust=1481818002243000&amp;usg=AFQjCNFfT6XSBf74_LqfVqUqBpvFHpJPDA" target="_blank">
                        <img alt="" class="icon callout-icon" src="../static/images/callouts/android.svg">
                        <div class="info">
                          <div class="title">Intents and Intent Filters</div>
                          <span class="subtitle"></span>
                        </div>
                        </img>
                      </a>
                    </div>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="permissions-runtime-permissions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Runtime permissions
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Apps may request permission to access information or use device capabilities at any time after installation. When a user needs to perform an action in an app, such as using the device camera, the app may request permission at that moment.</p>
                    <p>Users may also allow or deny the permissions of any app from Android Settings anytime after installation.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/permissions/patterns_permissions_runtime1.png"/>
                      </div>
                      <figcaption>
                        <p>Example of an app requesting permission</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="permissions-request-patterns" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Request patterns
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
                  <div class="module"><p>Your permissions strategy depends on the clarity and importance of the permission type you are requesting. These patterns offer different ways of introducing permissions to the user.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/permissions/patterns_permissions_patterns0.png"/>
                      </div>
                      <figcaption>
                        <p>Critical permissions should be requested up-front. Secondary permissions may be requested in-context.</p>
                        <p>Permissions that are less clear should provide education about what the permission involves, whether done up-front or in context.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
              <div class="col-list">
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/permissions/patterns_permissions_patterns1.png"/>
                      </div>
                      <figcaption>
                        <h2><strong>Educate before asking</strong></h2>
                        <p>If your app has a “warm welcome,” use it to explain what your app does and why unexpected permissions will be requested.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/permissions/patterns_permissions_patterns2.png"/>
                      </div>
                      <figcaption>
                        <h2><strong>Ask up-front</strong></h2>
                        <p>Only ask for critical and obvious permissions on first launch.</p>
                        <p>Because users expect a messaging app to request SMS permissions, requesting it up-front makes sense.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/permissions/patterns_permissions_patterns3.png"/>
                      </div>
                      <figcaption>
                        <h2><strong>Ask in context</strong></h2>
                        <p>Wait until a feature is invoked to request permission. </p>
                        <p>Users are more likely to allow a permission when they want to use the feature it enables.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
                <section class="figure-figure-figure col-3">
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/permissions/patterns_permissions_patterns4.png"/>
                      </div>
                      <figcaption>
                        <h2><strong>Educate in context</strong></h2>
                        <p>Explaining a permission in context helps gauge user interest and improve comprehension of the permission.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/permissions/patterns_permissions_patterns5.png"/>
                      </div>
                      <figcaption>
                        <h2><strong>Provide an immediate benefit </strong></h2>
                        <p>Provide instant gratification to make accepting a permission feel justified.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <div class="qp-ui" data-qp-ui="{ 'VideoPlayer': {} }">
                          <video controls="" loop="" preload="metadata">
                            <source src="../static/media/patterns/permissions/patterns_permissions_patterns2.webm" type="video/webm">
                            <source src="../static/media/patterns/permissions/patterns_permissions_patterns2.mp4" type="video/mp4">
                            </source></source>
                          </video>
                        </div>
                      </div>
                      <figcaption>
                        <h2><strong>Only ask for relevant permissions</strong></h2>
                        <p>When more than one permission is needed for a feature to work, ask for those permissions only and nothing extra.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="permissions-denied-permissions" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:4">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:4">
            Denied permissions
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="icon icon-expand-collapse" role="img" viewBox="0 0 10 10" aria-labelledby="title desc">
              <title>Expand and collapse content</title>
              <desc>An arrow that points down when collapsed and points up when expanded.</desc>
              <polygon role="presentation" points="2.5,4.167 5,6.667 7.5,4.167 6.917,3.583 5,5.5 3.083,3.583"></polygon>
            </svg>
          </h2>
          <div class="article-content">
            <div>
              <p></p>
              <div class="col-list">
                <section class="module-figure-module col-3">
                  <div class="module">
                    <p>Provide feedback whenever a permission is denied. Because denying permissions may prevent a feature from working as intended, whenever a permission is denied it should be explained to the user.</p>
                    <p>Permission denials occur in one of two ways: </p>
                    <ul class="lst-kix_2s2yiam7aofv-0 start">
                      <li>A permission request is denied by the user</li>
                      <li>A permission is silently denied without warning because a user once selected “Don’t ask again” from a previous permission request</li>
                    </ul>
                    <p>To ensure that features requiring permission always behave as intended, the app should state that permission is needed and provide a way to allow it.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/permissions/patterns_permissions_denied1.png"/>
                      </div>
                      <figcaption>
                        <p>A snackbar displays the need for permission in order to use an audio feature. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="module"></div>
                </section>
                <section class="module-figure-module col-3">
                  <div class="module">
                    <h2><strong><strong>Critical permissions</strong></strong></h2>
                    <p>If the app can no longer run because a critical permission has been denied, explain why that permission must be allowed and offer a button to open Settings so the user can allow it.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/permissions/patterns_permissions_denied2.png"/>
                      </div>
                      <figcaption>
                        <p>A screen explains that a permission is needed for an app to function, with a link to allow that permission in Settings.</p>
                      </figcaption>
                    </figure>
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