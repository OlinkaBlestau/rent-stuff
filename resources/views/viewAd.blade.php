@extends('layouts.mainLayout')

@section('content')
    <div id="app">
        <view-ad
            things="{{ $things }}"
        />
    </div>
@endsection