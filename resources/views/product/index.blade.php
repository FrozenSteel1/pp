@extends('layouts.app')
@section('content')
    <table>
        <thead>
        <tr>
            <th> id</th>
            <th> name</th>
            <th> factory  </th>
            <th> type  </th>
            <th> effects </th>
            <th> ral </th>
            <th> priceP</th>
            <th> margin </th>
            <th> priceF</th>
        </tr>
        </thead>
        <tbody>
        @foreach($all as $item)
            <a href="{{route('product.edit',$item['id'])}}" > <tr>
                 <td> <a href="{{route('product.edit',$item['id'])}}">Изменить</a></td>
                <td> {{$item->id}} </td>
                <td> {{$item->name}} </td>
                <td> {{$item->factory}} </td>
                <td> {{$item->type}} </td>
                <td> {{$item->effects}} </td>
                <td> {{$item->ral_color}} </td>
                <td> {{$item->price_purchase}} </td>
                <td> {{$item->margin}} </td>
                <td> {{$item->price_final}} </td>
            </tr>


        @endforeach
        </tbody>
    </table>
    {{$all->render()}}

@stop
