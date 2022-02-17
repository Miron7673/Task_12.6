<?php
    include 'random.php';
    include 'union.php';
    include 'partition.php';
    include 'reduced.php';
    include 'gender.php';
    include 'age.structure.php';
    include 'partner.php';

    $example_persons_array = [
        [
            'fullname' => 'Иванов Иван Иванович',
            'job' => 'tester',
        ],
        [
            'fullname' => 'Степанова Наталья Степановна',
            'job' => 'frontend-developer',
        ],
        [
            'fullname' => 'Пащенко Владимир Александрович',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Громов Александр Иванович',
            'job' => 'fullstack-developer',
        ],
        [
            'fullname' => 'Славин Семён Сергеевич',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Цой Владимир Антонович',
            'job' => 'frontend-developer',
        ],
        [
            'fullname' => 'Быстрая Юлия Сергеевна',
            'job' => 'PR-manager',
        ],
        [
            'fullname' => 'Шматко Антонина Сергеевна',
            'job' => 'HR-manager',
        ],
        [
            'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Бардо Жаклин Фёдоровна',
            'job' => 'android-developer',
        ],
        [
            'fullname' => 'Шварцнегер Арнольд Густавович',
            'job' => 'babysitter',
        ],
    ];

    echo getFullnameFromParts('Борисов', 'Иван', 'Иванович'); // вызов функции объединеня ФИО в одну строку
    echo "<br><br>";
    print_r(getPartsFromFullname('Цой Владимир Антонович')); // вызов функции разбиения ФИО в массив
    echo "<br><br>";
    echo getShortName('Иванов Артем Вячеславович'); // вызов функции сокращения ФИО
    echo "<br><br>";
    echo getGenderFromName('Петров Андрей Сергеевич'); // вызов функции определения пола по ФИО
    echo "<br><br>";
    getGenderDescription($example_persons_array); // вызов функции определения пола по ФИО
    echo "<br><br>";
    getPerfectPartner('Ульянова', 'Елена', 'Ивановна', $example_persons_array); // вызов функции идеального подбора пары. Если пол определить невозможно - выдаст сообщение о невозможности подбора
    