@extends('layouts.app')

@section('content')

    <div class="costum-card px-2 py-3 mb-5">
  
        <p class="titre" background="white">Tableaux de bord</p>
                            
    </div>

    <div class="costum-card   mb-2">
        <p class="titre" background="white">Menu du Jour</p>
    </div>
    <div class="back-menu py-2 px-2">
    
        <div class="container-fluid py-5 my-4 back2 px-3">
        
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="costum-card px-2 py-3 mb-5">
                            <img class="img-fluid" src="{{asset('images/ndole.jpg')}}" alt="">
                            <p class="titre">Ndole Crevette + Plantain</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="costum-card px-2 py-3 mb-5">
                            <img class="img-fluid" src="{{asset('images/mbongo.jpg')}}" alt="">
                            <p class="titre"> Mbongo Tchobi + plantain </p>
                            
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="costum-card px-2 py-3 mb-5">
                            <img class="img-fluid" src="{{asset('images/mbongo.jpg')}}" alt="">
                            <p class="titre"> Mbongo Tchobi + plantain </p>
                           
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="costum-card px-2 py-3 mb-5">
                            <img class="img-fluid" src="{{asset('images/sanga.jpg')}}" alt="">
                            <p class="titre">Sanga</p>
                           
                  
                </div>
            </div>
        </div>
    </div>
    <div class="costum-card  mb-2">
        <p class="titre" background="white">Statistiques des Menus </p>
    </div>
@endsection