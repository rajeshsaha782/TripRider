<!DOCTYPE html>
<html>

    <head>

    </head>

    <body>

    <div>
    	<pre>
        <b>Dear {{strtoupper($user->name)}},</b>

		Your Password has been changed.Your new PassWord is <strong style="color: red">{{$user->password}}</strong>

        To change your password: <a href="{{route('driver.changepassword')}}">Click Here</a>

        Thank You.Stay with us!
    </pre>

</div>
    </body>

</html>