
	  
<?php 
include 'header.php';
?>


	  <!-- ======== @Region: #content ======== -->
      <div id="content">
        <div class="container">
          <div class="row">
            <!-- sidebar -->
            <div class="col-md-3 sidebar">
              <div class="section-menu">
                 <img src="img/misc/correos.png" alt="Location map"/>
              </div>
            </div>
            <!--main content-->
            <div class="col-md-9">
              <h2 class="title-divider">
                <span>Contactenos</span>
                <small>Mantente en contacto con nosotros</small>
              </h2>
              <div class="row">
                <div class="col-md-6">
                  <form id="contact-form" action="contato2.php" method="POST">
                    <div class="form-group">
                      <label class="sr-only" for="nome">Nombre</label>
                      <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="email">Correo</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="E-nail">
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="mensagem">Mesaje</label>
                      <textarea rows="12" class="form-control" name="mensagem" id="mensagem" placeholder="Mesaje"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Enviar Mensagem">
                  </form>
                </div>
                <div class="col-md-6">
                  <p>
                    <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                    +55 43 3523 9088
                  </p>
                  <p>
                    <abbr title="Email"><i class="fa fa-envelope"></i></abbr>
                    <a href="mailto:info@constantinoit.com">Enviar un correo electrónico</a>
                  </p>
                  <p>
                    <abbr title="Address"><i class="fa fa-home"></i></abbr>
                    Cornélio Procópio - PR
                  </p>
                  <p>
                    <a href="https://www.google.com/maps/@-23.1824391,-50.6479005">
                      Localidad
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php 
include 'footer.php';
?>