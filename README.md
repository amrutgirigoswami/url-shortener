# Laravel URL Shortener

A feature-rich URL shortening service built with Laravel and Livewire, supporting user authentication, click tracking, and real-time updates.

![image](https://github.com/user-attachments/assets/5192dba9-97bd-451d-85f4-f834da1f025b)


## Features

- **URL Shortening**: Convert long URLs to short, memorable links
- **User Authentication**:
  - Registration & Login
  - Personalized Dashboard
  - Private URL History
- **Analytics**:
  - Click tracking for each shortened link
  - Creation timestamp
- **Real-time UI**:
  - Instant URL shortening
  - Dynamic updates with Livewire
- **Security**:
  - CSRF protection
  - Rate limiting
  - Secure redirects
- **Management**:
  - Delete existing short URLs
  - View original URLs
- **Responsive Design**: Mobile-friendly Bootstrap UI

## Technology Stack

- **Backend**: Laravel 10
- **Frontend**: Livewire 3, Bootstrap 5
- **Database**: MySQL
- **Authentication**: Laravel Breeze
- **Asset Bundling**: Vite

## Installation

### Prerequisites
- PHP 8.1+
- Composer
- Node.js 16+
- MySQL 5.7+

### Steps

1. Clone the repository:
```bash
git clone https://github.com/your-username/url-shortener.git
cd url-shortener

Install PHP dependencies:

bash
Copy
composer install
Create environment file:

bash
Copy
cp .env.example .env
Generate application key:

bash
Copy
php artisan key:generate
Configure database in .env:

env
Copy
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=url_shortener
DB_USERNAME=root
DB_PASSWORD=
Run migrations:

bash
Copy
php artisan migrate
Install Node.js dependencies:

bash
Copy
npm install
Build assets:

bash
Copy
npm run build
Start development server:

bash
Copy
php artisan serve
Visit http://localhost:8000 in your browser.

Usage
For Guests
Shorten URLs without registration

View public recent URLs

For Registered Users
Register/Login

Access via navigation menu

Dashboard Features

View personal URL history

See click statistics

Delete existing short URLs

Copy short links to clipboard

Shortening URLs

Enter URL in homepage input

Get instant short link

Automatically appears in dashboard

Deployment
For production deployment:

Set APP_ENV=production in .env

Optimize Laravel:

bash
Copy
php artisan optimize
Configure web server (Nginx/Apache)

Set up database credentials

For shared hosting:

Upload files to public_html

Point document root to /public

API Usage (Optional)
Endpoints for authenticated users:

bash
Copy
POST /api/shorten
Headers: Authorization: Bearer {API_TOKEN}
Body: { "url": "https://example.com" }

GET /api/links
Headers: Authorization: Bearer {API_TOKEN}
Generate API tokens via user profile page.

Contributing
Fork the repository

Create feature branch:

bash
Copy
git checkout -b feature/amazing-feature
Commit changes

Push to branch

Open Pull Request

License
MIT License. See LICENSE file.

Acknowledgments
Built with Laravel

UI powered by Livewire

Styled with Bootstrap

Copy

**Recommendations for Better Documentation:**

1. Add screenshots:
   - Create `/public/screenshots` directory
   - Include images of:
     - Homepage
     - Dashboard
     - Authentication forms
   - Update markdown with actual image paths

2. Add deployment guides for popular platforms:
   ```markdown
   ## Deployment Guides

   ### Heroku
   [![Deploy to Heroku](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

   ### Forge
   - Create new Laravel site
   - Set environment variables
   - Deploy via GitHub integration
Include troubleshooting section:

markdown
Copy
## Troubleshooting

**Vite Manifest Error**
```bash
npm install && npm run dev
Migration Errors

bash
Copy
php artisan migrate:fresh
Permission Issues

bash
Copy
chmod -R 755 storage
chmod -R 755 bootstrap/cache
Copy
Add testing instructions:

markdown
Copy
## Running Tests
```bash
php artisan test
