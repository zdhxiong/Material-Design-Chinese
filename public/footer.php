<footer>
  <div class="footer-grid">
    <div class="footer-L section-material-design color-<?= $vars['color_name']; ?>">&nbsp;</div>
    <div class="footer-grid-L section-material-design color-<?= $vars['color_name']; ?>">
      <?php if ($vars['prev_title']) { ?>
      <a class="footer-text" href="<?= url($vars['prev_path'].'.html'); ?>">
        <i class="material-icons arrow-L" aria-hidden="true">arrow_back</i>
        <span class="direction">上一页</span><span class="screen-reader">:</span>
        <div><?= $vars['prev_title']; ?></div>
      </a>
      <?php } ?>
    </div>
    <div class="footer-R section-what-is-material color-<?= $vars['color_name']; ?>">&nbsp;</div>
    <div class="footer-grid-R section-what-is-material color-<?= $vars['color_name']; ?>">
      <?php if ($vars['next_title']) { ?>
      <a class="footer-text" href="<?= url($vars['next_path'].'.html'); ?>">
        <i class="material-icons arrow-R" aria-hidden="true">arrow_forward</i>
        <span class="direction">下一页</span><span class="screen-reader">:</span>
        <div><?= $vars['next_title']; ?></div>
      </a>
      <?php } ?>
    </div>
  </div>
</footer>
<script src="<?= url('static/default/js/main.min.js'); ?>"></script>
</body>
</html>
