@extends("layouts.main", ['title' => 'Barang Existing'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class="flex flex-col bg-white rounded-xl p-5">
        <form action="{{ ($data == []) ? route('barang_existing_store.simlog') : route('barang_existing_update.simlog', 1) }}" method="post" enctype="multipart/form-data" class="flex flex-wrap space-y-5">
			@csrf
			<h3 class="mb-2">Input Barang Existing</h3>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Kode Parent</label>
					<div class="form-group-append">
						<select class="form-control-primary input-form h-full">
							<option value="#" selected="">-- Pilih Kode Parent --</option>
							<option value="#">BMN</option>
							<option value="#">Barang Induk</option>
						</select>
						<span class="append-secondary">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
								<path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"></path>
							  </svg>
						  
						</span>
					</div>
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Kategori Barang</label>
                    <div class="form-group-append">
						<select class="form-control-primary input-form h-full">
							<option value="#" selected="">-- Pilih Form --</option>
							<option value="#">Item 1</option>
							<option value="#">Item 2</option>
							<option value="#">Item 3</option>
						</select>
						<span class="append-secondary">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
								<path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"></path>
							  </svg>
						  
						</span>
					</div>
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Kode Barang</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
            </div>
            <div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Nama</label>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="35" viewBox="0 0 33 35">
							  <text id="Rp" transform="translate(0 26)" fill="#fff" font-size="25" font-family="Poppins-Medium, Poppins" font-weight="500"><tspan x="0" y="0">Rp</tspan></text>
							</svg>
                        </span>
                    </div>
                </div>
            </div>
			<div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Satuan</label>
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
							<option value="#" selected="">-- Pilih Kondisi Barang --</option>
							<option value="#">Baik</option>
							<option value="#">Rusak</option>
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
                            Tahun
                        </span>
                    </div>
                </div>
            </div>
			<div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Stok Minimun</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
                </div>
                <div class="form-group">
                    <label class="label-form-dark">Stok</label>
                    <input type="text" class="form-control-secondary" placeholder="Text">
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
			<div class="flex items-center w-full space-x-5">
                <div class="form-group">
					<a href="{{ route('barang_existing.simlog') }}" class="text-primary underline float-left">Kembali</a>
				</div>
				<div class="form-group">
					<button type="submit" class="btn-primary float-right">Submit</button>
				</div>
			</div>
        </form>
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