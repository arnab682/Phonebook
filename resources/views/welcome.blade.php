<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

      <div class="">
        <table id ="table" class ="table table-bordered table-striped text-center" >
          <thead >
            <tr >
              <th > SL. </th >
              <th > Name </th >
              <th > Email </th >
              <th > Action </th >
            </tr >
          </thead >
          <tbody >
            @foreach( $profiles as $profile )
              <tr >
                <td > {{++ $serial }} </td >
                <td > {{ $profile -> name }} </td >
                <td > {{ $profile -> email }} </td >
                <td > <a class ="btn btn-primary"
                  href =" {{route( 'profiles.show' , $profile -> id )}} " > Show </a >
                  <a class ="btn btn-warning"
                  href =" {{route( 'profiles.edit' , $profile -> id )}} " > Edit </a >
                  <form action =" {{route( 'profiles.delete' , $profile -> id )}} " method ="post"
                    style =" display : inline-block " >
                    @csrf
                    @method( 'delete' )
                    <button type ="submit" class ="btn btn-success"
                      onclick =" return confirm ( 'Are You Sure want to
                      Delete!' ) " > Delete
                    </button >
                  </form >
                </td >
              </tr >
            @endforeach
          </tbody >
        </table >
      </div>


    </body>
</html>
