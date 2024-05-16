# ElectriSafe

ElectriSafe is a Laravel-based web application designed to track pole wire manufacturers using RFID technology. This application aims to streamline the management of pole wire manufacturing processes, enhance traceability, and ensure compliance with safety standards in the electrical industry.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Technologies Used](#technologies-used)
- [License](#license)

## Features

### RFID Integration:

- Utilizes RFID technology for tracking pole wire manufacturers.
- RFID tags for unique identification of pole wire products.
- Integration with RFID readers for scanning and recording manufacturing data.

### Manufacturer Management:

- Register and manage pole wire manufacturers.
- Maintain manufacturer profiles with contact information and product details.

### Manufacturing Process Tracking:

- Track the manufacturing process of pole wire products.
- Record production stages, quality control checks, and inspections.

### Inventory Management:

- Manage inventory of pole wire products.
- Track stock levels, locations, and movements.

### Compliance and Safety:

- Ensure compliance with safety standards and regulations.
- Record safety inspections and certifications.

### Reporting and Analytics:

- Generate reports on manufacturing efficiency, product quality, and inventory status.
- Analytics dashboard for visualizing manufacturing trends and performance metrics.

### User Management:

- Role-based access control for administrators, supervisors, and operators.
- User authentication, authorization, and profile management.

## Installation

1. Clone the ElectriSafe repository from GitHub.
2. Set up a MySQL database for ElectriSafe.
3. Install PHP dependencies using Composer.
4. Configure environment variables in the `.env` file.
5. Run database migrations to set up the required tables.
6. Serve the application using `php artisan serve`.

## Usage

Users need to create a MySQL database, install PHP dependencies, configure environment variables, run database migrations, and serve the application.

## Technologies Used

- **Backend**: Laravel PHP framework
- **Frontend**: Blade templating engine, HTML5, CSS3, JavaScript
- **Database**: MySQL
- **RFID Integration**: RFID tags, RFID readers
- **Security**: Encryption, access control

## License

This project is licensed under the [MIT License](LICENSE).
