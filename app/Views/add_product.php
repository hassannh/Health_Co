<div class="form-body">
    <div class="row ">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <h3 class="col-md-12">Add you product Today</h3>
                    <!-- <p class="col-md-12">Fill in the data below.</p> -->
                    <form class="requires-validation" method="post" action="dashboard" novalidate>

                        <div class="col-md-12">
                            <input style="width: 50%;" class="form-control" type="text" name="name" placeholder="product Name" required>
                        </div>

                        <div class="col-md-12">
                            <input style="width: 50%;" class="form-control" type="" name="" placeholder="price" required>
                        </div>

                            <div class="col-md-12">
                                <input style="width: 50%;" class="form-control" type="" name="" placeholder="description" required>
                               
                            </div>
                        
                        <div class="col-md-12">
                            <input style="width: 50%;" class="form-control" type="" name="" placeholder="quantity" required>
                        </div>


                        <div class="form-button mt-3 col-md-12">
                            <button type="submit" href="<?=URLROOT?>dashboardController/add_product" name="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>