<!DOCTYPE html>
<html>

    <head>

    </head>

    <body>

    <div>
    	<pre>
        <b>Dear {{strtoupper($user->name)}},</b>

		Welcome to <a href='http://localhost:8000/'>Triprider.</a>Thank you for signing up in our Riding Site.
		If you have received this email successfully we have verified your
		email address properly.

		Please click the following link to Verify your email:<a href="{{route('emailVerification',['email'=>$user->email,'token'=>$user->email_token])}}">Click Here</a>
       
       
        Thank You.Stay with us!
    </pre>

</div>
    </body>

</html>