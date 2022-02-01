<?
require ("components/header.php");
?>

            <div class="row ">

                <div class="col-sm-6 col-lg-2 mg-t-10">


                    <!--<div class="spinner-border" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>-->


                    <div class="align-items-center justify-content-between mg-b-20 d-none d-sm-flex">
                        <h2 class="tx-uppercase tx-semibold mg-b-0 ch-gm" style="color: #031a61;">Выбор игры</h2>
                    </div>





                     <ul class="list-unstyled media-list mg-b-15 d-none d-sm-block">
                        
                        
                        
                        
                        <li onclick="window.location.href='/dice'" class="media align-items-center mg-t-15 gameinc ">
							<div class="avatar">
								<span class="avatar-initial rounded bg-dark men-gam" style="box-shadow: 0 5px 23px 0 rgba(59, 72, 99, 0.25);"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
									<path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path>
									<polyline points="2.32 6.16 12 11 21.68 6.16"></polyline>
									<line x1="12" y1="22.76" x2="12" y2="11"></line>
									</svg>
								</span>
							</div>
							<div class="media-body pd-l-15">
								<h6 class="mg-b-2"><a href="/dice" class="link-01 tx-18">Dice</a></h6>
							</div>
						</li>
						<li class="mg-t-15 align-items-center gameinc media" onclick="window.location.href='/mine'" id="menudice">
							<div class="avatar">
								<span class="avatar-initial bg-dark men-gam rounded" style="box-shadow:0 5px 23px 0 rgba(59,72,99,.25)">
									<svg viewBox="0 0 512 512" width="1em" height="1em" class="iconify tx-22" xmlns="http://www.w3.org/2000/svg" style="-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)" aria-hidden="true" data-icon="ion-md-grid" data-inline="false" focusable="false" preserveAspectRatio="xMidYMid meet" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M409.6 64H102.4C81.3 64 64 81.3 64 102.4v307.2c0 21.1 17.3 38.4 38.4 38.4h307.2c21.1 0 38.4-17.3 38.4-38.4V102.4c0-21.1-17.3-38.4-38.4-38.4zM179.2 409.6h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8z" fill="currentColor"></path></svg>
								</span>
							</div>
							<div class="pd-l-15 media-body">
								<h6 class="mg-b-2"><a class="link-01 tx-18" href="/mine">Mines</a></h6>
							</div>
						</li>
						
						<li onclick="window.location.href='/wheel'" class="media align-items-center mg-t-15 gameinc  ">
							<div class="avatar">
								<span class="avatar-initial rounded bg-dark men-gam" style="box-shadow: 0 5px 23px 0 rgba(59, 72, 99, 0.25);">
								    <svg width="1em" height="1em"  class="iconify tx-22  "><use xlink:href="#icon-wheel"><svg fill="currentColor"   id="icon-wheel" viewBox="0 0 32 32"><path d="M8.752 6.112c1.556-1.144 3.39-1.932 5.381-2.237v-3.763c-3.019 0.351-5.781 1.542-8.047 3.334l2.666 2.666zM3.875 14.133c0.306-1.991 1.093-3.825 2.237-5.381l-2.666-2.666c-1.792 2.267-2.983 5.028-3.334 8.047h3.763zM28.554 6.086l-2.666 2.666c1.145 1.556 1.932 3.39 2.237 5.382h3.763c-0.351-3.020-1.542-5.781-3.334-8.047zM17.867 3.875c1.991 0.306 3.826 1.093 5.382 2.237l2.666-2.666c-2.267-1.792-5.028-2.983-8.047-3.334v3.763zM28.125 17.867c-0.305 1.991-1.093 3.826-2.237 5.382l2.666 2.666c1.792-2.267 2.983-5.028 3.334-8.047h-3.763zM23.249 25.888c-1.556 1.145-3.39 1.932-5.382 2.237v3.763c3.019-0.351 5.781-1.542 8.047-3.334l-2.666-2.666zM6.112 23.249c-1.144-1.556-1.932-3.39-2.237-5.382h-3.763c0.351 3.019 1.542 5.781 3.334 8.047l2.666-2.666zM14.133 28.125c-1.991-0.305-3.825-1.093-5.382-2.237l-2.666 2.666c2.267 1.792 5.028 2.983 8.047 3.334v-3.763h0.001z"></path></svg></use></svg>
								</span>
						     </div>
							<div class="media-body pd-l-15">
								<h6 class="mg-b-2"><a href="/wheel" class="link-01 tx-18">Wheel</a></h6>
							</div>
						</li>
						
						<li onclick="window.location.href='/coin'" class="media align-items-center mg-t-15 gameinc ">
							<div class="avatar">
								<span class="avatar-initial rounded bg-dark men-gam" style="box-shadow: 0 5px 23px 0 rgba(59, 72, 99, 0.25);">
						    		<svg width="1em" height="1em"  class="iconify tx-22  "><use xlink:href="#icon-coinflip"><svg fill="currentColor"   id="icon-coinflip" viewBox="0 0 32 32"><path d="M16 0c8.838 0 16 7.164 16 16s-7.162 16-16 16c-8.836 0-16-7.164-16-16s7.164-16 16-16zM20.697 11.539c-1.35-2.626-3.012-4.073-4.68-4.073s-3.33 1.446-4.681 4.073c-1.081 2.103-1.808 4.718-1.808 6.507 0 3.577 2.911 6.487 6.488 6.487s6.487-2.911 6.487-6.488c0-1.788-0.726-4.403-1.808-6.507z"></path></svg></use></svg>
						    	</span>
						     </div>
							<div class="media-body pd-l-15">
								<h6 class="mg-b-2"><a href="/coin" class="link-01 tx-18">Coinflip</a></h6>
							</div>
						</li>
                    </ul>



                </div>


                <div class="col-lg-10 col-xl-10 mg-t-10" id="loadPage" style="display:none;height:100vh">
                    <div class="spinner-border">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <div style="display: contents;" id="mainView">
                    
                    
