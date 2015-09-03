<?php
?>
 <html>
     <head>
         <title>Chat Room</title>
        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>

         <script>
             var username="";
         function sendChat(){
             
             var chatname = document.getElementById('chtr_name').value;
             var chatmsg = document.getElementById('chtr_msg').value;
             if(chatname === '' || chatmsg === ''){
                 alert('all fields are required!');
                 return;
             }
             username = chatname;
             document.getElementById('chtr_name').value = username;
             document.getElementById('chtr_msg').value = "";
//             document.getElementById('chtr_name')
             var xmlhttp = new XMLHttpRequest();
             xmlhttp.onreadystatechange = function(){
                 if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
                     document.getElementById('chatlist').innerHTML = xmlhttp.responseText;
                 }
             };
             xmlhttp.open('GET','addchat.php?chatname='+ username + '&chatmsg='+chatmsg, true);
             xmlhttp.send();
         }
         $(document).ready(function(){
             $.ajaxSetup({chache:false});
             setInterval(function(){$('#chatlist').load('allchats.php');},2000);
         });
         </script>
     </head>
     <body>
                <dl>
                <dt>Enter name:</dt>
                <dd><input type="text" placeholder="enter chat name here" name="chtr_name" id="chtr_name"/></dd>
                <dt>Enter message:</dt>
                <dd><textarea placeholder="enter message here" name="chtr_msg" id="chtr_msg" rows="10"></textarea></dd>
                <dt></dt>
                <dd><button id="msg_send" onclick="sendChat()">Send</button></dd>
            </dl>
             <div id="chatlist">
                 Wait for chat activation ...
             </div>
     </body>
 </html>
