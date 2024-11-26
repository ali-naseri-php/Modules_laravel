@extends('account::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('account.name') !!}</p>
@endsection
