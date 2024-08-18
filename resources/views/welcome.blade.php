<x-layout>

<x-navbar />

<div class="container">
    <h2 class="fw-light text-capitalize">just for you</h2>
    <div class="row">
@foreach ($data as $items)
<div class="col-lg-3 my-2">
    <div class="card border-0 shadow p-4">
        <img width="100%" height="200px" style="object-fit: cover"
            src="{{ asset('/storage/' . $items->image) }}" alt="">
        <p class="m-0 text-capitalize">
           {{ $items->description }}
        </p>
        <p class="fs-4" style="color: #F85606">

            Rs. {{ $items->auctual_price }}
               
            
        </p>
        <div class="d-flex">

            <p class="text-secondary m-0 text-sm text-decoration-line-through ">
                Rs. {{ $items->discount_price }} </span>
            </p>
            <p class="m-0 text-sm percentage">
                  <h6> 50%</h6>  
            </p>
        </div>
        <div class="text-sm">
            ⭐⭐⭐⭐⭐
        </div>
    </div>
</div>
@endforeach
</div>
</div>
</x-layout>
