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
        $_SESSION['our_mission'] = 'Nhiệm vụ';
        $_SESSION['mission_content'] = 'Niềm tin của chúng tôi là không thứ gì có thể tồn tại độc lập trên thế giới này. Chúng ta tồn tại cùng nhau và hỗ trợ nhau phát triển, điều này giúp thế giới trở nên muôn màu muôn vẻ, rực rỡ hơn. Một sản phẩm tuyệt vời không chỉ được thiết kế đẹp, nó còn phải .... ';
        $_SESSION['our_story'] = 'Lịch sử';
        $_SESSION['story_content'] = 'Empyrean Design được thành lập vào năm 1992 bởi Eric Haywood Chang. Sau khi tốt nghiệp trường đại học mỹ thuật LaSalle tại Singapo, ngành thiết kế nội thất và chuyên ngành thiết kế sản phẩm và mỹ thuật. Ông là một kiến trúc sư có nhiều năm kinh nghiệm trong lĩnh vực thiết kế. Ông đam mê thiết kế, nghệ thuật và âm nhạc...';
        $_SESSION['copyright'] = 'Copyright &copy; 2015 Empyrean Design. Đã đăng ký sở hữu trí tuệ.';
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
        $_SESSION['our_mission'] = 'Misi kita';
        $_SESSION['mission_content'] = 'Kami mempercayai bahwa tidak ada sesuatu yang terbentuk dengan sendirinya didunia ini. Kita berkerja berdampingan dan saling bergantung satu dan lainnya. Hal ini menciptakan dimensi yang lebih besar dan memberikan corak pada dunia. Disain yang bagus tidak cukup, produk yang luar biasa akan memiliki nilai jual tersendiri. Kami mempercayai bahwa disamping memiliki aspek estetis...';
        $_SESSION['our_story'] = 'Latar Belakang';
        $_SESSION['story_content'] = 'EMPYREAN DESIGN  didirikan oleh Eric Haywood Chang pada tahun 1992. Menyelesaikan pendidikan  di LaSalle College of the Arts di Singapore dalam bidang Interior Designing and minor in Product Designing and Fine Arts. Eric Haywood Chang adalah arsitek yang sangat handal dan memiliki pengalaman beberapa tahun dan ahli dalam bidangnya. Dia menguasai  bidang disain, seni dan musik...';
        $_SESSION['copyright'] = '';
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
        $_SESSION['our_mission'] = '我々の使命';
        $_SESSION['mission_content'] = '私たちは、何もこの世界では、それ自体によって形成されていないと信じています。私たちは並んで動作し、互いに相互に依存しています。これは、より大きな寸法を作成し、世界にスタイルを与えます。グッドデザインは、優れた製品は、独自のセールスポイントを持っていますが、十分ではありません。。。';
        $_SESSION['our_story'] = '私たちの物語';
        $_SESSION['story_content'] = '荘厳なデザインは、製品のデザインと美術におけるインテリアデザインの分野とマイナーにシンガポールで芸術のラサール大学で卒業、1992年にエリック・ヘイウッドチャンによって設立されました。エリック・ヘイウッドの建築家チャンは、非常に信頼性が高いと、数年の経験を持ち、それぞれの分野の専門家です。。。';
        $_SESSION['copyright'] = '';
        break;

    case 'KO':
        $_SESSION['welcome'] = '환영';
        $_SESSION['home'] = '집';
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
        $_SESSION['our_mission'] = '우리의 미션';
        $_SESSION['mission_content'] = '그것은 아무것도이 세상에서 그 자체로 존재하지 않음을 우리의 믿음이다. 우리는 공존 서로 우리는 서로에 상호 의존적이다. 이것은 더 큰 치수를 작성하고 땅에 색상을 기여한다. 좋은 디자인은 충분하지 않습니다; 좋은 제품 자체를 판매 할 수있을 것입니다. 우리가 판매하는 디자인은 미적 측면 외에...';
        $_SESSION['our_story'] = '우리의 이야기';
        $_SESSION['story_content'] = 'Empyrean Design 은 Eric Haywood Chang 에 의해 1992 년에 설립되었다.싱가포르 예술의 LaSalle 대학을 졸업 한; 인테리어 디자인 전공 및 제품 디자인 및 미술에 작은, 그는 관련 분야에서 경험과 전문 지식의 많은 년을 가지고 독학으로 건축가입니다. 그는 디자인, 예술, 음악에 대한 열정이다...';
        $_SESSION['copyright'] = '';
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
        $_SESSION['our_mission'] = 'ရည္ရြယ္ခ်က္';
        $_SESSION['mission_content'] = 'ေလာကတြင္ မည္သည့္အရာမွ သီးျခားရပ္တည္ နိုင္စြမ္းမရွိ ဟူေသာစကားကို ကြၽန္ုပ္တို႔ ယံုၾကည္ပါသည္။ ကြၽနု္ပ္တို႔သည္ အတူတကြ ပူးေပါင္း ေနထုိင္ျပီး တစ္ဦးႏွင့္ တစ္ဦး အျပန္အလွန္ အမွီသဟဲ ျပဳေနၾကရပါသည္။ ယင္းသို႔ အတူတကြ ပူးေပါင္းေနထုိင္ျခင္းသည္ ကမာၻေျမၾကီးကို ပိုမိုသာယာလွပျပီး အဓိပၸာယ္ ရွိေစသည္။ ပစၥည္းေကာင္းတို႔မည္သည္မွာ တျခားမည့္သည့္ အတြဲအစပ္မွ မပါပဲ သူ႔အတုိင္းကိုပင္ ေရာင္းခ်နိုင္စြမ္း ရွိၾကသည္။ ေရာင္းခ်၍ရေသာ ဒီဇိုင္းမ်ားသည္ သံုးစြဲသူမ်ား အထူးနွစ္သက္ သေဘာက် နွစ္ခ်ိဳက္ျပီး ၀ယ္သူ၏ လိုအပ္ခ်က္မ်ားနွင့္ ကိုက္ညီ၍ သာ ေရာင္းခ်နုိင္ျခင္းျဖစ္သည္ ဟုလည္း...';
        $_SESSION['our_story'] = 'ကုမၸဏီအေၾကာင္း';
        $_SESSION['story_content'] = 'ကြၽနု္ပ္တို႔၏ Empyrean Design ကုမၸဏီကို ၁၉၉၂ ခုနွစ္တြင္ Mr. Eric Haywood Chang မွ စတင္တည္ေထာင္ခဲ့ ပါသည္။ Mr. Eric သည္ Singapore နိုင္ငံ LaSalle College of the Arts မွ ဘြဲ႔ရရွိခဲ့ျပီး သူ၏ အဓိကဘာသာရပ္မ်ားမွာ အိမ္တြင္းအလွ ဆင္လုပ္ငန္းျဖစ္ျပီး အရန္ဘာသာရပ္မ်ားအျဖစ္ ကုန္ပစၥည္း ဒီဇိုင္းထြင္ျခင္းနွင့္ အျခားလက္မႈ အနုပညာမ်ား ပါ၀င္ပါသည္။ သူသည္ အေဆာက္အဦနွင့္ ပတ္သတ္ေသာ ဗိသုကာပညာကို ကိုယ္တိုင္ အပတ္တကုတ္ၾကိုစား သင္ယူခဲ့ရျပီး ၄င္းပညာျဖင့္ပင္ နွစ္ေပါင္းမ်ားစြာ လုပ္ကိုင္ခဲ့ျခင္းမွ အေတြ႔အၾကံု ဗဟုသုတမ်ားစြာ ရရွိျပီး ကြၽမ္းက်င္သူ တစ္ေယာက္ျဖစ္လာ ခဲ့ပါသည္။ သူသည္ ဂီတ၊ အႏုပညာ နွင့္ ဒီဇိုင္းဖန္တီးျခင္း...';
        $_SESSION['copyright'] = '';
        break;

    case 'CN':
        $_SESSION['welcome'] = '歡迎';
        $_SESSION['home'] = '主頁';
        $_SESSION['about_us'] = '关于';
        $_SESSION['gallery'] = '画廊';
        $_SESSION['design_forum'] = '设计论坛';
        $_SESSION['contact'] = '联系我们';
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
        $_SESSION['our_mission'] = '使命宣言';
        $_SESSION['mission_content'] = '我们相信，在这个世界上没有什么存在本身。我们共存彼此和我们是相互依赖上彼此。这造成一个更美好，并有助于颜色的世界。良好的设计是不够;一个伟大的产品是一个就能卖自己。我们认为，销售的设计是最相关，并呼吁消费者。。。';
        $_SESSION['our_story'] = '我们的故事';
        $_SESSION['story_content'] = '恩碧亚设计公司(Empyrean Design)成立于1992年由郑杰明先生。从艺术中新加坡拉萨尔学院已经毕业;主修室内设计和较小的产品设计和美术，他也是一位自学成才的建筑设计师是拥有多年相关领域的经验和专业知识。他热衷于设计，艺术和音乐。。。';
        $_SESSION['copyright'] = '';
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
        $_SESSION['our_mission'] = 'Our Mission';
        $_SESSION['mission_content'] = 'It is our belief that nothing exists by itself in this world. We co-exist with one another and we are interdependent on one another. This creates greater dimension and contributes colours to the earth. Good designs are not good enough; a great product is one that will be able to sell itself. We believe that the design that sells is the design that is most relevant and appealing to the consumer...';
        $_SESSION['our_story'] = 'Our Story';
        $_SESSION['story_content'] = 'Empyrean Design was founded in 1992 by Eric Haywood Chang. Having graduated from LaSalle College of the Arts in Singapore; majoring in Interior Designing and minor in Product Designing and Fine Arts, he is a self-taught architect that possesses many years of experience and expertise in the related field. He is passionate about design, arts, and music...';
        $_SESSION['copyright'] = 'Copyright &copy; 2015 Empyrean Design. All rights reserved.';
        break;
}