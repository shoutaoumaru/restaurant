<?php 
/* Template Name: menu
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>飲食店テンプレート1/MENU</title>
  <?php get_header(); ?>
</head>
<body>
  <div class="superwrapper animsition">
    <header id="header" class="header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a class="animsition-link" href="/">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class="logo__img">
          <a class="animsition-link" href="/">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/')); ?>"><span>TOP</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/concept')); ?>"><span>CONCEPT</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/gallery')); ?>"><span>GALLERY</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('access')); ?>"><span>ACCESS</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>NEWS</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a></li>
          <li><a class="net" target="_blank" href="https://beauty.hotpepper.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /#header -->
    <div class="menu-top">
      <div class="menu-top__wrapper child">
        <div class="menu-top__img">
          <h3 class="c-title clip-js2 left">
            <span class="num">03</span>
            <span class="txt">Menu</span>
          </h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/steak_1@pc.jpg" alt="food">
          <div class="menu-top__img__cover"></div>
        </div>
      </div>
    </div>
    <!-- /.menu-top -->
    <section class="menu-contents appear up">
      <h2 class="menu-title item">
        <span>Our Menu</span>
        <p>食の感動体験をテーマに、水々しい朝採れ野菜の料理や、90日熟成の神戸ビーフ、
          厳選の魚介をご提供します。</p>
      </h2>
      <div class="pdf-link">
    <a href="<?php echo get_template_directory_uri(); ?>/images/" target="_blank" rel="noopener noreferrer">PDFで見る</a>
  </div>
  <div class="menu-contents__list item">
    <div class="tab-panel">
      <!--tab-->
      <ul class="tab-group">
        <li class="tab tab-A is-active">Lunch</li>
        <li class="tab tab-B">Dinner</li>
        <li class="tab tab-C">Drink</li>
      </ul>
      <!--tab-contents-->
      <div class="panel-group">
        <div class="panel lunch is-show">
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Aランチ</p>
              <p class="price">¥1,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Bランチ</p>
              <p class="price">¥1,800</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Cランチ</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Dランチ</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Eランチ</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Fランチ</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Gランチ</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
        </div>
        <!-- panel-lunch END -->
        <div class="panel dinner">
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Aメニュー</p>
              <p class="price">¥1,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Bメニュー</p>
              <p class="price">¥1,800</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Cメニュー</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Dメニュー</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Eメニュー</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Fメニュー</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/pizza.jpg" alt="">
            </div>
            <div class="panel__txt">
              <p class="name">Gメニュー</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
        </div>
        <!-- panel-dinner END -->
        <div class="panel drink">
          <div class="panel__item">
            <div class="panel__txt">
              <p class="name">Aドリンク</p>
              <p class="price">¥1,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__txt">
              <p class="name">Bドリンク</p>
              <p class="price">¥1,800</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__txt">
              <p class="name">Cドリンク</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__txt">
              <p class="name">Dドリンク</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__txt">
              <p class="name">Eドリンク</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__txt">
              <p class="name">Fドリンク</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
          <div class="panel__item">
            <div class="panel__txt">
              <p class="name">Gドリンク</p>
              <p class="price">¥2,500</p>
            </div>
          </div>
        </div>
        <!-- panel-drink END -->
      </div>
    </div>
  </div>
  <p class="c-txt-xs">※上記以外にも旬のものを多数ご用意しております。</p>
    </section>
    <!-- /.menu-contents -->
    <footer class="footer">
      <div class="c-container">
        <div class="c-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/riv_logo-white.png" alt="">
        </div>

        <div class="footer__info">
          <ul class="footer__item c-txt-xs">
            <li class="nav-address">
              <p class="c-txt-xs">
                〒812-0041<br class="view-pc">
                福岡県福岡市博多区博多駅前<br class="view-pc">3-27-25,第二岡部ビル9F
              </p>
            </li>
            <li class="nav-tel">
              <p>TEL</p><a href="tel:092-686-7954"> 092-686-7954</a>
            </li>
            <li class="nav-time">
              <div class="head">ランチ</div>
              <div class="txt">11:00〜14:00</div>
            </li>
            <li class="nav-time">
              <div class="head">ディナー</div>
              <div class="txt">17:00〜22:00</div>
            </li>
            <li class="nav-date">
              <div class="head">定休日</div>
              <div class="txt">水曜日</div>
            </li>
          </ul>
        </div>
        <div class="copyright">
          © RivRound.inc
        </div>
      </div>
    </footer>
    <!-- /#footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">TOP</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/concept')); ?>">CONCEPT</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/gallery')); ?>">GALLERY</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>">MENU</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/access')); ?>">ACCESS</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">NEWS</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!------ /.mobile-menu ----->
  </div>
  <!-- .superwrapper -->
  <?php get_template_part('includes/c-footer'); ?>
</body>
</html>