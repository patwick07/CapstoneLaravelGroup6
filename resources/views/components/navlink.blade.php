
<style>
    ul{
        list-style-type: none;
        /* background-color: #f1f1f1; */
    }
    li a {
        display:block;
        text-decoration: none;
        padding: 8px 16px;
        color: #000;
    }
    li a.active{
        color: #027AFF;
    }
    li a:hover:not(.active) {
        background-color: #027AFF;
        color: white;
    }
    .sidebar{
        width:15%;
    }
</style>
<div class=" main-container d-flex flex-column flex-shrink-0 p-3 text-bg-light" style="width: 280px;">
    <div class="sidebar"  id="side_nav">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto  text-dark text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Kodego University</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="index.php" class="nav-link text-dark">
            <img src="https://img.icons8.com/stickers/256/home-page.png" width="28" height="28">
          Dashboard
        </a>
      </li>
      <li>
        <a href="/courses" class="nav-link text-dark">
            <img src="https://img.icons8.com/sf-regular/256/saving-book.png" width="28" height="28">
          Course
        </a>
      </li>
      <li>
        <a href="/subjects" class="nav-link text-dark">
            <img src="https://img.icons8.com/sf-regular/256/module.png" width="28" height="28">
          {{-- <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg> --}}
          Subject
        </a>
      </li>
      <li>
        <a href="/classes" class="nav-link  text-dark">
            <img src="https://img.icons8.com/sf-regular/256/classroom.png" width="28" height="30">
          Class
        </a>
      </li>
      <li>
        <a href="/faculties" class="nav-link  text-dark">            
            <img src="https://tse1.mm.bing.net/th?id=OIP.6wrSYup4pD4KDkFYrjzBjgHaHa&pid=Api&P=0" width="28" height="28">
          Faculty
        </a>
      </li>
      <li>
        <a href="/students" class="nav-link  text-dark">
            <img src="https://img.icons8.com/sf-regular/256/reading-ebook.png" width="30" height="30">
          Student
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center  text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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

