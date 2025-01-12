<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <title>Swim Club</title>
</head>

<body>
    <section class="container">
        <div class="jumbotron mt-4">
            <h1 class="display-4">Welcome to Swim Club</h1>
            <p class="lead">Join us and improve your swimming skills!</p>
        </div>

        <div class="row" id="tips">
        <h2>Tips & Tricks</h2>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Tip 1">
                    <div class="card-body">
                        <h5 class="card-title">Tip 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                            efficitur
                            tortor ac ultrices.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Tip 2">
                    <div class="card-body">
                        <h5 class="card-title">Tip 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                            efficitur
                            tortor ac ultrices.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Tip 3">
                    <div class="card-body">
                        <h5 class="card-title">Tip 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                            efficitur
                            tortor ac ultrices.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/350x200" class="img-fluid" alt="About Us Image">
                </div>
                <div class="col-md-6">
                    <h2>About SwimHub</h2>
                    <p>SwimHub is a premier swimming club dedicated to providing high-quality swimming lessons and
                        training programs for all ages and skill levels. Our experienced instructors are passionate
                        about teaching and helping individuals achieve their swimming goals. Join us today and discover
                        the joy of swimming!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section id="events" class="events m-5">
        <div class="container">
            <h2>Upcoming Events</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Event 1">
                        <div class="card-body">
                            <h5 class="card-title">Swim Meet</h5>
                            <p class="card-text">Join us for an exciting swim meet on July 15th. Show off your skills
                                and compete against other swimmers in a friendly environment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Event 2">
                        <div class="card-body">
                            <h5 class="card-title">Beginners Workshop</h5>
                            <p class="card-text">New to swimming? Join our beginners workshop on August 5th and learn
                                the basics of swimming with our expert instructors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Event 2">
                        <div class="card-body">
                            <h5 class="card-title">Beginners Workshop</h5>
                            <p class="card-text">New to swimming? Join our beginners workshop on August 5th and learn
                                the basics of swimming with our expert instructors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="contact mt-5" >
        <div class="container">
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5"
                                placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/350x200" class="img-fluid" alt="Contact Us Image">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <p>&copy; 2023 Swim Club. All rights reserved.</p>
        </div>
    </footer>