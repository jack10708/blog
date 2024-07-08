<p>Hello {{ $user->name }},</p>

<p>Please click the link below to verify your email address:</p>

<a href="{{ route('verify', ['token' => $token]) }}">Verify Email</a>

<p>If you did not create an account, no further action is required.</p>

<p>Regards,<br>Laravel Application</p>
