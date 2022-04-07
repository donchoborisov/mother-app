<body>
    <header class="top">
        <div class="container">
         
                
          
            <ul class="menu">
                <li class="logo"><a href="{{ route('home') }}" title="Mother"><img src="{{asset('v4/media/logos/mother_white.svg')}}" alt="Mother"/></a></li>
             
            </ul>

            <ul class="user">
                @guest
                <a class="user-link" href="{{ route('login') }}"><li class="login user-login">Login</li></a>  
                @endguest
               
            @auth
           
                <li class="user-account">
                 
                 
                    <div>
                        <strong><span>{{ Auth::user()->name }}</span></strong>
                        <div>
                            <ul>
                                <li><a href="" title="">Change password</a></li>
                            
                                    
                              
                                <li><a href="{{route('logout')}}" title=""  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a></li>
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                </li>
             
                <li class="user-level"><span>Mother Super Admin</span></li> 
              
               
           
            @endauth
            </ul>
        </div>
    </header>
@auth
    

    <header class="sub">
        <div class="container">
            <ul class="menu">
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}" title="">Adverts</a></li>
                <li class="{{ request()->routeIs('advert.create') ? 'active' : '' }}"><a href="{{ route('advert.create') }}" title="">Create Advert</a></li>
            </ul>

            <div class="mobile-menu">
                <span><img src="{{asset('v4/media/icons/menu-large-white.svg')}}" alt="Menu"/><em>Menu</em></span>
            </div>

            <form>
                <div class="search-box">
                    <input type="text" name="search" id="search" placeholder="Search everything...">
                    <button type="submit"><span><img src="{{asset('v4/media/icons/search-white.svg')}}" alt="Search"/></span></button>
                </div>
            </form>
        </div>
    </header>

@endauth    