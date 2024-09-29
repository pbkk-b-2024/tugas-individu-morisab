<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f7fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #343a40;
            margin-bottom: 20px;
        }

        h2 {
            color: #007bff;
            margin-top: 30px;
            margin-bottom: 15px;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        h4 {
            color: #212529;
            margin-top: 20px;
        }

        h5 {
            color: #6c757d;
            margin-top: 10px;
        }

        code {
            background-color: #e9ecef;
            padding: 2px 5px;
            border-radius: 0.25rem;
            font-family: 'Courier New', Courier, monospace;
        }

        pre {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 0.25rem;
            overflow-x: auto;
            border-left: 3px solid #007bff;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .api-method {
            margin-bottom: 20px;
            border-radius: 5px;
            padding: 15px;
            transition: 0.3s;
        }

        .api-method:hover {
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.2);
        }

        .get-method {
            background-color: #d4edda;
            border-left: 5px solid #28a745;
        }

        .post-method {
            background-color: #fff3cd;
            border-left: 5px solid #ffc107;
        }

        .put-method,
        .delete-method {
            background-color: #f8d7da;
            border-left: 5px solid #dc3545;
        }

        .footer {
            margin-top: 30px;
            padding: 15px 0;
            text-align: center;
            background-color: #007bff;
            color: white;
            border-radius: 0 0 8px 8px;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 class="text-center">API Documentation</h1>
        <p class="text-center">Welcome to the API documentation for our application. Below are the available endpoints.
        </p>

        <div class="api-section">
            <h2>User API Endpoints</h2>

            <div class="api-method get-method">
                <h4>1. Get All Users</h4>
                <p><strong>URL:</strong> <code>/api/users</code></p>
                <p><strong>Method:</strong> <code>GET</code></p>
                <p><strong>Description:</strong> Retrieve a list of all users.</p>
                <h5>Response:</h5>
                <pre>{
  "data": [
    {
      "id": 1,
      "name": "John Doe",
      "email": "john@example.com"
    },
    ...
  ]
}</pre>
            </div>

            <div class="api-method post-method">
                <h4>2. Create a New User</h4>
                <p><strong>URL:</strong> <code>/api/users</code></p>
                <p><strong>Method:</strong> <code>POST</code></p>
                <p><strong>Description:</strong> Create a new user.</p>
                <h5>Request Body:</h5>
                <pre>{
  "name": "Jane Doe",
  "email": "jane@example.com",
  "password": "password",
  "password_confirmation": "password",
  "role": "sales-person"
}</pre>
                <h5>Response:</h5>
                <pre>{
  "message": "User created successfully",
  "data": {
    "id": 2,
    "name": "Jane Doe",
    "email": "jane@example.com"
  }
}</pre>
            </div>

            <div class="api-method get-method">
                <h4>3. Get User by ID</h4>
                <p><strong>URL:</strong> <code>/api/users/{id}</code></p>
                <p><strong>Method:</strong> <code>GET</code></p>
                <p><strong>Description:</strong> Retrieve a specific user by their ID.</p>
                <h5>Response:</h5>
                <pre>{
  "data": {
    "id": 1,
    "name": "John Doe",
    "email": "john@example.com"
  }
}</pre>
            </div>

            <div class="api-method put-method">
                <h4>4. Update a User</h4>
                <p><strong>URL:</strong> <code>/api/users/{id}</code></p>
                <p><strong>Method:</strong> <code>PUT</code></p>
                <p><strong>Description:</strong> Update an existing user's details.</p>
                <h5>Request Body:</h5>
                <pre>{
  "name": "John Smith",
  "email": "johnsmith@example.com",
  "password": "newpassword",
  "password_confirmation": "newpassword",
  "role": "super-admin"
}</pre>
                <h5>Response:</h5>
                <pre>{
  "message": "User updated successfully",
  "data": {
    "id": 1,
    "name": "John Smith",
    "email": "johnsmith@example.com"
  }
}</pre>
            </div>

            <div class="api-method delete-method">
                <h4>5. Delete a User</h4>
                <p><strong>URL:</strong> <code>/api/users/{id}</code></p>
                <p><strong>Method:</strong> <code>DELETE</code></p>
                <p><strong>Description:</strong> Delete a user by their ID.</p>
                <h5>Response:</h5>
                <pre>{
  "message": "User deleted successfully"
}</pre>
            </div>
        </div>
    </div>

</body>

</html>
