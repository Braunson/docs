---
layout: page
weight: 0
title: Laravel
navigation:
  show: true
---

<p>Laravel comes with an email sending library built in. See more information on how to <a href="http://four.laravel.com/docs/mail">use Laravel with SendGrid</a>.
</p>

In {% codeblock %}app/config/mail.php{% endcodeblock %} you need to configure these settings:
{% codeblock lang:php %}
<?php

return array(
	'driver' => 'smtp',
	'host' => 'smtp.sendgrid.net',
	'port' => 587,
	'from' => array('address' => 'from@example.com', 'name' => 'John Smith'),
	'encryption' => 'tls',
	'username' => 'sendgrid_username',
	'password' => 'sendgrid_password',
);

?>
{% endcodeblock %}

<p>You can use Laravel's Mail class just like you normally would, but all email will be sent through SendGrid!</p>

{% codeblock lang:php %}
<?php

Mail::send('emails.demo', $data, function($message)
{
    $message->to('jane@example.com', 'Jane Doe')->subject('This is a demo!');
});

?>
{% endcodeblock %}