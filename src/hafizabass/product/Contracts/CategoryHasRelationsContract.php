<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 25-May-16
 * Time: 09:19
 */

namespace App\Modules\Product\Contracts;


interface CategoryHasRelationsContract
{

    /**
     * Category belongs to many products
     *
     * @return  \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products();
}