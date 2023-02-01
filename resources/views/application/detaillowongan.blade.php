<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <title>Document</title>
</head>

<body style="background-color: #e4e4e4;">
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                {{-- Navbar Brand --}}
                <a class="navbar-brand" href="/">
                    <div class="brand-container">
                        <img src="{{ url('img/logo.png') }}" class="brand" alt="AL Ittihad" />
                    </div>
                    <div class="brand-caption">
                        <p class="title">PKL Monitoring</p>
                        <p class="caption">SMK Al - Ittihad - Cianjur</p>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-4">
                        <button class="btn btn-sm btn-light me-4">Dokument</button>
                        <button class="btn btn-sm btn-light me-4">magang</button>
                        <li class="nav-item mx-2">
                            <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="">
                                <i class="fa-sharp fa-solid fa-bell"></i><span
                                    class="position-absolute translate-middle p-1 bg-danger border border-light rounded-circle"><span
                                        class=" visually-hidden">unread messages</span></span>
                            </button>
                        </li>
                    </ul>
                    <button class="btn bg-primary text-white rounded-pill mx-2 px-3" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        N
                    </button>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li>
                                <button type="button" class="dropdown-item btn btn-sm" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    Sign out
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container pt-5 mt-5">
        <div class="row pt-5">
            <div class="col-3 ps-0">
                <a href="/" class="btn btn-light px-3 btn-sm"
                    style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);"> <i class="fa fa-caret-left"></i> Kembali</a>
            </div>
        </div>
    </div>
    <div class="container mt-3 bg-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2); margin-top: 5rem;">
        <div class="row">
            <div class="col-5 d-flex align-items-center">
                <div class="brand-container ms-3">
                    <img src="{{ url('img/neuron.png') }}" class="brand rounded-circle" width="80px" alt="" />
                </div>
                <div class="mt-3 ms-3">
                    <p class="h5 fw-bold title">UI/UX Designer</p>
                    <p class="caption">PT Neuronworks indonesia</p>
                </div>
            </div>
            <div class="col-2 ms-auto pt-2">
                <a href="" class="btn btn-sm px-3 mt-4 ms-5"
                    style="background-color: #0C5045; color: white;">Lamar Sekarang</a>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-4 me-auto p-3 ps-0">
                <div class="card p-3">
                    <h4 class="fw-bold ms-3">Detail Pekerjaan</h4>
                    <hr>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="exmaple">
                        <div class="dex">
                            <p class="fw-bold ms-3">Deskripsi Prusahaan</p>
                            <p class="m-0 ms-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, nihil? Enim quae
                                nesciunt fugiat veritatis impedit repellat iure fuga beatae.
                            </p>
                            <br>
                            <p class="m-0 ms-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, nihil? Enim quae
                                nesciunt fugiat veritatis impedit repellat iure fuga beatae. Lorem, ipsum. lorem2
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-8 ms-auto p-3 pe-0">
                <div class="card p-3">
                    <h4 class="fw-bold ms-3">Deskripsi Pekerjaan</h4>
                    <hr>
                    <div class="example">
                        <div class="job">
                            <p class="fw-bold m-0 ms-3">Job Descriptions</p>
                            <p class="m-0">
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo labore, </li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima labore natus quos
                                    mollitia </li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima labore natus quos
                                    mollitia </li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima labore natus quos
                                    mollitia </li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima labore natus quos
                                    mollitia </li>

                            </ul>
                            </p>
                        </div>
                        <div class="skill">
                            <p class="fw-bold m-0 ms-3">Skiil</p>
                            <p class="m-0">
                            <ul>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil quae ipsum quos
                                    quaerat.</li>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil quae ipsum quos
                                    quaerat.</li>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil quae ipsum quos
                                    quaerat.</li>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil quae ipsum quos
                                    quaerat.</li>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil quae ipsum quos
                                    quaerat. Lorem ipsum dolor sit amet.</li>
                            </ul>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
