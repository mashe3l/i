<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <title>ترجم بالإشارة</title>
        <link href="favicon.ico" rel="shortcut icon"/>
        <noscript>
            <meta content="deny" http-equiv="X-Frame-Options"/>
        </noscript>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    </head>
    <script type="text/javascript" src="ajax.js"></script>
    <link media="all" rel="stylesheet" href="style.css"/>
</script>
<body dir="rtl">
    <div class="auto-style1">
        <style>
            .topBar {
                width: 100%;
                height: 23px;
                position: relative;
                top: 0;
                text-align: center;
                border-bottom: 1px solid #fff;
                box-shadow: 0 2px 5px #ccc;
                padding-top: 7px;
                color: #fff;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 13px;
            }

            .topBar .link {
                padding: 2px 8px;
                background-color: #00729F;
                color: #fff;
                border-radius: 2px;
                font-size: 12px;
                font-weight: bold;
            }

            .topBar .link:hover {
                background-color: #0F8EC0;
            }

            .btnClose, .btnOpen {
                position: absolute;
                right: 30px;
                font-weight: bold;
                width: 50px;
            }

            .btnClose {
                font-size: 12px;
                line-height: 44px;
                height: 25px;
                margin-top: -30px;
            }

            .btnOpen {
                font-size: 0;
                border: 1px solid #fff;
                box-shadow: 0 2px 5px #ccc;
                border-top: none;
                border-radius: 0 0 4px 4px;
                -moz-border-radius: 0 0 4px 4px;
                -webkit-border-radius: 0 0 4px 4px;
                top: -30px;
                opacity: .8;
            }

            .btnOpen:hover {
                opacity: 1;
            }

            .btnOpen a {
                display: block;
            }

            .topBar a {
                text-decoration: none;
                color: #fff;
            }

            .topBar:target {
                top: -36px;
                position: absolute;
                -webkit-transition: top 0.4s ease-in;
                -moz-transition: top 0.4s ease-in;
            }

            .topBar:target .btnOpen {
                top: 31px;
                height: 30px;
                font-size: 12px;
                line-height: 34px;
                -webkit-transition-property: top;
                -webkit-transition-duration: .4s;
                -moz-transition-property: top;
                -moz-transition-duration: .4s;
            }

            .topBar:target .btnClose {
                display: none;
            }

            .topBar:target .btnOpen, .topBar {
                background-image: linear-gradient(bottom, rgb(0,116,162) 38%, rgb(0,138,192) 69%);
                background-image: -o-linear-gradient(bottom, rgb(0,116,162) 38%, rgb(0,138,192) 69%);
                background-image: -moz-linear-gradient(bottom, rgb(0,116,162) 38%, rgb(0,138,192) 69%);
                background-image: -webkit-linear-gradient(bottom, rgb(0,116,162) 38%, rgb(0,138,192) 69%);
                background-image: -ms-linear-gradient(bottom, rgb(0,116,162) 38%, rgb(0,138,192) 69%);
                background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0.38, rgb(0,116,162)), color-stop(0.69, rgb(0,138,192)) );
            }

            #images_ {
                min-height: 80px;
                padding: 5px;
            }

            #images_ img {
                height: 80px;
            }

            .auto-style1 {
                text-align: center;
            }
        </style>
</script><br/>
<br/>
<br/>
<br/>
<br>
<iframe id="ifs" frameborder="0" height="0" name="ifs" src="http://translate.google.com/translate_tts1?ie=UTF-8&amp;q=&amp;tl=ar&amp;total=1&amp;idx=0&amp;textlen=4&amp;prev=input" width="0"></iframe>
</div>
<div class="auto-style1" dir="rtl">
    <div id="images_" class="auto-style1"></div>
    <div class="auto-style1" dir="rtl">
        <textarea id="q" cols="39" dir="rtl" maxlength="9" name="q" onkeypress="return(KeyPressOrder(this,event))" onkeydown="(KeyPressOrder(this,event))" placeholder="أكتب الكلمة العربية التي تريد ترجمتها , ثم اضغط على زر ترجم , إقرا الإشارات من اليمين الى اليسار ." rows="4"></textarea>
        <br/>
        <img src="images/loading.gif" id="LoadingImage" style="display:none"/>
        <input n="" id="FormSubmit" onclick="sp()" type="button" value=" ترجم "/>
    </div>
    <br/>
    <a class="twitter-follow-button" data-dnt="true" data-lang="ar" data-show-count="false" href="https://twitter.com/ا"></a>
    <script>
        !function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = p + '://platform.twitter.com/widgets.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'twitter-wjs');
    </script>
</div>
<script>

    function ImageExist(url) {
        var http = new XMLHttpRequest();
        http.open('HEAD', url, false);
        http.send();
        return http.status != 404;
    }

    function showimages(text) {
        Html_ = "";
        var img = [];
        var s_text_ = text.split(" ");
        var arrlen = s_text_.length;
        var allnum = -1;
        for (i = 0; i <= arrlen - 1; i++) {
            if (ImageExist("images/aa" + s_text_[i] + ".jpg")) {
                img_code = "<img src=\"images/aa" + s_text_[i] + ".jpg\" >";
                Html_ = Html_ + img_code;
                allnum++;
                img[allnum] = img_code;
            } else {
                var len = s_text_[i].length;
                for (ix = 0; ix <= len - 1; ix++) {
                    small_text = s_text_[i].substring(ix, ix + 1);
                    img_code = "<img src=\"images/aa" + small_text + ".jpg\" >";
                    Html_ = Html_ + img_code;
                    allnum++;
                    img[allnum] = img_code;
                }
            }
        }
        document.getElementById("images_").innerHTML = Html_;

        var myVar;
        var Html_s = "";
        var x = 0;
        function myFunction() {
            myVar = setInterval(function() {
                myTimer()
            }, 500);
        }

        function myTimer() {
            if (x < allnum + 1) {
                Html_s = Html_s + img[x];
                document.getElementById("images_").innerHTML = Html_s;
                x++;
            } else {
                Html_s = "";
                myStopFunction();
            }
        }
        function myStopFunction() {
            clearInterval(myVar);
        }
        myFunction();
    }

    function sp() {
        text_ = document.getElementById("q").value;
        textss = encodeURIComponent(text_);
        Srx = "http://blankrefer.com/?http://translate.google.com/translate_tts?ie=UTF-8&q=" + textss + "&tl=ar&total=1&idx=0&textlen=4&prev=input";
        document.getElementById("ifs").src = Srx;
        showimages(text_);
    }
</script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }
        ,
        i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    }
    )(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-40606722-1', 'trj.im');
    ga('send', 'pageview');

    function KeyPressOrder(fld, e) {

        var strCheck = 'جحخهعغفقثصضةكمنتالبيسشءظطذدزروىئؤأئ';
        var whichCode = e.which ? e.which : e.keyCode;

        if (whichCode == 13 || whichCode == 8 || whichCode == 9)
            return true;
        key = String.fromCharCode(whichCode);
        if (strCheck.indexOf(key) == -1)
            return false;

        return true;
    }
</script>
</body></html>
