<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Homepage &middot; Welcome to Collap</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php require_once 'views/header/header.php'; ?>

</head>

  <body>

    <div id="container" class="effect mainnav-lg">
        
      <?php require_once 'views/navbar/main_navbar.php'; ?>


      <div class="boxed">


        <div id="content-container">
            
            <div class="row">

              <div class="col-sm-12 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">


                <!--Profile Heading-->
              <!--===================================================-->
              <div class="panel">
                <div class="panel-bg-cover">
                  <img class="img-responsive" src="<?= $baseUrl ?>static/img/blog/blog-post-2.jpg" alt="Image">
                </div>
                <div class="panel-media panel-media-heading" style="padding-left: 65%;">
                  
                      <button class="btn btn-success btn-labeled fa fa-plus" style="margin-right: 5px;"> JOIN </button>
                      <button class="btn btn-default btn-labeled fa fa-envelope"> MESSAGE </button>
                </div>
              </div>

                 <!--Panel with Tabs-->
                  <!--===================================================-->
                  <div class="panel">
              
                    <!--Panel heading-->
                    <div class="panel-heading">
                      <div class="panel-control">
                        <ul class="nav nav-tabs">
                          <li><a href="#tabs-create-project" data-toggle="tab">Create Project</a></li>
                          <li><a href="#tabs-post" data-toggle="tab">Post Otgoings</a></li>
                          <li class="active"><a href="#tabs-overview" data-toggle="tab">Overview</a></li>
                          <li><a href="#tabs-dashboard" data-toggle="tab">Dashboard</a></li>
                          <li><a href="#tabs-teams" data-toggle="tab">Teams</a></li>
                          <li><a href="#tabs-activities" data-toggle="tab">Activities</a></li>
                        </ul>
                      </div>
                      <h3 class="panel-title">Project Detail</h3>
                    </div>
              
                    <!--Panel body-->
                    <div class="panel-body">
                      <div class="tab-content">
                        
                        <div class="tab-pane fade" id="tabs-create-project">
                          <!-- Create Project Form -->
                          <div class="share-widget clearfix">

                            <form id="create_project" class="form-horizontal" action="#" method="post">

                              <div class="share-widget">
                                <input type="text" class="form-control" name="title" placeholder="Title">
                              </div>
                              <br />

                              <textarea class="form-control share-widget-textarea" name = "description" rows="3" placeholder="Share what you've been up to..." tabindex="1">
                                
                              </textarea>

                              <div class="share-widget-actions">
                                <div class="share-widget-types pull-left">
                                  <input type="file" name="file" class="btn btn-default btn-file" value="Browse">
                                </div>  

                                <div class="pull-right">
                                  <a class="btn btn-primary btn-labeled fa fa-send fa-lg" tabindex="2">Post</a>
                                </div>
                              </div>
                            </form>
                            
                            <hr>
                            <!-- Create Project Form Ends-->
                          </div>

                        </div>
                          
                        <div class="tab-pane fade" id="tabs-post">
                          
                          <!-- Post for project starts -->

                            <div class="share-widget clearfix">
                              
                              <form id="post_to_project" class="form-horizontal" action="#" method="post" onsubmit="return selectType()">

                                <div class="share-widget">
                                  <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                <br />

                                <textarea class="form-control share-widget-textarea" name = "description" rows="3" placeholder="Share what you've been up to..." tabindex="1">
                                  
                                </textarea>

                                <div class="share-widget-actions">
                                  <div class="share-widget-types pull-left">
                                    
                                    <div class="col-md-6" style="margin-top: 9px;">
                                      <label class="form-radio form-normal active form-inline">
                                        <input type="radio" checked="" name="project_activity" id ="challenge" value="Challenge"> Challenge 
                                      </label>

                                      <label class="form-radio form-normal">
                                        <input type="radio" name="project_activity" id = "notes" value="Notes"> Notes 
                                      </label>
                                    
                                      <label class="form-radio form-normal">
                                        <input type="radio" name="project_activity" id = "task_select" value="Task" > Task
                                      </label>
                                    </div>
                                    
                                    <div class="col-md-6">
                                      <input type="file" name="file" class="btn btn-default btn-file pull-right">
                                    </div>
                                    
                                  </div>

                                  <div class="pull-right">
                                    <a class="btn btn-primary btn-labeled fa fa-send fa-lg" tabindex="2">Post</a>
                                  </div>
                                </div> <!-- /.share-widget-actions -->
                              
                              </form>

                              <div id='assign_task'>
                                <div class="form-group pad-btm">
                                  <label class="col-lg-3 control-label">To Whom: </label>
                                  <div class="col-lg-7">

                                    <select class="selectpicker" data-live-search="true" data-width="100%">
                                      <option>Self</option>
                                      <option>Rahul</option>
                                      <option>Rajnsih</option>
                                      <option>Anil</option>
                                      <option>Dileep</option>
                                      <option>Neeraj</option>
                                      <option>Rutwik</option>
                                      <option>Abu</option>
                                      <option>Video</option>
                                    </select>
                                  </div>
                                </div>
                              </div> <!-- /.assign task -->

                            </div> <!-- /.share-widget -->
                          
                        <!-- Post to collap ends -->

                        </div>

                        <div class="tab-pane fade active in" id="tabs-overview">
                          <h4 class="text-thin">Description</h4>
                          <p>User experience design (UXD or UED) is the process of enhancing user satisfaction by improving the usability, accessibility, and pleasure provided in the interaction between the user and the product.[1] User experience design encompasses traditional human–computer interaction (HCI) design, and extends it by addressing all aspects of a product or service as perceived by user</p>
                        </div>

                        <div class="tab-pane fade" id="tabs-dashboard">
                          <h4 class="text-thin">Dashboard</h4>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>

                        <div class="tab-pane fade" id="tabs-teams">
                          
                          
                          <!--Teams Names Start here-->
                          <!--===================================================-->
                          <div class="row">
                            <h4>Teams</h4>
                     
                            <div class="col-md-6 col-lg-3">
                              <div class="panel media pad-all" style="background-color: #E4EDF0;">
                                <div class="media-body">
                                  <p class="text-2x mar-no text-thin">543</p>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-3">
                              <div class="panel media pad-all" style="background-color: #E4EDF0;">
                                <div class="media-body">
                                  <p class="text-2x mar-no text-thin">34</p>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-3">
                              <div class="panel media pad-all" style="background-color: #E4EDF0;">
                                <div class="media-body">
                                  <p class="text-2x mar-no text-thin">654</p>
                                </div>
                              </div>
                            </div>                            

                            <div class="col-md-6 col-lg-3">
                              <div class="panel media pad-all" style="background-color: #E4EDF0;">
                                <div class="media-body">
                                  <p class="text-2x mar-no text-thin">543</p>
                                </div>
                              </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-3">
                              <div class="panel media pad-all" style="background-color: #E4EDF0;">
                                <div class="media-body">
                                  <p class="text-2x mar-no text-thin">34</p>
                                </div>
                              </div>
                            </div>
                            
                          </div>
                          <!--===================================================-->
                          <!--Team Names Ends-->

                          <!--Team Members starts-->
                          <!--===================================================-->

                          <div class="row">

                            <h4> Team Members </h4>
                            <div class="col-md-6 col-lg-4 col-sm-6">                                                    
                              <div class="panel media middle" style="background-color: #E4EDF0;">
                                <div class="media-left bg-primary pad-all">
                                  <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" class="avatar" width="40" height="40">
                                </div>
                                <div class="media-body pad-lft">
                                  <a href="#" >Rajnish Kumar</a>
                                  <p class="text-muted">Dabbling</p>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-6">                                                    
                              <div class="panel media middle" style="background-color: #E4EDF0;">
                                <div class="media-left bg-primary pad-all">
                                  <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" class="avatar" width="40" height="40">
                                </div>
                                <div class="media-body pad-lft">
                                  <a href="#" >Rajnish Kumar</a>
                                  <p class="text-muted">Dabbling</p>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-6">                                                    
                              <div class="panel media middle" style="background-color: #E4EDF0;">
                                <div class="media-left bg-primary pad-all">
                                  <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" class="avatar" width="40" height="40">
                                </div>
                                <div class="media-body pad-lft">
                                  <a href="#" >Rajnish Kumar</a>
                                  <p class="text-muted">Dabbling</p>
                                </div>
                              </div>
                            </div>
                     

                            <div class="col-md-6 col-lg-4 col-sm-6">                                                    
                              <div class="panel media middle" style="background-color: #E4EDF0;">
                                <div class="media-left bg-primary pad-all">
                                  <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" class="avatar" width="40" height="40">
                                </div>
                                <div class="media-body pad-lft">
                                  <a href="#" >Rajnish Kumar</a>
                                  <p class="text-muted">Dabbling</p>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6 col-lg-4 col-sm-6">                                                    
                              <div class="panel media middle" style="background-color: #E4EDF0;">
                                <div class="media-left bg-primary pad-all">
                                  <img alt="" src="<?= $baseUrl ?>static/imgs/rajnish.jpg" class="avatar" width="40" height="40">
                                </div>
                                <div class="media-body pad-lft">
                                  <a href="#" >Rajnish Kumar</a>
                                  <p class="text-muted">Dabbling</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--===================================================-->
                          <!--Team Members Ends-->

                          <!--Team Dashboard starts-->
                          <!--===================================================-->

                          <div class="row">
                            <h4> Open Challenges </h4>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                              
                              <div class="panel panel-success panel-colorful text-center">
                                <div class="panel-body">
                                  <?= gettimeofday() ?>
                                </div>
                                <div class="bg-light pad-ver">
                                  <h4 class="mar-no text-thin"><i class="fa fa-hdd-o"></i>Challenge/Task Title</h4>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-4 col-lg-4 col-sm-6">
                              
                              <div class="panel panel-success panel-colorful text-center">
                                <div class="panel-body">
                                  <?= gettimeofday() ?>
                                </div>
                                <div class="bg-light pad-ver">
                                  <h4 class="mar-no text-thin"><i class="fa fa-hdd-o"></i>Challenge/Task Title</h4>
                                </div>
                              </div>
                            </div>
                                
                          </div>

                          <div class="row">
                            <h4> Work in Progress </h4>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                              
                              <div class="panel panel-success panel-colorful text-center">
                                <div class="panel-body">
                                  <?= gettimeofday() ?>
                                </div>
                                <div class="bg-light pad-ver">
                                  <h4 class="mar-no text-thin"><i class="fa fa-hdd-o"></i>Challenge/Task Title</h4>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-4 col-lg-4 col-sm-6">
                              
                              <div class="panel panel-success panel-colorful text-center">
                                <div class="panel-body">
                                  <?= gettimeofday() ?>
                                </div>
                                <div class="bg-light pad-ver">
                                  <h4 class="mar-no text-thin"><i class="fa fa-hdd-o"></i>Challenge/Task Title</h4>
                                </div>
                              </div>
                            </div>
                                
                          </div>

                          <div class="row">
                            <h4> Open Challenges </h4>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                              
                              <div class="panel panel-success panel-colorful text-center">
                                <div class="panel-body">
                                  <?= gettimeofday() ?>
                                </div>
                                <div class="bg-light pad-ver">
                                  <h4 class="mar-no text-thin"><i class="fa fa-hdd-o"></i>Challenge/Task Title</h4>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-4 col-lg-4 col-sm-6">
                              
                              <div class="panel panel-success panel-colorful text-center">
                                <div class="panel-body">
                                  <?= gettimeofday() ?>
                                </div>
                                <div class="bg-light pad-ver">
                                  <h4 class="mar-no text-thin"><i class="fa fa-hdd-o"></i>Challenge/Task Title</h4>
                                </div>
                              </div>
                            </div>
                                
                          </div>
                          <!--Team Dashboard Ends-->
                          <!--===================================================-->

                        </div>

                        <div class="tab-pane fade" id="tabs-activities">
                          <!-- /.Activities-block -->
                          <div class="activities-start">
                  
                            <div class="post-title">
                                <h3>
                                  Activities
                                </h3>
                            </div> <!-- /.heading-block -->
                            <hr>            
                            <hr class="spacer-sm">

                            <div class="activity-1">


                              <div class="post-aside" style="padding-top: 28px;">
                                <div class="post-date">
                                  <span class="post-date-day">12</span>
                                  <span class="post-date-month"> January</span>
                                  <span class="post-date-year"> 2015</span>
                                </div>

                                <a href="#comments" class="post-comment">
                                  4
                                </a>
                              </div> <!-- /.post-aside -->

                              <div class="post-main">

                                <a href= '#' target="_blank">
                                  <h4 class="post-title"> Google teams with Disney to make intergalactic cartoon to inspire kids to code</h4>
                                </a>
                                <h4 class="post-meta">Published by <a href="javascript:;">Rajnish Panwar</a> in <a href="javascript:;">India</a></h4>
                                <img src="<?= $baseUrl ?>static/imgs/googleactivity.jpg" class="post-img img-responsive" alt="Project Image" >
                                
                                <hr class="spacer-sm">
                                  
                                <div class="post-content">
                                  <p> This one might be a show for kids that’s just as fun for adults to watch. Google has partnered with Disney to make a new cartoon series, Miles from Tomorrowland, to inspire kids to code.
                                      In this outer space adventure, Miles explores the galaxy with his family and best friend in tow. Miles’ family joins him for the ride, including his mom and ship captain, Phoebe, his mechanical engineer dad, Leo, his tech-savvy big sister, Loretta, and his best friend and pet robo-ostrich Merc. The show is designed to not only fuel kids’ interest in space but also coding, teamwork, critical thinking and exploration. The show’s makers tapped consultants from NASA, Space Tourism Society and Google to keep it real. 
                                      Characters are voiced by a stellar cast, too, including Olivia Munn, Adrian Grenier, Mark Hamill, George Takei, Bill Nye, Wil Wheaton, Alton Brown and Brenda Song.
                                      The series’ premiere is tomorrow, Feb. 6, on the Disney Channel, starting at 9 a.m. PT. You can watch four back-to-back episodes, each featuring space facts integrated into the storylines of Miles’ missions as he strives to “connect the galaxy on behalf of Tomorrowland Transit Authority.
                                  </p>
                                </div>
                              </div>
                              
                            </div>
                              
                            <hr>

                            <div class="activity-2">
                              <div class="post-aside" style="padding-top: 28px;">
                                <div class="post-date">
                                  <span class="post-date-day">12</span>
                                  <span class="post-date-month"> January</span>
                                  <span class="post-date-year"> 2015</span>
                                </div>

                                <a href="#comments" class="post-comment">
                                  4
                                </a>
                              </div> <!-- /.post-aside -->

                              <div class="post-main">
                                <!-- /.heading-block -->
                                <a href= '#' target="_blank">
                                  <h4 class="post-title">Researchers parallelize a common data structure to work with multicore chips </h4>
                                </a>
                                <h4 class="post-meta">Published by <a href="javascript:;">Rajnish Panwar</a> in <a href="javascript:;">India</a></h4>

                                <img src="<?= $baseUrl ?>static/imgs/image2.jpeg" class="post-img img-responsive" alt="Project Image" >
                                
                                <hr class="spacer-sm">
                                  
                                <div class="post-content">
                                  <p> Parallelizing common algorithms:
                                      Researchers revamp a common "data structure" so that it will work with multicore chips.
                                      Every undergraduate computer-science major takes a course on data structures, which describes different ways of organizing data in a computer’s memory. Every data structure has its own advantages: Some are good for fast retrieval, some for efficient search, some for quick insertions and deletions, and so on.
                                      Today, hardware manufacturers are making computer chips faster by giving them more cores, or processing units. But while some data structures are well adapted to multicore computing, others are not. In principle, doubling the number of cores should double the efficiency of a computation. With algorithms that use a common data structure called a priority queue, that’s been true for up to about eight cores — but adding any more cores actually causes performance to plummet.
                                      At the Association for Computing Machinery’s Symposium on Principles and Practice of Parallel Programming in February, researchers from MIT’s Computer Science and Artificial Intelligence Laboratory will describe a new way of implementing priority queues that lets them keep pace with the addition of new cores. In simulations, algorithms using their data structure continued to demonstrate performance improvement with the addition of new cores, up to a total of 80 cores.
                                  </p>
                                </div>
                              </div>
                              <hr>
                            </div>
                          </div>
                          <!-- /.Activities-block ends-->

                        </div>
                      </div>
                    </div>
                  </div>
                  <!--===================================================-->
                  <!--End Panel with Tabs-->
          
              </div>
