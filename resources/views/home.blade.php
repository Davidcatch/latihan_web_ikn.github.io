@extends('layouts.app')

 @section('content')
{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <!--style-->
        <link rel="stylesheet" href="/css/style.css">
    </head>
        <body>
            <header>

               <p><b>Pilih Logo Ibu Kota</b>
               <br>
               <h3>#NusantaraKita</h3> 
               </p>
                <div class="logo"></div>
            </header>
           <div class="content">
                
            </div> 
        </body>
</html> --}}

    <div class="col-md-8">
        <div class="card border-0 shadow rounded">
            <div class="card-body">
                Selamat Datang <strong>{{ auth()->user()->name }}</strong>
                <hr>
                <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-md btn-primary">LOGOUT</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <h1>halo</h1>
            </div>
        </div>
    </div>

 @endsection 