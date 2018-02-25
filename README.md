# WEB-API for Game Maker: Studio
This is a simple WEB-API for the main server. Using this API, you
can create a system that displays an online list of servers.

Introduction:
The L-WEB_API_SERVER / CLIENT.gmz files demonstrate the L-WEB API. They already have in advance prepared the necessary functions for interaction with the API. The "L-WEB_API_PHP" folder stores PHP scripts, they are uploaded to your web server. Next, we return to the examples on the GMS, and in both the function "lphp_init" takes 1 parameter - a link to your site with scripts. NOTE all scripts must be in the same shared folder, and the link should be exactly to this same folder with scripts! Also, you only need to change a couple of lines in the "db.php" file, where there are comments. This is necessary for you to "link" your database with the L-WEB API. The file "server_list.sql" will allow you to automatically create the required table, just import it into your database.
