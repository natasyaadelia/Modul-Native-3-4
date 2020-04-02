<html>
    <head>
        <title> LOGIN </title>
        <style>
        #hasil{width:600px; margin:0 auto; padding : 10px; font-weight : bold; color : #f00;}
        body{padding:0; margin:0; font-family:array_fill; font-size:15px;}
        #main-wrapper{border:5px double 	#DAA520; padding:5px; width:500px; margin:20px auto 0;}
        #main{text-align:left; padding:5px; background:	#CD853F;}
        table{font-size:15; width:450px;}
        #prn{border:2px solid #FFA500; background:#FFFACD; cursor:pointer; padding:2px 24px;}
        h1{font-size:20px; font-weight:bold; padding:15px 0; text-align:center;}
        #efri{font-size:12px; padding:5px 0 0; color:#0000ff; text-align:center;} blue{font-weight:bold; color:#f00;}
        body {
            position:fixed; left:50%; top:50%; transform: translate(-50%,-50%); background-color: #fbfbfb; border-radius:10px;padding:70px 100px;
            background-image: url("library_staircase_room_light_wooden_39639_1366x768.jpg");
	        background-repeat: no-repeat;
	        background-size: cover;
        }
        </style>
        </head>

        <body>
            <div id ="main-wrapper">
                <div id="main">
                    <h3 align="center"> FORM LOGIN </h3>
                    <br>
                        <form action="proses-login.php" method="post">
                            <table>
                            <tr>
                                <td><label for="">Username</label></td>
                                     <td> <input type="text" name="username" id=""></td>
                            </tr>
                            <tr>
                                <td><label for="">Password</label></td>
                                    <td> <input type="password" name="password" id=""></td>
                            </tr>
                            <tr>
                                <td> 
                                    <label> <br>
                                    <input type="submit" name="submit" value="SIGN IN" id="prn">
                                    </label></tr>
                            </table>
                        </form>
</div>
    </div>
        </body>
        </html>