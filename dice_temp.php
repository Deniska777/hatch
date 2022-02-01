
<div class="col-lg-10 col-xl-10 mg-t-10">
    <div class="card">
        <div class="card-header pd-y-20 d-md-flex align-items-center justify-content-between d-none d-sm-block">
            <h4 class="mg-b-0">Dice</h4>

        </div>
        <div class="card-body " style="padding-bottom: 30px;">
            <div class="row ">
                <div class="col-xs-12 col-lg-6 mg-b-20">
                    <div class="pd-dc">
                        <h5 class="tx-normal tx-rubik tx-dark tx-60 tx-spacing--1 mg-b-0 d-flex justify-content-center d-md-none" id="diceResultMobile">1.25</h5>
                        <p class="tx-13  tx-semibold tx-spacing-0 tx-color-03 d-flex justify-content-center tx-thin d-md-none">Возможный выигрыш</p>
                        <div class="row row-sm mg-t-10 ">
                            <div class="col-6 col-xs-6 col-md-6">
                                <h6 class="mg-b-15 h-mob-d">Cумма:</h6>
                                <div class="input-group tx-light tx-24 dice-input">
                                    <input value="1" id="diceGameAmount" autocomplete="off" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;" onkeyup="validateDiceGameAmount(this);updateResultSize()" class="tx-20 tx-center form-control tx-normal tx-rubik" placeholder="Сумма">
                                </div>
                                <div style="margin-top: -1px; " class="btn-group tx-rubik d-flex justify-content-center">
                                    <button onclick="var max = $('#userBalance').attr('myBalance');$('#diceGameAmount').val(Math.max(max,1));updateResultSize()" style="border-top-left-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Max</button>
                                    <button onclick="$('#diceGameAmount').val(1);updateResultSize()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Min</button>
                                    <button onclick="var x = ($('#diceGameAmount').val()*2);$('#diceGameAmount').val(parseFloat(x.toFixed(2)));updateResultSize()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">x2</button>
                                    <button onclick="$('#diceGameAmount').val(Math.max(($('#diceGameAmount').val()/2).toFixed(2), 1));updateResultSize()" style="border-top-right-radius: 0; padding: 4px 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">/2</button>
                                </div>


                            </div>
                            <div class="col-6 col-xs-6  col-md-6">
                                <h6 class="mg-b-15 h-mob-d">Шанс:</h6>
                                <div class="input-group tx-thin tx-24 dice-input">
                                    <input value="80" id="diceGamePercent" autocomplete="off" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;" onkeyup="validateDiceGamePercent(this);updateResultSize()" class="tx-20 tx-center form-control tx-normal tx-rubik" placeholder="Шанс">
                                </div>
                                <div style="margin-top: -1px; " class="btn-group tx-rubik d-flex justify-content-center">
                                    <button onclick="$('#diceGamePercent').val(95);updateResultSize()" style="border-top-left-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Max</button>
                                    <button onclick="$('#diceGamePercent').val(1);updateResultSize()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Min</button>
                                    <button onclick="$('#diceGamePercent').val(Math.min(($('#diceGamePercent').val()*2).toFixed(2), 95));updateResultSize()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines ">x2</button>
                                    <button onclick="$('#diceGamePercent').val(Math.max(($('#diceGamePercent').val()/2).toFixed(2).replace(/.00/g, ''), 1));updateResultSize()" style="border-top-right-radius: 0; padding: 4px 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines ">/2</button>
                                </div>


                            </div>
                        </div>
                        <div class="divider-text hash-mob mg-t-20">Hash игры</div>
                        <div class="col-md-12  tx-xs-center tx-color-03 tx-thin d-none d-sm-block hash-mob" id="hashBet">
                            64e5fc4c37f6f4832bb67c485197fc27f907925091fe9b06f8b02576fb6bc697b3d5f520f5054e0b6f30b6605b331fbb5bc466ac27a3e8417031a410ece6b22a                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="col-lg-12 but-dice">
                        <h4 class="tx-normal tx-rubik tx-dark tx-60 tx-spacing--1 mg-b-0 justify-content-center d-none d-sm-flex" id="diceResult">1.25</h4>
                        <p class="tx-13  tx-semibold tx-spacing-0 tx-color-03 justify-content-center tx-thin d-none d-sm-flex" style="pointer-events: none">Возможный выигрыш</p>
                        <div class="row row-sm">
                            <div class="form-group col-6 col-md-6">
                                <p class="mg-b-0 tx-color-03 tx-thin d-flex justify-content-center mb-2 h-mob-d" style="pointer-events: none">0 - <span id="minButton" class="pd-l-3">799999</span></p>
                                <button onclick="betMin()" id="buttonMin" style="padding: 11px;" class="btn btn-secondary btn-block tx-thin btn-la-mob btn-sel-d">Меньше</button>
                            </div>
                            <div class="form-group col-6 col-md-6 ">
                                <p class="mg-b-0 tx-color-03 tx-thin d-flex justify-content-center mb-2 h-mob-d" style="pointer-events: none"><span id="maxButton" class="pd-r-3">200000</span> - 999999</p>
                                <button onclick="betMax()" id="buttonMax" style="padding: 11px;" class="btn btn-secondary btn-block tx-thin btn-la-mob btn-sel-d">Больше</button>
                            </div>
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