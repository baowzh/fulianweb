function _hide(id)
{
	console.log($("#"+id));
	$("#"+id).css('color','red');
}

$(function(){
  $("#tpsubmit").click(function(){
     alert('感谢您的投票！');
     $("#vform").submit();
  });
});

$(function(){
  $("#tbtn1").mouseover(function(){
      $("#tabzx0").css('display','none');
      $("#tabzx1").css('display','block');
      $("#tabzx2").css('display','none');
  });
  $("#tbtn1").mouseleave(function(){
      $("#tabzx0").css('display','block');
      $("#tabzx1").css('display','none');
      $("#tabzx2").css('display','none');
  });  
  $("#tbtn2").mouseover(function(){
      $("#tabzx0").css('display','none');
      $("#tabzx1").css('display','none');
      $("#tabzx2").css('display','block');
  });
  $("#tbtn2").mouseleave(function(){
      $("#tabzx0").css('display','block');
      $("#tabzx1").css('display','none');
      $("#tabzx2").css('display','none');
  });  

  $("#bxxxb1").mouseover(function(){
      $("#xxxb0").css('display', 'none');
      $("#xxxb1").css('display', 'block');
      $("#xxxb2").css('display', 'none');
  });

  $("#bxxxb1").mouseleave(function(){
      $("#xxxb0").css('display', 'block');
      $("#xxxb1").css('display', 'none');
      $("#xxxb2").css('display', 'none');
  });  

  $("#bxxxb2").mouseover(function(){
      $("#xxxb0").css('display', 'none');
      $("#xxxb1").css('display', 'none');
      $("#xxxb2").css('display', 'block');
  });

  $("#bxxxb2").mouseleave(function(){
      $("#xxxb0").css('display', 'block');
      $("#xxxb1").css('display', 'none');
      $("#xxxb2").css('display', 'none');
  });   

  $("#bjg1").mouseover(function(){
      $("#jg0").css('display', 'none');
      $("#jg1").css('display', 'block');
      $("#jg2").css('display', 'none');
  });

  $("#bjg1").mouseleave(function(){
      $("#jg0").css('display', 'block');
      $("#jg1").css('display', 'none');
      $("#jg2").css('display', 'none');
  });

  $("#bjg2").mouseover(function(){
      $("#jg0").css('display', 'none');
      $("#jg1").css('display', 'none');
      $("#jg2").css('display', 'block');
  });

  $("#bjg2").mouseleave(function(){
      $("#jg0").css('display', 'block');
      $("#jg1").css('display', 'none');
      $("#jg2").css('display', 'none');
  });  


});


$(function(){

    $("#b1").mouseover(function(){
    	$("#t1").css('display','block');
    	$("#t2").css('display','none');
    	$("#t3").css('display','none');
    	$("#t4").css('display','none');
    });

    $("#b2").mouseover(function(){
    	$("#t2").css('display','block');
    	$("#t1").css('display','none');
    	$("#t3").css('display','none');
    	$("#t4").css('display','none');
    });    

    $("#b3").mouseover(function(){
    	$("#t3").css('display','block');
    	$("#t2").css('display','none');
    	$("#t1").css('display','none');
    	$("#t4").css('display','none');
    });    

    $("#b4").mouseover(function(){
    	$("#t4").css('display','block');
    	$("#t2").css('display','none');
    	$("#t3").css('display','none');
    	$("#t1").css('display','none');
    });    

    $("#b5").mouseover(function(){
    	$("#t5").css('display','block');
    	$("#t6").css('display','none');
    	$("#t7").css('display','none');
    });      

    $("#b6").mouseover(function(){
    	$("#t6").css('display','block');
    	$("#t5").css('display','none');
    	$("#t7").css('display','none');
    }); 

    $("#b7").mouseover(function(){
    	$("#t7").css('display','block');
    	$("#t6").css('display','none');
    	$("#t5").css('display','none');
    });     

    $("#b8").mouseover(function(){
    	$("#t8").css('display','block');
    	$("#t9").css('display','none');
    	$("#ta").css('display','none');
    });    

    $("#b9").mouseover(function(){
    	$("#t9").css('display','block');
    	$("#t8").css('display','none');
    	$("#ta").css('display','none');
    });      

    $("#ba").mouseover(function(){
    	$("#ta").css('display','block');
    	$("#t9").css('display','none');
    	$("#t8").css('display','none');
    });   

    $("#bb").mouseover(function(){
    	$("#tb").css('display','block');
    	$("#tc").css('display','none');
    	$("#td").css('display','none');
    }); 

    $("#bc").mouseover(function(){
    	$("#tc").css('display','block');
    	$("#td").css('display','none');
    	$("#tb").css('display','none');
    });

    $("#be").mouseover(function(){
    	$("#td").css('display','block');
    	$("#tc").css('display','none');
    	$("#tb").css('display','none');
    });         


});




