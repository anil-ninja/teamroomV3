<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title><?= $activity->getRefinedTitle() ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- for Google -->
  <meta name="description" content="<?= strip_tags($activity->getRefinedStmt()) ?>" />
  <meta name="keywords" content="<?= strip_tags($activity->getKeywords()) ?>" />
  <meta name="author" content="<?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?>" />
  <meta name="copyright" content="true" />
  <meta name="application-name" content="Article" />

  <!-- for Facebook -->          
  <meta property="og:title" content="<?= $activity->getRefinedTitle() ?>" />
  <meta name="og:author" content="<?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?>" />
  <meta property="og:type" content="article"/>
  
  <meta name="p:domain_verify" content="c336f4706953c5ce54aa851d2d3da4b5"/>
  <meta property="og:image" content='<?= $baseUrl ?><?= $activity->getImage() ?>' />
  <meta property="og:url" content="<?= $baseUrl ?>activity/<?= $activity->getId() ?>" />
  <meta property="og:image:type" content="image/jpeg" />

  <meta property="og:description" content="<?= strip_tags($activity->getRefinedStmt()) ?>" />

  <!-- for Twitter -->          
  <meta name="twitter:card" content="photo" />
  <meta name="twitter:site" content="@collap">
  <meta name="twitter:creator" content="@<?= $activity->getFirstName() ?><?= $activity->getLastName() ?>">
  <meta name="twitter:url" content="<?= $baseUrl ?>activity/<?= $activity->getId() ?>" />
  <meta name="twitter:title" content="<?= $activity->getRefinedTitle() ?>" />
  <meta name="twitter:description" content="<?= strip_tags($activity->getRefinedStmt()) ?>" />
  <meta name="twitter:image" content="<?= $baseUrl ?><?= $activity->getImage() ?>" />

  <?php include_once 'views/header/header.php'; ?>

</head>

<body>

  <div id="container" class="effect mainnav-lg">
        
    <?php require_once 'views/navbar/main_navbar.php'; ?>


    <div class="boxed">

      <?php if (isset($this->userId)) { ?>
        <div id="content-container">
      <?php } else  { ?>
        <div  style="margin-top: 84px;" >
      <?php } ?>


        <div class="row col-md-offset-1 col-sm-offset-1 col-lg-offset-1 col-xs-offset-1"  style="margin-top: 20px;">

          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-10 ">

            <div class="posts">

              <div class="post">

                <div class="post-aside" style="padding-top: 28px;">
                  <div class="post-date">
                    <?php $data = date_parse($activity->getCreationTime()); ?>
                    <span class="post-date-day"><?= $data["day"] ?></span>
                    <span class="post-date-month"><?= date("M", mktime(null, null, null, $data["month"])) ?></span>
                    <span class="post-date-year"><?= $data["year"] ?></span>
                  </div>

                  <a href="#comments" class="post-comment">
                    4
                  </a>
                </div> <!-- /.post-aside -->

                <div class="post-main">
                  <h3 class="post-title"><a href="#"><?= $activity->getRefinedTitle() ?></a></h3>
                  <h4 class="post-meta">Published by <a href="<?= $this -> baseUrl ?>profile/<?= $activity -> getUsername()?>" target="_blank"><?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?></a> in <a href="javascript:;">India</a></h4>
                  <?= $activity->getRefinedStmt() ?>
                  
                  <!-- <div class="post-content"> -->

                  <!-- </div> --> <!-- /.post-content -->

                </div> <!-- /.post-main -->

              </div> <!-- /.post --> 

            </div> <!-- /.posts -->

            <hr class="spacer-sm">

            <a id="comments"></a>
            <?php if($comments) {?>
            <div class="heading-block">
              <h3>Comments</h3>
            </div>
            <?php } ?>

            <ol class="comment-list">
              
              <li>
                <div class="comment" id="comment_box_<?= $activity->getId() ?>">
                  <?php foreach ($comments as $response) { ?>
                    <div class="comment-avatar">
                      <img alt="" src="<?= $baseUrl ?>uploads/profilePictures/<?= $response->getUsername() ?>.jpg" class="avatar">
                    </div> <!-- /.comment-avatar -->

                    <div class="comment-meta">

                      <span class="comment-author">
                        <a href="<?= $this -> baseUrl ?>profile/<?= $activity -> getUsername()?>" target="_blank" class="url">
                          <?= ucfirst($response->getFirstName()) ?> <?= ucfirst($response->getLastName()) ?>
                        </a>
                      </span>

                      <a href="javascript:;" class="comment-timestamp">
                        <?= date("F jS, Y",strtotime($response->getCreationTime())) ?>
                      </a>

                    </div> <!-- /.comment-meta -->

                    <div class="comment-body">
                      <p><?= $response->getStmt() ?></p>
                    </div> <!-- /.comment-body -->
                <?php } ?>
                </div> <!-- /.comment -->
              </li>
            
              <li>
                <?php 
                  include 'views/activity/activityComment.php';
                ?>
              </li>
            </ol>

            <hr class="spacer-md">

