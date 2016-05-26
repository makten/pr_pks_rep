<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 24-May-16
 * Time: 20:28
 */

namespace Hafizabass\Products\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;


trait ProductHasRelations
{
    /**
     * Property for caching categories.
     *
     * @var \Illuminate\Database\Eloquent\Collection|null
     */
    protected $categories;

    /**
     * Property for caching paymentMethods.
     *
     * @var \Illuminate\Database\Eloquent\Collection|null
     */
    protected $paymentMethods;

    /**
     * Property for caching discounts.
     *
     * @var \Illuminate\Database\Eloquent\Collection|null
     */
    protected $discounts;


    /**
     * product belongs to many categories
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(){

        return $this->belongsToMany(config('products.models.category'))->withTimestamps();
    }


    /**
     * product belongs to many payment methods
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function paymentMethods(){

        return $this->hasMany(config('products.models.paymentMethods'))->withTimestamps();
    }


    /**
     * product belongs to many payment methods
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function discounts(){

        return $this->hasMany(config('products.models.discount'))->withTimestamps();
    }


    /**
     *  Get the categories of this product in a collection
     *
     * @return \Illuminate\Database\Eloquent\Collection|null
     */
    public function getCategories()
    {
        return (!$this->categories) ? $this->categories = $this->categories()->get() : $this->categories;
    }


    /**
     * Get the payment methods of this product in a collection
     *
     * @return \Illuminate\Database\Eloquent\Collection|null
     */
    public function getPaymentMethods()
    {
        return (!$this->categories) ? $this->categories = $this->categories()->get() : $this->categories;
    }


    /**
     * Get the payment methods of this product in a collection
     *
     * @return \Illuminate\Database\Eloquent\Collection|null
     */
    public function getDiscounts()
    {
        return (!$this->discounts) ? $this->discounts = $this->discounts()->get() : $this->discounts;
    }


    public function getPrice()
    {
        return $this->price;
    }


    /**
     * Attach category to product
     *
     * @param int/\App\modules\product\models\Category $category
     * @return null|bool
     */
    public function attachCategory($category)
    {
        return (!$this->getCategories()->contains($category)) ? $this->categories()->attach($category) : true;
    }

    /**
     * Detach category from product
     *
     * @param int/\App\modules\product\models\Category $category
     * @return int
     */
    public function detachCategory($category)
    {
        $this->categories = null;
        return $this->getCategories()->detach($category);
    }


    /**
     * Attach category to product
     *
     * @param int/\App\modules\product\models\Category $category
     * @return null|bool
     */
    public function attachPaymentMethod($paymentMethod)
    {
        return (!$this->paymentMethods()->contains($paymentMethod)) ? $this->paymentMethods()->attach($paymentMethod) : true;
    }

    /**
     * Detach category from product
     *
     * @param int/\App\modules\product\models\Category $category
     * @return int
     */
    public function detachPaymentMethod($paymentMethod)
    {
        $this->paymentMethods = null;
        return $this->paymentMethods()->detach($paymentMethod);
    }

    /**
     * Attach category to product
     *
     * @param int/\App\modules\product\models\Category $category
     * @return null|bool
     */
    public function attachDiscount($discount)
    {
        return (!$this->discounts()->contains($discount)) ? $this->discounts()->attach($discount) : true;
    }

    /**
     * Detach category from product
     *
     * @param int/\App\modules\product\models\Category $category
     * @return int
     */
    public function detachDiscount($discount)
    {
        $this->discounts = null;
        return $this->discounts()->detach($discount);
    }


    /**
     * Check if product has discount
     *
     * @param int/string $discount
     * @return bool
     */
    public function hasDiscount($discount)
    {
        return $this->getDiscounts()->contains(function($key, $value) use ($discount){
            return $discount == $value->id || Str::is($discount, $value->slug);
        });
    }


    /**
     * Get number of items in stock
     *
     * @return int
     */
    public function getItemsInStock()
    {
        return $this->count();
    }



}