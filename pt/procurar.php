<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   </head>
   <body>
      <center>
         <?php
            include("dbConnect.php");

            $titulo = $_POST['livro'];
            $query = mysqli_query($connection, "SELECT isbn, titulo, ano_edicao, nome_editora, nome_estado,nome_autor
               FROM livro INNER JOIN editora ON livro.cod_editora=editora.cod_editora
               INNER JOIN estado ON livro.cod_estado=estado.cod_estado
               INNER JOIN autor ON livro.cod_autor=autor.cod_autor
               WHERE titulo LIKE '%$titulo%'");

            $nRegistos = mysqli_num_rows($query);

            if ($nRegistos == 0) {
               echo "Não existe nenhum livro com esse titulo";
               include("index.php");
               exit();
            }
            else {
               echo "<h2 align='center'> - Livros - </h2>";
         ?>
         <table border=2 width=50% align="center">
            <tr>
               <td bgcolor="C0C0C0" align="center"><b>ISBN</b></td>
               <td bgcolor="C0C0C0" align="center"><b>Título</b></td>
               <td bgcolor="C0C0C0" align="center"><b>Ano Edição</b></td>
               <td bgcolor="C0C0C0" align="center"><b>Editora</b></td>
               <td bgcolor="C0C0C0" align="center"><b>Estado</b></td>
               <td bgcolor="C0C0C0" align="center"><b>Autor</b></td>
            </tr>
            <?php
               while ($registo = mysqli_fetch_array($query)) {
            ?>
                  <tr>
                     <td align="center"><?php echo $registo['isbn']; ?></td>
                     <td align="center"><?php echo $registo['titulo']; ?></td>
                     <td align="center"><?php echo $registo['ano_edicao']; ?></td>
                     <td align="center"><?php echo $registo['nome_editora']; ?></td>
                     <td align="center"><?php echo $registo['nome_estado']; ?></td>
                     <td align="center"><?php echo $registo['nome_autor']; ?></td>
                  </tr>
            <?php
               }
            ?>
         </table>
         <?php
            }
            mysqli_close($connection);
         ?>
         <div>
            <form name="form_livro">
               <input type="submit" value="Voltar ao menu Principal" onclick="document.form_livro.action='index.php'">
            </form>
         </div>
      </center>
   </body>
</html>
