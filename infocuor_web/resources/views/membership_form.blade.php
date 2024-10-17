<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Form</title>
    <link rel="stylesheet" href="{{ asset('css/membership_form.css') }}">
</head>
<body>
    <div class="membership-form-container">
        <h1>Photography Society Membership Form</h1>
        <form action="{{ route('membership.submit') }}" method="POST">
            @csrf

            <!-- Personal Information -->
            <fieldset>
                <legend>Personal Information</legend>
                <label for="full_name">Full Name:</label>
                <input type="text" id="full_name" name="full_name" required>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3" required></textarea>
            </fieldset>

            <!-- Educational Details -->
            <fieldset>
                <legend>Educational Details</legend>
                <label for="university">University Department or Course:</label>
                <input type="text" id="university" name="university">
            </fieldset>

            <!-- Photography Experience -->
            <fieldset>
                <legend>Photography Experience</legend>
                <label for="experience_level">Level of Experience:</label>
                <select id="experience_level" name="experience_level">
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>

                <label for="interest_area">Areas of Interest:</label>
                <input type="text" id="interest_area" name="interest_area">
            </fieldset>

            <!-- Membership Type -->
            <fieldset>
                <legend>Membership Type</legend>
                <label for="membership_type">Type of Membership:</label>
                <select id="membership_type" name="membership_type">
                    <option value="regular">Regular</option>
                    <option value="student">Student</option>
                    <option value="premium">Premium</option>
                </select>
            </fieldset>

            <!-- Payment Information -->
            <fieldset>
                <legend>Payment Information</legend>
                <p>Membership Fee: $50</p>
                <label for="payment_method">Payment Method:</label>
                <select id="payment_method" name="payment_method">
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                </select>
            </fieldset>

            <!-- Consent -->
            <fieldset>
                <legend>Consent</legend>
                <label>
                    <input type="checkbox" name="terms" required> I agree to the society’s terms and conditions.
                </label>

                <label>
                    <input type="checkbox" name="data_consent" required> I consent to use of my personal data for society-related communications.
                </label>
            </fieldset>

            <!-- Additional Information -->
            <fieldset>
                <legend>Additional Information</legend>
                <label for="skills">Any skills or equipment you can bring:</label>
                <textarea id="skills" name="skills" rows="3"></textarea>

                <label for="motivation">How did you hear about the society or motivation for joining:</label>
                <textarea id="motivation" name="motivation" rows="3"></textarea>
            </fieldset>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
