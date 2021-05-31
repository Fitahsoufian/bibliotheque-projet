<div class="container">
    <form method="post" enctype="application/x-www-form-urlencoded">
        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user->user_first_name ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user->user_last_name ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user->user_name ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user->user_email ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user->user_pass ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $user->user_address ?>">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </form>
</div>