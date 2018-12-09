{{--
список продуктов--}}
 {{--@include('header.php');--}}
 @extends('admin.layout')
@section('content')
    <div style="margin-bottom: 15px;">
        <a href="{{ route('shops.create')}}" class="btn btn-primary"> Создать магазин</a>
    </div>
    <h2>Список магазинов</h2>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <td>Логотип</td>
            <td>Название</td>
            <td>Город</td>
            <td>Адрес</td>
            <td>email</td>
            <td>Номера телефонов</td>
            <td>Официальный сайт</td>

        </tr>
    @foreach($shops as $shop)
        <tr>
            <td>{{$shop['img']}}</td>
            <td>{{$shop['name']}}</td>
            <td>{{$shop['city']}}</td>
            <td>{{$shop['address']}}</td>
            <td>{{$shop['email']}}</td>
            <td>{{$shop['telephone']}}</td>
            <td>{{$shop['URL']}}</td>
            <td>
                <form action="{{route('shops.destroy',[$shop->id])}}"></form>

            </td>
            <td>
            <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['shops.destroy', $shop->id]]) !!}
                {!! Form::submit('Удалить', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Вы уверены?");']) !!}
                {!! Form::close() !!}

            </td>

            <td><a href ="{{route('shops.edit', [$shop->id])}}" class="btn btn-success"><span class="fa fa-edit"></span> Редактировать</a></td>
        </tr>

    @endforeach
    </table>
    @endsection