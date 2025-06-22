<?php include 'header.php'; ?>
 <div id="content">
	  <div class="container">
		  <div class="block features">
			<h2 class="title-divider">
			  <span><?php echo $site["home"]["welcome_message"] ?></span>
			  <small><?php echo $site["home"]["welcome_companydetails"] ?></small>
			</h2>
			<div class="row list-unstyled">
			  <div class="feature col-sm-6 col-md-3">
				<img src="img/features/feature-1.png" alt="Feature 1" class="img-responsive" />
				<h3 class="title">
				  <a href="#"><?php echo $site["home"]["desc_mobile_apps"] ?></a>
				</h3>
				<p align="justify"><?php echo $site["home"]["desc_mobile_apps_body"] ?></p>
			  </div>
			  <div class="feature col-sm-6 col-md-3">
				<img src="img/features/feature-2.png" alt="Feature 2" class="img-responsive" />
				<h3 class="title">
				  <a href="#"><span class="de-em"><?php echo $site["home"]["desc_support"] ?></span></a>
				</h3>
				<p align="justify"><?php echo $site["home"]["desc_support_body"] ?></p>
			  </div>
			  <div class="feature col-sm-6 col-md-3">
				<img src="img/features/feature-3.png" alt="Feature 2" class="img-responsive" />
				<h3 class="title">
				  <a href="#"><span class="de-em"><?php echo $site["home"]["desc_support_a"] ?></span></a>
				</h3>
				<p align="justify"><?php echo $site["home"]["desc_support_abody"] ?></p>
			  </div>
			  <div class="feature col-sm-6 col-md-3">
				<img src="img/features/feature-4.png" alt="Feature 2" class="img-responsive" />
				<h3 class="title">
				  <a href="#"><span class="de-em"><?php echo $site["home"]["desc_support_b"] ?></span></a>
				</h3>
				<p align="justify"><?php echo $site["home"]["desc_support_bbody"] ?></p>
			  </div>
			</div>
		</div>
	</div>
</div>
 </div>
<?php include 'footer.php'; ?>