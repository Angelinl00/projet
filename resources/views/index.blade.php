@extends('layouts.templates.app')

@section('content')
    <div class="content">
        <x-bloc-component :name="$image1" />
        <x-bloc-component :name="$image2" />
    </div>
    <div class="footer">
        footer
    </div>
@endsection
