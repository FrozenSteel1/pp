<?php

namespace App\Traits;

use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

trait ModelsHelper
{
    /*
     * Функция isCopy применяется к обьекту модели для проверки наличия копий записей в бд с точно такими же атрибутами
     * как и в model['attributes'] если она не находит точной копии то возвращает false в противном случае возвращает id
     * первого полного совпадения
     */
    public function isCopy()
    {
        $checkingData = $this->getAttributes();
        if (isset($checkingData['_token'])) {
            unset($checkingData['_token']);
        }
        if (isset($checkingData['_method'])) {
            unset($checkingData['_method']);
        }
        $resolution = $this::where($checkingData)->get();
        if ($resolution->isEmpty()) {
            return false;
        } else {

            return $resolution->first()['id'];
        }
    }

    /*
     * Функция createPrepareObj принимает массив данных и название модели обект которой надо создать
     * Создает обьект класса $modelName
     * и записывает массив а только что созданный обьект модели который потом возвращает
     */
    public static function createPrepareObj(array $data, $modelName)
    {

        $obj = new $modelName();
        $obj->setRawAttributes($data);
        return $obj;
    }

    /*
     * Функция помощи для отображения
     */
    public function viewHelp($methodName)
    {
        dump(__METHOD__);
        $columnsName = Schema::getColumnListing($this->getTable());
        $methodController = Str::after($methodName, '::');
        $route='';
        $method='';

        switch ($methodController) {
            case 'create':
                $route=lcfirst(Str::after(get_class($this), '\\')).'.'.'store';
                $method='POST';

                break;
            case 'edit':
                $route=lcfirst(Str::after(get_class($this), '\\')).'.'.'update';
                $method='PUT';
                break;
            case 'destroy':
                $route=lcfirst(Str::after(get_class($this), '\\')).'.'.'destroy';
                $method='DELETE';
                break;

        }

        return ['columnsName' => $columnsName,'route'=>$route,'method'=>$method];

    }
}
