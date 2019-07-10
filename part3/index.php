<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>POO Partie3</title>

    <style>
      div.row{
        border-top: 3px solid gray;
        padding: 5pt;
      }
    </style>
  </head>
  <body>

    <?php
      spl_autoload_register(function($class) {
            require '../Model/'.$class.'.class.php';
          });

      $clients = ["John"=>[1250, 1.3, 'euros'], "Jane"=>[1500, 2.3, 'euros'], "David"=>[12000, 2.3, 'euros'], "Toto"=>[1000, 2.3, 'euros'], "Lala"=>[5000, 2.3, 'euros']];

      $accounts = [];

?>

    <div class="container">

      <div class="row text-center">
        <h1><?= BankAccount::getBankName(); ?></h1>
      </div>

<?php
      $i = 0;

      foreach ($clients as $name => $val):
        $accounts[] = new BankAccount($name, $val[0], $val[1], $val[2]);

        ?>

        <div class="row">
          <ul class="list-unstyled">
            <li>Titulaire : <?= $accounts[$i]->getOwner(); ?></li>
            <li>Solde : <?= $accounts[$i]->getBalance().' '.$accounts[$i]->getCurrency(); ?></li>
            <li>Taux d'intérêt : <?= $accounts[$i]->getInterestRates(); ?> %</li>
          </ul>
        </div>

        <?php
        $i++;
      endforeach;

     ?>

     <div class="row text-center">
       <p>Vous venez de créer <?= BankAccount::getNbObjsCreated(); ?> comptes bancaires.</p>
     </div>

   </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  </body>
</html>
