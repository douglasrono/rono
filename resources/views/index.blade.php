@extends('layouts.app')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1 class="text-warning">Douglas Rono</h1>
      <p><span class="text-info">I'M </span><span class="typed text-bg-primary text-warning" data-typed-items="Software Developer, Devops Engineer , Designer"></span></p>
      <marquee class="marq"
                 bgcolor="Green"
                 direction="left"
                 behavior=scroll
                 loop="">
            DOUGLAS
        </marquee>
        <marquee class="marq"
                 bgcolor="Green"
                 behavior=alternate
                 direction="left"
                 loop="">
            RONO
        </marquee>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Projects & profile</h2>
          <p>From interaction design to scaleable design systems, single-page apps to complex dashboards,
            I help awesome people to build ambitious yet accessible web projects - the wilder, the better..</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="82" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Clients</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="109" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Portfolio</strong> </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-github"></i>
              <span data-purecounter-start="0" data-purecounter-end="345" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Github Repos</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Open source</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->



    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>

        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Douglas Rono</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Nairobi,Kenya</li>
                <li>+254 110666140</li>
                <li>hello@douglasronno.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>SOftware Engineering </h4>
              <h5>2015 - 2016</h5>
              <p><em>Emobilis Institute of technology</em></p>
              <p>
                <ul>
                    <li>HTML,CSS</li>
                    <li>Bootstrap</li>
                    <li>Php</li>
                    <li>sql</li>
                    <li>Kotlin</li>
                    <li>Android</li>
                </ul>
              </p>
            </div>
            <div class="resume-item">
              <h4>Bsc. Computer Technology</h4>
              <h5>2014 - 2019</h5>
              <p><em>Meru University</em></p>
              <h5>Technical Skills</h5>
              <p>
                <ul>
                    <li>HTML,CSS</li>
                    <li>C</li>
                    <li>C++</li>
                    <li>Assembly Programming</li>
                    <li>Java</li>
                    <li>Software Engineering</li>
                    <li>Data Structure and algorithms</li>
                    <li>Compiler Construction</li>
                </ul>
              </p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h3>Medialink Technologies</h3>
              <h4>Fullstack Developer</h4>
              <h5>March 2020 - Oct 2022</h5>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div>
            <div class="resume-item">
                <h3>Upwork</h3>
                <h4> Developer</h4>
                <h5>SEpt 2018 - March 2020</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->


  </main><!-- End #main -->

@endsection



