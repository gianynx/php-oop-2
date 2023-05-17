<?php
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Category.php';
include __DIR__ . '/../Models/Type.php';

$dogProducts = [
    new Product(0, 'https://shop-cdn-m.mediazs.com/bilder/dogmio/barkis/semiumido/snack/per/cani/5/400/_dsc6323_5.jpg', 'DogMio Barkis semi-umido', '€ 5,99', new Category ('Dogs'), new Type ('Dog Food')),
    new Product(1, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/scimmietta/in/corda/di/cotone/2/400/1_139205_sincere_baumwolltau__1_2.jpg', 'Scimmietta in corda di cotone', '€ 5,09', new Category ('Dogs'), new Type ('Dog Toys')),
    new Product(2, 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/jackson/6/400/167896_jackson_outside_res90_fg_4159_6.jpg', 'Cuccia per cani Jackson', '€ 147,99', new Category ('Dogs'), new Type ('Dog Beds'))
];

$catProducts = [
    new Product(0, 'https://shop-cdn-m.mediazs.com/bilder/kg/gratis/kg/almo/nature/holistic/per/gatti/8/400/26973_pla_almonature_fettfisch_reis_12kg_8.jpg', '12 kg Almo Nature Holistic', '€ 52,99', new Category ('Cats'), new Type ('Cat Food')),
    new Product(1, 'https://shop-cdn-m.mediazs.com/bilder/tiragraffi/trixie/junior/pepito/8/400/333019_pla_trixie_junior_kratzbaum_pepito_hs_01_8.jpg', 'Tiragraffi Trixie Junior Pepito', '€ 85,99', new Category ('Cats'), new Type ('Cat Toys')),
    new Product(2, 'https://shop-cdn-m.mediazs.com/bilder/nicchia/royal/pet/white/7/400/333880_royalpet_katzenhoehle_white_07_05_2013_dsc9036_7.jpg', 'Nicchia Royal Pet White', '€ 38,99', new Category ('Cats'), new Type ('Cat Beds'))
];

var_dump($dogProducts);
var_dump($catProducts);