@extends('layouts.template')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-12">
                    <div class="card-header">
                        <div id="actions" class="row">
                          <div class="col-lg-6">
                            <div class="btn-group w-100">
                              <span class="btn btn-success col fileinput-button">
                                <i class="fas fa-plus"></i>
                                <span>Ajouter</span>
                              </span>
                              <button type="submit" class="btn btn-primary col start">
                                <i class="fas fa-upload"></i>
                                <span>Exporter</span>
                              </button>
                              <button type="reset" class="btn btn-warning col cancel">
                                <i class="fas fa-times-circle"></i>
                                <span>Importer</span>
                              </button>
                            </div>
                          </div>
                        </div>

                        <div class="card-header">
                            <h1>Liste de vendeur</h1>
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
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>

                </tr>
                </thead>

                <tbody>

                    @forelse ( $vendeurs as $vendeur )
                        <tr>
                            <td>{{$vendeur->id}}</td>
                            <td>{{$vendeur->nom}}</td>
                            <td>{{$vendeur->prenom}}</td>
                            <td>
                                <span class="badge bg-success">{{$vendeur->telephone}}</span>
                            </td>
                            <td>{{$vendeur->email}}</td>
                            <td>{{$vendeur->adresse}}</td>
                            <td>
                                <button></button>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <th colspan="6">Aucun vendeur enregistré</th>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            </div>

                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{$vendeurs->links()}}
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
