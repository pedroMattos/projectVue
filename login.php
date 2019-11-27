<?php
include 'header.php';
var_dump($_POST);
?>

    <div class="container center row">
        <form method="post" action="" class="col s12 m5">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name" name="nome" type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="cpf" name="cpf" placeholder="Insira seu CPF" type="text" class="validate">
            </div>
        </div>
            <div class="row">
                <div class="input-field col s12">
                <input id="email" type="email" name="email" class="validate">
                <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <input id="idade" name="idade" placeholder="Sua idade" type="text" class="validate">
            </div>
            <input type="submit" class="btn" value="Enviar" />
        </div>
        </form>
    </div>

<?php
include 'footer.php';
