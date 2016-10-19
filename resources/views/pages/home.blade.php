@extends('layouts.main')

@section('content')

    @include('partials.status-panel')

    <div class="jumbotron" style="margin-top:-20px;">
        <h1>Welcome to Laravel 5.3 Social and Email Multi-Authentication Live Demo !</h1>
        <p>This demo is related to tutorial and project from <a href="https://tuts.codingo.me/laravel-social-and-email-authentication">Codingo Tuts <i class="fa fa-external-link"></i></a></p>
        <hr>
        <p>When you see which features this Laravel boilerplate project posses it will make you say: </p></p>
        <img class="img-responsive" src="/assets/landing/shut.gif" style="margin-bottom:20px;">
        <p>Aaand the best part, it is FREE!</p>

        <h2>What is covered?</h2>

        <h1><span class="tag red">Email Registration & Login</span> <span class="tag red">Social Login</span> <span class="tag red">Email Activation</span>
            <span class="tag red">Google Re-Captcha</span> <span class="tag red">User Roles</span> <span class="tag red">Redis Qeueu for emails</span> <span class="tag red">Parsley.js validation</span>
            <span class="tag red">Bootstrap 4</span> <span class="tag red">Material Design for Bootstrap</span></h1>

        <p><b>Unlimited</b> number of social providers via Socialite package. Live Demo uses:</p>
        <h2 style="margin-bottom:15px;">
        <span class="tag green">Facebook</span>
        <span class="tag green">Twitter</span>
        <span class="tag green">Google+</span>
        <span class="tag green">GitHub</span>
        </h2>

        <h2>Adding new Social provider easy as copy/paste login button</h2>

        <p>Checkout example file where you add new buttons:</p>

        <script src="https://gist.github.com/ivanderbu2/a3703b455981521e79add5bdead4b6d1.js"></script>

        <p><a class="btn btn-primary btn-lg" href="{{url('register')}}" role="button">Try Register Feature</a></p>

        <p>If you have any improvements or ideas please post comments here: <a href="https://tuts.codingo.me/laravel-social-and-email-authentication#disqus_thread">Laravel 5.3 Social and Email Multi-Authentication</a></p>
    </div>

@stop