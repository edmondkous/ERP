@extends('layouts.template')

@section('content')

    <div class="content-wrapper">
         <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Validation</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                <li class="breadcrumb-item active">Validation</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-5">
            @if (session('success_message'))
            <div class="alert alert-success text-light text-center m-2" role="alert">
                {{session('success_message')}}
            </div>
            @endif
          </div>
        </div><!-- /.container-fluid -->

      </section>



      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Formulaire du produit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="POST" action={{ route('produits.store') }} enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                  <div class="card-body">

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom</label>
                      <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" value="{{old('nom')}}">
                        @error('nom')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Prix Unitaire</label>
                      <input type="text" name="prix" class="form-control" id="prix" placeholder="Prix" value="{{old('prix')}}">
                      @error('prix')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Stock</label>
                        <input type="text" name="Stock" class="form-control" id="Stock" placeholder="Stock" value="{{old('Stock')}}">

                        @error('Stock')
                             <div class="text-danger">{{ $message }}</div>
                        @enderror </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Image produit</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Image" value="{{old('image')}}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="{{old('description')}}">
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
@endsection
