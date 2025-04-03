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

