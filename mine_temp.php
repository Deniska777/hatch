<div class="col-xs-12 col-lg-10 col-xl-10 mg-t-10 ">
            <div class="card pd-b-15">
                <div class="card-header pd-y-20 d-md-flex align-items-center justify-content-between d-none d-sm-block">
                    <h4 class="mg-b-0">Mines</h4>
                </div>

                <div class="row row-xs pd-20 mob-min">
                    <div class="col-xs-12 col-lg-5">
                        <div class="tab-content ">
                            <div class="tab-pane fade show active " id="handMines" role="tabpanel" aria-labelledby="home-tab5">

                                <div class=" d-none d-sm-block" id="mines">
                                    <h6 class="mg-b-15 ">Количество бомб:</h6>
                                    <!--<span class="irs irs--round js-irs-0 irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: visible;">2</span><span class="irs-max" style="visibility: visible;">24</span><span class="irs-from" style="visibility: hidden;">0</span><span class="irs-to" style="visibility: hidden;">0</span><span class="irs-single" style="left: 5.08706%;">3</span></span><span class="irs-grid" style="width: 93.5351%; left: 3.13246%;"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%; margin-left: -1.78249%;">2</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: visible; margin-left: -1.78249%;">8</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: visible; margin-left: -2.75686%;">13</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: visible; margin-left: -2.75686%;">19</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%; margin-left: -2.75686%;">24</span></span><span class="irs-bar irs-bar--single" style="left: 0px; width: 7.48406%;"></span><span class="irs-shadow shadow-single" style="display: none;"></span><span class="irs-handle single" style="left: 4.25159%;"><i></i><i></i><i></i></span></span>-->
                                    
                                    <input class="js-range-slider mg-t-10 col-xs-6 irs-hidden-input" tabindex="-1"type="hidden" readonly="">
                                    <h6 class="mg-t-20">Размер игры:</h6>
                                    <div class=" d-flex flex-row justify-content-center mg-b-15 mg-t-15 bg-gray-200 rounded-5 ">

                                        <div class="pd-10 bg-gray-200 " style="border-top-left-radius:5px; border-bottom-left-radius:5px">
                                            <button onclick="$('#minesAmount').val($('#userBalance').attr('myBalance'));getMinesRate()" class="btn btn-secondary btn-icon tx-11 mg-t-3 ">MAX</button>
                                            <button onclick="$('#minesAmount').val('1');getMinesRate()" type="button" class="btn btn-secondary btn-icon tx-11 mg-t-3 ">MIN</button>
                                            

                                        </div>
                                        <div class="pd-10 bg-gray-200"> <input value="1" id="minesAmount" onkeyup="getMinesRate()" style="max-width:133px" class="form-control justify-content-center align-self-center text-center " autocomplete="off" placeholder="Сумма"></div>
                                        <div class="pd-10 bg-gray-200" style="border-top-right-radius:5px; border-bottom-right-radius:5px">
                                            <button onclick="var x = ($('#minesAmount').val()*2);$('#minesAmount').val(parseFloat(x.toFixed(2)));getMinesRate()" ;="" type="button" class="btn btn-secondary btn-icon tx-11 mg-t-3 ">x2</button>
                                            <button onclick="$('#minesAmount').val(Math.max(($('#minesAmount').val()/2).toFixed(2), 1));getMinesRate()" type="button" class="btn btn-secondary btn-icon tx-11 mg-t-3 ">/2</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-none d-sm-block">
                                    <a id="buttonStartMines" href="#" class="btn btn-secondary btn-block pd-t-10 pd-b-10 tx-15 " style="" onclick="createGameMines()">Начать игру</a>
                                    <a id="buttonFinishMines" href="#" class="btn btn-secondary btn-block mg-t-20 pd-t-10 pd-b-10 tx-15 " style="display:none " onclick="finishMines()">
                                                                                                                    </a>
                                </div>
                                <button id="errorMines" style="padding: 11px; pointer-events: none; margin-top: 15px; display:none" class="btn btn-block tx-medium btn-la-mob bg-danger-dice tx-white bd-0 btn-sel-d mg-b-15 "></button>
                               
                            </div>
                            <div id="minesHashBlock" style="display:none">
                                <div class="divider-text hash-mob mg-t-25">Hash игры</div>
                                <div class="tx-color-03 tx-thin text-center hash-mob" id="minesHash"></div>
                            </div>
                            <div id="checkMines" style="display:none!important">
                            <div class="justify-content-center mg-t-20 d-none d-sm-flex">
                                <button id="checkBet" class="btn btn-outline-secondary justify-content-center" href="#checkModal" data-toggle="modal">Проверить игру</button>
                            </div>
                        </div>

                        </div>





                    </div>

                    <div class="col-xs-12 col-lg-7 ">
                        <style>
                        </style>
                        <div id="mbl" class="disabled">
                            <div class="d-flex justify-content-center ">
                                <div class="wd-65 ht-65 bg-gray-100 bd bd-1  rounded-lg mines-sq text-center" onclick="chGameMines($(this),1)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),2)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),3)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),4)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),5)"></div>                            </div>
                            <div class="d-flex justify-content-center mg-t-10">
                                <div class="wd-65 ht-65 bg-gray-100 bd bd-1  rounded-lg mines-sq text-center" onclick="chGameMines($(this),6)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),7)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),8)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),9)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),10)"></div>                            </div>
                            <div class="d-flex justify-content-center mg-t-10">
                                <div class="wd-65 ht-65 bg-gray-100 bd bd-1  rounded-lg mines-sq text-center" onclick="chGameMines($(this),11)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),12)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),13)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),14)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),15)"></div>                            </div>
                            <div class="d-flex justify-content-center mg-t-10">
                                <div class="wd-65 ht-65 bg-gray-100 bd bd-1  rounded-lg mines-sq text-center" onclick="chGameMines($(this),16)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),17)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),18)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),19)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),20)"></div>                            </div>
                            <div class="d-flex justify-content-center mg-t-10">
                                <div class="wd-65 ht-65 bg-gray-100 bd bd-1  rounded-lg mines-sq text-center" onclick="chGameMines($(this),21)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),22)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),23)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),24)"></div><div class="wd-65 ht-65 bg-gray-100 bd bd-1 mg-l-10 rounded-lg mines-sq text-center" onclick="chGameMines($(this),25)"></div>                            </div>
                        </div>


                        <div class="d-flex justify-content-center ">
                            <ul class="steps mg-t-20 ">

                                <svg href="#carousel" data-slide="prev" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="carousel-control-prev tx-gray-400 css-i6dzq1 mg-t-20 ">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                                <div id="carousel" class="carousel slide pointer-event" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner pd-t-4 pd-b-2" id="minesRate">
                                        <div class="1 carousel-item active justify-content-center"><li class="1 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 1</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">1,14</span><span class="step-desc">x1.14</span></div></a></li><li class="2 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 2</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">1,30</span><span class="step-desc">x1.3</span></div></a></li></div><div class="3 carousel-item justify-content-center"><li class="3 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 3</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">1,49</span><span class="step-desc">x1.49</span></div></a></li><li class="4 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 4</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">1,73</span><span class="step-desc">x1.73</span></div></a></li></div><div class="5 carousel-item justify-content-center"><li class="5 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 5</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">2,02</span><span class="step-desc">x2.02</span></div></a></li><li class="6 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 6</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">2,37</span><span class="step-desc">x2.37</span></div></a></li></div><div class="7 carousel-item justify-content-center"><li class="7 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 7</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">2,82</span><span class="step-desc">x2.82</span></div></a></li><li class="8 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 8</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">3,38</span><span class="step-desc">x3.38</span></div></a></li></div><div class="9 carousel-item justify-content-center"><li class="9 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 9</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">4,11</span><span class="step-desc">x4.11</span></div></a></li><li class="10 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 10</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">5,05</span><span class="step-desc">x5.05</span></div></a></li></div><div class="11 carousel-item justify-content-center"><li class="11 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 11</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">6,32</span><span class="step-desc">x6.32</span></div></a></li><li class="12 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 12</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">8,04</span><span class="step-desc">x8.04</span></div></a></li></div><div class="13 carousel-item justify-content-center"><li class="13 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 13</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">10,45</span><span class="step-desc">x10.45</span></div></a></li><li class="14 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 14</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">13,94</span><span class="step-desc">x13.94</span></div></a></li></div><div class="15 carousel-item justify-content-center"><li class="15 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 15</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">19,17</span><span class="step-desc">x19.17</span></div></a></li><li class="16 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 16</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">27,38</span><span class="step-desc">x27.38</span></div></a></li></div><div class="17 carousel-item justify-content-center"><li class="17 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 17</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">41,07</span><span class="step-desc">x41.07</span></div></a></li><li class="18 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 18</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">65,71</span><span class="step-desc">x65.71</span></div></a></li></div><div class="19 carousel-item justify-content-center"><li class="19 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 19</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">115</span><span class="step-desc">x115</span></div></a></li><li class="20 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 20</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">230</span><span class="step-desc">x230</span></div></a></li></div><div class="21 carousel-item justify-content-center"><li class="21 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 21</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">575</span><span class="step-desc">x575</span></div></a></li><li class="22 step-item bd bd-1 pd-10 rounded-5 "><span class="st-bl" style="position:absolute; margin-top: -18px; margin-left: 4px; font-size: 10px; background:#fff; padding:2px 7px;">Шаг 22</span><a class="step-link"><div style="margin-left:0;width:110px;align-items: center;"><span class="step-title" style="">2 300</span><span class="step-desc">x2300</span></div></a></li></div>                                    </div>
                                </div>
                                <svg href="#carousel" data-slide="next" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="carousel-control-next tx-gray-400 css-i6dzq1 mg-t-20">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>

                                
                            </ul>



                        </div>
                        



                        <div class="col-12  d-block d-sm-none" style="padding:0">
                            <div class="row row-xs mg-b-10" id="minesMobile">
                                <div class="col-6">
                                    <span class="tx-11 ">Бомбы</span>
                                    <select class="custom-select text-center tx-20  mg-t-5" id="countBombMobile" onchange="getMinesRateMobile()" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0;">
                                        <option value="2">2</option>
                                        <option value="3" selected="">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                    </select>
                                    <div style="margin-top: -1px; " class="btn-group tx-rubik d-flex justify-content-center ">
                                        <button onclick="$('#countBombMobile').val($(this).html());getMinesRateMobile()" style="border-top-left-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white tx-13 mb-mines">2</button>
                                        <button onclick="$('#countBombMobile').val($(this).html());getMinesRateMobile()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white tx-13 mb-mines">5</button>
                                        <button onclick="$('#countBombMobile').val($(this).html());getMinesRateMobile()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white tx-13 mb-mines">14</button>
                                        <button onclick="$('#countBombMobile').val($(this).html());getMinesRateMobile()" style="border-top-right-radius: 0; padding: 4px 0;" class="tx-gray-600 btn btn-xs btn-white tx-13 mb-mines">21</button>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <span class="tx-11 ">Размер игры</span>

                                    <div class="input-group mg-t-5">
                                        <input value=" 1" id="minesAmountMobile" onkeyup="getMinesRateMobile()" class="form-control tx-20 justify-content-center align-self-center text-center " autocomplete="off" placeholder="Сумма" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0">
                                    </div>
                                    <div style="margin-top: -1px; " class="btn-group tx-rubik d-flex justify-content-center ">
                                        <button onclick="$('#minesAmountMobile').val($('#userBalance').attr('myBalance'));$('#minesAmount').val($('#userBalance').attr('myBalance'));getMinesRateMobile();" style="border-top-left-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Max</button>
                                        <button onclick="$('#minesAmountMobile').val('1');$('#minesAmount').val('1');getMinesRateMobile()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">Min</button>
                                        <button onclick="var x = ($('#minesAmountMobile').val()*2);$('#minesAmountMobile').val(parseFloat(x.toFixed(2)));$('#minesAmount').val(parseFloat(x.toFixed(2)));getMinesRateMobile()" style="border-top-right-radius: 0; padding: 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">x2</button>
                                        <button onclick="$('#minesAmountMobile').val(Math.max(($('#minesAmountMobile').val()/2).toFixed(2), 1));$('#minesAmount').val(Math.max(($('#minesAmountMobile').val()/2).toFixed(2), 1));getMinesRateMobile()" style="border-top-right-radius: 0; padding: 4px 0;" class="tx-gray-600 btn btn-xs btn-white   tx-13 mb-mines">/2</button>
                                    </div>


                                </div>
                            </div>
                            <a id="buttonStartMinesMobile" href="#" class="btn btn-secondary btn-block  tx-12 " style="" onclick="createGameMinesMobile()">Начать игру</a>
                            <a id="buttonFinishMinesMobile" href="#" class="btn btn-secondary btn-block   tx-12 " style="display:none " onclick="finishMines()">
                                                                                            </a>
                        </div>
                    </div>

                </div>
            </div>

            


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
            <tbody id="response"><tr href="#checkModal" data-toggle="modal" gameid="788754124"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">Salamu959...</td><td class="text-center">1,00</td><td class="text-center">x8.59</td><td class="text-center tx-semibold">0</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761368"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">Isae...</td><td class="text-center">2,00</td><td class="text-center">x1.75</td><td class="text-center tx-semibold">0</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761369"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">Rukiyat95...</td><td class="text-center">190,00</td><td class="text-center">x1.19</td><td class="text-center tx-semibold">0</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761388"><td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td><td class="text-center">Ov3...</td><td class="text-center">1,00</td><td class="text-center">x2.00</td><td class="text-center tx-semibold">0</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761342"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">Vexhnyys...</td><td class="text-center">2,00</td><td class="text-center">x4.17</td><td class="text-center tx-semibold">0</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761328"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">Amika...</td><td class="text-center">20,00</td><td class="text-center">x1.43</td><td class="text-center tx-semibold">0</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761326"><td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td><td class="text-center">Dollar20...</td><td class="text-center">16,00</td><td class="text-center">x1.49</td><td class="text-center tx-semibold">0</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761320"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">Nastya31...</td><td class="text-center">1,00</td><td class="text-center">x1.73</td><td class="text-center tx-success tx-semibold">1,73</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761288"><td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td><td class="text-center">895146185...</td><td class="text-center">1,00</td><td class="text-center">x2.17</td><td class="text-center tx-semibold">0</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761199"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">Nvvn...</td><td class="text-center">2,00</td><td class="text-center">x2.82</td><td class="text-center tx-success tx-semibold">5,64</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761094"><td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td><td class="text-center">Masterringo6...</td><td class="text-center">1,00</td><td class="text-center">x1.11</td><td class="text-center tx-success tx-semibold">1,11</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761105"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">Andrei19...</td><td class="text-center">1,00</td><td class="text-center">x3.26</td><td class="text-center tx-success tx-semibold">3,26</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761164"><td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td><td class="text-center">Ov3...</td><td class="text-center">1,00</td><td class="text-center">x2.00</td><td class="text-center tx-success tx-semibold">2,00</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761143"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">Kene...</td><td class="text-center">5,00</td><td class="text-center">x3.38</td><td class="text-center tx-semibold">0</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761071"><td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td><td class="text-center">Obaranova...</td><td class="text-center">19,20</td><td class="text-center">x5.21</td><td class="text-center tx-success tx-semibold">100,00</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761066"><td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td><td class="text-center">Danilshevts...</td><td class="text-center">2,00</td><td class="text-center">x2.78</td><td class="text-center tx-success tx-semibold">5,56</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788761009"><td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td><td class="text-center">Kalinin...</td><td class="text-center">4,00</td><td class="text-center">x1.36</td><td class="text-center tx-success tx-semibold">5,44</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788760992"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">Cara99929498...</td><td class="text-center">35,00</td><td class="text-center">x2.02</td><td class="text-center tx-success tx-semibold">70,70</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788760762"><td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box" style="    margin-top: -4px;margin-right: 3px;"><path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path><polyline points="2.32 6.16 12 11 21.68 6.16"></polyline><line x1="12" y1="22.76" x2="12" y2="11"></line></svg></td><td class="text-center">Kotenok...</td><td class="text-center">1,00</td><td class="text-center">x80.00</td><td class="text-center tx-semibold">0</td></tr><tr href="#checkModal" data-toggle="modal" gameid="788760710"><td class="text-center"><i class="ion ion-md-grid tx-16" style="margin-top: -4px;margin-right: 3px;"></i></td><td class="text-center">312312324...</td><td class="text-center">2,00</td><td class="text-center">x2.08</td><td class="text-center tx-semibold">0</td></tr>

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
               
                
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