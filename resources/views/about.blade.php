@extends('layouts.app')

@section('title')
  About
@endsection

@section('content')
  <h1>About page</h1>

  <section>
    @include('partials.card')
  </section>

  <section>
    <h2>Title</h2>
  </section>
@endsection

