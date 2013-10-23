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
                <form class="form-horizontal">
      	            <div class="control-group">
        		        <label class="control-label" for="inputNome">Nome</label>
            	    	<div class="controls">
              		        <input type="text" id="inputNome">
                		</div>
  	    	        </div>

                    <div class="control-group">
            		    <label class="control-label" for="inputEmail">Email</label>
        	        	<div class="controls">
          		            <input type="text" id="inputEmail">
            		    </div>
      	        	</div>

                    <div class="control-group">
        	    	    <label class="control-label" for="inputAssunto">Assunto</label>
            	    	<div class="controls">
          	    	        <input type="text" id="inputAssunto">
        	        	</div>
              		</div>

                    <div class="control-group">
            	    	<label class="control-label" for="inputMensagem">Mensagem</label>
    	        	    <div class="controls">
                            <textarea id="inputMensagem"></textarea>
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
            <button class="bt-interna-catalogo" type="button"><img src="imagens/bt-catalogo.png" width="214" height="131" title="Encontre Sua Trilha" /></button>
    	    <button class="bt-interna-destaque" type="button"><img src="imagens/comprar-musica.png" width="163" height="57" alt="Compre Música" /></button>
            <button class="bt-interna-destaque" type="button"><img src="imagens/vender-musica.png" width="146" height="57" alt="Vender Música" /></button>
        </div>
    </div>
</div>

<?php include "./includes/footer.html"; ?>
