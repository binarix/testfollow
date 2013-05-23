@extends('_layouts.master')
@section('content')

@if($followings->isEmpty())

@else
    @foreach ($followings as $following)
        <p>
        $following->email = {{ $following->email }}<br/>
        $following->userprofile->name = {{ $following->userprofile->name }}
        </p>
    @endforeach
@endif

@stop