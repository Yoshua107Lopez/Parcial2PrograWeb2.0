@extends('layouts.app')

@section('title', 'Home')

@section('content')
    
  <h1 class="text-5xl text-center pt-24">Welcome to Farmacia los Angeles</h1>

  <body class="bg-gray-100 text-gray-800">

@if(auth()->user()->role == 'admin')
  <nav class="h-16 flex justify-end py-4 px-16"></nav>
      <a href="{{ route('medicamento.index') }}" class="border border-blue-500 
      rounded px-4 
      pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Medicamentos </a>

      <a href="{{ route('miscelanea.index') }}" class="border border-blue-500 rounded px-4 
      pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Miscelanea</a>

      <a href="{{ route('medicamento.create')}}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500
      font-semiblod mx-2 hover:bg-blue-600">Create Medicamento</a>

      <a href="{{ route('miscelanea.create')}}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500
      font-semiblod mx-2 hover:bg-blue-600">Create Miscelanea</a>

@elseif (auth()->user()->role == 'superadmin')

  <nav class="h-16 flex justify-end py-4 px-16"></nav>
        <a href="{{ route('restringidos.index') }}" class="border border-blue-500 
        rounded px-4 
        pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Medicamentos Controlados </a>

        <a href="{{ route('restringidos.create')}}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500
        font-semiblod mx-2 hover:bg-blue-600">Create Medicamentos Controlados</a>

@else

  <nav class="h-16 flex justify-end py-4 px-16"></nav>
    <a href="{{ route('medicamento.index') }}" class="border border-blue-500 
    rounded px-4 
    pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Medicamentos </a>

    <a href="{{ route('miscelanea.index') }}" class="border border-blue-500 rounded px-4 
    pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Miscelanea</a>

    <a href="{{ route('restringidos.index') }}" class="border border-blue-500 
    rounded px-4 
    pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Medicamentos Controlados </a>
 @endif

<main class="p-16 flex justify-center">
@yield('content')

<h1 class="text-5xl text-center pt-24">Lo mejor en medicamentos, con precios al alcance de su bolsillo! :)</h1>
</main>

</body>

@endsection
