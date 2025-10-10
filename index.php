<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PlanetByGemash</title>

  <!-- ✅ Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- ✅ Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style lat4.css">
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a href="#home" class="navbar-brand fw-bold text-danger">SiGemash</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
          <li class="nav-item"><a class="nav-link" href="#planet">Planet</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero d-flex justify-content-center align-items-center text-center" id="home">
    <video autoplay muted loop playsinline class="bg-video">
      <source src="856309-hd_1920_1080_30fps.mp4" type="video/mp4">
    </video>
    <div class="overlay"></div>
    <div class="hero-content container position-relative">
      <img src="assets/logo.png" alt="" class="hero-logo mb-3">
      <h1 class="display-4 fw-bold">Conquer The Universe</h1>
      <p class="news-desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
      <a href="#news" class="btn btn-danger mt-3">More Info</a>
    </div>
  </section>

<!-- LATEST NEWS -->

<section class="latest-news fade-element section-with-video" id="news">
    <video autoplay muted loop playsinline class="section-video">
      <source src="5986701-hd_1920_1080_30fps.mp4" type="video/mp4">
    </video>
    <div class="container position-relative text-center">
      <h2 class="mb-5">Latest News</h2>
      <div class="row justify-content-center g-4">
        <?php
            include("koneksi.php");

          
            $sql = "SELECT * FROM latestnews ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
        
              while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-4 fade-element">';
                echo '<div class="card bg-dark text-white border-0 rounded-3 overflow-hidden">';
                echo '<img src="img/'.$row["gambar"].'.jpg" class="card-img-top" alt="">';
                echo '<div class="card-body">';
                echo '<h3 class="card-title">'.$row["keterangan"].'</h3>';
                echo '</div></div></div>';
              }

            } else {
              echo "<p class='text-secondary text-center mt-3'>Belum ada berita terbaru.</p>";
            }
        ?>

      
        
      <p class="news-desc mt-4 text-secondary">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
    </div>
  </section>



  <!-- ABOUT PLANET -->
  <section class="events fade-element section-with-video" id="planet">
    <video autoplay muted loop playsinline class="section-video">
      <source src="5986701-hd_1920_1080_30fps.mp4" type="video/mp4">
    </video>
    <div class="container position-relative text-center">
      <h2 class="mb-5">About Planet</h2>
      <div class="row g-4">
        <div class="col-6 col-md-3">
          <div class="event-card card bg-dark text-white">
            <img src="merkurius2.jpg" class="card-img-top" alt="Mercury">
            <div class="card-body"><h3>Mercury</h3></div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="event-card card bg-dark text-white">
            <img src="venus.jpg" class="card-img-top" alt="Venus">
            <div class="card-body"><h3>Venus</h3></div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="event-card card bg-dark text-white">
            <img src="bumi.jpg" class="card-img-top" alt="Earth">
            <div class="card-body"><h3>Earth</h3></div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="event-card card bg-dark text-white">
            <img src="mars.jpg" class="card-img-top" alt="Mars">
            <div class="card-body"><h3>Mars</h3></div>
          </div>
        </div>

        <!-- Baris kedua -->
        <div class="col-6 col-md-3">
          <div class="event-card card bg-dark text-white">
            <img src="jupiter.jpg" class="card-img-top" alt="Jupiter">
            <div class="card-body"><h3>Jupiter</h3></div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="event-card card bg-dark text-white">
            <img src="saturnus.jpg" class="card-img-top" alt="Saturn">
            <div class="card-body"><h3>Saturn</h3></div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="event-card card bg-dark text-white">
            <img src="uranus.jpg" class="card-img-top" alt="Uranus">
            <div class="card-body"><h3>Uranus</h3></div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="event-card card bg-dark text-white">
            <img src="neptunus.jpg" class="card-img-top" alt="Neptune">
            <div class="card-body"><h3>Neptune</h3></div>
          </div>
        </div>
      </div>

      <!-- ✅ ChartJS -->
      <div class="mt-5">
        <h3 class="mb-3">Most Favorite Planet</h3>
        <canvas id="planetChart" width="400" height="200"></canvas>
      </div>

      <p class="news-desc mt-4 text-secondary">
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
      </p>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="cta container fade-element text-center py-5" id="contact">
    <h2>Contact Us</h2>
    <a href="mailto:example@email.com" class="btn btn-danger mt-3">Send Email</a>
  </section>

  <!-- FOOTER -->
  <footer class="footer bg-dark text-center text-secondary py-3">
    <div class="container">
      <p>© 2025 PlanetByGemash. All rights reserved.</p>
      <div>
        <a href="#" class="text-secondary mx-2">Privacy</a>
        <a href="#" class="text-secondary mx-2">Terms</a>
        <a href="#" class="text-secondary mx-2">Support</a>
      </div>
    </div>
  </footer>

  <!-- ✅ Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- ✅ Scroll Animation + Active Menu + Smooth Scroll + Chart.js -->
  <script>
    // Fade-in animation saat scroll
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if(entry.isIntersecting) entry.target.classList.add('show');
      });
    }, {threshold: 0.2});
    document.querySelectorAll('.fade-element').forEach((el) => observer.observe(el));

    // Smooth scroll saat klik menu
    document.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
      });
    });

    // Menu aktif otomatis berdasarkan section yang terlihat
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');
    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        if(pageYOffset >= sectionTop) {
          current = section.getAttribute('id');
        }
      });
      navLinks.forEach(link => {
        link.classList.remove('active');
        if(link.getAttribute('href') === '#' + current) {
          link.classList.add('active');
        }
      });
    });

    // ✅ ChartJS realtime dari database planetchart
const ctx = document.getElementById('planetChart');
let planetChart;

// Fungsi untuk ambil data terbaru dari PHP
async function fetchChartData() {
  const response = await fetch('get_chart_data.php');
  const result = await response.json();
  return result;
}

// Fungsi untuk buat atau update chart
async function updateChart() {
  const result = await fetchChartData();

  if (!planetChart) {
    planetChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: result.labels,
        datasets: [{
          label: 'Jumlah',
          data: result.data,
          backgroundColor: 'rgba(220,53,69,0.7)'
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
      }
    });
  } else {
    planetChart.data.labels = result.labels;
    planetChart.data.datasets[0].data = result.data;
    planetChart.update();
  }
}

// Jalankan pertama kali
updateChart();

// ✅ Update otomatis setiap 1 detik
setInterval(updateChart, 1000);

  </script>
</body>
</html>
