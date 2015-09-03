<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chat Room</title>
        <script>
            function chatObj(name, msg) {
                this.name = name;
                this.msg = msg;
            }

            var chatlist = new Array();

            function getChat() {
                var name = document.getElementById('chtr_name').value;
                var msg = document.getElementById('chtr_msg').value;
                var chat = new chatObj(name, msg);
                if(name =="" || msg ==""){
                    alert("both fields are req");
                    return;
                }
                chatlist.push(chat);

                    var node = document.createElement("li");
                    
                    var spname = document.createElement("span");
                    
                    spname.style.color = "#0000FF";
                    
                    var spntxtname = document.createTextNode(name+": "); 
                    
                    spname.appendChild(spntxtname);
                    
                    var spnmsg = document.createElement("span");
                    
                    spnmsg.style.color = "#009900";
                    
                    var spntxtmsg = document.createTextNode(msg); 
                    
                    spnmsg.appendChild(spntxtmsg);
                    
                    node.appendChild(spname);
                    node.appendChild(spnmsg);
                    
                    document.getElementById("chats").appendChild(node);
                    document.getElementById('chtr_name').value="";
                    document.getElementById('chtr_msg').value="";
            }
            
        </script>
        <style>
            ul{list-style-type: none;}
        </style>
    </head>
    <body>
        <?php
        echo "Chat room is active";
        ?>
        <div class="container">
            <dl>
                <dt>Enter name:</dt>
                <dd><input type="text" placeholder="enter your name here" id="chtr_name"/></dd>
                <dt>Enter message:</dt>
                <dd><textarea placeholder="enter message here" id="chtr_msg" rows="10"></textarea></dd>
                <dt></dt>
                <dd><button id="msg_send" onclick="javascript:getChat()">Send</button></dd>
            </dl>
            <div class="chatlist">
                <ul id="chats"></ul>
            </div>
        </div>
    </body>
</html>
