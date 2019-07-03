@extends('layouts.app')

@section('content')

<div class="container">
    @component('components.crun_form', [
    'test' => null,
    'action' => route('tests.store')
    ])
    @slot('method')
        @method('POST')
    @endslot

    @slot('button_text')
    @lang('Añadir')
    @endslot
    @endcomponent
</div>

@endsection