# Get That For Me

"Get That For Me" is a web application I developed to address the common issue of forgetting to pick up items during grocery runs. This tool is particularly useful for those living with housemates or family members. Below is an overview of its key functionalities:

## Key Functionalities

- **Group Creation and Invitation**: Users have the capability to create a group within the app and generate an invitation link for their housemates to join.

- **Joining Requests**: Housemates can use the invitation link to request to join the group. These requests are then reviewed by the group admin.

- **Approval by Admin**: The group admin is empowered to approve or decline joining requests, thereby controlling who can join the group.

- **Prioritized Item Requests**: Members can list items they need, assigning them a priority level (Low, Medium, High) via a dropdown menu. This priority is visually indicated on the list by the item's background color, facilitating easy identification of each item's urgency.

- **Admin Management**: The admin has the capability to remove any member from the group if necessary.

- **Item Purchase and Removal**: When a group member purchases an item, it can be checked off and will automatically be removed from the list.

- **Personal Wish Lists (Bonus Feature)**: Users can create personal wish lists for items they'd like someone else to pick up. Members of the same group can view each other's lists by clicking on their profile names.

## Tech Stack Overview

- **Front-End**: Vue.js was chosen for its reactivity and ease of use in building dynamic user interfaces.

- **Back-End**: PHP with Laravel framework was selected for the server-side to leverage Laravel's robust features and elegant syntax for web development.

- **Integration with Inertia JS**: To seamlessly integrate the front-end and back-end, Inertia JS was used. It offers a single-page application experience by utilizing traditional server-side page rendering, while Vue.js enhances the dynamic aspects of user interaction.

# Setting Up "Get That For Me" Laravel 10 Application

Welcome to the setup guide for "Get That For Me", a Laravel 10 application. This document will guide you through the process of setting up the application on your local development environment.

## Prerequisites

Before beginning the setup process, ensure you have the following installed:

- **PHP 8.1 or higher**: Download from [php.net](https://www.php.net/downloads.php).
- **Composer 2.0 or later**: Install Composer from [getcomposer.org](https://getcomposer.org/).
- **A Web Server**: Apache, Nginx, or PHP's built-in server will work.
- **A Basic Understanding of PHP, HTML, and OOP**: These will be necessary to effectively work with the application.

## Installation guide

**Step 1**: Clone the Repository
Start by cloning the GitHub repository for "Get That For Me" to your local machine. Open your terminal, navigate to your desired directory, and execute the following command:

git clone https://github.com/<your-username>/get-that-for-me.git

Important: Make sure to replace <your-username> with your GitHub username.


**Step 2**: Install Dependencies
After cloning, move into the "Get That For Me" project directory:

cd get-that-for-me

Now, install all required PHP package dependencies listed in the composer.json file:

composer install

**Step 3**: Environment Setup
You'll need to create an .env file from the example provided. This file contains environment-specific variables critical for the app's configuration:

cp .env.example .env

Open the .env file in your favorite text editor and update it to match your local setup, focusing on the database configuration:

    DB_CONNECTION: Your database driver (e.g., mysql)
    DB_HOST: Your database host (usually localhost)
    DB_PORT: Your database port (commonly 3306)
    DB_DATABASE: The name of your database
    DB_USERNAME: Your database username
    DB_PASSWORD: Your database password

**Refer to the Laravel documentation for additional environment configuration options.**

**Step 4**: Application Key
Generate a new application key. This key encrypts your session data and other sensitive data within Laravel:

php artisan key:generate

Step 5: Create the Database (Optional)
If you haven't already, create a database for "Get That For Me" using your database management system.

**Step 6**: Database Migrations (Optional)
Apply the database migrations to set up your application's tables:

php artisan migrate

**Step 7**: Launch the Development Server
Finally, launch Laravel's built-in development server to get "Get That For Me" running on your machine:


php artisan serve
npm run dev

You can now access the application in your web browser at http://localhost:8000.
