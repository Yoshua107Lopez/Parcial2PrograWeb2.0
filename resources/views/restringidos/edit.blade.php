@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<form action="{{ route('restringidos.update', $restringidos->id)}}" method="POST" 
    class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    @csrf
    @method('put')

    <h2 class="text-2xl text-center py-4 mb-4 font-semibold">
         Edit Medicamentos Controlados {{ $restringidos->id}}
        </h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Name" name="name" value="{{ $restringidos->name}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Description" name="description" value="{{ $restringidos->description}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Marca" name="marca" value="{{ $restringidos->marca}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Medic Home" name="medichome" value="{{ $restringidos->medichome}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Compuest Active" name="compuesactive" value="{{ $restringidos->compuesactive}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Price" name="price" value="{{ $restringidos->price}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Existence" name="existence" value="{{ $restringidos->existence}}">

    <button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold
    rounded text-white hover:bg-green-600"> 
    Guardar

    </button>

</form>

@endsection