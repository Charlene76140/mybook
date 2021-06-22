# mybook
Ce projet a été réalisé dans le cadre de ma formation développeur web et web mobile afin de valider mes acquis sur PHP en POO et MySQL  Il s'agit d'une application de gestion des livres dans une bibliothèque.

Compétences évaluées :
- Maquetter une application
- Réaliser une interface utilisateur web statique et adaptable
- Créer une base de données
- Développer les composants d’accès aux données
- Développer la partie back-end d’une application web ou web mobile
- Elaborer et mettre en œuvre des composants dans une application de gestion de contenu
ou e-commerce

L’application permettra de :
- Afficher la liste des livres contenus dans le catalogue ainsi que leur statut (disponible ou prêté)
- Ajouter un livre au catalogue
- Supprimer un livre du catalogue s’il n’est pas emprunté
- Pouvoir accéder à la fiche descriptive de chaque livre enregistré en BDD
- Pouvoir modifier le statut de chaque livre de disponible à prêté et de prêté à disponible. Quand un
livre est prêté le/la bibliothécaire indique le numéro d’identification unique de l’utilisateur afin de
savoir qui a emprunté quoi. Quand on revient sur la fiche descriptive du livre celle-ci indique
maintenant les informations du livre ainsi que celles de l’utilisateur qui l’a emprunté.
- (optionnel) Afficher la liste de tous les utilisateurs enregistrés dans le système ainsi que leurs
informations personnelles et les livres qu’ils ont éventuellement empruntés quand on clique sur leur
fiche personnelle.

Spécifications techniques :
- Votre code est organisé selon l'architecture MVC
- Votre projet est géré à l’aide d’un tableau de type KANBAN où il est découpé en tâches avec un
temps estimé
- Vous prenez en compte les problématiques de maintenabilité
- Vous prenez en compte les problématiques de sécurité liées aux failles standards (faille XSS et
injection SQL)
- Vous intégrez au possible les transactions dans vos requêtes SQL
- Vous utilisez PDO pour vous connecter à la base de données
- Vous privilégiez les jointures aux doubles requêtes. Cependant les doubles requêtes sont acceptées
dans le cas où les jointures seraient trop complexes à mettre en œuvre.
- Vous programmez en orienté objet
