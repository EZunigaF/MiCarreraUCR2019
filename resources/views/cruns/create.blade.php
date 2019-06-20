@extends('layouts.app')

@section('content')

<div class="container">
    @component('crun_form', [
    'CRUN' => null,
    'action' => route('cruns.store')
    ])
    @slot('method')
    @method('POST')
    @endslot

    @slot('button_text')
    @lang('content.create')
    @endslot
    @endcomponent
</div>

@endsection