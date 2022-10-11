<div class="contact-form my-5 mx-2 mx-sm-0" id="contactFormContainer">
    <h5 class="border-bottom">Hızlı Yardım İçin Bize Ulaşın</h5>

    <p class="m-0 text-black">Size daha iyi hizmet verebilmemiz için iletişim bilgilerinizi bırakabilirsiniz. Alanında uzman danışmanlarımız kısa süre içinde sizinle iletişim kuracaktır.</p>

    <form id="contactForm" method="POST" novalidate="novalidate">
        <div class="row form-label mb-0 mb-lg-3">
            <div class="form-group col-md-6 mb-3 mb-lg-0">
                <label for="cfName">Adınız (*)</label>
                <input type="text" class="form-control r-input" id="cfName" name="cfName" required="" placeholder="Adınız">
            </div>
            <div class="form-group col-md-6 mb-3 mb-lg-0">
                <label for="cfsurName">Soyadınız (*)</label>
                <input type="text" class="form-control r-input" id="cfsurName" name="cfsurName" required="" placeholder="Soyadınız">
            </div>
        </div>
        <div class="row form-label mb-0 mb-lg-3">
            <div class="form-group col-md-6 mb-3 mb-lg-0">
                <label for="cfPhone">Telefon Numaranız(*)</label>
                <input type="text" class="form-control r-input" id="cfPhone" name="cfPhone" data-mask="(999) 999-9999" required="" autocomplete="off" maxlength="14" placeholder="Telefon Numaranız">
            </div>
            <div class="form-group col-md-6 mb-3 mb-lg-0">
                <label for="cfEmail">E-posta Adresiniz</label>
                <input type="email" class="form-control r-input" id="cfEmail" name="cfEmail" placeholder="E-posta adresiniz">
            </div>
        </div>
        <div class="form-group form-label mb-3">
            <label for="cfCity" class="mb-2">İkamet Şehri (*) <br>
                <span class="comment">İkamet şehri bilginiz ile size en yakın ofisimizi belirleyerek daha hızlı hizmet almanız sağlanacaktır.</span>
            </label>

            <select required="" class="form-control r-input" id="cfCity" name="cfCity" placeholder="Şehir">
                <option value="">İkamet Şehri</option>
                <option value="Adana">Adana</option>
                <option value="Adıyaman">Adıyaman</option>
                <option value="Afyonkarahisar">Afyonkarahisar</option>
                <option value="Ağrı">Ağrı</option>
                <option value="Aksaray">Aksaray</option>
                <option value="Amasya">Amasya</option>
                <option value="Ankara">Ankara</option>
                <option value="Antalya">Antalya</option>
                <option value="Ardahan">Ardahan</option>
                <option value="Artvin">Artvin</option>
                <option value="Aydın">Aydın</option>
                <option value="Balıkesir">Balıkesir</option>
                <option value="Bartın">Bartın</option>
                <option value="Batman">Batman</option>
                <option value="Bayburt">Bayburt</option>
                <option value="Bilecik">Bilecik</option>
                <option value="Bingöl">Bingöl</option>
                <option value="Bitlis">Bitlis</option>
                <option value="Bolu">Bolu</option>
                <option value="Burdur">Burdur</option>
                <option value="Bursa">Bursa</option>
                <option value="Çanakkale">Çanakkale</option>
                <option value="Çankırı">Çankırı</option>
                <option value="Çorum">Çorum</option>
                <option value="Denizli">Denizli</option>
                <option value="Diyarbakır">Diyarbakır</option>
                <option value="Düzce">Düzce</option>
                <option value="Edirne">Edirne</option>
                <option value="Elazığ">Elazığ</option>
                <option value="Erzincan">Erzincan</option>
                <option value="Erzurum">Erzurum</option>
                <option value="Eskişehir">Eskişehir</option>
                <option value="Gaziantep">Gaziantep</option>
                <option value="Giresun">Giresun</option>
                <option value="Gümüşhane">Gümüşhane</option>
                <option value="Hakkari">Hakkari</option>
                <option value="Hatay">Hatay</option>
                <option value="Iğdır">Iğdır</option>
                <option value="Isparta">Isparta</option>
                <option value="İstanbul">İstanbul</option>
                <option value="İzmir">İzmir</option>
                <option value="Kahramanmaraş">Kahramanmaraş</option>
                <option value="Karabük">Karabük</option>
                <option value="Karaman">Karaman</option>
                <option value="Kars">Kars</option>
                <option value="Kastamonu">Kastamonu</option>
                <option value="Kayseri">Kayseri</option>
                <option value="Kilis">Kilis</option>
                <option value="Kırıkkale">Kırıkkale</option>
                <option value="Kırklareli">Kırklareli</option>
                <option value="Kırşehir">Kırşehir</option>
                <option value="Kocaeli">Kocaeli</option>
                <option value="Konya">Konya</option>
                <option value="Kütahya">Kütahya</option>
                <option value="Malatya">Malatya</option>
                <option value="Manisa">Manisa</option>
                <option value="Mardin">Mardin</option>
                <option value="Mersin">Mersin</option>
                <option value="Muğla">Muğla</option>
                <option value="Muş">Muş</option>
                <option value="Nevşehir">Nevşehir</option>
                <option value="Niğde">Niğde</option>
                <option value="Ordu">Ordu</option>
                <option value="Osmaniye">Osmaniye</option>
                <option value="Rize">Rize</option>
                <option value="Sakarya">Sakarya</option>
                <option value="Samsun">Samsun</option>
                <option value="Şanlıurfa">Şanlıurfa</option>
                <option value="Siirt">Siirt</option>
                <option value="Sinop">Sinop</option>
                <option value="Sivas">Sivas</option>
                <option value="Şırnak">Şırnak</option>
                <option value="Tekirdağ">Tekirdağ</option>
                <option value="Tokat">Tokat</option>
                <option value="Trabzon">Trabzon</option>
                <option value="Tunceli">Tunceli</option>
                <option value="Uşak">Uşak</option>
                <option value="Van">Van</option>
                <option value="Yalova">Yalova</option>
                <option value="Yozgat">Yozgat</option>
                <option value="Zonguldak">Zonguldak</option>
                <option value="Diğer">Diğer</option>
            </select>
        </div>
        <div class="form-group form-label mb-0 mb-lg-3">
            <label for="cfMessage">Mesajınız</label>
            <textarea class="form-control r-textarea" id="cfMessage" name="cfMessage" rows="6" placeholder="Mesajınız"></textarea>
        </div>
        <div class="form-check kvkk-checkmark ps-0 d-flex flex-wrap">

            <label class="form-check-label me-2 custom-checkbox border-0" for="cfCheck">
                <input class="form-check-input me-2" type="checkbox" value="" id="cfCheck" name="cfCheck">
                <a type="button" data-bs-toggle="modal" data-bs-target="#kvkkModal">Kişisel verilerin korunması hakkında</a>
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="submit-btn">
            <input type="hidden" name="cf_formSource" value="/ulkeler-icerik.php">
            <input type="hidden" name="cf_formType" value="1">
            <button type="submit" name="cfFormSubmit" id="cfFormSubmit" class="submit btn w-100">Gönder <i class="fas fa-chevron-right"></i></button>
        </div>
    </form>

</div>