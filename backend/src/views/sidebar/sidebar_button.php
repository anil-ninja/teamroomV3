	<!--MAIN NAVIGATION-->
	<!--===================================================-->
	<nav id="mainnav-container">
		<div id="mainnav">

			<!--Shortcut buttons-->
			<!--================================-->
			<div id="mainnav-shortcut">
				<ul class="list-unstyled">
					<li class="col-xs-4" data-content="Chat">
						<a id="demo-toggle-aside" class="shortcut-grid" href="#">
							<i class="fa fa-comments"></i>
						</a>
					</li>
					<li class="col-xs-4" data-content="Notification">
						<a id="demo-alert" class="shortcut-grid" href="#">
							<i class="fa fa-bullhorn"></i>
						</a>
					</li>
					<li class="col-xs-4" data-content="Page Alerts">
						<a id="demo-page-alert" class="shortcut-grid" href="#">
							<i class="fa fa-bell"></i>
						</a>
					</li>
				</ul>
			</div>
			<!--================================-->
			<!--End shortcut buttons-->


			<!--Menu-->
			<!--================================-->
			<div id="mainnav-menu-wrap">
				<div class="nano">
					<div class="nano-content">
						<ul id="mainnav-menu" class="list-group">
				
							<!--Category name-->
							<li class="list-header">Navigation</li>
				
							<!--Menu list item-->
							<li>
								<a href="index.html">
									<i class="fa fa-dashboard"></i>
									<span class="menu-title">
										<strong>Dashboard</strong>
										<span class="label label-success pull-right">Top</span>
									</span>
								</a>
							</li>
				
							<!--Menu list item-->
							<li>
								<a href="#" data-target="#demo-default-modal" data-toggle="modal">
									<i class="fa fa-bell"></i>
									<span class="menu-title">
										<strong>
										Add Reminder
										</strong>
									</span>
								</a>
				
							</li>
				
							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-bullseye"></i>
									<span class="menu-title">
										<strong>All Reminders</strong>
										<i class="arrow"></i>
									</span>
								</a>

								<!--Submenu-->
								<ul class="collapse">
									<li><a href="#">Create project for UX Design</a></li>
									<li><a href="#">Attend interview</a></li>
									<li><a href="#">Make a presentation for seed funding</a></li>
									
								</ul>


							</li>


							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-tasks"></i>
									<span class="menu-title">
										<strong>To-Do List</strong>
										<span class="pull-right badge badge-warning">9</span>
									</span>
								</a>
							</li>

							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-tasks"></i>
									<span class="menu-title">
										<strong>Get Done List</strong>
										<span class="pull-right badge badge-warning">9</span>
									</span>
								</a>
							</li>
				
							<li class="list-divider"></li>
				
							<!--Category name-->
							<li class="list-header">Projects</li>
				
							<!--Menu list item-->
							<li class="active-sub">
								<a href="#">
									<i class="fa fa-briefcase"></i>
									<span class="menu-title">Classified Projects</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse in">
									
									<!-- <li class="active-link"><a href="#">ASSET Mangament System</a></li>
									 -->
									<?php foreach ($projects as $key => $project) { 

										if($project->getType() == "Classified") { ?>	
										
										<li><a href=""><?= $project->getRefinedTitle() ?></a></li>

									<?php } } ?>
									
								</ul>
							</li>
				
							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-edit"></i>
									<span class="menu-title">Private Projects</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<?php foreach ($projects as $key => $project) { 

										if($project->getType() == "Private"){ ?>	
										
										<li><a href=""><?= $project->getRefinedTitle() ?></a></li>

									<?php } } ?>
									
								</ul>
							</li>
				
							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-table"></i>
									<span class="menu-title">Public Projects</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<?php foreach ($projects as $key => $project) { 

										if($project->getType() == "Public"){ ?>	
										
										<li><a href=""><?= $project->getRefinedTitle() ?></a></li>

									<?php }} ?>
									
								</ul>
							</li>


							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-table"></i>
									<span class="menu-title">Recommended Projects</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<li><a href="">Computer Library</a></li>
									<li><a href="">Memory/Brain Power</a></li>
									<li><a href="">Awesome PICS over Internet</a></li>
									<li><a href="">Software Clone Detection</a></li>
									<li><a href="">HYBRID APPROACH FOR DETECTING CODE Clone Detection</a></li>
									<li><a href="">Sportskeeda: A dating with sports every evening</a></li>
									<li><a href="">Collap v2 UX design</a></li>
									<li><a href="">CSE Interview Preparation Questions</a></li>
									<li><a href=""> Greatest Mens of the Century</a></li>
									
								</ul>
							</li>

							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-table"></i>
									<span class="menu-title">Joined Projects</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<li><a href="#">Git Tips #SoftwareDevelopment</a></li>
									<li><a href="#">MDU: Computer NetworksInformation and Communications Technology</a></li>
									<li><a href="#">Information and Communications Technology</a></li>
									<li><a href="#">Collap hands to empower Indian youth</a></li>
									<li><a href="#">Biomedical Device Engineering</a></li>
									<li><a href="#">Distributed Combinational Web Query</a></li>
									<li><a href="#">Upcoming Hackathon 2015</a></li>
									<li><a href="#">Tech Market News</a></li>
									<li><a href="#">Academic Zodiac</a></li>
									<li><a href="#">Distributed Combinational Web Query 2</a></li>
									<li><a href="#">Smart Grids</a></li>
									
								</ul>
							</li>
				
							<!--Menu list item-->
						
							<!--Category name-->
							<li class="list-header">Extra</li>
				
							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-plug"></i>
									<span class="menu-title">
										Miscellaneous
										<span class="label label-mint pull-right">New</span>
									</span>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<li><a href="misc-calendar.html">Calendar</a></li>
									<li><a href="misc-maps.html">Google Maps</a></li>
									
								</ul>
							</li>
				
							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-envelope"></i>
									<span class="menu-title">Email</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<li><a href="mailbox.html">Inbox</a></li>
									<li><a href="mailbox-message.html">View Message</a></li>
									<li><a href="mailbox-compose.html">Compose Message</a></li>
									
								</ul>
							</li>
				
							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-file"></i>
									<span class="menu-title">Pages</span>
									<i class="arrow"></i>
								</a>
				
								<!--Submenu-->
								<ul class="collapse">
									<li><a href="pages-blank.html">Blank Page</a></li>
									<li><a href="pages-profile.html">Profile</a></li>
									<li><a href="pages-search-results.html">Search Results</a></li>
									<li><a href="pages-timeline.html">Timeline<span class="label label-info pull-right">New</span></a></li>
									<li><a href="pages-faq.html">FAQ</a></li>
									<li class="list-divider"></li>
									<li><a href="pages-404.html">404 Error</a></li>
									<li><a href="pages-500.html">500 Error</a></li>
									<li class="list-divider"></li>
									<li><a href="pages-login.html">Login</a></li>
									<li><a href="pages-register.html">Register</a></li>
									<li><a href="pages-password-reminder.html">Password Reminder</a></li>
									<li><a href="pages-lock-screen.html">Lock Screen</a></li>
									
								</ul>
							</li>

							<!--Menu list item-->
							<li>
								<a href="#">
									<i class="fa fa-plus-square"></i>
									<span class="menu-title">Menu Level</span>
									<i class="arrow"></i>
								</a>

								<!--Submenu-->
								<ul class="collapse">
									<li><a href="#">Second Level Item</a></li>
									<li><a href="#">Second Level Item</a></li>
									<li><a href="#">Second Level Item</a></li>
									<li class="list-divider"></li>
									<li>
										<a href="#">Third Level<i class="arrow"></i></a>

										<!--Submenu-->
										<ul class="collapse">
											<li><a href="#">Third Level Item</a></li>
											<li><a href="#">Third Level Item</a></li>
											<li><a href="#">Third Level Item</a></li>
											<li><a href="#">Third Level Item</a></li>
										</ul>
									</li>
									<li>
										<a href="#">Third Level<i class="arrow"></i></a>

										<!--Submenu-->
										<ul class="collapse">
											<li><a href="#">Third Level Item</a></li>
											<li><a href="#">Third Level Item</a></li>
											<li><a href="#">Third Level Item</a></li>
											<li class="list-divider"></li>
											<li><a href="#">Third Level Item</a></li>
											<li><a href="#">Third Level Item</a></li>
										</ul>
									</li>
								</ul>
							</li>

						</ul>


						<!--Widget-->
						<!--================================-->
						<div class="mainnav-widget">

							<!-- Show the button on collapsed navigation -->
							<div class="show-small">
								<a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
									<i class="fa fa-desktop"></i>
								</a>
							</div>

							<!-- Hide the content on collapsed navigation -->
							<div id="demo-wg-server" class="hide-small mainnav-widget-content">
								<ul class="list-group">
									<li class="list-header pad-no pad-ver">Server Status</li>
									<li class="mar-btm">
										<span class="label label-primary pull-right">15%</span>
										<p>CPU Usage</p>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-primary" style="width: 15%;">
												<span class="sr-only">15%</span>
											</div>
										</div>
									</li>
									<li class="mar-btm">
										<span class="label label-purple pull-right">75%</span>
										<p>Bandwidth</p>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-purple" style="width: 75%;">
												<span class="sr-only">75%</span>
											</div>
										</div>
									</li>
									<li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View Details</a></li>
								</ul>
							</div>
						</div>
						<!--================================-->
						<!--End widget-->

					</div>
				</div>
			</div>
			<!--================================-->
			<!--End menu-->

		</div>
	</nav>
	<!--===================================================-->
	<!--END MAIN NAVIGATION-->
	
	<!--ASIDE-->
			<!--===================================================-->
			<aside id="aside-container">
				<div id="aside">
					<div class="nano">
						<div class="nano-content">
							
							<!--Nav tabs-->
							<!--================================-->
							<ul class="nav nav-tabs nav-justified">
								<li class="active">
									<a href="#demo-asd-tab-1" data-toggle="tab">
										<i class="fa fa-comments"></i>
										<span class="badge badge-purple">7</span>
									</a>
								</li>
								<li>
									<a href="#demo-asd-tab-2" data-toggle="tab">
										<i class="fa fa-info-circle"></i>
									</a>
								</li>
								<li>
									<a href="#demo-asd-tab-3" data-toggle="tab">
										<i class="fa fa-wrench"></i>
									</a>
								</li>
							</ul>
							<!--================================-->
							<!--End nav tabs-->



							<!-- Tabs Content -->
							<!--================================-->
							<div class="tab-content">

								<!--First tab (Contact list)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade in active" id="demo-asd-tab-1">
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-warning">3</span> Family
									</h4>

									<!--Family-->
									<div class="list-group bg-trans">
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av2.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Stephen Tran</div>
												<span class="text-muted">Availabe</span>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av4.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Brittany Meyer</div>
												<span class="text-muted">I think so</span>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av3.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Donald Brown</div>
												<span class="text-muted">Lorem ipsum dolor sit amet.</span>
											</div>
										</a>
									</div>


									<hr>
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-info">4</span> Friends
									</h4>

									<!--Friends-->
									<div class="list-group bg-trans">
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av5.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Betty Murphy</div>
												<span class="text-muted">Bye</span>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av6.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Olivia Spencer</div>
												<span class="text-muted">Thank you!</span>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av4.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Sarah Ruiz</div>
												<span class="text-muted">2 hours ago</span>
											</div>
										</a>
										<a href="#" class="list-group-item">
											<div class="media-left">
												<img class="img-circle img-xs" src="img/av3.png" alt="Profile Picture">
											</div>
											<div class="media-body">
												<div class="text-lg">Paul Aguilar</div>
												<span class="text-muted">2 hours ago</span>
											</div>
										</a>
									</div>


									<hr>
									<h4 class="pad-hor text-thin">
										<span class="pull-right badge badge-success">Offline</span> Works
									</h4>

									<!--Works-->
									<div class="list-group bg-trans">
										<a href="#" class="list-group-item">
											<span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
										</a>
										<a href="#" class="list-group-item">
											<span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
										</a>
										<a href="#" class="list-group-item">
											<span class="badge badge-pink badge-icon badge-fw pull-left"></span> Lucy Moon
										</a>
										<a href="#" class="list-group-item">
											<span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
										</a>
										<a href="#" class="list-group-item">
											<span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
										</a>
									</div>

								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--End first tab (Contact list)-->


								<!--Second tab (Custom layout)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade" id="demo-asd-tab-2">

									<!--Monthly billing-->
									<div class="pad-all">
										<h4 class="text-lg mar-no">Monthly Billing</h4>
										<p class="text-sm">January 2015</p>
										<button class="btn btn-block btn-success mar-top">Pay Now</button>
									</div>


									<hr>

									<!--Information-->
									<div class="text-center clearfix pad-top">
										<div class="col-xs-6">
											<span class="h4">4,327</span>
											<p class="text-muted text-uppercase"><small>Sales</small></p>
										</div>
										<div class="col-xs-6">
											<span class="h4">$ 1,252</span>
											<p class="text-muted text-uppercase"><small>Earning</small></p>
										</div>
									</div>


									<hr>

									<!--Simple Menu-->
									<div class="list-group bg-trans">
										<a href="#" class="list-group-item"><span class="label label-danger pull-right">Featured</span>Edit Password</a>
										<a href="#" class="list-group-item">Email</a>
										<a href="#" class="list-group-item"><span class="label label-success pull-right">New</span>Chat</a>
										<a href="#" class="list-group-item">Reports</a>
										<a href="#" class="list-group-item">Transfer Funds</a>
									</div>


									<hr>

									<div class="text-center">Questions?
										<p class="text-lg text-semibold"> (415) 234-53454 </p>
										<small><em>We are here 24/7</em></small>
									</div>
								</div>
								<!--End second tab (Custom layout)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


								<!--Third tab (Settings)-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="tab-pane fade" id="demo-asd-tab-3">
									<ul class="list-group bg-trans">
										<li class="list-header">
											<h4 class="text-thin">Account Settings</h4>
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" checked>
											</div>
											<p>Show my personal status</p>
											<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" checked>
											</div>
											<p>Show offline contact</p>
											<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox">
											</div>
											<p>Invisible mode </p>
											<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
										</li>
									</ul>


									<hr>

									<ul class="list-group bg-trans">
										<li class="list-header"><h4 class="text-thin">Public Settings</h4></li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" checked>
											</div>
											Online status
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox" checked>
											</div>
											Show offline contact
										</li>
										<li class="list-group-item">
											<div class="pull-right">
												<input class="demo-switch" type="checkbox">
											</div>
											Show my device icon
										</li>
									</ul>



									<hr>

									<h4 class="pad-hor text-thin">Task Progress</h4>
									<div class="pad-all">
										<p>Upgrade Progress</p>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
										</div>
										<small class="text-muted">15% Completed</small>
									</div>
									<div class="pad-hor">
										<p>Database</p>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
										</div>
										<small class="text-muted">17/23 Database</small>
									</div>

								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--Third tab (Settings)-->

							</div>
						</div>
					</div>
				</div>
			</aside>
			<!--===================================================-->
			<!--END ASIDE-->



	<!-- SCROLL TOP BUTTON -->
	<!--===================================================-->
	<button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
	<!--===================================================-->

	
	<!--===================================================-->
	<!-- END OF CONTAINER -->

	<?php //require_once 'views/modals/modal.php'; ?>