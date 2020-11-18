<footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>copyright &copy; developed by
          <b><a href="#" >Md. Ismail Hossain</a></b>
        </span>
      </div>
    </div>
  </footer>

  
  <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('admin/js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>  
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
 
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
 <script>
    function confirmDelete(){
      return confirm('Are you sure to delete?');
    }
  </script>
  <script>
        $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
  <script>
        $(document).ready(function() {
      $('#additional_info').summernote();
    });
  </script>


<script>
 function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>
  
  @include('notify::messages')
        @notifyJs
</body>

</html>