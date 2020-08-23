</div>
</div>

</div>
<!-- END MAIN CONTAINER -->
<ajax></ajax>
<ajax2 style="display: none;"></ajax2>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
   aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">إضافة تشخيص للمريض</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action='add-info' method='post'>
            <input type="hidden" name="id" value="">
            @csrf
            <div class="modal-body">
               <textarea class='form-control' name="info" style='height: 300px; display: none;'
                  placeholder='التشسخيص هنا...'></textarea>
            </div>
            <div class="modal-footer">
               <button type="submiy" class="btn btn-primary">حفظ التشخيص</button>
            </div>
         </form>
      </div>
   </div>
</div>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
$(document).ready(function() {
   App.init();
});
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="plugins/table/datatable/datatables.js"></script>
<script>
$('#datatable').DataTable({
   "order": [
      [0, "desc"]
   ]
});
</script>
<script src="assets/js/script.js"></script>

</body>

</html>