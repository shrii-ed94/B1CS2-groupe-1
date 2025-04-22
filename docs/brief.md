# Coach - Boutique de sacs de luxe

## Notre concept

Coach est un site web imaginé autour de l’univers du sac à main de luxe.
L’idée, c’est de proposer une vitrine élégante et responsive où l’on peut découvrir des sacs haut de gamme, tout en permettant à une équipe de les gérer facilement côté administration (côté back office).

Concrètement, notre site se divise en deux espaces :
- Un front office accessible à tous
- Un back office sécurisé et réservé aux administrateurs


## Front office

Côté visiteur, on a proposé une interface claire qui permet de :
- Parcourir la liste des sacs disponibles 
- Voir les détails d’un modèle (sa description, son prix, sa.es photo.s, etc.)
- Découvrir les créateurs des sacs, grâce à une jointure SQL
- Naviguer sur un site responsive

## Back Office

Réservé aux administrateurs via un système de connexion :
- Identifiants personnalisés pour chaque membre du groupe
- Suppression, modification et ajout de sacs
- Ajout ou modification de designers (optionnel)
- Interface simplifiée et sécurisée
- Gestion des données via des formulaires PHP et requêtes SQL

## L'arborescence des dossiers (simplifiée) :

PROJET/
├── css/         → Fichiers de style CSS
├── inc/         → Includes PHP (header.php, footer.php…)
├── images/      → Images des sacs, logos, etc.
├── pages/       → Pages dynamiques du site (ex : fiche produit, liste…)
├── admin/        → Espace administrateur sécurisé (back office)
├── docs/        → brief.md et autres documents du projet
├── index.html   → Page d'accueil du front office
├── style.css    → Feuille de style principale (globale)

