<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 25-May-16
 * Time: 09:09
 */

namespace Hafizabass\Products\Traits;

use Illuminate\Database\Eloquent\Model;

trait PaymentHasRelations
{

    /**
     * Payment method belongs to many products
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(config('product.models.product'))->withTimestamps();
    }
}