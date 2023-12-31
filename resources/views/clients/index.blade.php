@extends('layouts.template')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-12">
                    <div class="card-header">
                        <div id="actions" class="row">

                                @include('layouts.recherche')
                        </div>

                        <div class="card-header">
                            <h1>Liste des clients</h1>
                        </div>
                    </div>

                </div>

              </div>
            </div><!-- /.container-fluid -->
          </section>

        <div class="container-fluid">
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Civilité</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>

                </tr>
                </thead>

                <tbody>

                    @forelse ( $clients as $client )
                        <tr>
                            <td>{{$client->id}}</td>
                            <td>{{$client->civilite}}</td>
                            <td>{{$client->nom}}</td>
                            <td>{{$client->prenom}}</td>
                            <td>
                                <span class="badge bg-success">{{$client->telephone}}</span>
                            </td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->adresse}}</td>
                            <td>
                                <button></button>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <th colspan="7">Aucun vendeur enregistré</th>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            </div>

                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{$clients->links()}}
                    </ul>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
        <!-- /.card -->
    </div>
    </div>

@endsection
