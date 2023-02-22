@extends("layouts.main", ['title' => $judul])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5 pb-10" x-data="handler()" {{-- x-init="loaddata()" --}}>
	<?php $date = date('Y-m-d H:i:s'); ?>
	<form action="{{ route('permintaan_barang_store.simlog') }}" method="post" enctype="multipart/form-data">
    <div class="flex flex-col bg-white rounded-xl p-5" id="contentdata">
		<div class="flex flex-wrap space-y-5">
			@csrf
			<h3 class="mb-2">{{ $judul }} WAJIB PAKE ALPINE JS</h3>
			<div class="flex items-center w-full space-x-5">
				<div class="form-group">
					<label class="label-form-dark">Nomor Dokumen</label>
					<input type="text" class="form-control-secondary">
				</div>
				<div class="form-group">
					<label class="label-form-dark">Tanggal Penggunaan</label>
					<input type="date" class="form-control-secondary" placeholder="date1" value="{{ strftime('%Y-%m-%d', strtotime($date)) }}">
				</div>
			</div>
			<div class="flex items-center w-full space-x-5">
				<div class="form-group">
					<label class="label-form-dark">User Peminta</label>
					<input type="text" class="form-control-secondary">
				</div>
				<div class="form-group">
					<label class="label-form-dark">Perihal</label>
					<input type="text" class="form-control-secondary">
				</div>
			</div>
			<div class="flex items-center w-full space-x-5">
                <div class="form-group">
                    <label class="label-form-dark">Tujuan</label>
                    <input type="text" class="form-control-secondary">
                </div>
            </div>
			<div class="flex items-center w-full space-x-5">
				<div class="relative form-group">
                    <label class="label-form-dark">Pilih Barang</label>
                    <div class="form-group-append">
                        <select name="" id="jenisbarang" onchange="getparentdata('jenisbarang')" class="select2 mt-1 input-form appearance-none px-3 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md h-10">
                            <option value="" disabled selected> -- List Item Barang --</option>
                            <?php for($i = 1; $i < 3; $i++){ ?>
								<optgroup label="Kategori {{$i}}">
									<?php for($z = 1; $z < 10; $z++){ ?>
									<option value="{{ $i}}">Item {{ $i}}</option>
									<?php } ?>
								</optgroup>
							<?php } ?>
                        </select>
                        <span class="append-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 28.261 16.031">
                                <path id="Icon_awesome-caret-down" data-name="Icon awesome-caret-down" d="M2.7,13.5H27.153a1.9,1.9,0,0,1,1.34,3.241L16.27,28.975a1.9,1.9,0,0,1-2.69,0L1.355,16.741A1.9,1.9,0,0,1,2.7,13.5Z" transform="translate(-0.794 -13.5)" fill="#fff"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
			<div class="flex items-center w-full space-x-5">
				<div class="form-group">
					<input type="hidden" id="iddata" class="">
					<label class="label-form-dark">Stok Minimum</label>
					<input type="text" class="form-control-secondary bg-disabled" id="stokminimum" readonly>
				</div>
				<div class="form-group">
					<label class="label-form-dark">Stok</label>
					<input type="text" class="form-control-secondary bg-disabled" id="stok" readonly>
				</div>
				<div class="form-group">
					<label class="label-form-dark">Jumlah yang diminta</label>
					<input type="text" class="form-control-secondary" id="jumlah" value="0">
				</div>
			</div>
			<div class="flex items-center flex-col-reverse md:flex-row w-full space-x-5">
                <div class="w-full md:w-1/2 form-group">
					<a href="{{ route('permintaan_barang.simlog') }}" class="text-primary underline float-left">Kembali</a>
				</div>
				<div class="w-full md:w-1/2 flex items-center justify-end gap-5">
					<div>
						<a href="#" id="linkpengadaan" class="btn-sm-cap-primary">
							<span class="label-button">Buat Permintaan Pengadaan</span> 
							<span class="cap-button">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path>
								</svg>
							</span> 
						</a>
					</div>
					<div>
						<button id="editsubmitdata" type="button" @click="updateField()" class="btn-primary float-right hidden">Update Data</a>
						<button id="submitdata" type="button" @click="addNewField()" class="btn-primary float-right">Tambah ke keranjang</a>
					</div>
				</div>
			</div>
        </div>
    </div>
	<div class="my-4"></div>
	<div class="flex flex-col bg-white rounded-md p-5">
        <h2 class="mb-3">Data Permintaan Barang</h2>
        <!-- table -->
        <div class="overflow-x-auto overflow-y-auto">
            <div class="my-6">
                <table class="table-primary table-auto my-3">
                    <thead class="">
                        <tr>
                            <th class="text-left">No</th>
                            <th class="text-left">Kategori Barang</th>
                            <th class="text-left">Kode</th>
                            <th class="text-left">Nama Barang</th>
                            <th class="text-left">Jumlah</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <template x-for="(field, index) in fields" :key="index">
                            <tr>
                                <td>
									<input type="hidden" x-model="field.kode">
									<span x-text="index + 1"></span>
								</td>
                                <td><span x-text="field.kategoribarang"></span></td>
                                <td><span x-text="field.kode"></span></td>
                                <td><span x-text="field.namabarang"></span></td>
                                <td><span x-text="field.jumlah"></span></td>
                                <td class="">
                                    <div class="flex items-center justify-center space-x-2 text-center">
                                        <button @click="editField(index)" type="button" class="btn-sm-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                              </svg>
                                        </button>
										<button @click="removeField(index)" type="button" class="btn-sm-danger">
										    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-light" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>                                      
										</button>
                                    </div>
                                </td>
                            </tr>
						</template>
                    </tbody>
                </table>
				<button type="button" id="batalkonfirm" onclick="konfirmasidata('tutup')" class="text-primary underline float-left hidden">Kembali</button>
				<button type="button" id="confirmdata" onclick="konfirmasidata('buka')" class="btn-primary float-right hidden">Selanjutnya</a>
            </div>
			<div x-data="{ open: false }" class="relative">
                <button type="button" @click="open=true" id="btnFilterAscDesc" class="btn-primary float-right hidden">
                    Kirim Daftar Permintaan
                </button>
                <div x-show="open" @click.away="open = false" x-init="setTimeout(() => show = false, 8000)" id="1" x-transition:enter="transition duration-200 transform ease-out" x-transition:enter-start="scale-75" x-transition:leave="transition duration-100 transform ease-in" x-transition:leave-end="opacity-0 scale-90" class="overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen inset-0" style="background-color: rgba(0, 0, 0, 0.2); display: none;">
                    <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                        <div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
                            <div></div>
                            <div>
                                <a href="#" @click="open=false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </a>
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

                            {{--<h2 class="text-3xl text-primary font-bold mb-4">SUKSES !</h2>--}}
                            <p class="text-base font-medium text-center text-gray-800">Apakah anda yakin ingin mengajukan permintaan ini ?</p>
                            <div class="grid grid-cols-2 gap-4">
								<div>
									<button @click="open=false" type="button" class="btn-danger w-full mt-5 focus:outline-none">
										Batal
									</button>
								</div>
								<div>
									<button @click="open=false" type="submit" class="btn-primary w-full mt-5 focus:outline-none">
										Kirim
									</button>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</form>
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
	window.onload = getparentdata('jenisbarang')

	// masih dummy data
	function getparentdata(target){
		variable = '#' + target;
		var totaldata = document.querySelector(variable);
		if(totaldata.value === ""){
			document.getElementById('stokminimum').value = '';
			document.getElementById('stok').value = '';	
			$(document).ready(function(){
			   $("#linkpengadaan").addClass('hidden');
			})
		}
		else{
			hasil = parseInt(totaldata.value) / parseInt('2');
			document.getElementById('stokminimum').value = Math.round(hasil);
			document.getElementById('stok').value = totaldata.value;
			$(document).ready(function(){
			   $("#linkpengadaan").removeClass("hidden");
			})
		}
	}
	
	function validasidata(){
		getid = document.getElementById('iddata').value;
		if(getid === ""){
			perintah = '#submitdata';
		}
		else{
			perintah = '#editsubmitdata';
		}
		getdata = document.getElementById('jumlah').value;
		if(isNaN(getdata)){
			alert('harap untuk isi data jumlah berupa angka')
			document.getElementById('jumlah').value = '';
			$(document).ready(function(){
			   $(perintah).removeClass("hidden");
			})
			return false;
		}
		else{
			$(document).ready(function(){
			   $(perintah).removeClass("hidden");
			})
		}
		
		var choice = document.getElementById("jenisbarang");
		var namadatahtml = choice.options[choice.selectedIndex].innerHTML
		if(namadatahtml == '-- Select Form --'){
			alert('harap untuk memilih data jenis barang')
			return false;
		}
		
		return true;
	}
	
	function konfirmasidata(result){
		if(result == 'buka'){
			/* $(document).ready(function(){
			   $("#batalkonfirm").removeClass("hidden");
			   $("#btnFilterAscDesc").removeClass("hidden");
			   //$("#confirmdata").addClass("hidden");
			}) */
			document.getElementById('confirmdata').style.display = 'none';
			document.getElementById('btnFilterAscDesc').style.display = 'inline-block';
			document.getElementById('batalkonfirm').style.display = 'inline-block';
			document.getElementById('contentdata').style.display = 'none';
		}
		else{
			/* $(document).ready(function(){
			   $("#batalkonfirm").addClass("hidden");
			   $("#btnFilterAscDesc").addClass("hidden");
			   //$("#confirmdata").removeClass("hidden");
			}) */
			document.getElementById('confirmdata').style.display = 'inline-block';
			document.getElementById('btnFilterAscDesc').style.display = 'none';
			document.getElementById('batalkonfirm').style.display = 'none';
			document.getElementById('contentdata').style.display = 'inline-block';
		}
	}
