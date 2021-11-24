@extends('layouts.mainLayout')

@section('content')
    <div id="app">
        <edit-ad
            thing="{{ $thing }}"
        />
    </div>
@endsection
