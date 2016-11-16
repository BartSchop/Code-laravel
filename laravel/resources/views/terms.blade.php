@extends('layouts.app')
{{ $boss_info = false }}
@section('content')
<div class="container content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-size-fix">
                <div class="panel-heading">Terms and Agreements</div>
                <div class="panel-body">
                    By accepting the terms and agreements you will agree with the following terms,<hr>

                    1. - Privacy and Security<br>
                    <ul>
                        <li>We do not ask for any private information beside your full name and email adress. We are not responsible for any other information that you may give to other people.</li>
                        <li>We are not responsible for any information leaks, please make sure your password is secure and not the same as any other password. Database leaks can occur at any website and could reveal given information to others. We'll make sure our security is at it's best and that passwords are encoded to avoid any leak problems.</li>
                        <li>We do not give out any of your information to the outside world.</li>
                        <li>Any given information is firmly secured and any we will not save any data.</li>
                        <li>On removal of your account it will become dissabled for one month, after that your account details with all of the content will be completely removed from the database.</li>
                        <li>After deactivation of your account you will be able to reclaim it by logging in for a month, after that it will be removed.</li>
                    </ul>
                    <hr>
                    2. - Website terms<br>
                    <ul>
                        <li>You agree to the rules of the website and the consequences when you do not obey them. (see section 5. - Rules)</li>
                        <li>The website is still in development stage and may change on a day to day basis, this includes style and content, some functionality might nog work yet or are in a testing stage.</li>
                        <li>You are not allowed to claim credit for the website nor promote any user made content.</li>
                        <li>It's not allowed to glitch out or bug out the website on purpose.</li>
                    </ul>
                    <hr>
                    5. - Rules<br>
                    <ul>
                        <li>Sharing of personal details is not allowed and can resolve in a mute or ban of your account.</li>
                        <li>Advertising of other websites is not allowed and can resolve in a mute or ban of your account.</li>
                        <li>Immature or inappropriate language is not allowed and can resolve in a mute or ban of your account.</li>
                        <li>You will agree with the consequences when you do not obey these rules.</li>
                    </ul>

                </div>            
            </div>
        </div>
    </div>
</div>
@endsection