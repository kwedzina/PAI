<?php include_once '../Config/database.php'; ?>
<?php include_once '../Model/User.php'; ?>

<!DOCTYPE html>
<?php include_once 'header.php'; ?>
<html lang="en">
<body>
<div class="container">

    <div class="panel panel-danger info">
      <div class="panel-heading">
      <?php
        if(isset($_GET['msg'])){
            echo $_GET['msg'];
        }
      ?>
      </div>
    </div>


    <div class="table-responsive">
    <table class="table table-bordered">
    <thead>
        <tr>
        <th>#</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        </tr>
    </thead>
    <tbody>
        <?php getUsers(); ?>
    </tbody>
    </table>
    </div>

<?php include_once 'footer.php'; ?>
</div>
</body>
</html>