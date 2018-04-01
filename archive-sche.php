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
			<h2 class="text-center bold">全国34カ所で説明会を開催</h2>
			<p class="responsive-text-left bold">ご参加希望の会場をご選択し、日程・会場住所をご確認頂きお申込みください</p>
			<div class="tab-content mt20">
			</div>
			<ul class="nav nav-tabs pb10">
				<li class="sche-tab active"><a data-toggle="tab" href="#home"><i class="fa fa-angle-double-right"></i>早稲田</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#yushima"><i class="fa fa-angle-double-right"></i>上野</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#mita"><i class="fa fa-angle-double-right"></i>三田</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#hiyoshi"><i class="fa fa-angle-double-right"></i>日吉</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#wtokyo"><i class="fa fa-angle-double-right"></i>八王子</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#kokubunji"><i class="fa fa-angle-double-right"></i>国分寺</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#yokohama"><i class="fa fa-angle-double-right"></i>横浜</a></li>

				<li class="sche-tab"><a data-toggle="tab" href="#ibaraki"><i class="fa fa-angle-double-right"></i>茨城</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#utsunomiya"><i class="fa fa-angle-double-right"></i>栃木</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#saitama"><i class="fa fa-angle-double-right"></i>埼玉</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#chiba"><i class="fa fa-angle-double-right"></i>千葉</a></li>

				<li class="sche-tab"><a data-toggle="tab" href="#toyama"><i class="fa fa-angle-double-right"></i>富山</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#kanazawa"><i class="fa fa-angle-double-right"></i>金沢</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#fukui"><i class="fa fa-angle-double-right"></i>福井</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#yamanashi"><i class="fa fa-angle-double-right"></i>山梨</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#shizuoka"><i class="fa fa-angle-double-right"></i>静岡</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#nagoya"><i class="fa fa-angle-double-right"></i>愛知</a></li>

				<!-- <li class="sche-tab"><a data-toggle="tab" href="#mie"><i class="fa fa-angle-double-right"></i>三重</a></li> -->
				<li class="sche-tab"><a data-toggle="tab" href="#otsu"><i class="fa fa-angle-double-right"></i>滋賀</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#kyoto"><i class="fa fa-angle-double-right"></i>京都</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#osaka"><i class="fa fa-angle-double-right"></i>大阪</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#kobe"><i class="fa fa-angle-double-right"></i>神戸</a></li>

				<li class="sche-tab"><a data-toggle="tab" href="#sapporo"><i class="fa fa-angle-double-right"></i>札幌</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#asahikawa"><i class="fa fa-angle-double-right"></i>旭川</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#aomori"><i class="fa fa-angle-double-right"></i>青森</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#morioka"><i class="fa fa-angle-double-right"></i>岩手</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#sendai"><i class="fa fa-angle-double-right"></i>仙台</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#aiu"><i class="fa fa-angle-double-right"></i>秋田</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#yamagata"><i class="fa fa-angle-double-right"></i>山形</a></li>

				<li class="sche-tab"><a data-toggle="tab" href="#tottori"><i class="fa fa-angle-double-right"></i>鳥取</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#matsue"><i class="fa fa-angle-double-right"></i>島根</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#hiroshima"><i class="fa fa-angle-double-right"></i>広島</a></li>
				<!-- <li class="sche-tab"><a data-toggle="tab" href="#yamaguchi"><i class="fa fa-angle-double-right"></i>山口</a></li> -->

				<!-- <li class="sche-tab"><a data-toggle="tab" href="#tokushima"><i class="fa fa-angle-double-right"></i>徳島</a></li> -->
				<li class="sche-tab"><a data-toggle="tab" href="#matsuyama"><i class="fa fa-angle-double-right"></i>愛媛</a></li>

				<li class="sche-tab"><a data-toggle="tab" href="#fukuoka"><i class="fa fa-angle-double-right"></i>福岡</a></li>        
				<li class="sche-tab"><a data-toggle="tab" href="#apu"><i class="fa fa-angle-double-right"></i>大分</a></li>
				<li class="sche-tab"><a data-toggle="tab" href="#kagoshima"><i class="fa fa-angle-double-right"></i>鹿児島</a></li>

				<li class="sche-tab"><a data-toggle="tab" href="#kobetsu"><i class="fa fa-angle-double-right"></i><span class="sche-small">個別説明会</span></a></li>
			</ul>
			<div class="tab-content">
				<script type="text/javascript">
					$(function() { $('.sche-detail').matchHeight(); });
				</script>
				<div id="home" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade in active">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('waseda',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('waseda',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('waseda',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="menu-othrer" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('2018summer',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('2018summer',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('2018summer',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="aiu" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('aiu',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('aiu',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('aiu',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="aomori" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('aomori',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('aomori',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('aomori',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="apu" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('apu',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('apu',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('apu',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="asahikawa" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('asahikawa',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('asahikawa',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('asahikawa',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="chiba" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('chiba',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('chiba',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('chiba',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="fukui" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('fukui',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('fukui',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('fukui',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="fukuoka" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('fukuoka',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('fukuoka',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('fukuoka',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="hiroshima" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('hiroshima',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('hiroshima',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('hiroshima',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="ibaraki" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('ibaraki',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('ibaraki',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('ibaraki',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="kagoshima" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('kagoshima',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('kagoshima',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('kagoshima',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="kanazawa" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('kanazawa',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('kanazawa',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('kanazawa',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="kobe" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('kobe',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('kobe',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('kobe',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="kokubunji" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('kokubunji',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('kokubunji',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('kokubunji',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="kyoto" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('kyoto',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('kyoto',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('kyoto',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="matsue" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('matsue',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('matsue',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('matsue',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="matsuyama" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('matsuyama',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('matsuyama',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('matsuyama',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="mie" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('mie',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('mie',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('mie',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="mita" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('mita',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('mita',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('mita',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="hiyoshi" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('hiyoshi',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('hiyoshi',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('hiyoshi',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="morioka" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('morioka',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('morioka',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('morioka',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="nagoya" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('nagoya',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('nagoya',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('nagoya',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="osaka" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('osaka',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('osaka',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('osaka',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="otsu" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('otsu',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('otsu',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('otsu',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="saitama" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('saitama',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('saitama',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('saitama',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="sapporo" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('sapporo',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('sapporo',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('sapporo',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="sendai" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('sendai',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('sendai',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('sendai',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="shizuoka" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('shizuoka',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('shizuoka',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('shizuoka',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="tokushima" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('tokushima',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('tokushima',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('tokushima',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="tottori" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('tottori',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('tottori',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('tottori',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="toyama" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('toyama',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('toyama',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('toyama',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="utsunomiya" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('utsunomiya',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('utsunomiya',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('utsunomiya',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="wtokyo" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('wtokyo',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('wtokyo',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('wtokyo',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="yamagata" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('yamagata',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('yamagata',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('yamagata',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="yamaguchi" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('yamaguchi',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('yamaguchi',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('yamaguchi',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="yamanashi" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('yamanashi',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('yamanashi',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('yamanashi',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="yokohama" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('yokohama',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('yokohama',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('yokohama',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="yushima" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title"><?php $page = get_page_by_path('yushima',OBJECT,'sche'); echo $page->post_title; ?>会場</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<?php $page = get_page_by_path('yushima',OBJECT,'sche'); echo $page->post_content; ?>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<?php $page = get_page_by_path('yushima',OBJECT,'sche'); echo nl2br( get_post_meta($page->ID, 'wpcf-place-info', true)); ?>
						</div>
					</div>
				</div>
				<div id="kobetsu" class="col-xs-12 col-md-12 col-md-8 col-lg-8 sche-detail tab-pane fade">
					<p class="text-center sche-detail-title">説明会日程</p>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-md-5 col-lg-5">
							<h2>説明会日程</h2>
							<p>お申込み後に日程を調整して、直接お会いするか、または、WEB電話(SkypeやLINE)での説明を行います。</p>
						</div>
						<div class="col-xs-12 col-md-12 col-md-7 col-lg-7">
							<h2>会場詳細</h2>
							<p>会場は個別に調整して実施しております。説明会のご予約後に担当者よりご連絡をいたします。</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-12 col-md-4 col-lg-4 sche-detail mb20">
					<p class="text-center sche-detail-title">説明会のご予約</p>
					<div class="bg-gray pad5">
						<p class="bold">過去の参加者から直接プログラム内容や体験談が聞ける説明会に参加しませんか？</p>
						<ul>
							<li class="bold">・過去<span class="red">2,021</span>名が参加</li>
							<li class="bold">・全国各地の大学生が参加</li>
							<li class="bold">・英語力は完全不問</li>
						</ul>
						<div class="text-center mt20 mb20 entry-button">
							<a class="btn btn-default bold btn-block" href="/entry/" title="説明会の詳細はこちら">説明会に申し込む</a>
						</div>
					</div>
				</div>
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