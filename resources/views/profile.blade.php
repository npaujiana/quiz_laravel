<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- My Css -->
    <link rel="stylesheet" href="../assets/style/style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Diphylleia&family=Lobster&family=Poppins:ital,wght@1,100;1,900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <style>
      body {
        background-color: ;
      }
    </style>

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid wrapper--home">
      <nav
        class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm"
        style="background-color: transparent !important"
      >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">nurpaujiana.</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto d-flex gap-4">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#skill">Skill</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#project">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('redirectLogin')}}">Sign In</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="{{route('redirectRegistrasi')}}">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="row p-5 wrapper--home-content" id="home">
        <div class="col-12 col-md-8 text-center text-md-start">
          <div class="wrapper--information">
            <h2 class="fs-4 fs-lg-2">Hello its me</h2>
            <h1 class="fs-3 fs-lg-1 mt-1 fw-bold">Nur Paujiana</h1>
            <h3 class="fs-5 fs-lg-3 mt-3">
              And iam a
              <span class="wrapper--information-job_text fw-bold"
                >Frontend Web Developer</span
              >
            </h3>
            <p class="mt-2">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero id
              voluptatibus illo iure inventore officiis esse architecto laborum
              sed tenetur! Praesentium optio debitis similique illum ipsam quae,
              necessitatibus accusantium porro.
            </p>

            <div
              class="wrapper--information-button d-flex gap-1 gap-md-4 gap-lg-5 mt-5 justify-content-center justify-content-md-start"
            >
              <button class="btn btn-outline-info text-light">Hire Me</button>
              <button class="btn btn-outline-info text-light">Lets Talk</button>
            </div>

            <a href="#"> </a>
          </div>
        </div>
      </div>

      <div class="row" id="about">
        <div
          class="col-10 col-lg-6 d-flex align-items-center ms-5"
          style="margin-top: 8%"
        >
          <div class="text-light  h-75 m-auto p-3 text-center">
            <div class="title">
              <span class="fs-4 fw-bolder" style="font-family: 'Poppins'"
                >About Me</span
              >
            </div>
            <i class="bi bi-brush"></i> <span>---</span>
            <p style="font-family: 'Diphylleia'">
              Saya Nur Paujiana, seorang individu yang penuh semangat dan yakin
              bahwa setiap ilmu bisa kita pelajari, meskipun saya belum kuliah
              dan belum bekerja. Meski belum memiliki pengalaman formal, saya
              senantiasa mencari peluang belajar melalui inisiatif pribadi.
              Keinginan saya untuk terus tumbuh dan berkontribusi positif
              merupakan pendorong utama dalam perjalanan hidup saya.
            </p>
            <span>---</span> <i class="bi bi-brush"></i>
            <div class="social-icons d-flex gap-5 justify-content-center mt-5">
              <a
                href="https://www.facebook.com/"
                target="_blank"
                class="social-icon fs-1"
                ><i class="fa-brands fa-facebook"></i></a>
              <a href="https://twitter.com/" target="_blank" class="social-icon fs-1"
                ><i class="fa-brands fa-x-twitter"></i></a>
              <a
                href="https://www.instagram.com/"
                target="_blank"
                class="social-icon fs-1"
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
        </div>
      </div>

      <div class="row p-5" id="project">
        <div class="col-12 text-center">
          <h1 class="text-light" style="font-family: sans-serif;">My Project</h1>
        </div>
        <div class="col-12 d-flex gap-5 flex-wrap justify-content-center mt-5">
          <div class="card" style="width: 18rem">
            <img src="assets/img/projek 1.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Program Penjualan Tanaman (C++)</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img src="assets/img/projek (1).jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Program Penjualan Tanaman Petani</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img src="assets/img/projek (2).jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Program Penjualan Tanaman (C++)</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>

          <div class="card" style="width: 18rem">
            <img src="assets/img/projek (3).jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Program Penjualan Tanaman Petani</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
          <div class="card" style="width: 18rem">
            <img src="assets/img/projek (4).jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Program Penjualan Tanaman Petani</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
          <div class="card" style="width: 18rem">
            <img src="assets/img/projek (5).jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Program Penjualan Tanaman Petani</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container p-5" id="skill">
        <h1 class="text-center mb-5 text-light">My Skills</h1>

        <div class="row">

          <div class="col-4">
            
          </div>
          <div class="col-12 col-lg-6">
            <div class="row g-5">
              <div class="col-3 text-center d-flex flex-column gap-4">
                <img
                  src="assets/svg/Group 12.svg"
                  class="mx-auto"
                  alt=""
                  width="50px"
                  height="50px"
                />
                <h6 class="text-light">HTML</h6>
                <div class="progress">
                  <div
                    class="progress-bar w-75"
                    role="progressbar"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
    
              <div class="col-3 text-center d-flex flex-column gap-4">
                <img
                  src="assets/svg/Group 13.svg"
                  class="mx-auto"
                  alt=""
                  width="50px"
                  height="50px"
                />
                <h6 class="text-light">CSS</h6>
                <div class="progress">
                  <div
                    class="progress-bar w-50"
                    role="progressbar"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
    
              <div class="col-3 text-center d-flex flex-column gap-4">
                <img
                  src="assets/svg/Group.svg"
                  class="mx-auto"
                  alt=""
                  width="50px"
                  height="50px"
                />
                <h6 class="text-light">JAVACRIPT</h6>
                <div class="progress">
                  <div
                    class="progress-bar w-25"
                    role="progressbar"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
              <div class="col-3 text-center d-flex flex-column gap-4">
                <img
                  src="assets/svg/bootstrap.svg"
                  class="mx-auto"
                  alt=""
                  width="50px"
                  height="50px"
                />
                <h6 class="text-light">BOOTSTRAP</h6>
                <div class="progress">
                  <div
                    class="progress-bar w-50"
                    role="progressbar"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
              <div class="col-3 text-center d-flex flex-column gap-4">
                <img
                  src="assets/svg/image 20.svg"
                  class="mx-auto"
                  alt=""
                  width="50px"
                  height="50px"
                />
                <h6 class="text-light">C++</h6>
                <div class="progress">
                  <div
                    class="progress-bar w-75"
                    role="progressbar"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
              <div class="col-3 text-center d-flex flex-column gap-4">
                <img
                  src="assets/img/PHP.png"
                  class="mx-auto"
                  alt=""
                  width="50px"
                  height="50px"
                />
                <h6 class="text-light">PHP</h6>
                <div class="progress">
                  <div
                    class="progress-bar w-50"
                    role="progressbar"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
              <div class="col-3 text-center d-flex flex-column gap-4">
                <img
                  src="assets/img/golang.png"
                  class="mx-auto"
                  alt=""
                  width="50px"
                  height="50px"
                />
                <h6 class="text-light">GOLANG</h6>
                <div class="progress">
                  <div
                    class="progress-bar w-25"
                    role="progressbar"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
              <div class="col-3 text-center d-flex flex-column gap-4">
                <img
                  src="assets/img/python.png"
                  class="mx-auto"
                  alt=""
                  width="50px"
                  height="50px"
                />
                <h6 class="text-light">PYTHON</h6>
                <div class="progress">
                  <div
                    class="progress-bar w-25"
                    role="progressbar"
                    aria-valuenow="25"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>

          
        </div>
        
      </div>

      <div class="row d-flex flex-column flex-lg-row" id="contact">
        <div class="col-12 col-lg-3 text-center text-lg-start">
            <img src="assets/img/about-me.png" alt="">
        </div>
        <div class="col-12 col-lg-9 text-center text-lg-start">
            <div class="row text-center mb-3 my-5 text-light">
                <div class="col">
                  <h2>Contact Me</h2>
                </div>
              </div>
              <div class="row justify-content-center text-light">
                <div class="col-md-6">
                  <form>
                    <div class="mb-3">
                      <label for="name" class="form-label">Nama Lengkap</label>
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        aria-describedby="name"
                      />
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        aria-describedby="email"
                      />
                    </div>
                    <div class="mb-3">
                      <label for="pesan" class="form-label">Pesan</label>
                      <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                  </form>
                </div>
              </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
