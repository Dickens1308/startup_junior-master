@extends('layouts.mentor.app')

@section('content')
    <div class="page-hero page-container" id="page-hero">
        <div class="padding d-flex">
            <div class="page-title">
                <h2 class="text-md text-highlight">Dashboard</h2>
                <small class="text-muted">Welcome aboard,
                    <strong>{{ Auth::user()->name }}</strong>
                </small>
            </div>
            <div class="flex"></div>
            <div></div>
        </div>
    </div>
@endsection
