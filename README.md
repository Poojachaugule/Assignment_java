# Assignment_java
Login Screen Setup:

The HTML document starts with the login screen, where users can enter their credentials (username and password) and click the "Login" button.
The form's action attribute is set to "#" (a placeholder) because the actual authentication endpoint needs to be added later.
Customer List Screen Setup:

The customer list screen is initially hidden (with the hidden class).
It displays a table for listing customer details, including First Name, Last Name, Email, and Phone.
There are buttons to "Add Customer" and "Logout."
Add Customer Form Setup:

The add customer form is initially hidden (with the hidden class).
It allows users to input customer details, including First Name, Last Name, Email, and Phone, and submit a new customer.
There's also a "Cancel" button to return to the customer list.
JavaScript for UI Transitions:

JavaScript is used to handle UI transitions between screens.
When a user submits the login form, it simulates a successful login by hiding the login screen and displaying the customer list screen.
Clicking "Add Customer" on the customer list screen hides the customer list and shows the add customer form.
Clicking "Cancel" on the add customer form hides the form and shows the customer list.
Clicking "Logout" on the customer list screen hides the customer list and shows the login screen.
API Integration Placeholder:

The HTML code provides a basic structure for your customer management system's UI.
To make it functional, you need to replace the "#" placeholders in the form action attributes with actual API endpoints for authentication and customer creation.
Additionally, you should add JavaScript code to handle API requests for features like fetching customer data, creating customers, deleting customers, and updating customer information. This code is not included in the provided HTML but should be added separately to interact with your API.
