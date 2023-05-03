<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
      integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>My Landing Page</title>
  </head>
  <body>
    <nav id="navbar">
      <div class="logo">
        <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="user" />
      </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact Me</a></li>
        <li><a href="/feedback.php">Feedback</a></li>
      </ul>
    </nav>

    <header>
      <button id="toggle" class="toggle">
        <i class="fa fa-bars fa-2x"></i>
      </button>

      <h1>My Landing Page</h1>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, amet!
      </p>

      <button class="cta-btn" id="open">Sign Up</button>
    </header>

    <div class="container">
      <h2>What is this landing page about?</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia iure
        accusamus ab consectetur eos provident ipsa est perferendis architecto.
        Provident, quaerat asperiores. Quo esse minus repellat sapiente, impedit
        obcaecati necessitatibus.
      </p>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente optio
        officia ipsa. Cum dignissimos possimus et non provident facilis saepe!
      </p>

      <h2>Tell Me More</h2>

      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat eaque
        delectus explicabo qui reprehenderit? Aspernatur ad similique minima
        accusamus maiores accusantium libero autem iusto reiciendis ullam
        impedit esse quibusdam, deleniti laudantium rerum beatae, deserunt nemo
        neque, obcaecati exercitationem sit. Earum.
      </p>

      <h2>Benefits</h2>
      <ul>
        <li>Lifetime Access</li>
        <li>30 Day Money Back</li>
        <li>Tailored Customer Support</li>
      </ul>

      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse quam
        nostrum, fugiat, itaque natus officia laborum dolorum id accusantium
        culpa architecto tenetur fuga? Consequatur provident rerum eius ratione
        dolor officiis doloremque minima optio dignissimos doloribus odio
        debitis vero cumque itaque excepturi a neque, expedita nulla earum
        accusamus repellat adipisci veritatis quam. Ipsum fugiat iusto pariatur
        consectetur quas libero dolor dolores dolorem, nostrum ducimus
        doloremque placeat accusamus iste, culpa quaerat consequatur?
      </p>
    </div>

    <!-- Modal -->
    <div class="modal-container" id="modal">
      <div class="modal">
        <button class="close-btn" id="close">
          <i class="fa fa-times"></i>
        </button>
        <div class="modal-header">
          <h3>Sign Up</h3>
        </div>
        <div class="modal-content">
          <p>Register with us to get offers, support and more</p>
          <form class="modal-form">
            <div>
              <label for="name">Name</label>
              <input
                type="text"
                id="name"
                placeholder="Enter Name"
                class="form-input"
              />
            </div>
            <div>
              <label for="email">Email</label>
              <input
                type="email"
                id="email"
                placeholder="Enter Email"
                class="form-input"
              />
            </div>
            <div>
              <label for="password">Password</label>
              <input
                type="password"
                id="password"
                placeholder="Enter Password"
                class="form-input"
              />
            </div>
            <div>
              <label for="password2">Confirm Password</label>
              <input
                type="password"
                id="password2"
                placeholder="Confirm Password"
                class="form-input"
              />
            </div>
            <input type="submit" value="Submit" class="submit-btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
