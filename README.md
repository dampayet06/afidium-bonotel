# afidium-bonotel

## Installation des dépendances

```bash
composer install
```

### Pré-requis :

* PHP >= 7.0
* composer

### Liste des dépendances :

* symfony/serializer v4.2
* symfony/property-access v4.2

## Exécuter le script

Rendez-vous à la racine du projet, là où ce trouve le fichier import.php

Exécuter le script :

```bash
php import.php
```

## Les options

### Précision du fournisseur des données

Pour le moment, le script fonctionne uniquement avec le fournisseur Bonotel.

Pour exécuter le script uniquement avec ce fournisseur, voici la commande :

```bash
php import.php -v bonotel
```

(v pour vendor = fournisseur)

### Définir le dossier de sortie

Par défaut, les fichiers .json sont enregistrés dans le dossier output présent à la racine du projet.

Pour définir un autre répertoire, voici la commande :

```bash
php import.php -o /tmp/my/custom/directory
```

Attention, il ne faut pas ajouter le slash à la fin.

### Ecraser les fichiers déjà importés dans le dossier

Par défaut, si le fichier existe déjà dans le répertoire, alors il ne sera pas créé.

Pour pouvoir écraser le fichier par la nouvelle version, il faut ajouter l'option suivante :

```bash
php import.php -f 1
```

(f pour force = forcer l'écriture du fichier, même s'il existe déjà)

### Informations diverses

Il est possible d'ajouter plusieurs options l'un à la suite des autres :

```bash
php import.php -v bonotel -f 1
```

Ici, nous exécutons le script avec le fournisseur bonotel et en mode force (écraser les fichiers existants).

