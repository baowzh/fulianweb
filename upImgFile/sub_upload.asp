<!--#include file="UPLOAD.INC"-->
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
<%
dim arr(3)
dim upload,file,formName,formPath,iCount,filename,fileExt,i
set upload=new upload_5xSoft ''�����ϴ�����
						
formPath=""     'ͼƬ��ŵ�·����productĿ¼�µ�uploadimages�ļ���       ''��Ŀ¼���(/)

	''�г������ϴ��˵��ļ�
    for each formName in upload.file
      set file=upload.file(formName)
	  if file.filesize>0 then
      if file.filesize>10000000 then
		response.write "<font size=2>ͼƬ��С��С������[<a href=# onclick=history.go(-1)>�����ϴ�</a>]</font>"
		response.end
      end if
	  fileExt=lcase(right(file.filename,4))
	  if fileExt<>".jpg" then
         response.write "<font size=2>�ļ���ʽ����[<a href=# onclick=history.go(-1)>�������ϴ�</a>]</font>"
         response.end
      end if
	end if
						
	filename=year(now)&month(now)&day(now)&hour(now)&minute(now)&second(now)&file.FileName
	
    if file.FileSize>0 then         ''��� FileSize > 0 ˵�����ļ�����
       file.SaveAs Server.mappath(formpath&filename)   ''�����ļ�
       'response.write file.FilePath&file.FileName&"("&file.FileSize&") => "&formPath&File.FileName&"�ϴ��ɹ�<br>"
       response.write "�ϴ��ɹ� <a href=# onclick=history.go(-1)>�뷵��</a>" 

	   end if
set file=nothing
next
set upload=nothing
Response.Write "<script>parent.add.picUrl.value='"&FileName&"'</script>"
%>