@extends("layouts.main", ['title' => (($level == '1') ? 'Kodefikasi Level 1' : 'Kodefikasi Level 2')])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5">
	<div class=" bg-white rounded-xl p-5">
		<div class="flex flex-col bg-white rounded-xl p-5">
			<h2 class="mb-3">Kodefikasi Simak BMN</h2>
			<div class="flex flex-wrap space-y-5">
				<div class="flex items-center w-full space-x-5">
					<div class="form-group">
						<label class="label-form-dark">Kategori</label>
						<div class="form-group-append">
							<select class="form-control-primary input-form h-full" onchange="redirectUrl(this.value)">
								<option value="{{ route('kodefikasi.simlog', '1') }}" <?php if($level == '1'){ echo 'selected'; }?>>Kode Anggaran Belanja Level 1</option>
								<option value="{{ route('kodefikasi.simlog', '2') }}" <?php if($level == '2'){ echo 'selected'; }?>>Kode Anggaran Belanja Level 2</option>
							</select>
							<span class="append-secondary">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
									<path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"></path>
								  </svg>
								  
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class=" bg-white rounded-xl p-5">
        <div class="flex flex-col bg-white rounded-md p-5">
			<h2 class="mb-3">Kode Anggaran {{ (($level == '1') ? '1' : 'Level 2') }}</h2>
			<div class="space-y-3 xl:space-y-0 2xl:space-y-0 flex flex-col-reverse xl:flex-row 2xl:flex-row items-center justify-center xl:justify-between 2xl:justify-between lg:w-full">
				<div class="w-full xl:w-1/2 2xl:w-1/2 search-table flex items-center space-x-4">
					<form action="" class="w-full xl:w-96 2xl:w-96">
						<div class="form-group">
							<div class="form-group-append">
								<input type="text" id="saerchOutside" class="form-control-secondary input-form h-full" placeholder="Cari Data">
								<span class="append-secondary">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
									  </svg>
								</span>
							</div>
						</div>
					</form>
				</div>
				<div x-data="{ open: false }" class="relative">
					<button @click="open=true" id="btnFilterAscDesc" class="btn-cap-secondary">
						<span class="label-button">Tambah Data</span> 
						<span class="cap-button">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
							</svg>
						</span> 
					</button>
					<div x-show="open" @click.away="open = false" x-init="setTimeout(() => show = false, 8000)" id="1" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="scale-75" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0, 0, 0, 0.2); display: none;">
						<div class="modal relative bg-white overflow-hidden rounded-xl max-w-6xl h-auto z-50">
							<div class="modal-header flex bg-light text-primary absolute top-0 inset-x-0 font-semibold items-center justify-between py-4 px-4">
								<div><span class="text-dark text-lg font-semibold">Tambah Data - Kodefikasi Anggaran Belanja Level {{ (($level == '1') ? '1' : 'Level 2') }}</span></div>
								<div>
									<a href="#" @click="open=false">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
										</svg>
									</a>
								</div>
							</div>
							<form action="{{ route('kodefikasi_store.simlog') }}" method="post">
								@csrf
								<div class="px-5 pt-20 pb-32 overflow-x-hidden overflow-y-auto items-center justify-center modal-body" style="min-height: 10vh !important; max-height: 80vh !important;">
									<div class="flex flex-wrap space-y-5">
										@if($level == '2')
											<div class="flex items-center w-full space-x-5">
												<div class="form-group">
													<label class="label-form-dark">Kode Anggaran Level 1</label>
													<div class="form-group-append">
														<select class="form-control-primary input-form h-full">
															<option value="52">52</option>
															<option value="53">53</option>
														</select>
														<span class="append-secondary">
															<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
																<path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"></path>
															  </svg>
															  
														</span>
													</div>
												</div>
											</div>
										@endif
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark float-left">Kode</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
										</div>
										<div class="flex items-center w-full space-x-5">
											<div class="form-group">
												<label class="label-form-dark float-left">Nomenklatur</label>
												<input type="text" class="form-control-secondary" placeholder="Text">
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer flex items-center justify-end absolute inset-x-0 bottom-0 p-4 bg-light space-x-3">
									<a href="#" @click="open=false" class="btn-danger">
										Batal
									</a>
									<button type="submit" class="btn-primary">Simpan</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>			
			</div>
			<!-- table -->
			<div class="overflow-x-auto overflow-y-auto">
				<div class="my-6">
					<table id="table-3" class="table table-auto my-3" data-ordering="true" data-paging="true"  data-searching="true">
						<thead class="">
							<tr>
								<th class="text-left">Nomor</th>
								<th class="text-left">Kode</th>
								<th class="text-left">Nomenklatur</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody class="">
							{{-- gak boleh kayak gini. khusus untuk dummy --}}
							@if($level == '1')
								<?php $looping = 2; ?>
							@else
								<?php $looping = 4; ?>
							@endif
							@for ($i = 1; $i <= $looping; $i++)
								<tr>
									@if($i % 2 != 0)
										<td>{{$i}}</td>
										<td>52<?php if($level == '2'){ ?>{{$i}}<?php } ?></td>
										<td>Nama Kode 52<?php if($level == '2'){ ?>{{$i}}<?php } ?></td>
										<td class="">
											<div class="flex items-center justify-center space-x-2 text-center">
												<div x-data="{ open: false }" class="relative">
													<button @click="open=true" id="btnFilterAscDesc" class="btn-sm-dark">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
														</svg>
													</button>
													<div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
														x-transition:enter="transition duration-200 transform ease-out"
														x-transition:enter-start="scale-75"
														x-transition:leave="transition duration-100 transform ease-in"
														x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
														<div class="modal relative bg-white overflow-hidden rounded-xl max-w-6xl h-auto z-50">
															<div class="modal-header flex bg-light text-primary absolute top-0 inset-x-0 font-semibold items-center justify-between py-4 px-4">
																<div><span class="text-dark text-lg font-semibold">Ubah Data</span></div>
																<div>
																	<a href="#" @click="open=false">
																		<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
																		</svg>
																	</a>
																</div>
															</div>
															<form action="{{ route('kodefikasi_update.simlog', 1) }}" method="post">
																@csrf
																<div class="px-5 pt-20 pb-32 overflow-x-hidden overflow-y-auto items-center justify-center modal-body" style="min-height: 10vh !important; max-height: 80vh !important;">
																	<div class="flex flex-wrap space-y-5">
																		@if($level == '2')
																			<div class="flex items-center w-full space-x-5">
																				<div class="form-group">
																					<label class="label-form-dark flex justify-start">Kode Anggaran Level 1</label>
																					<div class="form-group-append">
																						<select class="form-control-primary input-form h-full">
																							<option value="52" selected>52</option>
																							<option value="53">53</option>
																						</select>
																						<span class="append-secondary">
																							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
																								<path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"></path>
																							  </svg>
																							  
																						</span>
																					</div>
																				</div>
																			</div>
																		@endif
																		<div class="flex items-center w-full space-x-5">
																			<div class="form-group">
																				<label class="label-form-dark float-left">Kode</label>
																				<input type="text" class="form-control-secondary" placeholder="Text">
																			</div>
																		</div>
																		<div class="flex items-center w-full space-x-5">
																			<div class="form-group">
																				<label class="label-form-dark float-left">Nomenklatur</label>
																				<input type="text" class="form-control-secondary" placeholder="Text">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="modal-footer flex items-center justify-end absolute inset-x-0 bottom-0 p-4 bg-light space-x-3">
																	<a href="#" @click="open=false" class="btn-danger">
																		Batal
																	</a>
																	<button type="submit" class="btn-primary">Ubah</a>
																</div>
															</form>
														</div>
													</div>
												</div>
												<div x-data="{ open: false }">
													<a href="#" @click="open=true" class="btn-sm-danger" data-target="1">    
														  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
														  </svg>                                      
													</a>
													<div x-show="open" @click.away="open = false" x-init="setTimeout(() => show = false, 8000)" id="1" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="scale-75" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0, 0, 0, 0.5); display: none;">
														<div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
															<div class="modal-header flex items-center justify-between py-2 px-2">
																<div></div>
																<div>
																	<a href="#" @click="open=false">
																		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
																		</svg>
																	</a>
																</div>
															</div>
															<div class="p-3 pb-32 flex flex-col items-center justify-center modal-body">
																<span class="w-18 h-18 mb-2 rounded-full overflow-hidden p-3">
																	<img class="logo-brand w-14 h-14" src="http://127.0.0.1:8008/assets/images/simlog-logo-dark.png">
																</span>
								
																<h2 class="text-3xl font-bold mb-4">SIMLOG</h2>
																<p class="text-base font-medium text-center text-gray-800"> Yakin ingin hapus data ?</p>
								
															</div>
															<div class="modal-footer absolute inset-x-0 bottom-0 bg-gray-100 flex items-center justify-center py-3 space-x-2">
																<button @click="open=false" type="button" class="btn-sm-disabled focus:outline-none">
																	Batal
																</button>
																<form action="{{ route('kodefikasi_delete.simlog', 1) }}" method="get">
																	@csrf
																	<input type="hidden" name="_token" value="SxK7C02MuWXitmkpOWzEeus1n6jw5nqG5HqHmdoJ">                                                            <input type="hidden" name="id" value="">
																	<button type="submit" class="btn-sm-danger focus:outline-none">
																		Hapus
																	</button>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</td>
									@else
										<td>{{$i}}</td>
										<td>53<?php if($level == '2'){ ?>{{$i}}<?php } ?></td>
										<td>Nama Kode 53<?php if($level == '2'){ ?>{{$i}}<?php } ?></td>
										<td class="">
											<div class="flex items-center justify-center space-x-2 text-center">
												<div x-data="{ open: false }" class="relative">
													<button @click="open=true" id="btnFilterAscDesc" class="btn-sm-dark">
														<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
														</svg>
													</button>
													<div x-show="open" @click.away="open = false" x-init="setTimeout(() => show = false, 8000)" id="1" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="scale-75" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="opacity-0 scale-90" class="overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen inset-0" style="background-color: rgba(0, 0, 0, 0.2); display: none;">
														<div class="modal relative bg-white overflow-hidden rounded-xl max-w-6xl h-auto z-50">
															<div class="modal-header flex bg-light text-primary absolute top-0 inset-x-0 font-semibold items-center justify-between py-4 px-4">
																<div><span class="text-dark text-lg font-semibold">Ubah Data</span></div>
																<div>
																	<a href="#" @click="open=false">
																		<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
																		</svg>
																	</a>
																</div>
															</div>
															<form action="{{ route('kodefikasi_update.simlog', 1) }}" method="post">
																@csrf
																<div class="px-5 pt-20 pb-32 overflow-x-hidden overflow-y-auto items-center justify-start modal-body" style="min-height: 10vh !important; max-height: 80vh !important;">
																	<div class="flex flex-wrap space-y-5">
																		@if($level == '2')
																			<div class="flex items-center w-full space-x-5">
																				<div class="form-group">
																					<label class="label-form-dark flex justify-start">Kode Anggaran Level 1</label>
																					<div class="form-group-append">
																						<select class="form-control-primary input-form h-full">
																							<option value="52">52</option>
																							<option value="53" selected>53</option>
																						</select>
																						<span class="append-secondary">
																							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
																								<path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"></path>
																							  </svg>
																							  
																						</span>
																					</div>
																				</div>
																			</div>
																		@endif
																		<div class="flex items-center w-full space-x-5">
																			<div class="form-group">
																				<label class="label-form-dark float-left">Kode</label>
																				<input type="text" class="form-control-secondary" placeholder="Text">
																			</div>
																		</div>
																		<div class="flex items-center w-full space-x-5">
																			<div class="form-group">
																				<label class="label-form-dark float-left">Nomenklatur</label>
																				<input type="text" class="form-control-secondary" placeholder="Text">
																			</div>
																		</div>
																	</div>
																</div>
																<div class="modal-footer flex items-center justify-end absolute inset-x-0 bottom-0 p-4 bg-light space-x-3">
																	<a href="#" @click="open=false" class="btn-danger">
																		Batal
																	</a>
																	<button type="submit" class="btn-primary">Ubah</a>
																</div>
															</form>
														</div>
													</div>
												</div>
												<div x-data="{ open: false }">
													<a href="#" @click="open=true" class="btn-sm-danger" data-target="1">    
														  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
														  </svg>                                      
													</a>
													<div x-show="open" @click.away="open = false" x-init="setTimeout(() => show = false, 8000)" id="1" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="scale-75" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0, 0, 0, 0.5); display: none;">
														<div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
															<div class="modal-header flex items-center justify-between py-2 px-2">
																<div></div>
																<div>
																	<a href="#" @click="open=false">
																		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
																		</svg>
																	</a>
																</div>
															</div>
															<div class="p-3 pb-32 flex flex-col items-center justify-center modal-body">
																<span class="w-18 h-18 mb-2 rounded-full overflow-hidden p-3">
																	<img class="logo-brand w-14 h-14" src="http://127.0.0.1:8008/assets/images/simlog-logo-dark.png">
																</span>
								
																<h2 class="text-3xl font-bold mb-4">SIMLOG</h2>
																<p class="text-base font-medium text-center text-gray-800"> Yakin ingin hapus data ?</p>
								
															</div>
															<div class="modal-footer absolute inset-x-0 bottom-0 bg-gray-100 flex items-center justify-center py-3 space-x-2">
																<button @click="open=false" type="button" class="btn-sm-disabled focus:outline-none">
																	Batal
																</button>
																<form action="{{ route('kodefikasi_delete.simlog', 1) }}" method="get">
																	@csrf
																	<input type="hidden" name="_token" value="SxK7C02MuWXitmkpOWzEeus1n6jw5nqG5HqHmdoJ">                                                            <input type="hidden" name="id" value="">
																	<button type="submit" class="btn-sm-danger focus:outline-none">
																		Hapus
																	</button>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</td>
									@endif
								</tr>
							@endfor
							
						</tbody>
					</table>
				</div>
			</div>
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
		function redirectUrl(value){
			window.location.href = value;
		}
	</script>
@endpush