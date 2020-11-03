<?php
//header
include_once 'includes/header.php';
?>

<nav>
    <div class="nav-wrapper white" >
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
    </style>
        <h3 class="light"> Novo Usuario </h3>
        <form method="POST" action="php_action/create.php" >
            </style>
            <div class="input-field col s12">   
                <input type="text" name="nome" id="nome">
                <label for="nome">Nome</label>
            </div>
            
            <div class="input-field col s12">
                <input type="text" name="dataN" id="dataN">
                <label for="dataN">Data de Nascimento</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="endereco" id="endereco">
                <label for="endereco">Endereço</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="telefone" id="telefone">
                <label for="telefone">Telefone</label>
            </div>

            <button type="submit" name="btn-cadastrar" class="btn indigo darken-4">Cadastrar</button>
            <a href="index.php" class="btn blue accent-4">Lista</a>
        </form>  
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>