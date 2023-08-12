<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/Newprofile-img.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$data->title}}</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$data->birthday}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$data->website}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$data->phone}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$data->city}}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$data->age}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$data->degree}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{$data->email}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{$data->freelance}}</span></li>
              </ul>
            </div>
          </div>
          <p>{{$data->description}}</p>
        </div>
      </div>

    </div>
  </section>
