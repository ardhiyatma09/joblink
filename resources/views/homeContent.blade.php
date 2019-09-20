@extends('master')

@section('mainContent')
<div style="height: 113px;"></div>

<div class="site-blocks-cover overlay" style="background-image: url('{{URL('assets/images/hero_1.jpg')}}');"
    data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12" data-aos="fade">
                <h1>Temukan</h1>
                <h1>Karyamanmu Disini</h1>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <button class="btn btn-search btn-primary btn-block" href="#tambahlowongan">Tambah Lowongan</button>
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


<div class="site-section" data-aos="fade" id="testimoni">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-5 mb-md-0">

                <div class="img-border">
                    <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                        <span class="icon-wrap">
                            <span class="icon icon-play"></span>
                        </span>
                        <img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded">
                    </a>
                </div>

            </div>
            <div class="col-md-5 ml-auto">
                <div class="text-left mb-5 section-heading">
                    <h2>Testimonies</h2>
                </div>

                <p class="mb-4 h5 font-italic lineheight1-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Eaque, nisi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit nobis magni eaque
                    velit eum, id rem eveniet dolor possimus voluptas..&rdquo;</p>
                <p>&mdash; <strong class="text-black font-weight-bold">John Holmes</strong>, Marketing Strategist</p>
                <p><a href="https://vimeo.com/28959265" class="popup-vimeo text-uppercase">Watch Video <span
                            class="icon-arrow-right small"></span></a></p>
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
            <div class="col-md-12 col-lg-8 mb-5">

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
                        <button onclick="addjob()" class="btn btn-primary  py-2 px-5">Submit</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Contact Info</h3>
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                </div>

                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">More Info</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto
                        hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
                    <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="site-blocks-cover overlay inner-page" style="background-image: url('{{URL('assets/images/hero_1.jpg')}}');"
    data-aos="fade" data-stellar-background-ratio="0.5" id="download">
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

            <div class="col-md-12 col-lg-8 mb-5">



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



                    <div class="img-border mb-5">
                        <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                            <span class="icon-wrap">
                                <span class="icon icon-play"></span>
                            </span>
                            <img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded">
                        </a>
                    </div>


                    <div id="deskripsi2">

                    </div>


                    <p class="mt-5"><a href="#tambahlowongan" onclick="update()"
                            class="btn btn-primary  py-2 px-4">Update Lowongan</a></p>
                </div>
            </div>

            <div class="col-lg-4">


                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Ingin Menghapus Lowongan?</h3>
                    <p>Silakan hapus lowongan anda jika perusahaan anda telah mendapat karyawan yang cukup</p>
                    <p><a onclick="dell()" class="btn btn-danger  py-2 px-4" style="color: white;">Hapus Lowongan</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
