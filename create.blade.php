@extends('admin.layout')
@section('content')
    <h1>Создать магазин</h1>

    {!! Form::open(['route' => 'shops.store']) !!}                             {{--  не работает--}}
    <div class="form-group">
    {{ Form::label('img', 'Логотип') }}
    {{ Form::text('img', $shop->img, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('name', 'Название') }}
        {{ Form::text('name', $shop->name, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        <div class="form-group">
        {{ Form::label('city', 'Город') }}
        {{ Form::textarea('city', $shop->city, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Адрес') }}
        {{ Form::text('address', $shop->address, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'email') }}
        {{ Form::text('email', $shop->email, ['class' =>'form-control']) }}
    </div> <div class="form-group">
        {{ Form::label('URL', 'Официальный сайт') }}
        {{ Form::text('URL', $shop->URL, ['class' =>'form-control']) }}
    </div>
    {{ Form::submit('Создать магазин', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection
   {{-- <div class="row">                                           //работает
    <form action="{{route('shops.store')}}" method="post">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Логотип</label>
                <input type="text" name="img">
            </div>
        </div>
        {{csrf_field()}}
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <label>Название</label>
                <input type="text" name="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Город</label>
                <input type="text" name="city">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Адрес</label>
                <input type="text" name="address">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>email</label>
                <input type="email" name="email">
            </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Номер телефона</label>
            <input type="text" name="telephone">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label>Официальный сайт</label>
            <input type="text" name="URL">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Создать</button>
    </div>

</form>
    </div>--}}
{{--
@endsection--}}
