# Laravel Development with Livewire Tutorial

## Create Project

### 1
**Install XAMPP.**

[XAMPP](https://www.apachefriends.org/)

### 2
**Install Composer.**

Please remind to link it with the php.exe file inside ```xampp/php/```

[Composer](https://getcomposer.org/)

### 3
**Install Laravel via Composer.**

```bash
composer global require laravel/installer
```

### 4
**Create an Application.**

```bash
laravel new example-app
```

### 5
**Install Livewire.**

```bash
cd example-app
composer require livewire/livewire
```

### 6
**Run migrations.**

```bash
cd example-app
php artisan migrate
```

### 7
**Start local development server.**

```bash
cd example-app
npm install
npm run build
```

### 8
**Start Vite development server.**
```bash
cd example-app
composer run dev
```

## Usefull Stuff

### A
**Create Livewire component.**

```bash
# https://livewire.laravel.com/docs/components
php artisan make:livewire random-component

# on web.php, add:
# use App\Livewire\RandomComponent;
# Route::get('/myroutelol', RandomComponent::class);

# if first time:
php artisan livewire:layout
```
