@extends('layouts.app')
@section('content')

<div class="about-page">
    <div class="about-sky">
       <div class="container">
         <div class="about-title">
           Dịch vụ của <span style="color: rgb(233, 83, 23);">SkyMart</span> 
         </div>
         <div class="about-content">
           <div class="row">
             <div class="col-7">
               <p>Tận hưởng dịch vụ giao hàng nhanh hoàn toàn miễn phí, giảm giá vé xem phim và rất nhiều lợi ích khác dành riêng cho thành viên Skymart.</p>
               <ul class="features">
                 <li><img src="https://salt.tikicdn.com/ts/upload/40/df/a0/f3513d2eeb61d26bfff775654c40e45e.png" alt="">Miễn phí vận chuyển</li>
                 <li><img src="https://salt.tikicdn.com/ts/upload/40/df/a0/f3513d2eeb61d26bfff775654c40e45e.png">Tặng voucer khuyến mãi mỗi ngày</li>
                 <li> <img src="https://salt.tikicdn.com/ts/upload/40/df/a0/f3513d2eeb61d26bfff775654c40e45e.png">Ưu đãi dành cho thành viên của Skymart</li>
               </ul>
               <span class="button-wrap"> 
                   <button class="ab-btn mb-3">Mua Ngay</button>
               </span>
             </div>
             <div class="col-5">
               <img class="mb-5" src="./assets/images/logo_nne.png" alt="">
             </div>
           </div>
         </div>
       </div>
    </div>
    <div class="contact">
     <div class="container">
      <div class="form-contact">
        <div class="contact-title">
            <h3>Liên hệ với chúng tôi</h3>
        </div>
        <div class="contack-form">
          <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
              <form action="" id="contact">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="form-control-label mbr-fonts-style display-7" for="">Tên</label>
                      <input type="text" class="form-control" name="name" id="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="form-control-label mbr-fonts-style display-7" for="">Email</label>
                      <input type="text" class="form-control" name="email" id="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="form-control-label mbr-fonts-style display-7" for="">SĐT</label>
                      <input type="text" class="form-control" name="sdt" id="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-control-label mbr-fonts-style display-7" for="">Nội dung</label>
                  <textarea class="form-control" name="text" id="" cols="60" rows="10"></textarea>
                </div>
              </form>
            </div>
            <div class="col-2"></div>
          </div>
        </div>
     </div>
     </div>
    
   </div>
    <div class="doi-tac">
      <div class="container">
       <div class="doitac-title">
         <h3>Skymart - mang đến mọi thứ mà bạn cần !!!</h3>
       </div>
       
      </div>
      
    </div>
    <div class="ql">
     <span class="text">Quay về trang chủ  <i class="fas fa-arrow-right"></i></span>
   </div>
  </div>


  <script>
      $("#contact").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"name": {
				required: true,
				maxlength: 25
			},
           
            "email":{
                required: true,
                email: true
            },
            
			"sdt": {
				required: true,
				maxlength: 10
			},
            "text": {
				required: true
				
			},
			
		},
		messages: {
			"name": {
				required: "*Bạn chưa nhập tên",
				maxlength: "*Hãy nhập tối đa 25 ký tự"
			},
           
            "email": {
				required: "*Bạn chưa nhập email",
				email: "*Nhập sai định dạng email"
			},
            "sdt": {
				required: "*Bạn chưa nhập sdt",
				
			},
			"text": {
				required: "*Bạn chưa nhập nội dung",
				
			},
			
        },
        
	});

  </script>

@endsection