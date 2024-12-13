<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('storage/css/profile/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('storage/css/profile/styles2.css') }}" />
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>My Portfolio</title>
</head>

<body>
     <!-- Tombol Back -->
     <div style="position: fixed; top: 20px; left: 20px;">
        <button onclick="history.back()" style="
            padding: 10px 20px;
            background-color: #ffd700;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        ">
            &#8592; Back
        </button>
    </div>
    <div class="center-content">
        <div class="profile-pic-container">
            <img src="{{ asset('storage/img/profile/profil.jpeg') }}" alt="Profile Picture" class="profile-pic front" />
            <img src="{{ asset('storage/img/profile/logo.png') }}" alt="Profile Back Picture" class="profile-pic back" />
        </div>
    </div>

    <h1>Yoga Agustiansyah</h1>
    <h2>Informatics Engineering</h2>
    <h3 class="section-title">You Can Find Me On</h3>

    <div class="social-links">
        @foreach ([
            ['link' => 'http://github.com/yoga220802', 'img' => 'github.png', 'text' => 'GitHub'],
            ['link' => 'https://gitlab.com/YogaAgustiansyah', 'img' => 'gitlab.png', 'text' => 'GitLab'],
            ['link' => 'https://g.dev/yoga220802', 'img' => 'google_developers.png', 'text' => 'Google Dev'],
            ['link' => 'https://www.instagram.com/yoga0_120/', 'img' => 'instagram.png', 'text' => 'Instagram'],
            ['link' => 'https://web.facebook.com/profile.php?id=100014910220805', 'img' => 'facebook.png', 'text' => 'Facebook']
        ] as $social)
        <div class="social-icon-container">
            <a href="{{ $social['link'] }}" target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('storage/img/profile/' . $social['img']) }}" alt="{{ $social['text'] }}" class="social-icon" />
            </a>
            <span class="social-text">{{ $social['text'] }}</span>
        </div>
        @endforeach
    </div>

    <h3 class="section-title">About Me</h3>
    <div class="about-content">
        <div class="card__collection clear-fix">
            <div class="cards cards--two">
                <img src="{{ asset('storage/img/profile/card-photos.JPG') }}" class="img-responsive" alt="Cards Image" />
                <span class="cards--two__rect"></span>
                <span class="cards--two__tri"></span>
                <p>Yoga Agustiansyah <br> 2206050 <br> Teknik Informatika</p>
            </div>
        </div>
        <p class="about-text">
            <b>Yoga Agustiansyah</b> <br>
            Mahasiswa Program Studi Teknik Informatika dengan konsentrasi pada Sistem Cerdas. Tertarik pada pengembangan solusi berbasis kecerdasan buatan yang dapat diaplikasikan untuk memecahkan masalah-masalah kompleks di dunia nyata.
        </p>
    </div>

    <h3 class="section-title">Portfolio</h3>
    <div class="projects-container">
        @foreach ([
            ['title' => 'React Native Project', 'link' => 'https://github.com/yoga220802/Covid19-Care', 'img' => 'covid-19_care.png', 'desc' => 'COVID-19 Care'],
            ['title' => 'Flutter Project', 'link' => 'https://github.com/yoga220802/NewsApp_With_Flutter', 'img' => 'DailyYLogo.png', 'desc' => 'Daily Y']
        ] as $project)
        <div class="project-item">
            <h4 class="project-title">{{ $project['title'] }}</h4>
            <div class="center-content">
                <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('storage/img/profile/' . $project['img']) }}" alt="{{ $project['desc'] }}" class="project-image" />
                    <p>{{ $project['desc'] }}</p>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <h4 class="section-title">Certifications</h4>
    <div class="certification-container">
        @foreach ([
            ['title' => 'React Native', 'file' => 'react_native.pdf'],
            ['title' => 'Flutter', 'file' => 'flutter.pdf']
        ] as $cert)
        <div class="certification-item">
            <p>{{ $cert['title'] }}</p>
            <iframe class="pdf-viewer" src="{{ asset('storage/img/profile/' . $cert['file']) }}" title="{{ $cert['title'] }} Certification PDF"></iframe>
        </div>
        @endforeach
    </div>
</body>

</html>
