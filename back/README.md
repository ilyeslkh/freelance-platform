# 📖 Guide d'Installation et de Démarrage du Projet Symfony Freelance

## **1️⃣ Prérequis**

Avant de commencer, assurez-vous d'avoir installé :

- **PHP 8.2** ou supérieur
- **Composer** (gestionnaire de dépendances PHP)
- **MySQL 8.0** (ou MariaDB compatible)
- **Symfony CLI** (recommandé)
- **Docker et Docker Compose** (si vous utilisez la conteneurisation)
- **Node.js et npm** (si Webpack Encore est utilisé pour les assets)

---

## **2️⃣ Installation du Projet**

### **2.1 Cloner le projet**

```sh
git clone https://github.com/ilyeslkh/freelance-app.git
cd symfony-freelance/back
```

### **2.2 Installer les dépendances PHP**

```sh
composer install
```

### **2.3 Configurer les variables d’environnement**

Copiez le fichier `.env` en `.env.local` et configurez votre base de données :

```sh
cp .env .env.local
```

Editez `.env.local` et mettez à jour la connexion à MySQL :

```env
DATABASE_URL="mysql://root:root@127.0.0.1:3306/freelance_bd"
```

### **2.4 Exécuter les migrations et charger les fixtures**

```sh
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```

### **2.5 Installer les dépendances front-end (si applicable)**

```sh
npm install
npm run dev
```

---

## **3️⃣ Démarrer le Projet**

### **3.1 Avec un serveur Symfony local**

```sh
symfony server:start
```

Accédez à l’application sur [http://127.0.0.1:8000](http://127.0.0.1:8000)

### **3.2 Avec Docker**

```sh
docker-compose up --build -d
```

Accédez à l’application sur [http://localhost:8080](http://localhost:8080)

### **3.3 Lancer les tests unitaires**

```sh
php bin/phpunit
```

---

## **4️⃣ Comptes de Test**

### **4.1 Comptes Admin**

| Email          | Mot de passe |
| -------------- | ------------ |
| admin@test.com | admin123     |

### **4.2 Comptes Freelance**

| Email               | Mot de passe |
| ------------------- | ------------ |
| freelance1@test.com | freelance123 |

### **4.3 Comptes Client**

| Email            | Mot de passe |
| ---------------- | ------------ |
| client1@test.com | client123    |

---

## **5️⃣ Processus de Validation et Déploiement**

### **5.1 Vérifications avant commit**

Avant de valider votre code, assurez-vous de :

- Lancer `php bin/phpstan analyse src/` pour vérifier la qualité du code
- Exécuter `php bin/phpunit` pour valider les tests

### **5.2 Déploiement avec Git et Docker**

1. **Commit et push**

```sh
git add .
git commit -m "Nouvelle fonctionnalité"
git push origin main
```

2. **Connexion au serveur distant**

```sh
ssh user@server-ip
```

3. **Mise à jour et redémarrage des services**

```sh
docker-compose pull
docker-compose up --build -d
```

---

## **6️⃣ Résolution des Problèmes**

| Problème                     | Solution                                             |
| ---------------------------- | ---------------------------------------------------- |
| Erreur de connexion à la BDD | Vérifiez `DATABASE_URL` dans `.env.local`            |
| Problème avec Docker         | Exécutez `docker-compose logs` pour voir les erreurs |
| Symfony ne démarre pas       | Exécutez `php bin/console cache:clear`               |

🚀 **Le projet est maintenant prêt à être utilisé !**