<?php
  /*
              <div class="col-sm-12 col-md-3">
                  <div class="heading-block">
                    Popular Projects           
                  </div> <!-- /.heading-block -->

                  <div class="row">
                    <div class="col-sm-4 col-md-4">
                      <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
                    </div>

                    <div class="col-sm-6 col-md-8">
                      <a href="#"> Project Name</a>
                      <br/>
                      <a href="javascript:;" class="btn btn-success btn-sm btn-sm">Join</a> 
                      &nbsp;
                      <a href="javascript:;" class="btn btn-tertiary btn-sm btn-sm">Message</a>
                    </div>
                  </div>
          

                  <div class="row">
                    <div class="col-sm-4 col-md-4">
                      <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
                    </div>

                    <div class="col-sm-6 col-md-8">

                      <a href="#"> Project Name</a>
                      <br/>
                      <a href="javascript:;" class="btn btn-success btn-sm btn-sm">Join</a> 
                        &nbsp;
                      <a href="javascript:;" class="btn btn-tertiary btn-sm btn-sm">Message</a>
                    </div>
                  </div>

                      
                  <div class="heading-block">
                    Online Collaborators   
                  </div> <!-- /.heading-block -->

                  <div class="row">

                    <div class="col-sm-4 col-md-4">
                      <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
                    </div>

                    <div class="col-sm-6 col-md-8">

                      <a href="#"><h3> Project Name </h3></a>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-sm-4 col-md-4">
                      <img src="../../global/img/photos/blur-sm.jpg" width="70" alt="Gallery Image" />
                    </div>

                    <div class="col-sm-6 col-md-8">

                      <a href="#"><h3> Project Name </h3></a>
                    </div>
                  </div>

              </div>
  */
?>
            </div>
        </div>

        <?php require_once 'views/sidebar/sidebar_button.php'; ?>

      </div>
    </div>

<script type="text/javascript">
  $(document).ready(function() {
     $('input[type="radio"]').click(function() {
         if($(this).attr('id') == 'task_select') {
              $('#assign_task').show();           
         }

         else {
              $('#assign_task').hide();   
         }
     });
  });
</script>

    <?php require_once 'views/footer/footer.php'; ?>


  </body>
</html>