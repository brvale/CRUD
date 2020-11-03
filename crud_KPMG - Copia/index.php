<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//Mensagem
include_once 'includes/mensagem.php';
?>

<nav>
    <div class="nav-wrapper blue-grey lighten-5" >
    <a href="#" class="brand-logo center" >
    <img src="KPMG_blue_logo.png" height=50 padding=5 min-width=108>
    </a>
      </ul>
    </div>
  </nav>

<div class="row">
    <div class="col s12 m6 push-m3">
    <style>
    h3{
        color: #1a237e;
    }
    th{
        color: #1a237e;
    }
    </style>
        <h3 class="light"> Usuario </h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Data de nascimento:</th>
                    <th>Endereço:</th>
                    <th>Email:</th>
                    <th>Telefone:</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                $sql = "SELECT * FROM usuarios";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['dataN']; ?></td>
                    <td><?php echo $dados['endereco']; ?></td>
                    <td><?php echo $dados['email']; ?></td>
                    <td><?php echo $dados['telefone']; ?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating  blue accent-4"><i class="material-icons">edit</i></a></td>
                    
                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red darken-1 modal-trigger"><i class="material-icons">delete</i></a></td>

                    <!-- Modal Structure -->
                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content blue-grey lighten-5">
                        <style>
                        h4{
                            color: #1a237e;
                        }
                        p{
                            color: #1a237e; 
                        }
                        </style>
                        <h4>Alerta!</h4>
                        <p>Deseja remover este Usuario?</p>
                        </div>
                        
                        <div class="modal-footer blue-grey lighten-5">
                        <form action="php_action/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                            <button type= "submit" name="btn-deletar" class="btn red darken-1">Sim, deletar!</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat white">Cancelar</a>
                        </form>

                        </div>
                    </div>

                </tr>
                <?php endwhile;
                else: ?>
                
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <?php
                endif;
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn indigo darken-4">ADICIONAR CLIENTE</a>    
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>