
<head>
 <div class="container">
<h2 class="text-center mb-4 text-secondary">BOOKS</h2>
<div class="flex">
  
  <div class="text-left">
  <a href="product/add">
  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
    Add Book <i class="fa fa-plus"></i>
  </button>
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
      <th scope="col">Categorie</th>
      <th scope="col">Management</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($books !== false) {
        foreach ($books as $book) { ?>
          <tr>
          <td> <?php echo $book->b_id ?> </td> 
          <td> <?php echo $book->title ?>  </td>
          <td><?php echo $book->author ?> </td>
          <td><?php echo $book->summary ?></td>
          <td><?php echo $book->releaseDate ?></td>
          <td><?php echo $book->category ?></td>
          <td>
         <a href="/product/edit/<?= $book->b_id ?>"><i class="fas fa-edit"></i></a>
                <a href="/product/delete/<?= $book->b_id ?>" onclick="if (!confirm('Do you want to delete this product?')) return false;"><i class="fas fa-trash-alt"></i></a>
          </td>
          </tr>
          <?php } 
    }
        
     ?>
  </tbody>
</table>
</div>
 
