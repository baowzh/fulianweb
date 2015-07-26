<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><table width="1092" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="153" valign="top" style="background:url(<?php echo $P;?>images/nmgfl_r2_c2.jpg) repeat-y;"><table width="1092" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="43" height="355">&nbsp;</td>
        <td width="1013" height="355" align="center" valign="top">
          <table width="1004" border="0" cellspacing="0" cellpadding="0" style=" padding-top:10px;" valign="top">
          <tr>
            <td width="217" valign="top">
              <table width="217" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="425" align="center" valign="top" style="background:url(<?php echo $P;?>images/nmgfl_r13_c10.jpg) repeat-x;">


                  <table width="217" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;" valign="top">
                  <tr>
                    <td align="center" class="p14hong">内蒙古妇联</td>
                  </tr>
                </table>


                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=32e7aefdffb16f71d7ea3722f3de461a&action=lists&catid=1&thumb=0&order=listorder+asc&num=100\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','thumb'=>'0','order'=>'listorder asc','limit'=>'100',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>                
                  <table width="200" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="18" align="center">· </td>
                      <td width="182" align="left" class="p12hei">
                        <a href="<?php echo $v['url'];?>" class="p12hei">
                          <?php echo $v['title'];?>
                        </a>                        
                      </td>
                    </tr>
                  </table>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                  

                </td>
              </tr>
              <tr>
                <td height="20"><img src="<?php echo $P;?>images/nmgfl_r15_c3.jpg" width="217" height="48" /></td>
              </tr>
              </table>
              <table width="217" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                <tr>
                  <td><img src="<?php echo $P;?>images/nmgfl_r17_c3.jpg" width="217" height="388" /></td>
                </tr>
              </table></td>
            <td align="right" valign="top"><table width="767" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="28" align="left" class="p12bai" style="background:url(<?php echo $P;?>images/nmgfl_r13_c15.jpg) no-repeat;">　蒙 古 妇 联 简 介</td>
              </tr>
            </table>
              <table width="767" border="0" cellspacing="0" cellpadding="0">
                <tr>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c133928c9d496cc433d35b18fc06e13a&sql=select+content+from+v9_news_data+where+id%3D10998&num=1&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select content from v9_news_data where id=10998 LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                  <td width="541" height="832" align="left" valign="top" style="font-size:12px;line-height:22px;">&nbsp;
                  <?php echo $r['content'];?>
                  </td>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                  
                  <td width="10" style="background:url(<?php echo $P;?>images/nmgfl_r15_c17.jpg) repeat-y center;">&nbsp;</td>
                  <td width="218" align="left" valign="top"><table width="200" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                    <tr>
                      <td><img src="<?php echo $P;?>images/nmgfl_r14_c19.jpg" width="207" height="167" /></td>
                    </tr>
                  </table>
                    <table width="200" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                      <tr>
                        <td><img src="<?php echo $P;?>images/fls.jpg" width="203" height="137" /></td>
                      </tr>
                    </table></td>
                </tr>
              </table></td>
            </tr>
        </table></td>
        <td width="36">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>



