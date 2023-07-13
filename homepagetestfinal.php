<!DOCTYPE html>
<html>
<head>
    <title>Drug Dispensing System</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

h1 {
    font-family: "Arial", sans-serif; /* Specify your desired font family */
    font-size: 28px; /* Adjust the font size as needed */
    font-weight: bold; /* Add font weight if desired, e.g., bold or normal */
    color: #ffffff; /* Specify the font color */
}

header img {
    float: left;
    width: 200px; 
    height: auto; 
}

header p {
    font-size: 18px;
    margin-top: 10px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

nav li {
    display: inline;
    margin-right: 10px;
}

nav a {
    display: block;
    padding: 10px;
    color: #333;
    text-decoration: none;
}

nav a:hover {
    background-color: #333;
    color: #fff;
}

section {
    padding: 40px 0;
    text-align: center;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f2f2f2;
    color: #333;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

.btn:hover {
    background-color: #333;
    color: #fff;
}

.container {
    max-width: 960px;
    margin: 0 auto;
}

section h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.feature {
    display: inline-block;
    width: 30%;
    vertical-align: top;
    margin-bottom: 40px;
    padding: 0 20px;
    text-align: left;
}

.feature img {
    width: 200px; 
    height: auto; 
}

.feature h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.feature p {
    font-size: 16px;
}

#testimonial {
    background-color: #f2f2f2;
    padding: 40px 0;
}

.testimonial {
    display: inline-block;
    width: 45%;
    vertical-align: top;
    margin-bottom: 20px;
    padding: 20px;
    text-align: left;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.testimonial img {
    max-width: 100px;
    max-height: 100px;
    margin-bottom: 10px;
}

.testimonial blockquote {
    font-size: 18px;
    margin-bottom: 10px;
}

.testimonial cite {
    font-size: 16px;
    font-style: italic;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}
    </style>
</head>
<body>
    <header>
        <img src="logo1.png" alt="Website Logo">
        <h1> Magot & Austin Drug Dispensers</h1>
        <p>Number 1 Place To Get Your Products At The Right Quantity And Price</p>
    </header>
    
    <section id="welcome">
        <div class="container">
            <h2>Welcome to Our Drug Dispensing System</h2>
            <p>Manage all your drug needs with us. We assist doctors, patients, pharmacies, pharmaceutical companies and more.</p>
            <a href="loginformtest2.php" class="btn">SignUp/Login</a>
        </div>
    </section>
    
    <section id="features">
        <div class="container">
            <h2>Key Features</h2>
            <div class="feature">
                <img src="doctorpatient1.png" alt="Doctor Patient Relationship">
                <h3>Doctor Patient Relationship</h3>
                <p>Doctors and patients can communicate nicely and without needing a 3rd party.</p>
            </div>
            <div class="feature">
                <img src="medicinetransport.png" alt="Medicine Transport">
                <h3>Good Order System</h3>
                <p>Drugs can be easily ordered and transported right to your doorstep.</p>
            </div>
            <div class="feature">
                <img src="statistics1.png" alt="Statistics and Analysis">
                <h3>Reports On The Go</h3>
                <p>Very good and detailed reports are made at your convinience.</p>
            </div>
        </div>
    </section>
    
    <section id="testimonial">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="testimonial">
                <img src="personrate1.png" alt="User 1">
                <blockquote>
                    "I have been using this site since 2022 and all I can say is that I am very satisfied with their product."
                    <cite>- Munyani Adala, Pharmacist</cite>
                </blockquote>
            </div>
            <div class="testimonial">
                <img src="personrate12.png" alt="User 2">
                <blockquote>
                    "I have really loved their services ever since I discovered about them in 2021, They have really fast and reliable orders and none of them have ever disappeared."
                    <cite>- Jason Ngugi, Pharmacy Owner</cite>
                </blockquote>
            </div>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2023 Magot & Austin Drug Dispensers. All rights reserved.</p>
    </footer>
</body>
</html>
