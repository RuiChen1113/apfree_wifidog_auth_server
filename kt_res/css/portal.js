
function authSlide(){
	//var wi =  $(".portal-line.fixed").outerWidth()- $(".del").outerWidth();
	//$(".auth-btn h6").css("width",wi);
	var len = $(".auth-way").length;
	var	width = $(".auth-way").outerWidth(true);
	var l = ($(".auth-slide").outerWidth()-(len * width))/2+10;
	$(".auth-slide").css("left",l);
}

var portal = {
	init:function(){
		this.initBasic();
		//this.slide();
		this.authVerify();
		this.authShow();
		this.getMobileCode();
		this.varifyCode();
		this.disclaimer();
		this.authPick();
		//authSlide();
		
	},
	initBasic:function(){
		$(".portal-line.auth.fixed").css({
			"position":"fixed",
			"right":0,
			"bottom":0
		});
	},

	authShow:function(){
		$(".auth-way.msg").on("click",function(){
			if($(".argee-clause input").not(":checked").length){
				// 请先同意上网免责条款!
				$(".portal-dialog.warning").add(".portal-mask").removeClass("hide");
				$(".portal-dialog.warning").css({
					"top":$(document).scrollTop()+$(window).height()/2,
					"margin-top":parseInt(-$(".portal-dialog.warning").outerHeight()/2),
					//"left":$(document).screenLeft()+$(window).width()/2
					"left":($(document).scrollLeft()+ document.body.scrollWidth)/2
				});
				return;
			}
			$("body").append($(".portal-dialog.msg"));
			$(".portal-dialog.msg").add(".portal-mask").removeClass("hide");
			$(".portal-dialog.msg").css({
				"top":$(document).scrollTop()+$(window).height()/2,
				"margin-top":parseInt(-$(".portal-dialog.msg").outerHeight()/2),
				"left":($(document).scrollLeft()+ document.body.scrollWidth)/2
			});
		});
		$(".auth-way.weixin").on("click",function(){
			if($(".argee-clause input").not(":checked").length){
				// 请先同意上网免责条款!
				$(".portal-dialog.warning").add(".portal-mask").removeClass("hide");
				$(".portal-dialog.warning").css({
					"top":$(document).scrollTop()+$(window).height()/2,
					"margin-top":parseInt(-$(".portal-dialog.warning").outerHeight()/2),
					"left":($(document).scrollLeft()+ document.body.scrollWidth)/2
				});
				return;
			}
			$(".portal-dialog.weixin").add(".portal-mask").removeClass("hide");
			$(".portal-dialog.weixin").css({
				"top":$(document).scrollTop()+$(window).height()/2,
				"margin-top":parseInt(-$(".portal-dialog.weixin").outerHeight()/2),
				"left":($(document).scrollLeft()+ document.body.scrollWidth)/2
			});
		});
		$(".auth-way.internet").on("click",function(){
			if($(".argee-clause input").not(":checked").length){
				// 请先同意上网免责条款!
				$(".portal-dialog.warning").add(".portal-mask").removeClass("hide");
				$(".portal-dialog.warning").css({
					"top":$(document).scrollTop()+$(window).height()/2,
					"margin-top":parseInt(-$(".portal-dialog.warning").outerHeight()/2),
					"left":($(document).scrollLeft()+ document.body.scrollWidth)/2
				});
				return;
			}	
			location.href = "/login/auth?type=1";
		});
		$(".auth-way.weibo").on("click",function(){
			if($(".argee-clause input").not(":checked").length){
				// 请先同意上网免责条款!
				$(".portal-dialog.warning").add(".portal-mask").removeClass("hide");
				$(".portal-dialog.warning").css({
					"top":$(document).scrollTop()+$(window).height()/2,
					"margin-top":parseInt(-$(".portal-dialog.warning").outerHeight()/2),
					"left":($(document).scrollLeft()+ document.body.scrollWidth)/2
				});
				return;
			}
			location.href = $("#auth_url").val();	
		});
		$(".auth-way.time").on("click",function(){
			if($(".argee-clause input").not(":checked").length){
				// 请先同意上网免责条款!
				$(".portal-dialog.warning").add(".portal-mask").removeClass("hide");
				$(".portal-dialog.warning").css({
					"top":$(document).scrollTop()+$(window).height()/2,
					"margin-top":parseInt(-$(".portal-dialog.warning").outerHeight()/2),
					"left":($(document).scrollLeft()+ document.body.scrollWidth)/2
				});
				return;
			}
			location.href = "/login/auth?type=1";
		});
	},
	authVerify:function(){
		var that = this;
		$(".J_portal-sub").on("click",function(e){
			e.preventDefault();
			var mobile = $(".J_mobile").val();
			that.clearError($(".J_mobile,.J_code"));
			if(!that.checkMobile(mobile)){
				that.errorfn($(".J_mobile"));
			}
			if($(".J_code").val().length === 0){
				that.errorfn($(".J_code"));
			}else {
				$.ajax({
					url:"/login/verify_code",
					type:"get",
					dataType:"json",
					data:{"verify_code": $(".J_code").val()},
					success:function(res){
						if(res.code != 200){
							alert(res.message);
							return;
						}else {
							$("#on_line_form").submit();
						}
					}
				});
			}
		});
		// 关闭窗口
		$(".portal-del").on("click",function(){
			$(this).closest(".portal-dialog").add(".portal-mask").addClass("hide");
		});
		// 确定按钮
		$(".confirmBtn").on("click",function(){
			$(this).closest(".portal-dialog").add(".portal-mask").addClass("hide");
			$("input[type='checkbox']").prop("checked",true);
		});
	},
	disclaimer:function(){
		var $agreeClause = $(".argee-clauselable");
		 $agreeClause.find("a").on("click",function(){
			$(".portal-dialog.disclaimer").add(".portal-mask").removeClass("hide");
			$(".portal-dialog.disclaimer").css({
				"top":$(document).scrollTop()+$(window).height()/2,
				"margin-top":parseInt(-$(".portal-dialog.disclaimer").outerHeight()/2),
				"left":($(document).scrollLeft()+ document.body.scrollWidth)/2
			});
		 });
	},
	getMobileCode:function(){
		var $getCode = $(".J_getCode"),
			that = this;
		
		$getCode.on("click",function(){
			var $this = $(this),
				$mobile = $(".J_mobile"),
				mobile = $mobile.val();
			that.clearError($(".J_mobile"));
			if (!that.checkMobile(mobile)) {
				that.errorfn($(".J_mobile"));
				return;
			}
			if ($getCode.html() == "获取验证码"){
				that.countDown($this);
				$.ajax({
					url:"/login/send_code",
					type:"post",
					dataType:"json",
					data:{"mobile": mobile},
					success:function(res){
						if(res.code != 200){
							alert(res.message);
						}else{
							$("#verify_mobile").val(mobile);
						}
					}
				});
			}
		
			// ajax
			
			
		});
	
	},
	varifyCode: function(){
		$("#verify_code").on("keyup", function(e) {
		        var verify_code = $(this).val();
		        var verify_mobile = $('#mobile').val();
		    	if (verify_code.length == 6) {
		   		 $(".error-bar").html('');
		    		$("#code").val(verify_code);
		    		$.ajax({
		    			url:"/login/verify_code",
		    			type:"get",
		    			dataType:"json",
		    			data:{"verify_code": verify_code},
		    			success:function(res){
		    				if (res.code != 200){
		    					alert(res.message);
		    				}else {
		    					$("#code").val(verify_code);
		    					$("#verify_mobile").val(verify_mobile);
		    				}
		    			}
		    		});
		    	}
		    });
		
	},
	authPick:function(){

		$(".J_show-auth").on("click",function(e){
			authSlide();
			$(".portal-line.fixed").css({
				"padding":0
			})
			$(".pack-up-btn").hide();
			var $this = $(this);
			//$this.removeClass("left").addClass("right").text("");
			if($this.closest(".portal-line").hasClass("fixed")){
				var opacityO = .5;
			}
			$(".auth-btn").removeClass("hide")
			$this.siblings(".auth-btn").clearQueue().animate({
				left:"5px",
				opacity:opacityO
			},300,function(){
				$(".auth-btn").css({
					background:"rgba(0,0,0,.5)",
					opacity:1
				})
			})
		});

		$(".del").on("click",function(e){
			var opacityZ = 0;
			var height=$(".auth-btn").height();
			$(".auth-btn").clearQueue().animate({
				left:$(".auth-btn").width(),
				opacity:opacityZ
			},300,function(){
				$(".auth-btn").addClass("hide")
				if(! $(".auth-btn").is(":animated") ){ //判断元素是否处于动画状态
					//如果当前没有进行动画，则添加
					$(".pack-up-btn").fadeIn();
				}
			})

		});
	},
	// 倒计时
	countDown: function($obj) {
		var time = 60;
		$obj.addClass('disabled').text(time + '秒再次获取');
		timerFlag = false;
		timer = setInterval(function() {
			time -= 1;
			if (time === 0) {
				$obj.removeClass('disabled').text('获取验证码');
				clearInterval(timer);
				timerFlag = true;
			} else {
				$obj.text(time + '秒再次获取');
			}
		}, 1000);
	},
	errorfn:function($obj){
		var errorText = $obj.data("error");
        if(!$obj.parent().find('.error-bar').length){
            $obj.parent().append('<p class="error-bar">'+errorText+'</p>');
        }
	},
	clearError:function($obj){
		 $obj.parent().find('.error-bar').remove();
	},
	checkMobile:function(val){
		var regexp = /^1[3|4|5|7|8]\d{9}$/;
		if (!regexp.test(val)) {
			return false;
		}
		return true;
	}
};
portal.init();