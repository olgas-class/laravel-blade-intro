@extends('layouts.app')

@section('title')
  Home
@endsection

@section('content')
  <h1>Hello {{ $username }} from laravel</h1>
  <section>
    <h2>Lista di studenti</h2>
    <ul>
      {{-- @if (count($students) > 0)
        @foreach ($students as $student)
          <li>
            <h4>{{ $student['name'] }} {{ $student['lastname'] }}</h4>
            <p>Età: {{ $student['age'] }} anni</p>
          </li>
        @endforeach
      @else
        <li>Non ci sono ancora studenti in questa lista</li>
      @endif --}}

      @forelse ($students as $student)
        <li>
          <h4>{{ $student['name'] }} {{ $student['lastname'] }}</h4>
          <p>Età: {{ $student['age'] }} anni</p>
        </li>
      @empty
        <li>Non ci sono ancora studenti in questa lista</li>
      @endforelse

    </ul>
  </section>
@endsection
