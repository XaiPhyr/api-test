<?php
include("models/api.php");
$id = $_GET['id'];

$data = $api->get_single_product($id);
?>

<div class="container col-5">
    <div class="card">
        <div class="card-header">
            <div class="float-right">
                <button type="button" onclick="edit(<?php echo $id ?>)" class="btn btn-secondary">Edit</button>
                <form style="display: inline-block" action="action.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button name="remove" type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>

            <span class="h3"><?php echo $data['name'] ?></span>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-6 col-md-6">
                    <label for="">Description</label>
                    <p>- <?php echo $data['description'] ?></p>
                </div>

                <div class="col-3 col-md-3">
                    <p>Price: $ <?php echo number_format($data['price'], 2, '.', ',') ?></p>
                </div>

                <div class="col-3 col-md-3">
                    <p>Category: <?php echo $data['category_name'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>