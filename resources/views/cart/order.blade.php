<div class="container">
    <div class="row justify-content-center">
        <div class="   text-center p-0 mt-3 mb-2">
            <div class="card-c px-0 pt-4 pb-0 mt-3 mb-3">
               <div class="check-logo">
                 <img src="./assets/images/logo_nne.png" alt="">
                 <p class="text-logo">Đặt hàng cùng Skymart ngay hôm nay để nhận được nhiều khuyến mãi hấp dẫn</p>
               </div>
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Thông tin thanh toán</strong></li>
                        <li id="personal"><strong>Phương thức thanh toán</strong></li>
                        <li id="payment"><strong>Thanh toán & Đặt mua</strong></li>
                        <li id="confirm"><strong>Hoàn thành</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> 
                    <fieldset>
                        <div class="form-card">
                           
                            <div class="row">
                              <div class="col-md-3"></div>
                              <div class="col-md-6">
                                <div class="row">
                                  <label class="fieldlabels col-3">Họ và tên: </label> <input type="text" class="col-8" placeholder="Họ và tên" /> 
                                  <label class="fieldlabels col-3">Số điện thoại: </label> <input type="text" class="col-8"   placeholder="Số điện thoại" />
                                  <label class="fieldlabels col-3">Tỉnh/Thành phố: </label> <input type="text" class="col-8"  placeholder="Quảng Trị" />
                                <label class="fieldlabels col-3">Quận/Huyện: </label> <input type="text"  class="col-8" placeholder="Chọn tỉnh/Thành phố" />
                                <label class="fieldlabels col-3">Phường/Xã: </label> <input type="text" class="col-8"  placeholder="Số điện thoại" />
                                <label class="fieldlabels col-3">Địa chỉ: </label> <input type="text" class="col-8"  placeholder="Số điện thoại" />
                                </div>
                               
                               
                              </div>
                              <div class="col-md-3"></div>
                            </div>
                             
                        </div> <input type="button" name="next" class="next action-button" value="Tiếp theo" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                          <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                              <div class="style_shiping">
                                <h3>1.Chọn hình thức giao hàng</h3>
                                <div class="shipping-method">
                                  <div class="shipping-method2">
                                    <label class="radio-check"> <p style="font-weight:bold">Giao hàng tiêu chuẩn </p>
                                      <input type="checkbox" checked="checked" name="radio">
                                      <span class="checkmark"></span>
                                      <div style="font-size: 12px; color: rgb(77, 75, 74);">
                                          <p>Giao từ 4-7 ngày tính từ ngày đặt hàng</p>
                                          <p>Phí ship: 15.000đ</p>
                                      </div>
                                    </label>
                                    <label class="radio-check"><p style="font-weight:bold">Giao nhanh</p> </p>
                                      <input type="checkbox" name="radio">
                                      <span class="checkmark"></span>
                                      <div style="font-size: 12px; color: rgb(77, 75, 74);">
                                        <p>Giao từ 2-3 ngày tính từ ngày đặt hàng</p>
                                        <p>Phí ship: 30.000đ</p>
                                    </div>
                                    </label>
                                  
                                  </div>
                                </div>
                              </div>
                              <div class="style_shiping">
                                <h3>2.Chọn hình thức thanh toán</h3>
                                <div class="shipping-method">
                                  <div class="shipping-method2">
                                    <label class="radio-check"> <p style="font-weight:bold"><img class="method-icon"  src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-cod.svg" alt=""> Thanh toán khi nhận hàng </p>
                                      <input type="radio" checked="checked" name="radio">
                                      <span class="checkmark"></span>
                                     
                                    </label>
                                    <label class="radio-check"><p style="font-weight:bold"><img class="method-icon"  src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-credit.svg" alt=""> Thanh toán bằng paypal</p> </p>
                                      <input type="radio" name="radio">
                                      <span class="checkmark"></span>
                                     
                                    </label>
                                    <label class="radio-check"><p style="font-weight:bold"><img class="method-icon"  src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-mo-mo.svg" alt=""> Thanh toán bằng ví MoMo</p> </p>
                                      <input type="radio" name="radio">
                                      <span class="checkmark"></span>
                                     
                                    </label>
                                  
                                  </div>
                                </div>
                              </div>
                            
                             
                             
                            </div>
                            <div class="col-md-3"></div>
                          </div>
                        </div><input type="button" name="previous" class="previous action-button-previous" value="Quay lại" /> <input type="button" name="next" class="next action-button" value="Tiếp theo" /> 
                    </fieldset>
                    <fieldset>
                      <div class="form-card">
                         <div class="row">
                           <div class="col-md-2"></div>
                           <div class="col-md-10">                             
                                 <div class="small-container  cart-page2 ">
                                    <div class="row">
                                      <div class="col-md-10">
                                        <table style="text-align:center">
                                          <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Số lượng</th>
                                            <th>Cập nhật</th>
                                            <th>Giá</th>
                                          </tr>
                                          <tr>
                                            <td>
                                              Chuột logitech red
                                            </td>
                                            <td>
                                              <div class="cart-info">
                                                <img src="./assets/images/pro1.jpg"  alt="">
                                              
                                              </div>
                              
                                            </td>
                                            
                                            <td><input type="number" value="1"></td>
                                            <td>
                                              <a href="">Xóa khỏi giỏ hàng</a>
                                            </td>
                                            <td>50.000đ</td>
                                          </tr>
                                          <tr>
                                            <td>
                                              Chuột logitech red
                                            </td>
                                            <td>
                                              <div class="cart-info">
                                                <img src="./assets/images/pro1.jpg"  alt="">
                                              
                                              </div>
                              
                                            </td>
                                            
                                            <td><input type="number" value="1"></td>
                                            <td>
                                              <a href="">Xóa khỏi giỏ hàng</a>
                                            </td>
                                            <td>50.000đ</td>
                                          </tr>
                                          
                                         
                                        </table>
                                        <div class="total-price2">
                                          <table>
                                            <tr>
                                              <td>Tổng tiền</td>
                                              <td>200.000đ</td>
                                            </tr>
                                            <tr>
                                              <td>Phí vận chuyển</td>
                                              <td>20.000đ</td>
                                            </tr>
                                            <tr>
                                              <td>Thành tiền</td>
                                              <td>220.000đ</td>
                                            </tr>
                                          </table>
                                        </div>
                                      
                                      </div>
                                     
                                    </div>
                                 </div>                                                                
                          </div>
                           <div class="col-md-2"></div>
                         </div>
                      </div> <input type="button" name="previous" class="previous action-button-previous" value="Quay lại" /><input type="button" name="next" class="next action-button" value="Đặt hàng" /> 
                  </fieldset>
                    <fieldset>
                        <div class="form-card">
                             <br><br>
                            <h2 class="purple-text text-center"><strong>Cám ơn bạn đã đặt hàng tại Skymart !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://icon-library.com/images/complete-icon-png/complete-icon-png-6.jpg" class="fit-image"> </div>
                            </div> <br>
                            
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h4 class=" text-center">Xem đơn hàng của bạn <a href="" style="color: rgb(243, 54, 54);">Tại đây</a></h4>
                                    <h4 class="purple-text text-center"><a href=""><i class="fas fa-cart-arrow-down"></i> Tiếp tục mua sắm</a></h4>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
