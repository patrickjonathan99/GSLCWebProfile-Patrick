@extends('layouts.main')

@section('container')
    <div class="profile-container">
        <div class="left-profile">
            <img src="/img/patrick.jpg" alt="patrick">
            <p class="profile-name">Patrick Jonathan</p>
            <div class="icon-container">
                <div class="location">
                    <p class="fa-2xl fa-sharp fa-solid fa-location-dot"></p>
                    <p class="nama-jalan">Jalan Salak Barat 6 No.14A</p>
                </div>
                <div class="phone">
                    <p class="fa-xl fa-solid fa-phone-volume"></p>
                    <p class="nomor-telpon">081287187138</p>
                </div>
                <div class="email">
                    <p class="fa-xl fa-sharp fa-solid fa-envelope"></p>
                    <p class="alamat-email">pj141299@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="center-profile">
            <div class="aboutMe">
                <p class="mySection">About Me</p>
                <p>
                    Saya merupakan seorang mahasiswa semester 6 di Universitas Bina
                    Nusantara dengan jurusan Teknik Informatika dan Statistika. Mata 
                    Kuliah yang paling saya sukai adalah Regression Analysis. Saya
                    merupakan orang yang memiliki rasa ingin tahu yang tinggi, cepat
                    belajar, dan mampu beradaptasi dengan lingkungan. Saya tertarik
                    untuk memiliki pengalaman kerja dalam bidang teknik informatika
                </p>
            </div>

            <div class="exp">
                <p class="mySection">Experience</p>
                <li class="boldFont">2022 - 2023</li>
                <p>Koordinator Divisi Learning, Resouce and Development</p>
                <p>Himpunan Mahasiswa Statistika</p>
                <p>Universitas Bina Nusantara</p>
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
                    <progress class="progress is-info" value="80" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Responsibility</p>
                    <progress class="progress is-success" value="95" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Critical Thinking</p>
                    <progress class="progress is-success" value="90" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Public Speaking</p>
                    <progress class="progress is-danger" value="70" max="100"></progress>
                </div>
            </div>

            <div class="hard-skill">
                <p class="mySection">Hard Skill</p>
                <div class="bar">
                    <p class="namaSkill">SQL</p>
                    <progress class="progress is-success" value="90" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">R</p>
                    <progress class="progress is-info" value="80" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Java</p>
                    <progress class="progress is-info" value="88" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Python</p>
                    <progress class="progress is-danger" value="75" max="100"></progress>
                </div>
            </div>

            <div class="hobby">
                <p class="mySection">Hobbies</p>
                <div class="bar">
                    <p class="namaSkill">Playing Chess</p>
                    <progress class="progress is-danger" value="65" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Swimming</p>
                    <progress class="progress is-info" value="85" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Watching Movie</p>
                    <progress class="progress is-success" value="95" max="100"></progress>
                </div>
            </div>
        </div>
    </div>
@endsection