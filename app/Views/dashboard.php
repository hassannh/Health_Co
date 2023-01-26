<!-- For demo purpose -->
<div class="row py-5 bg-secondary ">
  <div class="col-lg-12 mx-auto">
    <div class="text-white p-5 shadow-sm rounded">
      <h1 class="display-4">Welcome To Your Dashboard Controller</h1>
      <p class="lead">Here You Can Add & Delete & Updat Your Products</p>

    </div>
  </div>
</div>
<!-- End -->


<br>
<br>

<form class="pt-5">
    <label for="default-search" class="">Search</label>
    <div class="d-flex ml-4">
        <input type="search" id="search" class="form-control w-auto" placeholder="Search">
    </div>
</form>


<h1 class="text-center push">Manage Products</h1>
<pre>
</pre>
<div class="container">
  <div class="table-responsive">
    <table class="main-table text-center table table-bordered">
      <tr>
        <td>#ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Date</td>
        <td>Quantity</td>
        <td>Description</td>
        <td>Control</td>
      </tr>

      <?php foreach ($data["products"] as $products) : ?>

        <tr class="prod">
          <td><?php echo $products['ID_product']; ?></td>
          <td>
            <p class="productsName"><?php echo $products['name']; ?></p>
          </td>
          <td><?php echo $products['price']; ?></td>
          <td><?php echo $products['date']; ?></td>
          <td><?php echo $products['quantity']; ?></td>
          <td><?php echo $products['Description']; ?></td>



          <td style=" GAP: 10PX; DISPLAY: flex; FLEX-WRAP: WRAP; JUSTIFY-CONTENT: center;" class="controol">
            <a href='<?= URLROOT ?>dashboardController/getedit/<?= $products['ID_product'] ?>' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
            <a href='<?= URLROOT ?>dashboardController/delete_product/<?= $products['ID_product'] ?>' class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>
          </td>
        </tr>

      <?php endforeach; ?>
    </table>
  </div>
  <a href="<?= URLROOT ?>Pages/add_product" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New Item</a>
</div>

<script src="<?=URLROOT?>js/search.js" ></script>