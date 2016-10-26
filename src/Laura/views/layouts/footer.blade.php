 <?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.0
    </div>
    <strong>Copyright &copy; All rights reserved.</strong>
</footer>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{{ $url = asset('vendor/laura/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$ = jQuery.noConflict();    
$.widget.bridge('uibutton', $.ui.button);
$("#sortable").sortable();
$("#sortable").disableSelection();
</script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ $url = asset('vendor/laura/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ $url = asset('vendor/laura/js/raphael-min.js') }}"></script>
<!--<script src="{{ $url = asset('vendor/laura/plugins/morris/morris.min.js') }}"></script>-->
<!-- Sparkline -->
<script src="{{ $url = asset('vendor/laura/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ $url = asset('vendor/laura/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ $url = asset('vendor/laura/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ $url = asset('vendor/laura/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ $url = asset('vendor/laura/js/moment.min.js') }}"></script>
<script src="{{ $url = asset('vendor/laura/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ $url = asset('vendor/laura/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ $url = asset('vendor/laura/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ $url = asset('vendor/laura/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ $url = asset('vendor/laura/plugins/fastclick/fastclick.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ $url = asset('vendor/laura/dist/js/app.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="{{ $url = asset('vendor/laura/dist/js/pages/dashboard.js') }}"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="{{ $url = asset('vendor/laura/dist/js/demo.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
</body>
</html>