<div class="col-lg-10 col-xl-10 mg-t-10" style="height: 81vh;">
<style>
    
    a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
    color: #fafafa;
    }
</style>
    <div class="card">
        <div class="card-header pd-t-20 d-sm-flex align-items-start justify-content-between bd-b-0 pd-b-0">
            <div>
                <h4 class="mg-b-5 ">Бесплатные бонусы</h4>
            </div>
        </div>

        <div class="card-body pd-20 bd-b pd-b-20">
            <div class="row">
                <div class="col-12">

                <div class=" card-crypto">
                        <ul class="nav nav-pills">
                        <li class="nav-item" style="cursor:pointer">
                          <a class="nav-link prn active" onclick="$('.prn').removeClass('active');$(this).addClass('active');$('.prb').hide();$('#promo1').show();">Ежедневная раздача</a>
                        </li>
                        <li class="nav-item" style="cursor:pointer">
                          <a class="nav-link prn" onclick="$('.prn').removeClass('active');$(this).addClass('active');$('.prb').hide();$('#promo2').show();">Промокод</a>
                        </li>
                      </ul>
                </div>
                    <hr>
                  <div class="mg-t-20 text-center prb" id="promo1">
                      <svg class="mg-b-20" enable-background="new 0 0 512 512" height="100" viewBox="0 0 512 512" width="100" xmlns="http://www.w3.org/2000/svg"><g><g><g><path d="m512 256c0 127.57-93.32 233.35-215.41 252.79-20.05-27.57-61.14-27.57-81.18 0-122.09-19.44-215.41-125.22-215.41-252.79 0-46.21 12.25-89.56 33.68-126.99 44.11-77.07 127.15-129.01 222.32-129.01s178.21 51.94 222.32 129.01c21.43 37.43 33.68 80.78 33.68 126.99z" fill="#c5d7fc"></path><path d="m512 256c0 78-34.89 147.85-89.91 194.81-34.97 29.84-78.06 50.43-125.5 57.99-20.04-27.58-61.15-27.58-81.18 0-47.44-7.56-90.53-28.15-125.5-57.99-55.02-46.96-89.91-116.81-89.91-194.81 0-46.21 12.25-89.56 33.68-126.99 19.54 34.13 46.71 63.34 79.2 85.28 30.21 20.41 65.01 34.54 102.53 40.51 13.22 2.12 26.78 3.21 40.59 3.21s27.37-1.09 40.59-3.21c37.52-5.97 72.32-20.1 102.53-40.51 32.49-21.94 59.66-51.15 79.2-85.28 21.43 37.43 33.68 80.78 33.68 126.99z" fill="#8fc8f5"></path></g></g><g><path d="m422.09 214.29v236.52c-34.97 29.84-78.06 50.43-125.5 57.99-20.04-27.58-61.15-27.58-81.18 0-47.44-7.56-90.53-28.15-125.5-57.99v-236.52z" fill="#de1263"></path><path d="m422.09 214.29v236.52c-34.97 29.84-78.06 50.43-125.5 57.99-10.02-13.79-25.31-20.68-40.59-20.68v-273.83z" fill="#bb0d5d"></path><path d="m255.996 214.289h166.095v107.037h-166.095z" fill="#a80e5b"></path><path d="m89.91 214.289h166.086v107.037h-166.086z" fill="#bb0d5d"></path><path d="m444.198 199.225v60.579c0 9.142-7.417 16.559-16.559 16.559h-343.278c-9.142 0-16.559-7.417-16.559-16.559v-60.579c0-9.151 7.417-16.559 16.559-16.559h343.277c9.143-.001 16.56 7.408 16.56 16.559z" fill="#f7287c"></path><path d="m444.198 199.225v60.579c0 9.142-7.417 16.559-16.559 16.559h-171.643v-93.697h171.643c9.142-.001 16.559 7.408 16.559 16.559z" fill="#de1263"></path><path d="m296.59 182.67v326.13c-13.22 2.11-26.78 3.2-40.59 3.2s-27.37-1.09-40.59-3.2v-326.13z" fill="#ffeb00"></path><path d="m296.59 182.67v326.13c-13.22 2.11-26.78 3.2-40.59 3.2v-329.33z" fill="#ffd400"></path><path d="m396.933 127.855v.008c0 30.264-24.538 54.801-54.801 54.801h-172.263c-30.264 0-54.801-24.537-54.801-54.801v-.008c0-15.132 6.134-28.837 16.05-38.752 9.915-9.915 23.62-16.05 38.752-16.05 47.571 0 86.127 38.565 86.127 86.127 0-47.562 38.565-86.127 86.136-86.127 30.262.001 54.8 24.539 54.8 54.802z" fill="#ffcf1c"></path><path d="m396.933 127.855v.008c0 30.264-24.538 54.801-54.801 54.801h-86.136v-23.484c0-47.562 38.565-86.127 86.136-86.127 30.263.001 54.801 24.539 54.801 54.802z" fill="#fcbf10"></path><path d="m313.298 160.382v.003c0 12.304-9.976 22.28-22.28 22.28h-70.036c-12.304 0-22.28-9.976-22.28-22.28v-.003c0-6.152 2.494-11.724 6.525-15.755s9.603-6.525 15.755-6.525c19.341 0 35.016 15.679 35.016 35.016 0-19.337 15.679-35.016 35.02-35.016 12.304-.001 22.28 9.975 22.28 22.28z" fill="#fcbf10"></path><path d="m313.298 160.382v.003c0 12.304-9.976 22.28-22.28 22.28h-35.02v-9.548c0-19.337 15.679-35.016 35.02-35.016 12.304 0 22.28 9.976 22.28 22.281z" fill="#ff9f01"></path></g></g></svg>
                      <h4 class="mg-b-5 tx-normal">До 100 на баланс ежедневно</h4>
                        
                        
                    
                   <script type="text/javascript">
	
	
	function getPromo() {
										if ($('#g-recaptcha-response').val() == ''){
										$('#error_promo').show();
										return $('#error_promo').html('Поставьте галочку');
										}
									
										
									$.ajax({
                                        type: 'POST',
                                        url: '/action.php',
										beforeSend: function() {
											$('.btn-get-promo').addClass("disabled");
										},	
                                        data: {
                                            type: "bonus"
                                            
                                        },
                                        success: function(data) {
                                            $('.btn-get-promo').removeClass("disabled");
											$('#error_promo').hide();
                                            var obj = jQuery.parseJSON(data);
                                           if (obj.success == "success") {
                                               $("#succes_promo").show();
                                               $(".maksks").hide();
                                               $(".btn-get-promo").hide()
											  $('#succes_promo').html("Получено в раздаче <b>"+ obj.bonussize + "</b>");
											  
											  updateBalance(obj.balance, obj.new_balance);
											  updateBalanceMobile(obj.success.balance, obj.new_balance);
											 
																						 return false;
                                            }else{
											
												$('#error_promo').show();
												$("#succes_promo").hide();
												return $('#error_promo').html(obj.error);
											}
                                        }
                                    });
                                    
                                }
                                
                                
	function actPromo() {
										
										
										if ($("#prNum").val() == ""){
										    $('#error_actpromo').show();
										return $('#error_actpromo').html('Введите промокод');
										}
									
										
									$.ajax({
                                        type: 'POST',
                                        url: '/action.php',
										beforeSend: function() {
											$('.btn-get-actpromo').addClass("disabled");
										},	
                                        data: {
                                            type: "activePromo",
                                            
                                            promoactive: $("#prNum").val(),
											
                                        },
                                        success: function(data) {
                                            $('.btn-get-actpromo').removeClass("disabled");
											$('#error_actpromo').hide();
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                                               $("#succes_actpromo").show();
                                               $(".maksksmaksks").hide();
                                               $(".btn-get-actpromo").hide()
											  $('#succes_actpromo').html("Промокод активирован");
											  
											  updateBalance(obj.balance, obj.new_balance);
											  updateBalanceMobile(obj.balance, obj.new_balance);
											 
																						 return false;
                                            }else{
												
												$('#error_actpromo').show();
												$("#succes_actpromo").hide();
												return $('#error_actpromo').html(obj.error);
											}
                                        }
                                    });
                                    
                                }
