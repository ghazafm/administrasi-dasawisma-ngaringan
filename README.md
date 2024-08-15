# Administrasi Kependudukan Desa Ngaringan

## Meet Our Team

1. **Fauzan Ghaza Madani** - Product Manager
2. **Meisha Putradewan** - Backend Developer
3. **Mochammad Rasya Dimas Chamda** - Backend Developer
4. **Hernando Atha** - Frontend Developer

## Project Description

Administrasi Kependudukan Desa Ngaringan is a comprehensive web application designed to facilitate the management of population data in Ngaringan Village, Blitar Regency. This platform centralizes the administration of various types of data including resident records, family cards, housing information, and health data for pregnant women. It serves as a vital tool for village administrators (supervisors) and dasawisma (data inputters), providing a streamlined approach to data entry, management, and oversight.

## Main Features

**Admin:**
- User Role and Permission Management
- Data Oversight and Validation
- Dashboard Reporting
- Comprehensive Data Management (Residents, Family Cards, Housing)
- Health Data Administration (Pregnant Women)
- Data Analysis and Reporting

**Dasawisma:**
- Area-specific Data Input
- Access to Data Entry Dashboard

## Tech Stack

- **Frontend:**
  - ![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
  - ![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
  - ![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
  - ![JavaScript](https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E)

- **Backend:**
  - ![Laravel](https://img.shields.io/badge/Laravel-FB5034?style=for-the-badge&logo=laravel&logoColor=white)
  - ![Filament](https://img.shields.io/badge/Filament-FF3C7C?style=for-the-badge&logo=laravel&logoColor=white)
  - ![Sail](https://img.shields.io/badge/Laravel%20Sail-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)

- **Database:**
  - ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
  - ![phpMyAdmin](https://img.shields.io/badge/phpMyAdmin-6C78AF?style=for-the-badge&logo=phpmyadmin&logoColor=white)

- **Cloud Services:**
  - ![Cloudflare](https://img.shields.io/badge/Cloudflare-F38020?style=for-the-badge&logo=Cloudflare&logoColor=white)

- **Containerization:**
  - ![Docker](https://img.shields.io/badge/Docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white)

## How to Start the Project

1. **Clone the Repository**
   ```bash
   git clone https://github.com/ghazafm/administrasi-dasawisma-ngaringan.git
   ```

2. **Navigate to the Project Folder**
   Open your command line and go to the project directory.

3. **Create and Configure the `.env` File**
   Copy `.env.example` to create a new `.env` file and update it with your local database settings.

4. **Install PHP Dependencies**
   ```bash
   composer install
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```
   or
   ```bash
   ./script/migrate_all.zsh
   ```
   (Use the second command if the previous one doesn't apply changes to your database.)

6. **Seed the Database with Dummy Data** (Optional)
   To seed the database using Laravel Sail, you can modify the `docker-compose.yml` to include the `DB_SEED` environment variable in the `laravel.test` service.

   Example:
   ```yaml
   environment:
       ...
       DB_SEED: true
   ```

   Then, start Sail with:
   ```bash
   ./vendor/bin/sail up
   ```

   If `DB_SEED` is set to true, the database seeding will run automatically. If not, you can manually seed the database by running:
   ```bash
   ./vendor/bin/sail artisan db:seed
   ```

7. **Install JavaScript Dependencies**
   ```bash
   npm install
   ```

8. **Build Assets**
   ```bash
   npm run build
   ```

9. **Generate the Application Key** (if needed)
   ```bash
   php artisan key:generate
   ```

10. **Start Laravel Sail**
    If you are using Laravel Sail for local development, start Sail with:
    ```bash
    ./vendor/bin/sail up
    ```

11. **Start Working**
    You’re now set up and ready to begin working on the project!

## License

This project is licensed under the [MIT License](LICENSE).

## Contact

For more information, you can contact:

- Fauzan Ghaza Madani: [contact@fauzanghaza.com](mailto:contact@fauzanghaza.com)