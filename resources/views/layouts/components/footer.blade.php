<!-- footer -->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="{{ asset('assets/images/play-store.png')}}" alt="">
                    <img src="{{ asset('assets/images/app-store.png')}}" alt="">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="{{ asset('assets/images/logo-white.png')}}">
                <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="Copyright">Copyright 2022 - Easy Tutorial</p>
    </div>
</div>


<!-- js for toggle menu -->

<script>
    var MenuItem = document.getElementById("MenuItem");

    MenuItem.style.maxHeight = "0px"
    function menutoggle(){
        if(MenuItem.style.maxHeight =="0px")
        {
            MenuItem.style.maxHeight ="200px";
        }
        else
        {
            MenuItem.style.maxHeight ="0px";
        }
    }
</script>




</body>
</html>