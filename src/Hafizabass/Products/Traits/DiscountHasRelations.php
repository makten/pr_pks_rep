<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 25-May-16
 * Time: 09:20
 */

namespace Hafizabass\Products\Traits;

use Illuminate\Database\Eloquent\Model;


trait DiscountHasRelations
{

    /**
     * Category belongs to many products
     *
     * @return  \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(config('products.models.product'))->withTimestamps();
    }
}