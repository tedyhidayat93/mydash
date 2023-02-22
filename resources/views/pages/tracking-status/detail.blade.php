@extends("layouts.main", ['title' => 'Detail Status Permintaan'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">
    <div class=" bg-white rounded-xl p-5 w-full">
        <h3 class="text-primary mb-2">Status Permintaan Barang</h3>
		<div class="flex-1 items-center w-full py-2">
			<div class="tabulator-tracking flex flex-col space-y-4">
				<div class="">
					<h6 class="text-dark">SK. PENGADAAN 3</h6>
					<span class="text-disabled text-sm">16/09/2021 14:03</span>
				</div>

				<div class="navigation-indicator-tab flex justify-between items-center w-full">
					<a href="#"
						class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
							viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M5 13l4 4L19 7" />
						</svg>
					</a>
					<span class="bg-primary w-auto h-1 flex-1">&nbsp;</span>
					<a href="#"
						class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
							viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M5 13l4 4L19 7" />
						</svg>
					</a>
					<span class="bg-primary w-auto h-1 flex-1">&nbsp;</span>
					<a href="#"
						class="h-9 w-9 bg-primary flex justify-center items-center p-2 rounded-full overflow-hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
							viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M5 13l4 4L19 7" />
						</svg>
					</a>
					<span class="bg-disabled w-auto h-1 flex-1">&nbsp;</span>
					<a href="#"
						class="h-9 w-9 bg-disabled flex justify-center items-center p-2 rounded-full overflow-hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
							viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M5 13l4 4L19 7" />
						</svg>
					</a>
					<span class="bg-disabled w-auto h-1 flex-1">&nbsp;</span>
					<a href="#"
						class="h-9 w-9 bg-disabled flex justify-center items-center p-2 rounded-full overflow-hidden">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
							viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M5 13l4 4L19 7" />
						</svg>
					</a>
				</div>

				<div class="flex flex-col space-y-3">
					<p>Sedang diproses.</p>
					<div class="flex space-x-2 items-center">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="13.857" height="16.834"
								viewBox="0 0 13.857 16.834">
								<g id="Iconly_Light_Location" data-name="Iconly/Light/Location"
									transform="translate(0.75 0.75)">
									<g id="Location">
										<path id="Path_33958"
											d="M0,6.4A6.3,6.3,0,0,1,6.2,0a6.3,6.3,0,0,1,6.157,6.439v.073a9.63,9.63,0,0,1-2.8,6.1,16.389,16.389,0,0,1-2.89,2.471.728.728,0,0,1-.98,0,16.209,16.209,0,0,1-4.065-3.954A8.413,8.413,0,0,1,0,6.418Z"
											transform="translate(0 0)" fill="none" stroke="#999"
											stroke-linecap="round" stroke-linejoin="round"
											stroke-miterlimit="10" stroke-width="1.5" />
										<ellipse id="Ellipse_740" cx="1.98" cy="2.057" rx="1.98" ry="2.057"
											transform="translate(4.198 4.462)" fill="none" stroke="#999"
											stroke-linecap="round" stroke-linejoin="round"
											stroke-miterlimit="10" stroke-width="1.5" />
									</g>
								</g>
							</svg>
						</span>
						<p class="flex space-x-3">
							<span class="text-disabled">POSISI</span>
							<span>Kepala Distrik Navigasi </span>
						</p>
					</div>
					<div class="flex space-x-2 items-center">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="15.159" height="15.341"
								viewBox="0 0 15.159 15.341">
								<g id="Iconly_Light_Edit_Square" data-name="Iconly/Light/Edit Square"
									transform="translate(0.75 0.9)">
									<g id="Edit_Square" data-name="Edit Square">
										<path id="Stroke_1" data-name="Stroke 1"
											d="M6.339,0H3.628A3.519,3.519,0,0,0,0,3.816V9.848a3.515,3.515,0,0,0,3.628,3.816h6.4a3.515,3.515,0,0,0,3.629-3.816V6.925"
											transform="translate(0 0.028)" fill="none" stroke="#999"
											stroke-linecap="round" stroke-linejoin="round"
											stroke-miterlimit="10" stroke-width="1.5" />
										<path id="Stroke_3" data-name="Stroke 3"
											d="M.529,5.928,5.948.506a1.729,1.729,0,0,1,2.444,0l.883.883a1.73,1.73,0,0,1,0,2.446L3.83,9.283a1.574,1.574,0,0,1-1.113.461H0L.068,7A1.575,1.575,0,0,1,.529,5.928Z"
											transform="translate(3.878)" fill="none" stroke="#999"
											stroke-linecap="round" stroke-linejoin="round"
											stroke-miterlimit="10" stroke-width="1.5" />
										<path id="Stroke_5" data-name="Stroke 5" d="M0,0,3.311,3.313"
											transform="translate(9.003 1.344)" fill="none" stroke="#999"
											stroke-linecap="round" stroke-linejoin="round"
											stroke-miterlimit="10" stroke-width="1.5" />
									</g>
								</g>
							</svg>
						</span>
						<p class="flex space-x-3">
							<span class="text-disabled">Keperluan</span>
							<span>Kebutuhan BBM periode Januari-Maret </span>
						</p>
					</div>
				</div>
			</div>
		</div>
    </div>
	
	<div class=" bg-white rounded-xl p-5 py-4">
		<h4 class="mb-3">Data Item Permintaan Barang</h4>
		<div class="overflow-x-auto overflow-y-auto">
			<div class="my-6">
				<table id="table-3" class="table table-auto my-3" data-ordering="true" data-paging="true"  data-searching="true">
					<thead class="">
						<tr>
							<th class="text-left">Nomor</th>
							<th class="text-left">Kategori Barang</th>
							<th class="text-left">Kode</th>
							<th class="text-left">Nama Barang</th>
							<th class="text-left">Jumlah</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody class="">
						@for ($i = 1; $i <= 4; $i++)
							<tr>
								<td>{{$i}}</td>
								<td>Field</td>
								<td>Field</td>
								<td>Field</td>
								<td>Field</td>
								<td class="">
									<div x-data="{ open: false }" class="relative">
										<button @click="open=true" id="btnFilterAscDesc" class="text-primary w-full focus:outline-none hover:text-blue-600 hover:font-semibold underline">
											Lihat Detail
										</button>
										<div x-show="open" @click.away="open = false" x-init="setTimeout(() => show = false, 8000)" id="1" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="scale-75" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="opacity-0 scale-90" class="overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen inset-0" style="background-color: rgba(0, 0, 0, 0.2); display: none;">
											<div class="modal relative bg-white overflow-x-hidden rounded-xl z-50" style="width:90%; max-height: 90vh;">
												<div class="modal-header border border-gray-200 flex text-primary font-semibold items-center justify-between py-4 px-4">
													<div><h3 class="text-secondary font-semibold">Detail Info Barang</h3></div>
													<div>
														<a href="#" @click="open=false">
															<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
																<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
															</svg>
														</a>
													</div>
												</div>
												<div class="flex overflow-y-auto overflow-x-hidden modal-body p-8" style="max-height: 80vh;">

													<div class="flex items-center justify-center w-full md:w-1/3">
														<img src="{{ asset('assets/images/laptop.png') }}" class="w-96 h-96">
													</div>

													<div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-3 mb-16 mt-10">

														<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
															<div class="col-span-2">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Nama Barang</span>
																	<p class="text-gray-800">Asus TUF Gamming FX1233</p>
																</div>
															</div>
															<div class="">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Kode Barang</span>
																	<p class="text-gray-800">099.12312412.123</p>
																</div>
															</div>
															<div class="">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Kategori</span>
																	<p class="text-gray-800">Laptop</p>
																</div>
															</div>
															<div class="">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Tahun Pengadaan</span>
																	<p class="text-gray-800">2020</p>
																</div>
															</div>
															<div class="">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Nilai Barang</span>
																	<p class="text-gray-800 flex items-center space-x-2">
																		<span class="p-1 text-xs rounded-md bg-secondary text-white font-semibold">
																			Rp
																		</span>
																		<span>12.000.000,00</span>
																	</p>
																</div>
															</div>
															<div class="">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Berat Satuan</span>
																	<p class="text-gray-800">1,22 Kg</p>
																</div>
															</div>
															<div class="">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Merek</span>
																	<p class="text-gray-800">ASUS</p>
																</div>
															</div>
															<div class="">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Kondisi Barang</span>
																	<p class="text-gray-800">Baru</p>
																</div>
															</div>
															<div class="">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Usia Simpan</span>
																	<p class="text-gray-800">10 Tahun</p>
																</div>
															</div>
															<div class="">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Stok Minimum</span>
																	<p class="text-gray-800">2</p>
																</div>
															</div>
															<div class="">
																<div class="flex flex-col space-y-2">
																	<span class="font-bold text-dark">Stok</span>
																	<p class="text-gray-800">2</p>
																</div>
															</div>
														</div>
								
														<div class="flex flex-col space-y-3">
															<h5>Spesifikasi & Keterangan</h5>
															<div class="overflow-x-hidden overflow-y-auto p-5 border bg-gray-100 border-gray-400" style="max-height: 60vh;"> 
																<ul>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi autem error officiis quidem eum at libero nostrum corporis quisquam.</li>
																	<li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
																</ul>
															</div>
														</div>
								
													</div>

												</div>
											</div>
										</div>
									</div>
								</td>
							</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
		<a href="{{ route('permintaan_barang.simlog') }}" class="text-primary underline">Kembali</a>
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
@endpush