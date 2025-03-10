<?php
$pricing = [
    'Free' => [
        'price' => '0',
        'features' => ['Task Management', 'Reminders & Alerts']
    ],
    'Pro' => [
        'price' => '9.99',
        'features' => ['Task Management', 'Reminders & Alerts', 'Progress Tracking', 'Team Collaboration', 'Time Management']
    ],
    'Enterprise' => [
        'price' => '29.99',
        'features' => ['Task Management', 'Reminders & Alerts', 'Progress Tracking', 'Team Collaboration', 'Time Management', 'Data Backup & Sync']
    ]
];

$comments = [
    [
        'name' => 'John Doe',
        'avatar' => 'https://i.pravatar.cc/150?img=1',
        'comment' => 'This productivity manager has really boosted my workflow! I can manage my tasks, set reminders, and collaborate with my team seamlessly. Highly recommended!',
        'date' => '2025-03-10',
        'rating' => 5
    ],
    [
        'name' => 'Jane Smith',
        'avatar' => 'https://i.pravatar.cc/150?img=2',
        'comment' => 'Simple and effective. The reminders and alerts are super helpful!',
        'date' => '2025-03-08',
        'rating' => 4
    ],
    [
        'name' => 'Michael Johnson',
        'avatar' => 'https://i.pravatar.cc/150?img=3',
        'comment' => 'Great tool for managing tasks. I wish the Pro plan had data backup though. The user interface is also quite clean and easy to navigate. Keep up the good work!',
        'date' => '2025-03-06',
        'rating' => 4
    ],
    [
        'name' => 'Emily Davis',
        'avatar' => 'https://i.pravatar.cc/150?img=4',
        'comment' => 'The Enterprise plan is perfect for our team. Excellent collaboration features and very reliable.',
        'date' => '2025-03-04',
        'rating' => 5
    ],
    [
        'name' => 'Samuel Green',
        'avatar' => 'https://i.pravatar.cc/150?img=5',
        'comment' => 'Decent app. It does the job well, but there’s still room for improvement in the task tracking feature.',
        'date' => '2025-03-02',
        'rating' => 3
    ],
    [
        'name' => 'Nina Brown',
        'avatar' => 'https://i.pravatar.cc/150?img=6',
        'comment' => 'A game changer! I love how easy it is to set tasks and monitor progress. The collaboration tools have significantly increased our productivity at work. The data backup feature in the Enterprise plan is also very reassuring for our important documents and schedules. I have tried several productivity apps, but this one stands out for its simplicity and power.',
        'date' => '2025-03-01',
        'rating' => 5
    ],
    [
        'name' => 'Liam Wilson',
        'avatar' => 'https://i.pravatar.cc/150?img=7',
        'comment' => 'Not bad, but it could use more integrations with other apps.',
        'date' => '2025-02-28',
        'rating' => 3
    ],
    [
        'name' => 'Sophia Martinez',
        'avatar' => 'https://i.pravatar.cc/150?img=8',
        'comment' => 'I use it every day! It keeps me on track with my projects and personal goals. The time management tools are particularly useful.',
        'date' => '2025-02-25',
        'rating' => 4
    ],
    [
        'name' => 'Ethan Lee',
        'avatar' => 'https://i.pravatar.cc/150?img=9',
        'comment' => 'Very helpful app. The free version offers quite a lot, but the Pro features are definitely worth the upgrade.',
        'date' => '2025-02-22',
        'rating' => 4
    ],
    [
        'name' => 'Isabella Garcia',
        'avatar' => 'https://i.pravatar.cc/150?img=10',
        'comment' => 'Love it! The alerts make sure I never miss a deadline again.',
        'date' => '2025-02-20',
        'rating' => 5
    ]
];

$features = [
    [
        'icon' => 'bi-calendar-check',
        'title' => 'Task Management',
        'desc' => 'Easily organize and prioritize your tasks to stay productive every day.'
    ],
    [
        'icon' => 'bi-bell',
        'title' => 'Reminders & Alerts',
        'desc' => 'Never miss a deadline with customizable reminders and notifications.'
    ],
    [
        'icon' => 'bi-graph-up-arrow',
        'title' => 'Progress Tracking',
        'desc' => 'Monitor your progress with insightful analytics and performance reports.'
    ],
    [
        'icon' => 'bi-people',
        'title' => 'Team Collaboration',
        'desc' => 'Work seamlessly with your team using built-in communication features.'
    ],
    [
        'icon' => 'bi-clock-history',
        'title' => 'Time Management',
        'desc' => 'Efficiently manage your time with integrated scheduling tools and timers.'
    ],
    [
        'icon' => 'bi-cloud-arrow-down',
        'title' => 'Data Backup & Sync',
        'desc' => 'Securely back up your data and sync across all your devices.'
    ],
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productivity</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000,
            });
            console.log('DOM loaded');
        });
    </script>
</head>

