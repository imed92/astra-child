# 📌 Trouver tous les Hooks d’un Thème WordPress

Les **hooks** permettent d’ajouter ou modifier des fonctionnalités dans WordPress **sans toucher au core ou au thème parent**.  
Il existe 2 types de hooks :  
| Type | Fonction | Exemple |
|------|----------|---------|
| **Actions** | Ajouter du code | `add_action()` |
| **Filters** | Modifier des données | `add_filter()` |

Pour identifier les hooks disponibles dans un thème, voici plusieurs méthodes.

---

## ✅ 1️⃣ Recherche directe dans les fichiers du thème

Les hooks sont déclarés avec :

- `do_action('nom_du_hook')` → Action
- `apply_filters('nom_du_hook')` → Filtre

📍 Commandes utiles (si accès terminal) :

```bash
grep -R "do_action(" wp-content/themes/ton-theme/
grep -R "apply_filters(" wp-content/themes/ton-theme/
```

💡 Cela permet de trouver **tous les points d’accroche** du thème.

---

## ✅ 2️⃣ Utiliser Query Monitor (Plugin recommandé)

📍 Installation : Extensions → Ajouter → “Query Monitor”

Fonctionnalités :
- Voir **tous les hooks actifs sur la page**
- Voir d’où ils sont appelés (fichier + ligne)
- Voir quelles fonctions s’y accrochent

👨‍🏫 Parfait pour les exercices en cours : *“Quel hook déclenche l’affichage du footer ?”*

---

## ✅ 3️⃣ Utiliser WP Hooks Finder (Plugin)

📍 Installation : Extensions → Ajouter → “WP Hooks Finder”

À quoi il sert :
- Scanner **uniquement les hooks du thème et des plugins actifs**
- Interface claire : action vs filtre
- Visualiser les priorités + arguments

🔎 Idéal pour comprendre **l’ordre d’exécution**

---

## ✅ 4️⃣ Lire le code source du parent (méthode développeur avancée)

Les thèmes premium (ex : Astra) placent souvent les hooks dans des fichiers `/inc/`.

Exemple avec Astra :
```
wp-content/themes/astra/inc/hooks
wp-content/themes/astra/inc/core/theme-hooks.php
```

---

## ✅ 5️⃣ Logger tous les hooks qui s’exécutent

📍 Ajouter temporairement dans `functions.php` :

```php
add_action('all', function($hook_name) {
    error_log($hook_name);
});
```

📍 Voir dans : `wp-content/debug.log`

⚠️ Attention :  
- Très verbeux (plusieurs milliers de hooks)
- À désactiver **rapidement** après usage

---

# 🧠 Astuce pratique

Pour savoir **quel template** est utilisé :
```php
add_action('wp_footer', function() {
    global $template;
    echo '<!-- Template utilisé : ' . $template . ' -->';
});
```
→ Super utile pour comprendre **où** accrocher des hooks.

---

# 📎 Outils & Ressources utiles

| Ressource | Description | Lien |
|----------|-------------|------|
| Query Monitor | Debug visuel complet | https://wordpress.org/plugins/query-monitor/ |
| WP Hooks Finder | Liste actions & filtres | https://wordpress.org/plugins/wp-hooks-finder/ |
| Hooks du core WordPress | Documentation officielle | https://developer.wordpress.org/reference/hooks/ |
| Base de hooks WordPress | Référence exhaustive | https://adambrown.info/p/wp_hooks |

---

# ✅ Conclusion

| Besoin | Méthode recommandée |
|--------|-------------------|
| Voir **tous** les hooks exécutés | logger avec `add_action('all')` |
| Hooks **par page** | Query Monitor |
| Hooks **du thème** | recherche `do_action()` / `apply_filters()` |
| Compréhension technique approfondie | explorer `/inc/` du thème |

👉 En maîtrisant les hooks, vous pouvez **étendre n’importe quel thème** proprement, sans perdre vos modifications lors des mises à jour ✅

---

📌 *Objectif pédagogique :*  
Savoir identifier un hook pertinent pour personnaliser un comportement (ex. modifier le footer) → puis **y accrocher** sa propre fonction dans le **thème enfant**.
