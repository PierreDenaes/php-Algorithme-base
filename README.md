# Projet PHP : Construction et Exercices Pratiques

<p align="center">
      <img width="300" height="188" src="images/php.png">
</p>

Bienvenue dans ce projet interactif de PHP, conçu pour offrir une expérience d'apprentissage pratique de PHP et de la configuration de serveur web. Les apprenants développent un site web en PHP tout en s'exerçant à travers une série d'exercices ciblés. Ce projet inclut également la configuration du serveur pour améliorer la compréhension des aspects techniques du déploiement d'applications PHP.

## Configuration du Serveur

### Réécriture d'URL
Le fichier `.htaccess` est configuré pour la réécriture des URL afin de rediriger les requêtes vers le dossier `pages`. Cela permet une navigation plus propre et plus lisible.

### Sécurité
Une authentification HTTP de base est mise en place pour restreindre l'accès au site. Les détails d'authentification sont stockés dans le fichier `.htpasswd`.

### Structure du Projet
- `common/`: Contient les fichiers PHP communs comme le pied de page, l'entête et le menu.
- `images/`: Répertoire pour les images utilisées sur le site.
- `pages/`: Contient les pages individuelles du site, comme le générateur de clés.
