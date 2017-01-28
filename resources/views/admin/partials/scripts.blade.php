<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/materialize.js')}}" type="text/javascript"></script>
<script src="{{asset('plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{asset('plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/app.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/dashboard.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/quick-nav.min.js')}}" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$('select').material_select();
		$('.datepicker').pickadate({
			selectMonths: true,
			selectYears: 2
		});
		$('ul.tabs').tabs();
	});
</script>