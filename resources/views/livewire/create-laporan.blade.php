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
												<div class="bs-stepper">
																<div class="bs-stepper-header" role="tablist">
																				<!-- your steps here -->
																				<div class="step">
																								<button type="button" class="step-trigger">
																												<span class="bs-stepper-circle"
																																style="background-color:{{ $currentStep != 1 ? '' : '#3c8dbc' }}">1</span>
																												<span class="bs-stepper-label" style="color:{{ $currentStep != 1 ? '' : '#3c8dbc' }}">Surat
																																Permohonan</span>
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
																																style="background-color:{{ $currentStep != 3 ? '' : '#3c8dbc' }}">3</span>
																												<span class="bs-stepper-label"
																																style="color:{{ $currentStep != 3 ? '' : '#3c8dbc' }}">SPTJM</span>
																								</button>
																				</div>
																				<div class="line"></div>
																				<div class="step">
																								<button type="button" class="step-trigger">
																												<span class="bs-stepper-circle"
																																style="background-color:{{ $currentStep != 4 ? '' : '#3c8dbc' }}">4</span>
																												<span class="bs-stepper-label" style="color:{{ $currentStep != 4 ? '' : '#3c8dbc' }}">Matrik
																																Perubahan
																																Rekening</span>
																								</button>
																				</div>
																</div>
												</div>
												<div class="bs-stepper-content">
																@if ($currentStep == 1)
																				<div class="row">
																								<div class="col-4">
																												@error('biro')
																																<span class="text-danger">{{ $message }}</span>
																												@enderror
																												<div class="form-group">
																																<label for="biro">Biro</label>
																																<select class="form-control" style="width: 100%;" id="biro" wire:model="biro">
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
																																												wire:model="tgl">
																																				</div>
																																</div>
																												</div>
																								</div>

																								<div class="col-4">
																												@error('no_sppa')
																																<span class="text-danger">{{ $message }}</span>
																												@enderror
																												<div class="form-group">
																																<label>Nomor:</label>
																																<div class="row">
																																				<div class="col-12">
																																								<input type="text" class="form-control" name="no_sppa" wire:model="no_sppa">
																																				</div>
																																</div>
																												</div>
																								</div>
																				</div>
																@endif
																@if ($currentStep == 2)
																				<!-- Tampilan Input Dinamis -->
																				@foreach ($inputs as $key => $value)
																								<div class="row">
																												<div class="col-2">
																																@error('inputs.' . $key . '.no_rekening')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>No.Rekening:</label>
																																				<input class="form-control" type="text"
																																								wire:model="inputs.{{ $key }}.no_rekening" placeholder="No. Rekening">
																																</div>
																												</div>

																												<div class="col-3">
																																@error('inputs.' . $key . '.uraian')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Uraian</label>
																																				<textarea class="form-control" type="text" wire:model="inputs.{{ $key }}.uraian" placeholder="Uraian"
																																				    style="height: 40px"></textarea>
																																</div>
																												</div>

																												<div class="col-2">
																																@error('inputs.' . $key . '.sebelum')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Sebelum</label>
																																				<input class="form-control" type="text"
																																								wire:model="inputs.{{ $key }}.sebelum" placeholder="Sebelum" />
																																</div>
																												</div>

																												<div class="col-2">
																																@error('inputs.' . $key . '.sesudah')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Sesudah</label>
																																				<input class="form-control" type="text"
																																								wire:model="inputs.{{ $key }}.sesudah" placeholder="Sesudah" />
																																</div>
																												</div>

																												<div class="col-2">
																																@error('inputs.' . $key . '.bertambah_berkurang')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Bertambah/Berkurang</label>
																																				<input class="form-control" type="text"
																																								wire:model="inputs.{{ $key }}.bertambah_berkurang"
																																								placeholder="Bertambah/Berkurang">
																																</div>
																												</div>

																												@if ($key > 0)
																																<div class="col-1">
																																				<div class="form-group">
																																								<label>&nbsp;</label>
																																								<div>
																																												<button class="form-control btn btn-block btn-outline-danger"
																																																wire:click.prevent="remove({{ $key }})"><i
																																																				class="fa fa-times"></i></button>
																																								</div>
																																				</div>
																																</div>
																												@endif
																												{{-- <button wire:click.prevent="remove({{ $key }})">Hapus</button> --}}

																								</div>
																				@endforeach
																				<div class="row">
																								<div class="col-2 mx-auto text-center">
																												<button wire:click="addInput({{ $i }})"
																																class="btn btn-block btn-outline-primary"><i class="fa fa-plus"></i></button>
																								</div>
																				</div>

																@endif

																@if ($currentStep == 3)
																				<h1>3</h1>
																@endif
												</div>
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
												@if ($currentStep > 1 and $currentStep < 3)
																<div>
																				<a wire:click="back(1)" class="btn btn-danger">
																								Kembali
																				</a>
																</div>
												@endif
												@if ($currentStep == 1)
																<div class="ms-auto">
																				<a wire:click="firstStepSubmit" class="btn btn-primary" wire:loading.remove>
																								Selanjutnya
																				</a>
																				<a disabled class="btn btn-warning" wire:loading>
																								Tunggu...
																				</a>
																</div>
												@endif
												@if ($currentStep == 2)
																<div class="ms-auto">
																				<a wire:click="secondStepSubmit" class="btn btn-primary" wire:loading.remove>
																								Selanjutnya
																				</a>
																				<a disabled class="btn btn-warning" wire:loading>
																								Tunggu...
																				</a>
																</div>
												@endif
												@if ($currentStep == 3)
																<div>
																				<a wire:click="back(2)" class="btn btn-danger">
																								Kembali
																				</a>
																</div>
												@endif
								</div>
				</div>
</div>

@push('scripts')
				{{-- <script>
								function formatNominal() {
												var input = document.getElementById("nominalInput");
												var nominal = input.value.replace(/[^\d-]/g, ""); // Hilangkan karakter non-digit kecuali tanda negatif (-)
												var isNegative = false;

												if (nominal.length > 0 && nominal.charAt(0) === '-') {
																isNegative = true;
																nominal = nominal.slice(1); // Hilangkan tanda negatif dari nominal
												}

												var formattedNominal = addCommas(nominal);

												if (isNegative) {
																formattedNominal = '-' + formattedNominal; // Tambahkan kembali tanda negatif jika ada
												}

												input.value = formattedNominal;
								}

								function addCommas(nStr) {
												var isNegative = false;

												if (nStr.charAt(0) === '-') {
																isNegative = true;
																nStr = nStr.slice(1); // Hilangkan tanda negatif dari nominal
												}

												nStr = parseFloat(nStr).toLocaleString("id-ID", {
																minimumFractionDigits: 0
												}); // Gunakan format lokal untuk menambahkan titik

												if (isNegative) {
																nStr = '-' + nStr; // Tambahkan kembali tanda negatif jika ada
												}

												return nStr;
								}
				</script> --}}
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
