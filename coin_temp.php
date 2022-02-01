
<div class="col-lg-10 col-xl-10 mg-t-10">
    <div class="card">
        <div class="card-header pd-y-20 d-md-flex align-items-center justify-content-between d-none d-sm-block">
            <h4 class="mg-b-0">Coinflip</h4>

        </div>
        
        <div class="card-body " style="padding-bottom: 30px;">
            <div class="row ">
                <div class="col-xs-12 col-lg-6 mg-b-20">
                    <div class="pd-dc">
                        <div id="coin" class="">
  <center>
<div class="side-a"><img style="margin-top:25px;" src="https://keno-g.design/img/head.svg"></div>
<div class="side-b"><img style="margin-top:25px;" src="https://keno-g.design/img/tail.svg"></div>  
</center>  
                                        </div>
                        </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="col-lg-12 but-dice">
                        <div class="right-side">

                            <div class="row row-sm">
                                <div class="col-12 col-xs-12 col-md-12">
<h6 class="mg-b-15 h-mob-d">Cумма:</h6>
<div class="input-group tx-light tx-24 dice-input">
<input value="1" id="betSizeCoin" autocomplete="off" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;" onkeyup="validateDiceGameAmount(this);updateResultSize()" class="tx-20 tx-center form-control tx-normal tx-rubik" placeholder="Сумма">
</div>
<div style="margin-top: -1px; " class="btn-group tx-rubik d-flex justify-content-center">
<button onclick="var max = $('#userBalance').attr('myBalance');$('#betSizeCoin').val(Math.max(max,1));updateResultSize()" style="border-top-left-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Max</button>
<button onclick="$('#betSizeCoin').val(1);updateResultSize()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Min</button>
<button onclick="var x = ($('#betSizeCoin').val()*2);$('#betSizeCoin').val(parseFloat(x.toFixed(2)));updateResultSize()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">x2</button>
<button onclick="$('#betSizeCoin').val(Math.max(($('#betSizeCoin').val()/2).toFixed(2), 1));updateResultSize()" style="border-top-right-radius: 0; padding: 4px 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">/2</button>
</div>
</div>
                            </div>
                         <br>
                         
                         <div class="d-flex justify-content-center" style="position:relative;top:-10px;margin-left:auto;margin-right:auto;">
      <div class="coeff-item"><span class="coeff-text"><span id="caef">1.00</span>x</span><br><span class="coeff-text-x">Коэффициент</span></div>
      <div class="coeff-item"><span class="coeff-text"><span id="nextcaef">1.98</span>x</span><br><span class="coeff-text-x">След. коэфф</span></div>
  </div>
  
  
                            <div style="display:none;"id="coinButton" class="row row-sm" >
<div class="coinflipButtons form-group col-6 col-md-6">
<button onclick="startGameCoinflip('1');" id="buttonMin" style="padding: 11px;" class="hen dice-game-box-percent-btn btn btn-secondary btn-block tx-thin btn-la-mob btn-sel-d">Курица</button>
</div>
<div class="coinflipButtons form-group col-6 col-md-6">
<button onclick="startGameCoinflip('2');" id="buttonMax" style="padding: 11px;" class="egg dice-game-box-percent-btn btn btn-secondary btn-block tx-thin btn-la-mob btn-sel-d">Яйцо</button>
</div>
</div>

 <div  class="row row-sm" >
<div class="coinflipButtons form-group col-12 col-md-12">
<button onclick="startcoin();" id="betCoin" style="padding: 11px;" class="dice-game-box-percent-btn btn btn-secondary btn-block tx-thin btn-la-mob btn-sel-d"><?php if($sid) { ?>Сделать ставку <?php } else {?>Авторизуйтесь! <?php } ?></button>
</div>
<div class="coinflipButtons form-group col-12 col-md-12">
<button onclick="finishcoin();" id="finishCoin" style="position:relative;top:-20px;display:none;padding: 11px;" class="dice-game-box-percent-btn btn btn-secondary btn-block tx-thin btn-la-mob btn-sel-d">Забрать</button>
</div>
                    
</div>
<center><div class="divider-text hash-mob mg-t-20">Hash игры</div><div class="col-md-12  tx-xs-center tx-color-03 tx-thin d-none d-sm-block hash-mob" id="hashBetCoin">
                            64e5fc4c37f6f4832bb67c485197fc27f907925091fe9b06f8b02576fb6bc697b3d5f520f5054e0b6f30b6605b331fbb5bc466ac27a3e8417031a410ece6b22a                        </div></center>
