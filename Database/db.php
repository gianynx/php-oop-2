<?php
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Category.php';
include __DIR__ . '/../Models/Food.php';

$dogCategory = new Category('Dogs');
$catCategory = new Category('Cats');

$dogProducts = [
    new Product(0, 'https://shop-cdn-m.mediazs.com/bilder/dogmio/barkis/semiumido/snack/per/cani/5/400/_dsc6323_5.jpg', 'DogMio Barkis semi-umido', 5.99, $dogCategory),
    new Food (1, 'https://shop-cdn-m.mediazs.com/bilder/dogmio/barkis/semiumido/snack/per/cani/5/400/_dsc6323_5.jpg', 'DogMio Barkis semi-umido', 5.99, $dogCategory, ['Cereali, carne e sottoprodotti animali, pesce e sottoprodotti ittici, oli e grassi'], new DateTime(17/05/2025)),
    new Product(2, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/scimmietta/in/corda/di/cotone/2/400/1_139205_sincere_baumwolltau__1_2.jpg', 'Scimmietta in corda di cotone', 5.09, $dogCategory),
    new Product(3, 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/jackson/6/400/167896_jackson_outside_res90_fg_4159_6.jpg', 'Cuccia per cani Jackson', 147.99, $dogCategory)
];

$catProducts = [
    new Product(4, 'https://shop-cdn-m.mediazs.com/bilder/kg/gratis/kg/almo/nature/holistic/per/gatti/8/400/26973_pla_almonature_fettfisch_reis_12kg_8.jpg', '12 kg Almo Nature Holistic', 52.99, $catCategory),
    new Food(5, 'https://shop-cdn-m.mediazs.com/bilder/kg/gratis/kg/almo/nature/holistic/per/gatti/8/400/26973_pla_almonature_fettfisch_reis_12kg_8.jpg', '12 kg Almo Nature Holistic', 52.99, $catCategory, ['Proteine, grassi, fibre, ceneri, calcio, fosforo, magnesio, acidi grassi'], new DateTime(2024-06-01)),
    new Product(6, 'https://shop-cdn-m.mediazs.com/bilder/tiragraffi/trixie/junior/pepito/8/400/333019_pla_trixie_junior_kratzbaum_pepito_hs_01_8.jpg', 'Tiragraffi Trixie Junior Pepito', 85.99, $catCategory),
    new Product(7, 'https://shop-cdn-m.mediazs.com/bilder/nicchia/royal/pet/white/7/400/333880_royalpet_katzenhoehle_white_07_05_2013_dsc9036_7.jpg', 'Nicchia Royal Pet White', 38.99, $catCategory)
];

var_dump($dogProducts);
var_dump($catProducts);