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
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Message</h1>
            </div>
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
                  <h3 class="card-title">Formulaire du client</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="POST" action={{ route('clients.store') }}>
                    @csrf
                    @method('POST')

                  <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Civilité</label>
                        <input type="text" name="civilite" class="form-control" id="civilite" placeholder="civilite" value="{{old('civilite')}}">
                          @error('civilite')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nom</label>
                      <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" value="{{old('nom')}}">
                        @error('nom')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Prenom</label>
                      <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prenom" value="{{old('prenom')}}">
                      @error('prenom')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">telephone</label>
                        <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Telephone" value="{{old('telephone')}}">

                        @error('telephone')
                             <div class="text-danger">{{ $message }}</div>
                        @enderror </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Adresse</label>
                        <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse" value="{{old('adresse')}}">
                        @error('adresse')
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