<!--
<table width="1092" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="153" valign="top" style="background:url(<?php echo $P;?><?php echo $P;?>images/nmgfl_r2_c2.jpg) repeat-y;"><table width="1092" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="43" height="355">&nbsp;</td>
        <td width="1013" height="355" align="center" valign="top"><table width="1004" border="0" cellspacing="0" cellpadding="0" style=" padding-top:10px;">
          <tr>
            <td width="217" height="569" valign="top">

              <table width="217" border="0" cellspacing="0" cellpadding="0" valign="top">
              <tr>
                <td height="390" align="center" valign="top" style="background:url(<?php echo $P;?><?php echo $P;?>images/nmgfl_r13_c10.jpg) repeat-x;">

                  <table width="217" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                  <tr>
                    <td align="center" class="p14hong">内蒙古妇联</td>
                  </tr>
                </table>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=32e7aefdffb16f71d7ea3722f3de461a&action=lists&catid=1&thumb=0&order=listorder+asc&num=100\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'1','thumb'=>'0','order'=>'listorder asc','limit'=>'100',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                  <table width="200" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="18" align="center">· </td>
                      <td width="182" align="left" class="p12hei">
                        
                        <a href="<?php echo $v['url'];?>" class="p12hei">
                          <?php echo $v['title'];?>
                        </a>
                      </td>
                    </tr>
                  </table>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                  </td>
              </tr>
              <tr>
                <td height="20"><img src="<?php echo $P;?><?php echo $P;?>images/nmgfl_r15_c3.jpg" width="217" height="48" /></td>
              </tr>
              </table>
              <table width="217" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                <tr>
                  <td><img src="<?php echo $P;?><?php echo $P;?>images/nmgfl_r17_c3.jpg" width="217" height="388" /></td>
                </tr>
              </table></td>
            <td align="right" valign="top"><table width="767" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="28" align="left" class="p12bai" style="background:url(<?php echo $P;?><?php echo $P;?>images/nmgfl_r13_c15.jpg) no-repeat;">　蒙古妇女简介</td>
              </tr>
            </table>
              <table width="767" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="541" height="832" align="left" valign="top">&nbsp;
                  <p>
  　　名称：内蒙古自治区妇女联合会</p>
<p>
  　　类别：省、自治区、直辖市妇联</p>
<p>
  　　所在地：呼和浩特</p>
<p>
  　　成立时间：1949.01.12</p>
<p>
  　　简介：</p>
<p>
  　　内蒙古自治区妇女联合会成立于1949年1月12日，当时称为内蒙古民主妇女联合会。1953年1月，绥远省民主妇女联合会与内蒙古民主妇女联合会合并。1957年9月，将内蒙古自治区民主妇女联合会改称为内蒙古自治区妇女联合会。其基本职能是：代表和维护妇女权益，推动妇女发展，促进男女平等。内蒙古妇联内设6个部室：办公室、组织联络部(与机关党委合署办公)、宣传部、妇女发展部、权益部、儿童工作部。自治区人民政府妇女儿童工作委员会办公室设在妇联。所属事业单位有：机关事务中心，《内蒙古妇女》(蒙文版)、《中外妇女文摘》、《中外童话画刊》三个杂志社，内蒙古妇女干部学校，内蒙古妇女儿童中心和内蒙古儿童基金会。到2005年底，全区乡苏木以上妇联组织1087个，专职妇干1694人。现任主席：陈羽，副主席：张淑华、冀晓青、李雪梅、云翠荣。</p>
<p>
  　　内蒙古自治区妇联成立以来，在每个历史时期都围绕党的工作重点开展工作，努力当好自治区党委和政府开展妇女工作的参谋和助手，在党与各族妇女之间真正起到了桥梁与纽带作用。五六十年代，各级妇联以动员组织妇女积极参加社会主义建设为工作重点，改革开放以来，各级妇联紧紧围绕党的以经济建设为中心的工作重点，通过开展各种形式的活动，团结动员各族妇女参加改革和现代化建设，促进经济发展和社会进步，教育引导妇女增强&ldquo;四自&rdquo;精神，全面提高素质，促进妇女人才成长。</p>
<p>
  　　2000年以来，内蒙古各级妇联和妇女群众结合自治区的实际，开展富有民族特色和地区特色的巾帼扶贫行动、巾帼创业活动、巾帼扫盲行动、巾帼成才行动、巾帼文明行动，并广泛、深入、持久地开展&ldquo;双学双比&rdquo;、&ldquo;巾帼建功&rdquo;、&ldquo;五好文明家庭&rdquo;创建和&ldquo;双合格&rdquo;活动，为自治区经济社会发展作出了积极贡献。</p>
