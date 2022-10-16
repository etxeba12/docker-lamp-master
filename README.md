#Taldekideen izenak
Iker Etxebarria,
Imanol Ganzedo eta
Miriam Bergáz

# Docker LAMP
Linux + Apache + MariaDB (MySQL) + PHP 7.2 on Docker Compose. Mod_rewrite enabled by default.

## Instructions

Hasteko zure terminala ireki beharko duzu, han "/docker-lamp" biltegian sartu beharko zara. Biltegi honetara sartzeko terminaletik, lehenengo jakin beharko duzu non duzun gordeta eta gero "cd" komandoa erabiliz. Adibidez: cd Escritorio/SegurtasunLana/docker-lamp-master/  

Hori egin eta gero, web irudia sortu beharko duzu. Honako hau sortzeko, terminalean " docker build -t="web" . " jarri beharko duzu. Prozesu hori bukatzerakoan terminalean idatzi: "docker-compose up" .

Geroago google-n sartu eta "http://localhost:81" bilatu.

Azkenik, google-n ere (google-ko beste fitxa batean) http://localhost:8890/ .Web orrialde horretan erabiltzaile eta pasahitza bat eskatuko dizu, honako hauek dira: erabiltzailea "admin" eta pasahitza "test". Bukatzeko "database" jartzen duen lekuan sakatu eta gero "import", bertan docker-lamp-master/database.sql aukeratu beharko duzu. 

Listo! honekin sortu dugun web sistemara sartu ahal izan zara.

Terminalean "docker-compose down" bukatu duzunean, docker kontenedorea amatatzeko.


Feel free to make pull requests and help to improve this.

If you are looking for phpMyAdmin, take a look at [this](https://github.com/celsocelante/docker-lamp/issues/2).
