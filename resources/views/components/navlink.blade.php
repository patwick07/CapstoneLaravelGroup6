{{-- <div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
        <div class="header-box px-2 pt-3 pb-4">
            <ul class="list-unstyled px-2 bg-dark">
                <li><a class="text-decoration-none text-light" href="index.php">Dashboard</a></li>
                <li><p></p></li>
                <li><a class="text-decoration-none text-light" href="/courses">Course</a></li>
                <li><p></p></li>
                <li><a class="text-decoration-none text-light" href="/subjects">Subject</a></li>
                <li><p></p></li>
                <li><a class="text-decoration-none text-light" href="/classes">Class</a></li>
                <li><p></p></li>
                <li><a class="text-decoration-none text-light" href="/faculties">Faculty</a></li>
                <li><p></p></li>
                <li><a class="text-decoration-none text-light" href="/students">Students</a></li>
                <li><a class="text-decoration-none text-light" href="/students">Studentss</a></li>
            </ul>
        </div>
    </div>
</div> --}}

<div class="d-flex flex-column">
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
          <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-4">Kodego University</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link text-dark" aria-current="page">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
              <img src="{{ Vite::asset('resources/images/dashboard.png') }}">
              Dashboard
            </a>
          </li>
          <li>
            <a href="/courses" class="nav-link text-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
              <img src="{{ Vite::asset('resources/images/course.png') }}">
              Course
            </a>
          </li>
          <li>
            <a href="/subjects" class="nav-link text-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
              <img src="{{ Vite::asset('resources/images/subject.png') }}">
              Subject
            </a>
          </li>
          <li>
            <a href="/classes" class="nav-link text-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
              <img src="{{ Vite::asset('resources/images/class.png') }}">
              Class
            </a>
          </li>
          <li>
            <a href="/faculties" class="nav-link text-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              <img src="{{ Vite::asset('resources/images/faculty.png') }}">
              Faculty
            </a>
          </li>
          <li>
            <a href="/students" class="nav-link text-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              <img src="{{ Vite::asset('resources/images/student.png') }}">
              Student
            </a>
          </li>
          <li>
            <a href="/class_subject" class="nav-link text-dark">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              <img src="{{ Vite::asset('resources/images/classpersubject.png') }}">
              Class Per Subject
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
    </div>
