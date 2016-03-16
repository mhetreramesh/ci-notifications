<!-- navbar top -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
	<!-- navbar-header -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/dashboard">
			<!--<img src="assets/img/logo.png" alt="" />-->
			<span class="logo">Notification System</span>
		</a>
	</div>
	<!-- end navbar-header -->
	<!-- navbar-top-links -->
	<ul class="nav navbar-top-links navbar-right">
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
			</a>
			<!-- dropdown alerts-->
			<ul class="dropdown-menu dropdown-alerts">
				<li>
					<a href="#">
						<div>
							<i class="fa fa-comment fa-fw"></i>New Comment
							<span class="pull-right text-muted small">4 minutes ago</span>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">
						<div>
							<i class="fa fa-twitter fa-fw"></i>3 New Followers
							<span class="pull-right text-muted small">12 minutes ago</span>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">
						<div>
							<i class="fa fa-envelope fa-fw"></i>Message Sent
							<span class="pull-right text-muted small">4 minutes ago</span>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">
						<div>
							<i class="fa fa-tasks fa-fw"></i>New Task
							<span class="pull-right text-muted small">4 minutes ago</span>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">
						<div>
							<i class="fa fa-upload fa-fw"></i>Server Rebooted
							<span class="pull-right text-muted small">4 minutes ago</span>
						</div>
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a class="text-center" href="#">
						<strong>See All Alerts</strong>
						<i class="fa fa-angle-right"></i>
					</a>
				</li>
			</ul>
			<!-- end dropdown-alerts -->
		</li>

		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-3x"></i>
			</a>
			<!-- dropdown user-->
			<ul class="dropdown-menu dropdown-user">
				<li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
				</li>
				<li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
				</li>
				<li class="divider"></li>
				<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
				</li>
			</ul>
			<!-- end dropdown-user -->
		</li>
		<!-- end main dropdown -->
	</ul>
	<!-- end navbar-top-links -->

</nav>
<!-- end navbar top -->

<!-- navbar side -->
<nav class="navbar-default navbar-static-side" role="navigation">
	<!-- sidebar-collapse -->
	<div class="sidebar-collapse">
		<!-- side-menu -->
		<ul class="nav" id="side-menu">
			<li>
				<!-- user image section-->
				<div class="user-section">
					<div class="user-section-inner">
						<img src="assets/img/user.jpg" alt="">
					</div>
					<div class="user-info">
						<div>Jonny <strong>Deen</strong></div>
						<div class="user-text-online">
							<span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
						</div>
					</div>
				</div>
				<!--end user image section-->
			</li>
			<li class="sidebar-search">
				<!-- search section-->
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
									<i class="fa fa-search"></i>
								</button>
                            </span>
				</div>
				<!--end search section-->
			</li>
			<li class="selected">
				<a href="index.html"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="flot.html">Flot Charts</a>
					</li>
					<li>
						<a href="morris.html">Morris Charts</a>
					</li>
				</ul>
				<!-- second-level-items -->
			</li>
			<li>
				<a href="timeline.html"><i class="fa fa-flask fa-fw"></i>Timeline</a>
			</li>
			<li>
				<a href="tables.html"><i class="fa fa-table fa-fw"></i>Tables</a>
			</li>
			<li>
				<a href="forms.html"><i class="fa fa-edit fa-fw"></i>Forms</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="panels-wells.html">Panels and Wells</a>
					</li>
					<li>
						<a href="buttons.html">Buttons</a>
					</li>
					<li>
						<a href="notifications.html">Notifications</a>
					</li>
					<li>
						<a href="typography.html">Typography</a>
					</li>
					<li>
						<a href="grid.html">Grid</a>
					</li>
				</ul>
				<!-- second-level-items -->
			</li>
			<li>
				<a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="#">Second Level Item</a>
					</li>
					<li>
						<a href="#">Second Level Item</a>
					</li>
					<li>
						<a href="#">Third Level <span class="fa arrow"></span></a>
						<ul class="nav nav-third-level">
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
						</ul>
						<!-- third-level-items -->
					</li>
				</ul>
				<!-- second-level-items -->
			</li>
			<li>
				<a href="#"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="blank.html">Blank Page</a>
					</li>
					<li>
						<a href="login.html">Login Page</a>
					</li>
				</ul>
				<!-- second-level-items -->
			</li>
		</ul>
		<!-- end side-menu -->
	</div>
	<!-- end sidebar-collapse -->
</nav>