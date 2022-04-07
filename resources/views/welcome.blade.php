@extends('layouts.default')

@section('content')

        <div class="contain">
          
        

            <div class="wrapper">
              <div class="contacts">
               
              </div>
          
              <div class="form">
                <h3>Register</h3>

              


                <form method="POST" action="{{ route('register') }}">@csrf
                  <p>
                    <label for="" >Name</label>
                    <input type="text" name="name">
                    <span class="errors">{{ $errors->first('name') }}</span>
                  </p>

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

                  <p>
                    <label for="">Confirm Password</label>
                    <input type="password" name="password_confirmation">
                   
                    
                  </p>
               

                 
                
               
                 
                 
                  <p class="full-width">
                    <button>Send</button>
                  </p>
                </form>
              </div>
            </div>


            

          </div>

@stop         


