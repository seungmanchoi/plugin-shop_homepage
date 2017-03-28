<?php
return [
    'view' => 'theme',
    'setting' => [
        //레이아웃 선택
        'layout' => [
            '_type' => 'select',
            '_section' => '설정',
            'label' => '레이아웃',
            'options' => [
                'main' => 'Main 페이지용',
                'sub' => 'Sub 페이지용',
            ]
        ],

        'gnb' => [
            '_type' => 'menu',
            '_section' => '설정',
            'label' => '메인 메뉴 설정',
        ],

        'logoTitle' => [
            '_type' => 'text',
            '_section' => '설정',
            'label' => '로고 타이틀',
            'placeholder' => '로고 제목을 입력하세요',
            'description' => '로고 제목을 입력하세요',
        ],

        //footer 설정
        'useFooter' => [
            '_type' => 'select',
            '_section' => '설정',
            'label' => '푸터 영역 사용 여부',
            'options' => [
                'y' => '사용',
                'n' => '사용 안함'
            ]
        ],
        'footerCopyright' => [
            '_type' => 'textarea',
            '_section' => '설정',
            'label' => '카피라이트',
        ],

        /* Main 페이지 */
        //top slider
        'useTopSlide' => [
            '_type' => 'select',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드 사용 유무',
            'options' => [
                'y' => '사용',
                'n' => '사용 안함'
            ]
        ],
        'slide1Image' => [
            '_type' => 'image',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드1 이미지 (800x300)',
        ],
        'slide2Image' => [
            '_type' => 'image',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드2 이미지 (800x300)',
        ],
        'slide3Image' => [
            '_type' => 'image',
            '_section' => 'Main 페이지',
            'label' => '상단 슬라이드3 이미지 (800x300)',
        ],

        /* Sub 페이지 */
        'useSubMenu' => [
            '_type' => 'select',
            '_section' => 'Sub 페이지',
            'label' => '서브 메뉴 영역 사용',
            'options' => [
                'y' => '사용',
                'n' => '사용 안함'
            ]
        ],

        'subMenu' => [
            '_type' => 'menu',
            '_section' => 'Sub 페이지',
            'label' => '서브 페이지 메뉴 설정',
        ],
    ],
    'editable' => [
        'theme.blade.php',
        'header.blade.php',
        'footer.blade.php',
        'main.blade.php',
        'sub.blade.php',
        'sub_menu.blade.php',
    ]
];
