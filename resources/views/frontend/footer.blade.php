
<!-- Footer Widget-->
<div class="footer-widget section-pad-f" style="padding-bottom:0px">
    <div class="container">
        <div class="row">

            <div class="widget-row row">
                <div class="footer-col col-md-3 col-sm-6">
                    <!-- Each Widget -->
                    <div class="wgs wgs-footer wgs-text">
                        <div class="wgs-content">
                            {{-- <p><img src="{{asset('public/frontend')}}/image/logo.png" srcset="{{asset('public/frontend')}}/image/logo2x.png 2x" alt="Reokho Trade"></p> --}}
                            @if(session()->get('lang') == 'japan')
                            <h3 class="wgs-title"><strong>会社概要</strong></h3>
                            <p><a href="{{asset('public/frontend')}}/image/reokho-trade-International-Company-Profile-full-final.pdf"><em class="fa fa-file-pdf-o"></em>Reokho Trade International プライバシー</a></p>
                            {{-- <ul class="social">
                                <li><a href="https://www.facebook.com/reokhoint"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                                <li><a href="#"><em class="fa fa-instagram" aria-hidden="true"></em></a></li>
                                <li><a href="#"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
                            </ul> --}}
                             @else
                            <h3 class="wgs-title"><strong>Company Profile</strong></h3>
                            <p><a href="{{asset('public/frontend')}}/image/reokho-trade-International-Company-Profile-full-final.pdf"><em class="fa fa-file-pdf-o"></em> Reokho Trade International Profile</a></p>
                            {{-- <ul class="social">
                                <li><a href="https://www.facebook.com/reokhoint"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
                                <li><a href="#"><em class="fa fa-instagram" aria-hidden="true"></em></a></li>
                                <li><a href="#"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
                            </ul> --}}
                            @endif

                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="footer-col col-md-3 col-sm-6 col-md-offset-1 res-m-bttm">
                    <!-- Each Widget -->
                    <div class="wgs wgs-footer wgs-menu">

                        @if(session()->get('lang') == 'japan')
                        
                        <div class="wgs-content">
                            {{-- <p><strong>学生ビザ申請に必要な書類</strong></p> --}}
                            <p>就学許可証を申請するには、次のものが必要です。</br>
                                *** 学業証明書とマークシット。</br>
                                *** 有効なパスポート。</br>
                                *** 出生証明書。
                            </p>
                            
                            </div>
                        @else

                        <div class="wgs-content">
                            {{-- <p><strong>Documents required for Apply  student visa</strong></p> --}}
                            {{-- <p>To apply for your study permit, you will need:</br> --}}
                                *** Your Academic Certificates & Markshits.</br>
                                *** A valid passport.</br>
                                *** Birth Certificate.
                            </p>
                           
                            
                        </div>
                        @endif


                    </div>
                    <!-- End Widget -->
                </div>
                

                <div class="footer-col col-md-5 col-sm-6">
                    <!-- Each Widget -->
                    <div class="wgs wgs-footer">
                        @if(session()->get('lang') == 'japan')
                        <h5 class="wgs-title">連絡する</h5>
                        <div class="wgs-content">
                            <p><strong>Reokho Trade Internetional</strong><br>
                                72,Advance Milinda, Room No-409, 3rd floor, Mouchak Moor (フォーチュン ショッピング モールの反対側), Malibagh Dhaka-1219 バングラデシュ.</p>
                            <p>
                                <em class="fa fa-envelope-o" style="font-size:18px" aria-hidden="true"></em>&nbsp
                                <a href="mailto:info@reokhotrade.com"> info@reokhotrade.com</a>
                                <br>
                                <em class="fa fa-mobile" style="font-size:25px" aria-hidden="true"></em>&nbsp
                                <span>+880 1886613121</span>
                                <em class="fa fa-phone" style="font-size:20px" aria-hidden="true"></em>&nbsp
                                <span> +880-2-48317223</span>
                            </p>
                        </div>
                        @else
                        {{-- <h5 class="wgs-title">Get In Touch</h5> --}}
                        <div class="wgs-content">
                            <p><strong>Reokho Trade Internetional</strong><br>
                                72,Advance Milinda, Room No-409, 3rd floor, Mouchak Moor , Malibagh Dhaka-1219 Bangladesh.</p>
                            {{-- <p>
                                <em class="fa fa-envelope-o" style="font-size:18px" aria-hidden="true"></em>&nbsp
                                <a href="mailto:info@reokhotrade.com"> info@reokhotrade.com</a>
                                <br>
                                <em class="fa fa-mobile" style="font-size:25px" aria-hidden="true"></em>&nbsp
                                <span>+880 1886613121</span>
                                <em class="fa fa-phone" style="font-size:20px" aria-hidden="true"></em>&nbsp
                                <span> +880-2-48317223</span>
                            </p> --}}
                        </div>
                        @endif


                    </div>
                    <!-- End Widget -->
                </div>

            </div><!-- Widget Row -->

        </div>
    </div>
</div>
<!-- End Footer Widget -->
<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <!-- <div class="site-copy col-sm-7">
                <p>&copy; 2017 Consulting Expert <span class="sep"> . </span> <a href="#">Privacy Policy</a> <span class="sep"> . </span> <a href="#">Terms of Condition</a></p>
            </div> -->
            <div class="text-center">
                <p>© Reokho Trade Int. 2022 | Development by <a href="mailto:kabircse2018@gmail.com" target="_blank">HUMAUN KABIR</a></p>
            </div>

        </div>
    </div>
</div>
<!-- End Copyright -->
