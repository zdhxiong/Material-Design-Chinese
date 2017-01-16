<div id="side-nav" class="qp-ui" data-qp-ui="{ 'SideNavDrawer': {} }">
  <div class="side-nav-wrapper ">
    <div>
      <span id="logo">
        <a href="<?php url(''); ?>"><img src="<?php url('static/images/material-design.svg') ?>" alt="Logo"/></a>
      </span>
      
      <nav>
        <dl>
          <?php category_html('Material design'); ?>
          <dd>
            <?php title_html('概述', 'material-design/introduction.html'); ?>
            <?php title_html('Environment', 'material-design/environment.html'); ?>
            <?php title_html('Material properties', 'material-design/material-properties.html'); ?>
            <?php title_html('Elevation &amp; shadows', 'material-design/elevation-shadows.html'); ?>
            <?php title_html('What’s new', 'material-design/whats-new.html'); ?>
          </dd>
        </dl>
        <dl>
          <?php category_html('动效'); ?>
          <dd>
            <?php title_html('Material motion', 'motion/material-motion.html'); ?>
            <?php title_html('Duration &amp; easing', 'motion/duration-easing.html'); ?>
            <?php title_html('Movement', 'motion/movement.html'); ?>
            <?php title_html('Transforming material', 'motion/transforming-material.html'); ?>
            <?php title_html('Choreography', 'motion/choreography.html'); ?>
            <?php title_html('Creative customization', 'motion/creative-customization.html'); ?>
          </dd>
        </dl>
        <dl>
          <?php category_html('样式'); ?>
          <dd>
            <?php title_html('Color', 'style/color.html'); ?>
            <?php title_html('Icons', 'style/icons.html'); ?>
            <?php title_html('Imagery', 'style/imagery.html'); ?>
            <?php title_html('Typography', 'style/typography.html'); ?>
            <?php title_html('Writing', 'style/writing.html'); ?>
          </dd>
        </dl>
        <dl>
          <?php category_html('布局'); ?>
          <dd>
            <?php title_html('Principles', 'layout/principles.html'); ?>
            <?php title_html('Units &amp; measurements', 'layout/units-measurements.html'); ?>
            <?php title_html('Metrics &amp; keylines', 'layout/metrics-keylines.html'); ?>
            <?php title_html('Structure', 'layout/structure.html'); ?>
            <?php title_html('Responsive UI', 'layout/adaptive-ui.html'); ?>
            <?php title_html('Split screen', 'layout/split-screen.html'); ?>
          </dd>
        </dl>
        <dl>
          <?php category_html('组件'); ?>
          <dd>
            <?php title_html('底部导航', 'components/bottom-navigation.html'); ?>
            <?php title_html('Bottom sheets', 'components/bottom-sheets.html'); ?>
            <?php title_html('Buttons', 'components/buttons.html'); ?>
            <?php title_html('Buttons: Floating Action Button', 'components/buttons-floating-action-button.html'); ?>
            <?php title_html('Cards', 'components/cards.html'); ?>
            <?php title_html('Chips', 'components/chips.html'); ?>
            <?php title_html('Data tables', 'components/data-tables.html'); ?>
            <?php title_html('Dialogs', 'components/dialogs.html'); ?>
            <?php title_html('Dividers', 'components/dividers.html'); ?>
            <?php title_html('Expansion panels', 'components/expansion-panels.html'); ?>
            <?php title_html('Grid lists', 'components/grid-lists.html'); ?>
            <?php title_html('Lists', 'components/lists.html'); ?>
            <?php title_html('Lists: Controls', 'components/lists-controls.html'); ?>
            <?php title_html('Menus', 'components/menus.html'); ?>
            <?php title_html('Pickers', 'components/pickers.html'); ?>
            <?php title_html('Progress &amp; activity', 'components/progress-activity.html'); ?>
            <?php title_html('Selection controls', 'components/selection-controls.html'); ?>
            <?php title_html('Sliders', 'components/sliders.html'); ?>
            <?php title_html('Snackbars &amp; toasts', 'components/snackbars-toasts.html'); ?>
            <?php title_html('Steppers', 'components/steppers.html'); ?>
            <?php title_html('Subheaders', 'components/subheaders.html'); ?>
            <?php title_html('Tabs', 'components/tabs.html'); ?>
            <?php title_html('Text fields', 'components/text-fields.html'); ?>
            <?php title_html('Toolbars', 'components/toolbars.html'); ?>
            <?php title_html('Tooltips', 'components/tooltips.html'); ?>
            <?php title_html('Widgets', 'components/widgets.html'); ?>
          </dd>
        </dl>
        <dl>
          <?php category_html('模式'); ?>
          <dd>
            <?php title_html('Confirmation &amp; acknowledgement', 'patterns/confirmation-acknowledgement.html'); ?>
            <?php title_html('Data formats', 'patterns/data-formats.html'); ?>
            <?php title_html('Empty states', 'patterns/empty-states.html'); ?>
            <?php title_html('Errors', 'patterns/errors.html'); ?>
            <?php title_html('Fingerprint', 'patterns/fingerprint.html'); ?>
            <?php title_html('Gestures', 'patterns/gestures.html'); ?>
            <?php title_html('Help &amp; feedback', 'patterns/help-feedback.html'); ?>
            <?php title_html('Launch screens', 'patterns/launch-screens.html'); ?>
            <?php title_html('Loading images', 'patterns/loading-images.html'); ?>
            <?php title_html('Navigation', 'patterns/app-structure.html'); ?>
            <?php title_html('Navigation drawer', 'patterns/navigation-drawer.html'); ?>
            <?php title_html('Navigational transitions', 'patterns/navigational-transitions.html'); ?>
            <?php title_html('Notifications', 'patterns/notifications.html'); ?>
            <?php title_html('Permissions', 'patterns/permissions.html'); ?>
            <?php title_html('Scrolling techniques', 'patterns/scrolling-techniques.html'); ?>
            <?php title_html('Search', 'patterns/search.html'); ?>
            <?php title_html('Selection', 'patterns/selection.html'); ?>
            <?php title_html('Settings', 'patterns/settings.html'); ?>
            <?php title_html('Swipe to refresh', 'patterns/swipe-to-refresh.html'); ?>
          </dd>
        </dl>
        <dl>
          <?php category_html('Growth & communications'); ?>
          <dd>
            <?php title_html('Introduction', 'growth-communications/introduction.html'); ?>
            <?php title_html('Onboarding', 'growth-communications/onboarding.html'); ?>
            <?php title_html('Feature discovery', 'growth-communications/feature-discovery.html'); ?>
            <?php title_html('Gesture education', 'growth-communications/gesture-education.html'); ?>
          </dd>
        </dl>
        <dl>
          <?php category_html('可用性'); ?>
          <dd>
            <?php title_html('Accessibility', 'usability/accessibility.html'); ?>
            <?php title_html('Bidirectionality', 'usability/bidirectionality.html'); ?>
          </dd>
        </dl>
        <dl>
          <?php category_html('平台'); ?>
          <dd>
            <?php title_html('平台适配', 'platforms/platform-adaptation.html'); ?>
            <?php title_html('Android', 'platforms/android.html'); ?>
          </dd>
        </dl>
        <dl>
          <?php category_html('资源'); ?>
          <dd>
            <?php title_html('Color palettes', 'resources/color-palettes.html'); ?>
            <?php title_html('Devices', 'resources/devices.html'); ?>
            <?php title_html('Layout templates', 'resources/layout-templates.html'); ?>
            <?php title_html('Roboto &amp; Noto fonts', 'resources/roboto-noto-fonts.html'); ?>
            <?php title_html('Sticker sheets &amp; icons', 'resources/sticker-sheets-icons.html'); ?>
          </dd>
        </dl>
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