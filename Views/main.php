<div class="container">
    <div class="row gy-5 gx-5">
        <h2 class="text-center">Category: Dogs</h2>
            <?php foreach($dogProducts as $dogProduct) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?php echo $dogProduct->image ?>" class="card-img-top" alt="products_images">
                            <div class="card-body text-center">
                                <h3 class="card-title fw-bold"><?php echo $dogProduct->name ?></h3>
                                <h4 class="card-title"><?php echo $dogProduct->title ?></h4>
                                <div class="card-text">&euro; <?php echo $dogProduct->price ?></div>
                                <div class="card-text"><?php echo $dogProduct->category->name ?></div>
                                <?php if ($dogProduct instanceof Food) : ?>
                                    <div class="card-text pt-3">Expiry: <?php echo $dogProduct->expiry->format('Y-m-d') ?></div>
                                <?php endif; ?>
                            </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
    <div class="row gy-5 gx-5 mt-3">
        <h2 class="text-center">Category: Cats</h2>
            <?php foreach($catProducts as $catProducts) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?php echo $catProducts->image ?>" class="card-img-top" alt="products_images">
                            <div class="card-body text-center">
                                <h3 class="card-title fw-bold"><?php echo $catProducts->name ?></h3>
                                <h4 class="card-title"><?php echo $catProducts->title ?></h4>
                                <div class="card-text">&euro; <?php echo $catProducts->price ?></div>
                                <div class="card-text"><?php echo $catProducts->category->name ?></div>
                                <?php if ($catProducts instanceof Food) : ?>
                                    <div class="card-text pt-3">Expiry: <?php echo $catProducts->expiry->format('Y-m-d') ?></div>
                                <?php endif; ?>
                            </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</div>