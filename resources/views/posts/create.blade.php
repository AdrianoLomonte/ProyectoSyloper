@extends('layouts.app')

@section('title', 'Crear')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
@csrf

    <h2 class="text-2x1 text-center py-4 mb-2 font-semibold">Crear Posts</h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Titulo" name="titulo">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Slug" name="slug">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Descripcion" name="descripcion">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" type="file" name="foto" id="foto">

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-white hover:bg-blue-600">Crear</button>

</form>
</div>
@endsection