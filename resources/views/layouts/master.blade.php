<!DOCTYPE html>
<html lang="en">

<head>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<title>SIPERAN - Sistem Pergerseran Anggaran</title>

				<!-- Google Font: Source Sans Pro -->
				<link rel="stylesheet"
								href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
				<!-- Font Awesome -->
				<link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
				<!-- daterange picker -->
				<link rel="stylesheet" href="{{ asset('vendors/plugins/daterangepicker/daterangepicker.css') }}">
				<!-- iCheck for checkboxes and radio inputs -->
				<link rel="stylesheet" href="{{ asset('vendors/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
				<!-- Bootstrap Color Picker -->
				<link rel="stylesheet"
								href="{{ asset('vendors/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
				<!-- Tempusdominus Bootstrap 4 -->
				<link rel="stylesheet"
								href="{{ asset('vendors/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
				<!-- Select2 -->
				<link rel="stylesheet" href="{{ asset('vendors/plugins/select2/css/select2.min.css') }}">
				<link rel="stylesheet" href="{{ asset('vendors/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
				<!-- Bootstrap4 Duallistbox -->
				<link rel="stylesheet" href="{{ asset('vendors/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
				<!-- BS Stepper -->
				<link rel="stylesheet" href="{{ asset('vendors/plugins/bs-stepper/css/bs-stepper.min.css') }}">
				<!-- dropzonejs -->
				<link rel="stylesheet" href="{{ asset('vendors/plugins/dropzone/min/dropzone.min.css') }}">
				<!-- Theme style -->
				<link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">

				<!-- DataTables -->
				<link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
				<link rel="stylesheet"
								href="{{ asset('vendors//plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
				<link rel="stylesheet" href="{{ asset('vendors//plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
				@yield('styles')
				@stack('scripts')
				@livewireStyles
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
				<div class="wrapper">
								<!-- Preloader -->
								<!-- <div
																class="preloader flex-column justify-content-center align-items-center"
												>
																<h1>SIPERAN</h1>
																<img
																				src="{{ asset('vendors/dist/img/AdminLTELogo.png') }}"
																				alt="AdminLTELogo"
																				height="60"
																				width="60"
																/>
												</div> -->

								<!-- Navbar -->
								<nav class="main-header navbar navbar-expand navbar-white navbar-light">
												<!-- Left navbar links -->
												<ul class="navbar-nav">
																<li class="nav-item">
																				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
																												class="fas fa-bars"></i></a>
																</li>
												</ul>

												<!-- Right navbar links -->
												<ul class="navbar-nav ml-auto">
																<li class="nav-item">
																				<a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
																								role="button">
																								<i class="fas fa-th-large"></i>
																				</a>
																</li>
												</ul>
								</nav>
								<!-- /.navbar -->

								<!-- Main Sidebar Container -->
								<aside class="main-sidebar sidebar-dark-primary elevation-4">
												<!-- Brand Logo -->
												<a href="index3.html" class="brand-link">
																<img src="{{ asset('vendors/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
																				class="brand-image img-circle elevation-3" style="opacity: 0.8" />
																<span class="brand-text font-weight-light">SIPERAN</span>
												</a>

												<!-- Sidebar -->
												<div class="sidebar">
																<!-- Sidebar Menu -->
																<nav class="mt-2">
																				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
																								data-accordion="false">
																								<li class="nav-item">
																												<a href="{{ url('/dashboard') }}" class="nav-link">
																																<i class="nav-icon fas fa-tachometer-alt"></i>
																																<p>Dashboard</p>
																												</a>
																								</li>
																								<li class="nav-item">
																												<a href="{{ url('/laporan') }}" class="nav-link">
																																<i class="nav-icon fas fa-tachometer-alt"></i>
																																<p>Laporan</p>
																												</a>
																								</li>
																				</ul>
																</nav>
																<!-- /.sidebar-menu -->
												</div>
												<!-- /.sidebar -->
								</aside>

								<!-- Content Wrapper. Contains page content -->
								<div class="content-wrapper">
												<!-- Content Header (Page header) -->
												<div class="content-header">
																<div class="container-fluid">
																				<div class="row mb-2">
																								<div class="col-sm-6">
																												<h1 class="m-0">Dashboard</h1>
																								</div>
																								<!-- /.col -->
																								<div class="col-sm-6">
																												<ol class="breadcrumb float-sm-right">
																																<li class="breadcrumb-item">
																																				<a href="#">Home</a>
																																</li>
																																<li class="breadcrumb-item active">
																																				Dashboard v1
																																</li>
																												</ol>
																								</div>
																								<!-- /.col -->
																				</div>
																				<!-- /.row -->
																</div>
																<!-- /.container-fluid -->
												</div>
												<!-- /.content-header -->

												<!-- Main content -->
												<section class="content">
																<div class="container-fluid">@yield('content')</div>
																<!-- /.container-fluid -->
												</section>
												<!-- /.content -->
								</div>
								<!-- /.content-wrapper -->
								<footer class="main-footer">
												<strong>Copyright &copy; 2014-2021
																<a href="https://adminlte.io">AdminLTE.io</a>.</strong>
												All rights reserved.
												<div class="d-none d-sm-inline-block float-right">
																<b>Version</b> 3.2.0
												</div>
								</footer>
				</div>

				@yield('scripts')

				@livewireScripts
				<!-- jQuery -->
				<script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>

				<!-- Bootstrap 4 -->
				<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
				<!-- Select2 -->
				<script src="{{ asset('vendors/plugins/select2/js/select2.full.min.js') }}"></script>
				<!-- Bootstrap4 Duallistbox -->
				<script src="{{ asset('vendors/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
				<!-- InputMask -->
				<script src="{{ asset('vendors/plugins/moment/moment.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
				<!-- date-range-picker -->
				<script src="{{ asset('vendors/plugins/daterangepicker/daterangepicker.js') }}"></script>
				<!-- bootstrap color picker -->
				<script src="{{ asset('vendors/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
				<!-- Tempusdominus Bootstrap 4 -->
				<script src="{{ asset('vendors/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
				<!-- Bootstrap Switch -->
				<script src="{{ asset('vendors/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
				<!-- BS-Stepper -->
				<script src="{{ asset('vendors/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
				<!-- dropzonejs -->
				<script src="{{ asset('vendors/plugins/dropzone/min/dropzone.min.js') }}"></script>
				<!-- AdminLTE App -->
				<script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>

				<script>
								$(function() {
												//Initialize Select2 Elements
												$('.select2').select2()

												//Initialize Select2 Elements
												$('.select2bs4').select2({
																theme: 'bootstrap4'
												})

												//Datemask dd/mm/yyyy
												$('#datemask').inputmask('dd/mm/yyyy', {
																'placeholder': 'dd/mm/yyyy'
												})
												//Datemask2 mm/dd/yyyy
												$('#datemask2').inputmask('dd/mm/yyyy', {
																'placeholder': 'dd/mm/yyyy'
												})
												//Money Euro
												$('[data-mask]').inputmask()

												//Date picker
												$('#reservationdate').datetimepicker({
																format: 'DD/MM/YYYY',
												});

												//Date and time picker
												$('#reservationdatetime').datetimepicker({
																icons: {
																				time: 'far fa-clock'
																}
												});

												//Date range picker
												$('#reservation').daterangepicker()
												//Date range picker with time picker
												$('#reservationtime').daterangepicker({
																timePicker: true,
																timePickerIncrement: 30,
																locale: {
																				format: 'DD/MM/YYYY hh:mm A'
																}
												})
												//Date range as a button
												$('#daterange-btn').daterangepicker({
																				ranges: {
																								'Today': [moment(), moment()],
																								'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
																								'Last 7 Days': [moment().subtract(6, 'days'), moment()],
																								'Last 30 Days': [moment().subtract(29, 'days'), moment()],
																								'This Month': [moment().startOf('month'), moment().endOf('month')],
																								'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
																												'month').endOf('month')]
																				},
																				startDate: moment().subtract(29, 'days'),
																				endDate: moment()
																},
																function(start, end) {
																				$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
																}
												)

												//Timepicker
												$('#timepicker').datetimepicker({
																format: 'LT'
												})

												//Bootstrap Duallistbox
												$('.duallistbox').bootstrapDualListbox()

												//Colorpicker
												$('.my-colorpicker1').colorpicker()
												//color picker with addon
												$('.my-colorpicker2').colorpicker()

												$('.my-colorpicker2').on('colorpickerChange', function(event) {
																$('.my-colorpicker2 .fa-square').css('color', event.color.toString());
												})

												$("input[data-bootstrap-switch]").each(function() {
																$(this).bootstrapSwitch('state', $(this).prop('checked'));
												})

								})
								// BS-Stepper Init
								document.addEventListener('DOMContentLoaded', function() {
												window.stepper = new Stepper(document.querySelector('.bs-stepper'))
								})

								// DropzoneJS Demo Code Start
								Dropzone.autoDiscover = false

								// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
								var previewNode = document.querySelector("#template")
								previewNode.id = ""
								var previewTemplate = previewNode.parentNode.innerHTML
								previewNode.parentNode.removeChild(previewNode)

								var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
												url: "/target-url", // Set the url
												thumbnailWidth: 80,
												thumbnailHeight: 80,
												parallelUploads: 20,
												previewTemplate: previewTemplate,
												autoQueue: false, // Make sure the files aren't queued until manually added
												previewsContainer: "#previews", // Define the container to display the previews
												clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
								})

								myDropzone.on("addedfile", function(file) {
												// Hookup the start button
												file.previewElement.querySelector(".start").onclick = function() {
																myDropzone.enqueueFile(file)
												}
								})

								// Update the total progress bar
								myDropzone.on("totaluploadprogress", function(progress) {
												document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
								})

								myDropzone.on("sending", function(file) {
												// Show the total progress bar when upload starts
												document.querySelector("#total-progress").style.opacity = "1"
												// And disable the start button
												file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
								})

								// Hide the total progress bar when nothing's uploading anymore
								myDropzone.on("queuecomplete", function(progress) {
												document.querySelector("#total-progress").style.opacity = "0"
								})

								// Setup the buttons for all transfers
								// The "add files" button doesn't need to be setup because the config
								// `clickable` has already been specified.
								document.querySelector("#actions .start").onclick = function() {
												myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
								}
								document.querySelector("#actions .cancel").onclick = function() {
												myDropzone.removeAllFiles(true)
								}
								// DropzoneJS Demo Code End
				</script>

				<!-- DataTables  & Plugins -->
				<script src="{{ asset('vendors/plugins/datatables/jquery.dataTables.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/jszip/jszip.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/pdfmake/pdfmake.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/pdfmake/vfs_fonts.js') }}"></script>
				<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
				<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
				<!-- Page specific script -->
				<script>
								$(function() {
												$("#example1").DataTable({
																"responsive": true,
																"lengthChange": false,
																"autoWidth": false,
																"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
												}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
												$('#example2').DataTable({
																"paging": true,
																"lengthChange": false,
																"searching": false,
																"ordering": true,
																"info": true,
																"autoWidth": false,
																"responsive": true,
												});
								});
				</script>
</body>

</html>
