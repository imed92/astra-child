# 🔌 C’est quoi un Hook dans WordPress ? (Explication simple)

## 🎯 Définition
Un **hook** est un **point d’accroche** dans WordPress qui permet
d’ajouter ou modifier un comportement **sans** toucher au code d’origine
du core WordPress, du thème parent ou des plugins.

> 🧠 En gros : c’est une “prise électrique” dans le code où tu peux brancher ta fonction.

---

## ✅ Pourquoi c’est utile ?
- Permet de **personnaliser** un site WordPress proprement
- Garantit que tes modifications **ne sont pas écrasées** lors des mises à jour
- Permet de **s’intégrer** au fonctionnement d’un thème ou d’un plugin

---

## 🔄 Les 2 types de Hooks

| Type | Fonction | Exemple d’usage | Exemple de code |
|------|----------|----------------|----------------|
| **Action** | Ajouter du code | Afficher un texte dans le footer | `add_action()` |
| **Filter** | Modifier une donnée | Changer un titre d’article avant affichage | `add_filter()` |

---

## ⚡ Exemple de Hook ACTION
Ajouter du texte dans le footer :

```php
add_action('wp_footer', function () {
    echo '<p>Merci de votre visite 🌟</p>';
});
```
🡒 Le texte apparaît **à l’endroit où WordPress exécute `wp_footer()`**

---

## 🎨 Exemple de Hook FILTER
Modifier tous les titres d’articles :

```php
add_filter('the_title', function($title) {
    return '🔥 ' . $title;
});
```
🡒 Dans tout le site, les titres affichés auront un emoji 🔥 devant

---

## 🧠 Métaphore simple
> WordPress dit : “Je vais faire telle chose maintenant…  
> Quelqu’un veut ajouter ou modifier un truc ?”

---

## 📌 En résumé

| Phrase | Traduction |
|--------|------------|
| `do_action('mon_hook')` | “J’exécute ici les fonctions attachées” |
| `add_action('mon_hook', 'ma_fonction')` | “Je veux ajouter mon code à cet endroit” |
| `apply_filters('mon_hook')` | “Je laisse quelqu’un modifier cette valeur avant affichage” |
| `add_filter('mon_hook', 'ma_fonction')` | “Je veux changer une donnée affichée par WordPress” |

---

## ✅ Ce qu’il faut retenir
➡️ Un hook = accès au moteur WordPress  
➡️ Sans modifier les fichiers du thème parent  
➡️ Sans casser les futures mises à jour ✅

> 🎓 C’est le **meilleur** moyen de personnaliser WordPress proprement !

---

#### [👉 Suite (Qu'est-ce qu'une action ?')](actions-wp.md)
