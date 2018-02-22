<?php include_once ('classes/Helper.class.php'); ?>
<?php include_once ('classes/Review.class.php'); ?>

<?php $reviews = new Review(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Guestbook</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/fonts.css" rel="stylesheet">
    <link href="assets/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4">
            <a class="blog-header-logo text-dark" href="index.php">Guestbook</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-sm btn-outline-secondary" href="review.php">Leave a review</a>
          </div>
        </div>
        <hr>
      </header>

      <div class="row mb-2">
        <?php foreach($reviews->getFeatured() as $review): ?>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">
                  <?php echo $review->f_name; ?>
                  <?php echo $review->l_name ?>
              </strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?php echo $review->email; ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo Helper::format_date($review->date); ?></div>
              <p class="card-text mb-auto">
                  <?php echo Helper::str_limit($review->review, 150); ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block"  alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3csvg width='400' height='400' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400' %3e%3crect x='0' y='0' width='120' height='120' fill='black' opacity='1'%3e%3c/rect%3e%3ctext x='100' y='100' font-family='Verdana' font-size='35' fill='red'%3eTekstukas%3c/text%3e%3c/svg%3e" data-holder-rendered="true">
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Guestbook reviews
          </h3>

          <?php foreach($reviews->getNonFeatured() as $review): ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo Helper::str_limit($review->review, 25); ?></h2>
            <p class="blog-post-meta"><?php echo Helper::format_date($review->date); ?> by <a href="#"><?php echo $review->f_name . ' ' . $review->l_name; ?> (<?php echo $review->email; ?>)</a></p>

            <p><?php echo $review->review; ?></p>
            <hr>
          </div><!-- /.blog-post -->
          <?php endforeach; ?>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">This is a guestbook of my website, it's really cool.</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="assets/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>


<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>
</body>
</html>
