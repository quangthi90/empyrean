<?php
if (isset($_COOKIE['language'])) {
    $code = $_COOKIE['language'];
} else {
    $code = 'EN';
}

session_start();

switch ($code) {
    case 'VI':
        $_SESSION['welcome'] = 'Chào mừng';
        $_SESSION['home'] = 'Trang chủ';
        $_SESSION['about_us'] = 'Về chúng tôi';
        $_SESSION['gallery'] = 'Bộ sưu tập';
        $_SESSION['design_forum'] = 'Forum thiết kế';
        $_SESSION['contact'] = 'Liên hệ';
        $_SESSION['languages'] = 'Ngôn ngữ';
        $_SESSION['english'] = 'Tiếng Anh';
        $_SESSION['chinese'] = 'Trung Quốc';
        $_SESSION['bahasa'] = 'Bahasa';
        $_SESSION['japanese'] = 'Tiếng Nhật';
        $_SESSION['korean'] = 'Hàn Quốc';
        $_SESSION['myanmar'] = 'Myanmar';
        $_SESSION['vietnamese'] = 'Tiếng Việt';
        $_SESSION['music'] = 'NHẠC';
        $_SESSION['on'] = 'MỞ';
        $_SESSION['off'] = 'TẮT';
        break;

    case 'BA':
        $_SESSION['welcome'] = 'Sambutan';
        $_SESSION['home'] = 'Rumah';
        $_SESSION['about_us'] = 'Tentang Kami';
        $_SESSION['gallery'] = 'Galeri';
        $_SESSION['design_forum'] = 'Desain Forum';
        $_SESSION['contact'] = 'Kontak';
        $_SESSION['languages'] = 'Bahasa';
        $_SESSION['english'] = 'Inggris';
        $_SESSION['chinese'] = 'Cina';
        $_SESSION['bahasa'] = 'Bahasa';
        $_SESSION['japanese'] = 'Jepang';
        $_SESSION['korean'] = 'Korea';
        $_SESSION['myanmar'] = 'Myanmar';
        $_SESSION['vietnamese'] = 'Orang Vietnam';
        $_SESSION['music'] = 'MUSIK';
        $_SESSION['on'] = 'PADA';
        $_SESSION['off'] = 'LEPAS';
        break;

    case 'JP':
        $_SESSION['welcome'] = 'ようこそ';
        $_SESSION['home'] = 'ホーム';
        $_SESSION['about_us'] = '私たちに関しては';
        $_SESSION['gallery'] = 'ギャラリー';
        $_SESSION['design_forum'] = 'デザインフォーラム';
        $_SESSION['contact'] = 'コンタクト';
        $_SESSION['languages'] = '言語';
        $_SESSION['english'] = '英語';
        $_SESSION['chinese'] = '中国の';
        $_SESSION['bahasa'] = 'バハサ';
        $_SESSION['japanese'] = '日本語';
        $_SESSION['korean'] = '韓国語';
        $_SESSION['myanmar'] = 'ミャンマー';
        $_SESSION['vietnamese'] = 'ベトナム語';
        $_SESSION['music'] = '音楽';
        $_SESSION['on'] = 'オン';
        $_SESSION['off'] = 'オフ';
        break;

    case 'KO':
        $_SESSION['welcome'] = '환영';
        $_SESSION['home'] = '홈페이지';
        $_SESSION['about_us'] = '회사 소개';
        $_SESSION['gallery'] = '갤러리';
        $_SESSION['design_forum'] = '디자인 포럼';
        $_SESSION['contact'] = '접촉';
        $_SESSION['languages'] = '언어';
        $_SESSION['english'] = '영어';
        $_SESSION['chinese'] = '중국어';
        $_SESSION['bahasa'] = '한국어';
        $_SESSION['japanese'] = '일본의';
        $_SESSION['korean'] = '한국어';
        $_SESSION['myanmar'] = '미얀마';
        $_SESSION['vietnamese'] = '베트남의';
        $_SESSION['music'] = '음악';
        $_SESSION['on'] = '에';
        $_SESSION['off'] = '해제';
        break;

    case 'MY':
        $_SESSION['welcome'] = 'ကြိုဆို';
        $_SESSION['home'] = 'နေအိမ်';
        $_SESSION['about_us'] = 'ကြှနျုပျတို့အကွောငျး';
        $_SESSION['gallery'] = 'ဓာတ်ပုံပြခန်း';
        $_SESSION['design_forum'] = 'ဒီဇိုင်းကိုဖိုရမ်၏';
        $_SESSION['contact'] = 'ဆက်သွယ်ရန်';
        $_SESSION['languages'] = 'ဘာသာစကားများကို';
        $_SESSION['english'] = 'အင်္ဂလိပ်';
        $_SESSION['chinese'] = 'တရုတ်';
        $_SESSION['bahasa'] = 'Bahasa';
        $_SESSION['japanese'] = 'ဂျပန်';
        $_SESSION['korean'] = 'ကိုရီးယား';
        $_SESSION['myanmar'] = 'မြန်မာ';
        $_SESSION['vietnamese'] = 'ဗီယက်နမ်';
        $_SESSION['music'] = 'တေးဂီတ';
        $_SESSION['on'] = 'အပေါ်';
        $_SESSION['off'] = 'ချွတ်';
        break;

    case 'CN':
        $_SESSION['welcome'] = '歡迎';
        $_SESSION['home'] = '主頁';
        $_SESSION['about_us'] = '關於我們';
        $_SESSION['gallery'] = '圖庫';
        $_SESSION['design_forum'] = '設計論壇';
        $_SESSION['contact'] = '聯繫';
        $_SESSION['languages'] = '語言';
        $_SESSION['english'] = '英語';
        $_SESSION['chinese'] = '中國';
        $_SESSION['bahasa'] = '印度尼西亞語';
        $_SESSION['japanese'] = '日本';
        $_SESSION['korean'] = '朝鮮的';
        $_SESSION['myanmar'] = '緬甸';
        $_SESSION['vietnamese'] = '越南';
        $_SESSION['music'] = '音樂';
        $_SESSION['on'] = '上';
        $_SESSION['off'] = '關閉';
        break;
    
    default:
        $_SESSION['welcome'] = 'Welcome';
        $_SESSION['home'] = 'Home';
        $_SESSION['about_us'] = 'About Us';
        $_SESSION['gallery'] = 'Gallery';
        $_SESSION['design_forum'] = 'Design Forum';
        $_SESSION['contact'] = 'Contact';
        $_SESSION['languages'] = 'Languages';
        $_SESSION['english'] = 'English';
        $_SESSION['chinese'] = 'Chinese';
        $_SESSION['bahasa'] = 'Bahasa';
        $_SESSION['japanese'] = 'Japanese';
        $_SESSION['korean'] = 'Korean';
        $_SESSION['myanmar'] = 'Myanmar';
        $_SESSION['vietnamese'] = 'Vietnamese';
        $_SESSION['music'] = 'MUSIC';
        $_SESSION['on'] = 'ON';
        $_SESSION['off'] = 'OFF';
        break;
}