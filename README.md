 Task Management project for **Osolutions** — this task took approximately 7 hours to complete, spread over two separate days.

## Installation

1. Clone the repository:
   ```git clone https://github.com/marwanosama8/task-management.git```
   and
   ```cd task-management ```

2. Install PHP dependencies:
  ```composer install```

3. Copy the example environment file and configure it:
  ```cp .env.example .env```

4. Generate the application key:
    ```php artisan key:generate```

5. Run the database migrations:
   ```php artisan migrate```

6. Seed the database (optional but recommended):
   ```php artisan db:seed```

7. Set your API Key in the .env file:
   ```API_KEY=EX398nh32y58ddbl```

## API Testing

In the root folder, you will find a Postman collection (Task Mangment Endpoints.postman_collection.json).
Import it into Postman to test all the available API endpoints.
Each endpoint in the collection includes **example request and response bodies** to help you understand the expected output.

## Development Server

Run the Laravel development server:
   ```php artisan serve```

Your app will be available at:
   http://127.0.0.1:8000
   
## Project Architecture & Best Practices

- **Repository Design Pattern**  
  Used to separate database interaction logic from controllers. This keeps controllers clean and focused only on request handling and response formatting.

- **Centralized Error Handling**  
  Implemented a custom error handler to unify and customize the structure of API responses when errors occur, making them more consistent and developer-friendly.

- **API Resource Routes**  
  Used the `ApiResource` method in the Route facade to quickly generate full RESTful routes for resources, saving time and reducing repetitive code.

- **Service for Image Generation**  
  Created a dedicated Image Generator Service to achieve proper separation of concerns and keep image-related logic isolated from other parts of the app.

- **Repository Service Provider**  
  Added a custom Repository Service Provider to bind abstract classes to their concrete implementations.  
  This makes dependency injection cleaner and helps maintain loose coupling throughout the application.

- **Foreign ID for Database Relationships**  
  Used the foreignId method in the tasks table migration to create a foreign key relationship between category_id in the tasks table and the id field in the categories table,
  ensuring data integrity and proper relational mapping.


## Requirements ##

- PHP >= 8.1
- Composer
- MySQL or PostgreSQL (or another supported database)
