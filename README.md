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
docker run -d -p 9411:9411 openzipkin/zipkin
```

Zipkin will be visible at http://localhost:9411
