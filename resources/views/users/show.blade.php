@extends('layouts.default')

@section('title', $user->name)
@section('content')
<div class="row">
  <div class="col-md-offset-2 col-md-8">
    <div class="col-md-12">
      <div class="col-md-offset-2 col-md-8">
        <section class="user_info">
          @include('shared._user_info')
        </section>
        <section class="stats">
          @include('shared._stats')
        </section>
      </div>
    </div>
    <div class="col-md-12">
      @if (Auth::check())
        @include('users._follow_form')
      @endif
	    @include('shared._feed')
    </div>
  </div>
</div>
@stop