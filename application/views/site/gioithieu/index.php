<style>
	.gt img{

		max-width: 100%;
	}
	.gt1 img{
		margin: 15px 0px;
		padding-bottom: : 10px;
		width: 940px;
		max-width: 100%;
	}
</style>
<!--main-->
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="left">
					<div class="box-left">
						<div class="title-box-left">
							<h2>Danh Mục Sản Phẩm</h2>
						</div>
						<div style="clear: both;"></div>
						<?php foreach($catalog_list as $row): ?>
							<div class="single-sidebar">
								<ul>
									<li><a href="<?php echo site_url('product/catalog/'.$row->id) ?>" title="<?php echo $row->name?>"><font class="fa fa-angle-double-right"> <?php echo $row->name?></font></a></li>
								</ul>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

				<div class="left">
					<div class="box-left">
						<div class="title-box-left">
							<h2>Tin Tức Liên Quan</h2>
						</div>
						<div style="clear: both;"></div>
						
						<div class="single-sidebar">
							<ul>
								<?php foreach($list as $row): ?>
									<li ><a href="<?php echo site_url('news/chitietnews/'.$row->id) ?>" title="<?php echo $row->title ?>"><font class="fa fa-angle-double-right"> <?php echo $row->title ?></font></a>
										<p>Ngày:<?php echo mdate('%d-%m-%y',$row->created)?>|Lượt xem:<?php echo $row->count_view ?></p>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>

					</div>
				</div>
			</div>
			<div class="col-sm-10">
			    <b style="font-size: 25px; color: green">GIỚI THIỆU THỰC PHẨM SẠCH XUÂN KHÁNH</b><br/>
				<b>Thực Phẩm Sạch xuân khánh</b>
				<p>
					là thương hiệu được ra đời từ Công ty cổ phần xuân khánh - một Công ty chuyên cung cấp, Hải sản, nông sản  và thực phẩm uy tín tại Hà Nội. Ngoài ra xuân khánh còn là đối tác gia công xuất khẩu Hải sản cho các khách hàng ở  các thị trường khó tính nhất như Nhật Bản, Hàn Quốc, Canada, EU…

					Trải qua quá trình phục vụ Khách hàng nhiều năm qua, chúng tôi nhận ra rằng một số khách luôn lo ngại về chất lượng cũng như sự an toàn của thực phẩm mà họ đang sử dụng tại nhà. Hầu hết các thực phẩm có sẵn tại các siêu thị hoặc chợ đều chứa chất tăng trưởng, chất bảo quản và nghèo chất dinh dưỡng. Ngoài ra hằng ngày chúng ta còn phải đối mặt với thực phẩm quá hạn.

					Với vai trò là một nhà sản xuất và cung cấp thực phẩm, chúng tôi quyết định giải quyết vấn đề trên bằng cách cho ra đời thương hiệu Thực Phẩm Sạch xuân khánh nhằm mang tới một nguồn thực phẩm sạch sẽ, an toàn  và có uy tín nhất đến với người tiêu dùng.

					Bằng cách đó, chúng tôi đang tạo ra một hệ thống kết nối khách hàng với chúng tôi qua Internet. Thay vì mua thực phẩm từ siêu thị công nghiệp lớn, chợ hay của hàng tiện ích thì xu hướng sử dụng Internet để tiết kiệm thời gian cũng là một hình thức linh hoạt và hiệu quả cho những ai không có nhiều thời gian. Chỉ vài cái Click chuột chúng ta đã  có ngay thực phẩm tươi sống, an toàn và thơm ngon cho gia đình mình. vd: Thịt bò Mỹ, Thịt bò Úc...

					Chúng tôi cung cấp thực phẩm sạch chính hãng và tươi ngon nhằm thay đổi đời sống ẩm thực tại Việt Nam theo chiều hướng tốt đẹp hơn. 
				</p>
				<div class="gt">
					<img src="<?php echo public_url('site/images/banner.jpg') ?>" alt="thuc-pham-sach-xuan-khanh">
				</div>
				<b>Chúng tôi Đem lại Sự An tâm</b>
				<p>
					Khi nói đến việc mua thực phẩm hàng ngày ở Việt Nam, người tiêu dùng hầu như không có sự lựa chọn nào khác ngoài thực phẩm mua ở chợ và  Siêu thị (thức ăn công nghiệp),hay nói rõ hơn là  không rõ nguồn gốc xuất xứ. Ngày càng xuất hiện thêm nhiều mối lo ngại đến thực phẩm nghèo chất dinh dưỡng và lạm dụng chất bảo quản.Báo chí hàng ngày nhan nhản các tin tức về thực phẩm bẩn. Do đó, vấn đề an toàn thực phẩm ngày càng được chú trọng.

					Nhưng chúng tôi tin rằng với sự phát triển về kinh tế và xã hội Việt Nam đời sống ẩm thực nên phong phú và thú vị hơn thế. Và chúng tôi có mặt ở đây nhằm đề xuất giải pháp cho bạn. Chúng tôi kết nối mọi người với những người nuôi trồng, đánh bắt và nhà sản xuất thực phẩm sau quá trình lựa chọn nghiêm ngặt để cung cấp và đưa tất cả các mặt hàng thực phẩm tự nhiên đến ngay trước cửa nhà bạn. Không những sự an toàn của sản phẩm được đảm bảo mà cả hương vị, tính lành mạnh và thân thiện với môi trường cũng được cam kết.

					Bất kì doanh nghiệp nào kinh doanh về thực phẩm cũng phải thông qua các thủ tục an toàn vệ sinh thực phẩm do nhà nước ban hành, Nhưng đó chỉ là bề nổi để khách hàng  có thêm một chút an tâm cho việc mua hàng. Vì thế chúng tôi cung cấp các phương pháp nhận biết, lựa chọn thực phẩm ngon, sạch đến với mọi người thông qua các tin tức và Video hướng dẫn trong các chuyên mục tin tức của Website này. Quý khách khi ghé thăm Website chỉ cần để lại email hoặc số điện thoại, Thực Phẩm Sạch HD sẽ thường xuyên cập nhật tin tức mới cho bạn.

					Chúng tôi không chỉ phân phối Thực phẩm. Chúng tôi cung cấp sự an tâm đến mỗi gia đình
				</p>
				<b>Lý Do Chọn Chúng Tôi</b>
				<div class="gt1">
					<img src="<?php echo public_url('site/images/tai-sao-chon-chung-toi.jpg') ?>" alt="tai-sao-chon-chung-toi">
				</div>
				<b>1. Các Đối tác, Nhà sản xuất được lựa chọn kĩ càng</b>
				<p>Chúng tôi chỉ làm việc các nhà sản xuất thực phẩm đáp ứng tiêu chí an toàn thực phẩm nghiêm ngặt của chúng tôi. Với Kinh nghiệm Chúng tôi kiểm tra an toàn và chất lượng sản phẩm bằng cách thường xuyên tham quan các trang trại, nhà máy của đới tác trong và ngoài nước, Song song đó Chúng tôi áp dụng kiểm tra an toàn thực phẩm của Đối tác cung cấp thông qua một tổ chức khác (hay còn gọi là  bên thứ ba) để đảm bảo chất lượng và tính khách quan.</p>

				<div class="gt1">
					<img src="<?php echo public_url('site/images/chon-lua-nha-cung-cap.jpg') ?>" alt="chon-lua-nha-cung-cap">
				</div>
				<b>2. Sản Phẩm Sạch sẽ, Tự Nhiên và Tươi Ngon</b>
				<p>
					Thực Phẩm Sạch HD  cung cấp sản phẩm  bằng cách kết nối trực tiếp từ  Nhà cung cấp  tới khách hàng hằng ngày. Khi khách hàng Order, Chúng tôi sẽ thông báo đến nhà cung cấp vàng để xuất kho trong vòng 15 phút.Đơn hàng sẽ được chuyển đến khách hàng trong vòng 4 tiếng kể từ lúc Order. Điều này đồng nghĩa với thời gian lưu trữ và vận chuyển ngắn hơn mà không sử dụng chất bảo quản cho thực phẩm. Trường hợp sản phẩm hết hàng, nhân viên tư vấn sẽ thông báo lại quý khách sau 15 phút và giúp Quý khách lựa chọn các sản phẩm tương tự. Chúng tôi đem độ tươi sạch và chất dinh dưỡng tự nhiên của sản phẩm đến ngay trên bàn ăn của bạn.
				</p>
				<div class="gt1">
					<img src="<?php echo public_url('site/images/kinh-nghiem-chup-anh-thuc-pham-tuoi-song.jpg') ?>" alt="kinh-nghiem-chup-anh-thuc-pham-tuoi-song">
				</div>
				<b>3. Giao Hàng Tận Nơi</b>
				<p>
					Bạn không cần phải suy nghĩ sáng dậy sớm đi mua hàng lòng vòng hết siêu thị này đến siêu thị khác, Cũng không cần phải lo lắng hôm nay làm về trễ đi chợ còn gì mua không. Chỉ cần bạn Order ,Đội ngũ nhân viên giao hàng Thực phẩm Sạch HD  được đào tạo bài bản và chuyên nghiệp sẽ mang đến tận nơi bạn ở những thực phẩm  tươi ngon nhất. Chúng tôi giao hàng từ 10:00 sáng đến 08:00 tối hàng ngày.
				</p>
				<div class="gt1">
					<img src="<?php echo public_url('site/images/giao-hang-tan-noi.png') ?>" alt="giao-hang-tan-noi">
				</div>
				<b>4. Bảo Đảm Sự Hài Lòng</b>
				<p>
					Chúng tôi đảm bảo chất lượng tất cả sản phẩm bạn nhận được. Nếu bạn không hài lòng với bất kỳ sản phẩm nào, đừng ngần ngại chia sẻ với chúng tôi.

					Trong vòng 12 giờ sau khi nhận hàng, nếu Quý Khách phát hiện ra hàng bị lỗi chất lượng, xin Quý Khách vui lòng:
				</p>
				<p>
					=> Báo cho Thực Phẩm Sạch HD biết vấn đề gặp phải và kèm theo Tấm Hình cùng Mô Tả qua 1 trong 3 kênh:
				</p>
				<b> - Email:  <span style="color: red">khanhhbit@gmail.com or khanhhbvip1@gmail.com</span></b><br>
				<b> - Facebook: <a href="https://www.facebook.com/khanh.xuan.338" style="color: blue">https://www.facebook.com/khanh.xuan.338</a></b><br/>
				<b> - Hotline: <span style="color: red">0914.853.115</span></b><br/>
				<p> => Đồng thời giữ lại sản phẩm lỗi, Thực Phẩm Sạch HD sẽ tới đổi lại hàng mới và nhận lại món hàng lỗi để tiến hành kiểm định chất lượng và tìm ra nguyên nhân để củng cố hoàn thiện dịch vụ và sản phẩm.</p>
				<b>Chúng tôi mong muốn mang đến sản phẩm và dịch vụ tốt nhất, thỏa mãn được yêu cầu khách hàng.</b>
				<div class="gt1">
					<img src="<?php echo public_url('site/images/img-about.jpg') ?>" alt="img-about">
				</div>

				<div id="map" style="height:500px; width:100%;text-align: center;"></div>
			</div>
		</div> <!-- #container -->
	</div>
</div>

