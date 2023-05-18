<?php
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Category.php';
include __DIR__ . '/../Models/Food.php';
include __DIR__ . '/../Models/SmallAnimal.php';

$dogCategory = new Category('Dogs');
$catCategory = new Category('Cats');
$firstDate = new DateTime('2025-05-17');
$secondDate = new DateTime('2024-06-01');

$dogProducts = [
    new Product(0, 'https://shop-cdn-m.mediazs.com/bilder/letto/variabel/arancio/0/400/36344_outdoor_orange_hundebett_12_2012_05_dsc4484_0.jpg', 'Letto Variabel arancio', 52.99, $dogCategory),
    new Food (1, 'https://shop-cdn-m.mediazs.com/bilder/dogmio/barkis/semiumido/snack/per/cani/5/400/_dsc6323_5.jpg', 'DogMio Barkis semi-umido', 5.99, $dogCategory, 'Dog Food', $firstDate),
    new Product(2, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/scimmietta/in/corda/di/cotone/2/400/1_139205_sincere_baumwolltau__1_2.jpg', 'Scimmietta in corda di cotone', 5.09, $dogCategory),
    new Product(3, 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/jackson/6/400/167896_jackson_outside_res90_fg_4159_6.jpg', 'Cuccia per cani Jackson', 147.99, $dogCategory)
];

$catProducts = [
    new Product(4, 'https://shop-cdn-m.mediazs.com/bilder/tunnel/donut/2/400/101373_katzentunnel_donut_fg_7063_2.jpg', 'Tunnel Donut', 44.99, $catCategory),
    new Food(5, 'https://shop-cdn-m.mediazs.com/bilder/kg/gratis/kg/almo/nature/holistic/per/gatti/8/400/26973_pla_almonature_fettfisch_reis_12kg_8.jpg', '12 kg Almo Nature Holistic', 52.99, $catCategory, 'Cat Food', $secondDate),
    new Product(6, 'https://shop-cdn-m.mediazs.com/bilder/tiragraffi/trixie/junior/pepito/8/400/333019_pla_trixie_junior_kratzbaum_pepito_hs_01_8.jpg', 'Tiragraffi Trixie Junior Pepito', 85.99, $catCategory),
    new Product(7, 'https://shop-cdn-m.mediazs.com/bilder/nicchia/royal/pet/white/7/400/333880_royalpet_katzenhoehle_white_07_05_2013_dsc9036_7.jpg', 'Nicchia Royal Pet White', 38.99, $catCategory)
];

$firstSmallAnimal = new SmallAnimal('https://thumbs.dreamstime.com/b/coniglio-nano-6-mesi-18673069.jpg', 'Rabbit', 6);
$secondSmallAnimal = new SmallAnimal('https://wips.plug.it/cips/paginegialle.it/magazine/cms/2018/09/ricky-kharawala-10194-unsplash-1.jpg?w=744&h=418&a=c', 'Hamster', 3);
$thirdSmallAnimal = new SmallAnimal('https://lallohallo.com/wp-content/uploads/2023/01/il-porcellino-dIndia-come-animale-domestico-cosa-ce-da-sapere-scaled.jpg', 'Guinea pig', 7);

$smallAnimals = [
    $firstSmallAnimal,
    $secondSmallAnimal,
    $thirdSmallAnimal
];