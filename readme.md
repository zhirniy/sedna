<p>Hello.</p>
<p>Developed application in the attachment.</p>
<p>To start, download the application to the root directory virtual or local server.</p>
<p>In the .env file, write the database connection settings (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD);</p>
<p>For update dependency run comand <code>php composer update</code></p>
<p>Run comand "php artisan migrate" or import of tables with sedna sql.</p>
<p>Run comand <code>php artisan serve</code> or change  {your-domain} on {your-domain}/public/ in methods</p>

<h2>Methods Api:</h2>
<h3>Register POST {your-domain}/api/register</h3>
<p>required parameters name,email,password,password_confirmation</p>
<p>Example post parameters<code>name=test_user&email=test_user@ukr.net&password=11111111&password_confirmation=11111111</code></p>
<h3>Logout POST {your-domain}/api/logout/{id}</h3>
<p>required parameters id user</p>
<p>Example url for POST <code>{your-domain}/api/logout/1</code></p>
<h3>Login POST {your-domain}/public/api/login</h3>
<p>required parameters email,password</p>
<p>Example post parameters<code>email=test_user@ukr.net&password</code></p>
<h3>Show all films GET {your-domain}/api/movies</h3>
<h3>Show filmb by id GET {your-domain}/api/movies/{id}</h3>
<h3>Show film by parameter  GET {your-domain}/api/movies/search/{parameter}</h3>
<p>parameter is name film or name actor</p>
<p>Example url for POST <code>{your-domain}/api/movies/search/Rokky</code></p>
<h3>Create film POST {your-domain}/api/movies</h3>
<p>required parameters id_user,name_film,date_created,actor,format,token</p>
<p>Example post parameters <code>id_user=1&name_film=Rokky2&date_created=2010-03-03&format=DVD&actor[]=1&actor[]=2&token=01J75shwLQouLzmXiGqBPk5suVw4ljP7HHjxSfuJB4UGLzwTGW56NAdopnOI</code></p>

<h3>Edit film PATCH {your-domain}/api/movies/{id_film}</h3>
<p>required parameters id_film,name_film,date_created,actor,format,token</p>
<p>Example patch parameters<code>
name_film=Rokky5&date_created=2010-03-03&format=DVD&actor[]=1&actor[]=2&token=01J75shwLQouLzmXiGqBPk5suVw4ljP7HHjxSfuJB4UGLzwTGW56NAdopnOI
    </code></p>
    
<h3>Delete film Delete {your-domain}/api/movies/{id_film}</h3>
<p>required parameters id_user,token,id_film</p>
<p>Example patch parameters <code>user_id=1&token=01J75shwLQouLzmXiGqBPk5suVw4ljP7HHjxSfuJB4UGLzwTGW56NAdopnOI</code></p>
<h3>Show all actor GET {your-domain}/api/actor</h3>
<h3>Create actor POST {your-domain}/api/actor</h3>
<p>required parameters firs_name,last_name</p>
<p>Example patch parameters <code>firs_name=first_name&last_name=last_name</code></p>
