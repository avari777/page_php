    

    <div class="row">
        <div class="col">
            &copy; this is footer!
        </div>
    </div>
    </div>
    <div class="slider">
        <div class="slide slide1 current"></div>
        <div class="slide slide2"></div>
        <div class="slide slide3"></div>
        <a href="javascript:;" class="slide-left slide-controll"><</a>
        <a href="javascript:;" class="slide-right slide-controll">></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $('.slide-right').click(function(){
            console.log($(window).width());
            $('.current').animate({
                left: $(window).width()
            }, 3000, function(){
                $('.current').removeClass('current').next('.slide').addClass('current');

            });

        });
    </script>
</body>
</html>