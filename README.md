**Expense Tracking App**
This is a simple expense tracking application built with HTML, CSS, and PHP. The app processes financial data from a provided SVC (semicolon-separated value) file, allowing users to:

View income and expenses
Track spending habits
Add new income and expenses
Calculate and display the net total
Update the original SVC file with new entries

**Features**

Data Parsing: The app reads from a SVC file and formats the data for easy display.
Add Income and Expenses: Users can add new income or expense entries to the system.
Track Net Total: The app automatically calculates the net total based on income and expense entries.
File Update: New entries are saved back to the original SVC file to ensure data is persistent across sessions.

**Technologies Used**

HTML: Structure and layout of the app.
CSS: Basic styling for the user interface.
PHP: Backend logic to process and update the SVC file, manage data, and handle form submissions.


**Prerequisites**

PHP 7.x or later installed on your machine.
A web server like Apache or Nginx (you can also use XAMPP, WAMP, or MAMP for local development).
A SVC file with data formatted in semicolon-separated values.





SVC File Format
The SVC file should be structured with the following format:

Date: The date of the transaction in YYYY-MM-DD format.
Type: Either Income or Expense.
Amount: The monetary value of the transaction.
Description: A brief description of the transaction.
Usage
Open the app in your browser.
View the list of income and expenses.
Add new income or expense by filling out the form.
Submit to update the display and calculate the net total.
The new transaction will be written to the SVC file.
