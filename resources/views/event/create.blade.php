@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <title>formulaire </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href={{asset('assetscss_post/custom-bs.css')}}>
    <link rel="stylesheet" href={{asset('css_post/jquery.fancybox.min.css')}}>
    <link rel="stylesheet" href={{asset('css_post/bootstrap-select.min.css')}}>
    <link rel="stylesheet" href={{asset('fonts/icomoon/style.css')}}>
    <link rel="stylesheet" href={{asset('fonts/line-icons/style.css')}}>
    <link rel="stylesheet" href={{asset('css_post/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('css_post/animate.min.css')}}>
    <link rel="stylesheet" href={{asset('css_post/quill.snow.css')}}>
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href={{asset('css_post/style.css')}}>    
  </head>


  <body id="top">
   
  
    
    <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Post A event </h2>
              </div>
            </div>
          </div>


          <div class="col-lg-4">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Save </a>
              </div>
            </div>
          </div>
        </div>


        <div class="row mb-5">
          <div class="col-lg-12">
            <form class="p-4 p-md-5 border rounded" method="post">
              <h3 class="text-black mb-5 border-bottom pb-2">event Details</h3>
              
              <div class="form-group">
                <label for="company-website-tw d-block">Upload Featured Image</label> <br>
                <label class="btn btn-primary btn-md btn-file">
                  Browse File<input type="file" hidden>
                </label>
              </div>

              
              <div class="form-group">
                <label for="job-title"> event  Title</label>
                <input type="text" class="form-control" id="job-title" placeholder="hackthon ">
              </div>
              <div class="form-group">
                <label for="job-location">Location</label>
                <input type="text" class="form-control" id="job-location" placeholder="e.g. alger">
              </div>

              <div class="form-group">
                <label for="job-region">Region</label>
                <select class="selectpicker border rounded" id="job-region" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Region">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                    </select>
              </div>

              <div class="form-group">
                <label for="job-type">category </label>
                <select class="selectpicker border rounded" id="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                  <option>1</option>
                  <option>2</option>
                </select>
              </div>


              <div class="form-group">
                <label for="job-description"> Description</label>
                <div class="editor" id="editor-1">
                  <p>Write a event Description!</p>
                </div>
              </div>


              <h3 class="text-black my-5 border-bottom pb-2">Company Details</h3>
              <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" class="form-control" id="company-name" placeholder="e.g. women techmakers">
              </div>

              <div class="form-group">
                <label for="company-tagline">Tagline (Optional)</label>
                <input type="text" class="form-control" id="company-tagline" placeholder="e.g. wtm">
              </div>

              <div class="form-group">
                <label for="job-description">Company Description (Optional)</label>
                <div class="editor" id="editor-2">
                  <p>Description</p>
                </div>
              </div>
              
              <div class="form-group">
                <label for="company-website">Website (Optional)</label>
                <input type="text" class="form-control" id="company-website" placeholder="https://">
              </div>

              <div class="form-group">
                <label for="company-website-fb">Facebook Username (Optional)</label>
                <input type="text" class="form-control" id="company-website-fb" placeholder="companyname">
              </div>

              <div class="form-group">
                <label for="company-website-tw">Twitter Username (Optional)</label>
                <input type="text" class="form-control" id="company-website-tw" placeholder="@companyname">
              </div>
              <div class="form-group">
                <label for="company-website-tw">Linkedin Username (Optional)</label>
                <input type="text" class="form-control" id="company-website-tw" placeholder="companyname">
              </div>

              <div class="form-group">
                <label for="company-website-tw d-block">Upload Logo</label> <br>
                <label class="btn btn-primary btn-md btn-file">
                  Browse File<input type="file" hidden>
                </label>
              </div>

            </form>
          </div>

         
        </div>
      </div>
    </section>

   

    <!-- SCRIPTS -->
    <script src={{asset('js/jquery.min.js')}}></script>
    <script src={{asset('js/bootstrap.bundle.min.js')}}></script>
    <script src={{asset('js/isotope.pkgd.min.js')}}></script>
    <script src={{asset('js/stickyfill.min.js')}}></script>
    <script src={{asset('js/jquery.fancybox.min.js')}}></script>
    <script src={{asset('js/jquery.easing.1.3.js')}}></script>
    
    <script src={{asset('js/jquery.waypoints.min.js')}}></script>
    <script src={{asset('js/jquery.animateNumber.min.js')}}></script>
    <script src={{asset('js/owl.carousel.min.js')}}></script>
    <script src={{asset('js/quill.min.js')}}></script>
    
    
    <script src={{asset('js/bootstrap-select.min.js')}}></script>
    
    <script src={{asset('js/custom.js')}}></script>
   
   
     
  </body>
</html>
@endsection