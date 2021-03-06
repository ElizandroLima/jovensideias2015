<!DOCTYPE html>
<html>
	<?php
    require('componentes/cab.php');
?>
	
    <body>
        
    <div class="container">
        
        <?php
        require('componentes/nav.php');
        ?>
        
        <article>
            <h2>Inscri��o</h2>        
            <div class="inscricao">
                <ul>
                    <li class="active"><a href="inscricao.php">Categoria</a></li>
                    <li><a href="inscricao-passo2.php">Sobre o Projeto</a></li>
                    <li><a href="inscricao-passo3.php">Equipe</a></li>
                    <li><a href="inscricao-passo4.php">Confirmar</a></li>
                </ul>
            </div>
                
                <div class="dados-inscricao-1">
                                                       
                    <ul>
                        <li> 
                            <input type="radio" name="categoria-inscricao" id="jovens-ideias" value="one">
                            <label for="sem-orientacao"><span>PUC Jovens Ideias</span> - Sou estudante de gradua��o ou p�s-gradua��o e meu projeto <strong>n�o tem</strong> orienta��o de Professor/Mentor.</label>
                        </li>
                        <li>
                            <input type="radio" name="categoria-inscricao" id="pesquisar-evoluir" value="two">
                            <label for="com-orientacao"><span>Espa�o Pesquisar � Evoluir</span> - Sou estudante de gradua��o ou p�s-gradua��o e meu projeto <strong>tem orienta��o</strong> de Professor/Mentor (TCC, PIBIC, PIBITI, monografia, disserta��o de mestrado, tese de doutorado, etc).</label>
                        </li>
                        <li>
                            <input type="radio" name="categoria-inscricao" id="jovens-ideias-junior" value="three">
                            <label for="com-orientacao"><span>PUC Jovens Ideias Junior</span> - Sou estudante do <strong>Ensino M�dio</strong> e meu projeto <strong>tem</strong> orienta��o de Professor/Mentor.</label>
                        </li>
                    </ul>
                    
                    <div class="nav-form">
                        <button>Pr�ximo</button>
                    </div>
                    
                    
                </div>            
        </article>
                
        <?php
        require('componentes/footer.php');
        ?>
        
    </div> <!-- fecha div container -->
    
    <script src='js/scrollReveal.min.js'></script>
    <script>

      window.sr = new scrollReveal();

    </script>    
        
	</body>
</html>