</script>
                      <div id="gbn" >
                     <div class="mg-b-10"><button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-t-5 btn-get-promo" onclick="getPromo()">Получить</button></div>
                     <span id="error_promo" class=" tx-danger " role="alert" style="display:none;"></span>
                     <button id="succes_promo" style="padding: 9px 26px; pointer-events: none;display:none" class="btn tx-medium btn-la-mob bg-success-dice tx-white bd-0 btn-sel-d "></button>
                      </div>
                      
                    </div>
                  <div class="mg-t-20 mg-b-20 text-center prb" id="promo2" style="display:none">
                    <svg class="mg-b-20" xmlns="http://www.w3.org/2000/svg"><path d="m101.921875 496.347656c-1.855469 0-3.710937-.695312-5.148437-2.089844-2.929688-2.84375-3-7.523437-.152344-10.453124l9.1875-9.464844c2.84375-2.929688 7.523437-3 10.453125-.15625 2.929687 2.84375 3 7.523437.15625 10.453125l-9.191407 9.464843c-1.449218 1.496094-3.375 2.246094-5.304687 2.246094zm0 0" fill="#ff4e61"></path><path d="m201.648438 133.261719c-1.851563 0-3.710938-.695313-5.144532-2.089844-2.929687-2.84375-3-7.523437-.15625-10.449219l9.191406-9.46875c2.84375-2.929687 7.519532-3 10.449219-.15625 2.929688 2.84375 3 7.523438.15625 10.453125l-9.191406 9.46875c-1.449219 1.492188-3.375 2.242188-5.304687 2.242188zm0 0" fill="#ff4e61"></path><path d="m413.804688 100.390625c-1.855469 0-3.710938-.691406-5.148438-2.085937-2.929688-2.84375-3-7.523438-.15625-10.453126l9.191406-9.46875c2.84375-2.925781 7.523438-2.996093 10.453125-.152343 2.929688 2.839843 3 7.523437.15625 10.449219l-9.191406 9.46875c-1.449219 1.492187-3.375 2.242187-5.304687 2.242187zm0 0" fill="#5c73bc"></path><path d="m413.804688 463.773438c-1.855469 0-3.710938-.695313-5.148438-2.085938-2.929688-2.84375-3-7.523438-.15625-10.453125l9.191406-9.46875c2.84375-2.925781 7.523438-3 10.453125-.15625 2.929688 2.84375 3 7.523437.15625 10.453125l-9.191406 9.46875c-1.449219 1.492188-3.375 2.242188-5.304687 2.242188zm0 0" fill="#fa0"></path><path d="m63.070312 112.910156c-1.851562 0-3.710937-.691406-5.144531-2.085937-2.929687-2.84375-3-7.523438-.15625-10.453125l9.191407-9.46875c2.84375-2.925782 7.523437-2.996094 10.453124-.152344 2.925782 2.84375 2.996094 7.523438.152344 10.449219l-9.191406 9.46875c-1.449219 1.492187-3.375 2.242187-5.304688 2.242187zm0 0" fill="#fa0"></path><path d="m12.308594 278.824219c-1.851563 0-3.710938-.691407-5.144532-2.085938-2.929687-2.84375-3-7.523437-.15625-10.453125l9.1875-9.46875c2.84375-2.929687 7.523438-3 10.453126-.15625 2.929687 2.84375 3 7.523438.15625 10.453125l-9.191407 9.46875c-1.445312 1.492188-3.375 2.242188-5.304687 2.242188zm0 0" fill="#2dc471"></path><path d="m216.292969 278.492188-23.996094 12.996093c-6.222656 3.371094-13.496094-2.074219-12.308594-9.214843l4.582031-27.523438c.472657-2.835938-.4375-5.726562-2.4375-7.734375l-19.414062-19.496094c-5.035156-5.054687-2.257812-13.863281 4.703125-14.90625l26.824219-4.015625c2.765625-.414062 5.152344-2.199218 6.386718-4.78125l12-25.042968c3.113282-6.492188 12.101563-6.492188 15.214844 0l11.996094 25.042968c1.238281 2.582032 3.625 4.367188 6.386719 4.78125l26.828125 4.015625c6.957031 1.042969 9.734375 9.851563 4.699218 14.90625l-19.410156 19.496094c-2 2.007813-2.914062 4.898437-2.441406 7.734375l4.582031 27.523438c1.191407 7.140624-6.082031 12.585937-12.304687 9.214843l-23.996094-12.996093c-2.472656-1.339844-5.425781-1.339844-7.894531 0zm0 0" fill="#ffd02f"></path><path d="m220.238281 512c-4.082031 0-7.390625-3.308594-7.390625-7.390625v-115.59375c0-4.082031 3.308594-7.394531 7.390625-7.394531s7.390625 3.3125 7.390625 7.394531v115.59375c0 4.082031-3.308594 7.390625-7.390625 7.390625zm0 0" fill="#5c73bc"></path><path d="m220.296875 357.421875h-.113281c-4.082032 0-7.394532-3.3125-7.394532-7.394531 0-4.082032 3.308594-7.390625 7.394532-7.390625h.113281c4.082031 0 7.390625 3.308593 7.390625 7.390625 0 4.082031-3.308594 7.394531-7.390625 7.394531zm0 0" fill="#5c73bc"></path><path d="m220.296875 331.996094c-.011719 0-.023437 0-.03125 0h-.117187c-4.082032-.015625-7.375-3.339844-7.359376-7.421875.019532-4.074219 3.324219-7.359375 7.390626-7.359375h.035156.113281c4.082031.015625 7.375 3.339844 7.359375 7.421875-.015625 4.070312-3.324219 7.359375-7.390625 7.359375zm0 0" fill="#fa0"></path><path d="m87.234375 230.894531c-1.929687 0-3.855469-.75-5.304687-2.242187l-79.339844-81.738282c-2.84375-2.929687-2.777344-7.609374.152344-10.449218 2.929687-2.84375 7.609374-2.773438 10.453124.152344l79.34375 81.738281c2.84375 2.925781 2.773438 7.609375-.15625 10.449219-1.4375 1.394531-3.292968 2.089843-5.148437 2.089843zm0 0" fill="#ff4e61"></path><path d="m113.953125 258.503906c-1.863281 0-3.726563-.699218-5.164063-2.105468-2.921874-2.851563-2.976562-7.53125-.125-10.453126l.082032-.082031c2.851562-2.917969 7.53125-2.976562 10.453125-.121093 2.921875 2.851562 2.976562 7.53125.121093 10.453124l-.078124.082032c-1.449219 1.480468-3.367188 2.226562-5.289063 2.226562zm0 0" fill="#fa0"></path><path d="m131.402344 276.480469c-1.855469 0-3.710938-.695313-5.148438-2.089844-2.925781-2.84375-2.996094-7.523437-.152344-10.449219l.078126-.085937c2.847656-2.929688 7.527343-2.996094 10.453124-.152344 2.929688 2.84375 3 7.523437.15625 10.453125l-.082031.082031c-1.449219 1.492188-3.375 2.242188-5.304687 2.242188zm0 0" fill="#5c73bc"></path><path d="m353.242188 227.988281c-1.855469 0-3.710938-.691406-5.144532-2.085937-2.929687-2.84375-3-7.523438-.15625-10.453125l79.339844-81.734375c2.84375-2.929688 7.523438-3 10.453125-.15625s3 7.523437.15625 10.453125l-79.34375 81.734375c-1.449219 1.492187-3.375 2.242187-5.304687 2.242187zm0 0" fill="#fa0"></path><path d="m326.523438 255.601562c-1.914063 0-3.824219-.738281-5.269532-2.210937l-.082031-.082031c-2.863281-2.914063-2.820313-7.59375.089844-10.453125 2.914062-2.863281 7.59375-2.820313 10.453125.089843l.082031.082032c2.859375 2.914062 2.820313 7.59375-.09375 10.453125-1.4375 1.414062-3.308594 2.121093-5.179687 2.121093zm0 0" fill="#ff4e61"></path><path d="m309.074219 273.578125c-1.929688 0-3.855469-.75-5.304688-2.242187l-.082031-.082032c-2.839844-2.929687-2.773438-7.609375.15625-10.453125s7.609375-2.773437 10.453125.152344l.082031.082031c2.839844 2.929688 2.773438 7.609375-.15625 10.453125-1.4375 1.394531-3.292968 2.089844-5.148437 2.089844zm0 0" fill="#fa0"></path><path d="m300.652344 116.691406c-1.242188 0-2.5-.3125-3.652344-.972656-3.546875-2.023438-4.78125-6.539062-2.757812-10.082031l56.863281-99.652344c2.023437-3.542969 6.535156-4.777344 10.082031-2.753906 3.546875 2.023437 4.78125 6.539062 2.757812 10.082031l-56.863281 99.652344c-1.363281 2.386718-3.859375 3.726562-6.429687 3.726562zm0 0" fill="#62d38f"></path><path d="m281.523438 150.328125c-1.292969 0-2.597657-.335937-3.789063-1.046875l-.097656-.058594c-3.5-2.09375-4.644531-6.632812-2.546875-10.136718 2.09375-3.507813 6.632812-4.644532 10.136718-2.550782l.097657.058594c3.503906 2.09375 4.644531 6.632812 2.550781 10.136719-1.386719 2.316406-3.835938 3.597656-6.351562 3.597656zm0 0" fill="#fa0"></path><path d="m269.015625 172.246094c-1.300781 0-2.617187-.34375-3.808594-1.0625l-.097656-.058594c-3.496094-2.109375-4.621094-6.652344-2.515625-10.148438 2.109375-3.496093 6.652344-4.617187 10.148438-2.511718l.097656.058594c3.496094 2.109374 4.621094 6.652343 2.511718 10.148437-1.386718 2.300781-3.832031 3.574219-6.335937 3.574219zm0 0" fill="#2dc471"></path><path d="m139.964844 116.691406c-2.570313 0-5.066406-1.339844-6.429688-3.730468l-56.863281-99.648438c-2.023437-3.546875-.789063-8.058594 2.753906-10.082031 3.546875-2.023438 8.0625-.792969 10.085938 2.753906l56.863281 99.648437c2.023438 3.546876.789062 8.0625-2.753906 10.085938-1.15625.660156-2.414063.972656-3.65625.972656zm0 0" fill="#5c73bc"></path><path d="m159.09375 150.328125c-2.507812 0-4.957031-1.277344-6.34375-3.582031-2.101562-3.5-.96875-8.042969 2.527344-10.144532l.101562-.058593c3.5-2.101563 8.039063-.972657 10.140625 2.527343 2.105469 3.5.972657 8.039063-2.527343 10.144532l-.097657.058594c-1.191406.714843-2.503906 1.054687-3.800781 1.054687zm0 0" fill="#ff4e61"></path><path d="m171.601562 172.246094c-2.5 0-4.9375-1.265625-6.328124-3.5625-2.117188-3.492188-1-8.035156 2.488281-10.152344l.097656-.058594c3.496094-2.113281 8.039063-1 10.15625 2.492188 2.113281 3.492187 1 8.035156-2.492187 10.152344l-.097657.058593c-1.199219.726563-2.519531 1.070313-3.824219 1.070313zm0 0" fill="#fa0"></path><path d="m402.144531 357.28125-15.523437 11.601562c-4.023438 3.011719-9.652344-.042968-9.523438-5.164062l.503906-19.75c.050782-2.035156-.871093-3.964844-2.46875-5.164062l-15.507812-11.621094c-4.023438-3.015625-2.945312-9.472656 1.824219-10.929688l18.390625-5.609375c1.890625-.578125 3.390625-2.082031 4-4.015625l5.9375-18.785156c1.539062-4.875 7.835937-5.8125 10.652344-1.589844l10.863281 16.285156c1.121093 1.675782 2.96875 2.679688 4.941406 2.679688l19.179687.011719c4.976563.003906 7.789063 5.882812 4.757813 9.949219l-11.675781 15.671874c-1.203125 1.617188-1.558594 3.738282-.949219 5.671876l5.917969 18.796874c1.53125 4.875-3.027344 9.445313-7.714844 7.734376l-18.078125-6.597657c-1.859375-.679687-3.925781-.371093-5.527344.824219zm0 0" fill="#ffd02f"></path><path d="m261.507812 512c-4.082031 0-7.390624-3.308594-7.390624-7.390625 0-57.230469 22.832031-95.921875 41.984374-118.304687 20.828126-24.332032 41.613282-35.023438 42.488282-35.46875 3.640625-1.847657 8.089844-.390626 9.933594 3.253906 1.84375 3.636718.394531 8.078125-3.242188 9.929687-.3125.160157-19.5 10.164063-38.367188 32.394531-25.226562 29.71875-38.015624 66.121094-38.015624 108.195313 0 4.082031-3.308594 7.390625-7.390626 7.390625zm0 0" fill="#ff4e61"></path><path d="m102.855469 397.351562 11.765625 15.605469c3.054687 4.046875 9.285156 2.730469 10.546875-2.226562l4.863281-19.113281c.5-1.964844 1.910156-3.554688 3.769531-4.246094l18.039063-6.707032c4.679687-1.738281 5.390625-8.25 1.207031-11.015624l-16.140625-10.671876c-1.660156-1.101562-2.691406-2.972656-2.757812-5.003906l-.617188-19.75c-.15625-5.121094-5.949219-7.832031-9.796875-4.585937l-14.839844 12.515625c-1.53125 1.289062-3.578125 1.722656-5.472656 1.15625l-18.421875-5.5c-4.777344-1.425782-9.070312 3.410156-7.261719 8.183594l6.96875 18.410156c.71875 1.894531.484375 4.035156-.625 5.71875l-10.769531 16.347656c-2.792969 4.242188.34375 9.9375 5.3125 9.644531l19.144531-1.140625c1.972657-.117187 3.875.773438 5.085938 2.378906zm0 0" fill="#ffd02f"></path><path d="m179.023438 512c-4.082032 0-7.390626-3.308594-7.390626-7.390625 0-30.058594-6.679687-57.558594-19.851562-81.734375-1.953125-3.585938-.628906-8.074219 2.957031-10.027344 3.585938-1.953125 8.074219-.628906 10.027344 2.953125 14.363281 26.375 21.648437 56.253907 21.648437 88.808594 0 4.082031-3.308593 7.390625-7.390624 7.390625zm0 0" fill="#fa0"></path></svg>
            
            <h4 class="mg-b-15 tx-normal">Введите промокод</h4>
                     <input type="text" class="form-control wd-200 d-inline" id="prNum" style="text-transform: uppercase;" placeholder="">
                       <div class="mg-b-10" style="margin-top: 10px;"><button class="btn btn-primary mg-l-5 btn-get-actpromo" onclick="actPromo()" style="margin-top:-4px;padding: 8px 14px;">Активировать</button></div>
                      <span id="error_actpromo" class=" tx-danger " role="alert" style="display:none;"></span>
                     <button id="succes_actpromo" style="padding: 9px 26px; pointer-events: none;display:none" class="btn tx-medium btn-la-mob bg-success-dice tx-white bd-0 btn-sel-d "></button>
                        
                    </div>
            </div>
        </div><!-- card-body -->


    </div>
</div>
</div>

                    <script>
                            function sendMesSupport() {
    if ($("#mesSupport").val() == "") {
        return $("#errorMesSupport").show().html("Введите сообщение");
    }
    $.ajax({
        type: 'POST',
        url: '/action.php',
        beforeSend: function () {
            $("#errorMesSupport").hide();
        },
        data: {
            type: "sendMesSupport",
            sid: Cookies.get('sid'),
            mes: $("#mesSupport").val()
        },
        success: function (data) {
            location.reload();
        }
    });
}
                        </script>

                </div>

<?
require ("components/modal.php");
require ("components/footer.php");
?>
<script>history.pushState(null, null, window.location.pathname.split("?")[0]);</script>


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="backdrop"></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=ce7onwg2gco" name="c-unkp3dj9lhq" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=rxtkk3l3o297" name="c-g99no36k7fyp" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=u5xey0yvcpl3" name="c-md1f08ubo8du" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=czaz8z5ew7lv" name="c-8x7uk878bum6" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>