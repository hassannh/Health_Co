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



<div class="form-items">

    <h3 class="col-md-12">Updat you product Today</h3>
    <form class="requires-validation" method="POST" action="<?= URLROOT ?>dashboardController/updat_products/<?= $data[0]['ID_product'] ?>">

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" value="<?php echo $data[0]['name'] ?>" type="text" name="name" required>
        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" value="<?php echo $data[0]['price'] ?>" type="" name="price" required>
        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" value="<?php echo $data[0]['Description'] ?>" type="" name="Description" required>

        </div>

        <div class="col-md-12 mt-3">
            <input class="form-control" type="file" name="picture" value="<?php echo $data[0]['picture'] ?>" accept="image/png, image/jpeg, image/jpg" required="required">
        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" value="<?php echo $data[0]['quantity'] ?>" type="" name="quantity" required>
        </div>


        <div class="form-button mt-3 col-md-12">
            <button type="submit" href="" name="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>