<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php
    switch($catid)
    {
        //内蒙古妇联
        case 1:
           include(template("content" , "header"));
           include(template("content", "nmgfl"));
           include(template("content" , "footer"));
           break;
        //图文信息 2          
        case 2:
           include(template("content" , "header"));
           include(template("content", "twxx"));
           include(template("content" , "footer"));
           break;

              

        case 5:
           include(template("content" , "header"));
           include(template("content", "wqwf"));
           include(template("content" , "footer"));
           break;          

        case 6:
           include(template("content" , "header"));
           include(template("content", "fnvz"));
           include(template("content" , "footer"));
           break;                  

        case 7:
           include(template("content" , "header"));
           include(template("content", "xcjy"));
           include(template("content" , "footer"));
           break;      

        case 8:
           include(template("content" , "header"));
           include(template("content", "zzjs"));
           include(template("content" , "footer"));
           break;      

        case 9:
           include(template("content" , "header"));
           include(template("content", "lgss"));
           include(template("content" , "footer"));
           break;   

        case 10:
           include(template("content" , "header"));
           include(template("content", "rtgz"));
           include(template("content" , "footer"));
           break; 


        //家政服务协会 11
        case 11:           
           include(template("content", "jzxh"));
           break;    
           
        case 12:
           include(template("content" , "header"));
           include(template("content", "wsjzxx"));
           include(template("content" , "footer"));
           break;     

        case 13:
           include(template("content" , "header"));
           include(template("content", "tthy"));
           include(template("content" , "footer"));
           break;    

        case 14:
           include(template("content" , "header"));
           include(template("content", "zw"));
           include(template("content" , "footer"));
           break;      

        case 15:
           include(template("content" , "header"));
           include(template("content", "zt"));
           include(template("content" , "footer"));
           break;   

        case 92:
           include(template("content" , "header"));
           include(template("content", "msff"));
           include(template("content" , "footer"));
           break;  

        case 85:
          include(template("content", "jzxhlist"));  
          break;         

        case 86:
          include(template("content", "jzxhlist"));  
          break; 

        case 87:
          include(template("content", "jzxhlist"));  
          break; 

        case 88:
          include(template("content", "jzxhlist"));  
          break; 

        case 89:
          include(template("content", "jzxhlist"));  
          break; 

        case 36:
          include(template("content", "wsjzxxlist"));  
          break;           

        case 37:
          include(template("content", "wsjzxxlist"));  
          break;  

        case 38:
          include(template("content", "wsjzxxlist"));  
          break;  

        case 39:
          include(template("content", "wsjzxxlist"));  
          break;  

        case 40:
          include(template("content", "wsjzxxlist"));  
          break;  

        case 41:
          include(template("content", "wsjzxxlist"));  
          break;  

        case 42:
          include(template("content", "wsjzxxlist"));  
          break;   

        case 93:
          include(template("content" , "header"));
          include(template("content", "jgxf")); 
          include(template("content" , "footer"));
          break; 


        //专题  

        case 124:
           include(template("content/xuexi/web" , "news-1"));
           break; 
        case 125:
           include(template("content/xuexi/web" , "news-1"));
           break; 
        case 126:
           include(template("content/xuexi/web" , "news-1"));
           break; 
        case 127:
           include(template("content/xuexi/web" , "news-1"));
           break;       


        //专题    最美家庭
        case 132:
           include(template("content/zhuanti/zuimeijiating" , "video_list"));
           break;  
        case 129:
           if ($_GET['ly'] == 1){
               include(template("content/zhuanti/zuimeijiating" , "list-liuyan"));
               break;
           }
           if ($_GET['lyframe'] == 1){
               include(template("content/zhuanti/zuimeijiating" , "liuyan-frame"));
               break;
           }           
           include(template("content/zhuanti/zuimeijiating" , "list"));
           break;   
        case 130:
           include(template("content/zhuanti/zuimeijiating" , "list"));
           break;  
        case 131:
           include(template("content/zhuanti/zuimeijiating" , "list"));
           break;  
        case 133:
           include(template("content/zhuanti/zuimeijiating" , "list"));
           break;  
        case 134:
           include(template("content/zhuanti/zuimeijiating" , "list"));
           break;  
        case 135:
           include(template("content/zhuanti/zuimeijiating" , "list"));
           break;  


        default:
           include(template("content" , "header"));
           include(template("content", "general_list"));
           include(template("content" , "footer"));
           break;
    }
?>