<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Repartee Send Message Example</title>
        <style type="text/css">
            html,body,head,h1,h2,h3,h4,h5,h6,div,p,span,ul,ol,li,table,tr,td,header,main,footer,article,aside,small,details,canvas { display:block; padding:0; margin:0; font-family:Sans, Serif; }
            h1 { font-size:25px; font-weight:normal; }
            h2 { font-size:20px; font-weight:normal; }
            small { font-size:13px; font-weight:normal; }
            .main { background:#fff; padding:30px; font-size:13px; font-weight:normal; color:#333; }
            p { margin-top:15px;}
            input,textarea { border:1px solid #ccc; padding:5px; font-size:16px; color:#333; }
            textarea { width:300px; height:120px; }
        </style>
    </head>
    <body>
    
        <div class="main">

            <h1>
                Repartee - Send Message
            </h1>
            <small>
                Enter your details below to send an SMS (text message)...
            </small>

            <p>

                <form action="send.php" method="post">

                    <b>To:</b><br />
                    <input type="text" name="to" value="" /><br /><br />

                    <b>Message:</b><br />
                    <textarea name="message">Hello world!</textarea><br /><br />

                    <input type="submit" value="Send" />
                </form>

            </p>
        </div>
    </body>
</html>
