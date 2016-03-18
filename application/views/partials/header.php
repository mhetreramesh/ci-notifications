<!-- navbar top -->
<script src="<?= base_url('assets/plugins/jquery-1.10.2.js') ?>"></script>
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
			<span class="logo">VegFru Notifications</span>
		</a>
	</div>
	<!-- end navbar-header -->
	<!-- navbar-top-links -->
	<div id="notifications-container">
		<ul class="nav navbar-top-links navbar-right" id="notifications-liting">
			<?php $this->load->view( 'partials/notifications.php' ); ?>
		</ul>
	</div>
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
						<img src="<?php echo base_url(); ?>assets/img/user.jpg" alt="">
					</div>
					<div class="user-info">
						<div><strong><?php echo $this->session->name; ?></strong></div>
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
				<a href="#"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="#">Flot Charts</a>
					</li>
					<li>
						<a href="#">Morris Charts</a>
					</li>
				</ul>
				<!-- second-level-items -->
			</li>
			<li>
				<a href="#"><i class="fa fa-flask fa-fw"></i>Timeline</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-table fa-fw"></i>Tables</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-edit fa-fw"></i>Forms</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="#">Panels and Wells</a>
					</li>
					<li>
						<a href="#">Buttons</a>
					</li>
					<li>
						<a href="#">Notifications</a>
					</li>
					<li>
						<a href="#">Typography</a>
					</li>
					<li>
						<a href="#">Grid</a>
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