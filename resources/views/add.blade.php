@extends("layouts.master")
@section("content")

<div class="col-12 col-lg-8 c g">
   <div class="card">
      <div class="card-header">
         <i class="fa fa-plus"></i>
         إضافة مريض جديد
      </div>
      <div class="card-body">
         <form action="" method="post">
            @csrf
            <div class="form-group">
               <label for="">الإسم</label>
               <input type="text" class="form-control" required name="name" placeholder="أدخل هنا...">
            </div>
            <div class="form-group">
               <label for="">رقم الهاتف</label>
               <input type="text" class="form-control" required name="phone" placeholder="أدخل هنا...">
            </div>
            <div class="form-group">
               <label for="">العنوان</label>
               <input type="text" class="form-control" required name="address" placeholder="أدخل هنا...">
            </div>
            <div class="form-group">
               <label for="">العمر</label>
               <input type="number" class="form-control" required name="age" placeholder="أدخل هنا...">
            </div>
            <div class="form-group">
               <label for="">ملاحظات</label>
               <textarea class="form-control" name="notes" placeholder="أدخل هنا..."></textarea>
            </div>
            <div class="col-12 g text-center">
               <button class='btn btn-primary'>
                  إضافة المريض
                  <i class="fa fa-arrow-left"></i>
               </button>
            </div>
         </form>
      </div>
   </div>
</div>

@endsection