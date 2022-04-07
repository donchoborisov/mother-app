@extends('layouts.default')

@section('content')

<section class="body">

    <div class="container">
        <div class="title">
            <div class="titles">
                <h2>Mother</h2>
                <h1><span>All </span>Adverts</h1>
            </div>
            <div class="title-buttons">
                <a href="{{ route('advert.create')}}" title="" class="button"><img src="" alt=""/><span>Add Advert</span></a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="box">
            <div class="table">
                <div class="intro">
                   
                </div>

                <div class="table-block table-width-3">
                    <div class="head">
                        <div class="cell cell-header">Name</div>
                        <div class="cell cell-header">Size</div>
                        <div class="cell cell-header">Dimensions</div>
                        <div class="cell cell-header">Image</div>
                        <div class="cell cell-header">&nbsp;</div>
                    </div>
                 @forelse ($adverts as $advert)

                 <div class="row">
                    <div class="cell">
                        <strong>{{$advert->name}}</strong>
                        <span>{{$advert->created_at->diffForHumans()}}</span>
                    </div>
                    <div class="cell">
                        <b class="tag green">{{ $advert->size }}</b>
                    </div>
                    <div class="cell">
                        <strong>{{$advert->dimensions}}</strong>
                       
                    </div>

                    <div class="cell">
                       <a href="{{ route('advert.show',$advert->id) }}"><img class="advert-home" src="{{Storage::url($advert->image)}}"></a>
                    </div>
                    <div class="cell cell-menu">
                        <div>
                            <img src="./v4/media/icons/menu.svg" alt="Menu"/>
                            <div>
                                <ul>
                                    <li><a href="{{ route('advert.show',$advert->id) }}" title="">View</a></li>
                                    <li><a href="{{ route('advert.edit',$advert->id) }}" title="">Edit</a></li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                     
                 @empty
                     
                 @endforelse
                    

                   
                </div>
            </div>
        </div>

        <div class="pagination">
            <div>
              
{{ $adverts->links() }}
            </div>
        </div>
    </div>
</section>

@endsection
