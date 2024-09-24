
<style>
    /* Basic styling for the navigation bar */
    .navbar {
      background-color: #333; /* Background color */
      overflow: hidden; /* Clear floats */
    }

    /* Style for navigation bar links */
    .navbar a {
      float: left; /* Float the links to the left */
      display: block; /* Display links as blocks */
      color: white; /* text color */
      text-align: center; /* Center-align the text */
      padding: 14px 16px; /* Padding around the links */
      text-decoration: none; /* Remove underline from links */
    }

    /* Change color on hover */
    .navbar a:hover {
      background-color: #ddd; /* Background color on hover */
      color: black; /* Text color on hover */
    }
    </style>

    <body>

    <div class="navbar">
      <a href="/">Home</a>
      <a href="#">About</a>
      <a href="/message">Messages</a>
      <a href="/">Contact</a>

    </div>

    </body>

  @yield('main')

</html>
