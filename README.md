# Jawa Timur Tourism API Gateway

This application serves as an API gateway for accessing tourism data (wisata) for regions (daerah) in East Java, Indonesia. It provides secure API access through user-generated API keys and offers a complete management dashboard.

## Features

### API Gateway
- RESTful API endpoints for accessing tourism data
- Secure authentication using API keys
- Support for both header-based and query parameter authentication

### API Key Management
- Generate unlimited API keys per user
- Name and describe keys for easy identification
- View key usage statistics (last used timestamp)
- Set expiration dates for keys (optional)
- Activate/deactivate keys without deleting them
- Copy key values to clipboard

### Available Endpoints
- `GET /api/daerahs` - List all regions
- `GET /api/wisatas` - List all tourism spots
- `GET /api/wisatas/daerah/{id_daerah}` - List tourism spots in a specific region
- `GET /api/wisatas/cari-daerah` - Search tourism spots by region name
- `GET /api/wisatas/daerah/{id_daerah}/wisata/{id}` - Get details for a specific tourism spot

## Installation

### Requirements
- PHP 8.1 or higher
- Composer
- MySQL or compatible database
- Node.js and NPM (for frontend assets)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/wisata-jawatimur-api-gateway.git
   cd wisata-jawatimur-api-gateway
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set up your database**
   - Configure database connection in the `.env` file
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

5. **Run migrations and seeders**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Build frontend assets**
   ```bash
   npm run build
   ```

7. **Start the server**
   ```bash
   composer run dev
   ```

8. **Access the application**
   - Visit `http://localhost:8000` in your browser
   - Register a new account or login
   - Generate API keys from the dashboard

## Usage

### Authentication

The API supports authentication with Bearer Token method:

**Bearer Token**
   ```bash
   curl -X GET "http://localhost:8000/api/daerahs" \
     -H "Authorization: Bearer YOUR_API_KEY" \
     -H "Accept: application/json"
   ```
   
### Response Format

All API responses are in JSON format:

```json
{
    "data": [...],
    "links": {...},
    "meta": {...}
}
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
