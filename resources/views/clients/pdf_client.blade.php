<head>
    <style>
        table tr th,
        table tr th{
            padding: 5px 15px;
        }

    </style>
</head>

<div class="card">
    <h1>Liste des clients du mois de Janvier</h1>
</div>

<div class="card">

    <!-- /.card-header -->
    <div class="card-body p-0">
    <table class="table table-sm" border='1' cellppading="0" cellspacing="0">
        <thead>
        <tr align='left'>
            <th style="width: 10px">Id</th>
            <th>Civilité</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Adresse</th>

        </tr>
        </thead>

        <tbody>

            @forelse ( $clients as $client )
                <tr align='left'>
                    <td>{{$client->id}}</td>
                    <td>{{$client->civilite}}</td>
                    <td>{{$client->nom}}</td>
                    <td>{{$client->prenom}}</td>
                    <td>
                        <span class="badge bg-success">{{$client->telephone}}</span>
                    </td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->adresse}}</td>


                </tr>
            @empty
                <tr>
                    <th colspan="7">Aucun vendeur enregistré</th>
                </tr>
            @endforelse

        </tbody>
    </table>
    </div>
    </div>
    <!-- /.card-body -->
</div>
