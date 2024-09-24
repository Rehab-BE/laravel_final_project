<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets_admin/css/dataTables.dataTables.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets_admin/css/main.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets_admin/css/styles.css')}}">
</head>

<body>
  <header>
    <div class="p-3 text-center bg-white border-bottom welcome-section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-3 d-flex justify-content-center justify-content-md-start mb-3 mb-md-0">
            <a href="#" class="navbar-brand fs-2 fw-bold">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16">
                <path fill="currentColor"
                  d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
              </svg>

              <span>Topic</span>
            </a>
          </div>
          <div class="col-md-3 d-flex justify-content-center justify-content-md-end align-items-center">
            <ul class="navbar-nav">
              <li class="nav-item dropdown dropdown-center user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                  <img class="img-xs rounded-circle" src="{{asset('assets_admin/images/avatar-default.svg')}}" alt="Profile image" />
                </a>
                <div class="dropdown-menu dropdown-center navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                    <img class="img-md rounded-circle" src="{{asset('assets_admin/images/avatar-default.svg')}}" alt="Profile image"
                      width="80" height="80" />
                      <p class="mb-1 mt-3 font-weight-semibold">{{ ($user)->first_name }} {{($user)->last_name }}</p>
                      <p class="fw-light text-muted mb-0">{{ ($user)->email }}</p>
                  </div>
                  <a class="dropdown-item">My Profile</a>
                  <a class="dropdown-item">Sign Out</a>
                  <p class="footer" style="padding-top: 15px; font-size: 9px; text-align: center">
                    Privacy Policy . Terms . Cookies
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-md bg-white border-bottom">
      <div class="container justify-content-md-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                USERS
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('users.create')}}">Add user</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="{{route('users.index')}}">All users</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                TOPICS
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('topics.create')}}">Add topic</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="{{route('topics.index')}}">All topics</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                CATEGORIES
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('categories.create')}}">Add category</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="{{route('categories.index')}}">All categories</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                TESTIMONIALS
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('testimonials.create')}}">Add testimonial</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="{{route('testimonials.index')}}">All testimonials</a></li>
              </ul>
            </li>
            <li><a class="nav-item nav-link" href="{{route('messages.index')}}">MESSAGES</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="container my-5">
    <div class="mx-2">
      <div class="row justify-content-between mb-2 pb-2">
        <h2 class="fw-bold fs-2 col-auto">Topic Details</h2>
        <a href="{{route('topics.create')}}" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new topic</a>
      </div>
      <div class="p-5">
        <div class="container-fluid g-0 pt-3 pb-5 px-lg-5 px-md-3 px-1">
          <div
            class="img-wrapper">
            <img
              src="{{asset('assets_admin/test_image/topic/' .'/'. $topic->image)}}"
              class="rounded image-center border-5 rounded-4"
              alt="DEI-header-img" />
          </div>
          <!-- article -->
          <div class="mx-auto pt-4" style="max-width: 1225px">
            <article class="mx-md-4 ">
              <h2 class="fs-1 py-4">{{$topic->title}}</h2>
              <p>
                {{$topic->content}}
              </p>
              <div class="text-md-end">
                <a class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5" href="{{route('topics.index')}}">
                  Back to All topics
                </a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('assets_admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets_admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets_admin/js/dataTables.min.js')}}"></script>
    <script src="{{asset('assets_admin/js/tables.js')}}"></script>
</body>

</html>