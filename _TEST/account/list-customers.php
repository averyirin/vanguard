
<?php $current_page="list-customers";
$app_path="../";?>
<?php

include($app_path."model/database.php");

global $db;
   // $password = sha1($email . $password);
    
    $query = '
        SELECT * FROM users';
    $statement = $db->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll();
    $statement->closeCursor();

?>
        <!-- NAVIGATION AND LOGIN MODAL-->
        <?php include($app_path."view/header.php"); ?>
        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Customer List</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo $app_path; ?>index.php">Home</a>
                            </li>
                            <li><a href="<?php echo $app_path; ?>contact.php">Contact</a></li>
                            <li>Our current customers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
              <h2>Customer Table</h2>
              <fieldset>
                  <table border = "1">
                    <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PASSWORD</th>
                        
                    </tr>
                    <?php 
                        foreach($users as $user):
                    ?>
                        <tr>
                            <td><?php echo $user['id'];?></td>
                            <td><?php echo $user['name'];?></td>
                            <td><?php echo $user['email'];?></td>
                            <td><?php echo $user['password'];?></td>
                        </tr>

                    <?php endforeach; ?>
                    </table>
              </fieldset>

            </div><!-- /#contact.container -->
        </div><!-- /#content -->
        <div id="map"></div>

        <!-- *** FOOTER ***
_________________________________________________________ -->
        <?php include($app_path."view/footer.php"); ?>
