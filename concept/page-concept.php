<?php 
/* Template Name: concept
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>飲食店テンプレート1/CONCEPT</title>
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
              <a class="pc-nav-link animsition-link" href="/"><span>TOP</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/gallery')); ?>"><span>GALLERY</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/menu')); ?>"><span>MENU</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/access')); ?>"><span>ACCESS</span></a>
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
    <div class="cp-top">
      <div class="cp-top__wrapper">
        <div class="cp-top__img">
          <h3 class="c-title clip-js2 left">
            <span class="num">01</span>
            <span class="txt">Concept</span>
          </h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/salad_1@pc.jpg" alt="">
        </div>
        <div class="c-txtarea">
          <p class="ja">90日熟成の神戸ビーフ、朝採れ野菜、地物の新鮮な魚介。とことん厳選した素材にこだわり、極上な「食の体験」をお手軽に。</p>
        </div>
      </div>
    </div>
    <!-- /.cp-top -->
    <section class="cp-speciality">
      <div class="cp-speciality__container">
        <h2 class="cp-title clip-js2 left">Our Speciality</h2>
        <div class="cp-speciality__list appear up">
          <div class="cp-speciality__item add item">
            <img class="cp-speciality__img" src="<?php echo get_template_directory_uri(); ?>/images/home/steak_3@pc.jpg" alt="">
            <div class="cp-speciality__txtarea add">
              <h3 class="cp-speciality__subtit">
                厳選素材のうまみを<br class="view-pc">引き出すこと
              </h3>
              <p class="cp-speciality__txt">
                90日熟成の和牛をはじめ、厳選した食材に徹底的にこだわり、「食の感動体験」をテーマに、食材そのもののうまみを活かしたメニューを提供してます。
              </p>
            </div>
          </div>
          <div class="cp-speciality__item even item">
            <img class="cp-speciality__img" src="<?php echo get_template_directory_uri(); ?>/images/home/vegetables_1@pc.jpg" alt="">
            <div class="cp-speciality__txtarea even">
              <h3 class="cp-speciality__subtit">
                朝採れの新鮮な<br class="view-pc">オーガニック野菜を使用
              </h3>
              <p class="cp-speciality__txt">
                朝採れの有機野菜は、味がぎゅっと凝縮され、生命力に満ちあふれています。農薬や化学肥料を一切使用しないのは、安心安全を超えた理由からなのです。。
              </p>
            </div>
          </div>
          <div class="cp-speciality__item add item">
            <img class="cp-speciality__img" src="<?php echo get_template_directory_uri(); ?>/images/home/spice_1@pc.jpg" alt="">
            <div class="cp-speciality__txtarea add">
              <h3 class="cp-speciality__subtit">
                味が何層にもふくらむ自然<br class="view-pc">調味料を
              </h3>
              <p class="cp-speciality__txt">
                発酵の力を活かした味噌や醤油など、添加物を含まない自然のままの調味料にこだわっています。シンプルな料理だからこそ、調味料は本物を。風味が増すことはもちろん、体にもやさしいのです。
              </p>
            </div>
          </div>
          <div class="cp-speciality__item even item">
            <img class="cp-speciality__img" src="<?php echo get_template_directory_uri(); ?>/images/home/ocean_2.jpg" alt="">
            <div class="cp-speciality__txtarea even">
              <h3 class="cp-speciality__subtit">
                四季の表情豊かな<br class="view-pc">絶景に囲まれて
              </h3>
              <p class="cp-speciality__txt">
                まわりに広がるのは、壮大な大自然。非日常を味わえるような空間では、差し込む光の表情までもが刻一刻と変化していきます。四季の美しさを全身で感じながら、旬の味をご堪能ください。
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.cp-speciality -->
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