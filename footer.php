<footer class="main-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <p>Copyrights &copy; 2018</p>
      </div>
      <div class="col-sm-6 text-right">
        <p>Created By Alvin Olivio</a></p>
      </div>
    </div>
  </div>
</footer>
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.cookie.js"> </script>
<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<!-- <script src="js/charts-home.js"></script> -->
<script src="js/front.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.responsive.js"></script>
<!-- <script src="js/dataTables.bootstrap.min.js"></script> -->
<!-- <script src="js/buttons.flash.min.js"></script> -->
<script src="js/buttons.html5.min.js"></script>
<script src="js/buttons.print.min.js"></script>
<script src="js/dataTables.buttons.min.js"></script>
<script src="js/jszip.min.js"></script>
<script src="js/pdfmake.min.js"></script>
<script src="js/vfs_fonts.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
  $(document).ready(function() {
    $('#tabel_biodata').DataTable({
      responsive : true,
      dom:'Bfrtip',
      buttons: [
      'pageLength','copy','excel', 'pdf', 'print'
      ]    
    });
  });
</script>
</body>
</html>