<div class="form-items">
    <h3 class="col-md-12">Add you product Today</h3>
    <form class="requires-validation" method="POST" action="<?=URLROOT?>dashboardController/add_product">

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="text" name="name[0]" placeholder="product Name" required>
        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="number" name="price[0]" placeholder="price" required>
        </div>

        <!-- <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="date" name="date[]" placeholder="date">
        </div> -->

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="number" name="quantity[0]" placeholder="quantity" required>

        </div>

        <div class="col-md-12 mt-3">
            <input class="form-control" type="file" name="picture[0]" accept="image/png, image/jpeg, image/jpg" placeholder="picture" required="required">
        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="text" name="Description[0]" placeholder="Description" required>
        </div>


        <div class="form-button mt-3 col-md-12">
            <button type="submit" href="<?=URLROOT?>dashboardController/add_product" name="submit" class="btn btn-primary">Add</button>
        </div>
        
        <div id="addProductAdd"></div>
    </form>
</div>
<div class="form-button mt-3 col-md-12">
    <button id="addNew" type="submit" name="submit" href="" class="btn btn-primary">Add more </button>
</div>


