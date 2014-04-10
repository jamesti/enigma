<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>

        <link href='//fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

        {{ HTML::style('dist/built.min.css') }}
        {{ HTML::style('css/style.css') }}
        {{ HTML::style('css/slider.css') }}
        {{ HTML::script('js/slider.js') }}
    </head>
    <body class = "{{ $class }}" >
        <div class="container">
            <div class="row-fluid header">
                <div class="span4 logo">
                    <a href="{{ URL::to('/') }}"><img class="logo" src="{{URL::asset('images/logo.png') }}" /></a>
                </div>
                <div class="span6 menu">
                    <ul>
                        <li><a href="#" popup data-toggle="modal">Create
                                Foldagram</a></li>
                        <li>{{ link_to_route('pcredit', 'Purchase Credits')}}</li>
                        <li>{{ link_to_route('cart', 'Cart') }}</li>
                        <li>{{ link_to_route('contact', 'Contact') }}</li>
                        <li>{{ link_to_route('userlogin', 'Login') }}</li>
                        <li>{{ link_to_route('register', 'Register') }}</li>
                    </ul>
                </div>
                <div class="span2 social">
                    <a href="https://www.facebook.com/TheFoldagram" 
                       target="_blank"><img class="facebook" src="{{URL::to('/') }}/img/img_trans.png" /></a>
                    <a href="https://twitter.com/thefoldagram"
                       target="_blank"><img class="twit" src="{{URL::to('/') }}/img/img_trans.png" /></a>
                    <a href="https://pinterest.com/thefoldagram/"
                       target="_blank"><img class="ping" src="{{URL::to('/') }}/img/img_trans.png" /></a>
                </div>
            </div>
            @yield('inner-banner')
            <div class="row-fluid content">
                @yield('content')
            </div>

            <div class="row-fluid subcribe-form">
                <div class="span12 subscribe-content">
                    {{ Form::open(array('url' => 'subscribe')); }}
                    {{ Form::label('something', 'Sign Up for Our Newsletter and Updates!'); }}
                    {{ Form::text('email', null, array('class' => 'input-large','placeholder' => '')); }}
                    {{ Form::submit('Subscribe'); }}
                    {{ Form::close(); }}
                </div>
            </div>
            <div class="row-fluid footer">
                <div class="span8 footer-menu">
                    <ul>
                        <li>{{ link_to_route('contact', 'Contact')}}</li>
                        <li>{{ link_to_route('about', 'About Us')}}</li>
                        <li>{{ link_to_route('login', 'Log In')}}</a></li>
                        <li>{{ link_to_route('register', 'Register')}}</a></li>
                    </ul>
                </div>
                <div class="span4 copyright">
                    <h4>Foldagram is patent pending</h4>
                    <p>&copy;Copyright All Encompassing Productions llc, 2014</p>
                </div>
            </div>
        </div>
        <script src="{{ asset('dist/built.min.js') }}"></script>
    </body>
</html>