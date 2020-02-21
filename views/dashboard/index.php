<?php
include("models/api.php");
$lists = $api->get_products();

if ($_POST['keyword'] && $_POST['keyword'] != '') {
    $lists = $api->search($_POST['keyword']);
}

?>

<div class="container col-5">
    <div class="card">
        <div class="card-body">
            <a href="?page=add-product">
                <button class="btn btn-primary float-right mb-2"><strong>+</strong> Add</button>
            </a>

            <form action="" method="post">
                <div class="float-right mr-2">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success" type="submit">
                                <img style="width: 20px; height: 20px" src="assets/icons/feathericons/search.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </form>

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