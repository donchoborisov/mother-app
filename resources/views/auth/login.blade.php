@extends('layouts.default')

@section('content')

        <div class="contain">
          
        

            <div class="wrapper">
              <div class="contacts">

               
               
              </div>
          
              <div class="form">
                <h3>Login</h3>

              


                <form method="POST" action="{{ route('login') }}">@csrf
                 

                  <p>
                    <label for="">Email Address</label>
                    <input type="text" name="email">
                    <span class="errors">{{ $errors->first('email') }}</span>
                  </p>


                  <p>
                    <label for="">Password</label>
                    <input type="password" name="password">
                    <span class="errors">{{ $errors->first('password') }}</span>
                  </p>

              
               

                  
                
               
                 
                 
                  <p class="full-width">
                    <button class="button">Login</button>
                  </p>


                

                </form>
              </div>
            </div>


            

          </div>

@stop         


