@extends("layouts.main", ['title' => 'Distribusi Barang'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5">
	<?php $date = date('Y-m-d H:i:s'); ?>
    <div class="flex flex-col bg-white rounded-xl p-5">
        <form action="{{ route('distribusi_barang_update.simlog', 1) }}" method="post" enctype="multipart/form-data" class="flex flex-wrap space-y-5">
			@csrf
			<h3 class="mb-2">Distribusi Barang</h3>
			<div class="flex items-center w-full space-x-5">
				<div class="form-group">
					<label class="label-form-dark">Tanggal Penggunaan</label>
					<input type="date" class="form-control-secondary" placeholder="date1" value="{{ strftime('%Y-%m-%d', strtotime($date)) }}"">
				</div>
			</div>
			<div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Upload File</label>
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
                    <label class="label-form-dark">Upload Foto</label>
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
                    <label class="label-form-dark">Keterangan</label>
                    <textarea type="text" class="form-control-secondary" placeholder="Text" rows="4"></textarea>
                </div>
            </div>
			<div class="flex items-center w-full space-x-5">
                <div class="form-group">
					<a href="{{ route('distribusi_barang.simlog') }}" class="text-primary underline float-left">Kembali</a>
				</div>
				<div class="form-group">
					<div x-data="{ open: false }" class="relative">
						<button type="button" @click="open=true" id="btnFilterAscDesc" class="btn-primary float-right">
							Submit
						</button>
						<div x-show="open" @click.away="open = false" x-init="setTimeout(() => show = false, 8000)" id="1" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="scale-75" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="opacity-0 scale-90" class="overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen inset-0" style="background-color: rgba(0, 0, 0, 0.2); display: none;">
							<div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
								<div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
									<div></div>
									<div>
										{{--<a href="#" @click="open=false">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
											</svg>
										</a>--}}
									</div>
								</div>
								<div class="p-7 flex flex-col items-center justify-center modal-body">
									<span class="w-18 h-18 mb-2 rounded-full overflow-hidden mb-5">
										<svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 175.978 175.978">
											<g id="Group_3162" data-name="Group 3162" transform="translate(-926.25 -335.154)">
											  <path id="Stroke_1" data-name="Stroke 1" d="M84.489,0A84.489,84.489,0,1,1,0,84.489,84.491,84.491,0,0,1,84.489,0Z" transform="translate(929.75 338.654)" fill="none" stroke="#5863ff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"></path>
											  <path id="Stroke_3" data-name="Stroke 3" d="M0,21.675,21.684,43.35,65.034,0" transform="translate(981.717 401.468)" fill="none" stroke="#5863ff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"></path>
											</g>
										  </svg>
									</span>

									<h2 class="text-3xl text-primary font-bold mb-4">SUKSES !</h2>
									<p class="text-base font-medium text-center text-gray-800"> Data berhasil disimpan!</p>
									<button type="submit" class="btn-primary w-full mt-5 focus:outline-none">Oke</button>
								</div>
							</div>
						</div>
					</div>
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