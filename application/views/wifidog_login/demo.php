<!DOCTYPE html>
<?php
	header("Access-Control-Allow-Origin: *");
	/*
	$gw_address	= $_REQUEST['gw_address'];
	$gw_id		= $_REQUEST['gw_id'];
	$mac       	= $_REQUEST['mac'];
	//$uamip     ='121.194.169.231';// $_REQUEST['uamip'];
	$uamip     	= $_REQUEST['ip'];// $_REQUEST['uamip'];
	$userurl	= $_REQUEST['url'];
	//$uamport   ='80';
	$uamport   	= $_REQUEST['gw_port'];
	$uamsecret  = 'testing123-1';
	$password    = 'test';
    //--There is a bug that keeps the logout in a loop if userurl is http%3a%2f%2f1.0.0.0 ---/
    //--We need to remove this and replace it with something we want
	if (preg_match("/1\.0\.0\.0/i", $userurl)) {
		$default_site = 'google.com';
		$pattern = "/1\.0\.0\.0/i";
		$userurl = preg_replace($pattern, $default_site, $userurl);
	}


	if ($res == 'success') {
		if (strlen($userurl) > 1 ) {
			header("Location: $userurl");
			print("\n</html>");

		}else
			header("HTTP/1.1 200 OK");
	}

	if ($res == 'failed') {
		header("Location: fail.php?".$qs);
		print("\n</html>");

	}

    //-- cookie add on -------------------------------
	if ($res == 'notyet') {
		if (isset($_COOKIE['hs'])) {
			$uamsecret  = 'greatsecret';
			$dir        = '/logon';
			$userurl    = $_REQUEST['userurl'];
			$redir      = urlencode($userurl);

			$username   = $_COOKIE['hs']['username'];
			$password   = $_COOKIE['hs']['password'];
			$enc_pwd    = return_new_pwd($password,$challenge,$uamsecret);
			$target     = "http://$uamip".':'.$uamport.$dir."?username=$username&password=$enc_pwd&userurl=$redir";
			header("Location: $target");
			print("\n</html>");
		}
	}
	//Function to do the encryption thing of the password
	function return_new_pwd($pwd,$challenge,$uamsecret){
    	$hex_chal   = pack('H32', $challenge);                  //Hex the challenge
        $newchal    = pack('H*', md5($hex_chal.$uamsecret));    //Add it to with $uamsecret (shared between chilli an this script)
        $response   = md5("\0" . $pwd . $newchal);              //md5 the lot
        $newpwd     = pack('a32', $pwd);                //pack again
        $password   = implode ('', unpack('H32', ($newpwd ^ $newchal))); //unpack again
		
		return $password;
	}
    */
    //-- End Cookie add on ------------
?>


