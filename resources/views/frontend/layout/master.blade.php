<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Cửa hàng bán Apple chính hãng hàng đầu tại Việt Nam</title>

  <!-- BOOTSTRAP CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#" style="color:#712cf9">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94"
          role="img">
          <title>TopApple</title>
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
            fill="currentColor"></path>
        </svg>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">iPhone</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">iPad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mac</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Watch</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Âm thanh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Phụ kiện</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LewsZone</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">TopCare</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Tài khoản
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
              <li><a class="dropdown-item" href="#">Đăng kí</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Tên sản phẩm cần tìm" aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-search" viewBox="0 0 16 16">
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
          </button>
        </form>

        <a href="#" class="ms-3" style="color: rgba(0, 0, 0, 0.55)">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
            class="bi bi-handbag" viewBox="0 0 16 16">
            <path
              d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2zm3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6h4z" />
          </svg>
        </a>
      </div>
    </div>
  </nav>
  @yield('content')


  <footer>
    <div class="container">
      <div class="row">
        <div class="col">
          <h6>
            Tổng đài
          </h6>

          <ul>
            <li>
              <a href="">Mua hàng: 1900.9696.42 (7:30 - 22:00)</a>
            </li>

            <li>
              <a href=""> CSKH: 1900.9868.43 (8:00 - 21:30)</a>
            </li>

            <li>
              <a href="">Kỹ thuật: 1900.8668.54 (7:30 - 22:00)</a>
            </li>
          </ul>

          <h6>Kết nối với chúng tôi</h6>

        </div>
        <div class="col">
          <h6>Hệ thống cửa hàng</h6>
          <ul>
            <li>
              <a href="/he-thong-cua-hang">
                Xem 100 cửa hàng
              </a>
            </li>
            <li>
              <a href="/noi-quy-cua-hang">
                Nội quy cửa hàng
              </a>
            </li>
            <li>
              <a href="/chat-luong-phuc-vu">
                Chất lượng phục vụ
              </a>
            </li>
            <li>
              <a href="/bao-hanh-doi-tra">
                Chính sách bảo hành &amp; đổi trả
              </a>
            </li>
          </ul>
        </div>

        <div class="col">
          <h6>Hỗ trợ khách hàng</h6>

          <ul>
            <li>
              <a href="/dieu-kien-giao-dich">
                Điều kiện giao dịch chung
              </a>
            </li>

            <li>
              <a href="/huong-dan-mua-hang">
                Hướng dẫn mua hàng online
              </a>
            </li>

            <li>
              <a href="/giao-hang">
                Chính sách giao hàng
              </a>
            </li>

            <li>
              <a href="/thanh-toan">
                Hướng dẫn thanh toán
              </a>
            </li>
          </ul>
        </div>

        <div class="col">
          <h6>Về thương hiệu TopAppe</h6>
          <ul>
            <li>
              <a href="/tekzone/tat-tan-tat-thong-tin-ve-app-tich-diem-hoan-toan-moi-1480642#gioithieu"
                class="color-link">
                Tích điểm Quà tặng VIP
              </a>
            </li>

            <li>
              <a href="/gioi-thieu">
                Giới thiệu TopZone
              </a>
            </li>

            <li>
              <a href="https://www.thegioididong.com/b2b">
                Bán hàng doanh nghiệp
              </a>
            </li>

            <li>
              <a href="/bao-mat-thong-tin">
                Chính sách bảo mật thông tin
              </a>
            </li>

            <li><a rel="nofollow" href="https://www.topzone.vn/?sclient=mobile">Xem bản mobile</a></li>
          </ul>
        </div>

        <div class="col">
          <h6>Trung tâm bảo hành TopCare</h6>

          <ul>
            <li>
              <a href="#">Giới thiệu TopCare</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- BOOTSTRAP JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
