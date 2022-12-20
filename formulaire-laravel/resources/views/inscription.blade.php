<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation in Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <style>
        .container{
            width: 30%
        }

        body{
            background-color: rgb(10, 10, 10)
        }

        h1,label{
            color: white
        }
        .form-control {
            background-color: black;
            border-radius: 6px;
            border: 2px color white;
        }
    </style>
</head>

<body>
    <div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

        {{-- <form action="" method="get" action="{{ action('App\Http\Controllers\InscriptionController@createUserForm') }}"> --}}
        <form action="" method="get" action="{{ action('App\Http\Controllers\InscriptionController@createUserForm') }}">
            @csrf
            <h1>Inscription</h1>
            <div class="form-group">
                <label>FirstName</label>
                <input type="text" class="form-control {{ $errors->has('userfirstname') ? 'error' : '' }}" name="userfirstname"
                    id="userfirstname">

                @if ($errors->has('userfirstname'))
                <div class="error">
                    {{ $errors->first('userfirstname') }}
                </div>
                @endif
            </div>

             <div class="form-group">
                <label>LastName</label>
                <input type="text" class="form-control {{ $errors->has('userlastname') ? 'error' : '' }}" name="userlastname"
                    id="userlastname">

                @if ($errors->has('userlastname'))
                <div class="error">
                    {{ $errors->first('userlastname') }}
                </div>
                @endif
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"
                    id="email">

                @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>


            <div class="form-group">
                <label>Password</label>
                <input class="form-control {{ $errors->has('password') ? 'error' : '' }}" name="password" id="password"
                    >

                @if ($errors->has('password'))
                <div class="error">
                    {{ $errors->first('password') }}
                </div>
                @endif
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>