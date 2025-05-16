# PHP, Laravel, Livewire

## 1
**Install/Update PHP, Composer and Laravel**
```bash
# Run PowerShell as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
``` 

## 2
**Create Laravel application**
Please remind yourself to add livewire when creating the laravel app.
```bash
# on this case the name of the app is «eib-site»
laravel new example-app
```

## 3
**Install Node.js**
Visit: <https://nodejs.org/en/download/>

## 4
**Build for local development**
```bash
cd example-app
npm install
npm run build
```

## 5
**Start local site**
```bash
cd example-app
composer run dev
# now the app should be accesible on: http://localhost:8000/
```

If the command above fails, do:
1. Open Powershell
2. Enter ```php -i```
3. You are gonna see near the first lines something like this:
    ```bash
    Configuration File (php.ini) Path =>
    Loaded Configuration File => C:\Users\Braunny\.config\herd-lite\bin\php.ini
    ```
4. Go to that file.
5. variables_order should be equal to ```GCPS```
