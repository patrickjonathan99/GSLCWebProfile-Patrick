@extends('layouts.main')

@section('container')
    <div class="profile-container">
        <div class="left-profile">
            <img src="/img/stella.jpg" alt="stella">
            <p class="profile-name">Stella Elviana</p>
            <div class="icon-container">
                <div class="location">
                    <p class="fa-2xl fa-sharp fa-solid fa-location-dot"></p>
                    <p class="nama-jalan">Jl. Tanjung Duren Utara VI No. 220</p>
                </div>
                <div class="phone">
                    <p class="fa-xl fa-solid fa-phone-volume"></p>
                    <p class="nomor-telpon">089515402808</p>
                </div>
                <div class="email">
                    <p class="fa-xl fa-sharp fa-solid fa-envelope"></p>
                    <p class="alamat-email">stella.elviana@binus.ac.id</p>
                </div>
            </div>
        </div>

        <div class="center-profile">
            <div class="aboutMe">
                <p class="mySection">About Me</p>
                <p>
                Saya merupakan mahasiswi aktif di Universitas Bina Nusantara dengan jurusan 
                Sistem Informasi dan Akuntansi. Mata kuliah yang paling saya sukai adalah 
                User Experience. Saya merupakan seorang yang cepat dalam mempelajari sesuatu 
                dan mampu berkerjasama dalam tim.
                </p>
            </div>

            <div class="exp">
                <p class="mySection">Experience</p>
                <li class="boldFont">2021 - 2022</li>
                <p>Accountant</p>
                <p>PT. Rejeki Jaya Baik</p>
            </div>

            <div class="edu">
                <p class="mySection">Education</p>
                <li class="boldFont">Universitas Bina Nusantara</li>
                <p>2017 - Sekarang</p>
                <p>Jurusan Sistem Informasi dan Akuntansi</p>
            </div>
        </div>

        <div class="right-profile">
            <div class="soft-skill">
                <p class="mySection">Soft Skill</p>
                <div class="bar">
                    <p class="namaSkill">Communication</p>
                    <progress class="progress is-info" value="80" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Time Management</p>
                    <progress class="progress is-success" value="90" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Active Learning</p>
                    <progress class="progress is-success" value="90" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Adaptibility</p>
                    <progress class="progress is-danger" value="75" max="100"></progress>
                </div>
            </div>

            <div class="hard-skill">
                <p class="mySection">Hard Skill</p>
                <div class="bar">
                    <p class="namaSkill">HTML</p>
                    <progress class="progress  is-danger" value="70" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">CSS</p>
                    <progress class="progress is-link" value="65" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Java</p>
                    <progress class="progress is-link" value="60" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">PHP</p>
                    <progress class="progress is-info" value="80" max="100"></progress>
                </div>
            </div>

            <div class="hobby">
                <p class="mySection">Hobbies</p>
                <div class="bar">
                    <p class="namaSkill">Watching Movie</p>
                    <progress class="progress is-success" value="90" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Singing</p>
                    <progress class="progress is-info" value="80" max="100"></progress>
                </div>
                <div class="bar">
                    <p class="namaSkill">Reading</p>
                    <progress class="progress is-danger" value="78" max="100"></progress>
                </div>
            </div>
        </div>
    </div>
@endsection