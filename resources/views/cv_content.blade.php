<div class="container-fluid cv" data-title="{{ $title }}">
    <div class="load-block">
        <img src="{{ asset(config('settings.brand_dir')) . '/dragonfly_logo.png'}}">
        <div class="load">
            <a href="{{ asset(config('settings.resume_dir')) }}/{{ asset(config('settings.resume_name')) }}.pdf"
               download class="load__pdf" title="Скачать в формате .pdf"></a>
            <a class="load__sign">Скачать резюме</a>
            <a href="{{ asset(config('settings.resume_dir')) }}/{{ asset(config('settings.resume_name')) }}.doc"
               download class="load__doc" title="Скачать в формате .doc"></a>
        </div>
    </div>
    <header>
        <h2>Full stack developer</h2>
        <p>
            <b>Семянович Андрей Александрович</b><br/>
            Контактный телефон: <b>(095) 220-18-03</b><br/>
            E-mail: <a href="mailto:{{ config('settings.e-mail') }}">{{ config('settings.e-mail') }}</a>
        </p>
    </header>
    <section class="resume">
        <div class="left">
            <h3>Опыт работы</h3>
            <h4>В качестве Web-разработчика:</h4>
            <ul>
                <li>05.2013 – фан-сайт «Inquisition» на шаблоне CMS Joomla</li>
                <li>06.2013 – сайт под ключ «Catering Rinaldy» на шаблоне CMS Joomla</li>
                <li>12.2013 – сайт под ключ <a href="{{ route('sites', 'k-gallery') }}">«K-Gallery»</a> на шаблоне CMS
                    Joomla
                </li>
                <li>07.2018 – landing page <a href="{{ route('sites', 'unique') }}">«Unique»</a></li>
                <li>09.2018 – корпоративный сайт <a href="{{ route('sites', 'tproger') }}">«Tproger»</a></li>
                <li>01.2019 – сайт-портфолио <a href="{{ route('sites', 'dragonfly') }}">«DragonFly»</a></li>
                <li>c 02.2019 – ООО <a href="https://autoline.com.ua" rel="nofollow">«ЛайнМедиа»</a></li>
            </ul>

            <h5>Мои преподаватели:</h5>
            <ul class="teachers">
                <li>Мак-Дональд М. – <strong>HTML5</strong>. Недостающее руководство: Пер. с англ. – 480 с.</li>
                <li>Лоусон Б., Шарп Р. – Изучаем <strong>HTML5</strong>. Библиотека специалиста. 2-е изд. – 304 с.</li>
                <li>Макфарланд Д. – Новая большая книга <strong>CSS</strong>. – 720 с.</li>
                <li><strong>JavaScript</strong>. Подробное руководство, 6-е издание. – Пер. с англ. – 1080 с.</li>
                <li>Макфарланд, Дэвид. – <strong>JavaScript</strong> и <strong>jQuery</strong>: исчерпывающее
                    руководство – 3-е издание – 880 с.
                </li>
                <li>Котеров, Д. В. – <strong>PHP</strong> 5 / Д. В. Котеров, А. Ф. Костарев. – 2-е издание – 1104 с.
                </li>
                <li><strong>MySQL</strong> 5 / М. В. Кузнецов, И. В. Симдянов. – 1024 с. (В подлиннике)</li>
                <li>Фридл Дж. – <strong>Регулярные выражения</strong>, 3-е издание. – Пер. с англ. – 608 с.</li>
                <li>Pro <strong>Git</strong>, Scott Chacon, Ben Straustrong, Version 2.1.3, 2018-05-15</li>
                <li>[Специалист] <strong>PHP</strong>. Уровень 1-4, видеокурс</li>
                <li><strong>Laravel</strong> framework. Zero to Pro, видеокурс</li>
                <li><a href="https://htmlacademy.ru">Html academy</a>, интерактивные онлайн курсы (<strong>HTML</strong>,
                    <strong>CSS</strong>, <strong>Sass</strong>, <strong>SVG</strong>, <strong>JavaScript</strong>)
                </li>
                <li><a href="https://learn.javascript.ru">learn.javascript.ru</a>, cовременный учебник <strong>Javascript</strong>
                </li>
                <li><strong>Bootstrap</strong>, <a
                            href="https://getbootstrap.com/docs/4.1/getting-started/introduction">documentation</a></li>
                <li><a href="https://js.checkio.org/">js.checkio.org</a>, онлайн практика <strong>JavaScript</strong>
                </li>
            </ul>

            <h4>В качестве дизайнера:</h4>
            <ul>
                <li>08.2008 – 03.2010 – газета «Международный курьер»</li>
                <li>03.2010 – 01.2011 – издательский дом «Секретные материалы»</li>
                <li>01.2011 – 06.2017 – журнал «Ковальська Майстерня»</li>
                <li>04.2012 – 07.2016 – редакция «Каталог К-Галерея»</li>
                <li>06.2013 – 08.2015 – издательское объединение «Юстiнiан»</li>
                <li>07.2014 – 02.2019 – редакция <a href="http://yur-gazeta.com">«Юридична Газета</a></li>
            </ul>

            <h5>Обязанности:</h5>
            <p>Дизайн и верстка <a href="{{ route('printing') }}">полиграфической продукции</a>, создание иллюстраций
                и <a href="{{ route('graphicAnimations') }}">анимаций</a> для сайтов и соц. сетей, контент-менеджмент,
                создание <a href="{{ route('branding') }}">корпоративного стиля</a> компаний</p>
        </div>
        <div class="right">
            <div>
                <h3>Оcновное образование</h3>
                <p>
                    Год окончания: 2007<br/>
                    Учебное заведение: НTУУ «Киевский политехнический институт»<br/>
                    Специальность: видео-, аудио- и кинотехника<br/>
                    Квалификация: бакалавр
                </p>
                <h3>Владение иностранными языками</h3>
                <p>
                    Английский: Іntermediate (свободное чтение технической документации)
                </p>
                <h3>Дополнительные умения</h3>
                <p>
                    Языки программирования: Delphi, C, C++<br/>
                    Редакторы: NetBeans, Brackets, PhpStorm<br/>
                    CMS: Joomla
                </p>
                <h3>Дополнительная информация</h3>
                <p>Коммуникабельный, ответственный, старательный, целеустремленный, умеющий работать в команде, склонный
                    к самообучению, некурящий, имеющий слабость к математическим и логическим задачам, среди лучших
                    программистов по <a href="https://js.checkio.org/profile/leaderboard/full">рейтингу «js.checkiO»</a>
                    (ник: SaintDron)</p>
            </div>
            <div class="figure">
                <img src="{{ asset(config('settings.gif_dir')) }}/dragonfly2.gif">
                <div class="tape-1">
                    <img src="{{ asset('assets') }}/images/tape_1.png">
                </div>
                <div class="tape-2">
                    <img src="{{ asset('assets') }}/images/tape_2.png">
                </div>
            </div>
        </div>
    </section>
    <section id="feedback">
        <h3>Обратная связь</h3>

        {{--Статус отправки сообщения--}}
        <div id="status" style="display: none;">
            <div class="alert alert-danger">
                {{ trans('custom.message_not_sent') }}
            </div>
        </div>

        <form id="mail-form" action="{{ route('mail') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-md">
                    <label for="name">Имя</label>
                    <div class="input-prepend">
                        <input class="form-control" id="name" name="name" value="{{ old('name') }}"
                               contenteditable="true" spellcheck="false" required>
                        <span class="add-on"><i class="fas fa-user"></i></span>
                    </div>
                </div>
                <div class="form-group col-md">
                    <label for="email">E-mail</label>
                    <div class="input-prepend">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                               contenteditable="true" spellcheck="false" required>
                        <span class="add-on"><i class="fas fa-at"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="text">Сообщение</label>
                <div class="input-prepend">
                    <textarea class="form-control" id="text" rows="4" name="text" required>{{ old('text') }}</textarea>
                    <span class="add-on"><i class="fas fa-comment-alt"></i></span>
                </div>
            </div>
            <button type="submit" name="submit" class="btn-d"><i class="fas fa-envelope"></i> Отправить</button>
        </form>
    </section>
</div>
