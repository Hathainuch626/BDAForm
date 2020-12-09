<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('./css/app.css') }}" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- jquery.Thailand.js -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/JQL.min.js"></script>
        <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
        <link rel="stylesheet" href="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.css">
        <script type="text/javascript" src="https://earthchie.github.io/jquery.Thailand.js/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
        <script src="service/province.service.js" type="text/javascript"></script>

        <!-- Select2 -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

        <!-- Styles -->
        <style>
            body {
                font-family: 'Prompt';
                background: #E5E5E5;
            }

            .nav {
                position: absolute;
                width: 100%;
                height: 64px;
                left: 0px;
                top: 1px;
                background: #FFFFFF;
                box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.25);
            }

            img {
                width: 40px;
                height: 40px;   
                margin-left: -75px;  
                margin-top: 10px; 
            }

            .position {
                width: 559px;
                height: 31px;
                margin-left: -20px;
                margin-top: -45px;

                font-family: Prompt;
                font-style: normal;
                font-weight: normal;
                font-size: 18px;
                line-height: 27px;

                color: #363636;
            }

            .position2 {
                width: 559px;
                height: 31px;
                margin-left: -18px;
                margin-top: -2px;

                font-family: Prompt;
                font-style: normal;
                font-weight: 300;
                font-size: 14px;
                line-height: 21px;

                color: #363636;
            }

            .col {
                width: 100%;
            }

            .province {
                display: block;
                width: 100%;
                height: calc(1.5em + .75rem + 2px);
                padding: .375rem .75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }

            .header{
                width: 100%;
                height: 28px;
                margin-left: 22px;
                margin-top: 20px;

                font-family: Prompt;
                font-style: normal;
                font-weight: 500;
                font-size: 20px;
                line-height: 30px;

                color: #333333;
            }

            .line {
                width: 24.63px;
                height: 2px;
                margin-left: 22px;
                margin-top: 15px;

                background: #8A5C8E;
            }

            .line2 {
                width: 630px;
                height: 1px;
                margin-left: 47px;
                margin-top: -1px;

                background: #E9E9E9; 
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

            .form-control {
                background: #F9F9F9;
                border: 1px solid #E0E0E0;
                box-sizing: border-box;
            }

            .form-control1 {
                width: 100%;
                height: 70px;
                left: 370px;
                top: 250px;

                background: #FFFFFF;
                border: 1px solid #E0E0E0;
                box-sizing: border-box;
                font-family: Prompt;
                font-style: normal;
                font-weight: 500;
                font-size: 24px;
                line-height: 36px;
                display: flex;
                align-items: center;
                text-align: center;

                color: #000000;
            }

            .btn {
                width: 137px;
                left: 652px;
                top: 850px;
                color: #FFFFFF;
                align-items: center;
                text-align: center;
                background: #C8C7CC;
                box-shadow: inset 0px -2px 0px rgba(0, 0, 0, 0.2);
            }

            .btndownload {
                width: 137px;
                height: 48px;
                margin-left: -px;
                top: 280px;

                background: #8E5C8D;
                box-shadow: inset 0px -2px 0px rgba(0, 0, 0, 0.2);
                font-family: Prompt;
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
                align-items: center;
                text-align: center;

                color: #FFFFFF;
            }

            .btncancel {
                border: 1px solid #8E5C8D;
                box-sizing: border-box;
                box-shadow: inset 0px -2px 0px rgba(0, 0, 0, 0.2);
                width: 154px;
                height: 48px;
                margin-left: 20px;
                top: 280px;

                font-family: Prompt;
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
                align-items: center;
                text-align: center;
                margin: auto; 

                color: #8E5C8D;
            }

            .btnconfirm {
                width: 137px;
                height: 48px;
                margin-left: 500px;
                margin-top: 20px;

                background: #C8C7CC;
                box-shadow: inset 0px -2px 0px rgba(0, 0, 0, 0.2);
                font-family: Prompt;
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 24px;
                align-items: center;
                text-align: center;

                color: #FFFFFF;
            } 
            
            .modal-body {
                text-align: center;
            }

        </style>
    </head>
    <body >
        <ul class="nav justify-content-center">
            <li class="nav-item justify-content-center">
                <img src="cmu_logo.png" width="30" height="30" >
                <div class="position" >{{ __('ศูนย์บริหารจัดการเมืองอัจฉริยะ มหาวิทยาลัยเชียงใหม่') }} </div>
                <div class="position2" >{{ __('Smart Campus Management Center') }} </div>
            </li>
        </ul>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card" style="margin: 100px 15px 10px">
                    <div class="header" >{{ __('รหัสขอออกใบกำกับภาษีของคุณ') }} </div>
                    <div class="line" >{{ ('') }} </div>
                    <div class="line2" >{{ ('') }} </div>
                    <div class="card-body">
                            <div class="form-group row">
                                <div class="col-md-12" style="margin: auto;">
                                    <input id="text" type="text" class="form-control1 form-control-lg" style="margin-top: 10px;" placeholder="กรุณากรอกรหัส" autofocus required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card" style="margin: 30px 15px 5px 10px;">
                    <div class="header" >{{ ('ข้อมูลในการออกใบกำกับภาษี') }} </div>
                    <div class="line" >{{ ('') }} </div>
                    <div class="line2" >{{ ('') }} </div>
                    <div class="card-body">
                            <div class="form-group row">
                                <label for="inputfname" class="col-md-6 col-form-label text-md-left">{{ __('ชื่อ - นามสกุล / ชื่อบริษัท') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputfname" type="text" class="form-control" name="fname" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnum" class="col-md-6 col-form-label text-md-left">{{ __('เลขประจำตัวผู้เสียภาษี') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputnum" type="text" class="form-control" name="num" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputnumber" class="col-md-6 col-form-label text-md-left">{{ __('เลขที่') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputnumber" type="tel" class="form-control" name="number" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputswine" class="col-md-6 col-form-label text-md-left">{{ __('หมู่') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="inputswine" type="text" class="form-control" name="swine" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="province" class="col-md-6 col-form-label text-md-left" >{{ __('จังหวัด') }}</label>
                                <div class="col-md-6" style="width: 100%">
                                    <input type="text" name="province" id="province" class="form-control">
                                      
                                    {{-- <select class="form-control-js" name="province" id="province" style="width: 100%; height: 38px;">
                                       
                                    </select> --}}
                                    {{-- <input type="text" name="province" id="province"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="amphoe" class="col-md-6 col-form-label text-md-left" >{{ __('เขต/อำเภอ') }}</label>
                                <div class="col-md-6" style="width: 100%">
                                    <input type="text" id="amphoe" class="form-control">
                                    {{-- <select class="form-control-js" name="amphoe" id="amphoe" style="width: 100%; height: 38px;">
                                        
                                    </select> --}}
                                    {{-- <input type="text" id="amphoe"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="district" class="col-md-6 col-form-label text-md-left" >{{ __('ตำบล') }}</label>
                                <div class="col-md-6" style="width: 100%">
                                    <input type="text" id="district" class="form-control">
                                    {{-- <select class="form-control-js" name="district" id="district" style="width: 100%; height: 38px;">
                                        
                                    </select> --}}
                                    {{-- <input type="text" id="district"> --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="zipcode" class="col-md-6 col-form-label text-md-left">{{ __('รหัสไปรษณีย์') }}</label>
                                <div class="col-md-6" style="margin: auto;">
                                    <input id="zipcode" type="text" class="form-control" name="zipcode" >
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <!-- Button trigger modal -->
            <button type="button" class="btnconfirm btn-outline" data-toggle="modal" data-target="#exampleModal">ยืนยัน</button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">ยืนยันการดำเนินการ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" >
                            รหัสของคุณเคยออกใบเสร็จรับเงินแล้ว 
                            กดปุ่ม “ดาวน์โหลด” เพื่อดาวน์โหลดใบเสร็จรับเงินอีกครั้ง 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btncancel btn-outline" data-dismiss="modal">ยกเลิก</button>
                            <button type="submit" class="btndownload btn-outline" data-dismiss="modal">ดาวน์โหลด</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
 <script>
            $(document).ready(function() {
                $('.form-control-js').select2()
            });

            // เรียกใช้ jquery.Thailand.js
            $.Thailand({ 
                $district: $('#district'), // ตำบล
                $amphoe: $('#amphoe'), // อำเภอ
                $province: $('#province'), // จังหวัด
                $zipcode: $('#zipcode'), // รหัสไปรษณีย์
            });


</script>
