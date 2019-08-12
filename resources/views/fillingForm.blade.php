@extends('layouts.app')
@section('content')
    <div id="containerForm" class="containerForm">

        @php
            if (isset($viewData['id'])){
            echo '<form  method="POST" action="'.route('delivery.update',$viewData['id']).'" id="formCreate" class="formCreate">';
            echo '<input type="hidden" name="_method" value="'.$viewData['method'].'">';
            }
        @endphp
        <form  method="POST" action="{{route('delivery.store')}}" id="formCreate" class="formCreate">
            @csrf






{{--            <input type="hidden" name="_method" value="{{$viewData['method']}}">--}}
            <div class="form-group row">
                <label for="formCreate_name" class="col-sm-2 col-form-label">Название краски</label>
                <input name="name" type="text" id="formCreate_name" class="form-control" value="Красивенькая"/>
            </div>
            <div class="form-group row">
                <label for="formCreate_name" class="col-sm-2 col-form-label">Производитель</label>
                <input name="factory" type="text" id="formCreate_factory" class="form-control" value="Собственное производство"/>
            </div>
            <div class="form-group">
                <label for="formCreate_type">Тип краски</label>
                <select name="type" class="form-control" id="formCreate_type">
                    <option>Полиэфирные</option>
                    <option>Эпоксидные</option>
                    <option>Эпоксидно-полиэфирные</option>
                    <option>Полиуретановые</option>
                    <option>Силиконовые</option>
                    <option>Низкотемпературные</option>
                    <option>Фотоотверждающиеся</option>
                </select>
            </div>
            <div class="form-group">
                <label for="formCreate_effects">Тип краски</label>
                <select name="effects" class="form-control" id="formCreate_effects">
                    <option>Муар</option>
                    <option>Шагрень</option>
                    <option>Металлик</option>
                    <option>Глянец</option>
                    <option>Антик</option>
                    <option>Молотковый</option>
                    <option>Кожа</option>
                    <option>Другие</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="formCreate_name" class="col-sm-2 col-form-label">Цвет Ral</label>
                <input name="ral_color" value="1000" type="number" id="formCreate_ral_color" class="form-control"/>
            </div>
            <div class="form-group row">
                <label for="formCreate_name" class="col-sm-2 col-form-label">Цена краски с заводав рублях</label>
                <input name="price_purchase" value="100" type="number" id="formCreate_price_purchase" class="form-control"/>
            </div>
            <div class="form-group row">
                <label for="formCreate_name"  class="col-sm-2 col-form-label">Надбавка в процентах</label>
                <input name="margin"  value="10" type="number" id="formCreate_margin" class="form-control"/>
            </div>
            <div class="form-group row">
                <label for="formCreate_name" class="col-sm-2 col-form-label">Цена краски на продажу в рублях</label>
                <input name="price_final" value="110" type="number" id="formCreate_price_final" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="formCreate_package_name">Тип краски</label>
                <select name="package_name" class="form-control" id="formCreate_package_name">
                    <option>Коробка</option>
                    <option>Мешок</option>
                    <option>Контейнер</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="formCreate_name" class="col-sm-2 col-form-label">Вес упаковки в кг</label>
                <input name="weight" type="number" value="20" id="formCreate_weight" class="form-control"/>
            </div>
            <div class="form-group row">
                <label for="formCreate_name" class="col-sm-2 col-form-label">Минимальный заказ в кг</label>
                <input name="min_order" value="1" type="number" id="formCreate_min_order" class="form-control"/>
            </div>
            <div class="form-group row">
                <label for="formCreate_name" class="col-sm-2 col-form-label">Время доставки в днях</label>
                <input name="delivery_time" value="1" type="number" id="formCreate_delivery_time" class="form-control"/>
            </div>
            <div class="form-group row">
                <label for="formCreate_name" class="col-sm-2 col-form-label">Размер скидки</label>
                <input name="discount" value="0" type="number" id="formCreate_discount" class="form-control"/>
            </div>
            <div class="form-group row">
                <label for="formCreate_name" class="col-sm-2 col-form-label">Действующая акция</label>
                <input  name="stock" type="text" value="Нет" id="formCreate_stock" class="form-control"/>
            </div>
            <input type="submit">
        </form>
        @php
            if ($viewData['method']=='DELETE'){
            echo '<form  method="POST" action="'.route('delivery.destroy',$viewData['id']).'" id="formCreate" class="formCreate">';
            echo '<input type="hidden" name="_method" value="'.$viewData['method'].'">';
            }
        @endphp
        <form method="POST" action="{{route('product.destroy',$product['id'])}}" id="formDelete" class="formDelete">
            @method('DELETE')

            <input type="submit" value="Удалить">
        </form>

    </div>
@stop
