
# Dashboard de KPIs

## Descrição
Dashboard simples para visualização de indicadores de desempenho (KPIs) com:
- Listagem de 4 KPIs principais
- Atualização automática a cada 30 segundos
- Tela de login básica

## Tecnologias
- **Backend**: Laravel 12
- **Frontend**: React + Tailwind CSS
- **Banco de dados**: MySQL

## Como rodar

1. Instale as dependências:

```bash
composer install
npm install
```

2. Configure o arquivo `.env`:

```bash
cp .env.example .env

Crie o banco de dados no MySQL (por exemplo: kpi_dashboard)
Edite o arquivo .env e ajuste as variáveis de conexão com o banco (DB_DATABASE, DB_USERNAME, DB_PASSWORD, etc.)

php artisan key:generate
php artisan migrate --seed
```

3. Inicie os servidores:

```bash
composer run dev
```

4. Acesse no navegador:

```
http://localhost:8000
```

## Dados de acesso

- **Email:** admin@dashboard.com  
- **Senha:** admin

## Endpoints disponíveis

| Método | Rota       | Descrição                     |
|--------|------------|------------------------------|
| GET    | /api/kpis  | Retorna os KPIs               |
| POST   | /api/login | Faz login (mockado)           |