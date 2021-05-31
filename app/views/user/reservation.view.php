
<head>
 <div class="container">
<h2 class="text-center mb-4 text-secondary">Reservation</h2>
<div class="flex">
  
  <div class="text-left">
  <a href="product/add">
  </a>
</div>
</div>
<table class="table table-dark">
  <thead class="thead-light ">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">summary</th>
      <th scope="col">Year</th>
      <th scope="col">Management</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($reservs !== false) {
        foreach ($reservs as $reserv) { ?>
          <tr>
          <td><?php echo $reserv->id ?> </td> 
          <td><?php echo $reserv->title ?>  </td>
          <td><?php echo $reserv->author ?> </td>
          <td><?php echo $reserv->summary ?></td>
          <td><?php echo $reserv->releaseDate ?></td>
          <td>
         <a href="<?= $reserv->id ?>"><i class="fas fa-edit"></i></a>
                <a href="/user/reservation<?= $reserv->id ?>" onclick="if (!confirm('Do you want to delete this product?')) return false;"><i class="fas fa-trash-alt"></i></a>
          </td>
          </tr>
          <?php } 
    }
        
     ?>
  </tbody>
</table>
</div>
 
