<div class="row py-5 bg-secondary">
    <div class="col-lg-12 mx-auto">
        <div class="text-white p-5 shadow-sm rounded">
            <h1 class="display-4">Welcome To Your Gallery</h1>
            <p class="lead">Here is Your Products</p>
        </div>
    </div>
</div>
<!-- End -->
<div class="container-fluid" id="cardd">

    <div class="px-lg-5">
        <div class="row ">
            <!-- For demo purpose -->

            <?php foreach ($data['products']  as $products) : ?>

                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 proo" >
                    <div class="bg-white rounded shadow-sm"><img src="<?= URLROOT . 'image/' . $products['picture'] ?>" alt="" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5> <a href="#" class="text-dark"><?= $products['name'] ?></a></h5>
                            <p class="small text-muted mb-0"><?= $products['Description'] ?></p>
                            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold"><?= $products['price'] ?></span></p>
                                <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
            <!-- End -->

            <!-- End -->

            <div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">Show me more</a></div>

        </div>
    </div>
</div>