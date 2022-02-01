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

    <div class="card">
        <div class="card-header pd-t-20 d-sm-flex align-items-start justify-content-between bd-b-0 pd-b-0">
            <div>
                <h4 class="mg-b-5 ">Инструкции</h4>
            </div>
        </div>

        <div class="card-body pd-20 bd-b pd-b-20">
            <div class="row">
                <div class="col-12">

                    <div class=" card-crypto">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="main-tab" data-toggle="tab" href="#mainAboutTab" role="tab" aria-controls="home" aria-selected="true">Main game</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="mines-tab" data-toggle="tab" href="#minesAboutTab" role="tab" aria-controls="profile" aria-selected="false">Mines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="coin-tab" data-toggle="tab" href="#coinAboutTab" role="tab" aria-controls="profile" aria-selected="false">Coin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="wheel-tab" data-toggle="tab" href="#wheelAboutTab" role="tab" aria-controls="profile" aria-selected="false">Wheel</a>
            </li>
            
          </ul>
                        <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">
            <div class="tab-pane fade show active" id="mainAboutTab" role="tabpanel" aria-labelledby="main-tab">
             <h5>Правила</h5>
                  <p class="">Для начала игры укажите сумму и процент выигрыша. Далее попробуйте угадать, нажав на одну из кнопок больше или меньше,  промежуток в котором выпадет победное число. Если число выпало в выбранном промежутке, то сумма  умножается на коэффициент и возвращается на основной баланс, если же не угадали, то ставка сгорает.</p> 
                    
                  <h5>Честная игра</h5>
                  <p>Перед каждой игрой генерирутеся строка алгоритмом <u>SHA-512</u> в которой содержится <u>соль</u> и <u>победное число</u> (от 0 до 999999). Можно сказать, что перед Вами зашифрованный исход данной игры. Метод гарантирует 100% честность, так как Hash игры Вы видите заранее, а при изменении победного числа приведет к изменению Hash.</p> 
                    <p class="mg-b-0">Проверяйте самостоятельно:
                    </p><li>Скоприруйте Hash до начала игры</li>
                    <li>После окончания нажмите "Проверить игру"</li>
                    <li>Откроется окно с результатом</li>
                    <li>Скопируйте поля Salt1, Number (Победное число), Salt2</li>
                    <li>Вставьте в любой независимый SHA-512 генератор (Например: <a style="text-decoration: underline;" href="https://passwordsgenerator.net/sha512-hash-generator/" target="_blank">Ссылка 1</a> <a href="https://emn178.github.io/online-tools/sha512.html" style="text-decoration: underline;" target="_blank">Ссылка 1</a> <a style="text-decoration: underline;" href="https://www.md5calc.com/sha512" target="_blank">Ссылка 2</a>)</li>
                    <li>Hash должен совпадать c Hash до начала игры</li>
                <p></p>
                <hr>
                     <p>
                    Например:

    </p><li>Скопировали Hash до начала игры</li>
    <li>После окончания нажали на "Проверить игру", открылось окно</li>
    <li>Копируем значения Salt1, Number (Победное число), Salt2</li>
    <li>Получаем строку 8{93mW8huq|995544|a5cm28bjA0</li>
    <li>Вставляем строку в генератор</li>
    <li>Получили Hash как и до начала игры</li>
                    <p></p>
            </div>
            <div class="tab-pane fade " id="minesAboutTab" role="tabpanel" aria-labelledby="mines-tab">
             <h5>Правила</h5>
                  <p class="">Цель игры Mines – вскрыть пустые блоки, не вскрыв при этом ни одного, содержащей мину. Игра начинается с ввода размера игры и указания количества мин.</p> 
                    
                  <h5>Честная игра</h5>
                <p>Сразу после начала игры генерирутеся строка алгоритмом <u>SHA-512</u> в которой содержится <u>информация о блоках</u> и <u>соль</u>. Можно сказать, что перед Вами зашифрованный исход данной игры. Метод гарантирует 100% честность, так как блоки открываются после получения Hash, а при изменении информации о блоках приведет к изменению Hash.</p> 
                    <p class="mg-b-0">Проверяйте самостоятельно:
                    </p><li>Скоприруйте Hash до начала игры</li>
                    <li>После окончания нажмите "Проверить игру"</li>
                    <li>Откроется окно с результатом</li>
                    <li>Скопируйте поле Full string, содержащее информацию о блоках (Отсчет идет с верхнего левого блока, 0 - пустой блок, 2 - блок содержит мину, разделитель - "|") и соль</li>
                    <li>Вставьте в любой независимый SHA-512 генератор (Например: <a style="text-decoration: underline;" href="https://passwordsgenerator.net/sha512-hash-generator/" target="_blank">Ссылка 1</a> <a href="https://emn178.github.io/online-tools/sha512.html" style="text-decoration: underline;" target="_blank">Ссылка 1</a> <a style="text-decoration: underline;" href="https://www.md5calc.com/sha512" target="_blank">Ссылка 2</a>)</li>
                    <li>Hash должен совпадать c Hash до начала игры</li>
                <p></p>
                <hr>
                     <p>
                    Например:

    </p><li>Скопировали Hash до начала игры</li>
    <li>После окончания нажали на "Проверить игру", открылось окно</li>
    <li>Копируем значения Full string</li>
    <li>Вставляем строку в генератор</li>
    <li>Получили Hash как и до начала игры</li>
                    <p></p>
            </div>
           
           
            <div class="tab-pane fade " id="coinAboutTab" role="tabpanel" aria-labelledby="mines-tab">
             <h5>Правила</h5>
                  <p class="">Цель игры Coin – С шансом 50% выбрать одну из монет, проиграв или выиграв увеличенную сумму.</p> 
                    
                  <h5>Честная игра</h5>
                <p>Сразу после начала игры генерирутеся строка алгоритмом <u>SHA-512</u> в которой содержится <u>информация о блоках</u> и <u>соль</u>. Можно сказать, что перед Вами зашифрованный исход данной игры. Метод гарантирует 100% честность, так как блоки открываются после получения Hash, а при изменении информации о блоках приведет к изменению Hash.</p> 
                    <p class="mg-b-0">Проверяйте самостоятельно:
                    </p><li>Скоприруйте Hash до начала игры</li>
                    <li>После окончания нажмите "Проверить игру"</li>
                    <li>Откроется окно с результатом</li>
                    <li>Скопируйте поле Full string, содержащее информацию о блоках (Отсчет идет с верхнего левого блока, 0 - пустой блок, 2 - блок содержит мину, разделитель - "|") и соль</li>
                    <li>Вставьте в любой независимый SHA-512 генератор (Например: <a style="text-decoration: underline;" href="https://passwordsgenerator.net/sha512-hash-generator/" target="_blank">Ссылка 1</a> <a href="https://emn178.github.io/online-tools/sha512.html" style="text-decoration: underline;" target="_blank">Ссылка 1</a> <a style="text-decoration: underline;" href="https://www.md5calc.com/sha512" target="_blank">Ссылка 2</a>)</li>
                    <li>Hash должен совпадать c Hash до начала игры</li>
                <p></p>
                <hr>
                     <p>
                    Например:

    </p><li>Скопировали Hash до начала игры</li>
    <li>После окончания нажали на "Проверить игру", открылось окно</li>
    <li>Копируем значения Full string</li>
    <li>Вставляем строку в генератор</li>
    <li>Получили Hash как и до начала игры</li>
                    <p></p>
            </div>
            
            
             <div class="tab-pane fade " id="wheelAboutTab" role="tabpanel" aria-labelledby="mines-tab">
             <h5>Правила</h5>
                  <p class="">Цель игры Wheel – Ожидать рандомный цвет, и если он совпадет с вашим выбранным то вы умножите в несколько раз свою ставку.</p> 
                    
                  <h5>Честная игра</h5>
                <p>Сразу после начала игры генерирутеся строка алгоритмом <u>SHA-512</u> в которой содержится <u>информация о блоках</u> и <u>соль</u>. Можно сказать, что перед Вами зашифрованный исход данной игры. Метод гарантирует 100% честность, так как блоки открываются после получения Hash, а при изменении информации о блоках приведет к изменению Hash.</p> 
                    <p class="mg-b-0">Проверяйте самостоятельно:
                    </p><li>Скоприруйте Hash до начала игры</li>
                    <li>После окончания нажмите "Проверить игру"</li>
                    <li>Откроется окно с результатом</li>
                    <li>Скопируйте поле Full string, содержащее информацию о блоках (Отсчет идет с верхнего левого блока, 0 - пустой блок, 2 - блок содержит мину, разделитель - "|") и соль</li>
                    <li>Вставьте в любой независимый SHA-512 генератор (Например: <a style="text-decoration: underline;" href="https://passwordsgenerator.net/sha512-hash-generator/" target="_blank">Ссылка 1</a> <a href="https://emn178.github.io/online-tools/sha512.html" style="text-decoration: underline;" target="_blank">Ссылка 1</a> <a style="text-decoration: underline;" href="https://www.md5calc.com/sha512" target="_blank">Ссылка 2</a>)</li>
                    <li>Hash должен совпадать c Hash до начала игры</li>
                <p></p>
                <hr>
                     <p>
                    Например:

    </p><li>Скопировали Hash до начала игры</li>
    <li>После окончания нажали на "Проверить игру", открылось окно</li>
    <li>Копируем значения Full string</li>
    <li>Вставляем строку в генератор</li>
    <li>Получили Hash как и до начала игры</li>
                    <p></p>
            </div>
                   
                    </div><!-- card -->
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


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="backdrop"></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=llr1obnyxzac" name="c-154cojfuow80" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=76oxv9789y7g" name="c-pl5cmevcs39l" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>