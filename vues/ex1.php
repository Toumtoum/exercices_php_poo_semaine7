<h4>Exercice 1</h4>

<?php

foreach($objectClio as $value){
  ?>
  <table class="">
      <thead>
        <tr>
          <th>NB OF DOORS</th>
          <th>COLOR</th>
          <th>PRICE</th>
        </tr>
      </thead>
      <tbody>
      <?php
      foreach ($donnees as $value) {?>
        <tr>
            <td><? echo $value->getDoors();?></td>
            <td><? echo $value->getColor();?></td>
            <td><? echo $value->getPrice();?></td>
        </tr>
        <?php
        }
        }?>
        </tbody>
      </table>
