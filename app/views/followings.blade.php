@extends('_layouts.master')
@section('content')

@if($followings->isEmpty())

@else
    @foreach ($followings as $following)
        <p>
        $following->email = {{ $following->email }}<br/>
        $following->userProfile->name = {{ $following->userProfile->name }}
        </p>
    @endforeach
@endif

@stop