@extends("layouts.main", ['title' => ($data == []) ? 'Tambah Data' : 'Edit Data'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">
	<?php $date = date('Y/m/d H:i:s'); ?>
    <div class="flex gap-5">

        <div class="w-full" x-data="{ openTab: 1 }">
			<form action="{{ ($data == [] ? route('permintaan_pengadaan_create.simlog') : route('permintaan_pengadaan_update.simlog', $data['id']) )}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="card card-light" >
					<div class="card-header">
						<div id="judul" class="title-card-head">
							<div class="font-bold text-xl">{{ ($data == []) ? 'Tambah Permintaan Pengadaan' : 'Edit Permintaan Pengadaan' }}</div>
						</div>
					</div>
					<div class="card-body">
							<div class="" x-show="openTab === 1">
								<div class="min-h-32">
									<div class="flex flex-wrap space-y-5">
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Pilih Salah Satu</label>
												<div class="grid grid-cols-2 gap-4">
													<div class="grid grid-cols-3 gap-4">
														<div>
															<div class="flex items-center space-x-2">
																<input type="radio" class="form-control-danger" onclick="pilihjenispermintaan('bmn')" name="jenispermintaan" id="radio" <?php echo ($data == []) ? '' : (($jenispermintaanbarang == 'BMN') ? 'checked' : '') ?> >
																<label for="radio">BMN</label>
															</div>
														</div>
														<div>
															<div class="flex items-center space-x-2">
																<input type="radio" class="form-control-danger" onclick="pilihjenispermintaan('bhp')" name="jenispermintaan" id="radio" <?php echo ($data == []) ? '' : (($jenispermintaanbarang == 'BHP') ? 'checked' : '') ?> >
																<label for="radio">BHP</label>
															</div>
														</div>
														<div>
															<div class="flex items-center space-x-2">
																<input type="radio" class="form-control-danger" onclick="pilihjenispermintaan('sukucadang')" name="jenispermintaan" id="radio" <?php echo ($data == []) ? '' : (($jenispermintaanbarang == 'Suku Cadang') ? 'checked' : '') ?> >
																<label for="radio">Suku Cadang</label>
															</div>
														</div>
													</div>
													<div></div>
												</div>
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Nama User</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
											<div class="form-group">
												<label class="label-form-dark">Tanggal Permintaan</label>
												<input type="datetime-local" class="form-control-secondary" placeholder="Text" value="{{ ($data == []) ? '' : strftime('%Y-%m-%dT%H:%M', strtotime($date)) }}">
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Bidang</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
											<div class="form-group">
												<label class="label-form-dark">Bagian</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Tujuan</label>
												<div class="form-group-append">
													<select class="form-control-primary input-form h-full">
														@if($data == [])
															<option value="#" selected disabled> -- Select Form --</option>
														@endif
														<option value="1" <?php if($data != [] and $data['id'] == '1') { ?> selected <?php }?> >Item 1</option>
														<option value="2" <?php if($data != [] and $data['id'] == '2') { ?> selected <?php }?> >Item 2</option>
														<option value="3" <?php if($data != [] and $data['id'] == '3') { ?> selected <?php }?> >Item 3</option>
													</select>
													<span class="append-secondary">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
															<path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"></path>
														  </svg>											  
													</span>
												</div>
											</div>
											<div class="form-group">
												<label class="label-form-dark">Perihal</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
										</div>
									</div>
								</div>
								{{-- button --}}
								<div class="bg-white py-5 rounded-lg flex items-center justify-between">
									<div class="ml-0 lg:ml-3 space-x-3">
										<span class="font-bold text-2xl">
											<span><</span>
											<span class="text-primary">1</span>
											<span>/</span>
											<span>2</span>
											<span>></span>
										</span>
										<a href="{{ route('permintaan_pengadaan.simlog') }}" class="text-primary underline font-bold">Kembali</a>
									</div>
									<div class="flex items-center justify-end space-x-3">
										<button id="tombolnext" onclick="bukamodal('buka')" type="button" class="btn-primary focus:outline-none {{ ($data == []) ? 'hidden' : '' }}" @click="openTab = 2">Selanjutnya</button>
									</div>
								</div>
							</div>
							<div class="" x-show="openTab === 2">
								<div class="min-h-32">
									<div id="judulpermintaan" class="font-bold text-xl">
										@if($data != [])
											@if($jenispermintaanbarang == 'BMN')
												Barang Milik Negara
											@elseif($jenispermintaanbarang == 'BHP')
												Barang Habis Pakai
											@else
												Suku Cadang
											@endif
										@endif
									</div>
									<div class="flex flex-wrap space-y-5">
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Nama Barang</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Kode Barang</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
											<div class="form-group">
												<label class="label-form-dark">Nama Kategori</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Tahun Pengadaan</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
											<div class="form-group">
												<label class="label-form-dark">Nilai Barang</label>
												<div class="form-group-append">
													<input type="text" class="form-control-secondary" placeholder="Text">
													<span class="append-secondary">
														RP
													</span>
												</div>
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Tahun</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
											<div class="form-group">
												<label class="label-form-dark">Merek</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Kondisi Barang</label>
												<div class="form-group-append">
													<select class="form-control-primary input-form h-full">
														@if($data == [])
															<option value="#" selected disabled> -- Select Form --</option>
														@endif
														<option value="1" <?php if($data != [] and $data['id'] == '1') { ?> selected <?php }?> >Item 1</option>
														<option value="2" <?php if($data != [] and $data['id'] == '2') { ?> selected <?php }?> >Item 2</option>
														<option value="3" <?php if($data != [] and $data['id'] == '3') { ?> selected <?php }?> >Item 3</option>
													</select>
													<span class="append-secondary">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
															<path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"></path>
														  </svg>											  
													</span>
												</div>
											</div>
											<div class="form-group">
												<label class="label-form-dark">Usia Simpan</label>
												<div class="form-group-append">
													<input type="text" class="form-control-secondary" placeholder="Text">
													<span class="append-secondary">
														Bulan
													</span>
												</div>
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Stok Minimum</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
											<div class="form-group">
												<label class="label-form-dark">Stok</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
										</div>
										<div id="kodeparentform" class="flex items-center w-full space-x-5 @if($jenispermintaanbarang == 'BMN') hidden @endif ">
											<div class="form-group">
												<label class="label-form-dark">Kode Parent</label>
												<div class="form-group-append">
													<select class="form-control-primary input-form h-full">
														@if($data == [])
															<option value="#" selected disabled> -- Select Form --</option>
														@endif
														<option value="1" <?php if($data != [] and $data['id'] == '1') { ?> selected <?php }?> >Item 1</option>
														<option value="2" <?php if($data != [] and $data['id'] == '2') { ?> selected <?php }?> >Item 2</option>
														<option value="3" <?php if($data != [] and $data['id'] == '3') { ?> selected <?php }?> >Item 3</option>
													</select>
													<span class="append-secondary">
														<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
															<path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"></path>
														  </svg>											  
													</span>
												</div>
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Spesifikasi dan Keterangan</label>
												<textarea type="text" class="form-control-secondary" placeholder="Text" rows="4"></textarea>
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark">Upload Gambar</label>
												<div class="form-preview-image">
													<input type="file" id="uploadFile" multiple="" accept="image/*" class="updoc form-control-secondary input-image-prefiew h-full" placeholder="file">

													<div class="flex flex-row w-full items-center justify-center mb-3 rounded-md space-x-3 p-2" id="imgPrev"></div>
													<div class="flex flex-col justify-center items-center space-y-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="87.269" height="55.755" viewBox="0 0 87.269 55.755">
															<path id="Path_343" data-name="Path 343" d="M71.315,23.464c0-.232.039-.465.039-.7a22.485,22.485,0,0,0-42.855-9.8,11.567,11.567,0,0,0-16.675,8.518,17.625,17.625,0,0,0,5.61,34.266H37.4V40.268H28.012l15.623-16.2L59.257,40.248H49.868V55.736H71.354a16.137,16.137,0,0,0-.039-32.272Z" fill="#43425d" opacity="0.1"></path>
														  </svg>
														  <h5 class="text-gray-600">Upload File Here</h5>
														  <button class="btn-sm-primary focus:outline-none" onclick="$('#uploadFile').click();" type="button">Chose File</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								{{-- button --}}
								<div class="bg-white py-5 rounded-lg flex items-center justify-between">
									<div class="ml-0 lg:ml-3">
										<span class="font-bold text-2xl">
											<span><</span>
											<span class="text-primary">2</span>
											<span>/</span>
											<span>2</span>
											<span>></span>
										</span>
									</div>
									<div class="flex items-center justify-end space-x-3">
										<button type="button" onclick="bukamodal('tutup')" class="btn-primary focus:outline-none" @click="openTab = 1">Sebelumnya</button>
										<div x-data="{ open: false }" class="relative">
											<button @click="open=true" type="button" id="btnFilterAscDesc" class="btn-primary focus:outline-none">
												{{ ($data == []) ? 'Simpan' : 'Ubah' }}
											</button>
											<div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
												x-transition:enter="transition duration-200 transform ease-out"
												x-transition:enter-start="scale-75"
												x-transition:leave="transition duration-100 transform ease-in"
												x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
												<div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
													<div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
														<div></div>
														<div>
															<a href="#" @click="open=false">
																<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
																</svg>
															</a>
														</div>
													</div>
													<div class="p-7 flex flex-col items-center justify-center modal-body">
														<span class="w-18 h-18 mb-5">
															  <img src="{{asset('assets/images/simlog-logo-dark.png')}}" class="h-20 w-20" alt="">
														</span>
							
														<h2 class="text-3xl text-secondary font-bold mb-4">PERINGATAN!</h2>
														<p class="text-base font-medium text-center text-gray-800"> Yakin ingin {{ ($data == []) ? 'menyimpan' : 'mengubah' }} data ini ?</p>
														<div class="w-full flex items-center justify-center space-x-2">
															<button @click="open=false" type="button" class="btn-disabled mt-5 focus:outline-none">
																Batal
															</button>
															<button type="submit" class="btn-primary mt-5 focus:outline-none">
																{{ ($data == []) ? 'Ya, Simpan' : 'Ya, Ubah' }}
															</button>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</form>
        </div>

    </div>

</section>

@endsection

@push('bofore_style')
@endpush
@push('after_style')
@endpush
@push('bofore_scripts')
@endpush
@push('after_scripts')
	<script>
		function pilihjenispermintaan(target){
			$( document ).ready(function() {
				$("#tombolnext").removeClass("hidden")
			});
			
			if(target == 'bmn'){
				document.getElementById('judulpermintaan').innerHTML = 'Barang Milik Negara';
				$( document ).ready(function() {
					$("#kodeparentform").addClass("hidden")
				});
			}
			else if(target == 'bhp'){
				document.getElementById('judulpermintaan').innerHTML = 'Barang Habis Pakai';
				$( document ).ready(function() {
					$("#kodeparentform").removeClass("hidden")
				});
			}
			else{
				document.getElementById('judulpermintaan').innerHTML = 'Suku Cadang';
				$( document ).ready(function() {
					$("#kodeparentform").removeClass("hidden")
				});
			}
		}
		
		function bukamodal(target){
			if(target == 'buka'){
				$( document ).ready(function() {
					$("#judul").addClass("hidden")
				});
			}
			else{
				$( document ).ready(function() {
					$("#judul").removeClass("hidden")
				});
			}
		}
	</script>
@endpush