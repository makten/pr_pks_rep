<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 25-May-16
 * Time: 08:59
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Hafizabass\Products\Traits\DiscountHasRelations;
use Hafizabass\Products\Contracts\DiscountHasRelationsContract;


class Discount extends Eloquent implements PaymentHasRelationsContract
{
    use PaymentHasRelations;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'validFrom',
        'validTo',
        'extra',

    ];

}