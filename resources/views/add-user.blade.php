@extends("layouts.master")
@section("content")
<div class="col-12 col-lg-6 g">
   <div class="card">
      <div class="card-body">
         <form action="" method="post">
            @csrf
            <div class="form-group">
               <label for="">الإسم</label>
               <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
               <label for="">إسم المستخدم</label>
               <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
               <label for="">كلمة المرور</label>
               <input type="text" class="form-control" name="password">
            </div>
            <div class="form-group">
               <label for="">النوع</label>
               <select name="type" class="form-control" id="">
                  <option value="1">دكتور</option>
                  <option value="0">مساعد</option>
               </select>
            </div>
            <div class="form-group">
               <label for="">رقم الهاتف</label>
               <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group">
               <label for="">العنوان</label>
               <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
               <label for="">ملاحظات</label>
               <input type="text" class="form-control" name="bio">
            </div>
            <div class="col-12 g text-center">
               <button class="btn btn-primary">إضافة المستخدم</button>
            </div>
         </form>
      </div>
   </div>
</div>
<div class="col-12 col-lg-6 g">
   <div class="card">
      <div class="card-body table-responsive">
         <table class="table table-bordered table-hover">
            <thead>
               <th>id</th>
               <th>الإسم</th>
               <th>إسم المستخدم</th>
               <th>النوع</th>
               <th>رقم الهاتف</th>
               <th>العنوان</th>
               <th>ملاحظات</th>
               <th>حذف</th>
            </thead>
            @foreach($users as $u)
            <tr>
               <td>{{ $u->id }}</td>
               <td>{{ $u->name }}</td>
               <td>{{ $u->username }}</td>
               <td>@if($u->type == 1)
                  الدكتور
                  @else
                  المساعد
                  @endif</td>
               <td>{{ $u->phone }}</td>
               <td>{{ $u->address }}</td>
               <td>{{ $u->bio }}</td>
               <td><button class='btn btn-danger' onclick="if(confirm('متأكد ؟')){
                     window.location = 'deleteUser/{{ $u->id }}';
                  }">حذف</button></td>
            </tr>
            @endforeach
         </table>
      </div>
   </div>
</div>
@endsection