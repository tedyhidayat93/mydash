@extends("layouts.main", ['title' => 'USER - HOME'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 gap-4 px-5 pb-10">
    
    <div class="flex gap-7">
        <div class="w-full md:w-1/3 gap-5 flex flex-col">
            <div class="w-full">
                <div class="card card-light border-t-4 border-blue-2">
                    <div class="card-body">
                        <div class="flex flex-col w-full">
                            <div class="flex items-center justify-center w-full pt-10">
                                <div class="w-52 h-52 flex items-center justify-center overflow-hidden rounded-full">
                                    <img src="https://picsum.photos/200/300?random=1" alt="">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 items-center justify-center w-full py-8">
                                <h2 class="text-primary font-bold">FAISAL ALFIAN</h2>
                                <span class="text-disabled">Superadmin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            
            <div class="w-full">
                <div class="card flex flex-row card-light border-t-4 border-yellow-500">
                    <div class="flex items-start justify-center w-16 px-3 py-5">
                        <span class="relative flex h-6 w-6">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-warning opacity-75"></span>
                            <span class="relative inline-flex items-center justify-center rounded-full h-6 w-6 bg-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                  </svg>
                            </span>
                          </span>
                    </div>
                    <div class=" w-full">
                        <div class="card-header">
                            <div class="cta-card-head">
                                <h5 class="text-dark">Notifikasi</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="bg-gray-100 p-3 overflow-x-hidden overflow-y-auto max-h-96 divide-y-2">
                                @for ($i = 0; $i < 100; $i++)
                                <a href="#" class="flex flex-col space-y-3 px-3 py-2 text-sm bg-gray-100  hover:bg-blue-400 hover:text-white">
                                    <h6 class="font-bold">Permintaan Barang</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, perspiciatis sed. Sunt blanditiis vitae sapiente adipisci praesentium in ipsum repudiandae.</p>
                                </a>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        
        <div class="w-full md:w-2/3" x-data="{ open: true, show:true }">
            <div class="card card-light" x-show="open">
                <div class="card-header">
                    <div class="title-card-head text-dark">Status Permintaan Barang</div>
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
                <div class="card-body overflow-y-auto" style="max-height: 80vh; " x-show="show">
                    @for ($i = 0; $i < 10; $i++)
                    <div class="tabulator-tracking flex flex-col space-y-4 mb-10">
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
                    @endfor

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
