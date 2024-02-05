<!DOCTYPE html>
<html>
<head>
  <title>Pinterest Registration</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Welcome to Pinterest</h1>
  <p>Find new ideas to try</p>
  <form action="/submit_registration" method="post">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
    <label for="birthdate">Birthdate (dd/mm/yyyy)</label>
    <input type="text" id="birthdate" name="birthdate" required pattern="(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d">
    <input type="submit" value="Continue">
    <p>OR</p>
    <a href="/facebook_login">Continue with Facebook</a>
    <a href="/google_login">Continue with Google</a>
    <p>By continuing, you agree to Pinterest's <a href="/terms_of_service">Terms of Service</a> and acknowledge you've read our <a href="/privacy_policy">Privacy Policy</a>.</p>
    <p>Already a member? <a href="/login">Log in</a></p>
    <p>Create a free <a href="/business_signup">business account</a>.</p>
  </form>
</body>
</html>