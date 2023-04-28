@extends('master')

@section('judul', "Michelle's Profile")
@section('description', 'Halaman utama dari Profile Michelle Angela')

@section('content')
<div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0" class="isi">
    <div id="Home" class="">
        <div class="hai Text1 border-bottom border-5">
            <h1 class="typing">Hi, I'm Michelle Angela!</h1>
            <p class="fs-5">and this is a little bit informations about me..</p>
        </div>
        <img src="../media/image(1).jpg" alt="" class="img-fluid rounded-circle profileImg1">
    </div>

    <div id="About">
        <h2 class="aboutTitle font">Here are some things about 'Michelle Angela'</h2>
        <div class="grid-container">
            <div class="grid-content col">
                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="currentColor" class="bi bi-gender-ambiguous icon" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1H11.5zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z"/>
                </svg>
                <p class="fs-3">Female</p>
            </div>
            <div class="grid-content col">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
                <p class="fs-3">November 19, 2003</p>
            </div>
            <div class="grid-content col">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <p class="fs-3">Jakarta, Indonesia</p>
            </div>
            <div class="grid-content col">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                </svg>
                <p class="fs-3">Undergraduate</p>
            </div>
            <div class="grid-content col">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>
                <p class="fs-3">ESFJ</p>
            </div>
            <div class="grid-content col">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                </svg>
                <p class="fs-3">Bahasa, English</p>
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <div class="card-body">
                    <h2 class="card-title">Education History</h2>
                    <div id="content">
                        <ul class="timeline">
                            <li class="event" data-date="2007 - 2008">
                                <h3>TK St. Cicilia Pademangan</h3>
                            </li>
                            <li class="event" data-date="2009 - 2015">
                                <h3>SD Budi Mulia Mangga Besar</h3>
                            </li>
                            <li class="event" data-date="2015 - 2018">
                                <h3>SMP Budi Mulia Mangga Besar</h3>
                            </li>
                            <li class="event" data-date="2018 - 2021">
                                <h3>SMA Budi Mulia Mangga Besar</h3>
                                <p>Science Major</p>
                            </li>
                            <li class="event ongoing" data-date="2021 - now">
                                <h3>Binus University</h3>
                                <p>Computer Science Binus Online Learning (PPTI BCA)</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="skill-title">My Skills</h2>
        <div class="skill-container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="media/slide 1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>HTML, CSS, JavaScript</h2>
                            <h5>FrontEnd Development Program</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="media/slide 2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>MySQL, C++, Python</h2>
                            <h5>BackEnd Development Program </h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="media/slide 3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Canva</h2>
                            <h5>Graphic Design Tool</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="media/slide 4.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Capcut</h2>
                            <h5>Video Editing Tool</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="media/slide 5.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Word, Excel, Powerpoint</h2>
                            <h5>Microsoft Programs</h5>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <h2 class="font mealTitle">Some of My Favourite Meals</h2>
        <div class="cardHome grid-container">
            @foreach ($itemInfo as $item)
                @if ($item['status'] == 'Like')
                    <a href="/detail/{{$item['name']}}">
                        <div class="card cardL">
                            <img class="cardImage" src="{{ asset('media/' . $item['image']) }}"
                                alt="{{ $item['name'] }}">
                            <div class="meal-body">
                                <h4 class="">Name     : {{ $item['name'] }}</h4>
                                <p>Status     : {{ $item['status'] }}</p>
                                <p class="card-text">Description    : {{ $item['desc'] }}</p>
                            </div>
                        </div>
                    </a>
                @elseif ($item['status'] == 'Very Like')
                    <a href="/detail/{{$item['name']}}">
                        <div class="card cardVL">
                            <img class="cardImage" src="{{ asset('media/' . $item['image']) }}"
                                alt="{{ $item['name'] }}">
                            <div class="meal-body">
                                <h4 class="">Name     : {{ $item['name'] }}</h4>
                                <p>Status     : {{ $item['status'] }}</p>
                                <p class="card-text">Description    : {{ $item['desc'] }}</p>
                            </div>
                        </div>
                    </a>
                @elseif ($item['status'] == 'So Much Like')
                    <a href="/detail/{{$item['name']}}">
                        <div class="card cardSL">
                            <img class="cardImage" src="{{ asset('media/' . $item['image']) }}"
                                alt="{{ $item['name'] }}">
                            <div class="meal-body">
                                <h4 class="">Name     : {{ $item['name'] }}</h4>
                                <p>Status     : {{ $item['status'] }}</p>
                                <p class="card-text">Description    : {{ $item['desc'] }}</p>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </div>

    <h2 class="and font">And many more to know..</h2>
    <h3 class="and2 font">If you want to know more about me, feel free to contact me!</h3>
</div>



@endsection
