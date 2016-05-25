<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 25-May-16
 * Time: 08:59
 */

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Modules\Product\Traits\PaymentHasRelations;
use App\Modules\Product\Contracts\PaymentHasRelationsContract;


class PaymentMethod extends Eloquent implements PaymentHasRelationsContract
{
    use PaymentHasRelations;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stockStat'

    ];

}