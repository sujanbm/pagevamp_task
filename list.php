<?php
include 'vendor/autoload.php';
$users = (new Classes\User())->getAll();

?>
<?php include_once("header.php") ?>
    <div class="row">
        <h1>User List</h1>
        <a href="<?php echo BASE_URL?>/index.php"><button type="button" class="btn btn-success">Add User</button></a>
        <table class="table">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Message</th>
                <th>Email</th>
                <th>Edit</th>

            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->getFirstName(); ?></td>
                    <td><?php echo $user->getLastName(); ?></td>
                    <td><?php echo $user->getMessage(); ?></td>
                    <td><?php echo $user->getEmail(); ?></td>
                    <td> <a href="<?php echo BASE_URL;?>/edit.php/?id=<?php echo $user->getId();?>"><button type="button" class="btn btn-primary">Edit</button></a>
                         <a href="<?php echo BASE_URL;?>/delete.php/?id=<?php echo $user->getId();?>"><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure want to delete');">Delete</button></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php include_once("footer.php") ?>