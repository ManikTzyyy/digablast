@extends('layouts.appDashboard')

@section('title', 'Template')

@section('content')
    <h1 class="text-2xl font-bold mb-4">template</h1>
    <p>Welcome to the template!</p>
@endsection


@section('headerTitle')
    @include('components.headerTitle', [
        'title' => 'Templates List',
        'badge' => '12/20',
        'addText' => 'Add Template'
    ])
@endsection