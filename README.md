# Symfony4.4-Docker
1. Installer docker for windows : 
	- https://hub.docker.com/editions/community/docker-ce-desktop-windows/  (get Docker).

2. Si erreur concernant le wsl2 :
	- https://docs.microsoft.com/fr-fr/windows/wsl/install-win10#step-4---download-the-linux-kernel-update-package
		-> étape 4 (télécharger le package maj) 
		-> + étape 5 de jouer la commande "wsl --set-default-version 2" dans le terminal.

Redémarrer à chaque fois que c'est demandé. 

3. Créer un dossier "symfony", puis cd /symfony et faire 
	- git clone https://github.com/eko/docker-symfony

4. Lancer Docker Desktop.

5. Dans un terminal, se positionner dans le dossier "docker-symfony" : 
	- docker-compose build
  - docker-compose up -d

=> si on a l'erreur docker: "Error response from daemon: driver failed programming external connectivity on endpoint modest_villani (496510479b1c59db6a8e85f8c06d8cf15f9043ff424c40246ae31633892ed881): Bind for 0.0.0.0:80 failed: port is already allocated."
	- docker-compose down
	-  netstat -ano | findstr :80
	-  taskkill /pid 7152 /f
	- docker-compose up

6. Depuis "docker-symfony", lancer un "docker-compose exec php composer install".

7. Adresse web : http://symfony.localhost/

8. Accès BDD: http://symfony.localhost:8080/
    - user: symfony
    - mdp : symfony
    - nom de la bdd : symfony
    
9. Liste des commandes possibles à jouer depuis le dossier "docker-symfony":
    - docker-compose exec php php /var/www/symfony/bin/console doctrine:database:create
    - docker-compose exec php php /var/www/symfony/bin/console doctrine:schema:update --force
    - docker-compose exec php php /var/www/symfony/bin/console doctrine:fixtures:load
    - docker-compose exec php php /var/www/symfony/bin/console cache:clear
    - docker-compose exec php php /var/www/symfony/bin/console cache:warmup
    - docker-compose exec php php /var/www/symfony/bin/console debug:router
    - docker-compose exec php composer install