<!-- saved from url=(0048)http://www.swiper.com.cn/demo/02-responsive.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>手机左右滑动效果</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/kt_res/css/swiper.min.css">

    <!-- Demo styles -->
    <style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color:#000;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    @media screen and (max-width : 319px){
            .portal-btn {
                border: 1px solid #bbb;
                cursor: pointer;
                padding: 15px 40px;
                border-radius: 5px;
            }
            .portal-btn-group {
                display: inline-block;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
            }
            .portal-btn-group:first-child {
                top:18%!important;
            }
            .portal-btn-group:nth-child(2) {
                top:35%!important;
            }
            .portal-btn-group:nth-child(3) {
                top:52%!important;
            }
            .portal-btn-group:nth-child(4) {
                top:70%!important;
            }
            .portal-btn > img {
                position: relative;
                right: 15px;
                top: 10px;
            }
        }
        @media screen and (min-width: 320px) and (max-width : 479px){
            .portal-btn {
                border: 1px solid #bbb;
                cursor: pointer;
                padding: 20px 65px;
                border-radius: 5px;
            }
            .portal-btn-group {
                display: inline-block;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
            }
            .portal-btn-group:first-child {
                top:20%!important;
            }
            .portal-btn-group:nth-child(2) {
                top:39%!important;
            }
            .portal-btn-group:nth-child(3) {
                top:58%!important;
            }
            .portal-btn-group:nth-child(4) {
                top:79%!important;
            }
            .portal-btn > img {
                position: relative;
                right: 15px;
                top: 10px;
            }
        }
        @media screen and (min-width: 480px){
            .portal-btn {
                border: 1px solid #bbb;
                cursor: pointer;
                padding: 25px 65px;
                border-radius: 5px;
            }
            .portal-btn-group {
                display: inline-block;
                left: 0;
                position: absolute;
                top: 0;
                width: 100%;
            }
            .portal-btn-group:first-child {
                top:20%!important;
            }
            .portal-btn-group:nth-child(2) {
                top:39%!important;
            }
            .portal-btn-group:nth-child(3) {
                top:58%!important;
            }
            .portal-btn-group:nth-child(4) {
                top:79%!important;
            }
            .portal-btn > img {
                position: relative;
                right: 15px;
                top: 10px;
            }
        }
        #tiaokuan{
            display: none;
            width: 100%;
            height: 100%;
            position:absolute;
            top: 0;
            bottom: 0;
            z-index: 999;
            background:#FFFCF7;
            color: #777;
            padding: 0;
            margin: 0;
        }
        .swiper-pagination {
            display: none !important;
        }
        .bt-nav {position: absolute; z-index: 999; height: 50px; background-color: rgba(255, 255, 255, 0.5); width: 100%; line-height: 50px; bottom: 0px; left:0;}
    
    </style>
    <script type="text/javascript" src="/kt_res/css/jquery.js"></script>
	
	<!-- Swiper JS -->
    <script src="/kt_res/css/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    $(function(){
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true
        });

        $("#tiaokuanlink").click(function(){
            $("#tiaokuan").show();
        });

        $("#back").click(function(){
            $("#tiaokuan").hide();
        });
        $(".duanxin").click(function(){
        	$('.portal-dialog').toggle();
        	});
    })
    </script>
	<script type="text/javascript">
		/**
		 * 微信连Wi-Fi协议3.1供运营商portal呼起微信浏览器使用
		 */
		var loadIframe = null;
	    var noResponse = null;
	    var callUpTimestamp = 0;
		function putNoResponse(ev) {
		 	clearTimeout(noResponse);
		}

		function errorJump() {
			var now = new Date().getTime();
			if((now - callUpTimestamp) > 4*1000){
				return;
			}
		 	alert('该浏览器不支持自动跳转微信请手动打开微信\n如果已跳转请忽略此提示');
		}

		myHandler = function (error) {
		 	errorJump();
		};

		function createIframe()
		{
		 	var iframe = document.createElement("iframe");
		 	iframe.style.cssText = "display:none;width:0px;height:0px;";
		 	document.body.appendChild(iframe);
		 	loadIframe = iframe;
		}
		
		//注册回调函数
		function jsonpCallback(result)
		{
			if (result && result.success) {
				var ua=navigator.userAgent;
				if (ua.indexOf("iPhone") != -1 ||ua.indexOf("iPod")!=-1||ua.indexOf("iPad") != -1) {   //iPhone
					window.location = result.data;
				} else {
					createIframe();
					loadIframe.src=result.data;
					callUpTimestamp = new Date().getTime();
					noResponse = setTimeout(function () {
						errorJump();
					},3000);
				}
			} else if (result && !result.success) {
				alert(result.data);
			}
		}

		function Wechat_GotoRedirect(appId, extend, timestamp, sign, shopId, authUrl, mac, ssid, bssid)
		{
		
			//将回调函数名称带到服务器端
			var url = "https://wifi.weixin.qq.com/operator/callWechatBrowser.xhtml?appId=" + appId
				+ "&extend=" + extend
				+ "&timestamp=" + timestamp
				+ "&sign=" + sign;
			
			//如果sign后面的参数有值，则是新3.1发起的流程
			if (authUrl && shopId && mac && ssid && bssid) {

				url = "https://wifi.weixin.qq.com/operator/callWechat.xhtml?appId=" + appId
					+ "&extend=" + extend
					+ "&timestamp=" + timestamp
					+ "&sign=" + sign
					+ "&shopId=" + shopId
					+ "&authUrl=" + encodeURIComponent(authUrl)
					+ "&mac=" + mac
					+ "&ssid=" + ssid
					+ "&bssid=" + bssid;

			}

			//通过dom操作创建script节点实现异步请求
			var script = document.createElement('script');
			script.setAttribute('src', url);
			document.getElementsByTagName('head')[0].appendChild(script);
		}
	</script>
	<script type="text/javascript" src="/kt_res/css/md5.js"></script>	
	<script type="text/javascript">
			
		function callWechatBrowser(){
			var appId = 'wxcb8a3c68f91757ad';
			var secretKey = '888edbab932923869391665fa0f4455e';
			var shopId = '7696751';
			var ssid = 'k-wifi';
			var authUrl = 'http://121.194.169.198/wifidog/weixin_auth/?gw_address=';
			authUrl += '<?php echo "$gw_address" ?>';
			authUrl += '&gw_port=' + <?php echo $gw_port ?>;
			authUrl += '&url=' + '<?php echo $url ?>';
			var mac = '<?php echo $mac ?>';
			var extend = 'demoExtend';
			//var bssid ='D4:EE:07:21:D3:8A';
			var bssid = mac;
			var timestamp = (new Date()).valueOf();
			var sign = CryptoJS.MD5(appId + extend + timestamp + shopId + authUrl + mac + ssid + bssid + secretKey);
			Wechat_GotoRedirect(appId, extend, timestamp, sign, shopId, authUrl, mac,ssid, bssid);
		}

		function callOneKeyNet(){
			var authUrl = 'http://121.194.169.198/wifidog/onekeynet_auth/?gw_address=';
			authUrl += '<?php echo "$gw_address" ?>';
			authUrl += '&gw_port=' + <?php echo $gw_port ?>;
			authUrl += '&url=' + '<?php echo $url ?>';
			
			window.location.href = authUrl;	
		}
		
		function callPhoneNet() {
			alert('call phone net');
		}
