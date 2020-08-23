@extends("layouts.master")
@section("content")
<div class="col-12 col-lg-6 g">
   <div class="card card-body">
      <p class='text-muted'>البيانات الأساسية</p>
      <table class="table table-hover">
         <tr>
            <td>الإسم</td>
            <td>{{ $patient->name }}</td>
         </tr>
         <tr>
            <td>رقم الهاتف</td>
            <td>{{ $patient->phone }}</td>
         </tr>
         <tr>
            <td>العنوان</td>
            <td>{{ $patient->address }}</td>
         </tr>
         <tr>
            <td>العمر</td>
            <td>{{ $patient->age }}</td>
         </tr>
         <tr>
            <td>تاريخ التسجيل</td>
            <td>{{ $patient->create_date }}</td>
         </tr>
         <tr>
            <td>ملاحظات</td>
            <td>{{ $patient->notes }}</td>
         </tr>
      </table>
      <p class='text-muted'>التشخيصات والحجوزات</p>
      <div class="table-responsive">
         <table class="table table-hover table-boreded">
            <thead>
               <th>رقم الحجز</th>
               <th>التاريخ</th>
               <th>التشخيص</th>
            </thead>
            <tbody>
               @foreach($dates as $date)
               <tr>
                  <td>{{ $date->date_number }}</td>
                  <td>{{ $date->date }}</td>
                  <td>{{ $date->info }}</td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection