@include('../layout.header')
@include('pages.layout.navbar')
<img src="https://preview.colorlib.com/theme/content/images/xslider_3.jpg.pagespeed.ic.Yxq9iGhxek.webp" alt="" style="width:1100px; height:600px; transform:translate(12%,18%);"> 
<div class="card " style="width: 500px; height:350px; transform:translate(90%,-80%);">
    <div class="card-body">
        <div class="d-flex justify-content-center ">
            <i class="bi bi-facebook fs-5 me-4 mt-3"></i>
            <i class="bi bi-twitter fs-5 me-4 mt-3"></i>
            <i class="bi bi-discord fs-5 me-4 mt-3"></i>
        </div>
      <p class="card-title mt-5 " style="font-size: 14px; text-align:center; margin-left:-13px;">Food and Drink</p>
      <h3 class="card-text w-75 text-dark " style="text-align: center; transform:translate(15%,0%);">Far far away behind the Word Mountains far from Away</h3>
      <p class="w-100" style="text-align:center; margin-left:-10px;">Far far away behind the Word Mountains!</p>
      <p class="w-100" style="text-align: center; margin-left:-10px;">May 10, 2020 5 mins read</p>
    </div>
</div>
<div class="card bg-transparent text-dark " style="width: 50rem;">
    <div class="card-body  d-flex" style="transform:translate(37%,0%);" >
      <p class="card-text" style="text-align: center;">{{ $data1->content }}</p>
    </div>
</div>
<div class="card-group">
    @foreach ($data as $item )
        
    <div class="card p-3 mb-2 bg-transparent text-dark " style="margin-top: 50px;">
        <img src="/profile/{{ $item->image }}" class=" " alt="..." style="width:250px; margin-left:100px;">
        <div class="card-body">
            <p class="card-title" style="font-size:15px; margin-left:70px;">{{ $item->name }}</p>
            <h5 class="card-text" style="width:90%; margin-left:70px;">{{ $item->title }}</h5>
            <h6 class="card-text " style="font-size:16px; margin-left:70px;"><small class="text-muted">{{ $item->created_id }}</small></h6>
            <p class="card-text " style="font-size:16px;  margin-left:70px;">
                {{ str_word_count($item->content) > 5 ? substr($item->content, 0, 150) . ' ...' : $item->content }}

            </p>
        </div>
    </div>
    @endforeach
</div>

