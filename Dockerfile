# Utilise une image officielle de PHP avec Apache comme base
FROM php:8.2-apache

# Copie les fichiers de l'application dans le répertoire /var/www/html
COPY . /var/www/html/

# Expose le port 80 pour le serveur Apache
EXPOSE 80

# Installe les extensions PHP nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Active les modules Apache nécessaires
RUN a2enmod rewrite

# Commande par défaut pour lancer Apache en mode premier plan
CMD ["apache2-foreground"]
