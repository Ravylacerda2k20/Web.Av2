<?php include "header.php"; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">

        <?php

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];

        $quadradoNum1 = $num1 * $num1;
        $quadradoNum2 = $num2 * $num2;

        $somaQuadrado = $quadradoNum1 + $quadradoNum2;
                
        ?>

<h2>03. Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados
e mostre o resultado. </h2>

            <form action="" id="" name="" method="POST" class="form-group">
              <label for="">Numero 1</label>
                <input type="text" id="numero1" name="numero1" class="form-control">

              <label for="">Numero 2</label>
                <input type="text" id="numero2" name="numero2" class="form-control">
                
  
              
              <br>
              <button type="submit" class="btn btn-primary">Calcular</button>
            </form>

            <h1>Resultado</h1>
            <p><?php echo $somaQuadrado; ?></p>

        </div>
      </div>
  </div>

<?php include "footer.php"; ?>




    