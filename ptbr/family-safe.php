
<?php 
include 'header.php';
?>

 <!-- ======== @Region: #content ======== -->
      <div id="content">
        <div class="container">
          <div>
            <!--Default Pricing Table-->
            <h2 class="title-divider">
              <span>Produtos <span class="de-em">de Software</span></span>
              <small>Nossos aplicativos.</small>
            </h2>
			<center>
			  <div style="width: 800px;">
                  <DIV class="title">
					<img class="img-responsive" src="/familysafe.png"/>
                  </DIV>
<br/>
		   <DIV class="title"><b>
No momento nosso software encontra-se em fase de desenvolvimento. Caso queira receber um e-mail quando estivermos com a vers&atilde;o est&aacute;vel dispon&iacute;vel, deixe seu nome e e-mail abaixo, e voc&ecirc; receber&aacute; o link para realizar o download de avalia&ccedil;&atilde;o gratuita.
                 </b> </DIV>	
<br/>
<br/>
		<form id="contact-form" action="contato2.php" method="POST">
     <tr><td>
                      <label class="sr-only" for="nome">Nome</label>
                      <input type="text" name="nome"  id="nome" placeholder="Nome"></tr></td>
                      <label class="sr-only" for="email">E-mail</label>
                      <input type="email" name="email"  id="email" placeholder="Email">
		      <input type="submit" class="btn btn-primary" value="Cadastrar">
		      <input type="hidden" name="mensagem" value="Gostaria de saber sobre o software de segurança">
                    </div>
                  </form>
                </div>
		 <br/>
		  <br/>
	</div>
</div>
      </div>
	  
<?php 
include 'footer.php';
?>