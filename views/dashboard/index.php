<?php
include("models/api.php");
$lists = $api->get_products();

?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <a href="?page=add-product">
                <button class="btn btn-primary float-right mb-1"><strong>+</strong> Add</button>
            </a>
            <table class="table table-sm table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th width="5%"></th>
                        <th width="60%">Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($lists as $item) {
                        $count++ ?>
                        <tr style="cursor:pointer" onclick="get_id(<?php echo $item['id'] ?>)">
                            <th><?php echo $count ?></th>
                            <td><?php echo $item['name'] ?> - <?php echo $item['description'] ?></td>
                            <td><?php echo $item['price'] ?></td>
                            <td><?php echo $item['category_name'] ?></td>
                            <td align="right">
                                <button class="btn btn-sm btn-primary" title="Edit">
                                    <img style="width: 20px; height: 20px" src="assets/icons/feathericons/edit.svg" alt="">
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <img style="width: 20px; height: 20px" src="assets/icons/feathericons/trash-2.svg" alt="">
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>