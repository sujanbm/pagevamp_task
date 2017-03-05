<?php


include 'vendor/autoload.php';
$id = $_GET['id'];
$user = (new Classes\User())->getById($id);
include_once('header.php');
?>

    <div class="row">
        <h1>Edit User</h1>
        <form action="../update.php?>" class="form" role="form" method="post">
        	<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $user->getId();?>">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $user->getEmail();?>" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $user->getFirstName();?>" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $user->getLastName();?>" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" class="form-control" id="message" name="message" value="<?php echo $user->getMessage(); ?>" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Update</button> 
            </div>
        </form>
    </div>

<?php include_once('footer.php') ?>