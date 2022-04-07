@extends('layouts.default')

@section('content')







<div class="container">
  <div class="box">


      <div class="container">
          <div class="title">
              <div class="titles">
                  <h2>Mother</h2>
                  <h1><span class="advert-name">Create </span>Advert</h1>
              </div>
              
          </div>
      </div>

     
      <div class="table">
          


        <div class="wrapper">
          <div class="contacts">
            <img src="" id="one">
          </div>
        
          <div class="form">
           
            @if(Session::has('success'))   
            
            <div class="alert">
              <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
              {{ Session::get('success') }}
            </div>
              
          @endif
        
            
          
        
        
            <form method="POST" action="{{ route('advert.store') }}" enctype="multipart/form-data">@csrf
              <p>
                <label for="" >Name</label>
                <input type="text" name="name"> 
                <span class="errors">{{ $errors->first('name') }}</span>
              </p>
        
              <p>
                <label for="">Size</label>
                <input type="text" name="size">
                <span class="errors">{{ $errors->first('size') }}</span>
              </p>
        
        
              <p>
                <label for="">Dimensions</label>
                <input type="text" name="dimensions">
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

<script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(500)
        .height(300);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script type="text/javascript">
   
$('#CreateForm').submit(function(){
    $("#create", this)
      .html("Please Wait...")
      .attr('disabled', 'disabled');
    return true;
});
   
</script>






















@endsection