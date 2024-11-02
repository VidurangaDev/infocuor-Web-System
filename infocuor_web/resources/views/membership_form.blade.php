<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="form-container">
        <h1>Membership Form</h1>
        
        <form action="{{ route('membership.store') }}" method="POST">
        @csrf
            <!-- Personal Information Section -->
            <h2>Personal Information</h2>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            
            <!-- Educational Details Section -->
            <h2>Educational Details</h2>
            <label for="department">University Department/Course:</label>
            <input type="text" id="department" name="department" required>
            
            <!-- Photography Experience Section -->
            <h2>Photography Experience</h2>
            <label for="experience">Level of Experience:</label>
            <select id="experience" name="experience">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
            
            <label for="interest">Areas of Interest:</label>
            <input type="text" id="interest" name="interest" placeholder="e.g., landscape, portrait, street photography">
            
            <!-- Membership Type Section -->
            <h2>Membership Type</h2>
            <label for="membership">Type of Membership:</label>
            <select id="membership" name="membership">
                <option value="regular">Regular</option>
                <option value="student">Student</option>
                <option value="premium">Premium</option>
            </select>
            
            <!-- Payment Information Section -->
            <h2>Payment Information</h2>
            <label for="fee">Membership Fee Details:</label>
            <input type="text" id="fee" name="fee" placeholder="Enter fee amount">
            
            <label for="payment">Payment Method:</label>
            <select id="payment" name="payment">
                <option value="credit-card">Credit Card</option>
                <option value="debit-card">Debit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank-transfer">Bank Transfer</option>
            </select>
            
            <!-- Consent Section -->
            <h2>Consent</h2>
            <label>
                <input type="checkbox" name="terms" required>
                I agree to the society’s terms and conditions
            </label>
            <label>
                <input type="checkbox" name="consent" required>
                I consent to the use of my personal data for society-related communications
            </label>
            
            <!-- Additional Information Section -->
            <h2>Additional Information</h2>
            <label for="skills">Skills/Equipment You Can Bring:</label>
            <input type="text" id="skills" name="skills">
            
            <label for="motivation">How Did You Hear About Us / Motivation for Joining:</label>
            <textarea id="motivation" name="motivation" rows="4"></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="form-container">
        <h1>Membership Form</h1>
        
        <form>
            <!-- Personal Information Section -->
            <h2>Personal Information</h2>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>
            
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            
            <!-- Educational Details Section -->
            <h2>Educational Details</h2>
            <label for="department">University Department/Course:</label>
            <input type="text" id="department" name="department" required>
            
            <!-- Photography Experience Section -->
            <h2>Photography Experience</h2>
            <label for="experience">Level of Experience:</label>
            <select id="experience" name="experience">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
            
            <label for="interest">Areas of Interest:</label>
            <input type="text" id="interest" name="interest" placeholder="e.g., landscape, portrait, street photography">
            
            <!-- Membership Type Section -->
            <h2>Membership Type</h2>
            <label for="membership">Type of Membership:</label>
            <select id="membership" name="membership">
                <option value="regular">Regular</option>
                <option value="student">Student</option>
                <option value="premium">Premium</option>
            </select>
            
            <!-- Payment Information Section -->
            <h2>Payment Information</h2>
            <label for="fee">Membership Fee Details:</label>
            <input type="text" id="fee" name="fee" placeholder="Enter fee amount">
            
            <label for="payment">Payment Method:</label>
            <select id="payment" name="payment">
                <option value="credit-card">Credit Card</option>
                <option value="debit-card">Debit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank-transfer">Bank Transfer</option>
            </select>
            
            <!-- Consent Section -->
            <h2>Consent</h2>
            <label>
                <input type="checkbox" name="terms" required>
                I agree to the society’s terms and conditions
            </label>
            <label>
                <input type="checkbox" name="consent" required>
                I consent to the use of my personal data for society-related communications
            </label>
            
            <!-- Additional Information Section -->
            <h2>Additional Information</h2>
            <label for="skills">Skills/Equipment You Can Bring:</label>
            <input type="text" id="skills" name="skills">
            
            <label for="motivation">How Did You Hear About Us / Motivation for Joining:</label>
            <textarea id="motivation" name="motivation" rows="4"></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
