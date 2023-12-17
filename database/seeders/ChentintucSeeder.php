<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TinTuc;

class ChentintucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_danh_muc_tin' => 1,
                'tieu_de' => 'Tài khoản Google không hoạt động sẽ bị xóa từ ngày 1/12/2023',
                'hinh' => 'tin1.webp',
                'noi_dung' => 'Theo đó, những tài khoản Google được tạo nhưng không có hoạt động hoặc được truy cập và sử dụng bởi người dùng sẽ bị xóa khỏi hệ thống đầu tiên. Tất cả các nội dung và dịch vụ liên kết bên trong tài khoản như như ảnh, lịch, e-mail, danh bạ và tài liệu trong Drive cũng sẽ bị xóa theo chính sách tài khoản được cập nhật của Google.

                Tuy nhiên, những tài khoản cũ nhưng có kênh YouTube đang hoạt động, tài khoản có số dư thẻ quà tặng Google hoặc tài khoản đang dùng mua sách, phim và dịch vụ trên Google Play sẽ không nằm trong diện bị xóa. Google cũng đảm bảo người dùng sẽ nhận được cảnh báo về việc tài khoản của họ sẽ sớm bị xóa trước khi thay đổi chính thức được áp dụng.
                
                Đây được coi là cuộc thanh lọc trên toàn hệ thống của Google nhằm bảo vệ người dùng khỏi các mối đe dọa bảo mật như thư rác, lừa đảo trực tuyến và chiếm đoạt tài khoản.
                Theo dữ liệu của Google, các tài khoản không được người dùng sử dụng thường xuyên hoặc chỉ lập ra cho có thường không cập nhật mật khẩu mới. Điều này khiến chúng dễ bị giới tội phạm mạng nhắm tới, đặc biệt là khi mật khẩu bị rò rỉ trên diện rộng. Ngoài ra, các tài khoản này cũng nhận được ít lượt kiểm tra bảo mật hơn từ người dùng, thể hiện ở tỷ lệ kích hoạt xác thực dùng hai yếu tố (2FA) thấp hơn 10 lần so với những tài khoản được người dùng sử dụng thường xuyên.

                Gã khổng lồ tìm kiếm cho biết trong một tuyên bố về thay đổi chính sách, khi một tài khoản Google bị xâm phạm, tài khoản đó có thể được sử dụng cho bất kỳ mục đích nào, từ đánh cắp danh tính đến phát tán nội dung không mong muốn hoặc thậm chí độc hại như thư rác.

                "Chúng tôi muốn bảo vệ thông tin cá nhân của người dùng, ngăn kẻ xấu truy cập trái phép vào tài khoản ngay cả khi họ không còn sử dụng dịch vụ của chúng tôi nữa" - Google nhấn mạnh.',
                
                'tom_tat' => 'VTV.vn - Theo thông báo của Google, bắt đầu từ ngày 1/12/2023, công ty sẽ chính thức xóa các tài khoản không hoạt động trong vòng ít nhất 2 năm.',
                'ten_nguoi_dang' => 'Hồ Văn Đạt',
            ],
            [
                'id_danh_muc_tin' => 1,
                'tieu_de' => 'Apple công bố loạt ứng dụng và trò chơi của năm 2023',
                'hinh' => 'tin2.webp',
                'noi_dung' => 'Apple vừa công bố danh sách các ứng dụng và trò chơi xuất sắc nhất năm 2023, đoạt giải App Store Award. Các ứng dụng và trò chơi này đã được lựa chọn vì khả năng giải phóng trí sáng tạo, khám phá thế giới phiêu lưu mới và mang lại niềm vui chơi, giải trí cho người dùng.

                Ứng dụng và trò chơi đoạt giải đến từ các nhà phát triển trên toàn thế giới, và chúng đã tạo ra những trải nghiệm ý nghĩa và truyền cảm hứng, góp phần thay đổi văn hóa. Theo Tim Cook, Giám đốc Điều hành của Apple, ông rất vui mừng khi thấy các nhà phát triển tiếp tục xây dựng những ứng dụng và trò chơi ấn tượng, thể hiện tiềm năng vô hạn của họ trong việc biến tầm nhìn thành hiện thực, tạo ra những ứng dụng và trò chơi sáng tạo, chất lượng cao và có mục đích rõ ràng. Các ứng dụng đoạt giải thể hiện cơ hội sáng tạo, đổi mới kỹ thuật và thiết kế đặc biệt có thể tìm thấy trên App Store và hệ sinh thái của Apple 
                Danh sách App Store Award năm nay tiếp tục bao gồm 2 hạng mục là ứng dụng của năm và trò chơi của năm. Trong đó hạng mục ứng dụng của năm được chia thành 5 danh mục nhỏ dành cho mỗi nền tảng.

                Chia sẻ với chúng tôi, nhà phát hành tựa game Honkai: Star Rail nhận định con chip Apple A17 Pro trên iPhone 15 Pro series mang lại nhiều lợi ích cho nhà phát triển và cả người dùng. "Apple A17 Pro mang lại chất lượng tốt hơn nhiều so với các thế hệ tiền nhiệm, đặc biệt là và khả năng xử lý đồ hoạ, từ đó mà có thể đưa thêm những tính năng mới cho game trong các bản cập nhật năm sau, ví dụ như hiệu ứng mặt nước thật hơn, môi trường cũng hiển thị chi tiết, ấn tượng hơn".

                Bên cạnh đó, nhà phát hành COGNOSPHERE PTE. LTD cũng khẳng định Apple đã khai mở được nhiều thứ hơn cho lập trình viên, từ đó giúp mang lại trải nghiệm tốt hơn cho game thủ.
                
                Ngoài ra, đã có 5 ứng dụng đoạt giải Tác Động Văn Hóa, được công nhận về khả năng thúc đẩy thay đổi tích cực thông qua ứng dụng và trò chơi. Các ứng dụng này đã khuyến khích người dùng học hỏi và phát triển trong một không gian hòa nhập và dễ tiếp cận, đóng góp vào một tương lai bền vững hơn và khám phá sự tự suy ngẫm và kết nối giữa các thế hệ.
                Cuối cùng, ứng dụng AI tự tạo đã trở thành một xu hướng quan trọng trong năm 2023. Các ứng dụng đã tích hợp công nghệ AI trong nhiều cách khác nhau, mang đến cho người dùng cơ hội tận mắt trải nghiệm công nghệ mới và đưa ra cá nhân hóa về lợi ích và rủi ro. Ngoài danh sách ứng dụng đoạt giải, Biên Tập Viên App Store cũng đã tạo ra một bộ sưu tập các ứng dụng AI tạo sinh tiêu biểu cho mục Xu Hướng Của Năm, với sự góp mặt của các ứng dụng mang xu thế AI trong thời gian qua.',
                
                'tom_tat' => '
                Các ứng dụng và trò chơi của năm được Apple vinh danh tại giải thưởng App Store Award 2023.',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 1,
                'tieu_de' => 'Tính năng trên iPhone bất ngờ được cảnh sát khuyến cáo nên tắt để giữ an toàn',
                'hinh' => 'tin3.webp',
                'noi_dung' => 'PhoneArena đưa tin, một sở cảnh sát địa phương ở tiểu bang Ohio (Mỹ) mới đây đã cảnh báo các bậc phụ huynh về một tính năng mới được bật theo mặc định trên iPhone sau khi cập nhật lên iOS 17.1.

                Cụ thể, sở cảnh sát Middleton, Ohio đã yêu cầu các bậc phụ huynh nên tắt tính năng NameDrop trên iPhone của con cái mình để ngăn chúng chia sẻ thông tin cá nhân với người lạ.
                Không chỉ ở bang Ohio, cảnh sát ở các khu vực khác tại Mỹ cũng đang cảnh báo các bậc phụ huynh về NameDrop, chẳng hạn như Watertown và Connecticut.
                Một số phụ huynh cho biết trên Facebook rằng gần đây họ đã cập nhật iPhone cho trẻ nhỏ nhưng không biết về tính năng mới này. Tuy nhiên, vẫn có một số người dùng iPhone nhận định rằng cảnh báo của phía cảnh sát là chưa chính xác, bởi NameDrop vẫn cần yêu cầu một số thao tác đầu vào từ người dùng và không tự động trao đổi thông tin liên hệ cá nhân. 

Theo đó, khi hai chiếc iPhone đặt cạnh nhau, người dùng phải nhấn vào thông tin liên hệ, sau đó mới có thể chọn chia sẻ số điện thoại hoặc email.

Nhưng theo PhoneArena, suy cho cùng cảnh báo của cơ quan cảnh sát cũng là nhằm mục đích tốt và giúp trẻ em không bị lạm dụng khi sử dụng iPhone. Nên việc tắt tính năng NameDrop trên điện thoại iPhone của trẻ nhỏ là điều hợp lý.

NameDrop là tính năng này cho phép hai chiếc iPhone có thể trao đổi nhanh thông tin liên lạc gồm số điện thoại và hình ảnh bằng cách đặt chúng gần nhau. Để tắt trên iPhone, phụ huynh vào phần Cài đặt (Settings) > Cài đặt chung (General) > AirDrop > Đưa các thiết bị lại gần nhau (Bringing Devices Together) > kéo nút gạt để tắt Namedrop.

',
                'tom_tat' => '
                (Tổ Quốc) - Cảnh sát đề nghị phụ huynh nên tắt tính năng mới này trên iPhone của trẻ em.
                ',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 1,
                'tieu_de' => 'Cập nhật mới của Google Maps khiến việc tìm đường khó khăn hơn, người dùng khắp nơi phẫn nộ',
                'hinh' => 'tin4.webp',
                'noi_dung' => 'Từ tháng 10/2023, Google đã dần dần tung ra một số tính năng mới và bảng màu mới trong lần "siêu cập nhật" của mình. Thực tế, những thay đổi này đã được thử nghiệm từ đầu tháng 8 và hiện có sẵn trên nhiều nền tảng web, Android và iOS, bao gồm cả Android Auto.

                Cuộc đại tu này của Google Maps nhận được nhiều phản ứng trái chiều từ người dùng và vấn đề khiến người ta phàn nàn nhất chính là bảng màu mới.
                
                Thay vì các màu sắc đậm và ấm áp như phiên bản truyền thống, bảng màu mới mang tính thẩm mĩ hiện đại và mới mẻ hơn. Theo Google Maps, bảng màu mới được thiết kế để nâng cao khả năng sử dụng và cải thiện trải nghiệm tổng thể của người dùng.
                Thay đổi dễ nhận thấy nhất là việc thay thế màu nâu quen thuộc cho những con đường bằng nhiều gam màu xám. Mục đích của sự thay đổi này là làm cho những con đường nổi bật hơn trên nền công viên và rừng, hiện có màu xanh nhạt hơn. Ngoài ra, các đường cao tốc có màu xám thay vì màu vàng như trước đây. Màu nước của biển, sông hồ cũng nhạt hơn trước và khiến không ít người dùng cảm thấy khó nhìn do không có màu nổi bật.
',
                
                'tom_tat' => 'Google Maps có cập nhật mới nhưng chính điều này khiến người dùng bức xúc vì khó tìm đường, thậm chí nguy hiểm vì khó phân biệt các loại đường khác nhau.',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 1,
                'tieu_de' => 'Các dấu hiệu cho thấy điện thoại của bạn đang bị cài "ứng dụng đánh cắp mật khẩu"',
                'hinh' => 'tin5.webp',
                'noi_dung' => 'Nếu bạn dựa vào điện thoại để truy cập tài khoản ngân hàng, nhập tin nhắn nhạy cảm, thanh toán hóa đơn hoặc thậm chí mở khóa nhà, keylogger (ứng dụng đánh cắp mật khẩu) trên điện thoại thông minh có thể đánh cắp thông tin này mà bạn không hề hay biết.

                Tội phạm mạng có thể sử dụng keylogger để tìm hiểu mật khẩu, số thẻ tín dụng của bạn... - vì vậy, bạn nên biết cách phát hiện và ngăn chặn những mối đe dọa này để giữ kín các hành động trên điện thoại thông minh của mình.
                Keylogger có thể khó phát hiện hơn so với các loại phần mềm độc hại khác. Tuy nhiên các bạn vẫn có thể phát hiện nó nếu có một trong những dấu hiệu sau đây:

- Một trong những dấu hiệu lớn nhất của keylogger là độ trễ khi bạn gõ. Đó là dấu hiệu cảnh báo đỏ nếu thông tin đầu vào của bạn mất thời gian để hiển thị sau khi bạn nhấn vào thứ gì đó. Điều này xuất phát từ việc phần mềm độc hại ghi lại thao tác gõ phím và chiếm sức mạnh xử lý.
- Tương tự, hãy chú ý đến việc hiệu suất có bị giảm không. Thời gian phản hồi chậm, ứng dụng bị treo và đồ họa không load đều là những dấu hiệu cảnh báo. Chúng là dấu hiệu cho thấy điện thoại của bạn đang xử lý nhiều hơn bình thường, đặc biệt nếu điều đó dường như xảy ra bất ngờ.

- Quá nóng là một dấu hiệu khác của keylogger trên điện thoại thông minh, vì nó thường xảy ra khi mọi thứ chạy ở chế độ nền. Sẽ thật đáng lo ngại nếu bạn không có ứng dụng nào đang mở nhưng điện thoại lại bị nóng lên. Điều tương tự cũng xảy ra khi thời lượng pin cạn kiệt nhanh bất thường hoặc điện thoại thông minh của bạn sử dụng nhiều dữ liệu hơn bình thường.

',
                
                'tom_tat' => 'Keylogger (ứng dụng đánh cắp mật khẩu) trên điện thoại thông minh có thể đánh cắp thông tin mà bạn không hề hay biết.',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 2,
                'tieu_de' => 'DTLP Shop mở tiệc săn sale cuối năm với ưu đãi ‘sập sàn’ đến 70%',
                'hinh' => 'tin6.webp',
                'tom_tat' => 'Nhân dịp cuối năm, DTLP Shop khởi động chương trình mua sắm tiết kiệm với ưu đãi đến 70% kéo dài từ ngày 13/12 - 25/12/2023 dành cho toàn bộ khách hàng. Chưa dừng lại, bạn còn có cơ hội ‘mua 1 được 2’, trả góp 0% lãi suất và nhận nhiều ưu đãi hấp dẫn khác khi tham gia chương trình “Sale hết kết năm".',
                'noi_dung' => 'Đặc biệt, trong dịp siêu sale cuối năm, DTLP Shop ‘mạnh tay’ giảm đến 70% cho các mặt hàng phụ kiện như: Pin sạc dự phòng Magsafe QC giảm 901.000 đồng, giá còn 389,000; Miếng dán kính cường lực camera iPhone 15 Pro/15 Pro Max được giảm 50%, giá chỉ 199.000 đồng; các sản phẩm tai nghe của AirPod và Samsung có mức giá giảm đến 1.700.000 đồng. 

                "Siêu Sale cuối năm" chính là cơ hội vàng cho những ai đang tìm kiếm một chiếc laptop mới phục vụ nhu cầu giải trí và lên kế hoạch làm việc cho năm mới. Bởi trong dịp này, DTLP Shop giảm giá đến 35% cho khách hàng chọn mua laptop chính hãng tại hệ thống. Đối với PC lắp ráp E-Power, LCD có giá ưu đãi đến 30%. PC lắp ráp có giá từ 5.000.000 đồng và LCD có giá chỉ từ 1.700.000 đồng khi mua tại hệ thống DTLP Shop. Các sản phẩm có giá giảm nổi bật là: Laptop MSI Gaming Alpha 15 B5EEK-203VN giảm ngay 9.500.000 đồng, giá về tay 17.490.000 đồng; Máy tính xách tay Acer SF314 giảm 6.500.000 đồng, giá còn 14.490.000 đồng; MacBook Air 13 inch M2 2022 giảm ngay 2.000.000 đồng, còn 26.990.000 đồng. 
                Ngoài ra, khách hàng là học sinh, sinh viên còn được tặng thêm 01 năm bảo hành. Đây là ưu đãi độc quyền của DTLP Shop, giúp các bạn yên tâm hơn khi sử dụng sản phẩm cũng như tiết kiệm chi phí nếu chẳng may laptop gặp sự cố. Ngoài ra, bạn còn được nhận nhiều phần quà giá trị khác như: balo laptop, chuột Gaming, phiếu mua hàng trị giá 300.000 đồng khi mua LCD, máy. Nếu còn băn khoăn về chi phí, DTLP Shop có ngay ưu đãi trả góp 0% lãi suất để hỗ trợ. 

Cuối năm cũng là dịp để bạn sắm thêm cho gia đình một vài món đồ gia dụng thiết yếu hoặc mua quà tặng người thân. Và nếu muốn mua đồ gia dụng với mức ‘giá hời’ thì bạn không nên bỏ lỡ đợt sale cuối năm tại DTLP Shop với ưu đãi đến 65% và ‘mua 1 được 2’. Các sản phẩm có giá giảm nổi bật là: nồi chiên không dầu Magic 4.6 lít giảm 1.591.000 đồng, giá còn 999.000 đồng; Máy ép chậm Kangaroo giảm ngay 2.400.000 đồng, giá chỉ còn 1.490.000 đồng; bếp gas đôi Kangaroo KG8G1C có giá chỉ 699.000 đồng. Ngoài ra, bạn còn được ưu đãi ‘mua 1 được 2’ như: Sắm nồi chiên không dầu Unie 6.5 lít tặng máy xay sinh tố; sắm nồi chiên không dầu Kangaroo 8 lít tặng máy ép trái cây hay mua nồi cơm điện tử Kangaroo 1.8 lít tặng thêm ấm siêu tốc Hotwell. Hấp dẫn hơn, khách hàng chọn mua các sản phẩm điện máy cũng được giảm giá hấp dẫn, như sắm Tivi Google A 55" 4K giảm ngay 3.000.000 đồng, giá chỉ còn 8.490.000 đồng  kèm ưu đãi trả góp 0% lãi suất và bảo hành đến 24 tháng. ',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 2,
                'tieu_de' => 'SALE HẾT KẾT NĂM - DTLP Shop mở sale sốc đến 70% ',
                'hinh' => 'tin7.webp',
                'tom_tat' => 'Từ ngày ngày 13/12 - 25/12/2023, DTLP Shop mở chương trình ưu đãi sốc đến 70% áp dụng cho tất cả sản phẩm và cơ hội “Mua 1 được 2” cùng chương trình trả góp 0% lãi suất.',
                'noi_dung' => 'Cuối năm là thời điểm mà DTLP Shop mang đến cho khách hàng những ưu đãi không thể tin được! Chương trình khuyến mãi cuối năm "Sale Hết Kết Năm" đã chính thức bắt đầu từ ngày ngày 13/12 - 25/12/2023, hứa hẹn đem lại trải nghiệm mua sắm tuyệt vời nhất cho quý khách hàng. Với các ưu đãi sốc đến 70%, khách hàng còn có cơ hội “Mua 1 được 2”  trả góp 0% lãi suất và nhận nhiều ưu đãi hấp dẫn khác. Giảm sốc đến 70% - Cơ hội mua sắm giá hời không thể bỏ lỡ
                Chương trình sale sốc đến 70% áp dụng cho hàng loạt sản phẩm tại DTLP Shop

DTLP Shop mang đến chương trình giảm giá sốc lên đến 70% trên hàng loạt sản phẩm hot nhất. Từ điện thoại, laptop, gia dụng như nồi chiên không dầu, nồi cơm điện, điện máy như tivi, đến phụ kiện như sạc dự phòng, cáp sạc…, tất cả đều có mức giá siêu hấp dẫn. Đừng bỏ lỡ cơ hội săn deal "hot" này để mang không khí Tết về cho gia đình. 

Mua 1 được 2 - Chương trình dành riêng cho chị em phụ nữ thích sắm các sản phẩm gia dụng chuẩn quốc tế

Chỉ có tại DTLP Shop, khi mua một sản phẩm, bạn sẽ nhận được một sản phẩm khác hoàn toàn miễn phí. Đây chính là cơ hội vàng để sở hữu những sản phẩm gia dụng chuẩn Nhật hàng đầu mà không cần phải lo lắng về giá. 

Điện thoại giảm sốc đến 45% - Phục vụ nhu cầu lên đời điện thoại cuối năm

Những chiếc điện thoại hàng đầu từ các thương hiệu nổi tiếng như OPPO, HONOR, XIAOMI, SAMSUNG… giờ đây có giá giảm đến 45%. Còn chờ gì mà không đặt hàng ngay hôm nay để đảm bảo chắc chắn bạn không bỏ lỡ cơ hội này.',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 2,
                'tieu_de' => 'Tuần lễ Asus: DTLP Shop giảm “sốc” đến 30% và tặng thêm 1 năm bảo hành cho HS - SV ',
                'hinh' => 'tin8.webp',
                'tom_tat' => 'Từ 12/12 -18/12/2023, khi khách hàng chọn mua laptop Asus tại DTLP Shop sẽ có cơ hội nhận ngay ưu đãi lên đến 30% và tặng thêm 1 năm bảo hành.',
                'noi_dung' => 'Được biết, DTLP Shop triển khai chương trình “Tuần lễ Asus” với hàng loạt ưu đãi giá trị dành tặng khách hàng. Theo đó,  khi khách hàng chọn mua laptop Asus trong thời gian từ 12/12 – 18/12/2023 sẽ nhận được ưu đãi đến 30%. Chưa hết, khi khách hàng là học sinh – sinh viên, sẽ được tặng bảo hành 1 năm, nâng tổng thời gian bảo hành lên đến 03 năm. Đây cũng là ưu đãi độc quyền của DTLP Shop, giúp các khách hàng yên tâm hơn khi sử dụng sản phẩm, cũng như tiết kiệm thêm được một phần chi phí nếu chẳng may laptop gặp sự cố trong quá trình sử dụng.
                Bên cạnh những ưu đãi độc quyền trên, khi khách hàng mua laptop trong “tuần lễ Asus” sẽ nhận được nhiều quà tặng thiết thực như:

Tặng phiếu mua hàng 300.000 đồng mua máy in.
Tặng tai nghe choàng đầu ProOne trị giá 449.000 đồng khi mua Office kèm MTXT.
Tặng balo laptop cao cấp.
Đặc quyền mua chuột Gaming giá gốc 499.000 đồng chỉ còn 100.000 đồng
Giảm ngay 5% tối đa 200.000 đồng khi thanh toán trả góp 6/12 tháng qua Kredivo.
Asus, hay còn được biết đến là ASUSTeK Computer Inc., là một công ty Đài Loan thành lập vào năm 1989. Từ khi mới bắt đầu, Asus đã tập trung vào nghiên cứu và phát triển các sản phẩm máy tính và linh kiện điện tử. Được biết đến ban đầu với các bo mạch chủ chất lượng, Asus nhanh chóng mở rộng sang lĩnh vực laptop, nơi họ đã tạo ra những sản phẩm độc đáo và hiệu suất cao.

Mỗi sản phẩm của Asus đều mang đến cho người dùng trải nghiệm mượt mà và hiệu suất ổn định. Được trang bị những công nghệ tiên tiến nhất, laptop Asus không chỉ đáp ứng nhu cầu giải trí và làm việc hàng ngày mà còn thích hợp cho các ứng dụng đòi hỏi sức mạnh cao như đồ họa, game và xử lý video.',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 2,
                'tieu_de' => 'Top 3 smartphone HONOR được ưa chuộng nhất tại DTLP Shop',
                'hinh' => 'tin9.webp',
                'tom_tat' => 'Dù mới quay trở lại thị trường Việt Nam không lâu, HONOR đã nhanh chóng tạo được ấn tượng tốt với người dùng nhờ những sản phẩm chất lượng ở nhiều phân khúc giá khác nhau. Trong bài viết này, DTLP Shop sẽ giới thiệu đến bạn 3 chiếc điện thoại HONOR đang được ưa chuộng nhất hiện nay.',
                'noi_dung' => 'HONOR là một thương hiệu con của Huawei, nhà sản xuất điện thoại di động nổi tiếng trên toàn cầu. Là thương hiệu nổi tiếng số 1 tại thị trường Trung Quốc và đã hiện diện tại hơn 100 quốc gia, HONOR nhanh chóng tạo dấu ấn với người dùng bởi những sản phẩm chất lượng cao và đa dạng phân khúc giá.
                Một trong những yếu tố quan trọng khi mua điện thoại là chất lượng sản xuất. HONOR cam kết mang đến cho người dùng những sản phẩm có chất lượng sản xuất cực kỳ cao với mức giá hợp lý. Điều này được thể hiện qua sự chăm chút tỉ mỉ trong từng chi tiết, thiết kế đẹp mắt và hiệu năng ổn định.
                Tại thị trường Việt Nam, HONOR đã tạo được dấu ấn mạnh mẽ và nhanh chóng chiếm được lòng tin của người dùng. Đặc biệt, DTLP Shop là đơn vị duy nhất có chính sách 100 ngày 1 đổi 1 cho sản phẩm HONOR. Điều này cho thấy sự tin tưởng và cam kết của HONOR đối với chất lượng sản phẩm của mình. Với chính sách này, người dùng có thể yên tâm hơn khi mua sản phẩm HONOR tại DTLP Shop, bởi nếu có bất kỳ vấn đề gì trong vòng 100 ngày sau mua hàng, bạn có thể hoàn toàn yên tâm đổi mới sản phẩm.
                
                Top 3 smartphone HONOR được ưa chuộng nhất tại DTLP Shop
                Với sự kết hợp giữa công nghệ tiên tiến, thiết kế đẹp mắt và giá cả hợp lý, các sản phẩm HONOR đã nhanh chóng thu hút sự quan tâm của người dùng tại Việt Nam. Từ các dòng điện thoại cao cấp như HONOR 90 5G cho đến các mẫu điện thoại giá rẻ như HONOR X series, HONOR mang đến nhiều lựa chọn phù hợp với nhu cầu và ngân sách của mọi người.
                HONOR 90 Lite 5G là một chiếc điện thoại thông minh đáng chú ý trong phân khúc tầm trung. Điểm nổi bật của nó là camera 100MP, không chỉ cho phép chụp ảnh với độ phân giải cao, mà còn đảm bảo mỗi bức ảnh sắc nét và rõ ràng, ngay cả khi phóng to. Đây là một tính năng ấn tượng với dòng điện thoại dưới 6 triệu này, khiến HONOR 90 Lite 5G trở thành lựa chọn hàng đầu cho các bạn học sinh và sinh viên.
                Về hiệu suất, HONOR 90 Lite 5G được trang bị bộ vi xử lý MediaTek Dimensity 6020, cùng dung lượng bộ nhớ lên đến 256GB - cao gấp đôi so với các sản phẩm cùng phân khúc. Điều này mang lại trải nghiệm mượt mà và khả năng lưu trữ lớn, phù hợp cho việc lưu trữ ảnh, video và các tệp tin khác.',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 2,
                'tieu_de' => 'SIÊU SALE 12.12 - Mua sắm thả ga với 12 deal hời đến 70% và hàng nghìn sản phẩm giảm sâu sập sàn',
                'hinh' => 'tin10.webp',
                'tom_tat' => 'Chào đón mùa lễ hội cuối năm, DTLP Shop mang đến cho quý khách hàng chương trình khuyến mãi siêu hấp dẫn nhân ngày 12.12. ',
                'noi_dung' => 'Khám phá ngay 12 ưu đãi hấp dẫn, với mức giảm từ 12% đến tới 70% trên nhiều danh mục sản phẩm đa dạng. Từ điện thoại thông minh, laptop, đến các sản phẩm gia dụng, máy tính bảng, smartwatch và phụ kiện - tất cả đều có mặt tại DTLP Shop với giá cực kỳ hấp dẫn.

                Điện thoại giảm đến 9 triệu
                
                Điện thoại giảm mạnh mẽ đến 9 triệu! Đừng bỏ lỡ cơ hội sở hữu chiếc smartphone mới với giá ưu đãi chưa từng có.
                
                Đặc biệt nhất là chương trình 2 năm bảo hành độc quyền đối với iPhone 15 series - Không lo mất giá. Chương trình lần này mang đến sự an tâm trong quá trình trải nghiệm cho khách hàng. Đồng thời để các chủ sở hữu iPhone không lo về việc sản phẩm bị mất giá trên thị trường.
                Không chỉ vậy, DTLP Shop còn mang đến chương trình bảo hành cho dòng sản phẩm Honor #1 Máy chất, Giá rẻ nhất cùng chính sách 100 ngày 1 ĐỔI 1 lần đầu tiên có mặt tại Việt Nam. Nếu bạn không hài lòng với sản phẩm trong vòng 100 ngày đầu tiên, DTLP Shop sẽ đổi ngay sản phẩm mới, không điều kiện, không phức tạp. Đây là cam kết đầu tiên và duy nhất tại Việt Nam!
                Nâng cấp máy tính của bạn với ưu đãi giảm giá lên đến 35% cho laptop và linh kiện PC hàng đầu. Đây là cơ hội sở hữu những chiếc laptop cấu hình cao với hiệu năng vượt trội, giá ưu đãi. Với mức giảm đến 35%, đây là cơ hội không thể bỏ qua để nâng cấp trang thiết bị của bạn và đảm bảo bạn luôn đứng đầu trong các trận chiến ảo cũng như thực hiện đa tác vụ trong công việc. Hãy biến 12.12 thành ngày kỷ niệm rinh về bộ máy tính với hiệu năng xịn, giá phải chăng. ',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 2,
                'tieu_de' => 'Tuần lễ Lenovo: DTLP Shop giảm “sốc” đến 30% và tặng thêm 1 năm bảo hành cho HS - SV',
                'hinh' => 'tin11.webp',
                'tom_tat' => 'Từ 05/12 - 11/12/2023, khi khách hàng chọn mua laptop Lenovo tại DTLP Shop sẽ có cơ hội nhận ngay ưu đãi lên đến 30% và tặng thêm 1 năm bảo hành.',
                'noi_dung' => 'Được biết, DTLP Shop triển khai chương trình “Tuần lễ Lenovo” với hàng loạt ưu đãi giá trị dành tặng khách hàng. Theo đó,  khi khách hàng chọn mua laptop Lenovo trong thời gian từ 05/12 – 11/12/2023 sẽ nhận được ưu đãi đến 30%. Chưa hết, khi khách hàng là học sinh – sinh viên, sẽ được tặng bảo hành 1 năm, nâng tổng thời gian bảo hành lên đến 03 năm. Đây cũng là ưu đãi độc quyền của DTLP Shop, giúp các khách hàng yên tâm hơn khi sử dụng sản phẩm, cũng như tiết kiệm thêm được một phần chi phí nếu chẳng may laptop gặp sự cố trong quá trình sử dụng.
                Bên cạnh những ưu đãi độc quyền trên, khi khách hàng mua laptop trong “tuần lễ Lenovo” sẽ nhận được nhiều quà tặng thiết thực như:

Tặng phiếu mua hàng 300.000 đồng mua máy in.
Tặng phiếu mua hàng 300.000 đồng mua màn hình LCD
Tặng tai nghe choàng đầu ProOne trị giá 449.000 đồng khi mua Office kèm MTXT.
Tặng balo laptop cao cấp.
Tặng Chuột Gaming GM03 hoặc GM08.
Giảm ngay 5% tối đa 200.000 đồng khi thanh toán trả góp 6/12 tháng qua Kredivo.
Laptop Lenovo là thương hiệu sản xuất máy tính được thành lập bởi tập đoàn Lenovo Group năm 1984 tại Trung Quốc. Sau hơn 30 năm hoạt động, thương hiệu đã có mặt ở hơn 160 quốc gia và vùng lãnh thổ, trong đó có Việt Nam. Hiện nay, Lenovo cho ra mắt nhiều dòng phù hợp với mọi nhu cầu của người dùng từ giải trí, học tập, chơi game, văn phòng, kinh doanh hay dân IT, thiết kế đồ họa. Với thiết kế đẹp mắt, sang trọng, cấu hình và độ bền cao, hãng được các nhà bán lẻ bầu chọn là thương hiệu của năm 2013. 

Để cạnh tranh với các thương hiệu khác, Lenovo tập trung phát triển cấu hình, sản phẩm được trang bị hệ điều hành mới nhất, bộ xử lý hiện đại cùng hiệu năng làm việc mạnh mẽ mang đến trải nghiệm tuyệt vời nhất cho người sử dụng. Một trong những ưu điểm của laptop Lenovo là giá thành máy thường rẻ hơn từ 1-3 triệu cùng cấu hình. Điều này phù hợp với những người có kinh tế hạn hẹp nhưng muốn sở hữu máy có cấu hình tốt. Thời lượng pin của Lenovo có thể hoạt động từ 4-6 tiếng mà không cần sạc giúp bạn thoải mái làm việc ở mọi nơi. 

Các sản phẩm tại DTLP Shop đều là hàng chính hãng. Khách hàng có thể mua trực tiếp tại các cửa hàng, chọn mua trực tuyến hoặc gọi hotline 1800 6601 để được tư vấn.',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 3,
                'tieu_de' => 'Mách bạn cách nấu món bún ốc thơm ngon, chuẩn vị ngay tại nhà đơn giản nhất',
                'hinh' => 'tin12.webp',
                'tom_tat' => 'Bún ốc là món ăn hấp dẫn, có hương vị thơm ngon, nước dùng đậm đà, vị chua thanh hoà quyện cùng chả ốc và thịt ốc dai giòn. Món ăn này thích hợp cho buổi sáng, đặc biệt vào ngày hè oi nóng, hãy cùng DTLP Shop chuẩn bị các bước cần thiết để nấu món bún ốc nhé.',
                'noi_dung' => 'Không cần phải rời khỏi nhà để tìm kiếm ở các hàng quán, bạn giờ đây có thể thưởng thức một bữa ăn ngon với món bún ốc thanh mát chuẩn vị ngay tại nhà. Bài viết này, DTLP Shop sẽ tiết lộ cách nấu bún ốc đơn giản nhất dành cho bạn. Hãy cùng đọc qua để biết thêm chi tiết.

                Nguyên liệu cho món bún ốc
                Một tô bún ốc hấp dẫn, hương vị thơm ngon sẽ cần nước dùng đậm đà, vị chua thanh hòa quyện cùng chả ốc và thịt ốc dai giòn. Món ăn này thích hợp cho buổi sáng, hãy cùng chúng tôi chuẩn bị các nguyên liệu cần thiết để nấu món bún ốc nhé, định lượng này phù hợp cho 2-3 người ăn: 

Ốc bươu: 1kg 
Xương heo: 400g
Mọc (giò sống): 150 g 
Đậu phụ (tàu hũ): 2 cái
Cà chua: 3 quả
Bún tươi: 500 g 
Hành tím và tỏi băm nhuyễn
Rau ăn kèm: hành lá, giá đỗ, rau muống bào, tía tô, ngò gai…
Gia vị: muối, hạt nêm, đường, giấm, nước mắm, tiêu, màu dầu điều, dầu ăn.
Sau khi chuẩn bị những nguyên liệu trên, bạn đã bước gần hơn tới tô bún ốc tuyệt vời và đầy đặn hương vị rồi đó!

Các bước nấu bún ốc đơn giản nhất
Bước 1: Sơ chế nguyên liệu
Đầu tiên, ngâm ốc trong nước vo gạo hoặc nước sạch cùng vài lát ớt qua đêm hoặc ít nhất 6 tiếng để ốc hết chất bẩn. Sau đó, bạn đem ốc rửa sạch với nước.
Xương heo sau khi được rửa sạch bằng nước và muối, hãy trụng qua nước sôi để làm cho xương săn chắc và loại bỏ mọi chất bẩn.
Cà chua sau khi được rửa sạch, hãy cắt thành miếng hình múi cau. Đậu phụ cũng được cắt thành từng miếng vuông vừa ăn.
Bạn có thể chuẩn bị một ít hành lá và ngò gai, sau đó băm nhuyễn để làm rau ăn kèm, tăng thêm hương vị cho món bún ốc của bạn.
',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 3,
                'tieu_de' => '3 cách làm tinh dầu bưởi siêu dễ, nhanh chóng và bí kíp bảo quản tinh dầu dài lâu',
                'hinh' => 'tin13.webp',
                'tom_tat' => 'Cách làm tinh dầu bưởi là chủ đề được nhiều chị em tìm hiểu, bởi đây là loại tinh dầu rất hữu ích cho việc làm đẹp. Nó giúp dưỡng da mềm mịn và chăm sóc tóc bóng mượt. Nếu bạn không muốn mua tinh dầu làm sẵn, hãy thử làm ngay với các bước hướng dẫn được DTLP Shop chia sẻ sau đây.',
                'noi_dung' => 'Cách làm tinh dầu bưởi khá đơn giản, bạn có thể làm bằng vỏ bưởi tươi hoặc vỏ bưởi khô đều được, với các nguyên liệu chuẩn bị dễ kiếm. Sau khi đặc chế tinh dầu, bạn cũng nên biết cách bảo quản chúng sao cho cẩn thận, giữ cho sản phẩm dùng được lâu mà không gây hại cho cơ thể.

                Cách làm tinh dầu bưởi từ vỏ bưởi tươi
                Cách làm tinh dầu bưởi từ vỏ bưởi tươi là phương thức được nhiều chị em áp dụng nhất, bởi các bước thực hiện không quá khó khăn, cũng không tốn nhiều thời gian.
                
                1. Chuẩn bị nguyên liệu
                Vỏ bưởi tươi: 1 quả
                Nước: 1 lít
                Bát sứ: 1 chiếc
                Đá lạnh: 4-5 viên.
                2. Cách làm tinh dầu bưởi từ vỏ tươi
Bước 1: Bạn loại bỏ hết phần cùi trắng bám ở vỏ bưởi, sau đó rửa sạch vỏ. Đây là phần chứa nhiều tinh dầu nhất của quả.
Bước 2: Cắt vỏ bưởi thành các khúc dài khoảng 2-3cm để thu được nhiều tinh dầu.
Bước 3: Cho vỏ bưởi vào trong nồi, đổ nước sạch vào, cho ngập tới khoảng 1/3 vỏ. Sau đó, bạn đặt chiếc bát vào giữa nồi.
Bước 4: Đậy ngược nắp nồi rồi đặt đá viên lên trên nắp. Bạn đun nồi nước ở mức nhiệt cao cho tới khi sôi, sau đó hạ nhỏ xuống và đun trong khoảng 15 phút. Tinh dầu sẽ tụ lại ở trong bát.',
                'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 3,
                'tieu_de' => 'Máy làm sữa hạt BlueStone có tốt không? Của nước nào? Đánh giá những ưu điểm nổi bật nhất',
                'hinh' => 'tin14.webp',
                'tom_tat' => 'Máy làm sữa hạt BlueStone có tốt không? Sở hữu những ưu điểm nào vượt trội? Giá thành ra sao? Đây là những câu hỏi được tìm kiếm nhiều nhất khi khách hàng có nhu cầu tìm hiểu và tìm mua máy làm sữa hạt BlueStone. DTLP Shop sẽ cùng bạn giải đáp qua bài viết này nhé.',
                'noi_dung' => 'Máy làm sữa hạt là thiết bị gia dụng nhà bếp ngoài chức năng nấu sữa thì còn làm được rất nhiều món khác. Vậy máy làm sữa hạt BlueStone có tốt không? Được trang bị những tính năng nào? Có nên mua không? Bài viết này chính là thông tin bạn đang tìm kiếm.

                Máy làm sữa hạt BlueStone của nước nào?
                Bluestone là thương hiệu gia dụng thuộc tập đoàn GAAC (Great American Appliance Corporation). Từ năm 2011, BlueStone bắt đầu tung ra thị trường các sản phẩm của mình nhằm giúp cuộc sống của người tiêu dùng trở nên thuận tiện và tiện nghi hơn, kết quả thu về là những phản hồi rất tốt.
                Tận dụng đà phát triển này, BlueStone không ngừng nghiên cứu và sản xuất ngày càng nhiều sản phẩm hữu ích như: Nồi chiên không dầu, máy làm sữa hạt, nồi cơm điện, máy xay sinh tố, máy đánh trứng,... Điểm chung của thiết bị gia dụng mang thương hiệu BlueStone là đều được sản xuất trên dây chuyền hiện đại và ứng dụng công nghệ tiên tiến, được kiểm nghiệm chặt chẽ trước khi cung ứng đến tay khách hàng. 

Trong đó, máy làm sữa hạt là một trong những sản phẩm nổi bật được BlueStone chú trọng. Ngoài sở hữu thiết kế hiện đại, mẫu mã đa dạng thì chúng còn có nhiều tính năng hữu ích, giúp người dùng thực hiện được nhiều món ăn hấp dẫn.
Máy làm sữa hạt BlueStone có tốt không?
Để trả lời câu hỏi máy làm sữa hạt BlueStone có tốt không thì bạn cần hiểu được các đặc điểm của sản phẩm. Theo dõi đánh giá dưới đây để có thêm thông tin nhé.

Đa dạng trong mẫu mã, thiết kế 
Điểm cộng đầu tiên của máy làm sữa hạt BlueStone là có sự đa dạng về mẫu mã, thiết kế. Ngoài những sản phẩm cỡ lớn với thiết kế giống máy xay sinh tố thì hãng cũng tung ra thị trường dòng sản phẩm với hình dạng nhỏ gọn như chiếc bình đựng nước. Điều này đáp ứng được nhu cầu của mọi khách hàng, có thể sử dụng tại nhà hoặc mang theo khi đi du lịch, dã ngoại đều hợp lý.',
                
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],

            [
                'id_danh_muc_tin' => 3,
                'tieu_de' => 'Gợi ý top 5 tivi 49 inch màn mình 4k chất lượng và trong tầm giá tốt nhất bạn nên tham khảo',
                'hinh' => 'tin15.webp',
                'tom_tat' => 'Hiện nay, đa số người dùng ưa chuộng tivi 4K vì chúng mang lại chất lượng hình ảnh rõ nét và sở hữu nhiều công nghệ tiên tiến vô cùng ấn tượng. Nếu bạn cũng đang phân vân không biết lựa chọn chiếc tivi nào cho gia đình, hãy để DTLP Shop bật mí cho bạn danh sách top 5 tivi 4K kích thước 49 inch đáng mua nhất hiện nay nhé!',
                'noi_dung' => '1. Tivi 49 inch Sony 4K KD-49X7000G - 49 Inch
                Smart Tivi Sony 4K 49 inch KD-49X7000G được thiết kế với ngoại hình chắc chắn, gọn gàng và màu sắc tối tạo nên sự hài hoà và sang trọng trong bất kỳ không gian nào.
                
                Với cùng độ phân giải 4K, chiếc tivi này cung cấp hình ảnh chi tiết với độ nét cao hơn gấp 4 lần so với Full HD. Công nghệ HDR10 giúp tăng cường độ tương phản, làm rõ nét màu sắc, tạo ra hình ảnh sống động và chân thực.
                
                Ngoài ra, màn hình chấm lượng tử TRILUMINOS và công nghệ 4K X-Reality PRO còn đóng góp vào việc mở rộng dải sắc màu, tạo nên một trải nghiệm xem với hình ảnh rực rỡ, sắc nét và gần gũi hơn ở tiêu chuẩn 4K.
                2. Tivi 49 inch Android Sony 4K KD-49X7500H
Android Tivi Sony 4K 49 inch KD-49X7500H với thiết kế viền đen tinh tế và chân đế hình chữ V màu bạc ngược đã tạo nên một tổng thể hài hòa, mang đến cho không gian nội thất nhà bạn một vẻ hiện đại và sang trọng.

Tivi còn được tăng cường màu sắc, độ tương phản, và chi tiết hình ảnh với Chip xử lý X1 4K Processor và công nghệ 4K X-Reality PRO, giúp nâng cao chất lượng hình ảnh đến gần chuẩn độ phân giải 4K. Công nghệ X-Protection PRO còn giúp bảo vệ tivi khỏi bụi, ẩm, sấm sét, và sốc điện, đảm bảo tivi hoạt động ổn định và bền bỉ.

Với tổng công suất loa 20 W và công nghệ loa Bass Reflex Speaker kết hợp thiết kế hộp riêng biệt, Android Tivi Sony 4K KD-49X7500H mang đến âm thanh sống động, kèm theo khả năng tái tạo âm trầm rõ nét, đem đến một trải nghiệm giải trí thú vị và thoải mái.
3. Tivi 49 inch Android Sony 4K KD-49X8000G
Android Tivi Sony 4K 49 inch KD-49X8000G sở hữu thiết kế hiện đại với chân đế chữ V chắc chắn cùng tông màu đen sang trọng, là sự lựa chọn phù hợp cho nhiều không gian nội thất như phòng ngủ hay phòng khách.

Tivi tích hợp công nghệ 4K X-Reality PRO, giúp hiển thị hình ảnh chân thực, sắc nét. Cùng với công nghệ S-Force Front Surround, tạo ra âm thanh mạnh mẽ và hiệu ứng nổi trội, cung cấp trải nghiệm đẳng cấp cả về âm thanh lẫn hình ảnh.

Đặc biệt, sản phẩm hỗ trợ hệ điều hành Android 8.0, cho phép điều khiển tivi bằng điện thoại thông qua ứng dụng Video & TV SideView, tích hợp chức năng tìm kiếm bằng giọng nói tiếng Việt, giúp tối ưu hóa trải nghiệm người dùng và làm cho các thao tác trở nên dễ dàng hơn.

',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 3,
                'tieu_de' => 'Hướng dẫn cách cài đặt YouTube trên tivi LG chi tiết và nhanh nhất dành cho bạn',
                'hinh' => 'tin16.webp',
                'tom_tat' => 'Bạn đã biết cách cài đặt YouTube trên tivi LG chưa? Nếu chưa thì hãy đọc ngay bài viết để biết cách tải và cài đặt ứng dụng YouTube về tivi LG đúng cách, chi tiết và nhanh nhất, giúp bạn và gia đình có thể xem YouTube trên tivi thuận tiện hơn nhé! Cùng DTLP Shop tìm hiểu ngay!',
                'noi_dung' => 'YouTube là ứng dụng giải trí được nhiều người yêu thích, chính vì vậy ứng dụng này ngày càng trở nên quen thuộc và phổ biến trên các dòng Smart tivi. Bạn đang sử dụng tivi LG, nhưng chưa có YouTube, hãy tham khảo cách cài đặt YouTube trên tivi LG ngay dưới đây.

                Lý do nên cài ứng dụng cho tivi LG
                Bạn nên có các ứng dụng trên tivi LG để có thể giải trí đa dạng gồm các ứng dụng phim, các video trực tuyến, chương trình truyền hình, âm nhạc, trò chơi, đọc báo, nghe đài cùng rất nhiều nội dung khác nữa...
                Bạn sẽ có được trải nghiệm tuyệt vời khi giải trí trên tivi LG với các công nghệ hình ảnh sắc nét, âm thanh tối tân sống động, tiên tiến.

Dễ dàng truy cập vào các ứng dụng yêu thích như YouTube, Netflix, Disney+, Amazon Prime Video cùng nhiều nền tảng ứng dụng khác nữa mà không cần đến sự hỗ trợ của các thiết bị ngoại vi.

Đồng bộ hóa ứng dụng trên tivi LG nhanh chóng và cài đặt ứng dụng từ tài khoản người dùng trên nhiều thiết bị LG khác nhau.

Cách cài đặt YouTube cho tivi LG
Có hai cách cài đặt YouTube trên tivi LG dành cho tivi Internet thường và Smart tivi. Chúng ta cùng tìm hiểu ngay sau:

Hướng dẫn tải Youtube trên tivi LG Internet thường
Bước 1: Sử dụng remote tivi LG, nhấn vào nút hình ngôi nhà để màn hình tivi hiển thị giao diện chính của WebOS.
Bước 2: Tại giao diện chính này, bạn hãy chọn mục có chữ LG Content Store để truy cập vào cửa hàng ứng dụng của LG.
Bước 3: Trong LG Content Store, chọn Ứng dụng và Trò chơi rồi tìm kiếm ứng dụng YouTube, nhấn vào biểu tượng và chọn Cài đặt.
Bước 4: Lúc này, bạn chọn mục Chấp nhận, tivi sẽ hiển thị giao diện tạo tài khoản LG, bạn điền những thông tin theo yêu cầu để tạo tài khoản LG.
Bước 5: Xác nhận tài khoản LG bằng mail bạn cung cấp (gmail hoặc email).
Bước 6: Hãy truy cập vào email để xác nhận thông tin tài khoản đã đăng ký, chọn email từ LG Smart World để kích hoạt và xác nhận đã đăng ký tài khoản thành công.
Bước 7: Lúc này, bạn đăng nhập tài khoản trên tivi LG bằng các thông tin đã tạo để tải YouTube về tivi. Vậy là bạn đã có thể xem các chương trình giải trí đặc sắc trên YouTube sau khi tải về.
Lưu ý: Quá trình tải ứng dụng YouTube và cài đặt sẽ có một số khác biệt trên giao diện tivi LG, vì tùy thuộc vào phiên bản phần mềm cũng như mẫu tivi LG nhà bạn đang sử dụng.

Hướng dẫn tải Youtube về Smart tivi LG
Bước 1: Nhấn nút Home trên remote của smart tivi LG.
Bước 2: Tại giao diện Home, bạn tìm kho ứng dụng LG Content Store.
Bước 3: Mở LG Content Store, chọn ứng dụng YouTube, nhấn Cài đặt.
Bước 4: Lúc này, LG sẽ yêu cầu bạn đăng nhập vào tài khoản LG để tải ứng dụng YouTube cho LG Smart tivi. Hãy đăng nhập tài khoản đã có hoặc thiết lập tài khoản mới trên website LG.
Bước 5: Chọn bấm Chấp nhận điều khoản, nhấn Cài đặt ứng dụng.
Bước 6: Đợi vài phút để cài đặt hoàn thành, bấm Bắt đầu để chạy ngay YouTube.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 4,
                'tieu_de' => 'Mẹo giúp tăng hiệu suất điện thoại Android',
                'hinh' => 'tin17.jpg',
                'tom_tat' => 'Nếu hiệu suất điện thoại Android bắt đầu chậm đi đáng kể, người dùng nên thực hiện một số thay đổi để có thể giúp tăng tốc thiết bị của mình.',
                'noi_dung' => 'Việc điện thoại chậm chắc chắn gây khó chịu khi người dùng phải mất nhiều thời gian để tải ứng dụng hoặc thậm chí mở khóa khi nhập mật khẩu. Dưới đây là một số mẹo giúp tăng tốc hiệu suất điện thoại Android của mình.
                Gỡ các ứng dụng không sử dụng
Nếu không cần hoặc không sử dụng ứng dụng nữa, hãy gỡ cài đặt nó khỏi thiết bị vì các ứng dụng chiếm dung lượng bộ nhớ trên điện thoại. Ngoài ra, một số ứng dụng chạy trong nền nên chúng sẽ thêm vào việc sử dụng dữ liệu trên điện thoại đó. Khi những thứ này chạy chung và chiếm dung lượng, điện thoại sẽ không thể chạy trơn tru nữa.
Nếu đang sử dụng điện thoại Android và hết bộ nhớ, người dùng có thể tận dụng một trong những lợi thế của thiết bị Android, chính là đi kèm khe cắm thẻ nhớ microSD (nếu thiết bị đó hỗ trợ). Tùy thuộc vào dung lượng mở rộng bộ nhớ của điện thoại, người dùng có thể lắp thẻ nhớ microSD 2 GB đến 32 GB vào khe cắm của điện thoại.

Cập nhật thiết bị
Người dùng cần cập nhật thiết bị của mình với chương trình cơ sở mới nhất khi Google có những cải tiến cho các hệ thống Android mới phát hành, bao gồm cải thiện hiệu suất, độ ổn định, khả năng kết nối...',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 4,
                'tieu_de' => 'Khi nào cần thay máy tính xách tay?',
                'hinh' => 'tin18.jpg',
                'tom_tat' => 'Nhiều người có suy nghĩ máy tính hoặc máy tính xách tay cũ khó buông bỏ, nhưng cuối cùng cũng đến lúc phải nâng cấp vì muốn nhanh và an toàn hơn.',
                'noi_dung' => 'Câu hỏi đặt ra là “Liệu khi nào phù hợp cho việc thay thế thiết bị cũ?”. Hãy tham khảo một số tình huống sau để đưa ra quyết định khi nào nên nâng cấp thiết bị của mình.
                Thời gian tải hoặc khởi động chậm
Máy tính và máy tính xách tay không ngừng phát triển khi các mẫu mới được phát hành với thông số kỹ thuật và tính năng tốt hơn. Với công nghệ ngày nay, người dùng có thể khởi động hệ thống của mình chỉ trong vài giây và duyệt các trang web yêu thích với tốc độ cực nhanh. Họ có thể lướt web, chạy ứng dụng hay làm việc trên các văn bản một cách mượt mà.
Nếu đang sử dụng một máy tính cũ mà thấy thiết bị mất thời gian khởi động hoặc tải trang web, đã đến lúc cần nâng cấp. Một hệ thống mua trong khoảng thời gian một vài năm, người dùng có thể không cần phải nâng cấp nếu thấy nhu cầu là đủ. Đôi khi, trong những trường hợp này có thể nâng cấp các thành phần nhỏ hơn như RAM nhiều hơn, card đồ họa hoặc CPU tốt hơn, và đặc biệt là lắp SSD để cho cảm giác như mới.
Khi công nghệ tiếp tục phát triển, các phương pháp mà tội phạm sử dụng để đột nhập vào hệ thống và đánh cắp dữ liệu của mọi người cũng phát triển theo. Nếu máy tính không hỗ trợ phần mềm bảo mật mới nhất, người dùng sẽ dễ bị tấn công hơn.

Vì vậy, nếu đang sử dụng phiên bản Windows hoặc macOS cũ và phần mềm bảo mật không hoạt động, hoặc bắt đầu gặp các vấn đề về tính tương thích, chắc chắn đã đến lúc nâng cấp.
Đồ họa và màn hình kém
Nếu là một chuyên gia sáng tạo, thích chơi game hoặc xem phim, việc sở hữu một chiếc máy tính có card đồ họa tốt và màn hình hiển thị rất có giá trị. Máy tính cũ hơn có thể không chạy trơn tru các trò chơi hoặc phần mềm chỉnh sửa video mới nhất. Chúng cũng có màn hình mờ và độ phân giải thấp hơn có thể khiến việc làm việc trong các dự án hoặc xem phim trở nên khó chịu.

Ngày nay, máy tính và máy tính xách tay hiện đại cung cấp đồ họa độ phân giải cao cho khả năng hiển thị đẹp và sống động trên màn hình lớn, giúp trải nghiệm của người dùng thú vị hơn và cho phép người dùng có thể xem các chi tiết rõ nét hơn. Chất lượng màu sắc cũng đầy đủ, đồ họa sắc nét và rõ ràng mang đến trải nghiệm đắm chìm chưa từng có trên một chiếc máy cũ, lỗi thời.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 4,
                'tieu_de' => 'Mẹo nhỏ giúp nhanh chóng tăng tín hiệu cho iPhone',
                'hinh' => 'tin19.jpg',
                'tom_tat' => 'Bất kể đang sử dụng mạng nào, sẽ có thời điểm và địa điểm mà tín hiệu iPhone không mạnh như những gì người dùng mong muốn. Vậy làm thế nào để cải thiện?',
                'noi_dung' => 'Theo iDropnews, có vô số mẹo và thủ thuật có thể giúp người dùng tăng cường tín hiệu cho iPhone của mình. Giờ đây, một mẹo đơn giản nhưng hiệu quả có thể giúp tăng tín hiệu cho iPhone gần như ngay lập tức.
                Thủ thuật này đến từ người dùng @scottpolderman trên TikTok. Với hơn 1,4 triệu người theo dõi. Theo video, tất cả những gì người dùng cần làm là bật và tắt chế độ máy bay trên iPhone. Để làm điều này, người dùng có thể thực hiện như sau:

Vuốt xuống từ góc trên cùng bên trái màn hình để mở Control Center. Nếu có iPhone với Touch ID/Home, hãy vuốt lên từ cuối màn hình để mở Control Center.
Nhấn vào biểu tượng chế độ trên máy bay nằm gần góc trên cùng bên trái của màn hình để kích hoạt.
Nhấn lại vào biểu tượng chế độ trên máy bay để thoát khỏi chế độ trên máy bay.
Theo Scott, điều này sẽ buộc iPhone phải tìm kiếm một tháp mạng mới có thể cung cấp cho người dùng kết nối mạnh hơn nhiều. Về lý thuyết, iPhone luôn tìm kết nối tốt nhất có thể, vì vậy việc đặt lại các kết nối có thể cải thiện tín hiệu. Và nhiều người dùng trong phần bình luận trên video đã nhanh chóng chỉ ra rằng thủ thuật này thực sự có tác dụng với họ.
Tuy nhiên, như Scott đề cập trong phần bình luận, nó có thể không hiệu quả với tất cả mọi người bởi điều đó chủ yếu phụ thuộc vào vị trí của họ. Ví dụ: nếu đang ở nhà, rất có thể người dùng sẽ kết nối với cùng một tháp và nhận được cùng một tín hiệu bất kể người dùng có bật/tắt chế độ máy bay bao nhiêu lần. Điều này hoạt động tốt hơn khi người dùng đang đi du lịch hoặc đến một nơi khác.',

'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 4,
                'tieu_de' => 'Cách trì hoãn cập nhật Windows 11',
                'hinh' => 'tin20.jpg',
                'tom_tat' => 'Nếu khó chịu với tính năng tự động cập nhật Windows 11, người dùng có thể trì hoãn cập nhật bằng các thủ thuật sau.',
                'noi_dung' => 'Tùy thuộc vào thời gian muốn trì hoãn cập nhật Windows 11, người dùng sẽ có các lựa chọn từ đơn giản (ngắn hạn) cho đến nâng cao (dài hạn) như sau.

                Tạm ngưng cập nhật (ngắn hạn)
                Nhấp vào biểu tượng cửa sổ, chọn Settings (phím tắt: Windows + I);
                Mở Windows Update;
                Trong mục More options, tìm đến Pause updates;
                Chọn Pause for 1 week để tạm ngưng cập nhật trong 1 tuần, Pause for 2 weeks để tạm ngưng trong 2 tuần và Pause for 3 weeks để tạm ngưng 3 tuần.
                Để kích hoạt cập nhật trở lại trước khi hết hạn đã chọn, thực hiện lại bước 1 và bước 2, sau đó nhấn vào nút Resume Updates.

Chặn cập nhật lâu hơn
Để có thể chặn cập nhật lâu hơn nữa, người dùng có thể tìm đến cách can thiệp sâu hơn vào dịch vụ (services) của hệ thống.

Nhấn tổ hợp phím Windows + R;
Tại hộp thoại Run, gõ services.msc và nhấn OK;
Chọn OK, sau đó khởi động lại (restart) thiết bị.
Tuy nhiên, cách này vẫn không phải là biện pháp triệt để, vì trong một số trường hợp thì các bản cập nhật vẫn tự cài khi người dùng khởi động lại (Restart) thiết bị.

Tạm ngưng cập nhật - giải pháp "cần" cho sự ổn định
Các bản cập nhật của Windows 11, được Microsoft phát hành theo kỳ hạn hoặc khẩn cấp, giúp người dùng luôn được tiếp cận với những tính năng và các bản vá bảo mật mới nhất.

Trong một số nhỏ trường hợp hi hữu, các bản cập nhật của Windows có thể bị lỗi và thủ thuật trên có thể giúp những người dùng "chậm chân may mắn" tạm trì hoãn cập nhật để tránh các sự cố ngoài ý muốn.

Vậy nên, mỗi lúc Microsoft tung ra một bản cập nhật mới, hãy trì hoãn cập nhật Windows 11 theo thủ thuật này, tìm hiểu từ những "người tiên phong" xem có lỗi gì hay không rồi hãy tiến hành cập nhật.',

'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 5,
                'tieu_de' => 'LMHT: Vợ Uzi khoe thân hình lực lưỡng của chồng khiến fan bất ngờ',
                'hinh' => 'tin21.jpg',
                'tom_tat' => 'Được “khoe cơ bắp” với cộng đồng LMHT, Uzi và vợ khiến đông đảo fan tại Trung Quốc bất ngờ vì thân hình lực lưỡng so với quá khứ.',
                'noi_dung' => 'Trong mùa giải vừa qua, việc đột ngột trở lại thi đấu cho EDG đã khiến không ít fan LMHT Trung Quốc đổ dồn sự chú ý vào Uzi. Tuy nhiên, tuyển thủ này đã không thể cùng EDG góp mặt tại CKTG 2023, sau cùng EDG đã chia tay Uzi trong mùa chuyển nhượng vừa rồi.

                Trên sóng livestream cá nhân, Uzi cũng đã nhiều lần chia sẻ về việc anh sẽ không trở lại đấu trường chuyên nghiệp, bởi cơ thể của anh sẽ không chịu được lịch trình tập luyện khắc nghiệt (của bản thân Uzi) tại đấu trường LPL. Vì nguyên nhân này, nhiều fan cho rằng cơ thể Uzi khá “mỏng manh” so với người bình thường.
                
                Nhưng mới đây, vợ của Uzi bất ngờ “khoe chồng” trên mạng xã hội với những bức ảnh khiến cộng đồng fan ngỡ ngàng.
                “Xin chào mọi người, tôi đã “đổi chồng” rồi! Lần trước trả lời bình luận của ai đó, tôi đã nói Uzi chỉ có mặt mập thôi. Mỡ cơ thể đã ở mức 19%, nhiều người cho rằng tôi khoe khoang nên lấy tạm vài bức ảnh này đi… Anh ấy không chỉ tập thể dục để có cơ bắp mà còn để phục hồi chức năng (sau chấn thương) của mình…” – vợ Uzi chia sẻ.
                Về phần cộng đồng LMHT Trung Quốc, có khá nhiều fan bất ngờ vì cơ thể lực lưỡng của Uzi, nhiều fan còn “nửa đùa nửa thật” cho rằng đây là ảnh ghép vì gương mặt của Uzi có phần khác biệt so với thân thể lực lưỡng của tuyển thủ này.
                Mặt khác, cũng có khá nhiều fan dành tặng cặp đôi này những lời ca ngợi và hi vọng Uzi sẽ nhanh chóng hồi phục hoàn toàn sức khỏe như những ngày trước khi bị chấn thương.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 5,
                'tieu_de' => 'LMHT: Faker lọt top 10 nhân vật có tầm ảnh hưởng lớn nhất giới thể thao 2023 theo The Times UK',
                'hinh' => 'tin22.jpg',
                'tom_tat' => 'Không chỉ trong làng Esports, tuyển thủ vĩ đại nhất LMHT – Faker đã được ca ngợi trong giới thể thao bởi tờ The Times tại nước Anh.',
                'noi_dung' => 'Năm 2023 có thể không phải giai đoạn mà Faker giành được nhiều danh hiệu nhất trong một mùa giải, nhưng đây là năm mà Quỷ Vương Bất Tử đã trải qua không ít thăng trầm và có một cái kết tuyệt vời cho mùa giải 2023. Kể từ lúc đội tuyển gặp bất ổn về phong độ, Faker chấn thương tay, Bengi rời ghế HLV cho đến chức vô địch CKTG 2023 là một hành trình đầy cảm xúc.

                Sau khi giành cúp vô địch CKTG lần thứ 4, Faker và T1 đã thắng đề cử ở hàng loạt các lễ trao giải danh giá như The Game Awards, Esports Awards, LCK Awards 2023,…
                Mới đây, Faker tiếp tục được cộng đồng LMHT ca ngợi khi anh được tờ báo hàng đầu nước Anh – The Times xếp hạng vào 10 nhân vật có tầm ảnh hưởng lớn nhất giới thể thao 2023.

“Faker, biệt danh Quỷ Vương Bất Tử là thành viên của đội tuyển Hàn Quốc T1, đội đã giành chức vô địch (LMHT) thế giới năm 2023. Mục thể thao không thường xuyên đưa tin về thể thao điện tử, nhưng sẽ không lâu nữa trước khi Faker trở thành ngôi sao Olympic chính thống như Usain Bolt.” – cây bút tại The Times giới thiệu và giải thích lý do tại sao một ngôi sao Esports lại trở thành “người có tầm ảnh hưởng” trong giới thể thao.
Ngoài Faker, danh sách này cũng bao gồm một số cái tên khác được The Times hé lộ như: Lionel Messi – siêu sao bóng đá, Otani Shohei – người có bản hợp đồng cao nhất lịch sử MLB với 700 triệu USD, Sam Kerr – nữ cầu thủ bóng đá hàng đầu nước Úc,…

Trở lại với cộng đồng LMHT, rất nhiều fan của Quỷ Vương Bất Tử đều đang ca ngợi anh chàng và cho rằng năm nay là một năm khó quên trong sự nghiệp của tuyển thủ này.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 5,
                'tieu_de' => 'LMHT: Toàn cảnh drama giữa huanfeng và TT tại LPL',
                'hinh' => 'tin23.jpg',
                'tom_tat' => 'Cộng đồng LMHT đã xuất hiện nhiều nguồn tin cho rằng TT đã gây sức ép để khiến huanfeng phải chuyển sang thi đấu ở vị trí hỗ trợ.',
                'noi_dung' => 'Cách đây vài ngày, câu chuyện về huanfeng đang “chật vật vì tiền thuê nhà” đã được đông đảo game thủ LMHT bàn tán xôn xao. Nguyên nhân vì tuyển thủ này từng bước vào chung kết CKTG năm nào cùng SN, vậy nhưng đến nay lại không thể lo cho cuộc sống của chính mình.
                Chi tiết về vụ việc này, huanfeng chỉ ra sân thi đấu duy nhất 2 trận ở LPL Mùa Hè 2023 cho TT (ThunderTalk Gaming). Sau đó, huanfeng đã phải dự bị cho 1xn trong toàn bộ mùa giải.

Chia sẻ về vụ việc này, đã có nhiều nguồn tin trên các diễn đàn LMHT Trung Quốc tiết lộ rằng huanfeng bị ban huấn luyện cùng quản lý gây sức ép và yêu cầu anh tập luyện để thi đấu ở vị trí hỗ trợ. Những người này được cho là đã hứa sẽ để huanfeng thi đấu chính (cùng một tuyển thủ khác) nếu anh chịu thi đấu ở vị trí hỗ trợ.

Kết quả là tuyển thủ này đã chấp nhận tập luyện cho vị trí mới thay vì ngỏ ý muốn chấm dứt hợp đồng và rời đội. Lịch sử đấu của huanfeng cũng xuất hiện những trận đấu hỗ trợ thay vì xạ thủ như mọi khi.
Nhưng ngay cả khi đã tập luyện trong vị trí hỗ trợ, huanfeng vẫn bị TT chấm dứt hợp đồng vào ngày 11/12 – 1 ngày trước khi mùa chuyển nhượng năm nay kết thúc. Điều này khiến huanfeng rơi vào cảnh “thất nghiệp” và phải “chật vật vì tiền thuê nhà”.

Về phần TT, đội tuyển này đã bị chỉ trích kịch liệt vì những thông tin bên trên. Thậm chí đông đảo fan LMHT Trung Quốc còn cho rằng TT đã có hành động thiếu chuyên nghiệp khi chấm dứt hợp đồng với huanfeng ngay trước khi mùa chuyển nhượng kết thúc. Vậy là đội tuyển này cũng lên tiếng trong drama này:

“Sau LPL Mùa Hè 2023, đội tuyển đã trao đổi với các tuyển thủ về việc kết thúc hợp đồng và giúp họ liên hệ với các đội tuyển khác.

Sau khi bàn bạc kỹ lưỡng, các tuyển thủ đã tự nguyện chuyển sang vị trí hỗ trợ để thử sức mà không chịu bất kỳ áp lực hay ép buộc nào từ đội tuyển. Trong giai đoạn này, đội tuyển đã tổ chức rất nhiều trận đấu tập và thử nghiệm liên quan đến các tuyển thủ chuyển sang hỗ trợ, đồng thời tiếp tục tích cực tìm kiếm các đội mới cho các xạ thủ và hỗ trợ của mình.

Cuối cùng, hai bên đã đạt được sự đồng thuận và hoàn toàn tôn trọng lựa chọn chấm dứt hợp đồng.

Đội tuyển và các tuyển thủ luôn giao tiếp một cách thân thiện, không có mâu thuẫn hay xung đột, không hề có ý định đuổi tuyển thủ…”',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 5,
                'tieu_de' => 'LMHT: Hết chê bộ kỹ năng, người chơi tiếp tục than phiền về hiệu ứng trang phục của Hwei',
                'hinh' => 'tin24.png',
                'tom_tat' => 'Hwei liên tục nhận về nhiều phê bình từ cộng đồng người chơi, từ kỹ năng cho đến bây giờ là bộ trang phục Sứ Giả Xứ Tuyết.',
                'noi_dung' => 'Vào ngày 6 tháng 12, Riot Games đã giới thiệu Hwei, vị tướng mới với bộ kỹ năng vô cùng phức tạp. Trong thời gian người chơi đang thử nghiệm vị tướng Pháp Sư có tới 10 kỹ năng khác nhau, Hwei liên tục nhận phản hồi tiêu cực vì anh quá yếu cũng như tỷ lệ thắng thảm hại. Sau khi được tăng sức mạnh, một khía cạnh khác của Hwei tiếp tục bị chê bai khi mới đây trang phục Sứ Giả Xứ Tuyết được cho là khiến cho việc sử dụng Hwei khó khăn hơn.
                Bản nâng cấp Hwei Sứ Giả Xứ Tuyết đã thêm vào phong cách mùa đông trong bộ kỹ năng đầy tính nghệ thuật của anh, với tông màu trắng tuyết trong các chiêu thức. Tuy nhiên, vấn đề xoay quanh bộ trang phục này đó là nó khiến cho các kỹ năng của Hwei chủ yếu có cùng một màu và từ đó khiến nó trở nên khó phân biệt hơn khi chiến đấu.
                Thông thường, ở trang phục mặc định, bộ kỹ năng Q, W, E của Hwei đều theo ba màu riêng biệt là đỏ, lam và tím. Điều này giúp cho người chơi Hwei lẫn đối thủ có thể nhận diện bộ kỹ năng của hắn đơn giản hơn. Nhưng trong trang phục Sứ Giả Xứ Tuyết, đa số các chiêu thức đều có cùng tông màu khiến việc phân biệt trở nên khó khăn, nhất là với một vị tướng vừa chỉ mới xuất hiện trong LMHT không lâu.
                Vấn đề nhận diện chiêu thức này cũng được đề cập trong một buổi “Ask Me Anything” trên subreddit của LMHT, nơi những người phát triển vị tướng Hwei trả lời các câu hỏi xoay quanh Họa Sĩ Vạn Cảnh. Tuy nhiên, chỉ có duy nhất trường hợp về việc trang phục của Hwei, cụ thể là giữa hai kỹ năng QQ và EQ quá giống nhau vẫn chưa được Riot trả lời thỏa đáng.

Một biện pháp được nhiều người chơi đồng tình rằng Riot có thể thêm hoặc giảm đi một gam màu ở mỗi kỹ năng riêng biệt củ Hwei Sứ Giả Xứ Tuyết. Bằng cách này, ta vẫn giữ lại được hiệu ứng mùa đông trên trang phục nhưng đồng htời cũng giúp người chơi dễ xác định chiêu thức của Hwei hơn.

Xuyên suốt lịch sử LMHT, luôn xảy ra thường xuyên các vị tướng có những trang phục đậm chất “pay-to-win” như DJ Sona, iBlitzcrank hay Lux Thập Đại Nguyên Tố. Những bộ cánh này đều giúp cho chiêu thức trở nên có phần khó quan sát và tránh né hơn. Nếu Riot Games không thay đổi trang phục Hwei Sứ Giả Xứ Tuyết, rất có khả năng trang phục này sẽ bị cấm khỏi đấu trường chuyên nghiệp vào mùa giải 2024.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 6,
                'tieu_de' => 'TikTok - bệ phóng cho hoạt động sáng tạo nội dung',
                'hinh' => 'tin25.jpg',
                'tom_tat' => 'Từ màn hình nhỏ trên điện thoại, hoạt động sáng tạo nội dung trên TikTok đã vượt xa xuất phát điểm, đạt thành tựu nhất định.',
                'noi_dung' => '2023 đánh dấu 5 năm TikTok hoạt động tại Việt Nam. Qua màn hình nhỏ, nhiều nhà sáng tạo nội dung có sân chơi khai phá tiềm năng, kéo theo đó là loạt chiến dịch truyền cảm hứng. Bà Trang Nguyễn - Giám đốc Marketing TikTok Việt Nam - nhận định, không đơn thuần là công cụ giải trí cho giới trẻ như số đông vẫn nghĩ, nền tảng này dành cho mọi giới tính, độ tuổi, mong kết nối, tự tin sáng tạo và quay đa dạng chủ đề.

                Chỉ riêng 2020-2021, nội dung giáo dục trên nền tảng tăng 34 lần, làm đẹp và e-Commerce cũng gấp 5. Hashtag "LearnOnTikTok" vừa kỷ niệm ba năm cung cấp người dùng kho kiến thức đa dạng, hút hơn 1.000 nhà sáng tạo nội dung đóng góp.
                Đón đầu xu hướng Shoppertainment (mua sắm kết hợp giải trí), TikTok Shop mở rộng cơ hội tiếp cận khách hàng, giúp các đơn vị gia tăng doanh thu. Trong đó, Yody và Thích Cay thắng hạng mục "Doanh nghiệp vừa và nhỏ (SMB) của năm". Nếu Thích Cay chú trọng nội dung gần gũi, mộc mạc nhưng ngon mắt, thì Yody đầu tư hình ảnh, cách thức quay dựng.

Không chỉ người dùng cá nhân hay thương hiệu, TikTok còn đồng hành các tổ chức, ban ngành trên hành trình kiến tạo giá trị xã hội. Trong đó có "Chợ phiên OCOP" quảng bá đặc sản, nông sản địa phương, do nền tảng kết hợp với Trung tâm Xúc tiến Thương mại Nông nghiệp và Ban Thanh niên nông thôn - Trung ương Đoàn thực hiện. Hơn 800 phiên live suốt 6 tháng, thu về hơn 100 tỷ đồng.

Chương trình hỗ trợ 3.000 nhà bán hàng ở 30 tỉnh, thành nâng cao năng lực chuyển đổi số. Tại TikTok Awards Việt Nam 2023, Trung tâm Xúc tiến Thương mại Nông nghiệp là một trong ba tổ chức được vinh danh hạng mục "TikTok For Good".
Bà Trang Nguyễn cho biết: "Thời gian tới, TikTok tiếp tục nỗ lực, mang đến không gian an toàn, đáng tin cậy, nơi mọi người có thể thỏa sức sáng tạo. Tôi tin TikTok Awards Việt Nam 2023 không chỉ ghi nhận các đóng góp, mà còn tạo động lực cho mọi người tiếp tục sản xuất nội dung mới, chia sẻ trải nghiệm và lan tỏa giá trị tích cực. Từ màn hình nhỏ, chúng tôi trông chờ những thành tựu lớn đến cộng đồng".',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 6,
                'tieu_de' => 'TikTok - bệ phóng cho hoạt động sáng tạo nội dung',
                'hinh' => 'tin26.jpg',
                'tom_tat' => 'Từ màn hình nhỏ trên điện thoại, hoạt động sáng tạo nội dung trên TikTok đã vượt xa xuất phát điểm, đạt thành tựu nhất định.',
                'noi_dung' => '2023 đánh dấu 5 năm TikTok hoạt động tại Việt Nam. Qua màn hình nhỏ, nhiều nhà sáng tạo nội dung có sân chơi khai phá tiềm năng, kéo theo đó là loạt chiến dịch truyền cảm hứng. Bà Trang Nguyễn - Giám đốc Marketing TikTok Việt Nam - nhận định, không đơn thuần là công cụ giải trí cho giới trẻ như số đông vẫn nghĩ, nền tảng này dành cho mọi giới tính, độ tuổi, mong kết nối, tự tin sáng tạo và quay đa dạng chủ đề.

                Chỉ riêng 2020-2021, nội dung giáo dục trên nền tảng tăng 34 lần, làm đẹp và e-Commerce cũng gấp 5. Hashtag "LearnOnTikTok" vừa kỷ niệm ba năm cung cấp người dùng kho kiến thức đa dạng, hút hơn 1.000 nhà sáng tạo nội dung đóng góp.
                Đón đầu xu hướng Shoppertainment (mua sắm kết hợp giải trí), TikTok Shop mở rộng cơ hội tiếp cận khách hàng, giúp các đơn vị gia tăng doanh thu. Trong đó, Yody và Thích Cay thắng hạng mục "Doanh nghiệp vừa và nhỏ (SMB) của năm". Nếu Thích Cay chú trọng nội dung gần gũi, mộc mạc nhưng ngon mắt, thì Yody đầu tư hình ảnh, cách thức quay dựng.

Không chỉ người dùng cá nhân hay thương hiệu, TikTok còn đồng hành các tổ chức, ban ngành trên hành trình kiến tạo giá trị xã hội. Trong đó có "Chợ phiên OCOP" quảng bá đặc sản, nông sản địa phương, do nền tảng kết hợp với Trung tâm Xúc tiến Thương mại Nông nghiệp và Ban Thanh niên nông thôn - Trung ương Đoàn thực hiện. Hơn 800 phiên live suốt 6 tháng, thu về hơn 100 tỷ đồng.

Chương trình hỗ trợ 3.000 nhà bán hàng ở 30 tỉnh, thành nâng cao năng lực chuyển đổi số. Tại TikTok Awards Việt Nam 2023, Trung tâm Xúc tiến Thương mại Nông nghiệp là một trong ba tổ chức được vinh danh hạng mục "TikTok For Good".
Bà Trang Nguyễn cho biết: "Thời gian tới, TikTok tiếp tục nỗ lực, mang đến không gian an toàn, đáng tin cậy, nơi mọi người có thể thỏa sức sáng tạo. Tôi tin TikTok Awards Việt Nam 2023 không chỉ ghi nhận các đóng góp, mà còn tạo động lực cho mọi người tiếp tục sản xuất nội dung mới, chia sẻ trải nghiệm và lan tỏa giá trị tích cực. Từ màn hình nhỏ, chúng tôi trông chờ những thành tựu lớn đến cộng đồng".',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 6,
                'tieu_de' => 'Hai vấn đề TikTok chưa tuân thủ tại Việt Nam',
                'hinh' => 'tin27.png',
                'tom_tat' => 'Theo Bộ Thông tin và Truyền thông, TikTok Singapore chưa ủy quyền quản lý cho pháp nhân tại Việt Nam và chưa thỏa thuận bản quyền với báo chí.',
                'noi_dung' => 'TikTok cũng cam kết tuân thủ bốn nội dung, còn ba nội dung đang thảo luận với Bộ nhằm tìm phương án triển khai, gồm: ngăn chặn nội dung vi phạm pháp luật, nâng cấp công cụ tìm kiếm để quét nội dung hiệu quả hơn và cải thiện hệ thống kiểm duyệt, đặc biệt với hình thức livestream.

                Đoàn kiểm tra đề xuất TikTok gỡ bỏ 100% thông tin vi phạm pháp luật Việt Nam và có giải pháp ngăn tình trạng nội dung bị đăng lại. Tuy nhiên, tỷ lệ đáp ứng của nền tảng mới đạt 94-95%. Ví dụ trong tháng 11, TikTok chặn gỡ 12 nội dung vi phạm (tỷ lệ 92%), xóa 10 tài khoản theo yêu cầu.
                
                Về tình trạng hàng giả, hàng nhái, không rõ nguồn gốc được bán công khai trên nền tảng, bà Huyền cho biết TikTok đã đăng ký hoạt động thương mại điện tử với Bộ Công thương. Do đó, nếu vi phạm, đơn vị kinh doanh trên nền tảng có thể bị xử phạt hành chính hoặc phải ngừng cung cấp dịch vụ.
                
                TikTok Việt Nam chưa bình luận về các thông tin trên.
                
                Mạng xã hội video ngắn TikTok bị kiểm tra toàn diện tại Việt Nam từ tháng 5. Theo kết luận hồi tháng 10, TikTok đã lưu trữ thông tin vi phạm pháp luật tại các máy chủ CDN trong nước, gồm thông tin giả mạo, xuyên tạc, kích động bạo lực, kích động tệ nạn xã hội, thông tin gây hại cho trẻ em.
                
                Ngoài ra, cách thức phân phối, đề xuất dựa trên sự tương tác, sở thích, mối quan tâm của người dùng dễ khiến nội dung vi phạm được lan truyền với tốc độ nhanh chóng. Là nền tảng cho người trên 13 tuổi, nhưng trẻ chưa đủ tuổi vẫn có thể mở tài khoản.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 6,
                'tieu_de' => 'TikTok bổ sung dịch vụ hậu cần cho nền tảng',
                'hinh' => 'tin28.jpg',
                'tom_tat' => 'Ứng dụng mạng xã hội này thiết lập mạng lưới các nhà kho và hoàn thiện đơn hàng với nhiệm vụ cơ bản như quản lý hàng tồn kho và giao hàng.',
                'noi_dung' => 'Doanh nghiệp có trụ sở tại Bắc Kinh thực hiện thuê ngoài các hoạt động hậu cần để tăng cường cạnh tranh, nâng cao doanh số bán hàng tại Mỹ. Công ty đang đạt được thỏa thuận với các nhà cung cấp dịch vụ hậu cần bao gồm ShipBob và Newegg để lưu trữ hàng tồn kho và chọn, đóng gói, vận chuyển các đơn đặt hàng trực tuyến. Những công ty này sau đó sẽ thả các gói hàng vào mạng lưới giao hàng tư nhân để chuyển đến người mua.

                TikTok đang sử dụng TikTok Shop để gia tăng doanh số bán hàng trong nền tảng riêng của mình, đồng thời bổ sung cơ sở hạ tầng để những người tham gia có thể liên kết trực tiếp với các sản phẩm trong ứng dụng. Ứng dụng mạng xã hội này sẽ phải cạnh tranh với các nhà bán lẻ như Amazon, Target, Walmart cũng như các trang thương mại điện tử Shein và Temu.
                
                Doanh nghiệp cũng đối mặt với những thách thức ngoài vấn đề hậu cần trong việc xây dựng TikTok Shop, bao gồm cả tương lai pháp lý không chắc chắn khi một số quan chức Mỹ coi ứng dụng này là rủi ro an ninh quốc gia và đe dọa sẽ cấm nó.
                Các chuyên gia cho biết, công ty cần tạo dựng hơn nữa sự tin tưởng của khách hàng bởi nhiều người không quen nhập thông tin thẻ tín dụng vào ứng dụng mạng xã hội để mua hàng từ bên thứ ba.

Việc bổ sung thêm dịch vụ hậu cần là cách để TikTok nổi bật trong lĩnh vực thương mại điện tử ngày càng đông đúc ở Mỹ. Đại diện của TikTok cho biết, dịch vụ xử lý đơn hàng của họ cho phép công ty cung cấp trải nghiệm vận chuyển nhanh chóng và liền mạch cho người bán và khách hàng.

Annie Leal ở McAllen, Texas, đã sử dụng TikTok để tiếp thị dòng gia vị Mexico không đường. Cô tham gia TikTok Shop khi ứng dụng này được cung cấp cho một số người bán ở Mỹ vào đầu năm nay.

Gần đây, cô bắt đầu sử dụng ShipBob để thực hiện các đơn đặt hàng qua TikTok Shop, giúp tiết kiệm thời gian. Việc thuê ngoài thay vì tự mình xử lý sẽ tốn kém, nhưng Leal hài lòng với lựa chọn này.

"Chúng tôi đã cân nhắc rằng liệu có tự mua một nhà kho không, có thuê nhân viên làm việc này không nhưng tôi muốn tập trung vào những điều mà bản thân yêu thích mà cảm thấy thoải mái. Tôi thích tạo ra sản phẩm mới. Những việc còn lại hãy để các chuyên gia khác thực hiện", cô nói.

TikTok phổ biến tại Mỹ ba năm trở lại đây với khoảng 150 triệu người dùng. Một phần trong công thức của nền tảng này là thuật toán nhắm hướng đến cấp dữ liệu video đến từng người dùng, đưa ra bất kỳ điều gì mà người dùng có thể thấy hấp dẫn, cho dù đó là video tự làm, video khiêu vũ, tiểu phẩm hài hoặc hướng dẫn trang điểm. Điều này đã tạo ra một ngành công nghiệp nhỏ gồm những người có ảnh hưởng và người sáng tạo nội dung, người giới thiệu các sản phẩm, mang đến cho người dùng trải nghiệm tương tự như các kênh truyền hình mua sắm tại nhà.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 6,
                'tieu_de' => 'ByteDance tạo chatbot tùy chỉnh giống ChatGPT',
                'hinh' => 'tin29.jpg',
                'tom_tat' => 'ByteDance, công ty mẹ của Tiktok, đang phát triển nền tảng cho phép người dùng tạo chatbot của riêng mình, tương tự OpenAI.',
                'noi_dung' => 'Theo SCMP, ByteDance cũng tham gia vào cuộc đua AI tạo sinh khi chuẩn bị tung ra sản phẩm chatbot "cá nhân hóa" giống ChatGPT của OpenAI. Bên cạnh đó, công ty cũng xây dựng một công cụ hỗ trợ người dùng tạo ảnh bằng văn bản giống Midjourney và Stable Diffusion. Bản thử nghiệm dự kiến được triển khai cuối tháng này và có thể tích hợp vào sản phẩm hiện có của ByteDance.
                Đầu tháng 11, OpenAI giới thiệu công cụ cho phép cá nhân hóa AI, gọi là GPT, trong đó người dùng có thể tạo phiên bản ChatGPT tùy chỉnh cho tác vụ chuyên biệt như dạy học, thiết kế đồ họa, giao tiếp khách hàng, sáng tạo nội dung. Công ty ban đầu định mở cửa hàng ứng dụng GPT Store cuối tháng 11 để người dùng chia sẻ công cụ GPT, nhưng đã hoãn đến đầu 2024, sau vụ sa thải CEO.

Trong khi đó, ByteDance chuyển hướng sang công nghệ AI sau khi sản phẩm thành công nhất của họ là Tiktok bị cấm hoặc hạn chế ở một số quốc gia do lo ngại về gây tác động xấu tới giới trẻ. Họ cũng đã công bố chatbot riêng Doubao hồi tháng 8 sau khi được cơ quan quản lý Trung Quốc - nơi có quy định nghiêm ngặt về phát triển AI - chấp thuận. Tuy nhiên, công ty đang đối mặt với sự cạnh tranh không chỉ từ Mỹ mà còn từ các công ty khác của Trung Quốc như Baidu, Alibaba.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 6,
                'tieu_de' => 'Lệnh cấm TikTok của bang Montana gặp cản trở',
                'hinh' => 'tin30.png',
                'tom_tat' => 'Quyết định cấm TikTok bắt đầu từ năm tới của bang Montana đã bị thẩm phán Mỹ ngăn chặn.',
                'noi_dung' => 'Hồi tháng 5, Greg Gianforte, thống đốc bang Montana, đã ký thông qua Dự luật 419 (SB419), trong đó quy định từ tháng 1/2024, người dùng ở bang này không được tải xuống ứng dụng của ByteDance. TikTok sau đó gửi đơn kiện lên tòa án liên bang tại đây hôm 22/5, cho rằng hành động của Montana vi phạm hiến pháp Mỹ đối với quyền sử dụng ứng dụng hợp pháp của người dân, ngăn mọi người tiếp cận một kênh liên lạc quan trọng.

                Ngày 30/11, thẩm phán Donald Molloy chấp thuận lời phản đối của TikTok, cho rằng quy định của Montana vi phạm quyền tự do ngôn luận của người dùng
                Động thái của TikTok cũng được một số tổ chức ủng hộ, như Ủy ban phóng viên về tự do báo chí (RCFP) và Chamber of Progress, tổ chức vận động hành lang phi lợi nhuận do Amazon, Apple và Google tài trợ. Trong khi đó, một nhóm khác gồm 18 bang, đứng đầu là Virginia, lại ủng hộ lệnh cấm của Montana.

Tại Mỹ, một số bang đã hạn chế sử dụng TikTok, nhưng chỉ giới hạn ở các thành viên chính phủ. Montana là bang tiên phong cấm người dân sử dụng ứng dụng video ngắn với lý do TikTok không xóa nội dung nguy hiểm đối với trẻ vị thành niên, cũng như thu thập dữ liệu người dùng cho mục đích gián điệp.

"Bất chấp nỗ lực của Montana trong việc bảo vệ SB419 như một cách để bảo vệ người tiêu dùng, hồ sơ hiện tại khiến gây nghi ngờ rằng cơ quan lập pháp và tổng chưởng lý của Montana chủ yếu nhắm mục tiêu vào vai trò bề ngoài của Trung Quốc đối với TikTok hơn là bảo vệ người tiêu dùng Montana", thẩm phán Molloy cho biết.

Emilee Cantrell, người phát ngôn của tổng chưởng lý bang Montana, cho biết lệnh cấm chỉ được áp dụng khi tòa án xem xét đầy đủ nội dung sự việc. "Chúng tôi mong muốn đưa ra lập luận pháp lý đầy đủ để bảo vệ luật người dân Montana khỏi việc Trung Quốc thu thập và sử dụng dữ liệu", bà nói.

Trong khi đó, TikTok ủng hộ quyết định của tòa án. "Chúng tôi rất vui vì thẩm phán đã bác bỏ luật vi hiến này. Hàng trăm nghìn người Montana có thể tiếp tục thể hiện bản thân, kiếm sống và tìm kiếm cộng đồng của mình trên TikTok", phát ngôn viên của TikTok cho biết.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 7,
                'tieu_de' => 'Samsung Galaxy S24 có gì mới? Giá bao nhiêu, khi nào ra mắt?',
                'hinh' => 'tin31.webp',
                'tom_tat' => 'Samsung Galaxy S24 là siêu phẩm Android 2024 đáng mong đợi nhất. Vậy điện thoại Samsung S24 có gì mới? Khi nào Galaxy S24 ra mắt? Giá bán Galaxy S24 bao nhiêu? Tất cả sẽ được FPT Shop giải đáp đầy đủ, chi tiết và cập nhật liên tục trong bài viết dưới đây.',
                'noi_dung' => 'Dòng Galaxy S của Samsung luôn là “ngôi sao sáng” trên thị trường điện thoại. Điều này dễ hiểu khi các sản phẩm dòng này luôn sở hữu những tính năng tốt, công nghệ tiên phong và vượt trội.

                Năm 2024, dòng Samsung Galaxy S24 dự kiến sẽ được ra mắt với 3 phiên bản Galaxy S24, Galaxy S24 Plus và Galaxy S24 Ultra. Mỗi model đều có những ưu điểm riêng để thuyết phục người dùng chọn mua.
                
                Vậy Samsung Galaxy S24 series sẽ có thay đổi nào về thiết kế? Cấu hình Samsung S24 như thế nào? Ngày ra mắt và giá bán là bao nhiêu? Trong bài viết này, FPT Shop sẽ tổng hợp đầy đủ tin đồn về Galaxy S24 series trong thời gian qua để giúp bạn hiểu hơn về sản phẩm trước khi ra mắt nhé.
                Thông tin mới nhất về Samsung Galaxy S24 series
Hé lộ thông tin ngày ra mắt và mở bán của Samsung Galaxy S24 series
(Cập nhật ngày 13/12/2023) Mặc dù chưa được gã khổng lồ công nghệ Hàn Quốc xác nhận, The Elec cho biết một quan chức giấu tên của Samsung Electronics là nguồn gốc của thông tin này.
Báo cáo của Elec không chỉ tiết lộ ngày ra mắt mà còn tin tức ngày mở bán của dòng Galaxy S24. Nguồn tin cho biết người dùng có thể đặt trước loạt Galaxy S 2024 vào ngày 17/1/2024, ngay sau khi các điện thoại này ra mắt. Dự kiến, đơn đặt hàng sẽ đến tay người dùng từ ngày 26 đến ngày 30 tháng 1. Chương trình khuyến mại chung của dòng Galaxy S24 dự kiến ​​sẽ bắt đầu vào ngày 30 tháng 1.
Theo các tin đồn trước đây, dòng Galaxy S24 sẽ có ngôn ngữ thiết kế không thay đổi nhiều so với thế hệ trước. Tuy nhiên, model S24 Ultra cao cấp nhất được đồn đại sẽ chuyển sang sử dụng màn hình phẳng và sử dụng khung viền titan bền, nhẹ hơn như dòng iPhone 15 Pro của Apple.

Bên trong, Galaxy S24 và Galaxy S24 Plus sẽ được cung cấp sức mạnh đến từ con chip Snapdragon 8 Gen 3 hoặc Exynos 2400, tùy thị trường mà các điện thoại này sẽ cập bến. Còn Galaxy S24 Ultra sẽ chỉ sử dụng chipset cao cấp của Qualcomm. Mẫu máy kế nhiệm của S23 Ultra còn được đồn đoán có camera tele 50MP mới với hỗ trợ zoom quang học 5x.

Rò rỉ mô hình dòng Samsung Galaxy S24, xác nhận có thiết kế phẳng
(Cập nhật ngày 10/12/2023) Mới đây nhất, ảnh mô hình loạt flagship tiếp theo của Samsung vừa được chia sẻ trên mạng. Nhờ đó mà chúng ta có thêm được những thông tin thú vị về thiết kế loạt Galaxy S24 sắp ra mắt.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            
            [
                'id_danh_muc_tin' => 7,
                'tieu_de' => 'Cẩm nang cho máy tính bảng: Những tiêu chí quan trọng khi mua bút cảm ứng',
                'hinh' => 'tin32.webp',
                'tom_tat' => 'Bút cảm ứng đã trở thành một phụ kiện không thể thiếu cho người dùng máy tính bảng hiện nay. Với khả năng ghi chú và vẽ trực tiếp trên màn hình, nó mang đến sự tiện lợi và tương tác tuyệt vời. Hãy cùng khám phá ba bút cảm ứng nổi bật dưới đây, là những sản phẩm đáng mua trong năm 2021.',
                'noi_dung' => 'Bút cảm ứng không chỉ sử dụng cho máy tính bảng, mà còn có thể tương thích với các thiết bị khác như điện thoại thông minh và máy tính xách tay. Điều này giúp bạn tận dụng tối đa khả năng sáng tạo trên các nền tảng khác nhau. Với một bút cảm ứng đa năng, bạn có thể ghi chú, vẽ tranh hoặc thậm chí chữ ký điện tử trên các thiết bị di động của mình.

                Một số tiêu chí để lựa chọn bút cảm ứng cho máy của bạn
                Khi chọn mua bút cảm ứng cho máy tính bảng, đặc biệt là cho iPad và các dòng máy tính bảng Android, có một số tiêu chí quan trọng cần xem xét:
                
                Tương thích: Đảm bảo bút cảm ứng tương thích hoàn hảo với máy tính bảng của bạn. Với iPad, bạn nên chọn bút cảm ứng được chứng nhận "Made for iPad" để đảm bảo hoạt động tốt và có thể sử dụng các tính năng đặc biệt như tự động kết nối và sạc qua cổng Lightning. Khi mua cần chú ý xem đó là bút cảm ứng cho Android hay bút cảm ứng cho iPhone.
                Độ nhạy: Bút cảm ứng nên có độ nhạy cao, nhận biết đúng vị trí và áp lực khi viết. Điều này đặc biệt quan trọng khi bạn sử dụng máy tính bảng để ghi chú, vẽ tranh hay viết tay.
                Chất liệu và cảm giác: Chọn bút cảm ứng có chất liệu chất lượng và cảm giác thoải mái khi cầm. Một số loại bút cảm ứng được làm từ kim loại cao cấp hoặc nhựa chắc chắn để tạo sự ổn định và độ bền cao.
                Tính năng bổ sung: Kiểm tra xem bút cảm ứng có các tính năng bổ sung khác như xóa nhanh, nút chức năng hay hỗ trợ tiện ích. Điều này có thể giúp tăng tính linh hoạt và hiệu suất của bạn khi sử dụng.
                Pin và sạc: Nếu bút cảm ứng có pin, hãy kiểm tra thời lượng pin và công nghệ sạc để đảm bảo dùng lâu và tiện lợi. Một số bút cảm ứng có thể sạc qua cổng USB-C hoặc không dây, giúp tiện ích và không phụ thuộc vào việc tìm kiếm pin thay thế.
                Giá cả: Cuối cùng, hãy xem xét ngân sách của bạn và tìm bút cảm ứng liên quan đến mức giá đó. Giá thành có thể dao động tùy thuộc vào thương hiệu, tính năng và chất lượng.
                Top 5 bút cảm ứng đáng mua cho 2023
1. Bút cảm ứng Apple Pencil MK0C2
Thiết bị tương thích: iPad Pro 12.9 inch (Gen 1,2), iPad Pro 10.5 inch, iPad Pro 9.7 inch, iPad Air (Gen 3), iPad (Gen 6,7,8,9), iPad mini 5

Sử dụng trong: Khoảng 4 tiếng

Thời gian sạc pin: Khoảng 45 phút

Giá bán tham khảo: 2.310.000 vnđ

Đánh giá chung: 

Kích thước tiện lợi: Apple Pencil MK0C2 có kích thước như một chiếc bút chì, mang lại cảm giác tự nhiên và dễ cầm tay. Điều này giúp người dùng viết và vẽ một cách dễ dàng và chính xác.
Sạc pin nhanh chóng qua cổng Lightning: Việc sạc Apple Pencil MK0C2 trở nên đơn giản với khả năng sạc qua cổng Lightning của iPad. Chỉ cần sạc trong vòng 15 giây, bạn có thể sử dụng bút trong khoảng thời gian lên đến 30 phút, đảm bảo không bị gián đoạn trong quá trình sử dụng.
Kết nối Bluetooth và tương thích với các ứng dụng của Apple: Apple Pencil MK0C2 kết nối thông qua Bluetooth, tạo điều kiện cho việc sử dụng trên các ứng dụng của Apple như Notes, Pages, và Keynote một cách tiện lợi. Bạn có thể tận dụng được các tính năng đặc biệt như nhận diện nghiêng và áp lực, giúp đạt được mức độ tương tác cao hơn với nội dung trên iPad.
2. Bút cảm ứng Apple Pencil 2 MU8F2
Thiết bị tương thích: iPad mini 6, iPad Pro 12.9 inch (Gen 3,4,5,6), iPad Pro 11 inch (Gen 1,2,3,4), iPad Air (Gen 4,5)

Sử dụng trong: Khoảng 4 tiếng

Thời gian sạc pin: Khoảng 45 phút

Giá bán tham khảo: 2.790.000 vnđ

Đánh giá chung: 

Kết nối không dây và sạc bằng nam châm từ tính: Một điểm đáng chú ý của Apple Pencil 2 MU8F2 là khả năng kết nối không dây và sạc bằng nam châm từ tính. Bạn có thể gắn bút vào cạnh iPad một cách thuận tiện và nhanh chóng, đồng thời sạc pin ngay trên thiết bị. 
Sử dụng công nghệ cảm ứng lực nhấn: Apple Pencil 2 MU8F2 được trang bị công nghệ cảm ứng lực nhấn, cho phép bạn tận hưởng độ trễ thấp, độ nhạy và chính xác cao trong quá trình viết và vẽ trên iPad. Điều này giúp tái tạo một trải nghiệm tương tự như viết bằng bút mực trên giấy.
Dễ dàng chuyển đổi công cụ bút: Với tính năng cảm ứng trên thân bút, Apple Pencil 2 MU8F2 cho phép bạn dễ dàng chuyển đổi giữa các công cụ bút như đánh dấu, vẽ, xóa và nhiều hơn nữa. Điều này giúp tăng tính linh hoạt và hiệu suất trong quá trình sáng tạo và làm việc trên iPad.
3. Bút cảm ứng Logitech Crayon
Thiết bị tương thích: iPad Pro 12,9-inch, iPad Pro 11-inch, iPad, iPad Air, iPad mini
Lưu ý: Tất cả các model iPad phải được nâng cấp lên iOS 12.2 trở lên

Sử dụng trong: Khoảng 7 tiếng

Thời gian sạc pin: Sạc nhanh 2 phút có thể viết được 30 phút

Giá bán tham khảo: 1.750.000 vnđ

Đánh giá chung: 

Sử dụng đơn giản và độ chính xác cao: Bút cảm ứng Logitech Crayon được thiết kế để mang đến sự tiện lợi và độ chính xác cao trong việc viết và vẽ trên iPad. Không có quá trình kết nối phức tạp, bạn chỉ cần ghim nút bấm trên bút vào thiết bị và bắt đầu sử dụng ngay lập tức.
Được hỗ trợ bởi công nghệ Apple Pencil: Logitech Crayon được tạo ra với công nghệ hỗ trợ của Apple Pencil, đảm bảo tính tương thích và đáng tin cậy trên các thiết bị iPad. Bạn có thể trải nghiệm độ nhạy và chính xác cao khi sử dụng bút này.
Có thể thay thế đầu bút: Một ưu điểm của Logitech Crayon là khả năng thay thế đầu bút. Nếu đầu bút bị hỏng hoặc cần thay mới, bạn có thể dễ dàng tìm mua đầu bút thay thế và tiếp tục sử dụng sản phẩm mà không cần mua bút mới.
Bảo hành 12 tháng: Logitech Crayon đi kèm với chính sách bảo hành 12 tháng. Điều này đảm bảo rằng bạn có sự hỗ trợ và bảo đảm chất lượng trong thời gian dài khi sử dụng sản phẩm.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 7,
                'tieu_de' => 'Tại sao bạn nên nâng cấp điện thoại 2G lên smartphone',
                'hinh' => 'tin33.webp',
                'tom_tat' => 'Trong thời đại công nghệ ngày nay, việc sử dụng điện thoại 2G không còn phù hợp với nhu cầu và tiến bộ của xã hội hiện đại. Việc nâng cấp từ điện thoại 2G lên smartphone mang lại nhiều lợi ích rõ rệt về tính tiện ích, kết nối và trải nghiệm cá nhân, mặc dù có thể đòi hỏi một số chi phí ban đầu.',
                'noi_dung' => '1. Điện thoại 2G có còn phù hợp trong thời điểm hiện nay?
                Điện thoại 2G từng có thời gian phổ biến rộng rãi với chức năng cơ bản như gọi điện và tin nhắn văn bản. Tuy nhiên, với sự phát triển nhanh chóng của công nghệ, nó đã trở nên lạc hậu và không đáp ứng được nhu cầu hiện đại. Hệ thống 2G dần bị loại bỏ để nhường chỗ cho các mạng di động tiên tiến hơn như 4G và 5G. Điện thoại 2G không thể truy cập Internet nhanh chóng, không hỗ trợ ứng dụng thông minh hay các tính năng tiện ích như camera chất lượng cao, màn hình lớn, chơi game, điều mà smartphone đang mang lại.
                Khi mà xung quanh chúng ta ai cũng có Zalo, Facebook, thanh toán QR ngân hàng đầy tiện lợi, nhanh chóng thì chiếc điện thoại 2G dường như làm bạn chậm hơn nhịp sống của thời đại. Đó là lý do mà điện thoại 2G đã dần không còn chỗ đứng trong năm 2023 này.

2. Tại sao bạn nên nâng cấp điện thoại 2G lên smartphone?
Việc nâng cấp từ điện thoại 2G lên smartphone mở ra một thế giới mới với nhiều tiện ích và lợi ích đáng kể. Smartphone không chỉ là một phương tiện liên lạc mà còn là trung tâm giải trí, công cụ làm việc và kết nối với thế giới xung quanh. Bạn có thể truy cập Internet tốc độ cao mọi lúc mọi nơi, sử dụng ứng dụng đa dạng từ giải trí đến công việc, và thậm chí quản lý sức khỏe thông qua ứng dụng chăm sóc sức khỏe cá nhân.
Điện thoại thông minh cũng mở rộng khả năng giao tiếp qua hình ảnh với camera chất lượng cao, khả năng chụp ảnh, quay video và gọi video, tất cả đều mang lại trải nghiệm gần gũi hơn trong việc kết nối với gia đình, bạn bè và công việc. Có quá nhiều lợi ích mà smartphone vượt trội hơn so với điện thoại 2G. Khi chuyển từ điện thoại 2G lên những chiếc smartphone 4G, 5G, mọi trải nghiệm của bạn đều trở nên thú vị hơn. Hơn nữa, các sản phẩm smartphone ngày nay đều có giao diện và thiết kế dễ sử dụng, không hề khó dùng như bạn nghĩ. Chỉ mất vài phút làm quen, bạn sẽ ngay lập tức thích thú với màn hình lớn cảm ứng và vô vàn tính năng từ smartphone mang lại.
3. Chi phí nâng cấp điện thoại 2G lên smartphone có đắt không?
Mặc dù việc nâng cấp từ điện thoại 2G lên smartphone có thể đòi hỏi một khoản chi phí ban đầu, nhưng đây là một đầu tư đáng giá. Trên thị trường hiện nay có rất nhiều lựa chọn với mức giá đa dạng, từ các dòng smartphone cao cấp đến các model giá rẻ nhưng vẫn đáp ứng được nhu cầu cơ bản của người dùng.

Ngoài ra, việc sở hữu smartphone cũng giúp tiết kiệm thời gian và chi phí hơn trong việc kết nối, làm việc và giải trí, bởi với một thiết bị duy nhất bạn có thể thực hiện nhiều công việc khác nhau mà không cần phải mua thêm nhiều thiết bị phụ trợ. Hơn nữa, việc nâng cấp từ điện thoại 2G lên smartphone không chỉ mang lại lợi ích về tiện ích và kết nối mà còn đem lại trải nghiệm cá nhân hóa và linh hoạt hơn trong cuộc sống hàng ngày, vì thế chi phí đầu tư ban đầu là một khoản chi tiêu hợp lý và đáng đầu tư.

Đặc biệt, tại FPT Shop hiện đang có chương trình thu cũ đổi điện thoại 2G trong tháng 12 với những mức giá vô cùng hấp dẫn. Khách hàng chỉ cần mang điện thoại 2G hoặc bất kỳ điện thoại/máy tính bảng cũ, kể cả hư hỏng đến FPT Shop sẽ có cơ hội đổi smartphone đời mới với mức giá ưu đãi giảm ngay 300,000 đồng. Các sản phẩm rất được ưa chuộng hiện nay như Samsung Galaxy A05/A05s, OPPO A18, OPPO A58, Redmi 13C, Redmi Note 12, Realme C55 đều sẽ có giá thu cũ đổi mới chỉ từ 2.790.000 đồng.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 7,
                'tieu_de' => 'BrSE là gì? Để trở thành một BrSE chuyên nghiệp bạn cần có những kỹ năng gì?',
                'hinh' => 'tin34.webp',
                'tom_tat' => 'BrSE là gì? Thuật ngữ này mọi người thường biết đến là kỹ sư cầu nối, đây là một nghề đòi hỏi bạn phải có nhiều kỹ năng như lập trình, ngôn ngữ, giao tiếp,... Và để hiểu rõ hơn về BrSE và những kỹ năng cần thiết. Bạn hãy cùng FPT Shop khám phá qua bài viết này nhé.',
                'noi_dung' => 'BrSE (Bridge Software Engineer) hay là sư cầu nối đây là người có trách nhiệm kết nối công ty với khách hàng. Những người này sẽ giúp team thực hiện dự án và hiểu rõ mục tiêu, yêu cầu của khách hàng. Bên cạnh đó cũng giúp khách hàng hiểu về quá trình phát triển sản phẩm của team. Qua đó có thể đảm bảo việc hai bên hiểu nhau, tiến triển của dự án diễn ra thuận lợi và đạt hiệu quả nhất.

                Để làm được điều này, những BrSE này phải luôn theo sát tiến độ dự án trong những giai đoạn nhận yêu cầu đến khi bàn giao sản phẩm. 
                
                Hiện nay, số lượng doanh nghiệp phần mềm của Nhật Bản lựa chọn Việt Nam là nơi phát triển kinh doanh bởi vì nơi đây có nguồn nhân lực chất lượng cao. Vì vậy, nhu cầu tuyển dụng Kỹ sư cầu sử dụng tiếng Nhật lại ngày càng “nóng”. Theo đó, chức danh BrSE được sử dụng phổ biến cho thị trường Nhật Bản và có lẽ cũng được tạo ra từ đây.
                Với thị trường Âu - Mỹ, BrSE sẽ được thay thế bằng từ DM – Delivery Manager. Đây cũng là câu trả lời cho thắc mắc “Có phải BrSE chỉ làm cho các công ty Nhật?”. Thực tế, nhu cầu tuyển dụng kỹ sư cầu nối tiếng Nhật tại Việt Nam khá cao, tuy vậy kỹ sư cầu nối sử dụng ngôn ngữ khác có nhưng với số lượng ít.

Công việc của BrSE là gì?
Công việc mỗi ngày của một BrSE sẽ tùy thuộc vào lĩnh vực, quy mô kinh doanh của doanh nghiệp. Nhưng nhìn chung sẽ có những đầu công việc dưới đây: 
Quản lý và xử lý email, trao đổi với các khách hàng.
Tiến hành lên các kế hoạch công việc cho từng ngày và theo đó thực hiện.
Đại diện khách hàng trả lời Q&A cho team của mình.
Tiến hành báo cáo công việc, quy trình, tiến triển của dự án cho khách hàng.
Qua đây chúng ta có thể thấy rằng nhiệm vụ của BrSE là sự luân phiên cập nhật tình hình cho team nội bộ và khách hàng để đảm bảo sự thống nhất giữa hai bên. 

Tuy nhiên, công việc của BrSE còn thay đổi theo từng giai đoạn của dự án.

Bắt đầu dự án: BrSE tiến hành nghiên cứu kỹ thuật, lập kế hoạch và sẵn sàng triển khai.
Trong quá trình thực hiện dự án: Sẽ giám sát và quản lý dự án. Có thể linh hoạt thay đổi chiến lược và phương pháp để nâng cao năng suất và chất lượng dự án hơn.
Cuối dự án: BrSE sẽ xem xét và kiểm tra sản phẩm trước khi bàn giao cho khách hàng.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            [
                'id_danh_muc_tin' => 7,
                'tieu_de' => 'Phần mềm trình chiếu có chức năng gì? Khám phá các công cụ đắc lực cho bài thuyết trình của bạn',
                'hinh' => 'tin35.webp',
                'tom_tat' => 'Khám phá phần mềm trình chiếu có chức năng gì và các công cụ độc đáo giúp bạn tạo ra những bài thuyết trình tuyệt vời chỉ từ những trang chiếu chứa văn bản, hình ảnh, đồ họa, âm thanh và video. Tìm hiểu ngay cách sử dụng phần mềm để truyền đạt thông tin một cách rõ ràng và dễ hiểu!',
                'noi_dung' => 'Phần mềm trình chiếu là một ứng dụng máy tính được thiết kế để hiển thị nội dung đa phương tiện, thường được sử dụng trong nhiều trường học và doanh nghiệp. Phần mềm này giúp người sử dụng tạo ra các bài thuyết trình số với sự hỗ trợ đa dạng từ hình ảnh, văn bản, video, âm thanh, và các hiệu ứng đặc biệt. 
                Phần mềm trình chiếu thường cung cấp nhiều chức năng chính để tối ưu hóa trải nghiệm tạo và thuyết trình. Dưới đây là một số chức năng quan trọng:

Tạo và chỉnh sửa Slide: Cho phép người dùng tạo mới và chỉnh sửa các slide với nhiều loại nội dung như văn bản, hình ảnh, video, biểu đồ, và âm thanh.
Hiệu ứng và Animation: Cung cấp các hiệu ứng chuyển động và animation để làm cho bài thuyết trình trở nên sinh động và thu hút hơn.
Tùy chỉnh giao diện: Cho phép người sử dụng tùy chỉnh giao diện của slide, chọn màu sắc, font chữ và bố cục tuỳ theo phong cách cá nhân hoặc văn hoá doanh nghiệp.
Chia sẻ màn hình: Hỗ trợ chia sẻ màn hình, giúp người trình bày có thể trình bày online và tăng cường khả năng tương tác với người nghe.
Chế độ Presenter: Cung cấp chế độ trình bày giúp người thuyết trình theo dõi nội dung, thời gian và thậm chí tương tác với slide mà không làm mất sự tập trung của người nghe. 
Quản lý nộI dung: Đồng bộ hóa và quản lý dễ dàng các tài liệu và slide, giúp người dùng tổ chức nội dung một cách hiệu quả.
Chia sẻ trực tuyến: Cho phép chia sẻ bài thuyết trình trực tuyến với đồng nghiệp hoặc khán giả ở xa.
Ưu điểm của phần mềm trình chiếu
Truyền đạt thông tin một cách rõ ràng và dễ hiểu
Phần mềm trình chiếu giúp người thuyết trình trình bày thông tin một cách trực quan và dễ hiểu. Người thuyết trình có thể sử dụng văn bản, hình ảnh, đồ họa, âm thanh và video để truyền tải thông tin của mình. Ví dụ, nếu bạn đang thuyết trình về một quy trình, bạn có thể sử dụng một sơ đồ hoặc biểu đồ để minh họa cho quy trình đó.

Thu hút sự chú ý của khán giả
Phần mềm trình chiếu giúp người thuyết trình thu hút sự chú ý của khán giả bằng cách sử dụng các yếu tố trực quan hấp dẫn. Người thuyết trình có thể sử dụng hiệu ứng chuyển tiếp, âm thanh và video để thu hút sự chú ý của khán giả.

Tạo ấn tượng tốt với khán giả
Phần mềm trình chiếu giúp người thuyết trình tạo ấn tượng tốt với khán giả bằng cách tạo ra các bài thuyết trình chuyên nghiệp và ấn tượng. Người thuyết trình có thể sử dụng các mẫu, bố cục và thiết kế trang chiếu đẹp mắt để tạo ra các bài thuyết trình ấn tượng.
Các phần mềm trình chiếu phổ biến 
Hiện nay, có rất nhiều phần mềm trình chiếu khác nhau trên thị trường, mỗi phần mềm đều có những ưu điểm và nhược điểm riêng. Dưới đây là một số phần mềm trình chiếu phổ biến nhất: 

Microsoft PowerPoint
Microsoft PowerPoint là phần mềm trình chiếu phổ biến nhất hiện nay và là định nghĩa đầy đủ nhất khi bạn muốn tìm hiểu phần mềm trình chiếu có chức năng gì. Microsoft PowerPoint cung cấp đầy đủ các tính năng và công cụ cần thiết để tạo ra các bài thuyết trình chuyên nghiệp. Ngoài ra, PowerPoint có giao diện trực quan và dễ sử dụng, phù hợp với nhiều đối tượng người dùng khác nhau.',
'ten_nguoi_dang' => 'Trương Thanh Phát',
            ],
            
        ];

        foreach ($data as $item) {
            TinTuc::create($item);
        }
    }
}