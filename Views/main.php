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
            <?php foreach($catProducts as $catProduct) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="<?php echo $catProduct->image ?>" class="card-img-top" alt="products_images">
                            <div class="card-body text-center">
                                <h3 class="card-title fw-bold"><?php echo $catProduct->name ?></h3>
                                <h4 class="card-title"><?php echo $catProduct->title ?></h4>
                                <div class="card-text">&euro; <?php echo $catProduct->price ?></div>
                                <div class="card-text"><?php echo $catProduct->category->name ?></div>
                                <?php if ($catProduct instanceof Food) : ?>
                                    <div class="card-text pt-3">Expiry: <?php echo $catProduct->expiry->format('Y-m-d') ?></div>
                                <?php endif; ?>
                            </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
    <div class="row gy-5 gx-5 mt-3">
        <h2 class="text-center">Category: Small Animals</h2>
            <?php foreach($smallAnimals as $smallAnimal) : ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="card" style="width: 26rem;">
                        <img src="<?php echo $smallAnimal->image ?>" class="card-img-top" alt="products_images" style="height: 18rem;">
                            <div class="card-body text-center">
                                <h3 class="card-title fw-bold"><?php echo $smallAnimal->name ?></h3>
                                <div class="card-text">Average age: <?php echo $smallAnimal->age ?> years</div>
                            </div>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</div>