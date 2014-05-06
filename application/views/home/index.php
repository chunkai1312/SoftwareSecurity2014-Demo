<section class="banner">
    <div class="banner-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- <h1 class="brand-heading">Grayscale</h1> -->
                    
                    <img class="banner-logo" src="assets/img/logo.png" alt="logo" />
                    
                    <p class="banner-text">Almond Happiness Breakfast Shop</p>
                    <div class="page-scroll">
                        <a href="#intro" class="btn btn-circle">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="intro" class="content-section">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1 class="text-center text-warning">杏福簡介</h1>
                <p>「一日之計在於晨」、 「早上吃的好，中午吃的飽，晚上吃的少」，早餐可以說是人們睡醒後的第一餐，必須補充足夠的營養才能精力充沛、集中注意力與擁有愉快的心情去面對一天的開始。</p>
                <h3 class="text-center text-danger">杏福餐點 + 杏仁茶</h3>
                <p>杏仁含有較豐富的營養素分別有維生素E、單元不飽和脂肪酸、鎂、鋅、鉀等，其中最值得一提的是維生素E，其擁有抗氧化、抗癌、抗老化等功效，每天喝上一杯溫暖你心的杏仁茶，有助於降低心血管疾病的風險、糖尿病的預防。</p>
                <h3 class="text-center text-danger">杏福餐點 + 豆漿</h3>
                <p>豆漿裡含有蛋白質、維生素、礦物質、鐵、鈣、維生素B且含有水溶性的大豆蛋白質。豆漿被譽為「植物性牛奶」，豆漿蛋白質中的胺基酸成分比較接近完全蛋白質，屬於優質蛋白質。豆漿與牛奶中的維生素和礦物質各有長，豆漿中的鈣含量低於牛奶，但鐵和B類維生素等量卻高於牛奶。</p>
                <h3 class="text-center text-danger">杏福餐點 + 米漿</h3>
                <p>米漿不含膽固醇也不含乳糖，適合乳糖不適症及對牛奶過敏的人食用。其香濃的味道及飽足感使的一般大眾喜歡在早餐時搭配早點一起享用，目前 還流行米漿與豆漿一起混合飲用，口味不甜不膩，也受到眾人喜愛。米漿中富含人體所需的不飽和脂肪酸、多種維生素及礦物質，營養豐富，適合運動者飲用；且性質溫和，是一種冷熱皆可的飲料，極易消化，尤其適合消化道較弱的人飲用。</p>
            </div>
        </div>

    </div>
</section>

<div id="map"></div>

<script>
    var map;
    function initialize() {
        var mapOptions = {
            scrollwheel: false,
            zoom: 17,
            center: new google.maps.LatLng(24.2091283,120.7069849)
        };
        
        map = new google.maps.Map(document.getElementById('map'), mapOptions);
        
        var image = 'assets/img/favicon.ico';
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            //title: 'Welcome to MA-300',
            icon: image,
            animation: google.maps.Animation.BOUNCE
        });
        
        infoEvent(marker);
    }

    function infoEvent(marker) {
        var contentString = "Welcome to IDSL <br/> Location: MA-300 <br/> PhoneNumber : 02-2733-3141 (Ext. 7904)";
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
            //事件處理
        google.maps.event.addListener(marker, 'mouseover', function() {
            marker.setAnimation(null);
            infowindow.open(map,marker);
        });
    
        google.maps.event.addListener(marker, 'mouseout', function() {
            marker.setAnimation(google.maps.Animation.BOUNCE);
            infowindow.close(map,marker);
        });
    }
        
    google.maps.event.addDomListener(window, 'load', initialize);
</script>