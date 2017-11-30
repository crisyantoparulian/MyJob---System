<body>
<h3>
Hello {!! $detail['email'] !!}
</h3>
<p>
Thank you for your register,
<br />
regards MyJob Application
<br />
Please click link below for futher intruction.
</p>
{!! link_to(route('users.update', ['id' => $detail['id'], 'code' =>$detail['code']]), 'Click me') !!}
<h2>Thanks</h2>
</body>