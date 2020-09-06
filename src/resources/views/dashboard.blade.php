@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-lg-4">
            @livewire('player')
        </div>
        <div class="col-sm-6 col-lg-4">
            @livewire('matches')
        </div>
        <div class="col-sm-6 col-lg-4">
            @livewire('scores')
        </div>
    </div>
@endsection