<style>
    #coin div {
    position: absolute;
  width: 100%;
  height: 100%;
  -webkit-border-radius: 50%;
     -moz-border-radius: 50%;
          border-radius: 50%;
  -webkit-box-shadow: inset 0 0 45px rgba(255,255,255,.3), 0 12px 20px -10px rgba(0,0,0,.4);
     -moz-box-shadow: inset 0 0 45px rgba(255,255,255,.3), 0 12px 20px -10px rgba(0,0,0,.4);
          box-shadow: inset 0 0 45px rgba(255,255,255,.3), 0 12px 20px -10px rgba(0,0,0,.4);
           -webkit-backface-visibility: hidden;
}
#coin {
  position: relative;
  margin: 0 auto;
  width: 200px;
  height: 200px;
  cursor: pointer;
  transition: -webkit-transform 1s ease-in;
  -webkit-transform-style: preserve-3d;

}

.side-a {
  
  z-index: 100;
}
.side-b {
  -webkit-transform: rotateY(-180deg);

}

#coin.heads {
  -webkit-animation: flipHeads 5s ease-out forwards;
  -moz-animation: flipHeads 5s ease-out forwards;
    -o-animation: flipHeads 5s ease-out forwards;
       animation: flipHeads 5s ease-out forwards;
}
#coin.tails {
  -webkit-animation: flipTails 5s ease-out forwards;
  -moz-animation: flipTails 5s ease-out forwards;
    -o-animation: flipTails 5s ease-out forwards;
       animation: flipTails 5s ease-out forwards;
}

.side-a {
  z-index: 100;
}
.side-b {
  -webkit-transform: rotateY(-180deg);

}
@-webkit-keyframes flipHeads {
  from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
  to { -webkit-transform: rotateY(1800deg); -moz-transform: rotateY(1800deg); transform: rotateY(1800deg); }
}
@-webkit-keyframes flipTails {
  from { -webkit-transform: rotateY(0); -moz-transform: rotateY(0); transform: rotateY(0); }
  to { -webkit-transform: rotateY(1980deg); -moz-transform: rotateY(1980deg); transform: rotateY(1980deg); }
}
</style>
<style>
    .coeff-item {
	margin:5px;
	width:35%;
	height:50px;
	border: 0.65px solid gray;
	border-radius:3px;
	display:inline-block;
	text-align:center;
	color:gray;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
    filter: invert(1);
}
.coeff-text {
	padding:20px;
	box-sizing: border-box;
}
.coeff-text-x {
	margin-top:5px;
	font-weight: 300;
	font-size:11px;
}
</style>
<script>
function toastr(type, mess){
    
}
    checkcoin();
    
    
    function finishcoin(){
       
$.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											
										
										},	
                                        data: {
                                        type: "finishcoin",
                                                                             
                                                                                  
                                                },
                                        success: function(data) {
                                             	var obj = jQuery.parseJSON(data);
                                          
                                            if (obj.success == "success") {
                                            updateBalance(parseInt($("#userBalance").html()), obj.new_balance);
				 	updateBalanceMobile(parseInt($("#userBalanceMobile").html()), obj.new_balance);
			$('#coinButton').hide();
			$('#betCoin').show();
			 $('#finishCoin').hide();     
	$('#caef').html(1.00);				
	$('#nextcaef').html(1.98);                                            }
                                        }
                                    });
        
    }
    function startGameCoinflip(typegame){
        window.online = "2";
$('.coinflipButtons > button').prop('disabled', true);
$('#coin').removeClass('tails');
$('#coin').removeClass('heads');
$('#coin').removeClass('rebro');



$.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {


                    },
                                                                                data: {
                                                                                    type: "coinflip",
                                                                                    lay: typegame,
                                                                                   

                                                                                },
                                        success: function(data) {
                                            	var obj = jQuery.parseJSON(data);
                                           if(obj.success == "fatal") {
                $('.coinflipButtons > button').prop('disabled', false);

                                             
      return false;
                                           }
                                            if (obj.success == "success") {

$('#hashBetCoin').html(obj.hash);
                                                 if(obj.flipResult == 1){
                                                                                    $('#coin').addClass('heads');
                                                                                    }
                                                                                    if ( obj.flipResult == 2 ) {
                                                                                    $('#coin').addClass('tails');
                                                                                    }
                                                                                      if ( obj.flipResult == 30 ) {
                                                                                    $('#coin').addClass('rebro');
                                                                                    }
                                                                                    setTimeout(function(){
                                                                                        
                                                                                        
                                                                                        	$('#caef').html(obj.caef1.toFixed(2));				
                                                                    	$('#nextcaef').html(obj.nextcaef.toFixed(2));  
//toastr["success"](obj.message);


}, 5000);
 
  setTimeout(function(){
   $('.coinflipButtons > button').prop('disabled', false);
 window.online = "1";
                                                                              }, 5500);

                                            }else{


         if(obj.flipResult == 1){
                                                                                    $('#coin').addClass('heads');
                                                                                    }
                                                                                    if ( obj.flipResult == 2 ) {
                                                                                    $('#coin').addClass('tails');
                                                                                    }
                                                                                      if ( obj.flipResult == 30 ) {
                                                                                    $('#coin').addClass('rebro');
                                                                                    }
                                                                                    setTimeout(function(){
//toastr["error"](obj.message);
     
                                                                                        	
                                                                                        	
			  $('#finishCoin').hide(); 
                                                                                        	$('#caef').html('1.00');				
                                                                    	$('#nextcaef').html('1.98');  
                                                                    	$('#coinButton').hide();
			$('#betCoin').show();
}, 5000);


                                                                                    setTimeout(function(){
$('.coinflipButtons > button').prop('disabled', false);
 window.online = "1";
                                                                             }, 5500);
                                      
                                      

                      } 
                      
                      
                      
                                        }
                                    });
    }
    
    
    function checkcoin(){
$.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											
										
										},	
                                        data: {
                                        type: "checkcoin",
                                                                             
                                                                                  
                                                },
                                        success: function(data) {
                                             	var obj = jQuery.parseJSON(data);
                                          
                                            if (obj.success == "success") {

			$('#coinButton').show();
			$('#betCoin').hide();
			 $('#finishCoin').show();     
	$('#caef').html(obj.caef);				
	$('#nextcaef').html(obj.nextcaef);                                            }
                                        }
                                    });
        
    }
        function startcoin() {
            $('#betCoin').hide();		
$.ajax({
                                                                                type: 'POST',
                                                                                url: '../action.php',
beforeSend: function() {
											
										
										},	
                                                                                data: {
                                                                                    type: "startcoin",
                                                                                    betsize: $('#betSizeCoin').val(),
                                                                                   
                                                                                    
                                                                                },
                                        success: function(data) {
                                             	var obj = jQuery.parseJSON(data);
                                           if(obj.success == "fatal") {
                $('#betCoin').html('Сделать ставку ');          
                 $('#betCoin').show();          
                                             
			
		//	toastr["error"](obj.error)
			return false;
                                           }
                                            if (obj.success == "success") {

			$('#coinButton').show();
			  $('#finishCoin').show();        
				setTimeout(function() {
					
				 	updateBalance(parseInt($("#userBalance").html()), obj.new_balance);
				 	updateBalanceMobile(parseInt($("#userBalanceMobile").html()), obj.new_balance);
    
				$('#betCoin').html('Сделать ставку');                                                       	
                $('#betCoin').prop('disabled', false);
				}, 200);
                	
                                            }
                                        }
                                    });
                                    
                                }
        </script>

                        </div>
                    </div>
                    <div class="form-group col-md-12 but-dice ht-30">
