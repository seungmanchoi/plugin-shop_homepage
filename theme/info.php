<?php
return [
    'view' => 'theme',
    'setting' => [
        //레이아웃 선택
        [
            'section' => [
                'class' => 'setting-section',
                'title' => '설정'
            ],
            'fields' => [
                'layout' => [
                    '_type' => 'select',
                    'label' => '레이아웃',
                    'options' => [
                        'main' => 'Main 페이지용',
                        'sub' => 'Sub 페이지용',
                    ],
                    'description' => '레이아웃을 사용할 페이지를 지정하세요.'
                ],
                'gnb' => [
                    '_type' => 'menu',
                    'label' => '메인 메뉴 설정',
                    'description' => '메뉴를 지정하세요.'
                ],
                'logoTitle' => [
                    '_type' => 'text',
                    'label' => '로고 타이틀',
                    'placeholder' => '로고 제목을 입력하세요',
                    'description' => '로고 제목을 입력하세요',
                ],
                //footer 설정
                'useFooter' => [
                    '_type' => 'select',
                    'label' => '푸터 영역 사용 여부',
                    'options' => [
                        'y' => '사용',
                        'n' => '사용 안함'
                    ],
                    'description' => '푸터 사용 여부를 선택하세요',
                ],
                'footerCopyright' => [
                    '_type' => 'textarea',
                    'label' => '카피라이트',
                    'description' => 'HTML 사용이 가능합니다.',
                ],
            ]
        ],
        /* Main 페이지 */
        [
            'section' => [
                'class' => 'main-section',
                'title' => 'Main 페이지'
            ],
            'fields' => [
                'useTopSlide' => [
                    '_type' => 'select',
                    'label' => '상단 슬라이드 사용 유무',
                    'options' => [
                        'y' => '사용',
                        'n' => '사용 안함'
                    ],
                    'description' => '캐러셀 사용여부를 선택하세요.',
                ],
                'slide1Image' => [
                    '_type' => 'image',
                    'label' => '상단 슬라이드1 이미지',
                    'description' => '800x300',
                ],
                'slide2Image' => [
                    '_type' => 'image',
                    'label' => '상단 슬라이드2 이미지',
                    'description' => '800x300',
                ],
                'slide3Image' => [
                    '_type' => 'image',
                    'label' => '상단 슬라이드3 이미지',
                    'description' => '800x300',
                ],
            ]
        ],
        /* Sub 페이지 */
        [
            'section' => [
                'class' => 'sub-section',
                'title' => 'Sub 페이지'
            ],
            'fields' => [
                'useSubMenu' => [
                    '_type' => 'select',
                    'label' => '서브 메뉴 영역 사용',
                    'options' => [
                        'y' => '사용',
                        'n' => '사용 안함'
                    ],
                    'description' => '서브 메뉴 사용 여부를 선택하세요.',
                ],
                'subMenu' => [
                    '_type' => 'menu',
                    'label' => '서브 페이지 메뉴 설정',
                    'description' => '서브 메뉴를 선택하세요.',
                ],
            ]
        ],
    ],
    'setting.assets' => [
        'js' => [
            'js/setting.js'
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
