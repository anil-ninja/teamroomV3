                  
                  <?php 
                    if($top10Activities){
                    foreach ($top10Activities as $activity) { 

                    ?>

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
                          <?php //dropDown_comment(8, 7, 9); ?>
                          <h5 class="post-meta">Published by <a href="javascript:;"><?= ucfirst($activity->getFirstName()) ?> <?= ucfirst($activity->getLastName()) ?></a> in <a href="javascript:;">India</a></h5>
                            
                        
                          <div class="post-content">
                            <p> 
                              <?= $activity->getRefinedStmt() ?>
                            </p>
                          </div>

                          <ol class="comment-list">
                            
                            <li>
                              <div class="comment" id="comment_box_<?= $activity->getId() ?>" >
                                <?php foreach ($activity -> getResponses() as $response) { ?>
                                  <div class="comment-avatar">
                                     <img alt="" src="<?= $baseUrl ?>uploads/profilePictures/<?= $response->getUsername() ?>.jpg" style="width: 44px; height: 44px;" class="avatar">
                                  </div>
                                  <!-- /.comment-avatar -->
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

                                  <div class="comment-meta">
                                     <p> <?= $response -> getStmt() ?> </p>
                                  </div>
                                <?php } ?>
                              </div>
                            </li>
                            
                            <li>
                              <?php 
                                include 'views/activity/activityComment.php';
                              ?>
                            </li>
                          
                          </ol>
                        </div>
                        <hr>
                        <hr class="spacer-sm">
                      </div>

                    <?php } }
                        else
                          echo "Wooo.... You reached the end!!!...<br/>";

                    ?>
                    