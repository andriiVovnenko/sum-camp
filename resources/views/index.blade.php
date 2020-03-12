<!DOCTYPE html>
<html>
<head>
    <title>Summer IT Camp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link href="style.css" rel="stylesheet">
    <link href="media.css" rel="stylesheet">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="slider_style.css">
    <link rel="stylesheet" href="modal.css">
</head>

<body>
<div class="content">
    <header>
        <div class="container-small">
            <div class="head">
                <div class="logo">
                    <a>
                        <img src="/images/LOGO.svg" alt="summerITcamp">
                    </a>
                </div>
                <div class="contacts">
                    <div class="phone_num">+38 (067) 431 1921</div>
                    <div class="phone_num">+38 (067) 431 1921</div>
                </div>

            </div>
        </div>
    </header>

    <!--2. main text (summer IT Camp ) and social networks-->
    <section>
        <div id="filter" onclick="showModal('none')"></div>
        <div id="modal">
            <div class="closeRegistrationForm" onclick="showModal('none')">X</div>
            <form class="formElements" method="post" action="/add-subscriber">
                @csrf
                <h2>Реєстрація</h2>
                <div class="lastName">
                    <label>Прізвище: </label><br>
                    <input type="text" name="surname" class="registationInput" required>
                </div>
                <div class="firstName">
                    <label>Ім'я: </label><br>
                    <input type="text" name="name" class="registationInput" required>
                </div>
                <div class="phoneNumber">
                    <label>Номер телефону: </label><br>
                    <input type="text" name="phone" placeholder="+38 (0__) ___ __ __" class="registationInput" required>
                </div>
                <div class="email">
                    <label>Електронна адреса: </label><br>
                    <input type="email" name="email" class="registationInput" required>
                </div>
                <div class="selectAge">
                    <label>Вік: </label><br>
                    <select class="selectBox" name="age" required>
                        <option value="" hidden disabled selected></option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                    </select>
                </div>
                <span>date</span>
                <input type="hidden" name="tourId"
                       value="{{ $tour? $tour->id : null }}">{{$tour ? date('d-m-Y', strtotime($tour->start_at)) : '' }}
                -{{$tour? date('d-m-Y', strtotime( $tour->end_at)) : '' }}
                {{--<div class="chooseDate">
                    <label>Виберіть дату: </label><br>
                    <ul class="dateList">
                        --}}{{--@foreach($tours as $tour)
                            <li>
                                <input type="radio" name="tourId" value="{{ $tour->id }}">{{ date('d-m-Y', strtotime($tour->start_at)) }}-{{ date('d-m-Y', strtotime($tour->end_at)) }}
                            </li>
                        @endforeach--}}{{--
                    </ul>
                </div>--}}
                <div class="formButton">
                    <button type="submit" class="submitRegistration">ЗАПИСАТИСЬ</button>
                </div>
            </form>
        </div>
        <div class="container-full">
            <div class="first-page">
                <div class="main-page">
                    <div class="eng-heading">{{ $tour? $tour->name : 'NAME' }}</div>
                    <div class="ukr-heading">{{ $tour? $tour->description : 'DESCRIPTION' }}</div>
                    <div class="period"> з {{$tour? date('d-m-Y', strtotime($tour->start_at)) : 'DATE' }}
                        до {{ $tour? date('d-m-Y', strtotime($tour->end_at)) : 'DATE'}}</div>
                    <div class="click-button">
                        <a class="my-button" href="#" title="apply" onclick="showModal('block')">записатись</a>
                    </div>
                </div>

                <div class="networks" id="networks_right">
                    <!--1.1-->
                    <a href="https://www.facebook.com/vinnytsia.itacademy/?epa=SEARCH_BOX" target="_blank"><img
                            src="/images/facebook (1).svg" alt="facebook" title="facebook"></a>
                    <!--1.2-->
                    <a href="https://www.instagram.com/ita.in.ua/?igshid=18b52jeran0wr" target="_blank"><img
                            src="/images/instagram (1).svg" alt="instagram" title="instagram"></a>
                    <!--1.3-->
                    <a href="#"><img src="/images/twitter (1).svg" alt="twitter" title="twitter"></a>
                </div>
            </div>
        </div>
    </section>
    <!--3. Основні заняття -->
    <section>
        <div class="container-small">
            <div class="lessons">
                <div class="subtitle-3">
                    <div class="title-for-all">Основні заняття</div>
                </div>
                <div class="subjects-galery">
                    @foreach($mainImage as $img)
                        <div class="galery-image">
                            <img src="{{asset($img->img)}}" alt="{{$img->title}}">
                            <p class="caption">{{$img->title}}</p>
                        </div>
{{--                        {{dd($img->img)}}--}}
                    @endforeach
                </div>
{{--                <div class="subjects-galery">--}}
{{--                        <!--1-->--}}
{{--                            <div class="galery-image">--}}
{{--                                <img src='/images/Light.png' alt="Логіка">--}}
{{--                                <p class="caption">Логіка</p>--}}
{{--                            </div>--}}
{{--                            <!--2-->--}}
{{--                            <div class="galery-image">--}}
{{--                                <img src="/images/Graphic.png" alt="Графіка">--}}
{{--                                <p class="caption">Графіка</p>--}}
{{--                            </div>--}}
{{--                            <!--3-->--}}
{{--                            <div class="galery-image">--}}
{{--                                <img src="/images/Internet_programming.png" alt="програмування">--}}
{{--                                <p class="caption">Інтернет<br>програмування</p>--}}
{{--                            </div>--}}
{{--                            <!--4-->--}}
{{--                            <div class="galery-image">--}}
{{--                                <img src="/images/Web_design.png" alt="дизайн">--}}
{{--                                <p class="caption">Веб-дизайн</p>--}}
{{--                            </div>--}}
{{--                            <!--5-->--}}
{{--                            <div class="galery-image">--}}
{{--                                <img src="/images/IT_english.png" alt="English">--}}
{{--                                <p class="caption">IT-English</p>--}}
{{--                            </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    <!--4. Про нас -->
    <section>
        <div class="container-small">
            <div class="about-us">
                <div class="subtitle-4">
                    <div class="title-for-all" id="About_us_title">Про нас</div>
                    <div class="description">
                        <p>
                            {{$aboutUs? $aboutUs[0]->description : 'DESCRIPTION MUST BE HERE'}}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--5. розваги -->
    <section>
        <div class="container-small">
            <div class="entertainment">
                <div class="subtitle-5">
                    <div class="title-for-all">Розваги</div>
                </div>

                <div class="entertainment-galery">
                    <!--1-->
                    <div class="entertainment-image">
                        <img src="/images/Meeting.png" alt="Логіка">
                        <p class="caption">знайомство<br>
                        <p id="inside_caption">(ІГРИ ТА ТВОРЧІ ЗАВДАННЯ)</p></p>
                    </div>
                    <!--2-->
                    <div class="entertainment-image">
                        <img src="/images/Capture_the_flag.png" alt="Графіка">
                        <p class="caption">capture flag<br>
                        <p id="inside_caption">(КОНТАКТНІ ІГРИ НА ПРИРОДІ)</p></p>
                    </div>
                    <!--3-->
                    <div class="entertainment-image">
                        <img src="/images/Quest.png" alt="програмування">
                        <p class="caption">квест<br>
                        <p id="inside_caption">"PUZZLE ME"</p></p>
                    </div>
                    <!--4-->
                    <div class="entertainment-image">
                        <img src="/images/Themes_days.png" alt="дизайн">
                        <p class="caption">тематичні дні</p>
                    </div>
                    <!--5-->
                    <div class="entertainment-image">
                        <img src="/images/IT-branding.png" alt="English">
                        <p class="caption">IT-брендинг</p>
                    </div>
                    <!--6-->
                    <div class="entertainment-image">
                        <img src="/images/IT_company.png" alt="English">
                        <p class="caption">відвідування IT-компаній</p>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <div class="subtitle-5">
        <div class="title-for-all">ФОТО</div>
    </div>
    <div class="slider_area">
        <div class="slider">
            <div class="slides">
                <img src="/images/img_1.jpg">
            </div>
            <div class="slides">
                <img src="/images/img_2.jpg">
            </div>
            <div class="slides">
                <img src="/images/img_3.jpg">
            </div>
            <div class="slides">
                <img src="/images/img_4.jpg">
            </div>
            <div class="slides">
                <img src="/images/img_5.jpg">
            </div>
            <div class="slides">
                <img src="/images/img_6.jpg">
            </div>

        </div>
    </div>

    <!--6. футер -->
    <footer>
        <div class="container-small">
            <div class="foot">
                <div class="networks">
                    <!--1.1-->
                    <a href="#"><img src="/images/twitter (1).svg" alt="twitter" title="twitter"></a>
                    <!--1.2-->
                    <a href="https://www.instagram.com/ita.in.ua/?igshid=18b52jeran0wr" target="_blank"><img
                            src="/images/instagram (1).svg" alt="instagram" title="instagram"></a>
                    <!--1.3-->
                    <a href="https://www.facebook.com/vinnytsia.itacademy/?epa=SEARCH_BOX" target="_blank"><img
                            src="/images/facebook (1).svg" alt="facebook" title="facebook"></a>
                </div>

                <div class="logo">
                    <a>
                        <img src="/images/LOGO.svg" alt="summerITcamp">
                    </a>
                </div>
                <div class="contacts">
                    <div class="phone_num" id="bottom_number">+38 (067) 431 1921</div>
                    <div class="phone_num" id="bottom_number">+38 (067) 431 1921</div>
                    <div class="email">https://hack.intita.com</div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
<script src="/slick/slick.js"></script>
<script src="slider_script.js"></script>
<script src="modal.js"></script>
</body>
</html>
