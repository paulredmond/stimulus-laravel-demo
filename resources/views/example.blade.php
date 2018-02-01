@extends('layout')
@section('content')
    <div class="row">
        <div data-controller="clipboard">
            PIN: <input data-target="clipboard.source" type="text" value="1234" readonly>
            <button data-action="clipboard#copy">Copy to Clipboard</button>
        </div>
    </div>
@endsection
