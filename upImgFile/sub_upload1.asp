<!--#include file="UPLOAD.INC"-->
<%if session("admin_name")="" and Session("ME_name")="" then%>
<style type="text/css">
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style>
<link href="css/01.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-color: #333333;
}
-->
</style>
对不起，您不是会员，不会进行此项操作！
<%else%>
<%
dim arr(3)
dim upload,file,formName,formPath,iCount,filename,fileExt,i
set upload=new upload_5xSoft ''建立上传对象
						
formPath=""     '图片存放的路径：product目录下的uploadimages文件夹       ''在目录后加(/)

	''列出所有上传了的文件
    for each formName in upload.file
      set file=upload.file(formName)
	  if file.filesize>0 then
      if file.filesize>1000000 then
		response.write "<font size=2>图片大小超小了限制[<a href=# onclick=history.go(-1)>重新上传</a>]</font>"
		response.end
      end if
	  fileExt=lcase(right(file.filename,4))
	  if fileExt<>".jpg"  and fileExt<>".JPG" and fileExt<>".gif" and fileExt<>".jpeg" then
         response.write "<font size=2>文件格式限制[<a href=# onclick=history.go(-1)>请重新上传</a>]</font>"
         response.end
      end if
	end if
						
	filename=year(now)&month(now)&day(now)&hour(now)&minute(now)&second(now)&file.FileName
	
    if file.FileSize>0 then         ''如果 FileSize > 0 说明有文件数据
       file.SaveAs Server.mappath(formpath&filename)   ''保存文件
       'response.write file.FilePath&file.FileName&"("&file.FileSize&") => "&formPath&File.FileName&"上传成功<br>"
       response.write "上传成功 <a href=# onclick=history.go(-1)>请返回</a>" 

	   end if
set file=nothing
next
set upload=nothing
Response.Write "<script>parent.add.picUrl.value='"&FileName&"'</script>"
%>
<%end if%>