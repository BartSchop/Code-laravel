@extends('layouts.app')

@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default panel-size-fix">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Corporeal beast....
                    <img src="{{ URL::to('/') }}/img/corporeal_beast.png">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
