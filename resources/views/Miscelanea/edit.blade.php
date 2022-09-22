@extends('layouts.app')

@section('title', 'Create')

@section('content')

<form action="{{ route('miscelanea.update', $miscelanea->id)}}" method="POST" 
class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
@csrf
@method('put')

    <h2 class="text-2xl text-center py-4 mb-4 font-semibold"> 
        Edit Miscelanea {{ $miscelanea->id}}
    </h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Title" name="title" value="{{ $miscelanea->title}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Description" name="description" value="{{ $miscelanea->description}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Marca" name="marca" value="{{ $miscelanea->marca}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Price" name="price" value="{{ $miscelanea->price}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Existence" name="existence" value="{{ $miscelanea->existence}}">

    <button type="submit" class="my-3 w-full bg-yellow-500 p-2 font-semibold
    rounded text-white hover:bg-yellow-600"> 

    Guardar

    </button>

</form>

@endsection