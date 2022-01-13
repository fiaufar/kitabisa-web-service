## KitaBisa Web Service

Requirement : 
- Composer v1.10.1+
- PHP 7+

How to run project : 

- Clone Repository
- Run
<pre><code>
composer install
</code></pre>
- Setup .env file, you can copy from .env.example
- Add .env vendor configuration, this variable is used to change vendor 
<pre><code>
SMS_VENDOR="vendor a"
</code></pre>
- You can try the test with the 3 types of vendors that have been provided
<table>
    <tr>
        <td>"vendor a"</td>
    </tr>
    <tr>
        <td>"vendor b"</td>
    </tr>
    <tr>
        <td>"vendor c"</td>
    </tr>
</table>

- Run code below using terminal
<pre><code>
php artisan key:generate
</code></pre>
- Run Laravel Development Server
<pre><code>
php artisan serve
</code></pre>
- Access to http://127.0.0.1:8000/


Test API Send Notification : 

- You can try Sending Notification using api
- Url : http://127.0.0.1:8000/api/sendSmsNotification
- Method : POST
- Json Body : 
<pre><code>
{
    "dstPhoneNumber": "08XXXXXXXX",
    "message": "Sms Notification from Kitabisa.com" 
}
</code></pre>

How run unit test : 

- Run code below using terminal
<pre><code>
.\vendor\bin\phpunit
</code></pre>
