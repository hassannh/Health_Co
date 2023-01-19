<div class="form-items">
    <h3 class="col-md-12">Add you product Today</h3>
    <form class="requires-validation" method="POST" action="add_product">

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="text" name="name" placeholder="product Name" required>
        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="number" name="price" placeholder="price" required>
        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="date" name="date" placeholder="date">
        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="text" name="Description" placeholder="description" required>

        </div>

        <div class="col-md-12 mt-3">
            <input style="width: 50%;" class="form-control" type="number" name="quantity" placeholder="quantity" required>
        </div>


        <div class="form-button mt-3 col-md-12">
            <button type="submit" href="<?= URLROOT ?>dashboardController/add_product" name="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>