<p>
  　　一是统筹推进城乡妇女发展取得了新业绩。各级妇联紧紧抓住发展这个第一要务，以促进农牧民妇女增收致富和城镇妇女创业就业为重点，不断深化&ldquo;双学双比&rdquo;和&ldquo;巾帼建功&rdquo;活动。在农村牧区，以开展科技培训、科技服务、科技示范为着力点，积极创办农村妇女学校等妇女培训教育阵地，建立&ldquo;妇&rdquo;字号示范基地，构建妇女互助网络组织，争取并实施各类扶贫和生态项目，大力发展适合妇女生产经营的优势产业，打造特色品牌，使妇女成为发展农村牧区经济的生力军。五年来，共培养妇女种养加示范户33.4万户，建立&ldquo;妇&rdquo;字号示范基地4600多个，实施的&ldquo;母亲水窖&rdquo;、&ldquo;三八绿色工程&rdquo;、&ldquo;香港回归扶贫基金&rdquo;、小额信贷等项目，共投入资金4300余万元，有效地改善了妇女儿童生存发展的条件。其中，&ldquo;母亲水窑&rdquo;工程解决了9.23万人的饮水困难，成为一项民心工程，赢得了社会的广泛赞誉和支持。在城镇，各地把促进下岗失业妇女创业就业，作为服务大局和民生之本的大事来抓，积极争取政策、项目、资金等支持，强化了技能培训和服务工作，打造了妇联家政和社区服务品牌。五年来累计培训妇女13.5万人，使10万余名妇女实现了自主就业或成功创业。</p>
<p>
  　　二是维护妇女儿童权益实现了新突破。各级妇联着眼于宏观维权，注重抓源头参与，从根本上维护妇女儿童权益。协助政府制定实施了2001&mdash;2010年内蒙古妇女儿童发展纲要，加强宣传培训和监督检查，推动重点难点目标的实现。认真参与和妇女相关的法律法规的制定、修改，推动加快全区&ldquo;预防和制止家庭暴力&rdquo;法规的立法进程。积极整合资源，完善社会化工作机制。目前自治区和9个盟市、79个旗县区成立了妇女维权协调组织，全区建立维权法庭、合议庭59个，反家暴投诉站106个，妇女法律援助站和维权工作站297个，开通咨询热线72条，与民政部门联合创办了两处妇女避救站。在全国妇联的大力支持下，利用国际项目对部分党政领导干部、警官、法官和妇联维权干部等2万多人进行了培训。全区旗县以上妇联维权干部普遍接受了培训，能力建设实现了质的跨越，有155名妇联干部依法转入了人民陪审员序列， 136名妇联干部成为劳动保障法律监督员。积极参与社会治安综合治理。五年来妇联四级信访网共接待来信来访2.4万件，办结率95%以上，为化解矛盾、维护稳定、构建和谐社会作出了贡献。</p>
<p>
  　　三是宣传思想工作取得了新成效。各级妇联以宣传贯彻男女平等基本国策为核心，开展了丰富多彩的宣传教育活动，推动国策宣传教育进党校、进机关、进社区，较好地发挥了宣传思想工作温暖人、凝聚人、吸引人、提高人的作用。五年来全区旗县以上妇联共表彰&ldquo;三八&rdquo;红旗手5662名，&ldquo;三八&rdquo;红旗集体1220个。第二届内蒙古&ldquo;十大女杰&rdquo;评选活动，社会各界积极参与，影响广泛。以&ldquo;五好文明家庭&rdquo;创建活动为载体，开展了&ldquo;美德在家庭&rdquo;、&ldquo;家庭文化艺术节&rdquo;及科学、文化、法律、道德进家庭、进社区等群众性精神文明创建活动，提高了家庭成员的思想文化素质，倡扬了家庭美德新风。五年来全区旗县以上妇联共评选&ldquo;五好文明家庭&rdquo;4万户。各级妇联从关心家庭到关注家庭教育，精心打造&ldquo;双合格&rdquo;活动品牌，大力发展社区和农村牧区家长学校，广泛传播科学的家庭教育知识和理念，促进了未成年人的健康成长。目前全区有家长学校27000余所。帮助贫困儿童群体的&ldquo;春蕾计划&rdquo;、&ldquo;安康计划&rdquo;等社会公益活动，得到了区内外人士的大力支持。目前已累计筹资1500余万元，兴建春蕾小学36 所、春蕾班145个、安康教室130个，使4.3万余名失辍学女童重返校园。</p>
