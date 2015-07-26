<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><table width="1092" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="116" valign="top" style="background:url(<?php echo $P;?>images/nmgfl_r2_c2.jpg) repeat-y;"><table width="1092" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="43" height="116">&nbsp;</td>
        <td width="1013" height="116" align="center" valign="top"><table width="1000" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
          <tr>
            <td width="1000"><img src="<?php echo $P;?>images/nmgfl_r25_c3.jpg" width="1001" height="27" /></td>
          </tr>
          <tr>
            <td height="89" align="right" style="background:url(<?php echo $P;?>images/nmgfl_r26_c10.jpg) repeat-x;"><table width="1000" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="828" height="89" align="center" class="p12xibai"><a class="
                  p12xibai" href="http://www.miibeian.gov.cn">蒙ICP备 06006126号-1 </a>版权所有：内蒙古自治区妇女联合会<br />
                  copyright@2008inner mongolia women's federation all rights reserved<br />
                  <script src="http://s20.cnzz.com/stat.php?id=4705470&web_id=4705470&online=1&show=line" language="JavaScript"></script>
</td>
                <td width="172" valign="bottom"><img src="<?php echo $P;?>images/nmgfl_r27_c23.jpg" width="170" height="60" /></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="36">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>


<!--

<div class="footer">
<p class="info">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a> |  
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<a href="<?php echo APP_PATH;?>index.php?m=link" target="_blank">友情链接</a>
<br />
Powered by <strong><a href="http://www.phpcms.cn" target="_blank">PHPCMS</a></strong> <em><?php echo get_pc_version(1);?></em> &copy; 2011 <img src="<?php echo IMG_PATH;?>copyright.gif"/><?php echo tjcode();?><?php echo runhook('glogal_footer')?>
</p>
</div>
<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script>
</body>
</html>

-->