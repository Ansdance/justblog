@extends('layouts.appD')
@section('title-block'){{ $data->subject }}
@endsection

@section('contentD')
<h1>{{ $data->subject }}</h1>
    <div class="alert alert-info">
        <p>{{ $data->message }}</p>
        <p>{{ $data->email }} - {{ $data->name }} </p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route ('contactD-update', $data->id) }}"><button class="btn btn-info  btn-lg btn3d">Редактирование</button></a>
		<a href="{{ route ('contactD-delete', $data->id) }}"><button class="btn btn-danger btn-lg btn3d">Удалить</button></a>
    </div>
@endsection
