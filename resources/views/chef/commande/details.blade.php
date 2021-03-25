@extends('layouts.app')

@section('content')
<style>
    .cbt_head{
        margin-top: 15px;
        background-color: #FFFFFF;
        padding-top: 8px;
        padding-bottom: 3px;
        padding-left: 10px;
        border-radius: 10px;
        width: 1160px;
        margin-left: 80px;
        margin-right: 80px;
    }

    .cbt_detail{
        margin-top: 40px;
        background-color: #FFFFFF;
        width: 100%;
        height: 300px;
        border-radius: 25px;
        padding-top: 25px;
        padding-bottom: 25px;
        padding-left: 10px;
        padding-right: 10px
    }

    .cbt_detailImg{
        border-radius: 20px;
        margin-left: 0;
    }

    .cbt_btn_validate{
        color: #FFFFFF;
        font-size: 18px;
        border-radius: 25px;
        width: 180px;
        padding: 8px;
        background-color: #0F881F;
    }
</style>


<div class="cbt_head">
    <h4 class="">Dashboard > Commande > Details</h4>
</div>

<div class="container cbt_main">
    <div class="row">
        <div class="row cbt_detail">
            <div class="col-sm-5">
                <img class="cbt_detailImg" src="{{asset('images/ndole.jpg')}}" alt="" height="250" width="420">
            </div>
            <div class="col-sm text-justify">
                <h3>Ndole avec Plantain</h3>
                <div class="row col-sm">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut possimus asperiores
                    sequi in deserunt, iure veniam, voluptate saepe molestiae iste harum odit id
                    voluptas vel sed, beatae doloribus. Cumque, suscipit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rerum provident adipisci molestiae est voluptatem repellendus ex accusantium
                    architecto tempora dignissimos! Pariatur culpa eum dolore. Quas obcaecati laudantium
                    facilis. Ad, cupiditate.</p>

                    <div class="d-flex flex-row-reverse bd-highlight">
                        <a href="" class="btn cbt_btn_validate">Valider</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container cbt_main">
    <div class="row">
        <div class="row cbt_detail">
            <div class="col-sm-5">
                <img class="cbt_detailImg" src="{{asset('images/ndole.jpg')}}" alt="" height="250" width="420">
            </div>
            <div class="col-sm text-justify">
                <h3>Ndole avec Plantain</h3>
                <div class="row col-sm">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut possimus asperiores
                    sequi in deserunt, iure veniam, voluptate saepe molestiae iste harum odit id
                    voluptas vel sed, beatae doloribus. Cumque, suscipit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rerum provident adipisci molestiae est voluptatem repellendus ex accusantium
                    architecto tempora dignissimos! Pariatur culpa eum dolore. Quas obcaecati laudantium
                    facilis. Ad, cupiditate.</p>

                    <div class="d-flex flex-row-reverse bd-highlight">
                        <a href="" class="btn cbt_btn_validate">Valider</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container cbt_main">
    <div class="row">
        <div class="row cbt_detail">
            <div class="col-sm-5">
                <img class="cbt_detailImg" src="{{asset('images/ndole.jpg')}}" alt="" height="250" width="420">
            </div>
            <div class="col-sm text-justify">
                <h3>Ndole avec Plantain</h3>
                <div class="row col-sm">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut possimus asperiores
                    sequi in deserunt, iure veniam, voluptate saepe molestiae iste harum odit id
                    voluptas vel sed, beatae doloribus. Cumque, suscipit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rerum provident adipisci molestiae est voluptatem repellendus ex accusantium
                    architecto tempora dignissimos! Pariatur culpa eum dolore. Quas obcaecati laudantium
                    facilis. Ad, cupiditate.</p>

                    <div class="d-flex flex-row-reverse bd-highlight">
                        <a href="" class="btn cbt_btn_validate">Valider</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
