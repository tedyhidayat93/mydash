@extends("layouts.main", ['title' => 'Detail'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5">

    <div class=" bg-white rounded-xl p-5">
        <h3 class="text-primary mb-2">Nomor Dokumen</h3>
		<div class="grid grid-cols-2 gap-5 pb-4">
			<div>
				<div class="flex items-center w-full space-x-5  py-2">
					<div class="form-group">
						<label class="label-form-dark">Nama</label>
						<p class="text-gray-800">Data</p>
					</div>
				</div>
				<div class="flex items-center w-full space-x-5  py-2">
					<div class="form-group">
						<label class="label-form-dark">Kode Barang</label>
						<p class="text-gray-800">Data</p>
					</div>
					<div class="form-group">
						<label class="label-form-dark">Nama Kategori</label>
						<p class="text-gray-800">Data</p>
					</div>
				</div>
				<div class="flex items-center w-full space-x-5  py-2">
					<div class="form-group">
						<label class="label-form-dark">Tahun Pengadaan</label>
						<p class="text-gray-800">Data</p>
					</div>
					<div class="form-group">
						<label class="label-form-dark">Nilai Barang</label>
						<p class="text-gray-800">Data</p>
					</div>
				</div>
				<div class="flex items-center w-full space-x-5  py-2">
					<div class="form-group">
						<label class="label-form-dark">Satuan</label>
						<p class="text-gray-800">Data</p>
					</div>
					<div class="form-group">
						<label class="label-form-dark">Merek</label>
						<p class="text-gray-800">Data</p>
					</div>
				</div>
				<div class="flex items-center w-full space-x-5  py-2">
					<div class="form-group">
						<label class="label-form-dark">Kondisi Barang</label>
						<p class="text-gray-800">Data</p>
					</div>
					<div class="form-group">
						<label class="label-form-dark">Usia Simpan</label>
						<p class="text-gray-800">Data</p>
					</div>
				</div>
				<div class="flex items-center w-full space-x-5  py-2">
					<div class="form-group">
						<label class="label-form-dark">Stok Minimum</label>
						<p class="text-gray-800">Data</p>
					</div>
					<div class="form-group">
						<label class="label-form-dark">Stok</label>
						<p class="text-gray-800">Data</p>
					</div>
				</div>
				<div class="flex items-center w-full space-x-5 py-2 span-2">
					<div class="form-group">
						<label class="label-form-dark">Spesifikasi dan Keterangan</label>
						<p class="border-solid border border-gray-400 rounded-lg p-4 overflow-x-hidden overflow-y-auto h-96">Value</p>
					</div>
				</div>
			</div>
			<div>
				<img src="{{ asset('assets/images/simlog-logo-dark.png') }}" class="h-96">
			</div>
		</div>
		<a href="{{ route('distribusi_barang.simlog') }}" class="text-primary underline">Kembali</a>
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