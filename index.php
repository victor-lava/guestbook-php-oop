<?php include_once ('classes/Helper.class.php'); ?>
<?php include_once ('classes/Review.class.php'); ?>
<?php $reviews = new Review(); ?>

<!--  <html> -->
<?php include_once ('partials/head.php'); ?>
  <body>

    <div class="container">

      <?php include_once ('partials/header.php'); ?>

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
                <a class="text-dark" href="#"><?php echo Helper::str_limit($review->review, 18); ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo Helper::format_date($review->date); ?></div>
              <p class="card-text mb-auto">
                  <?php echo Helper::str_limit($review->review, 150); ?>
              </p>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block"  alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_161be3054cb%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_161be3054cb%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2255.890625%22%20y%3D%22130.7234375%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
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

          <?php include_once ('partials/about.php'); ?>

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
<?php include_once ('partials/footer.php'); ?>