</script>

<script type="text/javascript" src="/kt_res/css/portal.js"></script> 


</head>
<body>
    <!-- Swiper -->
    <div class="swiper-container swiper-container-horizontal">
        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
            <div class="swiper-slide">
                <div class="bt-nav">&lt;&lt;上网请向左划</div>
                <a class="" href="https://www.baidu.com"  target="_blank"><img width='100%' src="/kt_res/images/4.png" /></a>
            </div>
            <div class="swiper-slide">
                <div class="bt-nav">&lt;&lt;上网请向左划</div>
                <a class="" href="http://www.sina.com.cn"  target="_blank"><img width='100%' src="/kt_res/images/1.png" /></a>
            </div>
            <div class="swiper-slide" >
                <div class="bt-nav">&lt;&lt;上网请向左划</div>
                <a class="" href="http://www.jd.com"  target="_blank"><img width='100%' src="/kt_res/images/2.png" /></a>
            </div>
            <div class="swiper-slide">
                <div class="bt-nav">&lt;&lt;上网请向左划</div>
                <a class="" href="https://www.taobao.com"  target="_blank"><img width='100%' src="/kt_res/images/3.png" /></a>
            </div>
            <div class="swiper-slide">
                <div style="background:#FFFCF7; min-height: 500px;">
                    <div class="portal-btn-group" style="top: 100px;">
                        <span class="portal-btn" onclick="callOneKeyNet()">  <img width="30" src="/kt_res/images/portal01.png"/> 一键上网 </span>
                    </div>
                    
                    <div class="portal-btn-group" style="top: 200px;">
				 		<span class="portal-btn"  onclick="callWechatBrowser()"> <img width="30" src="/kt_res/images/portal03.png"/> 微信认证 </span>
					</div>
					<div class="portal-btn-group" style="top: 300px;">
                        <span class="portal-btn duanxin"> <img width="30" src="/kt_res/images/portal02.png"/> 短信认证 </span>
                    </div>

                    <div class="portal-btn-group" style="top: 440px;">
                        <input type="checkbox" checked="true" /> 我已阅读并同意<a href="javascript:;" id="tiaokuanlink">上网服务条款</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-clickable">
            <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
        </div>
    </div>
    <div id="tiaokuan">
        <div style="border-bottom: 1px solid #ccc; height: 50px;"><span style="float: left; font-size: 30px; line-height: 50px; padding-left: 20px;"><a id="back" href="javascript:;" style="text-decoration: none; color: #777;">&lt;</a></span></div>
        <div style=" padding: 10px 20px;">
            <p style="text-align: center;"> 上网条款 </p>
            <p>1、本网络为免费网络，不向用户个人收取任何费用。</p>
            <p>2、用户上网时请遵守国家相关法律，禁止访问非法、不良网站。</p>
            <p>3、严禁散布、传播违法信息。若因用户在使用本网络时的行为产生危害公共安全、损害公共利益、侵害他人正当权益等后果，由用户自行承担相应的法律责任。</p>
            <p>4、为确保网络安全，用户登录网络所使用的手机号码将作为实名认证的依据。</p>
        </div>
    </div>
	<style type="text/css">
		.portal-dialog{
			position: absolute;
			left:50%;
			top:1%;
			z-index:1000;
			min-width: 250px;
			width: 300px;
			height: 250px;
			-webkit-transform: translate(-50%,0);
			transform:translate(-50%,0);
			padding: 15px 10px;
			background-color: #fff;
			border:1px solid #ccc;
			color: #949494;
		}
		.portal-dialog.disclaimer{
			height: 350px;
		}
		.portal-dialog h6{
			font-size: 24px;
			margin-top: 15px;
			margin-bottom: 15px;
		}
		.portal-dialog hr{
			width: 385px;
			height: 1px;
			border: none;
			border-top: 1px solid #e6e6e6;
			padding-top: 5px;
			align:center;
			margin-left: 50px;
		}
		.portal-dialog.warning{
			text-align: center;
		}
		.portal-dialog.warning p{
			font-size: 18px;
			padding-bottom: 60px;
			line-height: 1.5;
		}
		.portal-dialog.disclaimer{
		height: 350px;
		}
		.portal-dialog.disclaimer h6{
			text-align: center;
		}
		.portal-input-line{
			text-align: left;
			width: 100%;
			height: 65px;
		}
		.portal-input-line hr{
			clear: both;
			display: block;
			width: 250px;
			height: 1px;
			border: none;
			border-top: 1px solid #e6e6e6;
		}
		.phoneIcn{
			display: block;
			float: left;
		 	margin-top: 25px;
		    margin-left: 30px;
			width: 27px;
			height: 27px;
			background: url("/img/mobile/iphone.png") no-repeat left top;
			background-size: auto 27px;
		}
		.codeIcn{
			display: block;
			float: left;
		    margin-top: 25px;
		    margin-left: 30px;
			width: 27px;
			height: 27px;
			background: url("/img/mobile/code.png") no-repeat left top;
			background-size: auto 27px;
		}
		.clearfix:after {
			visibility: hidden;
			display: block;
		 	font-size: 0;
			content: " ";
			clear: both;
			height: 0;
		}
		.clearfix{
			*zoom:1;
		}
		.portal-input{
			float: left;
			width: 200px;
			height: 30px;
			line-height: 30px;
			text-indent: 8px;
			font-size: 18px;
			font-family: "Microsoft Yahei";
			border: none;
			margin-bottom: 0px;
			margin-top: 25px;
		}
		.portal-input.J_code{
			position: relative;
		}
		.portal-input.short{
			width: 200px;
		  	margin-right: 25px;
		}
		.portal-code-btn{
			position: absolute;
			width: 153px;
			height: 49px;
			line-height: 49px;
			color:#f57776;
	  		font-size: 18px;
	  		text-decoration: none;
	  		text-align: center;
			border: 2px solid #f57776;
			-webkit-border-radius: 15px;
			-moz-border-radius: 15px;
			-khtml-border-radius: 15px;
			border-radius: 15px;
			margin-top: 5px;
		}
		.portal-code-btn:active{
			-webkit-box-shadow: 0px 3px 6px rgba(0,0,0,.9);
			-moz-box-shadow: 0px 3px 6px rgba(0,0,0,.9);
			-ms-box-shadow: 0px 3px 6px rgba(0,0,0,.9);
			-o-box-shadow: 0px 3px 6px rgba(0,0,0,.9);
		}
		.portal-verify{
			height: 85px;
			width: 100%;
		    text-align: center;
		}
		.portal-sub{
			margin-top: 10px;
			background-color:#f57776;
			color: #fff;
			width: 250px;
			height: 50px;
			font-size: 24px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			-khtml-border-radius: 5px;
			border-radius: 5px;
			border: none;
		}
		.portal-del{
			position: absolute;
			right: 10px;
			top:10px;
			width: 18px;
			height: 18px;
			background: url("/img/mobile/portal-del.png") no-repeat left top;
			background-size: auto 16px;
			cursor: pointer;
		}
		.error-bar{
			font-size: 11px;
			color:#ff0000;
			text-indent: 58px;
			clear: both;
		   .hide{
				display: none
	   		}
		}
	</style>

	<script type="text/javascript" src="/kt_res/css/portal.js"></script> 
	<div class="portal-dialog msg hide" style="display:none;">
	<form action="" id="send_code_form">
		<p class="portal-input-line">
		<span class="phoneIcn"></span>
		<input name="mobile" id="mobile" placeholder="请输入手机号" class="portal-input J_mobile" data-error="请输入正确的手机号" type="tel">
		</p><hr>
		<p></p>

		<p class="portal-input-line">
		<span class="codeIcn clearfix"></span>
		<input id="verify_code" name="verify_code" placeholder="请输入验证码" class="portal-input short J_code" data-error="请输入正确的验证码" type="tel">
		<a href="javascript:void(0)" id="send_code_btn" class="portal-code-btn J_getCode">获取验证码</a>
		</p><hr>
		<p></p>
	</form>

	<form action="/wifidog/phone_auth" id="on_line_form" method="post" onkeydown="if(event.keyCode==13){return false;}">
		<div class="portal-verify">
			<button type="button" class="portal-sub J_portal-sub" onclick="callPhoneNet()">验证手机号</button>
			<input name="type" value="4" type="hidden">
			<input name="mobile" id="verify_mobile" type="hidden">
			<input name="verify_code" id="code" type="hidden">
		</div>
	</form>
	
	<span class="portal-del"></span>
	</div>
    
    </body>
</html>
