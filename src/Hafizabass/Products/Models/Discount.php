<?php
/**
 * Created by PhpStorm.
 * User: Hafiz
 * Date: 25-May-16
 * Time: 09:17
 */


namespace Hafizabass\Products\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\Modules\Product\Contracts\CategoryHasRelationsContract;
use App\Modules\Product\Traits\CategoryHasRelations;

class  Discount Eloquent implements CategoryHasRelationsContract
{

}