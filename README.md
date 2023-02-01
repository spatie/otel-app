# Otel-app

This repo contains an app to test out our laravel-open-telemetry package

## Installation

In your code directory:

```bash
git clone spatie/laravel-open-telemetry
git clone spatie/otel-app
cd otel-app
composer install
php artisan key:generate
php artisan test
```

In the otel example project

```bash
docker-compose up -d
```

Jaeger ui will be visiable at http://localhost:16686/search
