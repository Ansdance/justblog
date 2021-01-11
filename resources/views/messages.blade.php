@extends('layouts.appD')
@section('title-block')Все Сообщения
@endsection
@section('contentD')
<h1>Все сообщения</h1>
@foreach($data as $el)
    <div class="alert alert-info">
        <h3>{{ $el->subject }}</h3>
        <p>{{ $el->email }}</p>
        <p><small>{{ $el->created_at }}</small></p>
        <a href="{{ route('contactD-data-one', $el->id) }}"><button class="btn btn-warning btn-lg btn3d">Детальнее</button></a>
    </div>
@endforeach
@endsection
