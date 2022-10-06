  if ($session === null) {
    // The user isn't logged in.
    echo '<p>Please <a href="/login">log in</a>.</p>';
    return;
  }
