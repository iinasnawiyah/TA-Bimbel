<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Bimbel Taman Belajar</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('') }}template/vendors/styles/style.css">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('') }}auth/assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('') }}auth/assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('') }}auth/assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="{{ asset('') }}auth/assets/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="{{ asset('') }}auth/assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<!-- Datatable -->
	<link rel="stylesheet" type="text/css" href="{{ asset('') }}template/src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('') }}template/src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('') }}template/src/plugins/datatables/media/css/responsive.dataTables.css">


	<!-- jquery -->
	<script src="{{ asset('') }}template/js/jquery.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>

</head>

<body>
	@yield('header')
	@yield('sidebar')
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				@yield('konten')
			</div>
			<div class="footer-wrap bg-white pd-20 mb-20 border-radius-5 box-shadow">
				Selalu Pake Masker dan Jaga Jarak
			</div>
		</div>
	</div>
	<script src="{{ asset('') }}template/vendors/scripts/script.js"></script>
	<!-- Datatable -->
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
	<!-- buttons for Export datatable -->
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="{{ asset('') }}template/src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
	<script>
		$('document').ready(function() {
			$('.tabel').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [
					[10, 25, 50, -1],
					[10, 25, 50, "All"]
				],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
		});
	</script>
</body>

</html>