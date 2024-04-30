@extends('layouts.app')

@section('content')
    @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <form action="{{route('update.casal')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$casal->id}}">
        <input type="text" name="nom" id="nom" value="{{$casal->nom}}">
        <input type="date" name="data_inici" id="data_inici" value="{{$casal->data_inici}}">
        <input type="date" name="data_final" id="data_final" value="{{$casal->data_final}}">
        <input type="number" name="n_places" id="n_places" value="{{$casal->n_places}}">
        
        <input type="submit" value="enivar">
    </form>
@endsection