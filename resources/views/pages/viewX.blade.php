@extends('layout.index')
@section('main')
    <ul>
        @foreach ($tabs as $tab)
            <li>{{ $tab }}</li>
        @endforeach
    </ul>
@endsection
