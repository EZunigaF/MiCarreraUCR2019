@extends('layouts.app')

@section('content')

    @component('components.crun_form', [
        'test' => $test,
        'action' => route('tests.update',$test->id),
    ])
        @slot('method')
            @method('PUT')
        @endslot

        @slot('button_text')
            @lang('Actualizar')
        @endslot
    @endcomponent

@endsection