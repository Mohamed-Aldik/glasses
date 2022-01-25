@extends('layouts.index')


@if(isset($title ))

@section('URLL', __('messages.'.$title) )
@else
@section('URLL', __('messages.home') )
@endif

@section('content')       
    {{ $slot }}
@endsection
