<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>JobBoard - Find Your Dream Job</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f7f8; margin: 0; padding: 0; }
    header { background: #2d89ef; color: white; padding: 20px 40px; }
    h1 { margin: 0; }
    nav a { color: white; margin-left: 20px; text-decoration: none; font-weight: bold; }
    main { padding: 40px; max-width: 900px; margin: auto; }
    .job-listing { background: white; padding: 20px; margin-bottom: 20px; border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    .job-title { font-size: 1.3em; margin: 0; }
    .company { color: #555; }
    .location { font-style: italic; color: #888; }
    footer { text-align: center; padding: 15px; color: #777; font-size: 0.9em; }
  </style>
</head>
<body>
  <header>
    <h1>JobBoard</h1>
    <nav>
      <a href="#">Home</a>
      <a href="#">Post a Job</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </nav>
  </header>

  <main>
    <h2>Latest Job Openings</h2>

    <?php
      // Sample jobs array - in real site, this comes from a database
      $jobs = [
        ['title' => 'Frontend Developer', 'company' => 'TechCorp', 'location' => 'Remote'],
        ['title' => 'Backend Engineer', 'company' => 'Webify', 'location' => 'New York, NY'],
        ['title' => 'Project Manager', 'company' => 'Biz Solutions', 'location' => 'San Francisco, CA'],
      ];

      foreach ($jobs as $job) {
        echo "<div class='job-listing'>";
        echo "<h3 class='job-title'>" . htmlspecialchars($job['title']) . "</h3>";
        echo "<p class='company'>" . htmlspecialchars($job['company']) . "</p>";
        echo "<p class='location'>" . htmlspecialchars($job['location']) . "</p>";
        echo "</div>";
      }
    ?>
  </main>

  <footer>
    &copy; <?php echo date("Y"); ?> JobBoard. All rights reserved.
  </footer>
</body>
</html>
