<?php

namespace App;

use App\Traits\ModelsHelper;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use ModelsHelper;
    protected $guarded = [''];

    public static function viewData($methodName)
    {
        $delivery = new Delivery;
        $viewData=$delivery->viewHelp($methodName);

        return $viewData;
    }
}