(function($){



  $.fn.kxbdMarquee = function(options){

    var opts = $.extend({},$.fn.kxbdMarquee.defaults, options);

    

    return this.each(function(){

      var $marquee = $(this);//滚动元素容器

      var _scrollObj = $marquee.get(0);//滚动元素容器DOM

      var scrollW = $marquee.width();//滚动元素容器的宽度

      var scrollH = $marquee.height();//滚动元素容器的高度

      var $element = $marquee.children(); //滚动元素

      var $kids = $element.children();//滚动子元素

      var scrollSize=0;//滚动元素尺寸

      var _type = (opts.direction == 'left' || opts.direction == 'right') ? 1:0;//滚动类型，1左右，0上下



      //防止滚动子元素比滚动元素宽而取不到实际滚动子元素宽度

      $element.css(_type?'width':'height',10000);

      //获取滚动元素的尺寸

      if (opts.isEqual) {

        scrollSize = $kids[_type?'outerWidth':'outerHeight']() * $kids.length;

      }else{

        $kids.each(function(){

          scrollSize += $(this)[_type?'outerWidth':'outerHeight']();

        });

      }

      //滚动元素总尺寸小于容器尺寸，不滚动

      if (scrollSize<(_type?scrollW:scrollH)) return; 

      //克隆滚动子元素将其插入到滚动元素后，并设定滚动元素宽度

      $element.append($kids.clone()).css(_type?'width':'height',scrollSize*2);

      

      var numMoved = 0;

      function scrollFunc(){

        var _dir = (opts.direction == 'left' || opts.direction == 'right') ? 'scrollLeft':'scrollTop';

        if (opts.loop > 0) {

          numMoved+=opts.scrollAmount;

          if(numMoved>scrollSize*opts.loop){

            _scrollObj[_dir] = 0;

            return clearInterval(moveId);

          } 

        }

        if(opts.direction == 'left' || opts.direction == 'up'){

          var newPos = _scrollObj[_dir] + opts.scrollAmount;

          if(newPos>=scrollSize){

//newPos -= scrollSize;

newPos = newPos - scrollSize;

          }

          _scrollObj[_dir] = newPos;

        }else{

          var newPos = _scrollObj[_dir] - opts.scrollAmount;

          if(newPos<=0){

            newPos += scrollSize;

          }

          _scrollObj[_dir] = newPos;

        }

      };

      //滚动开始

      var moveId = setInterval(scrollFunc, opts.scrollDelay);

      //鼠标划过停止滚动

      $marquee.hover(

        function(){

          clearInterval(moveId);

        },

        function(){

          clearInterval(moveId);

          moveId = setInterval(scrollFunc, opts.scrollDelay);

        }

      );

      

      //控制加速运动

      if(opts.controlBtn){

        $.each(opts.controlBtn, function(i,val){

          $(val).bind(opts.eventA,function(){

            opts.direction = i;

            opts.oldAmount = opts.scrollAmount;

            opts.scrollAmount = opts.newAmount;

          }).bind(opts.eventB,function(){

            opts.scrollAmount = opts.oldAmount;

          });

        });

      }

    });

  };

  $.fn.kxbdMarquee.defaults = {

    isEqual:true,//所有滚动的元素长宽是否相等,true,false

    loop: 0,//循环滚动次数，0时无限

    direction: 'left',//滚动方向，'left','right','up','down'

    scrollAmount:1,//步长

    scrollDelay:30,//时长

    newAmount:3,//加速滚动的步长

    eventA:'mousedown',//鼠标事件，加速

    eventB:'mouseup'//鼠标事件，原速

  };

  

  $.fn.kxbdMarquee.setDefaults = function(settings) {

    $.extend( $.fn.kxbdMarquee.defaults, settings );

  };

  

})(jQuery);


$(function(){
  $("#tfv").click(function(){
    window.external.addFavorite('http://www.nmwomen.org.cn','内蒙古妇女网');
    //alert('加入收藏');
  });




$("#tindex").click(function(){
        var url = this.href;
        try {
            this.style.behavior = "url(#default#homepage)";
            this.setHomePage(url);
        } catch (e) {
            if (window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                } catch (e) {
                    alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
                    return false;
                }
                var prefs = Components.classes["@mozilla.org/preferences-service;1"].getService(Components.interfaces.nsIPrefBranch);
                prefs.setCharPref('browser.startup.homepage',url);
            }
        }
        return false;
    });


});
