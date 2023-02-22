@extends("layouts.main", ['title' => 'Detail Permintaan'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class="flex gap-5">

        <div class="w-full">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head text-primary">
                            <a href="#" class="flex space-x-3 items-center font-semibold text-dark hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                                  </svg>
                                  <span class="text-2xl">Kembali</span>
                            </a>
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="grid grid-cols-1 gap-10 mb-16 mt-10">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Nomor Dokumen</span>
                                    <p class="text-gray-800">REQ/998423.293423</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Tangal Permintaan</span>
                                    <p class="text-gray-800">20/12/2021</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">User Peminta</span>
                                    <p class="text-gray-800">SBNP / Rafly Mustofa</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Perihal</span>
                                    <p class="text-gray-800">Permintaan Barang</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex flex-col space-y-2">
                                    <span class="font-bold text-dark">Tujuan</span>
                                    <p class="text-gray-800">Perbaikan SBNP</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col space-y-3" x-data="{ expanded: false }">
                            <div class="w-full">
                                <span class="float-right text-gray-500 hover:text-blue-500 hover:underline cursor-pointer hover:font-semibold" @click="expanded = !expanded">Expand All</span>
                            </div>
                            <div class="grid grid-cols-1">
                                @for ($i = 0; $i < 6; $i++)
                                <div class="border border-gray-700 flex flex-col" style="max-height: 60vh;">
                                    <div class="w-full flex items-center justify-between px-4 py-2">
                                        <h4 class="text-primary">52/231.A</h4>
                                        <span class="text-lg text-primary cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </span>
                                    </div> 
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2" x-show="expanded">
                                        {{-- <hr class="col-span-2 bg-gray-100"> --}}
                                        <div class="particular px-4 py-6">
                                            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                                                <div class="">
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
                                                        <span class="font-bold text-dark">Jumlah</span>
                                                        <p class="text-gray-800">10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="information px-4 py-2 gap-7 flex flex-col">
                                            <div class="image-qr grid grid-cols-3 gap-2">
                                                <div class="flex items-center justify-center">
                                                    <img src="{{asset('assets/images/card-qr.png')}}" class="h-20" alt="">
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <div class="h-16 bg-primary">&nbsp;</div>
                                                </div>
                                                <div class="flex items-center justify-center">
                                                    <img src="{{asset('assets/images/laptop.png')}}" class="h-20" alt="">
                                                </div>
                                            </div>
                                            <div class="" x-data="{openTab:0}">
                                                {{-- cta --}}
                                                <div class="info-button grid grid-cols-1 md:grid-cols-3 gap-4">
                                                    <div class="flex items-center justify-center">
                                                        <button @click="openTab = 1" type="button" class="btn-sm-warning focus:outline-none w-32">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                                              </svg>
                                                            <span>
                                                                Adjust
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div class="flex items-center justify-center">
                                                        <button @click="openTab = 2" type="button" class="btn-sm-danger focus:outline-none w-32">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                              </svg>
                                                            <span>
                                                                Tolak
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div class="flex items-center justify-center">
                                                        <button @click="openTab = 3" type="button" class="btn-sm-success focus:outline-none w-32">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                              </svg>
                                                            <span>
                                                                Setuju
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                {{-- form --}}
                                                <div class="my-4 px-6 md:px-8 py-4">
                                                    <form action="" x-show="openTab === 1" class="p-3 flex flex-col space-y-3 p-2 rounded-md bg-warning relative">
                                                        <div class="segitiga1 absolute -top-3 left-14"></div>
                                                        <button type="button" class="focus:outline-none font-bold text-gray-900 hover:text-black absolute top-0 right-5" @click="openTab = 0">x</button>
                                                        <input type="hidden" name="" value="">
                                                        <div class="form-group">
                                                            <div class="number-input">
                                                                <button type="button" class="rounded-l-md" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" >-</button>
                                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                                <button type="button" class="rounded-r-md" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</button>
                                                              </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-group-append">
                                                                <textarea class="form-control-secondary font-semibold bg-light text-dark input-form h-full" rows="5" placeholder="Keterangan"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group flex items-center justify-end">
                                                            <button type="submit" class="btn-dark focus:outline-none"><i class='bx bxs-save mr-2'></i>Simpan</button>
                                                        </div>
                                                    </form>
                                                    <form action="" x-show="openTab === 2" class="p-3 flex flex-col space-y-3 p-2 rounded-md bg-danger relative">
                                                        <div class="segitiga2 absolute -top-3 left-1/2"></div>
                                                        <button type="button" class="focus:outline-none font-bold text-gray-900 hover:text-black absolute top-0 right-5" @click="openTab = 0">x</button>
                                                        <input type="hidden" name="" value="">
                                                        <div class="form-group">
                                                            <div class="form-group-append mt-5">
                                                                <textarea class="form-control-secondary font-semibold bg-light input-form h-full" rows="5" placeholder="Keterangan"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group flex items-center justify-end">
                                                            <button type="submit" class="btn-dark focus:outline-none"><i class='bx bxs-save mr-2'></i>Simpan</button>
                                                        </div>
                                                    </form>
                                                    <form action="" x-show="openTab === 3" class="p-3 flex flex-col space-y-3 p-2 rounded-md bg-success relative">
                                                        <div class="segitiga3 absolute -top-3 right-14"></div>
                                                        <button type="button" class="focus:outline-none font-bold text-gray-900 hover:text-black absolute top-0 right-5" @click="openTab = 0">x</button>
                                                        <input type="hidden" name="" value="">
                                                        <div class="form-group">
                                                            <div class="form-group-append mt-5">
                                                                <textarea class="form-control-secondary font-semibold bg-light input-form h-full" rows="5" placeholder="Keterangan"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group flex items-center justify-end">
                                                            <button type="submit" class="btn-dark focus:outline-none"><i class='bx bxs-save mr-2'></i>Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>

    </div>

</section>

@endsection

@push('bofore_style')
@endpush
@push('after_style')
<style type="text/css">
    .segitiga2{
        height:0px;
        width:0px;
        border-bottom:solid 14px #E8264F;
        border-left:solid 10px transparent;
        border-right:solid 10px transparent;
        /* margin: 0 auto !important; */
    }
    .segitiga3{
        height:0px;
        width:0px;
        border-bottom:solid 14px #1D907E;
        border-left:solid 10px transparent;
        border-right:solid 10px transparent;
        /* margin-bottom: 14px; */
    }
    .segitiga1{
        height:0px;
        width:0px;
        border-bottom:solid 14px #FDB815;
        border-left:solid 10px transparent;
        border-right:solid 10px transparent;
        /* margin-bottom: 14px; */
    }

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
