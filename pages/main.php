<div class="container">
    <div>
        <link rel="stylesheet" href="./css/animBG.css" type="text/css" />
		<link rel="stylesheet" href="./css/temp.css" type="text/css" />
        <b><h1>Cybersecurity</b></h1>
        <p class="lead">
          <br>The prevention and protection of a user's or company's sensitive data from hackers.
          <br>
          <h5>One of the most common ways to protect a user's data is a proper management of their passwords. </h5>


          <h4>Example of a SHA1 Encryption System</h4>

          <form action='#' method='post'>
          Enter a text:<br/>
          <input type='text' name='strex' id='strex' size='25' style='color:black' /> <input type='button' id='cryptstr' value='Encrypt'/><br/>
          SHA1 hash string:<br/>
          <input type='text' name='strcrypt' id='strcrypt' size='35' style='color:black' />
          </form>
          <script>
          //code of the SHA1 function
          function SHA1(msg){function rotate_left(n,s){var t4=(n<<s)|(n>>>(32-s));return t4;};function lsb_hex(val){var str='';var i;var vh;var vl;for(i=0;i<=6;i+=2){vh=(val>>>(i*4+4))&0x0f;vl=(val>>>(i*4))&0x0f;str+=vh.toString(16)+vl.toString(16);}
          return str;};function cvt_hex(val){var str='';var i;var v;for(i=7;i>=0;i--){v=(val>>>(i*4))&0x0f;str+=v.toString(16);}
          return str;};function Utf8Encode(string){string=string.replace(/\r\n/g,'\n');var utftext='';for(var n=0;n<string.length;n++){var c=string.charCodeAt(n);if(c<128){utftext+=String.fromCharCode(c);}
          else if((c>127)&&(c<2048)){utftext+=String.fromCharCode((c>>6)|192);utftext+=String.fromCharCode((c&63)|128);}
          else{utftext+=String.fromCharCode((c>>12)|224);utftext+=String.fromCharCode(((c>>6)&63)|128);utftext+=String.fromCharCode((c&63)|128);}}
          return utftext;};var blockstart;var i,j;var W=new Array(80);var H0=0x67452301;var H1=0xEFCDAB89;var H2=0x98BADCFE;var H3=0x10325476;var H4=0xC3D2E1F0;var A,B,C,D,E;var temp;msg=Utf8Encode(msg);var msg_len=msg.length;var word_array=new Array();for(i=0;i<msg_len-3;i+=4){j=msg.charCodeAt(i)<<24|msg.charCodeAt(i+1)<<16|msg.charCodeAt(i+2)<<8|msg.charCodeAt(i+3);word_array.push(j);}
          switch(msg_len % 4){case 0:i=0x080000000;break;case 1:i=msg.charCodeAt(msg_len-1)<<24|0x0800000;break;case 2:i=msg.charCodeAt(msg_len-2)<<24|msg.charCodeAt(msg_len-1)<<16|0x08000;break;case 3:i=msg.charCodeAt(msg_len-3)<<24|msg.charCodeAt(msg_len-2)<<16|msg.charCodeAt(msg_len-1)<<8|0x80;break;}
          word_array.push(i);while((word_array.length % 16)!=14)word_array.push(0);word_array.push(msg_len>>>29);word_array.push((msg_len<<3)&0x0ffffffff);for(blockstart=0;blockstart<word_array.length;blockstart+=16){for(i=0;i<16;i++)W[i]=word_array[blockstart+i];for(i=16;i<=79;i++)W[i]=rotate_left(W[i-3]^W[i-8]^W[i-14]^W[i-16],1);A=H0;B=H1;C=H2;D=H3;E=H4;for(i=0;i<=19;i++){temp=(rotate_left(A,5)+((B&C)|(~B&D))+E+W[i]+0x5A827999)&0x0ffffffff;E=D;D=C;C=rotate_left(B,30);B=A;A=temp;}
          for(i=20;i<=39;i++){temp=(rotate_left(A,5)+(B^C^D)+E+W[i]+0x6ED9EBA1)&0x0ffffffff;E=D;D=C;C=rotate_left(B,30);B=A;A=temp;}
          for(i=40;i<=59;i++){temp=(rotate_left(A,5)+((B&C)|(B&D)|(C&D))+E+W[i]+0x8F1BBCDC)&0x0ffffffff;E=D;D=C;C=rotate_left(B,30);B=A;A=temp;}
          for(i=60;i<=79;i++){temp=(rotate_left(A,5)+(B^C^D)+E+W[i]+0xCA62C1D6)&0x0ffffffff;E=D;D=C;C=rotate_left(B,30);B=A;A=temp;}
          H0=(H0+A)&0x0ffffffff;H1=(H1+B)&0x0ffffffff;H2=(H2+C)&0x0ffffffff;H3=(H3+D)&0x0ffffffff;H4=(H4+E)&0x0ffffffff;}
          var temp=cvt_hex(H0)+cvt_hex(H1)+cvt_hex(H2)+cvt_hex(H3)+cvt_hex(H4);return temp.toLowerCase();}

          // register onclick events for Encrypt button
          document.getElementById('cryptstr').onclick = function() {
          var txt_string = document.getElementById('strex').value; // gets data from input text

          // encrypts data and adds it in #strcrypt element
          document.getElementById('strcrypt').value = SHA1(txt_string);
          return false;
          }
          </script>


          <!-- data breaches and others -->
		  <br>
		  <br><b><h3> Some Types of Vulnerabilities </b></h3>
		  <ul><u>
			<li><a href="sqlinjection.php" style="color:white;">SQL Injection</li>
			<li><a href="csscripting.php" style="color:white;">Cross-Site Scripting</li>
			<li><a href="cmdexecution.php" style="color:white;">Command Execution</li>


        <!--
			<li><a href="clickjk.php" style="color:white;">ClickJacking</li>
			<li><a href="csreqforge.php" style="color:white;">Cross-Site Request Forge</li>
			<li><a href="refxss.php" style="color:white;">Reflected XSS</li>
			<li><a href="fileupvul.php" style="color:white;">File Upload Vulnerabilites</li>
			<li><a href="openredir.php" style="color:white;">Open Redirects</li>
        <li><a href="unencrypted.php" style="color:white;">Unencrypted Communication</li>
          <li><a href="userenum.php" style="color:white;">User Enumeration</li
          -->
			</u>
		  </ul>

      <h3><a href="index.html" style="color:white"><b><u>Cybersecurity Game</b></u></a></h3>

      <p>Click the link above to go through a text-based adventure game based on cybersecurity</p>

      <br>



        </p>
    </div>
</div><!-- /.container -->
