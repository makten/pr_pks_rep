<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 24-May-16
 * Time: 20:39
 */

return [

    /*
   |--------------------------------------------------------------------------
   | Package Connection
   |--------------------------------------------------------------------------
   |
   | A different connection can be set for this package. When this option is null,
   | it will connect to the main database, which is set up in database.php
   |
   */

    'connection' => null,

    /*
    |--------------------------------------------------------------------------
    | Slug Separator
    |--------------------------------------------------------------------------
    |
    | Here you can change the slug separator. This is very important in matter
    | of magic method __call() and also a `Slugable` trait. The default value
    | is a dot.
    |
    */

    'separator' => '.',

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------    |
    |
    | Custom models can be assign to this package
    |
    */

    'models' => [
        'product' => Modules\Product\Models\Product::class,
        'category' => Modules\Product\Models\Category::class,
        'paymentMethod' => Modules\Product\Models\PaymentMethod::class,
        'discount' => Modules\Product\Models\Discount::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Roles, Permissions and Allowed "Pretend"
    |--------------------------------------------------------------------------
    |
    | You can pretend or simulate package behavior no matter what is in your
    | database. It is really useful when you are testing your application.
    | Set up what will methods is(), can() and allowed() return.
    |
    */

    'pretend' => [

        'enabled' => false,

        'options' => [
            'inStock' => true,
            'isOnSale' => true,
        ],

    ],


];