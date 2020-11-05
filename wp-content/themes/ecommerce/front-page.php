<?php
/**
 *  * Template Name: Trang Chủ
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package inohara
 */

get_header();
?>

	<main id="primary" class="site-main">
    <div id="main">
          
<div id="carousel" class="carousel slide hero-slides" data-ride="carousel">
  <ol class="carousel-indicators">
    <li class="active" data-target="#carousel" data-slide-to="0"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active boat">
      <div class="container h-100 d-none d-md-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption animated fadeIn">
              <h2 class="animated fadeInLeft">Boat Excursions</h2>
              <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui tristique, ac posuere arcu varius.</p>
              <a class="animated fadeInUp btn delicious-btn" href="#">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item sea">
      <div class="container h-100 d-none d-md-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption animated fadeIn">
              <h2 class="animated fadeInLeft">Discover the canyon by the sea</h2>
              <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui tristique, ac posuere arcu varius.</p>
              <a class="animated fadeInUp btn delicious-btn" href="#">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item river">
      <div class="container h-100 d-none d-md-block">
        <div class="row align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="caption animated fadeIn">
              <h2 class="animated fadeInLeft">Explore the river valley</h2>
              <p class="animated fadeInRight">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui tristique, ac posuere arcu varius.</p>
              <a class="animated fadeInUp btn delicious-btn" href="#">Learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End top hero section --> 

<section class="about inner">
<div class="right">
    <h3>GIỚI THIỆU</h3>
    <p>Vòi rửa vệ sinh thông minh LUVA BIDET là thiết bị được gắn thêm vào bồn cầu đã có sẵn để tạo thành bồn cầu có tính năng tự rửa thông minh, tương tự như bồn cầu cao cấp tại các khách sạn 5 sao. Vòi rửa vệ sinh thông minh giúp bạn tự động làm sạch sau khi đi đại tiện, tiểu tiện, chỉ cần ngồi và xoáy nút. Đây là phương thức vệ sinh tiên tiến nhất trên thế giới, được hơn 90% dân số các nước văn minh như Nhật Bản, Hàn Quốc và các nước Châu Âu đang sử dụng. Vòi rửa vệ sinh thông minh LUVA BIDET giúp bạn nâng cao chất lượng cuộc sống, đem đến sự tiện nghi và văn minh.</p>
</div>
<div class="left">
<iframe width="560" height="315" src="https://www.youtube.com/embed/XyfwkChA8vc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
</div>
</section>

<!-- End about section -->
<div class="card-container inner">
  <div class="card card-1">
    <div class="card-img"></div>
    <a href="" class="card-link">
      <div class="card-img-hovered"></div>
    </a>
    <div class="card-info">
      <div class="card-about">
        <a  href="#" class="card-tag tag-deals">MUA NGAY</a>
      <div class="card-time">6/11/2019</div>
      </div>
      <h1 class="card-title">LUVA BIDET - LB201</h1>
      <div class="card-creator">Nhập khẩu từ<a href=""> Nhật Bản</a></div>
    </div>
  </div>
  <div class="card card-2">
    <div class="card-img"></div>
    <a href="" class="card-link">
      <div class="card-img-hovered"></div>
    </a>
    <div class="card-info">
      <div class="card-about">
        <a href="#" class="card-tag tag-deals">MUA NGAY</a>
      <div class="card-time">6/07/2019</div>
      </div>
      <h1 class="card-title">LUVA BIDET - LB202</h1>
      <div class="card-creator">Nhập khẩu từ<a href=""> Nhật Bản</a></div>
    </div>
  </div>
  <div class="card card-3">
    <div class="card-img"></div>
    <a href="" class="card-link">
      <div class="card-img-hovered"></div>
    </a>
    <div class="card-info">
      <div class="card-about">
        <a  href="#"class="card-tag tag-deals">MUA NGAY</a>
      <div class="card-time">5/27/2019</div>
      </div>
      <h1 class="card-title">LUVA BIDET - LB203</h1>
      <div class="card-creator">Nhập khẩu từ<a href=""> Nhật Bản</a></div>
    </div>
  </div>
 
</div>

