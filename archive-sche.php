<?php
/*
Template Name: archive.php
*/
?>
<?php get_header(); ?>
<?php get_template_part('pankuzu'); ?>
<div id="sche">
  <div class="container">
    <div class="section">
      <h2 class="text-center bold">プログラム説明会</h2>
      <!--       <p class="responsive-text-left bold">「全国20数カ所での説明会」と「個別説明会」を開催しています。</p> -->
      <p class="responsive-text-left bold">過去の武者修行プログラム参加者の「生の声」である体験談やプログラムの魅力を聞くことができる説明会です。ちょっとだけ話を聞きたい方もお気軽にご参加ください。</p>
      <p class="text-center mt20 bold">ご参加希望の会場をご選択し、日程・会場住所をご確認頂きお申込みください</p>
      <div class="tab-content">
      </div>
      <ul class="nav nav-tabs pb10">
        <li class="sche-tab"><a data-toggle="tab" href="#home"><i class="fa fa-angle-double-right"></i>上野</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu13"><i class="fa fa-angle-double-right"></i>大阪</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu-othrer"><i class="fa fa-angle-double-right"></i>その他</a></li>
        <!-- <li class="sche-tab active"><a data-toggle="tab" href="#home"><i class="fa fa-angle-double-right"></i>早稲田</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu2"><i class="fa fa-angle-double-right"></i>三田</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu3"><i class="fa fa-angle-double-right"></i>八王子</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu4"><i class="fa fa-angle-double-right"></i>国分寺</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu5"><i class="fa fa-angle-double-right"></i>横浜</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu39"><i class="fa fa-angle-double-right"></i>埼玉</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu6"><i class="fa fa-angle-double-right"></i>千葉</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu32"><i class="fa fa-angle-double-right"></i>茨城</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu7"><i class="fa fa-angle-double-right"></i>栃木</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu8"><i class="fa fa-angle-double-right"></i>愛知</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu9"><i class="fa fa-angle-double-right"></i>三重</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu10"><i class="fa fa-angle-double-right"></i>静岡</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu26"><i class="fa fa-angle-double-right"></i>山梨</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu-toyama"><i class="fa fa-angle-double-right"></i>富山</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu11"><i class="fa fa-angle-double-right"></i>金沢</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu12"><i class="fa fa-angle-double-right"></i>福井</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu27"><i class="fa fa-angle-double-right"></i>広島</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu14"><i class="fa fa-angle-double-right"></i>京都</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu15"><i class="fa fa-angle-double-right"></i>神戸</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu-otsu"><i class="fa fa-angle-double-right"></i>滋賀</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu33"><i class="fa fa-angle-double-right"></i>鳥取</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu16"><i class="fa fa-angle-double-right"></i>島根</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu34"><i class="fa fa-angle-double-right"></i>山口</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu17"><i class="fa fa-angle-double-right"></i>愛媛</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu-tokushima"><i class="fa fa-angle-double-right"></i>徳島</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu18"><i class="fa fa-angle-double-right"></i>福岡</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu19"><i class="fa fa-angle-double-right"></i>大分</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu20"><i class="fa fa-angle-double-right"></i>鹿児島</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu21"><i class="fa fa-angle-double-right"></i>岩手</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu22"><i class="fa fa-angle-double-right"></i>札幌</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu41"><i class="fa fa-angle-double-right"></i>旭川</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu23"><i class="fa fa-angle-double-right"></i>青森</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu31"><i class="fa fa-angle-double-right"></i>山形</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu28"><i class="fa fa-angle-double-right"></i>仙台</a></li>
        <li class="sche-tab"><a data-toggle="tab" href="#menu24"><i class="fa fa-angle-double-right"></i>秋田</a></li>
        <li class="sche-tab w76"><a data-toggle="tab" href="#menu25"><i class="fa fa-angle-double-right"></i><span class="sche-small">個別説明会</span></a></li> -->
      </ul>
      <div class="tab-content">
        <script type="text/javascript">
          $(function() { $('.sche-detail').matchHeight(); });
        </script>
        <div id="home" class="tab-pane  fade in active">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-yushima" class="sche-detail">
                <p class="text-center sche-detail-title">上野</p>
                <?php $page = get_page_by_path('yushima',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu13" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-osaka" class="sche-detail">
                <p class="text-center sche-detail-title">大阪</p>
                <?php $page = get_page_by_path('osaka',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu-othrer" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-2 col-md-8 col-lg-offset-2 col-lg-8">
              <div id="area-waseda" class="sche-detail">
                <p class="text-center sche-detail-title">その他地域</p>
                <?php $page = get_page_by_path('2018summer',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <!--
        <div id="home" class="tab-pane fade in active">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-waseda" class="sche-detail">
                <p class="text-center sche-detail-title">早稲田</p>
                <?php $page = get_page_by_path('waseda',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu2" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-mita" class="sche-detail">
                <p class="text-center sche-detail-title">日吉</p>
                <?php $page = get_page_by_path('mita',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu3" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-wokyo" class="sche-detail">
                <p class="text-center sche-detail-title">八王子</p>
                <?php $page = get_page_by_path('wtokyo',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu4" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-kokubunji" class="sche-detail">
                <p class="text-center sche-detail-title">国分寺</p>
                <?php $page = get_page_by_path('kokubunji',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu5" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-yokohama" class="sche-detail">
                <p class="text-center sche-detail-title">横浜</p>
                <?php $page = get_page_by_path('yokohama',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu39" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-saitama" class="sche-detail">
                <p class="text-center sche-detail-title">埼玉</p>
                <?php $page = get_page_by_path('saitama',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu6" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-chiba" class="sche-detail">
                <p class="text-center sche-detail-title">千葉</p>
                <?php $page = get_page_by_path('chiba',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu32" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-chiba" class="sche-detail">
                <p class="text-center sche-detail-title">茨城</p>
                <?php $page = get_page_by_path('ibaraki',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu7" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-utsunomiya" class="sche-detail">
                <p class="text-center sche-detail-title">栃木</p>
                <?php $page = get_page_by_path('utsunomiya',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu8" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-nagoya" class="sche-detail">
                <p class="text-center sche-detail-title">愛知</p>
                <?php $page = get_page_by_path('nagoya',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu9" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-mie" class="sche-detail">
                <p class="text-center sche-detail-title">三重</p>
                <?php $page = get_page_by_path('mie',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu10" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-shizuoka" class="sche-detail">
                <p class="text-center sche-detail-title">静岡</p>
                <?php $page = get_page_by_path('shizuoka',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu26" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-shizuoka" class="sche-detail">
                <p class="text-center sche-detail-title">山梨</p>
                <?php $page = get_page_by_path('yamanashi',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu-toyama" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-toyama" class="sche-detail">
                <p class="text-center sche-detail-title">富山</p>
                <?php $page = get_page_by_path('toyama',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu11" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-kanazawa" class="sche-detail">
                <p class="text-center sche-detail-title">金沢</p>
                <?php $page = get_page_by_path('kanazawa',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu12" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-fukui" class="sche-detail">
                <p class="text-center sche-detail-title">福井</p>
                <?php $page = get_page_by_path('fukui',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>

        <div id="menu14" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-kyoto" class="sche-detail">
                <p class="text-center sche-detail-title">京都</p>
                <?php $page = get_page_by_path('kyoto',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu15" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-kobe" class="sche-detail">
                <p class="text-center sche-detail-title">神戸</p>
                <?php $page = get_page_by_path('kobe',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu-otsu" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-otsu" class="sche-detail">
                <p class="text-center sche-detail-title">滋賀</p>
                <?php $page = get_page_by_path('otsu',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu27" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-kobe" class="sche-detail">
                <p class="text-center sche-detail-title">広島</p>
                <?php $page = get_page_by_path('hiroshima',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu33" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-matsue" class="sche-detail">
                <p class="text-center sche-detail-title">鳥取</p>
                <?php $page = get_page_by_path('tottori',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu16" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-matsue" class="sche-detail">
                <p class="text-center sche-detail-title">島根</p>
                <?php $page = get_page_by_path('matsue',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu34" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-matsue" class="sche-detail">
                <p class="text-center sche-detail-title">山口</p>
                <?php $page = get_page_by_path('yamaguchi',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu17" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-matsuyama" class="sche-detail">
                <p class="text-center sche-detail-title">愛媛</p>
                <?php $page = get_page_by_path('matsuyama',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu-tokushima" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-tokushima" class="sche-detail">
                <p class="text-center sche-detail-title">徳島</p>
                <?php $page = get_page_by_path('tokushima',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu18" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-fukuoka" class="sche-detail">
                <p class="text-center sche-detail-title">福岡</p>
                <?php $page = get_page_by_path('fukuoka',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu19" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-apu" class="sche-detail">
                <p class="text-center sche-detail-title">大分</p>
                <?php $page = get_page_by_path('apu',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu20" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-kagoshima" class="sche-detail">
                <p class="text-center sche-detail-title">鹿児島</p>
                <?php $page = get_page_by_path('kagoshima',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu21" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-iwate" class="sche-detail">
                <p class="text-center sche-detail-title">岩手</p>
                <?php $page = get_page_by_path('morioka',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu22" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-sapporo" class="sche-detail">
                <p class="text-center sche-detail-title">札幌</p>
                <?php $page = get_page_by_path('sapporo',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu41" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-sapporo" class="sche-detail">
                <p class="text-center sche-detail-title">旭川</p>
                <?php $page = get_page_by_path('asahikawa',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu23" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-aomori" class="sche-detail">
                <p class="text-center sche-detail-title">青森</p>
                <?php $page = get_page_by_path('aomori',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu31" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-aomori" class="sche-detail">
                <p class="text-center sche-detail-title">山形</p>
                <?php $page = get_page_by_path('yamagata',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu28" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-aomori" class="sche-detail">
                <p class="text-center sche-detail-title">仙台</p>
                <?php $page = get_page_by_path('sendai',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu24" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6">
              <div id="area-akita" class="sche-detail">
                <p class="text-center sche-detail-title">秋田</p>
                <?php $page = get_page_by_path('akita',OBJECT,'sche'); echo $page->post_content; ?>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div>
        <div id="menu25" class="tab-pane fade">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-md-6 col-lg-6">
              <div id="area-kobetsu" class="sche-detail">
                <p class="text-center sche-detail-title">直接会って話を聞く</p>
                <p>説明会エントリー後に日程を調整して、直接お会いしてプログラムの説明を行います。</p>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-md-6 col-lg-6">
              <div id="area-online" class="sche-detail">
                <p class="text-center sche-detail-title">WEB電話で話を聞く</p>
                <p>地方在住の方や日程調整が難しい方は、WEB電話(SkypeやLINE)を使ってプログラムの説明を受けることができます。</p>
                <?php get_template_part('entry'); ?>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
<script>
  jQuery(function(){
  // ★　任意のズレ高さピクセル数を入力　↓
  var headerHight = 50;
   // #で始まるアンカーをクリックした場合に処理
   jQuery('a[href^=#area-]').click(function() {
    // スクロールの速度
    var speed = 400; // ミリ秒
    // アンカーの値取得
    var href= jQuery(this).attr("href");
    // 移動先を取得
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    // 移動先を数値で取得
    var position = target.offset().top-headerHight; // ※　-headerHightでズレの処理
    // スムーズスクロール
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
 });
</script>
<?php get_footer(); ?>