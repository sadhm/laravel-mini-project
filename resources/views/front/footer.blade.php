<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">


                        <div class="col-sm-6">
                            <div class="footer-links">
                                <h4>لینک های مفید</h4>
                                <ul>
                                    <li><a href="#">خانه</a></li>
                                    <li><a href="#">دربار ما</a></li>
                                    <li><a href="#">خدمات</a></li>
                                    <li><a href="#">نمونه کارها</a></li>
                                </ul>
                            </div>

                            <div class="footer-links">
                                <h4>تماس با ما</h4>
                                <p>
                                    میدان هروی <br>
                                    ایران, تهران<br>
                                    <strong>تلفن:</strong> +1 5589 55488 55<br>
                                    <strong>ایمیل:</strong> info@example.com<br>
                                </p>
                            </div>

                            <div class="social-links">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form">

                        <h4>با ما تماس بگیرید</h4>
                        <br>
                        <form action="{{route('concat.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">نام </label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                       value="{{old('name')}}">
                                @error('name')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">ایمیل</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{old('email')}}">
                                @error('email')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subject">موضوع</label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"
                                       value="{{old('subject')}}">
                                @error('subject')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="message">متن پیام </label>
                                <textarea id="editor" type="text" class="form-control @error('message') is-invalid @enderror" name="message">{{old('message')}}</textarea>
                                @error('message')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="text-center"><button type="submit" title="Send Message">ارسال</button></div>

                        </form>

                    </div>

                </div>



            </div>

        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>laravel</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>
