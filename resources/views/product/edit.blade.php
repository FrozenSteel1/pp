@extends('layouts.app')
@section('content')
    <div class="row">
        <div>_____________</div>
        <div class="col-7">

            <form method="POST" action="{{route('product.update',$product['id'])}}" id="formCreate" class="formCreate">
                @method('PUT')
                @csrf
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Название краски</label>
                    <input name="name" type="text" id="formCreate_name" class="form-control"
                           value="{{$product['name']}}"/>
                </div>
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Производитель</label>
                    <input name="factory" type="text" id="formCreate_factory" class="form-control"
                           value="{{$product['factory']}}"/>
                </div>
                <div class="form-group">
                    <label for="formCreate_type">Тип краски</label>
                    <select name="type" class="form-control" id="formCreate_type">
                        <option {{($product['type']=='Полиэфирные' ?  'selected':'')}}>Полиэфирные</option>
                        <option {{($product['type']=='Эпоксидные' ?  'selected' :'')}}>Эпоксидные</option>
                        <option {{($product['type']=='Эпоксидно-полиэфирные' ?  'selected' :'')}}>
                            Эпоксидно-полиэфирные
                        </option>
                        <option {{($product['type']=='Полиуретановые' ?  'selected' :'')}}>Полиуретановые</option>
                        <option {{($product['type']=='Силиконовые' ?  'selected' :'')}}>Силиконовые</option>
                        <option {{($product['type']=='Низкотемпературные' ?  'selected' :'')}}>Низкотемпературные
                        </option>
                        <option {{($product['type']=='Фотоотверждающиеся' ?  'selected' :'')}}>Фотоотверждающиеся
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formCreate_effects">Тип краски</label>
                    <select name="effects" class="form-control" id="formCreate_effects">
                        <option {{($product['effects']=='Муар' ?  'selected':'')}}>Муар</option>
                        <option {{($product['effects']=='Шагрень' ?  'selected':'')}}>Шагрень</option>
                        <option {{($product['effects']=='Металлик' ?  'selected':'')}}>Металлик</option>
                        <option {{($product['effects']=='Глянец' ?  'selected':'')}}>Глянец</option>
                        <option {{($product['effects']=='Антик' ?  'selected':'')}}>Антик</option>
                        <option {{($product['effects']=='Молотковый' ?  'selected':'')}}>Молотковый</option>
                        <option {{($product['effects']=='Кожа' ?  'selected':'')}}>Кожа</option>
                        <option {{($product['effects']=='Другие' ?  'selected':'')}}>Другие</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Цвет Ral</label>
                    <input name="ral_color" value="{{$product['ral_color']}}" type="number" id="formCreate_ral_color"
                           class="form-control"/>
                </div>
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Цена краски с заводав рублях</label>
                    <input name="price_purchase" value="{{$product['price_purchase']}}" type="number"
                           id="formCreate_price_purchase" class="form-control"/>
                </div>
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Надбавка в процентах</label>
                    <input name="margin" value="{{$product['margin']}}" type="number" id="formCreate_margin"
                           class="form-control"/>
                </div>
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Цена краски на продажу в рублях</label>
                    <input name="price_final" value="{{$product['price_final']}}" type="number"
                           id="formCreate_price_final" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="formCreate_package_name">Тип краски</label>
                    <select name="package_name" class="form-control" id="formCreate_package_name">
                        <option {{($product['package_name']=='Коробка' ?  'selected' : '')}}>Коробка</option>
                        <option {{($product['package_name']=='Мешок' ?  'selected' : '')}}>Мешок</option>
                        <option>{{($product['package_name']=='Контейнер' ?  'selected' : '')}}Контейнер</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Вес упаковки в кг</label>
                    <input name="weight" type="number" value="{{$product['weight']}}" id="formCreate_weight"
                           class="form-control"/>
                </div>
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Минимальный заказ в кг</label>
                    <input name="min_order" value="{{($product['min_order'] ? $product['min_order']:1)}}" type="number"
                           id="formCreate_min_order" class="form-control"/>
                </div>
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Время доставки в днях</label>
                    <input name="delivery_time" value="{{$product['delivery_time']}}" type="number"
                           id="formCreate_delivery_time" class="form-control"/>
                </div>
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Размер скидки</label>
                    <input name="discount" value="{{$product['discount']}}" type="number" id="formCreate_discount"
                           class="form-control"/>
                </div>
                <div class="form-group row">
                    <label for="formCreate_name" class="col-sm-2 col-form-label">Действующая акция</label>
                    <input name="stock" type="text" value="{{$product['stock']}}" id="formCreate_stock"
                           class="form-control"/>
                </div>
                <input type="submit">
            </form>
        </div>
        <div class="col-2">
            <form method="POST" action="{{route('product.destroy',$product['id'])}}" id="formDelete" class="formDelete">
                @method('DELETE')
                @csrf
                <input type="submit" value="Удалить">
            </form>
            <p>Время создания позиции</p>
            <p>Время поступления в продажу</p>
            <p>Время снятия с продажи</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
    </div>
@stop
