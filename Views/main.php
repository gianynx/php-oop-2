<div class="container">
    <div class="row gy-5 gx-5">
        <?php foreach($dogProducts as $dogProduct) : ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="<?php echo $dogProduct->image ?>" class="card-img-top" alt="products_images">
                    <div class="card-body text-center">
                        <h2 class="card-text"><?php echo $dogProduct->title ?></h2>
                        <div class="card-text">&euro; <?php echo $dogProduct->price ?></div>
                        <div class="card-text">Category: <?php echo $dogProduct->category->name ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row gy-5 gx-5 mt-3">
        <?php foreach($catProducts as $catProduct) : ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="<?php echo $catProduct->image ?>" class="card-img-top" alt="products_images">
                    <div class="card-body text-center">
                        <h2 class="card-text"><?php echo $catProduct->title ?></h2>
                        <div class="card-text">&euro; <?php echo $catProduct->price ?></div>
                        <div class="card-text">Category: <?php echo $catProduct->category->name ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>