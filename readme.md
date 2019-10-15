<p>Hello.</p>
<p>Developed application in the attachment.</p>
<p>To start, download and download the application to the root directory of your hosting or virtual server.</p>
<p>In the .env file, write the database connection settings (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD);</p>
<p>If you are on shared hosting do "php artisan migrate";</p>
<p>If you are on web hosting, do the import of tables with sedna sql. Also, replace the .htaccess_host file with .htacess.</p>

<p>Methods Api:</p>
<h3>POST// your-domain/api/register</h3>
<p>required parameters name,email,password,password_confirmation</p>
<p>Example post parameters<code>name=test_user&email=test_user@ukr.net&password=11111111&password_confirmation=11111111</code></p>
<h3>POST// your-domain/api/logout/{id}</h3>
<p>required parameters id user</p>
<p>Example <code></code></p>
post//login
email=test_user@ukr.net&password
post//api/movies
id_user=1&name_film=Rokky2&date_created=2010-03-03&format=DVD&actor[]=1&actor[]=2&token=01J75shwLQouLzmXiGqBPk5suVw4ljP7HHjxSfuJB4UGLzwTGW56NAdopnOI
patch///api/movies/id
user_id=1&name_film=Rokky5&date_created=2010-03-03&format=DVD&actor[]=1&actor[]=2&token=01J75shwLQouLzmXiGqBPk5suVw4ljP7HHjxSfuJB4UGLzwTGW56NAdopnOI
delete//api/movies/id
user_id=1&token=01J75shwLQouLzmXiGqBPk5suVw4ljP7HHjxSfuJB4UGLzwTGW56NAdopnOI
