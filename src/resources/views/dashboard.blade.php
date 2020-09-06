@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            @livewire('player')
        </div>
        <div class="col-lg-6">
            @livewire('matches')
        </div>
        <div class="col-lg-6">
            @livewire('scores')
        </div>
    </div>
@endsection
