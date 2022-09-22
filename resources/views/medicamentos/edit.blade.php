@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<form action="{{ route('medicamento.update', $medicamentos->id)}}" method="POST" 
    class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
    @csrf
    @method('put')

    <h2 class="text-2xl text-center py-4 mb-4 font-semibold">
         Edit Medicamentos {{ $medicamentos->id}}
        </h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Name" name="name" value="{{ $medicamentos->name}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Description" name="description" value="{{ $medicamentos->description}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Marca" name="marca" value="{{ $medicamentos->marca}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Medic Home" name="medichome" value="{{ $medicamentos->medichome}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Compuest Active" name="compuesactive" value="{{ $medicamentos->compuesactive}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Price" name="price" value="{{ $medicamentos->price}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Existence" name="existence" value="{{ $medicamentos->existence}}">

    <button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold
    rounded text-white hover:bg-green-600"> 
    Guardar

    </button>

</form>

@endsection