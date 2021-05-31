<h1>Reservation</h1>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $product->title ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Author</label>
            <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo  $product->author ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Year</label>
            <input type="number" name="releaseDate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo  $product->releaseDate ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Summary</label>
            <input type="text" name="summary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo $product->summary ?>">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Reserve</button>
    </form>
</div>