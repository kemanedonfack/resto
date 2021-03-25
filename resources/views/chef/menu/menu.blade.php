@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="principale-mf mt-3 pt-2 pl-3">
            <h6>Tableau de bord > Gestion des menus</h6>
        </div><br>
        <div class="bouton-mf ">
            <a href="#" class="btn btn-primary btn-xs">Ajouter un nouveau plat</a>
        </div>
        <div class="mt-2 tableau-fm">
            <table class="table table-striped tableau-mf rounded ">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">N²</th>
                    <th scope="col">Désignation</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="body-mf">
                  <tr class="body-mf">
                    <th scope="row">1</th>
                    <td>Couscous</td>
                    <td>Très bon</td>
                    <td>6500 FCFA</td>
                    <td><img src="" alt=""></td>
                    <td>
                        <a href="#" class="btn btn-primary btn-xs glyphicon glyphicon-pencil edition-fm">Editer</a>
                        <a href="#" class="btn btn-danger btn-xs glyphicon glyphicon-remove edition-fm"> Suprimer</a>
                    </td>
                  </tr>
                </tbody>
              </table>
              
        </div>
    </div>
@endsection