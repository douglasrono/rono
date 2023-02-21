@extends('layouts.app')
@section('content')
    <div class="container">

      <div class="section-title">
        <h2>Blogs</h2>
       <h4> <a href="">Trending</a> </h4>
      </div>

      <div class="container">

        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-8">
            <div class="portfolio-info">
              <h3>SQL AND DATABASES</h3>

            </div>
            <div class="portfolio-description">

              <p>
                MongoDB has been at the forefront of application development for developers and enterprises over the past decade. According to TechRepublic,
                over 35,000 Fortune 500 companies and startups alike have been utilizing MongoDB for mainstream data infrastructure.
                 One of the key drivers of the shift from virtual machines to the full use of cloud was MongoDB’s launching of Atlas, six years ago
              </p>
              <h4>What is MongoDB Atlas?</h4>
              <p>
                MongoDB Atlas is a non-relational, multi-cloud, database-as-a-service (DBaaS) that can configure and host the database with a simple process, even if the data is
                unstructured. According to Tony Baer, founder of dbInsight, Atlas has “really freed up developers,” making it invaluable to the industry.
                 It’s also much easier to learn than relational databases, which require developers to manage the database alongside key-value stores and search engines.
              </p>
              <h5>1. Create Your First Cluster</h5>
              <p>
                Before proceeding, we also advise that you have an updated version of JavaScript installed. This tutorial will focus on connecting to MongoDB Atlas from your local Node.js or Express.js environment. To create an account and access Atlas cloud services, you’ll need to go to the MongoDB homepage and press the ‘Create a free database now’ button.
                 This will redirect you to the cluster creation wizard and lead you to choose a plan for yourself.
              </p>
              <h5>2. Setup The Cluster</h5>

              <p>
                Assuming you have no clusters set up yet, you’ll need to click ‘Build a cluster’, and select a Cloud Provider and Region. After this step, you can name your cluster – take note that the name cannot be changed once it’s created. You can also configure any necessary options as you deem fit.
                MongoDB will take about 5-10 minutes to create your cluster, so a bit of patience is needed.
              </p>

              <h5>3. Obtain The Connection String</h5>
              <p>
                Now that you have a cluster, you’ll need a valid connection string to connect it to your application. To obtain this, you’ll need to first add the Database User and IP address of your current machine by going to the ‘Security’ tab to whitelist your IP address. Then head to the ‘Overview’ tab and press ‘Connect’, which will trigger a dialogue.
                 Take note that you also have to select Node.js to save the connection string.
              </p>

              <h5>4. Mongoose Installation</h5>
              <p>
                To code, you’ll also need to install Mongoose, which is a JavaScript object-oriented programming library that connects MongoDB and the Node. Use the following code in db.js.:
              </p>
              <div class="">
                <div class="card bg-dark text-danger">
                    <pre>
                        <code>
                            //db.js

                    const mongoose = require('mongoose')
                    const url = `mongodb+srv://sample_user:@my-sample-cluster-b3ugy.mongodb.net/?retryWrites=true&w=majority`;

                    const connectionParams={
                        useNewUrlParser: true,
                        useCreateIndex: true,
                        useUnifiedTopology: true
                    }
                    mongoose.connect(url,connectionParams).then( () => {
                        console.log('Connected to database ')
                    }).catch( (err) => {
                        console.error(`Error connecting to the database. \n${err}`);
                    })

                        </code>
                    </pre>

                </div>

                <p>
                    Make sure you replace ‘dbname’ with the name you’ve given your database, and ‘password’ with your user password.
                </p>
              </div>
              <h5>
                5. Connecting Clusters and Managing Documents
              </h5>

              <p>
                The connection string you’ve previously received will mention a database named ‘test’. A MongoDB database is composed of one or more collections,
                 and the free tier cluster on MongoDB Atlas can have a maximum of 500 collections. So if you’ve reached this far, congratulations – you’ve successfully created a basic database using the
                 MongoDB Atlas UI! The next best step would be to learn MongoDB commands to navigate databases better.
              </p>

              <h5>
                Conclusion
              </h5>

              <p>
                If you are adamant about integrating MongoDB Atlas into your JavaScript projects, we have plenty of articles that can help you figure out the best way to
                 go about it. That said, it’s an extremely beneficial platform for developers and enterprises alike,
                 and is likely to become even more popular in the near future.
              </p>


            </div>
          </div>

          <div class="col-lg-4">
            <div>
              <div>

                <div>
                    <h5>Categories</h5>
                    <h6> <a href="">Databases (12)</a></h6>
                    <h6> <a href="">Node (7)</a></h6>
                    <h6> <a href="">JavaScript (7)</a> </h6>
                    <h6><a href="">Cyber security</a> </h6>
                    <h6><a href="">Laravel</a> </h6>
                    <h5><a href="">Freelancing</a></h5>
                </div>

                <div>
                    <h5>Related posts</h5>
                    <ul>
                        <li>Sql table joins (Part 1)</li>
                        <li>Manipulating Records in Databases</li>
                        <li>sql table joins (Part 2)</li>
                        <li>Relational Database Basics</li>
                    </ul>

                </div>

                <div>
                    <h5>Contact me</h5>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                          <div class="row">
                            <div class="form-group col-md-6">
                              <label for="name">Your Name</label>
                              <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="name">Your Email</label>
                              <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                          </div>
                          <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                          </div>
                          <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                      </div>

                </div>

              </div>

            </div>
          </div>
        </div>

      </div>

@endsection