<!--             <div class="heading-block">
              <h3>Post a Comment</h3>
            </div>

            <form class="form form-horizontal">
              <div class="form-group">
                <div class="col-md-5 col-sm-12">
                  <label>Name: <span>*</span></label>
                  <input class="form-control" id="name" name="name" type="text" value="">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-5 col-sm-12">
                  <label>Email: <span>*</span></label>
                  <input class="form-control" type="email" id="email" name="email" value="">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8 col-sm-12">
                  <label>Message: <span>*</span></label>
                  <textarea class="form-control" id="text" name="text" rows="6" cols="40"></textarea>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8 col-sm-12">
                  <button class="btn btn-primary" type="submit">Submit Comment</button>
                </div>
              </div>

             
            </form> -->

          </div> <!-- /.col -->



          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10">

            <hr class="visible-xs">

            <hr class="spacer-sm">

            <h4>Most Popular Posts</h4>

            <ul class="blog-popular-posts">
              <?php foreach ($popPosts as $popPost) { ?>
              <li>
                <div class="recent-post-thumbnail">
                  <a href="<?= $baseUrl ?>activity/<?= $popPost->getId() ?>">
                    <img width="60" height="60" src="<?= $popPost->getImage() ?>" alt="">
                  </a>
                </div> <!-- /.recent-post-thumbnail -->

                <div class="recent-post-title">
                  <h4>
                    <a href="<?= $baseUrl ?>activity/<?= $popPost->getId() ?>"> 
                      <?= $popPost->getRefinedTitle() ?>
                    </a>
                  </h4>

                  <span class="recent-post-meta">
                    
                  </span> <!-- /.recent-post-meta -->
                </div> <!-- /.recent-post-title -->

              </li>

              <?php } ?>
            </ul>



            <hr class="spacer-sm">
            <hr class="spacer-xs">

            <h4>Recent Posts</h4>

            <ul class="fa-ul blog-ul">
              <?php foreach ($recPosts as $recPost) { ?>
              <li>
                <i class="fa-li fa fa-chevron-right"></i> 
                <a href="<?= $baseUrl ?>activity/<?= $recPost->getId() ?>">
                  <?= $recPost->getRefinedTitle() ?>
                </a>
              </li>
              <?php } ?>
            </ul>



            <hr class="spacer-sm">
            <hr class="spacer-xs">
            
            <h4>Most Popular Projects</h4>

            <ul class="fa-ul blog-ul">
              <?php foreach ($popProjects as $project) { ?>

              <li>
                  <i class="fa-li fa fa-chevron-right"></i> 
                  <a href="<?= $baseUrl ?>project/<?= $project->getId() ?>">
                    <?= $project->getProjectTitle() ?>
                  </a>
              </li>
              
              <?php } ?>
            </ul>

          </div> <!-- /.col -->

        </div> <!-- /.row -->
   
      </div> <!-- id Content-container div end -->
  
      <?php require_once 'views/sidebar/sidebar_button.php'; ?>

    
  
  <?php include_once 'views/footer/footer.php'; ?>


  </body>
</html>