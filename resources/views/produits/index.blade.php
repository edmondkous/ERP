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
                                <button type="" class="btn btn-success col fileinput-button">
                                <i class="fas fa-plus"></i>
                                <a href="{{route('produits.create')}}"><span >Ajouter</span></a>
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
                            <h1>Liste des produits</h1>
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
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Description</th>
                    <th>Actions</th>

                </tr>
                </thead>

                <tbody>

                    @forelse ( $produits as $produit )
                        <tr>
                            <td>{{$produit->id}}</td>
                            <td><img src="/img/{{$produit->image}}" width="80px" class="img-circle elevation-2"></td>
                            <td>{{$produit->nom}}</td>
                            <td>
                                <span class="badge bg-info">{{$produit->prix}}FcFA</span>
                            </td>
                            <td>
                                <span class="badge bg-success">{{$produit->Stock}}</span>
                            </td>
                            <td>{{$produit->description}}</td>
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
                        {{$produits->links()}}
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
