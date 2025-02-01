<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/1.css">
  </head>
  <body>
    <canvas id="starCanvas"></canvas>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="anggota.php">Anggota</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="role/role.php">Role</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="history/history.php">History</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="content">
      <p class="besar">
        <span>W</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span>
        <span>t</span><span>o</span>
        <span>K</span><span>e</span><span>l</span><span>o</span><span>m</span><span>p</span><span>o</span><span>k</span>
        <span>P</span><span>e</span><span>n</span><span>e</span><span>r</span><span>b</span><span>a</span><span>n</span><span>g</span>
        <span>R</span><span>o</span><span>k</span><span>e</span><span>t</span>
      </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      const canvas = document.getElementById('starCanvas');
      const ctx = canvas.getContext('2d');
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;

      let stars = [];
      const starCount = 100;

      class Star {
        constructor() {
          this.x = Math.random() * canvas.width;
          this.y = Math.random() * canvas.height;
          this.size = Math.random() * 2;
          this.speed = Math.random() * 3 + 1;
        }

        draw() {
          ctx.beginPath();
          ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
          ctx.fillStyle = 'white';
          ctx.fill();
        }

        update() {
          this.y += this.speed;
          if (this.y > canvas.height) {
            this.y = 0;
            this.x = Math.random() * canvas.width;
          }
        }
      }

      function init() {
        for (let i = 0; i < starCount; i++) {
          stars.push(new Star());
        }
      }

      function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        stars.forEach(star => {
          star.update();
          star.draw();
        });
        requestAnimationFrame(animate);
      }

      window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
      });

      init();
      animate();
    </script>
  </body>
</html>
