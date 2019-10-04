@extends('master')

@section('mainContent')
<div style="height: 113px;"></div>

<div class="site-blocks-cover overlay" style="background-image: url('{{URL('assets/images/hero_1.jpg')}}');"
    data-aos="fade-up" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12" data-aos="fade">
                <h1>Temukan</h1>
                <h1>Karyamanmu Disini</h1>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <a href="#tambahlowongan"><button class="btn btn-search btn-primary btn-block">Tambah
                                Lowongan</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="small">Joblink, Lowongan Berkualitas Dan Terpercaya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-section" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" id="testimoni">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-5 mb-md-0">

                <div class="img-border">
                    <a href="https://www.youtube.com/watch?v=TcMBFSGVi1c" class="popup-vimeo image-play">
                        <span class="icon-wrap">
                            <span class="fas fa-play"></span>
                        </span>
                        <img src="{{URL('assets/images/hero_2.jpg')}}" alt="Image" class="img-fluid rounded">
                    </a>
                </div>

            </div>
            <div class="col-md-5 ml-auto">
                <div class="text-left mb-5 section-heading">
                    <h2>Testimoni</h2>
                </div>

                <p class="mb-4 h5 font-italic lineheight1-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque
                    velit eum, id rem eveniet dolor possimus voluptas..&rdquo;</p>
                <p>&mdash; <strong class="text-black font-weight-bold">John Holmes</strong>, Marketing Strategist</p>

            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container" id="tambahlowongan">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mb-5 section-heading">
                <h2 class="mb-5">Tambah Lowongan</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5" data-aos="fade-right">

                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="pekerjaan">Posisi</label>
                        <input type="text" id="posisi" class="form-control" placeholder="Contoh : Programmer ">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Gaji</label>
                        <input type="text" id="gaji" class="form-control">
                    </div>
                </div>

                <div class="row form-group mb-5">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Perusahaan</label>
                        <input type="text" id="namaPerusahaan" class="form-control"
                            placeholder="Contoh : Facebook, Inc.">
                    </div>
                </div>

                <div class="row form-group mb-5">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="fullname">Waktu Bekerja</label>
                        <input type="text" id="waktuBekerja" class="form-control"
                            placeholder="Contoh : Part Time, Full Time">
                    </div>
                </div>


                <div class="row form-group mb-4">
                    <div class="col-md-12">
                        <h3>Lokasi</h3>
                    </div>
                    <div class="col-md-12 mb-3 mb-md-0">
                        <input type="text" id="lokasi" class="form-control" placeholder="New York City">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                        <h3>Job Description</h3>
                    </div>
                    <div class="col-md-12 mb-3 mb-md-0">
                        <textarea id="deskripsi" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01"
                                    id="foto" onchange="previewFile()">
                                <label class="custom-file-label" for="inputGroupFile01">Upload Logo
                                    Perusahaan...</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <button onclick="addjob()" class="btn btn-primary  py-2 px-5">Submit</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-left">

                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Info Kontak</h3>
              <p class="mb-0 font-weight-bold">Alamat</p>
              <p class="mb-4">Jalan Inpres No. 13 & 14 Kav.27A, RT.1/RW.1, Kedoya Utara, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520</p>

              <p class="mb-0 font-weight-bold">Nomor Telepon</p>
              <p class="mb-4"><a href="#">0823 0169 2727</a></p>

              <p class="mb-0 font-weight-bold">Alamat Email</p>
              <p class="mb-0"><a href="#">ardiyatma.wibawa12@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <div id="download"></div>
</div>



<div class="site-blocks-cover overlay inner-page" style="background-image: url('{{URL('assets/images/hero_1.jpg')}}');"
    data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 text-center" data-aos="fade">
                <h1 class="h3 mb-0">Your Dream Job</h1>
                <p class="h3 text-white mb-5">Is Waiting For You</p>
                <p><a href="#" class="btn btn-outline-warning py-3 px-4">Find Jobs</a> <a href="#"
                        class="btn btn-warning py-3 px-4">Apply For A Job</a></p>
            </div>
        </div>
    </div>
</div>




<div class="site-section bg-light" id="lowonganku">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5" data-aos="fade-right">



                <div class="p-5 bg-white">

                    <div class="mb-4 mb-md-5 mr-5">
                        <div class="job-post-item-header d-flex align-items-center">
                            <div id="posisi2">

                            </div>
                            <div class="badge-wrap" id="waktuBekerja2">

                            </div>
                        </div>
                        <div class="job-post-item-body d-block d-md-flex">
                            <div class="mr-3" id="namaPerusahaan2">

                            </div>

                            <div id="lokasi2">

                            </div>
                        </div>
                    </div>

                    <div id="deskripsi2">

                    </div>


                    <p class="mt-5"><a href="#tambahlowongan" onclick="update()"
                            class="btn btn-primary  py-2 px-4">Update Lowongan</a></p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"
                data-aos-offset="0">


                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Ingin Menghapus Lowongan?</h3>
                    <p>Silakan hapus lowongan anda jika perusahaan anda telah mendapat karyawan yang cukup</p>
                    <p><a onclick="dell()" class="btn btn-danger  py-2 px-4" style="color: white;">Hapus Lowongan</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
