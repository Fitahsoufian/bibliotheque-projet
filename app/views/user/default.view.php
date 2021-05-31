

<h2 class="text-center mb-4">Utilisateurs enregistrés</h2>

<div class="flex">

  
  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
    Add User <i class="fa fa-plus"></i>
  

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content p-3">
        <h3 class="text-center mb-2">Nouvel utilisateur</h3>
        <?php include("Forms/addUserForm.php"); ?>
      </div>
    </div>
  </div>
</div>

<table class="table mt-4">
  <thead class="thead-light bgBlue">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Age</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Email</th>
      <th scope="col">Gestion</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($users !== false) {
        foreach ($users as $user) { ?>
          <tr>
          <td><?php echo $user->u_id ?> </td> 
          <td><?php echo $user->firstName ?>  </td>
          <td><?php echo $user->lastName ?> </td>
          <td><?php echo $user->age ?></td>
          <td><?php echo $user->phone ?></td>
          <td><?php echo $user->mail ?></td>
          <td>
         <a href="/user/edit/"<?= $user->u_id ?>><i class="fas fa-edit"></i></a>
                <a href="/user/delete/<?= $user->u_id ?>" onclick="if (!confirm('Do you want to delete this product?')) return false;"><i class="fas fa-trash-alt"></i></a>
          </td>
          </tr>
          <?php } 
    }
        
     ?>
  </tbody>
</table>

 
