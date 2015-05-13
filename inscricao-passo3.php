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
                    <li><a href="inscricao.php">Categoria</a></li>
                    <li><a href="inscricao-passo2.php">Sobre o Projeto</a></li>
                    <li class="active"><a href="inscricao-passo3.php">Equipe</a></li>
                    <li><a href="inscricao-passo4.php">Confirmar</a></li>
                </ul>
            </div>
                
                <div class="dados-inscricao-2">                           
                    
                <section>
			
                    <div class="dado-orientador">
                        
                        <div class="integrante">
                            <h4>Integrante 1 (obrigat�rio)</h4>
                            Nome <br /><input type="text" name="FirstName" value=""><br />
                            Email <br /><input type="text" name="FirstName" value=""><br />
                            Telefone <br /><input type="text" name="FirstName" value=""><br />


                            <label for="cod_estados">Estado</label> <br />
                            <select name="cod_cidades" id="cod_cidades">
                                <option value="">Escolha um estado</option>
                            </select>
                            
                            <br />
                            <label for="cod_cidades">Cidade</label> <br />
                            <select name="cod_cidades" id="cod_cidades">
                                <option value="">Escolha uma cidade</option>
                            </select>

                            <br />
                            

                            Institui��o <br /><input type="text" name="FirstName" value=""><br />
                            Curso (Gradua��o, P�s-Gradua��o ou Especializa��o) <br /><input type="text" name="FirstName" value=""><br />
                            Per�odo <br /><input type="text" name="FirstName" value=""><br />
                            Comprovante de Matr�cula (anexar) <br /><input type="text" name="FirstName" value=""><br />
                        
                        
                            
                        </div>
                        
                        <button class="add-integrante">Adicionar outro integrante</button>
                        
                    </div>
                </section>
                
                    <div class="nav-form">
                        <button>Voltar</button>
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