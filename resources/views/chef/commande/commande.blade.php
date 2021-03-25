@extends('chef.layouts')

@section('content')
    <div class="container">
        <div class="row py-2 pl-2 bg-white mt-4 shadow-sm">
            <a class="text-dark font-weight-bold" href=""> Tableau de bord >  </a> <a class="ml-1 text-dark font-weight-bold" href=""> Gestion des commandes</a>
        </div>
        
        <div class="row justify-content-center mt-4 mb-2">
            <h4 class="text-dark font-weight-bold border-left" >Liste des commandes </h4>
        </div>

        <table class="table table-light">
            <thead class="thead-dark">
                <tr>
                    <th>Numéro Commande</th>
                    <th>Numéro table</th>
                    <th>Nombre de Plat</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1001253 </td>
                    <td> Table 02 </td>
                    <td> 03 </td>
                    <td> <span class="btn btn-warning ">Encours</span> </td>
                    <td> <span class="btn btn-success "> <i class="fa fa-info-circle" aria-hidden="true"></i> détails </span> </td>
                </tr>
                <tr>
                    <td> 1001253 </td>
                    <td> Table 02 </td>
                    <td> 03 </td>
                    <td> <span class="btn btn-warning ">Encours</span> </td>
                    <td> <span class="btn btn-success "> <i class="fa fa-info-circle" aria-hidden="true"></i> détails </span> </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
