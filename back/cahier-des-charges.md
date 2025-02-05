# 📜 Cahier des Charges - Plateforme de Freelance

## **1️⃣ Introduction**

### **1.1 Contexte et Objectifs**

Avec l’essor du travail indépendant, la mise en relation des freelances et des clients devient une nécessité croissante. Ce projet a pour objectif de développer une plateforme permettant aux **clients** de publier des **missions** et aux **freelances** de proposer leurs **services**, avec une gestion complète des **réservations**, **paiements**, **évaluations**, et **badges**.

### **1.2 Objectifs Fonctionnels**

✅ Permettre aux clients de **publier des offres de missions** et aux freelances de **postuler**.  
✅ Offrir un **système de paiement sécurisé** via **Stripe**.  
✅ Gérer les **réservations** et la facturation.  
✅ Offrir un **tableau de bord** pour les administrateurs.  
✅ Assurer une **API REST** robuste pour intégration future.

---

## **2️⃣ Spécifications Fonctionnelles**

### **2.1 Types d’Utilisateurs**

| Rôle               | Permissions                                                                                           |
| ------------------ | ----------------------------------------------------------------------------------------------------- |
| **Client**         | Publier une mission, gérer ses annonces, embaucher un freelance, payer des services, laisser un avis. |
| **Freelance**      | Créer et modifier ses services, postuler à des missions, recevoir des paiements.                      |
| **Administrateur** | Gérer les utilisateurs, surveiller les paiements, modérer les annonces et avis.                       |

### **2.2 Authentification & Sécurité**

- **Connexion via formulaire** (email/mot de passe) + chiffrement des mots de passe avec bcrypt.
- **Protection CSRF/XSS** et politique **CORS stricte** pour l’API.
- **Permissions via Symfony Security** (`ROLE_CLIENT`, `ROLE_FREELANCER`, `ROLE_ADMIN`).

### **2.3 Gestion des Missions (Clients)**

- **Créer une mission** avec titre, description, budget.
- **Modifier/Supprimer** une mission.
- **Consulter les candidatures** reçues.
- **Accepter ou refuser** un freelance.

### **2.4 Gestion des Services (Freelances)**

- **Créer un service** avec titre, prix, catégorie.
- **Modifier/Supprimer** un service.
- **Recevoir des demandes de clients.**

### **2.5 Réservations & Paiements**

- **Réserver un service** avec validation par le freelance.
- **Paiement sécurisé** via **Stripe**.
- **Factures générées automatiquement** après paiement.

### **2.6 Système d’Évaluation et Avis**

- Les **clients peuvent noter** les freelances après une mission.
- Les **freelances peuvent répondre** aux avis reçus.

### **2.7 Gamification (Badges)**

- Les freelances peuvent gagner des **badges** en fonction de leur activité.

---

## **3️⃣ Modélisation de la Base de Données**

### **3.1 Schéma Relationnel (Simplifié)**

- **`User`** (id, email, password, roles, username)
- **`Job`** (id, title, description, budget, user_id)
- **`Service`** (id, title, price, freelancer_id)
- **`Category`** (id, name)
- **`Reservation`** (id, service_id, client_id, status)
- **`Review`** (id, rating, comment, client_id, freelancer_id)
- **`Badge`** (id, name, freelancer_id)

---

## **4️⃣ Architecture Technique**

### **4.1 Technologies Utilisées**

✅ **Backend** : Symfony 7.2 + API Platform  
✅ **Base de données** : MySQL 8.0 avec Doctrine ORM  
✅ **Frontend** : (Templates Twig)  
✅ **Sécurité** : Symfony Security, OAuth Google, JWT  
✅ **Paiement** : Stripe API  
✅ **Infrastructure** : Docker avec Nginx et PHP-FPM

### **4.2 Déploiement & CI/CD**

- **Dockerisation complète** avec `docker-compose.yml`.
- **CI/CD via GitHub Actions** (tests, build, déploiement).
- **Hébergement sur AWS/DigitalOcean/VPS**.

---

## **5️⃣ Optimisation & Sécurité**

### **5.1 Sécurité des Données**

- **Chiffrement des mots de passe** avec bcrypt.
- **Sécurisation des API avec JWT et OAuth.**
- **Gestion avancée des permissions** avec Symfony Security.

### **5.2 Optimisation des Performances**

- **Mise en cache Redis** pour les requêtes fréquentes.
- **Pagination API** pour limiter la charge serveur.
- **Optimisation des requêtes SQL** (indexation, chargement différé).

---

## **6️⃣ Conclusion**

Ce projet offre une **plateforme complète et évolutive** pour freelances et clients. Il intègre **une API robuste**, un **système sécurisé de paiement**, et une architecture **optimisée pour la scalabilité** grâce à Docker et CI/CD.
