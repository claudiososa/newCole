@extends('layouts.admin')
@section('content')
<div class="container">
                    <div class="page-title pt30 pb30">
                        <div class="row">
                            <div class="col-sm-12">
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item ">Table</li>
                                    <li class="breadcrumb-item active">Data Tables</li>
                                </ol>
                                <h4 class="mb10">Todas las publicaciones</h4>
                            </div>
                        </div>
                    </div><!--page title-->

                    <div class="row">
                     <div class="col-md-12">
                         <div class="card">
                                <div class="card-top">
                                    <h4 class="card-title">Lista de Publicaciones</h4>

                                </div><!--card top-->
                                <div class="card-content pb20">
                                   <table id="data-table"  class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Fecha Creacion</th>
            <th>Estado</th>
            <th>Accion</th>

        </tr>
    </thead>
    <tfoot>
        <tr>
          <th>Id</th>
          <th>Titulo</th>
          <th>Fecha Creacion</th>
          <th>Estado</th>
          <th>Accion</th>
        </tr>
    </tfoot>
    <tbody>
        @forelse ($publications as $publication)
          @if ($publication->statusNew=='publicado')
            <tr class="table table-primary">
          @else
            <tr class="table table-secundary">
          @endif

              <td>{{$publication->id}}</td>
              <td>{{$publication->title}}</td>
              <td>{{$publication->created_at}}</td>
              <td>{{$publication->statusNew}}</td>
              <td><a class="btn btn-light" href="publication/edit/{{$publication->id}}">Editar</a></td>

          </tr>
        @empty

        @endforelse
    </tbody>
</table>
@if(count($publications))
      <div class="mt-2 mx-auto">
          {{$publications->links('pagination::bootstrap-4')}}
      </div>
    @endif
                                </div><!--content-->
                            </div>
                     </div>
                    </div>
                </div><!--container-->

@endsection
