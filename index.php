<!doctype html>
<html lang="ja">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <title><?php wp_title ( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="bg-light">
    <div class="container mb-3">
      <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">海外ビジネス武者修行プログラム</span>
      </nav>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-8 col-xl-8 col-lg-8 col-xl-8">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else: echo '記事はありません。'; endif; ?>
      </div>
      <div class="col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4 col-xl-4"></div>
    </div>
  </div>
  <footer class="bg-light pt-5 pb-5">
    <div class="container">
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>