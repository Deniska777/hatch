<?
require ("components/header.php");
?>
<script>


function bots() {
if(navigator.onLine) {
 $.ajax({
            url: 'bots.php',
            timeout: 10000,
            success: function(data) {
				
				
            },
            error: function() {
            }
        });
		} else {
}
		}
		
		setInterval('bots()',1000);
var online = "1";
	 function historys() {
	     online = window.online
if(online == "1") {
 $.ajax({
            url: 'core.php',
            timeout: 10000,
            success: function(data) {
				var obj = jQuery.parseJSON(data);
                $("#response").prepend(obj.game);
				$('#response').children().slice(15).remove();
				
				 $("#myresponse").prepend(obj.my_game);
				$('#myresponse').children().slice(15).remove();
				$("#oe").html(obj.online);
            },
            error: function() {
            }
        });
		} 
		}
		
		setInterval('historys()',600);
</script>

            <div class="row ">

                <div class="col-sm-6 col-lg-2 mg-t-10">


                    <!--<div class="spinner-border" role="status">-->
                    <!--      <span class="sr-only">Loading...</span>-->
                    <!--    </div>-->


                    <div class="align-items-center justify-content-between mg-b-20 d-none d-sm-flex">
                        <h2 class="tx-uppercase tx-semibold mg-b-0 ch-gm" style="color: #031a61;">Выбор игры</h2>
                    </div>





                    <ul class="list-unstyled media-list mg-b-15 d-none d-sm-block">
                        
                        
                        
                        
                        <li onclick="window.location.href='/dice'" class="media align-items-center mg-t-15 gameinc " id="menudice">
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
						<li class="mg-t-15 align-items-center gameinc media" onclick="window.location.href='/mines'" id="menumines">
							<div class="avatar">
								<span class="avatar-initial bg-dark men-gam rounded" style="box-shadow:0 5px 23px 0 rgba(59,72,99,.25)">
									<svg viewBox="0 0 512 512" width="1em" height="1em" class="iconify tx-22" xmlns="http://www.w3.org/2000/svg" style="-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)" aria-hidden="true" data-icon="ion-md-grid" data-inline="false" focusable="false" preserveAspectRatio="xMidYMid meet" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M409.6 64H102.4C81.3 64 64 81.3 64 102.4v307.2c0 21.1 17.3 38.4 38.4 38.4h307.2c21.1 0 38.4-17.3 38.4-38.4V102.4c0-21.1-17.3-38.4-38.4-38.4zM179.2 409.6h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8z" fill="currentColor"></path></svg>
								</span>
							</div>
							<div class="pd-l-15 media-body">
								<h6 class="mg-b-2"><a class="link-01 tx-18" href="/mines">Mines</a></h6>
							</div>
						</li>
						
						<li onclick="window.location.href='/wheel'" class="media align-items-center mg-t-15 gameinc " id="menuwheel">
							<div class="avatar">
								<span class="avatar-initial rounded bg-dark men-gam" style="box-shadow: 0 5px 23px 0 rgba(59, 72, 99, 0.25);">
								    <svg width="1em" height="1em"  class="iconify tx-22  "><use xlink:href="#icon-wheel"><svg fill="currentColor"   id="icon-wheel" viewBox="0 0 32 32"><path d="M8.752 6.112c1.556-1.144 3.39-1.932 5.381-2.237v-3.763c-3.019 0.351-5.781 1.542-8.047 3.334l2.666 2.666zM3.875 14.133c0.306-1.991 1.093-3.825 2.237-5.381l-2.666-2.666c-1.792 2.267-2.983 5.028-3.334 8.047h3.763zM28.554 6.086l-2.666 2.666c1.145 1.556 1.932 3.39 2.237 5.382h3.763c-0.351-3.020-1.542-5.781-3.334-8.047zM17.867 3.875c1.991 0.306 3.826 1.093 5.382 2.237l2.666-2.666c-2.267-1.792-5.028-2.983-8.047-3.334v3.763zM28.125 17.867c-0.305 1.991-1.093 3.826-2.237 5.382l2.666 2.666c1.792-2.267 2.983-5.028 3.334-8.047h-3.763zM23.249 25.888c-1.556 1.145-3.39 1.932-5.382 2.237v3.763c3.019-0.351 5.781-1.542 8.047-3.334l-2.666-2.666zM6.112 23.249c-1.144-1.556-1.932-3.39-2.237-5.382h-3.763c0.351 3.019 1.542 5.781 3.334 8.047l2.666-2.666zM14.133 28.125c-1.991-0.305-3.825-1.093-5.382-2.237l-2.666 2.666c2.267 1.792 5.028 2.983 8.047 3.334v-3.763h0.001z"></path></svg></use></svg>
								</span>
						     </div>
							<div class="media-body pd-l-15">
								<h6 class="mg-b-2"><a href="/wheel" class="link-01 tx-18">Wheel</a></h6>
							</div>
						</li>
						
						<li onclick="window.location.href='/coin'" class="media align-items-center mg-t-15 gameinc " id="menucoin">
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
                    
                        <div class="col-lg-10 col-xl-10 mg-t-10">
                        <div class="row row-xs mg-b-25">
                                        
                               <? if($bonus != 2 and $sid){?>
                               
                               <div class="col-12">
                                <div class="alert alert-primary alert-dismissible fade show tx-13 absh" role="alert" style="border-radius: 5px;">
                                    Вам доступен денежный бонус, <a href="#firstBonus" data-toggle="modal" class="">получить бесплатно</a>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            </div>
                               <?}?>
                                                        
                            <div class="col-6 col-lg-3">
                                <div class="card card-profile">
                                    <!--<img src="https://cdn.dribbble.com/users/297873/screenshots/6133969/attachments/1315538/not_all_compilers_are_created_equal_web.jpg" class="card-img-top" alt=""> -->
                                    <img src="/1.jpeg" class="card-img-top" alt="" style="height:135px">
                                    <div class="card-body tx-13">
                                        <div>

                                            <h4 class="mg-t-45">Dice</h4>

                                            <a href="/dice" class="btn btn-block btn-white bt-mob">Играть</a>
                                        </div>
                                    </div>
                                </div><!-- card -->
                            </div><!-- col -->
                            <div class="col-6 col-lg-3 ">
                                <div class="card card-profile">
                                    <img src="/2.jpeg" class="card-img-top " alt="" style="height:135px">
                                    <div class="card-body tx-13">
                                        <div>

                                            <h4 class="mg-t-45">Mines</h4>

                                            <a href="/mines" class="btn btn-block btn-white bt-mob">Играть</a>
                                        </div>
                                    </div>
                                </div><!-- card -->
                            </div><!-- col -->
                             <div class="col-6 col-lg-3 mg-t-sm-10">
                                <div class="card card-profile">
                                    <img src="/4.jpeg" class="card-img-top " alt="" style="height:135px">
                                    <div class="card-body tx-13">
                                        <div>

                                            <h4 class="mg-t-45">Coin</h4>

                                            <a href="/coin" class="btn btn-block btn-white bt-mob">Играть</a>
                                        </div>
                                    </div>
                                </div><!-- card -->
                            </div><!-- col -->
                            
                             <div class="col-6 col-lg-3 mg-t-sm-10">
                                <div class="card card-profile">
                                    <img src="/3.jpeg" class="card-img-top " alt="" style="height:135px">
                                    <div class="card-body tx-13 ">
                                        <div>

                                            <h4 class="mg-t-45">Wheel</h4>

                                            <a href="/wheel" class="btn btn-block btn-white bt-mob">Играть</a>
                                        </div>
                                    </div>
                                </div><!-- card -->
                            </div><!-- col -->
                          

                        </div>

                        <div class="card mg-b-10 mg-t-10 hash-mob">
    <div class="card-header pd-t-20 d-sm-flex align-items-start justify-content-between bd-b-0 pd-b-0">
        <div>
            <h6 class="mg-b-5">История</h6>
            <p class="tx-13 tx-color-03 mg-b-0">Online: <span id="oe">0</span></p>
        </div>
        <div class="d-flex mg-t-20 mg-sm-t-0">
            <div class="btn-group flex-fill">
                  <button class="btn btn-white btn-xs bt-table active" onclick="$('.bt-table').removeClass('active'); $(this).addClass('active'); $('#myresponse').hide(); $('#response').show(); ">Все игры</button>
                <button class="btn btn-white btn-xs bt-table" onclick="$('.bt-table').removeClass('active'); $(this).addClass('active');  $('#response').hide(); $('#myresponse').show();">Мои игры</button>
            </div>
        </div>
    </div><!-- card-header -->

    <div class="table-responsive mg-t-20 mg-b-15">
        <table class="table table-dashboard mg-b-0 table-live">
            <thead>
                <tr>
                    
                    <th class="text-center wd-10p">Игра</th>
                    <th class="text-center wd-20p">Логин</th>
                    <th class="text-center wd-25p">Сумма</th>
                    <th class="text-center wd-20p">Коэффициент</th>
                    <th class="text-center wd-25p">Результат</th>
                </tr>
            </thead>
            <style>
                #response tr:hover{
                    cursor:pointer;
                }
            </style>
            <tbody id="response">
				<?
				$sel_game = mysql_query("SELECT * FROM kot_games ORDER BY id DESC LIMIT 20");
				while ($row = mysql_fetch_array($sel_game)){
					$game = $row['game'];
					$g = '';
					if($game == 1){
						$g = '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="  "><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg>';
					}
					if($game == 2){
						$g = '<svg viewBox="0 0 512 512" width="18" height="18" class="iconify tx-22" xmlns="http://www.w3.org/2000/svg" style="-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)" aria-hidden="true" data-icon="ion-md-grid" data-inline="false" focusable="false" preserveAspectRatio="xMidYMid meet" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M409.6 64H102.4C81.3 64 64 81.3 64 102.4v307.2c0 21.1 17.3 38.4 38.4 38.4h307.2c21.1 0 38.4-17.3 38.4-38.4V102.4c0-21.1-17.3-38.4-38.4-38.4zM179.2 409.6h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8z" fill="currentColor"></path></svg>';
					}
					if($game == 3){
						$g = '<svg width="18" height="18" class="iconify tx-22  "><use xlink:href="#icon-wheel"><svg fill="currentColor" id="icon-wheel" viewBox="0 0 32 32"><path d="M8.752 6.112c1.556-1.144 3.39-1.932 5.381-2.237v-3.763c-3.019 0.351-5.781 1.542-8.047 3.334l2.666 2.666zM3.875 14.133c0.306-1.991 1.093-3.825 2.237-5.381l-2.666-2.666c-1.792 2.267-2.983 5.028-3.334 8.047h3.763zM28.554 6.086l-2.666 2.666c1.145 1.556 1.932 3.39 2.237 5.382h3.763c-0.351-3.020-1.542-5.781-3.334-8.047zM17.867 3.875c1.991 0.306 3.826 1.093 5.382 2.237l2.666-2.666c-2.267-1.792-5.028-2.983-8.047-3.334v3.763zM28.125 17.867c-0.305 1.991-1.093 3.826-2.237 5.382l2.666 2.666c1.792-2.267 2.983-5.028 3.334-8.047h-3.763zM23.249 25.888c-1.556 1.145-3.39 1.932-5.382 2.237v3.763c3.019-0.351 5.781-1.542 8.047-3.334l-2.666-2.666zM6.112 23.249c-1.144-1.556-1.932-3.39-2.237-5.382h-3.763c0.351 3.019 1.542 5.781 3.334 8.047l2.666-2.666zM14.133 28.125c-1.991-0.305-3.825-1.093-5.382-2.237l-2.666 2.666c2.267 1.792 5.028 2.983 8.047 3.334v-3.763h0.001z"></path></svg></use></svg>';
					}
					if($game == 4){
						$g = '<svg width="18" height="18" class="iconify tx-22  "><use xlink:href="#icon-coinflip"><svg fill="currentColor" id="icon-coinflip" viewBox="0 0 32 32"><path d="M16 0c8.838 0 16 7.164 16 16s-7.162 16-16 16c-8.836 0-16-7.164-16-16s7.164-16 16-16zM20.697 11.539c-1.35-2.626-3.012-4.073-4.68-4.073s-3.33 1.446-4.681 4.073c-1.081 2.103-1.808 4.718-1.808 6.507 0 3.577 2.911 6.487 6.488 6.487s6.487-2.911 6.487-6.488c0-1.788-0.726-4.403-1.808-6.507z"></path></svg></use></svg>';
					}
					$log = $row['login'];
					$bet = $row['sum'];
					$win = $row['win_summa'];
					$coef = $win / $bet;
					$type = $row['type'];
					if ($type == 'win'){
						$type = 'tx-success';
					}else{
						$type = '';
					}
					
					echo '
					<tr>
                    <td class="text-center">'.$g.'</td>
                    <td class="text-center">'.$log.'</td>
                    <td class="text-center ">'.$bet.'</td>
                    <td class="text-center">x'.$coef.'</td>
                    <td class="text-center  tx-semibold '.$type.'">'.$win.'</td>
                </tr>
					';
				}
				
				?>
                
               
                
            </tbody>
        
            <tbody id="myresponse" style="display:none;border-top: 0;">

                	<?
				$sel_game = mysql_query("SELECT * FROM kot_games WHERE user_id='$user_id' ORDER BY id DESC LIMIT 20");
				while ($row = mysql_fetch_array($sel_game)){
					$game = $row['game'];
					$g = '';
					if($game == 1){
						$g = '<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="  "><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg>';
					}
					if($game == 2){
						$g = '<svg viewBox="0 0 512 512" width="18" height="18" class="iconify tx-22" xmlns="http://www.w3.org/2000/svg" style="-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)" aria-hidden="true" data-icon="ion-md-grid" data-inline="false" focusable="false" preserveAspectRatio="xMidYMid meet" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M409.6 64H102.4C81.3 64 64 81.3 64 102.4v307.2c0 21.1 17.3 38.4 38.4 38.4h307.2c21.1 0 38.4-17.3 38.4-38.4V102.4c0-21.1-17.3-38.4-38.4-38.4zM179.2 409.6h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8z" fill="currentColor"></path></svg>';
					}
					if($game == 3){
						$g = '<svg width="18" height="18" class="iconify tx-22  "><use xlink:href="#icon-wheel"><svg fill="currentColor" id="icon-wheel" viewBox="0 0 32 32"><path d="M8.752 6.112c1.556-1.144 3.39-1.932 5.381-2.237v-3.763c-3.019 0.351-5.781 1.542-8.047 3.334l2.666 2.666zM3.875 14.133c0.306-1.991 1.093-3.825 2.237-5.381l-2.666-2.666c-1.792 2.267-2.983 5.028-3.334 8.047h3.763zM28.554 6.086l-2.666 2.666c1.145 1.556 1.932 3.39 2.237 5.382h3.763c-0.351-3.020-1.542-5.781-3.334-8.047zM17.867 3.875c1.991 0.306 3.826 1.093 5.382 2.237l2.666-2.666c-2.267-1.792-5.028-2.983-8.047-3.334v3.763zM28.125 17.867c-0.305 1.991-1.093 3.826-2.237 5.382l2.666 2.666c1.792-2.267 2.983-5.028 3.334-8.047h-3.763zM23.249 25.888c-1.556 1.145-3.39 1.932-5.382 2.237v3.763c3.019-0.351 5.781-1.542 8.047-3.334l-2.666-2.666zM6.112 23.249c-1.144-1.556-1.932-3.39-2.237-5.382h-3.763c0.351 3.019 1.542 5.781 3.334 8.047l2.666-2.666zM14.133 28.125c-1.991-0.305-3.825-1.093-5.382-2.237l-2.666 2.666c2.267 1.792 5.028 2.983 8.047 3.334v-3.763h0.001z"></path></svg></use></svg>';
					}
					if($game == 4){
						$g = '<svg width="18" height="18" class="iconify tx-22  "><use xlink:href="#icon-coinflip"><svg fill="currentColor" id="icon-coinflip" viewBox="0 0 32 32"><path d="M16 0c8.838 0 16 7.164 16 16s-7.162 16-16 16c-8.836 0-16-7.164-16-16s7.164-16 16-16zM20.697 11.539c-1.35-2.626-3.012-4.073-4.68-4.073s-3.33 1.446-4.681 4.073c-1.081 2.103-1.808 4.718-1.808 6.507 0 3.577 2.911 6.487 6.488 6.487s6.487-2.911 6.487-6.488c0-1.788-0.726-4.403-1.808-6.507z"></path></svg></use></svg>';
					}
					$log = $row['login'];
					$bet = $row['sum'];
					$win = $row['win_summa'];
					$coef = $win / $bet;
					$type = $row['type'];
					if ($type == 'win'){
						$type = 'tx-success';
					}else{
						$type = '';
					}
					
					echo '
					<tr>
                    <td class="text-center">'.$g.'</td>
                    <td class="text-center">'.$log.'</td>
                    <td class="text-center ">'.$bet.'</td>
                    <td class="text-center">x'.$coef.'</td>
                    <td class="text-center  tx-semibold '.$type.'">'.$win.'</td>
                </tr>
					';
				}
				
				?>
               
                
            </tbody>
        
        </table>
    </div><!-- table-responsive -->
</div><!-- card -->

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


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="backdrop"></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=t0l4mk8srjk1" name="c-1m1i84a7sfb0" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=j3m5luo2lm13" name="c-m1yvhjw86w55" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>