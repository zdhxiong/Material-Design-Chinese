<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <h1>When a user invokes an action in your app, confirm or acknowledge that action through text.</h1>
        </div>
      </div>
      <nav class="chapter-toc">
        <h1>Contents</h1>
        <ul>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="confirmation-acknowledgement.html#confirmation-acknowledgement-usage" data-qp-ui-data-id="qp:1">Usage</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="confirmation-acknowledgement.html#confirmation-acknowledgement-confirmation" data-qp-ui-data-id="qp:2">Confirmation</a>
          </li>
          <li>
            <a class="gweb-smoothscroll-control qp-ui" data-qp-ui="{ 'SmoothScroll': {} }" href="confirmation-acknowledgement.html#confirmation-acknowledgement-acknowledgement" data-qp-ui-data-id="qp:3">Acknowledgement</a>
          </li>
        </ul>
      </nav>

      <div class="article-list">

        <div id="confirmation-acknowledgement-usage" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:1">
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
              <p>Confirming and acknowledging actions can help alleviate uncertainty about things that have happened or will happen. It also prevents users from making mistakes they might regret.</p>
              <ul class="lst-kix_xhnp0oc6lrvk-0 start">
                <li><strong>Confirming </strong>involves asking the user to verify that they want to proceed with an action.</li>
                <li><strong>Acknowledging </strong>is displaying text to let the user know that the action they chose has been completed.</li>
              </ul>
              <p>Not all actions warrant a confirmation or an acknowledgment.</p>
            </div>
          </div>
        </div>

        <div id="confirmation-acknowledgement-confirmation" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:2">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:2">
            Confirmation
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
                    <p>A confirmation asks the user to verify that they truly want to proceed with the action they just invoked. It may be paired with a warning or critical information related to that action.</p>
                    <p>Modal dialog titles for confirmations should be meaningful and echo the requested action.</p>
                    <p>Confirmation isn’t necessary when the consequences of an action are reversible or negligible. For example, if a check mark shows an image has been selected, further confirmation is unnecessary.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/confirmation-acknowledgement/patterns_confirmation-acknowledgement_confirm_1.png"/>
                      </div>
                      <figcaption>
                        <p>The user has requested to delete an album from their library. An <a href="https://www.google.com/url?q=https://developer.android.com/design/building-blocks/dialogs.html%23alerts&amp;sa=D&amp;ust=1481817987575000&amp;usg=AFQjCNF5wLNAZ9zxKjUBWwQZBXGRMVZ38g" target="_blank">alert</a> appears to confirm this action and inform the user that the album will no longer be available from any device.</p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/confirmation-acknowledgement/patterns_confirmation-acknowledgement_confirm_2.png"/>
                      </div>
                      <figcaption>
                        <p>After initiating Android Beam, the user is prompted to touch the content to be shared. If they decide not to proceed, they simply move their phone away.</p>
                      </figcaption>
                    </figure>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>

        <div id="confirmation-acknowledgement-acknowledgement" class="article qp-ui" data-qp-ui="{ 'ScrollSpy': {} }" data-qp-ui-data-id="qp:3">
          <h2 class="article-title qp-ui" data-qp-ui="{ 'ResponsiveZippy': {} }" data-qp-ui-data-id="qp:3">
            Acknowledgement
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
                    <p>Acknowledgement removes uncertainty about implicit operations that the system is taking. It may be paired with an option to undo the action.</p>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/confirmation-acknowledgement/patterns_confirmation-acknowledgement_acknowledgement_1.png"/>
                      </div>
                      <figcaption>
                        <p>The draft of an email is saved if the user navigates back or up from the compose screen. An acknowledgment in the form of a toast appears, then fades after a few seconds. </p>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="figure">
                    <figure class="s-tag-media">
                      <div class="media">
                        <img alt="" src="../static/media/patterns/confirmation-acknowledgement/patterns_confirmation-acknowledgement_acknowledgement_2.png"/>
                      </div>
                      <figcaption>
                        <p>After the user deletes a conversation from the list view, an acknowledgment appears with an undo option. It remains until the user takes an unrelated action, such as scrolling the list.</p>
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