@extends('Template-User.Main')

@section('content')

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/blog-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Formulir Permohonan Dokumen</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Permohonan Dokumen Penting</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Penjelasan Fitur</h4>
                <p>Fitur Permohonan Dokumen merupakan fitur yang berfungsi untuk melayani masyarakat dalam
                    proses permohonan dokumen secara online. Masyarakat dimohon untuk melengkapi formulir permohonan dokumen
                    sesuai dengan data dan kepentingan yang akurat.
                </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Pemprosesan Dokumen</h4>
                <p>Data formulir permohonan dokumen yang telah dikirimkan akan ditinjau oleh admin, apabila dokumen disetujui 
                    , dokumen akan diunggah oleh admin melalui fitur yang telah tersedia. Proses ini membutuhkan waktu, diharapkan pengguna
                    dapat sabar dalam tahap pemprosesan dokumen ini.
                </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Pengambilan Dokumen</h4>
                <p>Dokumen yang telah disetujui oleh admin akan dikirimkan secara online dan dokumen tersebut dapat diakses dan diunduh oleh pengguna
                    melalui fitur <b>"Unduh Berkas Dokumen"</b> yang terdapat pada menu <b>Layanan Desa -> Unduh Berkas Dokumen.</b>
                </p>
              </div>
            </div><!-- End Info Item -->

            

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Unggah Permohonan</button></div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->    
@endsection