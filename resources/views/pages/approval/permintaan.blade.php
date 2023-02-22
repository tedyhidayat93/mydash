@extends("layouts.main", ['title' => 'Approval Permintaan Barang'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class="w-full" x-data="{ open: true, show:true }">
        <div class="card card-light" x-show="open">
            <div class="card-header">
                <div class="title-card-head text-dark"><h2>Filter Pencarian</h2></div>
                <div class="cta-card-head">
                    <span class="item-cta-card-head" @click="show = !show">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z" />
                        </svg>
                    </span>
                    <span class="item-cta-card-head" @click="open = false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="card-body" x-show="show">
                <form action="" class="flex flex-wrap space-y-5 pb-5 px-6">
                    <div class="flex items-center w-full space-x-5">
                        <div class="relative form-group">
                            <label class="label-form-dark">Nomor Dokumen</label>
                            <select name="" class="select2 mt-1 appearance-none px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md h-10 border border-blue-400">
                                <option value="#" selected> -- Pilih Nomor Dokumen --</option>
                                <option value="#">REQ/09300.992</option>
                                <option value="#">REQ/09300.9912</option>
                                <option value="#">REQ/09300.992999</option>
                            </select>
                            <img class="absolute right-0 top-0 w-10" src="{{ asset('assets/media/icon-arrow.svg') }}" alt="">
                        </div>
                        <div class="form-group">
                            <label class="label-form-dark">Tanggal Permintaan</label>
                            <input type="text" class="form-control-secondary" placeholder="Text">
                        </div>
                    </div>
                    <div class="flex items-center w-full space-x-5">
                        <div class="form-group">
                            <label class="label-form-dark">User Peminta</label>
                            <input type="text" class="form-control-secondary" placeholder="Text">
                        </div>
                        <div class="form-group">
                            <label class="label-form-dark">Perihal</label>
                            <input type="text" class="form-control-secondary" placeholder="Text">
                        </div>
                    </div>
                    <div class="flex items-center w-full justify-end">
                        <button type="submit" class="btn-primary">Cari Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=" bg-white rounded-xl p-5">
        <div class="flex flex-col bg-white rounded-md p-5">
			<div class="space-y-3 space-x-0 md:space-x-5 xl:space-y-0 2xl:space-y-0 flex flex-col-reverse xl:flex-row 2xl:flex-row items-center justify-center xl:justify-between 2xl:justify-between lg:w-full">
				<div class="w-full xl:w-1/2 2xl:w-1/2 search-table flex items-center space-x-4">
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                          </svg>
                        <h4>REQ/091203.1231</h4>
                    </div>
                    <a href="/approval-list-permintaan-barang/validasi-permintaan/detail" class="text-secondary hover:font-semibold hover:text-blue-500 hover:underline">Lihat Detail</a>
				</div>
				<div class="w-full xl:w-1/2 2xl:w-1/2 search-table flex items-center space-x-4">
					<form action="" class="w-full xl:w-80 2xl:w-80">
						<div class="form-group">
							<div class="form-group-append">
								<input type="text" id="saerchOutside" class="form-control-secondary input-form h-full" placeholder="Cari Barang">
								<span class="append-secondary">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
									  </svg>
								</span>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- table -->
			<div class="overflow-x-auto overflow-y-auto">
				<div class="my-6">
					<table id="table-3" class="table table-auto my-3" data-ordering="true" data-paging="true"  data-searching="true">
						<thead class="">
							<tr>
								<th class="text-left">#</th>
								<th class="text-left">User</th>
								<th class="text-left">Kode</th>
								<th class="text-left">Nama Barang</th>
								<th class="text-left">Jumlah Request</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody class="">
							@for ($i = 1; $i <= 4; $i++)
								<tr>
									<td>{{$i}}</td>
									<td>SBNP / Rafly Mustofa</td>
									<td>52.5623.12{{$i}}</td>
									<td>Lampu Menara Suar</td>
									<td>4{{$i}}</td>
									<td class="">
										<center>
											<a href="/approval-list-permintaan-barang/validasi-permintaan" class="text-primary hover:text-blue-500 hover:font-semibold underline">
												Validasi
											</a>
										</center>
									</td>
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