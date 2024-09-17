# Google Ads Dashboard Gebruiken

Volg de onderstaande stappen om het Google Ads Dashboard op uw lokale machine te installeren en te gebruiken.

## Installatie-instructies

### Stap 1: Clone de Repository

Clone de repository van GitHub:

```bash
git clone https://github.com/henrik561/google-dashboard.git
```

### Stap 2: Navigeer naar de Projectdirectory

Ga naar de projectdirectory:

```bash
cd google-dashboard
```

### Stap 3: Kopieer het .env Bestand

Kopieer het voorbeeld `.env`-bestand en pas het aan:

```bash
cp .env.example .env
```

### Stap 4: Genereer een Applicatiesleutel

Genereer een nieuwe applicatiesleutel:

```bash
php artisan key:generate
```

### Stap 5: Configureer de ENV

Open het `.env`-bestand en vul de instellingen in:

### Stap 6: Installeer PHP Dependencies

Installeer de PHP-dependencies met Composer:

```bash
composer install
```

### Stap 7: Installeer Node.js Dependencies

Installeer de Node.js-dependencies met npm:

```bash
npm install
```

### Stap 8: Build de Front-end Assets

Bouw de front-end assets:

```bash
npm run build
```

### Stap 9: Voer Database Migraties Uit

Voer de database migraties uit om de vereiste tabellen te creëren:

```bash
php artisan migrate
```

### Stap 10: Seed de Database

Vul de database met voorbeeldgegevens:

```bash
php artisan db:seed
```

### Stap 11: Start de Applicatie

Start de lokale ontwikkelingsserver:

```bash
php artisan serve
```

Open uw webbrowser en ga naar `http://localhost:8000` om de applicatie te bekijken.

## Inloggen

U kunt inloggen met de volgende gegevens:

- **E-mailadres:** henrik@designated.nl
- **Wachtwoord:** admin

Veel plezier!

## Tests Uitvoeren

Om te controleren of de applicatie correct werkt, voert u het volgende commando uit:

```bash
php artisan test
```
