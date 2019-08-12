<?php

namespace App;


use App\Traits\ModelsHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;


class Product extends Model
{

    use ModelsHelper;
    protected $guarded = [''];

    /*
     * Функция saveData принимает на вход массив данных о продукте содержащий все поля модели строго под названиями в таблице
     * за исключением не заполняемых.
     * Проверяет на наличие копии функцией isCopy() трейта ModelsHelper и при отсутсвий таковой делает новую запись в БД
     * Если же ее находит копии то возвращает id первой копии
     */
    public static function saveData(array $data)
    {
        $product = ModelsHelper::createPrepareObj($data, get_class());
        $isFirstCopyId = $product->isCopy();
        if (!$isFirstCopyId) {
            $product->create($product->getAttributes());
        } else {
            return $isFirstCopyId;
        }
    }

    /*
     * Функция updateData принимает на вход массив с данными для правки и непосредственно сам экземпляр модели которую
     *  нужно исправить после чего перезаписывает модель новыми данными если все проходит удачно то возвращает количество
     * измененных строк int=1
     */
    public static function updateData(array $data, Product $changeItem)
    {
        return $changeItem->update($data);
    }

    /*
     *  Функция deleteData принимает на вход обьект модели и удаляет его
     */
    public static function deleteData(Product $item){

        return $item->delete();

    }
}
