@extends('app')


@section('content')

<div class="row" id="crud">
    <div class="col-x-12">
        <h1  class="page-header mt-4 mb-4">CRUD Laravel&Vuejs</h1>

    </div>

    <div class="col-md-7">

    <a href="#" class="btn btn-primary float-right mb-4">Nova Trefa</a>

        <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Tarefa</th>
                  <th colspan="2">
                      &nbsp;
                  </th>
                </tr>
              </thead>


              <tbody>
                <tr v-for="keep in keeps">

                  <td width="10px">1</td>
                  <td>Tarefa 1</td>
                  <td width="10px">
                      <a href="" class="btn btn-warning btn-sm">Editar</a>
                  </td>
                  <td width="10px">
                      <a href="" class="btn btn-danger btn-sm">Excluir</a>
                  </td>
                </tr>
              </tbody>

        </table>
    </div>
    <div class="col-md-5">
        <pre>
            @{{ $data }}
        </pre>

    </div>


</div>

@endsection
