<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}" >
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Select2 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito';
            }
            .col {
                width: 100%;
            }
            .select {
                margin: auto;
            }

            .select2-container--default .select2-selection--single {
                width: 100%;
                height: 38px;
                display: flex;
                align-items: center;
            }

            .select2-selection__arrow {
                height: 38px !important;
                vertical-align: middle;
            }
        </style>
        <script>
            $(document).ready(function() {
                $('.form-control-js').select2()
            });
        </script>
    </head>
    <body >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card" style="margin: 30px 15px 10px">
                    <div class="card-header" >{{ __('รหัสขอออกใบกำกับภาษีของคุณ') }} </div>
                    <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-12" style="margin: auto;">
                                    <input id="text" type="text" class="form-control form-control-lg" style="margin-top: 10px;" placeholder="กรุณากรอกรหัส" autofocus>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card" style="margin: 30px 15px 5px 10px;">
                    <div class="card-header" >{{ ('ข้อมูลใบการออกใบกำกับภาษี') }} </div>
                    <div class="card-body">
                            <div class="form-group row">
                                <label for="inputfname" class="col-md-6 col-form-label text-md-left">{{ __('ชื่อ - นามสกุล / ชื่อบริษัท') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputfname" type="text" class="form-control" name="fname" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnum" class="col-md-6 col-form-label text-md-left">{{ __('เลขประจำตัวผู้เสียภาษี') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputnum" type="text" class="form-control" name="num" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnumber" class="col-md-6 col-form-label text-md-left">{{ __('เลขที่') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputnumber" type="tel" class="form-control" name="number" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputswine" class="col-md-6 col-form-label text-md-left">{{ __('หมู่') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputswine" type="text" class="form-control" name="swine" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputprovince" class="col-md-6 col-form-label text-md-left" >{{ __('จังหวัด') }}</label>
                                <div class="col-md-6" style="width: 100%">
                                    <select class="form-control-js" name="inputprovince" style="width: 100%; height: 38px;">
                                        <option >เลือกจังหวัด</option>
                                        <option value="กร">กรุงเทพมหานคร</option>
                                        <option value="กำ">กำแพงเพชร </option>
                                        <option value="ชัยน">ชัยนาท</option>
                                        <option value="นครน">นครนายก</option>
                                        <option value="นครป">นครปฐม</option>
                                        <option value="นครส">นครสวรรค์ </option>
                                        <option value="นน">นนทบุรี </option>
                                        <option value="ปทุ">ปทุมธานี</option>
                                        <option value="พระ">พระนครศรีอยุธยา </option>
                                        <option value="พิจิ">พิจิตร </option>
                                        <option value="พิษ">พิษณุโลก </option>
                                        <option value="เพชรบู">เพชรบูรณ์</option>
                                        <option value="ลพ">ลพบุรี</option>
                                        <option value="สมุทรป">สมุทรปราการ</option>
                                        <option value="สมุทรสง">สมุทรสงคราม</option>
                                        <option value="สมุทรสา">สมุทรสาคร </option>
                                        <option value="สิง">สิงห์บุรี </option>
                                        <option value="สุโข">สุโขทัย</option>
                                        <option value="สุพรร">สุพรรณบุรี</option>
                                        <option value="สระบ">สระบุรี </option>
                                        <option value="อ่าง">อ่างทอง</option>
                                        <option value="อุท">อุทัยธานี</option>
                                        <option value="จัน">จันทบุรี</option>
                                        <option value="ฉะ">ฉะเชิงเทรา</option>
                                        <option value="ชล">ชลบุรี</option>
                                        <option value="ตรา">ตราด</option>
                                        <option value="ปรา">ปราจีนบุรี</option>
                                        <option value="ระย">ระยอง</option>
                                        <option value="สระแ">สระแก้ว</option>
                                        <option value="กาญ">กาญจนบุรี</option>
                                        <option value="ตา">ตาก</option>
                                        <option value="ประ">ประจวบคีรีขันธ์</option>
                                        <option value="เพชรบุ">เพชรบุรี</option>
                                        <option value="ราชบ">ราชบุรี</option>
                                        <option value="อุต">อุตรดิตถ์</option>
                                        <option value="ลำพ">ลำพูน</option>
                                        <option value="ลำป">ลำปาง </option>
                                        <option value="แม่ฮ่อ">แม่ฮ่องสอน</option>
                                        <option value="เชียงร">เชียงราย</option>
                                        <option value="เชียงใ">เชียงใหม่</option>
                                        <option value="น่า">น่าน</option>
                                        <option value="พะ">พะเยา</option>
                                        <option value="แพ">แพร่</option>
                                        <option value="กาฬ">กาฬสินธุ์</option>
                                        <option value="ขอ">ขอนแก่น</option>
                                        <option value="ชัยภู">ชัยภูมิ</option>
                                        <option value="นครพ">นครพนม</option>
                                        <option value="นคราช">นครราชสีมา</option>
                                        <option value="บึง">บึงกาฬ</option>
                                        <option value="บุร">บุรีรัมย์ </option>
                                        <option value="มหาส">มหาสารคาม</option>
                                        <option value="มุก">มุกดาหาร</option>
                                        <option value="ยโ">ยโสธร </option>
                                        <option value="ร้อ">ร้อยเอ็ด</option>
                                        <option value="เล">เลย</option>
                                        <option value="สก">สกลนคร</option>
                                        <option value="สุริ">สุรินทร์</option>
                                        <option value="ศรี">ศรีสะเกษ</option>
                                        <option value="หนองค">หนองคาย</option>
                                        <option value="หนองบ">หนองบัวลำภู</option>
                                        <option value="อุด">อุดรธานี</option>
                                        <option value="อุบ">อุบลราชธานี </option>
                                        <option value="อำ">อำนาจเจริญ</option>
                                        <option value="กระ">กระบี่</option>
                                        <option value="ชุม">ชุมพร</option>
                                        <option value="ตรั">ตรัง</option>
                                        <option value="นครศ">นครศรีธรรมราช</option>
                                        <option value="นรา">นราธิวาส</option>
                                        <option value="ปัต">ปัตตานี</option>
                                        <option value="พัง">พังงา</option>
                                        <option value="พัท">พัทลุง </option>
                                        <option value="ภู">ภูเก็ต</option>
                                        <option value="ระน">ระนอง</option>
                                        <option value="สต">สตูล</option>
                                        <option value="สงข">สงขลา</option>
                                        <option value="สุราษ">สุราษฎร์ธานี</option>
                                        <option value="ยะ">ยะลา</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputcounty" class="col-md-6 col-form-label text-md-left">{{ __('เขต/อำเภอ') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputcounty" type="text" class="form-control" name="county">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputdistrict" class="col-md-6 col-form-label text-md-left">{{ __('ตำบล') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputdistrict" type="text" class="form-control" name="district" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputpostalcode" class="col-md-6 col-form-label text-md-left">{{ __('รหัสไปรษณีย์') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputpostalcode" type="text" class="form-control" name="postalcode" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <center><button type="submit" value="submit" class="btn btn-primary" style="margin: auto;">ยืนยัน</button></center>
    </div>
    </body>
</html>
