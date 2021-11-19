@extends('layouts.mainLayout')

@section('content')
    <div id="app">
        <profile-landlord
            user="{{ $user }}"
        />
    </div>
@endsection