</script>
<script>
	function handler() {
		/*
			Harusnya pake API kalo mau yang enak
		*/
        return {
            fields: [],
            addNewField() {
				cekdata = validasidata();
				if(cekdata == true){
					var namadata = document.querySelector('#jenisbarang');
					var choice = document.getElementById("jenisbarang");
					var namadatahtml = choice.options[choice.selectedIndex].innerHTML;
					var getstokm = document.getElementById('stokminimum').value;
					var jumlahpermintaan = document.getElementById('jumlah').value;
					var getstop = document.getElementById('stok').value;
					//alert(namadata.value);
					this.fields.push({
						iddata: namadata.value,
						kategoribarang: namadatahtml,
						kode: this.fields.length,
						namabarang: namadatahtml,
						jumlah: jumlahpermintaan,
						idtable: this.fields.length,
					});
					$( document ).ready(function() {
						$("#jenisbarang").val("");
					});
					document.getElementById('iddata').value = '';
					document.getElementById('stokminimum').value = '';
					document.getElementById('jumlah').value = '';
					document.getElementById('stok').value = '';
					
					$( document ).ready(function() {
						$("#confirmdata").show();
					});
				}
            },
			editField(index){
				//alert(this.fields[index].iddata)
				//data = "'" + this.fields[index].iddata + "'";
				data = this.fields[index].iddata;
				var sel = document.getElementById('jenisbarang');
				var opts = sel.options;
				for (var opt, j = 0; opt = opts[j]; j++) {
					if (opt.value == data) {
					  sel.selectedIndex = j;
					  break;
					}
				}
				jumlah = this.fields[index].jumlah / parseInt('2');
				document.getElementById('iddata').value = this.fields[index].idtable;
				document.getElementById('stokminimum').value = Math.round(jumlah);
				document.getElementById('jumlah').value = this.fields[index].jumlah;
				document.getElementById('stok').value = this.fields[index].jumlah;
				$( document ).ready(function() {
					$("#submitdata").addClass("hidden");
					$("#editsubmitdata").removeClass("hidden");
				});
			},
			updateField(){
				cekdata = validasidata();
				if(cekdata == true){
					var getid = document.getElementById('iddata').value;
					var namadata = document.querySelector('#jenisbarang');
					var choice = document.getElementById("jenisbarang");
					var namadatahtml = choice.options[choice.selectedIndex].innerHTML;
					var getstokm = document.getElementById('stokminimum').value;
					var jumlahpermintaan = document.getElementById('jumlah').value;
					var getstop = document.getElementById('stok').value;
					
					//alert(getid);
					//alert(this.fields.length)
					//alert(this.fields[getid].jumlah)
					
					this.fields[getid].kategoribarang = namadatahtml;
					this.fields[getid].namabarang = namadatahtml;
					this.fields[getid].jumlah = jumlahpermintaan;
					
					//alert(this.fields[getid].jumlah)
					
					$( document ).ready(function() {
						$("#jenisbarang").val("");
						
					});
					document.getElementById('iddata').value = '';
					document.getElementById('stokminimum').value = '';
					document.getElementById('jumlah').value = '';
					document.getElementById('stok').value = '';
					$( document ).ready(function() {
						$("#editsubmitdata").addClass("hidden");
						$("#submitdata").removeClass("hidden");
					});
				}
			},
            removeField(index) {
                this.fields.splice(index, 1);
				getpanjangdata = parseInt(this.fields.length);
				if(getpanjangdata == parseInt('0')){
					$( document ).ready(function() {
						$("#confirmdata").hide();
					});
				}
            },
			//hapus aja kalo mau integrasi
			/* loaddata(index){
				<?php for($i = 1; $i < 5; $i++) { ?>
					this.fields.push({
						iddata: '{{ $i }}',
						kategoribarang: 'Field',
						kode: '0{{$i}}',
						namabarang: 'Field',
						jumlah: '{{$i}}',
						idtable: this.fields.length,
					});
					
					//alert(this.fields[{{ $i-1 }}].iddata)
				<?php } ?>
				//alert(this.fields.length)
			} */
		}
    }
</script>
@endpush