<p>Hello.</p>
<p>Developed application in the attachment.</p>
To start, download and download the application to the root directory of your hosting or virtual server.
In the .env file, write the database connection settings (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD);
if you are on shared hosting do "php artisan migrate";
if you are on web hosting, do the import of tables with swdna sql. Also, replace the .htaccess_host file with .htacess.

POST//register
name=test_user&email=test_user@ukr.net&password=11111111&password_confirmation=11111111
post//logout/id
post//login
email=test_user@ukr.net&password
post//api/movies
id_user=1&name_film=Rokky2&date_created=2010-03-03&format=DVD&actor[]=1&actor[]=2&token=01J75shwLQouLzmXiGqBPk5suVw4ljP7HHjxSfuJB4UGLzwTGW56NAdopnOI
patch///api/movies/id
user_id=1&name_film=Rokky5&date_created=2010-03-03&format=DVD&actor[]=1&actor[]=2&token=01J75shwLQouLzmXiGqBPk5suVw4ljP7HHjxSfuJB4UGLzwTGW56NAdopnOI
delete//api/movies/id
user_id=1&token=01J75shwLQouLzmXiGqBPk5suVw4ljP7HHjxSfuJB4UGLzwTGW56NAdopnOI
