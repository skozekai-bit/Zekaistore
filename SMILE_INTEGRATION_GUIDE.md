# SMILE Integration Guide

## Complete Setup Instructions

1. **Prerequisites**  
   - Ensure you have the following installed on your system:  
     - Node.js  
     - MongoDB  
     - Any necessary SDKs or libraries for Smile.one API.

2. **Clone the Repository**  
   ```bash  
   git clone https://github.com/skozekai-bit/Zekaistore.git  
   cd Zekaistore  
   ```

3. **Install Dependencies**  
   ```bash  
   npm install  
   ```

4. **Environment Variables**  
   - Create a `.env` file in the root of your project and add the following variables:  
     - `SMILE_API_KEY`=<your_api_key>  
     - `DATABASE_URL`=<your_database_url>

5. **Run the Application**  
   ```bash  
   npm start  
   ```

## API Documentation

- **Base URL**: `https://api.smile.one/v1/`

### Authentication
- All API calls require an `Authorization` header:  
   - `Authorization: Bearer <your_api_key>`

### Endpoints

1. **Get User Data**  
   - **Endpoint**: `GET /user`
   - **Response**:
     ```json
     {
       "id": 123,
       "name": "John Doe",
       "email": "john@example.com"
     }
     ```

2. **Update User Data**  
   - **Endpoint**: `PUT /user`
   - **Request Body**:
     ```json
     {
       "name": "New Name"
     }
     ```

## Database Schema

- **Users Table**  
   | Field              | Type         | Description                     |  
   |--------------------|--------------|---------------------------------|  
   | `id`               | ObjectId     | Unique identifier for the user |  
   | `name`             | String       | User's name                    |  
   | `email`            | String       | User's email                   |  

## Troubleshooting Guide

1. **Common Issues**  
   - **Issue**: Cannot connect to database  
     - **Solution**: Check your `DATABASE_URL` and ensure MongoDB is running.
   - **Issue**: API Key not working  
     - **Solution**: Verify your API Key is correct and has the necessary permissions.

## Webhook Configuration

1. **Setting Up Webhooks**  
   - Navigate to your Smile.one account settings  
   - Under the `Webhooks` section, add a new webhook with the following details:  
     - **URL**: `https://yourdomain.com/webhook`
     - **Events**: Select the events you want to listen for.

2. **Handling Webhooks in Your App**  
   - Create an endpoint in your application to handle incoming webhook requests.
   - Make sure to verify the incoming requests for security.

---

For further assistance, contact support at support@smile.one
