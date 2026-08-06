# EcoTrack

<p align="center">
  <img src="https://raw.githubusercontent.com/GabrielR4SH/EcoTrack/main/ecotrack-logo.svg" alt="EcoTrack Logo" width="280">
</p>

<p align="center">
  <strong>Mini plataforma SaaS multi-tenant de gestão e rastreamento de emissões de CO₂</strong><br>
  Inspirada na <a href="https://greenplat.com">GreenPlat™</a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-13-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/React-18-61DAFB?style=flat-square&logo=react&logoColor=black" alt="React">
  <img src="https://img.shields.io/badge/MySQL-8-4479A1?style=flat-square&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Docker-Ready-2496ED?style=flat-square&logo=docker&logoColor=white" alt="Docker">
  <img src="https://img.shields.io/badge/Multitenancy-Yes-0D9488?style=flat-square" alt="Multitenancy">
</p>

---

## Sobre o projeto

O **EcoTrack** é um projeto de estudo que simula uma plataforma real de gestão ambiental (estilo GreenPlat).  
O foco é aprender arquitetura de SaaS multi-tenant com as tecnologias mais usadas no mercado.

### Stack

| Camada          | Tecnologia                          |
|-----------------|-------------------------------------|
| Backend         | Laravel 13 + Sanctum                |
| Frontend        | React + Vite + Tailwind CSS         |
| Banco de dados  | MySQL 8                             |
| Infraestrutura  | Docker + Docker Compose (sem Sail)  |
| Multitenancy    | Shared Database + `tenant_id`       |

### Funcionalidades previstas

- Login e Registro
- Multitenancy (isolamento por empresa)
- CRUD de Emissões de CO₂
- Dashboard simples
- Identidade visual com cores da GreenPlat

---

## Como rodar

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
php artisan migrate
