<?php include "./includes/header.html"; ?>

<div class="navbar-inner content">
    <div class="container">
    	<div class="span8" id="dados">
    		<p>Você está em:</p>
        	<h1>Contato</h1>
    	    <span class="traco"></span>
            <p class="conteudo">
            	Preencha os campos abaixo que em breve entraremos em contato com você! <br />
		    	Se preferir, entre em contato conosco através do e-mail <a href="mailto:contato@audiopeia.com.br" target="_blank">contato@audiopeia.com.br</a>
            </p>

            <div class="span5" id="contato">
                <form class="form-horizontal" action="send_mail.php" method="post">
      	            <div class="control-group">
        		        <label class="control-label" for="name">Nome</label>
            	    	<div class="controls">
              		        <input type="text" id="name" name="name">
                		</div>
  	    	        </div>

                    <div class="control-group">
            		    <label class="control-label" for="email">Email</label>
        	        	<div class="controls">
          		            <input type="text" id="email" name="email">
            		    </div>
      	        	</div>

                    <div class="control-group">
        	    	    <label class="control-label" for="subject">Assunto</label>
            	    	<div class="controls">
          	    	        <input type="text" id="subject" name="subject">
        	        	</div>
              		</div>

                    <div class="control-group">
            	    	<label class="control-label" for="message">Mensagem</label>
    	        	    <div class="controls">
                            <textarea id="message" name="message"></textarea>
        		        </div>
          	    	</div>
              		<div class="control-group">
                	    <div class="controls">
                    	    <button type="submit" class="bt-contato">Enviar</button>
           	    	    </div>
    	            </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    	<div class="span4" id="bts-interno">
            <button class="bt-interna-catalogo" type="button"><img src="imagens/bt-catalogo.png" width="199" height="54" title="Encontre Sua Trilha" /></button>
    	    <button class="bt-interna-destaque" type="button"><img src="imagens/buy_alt.png" width="196" height="28" alt="Comprar Música" /></button>
            <button class="bt-interna-destaque" type="button"><img src="imagens/sell_alt.png" width="178" height="30" alt="Vender Música" /></button>
        </div>
    </div>
</div>

<?php include "./includes/footer.html"; ?>
