<?php
include("models/api.php");
$lists = $api->get_products();

?>

<div class="container col-5">
    <div class="card">
        <div class="card-body">
            <a href="?page=add-product">
                <button class="btn btn-primary float-right mb-1"><strong>+</strong> Add</button>
            </a>
            <table class="table table-sm table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($lists as $item) {
                        $count++ ?>
                        <tr style="cursor:pointer" onclick="preview(<?php echo $item['id'] ?>)">
                            <th><?php echo $count ?></th>
                            <td><?php echo $item['name'] ?></td>
                            <td><?php echo $item['price'] ?></td>
                            <td><?php echo $item['category_name'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>