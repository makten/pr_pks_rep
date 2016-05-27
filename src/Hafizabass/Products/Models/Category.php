<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 25-May-16
 * Time: 09:17
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use HafizAbass\Products\Contracts\CategoryHasRelationsContract;
use HafizAbass\Products\Traits\CategoryHasRelations;

class Category extends Eloquent implements CategoryHasRelationsContract
{
    use CategoryHasRelations;

    protected $fillable = [
        'name',
        'description'
    ];
}