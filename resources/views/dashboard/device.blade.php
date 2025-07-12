@extends('layouts.appDashboard')

@section('title', 'Device')

@section('content')
    <h1 class="text-2xl font-bold mb-4">device</h1>
    <p>Welcome to the device!</p>
@endsection


@section('headerTitle')
    @include('components.headerTitle', [
        'title' => 'Devices List',
        'badge' => '3/10',
        'addText' => 'Add Device'
    ])
@endsection