<?php
    if(!isset($_SESSION['user_email'])) {
        header('Location: login.php');
    }
?>

<div class="row">
    <div class="col-sm-12">
        <h1>Categories</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category Title</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_pro = "select * from categories";
            $run_pro = mysqli_query($con,$get_pro);
            $count_pro = mysqli_num_rows($run_pro);
            if($count_pro==0){
                echo "<h2> No Categories found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_pro)) {
                    $cat_id = $row_pro['cat_id'];
                    $cat_title = $row_pro['cat_title'];
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $cat_title; ?></td>
                        <td><a href="index.php?edit_cat=<?php echo $cat_id?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="index.php?del_cat=<?php echo $cat_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>