<?php 
  $template_name = "Package-CI-Bootstrap";
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
  <?php include("_site_header.php");?>
</head>
<body>
  <div id="home-body-container">
      <div id="home-content">
        <!-- home-content -->
      <div class="container container-fluid">
        <?php include("_navbar.php");?>
        <div class="row-fluid">
          <div class="span2">
            <?php include("_sidebar.php");?>
          </div>
          <div class="span10">
            <!-- body-content -->
            <div id="body">
              <h1>Welcome to <?=$template_name?> - Page2</h1>
              
              <h2>Congratulations!</h2>
              <p>You've successfully used this package! Enjoy web programming!</p>

              <h2>Functional Guide</h2>
              <p>This is a quick package for <strong>CodeIgniter and Bootstrap </strong> combination. 這是一個結合了 CodeIgniter 與 Bootstrap 的網頁版型，下載完直接可以啟用</p>
              <p>Go to <a href="<?=site_url("")?>">index</a>, <a href="<?=site_url("page1")?>">page1</a> or <a href="<?=site_url("page2")?>">page2</a> to check those views!</p>
              <p>Check <a href="https://github.com/andro0929/<?=$template_name?>">Github</a> for further information.</p>

              <p>Author: <a href='http://androchen.qov.tw' target="blank">Andro Chen</a></p>
            </div>
            <!-- body-content ends -->
          </div>
        </div>
      </div>  
      </div>
      <!-- home-content ends -->
  </div>
  <div id="footer">
    <?php include("_site_footer.php");?>
    <a href="https://github.com/andro0929/<?=$template_name?>"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
  </div>  
</body>
</html>