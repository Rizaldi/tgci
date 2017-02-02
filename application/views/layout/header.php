<div class="header-body">
	<div class="header-container container">
		<div class="header-row">
			<div class="header-column">
				<div class="header-logo">
					<a href="index.html">
						<img alt="The Green Coco Island" width="111" height="60" data-sticky-width="90" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url('assets'); ?>/img/logos/logo_tgci.jpg">
					</a>
				</div>
			</div>
			<div class="header-column">
				<div class="header-row">
					<div class="header-search hidden-xs">
						<form id="searchForm" action="page-search-results.html" method="get">
							<div class="input-group">
								<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<nav class="header-nav-top">
						<ul class="nav nav-pills">
							<li class="hidden-xs">
								<a href="about-us.html"><i class="fa fa-angle-right"></i> About Us</a>
							</li>
							<li class="hidden-xs">
								<a href="contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a>
							</li>
							<li>
								<span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
							</li>
						</ul>
					</nav>
				</div>
				<div class="header-row">
					<div class="header-nav">
						<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
							<i class="fa fa-bars"></i>
						</button>
						<ul class="header-social-icons social-icons hidden-xs">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
							<nav>
								<ul class="nav nav-pills" id="mainNav">
									<?php foreach ($get_menu->result() as $menu) {
										if ($menu->parent_id == 0) {
											$get_sub_menu = $this->tgci->get_sub_menu($menu->id);
											if ($get_sub_menu->num_rows()) {
												$dropdown = "dropdown";
												$dropdown_toggle = "dropdown-toggle";
											}else{
												$dropdown = "";
												$dropdown_toggle = "";
											}
											echo '<li class="'.$dropdown.'">
													<a href="index.html" class="'.$dropdown_toggle.'">
														'.$menu->name.'
													</a>
													<ul class="dropdown-menu">';
											foreach ($get_sub_menu->result() as $sub_menu) {
												echo '
														<li><a href="'.$menu->name.'/'.underscore($sub_menu->slug).'">
															'.$sub_menu->name.'
														</a></li>';	
											}
											echo "</ul>
											</li>";
											
										}
										// $dropdown = ($menu->parent_id == $menu->id) ? "dropdown" : "";
										// if ($menu->parent_id == 0) {
										// 	echo '<li class="'.$dropdown.'">
										// 			<a href="index.html">
										// 				Home
										// 			</a>
										// 		  </li>';
										// }
									}
									?>
									<li class="dropdown">
										<a class="dropdown-toggle" href="#">
											Contact Us
										</a>
										<ul class="dropdown-menu">
											<li><a href="contact-us.html">Contact Us - Basic</a></li>
											<li><a href="contact-us-advanced.php">Contact Us - Advanced</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
