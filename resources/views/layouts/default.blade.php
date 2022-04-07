<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    

    <header >
        @include('includes.header')
    </header>

    <div>
   
            @yield('content')
            @include('includes.footer')

    </div>

   
       
  


     


</body>
</html>