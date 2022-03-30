<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

       
    </head>
    <body>

        <div class="contain">
          
        

            <div class="wrapper">
              <div class="contacts">
                <h3>Our contact details</h3>
          
                <ul>
                  <li>Jon Doe</li>
                  <li>00-1212121-11</li>
                  <li>mail@mail.com</li>
                </ul>
              </div>
          
              <div class="form">
                <h3>Send us a message</h3>

                @if(Session::has('success'))    
              
                   <p class="success">{{ Session::get('success') }}</p>
               
                @endif  


                <form method="POST" action="{{ route('contact.store')}}">@csrf
                  <p>
                    <label for="" >Name</label>
                    <input type="text" name="name">
                    <span class="errors">{{ $errors->first('name') }}</span>
                  </p>
                  <p>
                    <label for="">Surname</label>
                    <input type="text" name="surname">
                    <span class="errors">{{ $errors->first('surname') }}</span>
                  </p>
                  <p>
                    <label for="">Email Address</label>
                    <input type="text" name="email">
                    <span class="errors">{{ $errors->first('email') }}</span>
                  </p>

                  <div id="app">
                    <example-component></example-component>
                  </div>
                
                  <p class="full-width">
                    <label for="" >Write your message</label>
                    <textarea name="message" id="" cols="30" rows="7"></textarea>
                    <span class="errors">{{ $errors->first('message') }}</span>
                  </p>
                 
                 
                  <p class="full-width">
                    <button>Send</button>
                  </p>
                </form>
              </div>
            </div>


            

          </div>

          <script type="text/javascript" src="{{ mix('js/app.js') }}" defer></script>

    </body>
</html>
