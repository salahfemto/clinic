@extends("layouts.master")
@section("content")

<div class="col-12 g">
   <div class="card card-body table-responsive">
      <table class="table table-hover table-bordered" id="datatable">
         <thead>
            <th>رقم الحجز</th>
            <th>المريض</th>
            <th>الساعة</th>
            <th>المبلغ</th>
            <th>نوع الحجز</th>
            <th>ملاحظات</th>
            @if($user->type == 1)
            <th>إضافة تشخيص</th>
            @endif
         </thead>
         <tbody>
            @foreach($dates as $date)
            <tr>
               <td>{{ $date->date_number }}</td>
               <td>
                  {{ App\Http\Controllers\fun::Pname($date->p_id) }}
                  <a href="patient/{{ $date->p_id }}" class="btn btn-primary fa fa-user" title="عرض الملف الشخصي"></a>
               </td>
               <td>{{ $date->time }}</td>
               <td>{{ $date->money }}</td>
               <td>
                  @if($date->type == 0)
                  كشف
                  @else
                  إعادة
                  @endif
               </td>
               <td>{{ $date->notes }}</td>
               @if($user->type == 1)
               <td>
                  @if($date->info != "")
                  <button class="btn btn-success" onclick="addInfo('{{ $date->id }}')">
                     تم التشخيص
                     <i class="fa fa-check"></i>
                  </button>
                  @else
                  <button class="btn btn-primary" onclick="addInfo('{{ $date->id }}')">
                     تشخيص
                     <i class="fa fa-check"></i>
                  </button>
                  @endif
               </td>
               @endif
            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</div>

@endsection