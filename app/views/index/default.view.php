<!-- 

 -->
 <head>
 <div class="global">
<h2 class="text-center mb-4 text-secondary">BOOKS</h2>
<div class="flex">
  <!-- <form action="" method="post" class="flex">
    <select class="form-control mr-3" name="category">
      <option value="false">Toutes catégories</option>
     <option value="fantastique">Fantastique</option>
     <option value="poesie">Poesie</option>
     <option value="roman">Roman</option>
    </select>
    <input class="btn btn-warning"type="submit" name="sortBook" value="Trier">
  </form> -->
  <div class="text-left">
  <a href="product/add">
  <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
    Add Book <i class="fa fa-plus"></i>
  </button> -->
  </a>
</div>

 
  <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content p-3">
        <h3 class="text-center mb-2">Nouveau livre</h3>
        <?php include("product/add"); ?>
      </div>
    </div>
  </div> -->
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
    </tr>
  </thead>
  <tbody>
  <?php if ($books !== false) {
        foreach ($books as $book) { ?>
          <tr>
          <td><?php echo $book->b_id ?></td> 
          <td ><a  class="text-white" href="/user/login"><?php echo $book->title ?></a></td>
          <td><?php echo $book->author ?></td>
          <td><?php echo $book->summary ?></td>
          <td><?php echo $book->releaseDate ?></td>
          <td><?php echo $book->category ?></td>
          </tr>
          <?php } 
    }
        
     ?>
  </tbody>
</table>
</div>