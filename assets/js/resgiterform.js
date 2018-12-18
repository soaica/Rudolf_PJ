$(function(){
            	
                $("#register").click(function(){
                	var organization_name=$("#organization_name").val();
                	var name_kana=$("#name_kana").val();
                	var name_kanji=$("#name_kanji").val();
                	var age=$("#age").val();
                	var sex=$("#sex").val();
                	var password=$("#password").val();
                	var repassword=$("#repassword").val();
                	var result="công ty:"+ organization_name + "name kana:"+name_kana +"name kanji:"+name_kanji+"tuổi:"+age+"sex:"+sex+"password:"+password+"repassword:"+repassword;
                    alert(result);
                    console.log(result);
                });
  });