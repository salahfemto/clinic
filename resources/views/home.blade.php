@extends("layouts.master")
@section("content")
<div class="col-12 col-lg-3 g">
   <div class="card component-card_1">
      <div class="card-body">
         <h2 class="card-title">{{ $pnum }}</h2>
         <p class="card-text">عدد المرضى</p>
      </div>
   </div>
</div>
<div class="col-12 col-lg-3 g">
   <div class="card component-card_1">
      <div class="card-body">
         <h2 class="card-title">{{ $todaydates }}</h2>
         <p class="card-text">عدد المواعيد اليوم</p>
      </div>
   </div>
</div>
<div class="col-12 col-lg-3 g">
   <div class="card component-card_1">
      <div class="card-body">
         <h2 class="card-title">{{ $todaydatesinfo }}</h2>
         <p class="card-text">المواعيد المشخصة اليوم</p>
      </div>
   </div>
</div>
<div class="col-12 col-lg-3 g">
   <div class="card component-card_1">
      <div class="card-body">
         <h2 class="card-title">{{ $todaydatesnotinfo }}</h2>
         <p class="card-text">المواعيد الغير مشخصة اليوم</p>
      </div>
   </div>
</div>
@endsection