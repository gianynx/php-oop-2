<div class="container">
    <div class="row gy-5">
        <?php foreach($dogProducts as $dogProduct) : ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="<?php echo $dogProduct->image ?>" class="card-img-top" alt="products_images">
                    <div class="card-body text-center">
                        <h2 class="card-text"><?php echo $dogProduct->title ?></h2>
                        <h4 class="card-text"><?php echo $dogProduct->price ?></h4>
                        <h5 class="card-text"><?php echo $dogProduct->category ?></h5>
                        <h6 class="card-text"><?php echo $dogProduct->type ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row gy-5">
        <?php foreach($catProducts as $catProduct) : ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="<?php echo $catProduct->image ?>" class="card-img-top" alt="products_images">
                    <div class="card-body text-center">
                        <h2 class="card-text"><?php echo $catProduct->title ?></h2>
                        <h4 class="card-text"><?php echo $catProduct->price ?></h4>
                        <h5 class="card-text"><?php echo $catProduct->category ?></h5>
                        <h6 class="card-text"><?php echo $catProduct->type ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>