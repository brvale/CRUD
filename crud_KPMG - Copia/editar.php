<?php
//Conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<nav>
    <div class="nav-wrapper white" >
    <a href="#" class="brand-logo center" >
    <img src="KPMG_blue_logo.png" height=50 padding=5 min-width=108>
    </a>
      </ul>
    </div>
  </nav>

  <style>
    h3{
        color: #1a237e;
    }
    </style>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Usuario </h3>
        <form method="POST" action="php_action/update.php" >
            <input type="hidden" name="id" value='<?php echo $dados['id'];?>'>
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
                <label for="nome">Nome</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="dataN" id="dataN" value="<?php echo $dados['dataN'];?>">
                <label for="dataN">Data de Nascimento</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco'];?>">
                <label for="endereco">Endereço</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $dados['email'];?>">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone'];?>">
                <label for="telefone">Telefone</label>
            </div>

            <button type="submit" name="btn-editar" class="btn indigo darken-4">Atualizar</button>
            <a href="index.php" class="btn blue accent-4">Listar</a>
        </form>  
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>