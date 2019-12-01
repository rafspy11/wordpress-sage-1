{{--
  Template Name: Departures
--}}

@extends('layouts.app')

@section('content')
  <section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Dzisiaj jest <span class="curr-date">@php echo date("d.m.Y") @endphp</span></h2>
          @foreach(Departures::getDepartures() as $post)
            {{ $post->post_title }}
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection