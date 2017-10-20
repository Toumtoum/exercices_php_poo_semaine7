<h4>Exercice 1</h4>


  <table class="table">
      <thead>
        <tr>
          <th>NB OF DOORS</th>
          <th>COLOR</th>
          <th>PRICE</th>
        </tr>
      </thead>
      <tbody>
      <?php
      foreach ($objectsClio as $value) {?>
        <tr>
            <td><? echo $value->getDoors();?></td>
            <td><? echo $value->getColor();?></td>
            <td><? echo $value->getPrice();?></td>
        </tr>
        <?php
        }?>
        </tbody>
      </table>
