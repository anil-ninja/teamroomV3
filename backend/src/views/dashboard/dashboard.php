 
  

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Homepage &middot; Welcome to Collap</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="collap com">
  <meta name="description" content="Collap is a powerful online platform which enables you to take a dig at problems, big or small, and collaborate with like minded people to make the world a better place. Identify any problem you want solved and let the world know about it. Assemble your team and have a go at it. Interested Collapers can join your quest and contribute which ever way they can. Collap provides you a wide range of helpful tools which enable hassle-free collaboration. Create and manage projects and be in control with our Project Dashboard all through the process. Share ideas freely and come up with innovative solutions. Make your realm private and work on that secret project you’ve long been planning. Participate in projects and upgrade your Level. Earn a special place in Collap for each incremental step. Sharpen your skills while lending them to do good. Challenges to solve your technical problems and help change the world! . Meet people,  allows everybody to share their ideas, views, challenges and achievements with the like minded for mutual benefits. In this collap v1 release, we are going to limit to some functionality due to technically liabilities and available resources.">
  <meta name="keywords" content="Challenge, Project, Problem solving, problem, article, collaborate, collaboration, digitalCollaboration">


  <?php require_once 'views/header/header.php'; ?>

</head>

  <body>

    <div id="container" class="effect mainnav-lg">
        
      <?php require_once 'views/navbar/main_navbar.php'; ?>


      <div class="boxed">


        <div id="content-container">

          <!--   <hr class="spacer-sm"> -->
            
            <div class="row" style="margin-top: 20px;">

              <div class="col-sm-12 col-md-8 col-md-offset-1">

                <h3 class="title">Post to Collap</h3>
              <!-- Post to collap starts -->

                <div class="share-widget clearfix">
                  
                  <form id="postActivity" action="<?= $baseUrl ?>postActivity" class="form-horizontal" method="post" onSubmit="return (validatePostActivity());">

                    <div class="share-widget">
                      <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                    </div>
                    <br />

                    <textarea class="form-control share-widget-textarea" name ="description" id = "description" rows="3" placeholder="Share what you've been up to..." tabindex="1"></textarea>

                    <div class="share-widget-actions">
                      <div class="share-widget-types pull-left">
                        
                        <div class="col-md-6" style="margin-top: 9px;">
                          <label class="form-radio form-normal active form-inline">
                            <input type="radio" checked="" name="activity" id="activity_type" value="1"> Challenge 
                          </label>

                          <label class="form-radio form-normal">
                            <input type="radio" name="activity" id="activity_type" value="7"> Article 
                          </label>
                        
                          <label class="form-radio form-normal">
                            <input type="radio" name="activity" id="activity_type" value="4"> Idea
                          </label>
                        </div>
                        
                        <div class="col-md-6">
                          <input type="file" name="file" id="file" class="btn btn-default btn-file pull-right">
                        </div>
                     
                      </div>

                      <div class="pull-right">
                        <button type="submit" class="btn btn-primary btn-labeled fa fa-send fa-lg" tabindex="2">Post</a>
                      </div>
                    </div> <!-- /.share-widget-actions -->
                  
                  </form>
                
                </div> <!-- /.share-widget -->


              <!-- /.Activities-block -->
                <div class="activities-start">
                
                  <div class="post-title">
                      <h3>
                        Activities
                      </h3>
                  </div> <!-- /.heading-block -->
                  <hr>            
                  <hr class="spacer-sm">


                  <div class="activity-1" id="panel-cont">

                    <?php foreach ($top10Activities as $activity) { ?>

                      <div class="post">
                        <div class="post-aside" style="padding-top: 28px;">
                          <div class="post-date">
                            <?php $data = date_parse($activity->getCreationTime()); ?>
                            <span class="post-date-day"><?= $data["day"] ?></span>
                            <span class="post-date-month"><?= date("M", mktime(null, null, null, $data["month"])) ?></span>
                            <span class="post-date-year"><?= $data["year"] ?></span>
                          </div>
                        </div> <!-- /.post-aside -->
                      
                        <div class="post-main">
                          <h4 class="post-title"><?= $activity->getRefinedTitle() ?></h4>
                          <?php dropDown_comment(8, 7, 9); ?>
                          <h5 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                            
                        
                          <div class="post-content">
                            <p> 
                              <?= $activity->getRefinedStmt() ?>
                            </p>
                          </div>

                          <ol class="comment-list">
                            
                            <li>
                              <div class="comment">
                                
                                <?php foreach ($activity -> getResponses() as $response) { ?>
                                  
                                  <div class="comment-avatar">
                                    <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" style="width: 44px; height: 44px;" class="avatar">
                                  </div> <!-- /.comment-avatar -->

                                  <div class="comment-meta">
                                    <p> <?= $response -> getStmt() ?> </p>
                                  </div>
                                
                                <?php } ?>
                              
                              </div>
                            </li>
                            
                            <li>
                              <?php 
                                $img_url = "$baseUrl"."/static/imgs/rajnish.jpg";
                                postComment( $img_url , 'dashboard/article/comment', 'comment_to_article' , 'comment_article');
                              ?>
                            </li>
                          
                          </ol>
                        </div>
                        <hr>
                        <hr class="spacer-sm">
                      </div>

                    <?php } ?>
                    
                 
                  </div>
                </div>
              </div>
            </div>
        
        <?php require_once 'views/sidebar/sidebar_button.php'; ?>
        <?php require_once 'views/footer/footer.php'; ?>
        
        <script src="<?= $baseUrl ?>static/js/genericEmptyFieldValidator.js"></script>

        <script type="text/javascript">


        function postActivity(){
          var dataString = "";
          $.each(fields, function( index, value ) {
              console.log(value);
              
              dataString = "title=" + $('#'+value).val() + "&description=" + $('#'+value).val() + "activity_type=" + $('#'+value).val() ;
              
          });

         $.ajax({
                type: "POST",
                url: "<?= $baseUrl ?>" + "setting/postActivity",
                data: dataString,
                cache: false,
                success: function(result){
                  $.niftyNoty({ 
                    type:"success",
                    icon:"fa fa-check fa-lg",
                    title:"Post Activity",
                    message:result,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                },
                 error: function(result){
                  console.log(result);
                  $.niftyNoty({ 
                    type:"danger",
                    icon:"fa fa-check fa-lg",
                    title:"Post Activity",
                    message:result.responseText,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                }

              });

      }
          function validatePostActivity(){
            fields = ["title","description","activity_type"];
            if (genericEmptyFieldValidator(fields)) {
              postActivity(fields);
            }
          }
        </script> 

  </body>
</html>