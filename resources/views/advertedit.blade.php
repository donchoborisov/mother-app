@extends('layouts.default')

@section('content')







<div class="container">
  <div class="box">


      <div class="container">
          <div class="title">
              <div class="titles">
                  <h2>Mother</h2>
                  <h1><span class="advert-name">Edit </span>Advert</h1>
              </div>
              
          </div>
      </div>

     
      <div class="table">
          


        <div class="wrapper">
          <div class="contacts">
            <img class="img-edit" src="{{Storage::url($advert->image)}}">
          </div>
        
          <div class="form">
           
            @if(Session::has('success'))   
            
            <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
              {{ Session::get('success') }}
            </div>
              
         
        
            @endif 
          
        
        
            <form method="POST" action="{{route('advert.update',$advert->id)}}" enctype="multipart/form-data">@csrf
             @method('PUT')
              <p>
                <label for="" >Name</label>
                <input type="text" name="name" value="{{$advert->name}}"> 
                <span class="errors">{{ $errors->first('name') }}</span>
              </p>
        
              <p>
                <label for="">Size</label>
                <input type="text" name="size" value="{{$advert->size}}">
                <span class="errors">{{ $errors->first('size') }}</span>
              </p>
        
        
              <p>
                <label for="">Dimensions</label>
                <input type="text" name="dimensions" value="{{$advert->size}}">
                <span class="errors">{{ $errors->first('dimensions') }}</span>
              </p>
        
              <p>
                <label for="">Image</label>
                <input type="file" name="image" onchange="readURL(this);">
                <span class="errors">{{ $errors->first('image') }}</span>
               
                
              </p>
           
        
             
            
           
             
             
              <p class=" title-buttons">
                <button>Send</button>
              </p>
        
           
            </form>
          </div>
        </div>
        

        
            
         
              

             
          </div>
      </div>
  </div>

  
</div>

























@endsection