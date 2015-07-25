<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
    $P = APP_PATH . "/phpcms/templates/default/content/";
?>
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<style type="text/css">
body {
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
}
</style>
<link href="<?php echo $P;?>css.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
<script src="<?php echo JS_PATH;?>swfobject.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.slide.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>fulian.js"></script>
<script src="<?php echo JS_PATH;?>swfobject.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>jq.SlideVer.js" type="text/javascript"></script>
</head>

<body>
<table width="1092" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="153" valign="top" style="background:url(<?php echo $P;?>images/nmgfl_r2_c2.jpg) repeat-y;"><table width="1092" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="43" height="355">&nbsp;</td>
        <td width="1013" height="355" align="center" valign="top"><table width="1006" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
<DIV class="head_ad">
  <DIV id="adv_forum_home_full"></DIV>
</DIV>    
<script src="<?php echo JS_PATH;?>loadalladv.js" type="text/javascript"></script>          
            </td>
          </tr>
        </table>
          <table width="1012" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="16" height="43" style="background:url(<?php echo $P;?>images/nmgfl_r1_c3.jpg) repeat-x;">&nbsp;</td>
            <td width="738" align="left" class="p12hei" style="background:url(<?php echo $P;?>images/nmgfl_r1_c3.jpg) repeat-x;"><?php echo date('Y年m月d日',time());?></td>
            <td width="258" align="left" class="p12hei" style="background:url(<?php echo $P;?>images/nmgfl_r1_c3.jpg) repeat-x;"><a href="mailto:nmgfuyun@163.com" style="color:black" id="contact">联系我们</a> | <a href="#" style="color:black" id="tfv">收藏本站</a> | <a href="#" style="color:black" id="tindex">设为首页</a> | <a href="#" style="color:black" id="tmn">蒙文网站</a></td>
          </tr>
        </table>
          <table width="1004" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="1004">
                <!--<img src="<?php echo $P;?>images/banner.jpg" width="1005" height="203" />-->
            <div id="flashBanner"></div>

            <script type="text/javascript">
            var flashvars = {
              wmode: 'opaque'       
            };
            var params = {
              menu: "false",
              scale: "noScale",
              allowFullscreen: "true",
              allowScriptAccess: "always",
              bgcolor: "#FFFFFF"
            };  
            swfobject.embedSWF("<?php echo $P;?>images/flash.swf", "flashBanner", 1005, 203, "9.0.0", "expressInstall.swf ", flashvars, params);
            </script>                
              </td>
            </tr>
          </table>
          <table width="1004" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="11"><img src="<?php echo $P;?>images/nmgfl_r3_c3.jpg" width="11" height="56" /></td>
              <td width="985" style="background:url(<?php echo $P;?>images/nmgfl_r13_c3.jpg) repeat-x;"><table width="985" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="54">
                    <a href="<?php echo APP_PATH;?>">
                    <img src="<?php echo $P;?>images/nmgfl_r4_c5.jpg" width="54" height="47" /></a>
                  </td>
                  <td width="931"><table width="931" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="right"><table width="900" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="120" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['1']['url'];?>" class="p12bai">内蒙古妇联</a></td>
                          <td width="110" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['2']['url'];?>" class="p12bai">图文信息</a></td>
                          <td width="100" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['3']['url'];?>" class="p12bai">最新公告</a></td>
                          <td width="110" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['4']['url'];?>" class="p12bai">调研思考</a></td>
                          <td width="110" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['5']['url'];?>" class="p12bai">维权服务</a></td>
                          <td width="110" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['6']['url'];?>" class="p12bai">妇女发展</a></td>
                          <td width="110" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['7']['url'];?>" class="p12bai">宣传教育</a></td>
                          <td align="left" class="p12bai"><a href="<?php echo $CATEGORYS['8']['url'];?>" class="p12bai">组织建设</a></td>                          
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td align="center"><img src="<?php echo $P;?>images/nmgfl_r5_c8.jpg" width="879" height="8" /></td>
                    </tr>
                    <tr>
                      <td align="right"><table width="900" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="119" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['9']['url'];?>" class="p12bai">两纲实施</a></td>
                          <td width="112" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['90']['url'];?>" class="p12bai">机关党建</a></td>
                          <td width="101" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['10']['url'];?>" class="p12bai">儿童工作</a></td>
                          <td width="110" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['11']['url'];?>" class="p12bai">巾帼家政</a></td>
                          <td width="108" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['12']['url'];?>" class="p12bai">网上家长学校</a></td>
                          <td width="111" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['13']['url'];?>" class="p12bai">团体会员</a></td>
                          <td width="109" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['14']['url'];?>" class="p12bai">政务公开</a></td>
                          <td width="130" align="left" class="p12bai"><a href="<?php echo $CATEGORYS['15']['url'];?>" class="p12bai">精彩专题</a></td>                          
                        </tr>
                      </table></td>
                    </tr>
                  </table></td>
                </tr>
              </table></td>
              <td width="8" align="right"><img src="<?php echo $P;?>images/nmgfl_r3_c10.jpg" width="8" height="56" /></td>
            </tr>
          </table>
          <table width="1004" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="367" height="33" align="left" class="p12hei" style="background:url(<?php echo $P;?>images/nmgfl_r4_c7.jpg) repeat-x;">今天是：
                <script src="<?php echo $P;?>images/clock.js"></script>
              </td>
              <td width="255" align="left" valign="top" class="p12hei" style="background:url(<?php echo $P;?>images/nmgfl_r4_c7.jpg) repeat-x;">
                <iframe src="http://m.weather.com.cn/m/pn4/weather.htm?id=101080101T " width="255" height="17" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
              </td>
              <td width="94" align="left" class="p12hei" style="background:url(<?php echo $P;?>images/nmgfl_r4_c7.jpg) repeat-x;"><img src="<?php echo $P;?>images/index_r3_c5.jpg" width="94" height="33" /></td>
              <td width="144" align="left" class="p12hei" style="background:url(<?php echo $P;?>images/nmgfl_r4_c7.jpg) repeat-x;"><label for="textfield"></label>


              <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
              <input type="hidden" name="m" value="search"/>
              <input type="hidden" name="c" value="index"/>
              <input type="hidden" name="a" value="init"/>
              <input type="hidden" name="typeid" value="1" id="typeid"/>
              <input type="hidden" name="siteid" value="1" id="siteid"/>
              <input type="text" name="q" id="textfield" />

              </td>
              <td width="144" align="left" class="p12hei" style="background:url(<?php echo $P;?>images/nmgfl_r4_c7.jpg) repeat-x;">
                <!--
                <img src="<?php echo $P;?>images/an.jpg" width="50" height="20" />
                -->
                <input type="submit" class="searchsubmit"  value=" "/>
              </form>
              </td>
            </tr>
          </table>
          <table width="900" border="0" cellspacing="0" cellpadding="0">
          <?php if ($catid == 1):?>
          <tr>
              <td><img src="<?php echo $P;?>images/nmgfl_r9_c3.jpg" width="1006" height="131" /></td>
          </tr>
          <?php elseif($catid == 2):?>
          <tr>
              <td><img src="<?php echo $P;?>images/twxx_r2_c2.jpg" width="1006" height="87" /></td>
          </tr>         
          <?php elseif($catid == 5):?>
          <tr>
              <td>
                
            <div id="wq"></div>

            <script type="text/javascript">
            var flashvars = {
              wmode: 'opaque'       
            };
            var params = {
              menu: "false",
              scale: "noScale",
              allowFullscreen: "true",
              allowScriptAccess: "always",
              bgcolor: "#FFFFFF"
            };  
            swfobject.embedSWF("<?php echo $P;?>images/wqfw.swf", "wq", 1003, 131, "9.0.0", "expressInstall.swf ", flashvars, params);
            </script> 

              </td>
          </tr>                           
          <?php elseif($catid == 6):?>
          <tr>
              <td>
                
