<?php
/*
Template Name: page-entry-form.php
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css">
  <title><?php wp_title ( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
  <?php get_template_part('stylesheet'); ?>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php get_template_part('analytics'); ?>
    <?php get_template_part('fb_sdk'); ?>
    <?php get_template_part('fb_audience'); ?>
    <?php wp_head(); ?>
  </head>
  <body style="padding-top:20px;">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWCDBS"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <div id="wrapper">
        <header>
        </header><!-- header -->
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 mt20">
              <div class="border-bold pad10 mb20">
                <h2 class="text-center bb pb15 bold">説明会申込み<small class="red bold">（1分で完了）</small></h2>
                <p class="responsive-text-left bold">プログラム参加者から体験談や本音を聞くことができます。お気軽にご参加ください。</p>
                <?php  if (have_posts()): while (have_posts()) : the_post(); ?>
                  <?php the_content(); ?>
                <?php endwhile; else: echo '記事はありません。'; endif;?>
              </div>
            </div>
          </div>
        </div>
        <footer>

        </footer><!-- footer -->
        <?php wp_footer();?>
      </div><!-- #wrapper -->
      <?php get_template_part('ga_remarketing'); ?>
      <script src="https://use.typekit.net/vtq4rbj.js"></script>
      <script>try{Typekit.load({ async: true });}catch(e){}</script>
      <!-- <script src="<?php bloginfo('template_directory'); ?>/js/navbar-lateral-slide-menu.js"></script> -->
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
    </html>