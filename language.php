<?php
if (isset($_COOKIE['language'])) {
    $code = $_COOKIE['language'];
} else {
    $code = 'EN';
}

session_start();

switch ($code) {
    case 'EN':
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
        $_SESSION['on'] = 'TERBUKA';
        $_SESSION['off'] = 'LEPAS';
        break;

    case 'JP':
        $_SESSION['welcome'] = 'ようこそ';
        break;

    case 'KO':
        $_SESSION['welcome'] = '환영';
        break;

    case 'MY':
        $_SESSION['welcome'] = 'ကြိုဆို';
        break;

    case 'CN':
        $_SESSION['welcome'] = '歡迎';
        break;
    
    default:
        $_SESSION['welcome'] = 'Welcome';
        break;
}