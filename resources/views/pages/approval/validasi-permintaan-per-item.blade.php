@extends("layouts.main", ['title' => 'Validasi Permintaan'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">
    <div class="flex flex-col gap-10 bg-white rounded-xl p-5 w-full">
        
        <div class=" item-info flex gap-6">
            <div class="flex flex-col gap-10 w-full md:w-1/2">
                <div>
                    <div class="flex items-center w-full space-x-5  py-2">
                        <div class="form-group">
                            <label class="label-form-dark">Jumlah Permintaan Pengadaan</label>
                            <h2 class="text-primary font-bold text-2xl">100 Item</h2>
                        </div>
                    </div>
                    <div class="flex items-center w-full space-x-5  py-2">
                        <div class="form-group">
                            <label class="label-form-dark">Kode Parent</label>
                            <p class="text-gray-800">52</p>
                        </div>
                        <div class="form-group">
                            <label class="label-form-dark">Nama Barang</label>
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
                </div>
                <div>
                    <div class="w-full" x-data="{ open: true, show:false }">
                        <div class="card card-light" style="border-radius: 0 !important;" x-show="open">
                            <div class="flex items-center justify-between py-3">
                                <h5 class="cursor-pointer font-semibold text-primary hover:underline" @click="show = !show">Spesifikasi & Keterangan</h5>
                                <div class="cta-card-head">
                                    <span class="cursor-pointer hover:text-blue-600" @click="show = !show">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                          </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body border border-gray-300" x-show="show">
                                <div class="overflow-x-hidden overflow-y-auto max-h-96 text-gray-800 leading-relaxed">
                                    <ul>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                        <li>- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur officiis perspiciatis accusantium?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center w-full md:w-1/2">
                <div style="min-height: 60vh; max-height:60vh;" class="w-full bg-gray-100 overflow-hidden flex items-center justify-center border border-gray-400 rounded-md p-2">
                    <img src="{{ asset('assets/images/laptop.png') }}" class="w-96">
                </div>
            </div>
        </div>

        <hr class="bg-primary h-1">

        <div class="form-approval flex flex-col gap-5">
            <h3 class="font-semibold">APPROVAL PERMINTAAN BARANG</h3>
            <form action="" method="GET" class="form-approval flex flex-col gap-5">
                <div class="flex items-center space-x-10 w-full p-4 bg-gray-200 shadow" x-data="{accept: false}">
                    <div class="flex items-center space-x-2 w-1/6">
                        <div class="form-check form-check-success">
                            <input type="checkbox" onclick="$('#setuju').val('')" x-model="accept" id="setujui" value="1" name="menu[]" class="valid" >
                            <svg class="icon-chck hidden fill-current icon-success" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                        <label for="setujui" class="text-2xl text-success font-semibold">Setuju</label>
                    </div>
                    <div class="form-group w-5/6">
                        <input type="text" id="setuju" class="form-control-secondary" :class="{ 'form-control-disabled' : !accept, 'form-control-secondary' : accept}" x-bind:disabled="!accept" placeholder="Keterangan">
                    </div>
                </div>
                <div class="flex items-center space-x-10 w-full p-4 bg-gray-200 shadow" x-data="{accept: false}">
                    <div class="flex items-center space-x-2 w-1/6">
                        <div class="form-check form-check-danger">
                            <input type="checkbox" onclick="$('#setuju').val('')" x-model="accept" id="tolaki" value="2" name="menu[]" class="valid" >
                            <svg class="icon-chck hidden fill-current icon-danger" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                        <label for="tolaki" class="text-2xl text-danger font-semibold">Tolak</label>
                    </div>
                    <div class="form-group w-5/6">
                        <input type="text" id="tolak" class="form-control-secondary" :class="{ 'form-control-disabled' : !accept, 'form-control-secondary' : accept}" x-bind:disabled="!accept" placeholder="Keterangan">
                    </div>
                </div>
                <div class="flex items-center space-x-10 w-full p-4 bg-gray-200 shadow" x-data="{accept: false}">
                    <div class="flex items-center space-x-2 w-1/6">
                        <div class="form-check form-check-warning">
                            <input type="checkbox" onclick="$('#setuju').val('')" x-model="accept" id="adjusti" value="3" name="menu[]" class="valid" >
                            <svg class="icon-chck hidden fill-current icon-warning" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"/></svg>
                        </div>
                        <label for="adjusti" class="text-2xl text-warning font-semibold">Adjust</label>
                    </div>
                    <div class="flex items-center space-x-3 w-5/6">
                        <div class="w-52">
                            <div class="form-group">
                                <div class="number-input" >
                                    <button type="button" class="rounded-l-md" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" >-</button>
                                    <input class="quantity" min="0" name="quantity" value="1" type="number" :class="{ 'disabled' : !accept, '' : accept}" x-bind:disabled="!accept">
                                    <button type="button" class="rounded-r-md" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</button>
                                  </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="form-group ">
                                <input type="text" id="adjust" class="form-control-secondary" :class="{ 'form-control-disabled' : !accept, 'form-control-secondary' : accept}" x-bind:disabled="!accept" placeholder="Keterangan">
                            </div>
                        </div>
                    </div>
                </div>
                <div x-data="{ open: false }" class="relative flex items-center justify-between w-full mt-5">
                    <a class="text-primary hover:font-semibold hover:underline" href="/approval-list-pengadaan-barang">< Kembali</a>
                    <button @click="open=true" type="button" id="btnFilterAscDesc" class="w-32 btn-secondary focus:outline-none">
                        Simpan
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
                                <span class="w-18 h-18 mb-2 rounded-full overflow-hidden mb-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 175.978 175.978">
                                        <g id="Group_3462" data-name="Group 3462" transform="translate(-1421.033 -1472.691)">
                                          <g id="Component_614_2" data-name="Component 614 – 2" transform="translate(1424.533 1476.191)">
                                            <g id="Group_3454" data-name="Group 3454">
                                              <g id="Group_3451" data-name="Group 3451" transform="translate(-929.75 -338.654)">
                                                <path id="Stroke_1" data-name="Stroke 1" d="M84.489,0A84.489,84.489,0,1,1,0,84.489,84.491,84.491,0,0,1,84.489,0Z" transform="translate(929.75 338.654)" fill="none" stroke="#5863ff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                                              </g>
                                            </g>
                                          </g>
                                          <path id="Icon_awesome-question" data-name="Icon awesome-question" d="M29.214,0C16.811,0,8.778,5.082,2.471,14.145a3.733,3.733,0,0,0,.8,5.108l6.7,5.083a3.729,3.729,0,0,0,5.167-.645c3.892-4.876,6.78-7.684,12.86-7.684,4.78,0,10.693,3.077,10.693,7.712,0,3.5-2.893,5.3-7.613,7.95C25.581,34.756,18.3,38.6,18.3,48.2v1.521a3.729,3.729,0,0,0,3.729,3.729H33.288a3.729,3.729,0,0,0,3.729-3.729v-.9c0-6.66,19.465-6.937,19.465-24.96C56.483,10.3,42.4,0,29.214,0ZM27.657,58.032A10.764,10.764,0,1,0,38.421,68.8,10.776,10.776,0,0,0,27.657,58.032Z" transform="translate(1479.879 1520.121)" fill="#5863ff"/>
                                        </g>
                                      </svg>
                                      
                                </span>

                                {{-- <h2 class="text-3xl text-primary font-bold mb-4">Validation.</h2> --}}
                                <p class="text-base font-medium text-center text-gray-800">Yakin Simpan Data ?</p>
                                <div class="flex w-full items-center justify-center space-x-3 mt-5">
                                    <button @click="open=false" type="button" class="btn-danger w-full mt-5 focus:outline-none">
                                        Batal
                                    </button>
                                    <button type="submit" class="btn-success w-full mt-5 focus:outline-none">
                                        Ya, Simpan
                                    </button>
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
<style type="text/css">
    
    input[type="number"] {
  -webkit-appearance: textfield;
  -moz-appearance: textfield;
  appearance: textfield;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
}

.number-input {
  /* border: 2px solid #4883bf; */
  display: inline-flex;
}

.number-input,
.number-input * {
  box-sizing: border-box;
}

.number-input button {
    font-size: 2rem;
    font-weight: 400;
    outline:none;
    -webkit-appearance: none;
    background-color: transparent;
    border: none;
    align-items: center;
  justify-content: center;
  width: 3rem;
  height: 3rem;
  cursor: pointer;
  margin: 0;
  position: relative;
  background-color: #f4f7fa;
}

.number-input button:focus {
    outline: none;
}
.number-input button:hover {
    background-color: #e2effb;
}

.number-input input[type=number] {
  font-family: sans-serif;
  max-width: 6rem;
  padding: .2rem;
  border: solid #ddd;
  border-width: 0 2px;
  font-size: 2rem;
  height: 3rem;
  font-weight: bold;
  text-align: center;
}
    </style>
@endpush
@push('bofore_scripts')
@endpush
@push('after_scripts')
@endpush