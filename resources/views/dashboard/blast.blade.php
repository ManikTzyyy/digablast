@extends('layouts.appDashboard')

@section('title', 'Blast')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Blast</h1>
    <p>Welcome to the Blast!</p>
@endsection


@section('headerTitle')
    @include('components.headerTitle', [
        'title' => 'Blast List',
        'badge' => '45/50',
        'addText' => 'Add Data'
    ])
@endsection