# VALIDATION W10 FRAMEWORK PHP
## Phoungmalay SENGSAVAN

## MISE EN PLACE DU PROJET
- une fois le projet récupéré, copier le fichier .env.example en .env dans le même dossier
```
cd nomDuProjet
cp .env.example .env
```
- créer une base de donnée appelée "validation" via l'outil à disposition, phpMyAdmin pour ma part
- sur VS Code, modifier le nouveau fichier .env et y entrer le nom de la base de donnée, le mode de passe ainsi que le port utilisé. Exemple pour moi utilisant MAMP et phpMyAdmin sur mac :
```
DB_PORT=8889
DB_DATABASE=validation
DB_USERNAME=root
DB_PASSWORD=root
```
