@extends('layouts.mainLayout')

@section('content')
    <div id="app">
        <edit-landlord
            user="{{ $user }}"
        />
    </div>
@endsection
