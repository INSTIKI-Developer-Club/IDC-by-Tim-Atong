@extends('layouts.master')

@section('vite')
@vite(['resources/js/app.js', 'resources/css/proker.css'])
@endsection

@section('title', 'proker')

@section('content')
<section>
    <div class="page-background position-relative">
        <div class="bg-color position-relative">
            <h1 class="text-center proker"><b class="underline-1" style="font-size: 40px; color: white;">Program Kerja</b></h1>
            <div class="container">
                <div class="row ldo pb-5">
                    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/1.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/2.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/3.jpg" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-6">
                        <b>
                            <h2 class="title-proker" style="font-size: 35px;">Latihan Dasar Organisasi</h2>
                        </b>
                        <p class="pt-2">Latihan dasar organisasi adalah serangkaian kegiatan awal yang bertujuan untuk
                            mempersiapkan
                            anggota baru dalam sebuah organisasi. Ini meliputi pembekalan mengenai nilai-nilai, misi,
                            dan struktur organisasi, serta pengembangan keterampilan sosial yang diperlukan dalam
                            lingkungan tersebut. Dengan mengikuti latihan ini, anggota baru akan lebih siap untuk
                            berpartisipasi secara efektif dalam aktivitas organisasi dan berkontribusi secara positif
                            terhadap tujuan bersama.
                        </p>
                        <p>Selama latihan dasar organisasi, peserta diberikan wawasan tentang sejarah dan latar belakang
                            organisasi, tanggung jawab individu dalam tim, komunikasi yang efektif, serta cara
                            pengambilan keputusan dalam struktur hierarki.</p>
                            <a href="#" class="btn-selengkapnya">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row py-5">
                    <div class="col-sm-6 col-md-5 col-lg-6">
                        <b>
                            <h2 class="title-proker">Ngobar</h2>
                        </b>
                        <p>Kegiatan Ngoding Bareng yang diadakan di kampus adalah wadah inspiratif bagi para mahasiswa
                            yang memiliki minat dalam pemrograman. Acara ini tidak hanya menjadi platform untuk berbagi
                            pengetahuan dan keterampilan dalam dunia pengkodean, tetapi juga menciptakan lingkungan
                            kolaboratif di mana ide-ide inovatif dapat diperbincangkan dan diwujudkan menjadi proyek
                            nyata.
                        </p>
                        <p>Ngoding Bareng menjadi ruang yang memperkaya wawasan teknis, membangun jaringan
                            profesional, dan menghidupkan semangat kolaborasi di antara para calon pengembang yang
                            bersemangat.</p>
                            <a href="#" class="btn-selengkapnya">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
                    </div>
                    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/1.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/2.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/3.jpg" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row py-5">
                    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/1.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/2.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/3.jpg" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-6">
                        <b>
                            <h2 class="title-proker">Seminar dan Workshop</h2>
                        </b>
                        <p>Seminar dan workshop yang diselenggarakan oleh UKM INSTIKI Developer Club di kampus adalah
                            kesempatan berharga bagi para anggota untuk meresapi wawasan teknologi terkini secara
                            intensif. Melalui serangkaian acara yang terarah, peserta dapat mendalamipengetahuan dalam
                            pengembangan perangkat lunak, pemrograman aplikasi, serta tren terkini dalam dunia
                            teknologi.
                        </p>
                        <p>Ini adalah peluang ideal untuk mengejar kreativitas, mengasah keterampilan, dan mendapatkan
                            wawasan tentang tren perkembangan teknologi masa depan, yang semuanya memperkaya pengalaman
                            serta pengetahuan para peserta.</p>
                        <<a href="#" class="btn-selengkapnya">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row py-5">
                    <div class="col-sm-6 col-md-5 col-lg-6">
                        <b>
                            <h2 class="title-proker">Pengabdian Kepada Masyarakat</h2>
                        </b>
                        <p>Dalam semangat pengabdian pada masyarakat, UKM INSTIKI Developer Club mengambil peran aktif
                            dalam membantu panti asuhan sebagai bagian dari komitmen sosialnya. Kami dengan antusias
                            merangkul tanggung jawab sosial dengan mengadakan kunjungan dan kegiatan bersama di panti
                            asuhan, memberikan dukungan berupa bantuan materi, interaksi yang bermakna, serta menggelar
                            sesi edukatif yang menginspirasi.
                        </p>
                        <p>Ini adalah wujud nyata dari dedikasi kami untuk memberikan dampak positif dan menciptakan
                            ikatan empati dengan masyarakat di sekitar, sambil memupuk semangat gotong royong dan
                            kepedulian bersama.</p>
                            <a href="#" class="btn-selengkapnya">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
                    </div>
                    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/1.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/2.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/3.jpg" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row py-5">
                    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/1.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/2.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/3.jpg" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-6">
                        <b>
                            <h2 class="title-proker">Final Project Showcase</h2>
                        </b>
                        <p>Acara Final Project Showcase yang diadakan secara internal oleh UKM INSTIKI Developer Club
                            merupakan puncak dari perjalanan kreatifitas dan pembelajaran anggota. Dalam suasana
                            kolaboratif, anggota memamerkan hasil akhir proyek-proyek yang telah mereka kerjakan dengan
                            penuh dedikasi.
                        </p>
                        <p>Showcase ini menjadi platform untuk berbagi ide inovatif, pemecahan masalah teknis, serta
                            menginspirasi satu sama lain melalui perkembangan perangkat lunak dan aplikasi yang
                            diciptakan.</p>
                            <a href="#" class="btn-selengkapnya">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

