@extends('layouts.app')

@section('content')

@if($errors->any())
{!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
    <form action="{{route('post.casal')}}" method="post">
        @csrf
        <input type="text" name="nom" id="nom">
        <input type="date" name="data_inici" id="data_inici">
        <input type="date" name="data_final" id="data_final">
        <input type="number" name="n_places" id="n_places">
        
        <input type="submit" value="enivar">
    </form>
@endsection
