USE form_db;
-- Insert example data into add_client table
INSERT INTO add_client (first_name, last_name, email, phone_number, address)
VALUES
    ('John', 'Doe', 'john.doe@example.com', '1234567890', '123 Main Street'),
    ('Jane', 'Smith', 'jane.smith@example.com', '9876543210', '456 Park Avenue');

-- Insert example data into meals table
INSERT INTO meals (email, phone_number, type, requirement)
VALUES
    ('john.doe@example.com', '1234567890', 'Breakfast', 'Vegetarian'),
    ('jane.smith@example.com', '9876543210', 'Lunch', 'Non-Vegetarian');

-- Insert example data into signup table
INSERT INTO signup (email, phone_number, username, password, retype_password)
VALUES
    ('john.doe@example.com', '1234567890', 'johndoe', 'hashed_password', 'hashed_password'),
    ('jane.smith@example.com', '9876543210', 'janesmith', 'hashed_password', 'hashed_password');

-- Insert example data into us table
INSERT INTO us (email, phone_number, requirement)
VALUES
    ('john.doe@example.com', '1234567890', 'Weight Loss'),
    ('jane.smith@example.com', '9876543210', 'Strength Training');

-- Insert example data into users table
INSERT INTO users (username, password, role)
VALUES
    ('admin', 'hashed_admin_password', 'administrator'),
    ('user1', 'hashed_user1_password', 'regular user');

-- Insert example data into workouts table
INSERT INTO workouts (email, phone_number, type, requirement)
VALUES
    ('john.doe@example.com', '1234567890', 'Cardio', 'Endurance Training'),
    ('jane.smith@example.com', '9876543210', 'Yoga', 'Flexibility');
