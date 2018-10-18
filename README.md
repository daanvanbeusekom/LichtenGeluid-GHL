# Licht en Geluid GHL

Website voor lichtengeluid-ghl.xyz. Gemaakt voor het Groene Hart Lyceum.

## Beginnen

Instructies om de website te installeren/aan te passen. 
1. Installeer [xampp](https://www.apachefriends.org) op de PC.
2. Download de repository naar een willekeurige map in de 'htdocs' map.
3. Zet de database op, via [phpmyadmin](localhost/phpmyadmin).
4. Gebruik de onderstaande code in het bestand 'vars.php'
5. Als alles goed is gegaan werkt de website nu.


### Benodigdheden

De code die nodig is om de database te koppelen aan de website. Kopier deze code in het bestand 'vars.php'.

```
//the vars
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "lgweb";
```

De code die nodig is om de database te koppelen aan de admin-website. Kopier deze code in het bestand 'admin/connection.php'.

```
//the vars
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "lgadmin";
```
## Gemaakt met:

* [HTML](/) - Web framework
* [CSS](/) - Web style
* [PHP](https://php.org/) - Process language
* [Javascript](/) - Gebruikt voor acties e.d.
* [SQL](/) - Database Connection

## Bewerkers

* **Daan van Beusekom** - *Initial work* - [daanvanbeusekom](https://github.com/daanvanbeusekom)

Zie de lijst met [bewerkers](https://github.com/daanvanbeusekom/LichtenGeluid-GHL/contributors) die geholpen hebben bij dit project.
