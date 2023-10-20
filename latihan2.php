<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #navbar {
            background-color: #fff;
        }

        .gradient-background {
            background: linear-gradient(300deg, #352F44, #5C5470, #B9B4C7);
            background-size: 180% 180%;
            animation: gradient-animation 18s ease infinite;
            }

            @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
            }

        .custom-nav .nav-link {
            color: #0F0F0F;
        }
        .custom-nav .nav-link.active {
            color: #fff;
            background-color: #0F0F0F;
        }

        h1 {
            color: #fff;
            font-size: 40px;
        }

        p {
            color: #fff;
        }

        .profile-img {
            height: 125px;
            border-radius: 50%;
        }

        #exercise .btn {
            background-color: #0F0F0F;
            border-color: #0F0F0F;
        }

    </style>
</head>
<body>
    <section id="navbar">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills custom-nav">
              <li class="nav-item"><a href="#" class="nav-link">Latihan 1</a></li>
              <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Latihan 2</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Latihan 3</a></li>
            </ul>
          </header>
    </section>
        
    <section id="profile">
        <div class="p-5 text-center bg-body-tertiary gradient-background">
            <div class="container py-5">
            <h1 class="text-body-emphasis">WAD Project 2: Server Side Development</h1>
            <img class="profile-img mt-3" src="/profile_img.jpg" alt="Profile Image">
            <p class="col-lg-8 mx-auto lead mt-3">
                Naufal Eka Prasetya (1202210109) <br>
                Pada latihan kali ini, saya belajar bagaimana membuat input angka, dropdown, dan button secara statis.
            </p>
            </div>
        </div>
    </section>

    <section id="exercise">
        <div class="card mb-3 text-center">
            <div class="card-body">
              <h3 class="card-title">Alat hitung (Hanya tampilan)</h3>
              <p class="card-text">Masukkan angka pada kolom input. Kemudian, pilihlah operasi hitung pada dropdown.</p>
              <div class="input-box mx-5 my-3 ">
                <label for="numericInput">Masukkan Bilangan:</label>
                <input type="number" class="form-control" id="numericInput" placeholder="Contoh: -1, 1, 10, 1.1" required inputmode="numeric">
              </div>
              <div class="dropdown mx-5 my-3 ">
                <label for="dropdown">Pilih operasi:</label>
                <select class="form-control" id="dropdown">
                  <option value="option1">Penjumlahan (+)</option>
                  <option value="option2">Pengurangan (-)</option>
                  <option value="option3">Perkalian (*)</option>
                  <option value="option3">Pembagian (/)</option>
                  <option value="option3">Pangkat (^)</option>
                </select>
              </div>
              <div class="input-box mx-5 my-3 ">
                <label for="numericInput">Masukkan Bilangan:</label>
                <input type="number" class="form-control" id="numericInput" placeholder="Contoh: -1, 1, 10, 1.1" required inputmode="numeric">
              </div>
              <a href="#" class="btn btn-primary">Hitung</a>
            </div>
          </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>