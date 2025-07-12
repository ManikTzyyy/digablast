@extends('layouts.appDashboard')

@section('title', 'Contact')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Contact</h1>
    <p>Welcome to the Contact!</p>
@endsection


@section('headerTitle')
    @include('components.headerTitle', [
        'title' => 'Contacts List',
        'badge' => '50/100',
        'addText' => 'Add Contact'
    ])
@endsection