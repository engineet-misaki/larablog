@section('footer')
<section class="fdb-block pt-0 fp-active" data-block-type="contacts" data-id="6">
    <div class="container-fluid p-0 pb-3">
        <!-- <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.8444388087937!2d26.101253041406952!3d44.43635311654287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff4770adb5b7%3A0x58147f39579fe6fa!2zR3J1cHVsIFN0YXR1YXIgIkPEg3J1yJthIEN1IFBhaWHIm2Ui!5e0!3m2!1sen!2sro!4v1507381157656" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe> -->
        <img width="100%" height="300" src="https://picsum.photos/1201/400" alt="">
    </div>
    <div class="container">
        <div class="row text-center justify-content-center pt-5">
            <div class="col-12 col-md-7">
                <h1>Contact Me</h1>
            </div>
        </div>

        <div class="row justify-content-center pt-4">
            <div class="col-12 col-md-7">
                <form>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Subject">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row-100"></div>
    </div>
    <div class="bg-dark">
        <div class="container">
            <div class="row-50"></div>
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md mr-auto ml-auto">
                    <!-- <img alt="image" height="40" class="mb-2" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/phone.svg"> -->
                    <i class="fab fa-3x fa-github"></i>
                    <p class="lead pt-1">LINE</p>
                </div>

                <div class="col-12 col-md pt-3 pt-md-0 mr-auto ml-auto">
                    <!-- <img alt="image" height="40" class="mb-2" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/navigation.svg"> -->
                    <i class="fas fa-3x fa-map-marked-alt"></i>
                    <p class="lead pt-1">Japan Kanagawa</p>
                </div>

                <div class="col-12 col-md pt-3 pt-md-0 mr-auto ml-auto">
                    <!-- <img alt="image" height="40" class="mb-2" src="https://cdn.jsdelivr.net/gh/froala/design-blocks@master/dist/imgs//icons/mail.svg"> -->
                    <i class="fas fa-3x fa-envelope"></i>
                    <p class="lead pt-1">test@website.com</p>
                </div>
            </div>
            <div class="row-50"></div>
        </div>
    </div>

    <div class="container">
        <div class="row-70"></div>
        <div class="row text-center">
            <div class="col">
                <p class="h2">
                    <a href="https://www.facebook.com" class="mx-2 text-decoration-none">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.twitter.com" class="mx-2 text-decoration-none">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com" class="mx-2 text-decoration-none">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.google.com" class="mx-2 text-decoration-none">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="https://www.github.com" class="mx-2 text-decoration-none">
                        <i class="fab fa-github"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection