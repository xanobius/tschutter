@extends('layouts.app')

@section('content')
    <div class="row dashboard">
        @livewire('player')
        @livewire('matches')
        @livewire('scores')
    </div>
@endsection
