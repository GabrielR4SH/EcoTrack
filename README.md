# EcoTrack

Mini plataforma SaaS multi-tenant de gestão e rastreamento de emissões de CO₂, inspirada na GreenPlat™.

Desenvolvido com foco em aprendizado de arquitetura real de SaaS (Laravel + React + Multitenancy + Docker).

## Stack

- **Backend:** Laravel 13 + Sanctum
- **Frontend:** React + Vite + Tailwind CSS
- **Banco de dados:** MySQL 8
- **Infraestrutura:** Docker + Docker Compose (customizado, sem Sail)
- **Multitenancy:** Shared Database com `tenant_id`

## Funcionalidades previstas

- Autenticação (Login / Registro)
- Multitenancy (cada empresa isolada)
- CRUD de Emissões de CO₂
- Dashboard simples
- Identidade visual inspirada na GreenPlat (tons de verde)

## Pré-requisitos

- Docker + Docker Compose
- Git

## Como rodar o projeto

```bash
# 1. Clone o repositório
git clone https://github.com/GabrielR4SH/EcoTrack.git
cd EcoTrack

# 2. Suba os containers
docker compose up -d --build

# 3. Entre no container da aplicação
docker compose exec app bash

# 4. Configure o Laravel
composer install
cp .env.example .env
php artisan key:generate

# 5. Rode as migrations
php artisan migrate