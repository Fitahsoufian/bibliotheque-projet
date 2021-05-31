<!-- <div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $product->product_name ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" name="desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?= $product->product_description ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?= $product->product_price ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category</label>
            <input type="text" name="category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?= $product->product_category ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Image</label><br>
            <input type="text" name="image" value="<?= $product->product_img ?>"">
            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div> -->
<div class="container">
<h2 class="mb-3">Gestion du livre</h2>
<form method="POST">
  <div class="row">
      <div class="col-6">
        <div class="card mb-3">
          <div class="card-header bgBlue text-center">
            <h5 class="card-title">Informations <i class="fas fa-info-circle"></i></h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class='list-group-item'><span class="font-weight-bold">Identifiant : </span><?=  $product->b_id ?> :</li>
              
              <li class='list-group-item'><span class="font-weight-bold">Titre : </span>:</li>
              <input class="" type="text" name="title" value="<?php echo $product->title ?>" >
              <li class='list-group-item'><span class="font-weight-bold">Auteur : </span></li>
              <input class="" type="text" name="author" value="<?php echo $product->author ?>" >
              <li class='list-group-item'><span class="font-weight-bold">Resumé : </span></li>
              <input class="" type="text" name="summary" value="<?php echo $product->summary ?>" >
              <li class='list-group-item'><span class="font-weight-bold">Date : </span></li>
              <input class="" type="text" name="releaseDate" value="<?php echo $product->releaseDate ?>" >
              <li class='list-group-item'><span class="font-weight-bold">Catégorie : </span></li>
              <input class="" type="text" name="category" value="<?php echo $product->category ?>" >
              <button type="submit" name="submit" class="btn btn-primary">Update</button>
            
              </li>
            </ul>
          </div>
        </div>
      </div>
  </div>
  </div>
</form>
