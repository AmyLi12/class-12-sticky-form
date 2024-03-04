<?php
$page_title = 'Yoko\'s Kitchen';

$nav_cooking_class = 'active_page';

// 3. CSS classes for form feedback messages
$email_feedback_class = "hidden";
$courses_feedback_class = "hidden";

// Get form data from HTTP request
// 6. Store data in a PHP usable format (i.e. boolean, string, etc.)
$form_values = array(
  'course-vegetarian' => (bool)$_POST['japanese-vegetarian'], // untrusted
  'course-sauces' => (bool)$_POST['sauces-masterclass'], // untrusted
  'email' => trim($_POST['email']) // untrusted
);

// 7. Store sticky values for form inputs
$sticky_email = $form_values["email"];
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/meta.php' ?>

<body>
  <?php include 'includes/header.php' ?>

  <main class="courses">

    <h2><?php echo htmlspecialchars($page_title); ?></h2>

    <p>Welcome to Yoko's Kitchen!</p>

    <h2>Cooking Classes</h2>

    <section>
      <div class="course-tile">
        <figure>
          <img src="/images/bok-choi.jpg" alt="Bok Choi" />
          <figcaption>Bok Choi</figcaption>
        </figure>
        <div>
          <div>
            <h3>Japanese Vegetarian</h3>
            <h4>Five week course in London</h4>
          </div>
          <p>A five week introduction to traditional Japanese vegetarian meals, teaching you a selection of rice and noodle dishes.</p>
        </div>
      </div>

      <div class="course-tile">
        <figure>
          <img src="/images/teriyaki.jpg" alt="Teriyaki sauce" />
          <figcaption>Teriyaki Sauce</figcaption>
        </figure>
        <div>
          <div>
            <h3>Sauces Masterclass</h3>
            <h4>One day workshop</h4>
          </div>
          <p>An intensive one-day course looking at how to create the most delicious sauces for use in a range of Japanese cookery.</p>
        </div>
      </div>
    </section>

    <section>
      <h2>Request Course Information</h2>

      <p>Interesting in taking one of our cooking classes? Let us know which classes and we'll send you some information!</p>

      <!-- 5. self-processing form -->
      <form id="request-form" action="/cooking-classes" method="post" novalidate>

        <!-- 4. hide form feedback messages using variables. -->

        <div id="feedback-classes" class="feedback <?php echo $courses_feedback_class?>"> Please select at least one course </div> <!-- 1. "Pick at least one course" feedback -->

        <!-- 8. Add sticky values to form inputs -->

        <div class="form-label">
          <input type="checkbox" name="japanese-vegetarian" id="request-vegetarian" />
          <label for="request-vegetarian">Japanese Vegetarian</label>
        </div>
        <div class="form-label">
          <input type="checkbox" name="sauces-masterclass" id="request-sauces" />
          <label for="request-sauces">Sauces Masterclass</label>
        </div>

        <div id="feedback-email" class="feedback <?php echo $email_feedback_class?>"> Please provide your email address </div> <!-- 2. missing email feedback -->

        <div class="form-label">
          <label for="request-email">Email:</label>
          <input type="email" value="<?php echo htmlspecialchars($sticky_email) ?>" name="email" id="request-email" />
        </div>

        <div class="align-right">
          <input id="request-submit" type="submit" value="Request Information" />
        </div>
      </form>
    </section>

    <cite>&copy; 2011 Yoko's Kitchen (<a href="http://www.htmlandcssbook.com/code-samples/chapter-17/example-with-links.html">Source</a>)</cite>
  </main>

  <?php include "includes/footer.php" ?>
</body>

</html>
