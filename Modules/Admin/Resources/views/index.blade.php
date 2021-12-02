@extends('admin::layouts.main')

{{-- @section('sidebar')
    <ul>
        <li>Main</li>
        <li>Components</li>
    </ul>
@endsection --}}

@section('content')
    @include('components::counter.index', ['title' => 'Counter', 'number' => 10])

    @component('components::list.index', ['title' => 'List', 'items' => ['First', 'Second', 'Last']])
        This is just an description with a link to <a href="https://google.com" rel="nofollow">Google</a>
    @endcomponent
@endsection
