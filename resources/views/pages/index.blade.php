@include('../layout.header')
<div class="container">
    @include('pages.layout.navbar')
</div>
    <form action="{{ route('search') }}" method="GET" class="border col-md-3 align-self-end mb-4">
        <div class="input-grup custom-search-form">
            <input type="search" name="cari" class="form-control" placeholder="search...">
            <span class="input-grup-btn">
                <button type="submit" class="btn btn-primary">Search</button>
            </span>
        </div>

    </form>
    {{-- Splide --}}
    @include('pages.splide')

    {{-- Content1 --}}
    <div class="">
        <div class="" style="margin-top: -10px;">
            <div class="fs-4 position-relative d-flex justify-content-center" style="margin-right: 930px; margin-top:-200px;">
                <div class="rounded-bottom" style="width: 190px; height:6px ; background: rgb(238, 173, 53); "></div>
                <div class="position-absolute" style="bottom: -10px">Today's Highlight</div>
            </div>
           
           @foreach ($data1 as $item1)
           <div class="card-group">
            <div class="card p-3 mb-2 bg-transparent text-dark ">
                <a href=""><img src="profile/{{ $item1->image }}" class=" " alt="..." style="width:400px; margin-left:100px; margin-top:50px;"></a>

                <div class="card-body">
                    <p class="card-title" style="font-size:15px; margin-left:70px;">{{ $item1->category->name }}</p>
                    <h5 class="card-text" style="width:65%; margin-left:70px;">{{ $item1->title }}</h5>
                    <h6 class="card-text " style="font-size:16px; margin-left:70px;"><small class="text-muted">{{ $item1->created_at }}</small></h6>
                    <p class="card-text " style="font-size:16px; width:70%; margin-left:70px;">{{ $item1->content }}</p>
                </div>
            </div>
        </div>
        
           @endforeach
        </div>
    </div>
    {{-- Sticky --}}
       

    {{-- Content2 --}}
        {{-- <div class="col-10 d-flex flex-column">
            @foreach ($data as $item)
                
           
            <div class="card mb-3 bg-transparent text-dark mt-5" style="">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="{{route('detail.page', $item->id) }}"><img src="profile/{{ $item->image }}" style="width:300px;height:200px; margin-left:110px;"alt="..."></a>
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-title " style="transform:translate(5%,-100%); font-size:17px;">{{ $item->category->name }}</p>
                        <h5 class="card-text" style="transform:translate(12%,-100%); width:40%">{{ $item->title }}</h5>
                        <p class="card-text" style="transform:translate(5%,-70%);"><small class="text-muted">  {{ $item->created_at }}</small></p>
                        <p class="card-text" style="transform:translate(7%,-20%); width:70%;"> {{ $item->content }}</p>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>    
    </div> --}}

    {{-- Content3 --}}
    

       
     <div class="col-12 d-flex">
           {{-- kiri --}}
        
        {{-- <div class="d-flex flex-column">
           
            
            <div class="fs-4 my-5 position-relative d-flex justify-content-center">
                <div class="rounded-bottom" style="width: 190px; height:6px ; background: rgb(238, 173, 53); "></div>
                <div class="position-absolute" style="bottom: -10px">Lifestyle</div>
            </div>
            <div class="card mb-3 bg-transparent text-dark mt-5" style="">
                @foreach ($data as $item )
                <div class="row g-0">
                <div class="col-md-4">
                    <a href="{{route('detail.page', $item->id) }}"> <img src="profile/{{ $item->image }}" style="width:200px;height:200px;  margin-left:110px;"alt="..."></a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <p class="card-title " style="transform:translate(25%,-100%); font-size:17px;">{{ $item->category->name }}</p>
                    <h5 class="card-text" style="transform:translate(35%,-100%); width:70%">{{ $item->title }}</h5>
                    <p class="card-text" style="transform:translate(25%,-100%);"><small class="text-muted"> {{ $item->created_at }} </small></p>
                    <p class="card-text" style="transform:translate(41%,-20%); width:60%;">
                        {{ str_word_count($item->content) > 5 ? substr($item->content, 0, 150) . ' ...' : $item->content }}

                    </p>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
                
           
        </div>     --}}
        {{-- kanan
        <div class="d-flex flex-column">
            <div class="fs-4 my-5 position-relative d-flex justify-content-center">
                <div class="rounded-bottom" style="width: 190px; height:6px ; background: rgb(238, 173, 53); "></div>
                <div class="position-absolute" style="bottom: -10px">Travel</div>
            </div>
            <div class="card mb-3 bg-transparent text-dark mt-5" style="">
                @foreach ($data as $item )
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="{{route('detail.page', $item->id) }}"> <img src="profile/{{ $item->image }}" style="width:200px; height:200px; margin-left:100px;"alt="..."></a>
                    </div>
                    <div class="col-md-8">
                     <div class="card-body">
                        <p class="card-title " style="transform:translate(25%,-100%); font-size:17px;">{{ $item->category->name }}</p>
                        <h5 class="card-text" style="transform:translate(35%,-100%); width:70%">{{ $item->title }}</h5>
                        <p class="card-text" style="transform:translate(25%,-100%);"><small class="text-muted"> {{ $item->created_at }} </small></p>
                        <p class="card-text" style="transform:translate(41%,-20%); width:60%;">
                            {{ str_word_count($item->content) > 5 ? substr($item->content, 0, 150) . ' ...' : $item->content }}
                        </p>
                     </div>
                    </div>
                </div>
                @endforeach
            </div>
           
        </div>    
  
     </div> --}}

    {{-- <div class="fs-4 mt-5 position-relative d-flex justify-content-center">
        <div class="rounded-bottom" style="width: 190px; height:6px ; background: rgb(238, 173, 53); "></div>
        <div class="position-absolute" style="bottom: -10px">Food and Drink</div>
    </div>
    <div class="card-group">
        @foreach ( $data as $item)
            
      
        <div class="card p-3 mb-2 bg-transparent text-dark " style="margin-top: 50px;">
            <a href="{{route('detail.page', $item->id) }}"><img src="profile/{{ $item->image }}" class=" " alt="..." style="width:250px; margin-left:100px;"></a>
            <div class="card-body">
                <p class="card-title" style="font-size:15px; margin-left:70px;">{{ $item->category->name }}</p>
                <h5 class="card-text" style="width:90%; margin-left:70px;">{{ $item->title }}</h5>
                <h6 class="card-text " style="font-size:16px; margin-left:70px;"><small class="text-muted">{{ $item->created_at }}</small></h6>
                <p class="card-text " style="margin-left: 70px;">
                    
                    {{ str_word_count($item->content) > 5 ? substr($item->content, 0, 150) . ' ...' : $item->content }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
     --}}
   

</body>
</html>

