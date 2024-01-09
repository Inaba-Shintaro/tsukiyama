<?php
/**
 * Template Name: top
 */
get_header();
$upload_dir = wp_upload_dir(); 
$image =  $upload_dir['baseurl']; 
$image .= "/";
?>
<section id="header">
  <nav>
    <!-- nav_pc -->
    <div class="nav_pc inner flexWrapper nav_flex ">
      <div class="nav_left">
        <p class="site_name descriptionXs">
          福岡市の歯医者【つきやま歯科医院 井尻本院】井尻駅より徒歩5分
        </p>
        <a class="site_logo" href="/">
          <p>
            <img src="<?php echo $image; ?>logo04.png">
          </p>
        </a>
      </div>
      <div class="nav_right">
        <div class="contactButtonsWrapper">
          <div class="sns_buttons flexWrapper">
            <a class="instagramButton" href="/"><img src="<?php echo $image; ?>icon-sns01.png" alt=""></a>
            <a class="facebookButton" href="/"><img src="<?php echo $image; ?>icon-sns02.png" alt=""></a>
          </div>
          <div class="contact_buttons flexWrapper">
            <a class="accessButton" href="">
              <p class="descriptionXs colorWhite">
                <img src="<?php echo $image; ?>icon-access01.png" alt="">
                アクセス・お問い合わせ
              </p>
            </a>
            <a class="reservationButton" href="">
              <p class="descriptionXs colorWhite">
                <span>ご予約</span>
                <img src="<?php echo $image; ?>icon-tel01.png" alt="">
                <span class="descriptionXl">092-582-5454</span>
              </p>
            </a>
          </div>
        </div>
        <div class="site_nav">
          <ul class="flexWrapper text-center">
            <li class="nav_item">
              <a href="">
                <p>トップ</p>
                <p class="descriptionXs">TOP</p>
              </a>
            </li>
            <li class="nav_item">
              <a href="">
                <p>私たちが大切にしていること</p>
                <p class="descriptionXs">Mission</p>
              </a>
            </li>
            <li class="nav_item">
              <a href="">
                <p>初めての方へ</p>
                <p class="descriptionXs">First</p>
              </a>
            </li>
            <li class="nav_item">
              <a href="">
                <p>スタッフ紹介</p>
                <p class="descriptionXs">Staff</p>
              </a>
            </li>
            <li class="nav_item">
              <a href="">
                <p>診療メニュー</p>
                <p class="descriptionXs">Menu</p>
              </a>
            </li>
            <li class="nav_item">
              <a href="">
                <p>院内紹介</p>
                <p class="descriptionXs">Clinic</p>
              </a>
            </li>
            <li class="nav_item">
              <a href="">
                <p>求人</p>
                <p class="descriptionXs">Recruit</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- nav_pc -->
    <!-- nav_tab_sp -->
    <div class="nav_tab_sp inner ">
      <div class="bg-primary test"></div>
    </div>
    <!-- nav_tab_sp -->
  </nav>
</section>

<?php  
get_footer();
?>