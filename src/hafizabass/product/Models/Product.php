<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 24-May-16
 * Time: 16:36
 */

namespace App\Modules\Product\Models;


use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Modules\Product\Traits\ProductHasRelations;
use App\Modules\Product\Contracts\ProductHasRelationsContract;

class Product extends Eloquent implements ProductHasRelationsContract
{
    use ProductHasRelations;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stockStat',
        ''

    ];

    /**
     * Get the stock status of this product
     * @return null/bool
     */
    public function inStock()
    {
        // TODO: Implement inStock() method.
    }

    /**
     * Get number of this product sold
     *
     * @return int
     */
    public function getItemsSold()
    {
        // TODO: Implement getItemsSold() method.
    }

    /**
     * Get minimum amount for free delivery
     *
     * @return int
     */
    public function getMinFreeShipping()
    {
        // TODO: Implement getMinFreeShipping() method.
    }

    /**
     * Get delivery cost of this product
     *
     * @return int
     */
    public function getDeliveryCost()
    {
        // TODO: Implement getDeliveryCost() method.
    }

    /**
     * Get minimum qty that can be ordered
     *
     * @return int
     */
    public function getMinQty()
    {
        // TODO: Implement getMinQty() method.
    }

    /**
     * Get maximum qty that can be ordered
     *
     * @return int
     */
    public function getMaxQty()
    {
        // TODO: Implement getMaxQty() method.
    }
}