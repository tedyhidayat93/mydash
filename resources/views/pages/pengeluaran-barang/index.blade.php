@extends("layouts.main", ['title' => 'Pengeluaran Barang'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class=" bg-white rounded-xl p-5">
        <div class="flex flex-col bg-white rounded-md p-5">
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
				   
					<div x-data="{ open: false }" class="relative">
						<button @click="open=true" id="btnFilterAscDesc" class="btn-secondary focus:outline-none">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							  </svg>
						</button>
						<div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
							x-transition:enter="transition duration-200 transform ease-out"
							x-transition:enter-start="scale-75"
							x-transition:leave="transition duration-100 transform ease-in"
							x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.5);">
							<div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-96 z-50">
								<div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
									<div><span class="text-lg">Pencarian Rentang Tanggal</span></div>
									<div>
										<a href="#" @click="open=false">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
											</svg>
										</a>
									</div>
								</div>
								<div class="modal-body p-5">
									<form action="" class="flex flex-col items-center space-y-4">
										<div class="form-group">
											<label class="label-form-dark">Tanggal Awal</label>
											<input type="date" class="form-control-secondary" placeholder="date1">
										</div>
										<div class="form-group">
											<label class="label-form-dark">Tanggal Akhir</label>
											<input type="date" class="form-control-secondary" placeholder="date1">
										</div>
										<div class="flex w-full ">
											<button type="submit" class="btn-secondary w-full mt-3">Cari Data</button>
										</div>
									</form>
								</div>
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
								<th class="text-left">User</th>
								<th class="text-left">Kode</th>
								<th class="text-left">Nama Barang</th>
								<th class="text-left">Jumlah Request</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody class="">
							{{-- 
								harusnya bukan seperti ini hasilnya. ikutin yang ada di desain berdasarkan jabatannya
							--}}
							@for ($i = 1; $i <= 4; $i++)
								<tr>
									@if($i % 2 != 0)
										<td>{{$i}}</td>
										<td>Field</td>
										<td>{{$i}}</td>
										<td>Field</td>
										<td>{{$i}}</td>
										<td class="">
											<center>
												<button class="btn-sm-success">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 28.247 19.886">
													  <path id="Stroke_3" data-name="Stroke 3" d="M0,7.529l7.532,7.529L22.59,0" transform="translate(2.828 2.828)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4"/>
													</svg>
												</button>
											</center>
										</td>
									@else
										<td>{{$i}}</td>
										<td>Field</td>
										<td>{{$i}}</td>
										<td>Field</td>
										<td>{{$i}}</td>
										<td class="">
											<center>
												<button class="btn-sm-disabled">Serahkan</button>
											</center>
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
@endpush