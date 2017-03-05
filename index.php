<?php include_once("header.php") ?>
    <div class="row">
        <h1>Add User</h1>
        <form action="<?php echo BASE_URL?>/add.php" class="form" role="form" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" class= "form-control" id="message" name="message" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Save</button> 
            </div>
        </form>
        <a href="<?php echo BASE_URL?>/list.php"><button type="button" class="btn btn-primary">List of Users</button></a>
    </div>
<?php include_once("footer.php") ?>