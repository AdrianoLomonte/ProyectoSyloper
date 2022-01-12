@extends('layouts.app')

@section('title', 'Contacto')

@section('content')



<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">

<form action="{{ route('contactanos.store') }}" method="POST" class="bg-white ">
    @csrf
    
        <h2 class="text-2x1 text-center py-4 mb-2 font-semibold">Dejá tu mensaje</h2>
    
        <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Nombre" name="nombre">

        @error('nombre')
        <p><strong>{{ $message }}</strong></p> 
        @enderror
    
        <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Email" name="email">

        @error('email')
        <p><strong>{{ $message }}</strong></p> 
        @enderror
    
        <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Mensaje" name="mensaje">

        @error('mensaje')
        <p><strong>{{ $message }}</strong></p> 
        @enderror
    
        <button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold rounded text-white hover:bg-green-600">Enviar</button>
    
    </form>

</div>
    @if (session('info'))
    <script>
        alert("{{session('info')}}");
    </script>
    @endif



    
    @endsection