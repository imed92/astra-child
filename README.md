# Les tutos (à lire dans l'ordre)
- [Comment modifier le footer du thème Astra](cours/modifier-footer-astra.md)
- [Qu'est-ce qu'un hook ?](cours/hook.md)
- [Les actions Wordpress](cours/actions-wp.md)
- [Comment trouver tous les hooks d'un thème Wordpress](cours/trouver-les-hooks.md)

---

# 🎓 **TP : Personnaliser un thème WordPress avec un Thème Enfant**

---

## Objectif du TP
Développer un **thème enfant WordPress** afin de personnaliser au maximum le design et la structure d’un thème parent, tout en conservant la compatibilité avec les mises à jour.

---

## ✅ Travail demandé

1️⃣ **Choisir et installer un thème parent au choix**

2️⃣ **Créer un thème enfant** du thème choisi :  
- Dossier dédié → `nom-du-theme-child/`
- Fichier `style.css` avec metadata correcte + `Template: nomduparent`
- Fichier `functions.php` → chargement des styles (parent → enfant)

3️⃣ **Personnaliser le thème enfant** au maximum :
- ✅ Modifier le footer (obligatoire), via :
  - surcharge du template **ou**
  - hooks WordPress
- ✅ Appliquer des modifications CSS visibles (typos, couleurs, layout…)
- ✅ Surcharger des templates (ex : `header.php`, `single.php`, `page.php`)
- ✅ Utiliser des hooks WordPress pour ajouter ou modifier des éléments

---

## 📦 Livrable attendu

📍 **Un dépôt GitHub** public ou privé (si privé → m'ajouter en collaborateur)

### Le dépôt doit contenir :
✅ Seulement le **dossier du thème enfant**  
❌ Aucun fichier WordPress  
❌ Aucun plugin  
❌ Aucun thème parent

### Structure attendue :
```
📁 nom-du-theme-child
 ├─ style.css
 ├─ functions.php
 ├─ screenshot.png (optionnel)
 ├─ /template-parts (si utilisé)
 └─ autres templates personnalisés
```

Ajoutez un **README.md** à la racine du dépôt contenant :
- Le nom du thème parent
- Les modifications effectuées
- Les hooks/templates utilisés
- 3 captures d’écran **AVANT / APRÈS**

---

## 🛑 Interdictions
- Modifier directement le thème parent
- Mettre WordPress dans GitHub
- Faire un copier-coller complet d’un thème existant

---

### ⚡ Conseil
Testez vos modifications avec un thème parent mis à jour → le thème enfant doit continuer à fonctionner ✅

---

Bonne personnalisation à tous ! 🎨🛠️
