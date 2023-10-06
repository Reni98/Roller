<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Elektromos roller</title>
  </head>
  <body>
    <div class="header">
      <ul>
        <li><a href="#home">Főoldal</a></li>
        <li><a href="#about">Rólunk</a></li>
        <li class="logo">Company</li>
        <li><a href="#services">Szolgáltatások</a></li>
        <li><a href="#contact">Elérhetőségeink</a></li>
      </ul>
    </div>

    <div class="banner" id="home">
      <div class="banner-text">
        <h2>Rollerek</h2>
        <p>
          Ha olyan megoldást keresel, ami gyors és könnyed közlekedést tesz
          lehetővé a városban, miközben az autózáshoz képest még széndioxid
          lábnyomodat is csökkenti, akkor számos érv szól az elektromos roller
          mellett. Nemcsak gépkocsikkal, hanem a zsúfolt tömegközlekedéssel
          szemben is felmutat előnyöket, de melyik típust érdemes választani,
          akkor, ha hosszú távra is jó befektetést szeretnél? Most
          összegyűjtöttünk elektromos rollert, amelyek szakértői visszajelzések
          szerint is kategóriájuk legjobbjai közé sorolhatók!
        </p>
        <a href="#">Bővebben</a>
      </div>
    </div>
    <div class="about" id="about">
      <div class="section-header">
        <h2>Rólunk</h2>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, non
          rem molestiae doloremque accusantium similique perspiciatis ea
          suscipit deserunt blanditiis a ut temporibus tempora rerum vero
          tempore sit nemo omnis.
        </p>
      </div>

      <div class="about-content">
        <div class="single-about">
          <img src="" alt="" />
          <div class="about-text">
            <h2>Hogyan állítottuk össze ezt az elektromos roller toplistát?</h2>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum
              iure nihil dignissimos repellat omnis deleniti soluta saepe? Animi
              nesciunt, delectus vitae ab reiciendis iure accusantium laborum,
              vero, provident aspernatur nobis.
            </p>
            <a href="#">Bővebben</a>
          </div>
        </div>
      </div>
    </div>

    <div class="services" id="service">
      <div class="section-header">
        <h2>Roller típusok</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis
          impedit omnis alias nobis accusamus, minima perferendis non facere
          illum libero! Labore velit neque perspiciatis nulla omnis soluta non
          laudantium aspernatur!
        </p>
      </div>

      <div class="service-content">
        <div class="single-service">
          <h2>Dualtron X2</h2>
          <img src="./img/dualtronx2.jfif" alt="" />

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
            delectus aliquam odit. Omnis maxime consequatur accusamus, optio
            quis modi, dolorum corrupti nemo iure, asperiores cumque natus
            quasi. Accusantium, quia architecto?
          </p>
        </div>

        <div class="single-service">
          <h2>Dualtron Thunder II</h2>
          <img src="./img/thnd201.jpg" alt="" />

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
            delectus aliquam odit. Omnis maxime consequatur accusamus, optio
            quis modi, dolorum corrupti nemo iure, asperiores cumque natus
            quasi. Accusantium, quia architecto?
          </p>
        </div>
        <div class="single-service">
          <h2>Nami Viper Burn-e</h2>
          <img src="./img/thnd201.jpg" alt="" />

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
            delectus aliquam odit. Omnis maxime consequatur accusamus, optio
            quis modi, dolorum corrupti nemo iure, asperiores cumque natus
            quasi. Accusantium, quia architecto?
          </p>
        </div>
      </div>
    </div>

    <div class="contact" id="contact">
      <div class="section-header">
        <h2>Kapcsolat</h2>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, non
          rem molestiae doloremque accusantium similique perspiciatis ea
          suscipit deserunt blanditiis a ut temporibus tempora rerum vero
          tempore sit nemo omnis.
        </p>
      </div>

      <form action="db.php" method="post">
        <div class="single-contact">
          <input
            type="email"
            placeholder="Írje be az e-mail címét"
            class="form-control"
            name="email"
          />
          <input
            type="password"
            placeholder="Írje be a jelszavát"
            class="form-control"
            name="jelszo"
          />
          <textarea
            cols="30"
            rows="10"
            placeholder="Kezdjen el gépelni"
            class="form-control"
            name="szoveg"
          ></textarea>

          <button type="submit" name="insert_btn">Elfogad</button>
         
          </script>
        </div>
      </form>
    </div>

    <footer>
      <p>Coypright 2023</p>
    </footer>

    <sript src="https://code.jquery.com/jquery-3.6.0.min.js"></sript>
    <script>
      $(window).on('scroll', function () {
        if ($(window).scrollTop() > 50) {
          $('.header').addClass('active');
        } else {
          $('.header').removeClass('active');
        }
      });
    </script>

    <style>
      button {
    background-color: #4caf50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 50px;
  }
    </style>
  </body>
</html>
