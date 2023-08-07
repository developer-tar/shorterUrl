@extends('app')

@section('content')
    @include('header')
   
    <div class="container">
    <a href="/dashboard">Go back</a>
    <h3>Your original url is <strong>{{isset($record) ? url($record->original_url):''}}</strong></h3>
   

</div>

@endsection