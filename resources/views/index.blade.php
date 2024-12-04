

@extends('layouts.app')

@section('title', 'Página Inicial')

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">Career in Combat Sports</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#training">Training</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/career">Career</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <div class="container-fluid text-center bg-danger text-white py-5 mb-4">
        <h1 class="display-4">Start Your Fighting Career Today</h1>
        <p class="lead">Learn, Train, and Compete in the Best Combat Sports</p>
    </div>

    <!-- About Section -->
    <div class="container py-5 mb-4" id="about" style="background-color: #343a40;">
        <h2 class="text-center mb-4">About Us</h2>
        <p class="lead text-center">We provide the best opportunities for aspiring fighters to make their mark in combat sports. Whether you're into MMA, Boxing, or Brazilian Jiu-Jitsu, we are here to guide your journey.</p>
    </div>

    <!-- Training Section -->
    <div class="container py-5 mb-4" id="training" style="background-color: #343a40;">
        <h2 class="text-center mb-4">Training Programs</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <h3>MMA</h3>
                <p>Train like a professional MMA fighter and learn the art of mixed martial arts.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Boxing</h3>
                <p>Perfect your punches, footwork, and strategy in boxing.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>BJJ</h3>
                <p>Master Brazilian Jiu-Jitsu and become a true submission expert.</p>
            </div>
        </div>
    </div>

    <!-- Career Opportunities Section -->
    <div class="container py-5 mb-4" id="careers" style="background-color: #343a40;">
        <h2 class="text-center mb-4">Career Opportunities</h2>
        <p class="lead text-center">Explore career paths in the world of combat sports. Whether you want to become a fighter or work behind the scenes, we have the resources you need.</p>
        <div class="row">
            <div class="col-md-4 text-center">
                <h3>Professional Fighter</h3>
                <p>Join the ranks of world champions and fight in major promotions.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Trainer</h3>
                <p>Help others achieve their fighting goals by becoming a coach or personal trainer.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Event Organizer</h3>
                <p>Plan and manage thrilling live events, bringing the best fights to the world.</p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container py-5 mb-4" id="contact" style="background-color: #343a40;">
        <h2 class="text-center mb-4">Contact Us</h2>
        <p class="text-center">Have questions? Get in touch with us!</p>
        <form action="{{ route('email.store') }}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="3" name="message" placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-danger w-100">Send Message</button>
        </form>
    </div>
@section('content')
