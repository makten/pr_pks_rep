<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 25-May-16
 * Time: 09:02
 */
namespace Hafizabass\Products\Contracts;


interface PaymentHasRelationsContract
{
    /**
     * Payment method belongs to many products
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products();
}