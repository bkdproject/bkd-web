<!-- Header -->
<header>
    <div class="container">
        
        <?php $this->load->view('common/navigation_all'); ?>
        
    </div>
</header>

<!-- Content -->
<div class="container">
    <div class="wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                
                <div class="form-wizard">
                    <div id="wizard" class="wizard">
                        <div class="wizard__content">
                            <div class="wizard__header">
                                <div class="wizard__header-overlay"></div>
                                <div class="wizard__header-content">
                                    <h1 class="wizard__title" >Daftar Pendana</h1>
                                    <p class="wizard__subheading">Beberapa langkah lagi untuk menjadi Pendana di BKD. <br>Silahkan lengkapi informasi dan data-data Anda terlebih dahulu.</p>
                                </div>
                                <div class="wizard__steps">
                                    <nav class="steps">
                                        <div class="step">
                                            <div class="step__content">
                                                <p class="step__number">1</p>
                                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                                </svg>
                                                <div class="lines">
                                                    <div class="line -start"></div>
                                                    <div class="line -background"></div>
                                                    <div class="line -progress"></div>
                                                </div>  
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="step__content">
                                                <p class="step__number">2</p>
                                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                                </svg>
                                                <div class="lines">
                                                    <div class="line -background"></div>
                                                    <div class="line -progress"></div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="step__content">
                                                <p class="step__number">3</p>
                                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                                </svg>
                                                <div class="lines">
                                                    <div class="line -background"></div>
                                                    <div class="line -progress"></div>
                                                </div> 
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>                            

                            <div class="panels">
                                <div class="panel" id="panel1">
                                    <div class="panel__header">

                                        <?php 
                                        if ($this->session->userdata('message')) {
                                            $message_show = $this->session->userdata('message');
                                        ?>
                                        <div class="alert alert-danger"><img src="<?php echo base_url(); ?>assets/images/error_icon.png" style="width:25px;top: -1px;position: relative;margin-right: 5px;"> <?php echo $message_show; ?></div>
                                        <?php } ?>
                                
                                        <h2 class="panel__title">1. Form Pendaftaran</h2>
                                        <p class="panel__subheading">Silahkan masukan data diri Anda sebenar - benarnya.</p>
                                    </div>
                                    <div class="panel__content">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <form name="form_name1" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="fullname">* Nama Lengkap</label>
                                                        <input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $member['mum_fullname']; ?>" required>
                                                        <p class="help-block">* Nama lengkap sesuai KTP</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="handphone">* Email</label>
                                                        <input type="text" class="form-control" name="email" id="email" value="<?php echo $member['mum_email']; ?>" required>
                                                    </div>  
                                                    <div class="form-group">
                                                        <label for="handphone">* Nomor Telepon</label>
                                                        <input type="text" class="form-control" name="telp" id="telp" value="<?php echo $member['mum_telp']; ?>" required>
                                                        <p class="help-block" id="telpmsg">* Contoh: +6281111111</p>
                                                        <p class="help-block alert-danger" id="telperror" style="display: none;"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">* Password Saat ini</label>
                                                        <input type="password" class="form-control" id="password" name="password">
                                                        <p class="help-block" id="passwordmsg">* Minimum 6 huruf</p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel" id="panel2">
                                    <div class="panel__header">
                                        <h2 class="panel__title">2. Informasi Pribadi</h2>
                                        <p class="panel__subheading">Silahkan masukan data diri Anda sebenar - benarnya.</p>
                                    </div>
                                    <div class="panel__content">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <form name="form_name2" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="email">* Tempat Lahir</label>
                                                        <input type="email" class="form-control" name="tempat_lahir" id="tempat_lahir" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="handphone">* Tanggal Lahir</label>
                                                        <input type="text" class="form-control datepicker-dob" name="tgl_lahir" id="tgl_lahir_pinjam" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="handphone">* Jenis Kelamin</label>
                                                        <select name="gender" class="form-control">
                                                            <option value="pria">Pria</option>
                                                            <option value="wanita">Wanita</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="handphone">* Alamat</label>
                                                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="handphone">* Kota</label>
                                                        <input type="text" class="form-control" name="kota" id="kota" required>
                                                    </div>  
                                                    <div class="form-group">
                                                        <label for="handphone">* Provinsi</label>
                                                        <select class="form-control" name="provinsi" id="provinsi" required>
                                                            <option value=""> -- Pilih -- </option>
                                                            <option value="Aceh">Aceh</option>
                                                            <option value="Bali">Bali</option>
                                                            <option value="Banten">Banten</option>
                                                            <option value="Bengkulu">Bengkulu</option>
                                                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                                                            <option value="DKI Jakarta">DKI Jakarta</option>
                                                            <option value="Gorontalo">Gorontalo</option>
                                                            <option value="Jambi">Jambi</option>
                                                            <option value="Jawa Barat">Jawa Barat</option>
                                                            <option value="Jawa Tengah">Jawa Tengah</option>
                                                            <option value="Jawa Timur">Jawa Timur</option>
                                                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                                                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                                                            <option value="Lampung">Lampung</option>
                                                            <option value="Maluku">Maluku</option>
                                                            <option value="Maluku Utara">Maluku Utara</option>
                                                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                                            <option value="Papua">Papua</option>
                                                            <option value="Papua Barat">Papua Barat</option>
                                                            <option value="Riau">Riau</option>
                                                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                                                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                                                            <option value="Sumatera Barat">Sumatera Barat</option>
                                                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                                                            <option value="Sumatera Utara">Sumatera Utara</option>
                                                        </select>
                                                    </div>  
                                                    <div class="form-group">
                                                        <label for="handphone">* Kode Pos</label>
                                                        <input type="text" class="form-control" name="kodepos" id="kodepos">
                                                    </div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel" id="panel3">
                                    <div class="panel__header">
                                        <h2 class="panel__title">3. Upload Dokumen</h2>
                                        <p class="panel__subheading">Upload dokumen - dokumen Anda sebagai tolak ukur kredit skor anda.</p>
                                    </div>
                                    <div class="panel__content">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <form name="form_name3" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="handphone">* Upload Foto</label>
                                                        <input type="file" name="foto_file" id="foto_file">
                                                        <p class="help-block">* maksimum size 500kb dengan jpg, png, gif</p>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>* Status Pernikahan</label>
                                                        <br>
                                                        <label class="checkbox-inline">
                                                            <input type="radio" name="status_kawin" value="belum menikah" checked="checked"> Belum Menikah
                                                        </label>
                                                        <label class="checkbox-inline">
                                                            <input type="radio" name="status_kawin" value="menikah"> Menikah
                                                        </label>                                                
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="handphone">* Jumlah Tanggungan</label>
                                                        <select class="form-control" name="jml_tanggungan" id="jml_tanggungan">
                                                            <option value=""> -- Pilih --</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="handphone">* Pendidikan Terakhir</label>
                                                        <select class="form-control" name="pendidikan" id="pendidikan">
                                                            <option value=""> -- Pilih --</option>
                                                            <option value="1">SD</option>
                                                            <option value="2">SLTP</option>
                                                            <option value="3">SLTA</option>
                                                            <option value="4">Diploma</option>
                                                            <option value="5">Sarjana</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="handphone">* Pekerjaan</label>
                                                        <select class="form-control" name="pekerjaan" id="pekerjaan">
                                                            <option value=""> -- Pilih --</option>
                                                            <option value="1">PNS</option>
                                                            <option value="2">BUMN</option>
                                                            <option value="3">Swasta</option>
                                                            <option value="4">Wiraswasta</option>
                                                            <option value="5">Lain-lain</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jumlah_penghasilan">* Jumlah Penghasilan (Rp)</label>
                                                        <input type="text" class="form-control numeric" name="jumlah_penghasilan" id="jumlah_penghasilan" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="handphone">* Nomor NIK</label>
                                                        <input type="text" class="form-control" name="nomor_ktp" id="nomor_ktp" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="handphone">* Upload NIK File</label>
                                                        <input type="file" name="ktp_file" id="ktp_file">
                                                        <p class="help-block">* maksimum size 500kb dengan jpg, png, gif</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="handphone">* Nomor Rekening</label>
                                                        <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>* Jumlah Pendanaan (Rp)</label>
                                                        <input type="text" class="form-control numeric" name="jumlah_pendanaan" id="jumlah_pendanaan" required>
                                                    </div>
                                                    <br>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="agreement" id="iAgree"> Saya telah membaca dan saya setuju dengan Kebijakan Privasi &amp; Syarat Ketentuan
                                                        </label>
                                                        <div class="alert alert-danger" id="agree_message" style="display: none;">Anda harus mencentang checkbox Syarat Ketentuan</div>
                                                  </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            </form>
                            <div class="wizard__footer">
                                <button class="btn btn-blue previous">Sebelumnya</button>
                                <button class="btn btn-purple next">Selanjutnya</button>
                            </div>
                            
                        </div>
                        <h1 class="wizard__congrats-message">
                            <img src="<?php echo base_url(); ?>assets/images/loading.gif" class="img-responsive img-reset loading" />
                            <span>Tunggu Sebentar Permintaan Anda Sedang Kami Proses ... </span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>