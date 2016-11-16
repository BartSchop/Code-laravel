@extends('layouts.app')
{{ $boss_info = false }}
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-size-fix">
                <div class="panel-heading">Player Tracking</div>
                <div class="body-panel" style="height:800px;">
                    @if ($tracking === false)
                        <form class="form-horizontal" role="form" method="POST" action="/start_player_tracker/start">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}" style="display:inline;">
                                    <div class="col-md-2">
                                        <input id="username" class="form-control" placeholder="Username" name="username" required>

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif

                                        <button type="submit" class="btn btn-primary" style="width:127px;">
                                            Start Tracking!
                                        </button>
                                    </div>
                            </div>
                        </form>
                    @else
                        <a href="/update_player_tracker/update">
                            <button class="btn btn-primary" style="width:127px;">
                                Update!
                            </button>
                        </a>
                        <a href="/reset_player_tracker/reset">
                            <button type="submit" class="btn btn-primary" style="width:127px;">
                                Reset!
                            </button>
                        </a>
                    @endif
                    <div style="margin-left:10%;">
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
                        <div style="float:left;padding-right:20px;">
                            @foreach ($changes as $change)
                                <br>
                                @if ($change === "+(0)" || $change === "Change")
                                    {{ $change }}
                                @else
                                    <span style="color:lime;">{{ $change }}</span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>
@endsection