<body>
    <div class="dot-pattern"></div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Productivity</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Feature</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                </ul>
                <a href="#book" class="btn btn-primary">Book Demo</a>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <section id="home" class="py-5" data-aos="fade-up">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center border rounded-4 bg-body">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Manage Your Productivity Effortlessly</h1>
                    <p class="lead">Boost your productivity with our all-in-one Productivity Manager. Organize tasks, set reminders, and achieve your goals with ease—everything you need to stay on track and optimize your workflow.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a href="#book" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Book Demo</a>
                        <a href="#features" class="btn btn-outline-secondary btn-lg px-4">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
                    <img class="rounded-lg-3" src="./assets/focus_hero.svg" alt="" width="720">
                </div>
            </div>
        </section>
        <section id="features" class="py-5">
            <h2 class="pb-2 border-bottom">Features</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 py-5">
                <?php
                foreach ($features as $k => $f) {
                ?>
                    <div class="col d-flex align-items-start" data-aos="fade-left" data-aos-delay="<?= $k * 100; ?>">
                        <i class="bi <?= $f['icon']; ?> text-body-secondary flex-shrink-0 me-3" style="font-size: 1.75em;"></i>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis"><?= $f['title']; ?></h3>
                            <p><?= $f['desc']; ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
        <section id="pricing" class="py-5">
            <div class="pricing-header pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
                <p class="fs-5 text-body-secondary">Choose the perfect plan for your productivity needs. Whether you're an individual looking for essential tools or a business seeking advanced features, we offer flexible pricing options to help you stay organized and efficient. Upgrade anytime to unlock more powerful features!</p>
            </div>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <?php foreach ($pricing as $key => $plan) { ?>
                    <div class="col pricing-card">
                        <div class="card  h-100 mb-4 rounded-3 border-0" data-aos="fade-up" data-aos-delay="<?= array_search($key, array_keys($pricing)) * 200; ?>">
                            <div class="card-body d-flex flex-column">
                                <h4 class="my-2 fw-bold"><?= $key ?></h4>
                                <h1 class="card-title">$<?= $plan['price'] ?>
                                    <small class="text-body-secondary fw-light">/mo</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4 flex-grow-1">
                                    <?php foreach ($plan['features'] as $feature) {
                                        echo '<li>' . $feature . '</li>';
                                    } ?>
                                </ul>
                                <button type="button" class="mt-auto w-100 btn btn-lg btn-outline-primary">Book Demo</button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>


            <h2 class="display-6 text-center mb-4">Compare plans</h2>

            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 34%;"></th>
                            <?php
                            foreach ($pricing as $key => $plan) {
                                echo "<th style='width: 22%;'>" . $key . "</th>";
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($features as $feature) {
                        ?>
                            <tr>
                                <th scope="row" class="text-start"><?= $feature['title'] ?></th>
                                <?php foreach ($pricing as $data) {
                                    if (in_array($feature['title'], $data['features'])) {
                                        echo '<td><i class="bi bi-check"></i></td>';
                                    } else {
                                        echo '<td></td>';
                                    }
                                }
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section id="testimonials" class="py-5">
            <div class="d-flex pb-3 flex-column align-items-center">
                <h2>Testimonials</h2>
                <p>What our customers say</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2" data-masonry='{"percentPosition": true }'>
                <?php
                foreach ($comments as $key => $comment) {
                ?>
                    <div class="col testimonial-card">
                        <div class="card h-100" data-aos="zoom-in" data-aos-delay="<?= $key * 100; ?>">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 card-title">
                                    <img src="<?= $comment['avatar'] ?>" class="rounded-circle mb-3" alt="<?= $comment['name'] ?>" width="35">
                                    <h5><?= $comment['name'] ?></h5>
                                </div>
                                <p class="card-text">"<?= $comment['comment'] ?>"</p>
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <i class="bi text-warning <?= $i <= $comment['rating'] ? 'bi-star-fill' : 'bi-star' ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <small class="text-muted"><?= date('F j, Y', strtotime($comment['date'])) ?></small>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </section>
        <section id="book" class="py-5">
            <div class="d-flex pb-3 flex-column align-items-center">
                <h2>Book for Demo</h2>
                <p>Fill the form to book a demo</p>
            </div>
            <form action="halamanData.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" required>
                </div>

                <div class="mb-3">
                    <label for="participants" class="form-label">Number of Participants</label>
                    <input name="participants" type="number" class="form-control" id="participants" placeholder="Enter number" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="demoType" class="form-label">Select Demo Type</label>
                    <div class="row">

                        <div class="col">
                            <select class="form-select" name="demoType" id="demoType" required>
                                <option value="" selected disabled>Select a demo</option>
                                <?php
                                foreach ($pricing as $key => $plan) {
                                    echo "<option value='$key'>$key</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" name="feature" id="feature" required>
                                <option value="" selected disabled>Select feature</option>
                                <?php
                                foreach ($features as $feature) {
                                    echo "<option value='" . $feature['title'] . "'>" . $feature['title'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Preferred Time</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="time" id="morning" value="morning" required>
                        <label class="form-check-label" for="morning">Morning</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="time" id="afternoon" value="afternoon">
                        <label class="form-check-label" for="afternoon">Afternoon</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="time" id="evening" value="evening">
                        <label class="form-check-label" for="evening">Evening</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="demoDate" class="form-label">Preferred Demo Date</label>
                    <input type="date" name="date" class="form-control" id="demoDate" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Additional Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Your message..."></textarea>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="terms" id="terms" required>
                    <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>

        </section>
    </div>
    <footer class="py-4 mt-5 bg-body-tertiary">
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li class="nav-item"><a href="#features" class="nav-link px-2 text-body-secondary">Features</a></li>
                    <li class="nav-item"><a href="#pricing" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                    <li class="nav-item"><a href="#testimonials" class="nav-link px-2 text-body-secondary">Testimonials</a></li>
                </ul>
                <p class="text-center text-body-secondary">© 2025 Hasbi Assidiqi</p>
            </footer>
        </div>
    </footer>


</body>

</html>