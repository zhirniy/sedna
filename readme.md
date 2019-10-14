Content-Type: application/x-www-form-urlencoded
post//register
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
