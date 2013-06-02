@extends('_layouts.master')
@section('content')

@if($relationships->isEmpty())

@else
    @foreach ($relationships as $relationship)
        <p>
        $relationship->followed->email = {{ $relationship->followed->email }}<br/>
        $relationship->followed->userProfile->name = {{ $relationship->followed->userProfile->name }}
        </p>
    @endforeach
    {{ $relationships->links() }}
@endif

@stop