@extends("layouts.main", ['title' => 'Infografis & Report'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10">

    <div class=" bg-white rounded-xl p-5 flex gap-9">
        <div class="w-full md:w-1/3 flex flex-col gap-6">
            <div class="w-full" x-data="{ open: true, show:true }">
                <div class="card card-light ring-1 ring-inset ring-indigo-400" x-show="open">
                    <div class="flex items-center h-12">
                        <div class="w-full flex items-center justify-center h-full bg-secondary">
                            <h4 class=" uppercase text-white font-semibold">Jumlah Barang</h4>
                        </div>
                    </div>
                    <div class="card-body" x-show="show">
                        <div class="flex items-center justify-center h-full">
                            <div id="chartpie"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full" x-data="{ open: true, show:true }">
                <div class="card card-light ring-1 ring-inset ring-indigo-400" x-show="open">
                    <div class="flex items-center h-12">
                        <div class="w-full flex items-center justify-center h-full bg-secondary">
                            <h4 class=" uppercase text-white font-semibold">Permintaan</h4>
                        </div>
                    </div>
                    <div class="card-body" x-show="show">
                        <div class="flex items-center justify-center h-full">
                            <div id="chartline"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full" x-data="{ open: true, show:true }">
                <div class="card card-light ring-1 ring-inset ring-indigo-400" x-show="open">
                    <div class="flex items-center h-12">
                        <div class="w-full flex items-center justify-center h-full bg-secondary">
                            <h4 class=" uppercase text-white font-semibold">Performance</h4>
                        </div>
                    </div>
                    <div class="card-body" x-show="show">
                        <div class="flex items-center">
                            <div id="chartradial1" class="w-full"></div>
                            <div id="chartradial2" class="w-full"></div>
                            <div id="chartradial3" class="w-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-2/3 flex flex-col bg-white rounded-md gapp-6">
			<div class="space-y-3 xl:space-y-0 2xl:space-y-0 flex flex-col-reverse xl:flex-row 2xl:flex-row items-center justify-center xl:justify-between 2xl:justify-between lg:w-full">
				<div class="w-full search-table flex items-center space-x-4">
					<form action="" class="flex w-full items-center space-x-2">
                        <div class="form-group">
                            <div class="form-group-append">
                                <select class="form-control-primary input-form h-full">
                                    <option value="#" selected> -- Select Modul --</option>
                                    <option value="#">Item 1</option>
                                    <option value="#">Item 2</option>
                                    <option value="#">Item 3</option>
                                </select>
                                <span class="append-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
                                        <path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"/>
                                      </svg>
                                      
                                </span>
                            </div>
                        </div>        
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
                                        <div class="flex flex-col items-center space-y-4">
                                            <div class="form-group">
                                                <label class="label-form-dark">Tanggal Awal</label>
                                                <input type="date" class="form-control-secondary" placeholder="date1">
                                            </div>
                                            <div class="form-group">
                                                <label class="label-form-dark">Tanggal Akhir</label>
                                                <input type="date" class="form-control-secondary" placeholder="date1">
                                            </div>
                                            <div class="flex w-full ">
                                                <button type="submit" @click="open=false" class="btn-secondary w-full mt-3">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-primary focus:outline-none">
                                Tampilkan
                            </button>
                        </div> 
					</form>
				</div>
                <div class="w-96">
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
                </div>
			</div>
			<div class="overflow-x-auto overflow-y-auto">
				<div class="my-6">
					<table id="table-3" class="table table-auto my-3" data-ordering="true" data-paging="true"  data-searching="true">
						<thead class="">
							<tr>
								<th class="text-left">No</th>
								<th class="text-left">Kategori Barang</th>
								<th class="text-left">Kode</th>
								<th class="text-left">Nama Barang</th>
								<th class="text-center">Jumlah</th>
							</tr>
						</thead>
						<tbody class="">
							@for ($i = 1; $i <= 200; $i++)
								<tr>
                                    <td>{{$i}}</td>
                                    <td>Barang Habis Pakai</td>
                                    <td>52.412.0023</td>
                                    <td>Solar</td>
                                    <td>1000L</td>
								</tr>
							@endfor
							
						</tbody>
					</table>
				</div>
			</div>
            <div class="w-full">
                <div x-data="{ open: false }" class=" relative flex w-full items-center justify-end space-x-4">
                    <div class="flex items-center justify-center space-x-2" x-show="open">
                        <button type="button" @click="open = false" class="flex items-center justify-center space-x-3 text-black hover:text-red-500 focus:outline-none rounded-xl px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                              </svg>
                        </button>    
                        <button type="button" class="flex items-center justify-center space-x-3 text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 rounded-xl px-6 py-2">
                            <i class="bx bx-printer"></i>                                  
                            <span class="font-bold">Print</span>
                        </button>    
                        <button type="button" class="flex items-center justify-center space-x-3 text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 rounded-xl px-6 py-2">
                            <i class='bx bxs-file-pdf'></i>                                  
                            <span class="font-bold">PDF</span>
                        </button>    
                        <button type="button" class="flex items-center justify-center space-x-3 text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 rounded-xl px-6 py-2">
                            <i class="bx bx-file"></i>                                  
                            <span class="font-bold">Excel</span>
                        </button>    
                    </div>
    
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
    
                    <button @click="open = true" type="button" class="flex items-center justify-center space-x-3 bg-blue-400 hover:bg-blue-300 focus:outline-none focus:ring-2  rounded-xl px-6 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 22 22">
                            <g id="Group_2899" data-name="Group 2899" transform="translate(-1695 -180)">
                              <path id="Icon_open-data-transfer-download" data-name="Icon open-data-transfer-download" d="M4.049,0V4.049H1.35L5.4,8.1,9.448,4.049h-2.7V0ZM0,9.448V10.8H10.8V9.448Z" transform="translate(1700.399 185.398)" fill="#171717"/>
                              <g id="Ellipse_55" data-name="Ellipse 55" transform="translate(1695 180)" fill="none" stroke="#171717" stroke-width="2">
                                <circle cx="11" cy="11" r="11" stroke="none"/>
                                <circle cx="11" cy="11" r="10" fill="none"/>
                              </g>
                            </g>
                          </svg>                                   
                        <span class="font-bold">Export</span>
                    </button>
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
     var options = {
          series: [44, 55, 13, 33],
          chart: {
          width: 300,
          type: 'donut',
        },
        dataLabels: {
          enabled: false
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              show: false
            }
          }
        }],
        legend: {
          position: 'right',
          offsetY: 0,
          height: 230,
        }
        };

        var chart = new ApexCharts(document.querySelector("#chartpie"), options);
        chart.render();

        var options2 = {
        series: [{
            name: 'Kebutuhan',
            data: [31, 40, 28, 51, 42, 109, 100, 41, 23, 2]
        }, {
            name: 'Realisasi',
            data: [11, 32, 45, 32, 34, 52, 41, 23, 2,55]
        }],
        chart: {
            width: 380,
            // height: 200,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'category',
      categories: [],
      tickAmount: undefined,
      tickPlacement: 'between',
      min: undefined,
      max: undefined,
      range: undefined,
      floating: false,
      decimalsInFloat: undefined,
      overwriteCategories: undefined,
      position: 'bottom',
        },
        tooltip: {
            x: {
                // format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chartline"), options2);
    chart.render();


    
      
    var option3 = {
          series: [70],
          chart: {
          height: 160,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            hollow: {
              size: '60%',
            }
          },
        },
        labels: ['Cricket'],
        };

        var chart = new ApexCharts(document.querySelector("#chartradial1"), option3);
        chart.render();
    var option4 = {
          series: [70],
          chart: {
          height: 160,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            hollow: {
              size: '60%',
            }
          },
        },
        labels: ['Cricket'],
        };

        var chart = new ApexCharts(document.querySelector("#chartradial2"), option4);
        chart.render();
    var option5 = {
          series: [70],
          chart: {
          height: 160,
          type: 'radialBar',
        },
        plotOptions: {
          radialBar: {
            hollow: {
              size: '60%',
            }
          },
        },
        labels: ['Cricket'],
        };

        var chart = new ApexCharts(document.querySelector("#chartradial3"), option5);
        chart.render();
      
</script>
@endpush