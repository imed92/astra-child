# Liste d’actions courantes dans WordPress

Voici une sélection d’actions (« hooks ») fréquemment utilisées dans WordPress, avec leur moment d’exécution et un usage typique.

| Action | Moment d’exécution | Utilisation typique |
|--------|--------------------|----------------------|
| `init` | Très tôt dans le chargement de WordPress (après les constantes, avant la plupart des requêtes) | Déclarer des CPT, taxonomies, les supports de thème (thumbnails, menus…) |
| `after_setup_theme` | Immédiatement après que le thème ait chargé ses fonctions de base | Ajouter theme_support, registrer les menus, widgets |
| `wp_enqueue_scripts` | Lors du chargement des styles/JS côté frontend | Enfiler CSS ou JS personnalisés |
| `admin_enqueue_scripts` | Lors du chargement des styles/JS dans l’admin WP | Charger un CSS/JS spécifique à l’administration |
| `wp_head` | Dans le `<head>` de chaque page (frontend) | Ajouter des balises meta, scripts, styles en ligne |
| `wp_footer` | Juste avant la balise `</body>` du frontend | Ajouter des scripts JS, du tracking, ou du HTML de fin de page |
| `save_post` | Lorsqu’un article/page est enregistré | Faire des actions après publication ou mise à jour (ex : envoyer un email) |
| `wp_login` | Lorsqu’un utilisateur se connecte | Loguer la connexion, rediriger l’utilisateur, déclencher une action |
| `wp_logout` | Lorsqu’un utilisateur se déconnecte | Nettoyer la session, rediriger, déclencher une action |
| `admin_menu` | Lors de la génération du menu de l’administration | Ajouter ou retirer des pages/options dans le menu admin |
| `add_meta_boxes` | Après que les boîtes meta (post editor) aient été ajoutées | Ajouter une meta-box personnalisée à l’éditeur |
| `transition_post_status` | Lors d’un changement de statut d’un contenu (ex : brouillon → publié) | Réagir à la publication ou à la mise hors ligne d’un contenu |
| `wp_ajax_{action}` | Lors d’une requête AJAX coté admin utilisateur connecté | Gérer une action AJAX personnalisée |
| `all` | Un « super hook » qui déclenche **toutes** les actions | Utile pour debugger ou logger tous les hooks actifs |

---

## 🧩 À noter
- Chaque action peut avoir des **arguments** (souvent indiqués dans la documentation officielle).  
- On peut attacher plusieurs fonctions à une même action (avec des priorités différentes).  
- Le bon usage : **ajouter** du code dans un thème enfant ou plugin, **ne pas éditer** le core ou le thème parent.

---

## 🔗 Pour aller plus loin
- Consulte la documentation officielle : [Action Hook Reference – WordPress Developer Resources](https://developer.wordpress.org/apis/hooks/action-reference/) :contentReference[oaicite:0]{index=0}  
- Pour obtenir **tous** les hooks (actions + filtres) : [List of all WP action/filter hooks](https://adambrown.info/p/wp_hooks/) :contentReference[oaicite:1]{index=1}  

#### [👉 Suite (Qu'est-ce qu'un hook ?')](trouver-les-hooks.md)
