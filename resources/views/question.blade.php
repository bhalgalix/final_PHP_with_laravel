<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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

        <div class="flex-center position-ref full-height">
            
                <div class="top-right links">
                        <a href="home">Home</a>
                    
                        <a href="results">Results</a>

                        <a href="previous">Previous Results</a>               
                </div>
           
            <div class="content">
                <div class="title m-b-md">
                    Questions
                </div>
                <form action="{{ url('questions/postear') }}" method="post">
                    {!! csrf_field() !!}
                @foreach($petani as $key => $data)
                
                    <tr>    
                      <th>{{$data->id}}</th>
                      <th>{{$data->question}} <br/><br/></th>
                      <input type="radio" name={{$data->id}} value="1">
                      <th>{{$data->answer1}} <br/> <br/></th>
                      <input type="radio" name={{$data->id}} value="10">
                      <th>{{$data->answer2}} <br/> <br/></th>
                      <input type="radio" name={{$data->id}} value="100">
                      <th>{{$data->answer3}}<br/></th>
                      <th>-----------------------------------------------------------------------------------------------------------------------------------------------------------<br/></th>                 
                    </tr>
                @endforeach

                    <button type="submit">POSTEAR</button>
            </form>
            </div>


        </div>
    </body>
</html>


