# Location Tracking Project

## Overview

This project tracks and records the geographical location of users visiting a webpage. It utilizes the Geolocation API to collect latitude and longitude data and stores this information in either a database or a text file. The project also includes a dashboard to view the collected data.

## Files

### 1. `collect_data.php`
Collects IP address, user agent, latitude, and longitude from the GET parameters and saves them into a database.

### 2. `dashboard.php`
Displays the collected data from the database in a tabular format, showing IP address, user agent, latitude, longitude, and visit time.

### 3. `index.html`
The main webpage that uses the Geolocation API to get the user's current location and sends it to `collect_data.php`.

### 4. `save_location.php`
Saves latitude and longitude data to a text file (`location.txt`).

### 5. `styles.css`
Provides the styling for the webpage, including layout and appearance of the content.

## Setup and Installation

1. **Database Setup (for `collect_data.php` and `dashboard.php`)**:
   - Create a MySQL database named `location_tracking`.
   - Create a table named `visits` with the following structure:
     ```sql
     CREATE TABLE visits (
         id INT AUTO_INCREMENT PRIMARY KEY,
         ip_address VARCHAR(50),
         user_agent TEXT,
         latitude FLOAT(10, 6),
         longitude FLOAT(10, 6),
         visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

2. **File Setup**:
   - Place all PHP files (`collect_data.php`, `dashboard.php`, `save_location.php`) in your web server's root directory.
   - Ensure that the `index.html` file is accessible and linked correctly.
   - Upload the `styles.css` to the same directory as `index.html` or update the path as necessary.

3. **Web Server**:
   - Ensure you have a web server (like Apache or Nginx) and PHP installed.
   - Configure your server to use the database connection settings in the PHP files.

4. **Testing**:
   - Open `index.html` in a browser. It will attempt to get your current location and send it to `collect_data.php`.
   - Verify that the data is being collected by checking `location.txt` or the database.
   - View the collected data by navigating to `dashboard.php`.

## Enhancements

- **Improve Accuracy**: Update `getLocation()` function in `index.html` to use `enableHighAccuracy: true` to improve the accuracy of location data.
- **File Storage**: Consider saving data in JSON format for better organization and scalability.
- **Map Integration**: Add a map interface (e.g., using Leaflet or Google Maps) to visualize the locations.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contributing

Feel free to submit issues or pull requests to contribute to the project.

## Contact

For any inquiries or support, please contact [your-email@example.com](mailto:your-email@example.com).

