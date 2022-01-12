@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


  <form class="form-inline my-2 my-lg-0">
    <input class="form-control me-2" name="buscarpor" type="search" placeholder="Buscar" aria-label="Search" >

    <button class="btn btn-success my-2 my-sm-0 font-semibold rounded bg-pink-300 hover:bg-pink-400" type="submit">Buscar</button>
  </form>


    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-pink-400 text-white">
          <th class="w-20 py-4 ...">ID</th>
          <th class="w-1/16 py-4 ...">Titulo</th>
          <th class="w-1/16 py-4 ...">Creacion</th>
          <th class="w-1/8 py-4 ...">Descripcion</th>
          <th class="w-1/8 py-4 ...">Imagen</th>
          <th class="w-28 py-4 ...">Eliminar</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($losposts as $row)
            
        
        <tr>
          <td class="py-3 px-6">{{ $row->id }}</td>
          <td class="p-3 text-center">{{ $row->titulo }}</td>
          <td class="p-3 text-center">{{ $row->created_at }}</td>
          <td class="p-3 text-center">{{ $row->descripcion }}</td>
          <td>
            <img src="/foto/{{ $row->foto }}" width="30%" height="30%">
          </td>


          <td class="p-3">
            <!-- Form para eliminar posts   -->
            <form action="{{ route('posts.destroy', $row->id) }}" method="POST">
              @csrf
              @method('delete')

              <button class="bg-red-500 text-white px-10 py-1 rounded-sm">
              <i class="fas fa-trash"></i></button>

            </form>
          </td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
</div>

@endsection