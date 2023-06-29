<?php 

    require_once 'connect.php';
    require_once 'header.php';
    
?>
<!-- main html -->
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12">
                <a href="form_add.php" class="btn btn-success mb-3 float-end">Add</a>
                <br>
                <table border="1" class="table table-dark table-hover">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created Time</th>
                        <th scope="col" colspan="2">Action</th>
                        
                    </tr>
                        <?php 
                            $querySelect = "SELECT * FROM article WHERE status = 'Published'";
                            $result = $connect->query($querySelect);
                            if($result->num_rows>0):
                                while($row = $result->fetch_assoc()):
                        ?>

                    <tr>
                        <td><?=$row['id'] ?></td>
                        <td><?=$row['title'] ?></td>
                        <td><?=$row['category'] ?></td>
                        <td><?=$row['description'] ?></td>
                        <td><?=$row['status'] ?></td>
                        <td><?=$row['created_time'] ?></td>
                        <td>
                            <a href="form_edit.php?id=<?=$row['id']?>" class="btn btn-primary"> Edit </a>
                        </td>
                        <td>
                            <a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger"> Delete </a>
                        </td>
                    </tr>
                        <?php
                            endwhile;
                            endif;
                        ?>
                </table>
            </div>
        </div>
    </div>

<?php


    require_once 'footer.php';

?>