<p>
  　　四是妇联组织能力建设迈出了新步伐。五年来，妇联基层组织建设得到全面加强，各种妇女协会、研究会、联谊会的作用得到发挥。全区苏木乡镇妇联组建率达100%，嘎查村妇代会组建率达99.9%，社区妇女组织建设与城市化进程同步推进，机关、事业单位、高等院校妇委会建设不断加强，非公有制经济领域中的妇女组织建设积极拓展。妇联干部宗旨意识进一步强化，服务能力不断增强。几年来，各级妇联狠抓了干部培训、交流、挂职锻炼等工作，累计培训妇联干部8万人次。妇联工作机制不断创新和完善。积极探索和建立社会化工作机制，引入市场化、项目化运作机制，发挥品牌的示范效应，提高了妇联工作的科学性，增强了服务妇女儿童的实力。妇联民间交往优势得到进一步发挥。积极组织妇女团组考察沿海发达地区，出访港澳地区和欧美、澳大利亚等国家，并多次接待区外、境外妇女团组来访，先后与联合国开发计划署和教科文组织、澳大利亚、加拿大、德国等国际组织和国家开展了项目合作。五年来共争取国内外项目304个，累计金额1亿多元人民币，为促进我区经济和妇女儿童事业发展作出了重要贡献。全区妇女工作先后有21项受到全国表彰，28项受到自治区表彰。</p>
<p>
  　　自治区妇联高举邓小平理论伟大旗帜，以&ldquo;三个代表&rdquo;重要思想为指导，全面落实科学发展观，以联系妇女、服务妇女、教育妇女、维护妇女儿童合法权益为根本任务，不断提高妇女素质，推进妇女全面发展，推动男女两性平等和谐，团结带领全区各族妇女为深入实施&ldquo;十一五&rdquo;规划、建设富强民主文明和谐内蒙古作出新的更大的贡献，谱写全区妇女运动的新篇章。</p>
<p>
  　　内蒙古自治区妇联历届主席(主任)名单：</p>
<p>
  　　乌兰 (1949 -1973 )</p>
<p>
  　　刘秀梅 (1949.9 -1953.6 )绥远省</p>
<p>
  　　陈介平 (1953.6 -1960.2 )绥远省</p>
<p>
  　　秦淑珍 (1973.9 -1978.11)</p>
<p>
  　　乌兰 (1978.11-1980.11)</p>
<p>
  　　云曙芬 (1981.5 -1984.11)</p>
<p>
  　　乌云其木格(1984.11-1989.1 )</p>
<p>
  　　王秀梅 (1989.7 -1993.7 )</p>
<p>
  　　胡达古拉 (1993.7 -1995.12)</p>
<p>
  　　林瑞 (1995.12-2004.4 )</p>
<p>
  　　陈羽(2004.4-现在)</p>
<p>
  　　地址：呼和浩特市新城区中山东路7号</p>
<p>
  　　邮编：010020</p>
<p>
  　　电话：0471-6930826</p>
<p>
  　　传真：0471-6930826</p>
                  </td>
                  <td width="10" style="background:url(<?php echo $P;?><?php echo $P;?>images/nmgfl_r15_c17.jpg) repeat-y center;">&nbsp;</td>
                  <td width="218" align="left" valign="top"><table width="200" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                    <tr>
                      <td><img src="<?php echo $P;?><?php echo $P;?>images/nmgfl_r14_c19.jpg" width="207" height="167" /></td>
                    </tr>
                  </table>
                    <table width="200" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                      <tr>
                        <td><img src="<?php echo $P;?><?php echo $P;?>images/tthy_r5_c5.jpg" width="183" height="167" />
                    </td>
                      </tr>
                    </table></td>
                </tr>
              </table></td>
            </tr>
        </table></td>
        <td width="36">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
-->