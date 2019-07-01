<?php

use Illuminate\Database\Seeder;
use App\Souvenir;

class SouvenirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Maori Gifts
        $souvenir = new Souvenir(['name' => 'Koru Necklace', 'description' => 'Greenstone, hand carved',
            'supplier_id' => 1, 'category_id' => 1, 'Quantity' => 1, 'ItemPrice' => 150,
            'ImagePath' => 'images/KoruNecklace.jpg', 'IsInCart' => false
            ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'Toki Blade Necklace', 'description' => 'Greenstone, hand carved',
            'supplier_id' => 1, 'category_id' => 1, 'Quantity' => 1, 'ItemPrice' => 76,
            'ImagePath' => 'public/Images/TokiBlade.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'Pounamu Necklace', 'description' => 'Greenstone, hand carved',
            'supplier_id' => 1, 'category_id' => 1, 'Quantity' => 1, 'ItemPrice' => 228,
            'ImagePath' => 'images/Pounamu.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'Silver Disc Necklace', 'description' => 'Greenstone, hand carved',
            'supplier_id' => 1, 'category_id' => 1, 'Quantity' => 1, 'ItemPrice' => 149,
            'ImagePath' => 'images/SilverDisc.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'Canadian Jade Necklace', 'description' => 'Single Twist Necklace',
            'supplier_id' => 1, 'category_id' => 1, 'Quantity' => 1, 'ItemPrice' => 138,
            'ImagePath' => 'images/CanadianJade.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'NZ Jade Necklace', 'description' => 'Large Twist Pendant',
            'supplier_id' => 1, 'category_id' => 1, 'Quantity' => 1, 'ItemPrice' => 398,
            'ImagePath' => 'images/NZJadeLargeTwist.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        //T-Shirts
        $souvenir = new Souvenir(['name' => 'NZShirt', 'description' => 'Gender Neutral T-shirt',
            'supplier_id' => 2, 'category_id' => 2, 'Quantity' => 1, 'ItemPrice' => 30,
            'ImagePath' => 'images/NZShirt.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'All Good T-shirt', 'description' => 'Gender Neutral T-shirt',
        'supplier_id' => 2, 'category_id' => 2, 'Quantity' => 1, 'ItemPrice' => 30,
        'ImagePath' => 'images/AllGoodShirt.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'Hauraki Bhuja Hawk T-Shirt', 'description' => 'Gender Neutral T-shirt',
            'supplier_id' => 2, 'category_id' => 2, 'Quantity' => 1, 'ItemPrice' => 30,
            'ImagePath' => 'images/BhujaHawk.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'Bros T-Shirt', 'description' => "Men's T-shirt",
            'supplier_id' => 2, 'category_id' => 2, 'Quantity' => 1, 'ItemPrice' => 30,
            'ImagePath' => 'images/BrosShirt.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'Double Brown T-Shirt', 'description' => 'Gender Neutral T-shirt',
        'supplier_id' => 2, 'category_id' => 2, 'Quantity' => 1, 'ItemPrice' => 30,
        'ImagePath' => 'images/DoubleBrownShirt.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => "Kiwi Slang 90's T-Shirt", 'description' => 'Gender Neutral T-shirt',
            'supplier_id' => 2, 'category_id' => 2, 'Quantity' => 1, 'ItemPrice' => 30,
            'ImagePath' => 'images/KiwiSlangShirt.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        //Mugs

        $souvenir = new Souvenir(['name' => 'NZ Mug', 'description' => 'Silver Fern Mug',
            'supplier_id' => 3, 'category_id' => 3, 'Quantity' => 1, 'ItemPrice' => 15,
            'ImagePath' => 'images/NZMug.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'All Blacks Mug', 'description' => 'Heat Activated Mug',
            'supplier_id' => 3, 'category_id' => 3, 'Quantity' => 1, 'ItemPrice' => 15,
            'ImagePath' => 'images/AllblacksMug.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'All Blacks Beer Handle', 'description' => 'Frosted',
            'supplier_id' => 3, 'category_id' => 3, 'Quantity' => 1, 'ItemPrice' => 15,
            'ImagePath' => 'images/AllBlacksBeer.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'Fantail Mug', 'description' => 'Red',
            'supplier_id' => 3, 'category_id' => 3, 'Quantity' => 1, 'ItemPrice' => 15,
            'ImagePath' => 'images/FantailMugRed.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'Kiwi Mug', 'description' => 'Yellow',
            'supplier_id' => 3, 'category_id' => 3, 'Quantity' => 1, 'ItemPrice' => 15,
            'ImagePath' => 'images/KiwiMugYellow.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();

        $souvenir = new Souvenir(['name' => 'Pukeko Mug', 'description' => 'Blue',
            'supplier_id' => 3, 'category_id' => 3, 'Quantity' => 1, 'ItemPrice' => 15,
            'ImagePath' => 'images/PukekoMugBlue.jpg', 'IsInCart' => false
        ]);
        $souvenir->save();



    }
}
