<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/front-page.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/slick/slick-theme.css" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lib/slick/slick.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/humb.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/contact.js" type="module" ></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/devide-height.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/slick/slick.min.js"></script>
</head>
<?php wp_head(); ?>
<body id="l-body" data-tmpdir="<?php echo esc_url(get_template_directory_uri()); ?>/">
  <?php if (!is_mobile()): ?>
	<div class="header">
		<div class="container">
			<h1 class="header__title">Shuta Morishita<br>Portfolio</h1>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item"><a href="#career-area" class="header__nav-link">経歴</a></li>
          <li class="header__nav-item"><a href="#skil-area" class="header__nav-link">スキル</a></li>
          <li class="header__nav-item"><a href="#work-cnt-area" class="header__nav-link">お仕事内容</a></li>
          <li class="header__nav-item"><a href="#work-area" class="header__nav-link">作品</a></li>
        </ul>
      </nav>
			<a href="#contact-area" class="header__contact-btn">お問い合わせ</a>
		</div>
	</div>
  <?php else: ?>
  <div class="header-sp">
    <div class="container">
      <h1 class="header-sp__title">Shuta Morishita<br><span>Potfolio</span></h1>
      <div class="header-sp__humb">
        <div class="header-sp__humb-line"></div>
        <div class="header-sp__humb-line"></div>
        <div class="header-sp__humb-line"></div>
      </div>
      <nav class="header-sp__nav">
        <ul class="header-sp__nav-list">
          <li class="header-sp__nav-item"><a href="#career-area" class="header-sp__nav-link">経歴</a></li>
          <li class="header-sp__nav-item"><a href="#skil-area" class="header-sp__nav-link">スキル</a></li>
          <li class="header-sp__nav-item"><a href="#work-cnt-area" class="header-sp__nav-link">仕事内容</a></li>
          <li class="header-sp__nav-item"><a href="#work-area" class="header-sp__nav-link">作品</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <?php endif; ?>