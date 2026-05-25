# Hướng dẫn Sử dụng Dự án: AURA ELITE (Landing Page BDS)

Chào mừng bạn đến với dự án **AURA ELITE**. Đây là một dự án Laravel đặc biệt được tối ưu hóa 100% dành riêng cho **UI/UX, Responsive và Premium Animations (GSAP & Lenis)**. 

Dự án này được thiết kế theo triết lý **tối giản hóa tối đa backend**, **không cơ sở dữ liệu (No-Database)**, và **không cần bước biên dịch Node.js/npm (No-Build System)**. Mọi thứ được vận hành mượt mà nhờ các CDN tốc độ cao và tài nguyên tĩnh được tổ chức khoa học trong thư mục `public/`.

---

## 📖 Mục Lục
1. [Tính Năng Nổi Bật](#-tính-năng-nổi-bật)
2. [Cấu Trúc Thư Mục Dự Án](#-cấu-trúc-thư-mục-dự-án)
3. [Hướng Dẫn Khởi Chạy Dự Án](#-hướng-dẫn-khởi-chạy-dự-án)
4. [Hướng Dẫn Tích Hợp Template Riêng Của Bạn](#-hướng-dẫn-tích-hợp-template-riêng-của-bạn)
5. [Hệ Thống Hoạt Ảnh Premium (Animations)](#-hệ-thống-hoạt-ảnh-premium-animations)
6. [Quản Lý Thiết Kế (CSS & JS)](#-quản-lý-thiết-kế-css--js)

---

## ⚡ Tính Năng Nổi Bật

* **Không cần Database:** Đã cấu hình vô hiệu hóa database (`DB_CONNECTION=null`), dọn dẹp migrations và chuyển Session/Cache sang hệ thống File tĩnh. Chạy nhẹ và cực kì an toàn.
* **Không cần Node.js / npm / Vite:** Toàn bộ CSS, JS và hình ảnh được lưu trữ trực tiếp tại thư mục `public/`. Các thư viện bên ngoài (GSAP, ScrollTrigger, Lenis Smooth Scroll) được liên kết qua **CDN**. Bạn không cần phải chạy `npm install` hay `npm run dev`.
* **Giao Diện Siêu Gộp (Single View Template):** Toàn bộ giao diện HTML, SEO Meta, Google Fonts và liên kết Assets được gom gọn trong một tệp duy nhất: `resources/views/welcome.blade.php` giúp bạn cực kỳ dễ dàng thay đổi sang template riêng của mình.
* **Hiệu Ứng Trải Nghiệm Thượng Lưu:**
  * **Lenis Smooth Scroll:** Trải nghiệm cuộn trang mượt mà chuẩn điện ảnh.
  * **GSAP 3D Tilt & Glow:** Hiệu ứng nghiêng 3D chân thực khi di chuột qua các thẻ dự án kèm theo phản chiếu ánh sáng di chuyển theo con trỏ.
  * **GSAP ScrollTrigger:** Hoạt ảnh tự động kích hoạt khi cuộn màn hình (đếm số tự động tăng dần, trượt chữ, fade-up, preloader...).

---

## 📂 Cấu Trúc Thư Mục Dự Án

Dưới đây là các tệp tin quan trọng mà bạn cần quan tâm khi làm việc với dự án này:

```text
LandingPageBDS/
├── app/
│   └── Providers/
│       └── AppServiceProvider.php
├── public/                     # NƠI CHỨA ASSETS TĨNH (SỬ DỤNG TRỰC TIẾP)
│   ├── css/
│   │   ├── variables.css       # Các biến CSS (Màu sắc, font, độ cong góc...)
│   │   ├── animations.css      # Các keyframe phụ trợ và hiệu ứng hover cơ bản
│   │   └── app.css             # Định dạng stylesheet chính của toàn bộ giao diện
│   └── js/
│       ├── animations/
│       │   ├── scroll.js       # Kịch bản cuộn màn hình (GSAP & ScrollTrigger)
│       │   └── hover.js        # Kịch bản tương tác hover (3D Tilt & Mobile Menu)
│       └── app.js              # Kịch bản khởi chạy & tích hợp Lenis Smooth Scroll
├── resources/
│   └── views/
│       └── welcome.blade.php   # TỆP VIEW GIAO DIỆN DUY NHẤT (Chứa toàn bộ HTML)
├── routes/
│   └── web.php                 # Định tuyến trỏ trực tiếp về view 'welcome'
└── .env                        # File cấu hình môi trường (Đã tắt Database)
```

---

## 🚀 Hướng Dẫn Khởi Chạy Dự Án

Để khởi chạy dự án này trên máy tính của bạn, hãy thực hiện theo các bước cực kỳ đơn giản sau:

### Yêu Cầu Hệ Thống
* Máy tính đã cài đặt **PHP** (Khuyến nghị PHP 8.2 trở lên).

### Các Bước Thực Hiện
1. Mở terminal (PowerShell hoặc Command Prompt) tại thư mục dự án `C:\ThucTap\LandingPageBDS`.
2. Khởi chạy máy chủ ảo tích hợp của Laravel bằng cách chạy lệnh sau:
   ```bash
   php artisan serve
   ```
3. Mở trình duyệt web của bạn và truy cập vào địa chỉ:
   ```text
   http://127.0.0.1:8000
   ```
   🎉 **Trang web đã sẵn sàng hoạt động với đầy đủ các hoạt ảnh!**

---

## 🛠 Hướng Dẫn Tích Hợp Template Riêng Của Bạn

Nếu bạn muốn thay đổi giao diện mặc định bằng template riêng của mình, bạn chỉ cần thực hiện chỉnh sửa tại duy nhất một file:

> [!TIP]
> Đường dẫn tệp giao diện: `resources/views/welcome.blade.php`

### Cách thực hiện:
1. Mở file [welcome.blade.php](file:///C:/ThucTap/LandingPageBDS/resources/views/welcome.blade.php) lên bằng trình soạn thảo mã nguồn của bạn (VS Code, Sublime Text...).
2. Giữ lại phần thẻ `<head>` chứa các đường dẫn tải CDN và Assets (như CSS, JS).
3. Tìm phần thẻ `<body>`, xóa phần nội dung hiện tại và dán mã HTML template riêng của bạn vào.
4. Để tận dụng các tính năng chuyển động có sẵn của chúng tôi, bạn có thể tham khảo phần dưới đây.

---

## ✨ Hệ Thống Hoạt Ảnh Premium (Animations)

Dự án đã tích hợp sẵn hệ thống hoạt ảnh mạnh mẽ mà bạn có thể áp dụng ngay cho template mới của mình bằng cách sử dụng các Class CSS đặc biệt:

### 1. Hiệu Ứng Cuộn Màn Hình Tới Đâu Hiện Tới Đó (GSAP ScrollTrigger)
Để một phần tử tự động xuất hiện sinh động khi người dùng cuộn trang tới, hãy bọc phần tử đó trong một Section có Class `scroll-anim-trigger`, và thêm class `animate-on-scroll` vào phần tử mong muốn:

* **Trượt từ dưới lên:**
  ```html
  <div class="animate-on-scroll">Nội dung của bạn</div>
  ```
* **Trượt từ bên trái sang:**
  ```html
  <div class="animate-on-scroll slide-right">Nội dung trượt từ trái qua phải</div>
  ```
* **Trượt từ bên phải sang:**
  ```html
  <div class="animate-on-scroll slide-left">Nội dung trượt từ phải qua trái</div>
  ```

### 2. Hiệu Ứng Số Chạy Tự Động (Auto Counter)
Khi cuộn màn hình đến phần thông số kỹ thuật, bạn muốn các con số chạy tăng dần từ `0` đến giá trị mong muốn (ví dụ: `100%`, `05 Phút`):
```html
<span class="highlight-num">100%</span>
<span class="highlight-num">05</span>
```
*Hệ thống JS sẽ tự động phát hiện số trong thẻ có class `highlight-num` và tạo hiệu ứng đếm số tăng dần.*

### 3. Hiệu Ứng Nghiêng 3D & Phản Chiếu Ánh Sáng (3D Tilt & Glow)
Để tạo hiệu ứng thẻ kính (Glassmorphic) nghiêng theo góc nhìn của chuột cực kỳ cao cấp:
```html
<div class="glass-card aura-spec-card">
    <div class="card-glow"></div> <!-- Vùng sáng phản chiếu chạy theo chuột -->
    <div class="card-inner">
        <!-- Nội dung thẻ của bạn -->
    </div>
</div>
```
Hoặc đối với các thẻ card sản phẩm thông thường:
```html
<div class="project-card">
    <!-- Nội dung thẻ của bạn -->
</div>
```
*Các class `aura-spec-card` và `project-card` đã được cấu hình toán học 3D trong JS để tự nghiêng góc và dịch chuyển vùng sáng lung linh khi bạn rê chuột qua.*

---

## 🎨 Quản Lý Thiết Kế (CSS & JS)

Nếu bạn muốn tùy chỉnh sâu về phong cách thiết kế, hãy chú ý các tệp sau trong thư mục `public/`:

* **[public/css/variables.css](file:///C:/ThucTap/LandingPageBDS/public/css/variables.css):** Quản lý hệ màu sắc. Bạn có thể dễ dàng thay đổi màu sắc chủ đạo của dự án (ví dụ: đổi tone màu vàng kim sang tone màu xanh ngọc bích) bằng cách sửa mã màu tại biến `--primary-color`.
* **[public/css/app.css](file:///C:/ThucTap/LandingPageBDS/public/css/app.css):** Chứa định dạng CSS của toàn bộ giao diện. Được viết bằng Vanilla CSS sạch sẽ, dễ bảo trì.
* **[public/js/animations/scroll.js](file:///C:/ThucTap/LandingPageBDS/public/js/animations/scroll.js):** Nơi bạn có thể viết thêm các dòng timeline chuyển động ScrollTrigger mới bằng GSAP.

---

> [!NOTE]
> Mọi thắc mắc hoặc cần tùy biến sâu hơn về hiệu ứng chuyển động 3D, hãy liên hệ nhà phát triển để được trợ giúp! Chúc bạn tạo nên một Landing Page Bất động sản đỉnh cao!
