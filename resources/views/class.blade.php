@extends('layouts.mainLayout')

@section('title', 'class')

@section('content')
    <table class = 'table'>
            <tr>
                <th>No</th>
                <th>Class</th>
            </tr>
        @foreach ($class as $data)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $data['name'] }}</td
            </tr>
        @endforeach
    </table>

@endsection
