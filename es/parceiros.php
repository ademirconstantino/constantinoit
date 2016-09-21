
<?php 
include 'header.php';
?>
	  
	  
<!-- ======== @Region: #content ======== -->
      <div id="content">
        <div class="container">
          <h2 class="title-divider">
            <span>Nossos <span class="de-em">Parceiros</span></span>
            <small>Empresas primas!</small>
          </h2>
          <ul class="nav nav-tabs" data-js="quicksand" data-quicksand-trigger="li >
            a" data-quicksand-target=".customers"> 
            <li class="active"><a href="#" data-quicksand-fid="all">Todas as Industrias</a></li>
            <li><a href="#" data-quicksand-fid="type-web">Web</a></li>
            <li><a href="#" data-quicksand-fid="type-design">Design</a></li>
            <li><a href="#" data-quicksand-fid="type-media">Midia</a></li>
          </ul>
          <!--Customers-->
        
		  <ul class="row list-unstyled block customers">
            <li class="customer type-media" data-quicksand-id="id-2" data-quicksand-tid="type-media">
             
                <span class="inner-wrapper">
                  <span class="img-wrapper">
                    <img src="img/customers/1.png" alt="" />
                  </span>
                </span>
            </li>
            <li class="customer type-web" data-quicksand-id="id-3" data-quicksand-tid="type-web">
                <span class="inner-wrapper">
                  <span class="img-wrapper">
                    <img src="img/customers/2.png" alt="Vodafone" />
                  </span>
                </span>
            </li>
            <li class="customer type-web" data-quicksand-id="id-4" data-quicksand-tid="type-web">
                <span class="inner-wrapper">
                  <span class="img-wrapper">
                    <img src="img/customers/3.png" alt="CSS3" />
                  </span>
                </span>
            </li>
          </ul>
		
		
        </div>
      </div>

	  <?php 
include 'footer.php';
?>