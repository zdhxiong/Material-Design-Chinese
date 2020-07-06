<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?= $vars['title'] ?></h1>
    <div class="gas-h1-bottom"></div>

    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>这个 zip 文件包含 Adobe Photoshop 和 Adobe Illustrator 的颜色色板，你可以直接下载安装。zip 文件中的 Read-Me.pdf 是安装指南，它会教你如何把 .aco 文件安装到 Photoshop，以及如何把 .ase 文件安装到 Illustrator。</p>
          <p>关于 Material Design 中的更多关于颜色的信息，详见<a href="../style/color.html">颜色</a>。</p>
          <div class="modulettes">
            <a class="modulette download trackdl" download="" href="<?= static_url('../static/media/resources/color-palettes/color_swatches.zip'); ?>" title="Color Swatches">
              <img alt="" class="icon download-icon" src="<?= static_url('../static/spec/images/callouts/download.svg'); ?>" loading="lazy">
              <div class="info">
                <div class="title">颜色色板</div>
                <span class="subtitle">0.02 MB (.zip) </span>
              </div>
              </img>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>
