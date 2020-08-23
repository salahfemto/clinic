@extends("layouts.master")
@section("content")

<div class="col-12 col-lg-8 c g">
   <div class="card">
      <div class="card-header">
         <i class="fa fa-plus"></i>
         إضافة موعد جديد
      </div>
      <div class="card-body">
         <form action="" method="post">
            @csrf
            <div class="form-group">
               <label for="">المريض</label>
               <select class="form-control selectpicker" name="p_id" data-live-search="true" required>
                  @foreach($patients as $patient)
                  <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group">
               <label for="">تاريخ الحجز</label>
               <input type="date" class="form-control" value="<?=date('Y-m-d');?>" required name="date"
                  placeholder="أدخل هنا...">
            </div>
            <div class="form-group">
               <label for="">الساعة</label>
               <input type="time" class="form-control" required name="time" placeholder="أدخل هنا...">
            </div>
            <div class="form-group">
               <label for="">المبلغ المدفوع</label>
               <input type="number" class="form-control" required name="money" placeholder="أدخل هنا...">
            </div>
            <div class="form-group">
               <label for="">نوع الحجز</label>
               <select class="form-control" name="type">
                  <option value="0">كشف</option>
                  <option value="1">إعادة</option>
               </select>
            </div>
            <div class="form-group">
               <label for="">ملاحظات</label>
               <textarea class="form-control" name="notes" placeholder="أدخل هنا..."></textarea>
            </div>
            <div class="col-12 g text-center">
               <button class='btn btn-primary'>
                  إضافة الموعد
                  <i class="fa fa-arrow-left"></i>
               </button>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection