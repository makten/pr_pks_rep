<?php

namespace Hafizabass\Products\Contracts;

/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 24-May-16
 * Time: 16:18
 */
interface ProductHasRelationsContract
{


    /**
     * product belongs to many categories
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories();


    /**
     * product has many payment methods
     *
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function paymentMethods();


    /**
     * product has many sales
     *
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function discounts();


    /**
     * Get all categories as a collection
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getCategories();


    /**
     * Get all payment methods as a collection
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getPaymentMethods();


    /**
     * get the price of this product
     * @return int
     */
    public function getPrice();


    /**
     * Attach a category to  this product
     *
     * @param int/\App\modules\product\models\Category $category
     * @return mixed
     */
    public function attachCategory($category);

    /**
     * Detach this product from a category
     *
     * @param int/\App\modules\product\models\Category $category
     * @return mixed
     */
    public function detachCategory($category);


    /**
     * Attach a payment method to  this product
     *
     * @param int/\App\modules\product\models\PaymentMethod $paymentMethod
     * @return mixed
     */
    public function attachPaymentMethod($paymentMethod);


    /**
     * Detach this product from a payment method
     *
     * @param int/\App\modules\product\models\PaymentMethod $paymentMethod
     * @return mixed
     */
    public function detachPaymentMethod($paymentMethod);


    /**
     * Attach a payment method to  this product
     *
     * @param int/\App\modules\product\models\Discount $discount
     * @return mixed
     */
    public function attachDiscount($discount);


    /**
     * Detach this product from a payment method
     *
     * @param int/\App\modules\product\models\Discount $discount
     * @return mixed
     */
    public function detachDiscount($discount);



    /**
     * Check if item is on sales
     *
     * @param int/string $discount
     * @return null/bool
     */
    public function hasDiscount($discount);


    /**
     * Get number of this product in stock.
     *
     * @return int
     */
    public function getItemsInStock();


    /**
     * Get the stock status of this product
     * @return null/bool
     */
    public function inStock();


    /**
     * Get number of this product sold
     *
     * @return int
     */
    public function getItemsSold();



    /**
     * Get minimum amount for free delivery
     *
     * @return int
     */
    public function getMinFreeShipping();


    /**
     * Get delivery cost of this product
     *
     * @return int
     */
    public function getDeliveryCost();

    /**
     * Get minimum qty that can be ordered
     *
     * @return int
     */
    public function getMinQty();


    /**
     * Get maximum qty that can be ordered
     *
     * @return int
     */
    public function getMaxQty();


}