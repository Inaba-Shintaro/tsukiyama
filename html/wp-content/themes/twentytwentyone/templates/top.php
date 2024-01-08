<?php
/**
 * Template Name: top
 */
get_header();
?>
<section id="header">
  <nav>
    <div class="inner_wrapper">
    <!-- nav_pc -->
      <div class="nav_left">
        <p class="site_name">
          福岡市の歯医者【つきやま歯科医院 井尻本院】井尻駅より徒歩5分
        </p>
        <a class="site_logo" href="/">
          <p>
            <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/01/logo04.png">
          </p>
        </a>
      </div>
      <!-- nav_pc -->
    </div>
  </nav>


  <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>
</section>

<?php  
get_footer();
?>