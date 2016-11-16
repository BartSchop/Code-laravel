@extends('layouts.app')
{{ $boss_info = false }}
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-size-fix">
                <div class="panel-heading">Player Progress</div>
                <div class="body-panel">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/HiScores') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Search
                                    </button>
                                </div>
                                <div class="col-md-2" style="margin-left:-8%;">
                                    <input id="username" class="form-control" name="username" required>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                    </form>
                    <div style="float:left;padding-right:20px;">
                        @foreach ($skills as $skill)
                            <br>
                            {{ $skill }}
                        @endforeach
                    </div>
                    <div style="float:left;padding-right:20px;">
                        @foreach ($rank as $rank)
                            <br>
                            {{ $rank }}
                        @endforeach
                    </div>
                    <div style="float:left;padding-right:20px;">
                        @foreach ($level as $level)
                            <br>
                            {{ $level }}
                        @endforeach
                    </div>
                    <div style="float:left;padding-right:20px;">
                        @foreach ($xp as $xp)
                            <br>
                            {{ $xp }}
                        @endforeach
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>
@endsection