<!-- End List item -->

    <section class="advantage_sec">
          <div class ="wrap inner">
                <h3>Lợi ích LUVA BIDET mang đến cho bạn là gì?</h3>         
                <h5>Sản phẩm tiên tiến này sẽ thay đổi hoàn toàn cuộc sống của bạn. Hãy sử dụng để cảm nhận sự tiện nghi trong từng khoảnh khắc!</h5>
                <div class="list_wrap">
                    <ul>
                        <li>
                            
                            <div>
                                <h4>Giúp bạn tiết kiệm tiền bạc</h4>
                                <p>Mỗi năm bạn phải tốn 5 triệu đồng cho tiền mua giấy vệ sinh, nhưng với chưa tới 1 triệu bạn sẽ sở hữu vòi rửa LUVA BIDET sử dụng trong 10 năm.</p>
                            </div>
                        </li>
                        <li>
                         
                            <div>
                                <h4>Tốt cho phụ nữ</h4>
                                <p>Giúp phụ nữ rửa sạch nhẹ nhàng, tránh viêm nhiễm do chất tẩy trắng của giấy vệ sinh, đây là nguyên nhân chính gây ra bệnh phụ khoa.</p>
                            </div>
                        </li>
                        <li>
                          
                            <div>
                                <h4>Tốt cho trẻ em</h4>
                                <p>Trẻ em hoàn toàn có thể tự làm sạch sau khi đi vệ sinh, chỉ cần ngồi và xoáy nút, cha mẹ không phải tốn công lau chùi giúp.</p>
                            </div>
                        </li>
                        <li>
                          
                            <div>
                                <h4>Cho người bệnh trĩ, táo bón</h4>
                                <p>Bia rượu, ngồi nhiều gây ra táo bón và bệnh trĩ, rửa vệ sinh là cách làm sạch hậu môn nhẹ nhàng nhất với sự giúp đỡ của LUVA BIDET.</p>
                            </div>
                        </li>
                        <li>
                          
                            <div>
                                <h4>Hỗ trợ người già, người đau ốm</h4>
                                <p>Người già, người đau ốm đi lại khó khăn, bạn cũng sẽ không cần phải nhọc công giúp đỡ họ sau khi đi vệ sinh nữa.</p>
                            </div>
                        </li>
                        <li>
                         
                            <div>
                                <h4>Hạn chế tắc nghẽn bồn cầu</h4>
                                <p>Sử dụng vòi rửa LUVA BIDET sẽ hạn chế dùng giấy vệ sinh. Việc này không chỉ tiết kiệm tiền bạc mà còn giúp hạn chế việc tắc nghẽn bồn cầu.</p>
                            </div>
                        </li>
                    </ul>
                </div>
         </div>
    </section>   
    <!-- End sec advantage -->

    <section class="slogan_sec">
        <div class="parallax01">
            <div class="caption_box">       
                 <p>Nâng cao chất lượng cuộc sống ngay hôm nay và cảm nhận sự tiện nghi trong từng khoảnh khắc</p>
             </div>
        </div>
        <div class="parallax02">
            <div class ="left">
                <h5>PHẢN HỒI KHÁCH HÀNG</h5>
                <div class="feedback_wrap">
                    <div class=" mySlides feedback_list">
                        <img src="<?php echo(get_template_directory_uri()); ?>/img/top/feedback01.jpeg">
                        <p><i>Cảm ơn sản phẩm vòi rửa vs Luva, từ ngày sử dụng vòi rửa này như có thêm trợ thủ đắc lực hỗ trợ vệ sinh sạch sẽ cho các Con.</i></p>
                    </div>
                    <div class=" mySlides feedback_list">
                        <img src="<?php echo(get_template_directory_uri()); ?>/img/top/feedback02.jpg">
                        <p><i>Cảm ơn sản phẩm vòi rửa vs Luva, từ ngày sử dụng vòi rửa này như có thêm trợ thủ đắc lực hỗ trợ vệ sinh sạch sẽ cho các Con.</i></p>
                    </div>
                    <div class=" mySlides feedback_list">
                        <img src="<?php echo(get_template_directory_uri()); ?>/img/top/feedback01.jpeg">
                        <p><i>Sau khi sử dụng vòi rửa thông minh thấy nghiện, đi đến đâu không có thấy thiếu.</i></p>
                    </div>
                </div>
              </div>
            <div class="right">
                <div class="list_item">
                <i class="fa fa-truck" aria-hidden="true"></i>
                <p>GIAO HÀNG MIỄN PHÍ<span class ="detail">(Với đơn hàng trên 2.000.000 vnđ)</span></p>
                </div>
                <div class="list_item">
                <i class="fa fa-certificate" aria-hidden="true"></i>
                <p>CAM KẾT HÀNG CHÍNH HÃNG</p>
                </div>
                <div class="list_item">
                <i class="fa fa-share" aria-hidden="true"></i>
                <p>ĐỔI TRẢ TRONG 7 NGÀY</p>
                </div>
                <div class="list_item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>HỖ TRỢ 24/7<span class ="detail">( Liên hệ qua đường dây: 04 6661 6462)</span></p>
                </div>
            </div>
        </div>
    </section>
           
        </div>
	</main>

<?php

get_footer();
