<footer>
  <div class="footer-grid">
    <div class="footer-L section-material-design color-<?php echo $vars['color_name']; ?>">&nbsp;</div>
    <div class="footer-grid-L section-material-design color-<?php echo $vars['color_name']; ?>">
      <a class="footer-text" href="<?php echo $vars['prev_path']; ?>">
        <i class="material-icons arrow-L" aria-hidden="true">arrow_back</i>
        <span class="direction">Previous</span><span class="screen-reader">:</span>
        <div><?php echo $vars['prev_title']; ?></div>
      </a>
    </div>
    <div class="footer-R section-what-is-material color-<?php echo $vars['color_name']; ?>">&nbsp;</div>
    <div class="footer-grid-R section-what-is-material color-<?php echo $vars['color_name']; ?>">
      <a class="footer-text" href="<?php echo $vars['next_path']; ?>">
        <i class="material-icons arrow-R" aria-hidden="true">arrow_forward</i>
        <span class="direction">Next</span><span class="screen-reader">:</span>
        <div><?php echo $vars['next_title']; ?></div>
      </a>
    </div>
  </div>
</footer>
<script src="<?php url('static/js/picturefill.min.js'); ?>"></script>
<script src="<?php url('static/js/main.min.js'); ?>"></script>
</body>
</html>