<center><div class="spinner-border" id="betLoad" role="status" style="color: #7a86a1;
    border: .1em solid currentColor;
    border-right-color: transparent;display:none">
                          <span class="sr-only">Loading...</span>
                        </div></center>
                        <button id="succes_bet" style="  padding: 11px;pointer-events: none;margin-top: 0px;display:none;" class="btn btn-block tx-medium btn-la-mob bg-success-dice tx-white bd-0 btn-sel-d "></button>
                        <button id="error_bet" style="padding: 11px; pointer-events:none; display:none; margin-top:0" class="btn btn-block tx-medium btn-la-mob bg-danger-dice tx-white bd-0 btn-sel-d "></button>
                        <span id="checkBet" class="align-items-center link-03 justify-content-center mg-t-5" href="#checkModal" data-toggle="modal" style="display:none; cursor:pointer">Проверить игру</span>
                 
                    </div>
                </div>
            </div><!-- card-body -->
        </div><!-- card-body -->
    </div><!-- card -->
<div class="card mg-b-10 mg-t-10 hash-mob">
    <div class="card-header pd-t-20 d-sm-flex align-items-start justify-content-between bd-b-0 pd-b-0">
        <div>
            <h6 class="mg-b-5">История</h6>
            <p class="tx-13 tx-color-03 mg-b-0"></p>
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

                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
               
                
            </tbody>
        
            <tbody id="myresponse" style="display:none;border-top: 0;">

                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
                <tr style="color: transparent !important;">
                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td>
                    <td class="text-center">Login123</td>
                    <td class="text-center">1,00</td>
                    <td class="text-center">1.22</td>
                    <td class="text-center tx-semibold">1,55</td>
                </tr>
               
                
            </tbody>
        
        </table>
    </div><!-- table-responsive -->
</div><!-- card -->

</div>