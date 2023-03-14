@extends('layouts.main')

@section('container')
    <div class="profile-container">
        <div class="left-profile">
            <img src="/img/audrey.jpg" alt="audrey">
            <p class="profile-name">Audrey Tabitha Ariani</p>
            <div class="icon-container">
                <div class="location">
                    <p class="fa-2xl fa-sharp fa-solid fa-location-dot"></p>
                    <p class="nama-jalan">Jl. Boulevard Raya</p>
                </div>
                <div class="phone">
                    <p class="fa-xl fa-solid fa-phone-volume"></p>
                    <p class="nomor-telpon">081288139034</p>
                </div>
                <div class="email">
                    <p class="fa-xl fa-sharp fa-solid fa-envelope"></p>
                    <p class="alamat-email">audrey.ariani@binus.ac.id</p>
                </div>
            </div>
        </div>

        <div class="center-profile">
            <div class="aboutMe">
                <p class="mySection">About Me</p>
                <p>
                Saya merupakan seorang mahasiswa semester 6 di Universitas Bina Nusantara 
                dengan jurusan Teknik Informatika dan Statistika. Mata kuliah yang paling 
                saya sukai adalah Deep Learning and Optimization. Saya gigih, menyukai tantangan 
                di bidang yang saya minati, dan memiliki tekad serta komitmen yang tinggi untuk 
                meraih tujuan saya. Saya tertarik untuk bekerja di bidang Artificial Intelligence 
                atau Actuarial Science.
                </p>
            </div>

            <div class="exp">
                <p class="mySection">Experience</p>
                <li class="boldFont">June 2022 - October 2022</li>
                <p>Content Writer Volunteer</p>
                <p>Forest Is Our Friend</p>
            </div>

            <div class="edu">
                <p class="mySection">Education</p>
                <li class="boldFont">Universitas Bina Nusantara</li>
                <p>2020 - Sekarang (Semester 6)</p>
                <p>Jurusan Teknik Informatika dan Statistika</p>
            </div>
        </div>

        <div class="right-profile">
            <div class="soft-skill">
                <p class="mySection">Soft Skill</p>
                <div class="bar">
                    <p class="namaSkill">Teamwork</p>
                    <progress class="progress is-danger" value="78" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Problem Solving</p>
                    <progress class="progress is-info" value="88" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Responsibility</p>
                    <progress class="progress is-info" value="85" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Flexibility</p>
                    <progress class="progress is-success" value="90" max="100"></progress>
                </div>
            </div>

            <div class="hard-skill">
                <p class="mySection">Hard Skill</p>
                <div class="bar">
                    <p class="namaSkill">Data Analysis</p>
                    <progress class="progress is-info" value="88" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Math/Statistics</p>
                    <progress class="progress is-danger" value="78" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Machine Learning</p>
                    <progress class="progress is-info" value="88" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Drawing</p>
                    <progress class="progress is-success" value="95" max="100"></progress>
                </div>
            </div>

            <div class="hobby">
                <p class="mySection">Hobbies</p>
                <div class="bar">
                    <p class="namaSkill">Swimming</p>
                    <progress class="progress is-info" value="80" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Listen to Music</p>
                    <progress class="progress is-success" value="100" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Drawing</p>
                    <progress class="progress is-danger" value="77" max="100"></progress>
                </div>
            </div>
        </div>
    </div>
@endsection