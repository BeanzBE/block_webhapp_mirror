<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>
<div class="scrapbookMirror-wrapper">
  <div class="scrapbookMirrorImage">
    <img src="<?php echo $mirrorImage->getURL(); ?>" alt=""/>
  </div>
  <div class="scrapbookMirror">
    <h3><?php echo $title; ?></h3>
    <hr/>
    <p>
      <?php echo $description; ?>
    </p>
  </div>
</div>
<style>
  .ccm-page .scrapbookMirror, .ccm-page .scrapbookMirror h3, .scrapbookMirror-wrapper{
    background-color: <?php echo $backgroundColor; ?>;
    color: <?php echo $textColor; ?>;
  }
  .scrapbookMirror-wrapper{
    display: table;
    width: 100%;
  }
  .scrapbookMirror-wrapper div{
    display: table-cell;
  }
  .scrapbookMirrorImage{
    max-width: 30px;
  }
  .scrapbookMirrorImage img{
    max-width: 100%;
  }
</style>
