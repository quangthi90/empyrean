<?php
if (isset($_COOKIE['language'])) {
    $code = $_COOKIE['language'];
} else {
    $code = 'EN';
}

switch ($code) {
    case 'VI':
        $_SESSION['welcome'] = 'Chào mừng';
        $_SESSION['home'] = 'Trang chủ';
        $_SESSION['about_us'] = 'Về chúng tôi';
        $_SESSION['gallery'] = 'Bộ sưu tập';
        $_SESSION['design_forum'] = 'Diễn đàn thiết kế';
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

        $_SESSION['our_mission'] = 'Sứ mệnh của chúng tôi';
        $_SESSION['mission_content'] = 'Niềm tin của chúng tôi là không thứ gì có thể tồn tại độc lập trên thế giới này. Chúng ta tồn tại cùng nhau và hỗ trợ nhau phát triển, điều này giúp thế giới trở nên muôn màu muôn vẻ, rực rỡ hơn. Một sản phẩm tuyệt vời không chỉ được thiết kế đẹp, nó còn phải .... ';
        $_SESSION['our_story'] = 'Lịch sử của chúng tôi';
        $_SESSION['story_content'] = 'Empyrean Design được thành lập vào năm 1992 bởi Eric Haywood Chang. Sau khi tốt nghiệp trường đại học mỹ thuật LaSalle tại Singapo, ngành thiết kế nội thất và chuyên ngành thiết kế sản phẩm và mỹ thuật. Ông là một kiến trúc sư có nhiều năm kinh nghiệm trong lĩnh vực thiết kế. Ông đam mê thiết kế, nghệ thuật và âm nhạc...';
        $_SESSION['copyright'] = 'Copyright &copy; 2015 Empyrean Design. Tất cả những quyền được bảo lưu.';

        $_SESSION['about_our_mission'] = '<p> Niềm tin của chúng tôi là không thứ gì có thể tồn tại độc lập trên thế giới này. Chúng ta tồn tại cùng nhau và hỗ trợ nhau phát triển, điều này giúp thế giới trở nên muôn màu muôn vẻ, rực rỡ hơn. Một sản phẩm tuyệt vời không chỉ được thiết kế đẹp, nó còn phải có thể bán được. Chúng tôi tin rằng việc thiết kế có thể đem bán là thiết kế có đa năng nhất và hấp dẫn cho người tiêu dùng, ngoài khía cạnh thẩm mỹ. Chúng tôi đang ở phía trước của các xu hướng thiết kế, và trong thực tế, chúng ta dám tạo ra sự khác biệt trong quá trình tư duy. Chúng tôi rất quan trọng trong khái niệm thiết kế, chưa có khả năng cung cấp các giải pháp về lâu dài. Chúng tôi có biết làm thế nào trong việc tích hợp các thành phần và các vấn đề mà sẽ cung cấp các giải pháp toàn diện, thiết thực và kinh tế trong điều kiện hoạt động của nguồn nhân lực, chi phí vận hành và lợi nhuận. Một trong những mối quan tâm chính của chúng tôi là cung cấp một thiết kế xuất sắc mà còn trong việc bảo tồn các nguồn tài nguyên khách hàng. </ p> <p class = "center"> <strong> - Chúng ta dám đối mặt với những vấn đề tiêu cực, vì chúng ta sẽ có những giải pháp tích cực để khắc phục chúng. - <br> Trích dẫn Haywood Change của Eric </strong> </ p> <p> Công ty chúng tôi tin tưởng trong việc đóng góp cho xã hội và cho thế giới. Chúng tôi đang tích cực giúp đỡ các sinh viên trên toàn thế giới trong việc chia sẻ các thiết kế và các lời phê bình. Ngoài ra, chúng tôi đã thiết lập một diễn đàn thiết kế để tạo thuận lợi cho chức năng này. Chúng tôi muốn giúp các nhà lãnh đạo trẻ tương lai của chúng tôi thiết kế để ước mơ, khám phá, và ở lại đam mê trong những gì họ tin tưởng và yêu thương làm. <br> Trong việc hỗ trợ các ngành công nghiệp âm nhạc, chúng tôi cung cấp cho khách hàng lĩnh vực cạnh tranh chi phí cho các nghệ sĩ và có liên quan đặc biệt trong môi trường âm thanh xây dựng lên. <br> Chúng tôi cũng tham gia vào các chương trình cho thế giới thứ ba. </ p> <p class = "center"> Điều này gắn chặt với tầm nhìn của chúng tôi: <strong> Định hình tương lai chúng ta hôm nay </strong> </ p> <p> Chúng tôi đang định hình tương lai của chúng tôi bằng cách đầu tư và ảnh hưởng đến những người khác trong doanh nghiệp.<br> Dám ước mơ, biến những giấc mơ biến thành hiện thực. <br> Từ bản vẽ cho các tòa nhà, xây dựng một tương lai tốt đẹp. <br> Chúng tôi luôn tự tin bởi vì những khách hàng của chúng tôi tin tưởng vào giấc mơ chúng tôi. </ p>';
        $_SESSION['about_our_story'] = '<p> Empyrean Design được thành lập vào năm 1992 bởi Eric Haywood Chang. Sau khi tốt nghiệp trường đại học mỹ thuật LaSalle tại Singapo, ngành thiết kế nội thất và chuyên ngành thiết kế sản phẩm và mỹ thuật. Ông là một kiến trúc sư có nhiều năm kinh nghiệm trong lĩnh vực thiết kế. Ông đam mê thiết kế, nghệ thuật và âm nhạc. </p> <p> Từ ngày đầu tiên, tập trung chính của chúng tôi đã được trong thiết kế nội thất. Chúng tôi đã hoàn thành nhiều dự án, từ dân cư cho các khách hàng của công ty. Sức mạnh cốt lõi của chúng tôi luôn luôn là trong lĩnh vực xác định hình ảnh của khách hàng và nhu cầu của họ trong suốt quá trình thiết kế của chúng tôi. Chúng tôi có khả năng phát triển hình ảnh của công ty mới và hiện tại cho phần khởi động của công ty mới cũng như cho các công ty đang tìm kiếm vào việc thay đổi hình ảnh công ty của họ. Khách hàng của chúng tôi từ bán lẻ, các công ty doanh nghiệp, khách sạn, cho các cơ quan chính phủ. Chúng tôi đi qua toàn bộ quá trình thiết kế với khách hàng của chúng tôi từ mặt đất bằng không để hoàn thành của từng dự án. Chúng tôi làm việc chặt chẽ với đội ngũ chuyên dụng của chúng ta về kiến trúc, thiết kế, kỹ sư chuyên nghiệp, và các nhà thầu dưới cánh của chúng tôi. Chúng tôi có thể tùy chỉnh phạm vi của chúng tôi làm việc theo yêu cầu của khách hàng từ giai đoạn thiết kế, quản lý dự án, giai đoạn xây dựng và bàn giao dự án cho khách hàng. </ p> <p> Kể từ năm 2004, do các kết nối mạnh mẽ của chúng tôi ở Trung Quốc, chúng tôi đã phân nhánh vào kiến trúc từ thiết kế nội thất. Chúng tôi đã có sự hợp tác hiệu quả với nhiều đối tác Trung Quốc của chúng tôi tại các tỉnh của Trung Quốc và các thành phố khác nhau. Tuy nhiên, tâm điểm chính của chúng tôi đã được ở tỉnh Hải Nam do nó có những con số cao nhất của khách sạn và khu nghỉ dưỡng; các "Hawaii của Trung Quốc" như nhiều người đã đặt tên. Gần đây, chúng tôi đã khảo sát các trang web với mục tiêu giả lập cho kiểm tra kỹ lưỡng hơn và giới thiệu các trang web là tối ưu cho khách hàng sử dụng của chúng tôi. </ p> <p> Trong năm 2008, chúng tôi mạo hiểm vào chuyên môn của môi trường âm thanh cho dù đó là để hỗ trợ các nghệ sĩ hay kỹ sư âm thanh trong khu vực. Sau đó, chúng tôi liên quan đến mình trong việc thiết kế và xây dựng các môi trường khác nhau, từ không gian trung tâm casino, phạm vi bắn trong nhà, giảng đường, thu âm studio, phòng phát thanh truyền hình, nhà hát, vv </ p> <p> Trong năm 2014, chúng tôi bước vào thị trường Myanmar. Chúng tôi đang từ từ đà trong việc thiết kế & xây dựng các ngành công nghiệp. </ p>';

        $_SESSION['lblFullName']  = 'Tên đầy đủ';
        $_SESSION['lblEmail']  = 'EMAIL';
        $_SESSION['lblSchool']  = 'Tên trường';
        $_SESSION['lblFaculty']  = 'Khoa';
        $_SESSION['lblYearStarted']  = 'Năm bắt đầu';
        $_SESSION['lblAspiration']  = "Khát vọng hiện tại hoặc tương lai của bạn ?";
        $_SESSION['lblSend']  = 'Gửi';

        $_SESSION['forumdesign_objective_label'] = "Diễn đàn thiết kế cho học sinh quốc tế";
        $_SESSION['forumdesign_objective_content'] = "<p> Mục tiêu của diễn đàn thiết kế là để giúp xây dựng sự tự tin của học sinh trong thiết kế. <br> Chúng tôi sẽ giúp họ nhìn thấy những thế giới vật lý trong một lĩnh vực mới để có thiết kế ý thức hơn trong việc giải quyết vấn đề. <br> Họ sẽ tìm hiểu thông qua các quan điểm vĩ mô và vi mô của các thành phần, do đó mở rộng quan điểm của họ về nhận thức trong họ khái niệm thiết kế. </p> <p class = 'center'> <strong> - Khi người ta không thể nhìn thấy xa hơn kích thước của cuộc sống, không có gì có lợi nhuận có thể được tạo ra. - <br> Trích dẫn Haywood Change của Eric</strong> </p> <p> Khi đăng ký với chúng tôi, học sinh từ bất kỳ giảng viên thiết kế có thể gửi tác phẩm của mình cho các nhà phê bình thiết kế hoặc để thảo luận <br> Trong trở lại, chúng tôi sẽ đăng lên. các công trình (sau khi có sự chấp thuận của cá nhân học sinh) để chia sẻ để nhiều có thể học và hưởng lợi từ nó. </p>";
        
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

        $_SESSION['copyright'] = 'Copyright &copy; 2015 Empyrean Design. All rights reserved.';
        $_SESSION['about_our_mission'] = '<p>
                 Kami mempercayai bahwa tidak ada sesuatu yang terbentuk dengan sendirinya didunia ini. Kita berkerja berdampingan dan saling bergantung satu dan lainnya. Hal ini menciptakan dimensi yang lebih besar dan memberikan corak pada dunia. Disain yang bagus tidak cukup, produk yang luar biasa akan memiliki nilai jual tersendiri. Kami mempercayai bahwa disamping memiliki aspek estetis,  disain yang menjual adalah disain yang paling relevan dan menarik pembeli.  Kami membuat disain melebihi tren dan disain kami menjadi pencipta tren tersendiri  karena kami berani menciptakan dari pola pikir yang berbeda. Kami sangat memperhatikan disain konsep, namun tetap memberikan solusi untuk jangka panjang. Kami tahu bagaimana cara mengintegrasikan komponen dan hal hal yang akan memberikan solusi yang lengkap, praktis dan ekonomis dalam hal operational mulai dari  tenaga kerja, biaya operasional dan keuntungan. Satu Hal yang menjadi perhatian kami adalah menyediakan disain terbaik  namun tetap mengacupada sumber dari klien kami.
                 </p>
                 <p class="center">
                  <strong> - Kami siap menghadapi kesulitan  karena kami mempunyai solusinya - <br> <div style="text-align: right;">Oleh ERIC HAYWOOD CHANG</div>
                  </strong>
                 </p>
                 <p>
                    Perusahaan kami berkeyakinan untuk memberikan kembali kepada masyarakat dan dunia.             Kami secara aktif membantu Mahasiswa seluruh dunia dengan membagikan disain dan idea. Lebih dari itu kami membentuk forum disain untuk menunjang fungsi tersebut. Kami berharap untuk membantu pemimpin perancang muda masa depan untuk meraih mimpi,  mengembangkan   dan tetap bersemangat dalam keinginan mereka dan yang mereka suka lakukan. Dalam menunjang industri musik, kami menyediakan biaya yang kompetitif untuk musisi dan klien yang sejenis dalam membangun ruang music.
                 </p>
                 <p class="center">
                 Kami juga berpartisipasi  dalam program membantu negara berkembang. Hal ini sesuai  dengan visi kami <strong>Saat ini membentuk masa depan.</strong>
                 </p>
                 <p>
                    Saat ini kami membentuk masa depan dengan berinvestasi dan memberikan dampak kepada  lain pihak.<br>
                    Berani bermimpi dan mewujudkan mimpi menjadi kenyataan. Dari meracangkan lalu membentuk, dan membangun masa depan yang lebih baik. Kami menjadi besar saat ini karena klien kami mempercayai mimpi kami. 
                 </p>';
        $_SESSION['about_our_story'] = '<p>
                 EMPYREAN DESIGN  didirikan oleh Eric Haywood Chang pada tahun 1992. Menyelesaikan pendidikan  di LaSalle College of the Arts di Singapore dalam bidang Interior Designing and minor in Product Designing and Fine Arts. Eric Haywood Chang adalah arsitek yang sangat handal dan memiliki pengalaman beberapa tahun dan ahli dalam bidangnya. Dia menguasai  bidang disain, seni dan musik.
                 </p>
                 <p>
                  Pada awalnya, fokus utama kami adalah Disain Interior. Kami telah menyelesaikan beberapa projek, dari Proyek Perumahan sampai dengan Klien Perusahaan.  Kemampuan dan keahlian kami adalah pada bagian mengenali gambaran dari sebuah perusahaan dan kebutuhannya pada saat proses membuat disain. Kami mampu mengembangkan gambaran baru dan lama dari perusahaan untuk dibentuk menjadi gambaran terbaru untuk perusahaan tersebut  atau perusahaan yang akan mengganti gambaran dari perusahaan. Jangkauan klien kami dari Retail, Beberapa Perusahaan, Bidang Jasa  sampai Lembaga Pemerintahan. Kami bersama sama dengan klien membicarakan keseluruhan projek dari awal sampai terselesaikannya setiap projek. Kami berkerjasama dengan  team yang berdedikasi  yang terdiri dari Arsitek, Disainer, Profesional Insinyur dan Kontraktor. Kami dapat menyesuaikan lingkup pekerjaan sesuai dengan permintaan klien dari tahap Disain, Managemen Projek, Tahap Konstruksi, dan Penyelesaian Projek tersebut kepada klien.
                 </p>
                 <p>
                    Sejak tahun 2004, karena hubungan bisnis yang erat dengan China, kami dapat mengembangkan bisnis dari Interior Disain berkembang ke bidang Arsitektur. Kami mendapatkan kerjasama yang menguntungkan dengan rekan kerja di beberapa kota  dan propensi yang berbeda di China. Namun fokus bisnis kami    di Provinsi Hainan karena banyaknya Hotel dan Resort, sehingga telah dinamakan                        “Hawaii of China“. Baru baru ini kami telah melakukan peninjauan dengan menggunakan Drones untuk inspeksi dan rekomendasi area yang potensial bagi klien kami.
                 </p>
                 <p>
                 Tahun 2008, Kami  mulai bergerak  pada bidang  specialisasi ruang music untuk mendukung  musisi atau  sound engineers di Asia. Setelah itu, kami berkembang dengan  membuat disain  dan membangun beberapa lingkungan  yang berbeda dari Gedung Casino, Ruang Tembak , Ruang  Kuliah, Studio Rekaman, Ruang Siaran, Home Theater, dll.
                 </p>
                 <p>
                 Tahun 2014, Kami berkembang ke market Myanmar, Perlahan kami  berhasil  dalam bidang Industri Disain dan Konstruksi. 
                 </p>';
        
        $_SESSION['lblFullName']  = 'FULL NAME';
        $_SESSION['lblEmail']  = 'EMAIL';
        $_SESSION['lblSchool']  = 'SCHOOL';
        $_SESSION['lblFaculty']  = 'FACULTY';
        $_SESSION['lblYearStarted']  = 'YEAR STARTED';
        $_SESSION['lblAspiration']  = "WHAT's YOUR CURRENT/FUTURE ASPIRATION";
        $_SESSION['lblSend']  = 'Send';

        $_SESSION['forumdesign_objective_label'] = "International Students' Design Forum";
        $_SESSION['forumdesign_objective_content'] = "<p> The objectives of this design forum is to help build students' confidence in design. <br> We will help them in seeing the physical world in a new realm in order to be more design conscious in problem solving.<br> They will learn through the macro and micro views of components, hence enlarging their perspective in perception in their design concept. </p> <p class='center'> <strong> - When one cannot see beyond the dimensions of life, nothing profitable can be created. - <br> Eric's Haywood Chang's quote </strong> </p> <p> Upon registering with us, students from any design faculty may submit their work for design critics or for discussion.<br> In returned, we will post up these works (after having approval from individual student) for sharing so that more can learn and benefit from it. </p>";
        $_SESSION['forumdesign_contact_label'] = "International Design Student Contact";
        $_SESSION['forumdesign_contact_info'] = "We would like to know you better, kindly help fill in the as below and all information will be confidential.";

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

        $_SESSION['copyright'] = 'Copyright &copy; 2015 Empyrean Design. All rights reserved.';
        $_SESSION['about_our_mission'] = '<p>
                 私たちは、何もこの世界では、それ自体によって形成されていないと信じています。私たちは並んで動作し、互いに相互に依存しています。これは、より大きな寸法を作成し、世界にスタイルを与えます。グッドデザインは、優れた製品は、独自のセールスポイントを持っていますが、十分ではありません。我々はデザインを販売している美的側面を有する以外に最も関連の設計で、バイヤーを引き付けると考えています。我々は、デザインのトレンドを作成し、私たちは別の考え方から作成する勇気ので、デザインは私たち自身になるトレンドを超えました。私たちは、デザインコンセプトについて非常に心配していたが、それでも長期的にソリューションを提供します。私たちは、コンポーネントやマンパワー、運用コストと利益の運用面で実用的かつ経済的な完全なソリューションを提供します物事を統合する方法を知っています。私たちに関係することの一つは、最適な設計を提供することですが、まだ私たちのクライアントのソースを指します。
                 </p>
                 <p class="center">
                  <strong> - 我々は解決策を持っているので、困難に直面する準備が整っています - <br> <div style="text-align: right;"> エリック・ヘイウッドチャン </div>
                  </strong>
                 </p>
                 <p>
                    当社は、地域社会や世界に恩返しにと考えています。私たちは積極的に世界中の学生がデザインやアイデアを共有するのに役立ちます。また、我々はこれらの機能をサポートするように設計されたフォーラムを設立しました。私たちは、夢を達成するために若いデザイナー将来のリーダーを助ける開発し、彼らの欲望と彼らがやりたいにやる気滞在したいと考えています。音響環境で芸人と同様のクライアントが構築するために音楽業界を支援するために、我々は競争力のあるコストを提供します。また、発展途上国を支援するためのプログラムに参加しています。これは、現在、未来を形作ってあり、当社のビジョンと一致しています。
                 </p>
                 <p class="center">
                 <strong>これは、現在、未来を形作ってあり、</strong>当社のビジョンと一致しています。
                 </p>
                 <p>
                    我々は投資し、相手に効果を与えることによって、未来を形作ります。<br>
                    夢を叶う夢に。描いたものから、その後に形成され、より良い未来を築きます。 <br>
                    私たちのクライアントは私たちの夢を信じているので、我々は現時点では素晴らしいとされています。
                 </p>';
        $_SESSION['about_our_story'] = '<p>
                 建築家チャンは、非常に信頼性が高いと、数年の経験を持ち、それぞれの分野の専門家です。彼はデザイン、アート、音楽のフィールドを制御します。
                 </p>
                 <p>
                 初めに、私たちの主な焦点は、インテリアデザインです。私たちは、クライアント企業への住宅プロジェクトから、いくつかのプロジェクトを完了しました。機能と当社の専門知識は、設計をするとき、会社の絵とその必要性を認識する部分です。私たちは、会社の概要を置換する会社や企業の最新の画像を形成するための会社の新しい、古い絵を開発することができます。当社のクライアントは、小売から行政機関へのいくつかの企業、サービスの範囲。
                 </p>
                 <p>
                  一緒にクライアントと私たちは最初から、各プロジェクトの完了にプロジェクト全体を議論します。私たちは建築家、デザイナー、エンジニアや請負業者のプロフェッショナルからなる専門チームで作業しています。我々はステージの設計、プロジェクト管理、構築フェーズおよびプロジェクト完了からクライアントへのクライアントの要求に応じて、作業範囲を調整することができます。
                 </p>
                 <p>
                    2004年以来、中国との強固な関係のために、我々はアーキテクチャにインテリアデザインのビジネスを成長させることができます。我々はいくつかの町での同僚との良好な協力を得ています。大規模なホテルやリゾートの海南省での事業の焦点は、それは「中国のハワイ」と呼ばれています。最近、我々は検査や、お客様の潜在的な分野の推薦のための無人機の使用の見直しを行いました。
                 </p>
                 <p>
                 2008年には、移動/地域のアーティストやサウンドエンジニアをサポートする音響効果や防音空間/特殊な環境をつくることができました。その後、我々はデザインを開発し、カジノビル、部屋でルームシュートから、いくつかの異なる環境を確立するなどホール、レコーディングスタジオ、プレスルーム、ホームシアターを、講義しました。
                 </p>
                 <p>
                 2014年、私たちそれから工業デザインと建設に成功し、市場ミャンマーに入りました。
                 </p>';
        
        $_SESSION['lblFullName']  = 'FULL NAME';
        $_SESSION['lblEmail']  = 'EMAIL';
        $_SESSION['lblSchool']  = 'SCHOOL';
        $_SESSION['lblFaculty']  = 'FACULTY';
        $_SESSION['lblYearStarted']  = 'YEAR STARTED';
        $_SESSION['lblAspiration']  = "WHAT's YOUR CURRENT/FUTURE ASPIRATION";
        $_SESSION['lblSend']  = 'Send';

        $_SESSION['forumdesign_objective_label'] = "International Students' Design Forum";
        $_SESSION['forumdesign_objective_content'] = "<p> The objectives of this design forum is to help build students' confidence in design. <br> We will help them in seeing the physical world in a new realm in order to be more design conscious in problem solving.<br> They will learn through the macro and micro views of components, hence enlarging their perspective in perception in their design concept. </p> <p class='center'> <strong> - When one cannot see beyond the dimensions of life, nothing profitable can be created. - <br> Eric's Haywood Chang's quote </strong> </p> <p> Upon registering with us, students from any design faculty may submit their work for design critics or for discussion.<br> In returned, we will post up these works (after having approval from individual student) for sharing so that more can learn and benefit from it. </p>";
        $_SESSION['forumdesign_contact_label'] = "International Design Student Contact";
        $_SESSION['forumdesign_contact_info'] = "We would like to know you better, kindly help fill in the as below and all information will be confidential.";

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

        $_SESSION['copyright'] = 'Copyright &copy; 2015 Empyrean Design. All rights reserved.';
        $_SESSION['about_our_mission'] = '<p>
                 그것은 아무것도이 세상에서 그 자체로 존재하지 않음을 우리의 믿음이다. 우리는 공존 서로 우리는 서로에 상호 의존적이다. 이것은 더 큰 치수를 작성하고 땅에 색상을 기여한다. 좋은 디자인은 충분하지 않습니다; 좋은 제품 자체를 판매 할 수있을 것입니다. 우리가 판매하는 디자인은 미적 측면 외에, 가장 적절하고 소비자에게 호소 인 디자인이라고 생각합니다. 우리는 앞으로 디자인 트렌드의, 그리고 우리가 우리의 사고 과정에서 다른 감히 때문에 사실, 추세 세터. 우리는 아직 긴 용어 솔루션을 제공 할 수있게 디자인 개념에서 매우 중요하다. 우리는 어떻게 인적 자원, 운영 비용 및 이익의 운영 측면에서 포괄적 인 실용적이고 경제적 인 솔루션을 제공 할 것입니다 구성 요소 및 문제를 통합하는 노하우를 가지고있다. 우리의 주요 관심사 중 하나는 우수한 설계를 제공하지만, 또한 고객 자원의 보존에서뿐이다.
                 </p>
                 <p class="center">
                  <strong> - 우리가 그들을 극복하는 긍정적 인 솔루션을해야합니다 위해 우리는 부정적인 문제에 직면 감히 - <br> <div style="text-align: right;">Eric\'s Haywood Chang\'s 말하다</div>
                  </strong>
                 </p>
                 <p>
                    우리 회사는 사회와 세계에 환원 믿는다. 우리는 적극적으로 디자인과 비평가 공유에 전 세계의 학생들을 돕고있다. 또, 설정이 기능을 용이하게 디자인 포럼이있다. 우리는 우리의 미래의 젊은 디자인 지도자의 꿈에 도움 탐구, 그들이 믿고 일을 사랑하는 것에 열정을 유지하고 싶습니다.<br>
                    음악 산업을 지원하고, 우리는 구축 음향 환경에 특별한 예술가에 대한 비용 경쟁력과 관련 분야의 클라이언트를 제공합니다.<br>
                    우리는 또한이 제 3 세계의 프로그램을 공급에 참여하고 있습니다.
                 </p>
                 <p class="center">
                 이것은 우리의 비전에 묶어: <strong>우리의 미래를 오늘 쉐이핑</strong>
                 </p>
                 <p>
                    우리 투자 지금은 다른 사람에 영향을주지하여 우리의 미래를 형성하고 있습니다.<br>
                    꿈을 현실로 전환, 꿈을 감히.<br>
                    더 나은 내일을 구축 건물 도면에서.<br>
                    우리는 우리의 고객이 우리의 꿈을 믿고 있기 때문에 우리는 지금 누구입니다.
                 </p>';
        $_SESSION['about_our_story'] = '<p>
                 Empyrean Design 은 Eric Haywood Chang 에 의해 1992 년에 설립되었다.싱가포르 예술의 LaSalle 대학을 졸업 한; 인테리어 디자인 전공 및 제품 디자인 및 미술에 작은, 그는 관련 분야에서 경험과 전문 지식의 많은 년을 가지고 독학으로 건축가입니다. 그는 디자인, 예술, 음악에 대한 열정이다.
                 </p>
                 <p>
                  첫날부터, 우리의 주요 초점은 내부 설계되었습니다. 우리는 주거에서 기업 고객에 이르기까지, 많은 프로젝트를 완료했습니다. 핵심 강도가 항상 설계 과정에서 고객의 화상과 자신의 요구를 식별하는 영역에 있었다. 우리는 새로운 회사 신생뿐만 아니라 기업 이미지 변화에 찾고있는 기업에 대한 신규 및 현재 기업의 이미지를 개발 할 수있다. 우리의 클라이언트는 정부 기관에 소매, 기업 회사, 환대, 이르기까지 다양합니다. 우리는 각 프로젝트의 완료에 그라운드 제로에서 고객과 전체 디자인 프로세스를 통해 도보. 우리는 우리의 날개 아래 아키텍처, 디자이너, 전문 엔지니어 및 계약자의 전담 팀과 긴밀하게 작동합니다. 우리는 설계 단계, 프로젝트 관리, 건설 단계에서 고객의 요구 사항에 따라 우리의 클라이언트 프로젝트의 넘길 일이 우리의 범위를 사용자 정의 할 수 있습니다.
                 </p>
                 <p>
                    2004 년부터 중국에있는 우리의 강한 연결로 인해, 우리는 내부 설계에서 건축으로 분기있다. 우리는 다른 도시와 중국의 지방에있는 우리의 중국 대응의 많은과 유익한 협력이 있었다. 그러나, 우리의 주요 초점은 그것 때문에 호텔과 리조트의 가장 높은 숫자를 데 하이난 지방에있다; 많은으로 "중국의 하와이가"라는있다. 최근에, 우리는보다 철저한 검사를 위해 드론과 사이트를 조사하고 우리의 고객 사용을위한 최적의 사이트를 추천했습니다.
                 </p>
                 <p>
                 2008 년, 우리는 지역 예​​술가 또는 사운드 엔지니어를 지원하기 위해 할 수 그것은 여부 음향 환경을 전문으로 모험. 그 후, 우리는 카지노 게임 공간, 실내 사격 범위, 강​​의실, 녹음 스튜디오, 방송 객실, 홈 씨어터 등에서, 서로 다른 환경의 설계 및 건물까지 자신을 포함
                 </p>
                 <p>
                 2014 년, 우리는 미얀마 시장에 진출. 우리는 천천히 설계 및 건설 산업에 힘을 얻고있다.
                 </p>';
        
        $_SESSION['lblFullName']  = 'FULL NAME';
        $_SESSION['lblEmail']  = 'EMAIL';
        $_SESSION['lblSchool']  = 'SCHOOL';
        $_SESSION['lblFaculty']  = 'FACULTY';
        $_SESSION['lblYearStarted']  = 'YEAR STARTED';
        $_SESSION['lblAspiration']  = "WHAT's YOUR CURRENT/FUTURE ASPIRATION";
        $_SESSION['lblSend']  = 'Send';

        $_SESSION['forumdesign_objective_label'] = "International Students' Design Forum";
        $_SESSION['forumdesign_objective_content'] = "<p> The objectives of this design forum is to help build students' confidence in design. <br> We will help them in seeing the physical world in a new realm in order to be more design conscious in problem solving.<br> They will learn through the macro and micro views of components, hence enlarging their perspective in perception in their design concept. </p> <p class='center'> <strong> - When one cannot see beyond the dimensions of life, nothing profitable can be created. - <br> Eric's Haywood Chang's quote </strong> </p> <p> Upon registering with us, students from any design faculty may submit their work for design critics or for discussion.<br> In returned, we will post up these works (after having approval from individual student) for sharing so that more can learn and benefit from it. </p>";
        $_SESSION['forumdesign_contact_label'] = "International Design Student Contact";
        $_SESSION['forumdesign_contact_info'] = "We would like to know you better, kindly help fill in the as below and all information will be confidential.";

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

        $_SESSION['copyright'] = 'Copyright &copy; 2015 Empyrean Design. All rights reserved.';
        $_SESSION['about_our_mission'] = '<p>
                 ေလာကတြင္ မည္သည့္အရာမွ သီးျခားရပ္တည္ နိုင္စြမ္းမရွိ ဟူေသာစကားကို ကြၽန္ုပ္တို႔ ယံုၾကည္ပါသည္။ ကြၽနု္ပ္တို႔သည္ အတူတကြ ပူးေပါင္း ေနထုိင္ျပီး တစ္ဦးႏွင့္ တစ္ဦး အျပန္အလွန္ အမွီသဟဲ ျပဳေနၾကရပါသည္။ ယင္းသို႔ အတူတကြ ပူးေပါင္းေနထုိင္ျခင္းသည္ ကမာၻေျမၾကီးကို ပိုမိုသာယာလွပျပီး အဓိပၸာယ္ ရွိေစသည္။ ပစၥည္းေကာင္းတို႔မည္သည္မွာ တျခားမည့္သည့္ အတြဲအစပ္မွ မပါပဲ သူ႔အတုိင္းကိုပင္ ေရာင္းခ်နိုင္စြမ္း ရွိၾကသည္။ ေရာင္းခ်၍ရေသာ ဒီဇိုင္းမ်ားသည္ သံုးစြဲသူမ်ား အထူးနွစ္သက္ သေဘာက် နွစ္ခ်ိဳက္ျပီး ၀ယ္သူ၏ လိုအပ္ခ်က္မ်ားနွင့္ ကိုက္ညီ၍ သာ ေရာင္းခ်နုိင္ျခင္းျဖစ္သည္ ဟုလည္း ကြၽနု္ပ္တို႔ ယံုၾကည္ပါသည္။ ကြၽႏု္ပ္တို႔၏ ဒီဇိုင္းမ်ားသည္ အျခားေသာ ဒီဇိုင္းမ်ားနွင့္မတူ ထူးျခားသည္ကို ကြၽန္ပ္တို႔ အာမခံနိုင္ပါသည္။ကြၽနု္ပ္တို႔သည္ လမ္းေၾကာင္းသစ္ တီထြင္ၾကသူမ်ားျဖစ္သည္။ အဘယ့္ေၾကာင့္ဆိုေသာ္ ကြၽနု္ပ္တို႔သည္ အမ်ားနွင့္ မတူ တမူထူးျခားေသာ အေတြး အေခၚ သစ္မ်ားႏွင့္ လုပ္ငန္းစဥ္မ်ားကို ဖန္တီးလုိေသာေၾကာင့္ ျဖစ္သည္။ ကြၽနု္ပ္တို႔သည္ ဒီဇိုင္း အေတြးအေခၚ အယူအဆ အပိုင္းတြင္ အလြန္ပင္ တီထြင္ဆန္းသစ္နုိင္စြမ္း ရွိသည့္အျပင္ ေရရွည္အတြက္ အက်ိဳးဆက္မ်ားကိုပါ အျမဲ ထည့္သြင္းစဥ္းစား တြက္ခ်က္ေလ့ရွိပါသည္။ ကြၽႏု္ပ္တို႔သည္ လူ႔စြမ္းအား အရင္းအျမစ္ စီမံခန္႔ခြဲျခင္း၊ လုပ္ငန္းစဥ္ အသံုးစားရိတ္နွင့္ အျမတ္ေငြမ်ား စီမံခန္႔ခြဲျခင္း နွင့္ပတ္သတ္ေသာ ကိစၥရပ္မ်ားတြင္ လက္ေတြ႔က်ေသာ၊ လူအမ်ားနားလည္လြယ္ျပီး စီးပြားေရးအရ တြက္ေခ်ကိုက္ေသာ ရလာဒ္ေကာင္းမ်ား ထြက္ေပၚလာေစရန္ ေဆာင္ရြက္နိုင္မည့္ နည္းပညာမ်ားကို ပိုင္ဆိုင္ထားပါသည္။ ကြၽနု္ပ္တို႔၏ ဒီဇိုင္းမ်ားကို အားေပး၀ယ္ယူသူ မိတ္ေဆြမ်ားအား ျပီးျပည့္စံုမႈကို ေပးစြမ္းရန္နွင့္ မိတ္ေဆြမ်ား၏ ကုန္က်စားရိတ္မ်ားကို အက်ိဳးထိေရာက္ေစရန္အတြက္ ကြၽနု္ပ္တို႔ရည္ရြယ္ပါသည္။
                 </p>
                 <p class="center">
                  <strong style="font-size: 15px;"> ကြၽန္ေတာ္သည္ ေကာင္းေသာေျပာင္းလဲျခင္းမ်ားကို ဖန္တီးေပးသည့္ မည္သည့္ အခက္အခဲမ်ား၊ ျပသနာမ်ားကို မဆို ရင္ဆိုင္ရန္ ဆႏ ၵရွိပါသည္။<br> - အဲရစ်ရဲ့ကိုးကား -
                  </strong>
                 </p>
                 <p>
                    ကြၽနု္ပ္တို႔ ကုမၸဏီသည္ ကမာၻေျမၾကီးနွင့္ လူ႔အဖြဲ႔အစည္း တရပ္လံုးအား ျပန္လည္ ေကာင္းက်ိဳးျပဳရန္ ရည္ရြယ္ေဆာင္ရြက္ပါသည္။ ကြၽန္ုပ္တို႕၏ ဆန္းသစ္တီထြင္မႈမ်ားနွင့္ ဖန္တီးမႈလက္ရာမ်ားကို ကမာၻတ၀ွမ္းရွိ ေက်ာင္းသားလူငယ္မ်ားနွင့္ ေ၀မွ်ရန္လည္း ကူညီေဆာင္ရြက္ ေပးလ်က္ရွိပါသည္။ ထို႔အျပင္ ကြၽန္ုပ္တို႔သည္ အထက္ေဖာ္ျပပါ တာ၀န္ကို အာျဖည့္ေပးရန္အတြက္ ဒီဇိုင္းေဆြးေႏြးခန္း ကိုလည္း တည္ေထာင္ထား ရွိျပီး ျဖစ္ပါသည္။ ကြၽနု္ပ္တို႔သည္ အနာဂတ္ ဒီဇိုင္းခ်စ္သူ လူငယ္ ေခါင္းေဆာင္မ်ားအား ရည္ရြယ္ခ်က္ေကာင္းမ်ား ထားရွိတတ္ေစရန္၊ စူးစမ္း ေလ့လာ ရွာေဖြတတ္ေစရန္၊ ဒီဇိုင္းပညာကို ခ်စ္ခင္ျမတ္နိုး တတ္ေစရန္နွင့္ မိမိတို႔ ၀ါသနာပါေသာ အတတ္ပညာမ်ားကို ကိုယ္စြမ္း ဥဏ္စြမ္း ရွိသေရြ႕ ယံုၾကည္ခ်က္ ခိုင္မာစြာ ေဖာ္ေဆာင္နိုင္ ေစရန္ အတြက္ ဘက္ေပါင္းစံုမွ ကူညီေဆာင္ရြက္ေပးရန္ ဆႏၵရွိ ပါသည္။ <br>
                    ကြၽနု္ပ္တို႔ ကုမၸဏီမွ ေတးဂီတလုပ္ငန္းမ်ားနွင့္ ပတ္သတ္၍ ကူညီေဆာင္ရြက္ေပးနိုင္သည္မွာ ေတးဂီတ ပညာရွင္မ်ားႏွင့္ ထုတ္လုပ္သူမ်ား၊ ၄င္းတို႔နွင့္ ဆက္လက္လုပ္ကိုင္ေနသူမ်ား အတြက္ ေငြကုန္ေက်းက် အလြန္သက္သာျပီး ျငိမ့္ေညာင္း သာယာ နာေပ်ာ္ဖြယ္ေသာ ပတ္၀န္းက်င္တခုကို ဖန္တီးေပးနိုင္ပါသည္။<br>
                    ကြၽနု္ပ္တို႔သည္ တတိယ ကမာၻၾကီးကို အေကာင္းဆံုး တည္ေဆာက္ရန္အတြက္ တစ္တပ္တစ္အားပါ၀င္ ေဆာင္ရြက္လ်က္ ရွိပါသည္။
                 </p>
                 <p class="center" style="font-size: 15px;">
                 အထက္ပါ အခ်က္သည္ ကြၽနု္ပ္တို႔၏ အနာဂတ္ ေမွ်ာ္မွန္းခ်က္ ျဖစ္ေသာ <strong>"ကြၽနု္ပ္တို႔၏ အနာဂတ္ကို ထုဆစ္ရန္"</strong> ဟူေသာ အဆိုနွင့္ အလြန္ပင္ ကိုက္ညီလွပါသည္။
                 </p>
                 <p>
                    ကြၽနု္ပ္တို႔ သည္ ကြၽနု္ပ္တို႔၏ အနာဂတ္ကို ထုဆစ္ရာတြင္ အမ်ားအက်ိဳးအတြက္ကိုပါ ထည့္သြင္းစဥ္းစား ရင္းနွီး ျမႈပ္နွံပါသည္။<br>
                    စိတ္ကူးယဥ္ ေမွ်ာ္မွန္းခ်က္မ်ားကိုလည္း ျမင့္ျမင့္မားမား ထားရွိျပီး ထို စိတ္ကူးအိမ္မက္မ်ားကို လက္ေတြ႕ ျဖစ္လာေစပါသည္။<br>
                    ဒီဇိုင္းပံုမ်ားမွ ခိုင္မာေသာ အေဆာက္အဦမ်ားဆီသို ့ ထိုမွ တဆင့္ ပိုမိုေကာင္းမြန္ ေတာက္ပေသာ အနာဂတ္ကို အေရာက္ လွမ္းခ်ီ ၾကမည္ျဖစ္ပါသည္။<br>
                    ကြၽနု္ပ္တို႔၏ စိတ္ကူးယဥ္ အိမ္မက္မ်ားကို ယံုၾကည္အားေပးေသာ မိတ္ေဆြမ်ားအကူအညီျဖင့္သာ ကြၽနု္ပ္တို႔၏ ယခု ေနရာတြင္ ေရာက္ရွိ ရပ္တည္နိုင္ျခင္း ျဖစ္ပါသည္။
                 </p>';
        $_SESSION['about_our_story'] = '<p>
                ကြၽနု္ပ္တို႔၏ Empyrean Design ကုမၸဏီကို ၁၉၉၂ ခုနွစ္တြင္ Mr. Eric Haywood Chang မွ စတင္တည္ေထာင္ခဲ့ ပါသည္။ Mr. Eric သည္ Singapore နိုင္ငံ LaSalle College of the Arts မွ ဘြဲ႔ရရွိခဲ့ျပီး သူ၏ အဓိကဘာသာရပ္မ်ားမွာ အိမ္တြင္းအလွ ဆင္လုပ္ငန္းျဖစ္ျပီး အရန္ဘာသာရပ္မ်ားအျဖစ္ ကုန္ပစၥည္း ဒီဇိုင္းထြင္ျခင္းနွင့္ အျခားလက္မႈ အနုပညာမ်ား ပါ၀င္ပါသည္။ သူသည္ အေဆာက္အဦနွင့္ ပတ္သတ္ေသာ ဗိသုကာပညာကို ကိုယ္တိုင္ အပတ္တကုတ္ၾကိုစား သင္ယူခဲ့ရျပီး ၄င္းပညာျဖင့္ပင္ နွစ္ေပါင္းမ်ားစြာ လုပ္ကိုင္ခဲ့ျခင္းမွ အေတြ႔အၾကံု ဗဟုသုတမ်ားစြာ ရရွိျပီး ကြၽမ္းက်င္သူ တစ္ေယာက္ျဖစ္လာ ခဲ့ပါသည္။ သူသည္ ဂီတ၊ အႏုပညာ နွင့္ ဒီဇိုင္းဖန္တီးျခင္း အတတ္ပညာတို႔ကို အထူးနွစ္သက္ျပီး ၀ါသနာအရင္းတည္ အပတ္တကုတ္ ၾကိုစားအားထုတ္ ခဲ့ပါသည္။
                 </p>
                 <p>
                  ကုမၸဏီစတင္တည္ေထာင္စဥ္က အိမ္တြင္းအလွဆင္ လုပ္ငန္းကို အထူးျပဳ လုပ္ေဆာင္ျခင္းျဖင့္ စတင္ခဲ့ပါသည္။ ကြၽနု္ပ္တို႔ ကုမၸဏီသည္ အိမ္ယာစီမံကိန္းမ်ားမွ အစျပဳကာ နိုင္ငံတကာ ပူးေပါင္းေဆာင္ရြက္ရသည့္ တည္ေဆာက္ေရး လုပ္ငန္း စီမံကိန္းမ်ားအထိ လုပ္ကိုင္ ေဆာင္ရြက္ ေအာင္ျမင္ခဲ့ပါသည္။ ကြၽနု္ပ္တို႔၏ အဓိကအားသာခ်က္မွာ ဒီဇိုင္းဖန္တီးျခင္းျဖင့္ ကြၽနု္ပ္တို႔မိတ္ေဆြမ်ား၏ လိုအပ္ခ်က္မ်ားနွင့္ ပံုရိပ္မ်ားကို ေဖာ္ေဆာင္ ေပးနုိင္ျခင္း ျဖစ္ပါသည္။ ကြၽနု္ပ္တို႕သည္ ကုမၸဏီမ်ား အသစ္စတင္တည္ေထာင္ျခင္းနွင့္ ရွိရင္းစြဲ ကုမၸဏီမ်ား၏ နိုင္ငံတကာ အရည္အေသြးမွီ အရည္ အေသြး ျပည့္၀ေသာ ကုမၸဏီမ်ားအျဖစ္ အဆင့္ျမွင့္တင္ေရးတုိ႔ အတြက္လည္း တာ၀န္ယူ ေဆာင္ရြက္ေပးလ်က္ ရွိပါသည္။ ကြၽနု္ပ္တို႔အား ၀ယ္ယူအားေပးသူ မိတ္ေဆြမ်ားမွာ တစ္ဦးခ်င္း တစ္ေယာက္ခ်င္းအတြက္ လိုအပ္ေသာ ၀န္ေဆာင္မႈမ်ား ေပးျခင္း မွ အစျပဳ၍ အစုစပ္ကုမၸဏီမ်ား၊ နိုင္ငံတကာ အရည္အေသြးျမင့္ ကုမၸဏီမ်ား၊ ဟိုတယ္မ်ား၊ ေဆးရံုမ်ားနွင့္ အစိုးရ ၀န္ၾကီးဌာနမ်ား အထိ ပါ၀င္ပါသည္။ ကြၽနု္ပ္တို႔သည္ ၀ယ္ယူသူမ်ား၏ လိုအပ္ခ်က္မ်ားကို ျဖည့္ဆည္းေပးရာတြင္ ဒီဇိုင္းလုပ္ငန္း အေျခတည္သည္မွ အစျပဳ၍ စိမံကိန္းလုပ္ငန္း ျပီးဆံုးသည္အထိ လုပ္ငန္းတစ္ခုလံုးတြင္ အေသးစိတ္ စိတ္တိုင္းက် ျဖစ္ေအာင္ လိုက္ပါေဆာင္ရြက္ၾကပါသည္။ ကြၽနု္ပ္တို႔သည္ ၀ါသနာ အရင္းခံ စိတ္တူကိုယ္တူ လုပ္ကိုင္နိုင္ေသာ ကြၽမ္းက်င္ ဗိသုကာ ပညာရွင္မ်ား၊ ဒီဇိုင္းပညာရွင္မ်ား၊ ကြၽမ္းက်င္ အင္ဂ်င္နီယာမ်ား နွင့္  ေဆာက္လုပ္ေရး လုပ္ငန္းရွင္မ်ား ပါ၀င္ေသာ အဖြဲ႔ကို ဖြဲ႔စည္းကာ ၀ယ္ယူသူ စိတ္တိုင္းက် ျဖစ္ေစရန္ တာ၀န္ယူ ေဆာင္ရြက္ေပးလ်က္ ရွိပါသည္။ ကြၽနု္ပ္တို႔သည္ ၀ယ္ယူအားေပးသူ စိတ္တိုင္းက် လိုအပ္ခ်က္နွင့္ ကိုက္ညီေသာ ၀န္ေဆာင္မႈမ်ားကို ဒီဇိုင္းဖန္တီးျခင္းအဆင့္မွ စီမံကိန္း တစ္ခုလံုးအား တာ၀န္ယူစီမံခန္႔ခဲြျခင္းမ်ား အပါအ၀င္ ေဆာက္လုပ္ေရးလုပ္ငန္း ျပီးဆံုးျပီး ၀ယ္ယူသူ လက္သို႔ အျပီး အပိုင္ လႊဲေျပာင္းေပးအပ္သည္ အထိ စိတ္တိုင္းက် ျဖစ္ေစရန္ ေဆာင္ရြက္ေပးလ်က္ရွိ ပါသည္။
                 </p>
                 <p>
                    ၂၀၀၄ ခုနွစ္မွ စတင္၍ ကြၽန္ုပ္တို႔သည္ တရုတ္နုိင္ငံသို႔ ကုမၸဏီခြဲတည္ေထာင္ဖြင့္လွစ္ခဲ့ျပီး ဗိသုကာ ဒီဇိုင္းမွ အိမ္တြင္းအလွဆင္ လုပ္ငန္းမ်ားအထိ ၀န္ေဆာင္မႈမ်ား ေပးနိုင္ခဲ့ပါသည္။ ကြၽန္ုပ္တို႔၏ တရုတ္နိုင္ငံ ကုမၸဏီခြဲမွ ေနာက္ထပ္ ကုမၸဏီခြဲမ်ားစြာကို တရုတ္နိုင္ငံရွိ အျခားေသာ ျမိဳ႕ၾကီးမ်ားနွင့္ ျပည္နယ္မ်ား တြင္ ထားရွိကာ ပူးေပါင္းေဆာင္ရြက္ ျခင္းျဖင့္ ေအာင္ျမင္မႈ အသီးသီး ရရွိေနၾကျပီ ျဖစ္ပါသည္။ ကြၽနု္ပ္တို႔၏ တရုတ္နိုင္ငံ ကုမၸဏီရံုးခ်ဳပ္မွာ "တရုတ္နိုင္ငံ ၏ ဟာ၀ိုင္ရီ" ဟုေခၚဆိုနိုင္ေသာ ဟိုင္နန္ျပည္နယ္တြင္ တည္ရွိပါသည္။ ရံုးခ်ဳပ္အား ဟိုင္နန္ျပည္နယ္တြင္ ထားရွိျခင္းမွာ ၄င္ျပည္နယ္တြင္ ဟိုတယ္မ်ားနွင့္ အပန္းေျဖ ရိပ္သာမ်ား အမ်ားအျပား ရွိျခင္း ေၾကာင့္ ျဖစ္ပါသည္။ မၾကာေသးမီက အစျပဳကာ ကြၽန္ုပ္တို႔သည္ ပိုမို အေသးစိတ္ျပီး တိက်ေသာ စံုစမ္းေလ့လာမႈ မ်ား ျပဳလုပ္နိုင္ရန္ နွင့္ ၀ယ္သူမ်ား အတြက္ အသင့္ေတာ္ဆံုးနွင့္ အသံုးျပဳရာတြင္ အေကာင္းဆံုးျဖစ္နုိင္မည့္ ေျမေနရာမ်ား ေရြးခ်ယ္နိုင္ရန္အတြက္ ေမာင္းသူမဲ့ ယာဥ္မ်ား အသံုးျပဳျပီး ေျမျပင္ စစ္တမ္းမ်ား ေကာက္ယူခဲ့ၾကပါသည္။
                 </p>
                 <p>
                 ၂၀၀၈ ခုနွစ္မွ စတင္ကာ ကြၽနု္ပ္တို႔ ကုမၸဏီသည္ ဆိတ္ျငိမ္ေအးခ်မ္းေသာ ေတးဂီတ ပတ္၀န္းက်င္ ဖန္တီးျခင္းဘက္သို႔ အေလး ေပးလာျပီး ထိုနယ္ပယ္မ်ားတြင္ အထူး ကြၽမ္းက်င္စြာ လုပ္ကိုင္နိုင္သည့္ အနုပညာရွင္မ်ားႏွင့္ အသံပိုင္းဆိုင္ရာ အင္ဂ်င္နီယာမ်ား ကို လည္းတိုးခ်ဲ႕ ခန္႕အပ္ျပီး ၀န္ေဆာင္မႈမ်ား ေပးခဲ့ပါသည္။ ထိုအခ်ိန္မွ စတင္၍ ကြၽနု္ပ္တို႔သည္ ေလာင္းကစားရံုနွင့္ ဂိမ္းစင္တာမ်ား တည္ေဆာက္ျခင္း၊ အိမ္တြင္းႏွင့္ အခန္းတြင္း မီးေဘး အႏၱရာယ္ ကာကြယ္ေရး အစီအမံမ်ား၊ စာသင္ေဆာင္မ်ား၊ အသံဖမ္း စတူဒီယိုမ်ား ေဆာက္လုပ္ျခင္း၊ ရုပ္ျမင္သံၾကားနွင့္ အသံလႊင့္ရံုမ်ား တည္ေဆာက္ျခင္း၊ မိသားစု အပန္းေျဖ အနားယူရန္အတြက္ အသံလံုခန္းမ်ား ဖန္တီးျခင္း စသည့္ နယ္ပယ္မ်ား ကို လည္းခ်ဲ႕ထြင္ ၀န္ေဆာင္မႈမ်ား ေပးခဲ့ပါသည္။ 
                 </p>
                 <p>
                 ၂၀၁၂ ခုနွစ္တြင္ အိ္မ္နီးခ်င္း ျမန္မာနိုင္ငံသို႔ ၀င္ေရာက္ကာ ၀န္ေဆာင္မႈမ်ား စတင္ခဲ့ပါသည္။ ကြၽနု္ပ္တို႔ ကုမၸဏီသည္ ဒီဇိုင္းဖန္တီးျခင္းနွင့္ ေဆာက္လုပ္ေရးလုပ္ငန္းမ်ားကို အရွိန္အဟုန္ျမွင့္တင္ ေဆာင္ရြက္ခဲ့ပါသည္။
                 </p>';
        
        $_SESSION['lblFullName']  = 'FULL NAME';
        $_SESSION['lblEmail']  = 'EMAIL';
        $_SESSION['lblSchool']  = 'SCHOOL';
        $_SESSION['lblFaculty']  = 'FACULTY';
        $_SESSION['lblYearStarted']  = 'YEAR STARTED';
        $_SESSION['lblAspiration']  = "WHAT's YOUR CURRENT/FUTURE ASPIRATION";
        $_SESSION['lblSend']  = 'Send';

        $_SESSION['forumdesign_objective_label'] = "International Students' Design Forum";
        $_SESSION['forumdesign_objective_content'] = "<p> The objectives of this design forum is to help build students' confidence in design. <br> We will help them in seeing the physical world in a new realm in order to be more design conscious in problem solving.<br> They will learn through the macro and micro views of components, hence enlarging their perspective in perception in their design concept. </p> <p class='center'> <strong> - When one cannot see beyond the dimensions of life, nothing profitable can be created. - <br> Eric's Haywood Chang's quote </strong> </p> <p> Upon registering with us, students from any design faculty may submit their work for design critics or for discussion.<br> In returned, we will post up these works (after having approval from individual student) for sharing so that more can learn and benefit from it. </p>";
        $_SESSION['forumdesign_contact_label'] = "International Design Student Contact";
        $_SESSION['forumdesign_contact_info'] = "We would like to know you better, kindly help fill in the as below and all information will be confidential.";

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

        $_SESSION['copyright'] = 'Copyright &copy; 2015 Empyrean Design. All rights reserved.';
        $_SESSION['about_our_mission'] = '<p>我们相信，在这个世界上没有什么存在本身。我们共存彼此和我们是相互依赖上彼此。这造成一个更美好，并有助于颜色的世界。良好的设计是不够;一个伟大的产品是一个就能卖自己。我们认为，销售的设计是最相关，并呼吁消费者，除了美学方面的设计。我们是领先的设计趋势，而事实上，趋势制定者，因为我们敢于在我们的思维过程的不同。我们在设计理念至关重要，但能够提供长期的解决方案。我们拥有懂得整合的组件和问题，将提供全面，实用，经济的解决方案，在人力资源，运营成本和利润的操作方面。我们主要关注的是提供一个梦幻般的设计，而且在客户资源的长期保存也是如此。</p>
                 <p class="center">
                  <strong> - 我们敢于面对负面问题，因为我们将有积极的解决方案，以克服这些困难。 - <br> <div style="text-align:right;">郑先生(创始人) 的引用</div>
                  </strong>
                 </p>
                 <p>
                    我们公司秉承对社会和世界回馈。我们正在积极帮助世界各地的学生在分享设计和评论家。此外，我们已经建立了设计论坛，以促进这一功能。我们希望帮助我们的未来的年轻的设计领袖的梦想，探索，并保持充满激情的他们相信，爱做的事情。<br>
                    在支持音乐行业，我们提供特殊的有竞争力的成本为艺人及其相关领域的客户在声环境搭建起来。<br>
                    我们也参与了喂养第三世界程序。
                 </p>
                 <p class="center">
                 这关系符合我们的愿景: <strong>我们塑造未来的今天</strong>
                 </p>
                 <p>
                    我们正在通过投资，现在影响他人塑造我们的未来。<br>
                    敢于梦想，把梦想变成现实。<br>
                    从图纸到建成，建设一个更美好的明天。<br>
                    我们能有今天的成就，因为我们的客户相信我们的梦想。
                 </p>';
        $_SESSION['about_our_story'] = '<p>恩碧亚设计公司(Empyrean Design)成立于1992年由郑杰明先生。从艺术中新加坡拉萨尔学院已经毕业;主修室内设计和较小的产品设计和美术，他也是一位自学成才的建筑设计师是拥有多年相关领域的经验和专业知识。他热衷于设计，艺术和音乐。</p>
                 <p>
                  从第一天开始，我们的设计公司重点一直是在室内设计。我们已经完成了许多项目，从住宅到公司客户。我们的核心力量一直在识别过程中我们的设计过程中客户的形象和他们的需求的领域。我们有能力开发新的和现有的企业形象为新公司的创业以及为那些寻找到改变自己企业形象的公司。我们的客户包括零售，企业公司，酒店，政府机关。我们会整个设计过程中与我们的客户从地面零到完成每一个项目。我们与专门的架构，设计师，专业工程师和承包商在我们的翅膀团队密切合作。我们可以自定义我们的工作范围，按从设计阶段，项目管理，施工阶段，我们客户的需求和项目移交给我们的客户。
                 </p>
                 <p>
                    自2004年以来，由于我们在中国有着密切的联系，我们已经分流到建筑的室内设计。我们有很多我们中国的同行在不同的城市和中国各省区的合作成果丰硕。然而，我们的主要焦点一直在海南省，由于它有酒店和度假村的数量最多;在“中国的夏威夷”正如许多人所命名的。最近，我们调查了站点无人机进行更彻底的检查，并建议这是最适合我们的客户使用该网站。
                 </p>
                 <p>
                 在2008年，我们涉足的声学环境中，无论是支持艺人或音响工程师在该地区的专业化。此后，我们参与自己在不同环境的设计和建造起来，从赌场的空间，室内射击场，报告厅，录音室，广播室，家庭影院等。
                 </p>
                 <p>
                 在2014年，我们进入缅甸市场。我们正在慢慢地蓄势待发，在设计和建筑等行业。
                 </p>';

        $_SESSION['lblFullName']  = 'FULL NAME';
        $_SESSION['lblEmail']  = 'EMAIL';
        $_SESSION['lblSchool']  = 'SCHOOL';
        $_SESSION['lblFaculty']  = 'FACULTY';
        $_SESSION['lblYearStarted']  = 'YEAR STARTED';
        $_SESSION['lblAspiration']  = "WHAT's YOUR CURRENT/FUTURE ASPIRATION";
        $_SESSION['lblSend']  = 'Send';

        $_SESSION['forumdesign_objective_label'] = "International Students' Design Forum";
        $_SESSION['forumdesign_objective_content'] = "<p> The objectives of this design forum is to help build students' confidence in design. <br> We will help them in seeing the physical world in a new realm in order to be more design conscious in problem solving.<br> They will learn through the macro and micro views of components, hence enlarging their perspective in perception in their design concept. </p> <p class='center'> <strong> - When one cannot see beyond the dimensions of life, nothing profitable can be created. - <br> Eric's Haywood Chang's quote </strong> </p> <p> Upon registering with us, students from any design faculty may submit their work for design critics or for discussion.<br> In returned, we will post up these works (after having approval from individual student) for sharing so that more can learn and benefit from it. </p>";
        $_SESSION['forumdesign_contact_label'] = "International Design Student Contact";
        $_SESSION['forumdesign_contact_info'] = "We would like to know you better, kindly help fill in the as below and all information will be confidential.";
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

        $_SESSION['about_our_mission'] = '<p>
                 It is our belief that nothing exists by itself in this world. We co-exist with one another and we are interdependent on one another. This creates greater dimension and contributes colours to the earth. Good designs are not good enough; a great product is one that will be able to sell itself. We believe that the design that sells is the design that is most relevant and appealing to the consumer, besides the aesthetic aspect. We are ahead of design trends, and in fact, trend setters because we dare to be different in our thinking process. We are critical in design concepts, yet able to provide long terms solutions. We possess the know how in integrating components and issues that will provide comprehensive, practical and economic solutions in terms of operations of human resources, operating cost, and profit. One of our main concern is in providing an outstanding design but also in the preservation of our clients resources as well.
                 </p>
                 <p class="center">
                  <strong> - We dare to face the negative issues, for we will have the positive solutions to overcome them. - <br> <div style="text-align: right;">Eric\'s Haywood Chang\'s quote</div>
                  </strong>
                 </p>
                 <p>
                     Our company believes in giving back to the society and to the world. We are actively helping students around the world in sharing designs and critics. In addition, we have setup a design forum to facilitate this function. We wish to help our future young design leaders to dream, explore, and stay passionate in what they believe in and love doing. <br>
                     In supporting the music industries, we provide special competitive costing for artistes and related field clients in the acoustic environment build up. <br>
                      We are also involved in the feeding the third world program.
                 </p>
                 <p class="center">
                 This ties in with our vision: <strong>Shaping our future today</strong>
                 </p>
                 <p>
                     We are shaping our future by investing and impacting in others now. <br>
                      Dare to dream, turning dreams into reality. <br>
                      From drawings to buildings, building a better tomorrow.<br>
                      We are who we are now because our clients believes in our dreams.
                 </p>';
        $_SESSION['about_our_story'] = '<p>
                 Empyrean Design was founded in 1992 by Eric Haywood Chang. Having graduated from LaSalle College of the Arts in Singapore; majoring in Interior Designing and minor in Product Designing and Fine Arts, he is a self-taught architect that possesses many years of experience and expertise in the related field. He is passionate about design, arts, and music.
                 </p>
                 <p>
                  From day one, our main focus has been in interior designing. We have completed many projects, ranging from residential to corporate clients. Our core strength has always been in the area of identifying our clients\' image and their needs during our design process. We are capable of developing new and current corporate images for new company startups as well as for companies that are looking into changing their corporate image. Our clients range from retail, corporate companies, hospitality, to government agencies. We walk through the entire design process with our clients from the ground zero to the completion of each projects. We work closely with our dedicated team of architectures, designers, professional engineers, and contractors under our wing. We are able to customize our scope of work as per our client\'s requirement from design stage, project management, construction stage and to handing over of project to our client. 
                 </p>
                 <p>
                    Since 2004, due to our strong connections in China, we have branched into architecture from interior designing. We have had fruitful cooperation with many of our China counterparts in different cities and provinces of China. However, our main focal point has been in the Hainan Province due to it having the highest numbers of hotels and resorts; the "Hawaii of China" as many have named. Recently, we have surveyed sites with drones for a more thorough inspection and recommend the sites which are optimal for our clients usage.                       
                 </p>
                 <p>
                 In 2008, we ventured into the specialization of acoustic environments whether it be for supporting artistes or sound engineers in the region. Thereafter, we involved ourselves in the designing and building up of different environments, from casino gaming spaces, indoor firing ranges, lecture halls, recording studios, broadcasting rooms, home theatres, etc. 
                 </p>
                 <p>
                 In 2014, we entered Myanmar market. We are slowly gaining momentum in the design & construction industries.
                 </p>';

        $_SESSION['lblFullName']  = 'FULL NAME';
        $_SESSION['lblEmail']  = 'EMAIL';
        $_SESSION['lblSchool']  = 'SCHOOL';
        $_SESSION['lblFaculty']  = 'FACULTY';
        $_SESSION['lblYearStarted']  = 'YEAR STARTED';
        $_SESSION['lblAspiration']  = "WHAT's YOUR CURRENT/FUTURE ASPIRATION";
        $_SESSION['lblSend']  = 'Send';

        $_SESSION['forumdesign_objective_label'] = "International Students' Design Forum";
        $_SESSION['forumdesign_objective_content'] = "<p> The objectives of this design forum is to help build students' confidence in design. <br> We will help them in seeing the physical world in a new realm in order to be more design conscious in problem solving.<br> They will learn through the macro and micro views of components, hence enlarging their perspective in perception in their design concept. </p> <p class='center'> <strong> - When one cannot see beyond the dimensions of life, nothing profitable can be created. - <br> Eric's Haywood Chang's quote </strong> </p> <p> Upon registering with us, students from any design faculty may submit their work for design critics or for discussion.<br> In returned, we will post up these works (after having approval from individual student) for sharing so that more can learn and benefit from it. </p>";
        $_SESSION['forumdesign_contact_label'] = "International Design Student Contact";
        $_SESSION['forumdesign_contact_info'] = "We would like to know you better, kindly help fill in the as below and all information will be confidential.";

        break;
}