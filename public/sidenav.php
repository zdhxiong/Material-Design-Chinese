<div id="side-nav" class="qp-ui" data-qp-ui="{ 'SideNavDrawer': {} }">
  <div class="side-nav-wrapper ">
    <div>
      <span id="logo">
        <a href="<?php url(''); ?>"><img src="<?php url('static/images/material-design.svg') ?>" alt="Logo"/></a>
      </span>
      
      <nav>
        <?php
        foreach ($nav->getOriginal() as $key => $val) {
          echo '<dl>';
          echo '<dt class="qp-ui" data-qp-ui="{ \'SideNavZippy\': ' . ($val['title'] == $vars['category'] ? 'true' : 'false') . ' }">' . $val['title'] . '</dt>';
          echo '  <dd>';
          foreach ($val['children'] as $subkey => $subval) {
            echo '<a ' . ($vars['title'] == $subval ? 'class="nav_selected"' : '') . ' href="' . get_url($key.'/'.$subkey.'.html') . '">' . $subval . '</a>';
          }
          echo '  </dd>';
          echo '</dl>';
        }
        ?>
      </nav>
      <div class="legal">
        <p class="copyright">Google &copy;</p>
        <ul>
          <li><a href="http://www.google.com/policies/privacy/" target="_blank">Privacy</a></li>
          <li><a href="http://www.google.com/policies/terms/" target="_blank">Terms</a></li>
          <li><a href="http://www.mdui.org/" target="_blank">MDUI</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>