<div>
				<div class="card">
								<div class="card-header ui-sortable-handle">
												<h3 class="card-title">
																<i class="fas fa-edit mr-1"></i>
																Pergeseran Anggaran
												</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
												@if ($currentStep != 0)
																<div class="bs-stepper">
																				<div class="bs-stepper-header" role="tablist">
																								<!-- your steps here -->
																								<div class="step">
																												<button type="button" class="step-trigger">
																																<span class="bs-stepper-circle"
																																				style="background-color:{{ $currentStep != 1 ? '' : '#3c8dbc' }}">1</span>
																																<span class="bs-stepper-label"
																																				style="color:{{ $currentStep != 1 ? '' : '#3c8dbc' }}">Surat Permohonan</span>
																												</button>
																								</div>
																								<div class="line"></div>
																								<div class="step">
																												<button type="button" class="step-trigger">
																																<span class="bs-stepper-circle"
																																				style="background-color:{{ $currentStep != 2 ? '' : '#3c8dbc' }}">2</span>
																																<span class="bs-stepper-label"
																																				style="color:{{ $currentStep != 2 ? '' : '#3c8dbc' }}">Matriks Pergeseran</span>
																												</button>
																								</div>
																								<div class="line"></div>
																								<div class="step">
																												<button type="button" class="step-trigger">
																																<span class="bs-stepper-circle"
																																				style="background-color:{{ $currentStep != 3 ? '' : '#3c8dbc' }}">2</span>
																																<span class="bs-stepper-label"
																																				style="color:{{ $currentStep != 3 ? '' : '#3c8dbc' }}">Logins</span>
																												</button>
																								</div>
																				</div>
																</div>
												@endif
												<div class="bs-stepper-content">
																@if ($currentStep == 1)
																				<div class="row">
																								<div class="col-4">
																												@error('biro')
																																<span class="text-danger">{{ $message }}</span>
																												@enderror
																												<div class="form-group">
																																<label for="biro">Biro</label>
																																<select class="form-control select2" style="width: 100%;" id="biro"
																																				wire:model="biro" name="biro">
																																				<option value="">Pilih Biro</option>
																																				<option value="Biro 1">Biro 1</option>
																																				<option value="Biro 2">Biro 2</option>
																																				<option value="Biro 3">Biro 3</option>
																																</select>
																												</div>
																								</div>
																								<div class="col-4">
																												@error('tgl')
																																<span class="text-danger">{{ $message }}</span>
																												@enderror
																												<div class="form-group">
																																<label>Tanggal:</label>
																																<div class="row">
																																				<div class="col-4">Palembang,</div>
																																				<div class="col-8">
																																								<input required type="date" name="tgl" class="form-control"
																																												id="selectedDate" wire:model="tgl" wire:change="updateNoSp4">
																																				</div>
																																</div>
																												</div>
																								</div>

																								<div class="col-4">
																												<div class="form-group">
																																<label>Nomor:</label>
																																<div class="row">
																																				<div class="col-3">
																																								@error('no_sp_1')
																																												<span class="text-danger">{{ $message }}</span>
																																								@enderror
																																								<input type="text" class="form-control" name="no_sp_1" wire:model="no_sp_1">
																																				</div>
																																				<div class="col-3">
																																								@error('no_sp_2')
																																												<span class="text-danger">{{ $message }}</span>
																																								@enderror
																																								<input type="text" class="form-control" name="no_sp_2" wire:model="no_sp_2">
																																				</div>
																																				<div class="col-3">
																																								@error('no_sp_3')
																																												<span class="text-danger">{{ $message }}</span>
																																								@enderror
																																								<input type="text" class="form-control" name="no_sp_3" wire:model="no_sp_3"
																																												placeholder="VIII" value="VIII">
																																				</div>
																																				<div class="col-3">
																																								@error('no_sp_4')
																																												<span class="text-danger">{{ $message }}</span>
																																								@enderror
																																								<input type="text" class="form-control" name="no_sp_4" wire:model="no_sp_4">
																																				</div>

																																</div>
																												</div>
																								</div>
																				</div>
																				{{-- <div class="row">
																								<div class="col-4">
																												<div class="form-group">
																																<label>Perihal</label>
																																<textarea id="textareaContent" wire:model="perihal" name="perihal" class="form-control">Permohonan Pergeseran Anggaran Tahun Anggaran</textarea>
																												</div>
																								</div>
																				</div> --}}
																@endif
																@if ($currentStep == 2)
																				<h1>2</h1>
																@endif
												</div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
												<a wire:click="firstStepSubmit" class="btn btn-primary">
																Selanjutnya
												</a>
												<a wire:click="back(1)" class="btn btn-danger">
																Kembali
												</a>
								</div>
				</div>
</div>

@push('scripts')
				<script>
								function updateTextarea() {
												var selectedDate = document.getElementById('selectedDate').value;
												var newYear = new Date(selectedDate).getFullYear();
												var textareaContent = document.getElementById('textareaContent').value;
												var no4Input = document.getElementsByName('no_sp_4')[0];

												// Mencari apakah tahun anggaran sudah ada dalam teks
												var regex = /Tahun Anggaran (\d{4})/g;
												var match = regex.exec(textareaContent);

												if (match) {
																var currentYear = parseInt(match[1]);

																// Jika tahun yang baru berbeda dari tahun yang sudah ada, ganti tahunnya
																if (newYear !== currentYear) {
																				var updatedContent = textareaContent.replace(regex, "Tahun Anggaran " + newYear);
																				document.getElementById('textareaContent').value = updatedContent;
																}
												} else {
																// Jika tidak ada tahun anggaran dalam teks, tambahkan tahun baru
																document.getElementById('textareaContent').value += " " + newYear;
												}
												// Set nilai input no_4 dengan tahun yang dipilih
												no4Input.value = newYear;
								}
				</script>
				<script>
								// Wait for the document to be fully loaded
								document.addEventListener("DOMContentLoaded", function() {
												// Get the value of the query parameter 'namaBiro' from the URL
												var params = new URLSearchParams(window.location.search);
												var namaBiro = params.get("namaBiro");

												// Check if 'namaBiro' is not null or undefined
												if (namaBiro !== null && namaBiro !== undefined) {
																// Update the text content of elements with the class 'namaBiroHeading'
																document.querySelectorAll(".namaBiroHeading").forEach(function(element) {
																				element.textContent = namaBiro;
																});
												}
								});

								// Wait for the document to be fully loaded
								document.addEventListener("DOMContentLoaded", function() {
												// Get the value of the query parameter 'namaBiro' from the URL
												var params = new URLSearchParams(window.location.search);
												var namaBiro = params.get("namaBiro");

												// Set the value of the input field with the name 'biro' to the value of 'namaBiro' from the URL
												document.getElementById('biroInput').value = namaBiro;
								});
				</script>
				<script>
								// Wait for the document to be fully loaded
								document.addEventListener("DOMContentLoaded", function() {
												// Get the value of the query parameter 'namaBiro' from the URL
												var params = new URLSearchParams(window.location.search);
												var namaBiro = params.get("namaBiro");

												// Check if 'namaBiro' is not null or undefined
												if (namaBiro !== null && namaBiro !== undefined) {
																// Emit Livewire event to update the value of 'biro'
																Livewire.emit('updateBiro', namaBiro);
												}
								});
				</script>
@endpush
