<?php
    include_once ("templates/header.php");
   // include_once("process/pizza.php");
?>

<!--Formulário e Banner-->
<div id="main-banner">
    <h1>Faça seu pedido</h1>
    <!--Aqui irá sua foto-->
</div>

<!--Cointainer principal-->
<div id="main-container">
    <!--Esse container tem classes de Bootstrap-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Monte a pizza como desejar:</h2>

                <form action="process/pizza.php" method="POST" id="pizza-form">
                    <!--Post envia os dados para o servidor-->
                    <div class="form-group">
                        <label for="borda">Borda:</label>
                        <select name="borda" id="borda" class="form-control">
                            <option value="">Selecione a Borda</option>
                        </select>
                    </div>
                    <div class="form-grupo">
                        <label for="sabores">Sabores: (Máximo 3)</label>
                        <select multiple name="sabores[]" id="sabores" class="form-control">
                            <!--Como enviará multiplos valores usará uma notação de array-->
                        </select>
                    </div>
                    <div class="form-grupo">
                        <input type="submit" class="btn btn-primary" value="Fazer Pedido!">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    include_once ("templates/footer.php");
?>