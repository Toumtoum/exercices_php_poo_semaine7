<h4>Exercice 2</h4>

<div class="form-group">
  <form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
    <label for="age">Age:</label>
    <input type="text" class="form-control" id="age" name="age">
    <label for="sel1">Color:</label>
    <select class="form-control" id="sel1" name="color">
    <?php foreach (Cat::color as $value) {?>
    <option value="<?php echo $value ?>"><?php echo $value ?></option>
    <?php
    } ?>
    </select>
    <label for="sel2">Sex:</label>
    <select class="form-control" id="sel2" name="sex">
    <?php foreach (Cat::sex as $value) {?>
    <option value="<?php echo $value ?>"><?php echo $value ?></option>
    <?php
    } ?>
  </select>
  <input type="submit" value="Add new cat" name="create" />
  </form>
</div>

<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Sex</th>
      <th>Color</th>
      <th>Age</th>
    </tr>
  </thead>
  <tbody>
  <?php
  if ($manager -> getAll()){
  $donnees = $manager -> getAll();

  foreach ($donnees as $value) {?>
    <tr>
        <td><? echo $value->getName();?></td>
        <td><? echo $value->getSex();?></td>
        <td><? echo $value->getColor();?></td>
        <td><? echo $value->getAge();?></td>
    </tr>
    <?php
    }
    }?>
    </tbody>
</table>
