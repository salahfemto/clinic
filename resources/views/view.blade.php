@extends("layouts.master")
@section("content")

<div class="col-12 g">
   <div class="card card-body table-responsive">
      <table class="table table-hover table-bordered" id="datatable">
         <thead>
            <th>id</th>
            <th>الإسم</th>
            <th>عدد المواعيد</th>
            <th>حجز موعد</th>
            <th>عرض الملف الشخصي</th>
         </thead>
         <tbody>
            @foreach($patients as $patient)
            <tr>
               <td>{{ $patient->id }}</td>
               <td>{{ $patient->name }}</td>
               <td>{!! App\Http\Controllers\fun::datesNum($patient->id) !!}</td>
               <td>
                  <a href="add-date?p_id={{ $patient->id }}" class="btn btn-primary">
                     حجز الآن
                     <i class="fa fa-arrow-left"></i>
                  </a>
               </td>
               <td><a href="patient/{{ $patient->id }}" class="btn btn-primary">
                     <i class="fa fa-user"></i>
                     عرض
                  </a></td>
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>

@endsection