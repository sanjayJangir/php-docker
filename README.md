# PHP Laravel (or Core PHP) Project with Docker + Caddy + MySQL

This project uses Docker to set up a PHP (FPM) environment with Caddy web server and optional MySQL integration. It also includes a GitHub Actions workflow to auto-deploy to a remote server over SSH.

---

## 📦 Project Structure

your-php-project/
├── public/ # PHP source files (index.php, etc.)
├── Dockerfile # Builds PHP-FPM image
├── docker-compose.yml # Orchestrates PHP + Caddy (+ MySQL)
├── Caddyfile # Web server rules for Caddy
└── .github/
└── workflows/
└── deploy.yml # GitHub Actions deployment config
