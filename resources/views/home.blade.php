@extends('layouts.app')

@section('content')



<h1> {{ Auth::user()->id }} </h1>
<h1> {{ Auth::user()->name }} </h1>
<h1> {{ Auth::user()->email }} </h1>


@endsection
