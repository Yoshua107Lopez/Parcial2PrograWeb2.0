@extends('layouts.app')

@section('title', 'Create')

@section('content')

<form action="{{ route('miscelanea.store')}}" method="POST" 
class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
@csrf

    <h2 class="text-2xl text-center py-4 mb-4 font-semibold"> Create Miscelanea </h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Title" name="title">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Description" name="description">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Marca" name="marca">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Price" name="price">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-900"
    placeholder="Existence" name="existence">

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold
    rounded text-white hover:bg-blue-600"> 

    Guardar

    </button>

</form>

@endsection