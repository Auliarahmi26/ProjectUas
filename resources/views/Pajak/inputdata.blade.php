@extends('layouts.master')

@section('content')

            <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                            
                               
                                    <h1 > Form Input Data </h1>
                                  
                                
                                
                            </div>
                    </div>
                          <hr />
                       
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <div id="collapse3" class="accordion-body collapse in body">
                                    <form action="{{ route('wajibpajak.store') }}" method="post" class="form-horizontal" id="inline-validate">
                                    {{csrf_field()}}
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nomor Objek Pajak</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="nomor_objek_pajak" name="nomor_objek_pajak" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nama Wajib Pajak</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="nama_wajib_pajak" name="nama_wajib_pajak" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Alamat Objek Pajak</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="alamat_objek_pajak" name="alamat_objek_pajak" class="form-control col-lg-6" />
                                            </div>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Alamat Wajib Pajak</label>

                                            <div class="col-lg-8">
                                                <input type="text" id="alamat_wajib_pajak" name="alamat_wajib_pajak" class="form-control col-lg-6" />
                                            </div>
                                        </div>
                                        <div class="form-actions" style="text-align:center">
                                            <input type="submit" value="Simpan" class="btn btn-primary btn-lg" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                                       
                   
                     

                    
                    </div>
                    
                    
                    

                </div>
          <!--END PAGE CONTENT -->
        </div>
             
@endsection
