@extends('layouts.default')

@section('content')


<div class="container">
    <div class="box">


        <div class="container">
            <div class="title">
                <div class="titles">
                    <h2>Mother</h2>
                    <h1><span class="advert-name">{{$advert->name}} </span>Advert</h1>
                </div>
                <div class="title-buttons">
                    <a href="{{ route('advert.edit',$advert->id)}}" title="" class="button"><img src="" alt=""/><span>Edit</span></a>
                </div>
            </div>
        </div>

       
        <div class="table">
            


            <div class="show-cont">
               <img src="{{Storage::url($advert->image)}}" class="show">


            </div>
          

            <div class="val-cont">
             
              
               <div class="item">
                  
                   <p class="item-text" >{{$advert->size}}</p>
                </div>
                <div class="item"><p class="item-text">{{$advert->dimensions}}</p></div>

            </div>
              
           
                

               
            </div>
        </div>
    </div>

    
</div>

@endsection