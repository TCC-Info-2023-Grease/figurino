
<?php
 $servidor = "localhost";
 $usuario = "root";
 $senha = ""
 $db = "bdbiblioteca";
 $conexao = mysqli_connect(
    $servidor, $usuario, $senha, $db
 );
 $query = "SELECT * FROM LIVRO";
 $consulta_livros = mysqli_query(
    $conexao, $query
 );
</php>
 //tabela de livros

 <table>
 <th>ISBN</th>
 <th>Título</th> 
 <th>Autor</th> 
 <th>Editora</th>
 <th>Gênero</th>
 <th>Ano</th>
 <th>Exemplares</th>
 <th>Situação</th>
 </table>
 <?php
 while($linha = mysqli_fetch_array(
    $consulta_livros)){
        echo '<tr><td>'.$linha['ISBN'].'</td>'
        echo '<tr>'.$linha['TITULO'].'</td>'
        echo '<tr>'.$linha['AUTOR'].'</td>'
        echo '<tr>'.$linha['GENERO'].'</td>'
        echo '<tr>'.$linha['ANO'].'</td>'
        echo '<tr>'.$linha['EXEMPLARES'].'</td>'
        echo '<tr>'.$linha['SITUACAO'].'</td>'

    }
 
 </php>