
<h1 class="text-center push">Manage Items</h1>
<pre>
</pre>
<div class="container">
    <div class="table-responsive">
        <table class="main-table text-center table table-bordered">
            <tr>
                <td>#ID</td>
                <td>Name</td>
                <td>Price</td>
                <td>Adding Date</td>
                <td>Quantity</td>
                <td>Description</td>
                <td>Control</td>
            </tr>

            <?php foreach ($data["products"] as $products) :?>

             <tr>
             <td><?= $products->ID_product?> </td>
             <td><?= $products->name?></td>
             <td><?= $products->price?></td>
             <td><?= $products->date?></td>
             <td><?= $products->quantity?></td>
             <td><?= $products->Description?></td>
             <td style=" GAP: 10PX; DISPLAY: flex; FLEX-WRAP: WRAP; JUSTIFY-CONTENT: center;" class="controol">
             <a href='' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
             <a href='<?=URLROOT?>dashboardController/delete_product/<?= $products->ID_product?>' class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
             </td>
             </tr>
        
            <?php endforeach; ?>
        </table>
    </div>
    <a href="<?= URLROOT?>dashboardController/add_product" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New Item</a>
</div>