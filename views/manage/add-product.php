<?php
include("models/api.php");
$id = $_GET['id'];

$data = $api->get_single_product($id);
$categories = $api->get_categories();
?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="action.php" method="post">
                <div class="row">
                    <div class="form-group col-6 col-md-6">
                        <label for="">Name</label>
                        <?php if (empty($id)) { ?>
                            <input type="text" name="name" id="name" class="form-control">
                        <?php } else { ?>
                            <input type="text" name="name" id="name" value="<?php echo $data['name'] ?>" class="form-control">
                        <?php } ?>
                    </div>

                    <div class="form-group col-3 col-md-3">
                        <label for="">Price</label>
                        <?php if (empty($id)) { ?>
                            <input type="number" step="any" name="price" id="price" class="form-control">
                        <?php } else { ?>
                            <input type="number" step="any" name="price" value="<?php echo $data['price'] ?>" id="price" class="form-control">
                        <?php } ?>
                    </div>

                    <div class="form-group col-3 col-md-3">
                        <label for="">Category</label>
                        <select name="category" id="" class="form-control">
                            <?php foreach ($categories as $category) { ?>
                                <option value="<?php echo $category['id'] ?>" <?php if ($category['id'] == $data['category_id']) echo "selected" ?>><?php echo $category['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-12 col-md-12">
                        <label for="">Description</label>
                        <?php if (empty($id)) { ?>
                            <textarea type="text" name="description" id="description" class="form-control"></textarea>
                        <?php } else { ?>
                            <textarea type="text" name="description" id="description" class="form-control"><?php echo $data['description'] ?></textarea>
                        <?php } ?>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6 col-md-6">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button class="btn btn-primary" name="submit" value="product">Save</button>
                        <button class="btn btn-secondary" name="cancel" value="product">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>