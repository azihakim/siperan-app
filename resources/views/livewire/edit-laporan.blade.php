<div>
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
																																<span class="bs-stepper-label"
																																				style="color:{{ $currentStep != 1 ? '' : '#3c8dbc' }}">Surat
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
																																<span class="bs-stepper-label"
																																				style="color:{{ $currentStep != 4 ? '' : '#3c8dbc' }}">Dokumen Pelaksanaan Perubahan
																																				Anggaran</span>
																												</button>
																								</div>
																				</div>
																</div>
																<hr>

																<div class="bs-stepper-content">
																				@if ($currentStep == 1)
																								<div class="row">
																												<div class="col-4">
																																@error('biro')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label for="biro">Biro</label>
																																				<select class="form-control" style="width: 100%;" id="biro" wire:model="biro"
																																								wire:change="fillEmployeeData">
																																								<option value="">Pilih Biro</option>
																																								@foreach ($options as $option)
																																												<option value="{{ $option }}">{{ $option }}</option>
																																								@endforeach
																																				</select>
																																</div>
																												</div>
																								</div>

																								<div class="row">
																												<div class="col-3">
																																@error('nama_kb')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Nama Kepala Biro</label>
																																				<input type="text" class="form-control" placeholder="Masukkan Nama"
																																								wire:model="nama_kb">
																																</div>
																												</div>

																												<div class="col-3">
																																@error('nip_kb')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>NIP Kepala Biro</label>
																																				<input type="text" class="form-control" wire:model="nip_kb"
																																								placeholder="Masukkan Nama">
																																</div>
																												</div>

																												<div class="col-3">
																																@error('jabatan_kb')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Jabatan Kepala Biro</label>
																																				<input type="text" class="form-control" wire:model="jabatan_kb"
																																								placeholder="Masukkan Jabatan">
																																</div>
																												</div>
																												<div class="col-3">
																																@error('pangkat_kb')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Pangkat Kepala Biro</label>
																																				<input type="text" class="form-control" wire:model="pangkat_kb"
																																								placeholder="Masukkan Pangkat">
																																</div>
																												</div>
																								</div>

																								<div class="row">
																												<div class="col-3">
																																@error('tgl')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Tanggal Surat</label>
																																				<input required type="date" name="tgl" class="form-control" wire:model="tgl">
																																</div>
																												</div>

																												<div class="col-3">
																																@error('no_sppa')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Nomor Surat</label>
																																				<div class="row">
																																								<div class="col-12">
																																												<input type="text" class="form-control" name="no_sppa"
																																																wire:model="no_sppa" placeholder="Masukkan Nomor Surat">
																																								</div>
																																				</div>
																																</div>
																												</div>
																												<div class="col-3">
																																@error('sifat_sppa')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Sifat Surat</label>
																																				<div class="row">
																																								<div class="col-12">
																																												<input type="text" class="form-control" name="sifat_surat"
																																																wire:model="sifat_sppa" placeholder="Masukkan Sifat Surat">
																																								</div>
																																				</div>
																																</div>
																												</div>

																												<div class="col-3">
																																@error('lampiran_sppa')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Lampiran Surat</label>
																																				<div class="row">
																																								<div class="col-12">
																																												<input type="text" class="form-control" name="lampiran"
																																																wire:model="lampiran_sppa" placeholder="Masukkan Jumlah Lampiran">
																																								</div>
																																				</div>
																																</div>
																												</div>

																												<div class="col-3">
																																@error('hal_sppa')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Hal Surat</label>
																																				<textarea type="text" class="form-control" name="hal" wire:model="hal_sppa" placeholder="Masukkan Hal Surat"
																																				    style="height: 40px"></textarea>
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
																																								<label>No.Rekening</label>
																																								<input class="form-control" type="text"
																																												wire:model="inputs.{{ $key }}.no_rekening"
																																												placeholder="No. Rekening">
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
																								<div class="row">
																												<div class="col-3">
																																@error('no_sptjm')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>No. Surat</label>
																																				<input type="text" class="form-control" wire:model="no_sptjm">
																																</div>
																												</div>
																												<div class="col-3">
																																@error('tgl_sptjm')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Tanggal</label>
																																				<input required type="date" name="tgl" class="form-control"
																																								wire:model="tgl_sptjm">
																																</div>
																												</div>
																								</div>

																								<div class="row">
																												<div class="col-3">
																																@error('nama_kb')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Nama Kepala Biro</label>
																																				<input type="text" class="form-control" wire:model="nama_kb">
																																</div>
																												</div>
																												<div class="col-3">
																																@error('nip_kb')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>NIP</label>
																																				<input type="text" class="form-control" wire:model="nip_kb">
																																</div>
																												</div>
																												<div class="col-3">
																																@error('jabatan_kb')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Jabatan</label>
																																				<input type="text" class="form-control" wire:model="jabatan_kb">
																																</div>
																												</div>
																												<div class="col-3">
																																@error('pangkat_kb')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Pangkat</label>
																																				<input type="text" class="form-control" wire:model="pangkat_kb"
																																								placeholder="Masukkan Pangkat">
																																</div>
																												</div>
																								</div>
																				@endif

																				@if ($currentStep == 4)
																								<div class="row">
																												<div class="col-4">
																																@error('dokPel_tahun')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Tahun Anggaran</label>
																																				<input type="text" class="form-control" wire:model="dokPel_tahun">
																																</div>
																												</div>
																												<div class="col-4">
																																@error('dokPel_noDppa')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Nomor DPPA</label>
																																				<input required type="text" class="form-control" wire:model="dokPel_noDppa">
																																</div>
																												</div>
																								</div>

																								<div class="row">
																												<div class="col-4">
																																@error('dokPel_UrusanPemerintah')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Urusan Pemerintahan</label>
																																				<input type="text" class="form-control"
																																								wire:model="dokPel_UrusanPemerintahan">
																																</div>
																												</div>
																												<div class="col-4">
																																@error('dokPel_bidangUrusan')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Bidang Urusan</label>
																																				<input type="text" class="form-control" wire:model="dokPel_bidangUrusan">
																																</div>
																												</div>
																												<div class="col-4">
																																@error('dokPel_program')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Program</label>
																																				<input type="text" class="form-control" wire:model="dokPel_program">
																																</div>
																												</div>
																												<div class="col-4">
																																@error('dokPel_kegiatan')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Kegiatan</label>
																																				<input type="text" class="form-control" wire:model="dokPel_kegiatan">
																																</div>
																												</div>
																												<div class="col-4">
																																@error('dokPel_organisasi')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Organisasi</label>
																																				<input type="text" class="form-control" wire:model="dokPel_organisasi">
																																</div>
																												</div>
																												<div class="col-4">
																																@error('dokPel_unit')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Unit</label>
																																				<input type="text" class="form-control" wire:model="dokPel_unit">
																																</div>
																												</div>
																												<div class="col-4">
																																@error('dokPel_alokasiM1')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Alokasi Tahun -1</label>
																																				<input type="text" class="form-control" wire:model="dokPel_alokasiM1">
																																</div>
																												</div>
																												<div class="col-4">
																																@error('dokPel_alokasiTahun')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Alokasi Tahun</label>
																																				<input type="text" class="form-control" wire:model="dokPel_alokasiTahun">
																																</div>
																												</div>

																												<div class="col-4">
																																@error('dokPel_alokasiP1')
																																				<span class="text-danger">{{ $message }}</span>
																																@enderror
																																<div class="form-group">
																																				<label>Alokasi Tahun +1</label>
																																				<input type="text" class="form-control" wire:model="dokPel_alokasiP1"
																																								placeholder="pp">
																																</div>
																												</div>
																								</div>

																								<div class="row">
																												<table class="table-bordered table">
																																<thead style="text-align: center">
																																				<tr>
																																								<th colspan="5">Indikator dan Tolak Ukur Kinerja Kegiatan</th>
																																				</tr>
																																				<tr>
																																								<th rowspan="2" style="width: 10px; vertical-align: middle;">Indikator</th>
																																								<th colspan="2">Sebelum</th>
																																								<th colspan="2">Sesudah</th>
																																				</tr>
																																				<tr>
																																								<th>Tolak Ukur Kerja</th>
																																								<th>Target Kinerja</th>
																																								<th>Tolak Ukur Kerja</th>
																																								<th>Target Kinerja</th>
																																				</tr>
																																</thead>
																																<tbody>
																																				<tr>
																																								<td>
																																												Capaian Kegiatan
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_ck_tuk_sbm"
																																																placeholder="tuk">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_ck_tk_sbm"
																																																placeholder="tk">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_ck_tuk_sth"
																																																placeholder="tuk">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_ck_tk_sth"
																																																placeholder="tk">
																																								</td>
																																				</tr>
																																				<tr>
																																								<td>
																																												Masukan
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_m_tuk_sbm"
																																																placeholder="tuk m">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_m_tk_sbm"
																																																placeholder="tk m">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_m_tuk_sth"
																																																placeholder="tuk m">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_m_tk_sth"
																																																placeholder="tk m">
																																								</td>
																																				</tr>
																																				<tr>
																																								<td>
																																												Keluaran
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_k_tuk_sbm"
																																																placeholder="tuk k">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_k_tk_sbm"
																																																placeholder="tk k">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_k_tuk_sth"
																																																placeholder="tuk k">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_k_tk_sth"
																																																placeholder="tk k">
																																								</td>
																																				</tr>
																																				<tr>
																																								<td>
																																												Hasil
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_h_tuk_sbm"
																																																placeholder="tuk h">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_h_tk_sbm"
																																																placeholder="tk h">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_h_tuk_sth"
																																																placeholder="tuk h">
																																								</td>
																																								<td>
																																												<input type="text" class="form-control" wire:model="dokPel_h_tk_sth"
																																																placeholder="tk h">
																																								</td>
																																				</tr>

																																				<tr>
																																								<td colspan="5"></td>
																																				</tr>

																																				<tr>
																																								<td colspan="2">Sub Kegiatan</td>
																																								<td colspan="3">
																																												<input type="text" class="form-control" wire:model="dokPel_sk"
																																																placeholder="Sub Kegiatan">
																																								</td>
																																				</tr>
																																				<tr>
																																								<td colspan="2">Sumber Pendanaan</td>
																																								<td colspan="3">
																																												<input type="text" class="form-control" wire:model="dokPel_sp"
																																																placeholder="Sumber Pendanaan">
																																								</td>
																																				</tr>
																																				<tr>
																																								<td colspan="2">Lokasi</td>
																																								<td colspan="3">
																																												<input type="text" class="form-control" wire:model="dokPel_lokasi"
																																																placeholder="Lokasi">
																																								</td>
																																				</tr>
																																				<tr>
																																								<td colspan="2">Keluaran Sub Kegiatan</td>
																																								<td colspan="3">
																																												<input type="text" class="form-control" wire:model="dokPel_ksk"
																																																placeholder="Keluaran Sub Kegiatan">
																																								</td>
																																				</tr>
																																				<tr>
																																								<td colspan="2">Waktu Pelaksanaan</td>
																																								<td colspan="3">
																																												<input type="text" class="form-control" wire:model="dokPel_waktu"
																																																placeholder="Waktu Pelaksanaan">
																																								</td>
																																				</tr>
																																				<tr>
																																								<td colspan="2">Keterangan</td>
																																								<td colspan="3">
																																												<input type="text" class="form-control" wire:model="dokPel_keterangan"
																																																placeholder="Keterangan">
																																								</td>
																																				</tr>
																																</tbody>
																												</table>
																												<table class="table-bordered table">
																																<thead style="text-align: center">
																																				<tr>
																																								<th rowspan="3" style="max-width: 150px; vertical-align: middle;">Kode
																																												Rekening
																																								</th>
																																								<th rowspan="3" style="min-width: 150px; vertical-align: middle;">Uraian
																																								</th>
																																								<th colspan="10">Rincian Perhitungan</th>
																																								<th rowspan="3" style="max-width: 150px; vertical-align: middle;">
																																												Bertambah / Berkurang</th>

																																				</tr>
																																				<tr>
																																								<th colspan="5">Sebelum</th>
																																								<th colspan="5">Sesudah</th>
																																				</tr>
																																				<tr>
																																								<th>Koefisien / Volume</th>
																																								<th>Satuan</th>
																																								<th>Harga</th>
																																								<th style="width: 5%">PPN</th>
																																								<th>Jumlah</th>

																																								<th>Koefisien / Volume</th>
																																								<th>Satuan</th>
																																								<th>Harga</th>
																																								<th style="width: 5%">PPN</th>
																																								<th>Jumlah</th>
																																				</tr>
																																</thead>
																																<tbody>
																																				@foreach ($inputs_dokPel as $i => $value)
																																								<tr>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.kodeRekening')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.kodeRekening"
																																																    placeholder="Rekening"></textarea>

																																												</td>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.uraian')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.uraian"
																																																    placeholder="Uraian"></textarea>
																																												</td>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.volume_sbm')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.volume_sbm"
																																																    placeholder="Volume Sebelum"></textarea>
																																												</td>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.satuan_sbm')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.satuan_sbm"
																																																    placeholder="Satuan Sebelum"></textarea>
																																												</td>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.harga_sbm')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.harga_sbm"
																																																    placeholder="Harga Sebelum"></textarea>
																																												</td>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.ppn_sbm')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.ppn_sbm"
																																																    placeholder="PPN Sebelum"></textarea>
																																												</td>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.jumlah_sbm')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.jumlah_sbm"
																																																    placeholder="Jumlah Sebelum"></textarea>
																																												</td>

																																												<td>
																																																@error('inputs_dokPel.' . $i . '.volume_sth')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.volume_sth"
																																																    placeholder="Volume Setelah"></textarea>
																																												</td>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.satuan_sth')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.satuan_sth"
																																																    placeholder="Satuan Setelah"></textarea>
																																												</td>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.harga_sth')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.harga_sth"
																																																    placeholder="Harga Setelah"></textarea>
																																												</td>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.ppn_sth')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.ppn_sth"
																																																    placeholder="PPN Setelah"></textarea>
																																												</td>
																																												<td>
																																																@error('inputs_dokPel.' . $i . '.jumlah_sth')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.jumlah_sth"
																																																    placeholder="Jumlah Setelah"></textarea>
																																												</td>

																																												<td>
																																																@error('inputs_dokPel.' . $i . '.bertambah_berkurang')
																																																				<span class="text-danger">{{ $message }}</span>
																																																@enderror
																																																<textarea type="text" class="form-control" wire:model="inputs_dokPel.{{ $i }}.bertambah_berkurang"
																																																    placeholder="Bertambah/Berkurang"></textarea>
																																												</td>

																																								</tr>
																																				@endforeach
																																</tbody>
																												</table>

																								</div>
																								<div class="row">
																												@if ($i > 0)
																																<div class="col-2">
																																				<button class="form-control btn-block btn-outline-danger"
																																								wire:click.prevent="remove_dokPel({{ $i }})"><i
																																												class="fa fa-times"></i></button>
																																</div>
																												@endif

																												<div class="col-2">
																																<button wire:click="addInputDokPel({{ $i }})"
																																				class="btn btn-block btn-outline-primary"><i class="fa fa-plus"></i></button>
																												</div>

																								</div>
																				@endif
																</div>
												</div>
												<!-- /.card-body -->
												<div class="card-footer">
																@if ($currentStep == 1)
																				<div class="ms-auto">
																								<a wire:click="back(1)" class="btn btn-danger">
																												Kembali
																								</a>
																								<a wire:click="firstStepSubmit" class="btn btn-primary" wire:loading.remove>
																												Selanjutnya
																								</a>
																								{{-- <a disabled class="btn btn-warning" wire:loading>
																								Tunggu...
																				</a>
																				<a wire:click="printPermohonan" class="btn btn-danger">
																								permohonan
																				</a>
																				<a wire:click="exportExcel" class="btn btn-danger">
																								excel
																				</a>
																				<a wire:click="printSptjm" class="btn btn-danger">
																								sptjm
																				</a> --}}
																				</div>
																@endif
																@if ($currentStep == 2)
																				<div class="ms-auto">
																								<a wire:click="back(1)" class="btn btn-danger">
																												Kembali
																								</a>
																								<a wire:click="secondStepSubmit" class="btn btn-primary">
																												Selanjutnya
																								</a>
																								{{-- <a disabled class="btn btn-warning" wire:loading>
																								Tunggu...
																				</a> --}}
																				</div>
																@endif
																@if ($currentStep == 3)
																				<div>
																								<a wire:click="back(2)" class="btn btn-danger">
																												Kembali
																								</a>
																								<a wire:click="thirdStepSubmit" class="btn btn-primary" wire:loading.remove>
																												Selanjutnya
																								</a>
																				</div>
																@endif
																@if ($currentStep == 4)
																				<div>
																								<a wire:click="back(3)" class="btn btn-danger">
																												Kembali
																								</a>
																								<a wire:click="fourthStepSubmit" class="btn btn-primary" wire:loading.remove>
																												Simpan
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

</div>
