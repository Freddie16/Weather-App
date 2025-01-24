# Weather App

A modern weather forecasting application built using React, Tailwind CSS, and a Node.js frontend interacting with a Laravel-powered backend. The app fetches real-time weather data from the OpenWeather API, providing users with current conditions, a 3-day forecast, and key metrics like temperature, wind speed, and humidity.

## Features

*   **Search Weather by City:** Easily search for weather updates in any city worldwide.
*   **Unit Switching:** Quickly toggle between Celsius and Fahrenheit for temperature display.
*   **Current Weather:** Displays current weather conditions with descriptive icons, temperature, and a brief description.
*   **3-Day Forecast:** Provides a concise weather forecast for the next three days.
*   **Additional Metrics:** Shows important weather metrics, including wind speed and humidity levels.
*   **Responsive Design:** Optimised for a seamless experience on both desktop and mobile devices.

## Technology Stack

### Frontend

*   **React:** Used for building the dynamic user interface.
*   **Tailwind CSS:** Employed for styling and ensuring a responsive design.
*   **Axios:** Utilized for making HTTP requests to the backend API.
*   **Day.js:** Used for date formatting and manipulation.

### Backend

*   **Laravel:** The backend framework responsible for handling API requests and data processing.
*   **OpenWeather API:** The primary source for fetching real-time weather data.

## Getting Started

### Prerequisites

Before running the application, ensure you have the following installed:

*   **Node.js (>=16.x recommended):** [https://nodejs.org/](https://nodejs.org/)
*   **npm or Yarn or pnpm:** (Comes with Node.js, or install separately if needed)
*   **PHP (>=8.1 recommended):** [https://www.php.net/](https://www.php.net/)
*   **Composer:** [https://getcomposer.org/](https://getcomposer.org/) (For Laravel backend dependencies)

### Installation

1.  **Clone the repository:**

    ```bash
    git clone git@github.com:Freddie16/Weather-App.git
    cd weather-App
    ```

2.  **Install frontend dependencies:**

    ```bash
    cd weather-app # Navigate to the frontend directory
    npm install  
    ```

3.  **Install backend dependencies:**

    ```bash
    cd weather-app-api
    cd weather-api
    composer install
    ```

4.  **Set up the backend environment (if applicable):**

    *   Create a `.env` file by copying `.env.example`: `cp .env.example .env`
    *   Configure your database connection in the `.env` file.
    *   Run migrations: `php artisan migrate`
    *   Generate an application key: `php artisan key:generate`

### Usage

#### Frontend

1.  **Start the development server:**

    ```bash
    cd weather-app
    npm run dev  
    ```

2.  Open the app in your browser at `http://localhost:3000`.

#### Backend

1.  **Start the backend server (if applicable):**

    ```bash
    cd weather-app-api
    cd weather-api
    php artisan serve
    ```

    The backend will typically run on `http://127.0.0.1:8000`.

### API Endpoint

The frontend fetches weather data from the following API endpoint:

`http://127.0.0.1:8000/api/weather?city={city}&units={units}`

*   `{city}`: The name of the city (e.g., "London").
*   `{units}`: The units of measurement ("metric" for Celsius or "imperial" for Fahrenheit).

## Contributing

Contributions are welcome! Please open an issue or submit a pull request.
