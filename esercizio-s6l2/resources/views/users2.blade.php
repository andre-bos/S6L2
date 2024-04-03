@extends('templates.layout')

@section('title', $title)

@section('content')
    <x-alert type="info" msg="Questo è un Alert" />
    <x-alert type="danger" msg="Questo è un Alert Danger" />
    {{-- Message può anche avere un valore passato alla vista direttamente dal controller. In questo caso si utilizzeranno i due punti --}}
    <x-alert type="danger" :$msg />
    @component('components.card')
        @slot('users', $users)
    @endcomponent
@endsection