<div id="wq"></div>

            <script type="text/javascript">
            var flashvars = {
              wmode: 'opaque'       
            };
            var params = {
              menu: "false",
              scale: "noScale",
              allowFullscreen: "true",
              allowScriptAccess: "always",
              bgcolor: "#FFFFFF"
            };  
            swfobject.embedSWF("<?php echo $P;?>images/3.swf", "wq", 1003, 131, "9.0.0", "expressInstall.swf ", flashvars, params);
            </script> 

              </td>
          </tr>    
          <?php elseif($catid == 7):?>
          <tr>
              <td><img src="<?php echo $P;?>images/xcjy_r2_c12.jpg " width="1006" height="131" /></td>
          </tr>  
          <?php elseif($catid == 8):?>
          <tr>
              <td><img src="<?php echo $P;?>images/zzjs_r2_c2.jpg" width="1006" height="131" /></td>
          </tr>   
          <?php elseif($catid == 9):?>
          <tr>
              <td><img src="<?php echo $P;?>images/lgss_r2_c2.jpg" width="1006" height="131" /></td>
          </tr> 
          <?php elseif($catid == 10):?>
          <tr>
              <td><img src="<?php echo $P;?>images/rtgz_r2_c2.jpg" width="1006" height="131" /></td>
          </tr> 
          <?php elseif($catid == 12):?>
          <tr>
              <td><img src="<?php echo $P;?>images/rtgz_r2_c2.jpg" width="1006" height="131" /></td>
          </tr>   
          <?php elseif($catid == 13):?>
          <tr>
              <td></td>
          </tr>                  
          <?php else:?> 
            <tr>
              <td><img src="<?php echo $P;?>images/index_r6_c2.jpg" width="1006" height="10" /></td>
            </tr>
            <tr>
              <td>
            <!--    
            <div id="flashBanner2"></div>

            <script type="text/javascript">
            var flashvars = {
              wmode: 'opaque'       
            };
            var params = {
              menu: "false",
              scale: "noScale",
              allowFullscreen: "true",
              allowScriptAccess: "always",
              bgcolor: "#FFFFFF"
            };  
            //swfobject.embedSWF("<?php echo $P;?>images/sy.swf", "flashBanner2", 1005, 142, "9.0.0", "expressInstall.swf ", flashvars, params);
            </script>  
			<a href="http://www.nmwomen.org.cn/index.php?m=content&c=index&a=lists&catid=118">
			<img src="<?php echo $P;?>images/banner_zt.jpg" width="1005" />
			</a>
			-->
			
      <div id="gallery">
            <div class="FocusPic2" style="overflow:hidden;">
              <div class="content" id="main-slide">
                    <div class="changeDiv">  
						<a href="http://www.nmwomen.org.cn/index.php?m=content&c=index&a=lists&catid=123">
							<img src="<?php echo $P;?>images/banner_zt.jpg" width="1005" />
						</a>
						<a href="http://www.nmwomen.org.cn/index.php?m=content&c=index&a=lists&catid=118">
							<div id="flashBanner2"></div>
						</a>
            <a href="http://www.nmwomen.org.cn/index.php?m=content&c=index&a=lists&catid=128">
              <img src="<?php echo $P;?>images/zuimei.jpg" width="1005" />
            </a>            

                    </div>
                </div> 
          </div>
            <script type="text/javascript">
            var flashvars = {
              wmode: 'opaque'       
            };
            var params = {
              menu: "false",
              scale: "noScale",
              allowFullscreen: "true",
              allowScriptAccess: "always",
              bgcolor: "#FFFFFF"
            };  
            swfobject.embedSWF("<?php echo $P;?>images/sy.swf", "flashBanner2", 1005, 142, "9.0.0", "expressInstall.swf ", flashvars, params);
            </script>  		  
<script type="text/javascript"> 
$(function(){
  new slide("#main-slide","cur",1005,140,1);//焦点图
})  
</script>

		  
              </td>
            </tr>
            <tr>
              <td><img src="<?php echo $P;?>images/index_r6_c2.jpg" width="1006" height="10" /></td>
            </tr>
          <?php endif;?>
          </table></td>
        <td width="36">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>