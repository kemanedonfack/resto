@extends('layouts.app')

@section('content')

<div class="container-fluid back-menu">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-5 card p-4 backflou">
                <form action="">
                    <h3 align="center" class="text-white py-2">SE CONNECTER</h3>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white" id="basic-addon1"> <i class="fa fa-user" aria-hidden="true"></i> </span>
                        <input type="text" placeholder="Nom de l'utilisateur" class="form-control form-control-lg">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i> </span>
                        <input type="text" placeholder="Mot de passe" class="form-control form-control-lg">
                    </div>
                    <div align="center" class ="form-group">
                        <button type= "submit" class="btn btn-success btn-lg">Connexion</button>    
                    </div>
                </form>   
            </div> 
        </div>
    </div>

</div>

@endsection