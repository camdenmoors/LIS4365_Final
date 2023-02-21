<style>
  nav {
    margin-top: 0;
    padding: 0;
  }

  ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  /* Change the link color to #111 (black) on hover */
  li a:hover {
    background-color: #111;
  }
</style>

<!-- Page Header -->
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="list.php?type=cat">Cats</a></li>
    <li><a href="list.php?type=dog">Dogs</a></li>
    <li><a href="list.php?type=other">Others</a></li>
    <li><a href="submit.php">Submit an Animal</a></li>
  </ul>
</nav>